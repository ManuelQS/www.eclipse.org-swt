<?php require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());

$pageTitle = "SWT Tools Update Sites";

ob_start();
?>
<div id="midcolumn">
<h1>SWT Tools Update Sites</h1>

<p>The SWT Development Tools are available from the following update sites.</p> 
<p>For everyday development please ensure that you are 
using the most recent tools available. Stable releases of the tools are provided for the purpose of creating patches against maintenance
branches of SWT.</p>

<table border="1" align="center" cellpadding="3" cellspacing="1">
<tr>
<th> Update Site
</th><th> Update Site URL
</th></tr>
<tr>
<td> <strong>4.5 M5 and newer</strong> </td>
<td>Part of the main Platform P2 repository.
<ul><li>Use Release update site to receive updates for a particular release - http://download.eclipse.org/eclipse/updates/4.5 (or newer version)</li>
<li>Milestone update site to receive updates in the current milestone - http://download.eclipse.org/eclipse/updates/milestones</li>
<li>I-build update site to receive updates in the current I-build - http://download.eclipse.org/eclipse/updates/I-builds</li></ul>
</td>
</tr>
<tr>
<td> <strong>4.5 M1 - 4.5 M4 releases</strong> </td><td>http://www.eclipse.org/swt/updates/4.4</td>
</tr>
<tr>
<td> <strong>4.4.x releases</strong> </td><td>http://www.eclipse.org/swt/updates/4.4</td>
</tr>
<tr>
<td> <strong>4.3.x releases</strong> </td><td>http://www.eclipse.org/swt/updates/4.3</td>
</tr>
<tr>
<td> <strong>3.8.x - 4.2.x releases</strong> </td><td> http://www.eclipse.org/swt/updates/3.8 </td>
</tr>
<tr>
<td> <strong>3.6.x - 3.7.x releases</strong> </td><td> http://www.eclipse.org/swt/updates/3.6 </td>
</tr>
<tr>
<td> <strong>3.5.x releases</strong> </td><td> http://www.eclipse.org/swt/updates/3.5 </td>
</tr>
</table>

</div>
<?php 
$html = ob_get_clean();

# Generate the web page
$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
