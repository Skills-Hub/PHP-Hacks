### **Classes and Objects in PHP**

---

#### 1. **Why (The Evolution)**:
*Old Way vs. New Way (Coding Example)*:
```php
// Old Way: 
$shirt1_colour = "Red";

// New Way (OOP): 
class Shirt {
    public $colour;
    public function __construct($colour) {
        $this->colour = $colour;
    }
}

$shirt1 = new Shirt("Red");
```

---

#### 2. **What (The Definition)**:
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

