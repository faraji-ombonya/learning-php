<?php

/**
 * Variables & Types
 * 
 * - Basic types
 * - variable declarations
 * - type handling
 */

/**
 * Variables
 * 
 * - start with a $
 * - can hold any type of data
 * - change a variable type by assigning a different kind of value
 */

$status = 404;

$status = "active";

$status = true;


/**
 *  Strings
 * 
 * - Created with single or double quotes
 * - Double quotes allow you to embed variables
 * - Single Quotes treat everything as literal text
 * - Strings can be combined using the dot(.)operator
 */

$name = 'John';
$greeting = "Hello $name";  // Hello John
$greeting = 'Hello $name';  // Hello $name

// Multiple strings can be chained
$fullName = 'John' . ' ' . 'Doe'; // John Doe


/**
 * Numbers
 * 
 * - Have 2 numeric types, Integer and Float (a.k.a double)
 */

$age = 25;          // Integer
$price = 19.99;     // Float (a.k.a double)


/**
 * Booleans
 * 
 * - Represents two possible values, true or false
 */

$isActive = true;
$isDeleted = false;


/**
 * Type Casting
 * 
 * - Explicitly convert(cast) variables from one type to another
 */

$price = "19.99";   // string
$age = (int) $price;    // converts to 19
$isActive = (bool) 1;   // converts to true
$text = (string) 42;    // converts to "42"

// Performs automatic type coercion
$result = "123" + 456;  // "123" becomes integer, result is 579
$sum = 42 . " items";   // 42 becomes string "42 items"
if ("hello"){       // string is coerced to true
    // this runs
}