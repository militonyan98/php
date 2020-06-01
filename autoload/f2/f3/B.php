<?php
	namespace f2\f3;
	include_once("autoload.php");
	use \f1\A;
	class B extends A {
		function __construct(){
			
			parent::__construct();
			
			echo "class B constr";
		}
	}