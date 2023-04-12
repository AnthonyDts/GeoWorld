<?php  require_once 'header.php'; ?>
<?php
session_start ();
if (($_SESSION['login']=="Anthony") and ($_SESSION['pwd']=="1234")){
?>
<h1 align="center">Cliquez sur un continent pour plus d'info &ensp;&ensp;</h1>
<!-- copyright cmap.comersis.com -->
<style>
.centrer {
  display: block;
  margin-left: auto;
  margin-right: auto;
}
</style>
<img src="World-html.png" width="900" height="540" border="0" usemap="#Map" class="centrer"> 
<map name="Map">
  <area shape="poly" coords="
  16.5,82.5,73.5,42.0,288.0,9.0,400.5,16.5,370.5,43.5,313.5,75.0,276.0,112.5,208.5,207.0,163.5,237.0,99.0,207.0" href="\(1)geoworld-master/index.php?region=North America" title="Amérique du Nord">
  <area shape="poly" coords="
  159.0,241.5,165.0,291.0,217.5,435.0,253.5,451.5,300.0,343.5,313.5,288.0,255.0,252.0,225.0,235.5,198.0,225.0" href="\(1)geoworld-master/index.php?region=South America" title="Amérique du Sud">
  <area shape="poly" coords="
  399.0,154.5,364.5,195.0,363.0,225.0,387.0,253.5,436.5,256.5,445.5,324.0,469.5,384.0,495.0,381.0,552.0,355.5,571.5,310.5,568.5,231.0,543.0,232.5,513.0,178.5,511.5,169.5,477.0,162.0,441.0,148.5" href="\(1)geoworld-master/index.php?region=Africa" title="Afrique">
  <area shape="poly" coords="148.5,535.5,97.5,514.5,216.0,498.0,285.0,474.0,307.5,504.0,402.0,492.0,546.0,481.5,586.5,487.5,732.0,478.5,784.5,496.5,784.5,537" href="Antarctica" title="Antarctique">
  <area shape="poly" coords="840.0,271.5,840.0,303.0,810.0,307.5,750.0,342.0,744.0,385.5,816.0,414.0,867.0,426.0,895.5,414.0,873.0,285.0" href="\(1)geoworld-master/index.php?region=Oceania" title="Océanie">
  <area shape="poly" coords="
  367.5,55.5,393.0,100.5,390.0,127.5,393.0,148.5,414.0,147.0,462.0,144.0,487.5,145.5,490.5,135.0,502.5,115.5,511.5,121.5,523.5,108.0,486.0,76.5,492.0,67.5,486.0,43.5,474.0,16.5,448.5,21.0" href="\(1)geoworld-master/index.php?region=Europe" title="Europe">
  <area shape="poly" coords="
  490.5,45.0,526.5,18.0,616.5,19.5,850.5,57.0,819.0,153.0,796.5,243.0,838.5,274.5,837.0,297.0,777.0,307.5,727.5,303.0,646.5,244.5,592.5,196.5,579.0,214.5,546.0,226.5,516.0,174.0,514.5,150.0,492.0,151.5,502.5,121.5,520.5,123.0,528.0,108.0,492.0,75.0,499.5,64.5" href="\(1)geoworld-master/?region=Asia" title="Asie"><area shape="rect" coords="500,3,599,17" href="http://www.cmap.comersis.com" target="_blank" alt="Free clickable map of the World">
  </map>

<?php }
 else{
header ('location: post-login.html');}
?>