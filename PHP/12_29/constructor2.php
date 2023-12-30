<?php
class Twita {
    function __construct(public $username, public $offlineStatus)
    {
        $this->username = $username;
        $this->offlineStatus = $offlineStatus;
    }

    function login(){
        echo "Welcome, " . $this->username . " to your account ";
        echo  "<br>";
        return $this;
    }

    function logout(){
        echo $this->username . "has logged out";
        echo  "<br>";
        return $this;
    }

    function setOnlineStatus(){
        $this->offlineStatus = false;
        echo $this->username. "is now online";
        echo  "<br>";
        return $this;
    }

    function setOfflineStatus(){
        $this->offlineStatus = true;
        echo $this->username. "is now offline";
        echo  "<br>";
        return $this;
    }
}
$twit = new Twita('Abolade William', true);
$twit->login()->setOnlineStatus()->logout()->setOfflineStatus();
?>