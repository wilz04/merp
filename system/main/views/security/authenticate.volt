<form id="fSignin" name="fSignin" onsubmit="return merp.main.views.Signin.onSubmitClick();">
	<input type="email" id="tEmail" name="tEmail" placeholder="Email" maxlength="24" size="24" required />
	<input type="password" id="tPassword" name="tPassword" placeholder="Contrase&ntilde;a" maxlength="16" size="24" required />
	<input type="submit" id="bSubmit" name="bSubmit" value="Entrar" />
	<a id="aForget" name="aForget" href="remind" target="_self" onclick="return merp.main.views.Signin.onForgetClick();">&iquest;Olvidaste tu password?</a>
</form>
