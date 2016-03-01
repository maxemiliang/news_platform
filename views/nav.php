  <nav class="navbar navbar-default navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href=".">NEWS 24/7</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="<?php echo $base ?>">Hem</a></li>
            <li><a href="<?php echo $base ?>/news">Nyheter</a></li>
       <!-- <li><a href="news">About</a></li>
            <li><a href="#contact">Contact</a></li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <?php if (isset($_SESSION["userID"])) { ?>
              <li><a href="<?php echo $base ?>/post">Kontrolpanelen</a></li>
              <li><a href="<?php echo $base ?>/logout">Logga ut!</a></li> 
            <?php } else { ?>
            <li><form class="navbar-form" action="<?php echo $base ?>/login" method="POST">
              <div class="form-group">
                <label class="sr-only" for="username">Användarnamn</label>
                <input type="text" class="form-control" name="username" id="username" placeholder="Användarnamn">
              </div>
              <div class="form-group">
                <label class="sr-only" for="password">Lösenord</label>
                <input type="password" class="form-control" name="password" id="password" placeholder="Lösenord">
              </div>
              <button type="submit" class="btn btn-default">Logga in</button>
            </form>
            </li>
            <?php } ?>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>