<?php

/**
 * @file VoicesThemePlugin.inc.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @class VoicesThemePlugin
 * @ingroup plugins_themes_vanilla
 *
 * @brief "Voices" theme plugin
 */

// $Id: GdcjThemePlugin.inc.php,v 1.6 2009/01/20 


import('classes.plugins.ThemePlugin');

class GdcjThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'GdcjThemePlugin';
	}

	function getDisplayName() {
		return 'GDCJ Theme';
	}

	function getDescription() {
		return 'GDCJ theme';
	}

	function getStylesheetFilename() {
		return 'gdcj.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
