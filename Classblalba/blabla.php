<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<!-- original code that needed to be converted to OOP
?php

function changeJob($person, $newjob)
{
$person['job'] = $newjob; // Change the person's job
return $person;
}

function happyBirthday($person)
{
++$person['age']; // Add 1 to the person's age
return $person;
}

$person1 = array(
'name' => 'Tom',
'job' => 'Button-Pusher',
'age' => 34
);

$person2 = array(
'name' => 'John',
'job' => 'Lever-Puller',
'age' => 41
);

// Output the starting values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

// Tom got a promotion and had a birthday
$person1 = changeJob($person1, 'Box-Mover');
$person1 = happyBirthday($person1);

// John just had a birthday
$person2 = happyBirthday($person2);

// Output the new values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        class persoon{
            public $name;
            public $job;
            public $age;
            
             function __construct($name,$job,$age) {
        $this->name=$name;
        $this->job=$job;
        $this->age=$age;
            }
            
            function changeJob($newjob){
                echo "You got an new job you went from ".$this->job;
                $this->job = $newjob;
                echo " to ".$this->job."<br />";
            }
            
            function happyBirthday(){
                $this->age++;
                echo "Happy birthday you are now ".$this->age." years old<br />";
            }
        }
        $person1 = new persoon("Tom","Button-Pusher",34);
        
        $person2 = new persoon("John","Lever-Puller",41);
        
        echo "<pre> Person 1: ". print_r($person1, TRUE), "</pre>";
        echo "<pre> Person 2: ", print_r($person2, TRUE), "</pre>";
        
        $person1->changeJob('Box-Mover');
        $person1->happyBirthday();
        
        $person2->happyBirthday();
        
        echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
        echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";
        ?>
    </body>
</html>
