<?php

use LDAP\Result;

class database{
    public $host = DB_HOST;
    public $user = DB_USER;
    public $pass = DB_PASS;
    public $dbname = DB_NAME;

    public $link;
    public $error;

    public function __construct()
    {
        $this->connectDB();
    }
    
    // Connection to Database
    private function connectDB(){
        $this->link = new mysqli($this->host, $this->user, $this->pass, $this->dbname);

        if(!$this->link){
            $this->error = "connection fail".$this->link->connect_error;
            return false;
        }
    }

    //Select  or Read Data
    public function select($query){
        $result = $this->link->query($query) or die($this->link->error.__LINE__);
        if($result->num_rows > 0){
            return $result;
        }
        else{
            return false;
        }
    }

    //Data Insert
    public function insert($query){
        $insert_row = $this->link->query($query) or die($this->link->error.__LINE__);
        if($insert_row){
            header("Location: index.php?msg=".urlencode('Data inserted successfully.'));
            exit();
        } else{
            die("Error :(".$this->link->errno.")".$this->link->error);
        }
    }

    //Data Update
    public function update($query){
        $update_row= $this->link->query($query) or die($this->link->error.__LINE__);
        if($update_row){
            header("Location: index.php?msg=".urlencode('Data updated successfully.'));
            exit();
        } else{
            die("Error :(".$this->link->errno.")".$this->link->error);
        }
    }

    //Data Delete
    public function delete($query){
        $delete_row= $this->link->query($query) or die($this->link->error.__LINE__);
        if($delete_row){
            header("Location: index.php?msg=".urlencode('Data Deleted successfully.'));
            exit();
        } else{
            die("Error :(".$this->link->errno.")".$this->link->error);
        }
    }
}