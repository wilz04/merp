<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_townGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_town">*Localizaci&oacute;n</label>
		<input type="text" class="form-control" id="_town" name="_town" required maxlength="512" value="{{ _town|default('') }}" />
	</div>
</form>
