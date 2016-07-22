<?php
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


class fix  {

    use config;

    /*
    *   Ana Gövde
    *   Controller Yapısı
    */
    public function __construct(){


        $url = $this->parseUrl();

      
        if(file_exists(MASTER_DIR . "/app/controllers/". $url[0]. ".php")){


            $this->config["app"]["controller"] = $url[0];
            unset($url[0]);
        }


        /*
        *   Eğer Değer Dogru İse Dahil Edelim.
        **/
        if(file_exists(MASTER_DIR . "/app/controllers/". $this->config["app"]["controller"] . ".php")){

            /*
            *	Eğer Controller Var İse Dahil edelim
            **/
            require_once("app/controllers/". $this->config["app"]["controller"] . ".php");

            $this->config["app"]["controller"] = new $this->config["app"]["controller"];

            if(isset($url[1])){

                if(method_exists($this->config["app"]["controller"], $url[1])){

                    $this->config["app"]["method"] = $url[1];
                    unset($url[1]);

                }

            }

                $this->config["app"]["params"] = $url ? array_values($url) : [];


                    /*
                    *   @Mixed
                    *   Function filitreleme
                    */

                    if($this->Black_List_Control_App()){


                        /*
                        *   @Mixed
                        *   Gelen İlk Parametreyi Function olarak Çalıştırır
                        */

                        if(method_exists($this->config["app"]["controller"], $this->config["app"]["method"])){

                            call_user_func_array([$this->config["app"]["controller"], $this->config["app"]["method"]], $this->config["app"]["params"]);

                        }else{ call_user_func_array([$this->config["app"]["controller"], $this->config["errorpage"]], $this->config["app"]["params"]);  }

                    }else{

                        /*
                        *   @Mixed
                        *   Gelen İlk Parametre Yasaklı ise errorpage Çagıralım
                        */
                        call_user_func_array([$this->config["app"]["controller"], $this->config["systemerrorfunction"]], $this->config["app"]["params"]);

                    }

			}else{


            /*
            *	Eğer Controller Var İse Dahil edelim
            **/

            echo "<center style='margin-top: 12%;' ><span style='padding: 0px; font-size:100px;color: #498E9E;text-shadow:0 1px 0 #ccc ,0 2px 0 #c9c9c9 ,0 3px 0 #bbb ,0 4px 0 #b9b9b9 ,0 5px 0 #aaa ,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);'>FİX FRAMEWORK</span><br><span>Cengiz Akcan | Fix Framework &copy; 2015</span><br><span><h2 style='color: darkred; padding: 5px; border: 5px solid darkred;'><strong> ( ".$this->config["app"]["controller"]." ) </strong> İsminde Contoller Bulunamadı <br><small>Lütfen controller isminizi düzeltiniz.</small></h2></span></center>";

        }

    }

	
    public function Black_List_Control_App(){

        if(!empty($this->parseUrl()[1])){
            if(!in_array($this->parseUrl()[1],$this->config["backlist"])){
                return true;
            }
        }else{
            return true;
        }

    }

	
    /*
    *   @Mixed
    *   @params Url Kontrol Ve Parçalama İşlemleri
    **/
    public function parseUrl(){

        if(($_GET) and (isset($_GET["url"]))){

            $Kontrol =  explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));

            if(array_key_exists(current($Kontrol),$this->config["prefix_url"])){

                $url =  explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));
                unset($url[0]);

                return array_merge($this->config["prefix_url"][current($Kontrol)],$url);

            }else{

                return $url = explode("/",filter_var(rtrim($_GET["url"],"/"),FILTER_SANITIZE_URL));

            }
        }

    }

}