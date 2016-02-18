<?php
	 class Scrabble
		{


		 function ScoreSetter($input){
			 $result = 0;
			 $array = str_split($input);
			 foreach ($array as $letter) {
				 if ($letter == "A" || "E" || "I" || "O" || "U" || "L" || "N" || "R" || "S" || "T")
				 {
				 		++$result;
				 }

			 }
			 return $result;

			}


	}
 ?>
