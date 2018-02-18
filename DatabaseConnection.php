<?php

class DatabaseConnection
{
    /** @var string */
    private $server = 'localhost';

    /** @var string */
    private $username ='root';

    /** @var string */
    private $password ='';

    /** @var string */
    private $db = 'nfq';

    /** @var PDO */
    public $connection;

    public function __construct()
    {
        $this->getPdoConnection();
    }

    /**
     * @return array
     */
    public function getService()
    {
        $state = $this->connection->query('SELECT * FROM services');
        return $state->fetch();
    }

    /**
     * @param $order
     * @return bool
     */
    public function saveOrder($order)
    {
        $sql =$this->connection->prepare(
            ' INSERT INTO orders 
            (name,last_name,email,tel_number,address,city,post_code,country,order_date,status_id,service_id) 
            VALUES (?,?,?,?,?,?,?,?,?,?,?)'
        );
        $date= date('Y-m-d');
        $statusId = 1;
        $sql->bindParam(1, $order['name']);
        $sql->bindParam(2, $order['surname']);
        $sql->bindParam(3, $order['email']);
        $sql->bindParam(4, $order['phone']);
        $sql->bindParam(5, $order['address']);
        $sql->bindParam(6, $order['city']);
        $sql->bindParam(7, $order['post_code']);
        $sql->bindParam(8, $order['country']);
        $sql->bindParam(9,$date);
        $sql->bindParam(10,$statusId);
        $sql->bindParam(11,$order['service_id']);

        return $sql->execute();
    }

    public function getOrders()
    {
        $state = $this->connection->query(
            'SELECT services.name AS serviceName, orders.*, statuses.name AS statusName
             FROM orders
            JOIN services ON orders.service_id=services.id
            JOIN statuses ON orders.status_id=statuses.id ORDER BY orders.id DESC;');

        return $state->fetchAll();
    }

    /**
     * @param int $id
     * @return array
     */
    public function getOrder(int $id)
    {
        $state = $this->connection->prepare(
            'SELECT services.name as serviceName, orders.*, statuses.name as statusName
            FROM orders 
            JOIN services ON orders.service_id=services.id
            JOIN statuses ON orders.status_id=statuses.id
            WHERE orders.id = ?');
        $state->bindParam(1, $id);
        $state->execute();

        return $state->fetch();
    }

    public function getStatuses(){
        $state = $this->connection->query('SELECT * FROM statuses');

        return $state->fetchAll();
    }

    public function saveNewStatusForOrder($status, $id){
        $state = $this->connection->prepare('UPDATE orders SET status_id = ? WHERE id = ?');
        $state->bindParam(1, $status);
        $state->bindParam(2, $id);
        $state->execute();
    }

    private function getPdoConnection(): void
    {
        try{
            $this->connection = new PDO("mysql:dbname=$this->db;host=$this->server;charset=utf8;",$this->username, $this->password);
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOexception $e){
            echo $e->getMessage();
            die();
        }
    }
}