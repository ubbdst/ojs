<?php

/**
 * @file BoapStandardThemePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BoapStandardThemePlugin
 * @ingroup plugins_themes_boap
 *
 * @brief "BOAP-standard" theme plugin
 */

// $Id: BoapStandardThemePlugin.inc.php,v 1.6 2008/09/30 


import('classes.plugins.ThemePlugin');

class BoapStandardThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'BoapStandardThemePlugin';
	}

	function getDisplayName() {
		return 'BOAP-standard Theme';
	}

	function getDescription() {
		return 'BOAP-standard theme';
	}

	function getStylesheetFilename() {
		return 'boap-standard.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
