<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/



class controller {

    private static $instance;
	
	use secure, config, mysql, fixframework, php;

    // Plugins System Engineer
    public static function connection()
    {

        if( !self::$instance instanceof self )
        {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /*
    *   @Mixed
    *   @Param
    *   Veri Dahil Ediyoruz.
    */
    public  function model($model){

        require_once( MASTER_DIR . "/app/models/".$model.".php" );

    }

    /*
    *   @Mixed
    *   @Param
    *   Veri Dahil Ediyoruz.
    */
    public  function private_template_model($template = "", $model = ""){

        require_once( MASTER_DIR . "/app/templates/private/$template/models/$model.php" );

    }

    /*
    *   @Mixed
    *   @Param
    *   Veri Dahil Ediyoruz.
    */
    public  function public_template_model($template = "", $model = ""){

        require_once( MASTER_DIR . "/app/templates/public/$template/models/$model.php" );

    }
    
    /*
    *   @Mixed 
    *   @param 
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function public_template_view($template = "", $file = "", array $data = [],$extension = ".php" ){

        if( self::isfile(MASTER_DIR . "/app/templates/public/$template/views/$file$extension") ){

            require_once(MASTER_DIR . "/app/templates/public/$template/views/$file$extension");

        }else{

            /*
             * Login fill Error Report
             * */
            $this::report_export(
                [
                    "sts"       => "error",
                    "out"       => "Login information empty",
                    "time"      =>  date("Y-m-d H:i:s")
                ]
            );

        }

    }

    /*
    *   @Mixed
    *   @param
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function private_template_view($template = "", $file = "", array $data = [],$extension = ".php" ){

        if( self::isfile(MASTER_DIR . "/app/templates/private/$template/views/$file$extension") ){

            require_once(MASTER_DIR . "/app/templates/private/$template/views/$file$extension");

        }else{

            /*
             * Login fill Error Report
             * */
            $this::report_export(
                [
                    "sts"       => "error",
                    "out"       => "Login information empty",
                    "time"      =>  date("Y-m-d H:i:s")
                ]
            );

        }

    }

    /*
    *   @Mixed
    *   @param
    *   Tüm Verileri Parçalar ve Çagırılan Dosyaya Veri Aktarır
    */
    public  function loader($view, $data = [] ){


        if( is_file(MASTER_DIR . "/app/views/". $view .".php") ){ include(MASTER_DIR . "/app/views/". $view .".php"); }else{ $this->location("/".$this->config["errorpage"]); }

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
        
        require_once(MASTER_DIR . "/app/views/". $view .".php");
        
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
     * System Language
     * */
    public function system_language(){

        $this::model("languages/languages");

        $languages =  new languages();

        return $languages->language_data();

    }

    /*
     * System Plugins Started
     * */
    public function plugin_action(){

        $this::model("plugins/plugins");

        return plugins::getInstance();

    }

    /*
     * System Export Error And Success Reports
     * */
    public function report_export(array $par = []){

        return $this->write($this->jsonencode($par));
    }

    

     
    
}