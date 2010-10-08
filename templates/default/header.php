    <div id="upBar">
            <ul id="rightCenter">
                	<?php if($_SESSION['user']->roleName!='invalid') { ?>
            	<li><a href="controller.php?view=<?php echo $GLOBALS["PRIVATE_VIEW"] ?>">Home</a></li>
                    <?php }else{ ?>
            	<li><a href="controller.php?view=<?php echo $GLOBALS["DEFAULT_VIEW"] ?>">Home</a></li>
                    <?php } ?>
            	<li><a href="controller.php?view=<?php echo $GLOBALS["SIGNUP_VIEW"] ?>">Sign In</a></li>
            	<li>
                	<?php if($_SESSION['user']->roleName=='invalid') { ?>
                	<a href="controller.php?view=<?php echo $GLOBALS["LOGIN_VIEW"] ?>">Login</a>
                    <?php }else{ ?>
                    <a href="crud.php?close_session">Logout</a>
                    <?php } ?>
                </li>
            </ul>

    </div>