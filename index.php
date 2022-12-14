<?php
    $word = $_GET['word'];
    $censor = '***';
    $text = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. A, doloribus sapiente deleniti quidem, 
    ipsum corrupti repellendus necessitatibus sunt earum odio quas. Et rem in fugiat quaerat. Ipsa voluptate iusto sed? Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere nemo iure omnis ab eum corporis commodi, sunt quaerat soluta voluptates pariatur, numquam dolores laborum deleniti officiis tempore doloremque quia iusto.
    Asperiores repudiandae nulla esse inventore incidunt necessitatibus dolore porro libero saepe temporibus reiciendis suscipit consectetur, dicta modi soluta voluptatibus quo laborum ipsa perferendis nobis harum blanditiis quisquam! Labore, ullam vero.
    Eos perspiciatis accusamus rem, ea earum ut commodi numquam quos ex voluptates corrupti laudantium est possimus quisquam impedit excepturi non debitis beatae. Voluptas consequuntur expedita accusantium, in commodi vero? Eligendi!
    Omnis sit ipsa iure ratione. Enim, laudantium deserunt recusandae, commodi fugiat dolorum iste facilis dicta qui illo est ducimus officia? Exercitationem consectetur vitae nesciunt natus in ducimus eveniet officiis praesentium!
    Odit numquam aliquam quaerat reiciendis perferendis saepe veritatis nostrum officia, itaque voluptatum nemo expedita, modi possimus, laudantium explicabo optio accusamus asperiores impedit minima cum recusandae dolorum pariatur ipsam facilis? Rerum.
    Laudantium, animi mollitia incidunt soluta consectetur voluptatem tenetur cum provident deleniti reprehenderit excepturi quae nemo delectus neque, quod quidem? At ipsa vitae quidem expedita, quaerat fuga aperiam molestias adipisci laborum!
    Placeat, accusantium temporibus sunt consectetur expedita dicta tempore tenetur magnam qui dolor ipsa fugiat architecto laudantium iste velit odio tempora deleniti aliquid et laboriosam assumenda quas blanditiis suscipit nisi. Debitis!
    Veritatis sint repellendus beatae et at sapiente error reiciendis pariatur ratione eum, illum est. Eveniet aliquid quisquam accusamus id! Maiores dolor vero quidem quisquam. Adipisci et soluta culpa eligendi voluptatum?
    Vel hic eveniet reiciendis in non. Ex beatae consequatur ipsa nihil quos placeat quas inventore accusamus in corporis perspiciatis, fugiat maxime quia rerum, sint sapiente voluptates velit dignissimos sequi accusantium.';
    $text_censored = str_ireplace($word, '***', $text, $subtituions);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Censuratore</h1>

    <form action="" method="get">
        <label for="word">Parola da censurare</label>
        <input type="text" name="word" id="word-id">
        <button>Censura</button>
    </form>

    <h2>Paragrafo originale</h2>
    <?= $text; ?>

    <h2>Paragrafo originale <?= strlen($text); ?></h2>

    <h2>Paragrafo corretto</h2>
    <?= $text_censored; ?>

    <h2>Paragrafo corretto <?= strlen($text_censored); ?></h2>
    <h2>Parole censurate <?= $subtituions; ?></h2>

</body>
</html>