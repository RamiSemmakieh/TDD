<?php 

    namespace TDD\Test;
    require dirname(dirname(__FILE__))  .  DIRECTORY_SEPARATOR . 'vendor' . DIRECTORY_SEPARATOR . 'autoload.php';

    use PHPUnit\Framework\TestCase;
    use TDD\Receipt;

    class ReceiptTest extends TestCase {
        
        public $receipt;

        // public function setUp() {
            
        // }

        // public function tearDown() {
        //     unset($this->receipt);
        // }

        /**
         * @dataProvider provideTotal
         */
        public function testTotal($input, $expected) {
            $this->receipt = new Receipt();
            $output = $this->receipt->total($input);

            $this->assertEquals(
                $expected,
                $output,
                "Wanneer ik de getallen optel moet er het $expected uitkomen"
            );
        }
        public function provideTotal() {
            return [
                [[56, 128, 89, 24, 133, 233, 212, 23], 898],
                [[56, 128, 89, 24, 133, 233, 212, 24], 899],
                [[56, 128, 89, 24, 133, 233, 212, 20], 895]
            ];
        }
        /**
         * @dataProvider provideProduct
         */
        public function testProduct($input, $expected, $text) {
            $this->receipt = new Receipt();
            $output = $this->receipt->product($input);

            $this->assertEquals(
                $expected,
                $output,
                "Wanneer ik de getallen vermenigvuldig moet er het $expected uitkomen bij de $text"
            );
        }
        public function provideProduct() {
            return [
                'ints_totaal_24' => [[56, 128, 89, 24, 133, 233, 212, 23], 2313505327644672, "Eerste test"],
                [[2,5], 10, "Tweede test"],
                [[2,5,5], 50, "Derde test"],
                [[2,5,5,5], 250, "Vierde test"],
                [[2,5,5,5,5], 1250, " zesde"]
            ];
        }
        
    }

?>