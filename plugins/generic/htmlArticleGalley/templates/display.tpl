{**
 * plugins/generic/htmlArticleGalley/display.tpl
 *
 * Copyright (c) 2014-2019 Simon Fraser University
 * Copyright (c) 2003-2019 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Embedded viewing of a HTML galley.
 *}
<!DOCTYPE html>
<html lang="{$currentLocale|replace:"_":"-"}" xml:lang="{$currentLocale|replace:"_":"-"}">
{capture assign="pageTitleTranslated"}{translate key="article.pageTitle" title=$article->getLocalizedTitle()|escape}{/capture}
{include file="frontend/components/headerHead.tpl"}
{include file="frontend/components/header.tpl"}
<body class="pkp_page_{$requestedPage|escape} pkp_op_{$requestedOp|escape}">

	{* Header wrapper *}
	<div id="htmlContainer" style="margin-left: auto; margin-right: auto; max-width: 700px; padding-top: 20px">
		{$htmlGalleyContents}
	</div>

	{call_hook name="Templates::Common::Footer::PageFooter"}
	{include file="frontend/components/footer.tpl"}
</body>
</html>
