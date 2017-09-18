<?php

$db = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8mb4','root', "admin");
$results = $db->query("select  * from produit")->fetchAll();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style> img{ height : 50px; width :50px;} </style>
</head>
<body>
<div>
        <table >
            <thead>
                <tr>
                    <th >#</th>
                    <th >Name</th>
                    <th >Price</th>
                    <th >img</th>
                   
                </tr>
            <tbody>
                <?php foreach($results as $key=>$value):?>
            </thead>
                <tr>
                    <td ><?= $value['id_produit'];?></td>
                    <td ><?= $value['nom'];?></td>
                    <td ><?= $value['prix'];?></td>
                    <td ><?= "<img src ='".$value['image']."'alt='img'/>";?></td>
                </tr>
                <?php endforeach;?>
            </tbody>
        </table>
    </div>
</body>
</html>