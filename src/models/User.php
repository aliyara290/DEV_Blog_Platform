<?php 

require __DIR__  . "/../core/Crud.php";

class User {
    public function register($firstName, $lastName, $username, $password, $email, $role = "author") {
        try {
            $hashPassword = password_hash($password, PASSWORD_BCRYPT);
            $data = [
                "firstName" => $firstName,
                "lastName" => $lastName,
                "username" => $username,
                "passwordHash" => $hashPassword,
                "email" => $email,
                "role" => $role
            ];
            $result = Crud::create("users", $data);
            return $result;
        } catch (Exception $error) {
            echo "the error is: " . $error->getMessage();
            return false;
        }
    }

    public function login($value, $password) {
        $users = Crud::readByCondition('users', 'email', $value);
        if (empty($users)) {
            $users = Crud::readByCondition('users', 'username', $value);
        }
        if (!empty($users)) {
            $user = $users[0];
            if (password_verify($password, $user['passwordHash'])) {
                return $user;
            }
        }
        return false;
    }

    public function getAllUsers() {
        return Crud::readAll("users");
    }

    public function deleteUser($id) {
        Crud::delete("users", "id", $id);
    }
    
}