<?php
/**
 * Material skin
 *
 * @file
 * @ingroup Skins
 * @author Codyn329, MtMNC, George Barnick, Jack Phoenix
 * @version 1.0.0
 * @license http://www.gnu.org/copyleft/gpl.html GNU General Public License 3.0
 */

if ( !defined( 'MEDIAWIKI' ) ) {
	die( 'This skin requires installing MediaWiki (version 1.23.1 or above). See https://www.mediawiki.org/wiki/Manual:Installation_guide for more information.' );
}

// Skin credits for Special:Version
$wgExtensionCredits['skin'][] = array(
	'path' => __FILE__,
	'namemsg' => 'skinname-material',
	'version' => '1.0.0',
	'author' => array(
		'[http://meta.brickimedia.org/wiki/User:Codyn329 Codyn329]',
		'[http://meta.brickimedia.org/wiki/User:MtMNC MtMNC]',
		'[http://meta.brickimedia.org/wiki/User:ToaMeiko George Barnick]',
		'[http://meta.brickimedia.org/wiki/User:Jack_Phoenix Jack Phoenix]'
	),
	'descriptionmsg' => 'material-desc',
	'license' => 'GPL-3.0',
	'url' => 'https://www.mediawiki.org/wiki/Skin:Material'
);

$wgValidSkinNames['material'] = 'Material';
$wgAutoloadClasses['SkinMaterial'] = __DIR__ . '/Material.skin.php';
$wgMessageDirs['SkinMaterial'] = __DIR__ . '/i18n';

//CSS stylesheets
$wgResourceModules['skins.material'] = array(
	'styles' => array(
		'skins/Material/material/styles/main.less' => array( 'media' => 'screen' ),
		'skins/Material/material/styles/variables.less' => array ( 'media' => 'screen' ),
		'skins/Material/material/styles/print.less' => array( 'media' => 'print' ),
	),
	'position' => 'top'
);
//JavaScript scripts
$wgResourceModules['skins.material.js'] = array(
	'scripts' => 'skins/Material/material/scripts/main.js',
	'position' => 'bottom'
);
