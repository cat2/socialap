<!-- main navigation -->
      <div class="navbar">
        <div class="navbar-inner">
          <div class="container-fluid">
            <button type="button" class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="brand" href="#">Project name</a>
            <div class="nav-collapse collapse">

              <ul class="nav">
                <li><a href="index.php">Home</a></li>
                <li><a href="index.php?q=prod">Products</a></li>
              </ul>


<?php if ( !empty($_SESSION["username"]) ) { ?>

<ul class="nav pull-right">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Welcome
<?php print $_SESSION["username"]; ?>
</a>
<ul class="dropdown-menu">
<li><a href="index.php?q=auth&a=logout">Logout</a></li>
</ul>
</li>
</ul>

<?php } else { ?>

<ul class="nav pull-right">
<li class="navbar-text">Welcome Guest</li>
</ul>

<?php } ?>


</div><!--/.nav-collapse -->
</div>
</div>
</div>
<!-- end main navigation -->

<!-- main content -->
<div class="container-fluid">
<div class="row-fluid">