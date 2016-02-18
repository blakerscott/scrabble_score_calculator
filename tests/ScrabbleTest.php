<?php

	require_once 'src/Scrabble.php';

	class ScrabbleTest extends PHPUnit_Framework_TestCase
	{

		function test_ScoreSetter_onePointOneLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'A';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('1', $result);
		}

		function test_ScoreSetter_onePointMultipleLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'SAT';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('3', $result);
		}




	}

?>
