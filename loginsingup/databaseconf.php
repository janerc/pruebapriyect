<?php

class databaseconf{
    public=$servername;
    public=$database;
    public=$username;
    public=$password;

    public function __construct(){
        $this->servername='localhost';
        $this->database='asistente';
        $this->username='root';
        $this->password='';
    }
}
?>