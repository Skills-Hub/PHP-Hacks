
**1. Class**

**Real-life Practical Scenario:** 
Think of a shoe shop. The blueprint for a specific type of shoe, say, "Sneakers", is defined with its attributes like size, color, and brand. This blueprint doesn't represent a specific sneaker, but the idea or concept of what a sneaker is.

**5W Rule (Real-life):**
- **What?** Blueprint of a sneaker.
- **Who?** Shoe designers.
- **When?** Before the actual sneakers are produced.
- **Where?** In a shoe design studio.
- **Why?** To provide a consistent design for creating specific sneakers.

**5W Coding Example:**
- **What?** A `Class` in PHP.
- **Who?** Developers.
- **When?** Before creating objects.
- **Where?** In a PHP script or file.
- **Why?** To define the structure and behavior of objects.

```php
/**
 * Class Sneaker - representing the blueprint of a sneaker.
 */
class Sneaker {
    /**
     * @var string $color The color of the sneaker.
     */
    private $color;

    /**
     * @var int $size The size of the sneaker.
     */
    private $size;

    /**
     * @var string $brand The brand of the sneaker.
     */
    private $brand;

    /**
     * Sneaker constructor.
     *
     * @param string $color
     * @param int $size
     * @param string $brand
     */
    public function __construct($color, $size, $brand) {
        $this->color = $color;
        $this->size = $size;
        $this->brand = $brand;
    }

    /**
     * Get the color of the sneaker.
     *
     * @return string
     */
    public function getColor() {
        return $this->color;
    }

    /**
     * Get the size of the sneaker.
     *
     * @return int
     */
    public function getSize() {
        return $this->size;
    }

    /**
     * Get the brand of the sneaker.
     *
     * @return string
     */
    public function getBrand() {
        return $this->brand;
    }
}

// How to use the above class?

// 1. Create a file named "Sneaker.php" and copy the above class definition into it.
// 2. Include "Sneaker.php" in your main script.
// 3. Instantiate the Sneaker class:

include "Sneaker.php";

$mySneaker = new Sneaker("Red", 42, "Nike");
echo "I have a " . $mySneaker->getColor() . " " . $mySneaker->getBrand() . " sneaker of size " . $mySneaker->getSize() . ".";
```
