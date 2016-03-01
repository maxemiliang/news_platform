<?php 

	include "head.php";

?>
<div class="container">
<?php 

if (isset($_SESSION["redir"])) {
	echo "<p style='color:red'>{$_SESSION['redir']}</p>";
	unset($_SESSION["redir"]);
}

?>
	<form action="<?php echo $base ?>/post/add" method="post" enctype= "multipart/form-data">
	  <div class="form-group" >
	    <label for="InputTitle">Titeln</label>
	    <input type="text" name="title" class="form-control" id="InputTitle" placeholder="Titeln" required>
	  </div>
	  <div class="form-group">
	    <label for="InputText">Texten</label>
	    <input type="text" name="text" class="form-control" id="InputText" placeholder="Text" required>
	  </div>
	  <div class="form-group">
	    <label for="InputFile">Bilden</label>
	    <input type="file" name="img" id="InputFile">
	  </div>
	  <button type="submit" class="btn btn-default">Submit</button>
	</form>


<table class="table">

<thead>
    <tr>

       <th>Titeln</th>
       <th>Info</th>
       <th>Innehåll</th>
       <th>Till artikeln</th>
       <th>Radera?</th>

    </tr>
</thead>
<tbody>
	<?php
    foreach($v as $row) {
        ?>

        <tr>

	        <td><p><?php echo $row['title'] ?></p></td>

	        <td><h6>Postat av: <?php echo $row['username']." och publicerades: ".$row['date'] ?></h6></td>

	        <td><p>
	        <?php 
	            if (strlen($row['text']) >= 50) {
	                echo substr($row['text'], 0, 49)."...";
	            } else {
	                echo $row['text'];
	            } 
	        ?>
	        </p></td>

	        <td><p><a class='btn btn-primary btn-lg' href='post/<?php echo $row['aID']?>' role='button'>Läs hela</a></p></td>
	        <td><p><a class='btn btn-danger btn-lg' href='del/post/<?php echo $row['aID']?>' role='button'>Radera</a></p></td>

	    </tr>

        <?php
    }
?>
</tbody>
</table>

</div>

