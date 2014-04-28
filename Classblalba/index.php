<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
       <?php
       class Person {

    // define properties
    public $name;
             
    public $age;

    public $job;
    // define methods
    
    function __construct($name,$job,$age) {
        $this->name=$name;
        $this->job=$job;
        $this->age=$age;
    }

    public function changeJob($newjob) {

//        $this->job['job'] = $newjob;
         $this->job = $newjob;// Change the person's job
         echo " Your job is now ".$this->job." " ;

    }

    public function happyBirthday() {

        $this->age++; // Add 1 to the person's age
        echo " Your age is now".$this->age." "       
;

    }
       }
       
       $person1=new Person("Tom","Button-Pusher",34);
               
       $person2=new Person("John","Lever-Puller",41);

//$person1 = new Person;
//
//$person1->name = "Tom";
//
//$person1->job = "Button-Pusher";
//
//$person1->age = 34;
//
//
//
//
//$person2 = new Person;
//
//$person2->name = "John";
//
//$person2->job = "Lever-Puller";
//
//$person2->age = 41;
       

// Output the starting values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

// Tom got a promotion and had a birthday
$person1 -> changeJob('Box-Mover');
$person1 -> happyBirthday();

// John just had a birthday
$person2 -> happyBirthday();

// Output the new values for the people
echo "<pre>Person 1: ", print_r($person1, TRUE), "</pre>";
echo "<pre>Person 2: ", print_r($person2, TRUE), "</pre>";

?> 
    </body>
</html>
