<?php
/**
 * Created by PhpStorm.
 * User: alex
 * Date: 4/5/18
 * Time: 7:31 PM
 */



     function getConnection(){
         //this is out data layer
         $username = 'akrytsky_it328User';
         $pass = 'yDo?Bbx.uxVk';
         $host = 'localhost';
         $database = 'akrytsky_IT328';
         $connection = mysqli_connect($host, $username, $pass, $database);

         if(!$connection){
             echo 'Error connection to DB: ' . mysqli_connect_error();
             exit;
         }

         return $connection;
     }

     function getMessages(){
         $connection = getConnection();

         //query for message records
         $query = 'SELECT id, body FROM messages';

         $results = mysqli_query($connection, $query);

         if(!$results){
             echo 'Error retrieving records.';
             exit;
         }

         $records = array();
         while ($row = mysqli_fetch_assoc($results)){
            $records[] = $row;
         }

         //free up server resources
         mysqli_free_result($results);

         return $records;


     }

     function insertMessage($message){

     }


?>