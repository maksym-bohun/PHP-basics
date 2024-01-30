<?php

class User{
    // Properties
    public $name;
    public $email;

    public function __construct($name, $email)
    {
        echo '</br>Constructor ran... </br>';
        $this->$name = $name;
        $this->email = $email;
    }

    // Methods
    public function login(){
        echo 'The user logged in';
    }
}

// Instantiate a new object

$user1 = new User('Maks Bohun', 'maks@gmail.com');


$user1->login();


$user2 = new User('Dan Bohun', 'dan@gmail.com');
// $user2->name = 'Dan Bohun';
// $user2->email = 'dan@gmail.com';


// echo '<pre>';
// var_dump($user1);

