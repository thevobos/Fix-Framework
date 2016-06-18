<?php
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


trait php  {


	/*
    *   @Mixed
    *   @Param
    *   @ Açılış Hızı Testi
    **/
	public static function timezone(){

		return date_default_timezone_set('Europe/Istanbul');

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Dosya İndirme İşlemi
    **/
	public static function download($par1, $par2) {

		// We'll be outputting a PDF
		header('Content-Type: '.$par2);

		// It will be called downloaded.pdf
		header('Content-Disposition: attachment; filename="'.$par1.'"');

		// The PDF source is in original.pdf
		return readfile($par1);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Json Encode
    **/
	public static function jsonencode($par1, $par2 = true){

		return json_encode($par1, $par2);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Json Decode
    **/
	public static function jsondecode($par1){

		return json_decode($par1);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ İp Api Service V1 http://www.geoplugin.net/json.gp
     *
	{
		
	  "geoplugin_request":"81.215.88.93",
	  "geoplugin_status":200,
	  "geoplugin_credit":"Some of the returned data includes GeoLite data created by MaxMind, available from <a href=\\'http:\/\/www.maxmind.com\\'>http:\/\/www.maxmind.com<\/a>.",
	  "geoplugin_city":"Adana",
	  "geoplugin_region":"81",
	  "geoplugin_areaCode":"0",
	  "geoplugin_dmaCode":"0",
	  "geoplugin_countryCode":"TR",
	  "geoplugin_countryName":"Turkey",
	  "geoplugin_continentCode":"EU",
	  "geoplugin_latitude":"37.001701",
	  "geoplugin_longitude":"35.328899",
	  "geoplugin_regionCode":"81",
	  "geoplugin_regionName":"81",
	  "geoplugin_currencyCode":"TRY",
	  "geoplugin_currencySymbol":"&#89;&#84;&#76;",
	  "geoplugin_currencySymbol_UTF8":"YTL",
	  "geoplugin_currencyConverter":3.0026
	}
    **/
	public static function ipapiservice($par1 = "", $par2 = ""){

		$par2 == "" ? $var = self::realip() : $var = $par2;
	
		if(self::realip() == "::1"){

			$Api	=	self::curl("http://www.geoplugin.net/json.gp");

			return		 self::jsondecode($Api)->$par1;

		}else{

			$Api	=	self::curl("http://www.geoplugin.net/json.gp?ip=".$var);

			return		 self::jsondecode($Api)->$par1;
		}

	}


	public static function isextends($par1, $par2 = array("jpg","JPG","png","PNG")){

		!in_array(end(explode('.', $par1)), $par2) ?  $Var = false :  $Var = true;
		return $Var;

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Key Oluşturucu
    **/

	/***************************************************************
	md2           32 a9046c73e00331af68917d3804f70655
	md4           32 866437cb7a794bce2b727acc0362ee27
	md5           32 5d41402abc4b2a76b9719d911017c592
	sha1          40 aaf4c61ddcc5e8a2dabede0f3b482cd9aea9434d
	sha256        64 2cf24dba5fb0a30e26e83b2ac5b9e29e1b161e5c1fa7425e730
	sha384        96 59e1748777448c69de6b800d7a33bbfb9ff1b463e44354c3553
	sha512       128 9b71d224bd62f3785d96d46ad3ea3d73319bfbc2890caadae2d
	ripemd128     32 789d569f08ed7055e94b4289a4195012
	ripemd160     40 108f07b8382412612c048d07d13f814118445acd
	ripemd256     64 cc1d2594aece0a064b7aed75a57283d9490fd5705ed3d66bf9a
	ripemd320     80 eb0cf45114c56a8421fbcb33430fa22e0cd607560a88bbe14ce
	whirlpool    128 0a25f55d7308eca6b9567a7ed3bd1b46327f0f1ffdc804dd8bb
	tiger128,3    32 a78862336f7ffd2c8a3874f89b1b74f2
	tiger160,3    40 a78862336f7ffd2c8a3874f89b1b74f2f27bdbca
	tiger192,3    48 a78862336f7ffd2c8a3874f89b1b74f2f27bdbca39660254
	tiger128,4    32 1c2a939f230ee5e828f5d0eae5947135
	tiger160,4    40 1c2a939f230ee5e828f5d0eae5947135741cd0ae
	tiger192,4    48 1c2a939f230ee5e828f5d0eae5947135741cd0aefeeb2adc
	snefru        64 7c5f22b1a92d9470efea37ec6ed00b2357a4ce3c41aa6e28e3b
	gost          64 a7eb5d08ddf2363f1ea0317a803fcef81d33863c8b2f9f6d7d1
	adler32        8 062c0215
	crc32          8 3d653119
	crc32b         8 3610a686
	haval128,3    32 85c3e4fac0ba4d85519978fdc3d1d9be
	haval160,3    40 0e53b29ad41cea507a343cdd8b62106864f6b3fe
	haval192,3    48 bfaf81218bbb8ee51b600f5088c4b8601558ff56e2de1c4f
	haval224,3    56 92d0e3354be5d525616f217660e0f860b5d472a9cb99d6766be
	haval256,3    64 26718e4fb05595cb8703a672a8ae91eea071cac5e7426173d4c
	haval128,4    32 fe10754e0b31d69d4ece9c7a46e044e5
	haval160,4    40 b9afd44b015f8afce44e4e02d8b908ed857afbd1
	haval192,4    48 ae73833a09e84691d0214f360ee5027396f12599e3618118
	haval224,4    56 e1ad67dc7a5901496b15dab92c2715de4b120af2baf661ecd92
	haval256,4    64 2d39577df3a6a63168826b2a10f07a65a676f5776a0772e0a87
	haval128,5    32 d20e920d5be9d9d34855accb501d1987
	haval160,5    40 dac5e2024bfea142e53d1422b90c9ee2c8187cc6
	haval192,5    48 bbb99b1e989ec3174019b20792fd92dd67175c2ff6ce5965
	haval224,5    56 aa6551d75e33a9c5cd4141e9a068b1fc7b6d847f85c3ab16295
	haval256,5    64 348298791817d5088a6de6c1b6364756d404a50bd64e645035f
	 ***************************************************************/
	public static function encode($par1, $par2){

		return  hash($par1, $par2);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Key Oluşturucu
    **/
	public function key($par1, $par2){

		return  hash('haval256,5', rand($par1, $par2) );

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Açılış Hızı Testi
    **/
	public static function testmicrotime(){

		return microtime();

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Açılış Hızı Testi
    **/
	public static function issetfill($par){

		if($par !== ""){ $var = true; }else{ $var = false; }
		return $var;

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Zaman Farkını Gösterme
    *	Kullanımı $this->timecover("2015-08-08 14:35:50"); OUT (  15 dakika önce )
    **/
	public static function timecover( $zaman, $language = [
		"justnow" 		=> "az önce.", 		"secondago" 	=> "saniye önce",
		"minuteago" 	=> "dakika önce", 	"hourago" 		=> "saat önce",
		"dayago" 		=> "gün önce", 		"weekago" 		=> "hafta önce",
		"monthago" 		=> "ay önce", 		"yearago" 		=> "yıl önce"
	]){


		$zaman 			=  strtotime($zaman);
		$zaman_farki	= time() - $zaman;
		$saniye 		= $zaman_farki;
		$dakika 		= round($zaman_farki/60);
		$saat 			= round($zaman_farki/3600);
		$gun 			= round($zaman_farki/86400);
		$hafta 			= round($zaman_farki/604800);
		$ay 			= round($zaman_farki/2419200);
		$yil 			= round($zaman_farki/29030400);

		if( $saniye < 60 ){
			if ($saniye == 0){
				return $language["justnow"];
			} else {
				return $saniye .$language["secondago"];
			}
		} else if ( $dakika < 60 ){
			return $dakika .$language["minuteago"];
		} else if ( $saat < 24 ){
			return $saat.$language["hourago"];
		} else if ( $gun < 7 ){
			return $gun .$language["dayago"];
		} else if ( $hafta < 4 ){
			return $hafta.$language["weekago"];
		} else if ( $ay < 12 ){
			return $ay .$language["monthago"];
		} else {
			return $yil.$language["yearago"];
		}

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Zamanı Türkçeye Çevirmek
    *	Kullanımı $this->timetr("2015-05-05 15:15:15"); OUT ( 05 Mayıs 2015, 15:15 )
    **/
	public static function timetr($par, $mounts = [
		"january" 		=> "Ocak", 		"fabruary" 		=> "Şubat",
		"march" 		=> "Mart", 		"april" 		=> "Nisan",
		"may" 			=> "Mayıs", 	"june" 			=> "Haziran",
		"july" 			=> "Temmuz", 	"august" 		=> "Ağustos",
		"september" 	=> "Eylül", 	"octomber" 		=> "Ekim",
		"november" 		=> "Kasım", 	"december" 		=> "Aralık"
	]){


		$explode = explode(" ", $par);
		$explode2 = explode("-", $explode[0]);
		$zaman = substr($explode[1], 0, 5);

		if ($explode2[1] == "1") $ay 		= $mounts["january"];
		elseif ($explode2[1] == "2") $ay 	= $mounts["fabruary"];
		elseif ($explode2[1] == "3") $ay 	= $mounts["march"];
		elseif ($explode2[1] == "4") $ay 	= $mounts["april"];
		elseif ($explode2[1] == "5") $ay 	= $mounts["may"];
		elseif ($explode2[1] == "6") $ay 	= $mounts["june"];
		elseif ($explode2[1] == "7") $ay 	= $mounts["july"];
		elseif ($explode2[1] == "8") $ay 	= $mounts["august"];
		elseif ($explode2[1] == "9") $ay 	= $mounts["september"];
		elseif ($explode2[1] == "10") $ay 	= $mounts["octomber"];
		elseif ($explode2[1] == "11") $ay 	= $mounts["november"];
		elseif ($explode2[1] == "12") $ay 	= $mounts["december"];

		return $explode2[2]." ".$ay." ".$explode2[0].", ".$zaman;

	}


	/*
    *   @Mixed
    *   @param
    *   Tüm Post Değerlerini Parçalar
    */
	public static function post($par){

		return $_POST[$par];

	}

	/*
    *   @Mixed
    *   @param
    *   Tüm Files Değerlerini Parçalar
    */
	public static function files($par1,$par2){

		return $_FILES[$par][$par2];

	}


	/*
    *   @Mixed
    *   @param
    *   Tüm Get Değerlerini Parçalar
    */
	public static function get($par){

		return $_GET[$par];

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Sosyal Uygulama
    *	Kullanımı $this->hashtag("yazı alanı #yazi","url","class");
    **/
	public static function hashtag($Par,$Url = "",$Class = ""){

		$Value	=	"@#+([a-zA-Z0-9şŞiİıIğĞüÜçÇöÖ]+)@si";	## Tagları Temizle
		$Par	=	preg_replace($Value,'<a  class="'.$Class.'" href="'.$Url.'$1">$0</a>',$Par); ## Convert Link
		return 		$Par;

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Sosyal Uygulama
    *	Kullanımı $this->slash("yazı alanı //yazi","url","class");
    **/
	public static function slash($Par,$Url = "" ,$Class = ""){

		$Value	=	"@//+([a-zA-Z0-9şŞiİıIğĞüÜçÇöÖ]+)@si";	## Tagları Temizle
		$Par	=	preg_replace($Value,'<a  class="'.$Class.'" href="'.$Url.'$1">$0</a>',$Par); ## Convert Link
		return 		$Par;

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Yazı Uzunluk Ayarı
    *	Kullanımı $this->textlimit("bu alan bir denemedir",6,""); OUT (  bu ala  )
    **/
	public static function textlimit($yazi,$uzunluk,$bitis = "..."){

		$count = strlen($yazi);
		if($count > $uzunluk){
			$kisitla	 = mb_substr($yazi,0,$uzunluk, "utf-8");
			$kisitla	.= $bitis;
		}else if (($count == $uzunluk) or ($count <= $uzunluk)){
			$kisitla = $yazi.$bitis;
		}
		return $kisitla;
	}


	/*
    *   @Mixed
    *   @Param
    *   @ Klasor kontrolu
    **/
	public static function isfolder($par){

		if(is_dir($par)){ return true; }else{ return false; }
	}


	/*
    *   @Mixed
    *   @Param
    *   @ Dosya kontrolu
    **/
	public static function isfile($par){

		if(is_file($par)){ return true; }else{ return false; }
	}


	/*
    *   @Mixed
    *   @Param
    *   @ Yeni dosya Ayarı
    **/
	public static function newfile($par1, $par2){

		return mkdir($par1, $par2);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Klasor Silme Ayarı
    **/
	public static function unfile($par){

		return rmdir($par);

	}



	/*
    *   @Mixed
    *   @Param
    *   @ Sql İnjection Koruma
    *	Kullanımı $this->Antiinjection("url");
    **/
	public static function Antiinjection($Par){

		$Par    = preg_replace(sql_regcase("/(from|select|insert|delete|where|drop table|show tables|#|\*|--|\\\\)/"),"",$Par);
		$Par    = trim($Par);
		$Par    = strip_tags($Par);
		$Par    = addslashes($Par);
		$Par    = stripslashes($Par);
		$Par    = str_replace("'", "''", $Par);
		return $Par;
	}

	/*
    *   @Mixed
    *   @Param
    *   @ Utf-8 Formatı ile yazı buyuk yazma
    *	Kullanımı $this->textbig("cengiz"); OUT (  CENGİZ  )
    **/
	public static function textbig($par){

		$Convert = 	mb_strtoupper($par,'UTF-8');
		return 		$Convert;

	}
	
	
	/*
	*
	*
	*	Perma Link
	*
	*/
	public static function permalink($string)
	{
		$find = array('-','  ','Ç', 'Ş', 'Ğ', 'Ü', 'İ', 'Ö', 'ç', 'ş', 'ğ', 'ü', 'ö', 'ı', '+', '#');
		$replace = array('','','c', 's', 'g', 'u', 'i', 'o', 'c', 's', 'g', 'u', 'o', 'i', 'plus', 'sharp');
		$string = strtolower(str_replace($find, $replace, $string));
		$string = preg_replace("@[^A-Za-z0-9\-_\.\+]@i", ' ', $string);
		$string = trim(preg_replace('/\s+/', ' ', $string));
		$string = str_replace(' ', '-', $string);
		return $string;
	}
	/*
    *   @Mixed
    *   @Param
    *   @ Bbcode İle Yazı ekleme
    *	Kullanımı $this->bbkod("[youtube=urlcode]");   $this->bbkod("[b]Kalın yazı[/b]");
    **/
	public static function bbkod($par)
	{
		$bul = array(
			'#\[youtube=(.*?)\]#',
			'#\[b\](.*?)\[/b\]#'
		);

		$degistir = array(
			'<iframe width="100%" height="315" src="http://www.youtube.com/embed/$1" frameborder="0" allowfullscreen></iframe>',
			'<strong>$1</strong>'
		);

		return preg_replace($bul, $degistir, $par);
	}


	/*
    *   @Mixed
    *   @Param
    *   @ Önemli Bilgi Gizleme
    *	Kullanımı $this->isinfo("45854527841",2,8);
    **/
	public static function hiddeninfo($str, $start, $end){

		$after = mb_substr($str, 0, $start, 'utf8');
		$repeat = str_repeat('*', $end);
		$before = mb_substr($str, ($start + $end), strlen($str), 'utf8');
		return $after.$repeat.$before;

	}



	/*
    *   @Mixed
    *   @Param
    *   @ Php bilgilendirme Dokümanı
    **/
	public static function info(){

		return phpinfo();

	}



	/*
    *   @Mixed
    *   @Param
    *   @ Yönlendirme İşlemleri
    **/
	public static function location($par){

		echo  "<meta http-equiv='refresh' content='0;URL=".$par."'>";

	}


	/*
    *   @Mixed
    *   @Param
    *   @ Yenileme ( REFLESH ) İşlemleri
    **/
	public static function refresh($par1 = "0", $par2 = ""){

		echo  "<meta http-equiv='refresh' content='".$par1.";URL=".$par2."'>";

	}



	/*
     *   @Mixed
     *   @Param
     *   @ session_start Start Oturum Güvenligi
     **/
	public static function imagesupload($par1, $par2){

		return move_uploaded_file($par1, $par2);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ ob_start Oturum Güvenligi
    **/
	public static function obstart($par = null){

		return ob_start($par);

	}


	/*
    *   @Mixed
    *   @Param
    *   @ session_start Start Oturum Güvenligi
    **/
	public static function sessionstart(){

		return session_start();

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Session Atama
    **/
	public static function session($par){

		return $_SESSION[$par];

	}

	/*
	*   @Mixed
	*   @Param
	*   @ Session Atama
	**/
	public static function sessionadd($par1,$par2){

		return $_SESSION[$par1] = $par2;

	}





	/*
    *   @Mixed
    *   @Param
    *   @ session_destroy Bitirme Oturum Güvenligi
    **/
	public static function unsession(){

		return session_destroy();

	}

	/*
    *   @Mixed
    *   @Param
    *   @ ob_end_flush Bitirme Oturum Güvenligi
    **/
	public static function unobstart(){

		return ob_end_flush();

	}



	/*
    *   @Mixed
    *   @Param
    *   @ ob_end_flush Bitirme Oturum Güvenligi
    **/
	public static function timeback($par){

		$date = date_create(date("Y-m-d"));
		date_sub($date, date_interval_create_from_date_string($par.' days'));
		return 	date_format($date, 'Y-m-d');

	}




	/*
    *   @Mixed
    *   @Param
    *   @ Curl Get Functionu
    **/
	public static function curlget($url) {

		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
		return curl_exec($ch);
		curl_close($ch);

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Curl Post Functionu
    **/
	public static function curlpost($url,$par = []) {

		$ch=curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_POST,1);
		curl_setopt($ch,CURLOPT_POSTFIELDS,$par);
		return curl_exec($ch);
		curl_close($ch);

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Curl Post Functionu
    **/
	public static function curl($url) {

		$ch = curl_init();
		$hc = "YahooSeeker-Testing/v3.9 (compatible; Mozilla 4.0; MSIE 5.5; Yahoo! Search - Web Search)";
		curl_setopt($ch, CURLOPT_REFERER, 'http://www.google.com');
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_USERAGENT, $hc);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		return  curl_exec($ch);
		curl_close($ch);

	}

	/*
	*   @Mixed
	*   @Param
	*   @ Curl Download Functionu
	**/
	public static function curldownload($url,$name)
	{

		$ch = curl_init($url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);
		curl_close($ch);
		$use = fopen($name, "a+");
		fwrite($use, $data);
		fclose($use);
		return $use;

	}


	/*
	*   @Mixed
	*   @Param ["file",name","url"]
	*   @ Curl Upload Functionu
	**/
	public static function curlupload($arg = [])
	{ 

	    $ch = curl_init();
        $filePath = $_FILES[$arg['file']]['tmp_name'];
        $fileName = $_FILES[$arg['file']]['name'];
        $data = array('name' => $arg['name'],'onepar' => $arg['file'], 'data' => "@$filePath", 'fileName' => $arg['name']);             
        curl_setopt($ch, CURLOPT_URL, $arg['server']);
        curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch,  CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        return curl_exec($ch);
        curl_close($ch);
		
	}

	
	/*
    *   @Mixed
    *   @Param
    *   @ Google Chart Kare Kod
	*	@ Param : $size = SizexSize And $text "Yazı Alanı"
    **/
	public static function googlechar($size, $text) {

		return "https://chart.googleapis.com/chart?cht=qr&chs=".$size."&chl=".$text."&choe=UTF-8&chld=L|4";

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Tarayıcı Varsayılan Dili
    **/
	public static function browserlang() {

		return substr($_SERVER['HTTP_ACCEPT_LANGUAGE'],0,2);

	}

	/*
    *   @Mixed
    *   @Param
    *   @ Meta Çekme
	*	@ Param : Site Meta Çekme
    **/
	public static function metainfo($url) {

		return get_meta_tags($url);

	}

	/*
    *   @Mixed
    *   @Param Developer Gerçek İp Bulma
    */
	public static function realip(){
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
    *   @Mixed
    *   @Param $Mixed Filitreleme
    */
	public static function filtervar($par1 = "", $par2 = ""){

		if($par2 = "Ip"){
			$par	=  filter_var($par1, FILTER_VALIDATE_IP);
		}else 	if($par2 = "Email"){
			$par	=  filter_var($par1, FILTER_VALIDATE_EMAIL);
		}else 	if($par2 = "Int"){
			$par	=  filter_var($par1, FILTER_VALIDATE_INT);
		}else 	if($par2 = "Url"){
			$par	=  filter_var($par1, FILTER_VALIDATE_URL);
		}else 	if($par2 = "Regexp"){
			$par	=  filter_var($par1, FILTER_VALIDATE_REGEXP);
		}else 	if($par2 = "Mac"){
			$par	=  filter_var($par1, FILTER_VALIDATE_MAC);
		}else 	if($par2 = "Float"){
			$par	=  filter_var($par1, FILTER_VALIDATE_FLOAT);
		}else 	if($par2 = "Ipv4"){
			$par	=  filter_var($par1, FILTER_FLAG_IPV4);
		}else 	if($par2 = "Boolen"){
			$par	=  filter_var($par1, FILTER_VALIDATE_BOOLEAN);
		}

		return $par;

	}

}
