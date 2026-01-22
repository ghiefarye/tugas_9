<?php
class User {
    public $username;

    public function setUsername($username) {
        $this->username = $username;
    }

    public function getUsername() {
        return "Username Anda: " . $this->username;
    }
}

$user1 = new User();
$user1->setUsername("gemini_user"); 
echo $user1->getUsername();         
?>