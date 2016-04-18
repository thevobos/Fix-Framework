<?php
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


trait fixframework  {



    /*
    *   @Mixed
    *   @param
    *   Sistem Marka
    */
    public static function fix(){
		header('Content-Type: text/html; charset=utf-8');
        return "<center style='margin-top: 12%;' ><span style='padding: 50px; font-size:100px;color: #498E9E;text-shadow:0 1px 0 #ccc ,0 2px 0 #c9c9c9 ,0 3px 0 #bbb ,0 4px 0 #b9b9b9 ,0 5px 0 #aaa ,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);'>FİX FRAMEWORK</span><br><span>Cengiz Akcan | Fix Framework &copy; 2015</span></center>";

    }



    /*
    *   @Mixed
    *   @param
    *   Sistem Hata
    */
    public static function errorpage(){
		header('Content-Type: text/html; charset=utf-8');
        echo "<center style='margin-top: 12%;' ><span style='padding: 50px; font-size:100px;color: #498E9E;text-shadow:0 1px 0 #ccc ,0 2px 0 #c9c9c9 ,0 3px 0 #bbb ,0 4px 0 #b9b9b9 ,0 5px 0 #aaa ,0 6px 1px rgba(0,0,0,.1),0 0 5px rgba(0,0,0,.1),0 1px 3px rgba(0,0,0,.3),0 3px 5px rgba(0,0,0,.2),0 5px 10px rgba(0,0,0,.25),0 10px 10px rgba(0,0,0,.2),0 20px 20px rgba(0,0,0,.15);'>FİX FRAMEWORK</span><br><span>Cengiz Akcan | Fix Framework &copy; 2015</span><br><span><h2 style='color: #498E9E;'>Bulunamadı</h2></span></center>";

    }


}