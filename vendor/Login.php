<?php


class Login
{

    private $user;

    private $password;

    public function __construct($user,$password)
    {
        $this->user = $user;
        $this->password = $password;
    }

    public function connect()
    {
        try {
            $pdo = new PDO("mysql:dbname=phonebook;host=localhost", "phonebook", "root");
        }catch (PDOException $e){
            echo "Connect erors".$e->getMessage();
            exit;
        }

        $sql= "SELECT * FROM phonebook.users WHERE user = '$this->user' AND password = '$this->password'";

        $result = $pdo->query($sql);

       $rows = $result->fetchAll(PDO::FETCH_ASSOC);
       $this->user = '';
       $this->password = '';

       if(isset($rows)){
           $_SESSION['auth'] = true;
       }
       return $rows;
    }

    public function logout()
    {
        $_SESSION['auth'] = false;
        $delay=0;
        header("Refresh: $delay;");


    }

}