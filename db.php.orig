<<<<<<< HEAD
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
=======
<?php  
function getDb($hostname="localhost",$username= "root",$password="",$dbname="adat"):PDO
{
    try
    {$db=new PDO("mysql:host=$hostname;dbname=$dbname",$username,$password);
    $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    return $db;
    }
    catch (PDOException $exception)
    {
        echo 'rossz:'.$exception->getMessage();
        exit;
    }}
>>>>>>> db08a7d2c592fa5902a47047b932700ac5a5cc6d
