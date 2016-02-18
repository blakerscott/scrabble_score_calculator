<?php

	require_once 'src/Scrabble.php';

	class ScrabbleTest extends PHPUnit_Framework_TestCase
	{

		function test_ScoreSetter_onePointOneLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'a';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('1', $result);
		}
	}

?>
