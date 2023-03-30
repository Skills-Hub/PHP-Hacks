# 📝 PHP Constants
# Introduction
In PHP, constants are like variables, but their value cannot be changed once they are defined. Constants are useful when you need to define a value that should not be modified throughout your script.

# Body
To define a constant in PHP, use the define() function with the following syntax:

```php

define('CONSTANT_NAME', 'constant_value');
```
Once a constant is defined, you can use it throughout your script by calling its name. For example:

```php

define('PI', 3.14);

echo PI; // output: 3.14
```
Constants are case-sensitive by default, but you can make them case-insensitive by passing true as the third parameter of the define() function:

```php

define('GREETING', 'Hello, world!', true);

echo GREETING; // output: Hello, world!
echo greeting; // output: Hello, world!
```
You can also define constants as arrays:

```php

define('FRUITS', [
  'apple',
  'banana',
  'orange'
]);

echo FRUITS[0]; // output: apple
```
# Conclusion
Constants are a useful feature in PHP that allow you to define values that cannot be changed throughout your script. They can be defined using the define() function and used throughout your code. By using constants, you can make your code more readable and maintainable.
# 📣 Share your feedback

If you have any questions, comments, or feedback on this blog post, I'd love to hear from you! You can reach me on LinkedIn [Rayan Ch.](https://www.linkedin.com/in/rayan-ch-b787ab224/) or by email at [mo@gglink.uk](mailto:mo@gglink.uk).

Thanks for reading! 😊
