<?php
include "./core/Bootstraps.php";
$php = new \bootstrap\Bootstraps("core");
$php->includes();
$css = new \bootstrap\Bootstraps("css", "css");
$navbar = Generate_navbar();
session_start();
?>

<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>CPS Test</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <?= $css->link() ?>
</head>
<body class="bg-dark">
    <?= $navbar ?>
    <?= Controller()?>
    <?= login_form();?>
</body>
</html>