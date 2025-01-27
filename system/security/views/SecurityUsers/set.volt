<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_1stnameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_1stname">*Nombre</label>
		<input type="text" class="form-control" id="_1stname" name="_1stname" required maxlength="32" value="{{ _1stname|default('') }}" />
	</div>
	<div id="_2ndnameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_2ndname">Segundo nombre</label>
		<input type="text" class="form-control" id="_2ndname" name="_2ndname"  maxlength="32" value="{{ _2ndname|default('') }}" />
	</div>
	<div id="_3rdnameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_3rdname">*Apellido</label>
		<input type="text" class="form-control" id="_3rdname" name="_3rdname" required maxlength="32" value="{{ _3rdname|default('') }}" />
	</div>
	<div id="_4thnameGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_4thname">Segundo apellido</label>
		<input type="text" class="form-control" id="_4thname" name="_4thname"  maxlength="32" value="{{ _4thname|default('') }}" />
	</div>
	<div id="_emailGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_email">*e-Mail</label>
		<input type="text" class="form-control" id="_email" name="_email" required maxlength="32" value="{{ _email|default('') }}" />
	</div>
	<div id="_phoneGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_phone">Tel&eacute;fono</label>
		<input type="number" class="form-control" id="_phone" name="_phone"   value="{{ _phone|default('') }}" />
	</div>
	<div id="_photoGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_photo">Foto</label>
		<input type="text" class="form-control" id="_photo" name="_photo"  maxlength="32" value="{{ _photo|default('') }}" />
	</div>
</form>
