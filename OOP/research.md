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