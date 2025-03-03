# What is PHP ?
- PHP is an acronym for "PHP: Hypertext Preprocessor"
- PHP is a widely-used, open source scripting language
- PHP scripts are executed on the server
- PHP is free to download and use

[Reference](https://www.w3schools.com/php/php_intro.asp)

---

# What are the three main error types in PHP ?

1. **Parse error or Syntax Error:** It is the type of error done by the programmer in the source code of the program. The syntax error is caught by the compiler. After fixing the syntax error the compiler compile the code and execute it. Parse errors can be caused dues to unclosed quotes, missing or Extra parentheses, Unclosed braces, Missing semicolon etc

2. **Fatal Error:** It is the type of error where PHP compiler understand the PHP code but it recognizes an undeclared function. This means that function is called without the definition of function.

3. **Warning Errors :** The main reason of warning errors are including a missing file. This means that the PHP function call the missing file.

[Reference](https://www.geeksforgeeks.org/php-types-of-errors/)

---

# Echo vs Print

```echo``` and ```print``` are more or less the same. They are both used to output data to the screen.

The differences are small: ```echo``` has no return value while ```print``` has a return value of 1 so it can be used in expressions. ```echo``` can take multiple parameters (although such usage is rare) while ```print``` can take one argument. ```echo``` is marginally faster than ```print```.

[Reference](https://www.w3schools.com/php/php_echo_print.asp)

---

# Sensitivity in PHP

In **PHP**, variable and constant names are case sensitive, while function names and class names are not.

**Case Sensitive**
- Strings
- Variables
- Object Properties
- Constants

**Case Insensitive**

- Key Words
- Functions
- Object Methods
- Constants, if defined accordingly
- Class Names

[Reference](https://stackoverflow.com/questions/33273941/php-case-sensitivity)


--- 

# Programming Language VS. Scripting Language.

| Scripting Language | Programming Language |
|--------------------|----------------------|
| A scripting language is a language that uses a naive method to bring codes to a runtime environment. | A Programming language is a language which is used by humans to navigate their communication with computers. |
| These are made for a particular runtime environment. | Programming languages are of three types: low-level, middle-level, and high-level programming languages. |
| They are used to create dynamic web applications. | Programming languages are used to write computer programs. |
| Scripting languages contain different libraries. | They are high-speed languages. |
| **Examples:** Bash, Ruby, Python, JavaScript, etc. | **Examples:** C++, Java, PHP (High-level), etc. |


[Reference](https://www.geeksforgeeks.org/whats-the-difference-between-scripting-and-programming-languages/)

---

# Dynamically Typed VS. Statically Typed Language.

In **statically typed programming languages**, type checking occurs at compile time. 
At compile time, source code in a specific programming language is converted to a machine-readable format.
 This means that before source code is compiled, the type associated with each and every single 
 variable must be known.

 ***Ex:***  Java, Haskell, C, C++, C#, Scala, Kotlin, Fortran, Go, Pascal, and Swift.

 in **dynamically typed languages**, type checking takes place at runtime or execution time.
  This means that variables are checked against types only when the program is executing. 

  ***Ex:*** Python, JavaScript, Lisp, PHP, Ruby, Perl, Lua, and Tcl.


[Reference](https://www.baeldung.com/cs/statically-vs-dynamically-typed-languages)

---

# Assign by Value VS Assign by Reference.

**Assign by Value**
  - When you assign a value to a variable, a copy of that value is created and stored in the new variable.

  - Changes made to the new variable do not affect the original variable.

  - Each variable has its own independent memory space.

  - Used when you do not want the original value to change.

  ```php
    $a = 10;
    $b = $a; // Copying the value of $a
    $b = 20; // Changing $b does not affect $a
    echo $a; // Output: 10
   ```

**Assign by Reference**

  - Instead of copying the value, the new variable refers to the same memory location as the original variable.

  - Changes made to one variable affect the other.

  - Both variables share the same value in memory.

  - Used when you want to update the original value through another variable.

```php
    $a = 10;
    $b = &$a; // Assigning by reference
    $b = 20; // Changing $b also changes $a
    echo $a; // Output: 20
```

[Reference](https://www.php.net/manual/en/language.operators.assignment.php)

---

# What is the Difference Between for and foreach Loop in PHP?

```for Loop``` 

The ***for*** loop works at the end of the given condition. It is used for the implementation of variables and works in a single way. The for loop does not work in the case of associative arrays. A for loop basically consists of three portions or parts. 

```php

<?php
 
// Declaring an array
$arr = array(1, 2, 3, 4, 5);
 
// Looping over array
for($i = 0; $i < 5; $i++) {
 
// Accessing individual elements
    echo($arr[$i] . "  ");
}
 
?>
```

```foreach Loop```

The ***foreach*** loop works at the end of the array count. This loop can work with variables as well as associative arrays. Therefore, this loop can be implemented in more than one way. The foreach loop is much better and performs better in comparison to the for loop. 

```php

<?php
 
// Declaring an array
$arr = [1, 2, 3, 4, 5];
 
// Looping over array
foreach ($arr as $val) {
    // Accessing individual elements
    echo $val . "  ";
}
 
?>
```

[Reference](https://www.geeksforgeeks.org/what-is-the-difference-between-for-and-foreach-loop-in-php/)

---
