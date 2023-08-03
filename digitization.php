<?php
//error_reporting(E_ALL);
include_once("config/symbini.php");
header("Content-Type: text/html; charset=".$charset);
?>
<html>
<head>
	<meta http-equiv="X-Frame-Options" content="deny">
	<title><?php echo $defaultTitle?> Digitization</title>
	<link href="css/base.css?<?php echo $CSS_VERSION; ?>" type="text/css" rel="stylesheet" />
	<link href="css/main.css?<?php echo $CSS_VERSION; ?>" type="text/css" rel="stylesheet" />
	<script type="text/javascript">
		<?php include_once('config/googleanalytics.php'); ?>
	</script>
</head>
<body>
	<?php
	include($serverRoot."/header.php");
	?> 
        <!-- This is inner text! -->
        <div  id="innertext">
            <h1></h1>

            <div style="padding: 0px 10px;">
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
        </div>

	<?php
	include($serverRoot."/footer.php");
	?> 

</body>
</html>