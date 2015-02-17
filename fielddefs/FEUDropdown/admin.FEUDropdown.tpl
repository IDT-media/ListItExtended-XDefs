<div class="pageoverflow">
	<p class="pagetext">{$fielddef->ModLang('fielddef_feu_options')}:</p>
	<p class="pageinput">
		{$themeObject->DisplayImage('icons/system/info.gif')} <em>{$fielddef->ModLang('fielddef_feu_dropdown_help')}</em><br />
		{html_options name="`$actionid`custom_input[feu_options]" options=$fielddef->GetFEUGroups() selected=$fielddef->GetOptionValue('feu_options')}
	</p>
</div>
<div class="pageoverflow">
	<p class="pagetext">{$fielddef->ModLang('fielddef_feu_identifier')}:</p>
	<p class="pageinput">
		{$themeObject->DisplayImage('icons/system/info.gif')} <em>{$fielddef->ModLang('fielddef_feu_identifier_help')}</em><br />
		{html_options name="`$actionid`custom_input[feu_identifier]" options=$fielddef->GetFEUIdentifier() selected=$fielddef->GetOptionValue('feu_identifier')}
	</p>
</div>
<div class="pageoverflow">
	<p class="pagetext">{$fielddef->ModLang('fielddef_feu_properties')}:</p>
	<p class="pageinput">
		{$themeObject->DisplayImage('icons/system/info.gif')} <em>{$fielddef->ModLang('fielddef_feu_properties_help')}</em><br />
		{html_options name="`$actionid`custom_input[feu_property]" options=$fielddef->GetFEUProperties() selected=$fielddef->GetOptionValue('feu_property')}
	</p>
</div>
