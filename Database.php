<?php
Class Database{
    //define variable
    public $dbConnection;
    public $records;
    //this function can be used to open the connection with the database
    function openConnection() : bool{}

    //this function can be used to fetch record in the database
    function fetchRecord($id) : array{}

    // insert records 
    function insertRecords($data) : bool {}

    //update records
    function updateRecords($id, $data) :bool {}


}

?>