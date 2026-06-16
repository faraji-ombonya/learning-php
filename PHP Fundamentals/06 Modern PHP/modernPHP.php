<?php

/**
 * Modern PHP
 */

/**
 * Constructor Property Promotion (PHP 8.0)
 */

// Old way
class User{
    public string $name;
    public string $email;

    public function __constuct(string $name, string $email) {
        $this->name = $name;
        $this->email = $email;
    }
}

// Modern way
class User{
    public function __construct(
        public string $name,
        public string $email
    ) {}
}


/**
 * Readonly Properties (PHP 8.1)
 * 
 * - adds an extra layer of safety
 * - once a property is set in the constructor, it can not be changed.
 */


class Price {
    public function __construct(
        public readonly float $amount,
        public readonly string $currency
    ) {}
}


/**
 * Match Expression (PHP 8.0)
 * 
 * - A modern replacement of the switch statement
 */

// Old way with switch
switch ($status) {
    case 200:
        $result = 'success';
        break;
    case 404:
        $result = 'not found';
        break;
    case 500:
        $result = 'server error';
        break;
    default:
        $result = 'unknown status';
}

// Modern way with match
$result = match ($status) {
    200 => 'success',
    404 => 'not found',
    500 => 'server error',
    default => 'unknown status'
};

/**
 * Nullsafe operator (PHP 8.0)
 * 
 * - Helps prevent null reference errors when accessing properties
 *  or methods in a chain
 */

// Old way
$country = null;

if ($user != null){
    if ($user->getAddress() != null){
        $country = $user->getAddress()->getCountry();
    }
}

// Modern way
$country = $user?->getAddress()?->getCountry();

/**
 * Named arguments
 * 
 * - Make function and method calls more explicit and self documenting
 */

$user = new User("John", "[john@example.com](<mailto:john@example.com>)");

// works the same
$user = new User(
    name: "John",
    email: "[john@example.com](<mailto:john@example.com>)"
);

/**
 * Typed properties
 * 
 * - help catch errors early and make code more reliable
 * - PHP ensures that only values of the correct type can be assigned to these
 *   properties
 */

class User {
    public string $name;
    public int $age;
    public ?string $email = null;   // Nullable string
}
