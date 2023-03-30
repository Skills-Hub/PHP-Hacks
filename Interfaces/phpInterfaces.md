# 📝 PHP Interfaces
# Introduction
In PHP, an interface is a contract that defines a set of methods that a class must implement. Interfaces are useful when you want to enforce a certain behavior across different classes, without worrying about their specific implementation.

# Body
To define an interface in PHP, use the interface keyword:

```php

interface MyInterface {
  public function myMethod();
}
```
Classes that implement an interface must implement all of its methods:

```php

interface MyInterface {
  public function myMethod();
}

class MyClass implements MyInterface {
  public function myMethod() {
    // implementation goes here
  }
}
```
A class can implement multiple interfaces:

```php

interface MyInterface1 {
  public function myMethod1();
}

interface MyInterface2 {
  public function myMethod2();
}

class MyClass implements MyInterface1, MyInterface2 {
  public function myMethod1() {
    // implementation goes here
  }

  public function myMethod2() {
    // implementation goes here
  }
}
```
Interfaces can also extend other interfaces:

```php

interface MyInterface1 {
  public function myMethod1();
}

interface MyInterface2 extends MyInterface1 {
  public function myMethod2();
}

class MyClass implements MyInterface2 {
  public function myMethod1() {
    // implementation goes here
  }

  public function myMethod2() {
    // implementation goes here
  }
}
```
# Conclusion
Interfaces are a powerful feature in PHP that allow you to define a contract that a class must implement. By using interfaces, you can enforce a certain behavior across different classes, without worrying about their specific implementation. A class can implement multiple interfaces, and interfaces can also extend other interfaces, making them a very flexible and modular feature of PHP.
# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
