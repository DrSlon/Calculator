<?php
require_once 'library/Calculator.php';

/**
 * Calculator test case.
 */
class CalculatorTest extends PHPUnit_Framework_TestCase {
	
	/**
	 *
	 * @var Calculator
	 */
	private $Calculator;
	
	/**
	 * Prepares the environment before running a test.
	 */
	protected function setUp() {
		parent::setUp ();
		
		// TODO Auto-generated CalculatorTest::setUp()
		
		$this->Calculator = new Calculator(/* parameters */);
	}
	
	/**
	 * Cleans up the environment after running a test.
	 */
	protected function tearDown() {
		// TODO Auto-generated CalculatorTest::tearDown()
		$this->Calculator = null;
		
		parent::tearDown ();
	}
	
	/**
	 * Constructs the test case.
	 */
	public function __construct() {
		// TODO Auto-generated constructor
	}
	
	/**
	 * Tests Calculator->plus()
	 */
	public function testPlus() {
		$this->assertEquals(2, $this->Calculator->plus(1,1));
	}
	
	/**
	 * Tests Calculator->minus()
	 */
	public function testMinus() {
		$this->assertEquals(0, $this->Calculator->minus(1,1));
	}
}

