<?php

    require_once __DIR__."../../config/Banco.php";
    require_once("User.php");

    class UserDAO{
        private static $instance;

        public static function getInstance(){
            if(self::$instance === null){
                self::$instance = new self();
            }
            return self::$instance;
        }

        public function save(User $user){
            
            $stm = Banco::getInstance()->prepare("
                INSERT INTO user(name, email, password, userType, numberRecord) 
                VALUES (:name, :email, :password, :userType, :numberRecord)
            ");

            $stm->bindParam('name', $user->name);
            $stm->bindParam('email', $user->email);
            $stm->bindParam('password', $user->password);
            $stm->bindParam('userType', $user->userType);
            $stm->bindParam('numberRecord', $user->numberRecord);

            $stm->execute();
        }

        public function findbyemail($email) {

            $user = Banco::getInstance()->query("
                SELECT id, name, email, password, userType 
                FROM user 
                WHERE email = \"$email\"", PDO::FETCH_OBJ
            );

            $user->execute();
            
            return $user->fetch();
        }

        public function findProvider() {

            $stmt = Banco::getInstance()->query("
                SELECT id, name, email, numberRecord
                FROM user
                WHERE userType = 2", 
            );

            $stmt->execute();
            
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

    }

?>