<?php

/*
|-------------------------------
|	GENERAL SETTINGS
|-------------------------------
*/

$imSettings['general'] = array(
	'url' => 'http://www.dietmar-heinke.co.uk',
	'public_folder' => '',
	'salt' => '74w1370bik36bpwfudb6471gu61p8d2140133d0e7j805f57s21h6f8z9bpz5k',
	'use_common_email_sender_address' => false,
	'common_email_sender_addres' => ''
);


/*
|--------------------------------------------------------------------------------------
|	DATABASES SETTINGS
|--------------------------------------------------------------------------------------
*/

$imSettings['databases'] = array();

/*
|-------------------------------------------------------------------------------------------
|	GUESTBOOK SETTINGS
|-------------------------------------------------------------------------------------------
*/

$imSettings['guestbooks'] = array();

/*
|-------------------------------
|	EMAIL SETTINGS
|-------------------------------
*/

$ImMailer->emailType = 'phpmailer';
$ImMailer->header = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">' . "\n" . '<html>' . "\n" . '<head>' . "\n" . '<meta http-equiv="content-type" content="text/html; charset=utf-8">' . "\n" . '<meta name="generator" content="Incomedia WebSite X5 v11 - www.websitex5.com">' . "\n" . '</head>' . "\n" . '<body bgcolor="#708090" style="background-color: #708090;">' . "\n\t" . '<table border="0" cellpadding="0" align="center" cellspacing="0" style="padding: 0; margin: 0 auto; width: 700px;">' . "\n\t" . '<tr><td id="imEmailContent" style="min-height: 300px; padding: 10px; font: normal normal normal 9pt Tahoma; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 1px; border-right-width: 1px; border-bottom-width: 0; border-bottom: none; border-left-width: 1px;background-color: #FFFFFF" width="700px">' . "\n\t\t";
$ImMailer->footer = "\n\t" . '</td></tr>' . "\n\t" . '<tr><td id="imEmailFooter" style="font: normal normal normal 7pt Tahoma; color: #000000; background-color: transparent; text-align: center; text-decoration: none;  width: 700px;border-style: solid; border-color: #808080; border-top-width: 0; border-top: none; border-right-width: 1px; border-bottom-width: 1px; border-left-width: 1px; padding: 10px; background-color: #FFFFFF" width="700px">' . "\n\t\t" . 'This e-mail contains information that are intended solely for the above mentioned addressee.<br>If you have received this e-mail in error, please notify the sender immediately and destroy it, without copying it.' . "\n\t" . '</td></tr>' . "\n\t" . '</table>' . "\n" . '</body>' . "\n" . '</html>';
$ImMailer->bodyBackground = '#FFFFFF';
$ImMailer->bodyBackgroundEven = '#FFFFFF';
$ImMailer->bodyBackgroundOdd = '#F0F0F0';
$ImMailer->bodyBackgroundBorder = '#CDCDCD';
$ImMailer->bodySeparatorBorderColor = '#000000';
$ImMailer->emailBackground = '#708090';
$ImMailer->emailContentStyle = 'font: normal normal normal 9pt Tahoma; color: #000000; background-color: #FFFFFF; text-align: left; text-decoration: none; ';
$ImMailer->emailContentFontFamily = 'font-family: Tahoma;';

// End of file x5settings.php