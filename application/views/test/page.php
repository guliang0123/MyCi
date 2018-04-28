<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        #pagelist li {display: inline-block;margin-right: -1px;padding: 5px;border: 1px solid #e2e2e2;min-width: 20px;text-align: center;font-size: 14px;}
        #pagelist li a{display: block;text-align: center;text-decoration: none;color:#000}
        #pagelist li.active{background: rgb(51,135,183);border: 1px solid #009688;}
    </style>
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
<div id="pagelist">
    <?php echo $pagestr;?>
</div>
</body>
</html>
