<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
*   Time  : 13.08.2015 13:44:10 
**/


trait config  {


    public  $config = array
            (


                /*
                 *
                 * APP GENERAL SETTINGS
                 * @Mixed
                 *
                 * This is private area for you
                 *
                 */
                "ssl"     		                    =>  false,
                "http_url"    		                =>  "http://localhost/",
                "https_url"    		                =>  "https://localhost/",
                "ip"       	 		                =>  "127.0.0.1",
                "email"     		                =>  "work@cengizakcan.com",


                /*
                 *
                 * System template assets way
                 *
                 * */
                "template_public"                             =>  "app/templates/public",
                "template_private"                            =>  "app/templates/private",



                /*
                 * PHP MAİL CLASS SETTINGS
                 *
                 *  System is mail parameters for phpmailer
                 *   3d party
                 *
                 * */
                "mailserver"    =>  array(

                    "host"            	=>  "",
                    "port"              =>  "465",
                    "aut"               =>  true,
                    "secure"            =>  "ssl",
                    "username"          =>  "",
                    "password"          =>  "",
                    "charset"           =>  "UTF-8",
                    "title"             =>  "",
                    "subject"           =>  ""

                ),


                /*
                 *   System  debug mode and error mode 1/0 settings parameters
                 *   @Mixed
                 *
                 *   Security or security mode http and https system and upkeep mode for settings
                 *   Make off maintenance mode when there
                 *   Kullanacağınız Projeye Göre ip işlemlerinizi yapabilirsiniz.
                 *
                 *   All error open number 6 for developer mode
                 *   All error hide number 1 for user mode
                 */
                    "status"    		            =>  "",
                    "work"     		 	            =>  false,
                    "webstatus" 		            =>  true,


                /*
                 *
                 * System error redication
                 * @Mixed
                 *
                 * Error page redication function for class function
                 *
                 */
                "errorpage" 		                        =>  "errorpage",
                "systemerrorfunction" 		                =>  "errorfunctionsystempage",


                /*
                 *   Developer mode
                 *   @Params Mixed
                 *
                 *   Developer mode active and view to developer in your page view function name
                 *   and developer viet your ip number for page view
                 *
                 */
                "developer" =>  array(

                        "Developer1"                =>   ""

                ),


                /*
                 *
                 *   App master settings
                 *   @Param Mixed
                 *   Controller structural build
                 *   Master System Controller Settings
                 */
                "app"       =>  array(


                        /*
                        *   Runner Controller
                        *   @Param Mixed
                        */
                        "controller"                =>   "master",


                        /*
                        *   Opening Function
                        *   Kullanılan Method
                        */
                        "method"                    =>   "index",


                        /*
                        *   Master buid
                        *   Controller Yapısı
                        */
                        "params"                    =>   []


                    ),


                /*
                 *
                 * Hidden system page
                 * @Mixed
                 * Backlist array in for function params
                 *
                 */
                "backlist" =>  array(

                        "app",
                        "model",
                        "template_public_model",
                        "view",
                        "loader",
                        "assets",
                        "assetsurl",
                        "page",
                        "templateurl",
                        "templatepath",
                        "write",
                        "system_language",
                        "plugin_action",
                        "report_export",
                        "get",
                        "timezone",
                        "download",
                        "jsonencode",
                        "isextends",
                        "encode",
                        "key",
                        "testmicrotime",
                        "issetfill",
                        "timecover",
                        "timetr",
                        "post",
                        "files",
                        "hashtag",
                        "slash",
                        "textlimit",
                        "isfolder",
                        "isfile",
                        "newfile",
                        "parseUrl",
                        "undir",
                        "Antiinjection",
                        "textbig",
                        "permalink",
                        "bbkod",
                        "hiddeninfo",
                        "info",
                        "location",
                        "refresh",
                        "imagesupload",
                        "fileget",
                        "obstart",
                        "sessionstart",
                        "session",
                        "sessionadd",
                        "unsession",
                        "unobstart",
                        "timeback",
                        "curlget",
                        "curlpost",
                        "curl",
                        "curldownload",
                        "curlupload",
                        "googlechar",
                        "browserlang",
                        "metainfo",
                        "realip",
                        "filtervar",
                        "ipapiservice",

                    ),

					
				/*
				
				*/

                /*
                 *
                 * SİSTEM Url proefix Alanı
                 * @Mixed
                 * Sistemde Yörüngeleme sistemidir  test.com/controller/param to test.com/param
                 *  SAMPLE
                 *  "xx" => ["aa","bb"]
                 */
                "prefix_url" =>  array(),


                /*
                 *   VERİTABANI YETKİ BİLGİLERİ ALANI
                 *   @Mixed
                 *
                 *   Host            = Veritabanınızın ip yada varsayılan local olmasıdır. Genellikle localhost 'tur
                 *   User, Password  = Veritabanınızın Kullanıcı Adı Ve Şifresidir.
                 *   Data            = Veritabanınızın  Adıdır.
                 *   Prefix          = Kulanılan Prefix Varsayılan db Ön Adıdır.
                 *   Charset         = Veritabanında Hangi Dil Ailesini Kullanıyorsanız. Varsayılan utf-8 dir.
                 *
                 * */
                "mysql"     =>  array(

                    "host"                          =>  "localhost",
                    "user"                          =>  "root",
                    "password"                      =>  "",
                    "data"                          =>  "",
                    "charset"                       =>  "utf-8",
                    "prefix"                        =>  ""
                )

            );



}