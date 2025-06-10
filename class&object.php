<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Learn PHP</title>
</head>
<body>
    <?php 
        # Object Oriented Programming.
        class Employee{
            //Properties
            public $name;
            public $salary;

            //Constructor
            public function __construct($name, $salary) {
                $this->name = $name;
                $this->salary = $salary;
            }

            //Function Or Method.
            public function show_details() {
                echo "Name = ". $this->name;
                echo "<br>";
                echo "Salary = ". $this->salary;
                echo "<br>";
                
            }
        }
        # Object 1
        $e1 =  new Employee("Afthal", 15000);
        $e1 -> show_details();

        # Object 2
        $e2 =  new Employee("Yaseen", 38000);
        $e2 -> show_details();
    
    ?>
</body>
</html>