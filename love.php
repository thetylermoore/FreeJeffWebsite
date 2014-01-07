<?php

// Go to a random URL
// http://www.bloodys.com/
// email: info@bloodys.com
// If you use this script, please put a link back to http://www.bloodys.com/

$url[0] = "http://www.eduplace.com/tview/pages/i/I_Love_Peanut_Butter_Unknown.html";
$url[1] = "http://www.weaselnomore.com/weasel%20love/";
$url[2] = "http://www.love-directory.com/content/seeking/Turkey-love.html";
$url[3] = "http://healthsci.otago.ac.nz/division/dental/oralmicro/lover.htm";
$url[4] = "http://www.westcoastfurnishings.com/category.asp?cat=98&main=61";
$url[5] = "http://www.m-bettencourt.com/shorts/HTML/socialistbookhtml.html";
$url[6] = "http://www.mjeol.com";
$url[7] = "http://www.azlyrics.com/lyrics/imotherearth/loveyourstarfish.html";
$url[8] = "http://www.lovecalculator.com/love.php?name1=Stalin&name2=Ghandi";
$url[9] = "http://www.matsuda.com/jun/pokemon/";
$url[10] = "http://www.shopattitudes.com/40-20026.htm";
$url[11] = "http://www.geocities.co.jp/Bookend/1284/antlers.html";
$url[12] = "http://www.ziplinegolf.com/fame3.html";
$url[13] = "http://www.lovemypoodle.com/ind.html";
$url[14] = "http://www.co.jyu.fi/~np/rpg/DnD/";
$url[15] = "http://www.webspawner.com/users/Xmasisfinallyhere/";

srand ((double)microtime()*1000000);
$randomnum = rand(0, count($url)-1);
header ("Location: $url[$randomnum]");
?>