<?php
  // CURSO PHP ?>

<html>
    <head>
        <tilte>CURSO DE PHP</title>
</head>
<body>
<?php
echo "Hola gente estoy haciendo un curso en PHP";
?>
</body>
</html>

?
 echo "Hola gente estoy haciendo un curso en PHP"; 
?>

<?php 
echo "Amo tomar este tipo de cursos!"; 
?>

<?php 
echo "Celulares"; 
echo "Computadores"; 
echo "Electrodomesticos"; 
?>

<?php 
echo "<strong> This is a bold text.</strong>"; 
?>

<?php 
echo "<p>Hola gente estoy haciendo un curso en PHP!</p>";
//This is a single-line comment
echo "<p>Es muy bueno llevar a cabo este tipo de cursos!</p>";
echo "<p>Se adquieren grandes conocimientos</p>"; 
?>

<?php 
echo "<p>Hola gente estoy haciendo un curso en PHP</p>"; 
/*
This is a multi-line comment block 
that spans over 
multiple lines
*/
echo "<p>Es muy bueno llevar a cabo este tipo de cursos!</p>"; 
echo "<p>Se adquieren grandes conocimientos</p>"; 
?>

$variable_name =value; 

<?php 
$name = "Melissa Sanchez"; 
$age = 18; 
echo $name; 

//OutPuts "Melissa"
?>

define(name, value, case-insensitive)

<?php
define ("MSG", "Que todos tengan un lindo dia!"); 
echo MSG; 

// Outputs "Que todos tengan un lindo dia!"
?>

<?php 
define("MSG", "Que todos tengan un lindo dia", true); 
echo msg; 

//Outputs "Que todos tengan un lindo dia!"
?>

<?php 
$string1 = "Hola gente estoy haciendo un curso de PHP!"; //double quotes
$string2 = "Hola gente estoy haciendo un curso de PHP"; //single quotes

?>

<?php 
$int1 = 42; // positive number
$int2 = -42; // negative number

?>

<?php 
$x = 42.168; 
?>

<?php 
$x = true; $y = false; 
?>

<?php 
$str = "10"; 
$int = 20; 
$sum = $str + $int; 
echo ($sum); 

//Outputs 30
?>

<?php 
$name = "Gabriela"; 
function getname() {
    echo $name; 
}
getname(); 
 
//Error: Undefined variable: name
?>

<?php 
$name = "Gabriela"; 
function getname() {
    global $name; 
    echo $name;
}

getname(); 
 
//Outputs "Gabriela"
?>

<?php 
$a = "Buenas tardes"; 
$Buenas = "Buenas tardes"; 
echo $$a; 

//Outputs "Buenas tardes"
?>

<?php
$num1 = 8; 
$num2 = 6; 

//Addition
echo $num1 + $num2; //14

//Subtraction
echo $num1 - $num2; //2

//Multiplication
echo $num1 * $num2; //48

//Division
echo $num1 / $num2; //1.333333333333
?>

<?php 
$x = 14; 
$y = 3; 
echo $x % $y; //2
?>

$x++; // equivalent to $x = $x+1; 
$x--; // equivalent to $x-1; 

$x++; // post-increment
$x--; // post-increment
++$x; // pre-increment
--$x; // pre-increment

$a = 2; $b = $a++; // $a=3, $b=2
$a = 2; $b = ++$a; // $a=3, $b=3

$num1 = 5; 
$num2 = $num1; 

<?php 
$x = 50; 
$x += 100; 
echo $x; 

//Outputs = 150
?>

$name1 = "Gabriela"; 
$name2 = "Melissa"; 
$name3 = "Ktronix"; 

$names = array("Gabriela", "Melissa", "Krtronix"); 

$names[0] = "Gabriela"; 
$names[1] = "Melissa"; 
$names[2] = "Ktronix"; 

echo $names[1]; //Outputs "Empresa"

<?php
$myArray[0] = "Gabriela"; 
$myArray[1] = "<strong>PHP</strong>"; 
$myArray[2] = 21; 

echo "$myArray[0] is $myArray[2] and knows
$myArray[1]"; 

//Outputs "Gabriela is 21 knows PHP"
?>

$people = array("Gabriela"=>"27", "Melissa"=>"21",
"Ktronix"=>"42";)
//or
$people["Gabriela"] = "27"; 
$people["Melissa"] = "21"; 
$people["Ktronix"] = "42"; 

$people =array("Gabriela"=>"27", "Melissa"=>"21",
"Ktronix"=>"42"); 

echo $people["Melissa"]; //Outputs 21"

$people = array(
    "online"=>array("Gabriela", "Melissa"),
    "offline"=>array("Cesar", "Alejandro", "Marcela"),
    "away"=>array("Daniela", "Felipe")
); 

echo $people["online"][0]; //Outputs "Gabriela"
echo $people["away"][1]; //Outputs "Felipe"

if (condition) {
    code to be executed if condition is true;    
} else {
    code to be executed if condition is false; 
}

<?php 
$x = 10; 
$y = 20; 
if $x >= $y) {
    echo $x;
} else {
    echo $y; 
}

//Outputs "20"
?>

if (condition) {
    code to be executed if condition is true;
} elseif (condition) {
    code to be executed if condition is true;
} else {
    code to be executed if condition is false;
}

<?php
$age =21; 
if ($age<=13) {
    echo "Child."; 
} elseif ($age>13 && $age<19) {
    echo "Teenager";
} else {
    echo "Adult"; 
}

//Outputs "Adult"
?>

while (condition is true) {
    code to be executed; 
}

$i =1; 
while ($i < 7 ) {
    echo "The value is $i <br />"; 
    $i++;
} 

do {
    code to be executed; 
} while (condition is true); 

$i = 5; 
do {
    echo "The number is" . $i . "<br/>";
    $i++;
} while ($i <= 7); 

//Output
//The number is 5 
//The numver is 6
//The number is 7

for (init; test; increment) {
    code to be executed;
}

for ($a =0; $a < 6; $a++) {
    echo "Value of a : ". $a . "<br/>"; 
}

foreach (array as $value) {
    code to be executed; 
} 
//or
foreach (array as $key => $value) {
    code to be executed;
}

$names = array("Gabriela", "Melissa", "Ktronix") 
foreach ($names as $name) {
    eco $name."<br/>";
}
//Gabriela
//Melissa
//Ktronix

switch (n) {
    case value1: 
        //code to be executed if n=value1
        break; 
    case value2:
        //code to be executed if n=value2
        break; 
    ...
    default: 
    //code to be executed if n is different from all 
labels
}

$today = "Tue"; 

switch ($today) {
    case "Mon": 
        echo "Today is Monday."; 
        break;
    case "Tue": 
        echo "Today us Tuesday.";
        break; 
    case "Wed":
        echo "Today is Wednesday.";
        break;
    case "Thu":
        echo "Today is Thursday.";
        break; 
    case "Fri": 
        echo "Today is Friday.";
        break; 
    case "Sat": 
        echo "Today is Saturday.";
        break; 
    case "Sun": 
        echo "Roday is Sunday.";
        break; 
    default: 
    echo "Invalid day."; 
}

//Outputs "Today is Tuesday."

$x=5; 
switch ($x) {
    case 1: 
        echo "One"; 
        break; 
    case 2: 
        echo "Two";
        break; 
    default: 
    echo "No match";
    }
//Outputs "No match"

$day = "Wed"; 
switch ($day) {
    case "Mon": 
        echo "First day of the week";
        break;
    case "Tue": 
    case "Wed": 
    case "Thu": 
        echo "Working day"; 
        break; 
    case "Fri": 
        echo "Friday!"; 
        break; 
    default "Weekend!"; 
}

//Outputs "Working day"

$x=1; 
switch ($x) {
    case 1: 
        echo "One"; 
    case 2: 
        echo "Tho";
    case 3: 
        echo "Three"; 
    default: 
    echo "No match";
}

//Outputs "OneThoThreeNo match"

for ($i=0;  $i<10; 4i++) {
    if ($i%2==0) {
        continue;
    }
    echo $i.""; 
}

//Outputs: 1 3 5 7 9 

<?php
echo "<h1> Bienvenidos</h1>";
?>

<html>
    <body>

    <?php include "header.php"; ?>

    <p>Some text.</p>
    <p>Some text.</p>
</body>
</html>

<html>
    <body>
        <?php include "header.php"; ?>

        <p>This is a paragraph</p>
</body>
</html>

function functionName() {
    //code to be executed
}

function sayHello() {
    echo "Hello!";
}

sayHello(); //call the function

//Outputs "Hello!"

function multiplyByTwo($number) {
    $answer = $number * 2; 
    echo $answer;
}
multiplyByTwo(3);
//Outputs 6

function setCounter($num=10) {
    echo "Counter is ".$num;
}
setCounter(42); //Counter is 42 
setCounter(); //Counter is 10

function mult($num1, $num2) {
    $res = $num1 * $num2;
    return $res;
}

echo mult(8,3);
//Outputs 24

<?php 
echo $_SERVER["SCRIPT_NAME"];
//Outputs /"somefile.php"
?>

<?php 
echo $_SERVER["HTTP_HOST"];
//Outputs "localhost"
?>

<?php 
$hots = $_SERVER["HTTP_HOST"];
$image_path = $host."/images";
?>

<?php 
require "config.php";
echo "<img src=".$image_path."header.png" />;
?>

<form action="first.php" method="psot">
    <p>Name: <input type="text" name="name" /></p>
    <p>Age: <input type="text" name="age" /></p>
    <p><input type="submit" name="submit" value="submit"
/></p>
</form>

<html>
    <body>
        Welcolmme <?php echo $_POST["name"]; ?><br />
        your ayer: <?php echo $_POST["age"]; ?>
</body>
</html>

<form action="actionGet.php" method="get">
    Name: <imput type="txt" name="name" /><br /><br />
    Age: <input type="text" name="age" /><br /><br />
    <input type="submit" name="submit" value="submit" />
</form>

<?php 
echo "Hi ".$GET["name"].".";
echo "You are ".$_GET["age"]."years old"; 
?>

<?php 
//Strar the session
session_start();

$_SESSION["color"] = "red";
$_SESSION["name"] = "Gabriela";
?>

<?php
//Start the session
session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php 
        echo "Your name is " . $_SESSION["name"];
        //Outputs "Your name is Gabriela"
        ?>
    </body>
</html>

setcookie(name, value, expire, path, domain, secure, httponly);

<?php 
$value = "Gabriela";
setcookie("user", $value, time() + (86400 * 30), "/");

if(isset($_COOKIE["user"])) {
    echo "Value is: ". $_COOKIE["user"];
}
//Outputs "Value is: Gabriela"
?>

$myfile = fopen("file.txt", "w");

<?php 
$myfile = fopen("names.txt", "w");

$txt = "Gabriela/s";
fwrite($myfile, $txt);
$txt = "Felipe/s";
fwrite($myfile, $txt);

fclose($myfile);

/* File contains:
Gabriela
Felipe
*/
?>

$myfile = "test.txt";
$fh = fopen($myFile, "a");
fwrite($fh, "some text");
fclose($fh);

<?php
if(isset($_POST["text"])) {
    $name = $_POST["text"];
    $handle = fopen("names.txt", "a");
    fwrite($handle, $name. "\n");
    fclose($handle);
}
?>
<form method="post">
    Name: <input type="text" name="text" />
    <input type="submit" name="submit" />
</form>

$read = file("names.text");
foreach ($read as $line) {
    echo $line .",";
}

$read = file("names.txt");
$count = count/$read;
$i = 1; 
foreach ($read as $line) {
    echo $line; 
    if ($i < $count) {
        echo ","; 
    }
    $i++;
}

class Person {
    public $age; //property
    public function speak()  {//method
       echo "Hola!"
    }
}

$bob = new Person();

echo $bob->age;

class Person {
    public $age;
    function speak() {
        echo "Hola!";
    }
}
$p1 = new Person(); //instantiate an object
$p1->age = 23; // assignment
echo $p1->age; // 23
$p1->speak(); // Hola!

class Dog {
    public $legs=4;
    public function display() {
        echo $this->legs;
    }
}
$d1 = new Dog(); 
$d1->display(); //4

$d2 = new Dog(); 
$d2->legs = 2;
$d2->display(); //2

class person { 
    public function__construct() {
        echo "Object created"; 
    }
}
$p = new Person(); 

class Person {
    public function__destruct() {
        echo "Object destroyed";
    }
}
$p = new Person();

class Animal {
    public $name;
    public function hola() {
        echo "Hi from Animal";
    }
}
class Dog extends Animal {
}

$d = new Dog(); 
$d->Hola(); 

<?php 
interface AnimalInterfase {
    public function makeSound();
}
class Dog implements AnimalInterfase {
    public function makeSound() {
        echo "Woof! <br /">
    }
}
class Cat implements AnimalInterfase {
    public function makeSound() {
        echo "Meow! <br />";
    }
}
$myObj1 = new Dog();
$myObj1->makeSound();

$myObj2 = new Cat(); 
$myObj2->makeSound();
?>

class Demo implements AInterfase, BInterface,
CInterface {
    //functions declared in interfaces must be defined
    here
}

<?php 
abstract class Fruit {
    private $color;

    abstract public function eat();

    public function setColor($c) {
        $this->color = $c;
    }
}

class Apple extends Fruit {
    public function eat() {
        echo "Omnomnom";
    }
}

$obj = new Apple();
$obj->eat();
?>

<?php 
class myClass {
    static $myStaticProperty = 42;
}

echo myClass::$myStaticProperty;
?>

<?php 
class myClass {
    static $myProperty = 42; 
    static function myMethod() {
        echo self::$myProperty;
    }
}

myClass::myMethod();
?>

<?php 
class myClass {
    final function myFunction() {
        echo "Parent";
    }
}
//ERROR because a final method canot be overridden in child classes.
class myClass2 extends myClass {
    function myFunction() {
        echo "Child";
    }
}
?>

<?php 
final class myFinalClass {
}
//ERROR because a final class cannot be inherited.
clas myClass extends myFinalClass {
}
?>

