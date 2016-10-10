<?php

/**
 * @file BellsThemePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class BellsThemePlugin
 * @ingroup plugins_themes_boap
 *
 * @brief Bells theme plugin
 */

// $Id: BellsThemePlugin.inc.php,v 1.6 2008/04/12


import('classes.plugins.ThemePlugin');

class BellsThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'BellsThemePlugin';
	}

	function getDisplayName() {
		return 'Bells Theme';
	}

	function getDescription() {
		return 'Bells theme';
	}

	function getStylesheetFilename() {
		return 'bells.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
