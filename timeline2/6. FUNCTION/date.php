<?php
// Date
// Untuk menampilkan tanggal dengan format tertentu
echo date("l, d-M-Y");

// Time
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 Januari 1970
echo time();
echo date("l", time() - 60 * 60 * 24 * 100);

// mktime
// membuat sendiri detik
// mktime(0,0,0,0,0,0)
// jam, menit, detik, bulan, tanggal, tahun
echo '<br>' . date("l", mktime(0, 0, 0, 2, 26, 2003));


// strtotime
echo date("l", strtotime("26 feb 2003"));
