<form id="fEditor" name="fEditor">
	<input type="hidden" id="_id" name="_id" value="{{ _id|default('') }}" />
	<div id="_titleGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_title">*T&iacute;tulo</label>
		<input type="text" class="form-control" id="_title" name="_title" required maxlength="64" value="{{ _title|default('') }}" />
	</div>
	<div id="_hrefGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_href">*Enlace</label>
		<input type="text" class="form-control" id="_href" name="_href" required maxlength="1024" value="{{ _href|default('') }}" />
	</div>
	<div id="_categoryGroup" class="form-group" style="display: {{ 'block'|default('block') }};">
		<label for="_category">Categor&iacute;a</label>
		<select class="form-control" id="_category" name="_category" >
			<option value="">--</option>
			{% for option in enum_3 %}
			<option value="{{ option._id }}" {% if option._id === _category|default('') %} selected {% endif %}>{{ option._title }}</option>
			{% endfor %}
		</select>
	</div>
</form>
