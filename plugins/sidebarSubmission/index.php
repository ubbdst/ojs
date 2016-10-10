<?php

/**
 * @defgroup plugins_blocks_sidebarSubmission
 */

/**
 * @file plugins/blocks/sidebarSubmission/index.php
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * @ingroup plugins_blocks_sidebarSubmission
 * @brief Wrapper for "sidebar submission" block plugin.
 *
 */

// $Id: index.php,v 1.5 2008/07/01 01:16:12 asmecher Exp $


require_once('SidebarSubmissionBlockPlugin.inc.php');

return new SidebarSubmissionBlockPlugin();

?>
