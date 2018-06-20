<?php


class SelectDB
{


    private $pdo;

    public function __construct()
    {

        try {
            $pdo = new PDO("mysql:dbname=phonebook;host=localhost", "phonebook", "root");
        }catch (PDOException $e){
            echo "Connect erors".$e->getMessage();
            exit;
        }
        $this->pdo = $pdo;
    }

    public function users($user,$password)
    {


        $sql= "SELECT * FROM phonebook.users WHERE user = '$user' AND password = '$password'";

        $rows = $this->select($sql);


        if(isset($rows)){
            $_SESSION['auth'] = true;
        }
        return $rows;
    }

    public function contacts($user)
    {
        $sql = "
                SELECT firstName, lastName,adress,city,con.name AS country
                FROM contacts c 
                LEFT JOIN users u ON u.id = c.usersId
                LEFT JOIN countries con ON con.id = c.countriId
                WHERE u.user = '$user'
                ";

        return $this->select($sql);
    }

    public function email($user)
    {
        $sql = "
                SELECT email, isPublic
                FROM emails e 
                JOIN  contacts c ON c.id = e.contactId
                JOIN users u ON u.id = c.usersId
                WHERE u.user = '$user'
                ";

        return $this->select($sql);
    }

    public function phones($user)
    {
        $sql = "
                SELECT phoneNumber, isPublic
                FROM phones p 
                JOIN  contacts c ON c.id = p.contactId
                JOIN  users u ON u.id = c.usersId
                WHERE u.user = '$user'
                 ";

        return $this->select($sql);

    }

    private function select($sql)
    {
        $result = $this->pdo->query($sql);

        $rows = $result->fetchAll(PDO::FETCH_ASSOC);

        return $rows;
    }
}