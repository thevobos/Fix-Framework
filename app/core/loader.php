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
        require_once( MASTER_DIR . "/app/core/config/config.php");

        /*
        *	@Mixed
        *	@Param
        *	Sistem Ayarları
        **/
        require_once( MASTER_DIR . "/app/core/config/external.php");

        /*
        *	@Mixed
        *	@Param
        *	Form Sistemi
        **/
        require_once( MASTER_DIR . "/app/system/fix/fix.php");

        /*
        *	@Mixed
        *	@Param
        *	Form Sistemi
        **/
        require_once( MASTER_DIR . "/app/system/linux/linux.php");

        /*
        *	@Mixed
        *	@Param
        *	Php Sistemi
        **/
        require_once( MASTER_DIR . "/app/system/php/php.php");

        /*
        *	@Mixed
        *	@Param
        *	Pdo Mysql Sistemi
        **/
        require_once( MASTER_DIR . "/app/system/mysql/mysql.php");

        /*
        *	@Mixed
        *	@Param
        *	Sistem Güvenlik 
        **/
        require_once( MASTER_DIR . "/app/core/secure/secure.php");


        /*
        *	@Mixed
        *	@Param
        *	Sistem Omurgası 
        **/
        require_once( MASTER_DIR . "/app/core/app/app.php");

        /*
        *	@Mixed
        *	@Param
        *	Sistem Controlleri 
        **/
        require_once( MASTER_DIR . "/app/core/controller/controller.php");
