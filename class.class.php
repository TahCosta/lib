<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


/**
 * Description of class
 *
 * @author tdeso
 */
class ConectaDb {
 private $_host = 'localhost';
 private $_user = 'root';
 private $_pass = '';
 private $_db;
 protected $_conn;
         
 
 function __construct($db) {
   $this->_db = $db;

   
   $conn = mysqli_connect($this->_host, $this->_user, $this->_pass, $this->_db);
   if(!$conn){
   echo 'Erro ao conectar!'.mysqli_error($conn) ;
   }
   else{
   $this->_conn = $conn;
   }
   }
   
 } 
class Cadastra extends ConectaDb {
  private $_table;
  private $_sql;
  private $_nameCad;
  private $_userCad;
  private $_repCad;
  private $_pwdCad;
  private $_emailCad;
  private $_res;
  private $_teste;        
          
  function trataDados ($data, $attr){
   $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $this->$attr = $data;
    
  }
  
  function setSql($table){
    $this->_table = $table; 
    $this->_sql = 'INSERT INTO '.$this->_table.' (nome, usuario, email, republica, senha) '
            . ' VALUES ("'.$this->_nameCad.'","'.$this->_userCad.'","'.$this->_emailCad.'","'.$this->_repCad.'","'.$this->_pwdCad.'")';
    if (mysqli_query($this->_conn,  $this->_sql)) {
      $this->_res = 'Ok';
} else {
    $this->_res = 'Erro'; //echo "Error: " . $this->_sql . "<br>" . mysqli_error($this->_conn);
} 
  }
  
  function eDuplicado($table,$dado,$atrr){
    $this->_table = $table; 
    $this->_sql = 'SELECT * FROM '.$this->_table.' WHERE '.$dado.' LIKE "'.$this->$atrr.'"';
    $this->_teste = mysqli_query($this->_conn,  $this->_sql);
    if($this->_teste){
      $this->_res = mysqli_num_rows($this->_teste);
    }else{
      echo "Error: " . $this->_sql . "<br>" . mysqli_error($this->_conn);}
    
  }
          
  function getRes (){
    return $this->_res;
  }
  
}
  class Logar extends ConectaDb {
   private $_login; 
   private $_senha;
   
   function trataDados ($data, $attr){
   $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  $this->$attr = $data;
    
  }
    
  }
