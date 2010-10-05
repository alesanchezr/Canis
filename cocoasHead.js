<meta content="text/html; charset=utf-8" http-equiv="Content-Type">
<meta name="keywords" content="<?php echo $GLOBALS["keywords"]; ?>" >
<meta name="Language" content="<?php echo $GLOBALS["language"]; ?>" >
<link href="css/default.css" rel="stylesheet" type="text/css">
<link href="css/form.css" rel="stylesheet" type="text/css">

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/form.js"></script>
<script type="text/javascript" src="js/validations.js"></script>
<script type="text/javascript" src="js/canis.js"></script>
<?php
	  if(isset($_REQUEST['view']))
	  {
		  if(isset($styles[$_REQUEST['view']]))
		  echo '<link href="css/'.$styles[$_REQUEST['view']].'" rel="stylesheet" type="text/css" media="screen" />';
	  }

	  else if(isset($_REQUEST['panel']))
	  {
		  if(isset($styles[$_REQUEST['panel']]))
		  echo '<link href="css/'.$styles[$_REQUEST['panel']].'" rel="stylesheet" type="text/css" media="screen" />';
	  }
?>