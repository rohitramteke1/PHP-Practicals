<?php
    class Practical {
        // Properties
        public $input;
        public $num_array;

        // Methods
        function __input() {
            $this->input = readline("Enter the three numbers which are seprated by space: ");
            $this->num_array = array_map('intval', explode(' ', $this->input));
        }

        function __max($num1, $num2) {
            return $num1 > $num2 ? $num1 : $num2;
        }

        function traverseForMax() {
            $max = PHP_INT_MIN;
            foreach($this->num_array as $number) {
                if ($max < $number) {
                    $max = $number;
                }
                $max = __max($max, );
            }
            echo $max ." is the maximum number in your array.\n";
        }

    }

    $Student_obj = new Practical();

    $Student_obj->__input();
    $Student_obj->traverseForMax();

    // var_dump($num_array);
?>