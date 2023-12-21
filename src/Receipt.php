<?php
    namespace TDD;

    class Receipt {

        public function total($bill) {
         return array_sum($bill);
        }

        public function product($test) {
            return array_product($test);
        }
    }

?>