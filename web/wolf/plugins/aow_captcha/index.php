<?php

Plugin::setInfos(array(
	'id'			=>	'aow_captcha',
	'title'			=>	'AOW Captcha',
	'license'		=>	'GPL',
	'description'	=>	'Display a random numeric CAPTCHA. Based on <a href="http://www.the-art-of-web.com/php/captcha/" target="_blank">Art of the Web\'s CAPTCHA script</a>.<br /> Use <span style="color:#ff0000;">captcha_img()</span> to generate the image, and <span style="color:#ff0000;">test_captcha(</span><span style="color:#0000ff;">$code</span><span style="color:#ff0000;">)</span> to test it.', 
	'version' 		=>	'2.0',
	'author'		=>	'Arik Savage',
	'website'		=>	'http://www.artisticdigital.com/')
);
 
include captcha.php;

function captcha_img(){
	echo '<img src="'.PLUGINS_URI.'aow_captcha/captcha.php" class="captcha_img" alt="CAPTCHA">';
}

function test_captcha($code){
	if ($code === $_SESSION['digit']){
		return true;
	}else{
		return false;
	}
}
?>