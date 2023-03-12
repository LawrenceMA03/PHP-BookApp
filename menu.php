<nav class="navbar navbar-default">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">Book App</a>
      </div>
      <div id="navbar" class="navbar-collapse collapse">
        <ul class="nav navbar-nav">
            <li><a href="index.php">Home</a></li>
            <li><a href="index.php?admin">Admin</a></li>
            <?php if (isset($_SESSION['adminUser'])) { ?>
                <li><a href="index.php?logout">Logout</a></li>
            <?php } ?>
        </ul>
      </div>
    </div>
</nav>