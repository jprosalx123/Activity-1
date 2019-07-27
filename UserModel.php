<?php
require ("Database.php");
class UserModel{
    public $fname;
    public $lname;
    public $email;
    public $pass;
    private $db;
    public $id;
    private $tablename = "tbl";

    public function __construct(){
        $this->db = new Database();
    }


    public function insert(){
        //$sql = "INSERT INTO $this->tablename (fname, lan)
        //VALUES ('$this->firstname','$this->lastname', '$this->email' , '$this->pass')";
        $sql = "INSERT INTO $this->tablename (fname, lname, email, pass) VALUES ('$this->fname','$this->lname','$this->email', '$this->pass')";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }   
   }

    public function update(){
        $sql = "UPDATE $this->tablename SET fname = $this->fname , lname = $this->lname , email = $this->email, pass = $this->pass  WHERE id=$this->id ";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
    }


    public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
     }
    
    public function delete(){
        $sql = "DELETE FROM tbl WHERE id =$this->id ";
        if($this->db->execute($sql)){
            return true;
        }
        else{
            return false;
        }
     
    }


    public function __destruct(){
        unset($this->db);
    }
}
// $userModel = new UserModel();
// $userModel->name = "Art";
// $userModel->email = "a@y.ocm";
// $userModel->username = "art123";
// $userModel->password = "testpassword";
// $userModel->insert();
?>