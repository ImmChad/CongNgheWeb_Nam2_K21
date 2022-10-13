<?php
    require "vendor/autoload.php";
    $dbname = 'dct';
    try {
        //data Tung

        $m = new MongoDB\Client("mongodb+srv://tungtruong2318:soaika1810@cluster0.swupiyi.mongodb.net/?retryWrites=true&w=majority");
        

        $db = $m->$dbname;

        $scode = json_decode($_REQUEST['valueSSS'])[0];
        $snam = json_decode($_REQUEST['valueSSS'])[1];
        $class = json_decode($_REQUEST['valueSSS'])[2];
        $age = json_decode($_REQUEST['valueSSS'])[3];


        $db = $m->$dbname;
        //    Insert Student 
        $student = $db->student;
        $student->insertOne(array(
            'scode' => $scode,
            'snam' => $snam,
            'class' => $class,
            'age' => $age
        ));

        header("location: browse.php");

    } catch (Exception $ex) {
        print $ex;
        header("location:../error.html");
    }


?>