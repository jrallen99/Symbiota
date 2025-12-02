<script>
<!--
if (top.frames.length!=0)
  top.location=self.document.location;
// -->
</script>
<table id="maintable" cellspacing="0">
	<tr>
		<td id="header" colspan="3">
			<div style="clear:both;">
				<div style="clear:both;">
					<img style="width:100%" src="<?php echo $CLIENT_ROOT; ?>/images/layout/rm_header.jpg" />
				</div>
			</div>
			<div id="top_navbar">
				<div id="right_navbarlinks">
					<?php
					if($USER_DISPLAY_NAME){
					?>
						<span style="">
							Welcome <?php echo $USER_DISPLAY_NAME; ?>!
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/viewprofile.php">My Profile</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/index.php?submit=logout">Logout</a>
						</span>
					<?php
					}
					else{
					?>
						<span style="">
							<a href="<?php echo $CLIENT_ROOT.'/profile/index.php?refurl='.$_SERVER['SCRIPT_NAME'].'?'.htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES); ?>">
								Log In
							</a>
						</span>
						<span style="margin-left:5px;">
							<a href="<?php echo $CLIENT_ROOT; ?>/profile/newprofile.php">
								New Account
							</a>
						</span>
					<?php
					}
					?>
					<span style="margin-left:5px;margin-right:5px;">
						<a href='<?php echo $CLIENT_ROOT; ?>/sitemap.php'>Sitemap</a>
					</span>
				</div>
				<ul id="hor_dropdown">
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/index.php" >Home</a>
					</li>
					<li>
						<a href="#" >Search</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/index.php" >Search Collections</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank">Map Search</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#" >Images</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/index.php" >Image Browser</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/imagelib/search.php" >Search Images</a>
							</li>
						</ul>
					</li>
					<!-- <li>
						<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php" >Inventories</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=1" >Project 1</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=2" >Project 2</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/projects/index.php?pid=3" >Project 3</a>
							</li>
						</ul>
					</li>  -->
					<li>
						<a href="<?php echo $CLIENT_ROOT; ?>/digitization.php" >Digitization</a>
					</li>
					<li>
						<a href="#" >Interactive Tools</a>
						<ul>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist" >Dynamic Checklist</a>
							</li>
							<li>
								<a href="<?php echo $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key" >Dynamic Key</a>
							</li>
						</ul> 
					</li>
					<li>
						<a href="#" >Other SEINet Portals</a>
						<ul>
						<li>
							<a href="http://swbiodiversity.org" target="_blank" >Arizona - New Mexico Chapter</a>
						</li>
						<li>
							<a href="http://midwestherbaria.org" target="_blank" >Consortium of Midwest Herbaria</a>
						</li>
						<li>
							<a href="http://intermountainbiota.org" target="_blank" >Intermountain Region Herbaria Network (IRHN)</a>
						</li>
						<li>
							<a href="http://midatlanticherbaria.org" target="_blank" >Mid-Atlantic Herbaria</a>
						</li>
						<li>
							<a href="http://nansh.org" target="_blank" >North American Network of Small Herbaria</a>
						</li>
						<li>
							<a href="http://ngpherbaria.org" target="_blank" >Northern Great Plains Herbaria</a>
						</li>
						<li>
							<a href="http://madrean.org/symbflora/projects/index.php?proj=74" target="_blank" >Madrean Archipelago Biodiversity Assessment (MABA) - Flora</a>
						</li>
						<li>
							<a href="http://herbanwmex.net" target="_blank" >Red de Herbarios del Noroeste de M&eacute;xico (northern Mexico)</a>
						</li>
						<li>
							<a href="http://sernecportal.org" target="_blank" >SERNEC - Southeastern USA</a>
						</li>
						<li>
						</ul>
					</li>
				</ul>
			</div>
		</td>
	</tr>
    <tr>
		<td id='middlecenter'  colspan="3">
