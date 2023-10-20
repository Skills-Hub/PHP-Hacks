
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



### **Benefits of Using Classes and Objects**:

1. **Encapsulation**:
   - **Real-Life**: In a library, you can borrow or return a book without knowing the internal system that tracks this.
   
   ```php
   /**
    * Class representing a Library.
    */
   class Library {
       private $books;

       public function borrowBook($bookName) {
           // borrow the book
       }

       public function returnBook($bookName) {
           // return the book
       }
   }
   ```

2. **Code Reusability**:
   - **Real-Life**: A library might have multiple copies of a book. They don't need separate systems for each copy.
   
   ```php
   class Book {
       protected $title;
       protected $author;
       // Other properties...
   }

   $book1 = new Book("Harry Potter", "J.K. Rowling");
   $book2 = new Book("Harry Potter", "J.K. Rowling"); // Reusing the Book class
   ```

3. **Modularity**:
   - **Real-Life**: A library has separate sections like issuing, returning, and tracking books.
   
   ```php
   class IssuingSection {
       //...
   }

   class ReturningSection {
       //...
   }

   class TrackingSystem {
       //...
   }
   ```

4. **Information Hiding**:
   - **Real-Life**: A library visitor borrows a book without knowing how the tracking system works.
   
   ```php
   class Library {
       private function trackBorrowedBook($book) {
           // track the book
       }

       public function borrowBook($book) {
           $this->trackBorrowedBook($book);
       }
   }
   ```

5. **Polymorphism**:
   - **Real-Life**: A library might allow borrowing using a student ID, library card, or digital ID.
   
   ```php
   interface BorrowingMethod {
       public function borrow($book);
   }

   class StudentID implements BorrowingMethod {
       public function borrow($book) {
           // Borrow using Student ID
       }
   }

   class LibraryCard implements BorrowingMethod {
       public function borrow($book) {
           // Borrow using Library Card
       }
   }
   ```

6. **Maintenance**:
   - **Real-Life**: Updating the library catalog when new books are added.
   
   ```php
   class LibraryCatalog {
       private $books;
       public function addBook($newBook) {
           $this->books[] = $newBook;
       }
   }
   ```

7. **Organization**:
   - **Real-Life**: Arranging books in the library by genre.
   
   ```php
   namespace Fiction;
   class Novel {
       //...
   }

   namespace History;
   class Biography {
       //...
   }
   ```

8. **Flexibility**:
   - **Real-Life**: Creating a new section in the library for digital books.
   
   ```php
   class Library {
       private $digitalSection;
       public function addDigitalSection($section) {
           $this->digitalSection = $section;
       }
   }
   ```

9. **Abstracted Complexity**:
   - **Real-Life**: Using a library's computer to search for a book without knowing the database queries behind it.
   
   ```php
   class SearchSystem {
       public function searchByTitle($title) {
           // Search logic here...
       }
       private function queryDatabase($query) {
           // Query logic here...
       }
   }
   ```

10. **Design Patterns**:
   - **Real-Life**: The library has a set routine for managing late fees.
   
   ```php
   class FeeManagement {
       public function manageFees() {
           $this->calculateFees();
           $this->notifyUser();
           // Other methods...
       }
       //...
   }
   ```

### **Drawbacks of the Old Way (Procedural Style)**:

1. **Repetitive Code**:
   - **Real-Life**: Manually recording every borrowed book without a systematic tracking system.
   
   ```php
   $borrowedBook1_title = "1984";
   $borrowedBook1_user = "John";

   $borrowedBook2_title = "Moby Dick";
   $borrowedBook2_user = "Jane";
   ```

2. **Lack of Abstraction**:
   - **Real-Life**: Tracking borrowed books, returned books, and late fees without a unified system.
   
   ```php
   function trackBorrowed($book) {
       //...
   }
   function trackReturned($book) {
       //...
   }
   function calculateLateFees($book) {
       //...
   }
   ```

3. **Difficulty in Managing Large Code Bases**:
   - **Real-Life**: Managing library books without categorization.
   
   ```php
   function addBook1() { /*...*/ }
   function addBook2() { /*...*/ }
   function addBook3() { /*...*/ }
   ```

4. **Inefficiencies in Data Handling**:
   - **Real-Life**: Manually checking which books are borrowed without a tracking system.
   
   ```php
   $book1_borrowed = true;
   $book2_borrowed = false;
   ```

5. **Lack of Encapsulation**:
   - **Real-Life**: Exposing all library records to the visitors.
   
   ```php
   $allRecords = array(/*...*/);
   ```

6. **Limited Code Reusability**:
   - **Real-Life**: Creating a new record for every book, even if multiple copies exist.
   
   ```php
   function addBookCopy1() { /*...*/ }
   function addBookCopy2() { /*...*/ }
   ```

7. **Scalability Issues**:
   - **Real-Life**: Adding more books without expanding the library space.
   
   ```php
   $maxBooks = 5000;
   ```

8. **Harder Debugging and Testing**:
   - **Real-Life**: Checking each book manually for damages.
   
   ```php
   function checkBook1() { /*...*/ }
   function checkBook2() { /*...*/ }
   ```

9. **Lack of Design Patterns**:
   - **Real-Life**: No systematic plan for managing book reservations.
   
   ```php
   function reserveBookForUser($book, $user) { /*...*/ }
   ```

10. **Higher Complexity**:
   - **Real-Life**: Trying to manage a library without specific departments or systems.
   
   ```php
   function manageEverything() { /*...*/ }
   ```

---

In the past, if Filippo, the developer at GG, wanted to introduce a new attribute, say 'pattern', he'd need to change the code everywhere. Now, with OOP, he'd only update the Shirt class, making his life, and that of other developers at Guru Graphics Limited, simpler.
