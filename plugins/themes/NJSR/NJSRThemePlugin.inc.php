<?php

/**
 * @file NJSRThemePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class NJSRThemePlugin
 * @ingroup plugins_themes_boap
 *
 * @brief NJSR theme plugin
 */

// $Id: NJSRThemePlugin.inc.php,v 1.6 2008/04/12


import('classes.plugins.ThemePlugin');

class NJSRThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'NJSRThemePlugin';
	}

	function getDisplayName() {
		return 'NJSR Theme';
	}

	function getDescription() {
		return 'NJSR theme';
	}

	function getStylesheetFilename() {
		return 'njsr.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
