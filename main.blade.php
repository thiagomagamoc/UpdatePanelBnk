@extends('assets.backend.default')

{{--*/ $ci =& get_instance(); /*--}}

@push('extrajs')
<!-- Sweet alert -->
<script src="{{site_url('assets/backend/js/plugins/sweetalert/sweetalert.min.js')}}"></script>
<!-- Ladda -->
<script src="{{site_url('assets/backend/js/plugins/ladda/spin.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ladda/ladda.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ladda/ladda.jquery.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/ionRangeSlider/ion.rangeSlider.min.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/switchery/switchery.js')}}"></script>
<script src="{{site_url('assets/backend/js/plugins/select2/select2.full.min.js')}}"></script>
<script src="{{site_url('assets/js/bootstrap-switch.min.js')}}"></script>
<script>
    $(document).ready(function () {

        $('input[name="linkVisit"]').on('switchChange.bootstrapSwitch', function (event, state) {
            var bodys = $(this).attr('data-body');

            $('.visitlink').slideUp();
            $('.' + bodys).slideDown();
        });

        var $range = $(".rerang");

        $range.ionRangeSlider({
            grid: true,
        });

        var elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));

        elems.forEach(function (html) {
            var switchery = new Switchery(html);
        });

        $('.select2').select2();

        $('select#selectapi').on('change', function () {

            var vals = $(this).val();

            if (vals == 'none') {
                $('.smtps').slideUp(200);
            } else {
                $('.smtps').slideUp(100);
                $('.' + vals).slideDown(200);
            }
        });

        $('select#selectsms').on('change', function () {

            var vals = $(this).val();

            if (vals == 'none') {
                $('.smss').slideUp(200);
            } else {
                $('.smss').slideUp(100);
                $('.' + vals).slideDown(200);
            }
        });

        $("[data-check='radio']").bootstrapSwitch();
        $("[data-check='check']").bootstrapSwitch();


    });
</script>
@endpush

@push('extracss')
<link href="{{site_url('assets/backend/css/plugins/select2/select2.min.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/sweetalert/sweetalert.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/ladda/ladda-themeless.min.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/ionRangeSlider/ion.rangeSlider.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css')}}" rel="stylesheet">
<link href="{{site_url('assets/backend/css/plugins/switchery/switchery.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{site_url('assets/layout/bootstrap-switch.min.css')}}">
<style>
    .smtps, .smss {
        display: none;
    }

    .clearfix {
        display: inline-block;
    }

    .visitlink {
        display: none;
    }
</style>
@endpush

@section('content')

    <div class="row">
        <div class="col-md-9 col-xs-12">

            <?php if ( $ci->session->flashdata( 'success' ) ) { ?>
            <div class="alert alert-success">
                <i class="fa fa-check fa-1x"></i> <?php echo $ci->session->flashdata( 'success' ); ?>
            </div>
            <?php } ?>
            <?php echo validation_errors( '<div class="alert alert-danger alert-dismissable"><button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button><h4><i class="icon fa fa-ban"></i> ' . $ci->lang->line( 'Alert_message' ) . '!</h4>', '</div>' );?>

        </div>


        {!! form_open('') !!}



        <div class="col-md-3 col-xs-12">
            <div class="text-right" style="margin-bottom: 20px">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{ $ci->lang->line('Save') }}</button>
            </div>
            <!-- /.text-right -->
        </div>
        <!-- /.col-xs-12 -->

        <input type="hidden" class="form-control" id="Name" name="Name" value="{{ $ci->global_data['Oname'] }}">


        <div class="col-xs-12">
            <div class="tabs-container">
                <div class="tabs-left">
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#tab-1" aria-expanded="true"><i
                                        class="fa fa-cog fa-2x"></i> <span class="hidden-xs">{{ $ci->lang->line('General') }}<br><small></small></span></a>
                        </li>
                        <!--
						<li class=""><a data-toggle="tab" href="#tab-2" aria-expanded="false"><i
                                        class="fa fa-envelope fa-2x"></i> <span
                                        class="hidden-xs">Email Sender<br><small>- Configurações da API para Envio de Emails </small></span></a>
                        </li>


						<li class=""><a data-toggle="tab" href="#tab-3" aria-expanded="false"><i
                                        class="fa fa-comment fa-2x"></i> <span class="hidden-xs">Sms Enviador<br><small>- Configurações do enviador de SMS.</small></span></a>
                        </li>
                        -->
						<li class=""><a data-toggle="tab" href="#tab-4" aria-expanded="false"><i
                                        class="fa fa-bell fa-2x"></i> <span class="hidden-xs">{{ $ci->lang->line('Notification') }}<br><small></small></span></a>
                        </li>
                        <!--
                        <li class=""><a data-toggle="tab" href="#tab-5" aria-expanded="false"><i
                                        class="fa fa-search fa-2x"></i> <span
                                        class="hidden-xs">Email/Telefone Verificador<br><small></small></span></a>
                        </li>
                      -->
                        <li class=""><a data-toggle="tab" href="#tab-6" aria-expanded="false"><i
                                        class="fa fa-compass fa-2x"></i> <span class="hidden-xs">{{ $ci->lang->line('Redirect') }}<br><small></small></span></a>
                        </li>
                        <li class=""><a data-toggle="tab" href="#tab-7" aria-expanded="false"><i
                                        class="fa fa-cogs fa-2x"></i> <span class="hidden-xs">{{ $ci->lang->line('Power_Off') }}<br><small></small></span></a>
                        </li>
                    </ul>
                    <div class="tab-content ">
                        <div id="tab-1" class="tab-pane active">
                            <div class="panel-body">

                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-key"></i> {{ $ci->lang->line('Key_Auth') }}</h2>
                                    <div class="col-md-12 col-xs-12">
                                          <label for="senderName">{{ $ci->lang->line('Key') }}</label>
                                          <input type="text" class="form-control" id="KeyAuth" name="KeyAuth"
                                                 value="<?php echo $get->KeyAuth;?>" placeholder="Ex: xxxxx">
                                          <span id="helpBlock" class="help-block">{{ $ci->lang->line('Key_Admin') }} (http://yourdomain.com/admin/login?KeyAuth=xxxxx).</span>

                                          <div class="clearfix"></div>
                                          <div class="hr-line-dashed"></div>

                                      </div>



                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-clock-o"></i> {{ $ci->lang->line('Links_Expired') }}</h2>
                                <div class="col-md-12 col-xs-12" style="padding: 10px 0px">
                                    <div class="form-group">
                                        <label for="isTrack">{{ $ci->lang->line('Enable_Tracking_System') }}</label>
                                        <div class="col-xs-12">
                                            <input type="checkbox"
                                                   class="js-switch"
                                                   name="isTrack"
                                                   id="isTrack"
                                                   value="1"
                                            <?php if ( $get->isTrack != 0 ) {
                                                echo 'checked';
                                            } ?>
                                            >
                                            <span id="helpBlock" class="help-block">{{ $ci->lang->line('If_Disable1') }}

                                            </span>
                                        </div>
                                        <!-- /.col-xs-12 -->
                                    </div>
                                    <!-- /.form-group -->
                                </div>
                                <!-- /.col-xs-12 -->

                                <div class="clearfix"></div>
                                <!-- /.clearfix -->
                                <div class="hr-line-dashed"></div>

                                <div class="col-md-6 col-xs-12">
                                    <label for="expireTime">{{ $ci->lang->line('Tracking_Code_Size') }}</label>
                                    <input type="text" class="rerang" data-min="3" data-max="15" id="tracklenght"
                                           name="tracklenght" value="{{set_value('tracklenght', $get->tracklenght)}}"
                                           data-keyboard="true" data-force-edges="true" data-keyboard-step="1"
                                           data-step="1" data-grid="true" data-grid-num="2" data-postfix=" Caracteres">
                                    <span id="helpBlock" class="help-block">{{ $ci->lang->line('Set_Code1') }}</span>
                                </div>

                                <div class="col-md-6 col-xs-12" style="padding: 0px 0px">
                                    <label for="expireTime">{{ $ci->lang->line('Link_Expiration_Time') }}</label>
                                    <input type="text" class="rerang" data-min="1" data-max="8640" id="expireTime"
                                           name="expireTime" value="{{set_value('expireTime', $get->expireTime)}}"
                                           data-keyboard="true" data-force-edges="true" data-keyboard-step="1"
                                           data-step="1" data-grid="true" data-grid-num="10.1" data-postfix=" Horas">
                                    <span id="helpBlock" class="help-block">{{ $ci->lang->line('Set_Amount1') }}</span>
                                </div>
                                <!-- /.col-xs-12 -->


                                <div class="clearfix" style="display: inline-block"></div>
                                <div class="hr-line-dashed"></div>

                                <div class="col-xs-12">

                                    <div class="from-group">
                                        <label for="">{{ $ci->lang->line('When_Link_Is_Visited') }}</label>

                                        <div class="text-center">
                                            <input type="radio" class="js-switch" name="linkVisit"
                                                   value="0"
                                                   data-size="normal" data-handle-width="85" data-on-color="success"
                                                   data-off-color="danger" data-on-text="{{ $ci->lang->line('On') }}" data-off-text="{{ $ci->lang->line('Off') }}"
                                                   data-label-text="{{ $ci->lang->line('Expire') }}"
                                                   data-check="radio"
                                                   data-body="expireBody" <?php echo set_radio( 'linkVisit', '0', ( $get->linkVisit == 0 ) ? true : false ); ?>>

                                            <input type="radio" class="js-switch" name="linkVisit" value="1"
                                                   data-size="normal" data-handle-width="85" data-on-color="success"
                                                   data-off-color="danger" data-on-text="{{ $ci->lang->line('On') }}" data-off-text="{{ $ci->lang->line('Off') }}"
                                                   data-label-text="{{ $ci->lang->line('Disable') }}"
                                                   data-check="radio"
                                                   data-body="disableBody" <?php echo set_radio( 'linkVisit', '1', ( $get->linkVisit == 1 ) ? true : false ); ?>>

                                            <input type="radio" class="js-switch" name="linkVisit" value="2"
                                                   data-size="normal" data-handle-width="85" data-on-color="success"
                                                   data-off-color="danger" data-on-text="{{ $ci->lang->line('On') }}" data-off-text="{{ $ci->lang->line('Off') }}"
                                                   data-label-text="{{ $ci->lang->line('White_Page') }}"
                                                   data-check="radio"
                                                   data-body="blankBody" <?php echo set_radio( 'linkVisit', '2', ( $get->linkVisit == 2 ) ? true : false ); ?>>
                                        </div>
                                        <!-- /.text-center -->
                                        <span id="helpBlock" class="help-block">{{ $ci->lang->line('Select_What1') }}
                                            </br></br>
                                            <ul>
                                                    <li><strong>{{ $ci->lang->line('Expire') }}:</strong> {{ $ci->lang->line('Expl_Expire') }}</li>
                                                    <li><strong>{{ $ci->lang->line('Disable') }}:</strong> {{ $ci->lang->line('Expl_Disable') }}</li>
                                                    <li><strong>{{ $ci->lang->line('White_Page') }}:</strong> {{ $ci->lang->line('Expl_White') }}</li>
                                                </ul>
                                        </span>

                                        <div class="expireBody visitlink"
                                             @if($get->linkVisit == 0) style="display: block" @endif>
                                            <label for="">{{ $ci->lang->line('Redirect_link') }} ({{ $ci->lang->line('Expire') }})</label>
                                            <input type="text" class="form-control" name="expireLink"
                                                   id="expireLink" placeholder="{{ $ci->lang->line('Full_Link') }} Ex. http://google.com"
                                                   value="{{set_value('expireLink', $get->expireLink)}}">
                                            <span id="helpBlock" class="help-block">{{ $ci->lang->line('If_You1') }} <strong><a
                                                            href="{{site_url('index')}}"
                                                            target="_blank">{{site_url('index')}}</a></strong>.</span>

                                        </div>
                                        <!-- /.expireBody -->

                                        <div class="disableBody visitlink"
                                             @if($get->linkVisit == 1) style="display: block" @endif>
                                            <label for="disableCount">{{ $ci->lang->line('Hit_Counter') }} ({{ $ci->lang->line('Disable') }})</label>
                                            <input type="number" class="form-control" name="disableCount"
                                                   id="disableCount"
                                                   value="{{set_value('disableCount', $get->disableCount)}}">
                                            <span id="helpBlock" class="help-block">{{ $ci->lang->line('How_Many1') }}</span>

                                            <label for="">{{ $ci->lang->line('Redirect_link') }} ({{ $ci->lang->line('Disable') }})</label>
                                            <input type="text" class="form-control" name="disableLink"
                                                   id="disableLink" placeholder="Full Links Ex. http://google.com"
                                                   value="{{set_value('disableLink', $get->disableLink)}}">
                                            <span id="helpBlock" class="help-block">{{ $ci->lang->line('If_You1') }} <strong><a
                                                            href="{{site_url('index')}}"
                                                            target="_blank">{{site_url('index')}}</a></strong>.</span>

                                        </div>
                                        <!-- /.disableBody -->

                                        <div class="blankBody visitlink"
                                             @if($get->linkVisit == 2) style="display: block" @endif>
                                            <label for="">{{ $ci->lang->line('Hit_Counter') }} ({{ $ci->lang->line('White_Page') }})</label>
                                            <input type="number" class="form-control" name="blankCount"
                                                   id="blankCount"
                                                   value="{{set_value('blankCount', $get->blankCount)}}">
                                            <span id="helpBlock" class="help-block"><!--If you leave it empty it will redirect to <strong><a
                                                            href="{{site_url('index')}}"
                                                            target="_blank">{{site_url('index')}}</a>-->{{ $ci->lang->line('How_Many1') }}
</strong>.</span>

                                        </div>
                                        <!-- /.blankBody -->

                                    </div>
                                    <!-- /.from-group -->

                                </div>
                                <!-- /.col-xs-12 -->

                                <div class="clearfix"></div>
                                <!-- /.clearfix -->
                                <div class="hr-line-dashed"></div>

                                <!-- /.clearfix -->
                                <!-- /.hr-line-dashed -->
                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0px 0 10px 0; display: block;">
                                    <i class="fa fa-language"></i> {{ $ci->lang->line('Timezone') }}</h2>

                                <div class="col-md-6 col-xs-12" style="padding: 10px 0px;">
                                    <div class="form-group">
                                        <label for="langs">{{ $ci->lang->line('Select_Language') }}</label>
                                        <div class="col-xs-12">
                                            <select name="langs" id="langs" class="select2 form-control">
                                                <?php
                                                $handle = opendir( APPPATH . '/language/' );
                                                while ( false !== ( $entry = readdir( $handle ) ) ) {
                                                    if ( $entry != "." && $entry != ".." && strlen( $entry ) <= 2 ) {
                                                        echo '<option value="' . $entry . '"';
                                                        if ( $get->Olang == $entry ) {
                                                            echo 'selected';
                                                        }
                                                        echo '>' . strtoupper( $entry ) . '</option>';
                                                    }
                                                }
                                                closedir( $handle );
                                                ?>
                                            </select>
                                            <span id="helpBlock"
                                                  class="help-block">EN = English, DE = dutch, etc.</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12" style="padding: 10px 0px">
                                    <div class="form-group">
                                        <label for="timeZone">{{ $ci->lang->line('Select_Timezone') }}</label>
                                        <div class="col-xs-12">
                                            <?php timezones( $get->timeZone ); ?>
                                            <span id="helpBlock" class="help-block" style="display: none;">EN = English, DE = dutch, etc.</span>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div id="tab-2" class="tab-pane">
                            <div class="panel-body">


								<h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-send"></i> Email Sender</h2>

                                <div class="form-group" style="display: none;">
                                    <div class="col-md-6 col-xs-12">
                                        <label for="sender"><?php echo $ci->lang->line( 'Emailaddress_message' ); ?>
                                            (<?php echo $ci->lang->line( 'Sender_message' ); ?>)</label>
                                        <input type="email" class="form-control" id="sender" name="sender"
                                               value="<?php echo $get->Osender;?>">
                                        <span id="helpBlock"
                                              class="help-block"><?php echo $ci->lang->line( 'Insertemailsender_message' ); ?></span>

                                    </div>

                                    <div class="col-md-6 col-xs-12">
                                        <label for="senderName">Sender Name</label>
                                        <input type="text" class="form-control" id="senderName" name="senderName"
                                               value="<?php echo $get->senderName;?>">
                                        <span id="helpBlock" class="help-block">For exp. iCloud, FindMyiPhone, AppleCenter</span>
                                        <div class="clearfix"></div>

                                    </div>


                                </div>

                                <div style="display: none;">
                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 30px 0 10px 0; padding: 0 0 10px 0; display: block;">
                                    <i class="fa fa-magic"></i> Delivery system
                                    <small>Select one of them to send your emails with...</small>
                                </h2>

                                <div class="col-xs-12">
                                    <div class="alert alert-info">If you have issue with sending emails please switch to
                                        another method delivery, From method #1 to method #2.
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12 text-center">
                                    <div class="form-group">
                                        <label for="redirect">Delivery Method #1</label>
                                        <br/>
                                        <input type="radio" class="js-switch" name="smtpServ" value="0"
                                               data-size="normal" data-handle-width="85" data-on-color="success"
                                               data-off-color="danger" data-on-text="On" data-off-text="Off"
                                               data-label-text="Method #1"
                                               data-check="radio" <?php echo set_radio( 'smtpServ', '0', ( $get->smtpServ == 0 ) ? true : false ); ?>>

                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12 text-center">
                                    <div class="form-group">
                                        <label for="redirect">Delivery Method #2</label>
                                        <br/>
                                        <input type="radio" class="js-switch" name="smtpServ" value="1"
                                               data-size="normal" data-handle-width="85" data-on-color="success"
                                               data-off-color="danger" data-on-text="On" data-off-text="Off"
                                               data-label-text="Method #2"
                                               data-check="radio" <?php echo set_radio( 'smtpServ', '1', ( $get->smtpServ == 1 ) ? true : false ); ?>>

                                    </div>
                                </div>
								</div>

                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0; display: block;">
                                    <i class="fa fa-cogs"></i> API Email
                                    <!--<small>Choose what u want to setup</small>-->
                                </h2>
                                <div class="form-group text-center">
                                    <label for="selectapi">Selecionar API: </label>
                                    <select name="selectapi" id="selectapi" class="select2" style="width: 250px">
                                        <option value="none" selected>Selecionar...</option>
                                        <!--<option value="smtp2go">Smtp2Go</option>
                                        <option value="sendpulse">SendPulse</option>
                                        <option value="etastice">Elastice</option>
                                        <option value="smtpprovider">SMTPPROVIDER</option>
                                        <option value="sendgrid">SendGrid</option>
                                        <option value="postmark">PostMark</option>-->
                                        <option value="sendunlockmail">SendUnlock Mail</option>
                                    </select>
                                    <!-- /# -->
                                </div>
                                <!-- /.form-group -->



								<div class="sendunlockmail smtps">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> SendUnlockMail API</h2>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="sendMailUser">Usuário</label>
                                            <input type="text" class="form-control" id="sendMailUser"
                                                   name="sendMailUser" value="<?php echo $get->sendMailUser;?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="sendMailPass">Senha</label>
                                            <input type="text" class="form-control" id="sendMailPass" name="sendMailPass"
                                                   value="<?php echo $get->sendMailPass;?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="sendgrid smtps">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> SendGrid API</h2>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="sendgridapi">Api Key</label>
                                            <input type="text" class="form-control" id="sendgridapi" name="sendgridapi"
                                                   value="<?php echo $get->sendgridapi;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.sendgrid smtps -->

                                <div class="postmark smtps">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> PostMark API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="postmarktoken">Api Token Key</label>
                                            <input type="text" class="form-control" id="postmarktoken" name="postmarktoken"
                                                   value="<?php echo $get->postmarktoken;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="postmarksender">Api Sender Signatures</label>
                                            <input type="text" class="form-control" id="postmarksender" name="postmarksender"
                                                   value="<?php echo $get->postmarksender;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.postmark smtps -->
                                <div class="smtp2go smtps">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> SMTP2GO API</h2>
                                    <!-- /.col-xs-12 -->
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="smtp2go">Api Key</label>
                                            <input type="text" class="form-control" id="smtp2go" name="smtp2go"
                                                   value="<?php echo $get->smtp2go;?>"
                                                   placeholder="api-66900xxxxxxxxxxxxxxxxxxxxxxx">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.smtp2go smtps -->

                                <div class="sendpulse smtps">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> SendPulse API</h2>

                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="sendPluseEmail">API Email</label>
                                            <input type="text" class="form-control" id="sendPluseEmail"
                                                   name="sendPluseEmail" value="<?php echo $get->sendPluseEmail;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="sendPulse">API Key</label>
                                            <textarea name="sendPulse" id="sendPulse" class="form-control"
                                                      rows="5"><?php echo $get->sendPulse; ?></textarea>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.sendpulse smtps -->

                                <div class="etastice smtps">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> Elastice API</h2>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="elasticeEmail">API Email</label>
                                            <input type="text" class="form-control" id="elasticeEmail"
                                                   name="elasticeEmail" value="<?php echo $get->elasticeEmail;?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="elastice">API Key</label>
                                            <input type="text" class="form-control" id="elastice" name="elastice"
                                                   value="<?php echo $get->elastice;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.etastice smtps -->

                                <div class="smtpprovider smtps">

                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> SMTPProvider API</h2>

                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="providerEmail">Email Api username</label>
                                            <input type="text" class="form-control" id="providerEmail"
                                                   name="providerEmail" value="<?php echo $get->providerEmail;?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="providerPwd">Email Api Password</label>
                                            <input type="password" class="form-control" id="providerPwd"
                                                   name="providerPwd" value="<?php echo $get->providerPwd;?>">
                                        </div>
                                    </div>
                                    <div class="col-xs-12">
                                        <div class="form-group">
                                            <label for="providerPort">Email Api Port</label>
                                            <input type="number" class="form-control" id="providerPort"
                                                   name="providerPort" value="<?php echo $get->providerPort;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.smtpprovider smtps -->

                            </div>
                        </div>
                        <div id="tab-3" class="tab-pane">
                            <div class="panel-body">
                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-comment"></i> SMS Enviador</h2>


								<div class="form-group">
                                    <div class="col-md-12 col-xs-12">
                                        <label for="senderName">Sender ID</label>
                                        <input type="text" class="form-control" id="senderID" name="senderID"
                                               value="<?php echo $get->senderID;?>">
                                        <span id="helpBlock" class="help-block">For exp. iCloud, FindMyiPhone, AppleCenter</span>
                                        <div class="clearfix"></div>

                                    </div>


                                </div>


                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0; display: block;">
                                    <i class="fa fa-cogs"></i> SMS API
                                    <small>Escolha o que você deseja Configurar</small>
                                </h2>
                                <div class="form-group text-center">
                                    <label for="selectsms">Selecionar API: </label>
                                    <select name="selectsms" id="selectsms" class="select2" style="width: 250px">
                                        <option value="none" selected>Selecionar...</option>
										<!--

										<option value="plivo">Plivo</option>
                                        <option value="nimbow">Nimbow</option>
                                        <option value="vianett">ViaNett</option>
                                        <option value="bulksms">BulkSMS</option>
                                        <option value="budget">BudgetSMS</option>
                                        <option value="cmsms">CMSMS</option>
                                        <option value="wavecell">WaveCell</option>
                                        <option value="nexmo">Nexmo</option>
                                        <option value="sinch">Sinch</option>
                                        <option value="beepsend">BeepSend</option>
                                        <option value="alienics">Alienics</option>
										-->
                                        <option value="sendunlock">SendUnlock</option>
                                    </select>
                                    <!-- /# -->
                                </div>
                                <!-- /.form-group -->


								<div class="sendunlock smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> SendUnlock API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="sendSMSUser">SendUnlock Usuário</label>
                                            <input type="text" class="form-control" id="sendSMSUser" name="sendSMSUser"
                                                   value="<?php echo $get->sendSMSUser;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="sendSMSPass">SendUnlock Senha</label>
                                            <input type="text" class="form-control" id="sendSMSPass" name="sendSMSPass"
                                                   value="<?php echo $get->sendSMSPass;?>">
                                        </div>
                                    </div>
                                </div>


                                <div class="alienics smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> AlienicsSend API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="alienicsuser">Alienics UserName</label>
                                            <input type="text" class="form-control" id="alienicsuser" name="alienicsuser"
                                                   value="<?php echo $get->alienicsuser;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="alienicspwd">Alienics PassWord</label>
                                            <input type="text" class="form-control" id="alienicspwd" name="alienicspwd"
                                                   value="<?php echo $get->alienicspwd;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.alienics smss -->
                                <div class="beepsend smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> BeepSend API</h2>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="beepsendtoken">API Token</label>
                                            <input type="text" class="form-control" id="beepsendtoken" name="beepsendtoken"
                                                   value="<?php echo $get->beepsendtoken;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.beepsend smss -->
                                <div class="sinch smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> Sinch API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="sinchkey">API Key</label>
                                            <input type="text" class="form-control" id="sinchkey" name="sinchkey"
                                                   value="<?php echo $get->sinchkey;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="sinchsecret">API Secret</label>
                                            <input type="text" class="form-control" id="sinchsecret" name="sinchsecret"
                                                   value="<?php echo $get->sinchsecret;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.sinch smss -->
                                <div class="wavecell smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> WaveCell API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="waveid">API Account ID</label>
                                            <input type="text" class="form-control" id="waveid" name="waveid"
                                                   value="<?php echo $get->waveid;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="wavesub">API Sub Account ID</label>
                                            <input type="text" class="form-control" id="wavesub" name="wavesub"
                                                   value="<?php echo $get->wavesub;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="wavepwd">API Password</label>
                                            <input type="text" class="form-control" id="wavepwd" name="wavepwd"
                                                   value="<?php echo $get->wavepwd;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.wavecell smss -->

                                <div class="nexmo smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> Nexmo API</h2>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="nexmokey">API Key</label>
                                            <input type="text" class="form-control" id="nexmokey" name="nexmokey"
                                                   value="<?php echo $get->nexmokey;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="nexmosecert">API Secert</label>
                                            <input type="text" class="form-control" id="nexmosecert" name="nexmosecert"
                                                   value="<?php echo $get->nexmosecert;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.nexmo smss -->

                                <div class="plivo smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> Plivo API</h2>

                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="plivoAuthID">Auth ID</label>
                                            <input type="text" class="form-control" id="plivoAuthID" name="plivoAuthID"
                                                   value="<?php echo $get->plivoAuthID;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="plivoAuthToken">Auth Token</label>
                                            <input type="text" class="form-control" id="plivoAuthToken"
                                                   name="plivoAuthToken"
                                                   value="<?php echo $get->plivoAuthToken;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.plivo smss -->
                                <div class="nimbow smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> NimBow API</h2>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="nimbowAPI">API Key</label>
                                            <input type="text" class="form-control" id="nimbowAPI" name="nimbowAPI"
                                                   value="<?php echo $get->nimbowAPI;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.nimbow smss -->
                                <div class="vianett smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> ViaNett API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="viaUser">ViaNett Username</label>
                                            <input type="text" class="form-control" id="viaUser" name="viaUser"
                                                   value="<?php echo $get->viaUser;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="viaPass">ViaNett Password</label>
                                            <input type="text" class="form-control" id="viaPass" name="viaPass"
                                                   value="<?php echo $get->viaPass;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.vianett smss -->
                                <div class="bulksms smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> BulkSMS API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="bulkUser">BulkSMS Username</label>
                                            <input type="text" class="form-control" id="bulkUser" name="bulkUser"
                                                   value="<?php echo $get->bulkUser;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="bulkPass">BulkSMS Password</label>
                                            <input type="text" class="form-control" id="bulkPass" name="bulkPass"
                                                   value="<?php echo $get->bulkPass;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.bulksms smss -->
                                <div class="budget smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> BudgetSMS API</h2>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="budgetUser">BudgetSMS Username</label>
                                            <input type="text" class="form-control" id="budgetUser" name="budgetUser"
                                                   value="<?php echo $get->budgetUser;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-xs-12">
                                        <div class="form-group">
                                            <label for="budgetID">BudgetSMS UserID</label>
                                            <input type="text" class="form-control" id="budgetID" name="budgetID"
                                                   value="<?php echo $get->budgetID;?>">
                                        </div>
                                    </div>
                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="budgetHandle">BudgetSMS Handle</label>
                                            <input type="text" class="form-control" id="budgetHandle"
                                                   name="budgetHandle"
                                                   value="<?php echo $get->budgetHandle;?>">
                                        </div>
                                    </div>
                                </div>
                                <!-- /.budget smss -->
                                <div class="cmsms smss">
                                    <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 20px 0 10px 0; padding: 0 0 10px 0;">
                                        <i class="fa fa-envelope-o"></i> CMSMS API</h2>

                                    <div class="col-md-12 col-xs-12">
                                        <div class="form-group">
                                            <label for="cmSMSapi">Product Token</label>
                                            <input type="text" class="form-control" id="cmSMSapi" name="cmSMSapi"
                                                   value="<?php echo $get->cmSMSapi;?>">
                                        </div>
                                    </div>

                                </div>
                                <!-- /.cmsms smss -->

                                {{--End panel-body--}}
                            </div>
                        </div>


						<div id="tab-4" class="tab-pane">

							<div class="panel-body">


								<h2 style="display: block; border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0px 0 10px 0;">
                                    <i class="fa fa-bell-o"></i> {{ $ci->lang->line('Telegram_Noti') }}</h2>
                  <div class="col-md-12 col-xs-12">
                                        <label for="senderName">{{ $ci->lang->line('ID_Bot_Telegram') }}</label>
                                        <input type="text" class="form-control" id="botTelegramKey" name="botTelegramKey"
                                               value="<?php echo $get->botTelegramKey;?>" placeholder="Ex: botXXXXXXXXX:XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX">
                                        <span id="helpBlock" class="help-block">{{ $ci->lang->line('Your_bot_API_key') }}</span>
                                        <div class="clearfix"></div>

                                    </div>

                  <div class="col-md-12 col-xs-12">
                                        <label for="senderName">{{ $ci->lang->line('ID_Telegram') }}</label>
                                        <input type="text" class="form-control" id="numeroSMSadmin" name="numeroSMSadmin"
                                               value="<?php echo $get->numeroSMSadmin;?>" placeholder="Ex: XXXXXXXX">
                                        <span id="helpBlock" class="help-block">{{ $ci->lang->line('Telegram_That1') }}</span>
                                        <div class="clearfix"></div>

                                    </div>
								<!--
								<h2 style="display: block; border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0px 0 10px 0;">
                                    <i class="fa fa-bell-o"></i> Configuração de Notificação de Email</h2>

                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="email">Endereço de Email</label>
                                        <input type="text" class="form-control" id="email" name="email"
                                               value="<?php echo $get->Oemail;?>">
                                        <span id="helpBlock" class="help-block">Insira o e-mail que receberá o alerta de notificação quando as vítimas fizerem o login. <span style="color: red;">RECOMENDO UTILIZAR HOTMAIL OU GMAIL (Obs: Faça um teste pare ter certeza que os emails estão chegando)</span></span>

                                        <span id="helpBlock" class="help-block" style="display: none;">Se você quiser inserir inserção de múltiplos e-mails, insira vírgula "," entre cada endereço de e-mail. Ex: admin@admin.com, admin2@admin.com </span>
                                    </div>
                                </div>


                                <div class="col-xs-12">
                                    <div class="alert alert-info">
                                        - Essas opções foram feitas para quem está tendo problemas com o php mail no servidor ou quem está tendo um problema com os IPs de hospedagem bloqueados.
                                        <br/>
                                        - Deixe essas opções vazias se desejar usar o sistema de notificação padrão do PHP Mail.
                                        <br/>
                                    </div>

                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="notiSMTP">SMTP Host</label>
                                        <input type="text" class="form-control" id="notiSMTP" name="notiSMTP"
                                               value="<?php echo $get->notiSMTP; ?>"
                                               placeholder="SMTP host ex. smtp.google.com or smtp.live.com">
                                        <span id="helpBlock" class="help-block">Deixe esta opção vazia se desejar usar o sistema de notificação padrão do PHP Mail.</span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="notiSMTPemail">SMTP Username</label>
                                        <input type="text" class="form-control" id="notiSMTPemail" name="notiSMTPemail"
                                               value="<?php echo $get->notiSMTPemail; ?>"
                                               placeholder="SMTP username it maybe an username or an email address">
                                        <span id="helpBlock" class="help-block">Deixe esta opção vazia se desejar usar o sistema de notificação padrão do PHP Mail.</span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="notiSMTPpwd">SMTP Password</label>
                                        <input type="text" class="form-control" id="notiSMTPpwd" name="notiSMTPpwd"
                                               value="<?php echo $get->notiSMTPpwd; ?>"
                                               placeholder="SMTP password for username and host">
                                        <span id="helpBlock" class="help-block">Deixe esta opção vazia se desejar usar o sistema de notificação padrão do PHP Mail.</span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="notiSMTPport">SMTP Port</label>
                                        <input type="number" class="form-control" id="notiSMTPport" name="notiSMTPport"
                                               value="<?php echo $get->notiSMTPport; ?>"
                                               placeholder="SMTP port ex. 534 or 433 or 2525">
                                        <span id="helpBlock" class="help-block">Deixe esta opção vazia se desejar usar o sistema de notificação padrão do PHP Mail.</span>
                                    </div>
                                </div>
								-->

                            </div>
                        </div>

                        <div id="tab-5" class="tab-pane">
                            <div class="panel-body">

                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-envelope"></i> Validação Endereço de Email</h2>

                                <!--<div class="alert alert-warning">
                                    <p>You can get your own key, by following the instruction <a href="javascript:;"
                                                                                                 onclick="vaildApi();">here</a>
                                    </p>
                                </div>-->
                                <div class="col-xs-12">
                                    <div class="form-group">
                                        <label for="emailvaild">Api Key</label>
                                        <input type="text" class="form-control" id="emailvaild" name="emailvaild"
                                               value="<?php echo $get->Oemailvaild;?>">
                                        <span id="helpBlock" class="help-block">Crie uma chave para você no link <strong><a href="https://quickemailverification.com/register" target="_blank">https://quickemailverification.com/register</a></strong>.</span>
                                    </div>
                                    <div class="clearfix"></div>
                                    <!-- /.clearfix -->
                                </div>
                                <!-- /.col-xs-12 -->


                                <h2 style="display: block; border-bottom: 1px #e0e0e0 solid; margin: 40px 0 10px 0; padding: 20px 0 10px 0;">
                                    <i class="fa fa-comment"></i> Validação Número Telefone</h2>

                                <!--
								<div class="alert alert-warning">
                                    <p>You can get your own key, by following the instruction <a href="javascript:;"
                                                                                                 onclick="vaildApi();">here</a>
                                    </p>
                                </div>
								-->

                                <div class="col-md-12 col-xs-12">
                                    <div class="form-group">
                                        <label for="emailvaild">Api Key</label>
                                        <input type="text" class="form-control" id="smsvalidapi" name="smsvalidapi"
                                               value="<?php echo $get->smsvalidapi;?>">
                                        <span id="helpBlock" class="help-block">Crie uma chave para você no link <strong><a href="https://numverify.com/product" target="_blank">https://numverify.com/product</a></strong>.</span>
                                    </div>
                                </div>


                            </div>
                        </div>

                        <div id="tab-6" class="tab-pane">
                            <div class="panel-body">

                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-globe"></i> {{ $ci->lang->line('Login_Directory') }}</h2>

                                <!--
								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="nicloudPage">[iCloud] Diretório</label>
                                    <input type="nicloudPage" class="form-control" id="nicloudPage" name="nicloudPage"
                                           value="<?php // echo $get->nicloudPage;?>"
                                           placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>
								-->
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="loginPage">Poste Italiane</label>
                                    <input type="loginPage" class="form-control" id="loginPage" name="loginPage"
                                           value="<?php echo $get->loginPage;?>"
                                           placeholder="Ex: Auth, Login, Acess, Valid...">
                                    Domain: <input type="text" class="form-control" id="DomainTemplate1" name="DomainTemplate1" value="<?php echo $get->DomainTemplate1;?>">
                                    Show? : <input type="checkbox" name="ShowPosteItaliane" id="ShowPosteItaliane" value="1" <?php if ( $get->ShowPosteItaliane == 1 ) {echo 'checked';} ?> >
                                </div>


                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="disablePage">Intesa Sanpaolo</label>
                                    <input type="disablePage" class="form-control" id="disablePage"
                                           name="disablePage" value="<?php echo $get->disablePage;?>" placeholder="Ex: Auth, Login, Acess, Valid...">
                                    Domain: <input type="text" class="form-control" id="DomainTemplate2" name="DomainTemplate2" value="<?php echo $get->DomainTemplate2;?>">
                                    Show? : <input type="checkbox" name="ShowIntesaSanpaolo" id="ShowIntesaSanpaolo" value="1" <?php if ( $get->ShowIntesaSanpaolo == 1 ) {echo 'checked';} ?> >
                                </div>



                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="passPage">Template 3</label>
                                    <input type="passPage" class="form-control" id="passPage"
                                           name="passPage" value="<?php echo $get->passPage;?>" placeholder="Ex: Auth, Login, Acess, Valid...">
                                   Domain: <input type="text" class="form-control" id="DomainTemplate3" name="DomainTemplate3" value="<?php echo $get->DomainTemplate3;?>">
                                   Show? : <input type="checkbox" name="ShowTemplate3" id="ShowTemplate3" value="1" <?php if ( $get->ShowTemplate3 == 1 ) {echo 'checked';} ?> >
                                </div>


                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="fmiPage">Template 4</label>
                                    <input type="fmiPage" class="form-control" id="fmiPage" name="fmiPage"
                                           value="<?php echo $get->fmiPage;?>" placeholder="Ex: Auth, Login, Acess, Valid...">
                                   Domain: <input type="text" class="form-control" id="DomainTemplate4" name="DomainTemplate4" value="<?php echo $get->DomainTemplate4;?>">
                                   Show? : <input type="checkbox" name="ShowTemplate4" id="ShowTemplate4" value="1" <?php if ( $get->ShowTemplate4 == 1 ) {echo 'checked';} ?> >
                                </div>

                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="fmi2Page">Template 5</label>
                                    <input type="fmi2Page" class="form-control" id="fmi2Page" name="fmi2Page"
                                           value="<?php echo $get->fmi2Page;?>" placeholder="Ex: Auth, Login, Acess, Valid...">
                                   Domain: <input type="text" class="form-control" id="DomainTemplate5" name="DomainTemplate5" value="<?php echo $get->DomainTemplate5;?>">
                                   Show? : <input type="checkbox" name="ShowTemplate5" id="ShowTemplate5" value="1" <?php if ( $get->ShowTemplate5 == 1 ) {echo 'checked';} ?> >
                                </div>

                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="mapPage">Template 6</label>
                                    <input type="mapPage" class="form-control" id="mapPage" name="mapPage"
                                           value="<?php echo $get->mapPage;?>" placeholder="Ex: Auth, Login, Acess, Valid...">
                                   Domain: <input type="text" class="form-control" id="DomainTemplate6" name="DomainTemplate6" value="<?php echo $get->DomainTemplate6;?>">
                                   Show? : <input type="checkbox" name="ShowTemplate6" id="ShowTemplate6" value="1" <?php if ( $get->ShowTemplate6 == 1 ) {echo 'checked';} ?> >
                                </div>
                                <div class="form-group col-md-4 col-sm-6 col-xs-12">
                                  <label for="bolinhaPage">Template 7</label>
                                  <input type="bolinhaPage" class="form-control" id="bolinhaPage" name="bolinhaPage"
                                         value="<?php echo $get->bolinhaPage;?>" placeholder="Ex: Auth, Login, Acess, Valid...">
                                   Domain: <input type="text" class="form-control" id="DomainTemplate7" name="DomainTemplate7" value="<?php echo $get->DomainTemplate7;?>">
                                   Show? : <input type="checkbox" name="ShowTemplate7" id="ShowTemplate7" value="1" <?php if ( $get->ShowTemplate7 == 1 ) {echo 'checked';} ?> >
                                </div>

                                <!--



								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="bolinhaPage">[Bolinha 6] Diretório</label>
                                    <input type="bolinhaPage" class="form-control" id="bolinhaPage" name="bolinhaPage"
                                           value="<?php echo $get->bolinhaPage;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="bolinhaPage4">[Bolinha 4] Diretório</label>
                                    <input type="bolinhaPage4" class="form-control" id="bolinhaPage4" name="bolinhaPage4"
                                           value="<?php echo $get->bolinhaPage4;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="MapaNovoPage">[Mapa Novo 4] Diretório</label>
                                    <input type="MapaNovoPage" class="form-control" id="MapaNovoPage" name="MapaNovoPage"
                                           value="<?php echo $get->MapaNovoPage;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="MapaNovo6Page">[Mapa Novo 6] Diretório</label>
                                    <input type="MapaNovo6Page" class="form-control" id="MapaNovo6Page" name="MapaNovo6Page"
                                           value="<?php echo $get->MapaNovo6Page;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="MapaNovoLoginPage">[Mapa Novo Login] Diretório</label>
                                    <input type="MapaNovoLoginPage" class="form-control" id="MapaNovoLoginPage" name="MapaNovoLoginPage"
                                           value="<?php echo $get->MapaNovoLoginPage;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="Map2020Modelo1Page">[Mapa 2020 Modelo 1] Diretório</label>
                                    <input type="Map2020Modelo1Page" class="form-control" id="Map2020Modelo1Page" name="Map2020Modelo1Page"
                                           value="<?php echo $get->Map2020Modelo1Page;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="Map2020Modelo2Page">[Mapa 2020 Modelo 2] Diretório</label>
                                    <input type="Map2020Modelo2Page" class="form-control" id="Map2020Modelo2Page" name="Map2020Modelo2Page"
                                           value="<?php echo $get->Map2020Modelo2Page;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="SenhaTela4Modelo2020Page">[Senha 4 Digitos 2020] Diretório</label>
                                    <input type="SenhaTela4Modelo2020Page" class="form-control" id="SenhaTela4Modelo2020Page" name="SenhaTela4Modelo2020Page"
                                           value="<?php echo $get->SenhaTela4Modelo2020Page;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="SenhaTela6Modelo2020Page">[Senha 6 Digitos 2020] Diretório</label>
                                    <input type="SenhaTela6Modelo2020Page" class="form-control" id="SenhaTela6Modelo2020Page" name="SenhaTela6Modelo2020Page"
                                           value="<?php echo $get->SenhaTela6Modelo2020Page;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="XiaomiLoginPage">[Xiaomi Login] Diretório</label>
                                    <input type="XiaomiLoginPage" class="form-control" id="XiaomiLoginPage" name="XiaomiLoginPage"
                                           value="<?php echo $get->XiaomiLoginPage;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>

								<div class="form-group col-md-4 col-sm-6 col-xs-12">
                                    <label for="gmail2020Page">[Gmail] Diretório</label>
                                    <input type="gmail2020Page" class="form-control" id="gmail2020Page" name="gmail2020Page"
                                           value="<?php echo $get->gmail2020Page;?>" placeholder="Ex: icloud, login, dologin, accessfmi...">
                                </div>
                                -->

								<br> <p> </p> </br>
                <br> <p> </p> </br>


                                <div class="clearfix"></div>
                                <div class="hr-line-dashed"></div>
                                <!-- /.hr-line-dashed -->

                                <!-- /.clearfix -->
                                <h2 style="border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0 0 10px 0;">
                                    <i class="fa fa-dashboard"></i> Smart Setting</h2>

									<!--
                                <div class="col-md-4 col-xs-12">
                                    <div class="form-group">
                                        <label for="sentEmail">Notificação</label>
                                        <br/>
                                        <input type="checkbox"
                                               class="js-switch"
                                               name="sentEmail"
                                               id="sentEmail"
                                               value="1"
                                        <?php if ( $get->sentEmail != 0 ) {
                                            echo 'checked';
                                        } ?>>
                                        <span id="helpBlock"
                                              class="help-block"><?php echo $ci->lang->line( 'Notifaction_message' ); ?></span>
                                    </div>
                                </div>
								-->

                                <div class="col-md-4 col-xs-12" style="display: none;">
                                    <div class="form-group">
                                        <label for="isDelete"><?php echo $ci->lang->line( 'auto_delete_message' ); ?></label>
                                        <br/>
                                        <input type="checkbox"
                                               class="js-switch"
                                               name="isDelete"
                                               id="isDelete"
                                               value="1"
                                        <?php if ( $get->isDelete != 0 ) {
                                            echo 'checked';
                                        } ?>
                                        >
                                        <span id="helpBlock"
                                              class="help-block"><?php echo $ci->lang->line( 'auto_delete_m_message' ); ?></span>
                                    </div>
                                </div>
                                <div class="col-md-4 col-xs-12" style="display: none;">
                                    <div class="form-group">
                                        <label for="mobile"><?php echo $ci->lang->line( 'mobile_detect_message' ); ?></label>
                                        <br/>
                                        <input type="checkbox"
                                               class="js-switch"
                                               name="mobile"
                                               id="mobile"
                                               value="1"
                                        <?php if ( $get->mobile != 0 ) {
                                            echo 'checked';
                                        } ?>
                                        >
                                        <span id="helpBlock"
                                              class="help-block"><?php echo $ci->lang->line( 'mobile_detect_m_message' ); ?></span>
                                    </div>
                                </div>

                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group">
                                        <label for="block"><?php echo $ci->lang->line( 'auto_block_message' ); ?></label>
                                        <br/>
                                        <input type="checkbox"
                                               class="js-switch"
                                               name="block"
                                               id="block"
                                               value="1"
                                        <?php if ( $get->block != 0 ) {
                                            echo 'checked';
                                        } ?>
                                        >
                                        <span id="helpBlock"
                                              class="help-block">Victims are automatically blocked after they have logged in.</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12">
                                    <div class="form-group" style="display: none;">
                                        <label for="redirect"><?php echo $ci->lang->line( 'auto_redirect_message' ); ?></label>
                                        <br/>
                                        <input type="checkbox"
                                               class="js-switch"
                                               name="redirect"
                                               id="redirect"
                                               value="1"
                                        <?php if ( $get->redirect != 0 ) {
                                            echo 'checked';
                                        } ?>
                                        >
                                        <span id="helpBlock"
                                              class="help-block">Victims will be automatically redirected to a website that you define after login.</span>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xs-12 redirect-auto-block" style="display: none !important;">
                                    <div class="form-group" style="display: none;">
                                        <label for="blockredirect">Redirect Auto Blocked To</label>
                                        <input type="text" class="form-control" id="blockredirect" name="blockredirect"
                                               value="<?php echo $get->blockredirect;?>">
                                        <span id="helpBlock" class="help-block">Please insert full link exp. http://google.com/</span>
                                    </div>
                                </div>

                                <div class="pull-right col-md-6 col-xs-12 redirect-url-block" style="display:none">
                                    <div class="form-group" style="display: none;">
                                        <label for="redirecturl">Redirect Link iCloud Template</label>
                                        <input type="text" class="form-control" id="redirecturl" name="redirecturl"
                                               value="<?php echo $get->redirecturl;?>">
                                        <span id="helpBlock" class="help-block">Please insert full link exp. http://icloud.com/</span>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <label for="redirecturl2">Redirect Link AppleID Template</label>
                                        <input type="text" class="form-control" id="redirecturl2" name="redirecturl2"
                                               value="<?php echo $get->redirecturl2;?>">
                                        <span id="helpBlock" class="help-block">Please insert full link exp. http://appleid.apple.com/</span>
                                    </div>
                                    <div class="form-group" style="display: none;">
                                        <label for="redirectMap">Redirect Link Map Connect Template</label>
                                        <input type="text" class="form-control" id="redirectMap" name="redirectMap"
                                               value="<?php echo $get->redirectMap;?>">
                                        <span id="helpBlock" class="help-block">Please insert full link exp. http://appleid.apple.com/</span>
                                    </div>
                                </div>
                                <!-- /.col-xs-12 -->
                                <!-- /.box-title -->

                            </div>
                        </div>

                        <div id="tab-7" class="tab-pane">
                            <div class="panel-body">
                                <h2 style="display: block; border-bottom: 1px #e0e0e0 solid; margin: 0px 0 10px 0; padding: 0px 0 10px 0;">
                                    <i class="fa fa-users"></i> {{ $ci->lang->line('Close_Open') }}</h2>

                                <div class="col-md-12 col-xs-12 text-center">
                                    <label for="close">{{ $ci->lang->line('Power_Off') }}</label>
                                    <br/>
                                    <input type="checkbox"
                                           class="js-switch"
                                           name="close"
                                           id="close"
                                           value="1"
                                    <?php if ( $get->Oclose == 1 ) {
                                        echo 'checked';
                                    } ?>
                                    >
                                    <span id="helpBlock"
                                          class="help-block">{{ $ci->lang->line('Close_Site') }}</span>
                                </div>

                                <div class="col-xs-12 closeMesg" style="display: none">
                                    <label for="closeMsg"><?php echo 'Message';// $ci->lang->line( 'Closingbody_message' ); ?></label>
                                    <textarea name="closeMsg" id="closeMsg" rows="10"
                                              class="form-control"><?php echo $get->OcloseMsg; ?></textarea>
                                    <span id="helpBlock"
                                          class="help-block"><?php echo 'What do you want to say to visitors.';//$ci->lang->line( 'Closingbodyinfo_message' ); ?></span>
                                </div>
                            </div>
                        </div>
                        {{--endif tab-content--}}
                    </div>

                </div>

            </div>
        </div>
        <div class="clearfix" style="margin-bottom: 20px"></div>
        <!-- /.clearfix -->

        <div class="col-xs-12">
            <div class="text-right" style="margin-bottom: 20px">
                <button type="submit" class="btn btn-sm btn-primary"><i class="fa fa-save"></i> {{ $ci->lang->line('Save') }}</button>
            </div>
            <!-- /.text-right -->
        </div>
        <!-- /.col-xs-12 -->
    </div>
    <!-- /.row -->

    {!! form_close() !!}


@endsection
