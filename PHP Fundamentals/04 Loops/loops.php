<?php

/**
 * Loops
 * 
 * - Iterate through data
 */

/**
 * The foreach Loop
 * 
 * - Most commonly use loop in modern PHP
 */

$colors = ['red', 'blue', 'green'];

foreach($colors as $color){
    echo $color;
}

// Or ...
$invoiceItems = [
    ['item' => 'Laptop', 'price' => 1200],
    ['item' => 'Mouse', 'price' => 75],
    ['item' => 'Keyboard', 'price' => 100]
];

$total = 0;
foreach($invoiceItems as $invoiceItem){
    $total += $item['price'];
}

/**
 * The for Loop 
 */

for ($i = 0; $i < 5; $i++) {
    echo $i;
}

for ($i = 10; $i > 0; $i--) {
    echo $i;
}

/**
 * While and do While loops
 * 
 * - Continue as long as condition is true
 */

$count = 0;
while ($count < 5) {
    echo $count;

    $count++;
}

// DO-while executes atleat once
do {
    echo $count;
    $count++;
} while ($count < 5);


/**
 * Breaking and continuing.
 * 
 * - Control loop execution with break and continue.
 */

$users = [
    ['name' => 'John', 'newsletter' => true],
    ['name' => 'Jane', 'newsletter' => false],
    ['name' => 'Bob', 'newsletter' => true],
];

foreach ($users as $user) {
    if (!$user['newsletter']){
        continue;   // Skip users who did not subscribe.
    }

    sendNewsletter($user);
}

// Simple break example
$numbers = [1, 2, 3, 4, 5];
foreach ($numbers as $number){
    if ($number == 3){
        break;  // stop the loop
    }

    echo $number;
}

/**
 * A glimpse into laravel Collections
 * 
 * - A more elegant way to work with arrays
 */

// Regular PHP loop
$numbers = [1, 2, 3, 4, 5];
$doubled = [];

foreach ($numbers as $number){
    $doubled[] = $number * 2;
}

// With laravel Collections
$doubled = collect([1, 2, 3, 4, 5])->map(fn($number) => $number * 2);

// Another example showing more collection power
$users = collect([
    ['name' => 'John', 'active' => false],
    ['name' => 'Jane', 'active' => true],
    ['name' => 'Bob', 'active' => true]
]);

$users->filter(fn($user) => $user['active'])->each(fn($user) => User::create($user));