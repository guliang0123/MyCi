<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1" cellpadding="0" cellspacing="0" width="600px" align="center">
    <?php foreach($data as $item):?>
    <tr>
        <td><?php echo $item->uid;?></td>
        <td><?php echo $item->username;?></td>
        <td><?php echo $item->password;?></td>
        <td><?php echo $item->lastloginip;?></td>
    </tr>
    <?php endforeach;?>
</table>
</body>
</html>
