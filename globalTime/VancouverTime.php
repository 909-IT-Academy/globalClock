<?php
date_default_timezone_set('America/Vancouver');
echo "<div class=\"p-2 bd-highlight\">Vancouver, America</div>";
echo "<div class=\"p-2 bd-highlight\">".date("H ")."<span class=\"seperator\">:</span>".date(" i")." ".date("a")."</div>";
echo "<div class=\"p-2 bd-highlight\">".date("l").", ". "".date("d M Y")."</div>";
?>