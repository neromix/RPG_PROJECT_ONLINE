<?php declare(strict_types = 1);

    use App;

    class UserManager
    {
        protected $username;
        protected $password;
        protected $email;
        protected $DBDependency;

        public function __construct($dependency,$username,$password,$email)
        {
            $this->setDependency($dependency);
            $this->setUsername($username);
            $this->setPassword($password);
            $this->setEmail($email);
        }

        public function createUser()
        {
        }
        // GETTERS
        public function getUsername()
        {
            return $this -> username;
        }
        public function getPassword()
        {
            return $this -> password;
        }
        public function getEmail()
        {
            return $this -> email;
        }
        public function getDependency()
        {
            return $this->DBDependency -> getDb;
        }
        //SETTERS
        public function setUsername($username)
        {
            $this->username = $username;
        }
        public function setPassword($password)
        {
            $this->password = $password;
        }
        public function setEmail($email)
        {
            $this->email = $email;
        }
        public function setDependency($dependency)
        {
            $this->DBDependency = $dependency;
        }

    }