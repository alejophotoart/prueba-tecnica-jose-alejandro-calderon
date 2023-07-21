<?php

// Incluye el archivo con la definición de la clase User
require_once __DIR__ . '/../app/Models/User.php';
require_once __DIR__ . '/../app/Models/UserRepository.php';

// Crea un nuevo objeto User
$user = new User('John Doe', 'john.doe@example.com', 'secretpassword');

// Imprime la información del usuario
echo 'Nombre: ' . $user->getName() . '<br>';
echo 'Correo electrónico: ' . $user->getEmail() . '<br>';
?>

<?php
// Instacia de repositorio de usuarios
$users = new UserRepository();

//Se llama al primer metodo de guardar usuario
$users->save($user);

//Se imprime el array donde se almacenan los usuarios
$getUsers = $users->getAll();
print_r($getUsers);

//Se setea un datos simulando una actualizacion
$user->setPassword('Holamundo123');
//Se llama al metodo para que actualize el usuario
$users->update( $user );

//Se imprime el array donde se almacenan los usuarios
$getUsers = $users->getAll();
print_r($getUsers);

// Se llama la clase delete para eliminar al usuario del repositorio
$users->delete( $user );

// //Se imprime el array donde se almacenan los usuarios
$getUsers = $users->getAll();
print_r($getUsers);
?>