<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{

    private $name = 'John Doe';
    private $email = 'john.doe@example.com';
    private $password = 'secretpassword';

    // Test para comprobar el constructor y getters de la clase User
    public function testConstructorAndGetters()
    {
        $user = new User($this->name, $this->email, $this->password);

        $this->assertEquals($this->name, $user->getName());
        $this->assertEquals($this->email, $user->getEmail());
        $this->assertEquals($this->password, $user->getPassword());
    }

    // Test para comprobar el setter de nombre de usuario
    public function testSetterNameUser()
    {
        $user = new User($this->name, $this->email, $this->password);
        // Cambiar el nombre del usuario
        $user->setName('Jane Doe');

        $this->assertEquals('Jane Doe', $user->getName());
    }

    // Test para comprobar el setter de correo electronico de usuario
    public function testSetterEmailUser()
    {
        $user = new User($this->name, $this->email, $this->password);

        $new_email = 'jessica.doe@example.com';

        $user->setEmail($new_email);

        $this->assertEquals($new_email, $user->getEmail());
    }

    // Test para comprobar el setter de contraseña de usuario
    public function testSetterPasswordUser()
    {
        $user = new User($this->name, $this->email, $this->password);

        $new_password = 'holamundo123*';

        $user->setPassword($new_password);

        $this->assertEquals($new_password, $user->getPassword());
    }

    public function testInstanceUserWhenIsNull() {
        $this->expectException(InvalidArgumentException::class);
        new User(NULL, NULL, NULL);        
    }

    // Test para guardar usurio en el metodo save de la clase UserRepository
    public function testSaveUserRepository() {

        $user = new User($this->name, $this->email, $this->password);

        $users = new UserRepository();

        $this->assertEquals(array( $user ), $users->save($user));
    }
    // Aquí podrías agregar más métodos de prueba para otros métodos de la clase User
}
