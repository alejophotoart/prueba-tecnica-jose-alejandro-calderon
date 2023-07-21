<?php

class User
{
    private $name;
    private $email;
    private $password;
    private $id;

    // Constructor para inicializar un objeto User con nombre, correo y contraseña
    public function __construct($name, $email, $password)
    {
        if ($name == NULL || $email == NULL || $password == NULL) throw new InvalidArgumentException('Valores en null no permitidos');
    
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    // Métodos para acceder y modificar los atributos
    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }

    public function setId( $id ) {
        $this->id = $id;
    }

    public function getId() {
        return $this->id;
    }
}

?>