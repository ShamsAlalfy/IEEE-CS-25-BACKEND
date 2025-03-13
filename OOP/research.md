# Who invent OOP and Why ?

“Object-Oriented Programming” (OOP) was coined by Alan Kay circa 1966 or 1967 while he was at grad school.

**OOP** was invented to deal with project scale.

The idea is that procedural languages allow you to do only a single type of architecture 

The question then was: what would a language look like that could be used to do other types of architecture? Maybe types of architecture that the language designers did not have in mind when they created the language?

**OOP** was just one attempt to get this done. It was inspired by the idea that the most basic units of programming should not be useless on their own.

For example, data without code is just as useless as code without data.

So **OOP** is based on the idea that the basic units of programming are neither code nor data, but virtual machines. Because a virtual machine, on its own, can do everything a computer can. Out of lack of foresight, these were called “objects”. 

[Reference](https://www.quora.com/Who-invented-Object-Oriented-Programming-OOP-and-what-was-the-motivation-and-inspiration)

---

# Encapsulation & Abstraction

***Encapsulation:***

- **Encapsulation** is an approach that joins data members(variables) and implementation details into a single unit called the class that implies class is formed with variables and methods present inside it.
- **Encapsulation** is a protection mechanism for data members present inside the class i.e data members are not accessible by end users.
- In **encapsulation**, the data members(variables) of a class will be not accessible by other classes and can be accessed only through the methods of their current class.
- **Encapsulation** is implemented using a private and protected access modifier.
- **Encapsulation** is used for reducing the complexity of a web application

***Abstraction:***
- The structure of representing necessary features without including the background details is specified as an **abstraction**.
- **Abstraction** is the technique of covering the implementation details from the end-user and only displaying the functionality to the users.
- **Abstraction** is utilized to execute polymorphic ideas with classes i.e With **abstraction** we can only declare the methods inside a class. usually, another derive class is used to describe the same methods.
- An **abstract class**cannot be instantiated so end-users can't directly access it.
- It is used to reduce the complexity of the application and make the code reusable in an application.

[Reference](https://www.tutorialspoint.com/explain-difference-between-abstraction-and-encapsulation-in-php)

---

# Inheritance

Inheritance is a fundamental object-oriented programming concept in PHP where a class (subclass or child class) can inherit properties and methods from another class (superclass or parent class). It enables code reusability and promotes hierarchical relationships between classes.

***Syntax:***
```php
class ParentClass {
    public $var1;

    public function fun1() {
        return "fun1";
    }
}

class ChildClass extends ParentClass {
    public function fun2() {
        return "fun2";
    }
}
```

[Reference](https://www.geeksforgeeks.org/what-is-inheritance-in-php/)

---

# PHP Interfaces & Polymorphism

**Interfaces** allow you to specify what methods a class should implement.

**Interfaces** make it easy to use a variety of different classes in the same way. When one or more classes use the same interface, it is referred to as "**polymorphism**".

```php
<?php
interface name {
  public function method1();
  public function method2($var1, $var2);
  public function method3();
}
?>
```

**Polymorphism** is a core principle of object-oriented programming (OOP) where objects of different classes can be treated as objects of a common superclass. It allows methods to perform different actions based on the object they are called upon, enhancing code flexibility and reusability.

***Syntax:***
```php
class ParentClass {
    public function fun1() {
        return "fun1";
    }
}

class ChildClass extends ParentClass {
    public function fun1() {
        return "fun2";
    }
}
```
[Reference](https://www.w3schools.com/php/php_oop_interfaces.asp)
[Reference](https://www.geeksforgeeks.org/how-to-implement-polymorphism-in-php/)

---

# Traits

PHP only supports single inheritance: a child class can inherit only from one single parent.

So, what if a class needs to inherit multiple behaviors? OOP **traits** solve this problem.

**Traits** are used to declare methods that can be used in multiple classes. **Traits** can have methods and abstract methods that can be used in multiple classes, and the methods can have any access modifier (public, private, or protected).

```php
<?php
trait TraitName {
  // some code...
}
?>
```

[Reference](https://www.w3schools.com/php/php_oop_traits.asp)

---

# Late static binding & How it works ?

Programs are saved and then directly run on the browser, the script is executed through a web server and we get the output. We don’t compile PHP programs manually but that does not mean it is never compiled. The PHP interpreter does that for you and runs it. So there are two phases, first, compile-time and second run time. During the compile time, the normal variables are replaced with their values but the static keywords are replaced only in the run time. Overriding a property in child class and creating the instance of the child class, so to get the overridden output, the late static binding concept is used by writing static keyword before using the property. Whenever a PHP interpreter gets the request to compile a function. If it sees any static property, then it leaves the property pending for run time and the property gets its value during runtime from the function it is being called. This is called late **static binding**.

[Reference](https://www.geeksforgeeks.org/what-is-late-static-bindings-in-php/)

---

# Using OOP with MySQL (PDO & MySQLi)

PDO will work on 12 different database systems, whereas MySQLi will only work with MySQL databases.

So, if you have to switch your project to use another database, PDO makes the process easy. You only have to change the connection string and a few queries. With MySQLi, you will need to rewrite the entire code - queries included.

Both are object-oriented, but MySQLi also offers a procedural API.

Both support Prepared Statements. Prepared Statements protect from SQL injection, and are very important for web application security.

**MySQLi Example**
```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>
```
**PDO Example**

```php
<?php
$servername = "localhost";
$username = "username";
$password = "password";

try {
  $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 
```

[Reference](https://www.w3schools.com/php/php_mysql_connect.asp)

---

# Factory PatternAnonymous Classes

The Factory Method Design Pattern is a creational design pattern that provides an interface for creating objects in a superclass, allowing subclasses to alter the type of objects that will be created. This pattern is particularly useful when the exact types of objects to be created may vary or need to be determined at runtime, enabling flexibility and extensibility in object creation.


[Reference](https://www.geeksforgeeks.org/factory-method-for-designing-pattern/)

---

# Anonymous Classes

**Anonymous classes** mostly behave just like normal classes. You can extend other classes, implement interfaces, use traits, etc. You can pass arguments to the class through its constructor. One of the use cases you’ll find as an example in the documentation is giving access to private or protected properties to a nested anonymous class.

```php
$anonymous = new Class{
   public function introduce(){ 
     echo "Hello from anonymous class";
   }
};
$anonymous->introduce(); // Hello from anonymous class
```

[Reference](https://medium.com/@shahburhan/anonymous-classes-in-php-6eca8ed53063)

---

# MVC Architecture

The **Model-View-Controller (MVC)** is an architectural pattern that separates an application into three main logical components: the model, the view, and the controller. Each of these components are built to handle specific development aspects of an application. MVC is one of the most frequently used industry-standard web development framework to create scalable and extensible projects.

**Model**
The Model component corresponds to all the data-related logic that the user works with. This can represent either the data that is being transferred between the View and Controller components or any other business logic-related data. For example, a Customer object will retrieve the customer information from the database, manipulate it and update it data back to the database or use it to render data.

**View**
The View component is used for all the UI logic of the application. For example, the Customer view will include all the UI components such as text boxes, dropdowns, etc. that the final user interacts with.

**Controller**
Controllers act as an interface between Model and View components to process all the business logic and incoming requests, manipulate data using the Model component and interact with the Views to render the final output. For example, the Customer controller will handle all the interactions and inputs from the Customer View and update the database using the Customer Model. The same controller will be used to view the Customer data.

[Reference](https://www.tutorialspoint.com/mvc_framework/mvc_framework_introduction.htm)

---

