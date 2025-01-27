/* MERP Library */
var merp = {

	main: {
		/* ================================================================================================================================ */
		services: {
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Router: {

				PUBLIC_PATH: "/merp",
				DATAGRID_ESLANG_PATH: "/merp/lib/datatables/es-ES.json",

				newRequest: function (uri, src, dt, ok, ex) {
					return {
						type: "POST",
						url: uri,
						data: (src != null? src: {}),
						dataType: dt,
						headers: {"From": merp.main.views.Menu.getAuthoritativeInformation()},
						encode: true,
						success: (data, status, sender) => ok(data, status, sender),
						error: (data, status, sender) => ex(data, status, sender)
					};
				},

				newDashboard: function (ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/dashboard", null, "html", ok, ex));
				},

				newCatalogue: function (ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/catalogue", null, "html", ok, ex));
				},

				newForm: function (ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/contact/form", null, "html", ok, ex));
				},

				putMail: function (req, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/contact/mail", req, "json", ok, ex));
				},

				newSignup: function (ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/signup/new", null, "html", ok, ex));
				},

				putSignup: function (user, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/signup/put", user, "json", ok, ex));
				},

				newSignin: function (ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/", null, "html", ok, ex));
				},

				putReminder: function (user, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/remind", user, "json", ok, ex));
				},

				putSignin: function (user, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/signin", user, "html", ok, ex));
				},

				newHome: function (ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/home", null, "html", ok, ex));
				},

				newMaint: function (href, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(merp.main.services.Router.PUBLIC_PATH + "/" + href, null, "json", ok, ex));
				},

				newEditor: function (href, src, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(href, src, "html", ok, ex));
				},

				putModal: function (href, src, ok, ex) {
					$.ajax(merp.main.services.Router.newRequest(href, src, "json", ok, ex));
				}

			}
			/* ------------------------------------------------------------------------------------------------------------------------------ */
		},
		/* ================================================================================================================================ */
		views: {
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Text: {

				CURRENT_YEAR: "A&ntilde;o actual",

				RECORD_NEW: "Nuevo",
				RECORD_EDIT: "Editar",
				RECORD_REMOVE: "Eliminar",
				RECORD_CONFIRM_FOR_REMOVAL: "\xbfRealmente deseas eliminar las filas seleccionadas?",
				RECORD_ADD: "Guardar",

				/* 200 */ OK: "La petici\xf3n ha sido resuelta exitosamente.",
				/* 400 */ BAD_REQUEST: "La petici\xf3n no ha sido resuelta, por favor intente de nuevo.", // reform\xfalela e
				/* 401 */ UNAUTHORIZED: "Tu cuenta no ha sido encontrada.",

				REMINDER_ASK: "Digita tu correo electr\xf3nico.",
				REMINDER_OK: "Tu nueva contrase\xf1a ha sido enviada a tu correo electr\xf3nico.",

				NULL_POINTER_EXCEPTION: "Al menos una fila debe estar seleccionada.",
				TOO_MANY_ARGUMENTS: "Solo una fila debe estar seleccionada.",

				EMPTY: "No hay datos disponibles",

				TITLE_NEW: 1,
				TITLE_ADD: 2,
				TITLE_UPD: 3,
				TITLE_REM: 4,

				getTitle: function (dtid, title) {
					return "";
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Modal: function (id, title, container) {

				var handler;
				var dialog;
				var body;
				var viewport;
				var bOk;

				var onClose = this.close = () => {
					if (viewport.parentElement != null) {
						handler.hide();
						$(".modal-backdrop").hide();
					}
				};

				this.open = function () {
					if (viewport.parentElement == null) {
						body.appendChild(viewport);
					}

					if (dialog.parentElement == null) {
						container.appendChild(dialog);
					}

					if (handler == null) {
						$(".modal-backdrop").remove();
						handler = $("#" + id).modal({ backdrop: "static", keyboard: false });
					}

					handler.show();
					$(".modal-backdrop").show();
				};

				this.load = function (content, ok) {
					viewport.innerHTML = content;
					bOk.onclick = ok;
				};

				this.setTitle = function (title) {
					var titlebar = document.getElementsByClassName("modal-title");
					if (titlebar.length > 0) {
						titlebar[0].innerHTML = title;
						return true;
					}

					return false;
				};

				(function () {
					handler = null;
					viewport = document.createElement("div");

					dialog = document.createElement("div");
					dialog.classList.add("modal");
					dialog.setAttribute("id", id);
					dialog.setAttribute("tabindex", "-1");
					dialog.setAttribute("role", "dialog");

					var doc = document.createElement("div");
					doc.classList.add("modal-dialog");
					doc.setAttribute("role", "document");
					dialog.appendChild(doc);

					var root = document.createElement("div");
					root.classList.add("modal-content");
					doc.appendChild(root);

					var header = document.createElement("div");
					header.classList.add("modal-header");
					root.appendChild(header);

					var h5 = document.createElement("h5");
					h5.classList.add("modal-title");
					h5.innerHTML = title;
					header.appendChild(h5);
					/*
					var bClose = document.createElement("button");
					bClose.setAttribute("type", "button");
					bClose.classList.add("close");
					bClose.setAttribute("data-dismiss", "modal");
					bClose.setAttribute("aria-label", "Close");
					bClose.addEventListener("click", onClose, false);
					header.appendChild(bClose);
					
					var times = document.createElement("span");
					times.setAttribute("aria-hidden", "true");
					times.innerHTML = "&times;";
					bClose.appendChild(times);
					*/
					body = document.createElement("div");
					body.classList.add("modal-body");
					root.appendChild(body);

					var footer = document.createElement("div");
					footer.classList.add("modal-footer");
					root.appendChild(footer);

					bOk = document.createElement("button");
					bOk.setAttribute("type", "button");
					bOk.classList.add("btn");
					bOk.classList.add("btn-primary");
					bOk.innerHTML = "Continuar";
					footer.appendChild(bOk);

					var bCancel = document.createElement("button");
					bCancel.setAttribute("type", "button");
					bCancel.classList.add("btn");
					bCancel.classList.add("btn-secondary");
					// bCancel.setAttribute("data-dismiss", "modal");
					bCancel.setAttribute("data-backdrop", "false");
					bCancel.innerHTML = "Cancelar";
					bCancel.addEventListener("click", onClose, false);
					footer.appendChild(bCancel);
				})();

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Datagrid: function (id, href, fieldset, rowformat, headset, rights, sender) {

				var root;
				var datatable;
				var modal;
				var form;

				this.getRoot = function () {
					return root;
				};

				function onPutClick () {
					form.requestSubmit();
				}

				function put () {
					var src = {};
					var i;
					var field;
					for (i in fieldset) {
						field = document.getElementById(fieldset[i].name);
						if (field != null) {
							src[fieldset[i].name] = field.value;
						}
					}

					merp.main.services.Router.putModal(
						href + "/put",
						src,
						(data, status) => {
							window.alert(merp.main.views.Text.OK);
							modal.close();
							sender.click();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);

					return false;
				}

				function onNewClick(e, dt, node, config) {
					merp.main.services.Router.newEditor(
						href + "/new",
						null,
						(data, status, sender) => {
							if (modal == null) {
								modal = new merp.main.views.Modal(
									id + "_editor",
									"", // merp.main.views.Text.getTitle(id, merp.main.views.Text.TITLE_NEW),
									root.parentElement
								);
							}

							modal.load(data, onPutClick);
							modal.open();
							modal.setTitle(merp.main.views.Text.RECORD_NEW);

							form = document.getElementById("fEditor");
							form.onsubmit = put;
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
				}

				function onGetClick(e, dt, node, config) {
					var data = dt.rows({ selected: true }).data();
					if (data.length < 1) {
						window.alert(merp.main.views.Text.NULL_POINTER_EXCEPTION);
						return;
					}
					if (data.length > 1) {
						window.alert(merp.main.views.Text.TOO_MANY_ARGUMENTS);
						return;
					}

					merp.main.services.Router.newEditor(
						href + "/get",
						{ _id: data[0][0] },
						(data, status, sender) => {
							if (modal == null) {
								modal = new merp.main.views.Modal(
									id + "_editor",
									"",
									root.parentElement
								);
							}

							modal.load(data, onPutClick);
							modal.open();
							modal.setTitle(merp.main.views.Text.RECORD_EDIT);

							form = document.getElementById("fEditor");
							form.onsubmit = put;
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
				}

				function onRemClick(e, dt, node, config) {
					var data = dt.rows({ selected: true }).data();
					if (data.length < 1) {
						window.alert(merp.main.views.Text.NULL_POINTER_EXCEPTION);
						return;
					}

					var ok = window.confirm(merp.main.views.Text.RECORD_CONFIRM_FOR_REMOVAL);
					if (!ok) {
						return;
					}

					var src = new Array();
					var i;
					for (i=0; i<data.length; i++) {
						src.push(data[i][0]);
					}

					merp.main.services.Router.newEditor(
						href + "/rem",
						{ _id: src },
						(data, status) => {
							window.alert(merp.main.views.Text.OK);
							sender.click();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
				}

				this.render = function () {
					var toolbar = [];

					if (rights.new == 1) {
						toolbar.push({
							text: merp.main.views.Text.RECORD_NEW,
							action: onNewClick
						});
					}

					if (rights.put == 1) {
						toolbar.push({
							text: merp.main.views.Text.RECORD_EDIT,
							action: onGetClick
						});
					}

					if (rights.rem == 1) {
						toolbar.push({
							text: merp.main.views.Text.RECORD_REMOVE,
							action: onRemClick
						});
					}

					datatable = new DataTable("#" + id, {
						dom: "Bfrtip",
						select: true,
						ajax: {
							url: href + "/list",
							headers: {
								"From": merp.main.views.Menu.getAuthoritativeInformation(),
								"Age": merp.main.views.Banner.getFullYear()
							}
							// columns: rowformat,
						},
						language: {
							url: merp.main.services.Router.DATAGRID_ESLANG_PATH,
						},
						buttons: toolbar
					});
				};

				(function () {
					datatable = null;
					modal = null;

					root = document.createElement("table");
					root.setAttribute("id", id);
					root.setAttribute("border", "0");
					root.setAttribute("cellpadding", "2");
					root.setAttribute("cellspacing", "2");
					root.setAttribute("align", "center");

					var header = document.createElement("thead");
					root.appendChild(header);

					var row = document.createElement("tr");
					header.appendChild(row);

					var cell;
					var i;
					for (i in headset) {
						cell = document.createElement("th");
						cell.innerHTML = headset[i];
						row.appendChild(cell);
					}
				})();
			
			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Dashboard: {

				_container: null,

				init: function () {
					merp.main.views.Dashboard._container = document.getElementById("merp");

					merp.main.services.Router.newDashboard(
						(data, status, sender) => {
							merp.main.views.Dashboard._container.innerHTML = data;
							merp.main.views.Menu.init();
							merp.main.views.Main.init();
							merp.main.views.Signin.init();
							merp.main.views.Signup.init();

							merp.main.views.Menu.onHomeClick();
						},
						() => {
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
				},

				onOpenSigninClick: function () {
					merp.main.views.Signin.open();
					return false;
				},

				onOpenSignupClick: function () {
					merp.main.views.Signin.close();
					merp.main.views.Signup.open();
					return false;
				},

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Catalogue: {

				root: null,

				init: function () {
					merp.main.views.Catalogue.root = document.getElementById("_catalogue");

					merp.main.services.Router.newCatalogue(
						(data, status, sender) => {
							if (data != "") {
								merp.main.views.Catalogue.root.firstElementChild.innerHTML = data;
							} else {
								merp.main.views.Catalogue.root.firstElementChild.innerHTML = merp.main.views.Text.EMPTY;
							}
						},
						(sender, status, error) => {
							console.log(error);
						}
					);
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Form: {

				root: null,
				fieldset: null,
				tFullName: null,
				tId: null,
				tAdvisor: null,
				tLegalId: null,
				tAddress: null,
				tLocation: null,
				tPhone1: null,
				tPhone2: null,
				tSigns: null,
				eMail: null,
				tDepartment: null,
				tSubject: null,
				bNotifyMe: null,
				bPickup: null,
				dDate: null,
				tApplicant: null,

				init: function () {
					merp.main.views.Form.root = document.getElementById("_form");

					merp.main.services.Router.newForm(
						(data, status, sender) => {
							merp.main.views.Form.root.firstElementChild.innerHTML = data;

							merp.main.views.Form.fieldset = document.getElementById("fFieldset");
							merp.main.views.Form.tFullName = document.getElementById("tFullName");
							merp.main.views.Form.tId = document.getElementById("tId");
							merp.main.views.Form.tAdvisor = document.getElementById("tAdvisor");
							merp.main.views.Form.tLegalId = document.getElementById("tLegalId");
							merp.main.views.Form.tAddress = document.getElementById("tAddress");
							merp.main.views.Form.tLocation = document.getElementById("tLocation");
							merp.main.views.Form.tPhone1 = document.getElementById("tPhone1");
							merp.main.views.Form.tPhone2 = document.getElementById("tPhone2");
							merp.main.views.Form.tSigns = document.getElementById("tSigns");
							merp.main.views.Form.eMail = document.getElementById("eMail");
							merp.main.views.Form.tDepartment = document.getElementById("tDepartment");
							merp.main.views.Form.tSubject = document.getElementById("tSubject");
							merp.main.views.Form.bNotifyMe = document.getElementById("bNotifyMe");
							merp.main.views.Form.bPickup = document.getElementById("bPickup");
							merp.main.views.Form.dDate = document.getElementById("dDate");
							merp.main.views.Form.tApplicant = document.getElementById("tApplicant");
						},
						(sender, status, error) => {
							console.log(error);
						}
					);
				},

				onSubmitClick: function () {
					var request = {
						_fullname: merp.main.views.Form.tFullName.value,
						_nid: merp.main.views.Form.tId.value,
						_advisor: merp.main.views.Form.tAdvisor.value,
						_legalid: merp.main.views.Form.tLegalId.value,
						_address: merp.main.views.Form.tAddress.value,
						_location: merp.main.views.Form.tLocation.value,
						_phone1: merp.main.views.Form.tPhone1.value,
						_phone2: merp.main.views.Form.tPhone2.value,
						_signs: merp.main.views.Form.tSigns.value,
						_email: merp.main.views.Form.eMail.value,
						_department: merp.main.views.Form.tDepartment.value,
						_subject: merp.main.views.Form.tSubject.value,
						_notifyme: (merp.main.views.Form.bNotifyMe.checked? 1: 0),
						_pickup: (merp.main.views.Form.bPickup.checked? 1: 0),
						_applicant: merp.main.views.Form.tApplicant.value
					};

					merp.main.services.Router.putMail(
						request,
						(data, status, sender) => {
							window.alert(merp.main.views.Text.OK);
							merp.main.views.Form.fieldset.reset();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
			
					return false;
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Menu: {

				root: null,

				init: function () {
					merp.main.views.Menu.root = document.getElementById("menu");
				},

				getAuthoritativeInformation: function () {
					if (merp.main.views.Menu.root == null) {
						return "";
					}

					if (merp.main.views.Menu.root.firstChild == null) {
						return "";
					}

					var uid = merp.main.views.Menu.root.firstChild.getAttribute("data-uid");
					var tok = merp.main.views.Menu.root.firstChild.getAttribute("data-tok");
					return uid + ":" + tok;
				},

				onHomeClick: function () {
					merp.main.services.Router.newHome(
						(data, status, sender) => {
							merp.main.views.Main.root.innerHTML = data;
							merp.main.views.Catalogue.init();
							merp.main.views.Form.init();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);

					return false;
				},

				onItemClick: function (sender, e) {
					var href = sender.getAttribute("href");
					var title = document.createElement("h1");
					title.innerHTML = sender.innerHTML;

					merp.main.services.Router.newMaint(
						href,
						(data, status) => {
							var grid = new merp.main.views.Datagrid(
								data.id,
								merp.main.services.Router.PUBLIC_PATH + "/" + data.src,
								data.fieldset,
								data.rowformat,
								data.headset,
								data.rights,
								sender
							);
							merp.main.views.Main.root.innerHTML = "";
							merp.main.views.Main.root.appendChild(title);
							merp.main.views.Main.root.appendChild(grid.getRoot());
							grid.render();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);

					return false;
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Banner: {

				sYear: null,

				init: function () {
					var root = document.getElementById("banner");

					merp.main.views.Banner.sYear = document.createElement("select");
					merp.main.views.Banner.sYear.setAttribute("id", "sYear");
					merp.main.views.Banner.sYear.setAttribute("name", "sYear");

					var now = new Date();
					var from = 2017;
					var to = now.getFullYear() + 10;
					var i;
					var option;
					for (i=from; i<to; i++) {
						option = document.createElement("option");
						option.setAttribute("value", i.toString())
						option.innerText = i.toString();
						if (i == now.getFullYear()) {
							option.setAttribute("selected", "selected")
						}
						
						merp.main.views.Banner.sYear.appendChild(option);
					}
					/*
					var label = document.createElement("label");
					label.setAttribute("for", "sYear");
					label.innerHTML = merp.main.views.Text.CURRENT_YEAR;
					root.appendChild(label);
					*/
					merp.main.views.Banner.sYear.addEventListener("change", merp.main.views.Banner.onYearChange, false);
					root.appendChild(merp.main.views.Banner.sYear);
				},

				onYearChange: function () {
					merp.main.views.Menu.onHomeClick();
				},

				getFullYear: function () {
					if (merp.main.views.Banner.sYear == null) {
						var now = new Date();
						return now.getFullYear().toString();
					} else {
						return merp.main.views.Banner.sYear.value;
					}
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Main: {

				root: null,

				init: function () {
					merp.main.views.Main.root = document.getElementById("main");
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Signin: {

				visible: false,

				menu: null,
				root: null,
				fSignin: null,
				tEmail: null,
				tPassword: null,

				init: function () {
					merp.main.views.Signin.menu = document.getElementById("footer");
					merp.main.views.Signin.root = document.getElementById("signin");
					merp.main.views.Signin.fSignin = document.createElement("div");
					merp.main.views.Signin.fSignin.classList.add("col-sm-12");
					merp.main.views.Signin.fSignin.classList.add("d-flex");
					merp.main.views.Signin.fSignin.classList.add("justify-content-end");

					merp.main.services.Router.newSignin(
						(data, status, sender) => {
							merp.main.views.Signin.fSignin.innerHTML = data;
							/*
							if (e == "401") {
								window.alert(merp.main.views.Text.UNAUTHORIZED);
							}
							*/
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
				},

				open: function () {
					if (merp.main.views.Signin.visible) {
						return;
					}

					merp.main.views.Signin.visible = true;
					merp.main.views.Signin.root.appendChild(merp.main.views.Signin.fSignin);

					merp.main.views.Signin.tEmail = document.getElementById("tEmail");
					merp.main.views.Signin.tPassword = document.getElementById("tPassword");
				},

				close: function () {
					if (!merp.main.views.Signin.visible) {
						return;
					}

					merp.main.views.Signin.visible = false;
					merp.main.views.Signin.root.removeChild(merp.main.views.Signin.fSignin);
				},

				onForgetClick: function () {
					var user = {
						_email: null
					};

					while (true) {
						user._email = window.prompt(merp.main.views.Text.REMINDER_ASK);
						if (user._email == "") {
							window.alert(merp.main.views.Text.REMINDER_ASK);
						} else {
							break;
						}
					}
					
					if (user._email == null) {
						return false;
					}

					merp.main.services.Router.putReminder(
						user,
						(data, status, sender) => {
							window.alert(merp.main.views.Text.REMINDER_OK);
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
			
					return false;
				},

				onSubmitClick: function () {
					var user = {
						_email: merp.main.views.Signin.tEmail.value,
						_password: merp.main.views.Signin.tPassword.value
					};

					merp.main.services.Router.putSignin(
						user,
						(data, status, sender) => {
							// window.alert(merp.main.views.Text.OK);
							merp.main.views.Signin.menu.style.display = "none";
							merp.main.views.Signin.root.style.display = "none";
							merp.main.views.Menu.root.innerHTML = data;

							merp.main.views.Banner.init();
							merp.main.views.Form.init();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.UNAUTHORIZED);
						}
					);
			
					return false;
				}

			},
			/* ------------------------------------------------------------------------------------------------------------------------------ */
			Signup: {

				TITLE: "\xa1Digita los datos para crear tu cuenta!",

				root: null,
				fSignup: null,
				t1stName: null,
				t2ndName: null,
				t3rdName: null,
				t4thName: null,
				tEmail: null,
				tPassword: null,
				tPasswordHelp: null,
				tPasswordVerifier: null,
				tPasswordVerifierHelp: null,
				tPhone: null,
				sProfile: null,

				_passwordGroup: null,
				_passwordVerifierGroup: null,

				init: function () {
					merp.main.services.Router.newSignup(
						(data, status, sender) => {
							if (merp.main.views.Signup.root == null) {
								merp.main.views.Signup.root = new merp.main.views.Modal(
									"_signup",
									merp.main.views.Signup.TITLE,
									document.body
								);
							}

							merp.main.views.Signup.root.load(data, merp.main.views.Signup.submit);
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
				},

				open: function () {
					merp.main.views.Signup.root.open();

					merp.main.views.Signup.fSignup = document.getElementById("fSignup");
					merp.main.views.Signup.t1stName = document.getElementById("t1stName");
					merp.main.views.Signup.t2ndName = document.getElementById("t2ndName");
					merp.main.views.Signup.t3rdName = document.getElementById("t3rdName");
					merp.main.views.Signup.t4thName = document.getElementById("t4thName");
					merp.main.views.Signup.tEmail = document.getElementById("tEmail");
					merp.main.views.Signup.tPassword = document.getElementById("tPassword");
					merp.main.views.Signup.tPasswordHelp = document.getElementById("tPasswordHelp");
					merp.main.views.Signup.tPasswordVerifier = document.getElementById("tPasswordVerifier");
					merp.main.views.Signup.tPasswordVerifierHelp = document.getElementById("tPasswordVerifierHelp");
					merp.main.views.Signup.tPhone = document.getElementById("tPhone");
					merp.main.views.Signup.sProfile = document.getElementById("sProfile");

					merp.main.views.Signup._passwordGroup = document.getElementById("_passwordGroup");
					merp.main.views.Signup._passwordVerifierGroup = document.getElementById("_passwordVerifierGroup");
				},

				close: function () {
					merp.main.views.Signup.root.close();
				},

				submit: function () {
					merp.main.views.Signup.fSignup.requestSubmit();
				},

				onSubmitClick: function () {
					if (merp.main.views.Signup.tPassword.value != merp.main.views.Signup.tPasswordVerifier.value) {
						merp.main.views.Signup.tPasswordHelp.classList.remove("text-muted");
						merp.main.views.Signup.tPasswordHelp.classList.add("text-danger");
						merp.main.views.Signup.tPasswordVerifierHelp.classList.remove("text-muted");
						merp.main.views.Signup.tPasswordVerifierHelp.classList.add("text-danger");
						return false;
					}

					var user = {
						_1stname: merp.main.views.Signup.t1stName.value,
						_2ndname: merp.main.views.Signup.t2ndName.value,
						_3rdname: merp.main.views.Signup.t3rdName.value,
						_4thname: merp.main.views.Signup.t4thName.value,
						_email: merp.main.views.Signup.tEmail.value,
						_password: merp.main.views.Signup.tPassword.value,
						_phone: merp.main.views.Signup.tPhone.value,
						_profile: merp.main.views.Signup.sProfile.value
					};

					merp.main.services.Router.putSignup(
						user,
						() => {
							window.alert(merp.main.views.Text.OK);
							merp.main.views.Signup.close();
						},
						(sender, status, error) => {
							console.log(error);
							window.alert(merp.main.views.Text.BAD_REQUEST);
						}
					);
			
					return false;
				},

				back: function () {
					window.location.href = "../";
				}

			}
			/* ------------------------------------------------------------------------------------------------------------------------------ */
		}
		/* ================================================================================================================================ */
	}

};