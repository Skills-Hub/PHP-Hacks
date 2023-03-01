## PHP Comments 
Comments are used to add explanations and notes to PHP code that are not executed by the interpreter.

Example:

``` 
// This is a single-line comment
/* This is a 
   multi-line comment */
# This is another single-line comment
```
Comments can be used to disable specific lines of code temporarily.
Example:

```
/*
$variable = 10;
$result = $variable * 2;
*/
// The above lines are commented out, so they will not be executed
$new_variable = 5;
$new_result = $new_variable * 2; // This line will be executed
```

Comments can be used to document functions and classes, allowing other developers to understand how they work.
Example:

```
/**
 * This function calculates the area of a rectangle
 * 
 * @param int $length The length of the rectangle
 * @param int $width The width of the rectangle
 * @return int The area of the rectangle
 */
function calculate_rectangle_area($length, $width) {
   return $length * $width;
}
```



Sure, here are some additional key facts about PHP comments:

Comments are not executed as code, but are used to provide human-readable explanations or to temporarily disable code during testing or debugging.
PHP supports both single-line comments, which start with "//" or "#" and continue until the end of the line, and multi-line comments, which start with "/" and end with "/".
Comments can also be used to generate documentation for functions, classes, and other elements of your code, using special comment formats like PHPDoc or Doxygen.
Here are three more examples of how comments can be used in PHP:

Single-line comments:
```
// This is a single-line comment
echo "Hello, world!"; // This is also a comment
```

Multi-line comments:

```
/* This is a
multi-line comment
that spans multiple lines */
echo "Hello, world!";
PHPDoc-style comments for a function:
bash
```

```
/**
 * Returns the sum of two integers
 *
 * @param int $a The first integer
 * @param int $b The second integer
 * @return int The sum of $a and $b
 */
function sum($a, $b) {
    return $a + $b;
}

```


