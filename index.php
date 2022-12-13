<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $messaggio = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, doloribus sapiente deleniti quidem, ipsum corrupti repellendus necessitatibus sunt earum odio quas. Et rem in fugiat quaerat. Ipsa voluptate iusto sed?';
    ?>

    <h1>Ciao <?= $messaggio; ?></h1>


    <form action="" method="GET">
    <label for="messaggio">Ipsum</label>
    <input type="text" id="messaggio" name="messaggio">
    <button>Salutami!</button>
    </form>
</body>
</html>