<?php include "connect.php"?>

<html>
<head><meta charset="utf-8"></head>
<body>

<?php 
$stmt=$pdo->prepare("SELECT*FROM member WHERE username LIKE ?");
if(!empty($_GET))
    $value='%'.$_GET["username"].'%';
$stmt->bindParam(1,$value);
$stmt->execute();
?>

<?php while($row=$stmt->fetch()): ?>
    Username: <?=$row["username"]?><br>
    ชื่อสมาชิก: <?=$row["name"]?><br>
    ที่อยู่: <?=$row["address"]?><br>
    อีเมล์: <?=$row["email"]?><br>
    <img src='Picture/<?=$row["name"]?>.jpg'><br><hr>
<?php endwhile;?>

</body>
</html>