<?php
    // Practical: C6
    class Student {

        // Attributes
        private $rollNo;
        private $name;
        private $branch;
        private $year;

        // Static variable
        public static $counter = 0;

        // Constructor
        function __construct($rollNo, $name, $branch, $year){
            self::staticProperty();
            $this->rollNo = $rollNo;
            $this->name = $name;
            $this->branch = $branch;
            $this->year = $year;
        }

        // Static Property
        public static function staticProperty() {
            self::$counter += 1;
        }

        // Methods/Property
        public function getAttr() {
            echo "RollNo: " . $this->rollNo . "\n";
            echo "Name: " . $this->name . "\n";
            echo "Branch: " . $this->branch . "\n";
            echo "Year: " . $this->year . "\n\n";
        }

        // Count Object's -> Static Method 
        public static function countObjects() {
            echo "No. of Student's " . self::$counter . "\n";
        }
    }

    $student1 = new Student(2041054, "Rohit", "Computer Enginnering", 2022);
    $student2 = new Student(1010100, "Rahul", "Computer Science", 2022);
    $student3 = new Student(2022022, "Mehul", "Information Technology", 2022);

    $student1->getAttr();
    $student2->getAttr();
    $student3->getAttr();

    Student::countObjects();

?>