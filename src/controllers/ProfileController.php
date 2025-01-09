<?php
session_start();
require __DIR__ . "/../models/Profile.php";


class ProfileController {
    private $profileModel;

    public function __construct() {
        $this->profileModel = new Profile();
    }

    public function displayUserPortfolio() {
        $userId = $_SESSION["user"]["userId"];
        return $this->profileModel->showUserProfile($userId);
       
    }

    public function updataProfileData() {
        if($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["user__username"])) {
            $id = $_SESSION["user"]["userId"];
            $firstName = htmlspecialchars(trim($_POST["user__firstname"]));
            $lastName = htmlspecialchars(trim($_POST["user__lastname"]));
            $bio = htmlspecialchars(trim($_POST["user__bio"]));
            $website = htmlspecialchars(trim($_POST["user__website"]));
            $work = htmlspecialchars(trim($_POST["user__work"]));
            $username = htmlspecialchars(trim($_POST["user__username"]));
            $email = htmlspecialchars(trim($_POST["user__email"]));

            $picture = $_POST["userPicture"];
            $pic = "userPicture";
            if (isset($_FILES[$pic])) {
                $uploadDir = "../../uploads/";
                $fileName = uniqid();
                $filePath = $uploadDir . $fileName;
            
                if (move_uploaded_file($_FILES[$pic]['tmp_name'], $filePath)) {
                    $picture = $filePath;
                    echo "File successfully uploaded to: " . $picture;
                }
            } 

            $result = $this->profileModel->updateUserProfile($id, $firstName, $lastName, $username, $email, $picture, $bio, $website, $work);
            if($result) {
                header("location: /DEV.io/src/views/front/profile/user.php");
                exit();
            }
        }
    }
    
    public function displayUserArticles() {
        $userId = $_SESSION["user"]["userId"];
        return $this->profileModel->showUserArticles($userId);
    }

    public function deleteArticle()
    {
        if (isset($_GET["action"]) && isset($_GET["action"]) == "deleteArticle") {
            echo "hey";
            $articleId = $_GET["articleId"];
            $this->profileModel->deleteArticle($articleId);
        } 

    }
}

$user = new ProfileController();
$user->deleteArticle();
$user->updataProfileData();

$portfolio = $user->displayUserPortfolio();
$articles = $user->displayUserArticles();
// var_dump($portfolio);
// echo "<br>";
// print_r($articles);  