<?php

ini_set(include_path,'/home/ryan/Bureau/modele_sql/connSQL.modele.php');

function profil()
    {
        mysqli_query($conn,"SELECT * FROM PROFIL");
        mysqli_query($conn,"SELECT ROLE_U FROM COMPTE");
        $result2=mysql_fetch_row($result);
        $result=mysql_fetch_row($bd);
        //return $result;
        //return $result2;
    }

profil();

//var_dump($result);
//var_dump($result2);

?>