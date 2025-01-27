<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_circuitGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_circuit">*Circuito</label>
		<input type="text" class="form-control" id="_circuit" name="_circuit" required maxlength="2" value="{{ _circuit|default('00') }}" />
	</div>
	<div id="_townGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_town">*Poblado</label>
		<select class="form-control" id="_town" name="_town" required>
			<option value="">--</option>
			{% for option in enum_2 %}
			<option value="{{ option._id }}" {% if option._id === _town|default('0') %} selected {% endif %}>{{ option._town }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_regionalGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_regional">*Direcci&oacute;n regional</label>
		<select class="form-control" id="_regional" name="_regional" required>
			<option value="">--</option>
			{% for option in enum_3 %}
			<option value="{{ option._id }}" {% if option._id === _regional|default('0') %} selected {% endif %}>{{ option._name }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_budgetcodeGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_budgetcode">C&oacute;digo presupuestario</label>
		<input type="text" class="form-control" id="_budgetcode" name="_budgetcode"  maxlength="4" value="{{ _budgetcode|default('') }}" />
	</div>
	<div id="_nameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_name">*Instituci&oacute;n</label>
		<input type="text" class="form-control" id="_name" name="_name" required maxlength="64" value="{{ _name|default('') }}" />
	</div>
	<div id="_dependenceGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_dependence">*Dependencia</label>
		<select class="form-control" id="_dependence" name="_dependence" required>
			<option value="">--</option>
			{% for option in enum_6 %}
			<option value="{{ option._id }}" {% if option._id === _dependence|default('0') %} selected {% endif %}>{{ option._description }}</option>
			{% endfor %}
		</select>
	</div>
	<div id="_phoneGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_phone">*Tel&eacute;fono</label>
		<input type="tel" class="form-control" id="_phone" name="_phone" required  value="{{ _phone|default('') }}" />
	</div>
</form>
