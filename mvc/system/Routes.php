<?php

namespace system;

class Routes {
	
	function __construct($components){
		$directory = "controllers".DIRECTORY_SEPARATOR.$components[0]."php";
		
		if(!empty($components[0])){
			if(file_exists($directory)){
				$class_name = "controllers".DIRECTORY_SEPARATOR.ucfirst($components[0]);
				if(class_exists($class_name)){
					$object = new $class_name;
					if(!empty($components[1])){
						if(method_exists($object, $components[1])){
							$method = $components[1];
							$parameters = array();
							$length=count($components);
							$i=2;
							while($i<$length){
								if(!empty($components[$i])){
									$parameter = $components[$i];
									array_push($parameters, $parameter);
									$i++;
								}
							}
							$object->$method; //how do i pass the parameters individually??
						}
						else{
							echo "Method ".$components[1]." not found.";
						}
					}
					else{
						//TO DO
					}
				}
				else{
					echo "Class $class_name not found.";
				}
			}
			else{
				echo "File $directory not found.";
			}
		}
		else{
			//TO DO
		}
	}
	
}