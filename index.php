<?php

    class Person{
        public $name;
        protected $age;
        private $password;

        public function __construct($username, $userage, $userpassword){
            $this->name = $username;
            $this->age = $userage;
            $this->password = $userpassword;
        }
        public function getPassword(){
            return $this->password;
        }
    }

    class Employee extends Person{
       public function getName(){
        return $this->name;
       }
       public function getAge(){
        return $this->age;
       }
       
    }

    $employee = new Employee("Muntasir Pranto", 22, "Lala45");
    $description = "Our Honourable teacher is " . $employee->getName() . ".<br> He is Our Instructor. <br>" . " He is about " . $employee->getAge() . " Years Old. <br>" . "His security keys are: " . $employee->getPassword();

    echo $description;

?>