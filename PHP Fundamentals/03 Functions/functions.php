<?php

/**
 * Functions
 */

/**
 * Basic function syntax
 * 
 * - starts with the function keyword
 * - followed by name and parenthesis
 */

function sayHello(){
    echo "Hello!";
}

// call the function
sayHello();


/**
 * Parameters and arguments
 * 
 * - Pass data to functions through parameters
 */
function greet($name){
    echo "Hello, $name";
}

greet("John");  // outputs: Hello, John

// Multiple parameters
function add($a, $b){
    return $a + $b;
}

$result = add(5, 3);    // returns: 8


/**
 * Return values
 * 
 * - Send back results using the return statement.
 * - return any type including other functions
 */

function getStatus($score){
    if($score >= 75){
        return "Passed";
    }

    return "Failed";
}

$status = getStatus(80);    // returns: "Passed"


/**
 * Default parameter values
 */

function greet2($name = "Guest") {
    echo "Hello, $name!";
}

greet2();       // outputs: Hello, Guest!
greet2("John"); // outputs: Hello, John!


/**
 * Type declarations
 */

function add2(int $a, int $b): int {
    return $a + $b;
}

function getUserName(array $user): String {
    return $user['name'];
}

/**
 * Anonymous Functions (closures)
 * 
 * - Used for callbacks, or when a function is used only once.
 */


$greet3 = function($name) {
    echo "Hello, $name!";
};

$greet3("John");
