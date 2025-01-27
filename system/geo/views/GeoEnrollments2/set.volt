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
	<div id="_adGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_ad">*AD</label>
		<input type="number" class="form-control" id="_ad" name="_ad" required  value="{{ _ad|default('0') }}" />
	</div>
	<div id="_aeGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_ae">*AE</label>
		<input type="number" class="form-control" id="_ae" name="_ae" required  value="{{ _ae|default('0') }}" />
	</div>
	<div id="_prGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_pr">*PR</label>
		<input type="number" class="form-control" id="_pr" name="_pr" required  value="{{ _pr|default('0') }}" />
	</div>
	<div id="_rcGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_rc">*RC</label>
		<input type="number" class="form-control" id="_rc" name="_rc" required  value="{{ _rc|default('0') }}" />
	</div>
	<div id="_peGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_pe">*PE</label>
		<input type="number" class="form-control" id="_pe" name="_pe" required  value="{{ _pe|default('0') }}" />
	</div>
	<div id="_peaGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_pea">*PEA</label>
		<input type="number" class="form-control" id="_pea" name="_pea" required  value="{{ _pea|default('0') }}" />
	</div>
</form>
