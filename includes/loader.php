<?php
	class Loader {
	
		public function load($classes = array()){
		
			if(is_array($classes)){
				foreach($classes as $class){
					include('class.' . $class . '.php');
				}
			}
			
		}
		
	}
?>