<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_keyGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_key">*Llave</label>
		<input type="text" class="form-control" id="_key" name="_key" required maxlength="32" value="{{ _key|default('') }}" />
	</div>
	<div id="_valueGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_value">*Valor</label>
		<input type="text" class="form-control" id="_value" name="_value" required maxlength="64" value="{{ _value|default('') }}" />
	</div>
</form>
