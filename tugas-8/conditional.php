<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Function & Conditional</title>
</head>
<body>

<h1>Berlatih Function PHP</h1>

<?php

// =====================
// FUNCTION
// =====================

function greetings($name) {
    echo "Halo " . ucfirst($name) . ", Selamat Datang di Sanbercode!<br>";
}

function reverseString($str) {
    $result = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $result .= $str[$i];
    }
    echo $result . "<br>";
}

function palindrome($str) {
    $reverse = "";
    for ($i = strlen($str) - 1; $i >= 0; $i--) {
        $reverse .= $str[$i];
    }

    if ($str === $reverse) {
        echo "true<br>";
    } else {
        echo "false<br>";
    }
}

function tentukan_nilai($nilai) {
    if ($nilai >= 85 && $nilai <= 100) {
        return "Sangat Baik";
    } elseif ($nilai >= 70 && $nilai < 85) {
        return "Baik";
    } elseif ($nilai >= 60 && $nilai < 70) {
        return "Cukup";
    } else {
        return "Kurang";
    }
}


// =====================
// PEMANGGILAN FUNCTION
// =====================

echo "<h3>Soal No 1 Greetings</h3>";
greetings("Alex");
greetings("Bagas");
greetings("Wahyu");

echo "<br>";

echo "<h3>Soal No 2 Reverse String</h3>";
reverseString("Sanbercode");
reverseString("We Are Sanbers Developers");

echo "<br>";

echo "<h3>Soal No 3 Palindrome</h3>";
palindrome("civic");
palindrome("nababan");
palindrome("jambaban");

echo "<br>";

echo "<h3>Soal No 4 Tentukan Nilai</h3>";
echo tentukan_nilai(98) . "<br>";
echo tentukan_nilai(76) . "<br>";
echo tentukan_nilai(67) . "<br>";
echo tentukan_nilai(43) . "<br>";

?>

</body>
</html>