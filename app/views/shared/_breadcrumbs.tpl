{if sizeof($breadcrumbs)>=2}
<ol class="breadcrumb hidden-print">
	{foreach $breadcrumbs as $breadcrumb}
			{if $breadcrumb->getUrl() && !$breadcrumb@last}
			<li>
				<a href="{$breadcrumb->getUrl()}">{$breadcrumb->getTitle()}</a>
			</li>
			{else}
			<li class="active">
				{$breadcrumb->getTitle()}
			</li>
			{/if}
	{/foreach}
</ol>
{/if}
