<?php

function find_one_student () : array { //   : array parmet de specifier le type de donnée que la fonction doit renvoyer. ici un tableau.
    $database = new PDO('mysql:host=localhost;dbname=lpofficial;', 'root', '')
    
    $selectStudentQuery = "select * from `student`"; 
    $statement = $database->prepare($selectStudentQuery);
    $statement->execute();

    $student = $statement->fetchAll(pdo::FETCH_ASSOC);

    return $student;
    }
?>