<?php

include('classes/cookie.php');

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>cookie</title>
</head>

<body>
    <div class="container">
        <?php
        $cookie = new Cookie();
        $cookie->setType('галеты');
        $cookie->setType('шоколадное');
        $cookie->setType('воздушное');
        $cookie->setType('овсяное');

        $types = implode(", ", $cookie->getType());
        ?>
        <p>
            Виды печенья:
            <?= $types ?>
        </p>
    </div>
</body>

</html>

<?php
function showCookiesType($cookie)
{
    $types = implode(",", $cookie->getType());
    echo "<p>{$types}</p>";
}
?>