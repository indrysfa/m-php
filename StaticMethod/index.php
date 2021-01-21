<?php

// static property dan static method (ika)

echo "<h4>static property dan static method</h4>";
class User
{
    public static function showBio($nama) // cara deklarasi static method
    {
        echo 'Nama saya '.$nama.'.<br>';
    }
}

User::showBio('Lukas');

echo '<br>';
$user = new User();
$user::showBio('Ika');
$user::showBio('Indry');
echo "<hr>";

echo "<h4>static property dan static method</h4>";