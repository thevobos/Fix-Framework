<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/



class controller {

    private static $instance;
	
	use secure, config, mysql, fixframework, php;


    /*
    *   @Mixed
    *   @Param
    *   Veri Dahil Ediyoruz.
    */
    public  function model($model){

        require_once(  MASTER_DIR . "/app/models/". $model .".php" );

    }


    /*
    *   @Mixed
    *   @param
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function loader($view, $data = [] ){


        if( is_file( MASTER_DIR . "/app/views/". $view .".php") ){ include( MASTER_DIR . "/app/views/". $view .".php"); }else{ $this->location("/".$this->config["errorpage"]); }

    }

    /*
    *   @Mixed
    *   @param
    *   Tasarımsal verileri çağırır
    */
    public  function assets($view, $data = [] ){

        return "/app/assets/".@$view;

    }

    /*
    *   @Mixed
    *   @param
    *   Sistem Tema Yollarını klasor yolu olarak İçerir
    */
    public  function assetsurl($par = ""){

        return $this->config["http_url"].$this->config["assets"].$par;

    }

    /*
    *   @Mixed 
    *   @param 
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function page($view, $data = [] ){
        
        require_once( MASTER_DIR . "/app/views/". $view .".php");
        
    }
    
    /*
    *   @Mixed 
    *   @param 
    *   Sistem Tema Yollarını Url ile İçerir
    */
    public  function templateurl($par = ""){
       
        return $this->config["http_url"].$this->config["assets"].($par !== "" ?  $ext = $par."/" :  $ext = "");
        
    } 

    /*
    *   @Mixed 
    *   @param 
    *   Sistem Tema Yollarını klasor yolu olarak İçerir
    */
    public  function templatepath($par = ""){

        return $this->config["assets"].($par !== "" ?  $ext = $par."/" :  $ext = "");

    }

	/*
    *   @Mixed 
    *   @param 
    *   Sistem echo yazdırma 
    */
    public  function write($par){

        if(is_array($par)){ print_r($par); }else{ echo $par; }

    }


    /*
     * System Export Error And Success Reports
     * */
    public function report_export(array $par = []){

        return $this->write($this->jsonencode($par));
		
    }

    

     
    
}