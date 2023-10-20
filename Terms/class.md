### Class

**What (Definition):** A class is a blueprint for creating objects. It defines attributes (also known as properties or fields) and behaviours (methods or functions) that its objects can have.

**Real-life example:** Think of a class as a blueprint for a product in a shopping store. Let's say, a "Shirt". The blueprint or "Class" for the shirt would define attributes like size, colour, and material. It would also define behaviours like "wear" or "wash".

**Why (Evolution):** Before OOP, we had procedural programming. Data was often scattered and functions operated on it from outside. This made it challenging to maintain and scale code. OOP and the concept of classes brought data and behaviour together, making it more organized and encapsulated.

**How (Old vs. New):** In procedural programming, you'd have separate data structures and functions. Now, with OOP, data and functions related to an entity are bundled together in classes.

**Future:** Classes and OOP are foundational, and while programming paradigms may evolve, the idea of organizing and encapsulating related data and behaviour is likely here to stay.

**Code Example:**

```php
/**
 * Class Shirt represents a blueprint for a Shirt.
 */
class Shirt {

    /**
     * @var string The size of the shirt (e.g., "S", "M", "L").
     */
    private $size;

    /**
     * @var string The color of the shirt.
     */
    private $color;

    /**
     * Shirt constructor.
     *
     * @param string $size  The size of the shirt.
     * @param string $color The color of the shirt.
     */
    public function __construct(string $size, string $color) {
        $this->size = $size;
        $this->color = $color;
    }

    /**
     * Wear the shirt.
     *
     * @return string Action result.
     */
    public function wear(): string {
        return "You're wearing a {$this->color} shirt of size {$this->size}.";
    }
}

// Usage
$shirt = new Shirt('M', 'Blue');
echo $shirt->wear(); // Outputs: You're wearing a Blue shirt of size M.
```

**Instructions on Usage:** 

1. Define attributes (properties) for the class. For our Shirt class, we defined `size` and `color`.
2. The `__construct` method is a special method called a constructor. It is invoked when you create a new instance of the class.
3. Use encapsulation by setting properties as `private`. This prevents unwanted external modifications.
4. Provide methods to interact with the object. Here, we have a `wear` method to simulate wearing the shirt.
5. Instantiate an object of the class using the `new` keyword.
6. Interact with the object using its methods.

**Why this Way:** This method keeps data and behaviour encapsulated, making it easier to manage, read, and maintain. If there's a need to add a new attribute or behavior to the Shirt, it can be done within the class without affecting other parts of the codebase. This wasn't the case with procedural programming where functions and data were scattered, leading to potential side effects.
