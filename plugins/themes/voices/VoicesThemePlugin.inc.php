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

// $Id: VoicesThemePlugin.inc.php,v 1.6 2008/09/30 


import('classes.plugins.ThemePlugin');

class VoicesThemePlugin extends ThemePlugin {
	/**
	 * Get the name of this plugin. The name must be unique within
	 * its category.
	 * @return String name of plugin
	 */
	function getName() {
		return 'VoicesThemePlugin';
	}

	function getDisplayName() {
		return 'Voices Theme';
	}

	function getDescription() {
		return 'Voices theme';
	}

	function getStylesheetFilename() {
		return 'voices.css';
	}

	function getLocaleFilename($locale) {
		return null; // No locale data
	}
}

?>
