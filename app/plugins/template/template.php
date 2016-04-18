<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
*   Time  : 13.08.2015 13:44:10 
**/



class template {
    
    
    /*
    *   @Mixed 
    *   @param 
    *   Template Yolu
    */
    public  $Settings = array();
    
    
    /*
    *   @Mixed 
    *   @param 
    *   Dosya kontorlu Yapar
    */
    public  function control($file){
        
        if(file_exists("app/views/".$this->Settings["folder"]."/".$file.$this->Settings["extension"])){ return true; }else{ return false; }
        
    }
    
    
    /*
    *   @Mixed 
    *   @param 
    *   Dosya load Kontrol
    */
    public  function load($par1, $data = [], $par3 = "multiple"){
        

		/*
		*   @Mixed
		*   @param
		*   Data Aktarımı
		*/

        if($this->control($par1) and $par3 == "multiple")
        {
            
            require_once("app/views/".$this->Settings["folder"]."/".$this->Settings["header"].$this->Settings["extension"]);
           
                require_once("app/views/".$this->Settings["folder"]."/".$par1.$this->Settings["extension"]);
           
            require_once("app/views/".$this->Settings["folder"]."/".$this->Settings["footer"].$this->Settings["extension"]);
        
        
        }
        else if($par3 == "one" and $this->control($par1)){

                require_once("app/views/".$this->Settings["folder"]."/".$par1.$this->Settings["extension"]);

        }else{
            
            require_once("app/views/".$this->Settings["folder"]."/".$this->Settings["header"].$this->Settings["extension"]);
           
                require_once("app/views/".$this->Settings["folder"]."/".$this->Settings["default"].$this->Settings["extension"]);
           
            require_once("app/views/".$this->Settings["folder"]."/".$this->Settings["footer"].$this->Settings["extension"]);

        }
        
    }
    
    
    
    
    
    
    
    
    
}