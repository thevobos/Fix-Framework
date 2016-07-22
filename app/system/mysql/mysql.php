<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


trait mysql  {
	
	/*
    *   @Mixed
    *   @Param
    *   @ Pdo Veritabanı 
    **/
    public  function PDO(){
        
		try{ $DB = new PDO("mysql:host=".$this->config["mysql"]["host"].";dbname=".$this->config["mysql"]["data"].";charset=utf8",$this->config["mysql"]["user"],$this->config["mysql"]["password"]);  }
        catch(PDOException $Error ){ $DB = $Error->getMessage(); }

		return $DB;
        
    }
	
	
}