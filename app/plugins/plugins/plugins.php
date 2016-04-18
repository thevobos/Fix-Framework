<?php 
/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
*   Time  : 13.08.2015 13:44:10 
**/


class Plugins {
	  
	/*
	*	@Mixed
	*	@Param Eklenti Dizisi
	*/  
	public $Dir = "app/plugins/";


	/*
	*	@Mixed
	*	@Param Plugins Name Global
	*/  
	public $Plugins = "function.php";
	
	
	public $Hooks	 = array();
	 
  
	/*
	*	@Mixed 
	*	@Param Eklentileri include Eder
	*/
  	public function __construct(){
		
		  foreach($this->Plugin_List() as $par) {
			
				require_once($par.$this->Plugins);
			
			}
	}
	  
	/*
	*	@Mixed 
	*	@Param Eklentileri Listeler
	*/
	public function Plugin_List($extension = "function.php"){
		
		return glob($this->Dir."*/");
		
	}
	
	/*
	*	@Mixed 
	*	@Param Eklenti Ekleme
	*/
	public function Plugin_add($name, $class, $function, $priority = 0){
			
			$this->Hooks[$name][$priority][] = array("class"=>$class, "function"=>$function); 
		
	}
	
	/*
	*	@Mixed 
	*	@Param Eklenti silme
	*/
	public function Plugin_dell($name){
			
			if(isset($this->Hooks[$name])){unset($this->Hooks[$name]);}
		
	}
	
	/*
	*	@Mixed 
	*	@Param Eklenti çalıştırma
	*/
	public function Plugin_run($name, $array = []){
		
		if(isset($this->Hooks[$name])){
			foreach($this->Hooks[$name][0] as $veri){
			
			$newname = "class".rand(0,556487).rand(5,547854);
			
			$newname = new $veri["class"];
			echo call_user_func_array(array($newname, $veri["function"]),$array);
		
			}
			
		}
		
	}
	
}
  
?>
