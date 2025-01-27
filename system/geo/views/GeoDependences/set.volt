<form id="fEditor" name="fEditor">
	<div id="_idGroup" class="form-group" style="display: {{ identity|default('block') }};">
		<label for="_id">*Identificador</label>
		<input type="text" class="form-control" id="_id" name="_id" required maxlength="4" value="{{ _id|default('0') }}" />
	</div>
	<div id="_descriptionGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_description">*Descripci&oacute;n</label>
		<input type="text" class="form-control" id="_description" name="_description" required maxlength="32" value="{{ _description|default('') }}" />
	</div>
</form>
