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

		function test_ScoreSetter_fivePointLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'KI';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('6', $result);
		}

		function test_ScoreSetter_sixPointLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'XJA';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('17', $result);
		}

		function test_ScoreSetter_tenPointLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'QZA';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('21', $result);
		}

		function test_ScoreSetter_lowerCaseLetter()
		{
		//Arrange
		$test_Scrabble = new Scrabble;
		$input = 'qka';

		//Act
		$result = $test_Scrabble->ScoreSetter($input);

		//Assert
		$this->assertEquals('16', $result);
		}



	}

?>
