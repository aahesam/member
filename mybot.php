<?php
/**
 * Telegram Bot example.
 * @author Gabriele Grillo <gabry.grillo@alice.it>
 * https://github.com/Eleirbag89/TelegramBotPHP
 */
include("Telegram.php");

// Set the bot TOKEN
$bot_id = "722617892:AAEEWabfKrqvwD3dvQmRXBBTW_TnqbtkGg4"; //deleteSpammerBot

// Instances the class
$telegram = new Telegram($bot_id);

/* If you need to manually take some parameters
*  $result = $telegram->getData();
*  $text = $result["message"] ["text"];
*  $chat_id = $result["message"] ["chat"]["id"];
*/

//$result = $telegram->getData();
//$channel_post = $result["channel_post"];

// Take text and chat_id from the message
$text 			   = $telegram->Text();
$chat_id 		   = $telegram->ChatID();
$user_id		   = $telegram->UserID();
//$message_id		   = $telegram->MessageID();
//$username 		   = $telegram->Username();
//$name 		  	   = $telegram->FirstName();
//$family 		   = $telegram->LastName();
$message_id = $telegram->MessageID();

//$up_type = $telegram->getUpdateType();

$new_members = $telegram->NewChatMember(); // new chat member for new user

$content = ['chat_id' => $chat_id, 'user_id' => $user_id];
$member_type = $telegram->getChatMember($content); // member Type

if(!empty($text)){
	
	// Delete Bad Words
	$bad_words = ['#قلب', '#داخلی', '#زنان', '#عمومی', '#پوست', '#عفونی', '#ارتوپد', '#ماما', '#کودکان', '#چشم', '#مغز', '#روانشناس','#ریه', '#پرستار', '#آزمایشگاه', '#عمومی', '#روانپزشک', '#اطفال','#پرستار','#عروق','#رادیولوژی','#سونو'];
	$bwc = count($bad_words);
	for($i=0; $i<$bwc; $i++){
		if(strstr(strtolower($text),$bad_words[$i])){
			$content = ['chat_id' => $chat_id, 'text'=>"نوبت شما زده شد منتظر باشید پزشک مورد نظر آنلاین بشن و جواب شما داده شود", 'reply_to_message_id' => $message_id];
			$telegram->sendmessage($content);
			die(); // break code
		}	
	}
	
	// NAMAL
//	if(strstr($text,'@Mohsen322Rezaei')){
//		$content = ['chat_id' => $chat_id, 'text' => 'نمال...', 'reply_to_message_id' => $message_id];
//		$telegram->sendMessage($content);
//		die(); // break code
//	}	
//	
}

if(count($new_members) > 0){
	
	for($i=0; $i<count($new_members); $i++){
		$new_mem_user_id = $new_members[$i]["id"];
		$new_mem_is_bot = $new_members[$i]["is_bot"];
		
		if($member_type['result']['status'] == 'member'){
			// Ban Bot
			if($new_mem_is_bot){
				$content = ['chat_id' => $chat_id, 'user_id' => $new_mem_user_id];
				$telegram->kickChatMember($content);

				// Ban User Who Added Bot
				$content = ['chat_id' => $chat_id, 'user_id' => $user_id];
				$telegram->kickChatMember($content);			
			}	
		}
	}
}
