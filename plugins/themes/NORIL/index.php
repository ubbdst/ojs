<?php

/**
 * @defgroup plugins_themes_boap
 */
 
/**
 * @file plugins/themes/NORIL/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_boap
 * @brief Wrapper for NORIL theme plugin.
 *
 */

// $Id: index.php,v 1.5 2009/04/12 16:30:00 tarjelavik Exp $


require_once('NorilThemePlugin.inc.php');

return new NorilThemePlugin();

?>
