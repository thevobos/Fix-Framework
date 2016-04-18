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
                "http"     			                =>  true,
                "https"     		                =>  false,
                "http_url"    		                =>  "http://localhost/",
                "https_url"    		                =>  "http://localhost/",
                "assets"    		                =>  "app/assets/",
                "view"    		                    =>  "app/view/",
                "ip"       	 		                =>  "127.0.0.1",
                "email"     		                =>  "work@cengizakcan.com",



                /*
                 * PHP MAİL CLASS SETTINGS
                 *
                 *  System is mail parameters for phpmailer
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
                    "status"    		            =>  "6",
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
                "errorpage" 		                =>  "errorpage",


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
                 *
                 */
                "app"       =>  array(


                        /*
                        *   Runner Controller
                        *   @Param Mixed
                        */
                        "controller"                =>   "index",


                        /*
                        *   Opening Function
                        *   Kullanılan Method
                        */
                        "method"                    =>   "home",


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

                        "app"        =>   "app",

                    ),


                /*
                 *
                 * SİSTEM Url proefix Alanı
                 * @Mixed
                 * Sistemde Yörüngeleme sistemidir  test.com/controller/param to test.com/param
                 *
                 */
                "prefix_url" =>  array(

                    "anasayfa"      =>  array("index","home"),
                ),


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
                    "user"                          =>  "",
                    "password"                      =>  "",
                    "data"                          =>  "",
                    "charset"                       =>  "utf-8",
                    "prefix"                        =>  ""
                )

            );



}