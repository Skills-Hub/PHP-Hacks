# PHP Access Modifiers :key:
Welcome to the guide on PHP Access Modifiers! In this guide, we will explore the basics of access modifiers in PHP classes.

# Introduction :wave:
In object-oriented programming, access modifiers are keywords that determine the visibility and accessibility of properties and methods in a class. In PHP, there are three access modifiers: public, protected, and private.

# Body :muscle:
# Public Access Modifier
The public access modifier allows a property or method to be accessed from anywhere, both inside and outside the class.

```php

class Car {
    public $make;
    public function startEngine() {
        echo 'Engine started!';
    }
}

$myCar = new Car();
$myCar->make = 'Honda';
echo $myCar->make; // Outputs 'Honda'
$myCar->startEngine(); // Outputs 'Engine started!'
```
# Protected Access Modifier
The protected access modifier allows a property or method to be accessed only from within the class or any class that extends it.

```php

class Car {
    protected $make;
    protected function startEngine() {
        echo 'Engine started!';
    }
}

class Civic extends Car {
    public function getMake() {
        echo $this->make; // This will work because it's called from within the same class
    }
}

$myCivic = new Civic();
$myCivic->make = 'Honda'; // This will not work because make is protected
$myCivic->startEngine(); // This will not work because startEngine is protected
$myCivic->getMake(); // Outputs the value of make ('Honda')
```
# Private Access Modifier
The private access modifier allows a property or method to be accessed only from within the same class.

```php

class Car {
    private $make;
    private function startEngine() {
        echo 'Engine started!';
    }
}

$myCar = new Car();
$myCar->make = 'Honda'; // This will not work because make is private
$myCar->startEngine(); // This will not work because startEngine is private
```
# Conclusion :clap:
In this guide, we have explored the basics of access modifiers in PHP classes. Access modifiers are important for controlling the visibility and accessibility of properties and methods in a class. By using access modifiers, you can write more secure and maintainable code. I hope you found this guide helpful! :smiley:
# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
