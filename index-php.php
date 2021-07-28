<?php

include __DIR__ ."/db/db.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <?php foreach($dischi as $card) {?>
                <div class="col">
                    <div class="card">
                        <img src="<?php echo $card['poster'] ?>" alt="<?php echo $card['title'] ?>">
                        <h3><?php echo $card['title'] ?></h3>
                        <h4><?php echo $card['author'] ?></h4>
                        <h5><?php echo $card['year'] ?></h5>
                    </div>
                </div>
            <?php } ?> 
        </div>
    </div>
</body>
</html>