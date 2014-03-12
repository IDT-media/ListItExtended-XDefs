<div class="pageoverflow">
    <p class="pagetext">{$fielddef->ModLang('size')}:</p>
    <p class="pageinput">
    	{$themeObject->DisplayImage('icons/system/info.gif')}<em> {$fielddef->ModLang('fielddef_size_help')}</em><br />
    	<input type="text" name="{$actionid}custom_input[size]" value="{$fielddef->GetOptionValue('size', 20)}" />
    </p>
</div>

<div class="pageoverflow">
    <p class="pagetext">{$fielddef->ModLang('max_lenght')}:</p>
    <p class="pageinput">
    	{$themeObject->DisplayImage('icons/system/info.gif')}<em> {$fielddef->ModLang('fielddef_max_lenght_help')}</em><br />
    	<input type="text" name="{$actionid}custom_input[max_lenght]" value="{$fielddef->GetOptionValue('max_lenght', 255)}" />
    </p>
</div>