<div class="navbar">
  <div class="navbar-inner">
    <div class="container">
		<a class="brand" href="#" data-bitly-type="bitly_hover_card">Canis example</a>
		<div class="nav-collapse">
          <ul class="nav">
            <li class="active"><a href="<?php echo $GLOBALS["baseURL"]; ?>" data-bitly-type="bitly_hover_card">Home</a></li>
          </ul>
          <ul class="nav pull-right">
            <?php if($_SESSION['user']->roleName=='invalid') { ?>
            <li><a href="<?php echo $GLOBALS["baseURL"]; ?>login" data-bitly-type="bitly_hover_card">SignIn</a></li>
            <?php }else{ ?>
            <li><a href="<?php echo $GLOBALS["baseURL"]; ?>crud.php?close_session" data-bitly-type="bitly_hover_card">SignOut</a></li>
            <?php } ?>
          </ul>
        </div>
    </div>
  </div>
</div>