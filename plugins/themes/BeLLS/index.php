<?php

/**
 * @defgroup plugins_themes_boap
 */
 
/**
 * @file plugins/themes/Bells/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_boap
 * @brief Wrapper for Bells theme plugin.
 *
 */

// $Id: index.php,v 1.5 2009/04/12 16:30:00 ingridcutler Exp $


require_once('BellsThemePlugin.inc.php');

return new BellsThemePlugin();

?>
