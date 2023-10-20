
### **Classes and Objects in PHP**

Imagine visiting a store in Croydon named "GGLink Shirts & Tees". You see various types of shirts, each with attributes like colour, size, and price. Sonia Sabherwal, the store manager, has an organized catalogue that defines each type of shirt, its attributes, and behaviours (like discount methods, wash care instructions, etc.). In the world of coding, this catalogue is what we call a **Class**. The individual shirts you can buy or touch are the **Objects** of that class.

#### 1. **Why (The Evolution)**:
Before object-oriented programming (OOP), if Meha Jerin wanted to code an online store, she would define each shirt's attributes and behaviours individually. If "GGLink Shirts & Tees" introduced a new shirt type in 2005, Meha would have to write a whole new set of codes just for that shirt, leading to repetitive and unmanageable code.

#### 2. **What (The Definition)**:
A **Class** is a blueprint for creating objects. It defines attributes (like colour and size) and behaviours (methods/functions, like calculating discounts). An **Object** is an instance of a class - it's a tangible representation you can work with.

#### 3. **How (Previous vs. Current Approach)**:

*Procedural Approach (Old Way)*:
```php
$shirt1_color = "Blue";
$shirt1_size = "M";
$shirt1_price = 20;

function shirt1_discount($shirt1_price) {
    return $shirt1_price * 0.9;  // 10% discount
}

// If Ryan wanted to introduce another shirt:
$shirt2_color = "Red";
$shirt2_size = "L";
$shirt2_price = 25;

function shirt2_discount($shirt2_price) {
    return $shirt2_price * 0.9;
}
```

*Object-Oriented Approach (New Way)*:
```php
/**
 * Class representing a Shirt.
 */
class Shirt {
    public $color;
    public $size;
    public $price;

    public function __construct($color, $size, $price) {
        $this->color = $color;
        $this->size = $size;
        $this->price = $price;
    }

    /**
     * Calculate the discounted price.
     * @return float
     */
    public function discount() {
        return $this->price * 0.9;
    }
}

$shirt1 = new Shirt("Blue", "M", 20);
$shirt2 = new Shirt("Red", "L", 25);
```

#### 4. **Benefit Analysis**:
OOP reduces redundancy, making the code more maintainable and scalable. Instead of defining functions and variables for each shirt individually, Taj can create multiple shirt objects with different attributes using the same class. It promotes code reusability and modular development. However, for very simple and small tasks, OOP might seem overkill.

#### 5. **Future Insight**:
As online shopping platforms like "Guru Graphics Limited" become more sophisticated, OOP concepts may evolve to include more intricate patterns and structures, such as design patterns, to handle complex shopping behaviours seamlessly.

#### 6. **Code Illustration**:
The aforementioned OOP code can be incorporated into any e-commerce platform to represent products like shirts. With further development, features like color variations, inventory management, and customer reviews can be added.

In the past, if Filippo, the developer at GG, had to introduce a new attribute, say 'pattern', he'd have to change the code everywhere. Now, with OOP, he'd just update the Shirt class, making his life, and that of other developers at Guru Graphics Limited, simpler.

