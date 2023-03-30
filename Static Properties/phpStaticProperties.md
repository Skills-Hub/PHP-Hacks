# 📝 PHP Static Properties
# Introduction
In PHP, a static property is a property that is associated with a class rather than with any particular instance of that class. Static properties are useful when you need to store data that is shared across all instances of a class.

# Body
To define a static property in PHP, use the static keyword:

```php

class MyClass {
  public static $myStaticProperty = "Hello, world!";
}
```
You can then access the static property using the :: operator:

```php

echo MyClass::$myStaticProperty;
```
Static properties are shared across all instances of a class:

```php

class MyClass {
  public static $myStaticProperty = "Hello, world!";
}

$obj1 = new MyClass();
$obj2 = new MyClass();

$obj1::$myStaticProperty = "Goodbye, world!";

echo $obj2::$myStaticProperty; // outputs "Goodbye, world!"
```
You can also use the self keyword to reference the current class in the static property definition and in static methods:

```php

class MyClass {
  public static $myStaticProperty = "Hello, world!";

  public static function myStaticMethod() {
    echo self::$myStaticProperty;
  }
}
```
# Conclusion
Static properties are a useful feature in PHP that allow you to store data that is shared across all instances of a class. They are defined using the static keyword, and can be accessed using the :: operator. Static properties are shared across all instances of a class, which means that changing the value of a static property on one instance will affect all other instances. By using static properties, you can write more modular and maintainable code, and avoid the need to duplicate data across multiple instances of your classes.

# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
