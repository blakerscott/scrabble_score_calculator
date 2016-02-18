<?php
	 class Scrabble
		{


		 function ScoreSetter($input){
			 $result = 0;
			 $array = str_split($input);
			 foreach ($array as $letter) {

				 if ($letter == "A" || $letter == "E" || $letter == "I" || $letter == "O" || $letter == "U" || $letter == "L" || $letter == "N" || $letter == "R" || $letter == "S" || $letter == "T")
				 {
				 		$result += 1;
				 }
				 elseif ($letter == "D" || $letter == "G")
				 {
				 		$result += 2;

				 }
				 elseif ($letter == "B" || $letter == "C" || $letter == "M" || $letter == "P")
				 {
				 		$result += 3;

				 }
				 elseif ($letter == "F" || $letter == "H" || $letter == "V" || $letter == "W" || $letter == "Y")
				 {
				 		$result += 4;

				 }
				 elseif ($letter == "K")
				 {
				 		$result += 5;

				 }

			 }
			 return $result;
		 }
	 }
?>
