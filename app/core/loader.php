<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


        /*
        *	@Mixed
        *	@Param
        *	Sistem Ayarları 
        **/
        require_once("app/core/config/config.php");

        /*
        *	@Mixed
        *	@Param
        *	Sistem Ayarları
        **/
        require_once("app/core/config/external.php");

        /*
        *	@Mixed
        *	@Param
        *	Form Sistemi
        **/
        require_once("app/system/fix/fix.php");

        /*
        *	@Mixed
        *	@Param
        *	Php Sistemi
        **/
        require_once("app/system/php/php.php");

        /*
        *	@Mixed
        *	@Param
        *	Pdo Mysql Sistemi
        **/
        require_once("app/system/mysql/mysql.php");

        /*
        *	@Mixed
        *	@Param
        *	Sistem Güvenlik 
        **/
        require_once("app/core/secure/secure.php");


        /*
        *	@Mixed
        *	@Param
        *	Sistem Omurgası 
        **/
        require_once("app/core/app/app.php");

        /*
        *	@Mixed
        *	@Param
        *	Sistem Controlleri 
        **/
        require_once("app/core/controller/controller.php");
