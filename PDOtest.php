<?php

 

function getAll($sql, $value = null){

    // returns a result set

        global $db;

        $statement = $db->prepare($sql);

        // bind values to parameters

        $statement->bindValue(':genre', $value);

 

        // execute the SQL statement

        $statement->execute();

 

        // return result

        $result = $statement->fetchAll(PDO::FETCH_ASSOC);

        return $result;

}

 

function getOne($sql){

    // returns a sigle record

        global $db;

        $statement = $db->prepare($sql);

 

        // execute the SQL statement

        $statement->execute();

 

        // return result

        $result = $statement->fetch(PDO::FETCH_ASSOC);

        return $result;

}

 

 

 

?>
