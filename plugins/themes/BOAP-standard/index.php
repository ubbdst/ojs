<?php

/**
 * @defgroup plugins_themes_boap
 */
 
/**
 * @file plugins/themes/BOAP-standard/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_themes_boap
 * @brief Wrapper for "BOAP-standard" theme plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:14 asmecher Exp $


require_once('BoapStandardThemePlugin.inc.php');

return new BoapStandardThemePlugin();

?>
