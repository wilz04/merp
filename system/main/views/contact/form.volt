<form id="fFieldset" name="fFieldset" onsubmit="return merp.main.views.Form.onSubmitClick();">
	<header>
		<strong>Ministerio de Educaci&oacute;n P&uacute;blica</strong><br />
		<strong>Equipo Institucional de Datos Abiertos - Oficial&iacute;a de Acceso a la Informaci&oacute;n</strong><br />
		<strong>Solicitud de Acceso a Informaci&oacute;n P&uacute;blica</strong><br />
		<strong>Decreto 40200-MP-MEIC-MC</strong><br /><br />
		<strong>IDENTIFICACI&Oacute;N DEL SOLICITANTE (obligatorio)</strong><br /><br />
		{% set placeholder = 'Haga clic o pulse aqu&iacute; para escribir texto.' %}
	</header>
	<div class="form-group">
		<label for="tFullName">Nombres y apellidos / Raz&oacute;n social</label>
		<input type="text" class="form-control" id="tFullName" name="tFullName" placeholder="{{ placeholder }}" required maxlength="128" value="{{ _fullname }}" />
	</div>
	<div class="form-group">
		<label for="tId">C&eacute;dula identidad / Pasaporte / Dimex</label>
		<input type="text" class="form-control" id="tId" name="tId" placeholder="{{ placeholder }}" required maxlength="16" />
	</div>
	<div class="form-group">
		<label for="tAdvisor">Nombres y apellidos del apoderado (si corresponde)</label>
		<input type="text" class="form-control" id="tAdvisor" name="tAdvisor" placeholder="{{ placeholder }}" maxlength="128" />
	</div>
	<div class="form-group">
		<label for="tLegalId">C&eacute;dula jur&iacute;dica (si corresponde)</label>
		<input type="text" class="form-control" id="tLegalId" name="tLegalId" placeholder="{{ placeholder }}" maxlength="16" />
	</div>
	<div class="form-group">
		<label for="tAddress">Direcci&oacute;n</label>
		<textarea class="form-control" id="tAddress" name="tAddress" placeholder="{{ placeholder }}" required></textarea>
	</div>
	<div class="form-group">
		<label for="tLocation">Provincia, cant&oacute;n, distrito</label>
		<input type="text" class="form-control" id="tLocation" name="tLocation" placeholder="{{ placeholder }}" required maxlength="64" />
	</div>
	<div class="form-group">
		<label for="tPhone1">Tel&eacute;fono: Opci&oacute;n (1)</label>
		<input type="tel" class="form-control" id="tPhone1" name="tPhone1" placeholder="{{ placeholder }}" required maxlength="16" value="{{ _phone }}" />
	</div>
	<div class="form-group">
		<label for="tPhone2">Opci&oacute;n (2)</label>
		<input type="tel" class="form-control" id="tPhone2" name="tPhone2" placeholder="{{ placeholder }}" maxlength="16" />
	</div>
	<div class="form-group">
		<label for="tSigns">Otras se&ntilde;as</label>
		<input type="text" class="form-control" id="tSigns" name="tSigns" placeholder="{{ placeholder }}" maxlength="128" />
	</div>
	<div class="form-group">
		<label for="eMail">Correo electr&oacute;nico</label>
		<input type="email" class="form-control" id="eMail" name="eMail" placeholder="{{ placeholder }}" required maxlength="128" value="{{ _email }}" />
	</div>

	<hr />
	<header>
		<strong>INFORMACI&Oacute;N DE LA SOLICITUD (obligatorio)</strong><br />
		<span>Decreto de Acceso y Transparencia a la Informaci&oacute;n P&uacute;blica, en su art&iacute;culo 3: La solicitud de acceso a la informaci&oacute;n p&uacute;blica requerir&aacute; que la persona brinde la descripci&oacute;n clara de lo que se solicita y se&ntilde;ale un medio para recibir notificaciones.</span><br /><br />
	</header>
	<div class="form-group">
		<label for="tDepartment">Nombre de la direcci&oacute;n y / o departamento a la que dirige la solicitud</label>
		<textarea class="form-control" id="tDepartment" name="tDepartment" placeholder="{{ placeholder }}" required>Contralor&iacute;a de Servicios</textarea>
	</div>
	<div class="form-group">
		<label for="tSubject">Identificaci&oacute;n de la informaci&oacute;n solicitada. Se&ntilde;ale la materia, fecha de emisi&oacute;n o per&iacute;odo de vigencia, origen o destino, soporte, entre otros.</label>
		<textarea class="form-control" id="tSubject" name="tSubject" placeholder="{{ placeholder }}" required></textarea>
	</div>
	<div class="form-group">
		<input type="checkbox" id="bNotifyMe" name="bNotifyMe" />
		<label for="bNotifyMe" class="d-inline">Deseo ser notificado por correo electr&oacute;nico.</label>
	</div>
	<div class="form-group">
		<input type="checkbox" id="bPickup" name="bPickup" />
		<label for="bPickup" class="d-inline">Retira en ventanilla.</label>
	</div>
	
	<hr />
	<header>
		<strong>Informaci&oacute;n relevante</strong><br /><br />
	</header>
	<p><strong>Accesibilidad. </strong><span>Disponibilidad de la informaci&oacute;n p&uacute;blica tanto en medios manuales como electr&oacute;nicos, en formatos accesibles y abiertos para todas las personas, que permite un ejercicio &aacute;gil y eficiente del derecho de acceso a la informaci&oacute;n.</span></p>
	<p><strong>Informaci&oacute;n de acceso p&uacute;blico. </strong><span>Cualquier tipo de dato que sea generado o resguardado por quien ejerza una funci&oacute;n o potestad p&uacute;blica y que no tenga su acceso restringido por ley.</span></p>
	<p><strong>Informaci&oacute;n p&uacute;blica preconstituida. </strong><span>Cualquier informaci&oacute;n p&uacute;blica solicitada que sea de f&aacute;cil entrega, debido a la simplicidad de su tr&aacute;mite, y que la instituci&oacute;n p&uacute;blica pueda brindar de forma inmediata.</span></p>
	<p><strong>Plazo de respuesta. </strong><span>La respuesta a su solicitud tiene un plazo máximo de 10 días h&aacute;biles contado a partir de la fecha de recepci&oacute;n de la solicitud. Si debido a la complejidad de lo requerido, la autoridad p&uacute;blica necesita un plazo mayor para atender la gesti&oacute;n, deber&aacute; informar al solicitante en el plazo inicial de los diez d&iacute;as h&aacute;biles con la debida justificaci&oacute;n e indicando de cu&aacute;nto ser&aacute; la ampliaci&oacute;n, que deber&aacute; ser razonable, proporcional y no podr&aacute; exceder de forma excepcional el plazo de un mes. Si se realiza la prevenci&oacute;n contemplada en el artículo 3, el plazo para atender la solicitud comenzar&aacute; a regir a partir del momento en que el funcionario encargado tenga por cumplida la prevenci&oacute;n.</span></p>
	<p>En caso de tratarse de informaci&oacute;n p&uacute;blica preconstituida, la autoridad p&uacute;blica deber&aacute; brindar lo solicitado de forma inmediata.</p>
	<p>La informaci&oacute;n solicitada se entregar&aacute; en la forma y por el medio que usted se&ntilde;ale.</p>
	<p><strong>Costo de reproducci&oacute;n. </strong><span>El costo de la reproducci&oacute;n de la informaci&oacute;n p&uacute;blica solicitada ser&aacute; de cuenta del solicitante, a quien deber&aacute; comunicarse dicha circunstancia. Tales gastos no podr&aacute;n exceder el costo de reproducci&oacute;n y de env&iacute;o, en caso necesario. El funcionario encargado procurar&aacute; reducir el costo al m&iacute;nimo.</span></p>
	<p><strong>Denegaci&oacute;n total o parcial de informaci&oacute;n. </strong><span>Cuando la informaci&oacute;n p&uacute;blica solicitada est&aacute; cubierta por alguna excepci&oacute;n normativa y se deniegue lo solicitado de forma parcial o total, el funcionario encargado deber&aacute; explicar por escrito el motivo de su actuaci&oacute;n y con la debida fundamentaci&oacute;n jur&iacute;dica.</span></p>
	<div class="form-group">
		<label for="dDate">Fecha</label>
		<input type="date" class="form-control" id="dDate" name="dDate" placeholder="Haga clic aqu&iacute; o pulse para escribir una fecha." readonly value="{{ _today }}" />
	</div>
	<div class="form-group">
		<label for="tApplicant">Nombre del solicitante</label>
		<input type="text" class="form-control" id="tApplicant" name="tApplicant" placeholder="{{ placeholder }}" required maxlength="128" value="{{ _fullname }}" />
	</div>
	<div class="form-group d-flex justify-content-end">
		<input type="submit" class="btn btn-primary" value="Enviar solicitud" />
	</div>

	<hr />
	<header>
		<span><a href="mailto:equipo.datos.abiertos@mep.go.cr">Equipo Institucional de Datos Abiertos - Oficial&iacute;a de Acceso a la Informaci&oacute;n</a></span>
	</header>
</form>