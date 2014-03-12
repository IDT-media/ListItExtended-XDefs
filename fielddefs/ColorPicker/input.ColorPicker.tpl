<div class="pageoverflow">
	<p class="pagetext">{$fielddef->GetName()}{if $fielddef->IsRequired()}*{/if}:</p>
	<p class="pageinput">
		{if $fielddef->GetDesc()}({$fielddef->GetDesc()})<br />{/if}
		<input type="text" name="{$actionid}customfield[{$fielddef->GetId()}]" id="{$actionid}customfield[{$fielddef->GetId()}]" value="{$fielddef->GetValue()}" size="{$fielddef->GetOptionValue('size')}" />
	</p>
	
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$("#{$actionid}customfield\\\[{$fielddef->GetId()}\\\]")
		.ColorPicker({
			onShow: function (colpkr) {
				$(colpkr).fadeIn(300);
				return false;
			},
			onHide: function (colpkr) {
				$(colpkr).fadeOut(300);
				return false;
			},
			onBeforeShow: function () {
				$(this).ColorPickerSetColor(this.value);
			},
			onChange: function (hsb, hex, rgb) {
				$("#{$actionid}customfield\\\[{$fielddef->GetId()}\\\]").val(hex);
			}
		})

	});
	</script>
	
</div>