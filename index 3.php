<?php
ob_start();
define('API_KEY','703193186:AAGxVZ93HeJUL1Hfk-2GVqr5vAG1uGFx3ew');
//-------
function bot($method,$datas=[]){
    $url = "https://api.telegram.org/bot".API_KEY."/".$method;
    $ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//------
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$textmessage = $message->text;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$contact = $message->contact;
$contactid = $contact->user_id;
$contactnum = $contact->phone_number;
$c_id2 = $message->forward_from_chat->id;
$admin = "698038310";
$channel = "-1001373522066";
$rpto = $update->message->reply_to_message->forward_from->id;
$URL = "https://aaahesam.000webhostapp.com/hajicr";
$user = json_decode(file_get_contents("data/$from_id.json"),true);
$step = $user["step"];
$invite = $user["invite"];
$createbot = $user["createbot"];
$createbotsaz = $user["createbotsaz"];
$createbotgem = $user["createbotgem"];
$createbotbnz = $user["createbotbnz"];
$type = $user["type"];
$Stoken = $user["Stoken"];
$typegold = $user["typegold"];
$typebnz = $user["typebnz"];
$typegem = $user["typegem"];
$yourbotsaz = $user["yourbotsaz"];
$settings = json_decode(file_get_contents("data/settings.json"),true);
$code_silver = $settings["code_silver"];
$code_bnz = $settings["code_bnz"];
$code_gem = $settings["code_gem"];
$code_gold = $settings["code_gold"];
$freebots = file_get_contents("data/freebots.txt");
$vipbots = file_get_contents("data/vipbots.txt");
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot552937127:AAH6hTqDU9edZf60af3NvJA__5PdCcxxypA/getChatMember?chat_id=@monoteam&user_id=".$chat_id));
$tch = $forchaneel->result->status;
//------
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function objectToArrays( $object ) {
				if( !is_object( $object ) && !is_array( $object ) )
				{
				return $object;
				}
				if( is_object( $object ) )
				{
				$object = get_object_vars( $object );
				}
			return array_map( "objectToArrays", $object );
			}
//------
if($URL == "https://mohammad.max-web.ir"){
if(strpos($textmessage=="/start") !== false  && $textmessage !=="/start"){
$id=str_replace("/start ","",$textmessage);
$amar=file_get_contents("data/members.txt");
$exp=explode("\n",$amar);
if(!in_array($from_id,$exp) && $from_id != $id){
$myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$user["step"] = "none";
$user["type"] = "free";
$user["invite"] = "0";
$user["createbot"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$id.json"),true);
          $invite = $user1["invite"];
          settype($invite,"integer");
                      $newinvite = $invite + 1;
                      $user1["invite"] = $newinvite;
                       $outjson = json_encode($user1,true);
file_put_contents("data/$id.json",$outjson);
					 bot('sendMessage',[
                    'chat_id'=>$id,
                    'text'=>"",
                   'parse_mode'=>"HTML",
	                      ]);
						
					}
					}
if (!file_exists("data/$from_id.json")) {
        $myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
		 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    }
	if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
		 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای استفاده از این ربات هیجان انگیز ابتدا در کانال اطلاع رسانی و تیم ربات سازی مونوتیم عضو شوید🙏
سپس ربات را مجدداً استارت ( /start ) نمایید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"ورود به کانال", 'url'=>"https://t.me/neex1"]],
              ]
        ])
	 ]); 
	}else{
	if($textmessage == "/start" or $textmessage == "برگشت⇦"){
	$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به سرویس ربات ساز هوشمند موبوکریت خوش آمدید🌹
ربات ساز موبوکریت قابلیت ساخت ربات ساز را به شما ارائه میدهد💫
شما میتوانید ربات ساز هوشمند خود را بدون حتی ذره ای دانش برنامه نویسی،بوسیله این ربات ساز داشته باشید💥

Developers:
@MrRubix

Channel: @neex1",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
 [['text'=>"💎ساخت ربات ساز الماسی💎"],['text'=>"🔅ساخت ربات ساز طلایی🔅"]],
 [['text'=>"💠ساخت ربات ساز نقره ای💠"],['text'=>"⚜ساخت ربات ساز برنزی⚜"]],
 [['text'=>"💴فروشگاه💴"]], [['text'=>"🔅کد هدیه طلایی🔅"],['text'=>"💎کد هدیه الماسی💎"]],
 [['text'=>"💠کد هدیه نقره ای💠"],['text'=>"⚜کد هدیه برنزی⚜"]],
[['text'=>"📞پشتیبانی📞"]],
 ],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 }
	elseif($textmessage == "💴فروشگاه💴"){
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای کدام بخش ربات ساز میخواهید حساب ویژه خریداری کنید؟😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
[['text'=>"💎بخش الماسی💎"],['text'=>"🔅بخش طلایی🔅"]],
[['text'=>"⚜بخش برنزی⚜"],['text'=>"💠بخش نقره ای💠"]],
[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	 }
	 //---
	 elseif($textmessage == "⚜کد هدیه برنزی⚜"){	
	$user["step"] = "free-code_bnz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا کد رایگان را برای ربات ارسال کنید😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($textmessage != "برگشت⇦" and $step == "free-code_bnz"){	
	if($code_bnz != null){
	if($code_bnz == $textmessage){
	$user["step"] = "none";
	$user["typebnz"] = "vip";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_bnz"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد وارد شده صحیح میباشد💯

حساب شما برای ساخت ربات ساز ویژه شد✔️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	  bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه برنزی با موفقیت استفاده شد😅❗️
ایدی عددی شخص: ⇦ <code>$from_id</code> ⇨
ایدی شخص: ⇦ @$username ⇨
کد وارد شده: ⇦ $textmessage ⇨
فرد با موفقیت ویژه شد🔥
Channel: @Monoteam
Bot: @RioRobot
",
 'parse_mode'=>"HTML",
	 ]); 
	}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد وارد شده صحیح نمیباشد🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد رایگان با تأخیر وارد شده است🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}
	 elseif($textmessage == "💠کد هدیه نقره ای💠"){	
	$user["step"] = "free-code_gem";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا کد رایگان را برای ربات ارسال کنید😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($textmessage != "برگشت⇦" and $step == "free-code_gem"){	
	if($code_gem != null){
	if($code_gem == $textmessage){
	$user["step"] = "none";
	$user["typegem"] = "vip";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_gem"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد وارد شده صحیح میباشد💯

حساب شما برای ساخت ربات ساز ویژه شد✔️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	  bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه نقره ای با موفقیت استفاده شد😅❗️
ایدی عددی شخص: ⇦ <code>$from_id</code> ⇨
ایدی شخص: ⇦ @$username ⇨
کد وارد شده: ⇦ $textmessage ⇨
فرد با موفقیت ویژه شد🔥
Channel: @Monoteam
Bot: @MoboCreate_bot
",
 'parse_mode'=>"HTML",
	 ]); 
	}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد وارد شده صحیح نمیباشد🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد رایگان با تأخیر وارد شده است🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}
	 	 elseif($textmessage == "💎کد هدیه الماسی💎"){	
	$user["step"] = "free-code-silver";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا کد رایگان را برای ربات ارسال کنید😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($textmessage != "برگشت⇦" and $step == "free-code-silver"){	
	if($code_silver != null){
	if($code_silver == $textmessage){
	$user["step"] = "none";
	$user["type"] = "vip";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_silver"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد وارد شده صحیح میباشد💯

حساب شما برای ساخت ربات ساز ویژه شد✔️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کد هدیه توسط $from_id
<a href='tg://user?id=$from_id'>$first_name</a>
فرد مورد نظر در ربات ساز ویژه شد😊
",
 'parse_mode'=>"HTML",
	 ]); 
	}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد وارد شده صحیح نمیباشد🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد رایگان با تأخیر وارد شده است🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}
	 elseif($textmessage == "🔅کد هدیه طلایی🔅"){	
	$user["step"] = "free-code_gold";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا کد رایگان را برای ربات ارسال کنید😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	elseif($textmessage != "برگشت⇦" and $step == "free-code_gold"){	
	if($code_gold != null){
	if($code_gold == $textmessage){
	$user["step"] = "none";
	$user["typegold"] = "vip";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_gold"] = "";
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کد وارد شده صحیح میباشد💯

حساب شما برای ساخت ربات ساز ویژه شد✔️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
	  bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه طلایی با موفقیت استفاده شد😅❗️
ایدی عددی شخص: ⇦ <code>$from_id</code> ⇨
ایدی شخص: ⇦ @$username ⇨
کد وارد شده: ⇦ $textmessage ⇨
فرد با موفقیت ویژه شد🔥
Channel: @Monoteam
Bot: @MoboCreate_bot
",
 'parse_mode'=>"HTML",
	 ]); 
	}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد وارد شده صحیح نمیباشد🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه کد رایگان با تأخیر وارد شده است🙁",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 	
	}
	}
	 //---
	  elseif($textmessage == "📞پشتیبانی📞"){
		  $user["step"] = "support";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شما در حال مکالمه با مدیران ربات هستید😅

لطفاً پیام خود را ارسال کنید📮",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
	  }
	   elseif($step == "support" and $textmessage != "برگشت⇦"){
		    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام شما به مدیران ارسال شد",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		   bot('ForwardMessage',[
	'chat_id'=>$admin,
	'from_chat_id'=>$from_id,
	'message_id'=>$message_id
	]);
	   }
	   elseif($rpto != "" && $chat_id == $admin){
     bot('sendMessage',[
 'chat_id'=>$rpto,
 'text'=>"پاسخ پیام ارسالی شما
------------------------------
$textmessage",
 'parse_mode'=>"HTML",
	 ]);
	      bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام شما به فرد ارسال شد✔️",
 'parse_mode'=>"HTML",
	 ]);
       
    }
	 //---
	 	 	elseif($textmessage == ""){
	    if($typegold !== "vip"){
	        if($invite >= 110){
	            $user["typegold"] = "vip";
	            $user["invite"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 

	    }else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد زیرمجموعه های شما کافی نمیباشد❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 		
		}
	}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه است🌟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	    }}
	 	elseif($textmessage == ""){
	    if($type !== "vip"){
	        if($invite >= 80){
	            $user["type"] = "vip";
	            $user["invite"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه شد✅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 

	    }else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد زیرمجموعه های شما کافی نمیباشد❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 		
		}
	}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه است🌟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	    }}
	 //---
	elseif($textmessage == "💎بخش الماسی💎"){	
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت خرید حساب ویژه برای بخش الماسی به مبلغ 10000 تومان بر روی دکمه زیر کلیک کنید پس از پرداخت حسابتان بصورت خودکار ویژه میشود",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"کلیک کنید", 'url'=>"https://routin.max-web.ir/pay/pay.php?amount=10000&callback=https://routin.max-web.ir/pay/gem.php?id=$from_id"]],
              ]
        ])
	 ]); 
	}
	elseif($textmessage == "💠بخش نقره ای💠"){	
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت خرید حساب ویژه برای بخش نقره ای به مبلغ 5000 تومان بر روی دکمه زیر کلیک کنید پس از پرداخت حسابتان بصورت خودکار ویژه میشود",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"کلیک کنید", 'url'=>"https://routin.max-web.ir/pay/pay.php?amount=5000&callback=https://routin.max-web.ir/pay/bnz.php?id=$from_id"]],
              ]
        ])
	 ]); 
	}
	elseif($textmessage == "🔅بخش طلایی🔅"){	
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت خرید حساب ویژه برای بخش طلایی به مبلغ 7500 تومان بر روی دکمه زیر کلیک کنید پس از پرداخت حسابتان بصورت خودکار ویژه میشود",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"کلیک کنید", 'url'=>"https://routin.max-web.ir/pay/pay.php?amount=7500&callback=https://routin.max-web.ir/pay/gold.php?id=$from_id"]],
              ]
        ])
	 ]); 
	}
	elseif($textmessage == "⚜بخش برنزی⚜"){	
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"جهت خرید حساب ویژه برای بخش برنزی به مبلغ 3000 تومان بر روی دکمه زیر کلیک کنید پس از پرداخت حسابتان بصورت خودکار ویژه میشود",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,    'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"کلیک کنید", 'url'=>"https://routin.max-web.ir/pay/pay.php?amount=3000&callback=https://routin.max-web.ir/pay/ngh.php?id=$from_id"]],
              ]
        ])
	 ]); 
	}
//---
	 elseif($textmessage == "⚜ساخت ربات ساز برنزی⚜"){
		 if($typegem == "vip" and $createbotgem == "true"){
			 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		 }
		if($typegem == "vip"){
			if($createbotgem != "true"){
			$user["step"] = "createbotgem";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا توکن مورد نظر خود را برای ربات ساز ارسال کرده تا ربات ساز شما ساخته شود🎈",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		}
	}else{

			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		}
	}
	elseif($step == "createbotgem" and $textmessage != "برگشت⇦"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/BotSazSazSazSaz/$un/index.php"))){
	 $vipbots = file_get_contents("data/vipbots.txt");
                    settype($vipbots,"integer");
                      $newbots = $vipbots + 1;
                       file_put_contents("data/vipbots.txt",$newbots);
		$user["step"] = "none";
		$user["createbotgem"] = "true";
		$user["yourbotsaz"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_get_contents("$URL/BotSazSazSazSazSazApi.php?token=$textmessage&id=$from_id&type=create");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ساز شما با موفقیت ساخته شد در ربات ساز خود استارت بزنید😅",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
	 ]);  
}else{
	 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متاسفانه توکن ارسال شده نامعتبر هست یا قبلا ربات با این توکن ساخته اید☹️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}
}
 elseif($textmessage == "💠ساخت ربات ساز نقره ای💠"){
		 if($typebnz == "vip" and $createbotbnz == "true"){
			 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		 }
		if($typebnz == "vip"){
			if($createbotbnz != "true"){
			$user["step"] = "createbotbnz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا توکن مورد نظر خود را برای ربات ساز ارسال کرده تا ربات ساز شما ساخته شود🎈",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		}
	}else{

			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		}
	}
	elseif($step == "createbotbnz" and $textmessage != "برگشت⇦"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/BotSazSazSazSazSaz/$un/index.php"))){
	 $vipbots = file_get_contents("data/vipbots.txt");
                    settype($vipbots,"integer");
                      $newbots = $vipbots + 1;
                       file_put_contents("data/vipbots.txt",$newbots);
		$user["step"] = "none";
		$user["createbotbnz"] = "true";
		$user["yourbotsaz"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_get_contents("$URL/BotSazSazSazSazSazSazApi.php?token=$textmessage&id=$from_id&type=create");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ساز شما با موفقیت ساخته شد در ربات ساز خود استارت بزنید😅",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
	 ]);  
}else{
	 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متاسفانه توکن ارسال شده نامعتبر هست یا قبلا ربات با این توکن ساخته اید☹️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}
}
 elseif($textmessage == "🔅ساخت ربات ساز طلایی🔅"){
		 if($typegold == "vip" and $createbotsaz == "true"){
			 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		 }
		if($typegold == "vip"){
			if($createbotsaz != "true"){
			$user["step"] = "createbotgold";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا توکن مورد نظر خود را برای ربات ساز ارسال کرده تا ربات ساز شما ساخته شود🎈",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		}
	}else{

			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		}
	}
	elseif($step == "createbotgold" and $textmessage != "برگشت⇦"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/BotSaz/$un/index.php"))){
	 $vipbots = file_get_contents("data/vipbots.txt");
                    settype($vipbots,"integer");
                      $newbots = $vipbots + 1;
                       file_put_contents("data/vipbots.txt",$newbots);
		$user["step"] = "none";
		$user["createbotsaz"] = "true";
		$user["yourbotsaz"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
file_get_contents("$URL/BotSazSazApi.php?token=$textmessage&id=$from_id&type=create");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ساز شما با موفقیت ساخته شد در ربات ساز خود استارت بزنید😅",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
	 ]);  
}else{
	 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متاسفانه توکن ارسال شده نامعتبر هست یا قبلا ربات با این توکن ساخته اید☹️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}
}
	 //---
	 elseif($textmessage == "💎ساخت ربات ساز الماسی💎"){
		 if($type == "vip" and $createbot == "true"){
			 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		 }
		if($type == "vip"){
			if($createbot != "true"){
			$user["step"] = "createbot";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);

	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حالا توکن مورد نظر خود را برای ربات ساز ارسال کرده تا ربات ساز شما ساخته شود🎈",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		}
	}else{
			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متأسفانه حساب شما در سرویس ربات ساز هوشمند عادی میباشد🙁

برای خرید حساب ویژه به بخش 💴فروشگاه💴 مراجعه کنید.",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		}
	}
	elseif($step == "createbot" and $textmessage != "برگشت⇦"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/BotSazSaz/$un/index.php"))){
	 $vipbots = file_get_contents("data/vipbots.txt");
                    settype($vipbots,"integer");
                      $newbots = $vipbots + 1;
                       file_put_contents("data/vipbots.txt",$newbots);
		$user["step"] = "createbot1";
		$user["createbot"] = "true";
		$user["Stoken"] = $textmessage;
		$user["yourbotsaz"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"آیدی کانالی که میخواهید ربات روی آن قفل شود را ارسال کنید",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
	 ]);  
}else{
	 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"متاسفانه توکن ارسال شده نامعتبر هست یا قبلا ربات با این توکن ساخته اید☹️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}
	}
	elseif(isset($message->forward_from_chat) ){
if($step == "createbot1" and $textmessage != "برگشت⇦"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$chat_id.json",$outjson);
file_get_contents("$URL/BotSazSazSazApi.php?token=$Stoken&id=$from_id&type=create&channel=$c_id2");
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ساز شما با موفقیت ساخته شد در ربات ساز خود استارت بزنید😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
}

	//---
	
//-----admin-panel-----
if($textmessage == "بیبی" or $textmessage == "هوی" or $textmessage == "پسرم"){
	if($chat_id == $admin ){
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"بابایی به پنل مدیریت  خوش آمدی",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
 [['text'=>"🔹آمار ربات🔹"],['text'=>"🗃راهنمای پنل مدیریت🗃"]],
 [['text'=>"🔹ویژه کردن الماسی🔹"],['text'=>"🔹رایگان کردن حساب الماسی🔹"]],
 [['text'=>"🔹ویژه کردن گلد🔹"],['text'=>"🔹رایگان کردن حساب گلد🔹"]],
[['text'=>"🔹ویژه کردن نقره ای🔹"],['text'=>"🔹رایگان کردن حساب نقره ای🔹"]],
[['text'=>"🔹ویژه کردن برنزی🔹"],['text'=>"🔹رایگان کردن حساب  برنزی🔹"]],
 [['text'=>"⭐️ساخت کد هدیه الماسی⭐️"], ['text'=>"🔥ساخت کد هدیه گلد🔥"]],
[['text'=>"🌕ساخت کد هدیه نقره ای🌕"], ['text'=>"⛅️ساخت کد هدیه برنزی🌥"]],
 [['text'=>"❄️ارسال پیام همگانی❄️"],['text'=>"🌈فروارد همگانی🌈"]],
[['text'=>"برگشت⇦"]],
 ],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
}
}
elseif($chat_id == $admin and $textmessage == "🔥ساخت کد هدیه گلد🔥"){	
$user["step"] = "create-code_gold";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ساخت کد هدیه لطفا کد مورد نظر را ارسال نمایید.
ادمین گرامی پس از ارسال کد ربات به شما پیامی میدهد آن پیام را در چنل ارسال کنید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "create-code_gold"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_gold"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	 bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه جدیدی برای بخش طلایی ساخته شد😅❗️
کد: ⇦ $textmessage ⇨
روش وارد کردن کد: وارد ربات موبوکریت شوید سپس بر روی دکمه 🔅کد هدیه طلایی🔅 بزنید سپس کد را ارسال کنید 
Channel: @Monoteam
Bot: @MoboCreate_bot",
 'parse_mode'=>"HTML",
	 ]); 
	}
elseif($chat_id == $admin and $textmessage == "⭐️ساخت کد هدیه الماسی⭐️"){	
$user["step"] = "create-code-silver";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ساخت کد هدیه لطفا کد مورد نظر را ارسال نمایید.
ادمین گرامی پس از ارسال کد ربات به شما پیامی میدهد آن پیام را در چنل ارسال کنید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "create-code-silver"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code-silver"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	 bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه جدیدی برای بخش الماسی ساخته شد😅❗️
کد: ⇦ $textmessage ⇨
روش وارد کردن کد: وارد ربات موبوکریت شوید سپس بر روی دکمه 💎کد هدیه الماسی💎 بزنید سپس کد را ارسال کنید 
Channel: @Monoteam
Bot: @MoboCreate_bot",
 'parse_mode'=>"HTML",
	 ]); 
	}
elseif($chat_id == $admin and $textmessage == "🌕ساخت کد هدیه نقره ای🌕"){	
$user["step"] = "create-code_gem";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ساخت کد هدیه لطفا کد مورد نظر را ارسال نمایید.
ادمین گرامی پس از ارسال کد ربات به شما پیامی میدهد آن پیام را در چنل ارسال کنید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "create-code_gem"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_gem"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	 bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه جدیدی برای بخش نقره ای ساخته شد😅❗️
کد: ⇦ $textmessage ⇨
روش وارد کردن کد: وارد ربات موبوکریت شوید سپس بر روی دکمه 💠کد هدیه نقره ای💠 بزنید سپس کد را ارسال کنید 
Channel: @Monoteam
Bot: @MoboCreate_bot",
 'parse_mode'=>"HTML",
	 ]); 
	}
elseif($chat_id == $admin and $textmessage == "⛅️ساخت کد هدیه برنزی🌥"){	
$user["step"] = "create-code_bnz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ساخت کد هدیه لطفا کد مورد نظر را ارسال نمایید.
ادمین گرامی پس از ارسال کد ربات به شما پیامی میدهد آن پیام را در چنل ارسال کنید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "create-code_bnz"){	
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$settings["code_bnz"] = $textmessage;
$outjson1 = json_encode($settings,true);
file_put_contents("data/settings.json",$outjson1);
	 bot('sendMessage',[
 'chat_id'=>$channel,
 'text'=>"کد هدیه جدیدی برای بخش برنزی ساخته شد😅❗️
کد: ⇦ $textmessage ⇨
روش وارد کردن کد: وارد ربات موبوکریت شوید سپس بر روی دکمه ⚜کد هدیه برنزی⚜ بزنید سپس کد را ارسال کنید 
Channel: @Monoteam
Bot: @MoboCreate_bot",
 'parse_mode'=>"HTML",
	 ]); 
	}
elseif($chat_id == $admin and $textmessage == "🔹رایگان کردن حساب گلد🔹"){	
$user["step"] = "off-vip-user-gold";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای رایگان کردن حساب فرد آیدی عددی فرد مورد نظر را ارسال کنید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "off-vip-user-gold"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["typegold"] = "none";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت رایگان شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب ویژه شما باطل شد🤘🏿",
 'parse_mode'=>"HTML",
]); 
 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب رایگان شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
elseif($chat_id == $admin and $textmessage == "🔹رایگان کردن حساب نقره ای🔹"){	
$user["step"] = "off-vip-user-gem";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای رایگان کردن حساب فرد آیدی عددی فرد مورد نظر را ارسال کنید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "off-vip-user-gem"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["typegem"] = "none";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت رایگان شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب ویژه شما باطل شد🤘🏿",
 'parse_mode'=>"HTML",
]); 
 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب رایگان شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
elseif($chat_id == $admin and $textmessage == "🔹رایگان کردن حساب  برنزی🔹"){	
$user["step"] = "off-vip-user-bnz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای رایگان کردن حساب فرد آیدی عددی فرد مورد نظر را ارسال کنید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "off-vip-user-bnz"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["typebnz"] = "none";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت رایگان شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب ویژه شما باطل شد🤘🏿",
 'parse_mode'=>"HTML",
]); 
 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب رایگان شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "🔹آمار ربات🔹"){	
$alluser = file_get_contents("data/members.txt");
	$alaki = explode("\n",$alluser);
    $allusers = count($alaki)-1;
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"🔹تعداد کل اعضای ربات : $allusers
🔹تعداد ربات های ساخته شده : $vipbots 🔹",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//---
elseif($chat_id == $admin and $textmessage == "🗃راهنمای پنل مدیریت🗃"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"1⃣توضیحات در مورد کد هدیه:
 بخش کد هدیه خودکار نیست پس از ساخت کد هدیه ربات به شما متن میدهد آن متن را در چنل خود ارسال کنید
سپس بعد از اینکه کسی کد رو وارد کنه پیام وارد شدن کد به چنل ارسال میشه و بعدش شما ایدی عددی کسی که کد رو وارد کرده رو کپی میکنید و ویژش میکنید! و برای اسون تر شدن کار شما به ایدی عددی حالت کپی متن داده شده هست تا سریعتر فرد مورد نظر ویژ کنید
➖➖➖➖➖➖
2⃣از ساخت کد هدیه الماسی جلوگیری کنید!
از ساخت زیاد کد طلایی جلوگیری کنید
➖➖➖➖➖➖
3⃣پس از ویژه کردن فردی در بخش الماسی حتما به یکی از ادمین های موبوکریت مراجعه کنید و سپس ایدی ربات پشتیبانی شخص و ایدی چنل شخص را ارسال کنید تا در ربات تنظیم شود!
➖➖➖➖➖
🔴در صورت اینکه مشکلی بود میتوانید به ایدی زیر مراجعه کنید
@MonoSupportbot",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//---
elseif($chat_id == $admin and $textmessage == "🔹ویژه کردن گلد🔹"){	
$user["step"] = "set-vip-user-gold";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای ویژه کردن ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "set-vip-user-gold"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["typegold"] = "vip";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت ویژه شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما در سرویس ربات ساز هوشمند در بخش گلد ویژه شد🎉",
 'parse_mode'=>"HTML",
]); 
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب ویژه شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "🔹ویژه کردن برنزی🔹"){	
$user["step"] = "set-vip-user-gem";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای ویژه کردن ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "set-vip-user-gem"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["typegem"] = "vip";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت ویژه شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما در سرویس ربات ساز هوشمند در بخش برنزی ویژه شد🎉",
 'parse_mode'=>"HTML",
]); 
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب ویژه شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "🔹ویژه کردن نقره ای🔹"){	
$user["step"] = "set-vip-user-bnz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای ویژه کردن ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "set-vip-user-bnz"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["typebnz"] = "vip";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت ویژه شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما در سرویس ربات ساز هوشمند در بخش نقره ای ویژه شد🎉
",
 'parse_mode'=>"HTML",
]); 
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب ویژه شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "🔹ویژه کردن الماسی🔹"){	
$user["step"] = "set-vip-user";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"آیدی عددی فرد رو برای ویژه کردن ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "برگشت⇦" and $step == "set-vip-user"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["type"] = "vip";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت ویژه شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما در سرویس ربات ساز هوشمند در بخش الماسی ویژه شد🎉",
 'parse_mode'=>"HTML",
]); 
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب ویژه شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "🔹رایگان کردن حساب الماسی🔹"){	
$user["step"] = "off-vip-user";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای رایگان کردن حساب فرد آیدی عددی فرد مورد نظر را ارسال کنید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "off-vip-user"){
	if(file_exists("data/$textmessage.json")) {
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$user1["type"] = "none";
$outjson1 = json_encode($user1,true);
file_put_contents("data/$textmessage.json",$outjson1);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر با موفقیت رایگان شد✔️
پروفایل فرد :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب ویژه شما باطل شد🤘🏿",
 'parse_mode'=>"HTML",
]); 
 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب رایگان شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
[$textmessage](tg://user?id=$textmessage)",
 'parse_mode'=>"MarkDown",
	 ]);
}else{
	bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"کاربر مورد نظر در ربات وجود ندارد!❌",
 'parse_mode'=>"HTML",
]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "❄️ارسال پیام همگانی❄️"){	
$user["step"] = "send2all";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام خود را برای ارسال همگانی ارسال نمایید➰",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin && $step == "send2all" && $textmessage != "برگشت⇦"){ 
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    $all_member = fopen( "data/members.txt", 'r');
	while( !feof( $all_member)) {
 	$user = fgets( $all_member);
  bot('sendMessage',[
 'chat_id'=>$user,
 'text'=>$textmessage,
 'parse_mode'=>"MarkDown",
  ]);
}
  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام همگانی با موفقیت به همه اعضا ارسال شد✔️",
 'parse_mode'=>"MarkDown",
  ]);
}
//----
elseif($chat_id == $admin and $textmessage == "🌈فروارد همگانی🌈"){
	$user["step"] = "f2all";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام خود را برای فروارد همگانی فروارد نمایید➰",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"برگشت⇦"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($textmessage != "برگشت⇦" && $from_id == $admin && $step == "f2all"){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    $all_member = fopen( "data/members.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
		   bot('ForwardMessage',[
	'chat_id'=>$user,
	'from_chat_id'=>$admin,
	'message_id'=>$message_id
	]);
		}    
		bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"فروارد همگانی به همه اعضای ربات فروارد شد✔️",
 'parse_mode'=>"MarkDown",
  'reply_to_message_id'=>$message_id,
]); 
}
}
}
unlink('error_log');
?>
