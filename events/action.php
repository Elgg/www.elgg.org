<?php
 
    /**
     * Script to record attendees for ElggJam
     **/
     
    //get variables from the form
    $name = $_POST['name09'];
    $email = $_POST['email09'];
    $details = $_POST['details09'];
    $organisation = $_POST['organisation09'];
    $location = $_POST['location09'];
    $vancouver = $_POST['vancouver'];
    
   if($vancouver == ""){

  
    if($name && $email && $location && $details){
        //open a connect to the db
        $dblink = mysql_connect('localhost', 'elggjam', 'gb1r4p0s');
        mysql_select_db('elggjam', $dblink);
                  
        $insert_query = mysql_query("INSERT INTO attendees (name, email, organisation, location, details) VALUES ('$name', '$email', '$organisation', '$location', '$details')");
        
        if($insert_query){
             header('Location:http://elgg.org/events/index.php?action=success');
        }else{
            header('Location:http://elgg.org/events/index.php?action=problem');
        }
    }else{
        header('Location:http://elgg.org/events/index.php?action=fields');
    }

    }
    
?>