<?php


// User.php (Modelo)

class User
{
    private $id;
    private $username;
    private $password;
    private $email;
    private $name;

    public function __construct($username, $password, $email, $name)
    {
        $this->username = $username;
        $this->password = $password;
        $this->email = $email;
        $this->name = $name;
    }

    // Métodos para obtener y establecer valores de las propiedades

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

   
}
