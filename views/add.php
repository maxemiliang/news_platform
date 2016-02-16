<?php 

	include "head.php";

?>
<div class="container">
<?php 

if (isset($_SESSION["redir"])) {
	echo "<p style='color:red'>{$_SESSION['redir']}</p>";
}

?>
	<form action="<?php echo $base ?>/post/add" method="post">
	  <div class="form-group">
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
</div>