<?php 
session_start();
if (isset($_POST['email'],$_POST['a']) && $_POST['a'] == 10 && $_POST['email'] != '' && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
	include_once("$_SERVER[DOCUMENT_ROOT]/admin/Mailer/Mail.php");    

	$fontStyle = 'font-family: sans-serif; font-size: 14px;';
	if (!isset($_POST['address'])) $_POST['address'] = '';
	if (isset($_POST['city']) && $_POST['city'] != '') $_POST['address'] .= $_POST['city'] . ', ';
	if (isset($_POST['province']) && $_POST['province'] != '') $_POST['address'] .= $_POST['province'] . ' ';
	if (isset($_POST['postal_code']) && $_POST['postal_code'] != '') $_POST['address'] .= $_POST['postal_code'];
	$content = '
                    <table border="0" cellpadding="0" cellspacing="0" style="border-collapse: separate; mso-table-lspace: 0pt; mso-table-rspace: 0pt; width: 100%;">
                      <tr>
                        <td style="' . $fontStyle . ' vertical-align: top;">';
						if (isset($_POST['name'])) $content.= '<p style="' . $fontStyle . ' margin-bottom: 15px;">Name:  '.$_POST['name'] . '  '.$_POST['lname'] . '</p>';
						if (isset($_POST['email'])) $content.= '<p style="' . $fontStyle . ' margin-bottom: 15px;">Email:  '.$_POST['email'] . '</p>';
						if (isset($_POST['phone'])) $content.= '<p style="' . $fontStyle . ' margin-bottom: 15px;">Phone:  '.$_POST['phone'] . '</p>';
						if ($_POST['address'] != '') $content.= '<p style="' . $fontStyle . ' margin-bottom: 15px;">Address:  '.$_POST['address'] . '</p>';
						if ($_POST['inf_custom_WhichYard'] != '') $content.= '<p style="' . $fontStyle . ' margin-bottom: 15px;">Where do you Want to Turf:  '.$_POST['inf_custom_WhichYard'] . '</p>';
						if ($_POST['message'] != '') $content.= '<p style="' . $fontStyle . ' margin-bottom: 15px;">Message:  '.nl2br($_POST['message']) . '</p>';
            $content.= '</td>
                      </tr>
                    </table>';
	
	$subject = "Form Submission on ".SITE_NAME;
	if (isset($_POST['dealer_page'])) $subject = "BECOME A DEALER on ".SITE_NAME;
	$spamwords = file_get_contents("http://tools.dev.xi-digital.com/spamcheck/list.db");
	$spamarray = explode(",",$spamwords);
	foreach ($spamarray as $spamword) {
		if (strpos($_POST['message'],$spamword) !== false) {$isspam = 1;}
	}
	if($isspam != 1){
		$_SESSION['modal_success'] = '<div class="check_wrap"></div><div class="modal_text"><div class="modal_title">Thank You</div><p>We will contact you within one business day</p></div><button type="submit" class="button dialog_close">Ok</button>';
		Mail::send('', '', $_POST['email'], $subject, $content);
		//mail("$to_name<$to_email2>", $subject, $message, $headers);	
		header('Location: /contact?status=sent');
		die();
	}
} else {
	header('Location:/');
}	
?>