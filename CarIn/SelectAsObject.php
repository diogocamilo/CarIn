<?php
	
/**
* 
*/ 	

	class SelectAsObject
	{		
		function __construct()
		{
					
		}

		public function executeQuery($sqlQuery, $pdo){			
			 $result = $pdo->query($sqlQuery)->fetchObject($obj);
		     return $result;
		}
	}


	$sao = new SelectAsObject();
?>