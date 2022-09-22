<?php

    class Practical_B4 {
        public $str;
        
        function strToLower($word) {
            return strtolower($word);
        }

        function countWords() {
            // Case-1
            $list_of_words = explode(" ", $this->str);
            $sentence = array_map("strToLower", $list_of_words);
            $count = array();

            foreach($sentence as $key => $word) {
                array_push($count, count(array_keys($sentence, $word)));
            }

            // Word + their Corresponding Count
            for ($i=0; $i < count($count); $i++) { 
                echo "$list_of_words[$i]" . " $count[$i]\n";
            }

            // // Case-2: TODO: CaseSensitive
            // print_r(array_count_values($list_of_words));
        }

        function input() {
            $this->str = readline("Enter the string: ");
        }
    }

    // Class Obj
    $p = new Practical_B4();
    $p->input();
    $p->countWords();
?>