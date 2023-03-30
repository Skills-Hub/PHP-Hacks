# PHP Object-Oriented Programming (OOP) :gear:
Welcome to the guide on PHP Object-Oriented Programming (OOP)! In this guide, we will explore the basics of OOP in PHP, including classes, objects, properties, methods, inheritance, and more.

# Introduction :wave:
Object-Oriented Programming (OOP) is a programming paradigm that focuses on using objects to represent and manipulate data. In PHP, OOP is implemented using classes and objects.

# Body :muscle:
# Classes and Objects
In PHP, a class is a blueprint or template for creating objects. A class defines the properties and methods that an object will have. Once a class is defined, you can create objects based on that class using the new keyword.

```php

class Car {
    public $make;
    public $model;
    public $year;

    public function honk() {
        echo 'Beep beep!';
    }
}

$myCar = new Car();
$myCar->make = 'Honda';
$myCar->model = 'Civic';
$myCar->year = 2010;

$myCar->honk(); // Outputs 'Beep beep!'
```
# Properties
In PHP, properties are variables that are defined in a class. Properties can have public, private, or protected visibility, which determines whether they can be accessed from outside the class.

```php
class Car {
    public $make;
    private $model;
    protected $year;
}
```
# Methods
In PHP, methods are functions that are defined in a class. Methods can be public, private, or protected, and they can be used to manipulate the properties of an object.

```php

class Car {
    public function honk() {
        echo 'Beep beep!';
    }
}
```
# Inheritance
In PHP, inheritance is a way to create new classes that are based on existing classes. The new class inherits all the properties and methods of the parent class, and it can also define its own properties and methods.

```php

class Vehicle {
    public function start() {
        echo 'Starting the vehicle';
    }
}

class Car extends Vehicle {
    public function honk() {
        echo 'Beep beep!';
    }
}

$myCar = new Car();
$myCar->start(); // Outputs 'Starting the vehicle'
$myCar->honk(); // Outputs 'Beep beep!'
```
# Conclusion :clap:
In this guide, we have explored the basics of OOP in PHP, including classes, objects, properties, methods, and inheritance. By using OOP, you can write more modular, reusable, and maintainable code. I hope you found this guide helpful! :smiley:

# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
