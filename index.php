<?php  include 'conx.php'; 
$req = mysqli_query($conn,"select * from menu");
$data=mysqli_fetch_assoc($req);

$req2 = mysqli_query($conn,"select * from article");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $data['titre'] ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="header">
        <ul>
            <div class='logo'>
                <img src="<?php echo $data['logo'] ?>">
</div>
            <li><?php echo $data['home'] ?></li>
            <li><?php echo $data['prodact'] ?></li>
        </ul>
    </div>

    <div class="titel">
        <h2><?php echo $data['titre'] ?></h2>
    </div>



<?php while($data2=mysqli_fetch_assoc($req2)){ ?>
    <div class="card">
        <div class="cardimg">
            <img src="<?php echo $data2["photo"] ?>">
        </div>
        <div class="cardtitle">
            <h2><?php echo $data2["nom"] ?></h3>
        </div>
        <div class="prix">
        <p><?php echo $data2["prix"] ?> <samp>DH</samp></p>
        </div>

    </div>
    <?php } ?>

</body>
</html>