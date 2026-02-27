<?php

class User
{
  public $name;
  public $email;
  protected $status = 'active';

  public function __construct($name, $email)
  {
    $this->name = $name;
    $this->email = $email;
  }

  public function login()
  {
    echo $this->name . ' logged in <br>';
  }
}

class Admin extends User
{
  public $level; // permission value 1-5

  public function __construct($name, $email, $level)
  {
    parent::__construct($name, $email);
    $this->level = $level;
  }

  public function getStatus()
  {
    return $this->status;
  } 

  public function login()
  {
    echo '[ADMIN] ' . $this->name . ' logged in <br>';
  }
}

$admin1 = new Admin('John Doe', 'john@gmail.com', 5);

$admin1->login();  

echo $admin1->getStatus();

// var_dump($admin1);