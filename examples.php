PHP Variable Scope

In PHP, variable scope refers to the area within which a variable is accessible. There are three main types of variable
scope in PHP: Global, Local, and Static.

Global Variable:

A global variable is created in the main body of the code and can be accessed anywhere in the program. It can be used
inside or outside of a function. To use a global variable inside a function, you can use the `global` keyword before the
variable. However, calling them outside the function doesn't require the global keyword.

**Example:**

```php
<?php
$name = "Harry Bhai";  // Global Variable

function global_var()
{
    global $name;
    echo "Variable inside the function: " . $name . "</br>";
}

global_var();
echo "Variable outside the function: " . $name;
?>
```

**Output:**

```
Variable inside the function: Harry Bhai
Variable outside the function: Harry Bhai
```

Local Variable:

A local variable is created within a function and can only be used inside that function. It has local scope, meaning it
cannot be accessed outside the function.

**Example:**

```php
<?php
function mytest()
{
    $capital = "Delhi";
    echo "Capital of India is: " . $capital;
}

mytest(); // Calling the function
// Using $capital outside the function will generate an error
echo $capital;
?>
```

**Output:**

```
Capital of India is: Delhi
Notice: Undefined variable: capital...
```

Static Variable:

A static variable is used when you need a local variable to retain its value between multiple calls to a function. It
persists its value even after the function has finished execution.

**Example:**

```php
<?php
function static_var()
{
    static $num1 = 3;  // Static variable
    $num2 = 6;         // Non-static variable

    // Increment in non-static variable
    $num1++;

    // Increment in static variable
    $num2++;

    echo "Static: " . $num1 . "</br>";
    echo "Non-static: " . $num2 . "</br>";
}

// First function call
static_var();

// Second function call
static_var();
?>
```

**Output:**

```
Static: 4
Non-static: 7
Static: 5
Non-static: 7
```