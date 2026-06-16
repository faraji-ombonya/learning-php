<?php

/**
 * Arrays
 * 
 * - Can serve as numbered lists and key-value stores
 */

/**
 * Basic Array Types
 * 
 * - Numeric arrays - uses numbers as keys starting from 0
 * - Associative arrays - uses named keys
 * 
 * - Arrays can mix both styles
 */

// Numeric array
$colors = ['red', 'blue', 'green'];

// Associative array
$user = [
    'name' => 'John',
    'age' => 25
];

// Mixed array
$mixed = [
    42,                 // index 0
    'key' => 'value',   // key 'key'
    'another value'     // index 1
];


/**
 * Creating Arrays
 * 
 * - Most common: square bracket syntax []
 * - olrder array() syntax
 */

// Modern syntax
$array1 = ['a', 'b', 'c'];

// Creating with specific keys
$user = [
    'name' => 'John',
    'age' => 25
];


/**
 * Working with arrays
 * 
 * - For numeric arrays, we use index number
 * - For associative arrays, we use the key name
 */

$colors = ['red', 'blue', 'green'];
echo $colors[0];    // outputs: red

$user = ['name' => 'John', 'age' => 25];
echo $user['name']; // outputs: John

// Arrays can be nested
$blogPost = [
    'title' => 'Getting Started wuth PHP',
    'author' => [
        'name' => 'John',
        'role' => 'editor'
    ],
    'comments' => [
        ['user' => 'Jane', 'text' => 'Great article!'],
        ['user' => 'Bob', 'text' => 'Thanks for shairing']
    ]
];

echo $blogPost['title'];                // outputs: Greeting Started with PHP
echo $blogPost['author']['name'];       // outputs: John
echo $blogPost['comments'][0]['text'];  // outputs: Great article!

/**
 * Common operations
 */

// Adding elements
$colors[] = 'yellow';                   // Add to numeric arrays
$user['email'] = 'john@example.com';    // Add to associative array

// Checking elements
isset($user['email']);      // Check if key exists
in_array('red', $colors);   // Check if value exists

// Array size
count($colors); // Get number of elements

// Remove elements
unset($user['email']);  // Remove specific element

/**
 * Real World Example
 */

$post = [
    'title' => 'Getting Started with PHP',
    'author' => [
        'name' => 'John Doe',
        'role' => 'editor'
    ],
    'tags' => ['php', 'beginner', 'tutorial'],
    'published' => true,
    'comments' => [
        [
            'user' => 'Jane',
            'message' => 'Great article!'
        ],
        [
            'user' => 'Mike',
            'message' => 'Thanks for sharing'
        ]
    ]
];