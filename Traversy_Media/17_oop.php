<?php
  
  class User {
    //Properties are attributes that belong to a class.
    public $name;
    public $email;
    public $password;
    
    //A constructor is a method that runs when an object is created.
    public function __construct($name, $email, $password) {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
    //A method is a function that belongs to a class.
    function set_name($name) {
      $this->name = $name;
    }

    function get_name() {
        return $this->name;
    }
  }

  //Instantiate a user object
  $user1 = new User('Brad', 'brad@gmail.com', 'password1');
  $user2 = new User('John', 'john@gmail.com', 'password2');

  echo $user1->name;
  echo '<br>';
  echo $user2->email;

  //Inheritance
  class Employee extends User {
    public $title;
    public function __construct($name, $email, $password, $title) {
      parent::__construct($name,$email,$password);
      $this->title = $title;
    }

    public function get_title() {
        return $this->title;
    }
  }

  $employee1 = new Employee('Sarah', 'sarah@gmail.com', 'password1', 'Manager');
  echo $employee1->get_title();