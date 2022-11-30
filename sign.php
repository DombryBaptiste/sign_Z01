<?php 
    $pseudo = $_GET['pseudo'];
    echo($pseudo);
    echo("</br>");


    try{
        $db = new PDO(
            'mysql:host=localhost;dbname=student;charset=utf8',
            'root',
            'PassBDDZone01pc**!'
        );
    } catch (Exception $e) {
        die('Erreur : ' .$e->getMessage());
    }

    var_dump($_GET);
    if(isset($_GET['EN'])){
        echo('EN');
        $enterDate = date("Y-m-d h:i:s");
        $query = $db->prepare("INSERT INTO student (IntraPseudo, EnterDate) VALUES (:pseudo, :d)");
        $query->execute(['pseudo' => $pseudo, 'd' => $enterDate]);
    }

    if(isset($_GET['EX'])){
        echo('EX');
        $exitDate = date("Y-m-d h:i:s");
    }
    


    //echo($today);
    echo('</br>');
    //print_r($_SERVER);


    /*$x = $db->prepare("UPDATE student SET EnterDate = :date");
    $x->execute(['date' => $today]);*/


?>