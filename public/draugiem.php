<?php

require_once "vendor/autoload.php";
require_once "config/config.php";

//Izveido API objektu
$draugiem = new DraugiemApi($draugiem_id, $draugiem_key);

//Sāk sesiju (ja netiek sākta šeit, tad tā tiek automātiski
//izveidota getSession izsaukuma laikā).
session_start();

if ($draugiem->getSession()) {

        //Autorizācija sekmīga
        //Lietotāja dati ir pieejami pārējām API funkcijām

        $user = $draugiem->getUserData();//Lietotāja profila datu iegūšana

        //Izdrukājam sveicienu lietotājam
        if ($user['img']) {
                echo "<img src='{$user['img']}' alt='' /><br />";
        }
        echo "Sveiki, ".$user['name']." ".$user['surname']."!<br />";

        $uid = $draugiem->getUserId(); //Iegūst draugiem.lv lietotāja ID

        $count = $draugiem->getFriendCount();//Iegūst lietotāja draugu skaitu šajā aplikācijā

        echo "Šo aplikāciju lieto vēl ".$count." tavi draugi.";

} else {
        echo 'Authorization failed';
        echo $draugiem->getLoginButton('http://localhost/slepnosana/draugiem.php',false);
        //Sesijas izveidošana neveiksmīga.
        //Lietotājs vai nu izgājis no draugiem.lv vai
        //nav izdevies aplikācijas autorizācijas pieprasījums.

        //Draugiem.lv Pases aplikācijai šādā situācijā būtu jāattēlo
        //saite uz pieteikšanās logu.
}
