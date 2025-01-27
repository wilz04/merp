<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_schoolGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_school">*Instituci&oacute;n</label>
		<select class="form-control" id="_school" name="_school" required>
			<option value="">--</option>
			{% for option in enum_1 %}
			<option value="{{ option._id }}" {% if option._id === _school|default('') %} selected {% endif %}>{{ option._name }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_enrollmentmodeGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_enrollmentmode">*Modalidad</label>
		<select class="form-control" id="_enrollmentmode" name="_enrollmentmode" required>
			<option value="">--</option>
			{% for option in enum_2 %}
			<option value="{{ option._id }}" {% if option._id === _enrollmentmode|default('') %} selected {% endif %}>{{ option._description }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_yearGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_year">*A&ntilde;o</label>
		<input type="number" class="form-control" id="_year" name="_year" required  value="{{ _year|default('') }}" />
	</div>
	<div id="_amountGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_amount">*Matr&iacute;cula</label>
		<input type="number" class="form-control" id="_amount" name="_amount" required  value="{{ _amount|default('0') }}" />
	</div>
</form>
