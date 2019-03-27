<?php

    class Dmodel {       

        protected $db = array();

       public function __construct() { 
          $conn = 'mysql:dbname=db_mvc; host=localhost';
          $db_user = 'root';
          $db_pass = '';
          $this->db = new Database($conn, $db_user, $db_pass);

        }


       

    }