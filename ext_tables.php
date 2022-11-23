<?php 

defined('TYPO3') or die('Access denied.');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
  '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:state_template/Configuration/TsConfig/Page/Mod/WebLayout/BackendLayouts.tsconfig">
');

