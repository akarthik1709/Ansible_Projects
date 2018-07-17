<?php
 $R_TAB="";
 $D_TAB="";
 $N_TAB="";
 $P_TAB="";
 $K_TAB="";
 $V_TAB="";
 $A_TAB="";

 if (strpos($_SERVER["SERVER_NAME"], 'release') !== false) {
   $PRODUCT_NAME="Evolution Build";
   $R_TAB="_active";
 } elseif (strpos($_SERVER["SERVER_NAME"], 'downloads') !== false) {
   $PRODUCT_NAME="Download";
   $D_TAB="_active";
 } elseif (strpos($_SERVER["SERVER_NAME"], 'doxygen') !== false) {
   $PRODUCT_NAME="Doxygen";
   $N_TAB="_active";
 } elseif (strpos($_SERVER["SERVER_NAME"], 'repos') !== false) {
   $PRODUCT_NAME="Yum Repository";
   $P_TAB="_active";
 } elseif (strpos($_SERVER["SERVER_NAME"], 'kickstart') !== false) {
   $PRODUCT_NAME="Kickstart";
   $K_TAB="_active";
 } else {
   $PRODUCT_NAME="Velocity Build";
   $V_TAB="_active";
 }
 if (strpos($_SERVER["SERVER_NAME"], 'archive') == true || 
     strpos($_SERVER["REQUEST_URI"], 'archive') == true) {
   $TITLE_NAME="Archived";
   $A_TAB="_active";
   $V_TAB="";
 } else {
   $TITLE_NAME="Main";
 }
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
	 "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="en-US" xml:lang="en-US">
<head>
<title>Artifact Viewer</title>
<link rel="stylesheet" type="text/css" href="/include/artifacts.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
</head>
<body>
<div id='cgit'>
<table id='header'>
  <tr>
    <td class='logo' rowspan='5'><a href='http://www.idirect.net'>
      <img src='/include/idirect_logo_135x135.png' alt='iDirect Logo'/></a></td>
    <td width='750' class='main' colspan='7'>&nbsp&nbspiDirect 
        <?php print "$PRODUCT_NAME"; 
              print " Artifacts - ";
              print "$TITLE_NAME";
        ?>
    </td>
  </tr>
  <tr>
    <td height="10" class='main' colspan='7'></td>
  </tr>
  <tr>
    <td width='20'></td>
    <td class=<?php print"tabs".$V_TAB; ?> width='150'>
     <a href="http://components.eng.idirect.net/">Velocity Artifacts<br>Main</a></td>
    <td width='20'></td>
    <td class=<?php print"tabs".$A_TAB; ?> width='150'>
     <a href="http://components.eng.idirect.net/archive">Velocity Artifacts<br>Archive</a></td>
    <td width='20'></td>
    <td class=<?php print"tabs".$R_TAB; ?> width='150'>
     <a href="http://releases.eng.idirect.net/">Evolution Artifacts<br>Main</a></td>
    <td></td>
  </tr>
  <tr>
    <td height="10" class='main' colspan='7'></td>
  </tr>
  <tr>
    <td width='40'></td>
    <td class=<?php print"tabs".$D_TAB; ?> width='150'>
     <a href="http://downloads.eng.idirect.net/">Downloads<br>Main</a></td>
    <td width='20'></td>
    <td class=<?php print"tabs".$P_TAB; ?> width='150'>
     <a href="http://repos.eng.idirect.net/">Yum<br>Repositories</a></td>
    <td width='20'></td>
    <td class=<?php print"tabs".$K_TAB; ?> width='150'>
     <a href="http://kickstart.eng.idirect.net/ks/">Kickstart<br></a></td>
    <td width='20'></td>
    <td></td>
  </tr>
</table>
<table>
  <tr>
    <td width='135'></td>
    <td>
