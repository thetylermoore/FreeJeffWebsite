<?php

// Go to a random URL
// http://www.bloodys.com/
// email: info@bloodys.com
// If you use this script, please put a link back to http://www.bloodys.com/

$url[0] = "http://freejeff.com/randomfront/bagpipesfromwoihadsflhjkafjdla.htm";
$url[1] = "http://freejeff.com/randomfront/fdxtzjudc.htm";
$url[2] = "http://freejeff.com/randomfront/ghty54.htm";
$url[3] = "http://freejeff.com/randomfront/gjkv4jbgli.htm";
$url[4] = "http://freejeff.com/randomfront/hellomaxwerewatchingyou.htm";
$url[5] = "http://freejeff.com/randomfront/hornfrenzycatastrophemanpizzacat.htm";
$url[6] = "http://freejeff.com/randomfront/lovetreefreedonquixotemontoyapartyland.htm";
$url[7] = "http://freejeff.com/randomfront/notreesinantarctica.htm";
$url[8] = "http://freejeff.com/randomfront/original.htm";
$url[9] = "http://freejeff.com/randomfront/secondstartotherightandstraightontillmorning.htm";
$url[10] = "http://freejeff.com/randomfront/stampoffreejeffapproval.htm";
$url[11] = "http://freejeff.com/randomfront/welderkinarbydale.htm";

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>