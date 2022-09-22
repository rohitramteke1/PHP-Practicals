<?php
    class Calculator {
        public $a;
        public $b;
        function input() {
            $this->a = (int)readline("Enter the first number: ");
            $this->b = (int)readline("Enter the second number: ");
        }
        function addition() {
            $this->input();
            echo "
            Addition: " . ($this->a + $this->b) . "\n\n";
        }
        function subtraction() {
            $this->input();
            echo "
            Subtraction: " . ($this->a - $this->b) . "\n\n";

        }
        function multiplication() {
            $this->input();
            echo "
            Multiplication: " ($this->a + $this->b) . "\n\n";

        }
        function division() {
            $this->input();
            echo "
            Division: " . ($this->a / $this->b) . "\n\n";

        }
        function reminder() {
            $this->input();
            echo "
            Reminder: " .($this->a % $this->b) . "\n\n";

        }
        function instruction() {
            echo "
            1.addition
            2.subtraction
            3.multiplication
            4.division
            5.reminder
            0.Exit(0)\n\n";
        }
        function eval($choice) {
            switch ($choice) {
                case '1':
                    $this->addition();
                    break;
                case '2':
                    $this->subtraction();
                    break;
                case '3':
                    $this->multiplication();
                    break;
                case '4':
                    $this->division();
                    break;
                case '5':
                    $this->reminder();
                    break;
                case '0':
                    echo "\nExit(0) Successfully...\n";
                    exit(0);
                    break;
                
                default:
                    echo "\nWrong Choice...";
                    break;
            }
        }
    }

    // Create an object of calc
    $calc = new Calculator();

    do {
        $calc->instruction();
        $choice = readline("Enter your choice: ");
        $calc->eval($choice);

        $response = readline("Do you want more: ");
    } while ($response == 'y' || $response == 'Y');

?>