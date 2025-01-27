<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_districtGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_district">*Distrito</label>
		<select class="form-control" id="_district" name="_district" required>
			<option value="">--</option>
			{% for option in enum_1 %}
			<option value="{{ option._id }}" {% if option._id === _district|default('') %} selected {% endif %}>{{ option._name }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_populationGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_population">*Poblaci&oacute;n</label>
		<input type="text" class="form-control" id="_population" name="_population" required maxlength="8" value="{{ _population|default('') }}" />
	</div>
	<div id="_economicGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_economic">*Econ&oacute;mica</label>
		<input type="text" class="form-control" id="_economic" name="_economic" required maxlength="8" value="{{ _economic|default('') }}" />
	</div>
	<div id="_voterturnoutGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_voterturnout">*Electoral</label>
		<input type="text" class="form-control" id="_voterturnout" name="_voterturnout" required maxlength="8" value="{{ _voterturnout|default('') }}" />
	</div>
	<div id="_healthGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_health">*Salud</label>
		<input type="text" class="form-control" id="_health" name="_health" required maxlength="8" value="{{ _health|default('') }}" />
	</div>
	<div id="_educationGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_education">*Educaci&oacute;n</label>
		<input type="text" class="form-control" id="_education" name="_education" required maxlength="8" value="{{ _education|default('') }}" />
	</div>
	<div id="_securityGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_security">*Seguridad</label>
		<input type="text" class="form-control" id="_security" name="_security" required maxlength="8" value="{{ _security|default('') }}" />
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
