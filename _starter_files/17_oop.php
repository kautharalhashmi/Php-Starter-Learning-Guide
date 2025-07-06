<?php
// =====================================
//  joonguini and joe
// =====================================
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User {
  // Properties are attributes that belong to a class.

  // Access Modifiers: public, private, protected
  // public - can be accessed from anywhere
  // private - can only be accessed from inside the class
  // protected - can only be accessed from inside the class and by inheriting classes

  public $name;
  public $email;
  public $password;

  // A constructor is a method that runs when an object is created
  public function __construct($name, $email, $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }

  // Method is a function that belongs to a class
  function set_name($name) {
    $this->name = $name;
  }

  function get_name() {
    return $this->name;
  }
}

// Instatiate a user object
$user1 = new User('joe', 'joe@gmail.com', '123456');
$user2 = new User('John', 'john@gmail.com', '654321');

// echo $user1->email;
// echo $user2->name;

// Inheritance

class Employee extends User {
  public $title;

  public function __construct($name, $email, $password, $title) {
    parent::__construct($name, $email, $password);
    $this->title = $title;
  }

  public function get_title() {
    return $this->title;
  }
}

$employee1 = new Employee('Sara', 'sara@gmail.com', '123456', 'Manager');

echo $employee1->get_title();
?>