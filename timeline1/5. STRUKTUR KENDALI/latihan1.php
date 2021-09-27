<?php
// perulangan
// for
// while
// do.. while
// foreach : khusus array

// for ($i = 0; $i < 5; $i++) {
//     echo 'hello world! <br>';
// }

// $a = 0;
// while ($a < 5) {
//     echo 'hello world! <br>';
//     $a++;
// }

// $b = 0;
// do {
//     echo 'hello world! <br>';
// } while ($b < 5);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Latihan 1</title>
    <style>
        .warna-baris {
            background-color: silver;
        }
    </style>
</head>

<body>

    <table border="1" cellpadding="10" cellspacing="0">
        <?php for ($i = 1; $i <= 5; $i++) : ?>
            <?php if ($i % 2 == 0) : ?>
                <tr class="warna-baris">
                <?php else : ?>
                <tr>
                <?php endif; ?>
                <?php for ($j = 1; $j <= 5; $j++) : ?>
                    <td><?= "$i, $j"; ?></td>
                <?php endfor; ?>
                </tr>
            <?php endfor; ?>
    </table>

</body>

</html>