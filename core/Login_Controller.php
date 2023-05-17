<?php

namespace database;

class Login_Controller extends Database
{
    private $username;
    private $password;

    public function Login()
    {
        if (!empty($_POST['login'])) {

            $this->username = $_POST['username'];
            $this->password = $_POST['password'];
            $sql = "SELECT * FROM `users` WHERE username='" . $this->username . "';";
            $request = $this->Query($sql);

            if ($request->num_rows > 0) {
                $request = $request->fetch_all();

                if ($request[0][1] == $this->username && $request[0][2] == $this->password) {
                    $_SESSION['login'] = true;
                    $_SESSION['username'] = $request[0][1];
                    return true;
                } else {
                    $this->username = "";
                    $this->password = "";
                }
            } else {
                $this->username = "";
                $this->password = "";
            }
        }
    }

    public function Logout()
    {

    }

    private function Is_logged_in()
    {

    }

}
