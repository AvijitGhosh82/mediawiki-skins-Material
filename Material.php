<?php 
/**
 * Material skin 
 *
 * @file
 * @ingroup Skins
 * @author Codyn329
 * @version 1.0
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0
 */
 
 if( !defined('MEDIAWIKI') ) {
        //return error message
 }
 
 //Skin credits for Special:Version
 $wgExtensionCredits['skin'][] = array(
        'path' => __FILE__,
        'namemsg' => 'skinname-material',
        'version' => '1.0',
        'author' => '[https://meta.brickimedia.org/wiki/User:Codyn329 Codyn329]',
        'descriptionmsg' => 'material-desc',
        'license' => 'GPL-3.0',
 );
 
 $wgValidSkinNames['material'] = 'Material';
 $wgAutoloadClasses['skinMaterial'] = __DIR__ . '/Material.skin.php';
 $wgMessageDirs['skinMaterial'] = __DIR__ . '/i18n';
 
 $wgResourceModules['skins.material'] = array(
        'styles' => array(
                'skins/Material/material/main.css' => array( 'media' => 'screen' ),
                'skins/Material/material/print.css' => array( 'media' => 'print' ),
        ),
 );
