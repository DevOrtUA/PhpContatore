<?php
session_start();

$msgdate = date("D M j G:i:s T Y");

if( isset( $_SESSION['counter'] ) ) {
    $_SESSION['counter'] += 1;
    $msgtitle .= "!Bentornato!";
    $msg = "Access n°".  $_SESSION['counter'];
}else {
    $msgtitle .= "!!!Benvenuto !!!";
    $_SESSION['counter'] = 1;
}

?>
<html>

<head>
    <title>Contatore PHP</title>
</head>

<body>
    <h1>Contatore Accessi</h1>
    <h2><?php  echo ( $msgtitle ); ?></h2>
    <br>
    <p><?php  echo ( $msgdate ); ?></p>
    <br>
    <p><?php  echo ( $msg ); ?></p>
</body>

</html>

