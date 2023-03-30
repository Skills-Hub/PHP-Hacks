# 📝 PHP Abstract Classes
# Introduction
In PHP, an abstract class is a class that cannot be instantiated. It is designed to be extended by other classes, which can then provide their own implementation of the abstract class's methods.

# Body
To define an abstract class in PHP, use the abstract keyword in front of the class keyword:

```php

abstract class MyAbstractClass {
  // code goes here
}
```
An abstract class can contain both abstract and non-abstract methods. Abstract methods are defined using the abstract keyword and do not contain any implementation:

```php

abstract class MyAbstractClass {
  abstract public function myAbstractMethod();
}
```
Classes that extend an abstract class must implement all the abstract methods of the parent class, or they too must be declared as abstract:

```php

abstract class MyAbstractClass {
  abstract public function myAbstractMethod();
}

class MyClass extends MyAbstractClass {
  public function myAbstractMethod() {
    // implementation goes here
  }
}
```
Abstract classes can also have non-abstract methods with an implementation:

```php

abstract class MyAbstractClass {
  public function myMethod() {
    echo "Hello, world!";
  }

  abstract public function myAbstractMethod();
}
```
# Conclusion
Abstract classes are a useful feature in PHP that allow you to define a class that cannot be instantiated, but can be extended by other classes. They can contain both abstract and non-abstract methods, and can help you write more modular and maintainable code. By extending an abstract class, you can provide your own implementation of its methods and customize its behavior to fit your needs.
# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
