<?php 


	$gzip_pres = true; 
	
	
	function gzipKontrol() 
	{ 
		$kontrol = str_replace(" ","", 
		
			strtolower($_SERVER['HTTP_ACCEPT_ENCODING']) 
			
		); 
		
		$kontrol = explode(",", $kontrol); 
		
		return in_array("gzip", $kontrol); 
	} 
	
	function bosluksil($kaynak) 
	{ 
		return preg_replace("/\s+/", " ", $kaynak); 
	} 
	
	function kaynak_presle($kaynak) 
	{ 
		global $gzip_pres; 
		
		$sayfa_cikti = bosluksil($kaynak); 
		
		if (!gzipKontrol() || headers_sent() || !$gzip_pres)  
			
			return $sayfa_cikti; 
			
		header("Content-Encoding: gzip"); 
		
		return gzencode($sayfa_cikti); 
	}  


?>