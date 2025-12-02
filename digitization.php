<?php
include_once('config/symbini.php');
header('Content-Type: text/html; charset=' . $CHARSET);
?>
<!DOCTYPE html>
<html lang="<?php echo $LANG_TAG ?>">
<head>
	<meta http-equiv="X-Frame-Options" content="deny">
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui.min.js" type="text/javascript"></script>
	<script type="text/javascript">
		var clientRoot = "<?php echo $CLIENT_ROOT; ?>";
	</script>
	<script src="js/symb/api.taxonomy.taxasuggest.js" type="text/javascript"></script>
	<script src="<?PHP echo $CLIENT_ROOT; ?>/js/jquery.slides.js"></script>
</head>
<body>
	<?php
	include($SERVER_ROOT.'/includes/header.php');
	?> 
        <!-- This is inner text! -->
		<div class="navpath"></div>
        <main  id="innertext">
            <h1></h1>

            <div>
<h2><strong>Digitization Workflows</strong><p></h2>

<strong>University of Colorado</strong><p>
<a href ="https://botanydb.colorado.edu/misc/Digitization_Workflow_TCN.pdf"> University of Colorado Vascular Plant Digitization Workflow </a><p>

<a href ="https://botanydb.colorado.edu/misc/Digitization_Workflow_PEN.pdf"> University of Colorado Cryptogam Digitization Workflow </a><p>


<a href ="https://botanydb.colorado.edu/misc/HerbDataEntryManualSymbiota.pdf"> University of Colorado Symbiota Data Entry Manual </a><p>
<p>

<strong>New York Botanic Gardens</strong><p>
<a href ="https://botanydb.colorado.edu/misc/Imaging_Manual.pdf"> New York Botanic Gardens Imaging Manual</a><p>
<a href ="https://botanydb.colorado.edu/misc/Herbarium_Image_Editing_Guidelines.pdf"> New York Botanic Gardens Imaging Editing Guidelines</a><p>




           
            </div>
</main>

	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 

</body>
</html>