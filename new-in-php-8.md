## New features in PHP 8 

### Union Types: 
Allows a variable to have more than one data type. Example: function foo(string|int $param) { ... }
### Named Arguments: 
Allows passing arguments to a function by name instead of position. Example: function foo($x, $y, $z) { ... }; foo(y: 2, x: 1, z: 3);
### Nullsafe Operator: 
Allows accessing properties or methods of a nullable variable without causing a "null pointer" error. Example: $result = $obj?->getProperty()?->getValue();
### Match Expressions: 
A simpler and more concise replacement for switch statements. Example: match($val) { 1 => 'one', 2 => 'two', default => 'other' };
### Attributes: 
A declarative way to add metadata to code elements. Example: #[Route('/users', methods: ['GET'])] function getUsers() { ... }
### Constructor Property Promotion: 
A shorthand way to declare class properties and assign values in the constructor. Example: class Foo { public function __construct(private $x, private $y) { ... } }
### Weak Maps: 
A data structure that allows storing weak references to objects, useful for caching or memoization. Example: $cache = new WeakMap(); $cache[$key] = $value;
### str_contains() Function: 
A new function that checks if a string contains another string. Example: if (str_contains($haystack, $needle)) { ... }
### get_debug_type() Function: 
A new function that returns the debug type of a variable. Example: echo get_debug_type($var);
### throw Expression: 
Allows throwing an exception as an expression, useful for "inline" error handling. Example: $result = $num > 0 ? $num : throw new InvalidArgumentException('Invalid argument');
### Mixed Type: 
A new data type that represents a variable with an unknown type. Example: function foo(mixed $param) { ... }
### Improved Type System: 
Improvements to the type system, including stricter type checks and better error messages. Example: function foo(int $param): string { ... }
### JIT Compiler: 
Just-In-Time compilation of PHP code, improving performance for some workloads. Example: Enable JIT with opcache.jit_buffer_size=100M in php.ini.
### New String Functions: 
New string functions, including str_starts_with(), str_ends_with(), and str_contains(). Example: if (str_starts_with($string, 'prefix')) { ... }
### New Array Functions: 
New array functions, including array_is_list() and array_contains(). Example: if (array_is_list($array)) { ... }
### Improved Error Handling: 
Improvements to error handling, including better error messages and warnings. Example: E_WARNING errors now include the file and line number.
### Dynamic Name Resolution: 
Ability to use variables or expressions as class, function, or constant names. Example: $class = 'Foo'; $obj = new $class();
### New Integer Operations: 
New integer operations, including the "exact division" operator (//) and the "null coalescing assignment" operator (??=). Example: $x //= 42; // sets $x to 42 if $x is null
### Abstract Methods in Traits: 
Traits can now include abstract methods, allowing more flexible code reuse. Example: trait Foo { abstract public function bar(); }
### Match with Expression: 
The match statement can now return a value instead of executing a block of code. Example: $result = match($val) { 1 => 'one', 2 => 'two', default
