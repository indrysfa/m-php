<?php

echo "<h4>Static Property</h4>";
class User
{
    public static $address = 'Sumbawa ';

    public function showAddress($address)
    {
        self::$address = $address;
        return self::$address;
    }
}

// tanpa instansiasi
echo '<br>ini static property tanpa instansiasi: ' . User::$address;

// dengan instansiasi
$user = new User();
echo $user->showAddress('Danau Toba');
echo '<br>ini static property dengan instansiasi: ' . $user::$address;
