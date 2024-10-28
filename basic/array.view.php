<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Revision</title>
</head>

<body>
    <h1>
        Recommended books for PHP Developers

    </h1>

   

    <ul>
        <?php foreach ($filterBooks as $book) : ?>
            <li><?= $book["name"] ?>  : year <?= $book['year']?></li>
        <?php endforeach; ?>
    </ul>

    </ul>
</body>

</html>