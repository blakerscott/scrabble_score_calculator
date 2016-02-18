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

		function test_ScoreSetter_twoPointLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'DIRT';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('5', $result);
		}

		function test_ScoreSetter_threePointLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'PI';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('4', $result);
		}

		function test_ScoreSetter_fourPointLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'HI';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('5', $result);
		}



	}

?>
