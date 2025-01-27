<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_cantonGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_canton">*Cant&oacute;n</label>
		<select class="form-control" id="_canton" name="_canton" required>
			<option value="">--</option>
			{% for option in enum_1 %}
			<option value="{{ option._id }}" {% if option._id === _canton|default('') %} selected {% endif %}>{{ option._name }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_idsGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_ids">*IDS</label>
		<input type="text" class="form-control" id="_ids" name="_ids" required maxlength="8" value="{{ _ids|default('') }}" />
	</div>
	<div id="_yearGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_year">*A&ntilde;o</label>
		<input type="number" class="form-control" id="_year" name="_year" required  value="{{ _year|default('') }}" />
	</div>
</form>
