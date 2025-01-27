<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('-1') }}" />
	<div id="_regionalGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_regional">*Regional</label>
		<input type="text" class="form-control" id="_regional" name="_regional" required maxlength="32" value="{{ _regional|default('') }}" />
	</div>
	<div id="_circuitGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_circuit">*Circuito</label>
		<input type="text" class="form-control" id="_circuit" name="_circuit" required maxlength="2" value="{{ _circuit|default('00') }}" />
	</div>
	<div id="_budgetcodeGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_budgetcode">C&oacute;digo</label>
		<input type="text" class="form-control" id="_budgetcode" name="_budgetcode"  maxlength="4" value="{{ _budgetcode|default('') }}" />
	</div>
	<div id="_nameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_name">*Instituci&oacute;n</label>
		<input type="text" class="form-control" id="_name" name="_name" required maxlength="64" value="{{ _name|default('0000') }}" />
	</div>
	<div id="_townGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_town">*Poblado</label>
		<input type="text" class="form-control" id="_town" name="_town" required maxlength="256" value="{{ _town|default('') }}" />
	</div>
	<div id="_dependenceGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_dependence">*Dependencia</label>
		<input type="text" class="form-control" id="_dependence" name="_dependence" required maxlength="32" value="{{ _dependence|default('') }}" />
	</div>
	<div id="_zoneGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_zone">*Zona</label>
		<input type="text" class="form-control" id="_zone" name="_zone" required maxlength="32" value="{{ _zone|default('') }}" />
	</div>
	<div id="_phoneGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_phone">*Tel&eacute;fono</label>
		<input type="tel" class="form-control" id="_phone" name="_phone" required  value="{{ _phone|default('') }}" />
	</div>
	<div id="_caipadGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_caipad">*Matrícula</label>
		<input type="number" class="form-control" id="_caipad" name="_caipad" required  value="{{ _caipad|default('0') }}" />
	</div>
</form>
