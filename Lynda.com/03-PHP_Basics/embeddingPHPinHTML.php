<?php
    $book = [
        'title' => "The Hitchhiker's Guide to the Galaxy",
        'author' => "Douglas Adams",
        'description' => 'a comedy sci-fi adventure originally based on BBC radio series'
    ];

    $characters = [
        'Arthur Dent',
        'Ford Prefect',
        'Zaphod Beeblebrox',
        'Marvin, the paranoid android',
        'Slartibartfast'
    ];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Challenge: Embed in HTML</title>
</head>
<body>
    <h1> <?php echo $book['title'] ?> </h1>
    <p><?php echo "{$book['title']} is {$book['description']}." ?></p>
    <h2>Main Characters</h2>
    <ul>
        <li><?php echo $characters[0] ?></li>
        <li><?php echo $characters[1] ?></li>
        <li><?php echo $characters[2] ?></li>
        <li><?php echo $characters[3] ?></li>
        <li><?php echo $characters[4] ?></li>
    </ul>
</body>
</html>