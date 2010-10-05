<?php
require("globals.php");
if(isset($GLOBALS["DEFAULT_VIEW"]) && $GLOBALS["DEFAULT_VIEW"]!='')
	header("Location: controller.php?view=".$GLOBALS["DEFAULT_VIEW"]);
else if(isset($GLOBALS["DEFAULT_PANEL"]) && $GLOBALS["DEFAULT_PANEL"]!='')
	header("Location: controller.php?panel=".$GLOBALS["DEFAULT_PANEL"]);
else
{
	if($GLOBALS["DEBUG_MODE"]) die('No default view or panel on globals.php (DEFAULT_VIEW | DEFAULT_PANEL)');
}
?>
