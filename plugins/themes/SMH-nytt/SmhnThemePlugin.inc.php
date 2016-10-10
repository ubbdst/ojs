<?php

/**
 * @file SmhnThemePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class SmhnThemePlugin
 * @ingroup plugins_themes_vanilla
 *
 * @brief "SMH-nytt" theme plugin
 */

// $Id: SmhnThemePlugin.inc.php,v 1.6 2009/01/20 


import('classes.plugins.ThemePlugin');

class SmhnThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'SmhnThemePlugin';
	}

	function getDisplayName() {
		return 'SMHN Theme';
	}

	function getDescription() {
		return 'SMH-nytt theme';
	}

	function getStylesheetFilename() {
		return 'smhn.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
