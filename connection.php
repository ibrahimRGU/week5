<?php
/**
 * Created by PhpStorm.
 * User: 1516312
 * Date: 02/03/2016
 * Time: 15:49
 */
define('DB_SERVER', 'ap-cdbr-azure-east-c.cloudapp.net');
define('DB_USERNAME', 'bfd67c836b0287');
define('DB_PASSWORD', '679c1a2e');
define('DB_DATABASE', 'samsung1516312');
$db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
?>
