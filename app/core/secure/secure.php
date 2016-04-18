<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


trait secure { 


    /*
    *   Ayarlar Ana Gövde
    *   Controller Yapısı
    */
    public function __construct(){
        
        /*
        *   @Mixed
        *   @Param  Developer Modları
        **/
        $this->secure();

    }
    
    
 /*
    *   @Mixed
    *   @Param Developer Gerçek İp Bulma
    */
    public function GetIP(){
        if(getenv("HTTP_CLIENT_IP")) {
            $ip = getenv("HTTP_CLIENT_IP");
        } elseif(getenv("HTTP_X_FORWARDED_FOR")) {
            $ip = getenv("HTTP_X_FORWARDED_FOR");
            if (strstr($ip, ',')) {
                $tmp = explode (',', $ip);
                $ip = trim($tmp[0]);
            }
        } else {
        $ip = getenv("REMOTE_ADDR");
        }
        return $ip;
    }
    
    
    /*
    *   @Mixed @Param
    *   System Güvenlik Ayarları   
    **/
    public function secure(){
        
        

        /*
        *   @Mixed
        *   @param  Sistem Developer Modu Bakım Modu
        */
        if($this->config["work"]){ 
        
            
            if(array_search($this->GetIP(),$this->config["developer"])){

               
                /*
                *   @Mixed
                *   @Param
                *   Bu Alan Developer İçin Özel bir Alandır Sadece İzinli Developerlar Sistem De Görebilir 
                **/
                
                
            }else{  die("Bakım Modu Aktif"); }
            
        
        }else{
            
            
            if(!$this->config["webstatus"]){ die("Sistem Durduruldu");   }
        }
        
        
        
            /* *** Developer Modları *** */
        
            if($this->config["status"] == 1){

                // Hata raporlamayı tamamen kapatalım
                error_reporting(0);
            }
            else if($this->config["status"] == 2){

                // Basit hataları raporlayalım
                error_reporting(E_ERROR | E_WARNING | E_PARSE);

            }
            else if($this->config["status"] == 3){

                // E_NOTICE de raporlansa iyi olur (ilklendirilmemiş değişkenleri
                // veya yanlış yazılmış değişken isimlerini yakalamak için, vb)
                error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

            }
            else if($this->config["status"] == 4){

                // E_NOTICE hariç bütün hatalar raporlansın
                // Bu php.ini içindeki öntanımlı değerdir
                error_reporting(E_ALL ^ E_NOTICE);

            }
            else if($this->config["status"] == 5){

                // Tüm PHP hatalarını raporlayalım (changelog dosyasına bakınız)
                error_reporting(E_ALL);


            }
            else if($this->config["status"] == 6){


                // Tüm PHP hatalarını raporlayalım
                error_reporting(-1);

            }

        
    }
}