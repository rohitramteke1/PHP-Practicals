<?php
    class ArrayOps {
        // declaring an array
        public $asc_arr = array();
        public $asc_arr_2D = array();

        function arrayInput() {
            // taking an array input

            $size = (int)readline("Enter the size of an Array: ");

            for ($i=0; $i < $size; $i++) { 
                $key = readline("Enter the key: ");
                $value = readline("Enter the value: ");
                $this->asc_arr[$key] = $value;
            }
        }

        function array2Dconvert() {
            // Converting it into the 2D array
            foreach ($this->asc_arr as $key => $value) { 
                array_push($this->asc_arr_2D, [$key, $value]);
            }
        }

        function arrayPrint() {
            print_r($this->asc_arr_2D);
        }

    }

    $ops = new ArrayOps();

    $ops->arrayInput();
    $ops->array2Dconvert();
    $ops->arrayPrint();

?>