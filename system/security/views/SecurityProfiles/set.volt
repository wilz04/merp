<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_nameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_name">*Nombre</label>
		<input type="text" class="form-control" id="_name" name="_name" required maxlength="64" value="{{ _name|default('') }}" />
	</div>
</form>
