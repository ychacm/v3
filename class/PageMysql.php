<?php
	
class PageMysql{
	  private $mysqli;
             
      public function __construct(){
         $this->mysqli = new mysqli("sql209.byethost5.com","b5_10631563","19860129","b5_10631563_ych");
         mysqli_query($this->mysqli,"set names 'utf8'");      
         if(mysqli_connect_errno()){
           		echo "数据库国连接失败，其原因在于：".mysql_connect_error();
             $this->mysqli = false;
              exit();
              }
         $this->showError = $shiwError;
      }
             
      public function __destruct(){
         $this->close();
      }
             
      public function close(){
         if($this->mysqli){
              $this->mysqli->close();
           }
         $this->mysqli = false;
      }
          
    public function getRowTotal($table,$id){
        $result = $this->mysqli->query("select * from $table where itemsid=$id");
        return $result->num_rows;
    }
    
    public function getRowTotalOne($table){
        $result = $this->mysqli->query("select * from $table");
        return $result->num_rows;
    }
    
     public function getPageRows($offset,$num,$id,$table){
         $query = "select * from $table where itemsid=$id limit $offset,$num";
                 
         if($result = $this->mysqli->query($query)){
              while($row = $result->fetch_assoc()){
                    $allUser[] = $row;
              }                     
              $result->close();
              return $allUser;
         }else{
              return false;
              }
     }
     
     public function getPageRowsOne($offset,$num,$table){
         $query = "select * from $table limit $offset,$num";
                 
         if($result = $this->mysqli->query($query)){
              while($row = $result->fetch_assoc()){
                    $allUser[] = $row;
              }                     
              $result->close();
              return $allUser;
         }else{
              return false;
              }
     }

}

?>