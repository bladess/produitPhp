
<?php
    if(!empty($_POST)){
        
        $db = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8mb4','root', "admin");
        $name = $_POST["name"];
        $price = $_POST["price"];
        $img = $_POST["img"];
        $request = sprintf("insert into produit values (null,'%s','%.2f','%s');",$name,$price,$img);        
        $test =$db->query($request);
        var_dump($request);
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="POST">
        <div>
            <label for="name">Nom du produit</label>
            <input type="text" name="name" id="name" required>
        </div>

        <div>
            <label for="price">Price</label>
            <input type="number" step="0.01" name="price" id="price" required>
        </div>
        <div>
            <label for="img">Lien vers un aperçu</label>
            <input type="text" name="img" id="img" required>
        </div>
        <input type="submit" value="envoi"/>
    </form>
    
</body>
</html>