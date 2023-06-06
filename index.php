<?php
include_once("config/symbini.php");
header("Content-Type: text/html; charset=".$CHARSET);
?>
<html>
<head>
	<meta http-equiv="X-Frame-Options" content="deny">
	<title><?php echo $DEFAULT_TITLE; ?> Home</title>
	<?php
	include_once($SERVER_ROOT.'/includes/head.php');
	include_once($SERVER_ROOT.'/includes/googleanalytics.php');
	?>
	<link href="<?php echo $CSS_BASE_PATH; ?>/jquery-ui.css" type="text/css" rel="stylesheet">
	<link href="<?php echo $CSS_BASE_PATH; ?>/quicksearch.css" type="text/css" rel="Stylesheet" />
	<script src="js/jquery-3.2.1.min.js" type="text/javascript"></script>
	<script src="js/jquery-ui-1.12.1/jquery-ui.min.js" type="text/javascript"></script>
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
	<div  id="innertext">
		<div style="float:right;margin-left:15px;">
			<div id="quicksearchdiv">
				<!-- -------------------------QUICK SEARCH SETTINGS--------------------------------------- -->
				<form name="quicksearch" id="quicksearch" action="<?php echo $CLIENT_ROOT; ?>/taxa/index.php" method="get" onsubmit="return verifyQuickSearch(this);">
					<div id="quicksearchtext" ><?php echo (isset($LANG['QSEARCH_SEARCH'])?$LANG['QSEARCH_SEARCH']:'Search Taxon'); ?></div>
					<input id="taxa" type="text" name="taxon" />
					<button name="formsubmit"  id="quicksearchbutton" type="submit" value="Search Terms"><?php echo (isset($LANG['QSEARCH_SEARCH_BUTTON'])?$LANG['QSEARCH_SEARCH_BUTTON']:'Search'); ?></button>
				</form>
			</div>
			<div style="">
				<?php
				//---------------------------SLIDESHOW SETTINGS---------------------------------------
				//If more than one slideshow will be active, assign unique numerical ids for each slideshow.
				//If only one slideshow will be active, leave set to 1.
				$ssId = 1;
				//Enter number of images to be included in slideshow (minimum 5, maximum 10)
				$numSlides = 10;
				//Enter width of slideshow window (in pixels, minimum 275, maximum 800)
				$width = 350;
				//Enter amount of days between image refreshes of images
				$dayInterval = 7;
				//Enter amount of time (in milliseconds) between rotation of images
				$interval = 7000;
				//Enter checklist id, if you wish for images to be pulled from a checklist,
				//leave as 0 if you do not wish for images to come from a checklist
				//if you would like to use more than one checklist, separate their ids with a comma ex. "1,2,3,4"
				//$clid = '1279';
				$clid = '4935';
				//Enter field, specimen, or both to specify whether to use only field or specimen images, or both
				$imageType = 'both';
				//Enter number of days of most recent images that should be included
				$numDays = 30;

				//---------------------------DO NOT CHANGE BELOW HERE-----------------------------
				ini_set('max_execution_time', 120);
				include_once($SERVER_ROOT.'/classes/PluginsManager.php');
				$pluginManager = new PluginsManager();
				echo $pluginManager->createSlideShow($ssId,$numSlides,$width,$numDays,$imageType,$clid,$dayInterval,$interval);
				?>
			</div>
		</div>
		<h1>Welcome to the Consortium of Southern Rocky Mountain Herbaria</h1>
		<div style="padding: 0px 10px; font-size:140%">
			The Consortium of Southern Rocky Mountain Herbaria consists of collections from the Middle and Southern Rocky Mountain States including Colorado, Idaho, Montana and Wyoming. 
			The rugged and expansive terrain of the Southern Rocky Mountains (SoRo) supports plant species of different geographic origins, evolutionary histories, and ecological affinities. 
			Species from the high peaks and adjacent high plains grow in varied habitats and represent neither the most biodiverse nor most endemic flora in the United States, 
			but rather one of the most narrowly adapted floras, typical of steep environmental gradients and life in extreme environments. 
			<p>
			While the primary mission of the portal is to bring together collections from within the Southern Rocky Mountain Region, we are also working to facilitate contributions 
			of data from the Southern Rockies by collections from outside of the region. Digitization within the Consortium of Southern Rocky Mountain Herbaria, is currently funded by an ADBC TCN 
			project with the goal of bringing together roughly 1.7 million specimens from the greater Southern Rocky Mountain region.  Data come from a combination of existing and newly digitized 
			collections. The SoRo TCN is a collaborative effort across the Consortium of Southern Rocky Mountain Herbaria, the New England Vascular Plant Network  (BRU, HUH, YU), the 
			Northern Great Plains Herbaria (BHSC, CSCN), the Arizona-New Mexico Network (ASC, ASU, NAVA, SJNM, UNM) and the Mid-Atlantic Network (NY). 
		</div>
	</div>
	<?php
	include($SERVER_ROOT.'/includes/footer.php');
	?> 
</body>
</html>
