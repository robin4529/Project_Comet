<?php

    //database conncetion//
    function connect(){
        return new mysqli (HOST, USER, PASS,DB);
    }
    //create database function//

    function create($Sql){

        connect()-> query($Sql);
    }
        //get all data//
        function all($table, $order = 'ASC'){
            return  connect()-> query("SELECT *FROM {$table} ORDER BY id {$order}");
            
        }
        //find singel data//

        function find($table, $id)
        {
            $Sql ="SELECT*FROM {$table} WHERE id='$id'";
            
           $data = connect()->query( $Sql);
            return $data->fetch_object();

        }
        //slug genrator//
        function slug($name){
            $lower =strtolower($name);
            return str_replace(' ','-',$lower);
        }
?>
