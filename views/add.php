<?php 

	include "head.php";

?>
<div class="container">
	<form action="<?php echo $base ?>/post/add" method="post">
	  <div class="form-group">
	    <label for="InputText">Titeln</label>
	    <input type="text" name="title" class="form-control" id="InputText" placeholder="Titeln" required>
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