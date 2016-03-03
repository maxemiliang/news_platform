<?php

include "head.php";

?>

<div class="container">

<?php
    foreach($v as $row) {
        ?>

        <div class='jumbotron'>

        <img src="img/<?php echo $row['img'] ?>" class="img-responsive img-rounded" alt="Image">

        <h1><?php echo $row['title'] ?></h1>

        <h6>Postat av: <?php echo $row['username']." och publicerades: ".$row['date'] ?><h6>
        <br>

        <p>
        <?php 
            if (strlen($row['text']) >= 50) {
                echo substr($row['text'], 0, 49)."...";
            } else {
                echo $row['text'];
            } 
        ?>
        </p>
        </p>

        <p><a class='btn btn-primary btn-lg' href='post/<?php echo $row['aID']?>' role='button'>Läs mera</a></p>

        </div>

        <?php
    }
?>

</div>
</body>
</html>
