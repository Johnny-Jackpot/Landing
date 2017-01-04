<?php

class SiteController {
    /**
     * Render main page
     * @return boolean
     */
    public function actionIndex() {
        require_once(ROOT . '/views/site/index.php');
        return true;
    }
    private function checkXHR() {
        if ($_SERVER['REQUEST_METHOD'] !== 'POST' || empty($_POST)) {
            return false;
        } else {
            return true;
        }
    }
    private function sanitizeUser() {
        $filters = [
            'name' => FILTER_SANITIZE_STRING,
            'email' => FILTER_SANITIZE_EMAIL,
            'phone' => FILTER_SANITIZE_STRING
        ];
        return filter_input_array(INPUT_POST, $filters);
    }
    private function validateUser($user) {
        if (!filter_var($user['email'], FILTER_VALIDATE_EMAIL)) {
            return false;
        }
        if (!preg_match("/\d{10}/", $user['phone'])) {
            return false;
        }
        if (!isset($user['name']) || empty($user['name'])) {
            return false;
        }

        return true;
    }
    public function actionMakeOrder() {
        if (!$this->checkXHR()) {
            http_response_code(400);
            return true;
        }
        
        $client = $this->sanitizeUser();
        if (!$this->validateUser($client)) {
            http_response_code(400);
            return true;
        }
        
        Clients::addClient($client);
        $clientId = Clients::getClient($client)['id'];
        if (!$clientId) {
            http_response_code(500);
            return true;
        }
        $order = Orders::addOrder($clientId);
        if (!$order) {
            http_response_code(500);
            return true;
        }

        http_response_code(200);
        return true;
    }

    
}

