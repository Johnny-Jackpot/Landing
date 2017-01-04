<?php

class Clients {
    public static function addClient(array $client) {
        $db = DB::getConnection();
        $sql = <<<SQL
            INSERT INTO clients (name, email, phone)
            VALUES (:name, :email, :phone);
SQL;
        $result = $db->prepare($sql);
        $result->bindParam(':name', $client['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $client['email'], PDO::PARAM_STR);
        $result->bindParam(':phone', $client['phone'], PDO::PARAM_STR);

        return $result->execute();
        
    }

    public static function getClient(array $client) {
        $db = DB::getConnection();
        $sql = 'SELECT * FROM clients WHERE name = :name AND email = :email AND phone = :phone;';
        $result = $db->prepare($sql);
        $result->bindParam(':name', $client['name'], PDO::PARAM_STR);
        $result->bindParam(':email', $client['email'], PDO::PARAM_STR);
        $result->bindParam(':phone', $client['phone'], PDO::PARAM_STR);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();

        return $result->fetch();        
    }

}
