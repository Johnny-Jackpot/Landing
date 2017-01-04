<?php

class AdminController {       
    /**
     * Render and processing admin login
     * @return boolean
     */
    public function actionLogin() {
        $email = '';
        $password = '';
        
        if (isset($_POST['email']) && isset($_POST['password'])) {
            $email = $_POST['email'];
            $password = $_POST['password'];
            
            $errors = false;
            
            $userId = Admin::checkAdminData($email, $password);
            
            if ($userId === false) {
                $errors = 'Invalid data';
            } else {
                self::auth($userId);
                header("Location: /admin");
            }
        }
        
        require_once(ROOT . '/views/admin/login.php');
        
        return true;
    }

    private static function auth($userId){
        $_SESSION['user'] = $userId;
    }
    
    /**
     * Logout admin
     */
    public function actionLogout() {
        unset($_SESSION['user']);
        header("Location: /");
    }
    

    /**
     * Check whether admin is logged in
     * @return string
     */
    private static function checkLogged() {
        if (isset($_SESSION['user']) && !empty($_SESSION['user'])) {
            return $_SESSION['user'];
        } else {
            return false;
        }
    }
    
    /**
     * Check whether user is admin
     * @return boolean
     */
    private static function checkAdmin() {
        //if admin doesn`t loggen in,
        //redirect to login page
        $adminId = self::checkLogged();
        if (!$adminId) {
            header("Location: /admin/login");
        }
        
        $admin = Admin::getAdmin($adminId);
        
        if ($admin['role'] === 'admin') {
            return true;
        }
        
        exit('Access denied');
    }
    /**
     * Check whether XHR is allowed
     * @return boolean
     */
    private static function checkXHR() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
            return false;
        }
        
        $adminId = self::checkLogged();
        if (!$adminId) {
            return false;
        }
        
        $admin = Admin::getAdmin($adminId);
        if ($admin['role'] === 'admin') {
            return true;
        }
        
        return false;
    }

    /**
     * Render main admin panel
     * @return boolean
     */
    public function actionIndex() {
        self::checkAdmin();
        $orders = Orders::getAllOrders();
        require_once(ROOT . '/views/admin/index.php');
        return true;
    }
    
    public function actionChangeOrderStatus(){
        $allowXHR = self::checkXHR();
        if (!$allowXHR) {
            http_response_code(403); //Forbidden
        }

        if (!isset($_POST['orderId']) || empty($_POST['orderId'])) {
            http_response_code(400); //Bad Request
        }

        if (!isset($_POST['status']) || empty($_POST['status'])) {
            http_response_code(400); //Bad Request
        }

        $orderId = intval($_POST['orderId']);
        $status = intval($_POST['status']);
        if (!$orderId || !$status) {
            http_response_code(400);//Bad Request
        }

        $success = Orders::updateOrderStatus($orderId, $status);
        if ($success) {
            http_response_code(200); //OK
        } else {
            http_response_code(500); //Internal Server Error
        }

        return true;
    }
}