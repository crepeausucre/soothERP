<?php
// *************************************************************************************************************
// IMPORT FICHIER ANNUAIRE CSV
// *************************************************************************************************************

require ("_dir.inc.php");
require ("_profil.inc.php");
require ($DIR."_session.inc.php");

$import_annuaire = new import_annuaire_csv(); 
// *************************************************************************************************************
// AFFICHAGE
// *************************************************************************************************************
include ($DIR."profil_".$_SESSION['profils'][$ID_PROFIL]->getCode_profil()."/modules/".$import_annuaire_csv['folder_name']."themes/".$CHOIX_THEME."/".$_SESSION['theme']->getCode_theme()."/page_import_annuaire_csv.inc.php");

?>