<?php

include "head.php";

?>

<div class="container">

<?php
    foreach($v as $row) {
        ?>

        <div class='jumbotron'>

        <h1><?php echo $row['title'] ?></h1>

        <h6>Postat av: <?php echo $row['username']." på ".$row['date'] ?><h6>
        <br>

        <p><?php echo $row['text'] ?></p>

        <p><a class='btn btn-primary btn-lg' href='post/<?php echo $row['aID']?>' role='button'>Läs mera</a></p>

        </div>

        <?php
    }
?>

</div>
</body>
</html>
