<?php 
	$ambler = "508 S Sumneytown Pike North Wales, PA 19454";
	$wc = "101 Everest Circle West Chester, PA 19382";
?>
<!--Top Footer Start-->
<div id="top_footer">

<div id="sitemap">
<h3>Sitemap</h3>
<ol>
<li><a title="Home | Those Apple Guys" href="../">Home</a></li>
<li><a title="About Those Apple Guys" href="../about">About</a></li>
<li><a title="Services | Those Apple Guys" href="../services">Services</a></li>
<li><a title="Contact Those Apple Guys" href="../contact">Contact</a></li>
</ol>
</div>

<div id="contact_info">
<h3>T.A.G. Us</h3>
<div id="a">
<h5>North Whales</h5>
<p id="maps" ><a title="<?php global $ambler; echo "$ambler"; ?>" target="_blank" href="<?php include('ambler.php'); ?>">508 S. Sumneytown Pike</a></p>
<p><a title="<?php global $ambler; echo "$ambler"; ?>" target="_blank" href="<?php include('ambler.php'); ?>">North Wales, PA 19454</a></p>
<p id="phone">(215) 645-4410</p>
</div>
<div id="wc">
<h5>West Chester</h5>
<p id="maps"><a title="<?php global $wc; echo "$wc"; ?>" target="_blank" href="<?php include('westchester.php'); ?>">101 Everest Circle</a></p>
<p><a title="<?php global $wc; echo "$wc"; ?>" target="_blank" href="<?php include('westchester.php'); ?>">West Chester, PA 19382</a></p>
<p id="phone">(610) 486-6165</p>
</div>
</div>
<div id="email_sub">

<form name="formcheck" action="../contact_submit.php" method="POST" onsubmit="return formCheck(this);">
<h3>T.A.G. Me</h3> 
<h5>Subscribe to our mailing list</h5>
<input type="text" onFocus="this.value=''" title="Name" name="name" value="Name" size="20"><br /><br />
<input type="text" onFocus="this.value=''" title="Email Address" name="email_address" value="Email Address" size="20"><br /><br />
<input class="submit" title="Subscribe to our mailing list" type="submit" value="Send">
</form>
</div>
</div>
</div>

<!--Footer Start-->
