<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Subsystem Maas Home</title>
<!--The following script tag downloads a font from the Adobe Edge Web Fonts server for use within the web page. We recommend that you do not modify it.-->
<script>var __adobewebfontsappname__="dreamweaver"</script>
<script src="http://use.edgefonts.net/.js" type="text/javascript"></script>
</head>
<link rel="stylesheet" type="text/css" href="/defaultstyle.css">
<body>
<div id="page">
  <h1> <span style="letter-spacing: -7px;">SUBSYSTEM</span></h1>
  <p>Currently under development</p>
  <a href="https://www.facebook.com/events/338340203016430/?fref=ts">NEXT EVENT — SUBSYSTEM 01</a>
  <p>You can reach us at <a href="mailto:contact@subsystemmaas.nl">contact@subsystemmaas.nl</a></p>
  <a href="http://facebook.com/subsystemmaas">Facebook<br>
  </a> <a href="http://soundcloud.com/subsystemmaas">SoundCloud<br>
  </a> <a href="http://mixcloud.com/subsystemmaas">Mixcloud<br>
  </a> <a href="http://subsystemmaas.tumblr.com">Tumblr<br>
  </a> <a href="http://twitter.com/subsystemmaas">Twitter<br>
  </a> <a href="http://instagram.com/subsystemmaas">Instagram<br>
  </a>
  <?php include ("includes/GoogleAnalytics.php");?>
</div>
</body>
</html>

<?php
echo "<mm:dwdrfml documentRoot=" . __FILE__ .">";$included_files = get_included_files();foreach ($included_files as $filename) { echo "<mm:IncludeFile path=" . $filename . " />"; } echo "</mm:dwdrfml>";
?>