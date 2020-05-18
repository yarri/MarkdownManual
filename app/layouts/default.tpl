{*
 * The page Layout template
 *
 * Placeholders
 * ------------
 * head						 	located whithin the <head> tag
 * main							the main (or default) one
 * js_script_tags				place for javascript script tags
 * js							place for javascript code
 * domready						place for domready javascript code
 *
 * Variables
 * ------------
 * $lang
 * $controller
 * $action
 * $namespace
 * $logged_user
 * $page_description
 *
 * Constants
 * ------------
 * $DEVELOPMENT
 *}
<!DOCTYPE html>
<html lang="{$lang}">

	<head>
		<meta charset="utf-8">

		<title>{trim}
			{if ($controller=="main" || $controller=="atk14_book") && $action=="index" && $namespace==""}
				{"ATK14_APPLICATION_NAME"|dump_constant}
			{else}
				{$page_title} | {"ATK14_APPLICATION_NAME"|dump_constant}
			{/if}
		{/trim}</title>

		<meta name="description" content="{$page_description}" />
		<meta name="viewport" content="width=device-width,initial-scale=1.0">

		{if $DEVELOPMENT}
			{render partial="shared/layout/dev_info"}
		{/if}

		{stylesheet_link_tag file="$public/dist/styles/vendor.min.css" hide_when_file_not_found=true}
		{stylesheet_link_tag file="$public/dist/styles/application.min.css"}

		<!-- HTML5 shiv and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
			{javascript_script_tag file="$public/dist/scripts/html5shiv.min.js"}
			{javascript_script_tag file="$public/dist/scripts/respond.min.js"}
		<![endif]-->

		{render partial="shared/layout/analyticstracking"}

		<meta name="google-site-verification" content="33ODtAtgCoVxVD4fanTObjqROJ7Abca4dNqjCRGHtIk" />

	</head>

	<body class="body_{$controller}_{$action}" data-controller="{$controller}" data-action="{$action}">

		<header class="header-main">
			
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
	<div class="container">
		<a class="navbar-brand" href="/">_{"ATK14_APPLICATION_NAME"|dump_constant}</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-bars"></i>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<ul class="navbar-nav">
				<li class="nav-item">
					<a class="nav-link" href="http://www.atk14.net/">ATK14 Framework</a>
				</li>
				<li class="nav-link" class="nav-item">
					<a href="http://www.atk14sites.net/">Kdo používá ATK14?</a>
				</li>
			</ul>
		</div>
  </div>
</nav>

			<!-- Docs page layout -->
			<div class="bs-docs-header d-none d-sm-block" id="content" tabindex="-1">
				<div class="container">
					<p>{t escape=no}Příručka pro psaní textu ve značkovacím jazyce Markdown{/t}</p>
				</div>
			</div>

		</header>

		<div class="container">
			{*render partial="shared/layout/header" *}
			{render partial="shared/breadcrumbs"}

			<div class="body">
				<div class="content-main">
					{render partial="shared/layout/flash_message"}
					{placeholder}
				</div>
			</div>

			{*
			{render partial="shared/layout/footer"}
			*}
		</div>

		{javascript_script_tag file="$public/dist/scripts/vendor.min.js"}
		{javascript_script_tag file="$public/dist/scripts/application.min.js"}
	</body>
</html>
