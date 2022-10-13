<?php
    require "vendor/autoload.php";
    $dbname = 'dct';
    try {
        //data Tung

        $m = new MongoDB\Client("mongodb+srv://tungtruong2318:soaika1810@cluster0.swupiyi.mongodb.net/?retryWrites=true&w=majority");
        

        $db = $m->$dbname;

        print_r(json_decode($_REQUEST['valueSSS']));




    } catch (Exception $ex) {
        print $ex;
        header("location:../error.html");
    }


?>