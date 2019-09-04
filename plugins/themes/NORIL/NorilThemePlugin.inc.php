<?php

/**
 * @file NorilThemePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class NorilThemePlugin
 * @ingroup plugins_themes_boap
 *
 * @brief NORIL theme plugin
 */

// $Id: NorilThemePlugin.inc.php,v 1.6 2008/04/12


import('classes.plugins.ThemePlugin');

class NorilThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'NorilThemePlugin';
	}

	function getDisplayName() {
		return 'NORIL Theme';
	}

	function getDescription() {
		return 'NORIL theme';
	}

	function getStylesheetFilename() {
		return 'noril.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
