{**
 * block.tpl
 *
 * Copyright (c) 2003-2008 John Willinsky
 * Distributed under the GNU GPL v2. For full terms see the file docs/COPYING.
 *
 * Common site sidebar menu -- "SidebarSubmission" block.
 *
 * $Id: block.tpl,v 1.3 2008/06/11 18:55:09 asmecher Exp $
 *}
<div class="block" id="sidebarSubmission">

<span class="blockTitle">{translate key="about.onlineSubmissions"}</span>

<p>{translate key="about.onlineSubmissions.registrationRequired"}</p>

<p>
        {translate key="about.onlineSubmissions.haveAccount" journalTitle=$siteTitle|escape}<br />
        <a href="{url page="login"}" class="action">{translate key="about.onlineSubmissions.login"}</a>
</p>
<p>
        {translate key="about.onlineSubmissions.needAccount"}<br />
        <a href="{url page="user" op="register"}" class="action">{translate key="about.onlineSubmissions.registration"}</a>
</p>

</div>
