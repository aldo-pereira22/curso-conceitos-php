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
    }

    interface UserDaoInterface {
        
        public function builderUser($data);
        public function create(User $user, $authUser = false);
        public function update(User $user);
        public function findByToken($token);
        public function verifyToken($protected = false);
        public function setTokenToSession($token, $redirect = true);
        public function authenticateUser($email, $password);
        public function findByEmail($email);
        public function findy($id);
        public function changePassword(User $User);

    }
?>