<?php
$guessnumber = rand(0,100);
$yournumber = 11;
define ('MAX_NUMBER', 100);
define ('MIN_NUMBER', 0);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<p> Hádej číslo mezi <?= MIN_NUMBER ?> a <?= MAX_NUMBER ?> </p>
<?= $yournumber ?> </p>

<?php

while ($guessnumber != $yournumber) { ?>
    <p> Tvé číslo <?= $yournumber ?> je špatně. Zkus to znovu.</p>

<?php
if ($guessnumber>$yournumber) {
    echo "<p>číslo je větší.</p>";
}
else {
    echo "<p>Číslo je menší.</p>";
}
$yournumber = rand(MIN_NUMBER, MAX_NUMBER);
}
?>

<p> Gratuluji uhádl jsi číslo <?= $guessnumber ?> svým číslem <?= $yournumber ?>. </p>

</body>
</html>