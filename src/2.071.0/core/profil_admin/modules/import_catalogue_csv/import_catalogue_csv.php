<?php
// *************************************************************************************************************
// IMPORT FICHIER catalogue CSV
// *************************************************************************************************************


require ("_dir.inc.php");
require ("_profil.inc.php");
require ($DIR."_session.inc.php");

$import_catalogue = new import_catalogue_csv(); 
// *************************************************************************************************************
// AFFICHAGE
// *************************************************************************************************************
include ($DIR."profil_".$_SESSION['profils'][$ID_PROFIL]->getCode_profil()."/modules/".$import_catalogue_csv['folder_name']."themes/".$CHOIX_THEME."/".$_SESSION['theme']->getCode_theme()."/page_import_catalogue_csv.inc.php");

?>