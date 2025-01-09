<?php
// session_start();
require __DIR__ . "/../models/User.php";


class UserController {
    private $userModel;

    public function __construct() {
        $this->userModel = new User();
    }
    
    public function addUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["register"])) {
            $fName = htmlspecialchars(trim($_POST["signup_fName"]));
            $lName = htmlspecialchars(trim($_POST["signup_lName"]));
            $username = htmlspecialchars(trim($_POST["signup_username"]));
            $email = htmlspecialchars(trim($_POST["signup_email"]));
            $password = htmlspecialchars(trim($_POST["signup_password"]));
    
            if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                return;
            }
            $checkRegister = $this->userModel->register($fName, $lName, $username, $password, $email);
    
            if ($checkRegister) {
                header("location: ../views/front/loged.php");
                exit();
            } else {
                echo "Failed to register. Please try again.";
            }
        }
    }

    public function loginUser() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["login"])) {
            $userIdentifier = $_POST["login_identifier"];
            $password = $_POST["login_password"];
            // echo $userIdentifier;
            // echo "<br>";
            // echo $password;
            $checkLogin = $this->userModel->login($userIdentifier, $password);
          
    
            if ($checkLogin) {
                $userRole = ($checkLogin["id"] == 1) ? "admin" : $checkLogin["role"];
                session_start();
                $_SESSION["user"] = [
                    "userId" => $checkLogin["id"],
                    "fullName" => $checkLogin["firstName"] . " " . $checkLogin["lastName"],
                    "userPic" => $checkLogin["picture"],
                    "email" => $checkLogin["email"],
                    "username" => $checkLogin["userName"],
                    "role" => $userRole
                ];
                if ($checkLogin["role"] == "admin") {
                    header("Location: ../views/admin/dashboard.php");
                    exit;
                } else {
                    header("Location: ../views/front/index.php");
                    exit;
                }
            } else {
                echo 'failed';
            }
        }
    }

    public function displayAllUsers() {
        return $this->userModel->getAllUsers();
    }

    public function deleteUser() {
        if (isset($_GET["action"]) && $_GET["action"] == "deleteUser") {
            $uId = $_GET["userId"];
            $this->userModel->deleteUser($uId);
        }
    }
    
  
}

$user = new UserController();
$user->addUser();
$user->loginUser();
$user->deleteUser();
$users = $user->displayAllUsers();