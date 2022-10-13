<?php
    require "vendor/autoload.php";
    $dbname = 'dct';
    try {
        //data Tung
        $m = new MongoDB\Client("mongodb+srv://tungtruong2318:soaika1810@cluster0.swupiyi.mongodb.net/?retryWrites=true&w=majority");
        //data Dung
        // $m = new MongoDB\Client("mongodb+srv://Dung060103:Dung060103@cluster0.bd7lfjg.mongodb.net/?retryWrites=true&w=majority");
        
        echo "<p>Connected!<p>";
        echo "thanh cong";

        $db = $m->$dbname;


        //    
        $student = $db->student;

        $datastudent = $student->find();
        foreach($datastudent as $data) 
        {
            echo "<div> scode: ".$data['scode'].",  sname: ".$data['snam'].",  class: ".$data['class'].", age: ".$data['age']." </div>";
        }




    } catch (Exception $ex) {
        print $ex;
        header("location:../error.html");
    }

?>