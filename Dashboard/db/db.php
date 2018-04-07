<?php
$db['db_host'] = "zainfida.mysql.database.azure.com";
$db['db_user'] = "zainfida@zainfida";
$db["db_pass"] = "$Shushup1";
$db["db_name"] = "containerbooking";

foreach($db as $key=>$value){
    define(strtoupper($key), $value);
}


 $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);

if(!$connection){
    echo "Database Not Connected!!! Connection Failed";

}

?>
