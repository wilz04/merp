<!-- h1>&iexcl;Digita los datos para crear tu cuenta!</h1 -->
<!-- br /-->
<form id="fSignup" name="fSignup" onsubmit="return merp.main.views.Signup.onSubmitClick();">
	<div id="_1stNameGroup" class="form-group">
		<label for="t1stName">*Nombre</label>
		<input type="text" class="form-control" id="t1stName" name="t1stName" required maxlength="32" /><!-- aria-describedby="t1stNameHelp" placeholder="Nombre" -->
		<!-- small id="tNameHelp" class="form-text text-muted">Este debe ser tu primer nombre.</small -->
	</div>
	<div id="_2ndNameGroup" class="form-group">
		<label for="t1stName">Segundo nombre</label>
		<input type="text" class="form-control" id="t2ndName" name="t2ndName" maxlength="32" /><!-- aria-describedby="t2ndNameHelp" placeholder="Segundo nombre" -->
		<!-- small id="t2ndNameHelp" class="form-text text-muted">Este debe ser tu segundo nombre.</small -->
	</div>
	<div id="_3rdNameGroup" class="form-group">
		<label for="t3rdName">*Apellido</label>
		<input type="text" class="form-control" id="t3rdName" name="t3rdName" required maxlength="32" />
	</div>
	<div id="_4thNameGroup" class="form-group">
		<label for="t3rdName">Segundo apellido</label>
		<input type="text" class="form-control" id="t4thName" name="t4thName" maxlength="32" />
	</div>
	<div id="_eMailGroup" class="form-group">
		<label for="tEmail">*Direcci&oacute;n de email</label>
		<input type="email" class="form-control" id="tEmail" name="tEmail" required maxlength="32" />
	</div>
	<div id="_passwordGroup" class="form-group">
		<label for="tPassword">*Contrase&ntilde;a</label>
		<input type="password" class="form-control" id="tPassword" name="tPassword" required maxlength="32" aria-describedby="tPasswordHelp" />
		<p><small id="tPasswordHelp" class="form-text text-muted">El texto en los dos campos de contrase&ntilde;a debe ser el mismo.</small></p>
	</div>
	<div id="_passwordVerifierGroup" class="form-group">
		<label for="tPasswordVerifier">*Contrase&ntilde;a</label>
		<input type="password" class="form-control" id="tPasswordVerifier" required name="tPasswordVerifier" maxlength="32" aria-describedby="tPasswordVerifierHelp" />
		<p><small id="tPasswordVerifierHelp" class="form-text text-muted">El texto en los dos campos de contrase&ntilde;a debe ser el mismo.</small></p>
	</div>
	<div id="_phoneGroup" class="form-group">
		<label for="tPhone">Tel&eacute;fono</label>
		<input type="number" class="form-control" id="tPhone" name="tPhone" />
	</div>
	<div id="_profileGroup" class="form-group">
		<label for="sProfile">Perfil</label>
		<select class="form-control" id="sProfile" name="sProfile">
			{% for profile in profiles %}
      <option value="{{ profile._id }}">{{ profile._name }}</option>
      {% endfor %}
		</select>
	</div>
	<!-- input type="submit" class="btn btn-primary" id="bSubmit" name="bSubmit" value="Registrarme" /-->
	<!-- input type="button" class="btn btn-primary" id="bBack" name="bBack" value="Volver" onclick="merp.main.views.Signup.back();" /-->
</form>
