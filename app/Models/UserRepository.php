<?php

class UserRepository
{
    // Array para almacenar los usuarios (simulación del repositorio)
    private $users = [];

    // Método para guardar un nuevo usuario en el repositorio
    public function save(User $user)
    {
        // Asignar un ID único al usuario (simulación)
        $user->setId(count($this->users) + 1);

        // Agregar el usuario al array
        array_push($this->users, $user);

        return $this->users;
    }

    // Método para actualizar un usuario existente en el repositorio
    public function update(User $user)
    {
        foreach ($this->users as $key => $existingUser) {
            if ($existingUser->getId() === $user->getId()) {
                // Actualizar los datos del usuario en el repositorio
                $this->users[$key] = $user;
                return true;
            }
        }

        return false; // Usuario no encontrado
    }

    // Método para eliminar un usuario del repositorio
    public function delete(User $user)
    {
        foreach ($this->users as $key => $existingUser) {
            if ($existingUser->getId() === $user->getId()) {
                // Eliminar el usuario del repositorio
                unset($this->users[$key]);
                return true;
            }
        }

        return false; // Usuario no encontrado
    }

    // Método para obtener todos los usuarios del repositorio
    public function getAll()
    {
        return $this->users;
    }

    // Método para obtener un usuario por su ID
    public function getById($id)
    {
        foreach ($this->users as $user) {
            if ($user->getId() === $id) {
                return $user;
            }
        }

        return null; // Usuario no encontrado
    }
}

?>