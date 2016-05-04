<?php

/*
*   Proje : Fix Cms
*   Autor : Cengiz Akcan
**/


class index extends controller

{


	public function home(){

		$this::write($this::fix());

	}


}