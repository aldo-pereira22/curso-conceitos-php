<?php

    class User {

        public $id;
        public $name;
        public $lastname;
        public $email;
        public $password;
        public $imagem;
        public $bio;
        public $token;
        
        public function generateToken(){
            return bin2hex(random_bytes(50));
        }

        public function generatePassword($password){
            return password_hash($password, PASSWORD_DEFAULT);
        }
    }

    interface UserDaoInterface {
        
        public function builderUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function findByToken($token);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email, $password);
        public function destroyToken();
        public function findByEmail($email);
        public function findy($id);
        public function changePassword(User $User);

    }
?>