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