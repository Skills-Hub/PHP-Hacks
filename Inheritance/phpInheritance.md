# 📝 PHP Inheritance
# Introduction
Inheritance is a key concept in object-oriented programming (OOP) that allows classes to inherit properties and methods from a parent class. In PHP, inheritance is implemented using the extends keyword.

# Body
To create a child class that inherits from a parent class, use the following syntax:

```php

class ChildClass extends ParentClass {
  // code goes here
}
```
Once you have created a child class, you can access all the public and protected properties and methods of the parent class using the parent keyword. For example:

```php
class ParentClass {
  public $name;

  public function sayHello() {
    echo "Hello, " . $this->name;
  }
}

class ChildClass extends ParentClass {
  public function sayGoodbye() {
    echo "Goodbye, " . $this->name;
  }

  public function sayHello() {
    parent::sayHello();
    echo " (from ChildClass)";
  }
}

$child = new ChildClass();
$child->name = "John";
$child->sayHello(); // output: "Hello, John (from ChildClass)"
$child->sayGoodbye(); // output: "Goodbye, John"
```
In the example above, the ChildClass inherits from the ParentClass and overrides the sayHello() method. The sayHello() method in the ChildClass calls the sayHello() method in the ParentClass using the parent:: syntax, and then adds some additional text to the output.

# Conclusion
Inheritance is a powerful concept in PHP that allows you to reuse code and build complex class hierarchies. By creating child classes that inherit from parent classes, you can take advantage of all the properties and methods of the parent class, while also adding your own unique functionality.

# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
