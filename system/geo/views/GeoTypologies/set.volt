<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_descriptionGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_description">*Descripci&oacute;n</label>
		<input type="text" class="form-control" id="_description" name="_description" required maxlength="32" value="{{ _description|default('') }}" />
	</div>
</form>
