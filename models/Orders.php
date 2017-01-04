<?php

class Orders{
    public static function getAllOrders() {
        $db = DB::getConnection();
        /* 
        **  status:
        **      1 - payed
        **      2 - active
        **      3 - cancelled
        */
        $sql = <<<SQL
            SELECT 
                orders.id AS 'order_id',
                clients.name AS 'client', 
                clients.email AS 'e-mail', 
                clients.phone AS 'phone',
                orders.date AS 'date',
                orders.status AS 'status'
            FROM 
                clients
            INNER JOIN 
                orders
            ON 
                clients.id = orders.client_id;
SQL;
        $result = $db->prepare($sql);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        return $result->fetchAll();
    }

    public static function updateOrderStatus($orderId, $status) {
        $db = DB::getConnection();
        $sql = 'UPDATE orders SET status = :status WHERE id = :id';
        $result = $db->prepare($sql);
        $result->bindParam(':status', $status, PDO::PARAM_INT);
        $result->bindParam(':id', $orderId, PDO::PARAM_INT);
        
        return $result->execute();
    }
    public static function addOrder($clientId) {
        $db = DB::getConnection();
        $sql = 'INSERT INTO orders(status, client_id) VALUES(2, :clientId)';
        $result = $db->prepare($sql);
        $result->bindParam(':clientId', $clientId, PDO::PARAM_INT);
        
        return $result->execute();
    }
}