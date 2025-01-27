<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_recvdateGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_recvdate">*Fecha de recepci&oacute;n</label>
		<input type="date" class="form-control" id="_recvdate" name="_recvdate" required  value="{{ _recvdate|default('') }}" />
	</div>
	<div id="_recvunitGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_recvunit">*Unidad receptora</label>
		<input type="text" class="form-control" id="_recvunit" name="_recvunit" required maxlength="64" value="{{ _recvunit|default('') }}" />
	</div>
	<div id="_recvreceptorGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_recvreceptor">*Nombre del funcionario</label>
		<input type="text" class="form-control" id="_recvreceptor" name="_recvreceptor" required maxlength="128" value="{{ _recvreceptor|default('') }}" />
	</div>
	<div id="_recvnotifiedGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_recvnotified">*Notificado a</label>
		<input type="text" class="form-control" id="_recvnotified" name="_recvnotified" required maxlength="128" value="{{ _recvnotified|default('') }}" />
	</div>
</form>
