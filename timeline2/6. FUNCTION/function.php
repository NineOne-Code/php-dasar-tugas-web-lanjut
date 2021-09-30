<?php
function salam($nama = "Admin")
{
    date_default_timezone_set("Asia/Jakarta");
    $waktu = checkTimeofNow(date('H'));
    return "Selamat $waktu, $nama!";
}

function checkTimeofNow($date)
{
    if ($date < 12) {
        return 'Pagi';
    } else if ($date > 11 && $date < 18) {
        return 'Sore';
    } else if ($date > 17) {
        return 'Malam';
    }
}

?>
<!DOCTYPE html>
<html>

<head>
    <title>Latihan Function</title>
</head>

<body>
    <h1><?= salam("Ibrahim"); ?></h1>
</body>

</html>