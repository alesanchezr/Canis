<div id="uppers">
    <div id="upBar">
        <div id="leftCenter">
                  <form action="controller.php" method="get">
		            <input name="view" type="hidden" value="search" />
		            <input id="boxInputText" name="data" type="text" value="" title="" />
		            <input name="" type="submit" value="Search" />
		         </form>
        </div>

            <ul id="rightCenter">
            	<li><a href="controller.php?view=private">Home</a></li>
            	<li><a href="controller.php?view=registro">Sign In</a></li>
            	<li>
                	<?php if($_SESSION['user']->roleName=='invalid') { ?>
                	<a href="controller.php?view=login">Log in</a>
                    <?php }else{ ?>
                    <a href="controller.php?close_session">Log out</a>
                    <?php } ?>
                </li>
            </ul>

    </div>
</div>