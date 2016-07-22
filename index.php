<?php
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


	
    /*
     *
     * System Fixed Roads
     *
     * */

    /*
     * MASTER DIR
     * */
    define("MASTER_DIR", dirname(__FILE__), true);

    /*
     * SYSTEM REMOTE IP
     * */
    define("MASTER_IP", $_SERVER["REMOTE_ADDR"]);

    /*
     * SYSTEM DOMAİN AL
     * */
	$Protocol = isset($_SERVER["HTTPS"]) ? 'https://' : 'http://';
    define("MASTER_URL", $Protocol. $_SERVER["SERVER_NAME"]."/");


    /*
    *	@Mixed
    *	@Param
    *	Auto Loader Sistemi
    **/
    require_once(MASTER_DIR . "/app/core/loader.php");



    /*
    *	Sistemimizi Tetikliyici
    */
    return new fix();
