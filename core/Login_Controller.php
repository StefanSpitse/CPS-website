<?php

namespace database;

class Login_Controller extends Database
{
    private $username;
    private $password;

    public function Login()
    {
        if (!empty($_POST['login']))
        {
          $request = $this->Query("SELECT * FROM `users` WHERE username='". $_POST['username'] ."';");
          print_r($request);
        }
    }

    public function Logout()
    {

    }

    private function Is_logged_in()
    {

    }

}
