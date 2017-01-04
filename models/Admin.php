<?php 
/**
 * Checking access permissions
 */
class Admin {
    /**
     * Return admin data
     * @param string $id
     * @return array or false
     */
    public static function getAdmin($id) {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE id = :id';
        
        $result = $db->prepare($sql);
        $result->bindParam(':id', $id, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        return $result->fetch();
    }
    
    public static function checkAdminData($email, $password) {
        $db = Db::getConnection();
        $sql = 'SELECT * FROM user WHERE email = :email';
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->setFetchMode(PDO::FETCH_ASSOC);
        $result->execute();
        
        $user = $result->fetch();
        if ($user && password_verify($password, $user['hash'])) {
            return $user['id'];
        }
        
        return false;
    }
}

