<?php
date_default_timezone_set('Australia/Sydney');
echo "<div class=\"p-2 bd-highlight\">Sydney, Australia</div>";
echo "<div class=\"p-2 bd-highlight\">".date("H ")."<span class=\"seperator\">:</span>".date(" i")." ".date("a")."</div>";
echo "<div class=\"p-2 bd-highlight\">".date("l").", ". "".date("d M Y")."</div>";
?>

<!-- <div class="p-2 bd-highlight">Sydney, Australia</div>
<div class="p-2 bd-highlight"><span class="seperator">:</span></div>
<div class="p-2 bd-highlight"></div> -->