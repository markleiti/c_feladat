<?php 
    function getDb($hostname="localhost", $username="root",$password="",$dbname="jozsi"):PDO
    {
        try{
            $db=new PDO("mysql:host=$hostname;dbname=$dbname", $username, $password);
            $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $db;
        }
        catch(PDOException $exception)
        {
            echo 'Nemjo' .$exception->getMessage();
            exit;
        }
    }
?>