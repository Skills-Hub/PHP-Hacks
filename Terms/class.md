
### **Classes and Objects in PHP**

Imagine visiting a store in Croydon named "GGLink Shirts & Tees". You see various types of shirts, each with attributes like colour, size, and price. Sonia Sabherwal, the store manager, has an organised catalogue that defines each type of shirt, its attributes, and behaviours (like discount methods, wash care instructions, etc.). In the world of coding, this catalogue is what we call a **Class**. The individual shirts you can buy or touch are the **Objects** of that class.

#### 1. **Why (The Evolution)**:
Before the object-oriented programming (OOP) approach, if Meha Jerin wanted to code an online store, she'd define every shirt's attributes and behaviours individually. Let's take a look at how she'd have done this and the newer, more efficient way to achieve the same task.

*Old Way vs. New Way (Coding Example)*:
```php
// Old Way: 
$shirt1_colour = "Red";

// New Way (OOP): 
class Shirt {
    /** @var string $colour Colour of the shirt */
    public $colour;

    /**
     * Shirt constructor.
     * 
     * @param string $colour Colour of the shirt.
     */
    public function __construct($colour) {
        $this->colour = $colour;
    }
}

$shirt1 = new Shirt("Red");
```

---

#### 2. **What (The Definition)**:
A **Class** is a blueprint for creating objects. It defines attributes (like colour) and behaviours (methods/functions, like calculating discounts). An **Object** is an instance of a class; it's a real-world representation you can interact with.

*Old Way vs. New Way (Coding Example)*:
```php
// Old Way: 
$shirt1_colour = "Blue";

// New Way (OOP): 
$shirt1 = new Shirt("Blue");
```

---

#### 3. **How (Previous vs. Current Approach)**:

*Old Way (Procedural)*:
```php
$shirt1_colour = "Blue";
$shirt1_price = 20;

function shirt1_discount($shirt1_price) {
    return $shirt1_price * 0.9;  // 10% discount
}

// For a new shirt:
$shirt2_colour = "Red";
$shirt2_price = 25;

function shirt2_discount($shirt2_price) {
    return $shirt2_price * 0.9;
}
```

*New Way (OOP)*:
```php
/**
 * Class representing a Shirt.
 */
class Shirt {
    /** @var string $colour Colour of the shirt */
    public $colour;

    /** @var float $price Price of the shirt */
    public $price;

    /**
     * Shirt constructor.
     * 
     * @param string $colour Colour of the shirt.
     * @param float $price Price of the shirt.
     */
    public function __construct($colour, $price) {
        $this->colour = $colour;
        $this->price = $price;
    }

    /**
     * Calculate the discounted price.
     * 
     * @return float
     */
    public function discount() {
        return $this->price * 0.9;
    }
}

$shirt1 = new Shirt("Blue", 20);
$shirt2 = new Shirt("Red", 25);
```

---

#### 4. **Benefit Analysis**:
OOP reduces redundancy, making the code more maintainable and scalable. Instead of defining functions and variables for each shirt individually, Taj can create multiple shirt objects with different attributes using the same class. This promotes code reusability and modular development. However, for very simple tasks, OOP might seem excessive.

*Old Way vs. New Way (Coding Example)*:
```php
// Old Way: 
function shirt1_VAT($shirt1_price) {
    return $shirt1_price * 1.2; // Adds VAT
}

// New Way (OOP): 
class Shirt {
    ...
    /**
     * Calculate price with VAT.
     * 
     * @return float
     */
    public function calculateVAT() {
        return $this->price * 1.2;
    }
}
```

---

#### 5. **Future Insight**:
As online shopping platforms, like "Guru Graphics Limited", grow more advanced, OOP concepts might evolve to include more intricate patterns and structures, such as design patterns, to manage complex shopping behaviours smoothly.

*Old Way vs. New Way (Coding Example)*:
```php
// Old Way: 
$shirt1_stock = 10;

// New Way (OOP): 
class Shirt {
    ...
    /** @var int $stock Number of shirts in stock */
    public $stock;

    /**
     * Shirt constructor.
     * 
     * @param string $colour Colour of the shirt.
     * @param float $price Price of the shirt.
     * @param int $stock Number of shirts in stock.
     */
    public function __construct($colour, $price, $stock) {
        $this->colour = $colour;
        $this->price = $price;
        $this->stock = $stock;
    }
}
```

---

#### 6. **Code Illustration**:

*Old Way vs. New Way (Coding Example)*:
```php
// Old Way: 
$shirt1_reviews = ["Good quality!"];

// New Way (OOP): 
class Shirt {
    ...
    /** @var array $reviews List of reviews for the shirt */
    public $reviews = [];

    /**
     * Add a review for the shirt.
     * 
     * @param string $review The review text.
     */
    public function addReview($review) {
        $this->reviews[] = $review;
    }
}
```

---

In the past, if Filippo, the developer at GG, wanted to introduce a new attribute, say 'pattern', he'd need to change the code everywhere. Now, with OOP, he'd only update the Shirt class, making his life, and that of other developers at Guru Graphics Limited, simpler.
