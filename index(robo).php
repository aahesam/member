<?php
/*
کانال نیک سورس مرجع تخصصی سورس ربات های تلگرام
کانال ما:
T.me/Nic_Source
*/
ob_start();
define('API_KEY','760126333:AAE0zy5yJouZ2ES-FJfa42wddqQ2hOCVQvo');
ini_set("log_errors","off");
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
$admin = "618055361"; // ایدی عددی ادمین
$cinvite = '40'; // تعداد زیرمجموعه برای ویژه شدن
$storecoin = '10'; // تعداد امتیازی که اگه کاربر در استور بوت نظر داد براش بفرستم
$channel_logs = "-1001318404867"; // چنل لاگ
$botToken = "760126333:AAE0zy5yJouZ2ES-FJfa42wddqQ2hOCVQvo"; // توکن ربات
$channeltag = "solar_gold"; // ایدی کانال بدون @
$bottag = "GSolarRobot"; // ایدی ربات بدون @
$rpto = $update->message->reply_to_message->forward_from->id;
$URL = "https://aaahesam.000webhostapp.com/robo/robo"; // ادرس وب
$user = json_decode(file_get_contents("data/$from_id.json"),true);
$step = $user["step"];
$createfree = $user["createfree"];
$createbot = $user["createbot"];
$type = $user["type"];
$invite = $user["invite"];
$storebot = $user["storebot"];
$yourbotsaz = $user["yourbotsaz"];
$freebots = file_get_contents("data/freebots.txt");
$vipbots = file_get_contents("data/vipbots.txt");
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$botToken/getChatMember?chat_id=@$channeltag&user_id=".$chat_id));
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
if(strpos($textmessage=="/start") !== false  && $textmessage !=="/start"){
$id=str_replace("/start ","",$textmessage);
$amar=file_get_contents("data/members.txt");
$exp=explode("\n",$amar);
if(!in_array($from_id,$exp) && $from_id != $id){
$myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$from_id\n");
fclose($myfile2);
$user["step"] = "none";
$user["invite"] = "0";
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
'text'=>"یک نفر از طریق لینک شما به ربات اضافه شد✅
شما تا الان $newinvite نفر به ربات آورده اید و برای ویژه شدن نیاز به $cinvite نفر دارید
اگر به تعداد مورد نظر رسیده است دستور /setvip را ارسال نمایید😊",
'parse_mode'=>"HTML",
]);						
}
}

if (!file_exists("data/$from_id.json")) {
        $myfile2 = fopen("data/members.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
		 $user["step"] = "none";
		 $user["invite"] = "0";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    }
	if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
		 bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"برای استفاده از این ربات هیجان انگیز ابتدا در کانال ما عضو بشید و بعد دکمه تایید عضویت رو لمس کنید 👇

🔸 @$channeltag   🔸 @$channeltag
🔸 @$channeltag   🔸 @$channeltag

👇 بعد از « عضــویت » ربات را استارت کنید👇",
                   'parse_mode'=>"HTML",
]); 
}else{
	if($textmessage == "/start" or $textmessage == "🔙"){
	$num = $user["number"];
	if($num == null){
		$user["step"] = "contact";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به ربات ساز ما خوشامدید😊🌹
با این ربات میتونی برای خودت یک ربات ساز بسازی🙂
برای شروع به وسیله دکمه زیر شمارت رو شیر کن👇🏻",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'➰تنظیم شماره من➰' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);  
	}else{
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به ربات ساز طلائی خوشومدی دوست من🤠
با استفاده از من میتونی برای خودت یک ربات ساز کامل داشته باشی 🎉
البته این ربات ساز رایگان نیست🔴
برای ساخت یک ربات ساز کامل و بدون تبلیغ فقط کافیه با مبلغ 8 هزار تومان اقدام به ساخت ربات ساز خودت بکنی✔️
برای تست از بخش ساخت ربات رایگان میتونی برای یک روز ربات ساز خودتو داشته باشی➰
جهت خرید حساب ویژه هم میتونی از دکمه های زیر استفاده بکنی⬇️
@$channeltag 🌐",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"▪️ساخت ربات ساز▪️"]],
	[['text'=>"🔻آپدیت ربات ساز🔻"],['text'=>"🔺حذف ربات ساز🔺"]],
[['text'=>"🔸ساخت ربات رایگان🔸"]],
[['text'=>"👤زیرمجموعه گیری👤"],['text'=>"✨نظر دادن به ربات در استوربوت✨"]],
	[['text'=>"▫️لیست ربات های من▫️"],['text'=>"🔘خرید حساب ویژه🔘"]],
	[['text'=>"➰پشتیبانی➰"]],
	],
"resize_keyboard"=>true,
	 ])
	 ]); 
	}
	}
	if($contact && $step == "contact"){
	 if($contactid == $from_id){
		  $offset = strpos($contactnum,"98");
 if ($offset !== false){
	 $user["number"] = $contactnum;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به ربات ساز طلائی خوشومدی دوست من🤠
با استفاده از من میتونی برای خودت یک ربات ساز کامل داشته باشی 🎉
البته این ربات ساز رایگان نیست🔴
برای ساخت یک ربات ساز کامل و بدون تبلیغ فقط کافیه با مبلغ 8 هزار تومان اقدام به ساخت ربات ساز خودت بکنی✔️
برای تست از بخش ساخت ربات رایگان میتونی برای یک روز ربات ساز خودتو داشته باشی➰
جهت خرید حساب ویژه هم میتونی از دکمه های زیر استفاده بکنی⬇️
@$channeltag 🌐",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"▪️ساخت ربات ساز▪️"]],
	[['text'=>"🔻آپدیت ربات ساز🔻"],['text'=>"🔺حذف ربات ساز🔺"]],
	    [['text'=>"🔸ساخت ربات رایگان🔸"]],
		[['text'=>"👤زیرمجموعه گیری👤"],['text'=>"✨نظر دادن به ربات در استوربوت✨"]],
	[['text'=>"▫️لیست ربات های من▫️"],['text'=>"🔘خرید حساب ویژه🔘"]],
	[['text'=>"➰پشتیبانی➰"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
     }else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لطفا فقط از شماره ایران جهت ساخت ربات ساز استفاده کنید❌",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'➰تنظیم شماره من➰' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);  
	 }
	 }else{
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لطفا با استفاده از دکمه زیر اقدام به ثبت شماره خود نمایید👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
 	'reply_markup'=>json_encode([
            	'keyboard'=>[
                [
                   ['text'=>'➰تنظیم شماره من➰' , 'request_contact' => true]
                ]
            	],
            	'resize_keyboard'=>true
       		])
	 ]);
	 }
	 }
	 //---
elseif($textmessage == "✨نظر دادن به ربات در استوربوت✨"){
	if($storebot == "true"){
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شما قبلا به ربات ما نظر داده و امتیاز خود را کسب کرده اید😊✨",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
	}else{
		  $user["step"] = "storebot-nazar";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"در این بخش شما با نظر دادن به ربات ما و دادن 5 ستاره به ربات ساز ما در @StoreBot میتوانید $storecoin امتیاز (زیرمجموعه کسب کنید)😁
با لینک زیر 5 ستاره بده و نظرت رو ثبت کن تا امتیازت رو دریافت کنی(اگه نظر ندی یا کمتر از 5 ستاره بدی امتیازی دریافت نمیکنی!)😄
https://telegram.me/storebot?start=$bottag",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
[['text'=>"نظر دادم👍🏻"]],
[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
	  }
	  }//@Nic_Source
elseif($textmessage == "نظر دادم👍🏻" and $step == "storebot-nazar"){
$golddev  = json_decode(file_get_contents("http://havig.tk/api/getBotInfo.php?token=$botToken&from_id=$from_id&api_key=bSsFsdafsdf!@31@3Dfsfsd"));
if($golddev->rate_in_store_bot->ok == true && $golddev->rate_in_store_bot->rate == 5 && $golddev->rate_in_store_bot->text != null) {
settype($invite,"integer");
$newinvite = $invite + $storecoin;
$user["invite"] = $newinvite;
$user["storebot"] = "true";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تبریک شما در @StoreBot به ربات ما نظر دادید و $storecoin امتیاز به زیرمجموعه های شما اضافه شد😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"▪️ساخت ربات ساز▪️"]],
	[['text'=>"🔻آپدیت ربات ساز🔻"],['text'=>"🔺حذف ربات ساز🔺"]],
	    [['text'=>"🔸ساخت ربات رایگان🔸"]],
		[['text'=>"👤زیرمجموعه گیری👤"],['text'=>"✨نظر دادن به ربات در استوربوت✨"]],
	[['text'=>"▫️لیست ربات های من▫️"],['text'=>"🔘خرید حساب ویژه🔘"]],
	[['text'=>"➰پشتیبانی➰"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}else{
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اشتباهی رخ داده👌
توجه کنید که شما باید حتما 5 ستاره بدهید و نظر خود را نیز ثبت کنید تا امتیازی به شما تعلق بگیرد😄",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
[['text'=>"نظر دادم👍🏻"]],
[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
}
}
	  elseif($textmessage == "➰پشتیبانی➰"){
		  $user["step"] = "support";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
		  bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به پشتیبانی آنلاین ربات ساز خوش اومدی😊
از الان هر پیامی بفرستی به مدیران ربات ارسال میشه😊
برای قطع مکالمه از دکمه زیر استفاده کن👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
	  }
	   elseif($step == "support" and $textmessage != "🔙"){
		    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"پیام شما به پشتیبانی ارسال شد منتظر جواب بمانید😃
برای لغو گفتگو از دکمه زیر استفاده کنید👇🏻",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
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
 'text'=>"دوست عزیز شما یک پیام از طرف پشتیبانی ربات دریافت کردید✔️
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
	 	elseif($textmessage == "/setvip"){
	    if($type !== "vip"){
	        if($invite >= $cinvite){
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
	 elseif($textmessage == "🔘خرید حساب ویژه🔘"){
		 if($type == "vip"){
			 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ما ویژه است🌹
با تشکر از خرید شما😃",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		 }else{
			 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش خرید حساب ویژه خوش آمدی😁
برای ساخت ربات ساز میتونی اول برای یک روز یک ربات ساز بسازی و تست کنی !
از بخش (ساخت ربات رایگان) اقدام به این کار کن.
برای خرید حساب ویژه فقط با مبلغ 8 هزار تومان با استفاده از دکمه (پشتیبانی) با مدیران ربات در ارتباط باش😅
با تشکر
@$channeltag ➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
			 
		 }
	 }
	 //---
	  elseif($textmessage == "👤زیرمجموعه گیری👤"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ویژه شدن حساب شما در ربات ساز نیاز به $cinvite دعوت با لینک مخصوص شما میباشد 😊
شما تا کنون $invite کاربر به ربات دعوت کرده اید 😁
لینک مخصوص شما :
https://telegram.me/$bottag?start=$from_id",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
	 }
	  elseif($textmessage == "▫️لیست ربات های من▫️"){
		 if($createbot == "true" and $type == "vip"){
			 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ویژه است✔️
شما در ربات یک ربات ساز با آیدی
@$yourbotsaz
دارید که در سیستم ما ثبت شده🌟
توکن این ربات را نیز میتوانید از @BotFather بدست آورید😅",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"➰ورود به ربات ساز شما➰", 'url'=>"https://telegram.me/$yourbotsaz"]],
              ]
        ])
	 ]);  
		 }else{
			 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شما هنوز در ربات ساز ما رباتی ثبت نکرده اید📛
برای ثبت ربات ساز خود از بخش (ساخت ربات ساز) اقدام به ساخت ربات ساز شخصی خود نمایید😄",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
			 
		 }
	 }
	 //---
	 elseif($textmessage == "🔻آپدیت ربات ساز🔻"){
		 if($type == "vip"){
			  $user["step"] = "updatebotsaz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش آپدیت ربات ساز خوش اومدی دوست من🌹
توجه داشته باش که با آپدیت ربات ساز هیچ مشکلی برای تنظیمات ربات ساز و اعضای ربات سازت پیش نماید فقط ربات سازت به آخرین نسخه آپدیت میشه😄
▪️اگه قصد ادامه داری توکن ربات سازت رو برای از @BotFather ارسال کن :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
	 }else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه نمیباشد و هنوز در سیستم ما ربات سازی ثبت نکرده اید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);   
	 }
	 }
	 elseif($step == "updatebotsaz" and $textmessage != "🔙"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (file_exists("Bots/BotSaz/$un/index.php")) && $un == $yourbotsaz){
		 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	file_get_contents("$URL/BotSazSazApi.php?token=$textmessage&id=$from_id&type=update");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپسس ..
ربات ساز @$un با موفقیت در سیستم ما آپدیت شد😊
در ربات خود یک مرتبه دستور /start را ارسال کنید➰
آخرین آپدیت ها را از @$channeltag دنبال کنید🌟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"ربات ساز آپدیت شد❗️
آیدی ربات ساز :
@$un
ادمین ربات ساز :
$chat_id",
 'parse_mode'=>"HTML",
	 ]);  
}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خطایی رخ داد❌
ممکن است :
1️⃣توکن شما نادرست باشد(چک کنید).
2️⃣توکن شما مربوط به @$yourbotsaz نباشد (توکن همین ربات را ارسال نمایید).
حال دوباره توکن را ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
}
}
	 //---
	 elseif($textmessage == "🔺حذف ربات ساز🔺"){
		 if($type == "vip"){
			  $user["step"] = "deletebotsaz";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش حذف ربات ساز خوش اومدی دوست من🌹
توجه داشته باش که با حذف ربات ساز همه اعضای ربات سازت پاک میشن و ربات ساز تو از سیستم ما حذف میشه و در عوض میتونی یک ربات ساز دیگه بسازی !😄
▪️اگه قصد ادامه داری توکن ربات سازت رو برای از @BotFather ارسال کن :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
	 }else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"حساب شما در ربات ساز ویژه نمیباشد و هنوز در سیستم ما ربات سازی ثبت نکرده اید❗️",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);   
	 }
	 }
		 elseif($step == "deletebotsaz" and $textmessage != "🔙"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (file_exists("Bots/BotSaz/$un/index.php")) && $un == $yourbotsaz){
	file_get_contents("$URL/BotSazSazApi.php?token=$textmessage&id=$from_id&type=delete");
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپسس ...
ربات ساز شما با آیدی @$un با موفقیت از سیستم ما حذف شد❌
جهت ساخت ربات ساز میتوانید از طریق همین ربات اقدام کنید ...",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"ربات ساز حذف شد❗️
آیدی ربات ساز :
@$un
ادمین ربات ساز :
$chat_id",
 'parse_mode'=>"HTML",
	 ]);  
	 $vipbots = file_get_contents("data/vipbots.txt");
                    settype($vipbots,"integer");
                      $newbots = $vipbots - 1;
                       file_put_contents("data/vipbots.txt",$newbots);
	 $user["step"] = "none";
	 $user["createbot"] = "none";
	 $user["yourbotsaz"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
}else{
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"خطایی رخ داد❌
ممکن است :
1️⃣توکن شما نادرست باشد(چک کنید).
2️⃣توکن شما مربوط به @$yourbotsaz نباشد (توکن همین ربات را ارسال نمایید).
حال دوباره توکن را ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
}
}
	 //---
	 elseif($textmessage == "▪️ساخت ربات ساز▪️"){
		 if($type == "vip" and $createbot == "true"){
			 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"کاربر گرامی😃
حتی اعضای ویژه نیز نمیتوانند بیشتر از یک ربات ساز بسازند😁
شما از قبل یک ربات ساز با آیدی @$yourbotsaz ساخته اید🙂
همچنین میتوانید از بخش (حذف ربات ساز) این ربات ساز رو حذف کنید و یکی دیگه بسازید😄",
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
 'text'=>"با تشکر از خرید شما🌹
حساب شما ویژه است و میتوانید ربات ساز شخصی خود را داشته باشید✔️
🔸جهت ساخت ربات ساز شخصی خود در مرحله اول میبایست از @BotFather توکن خود را گرفته و اینجا ارسال نمایید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		}
	}else{
			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"دوست من !
حساب شما در ربات ساز ویژه نمیباشد😅
برای تست ربات ساز میتوانید از بخش (ساخت ربات رایگان) برای یک روز ربات ساز خود را بسازید😃
جهت خرید اشتراک با استفاده از دکمه (پشتیبانی)  اقدام به خرید نمایید😄
قیمت خرید اشتراک 8 هزار تومان بوده ➰
با تشکر🌟",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		}
	}
	elseif($step == "createbot" and $textmessage != "🔙"){
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
		$user["createbot"] = "true";
		$user["yourbotsaz"] = $un;
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	file_get_contents("$URL/BotSazSazApi.php?token=$textmessage&id=$from_id&type=create");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ساز شما ساخته شد✔️
آیدی ربات ساز شما :
@$un
مدیر ربات ساز :
$chat_id
چنل ما :
@$channeltag",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"ربات ساز ساخته شد❗️
نوع حساب : ویژه
آیدی ربات ساز :
@$un
ادمین ربات ساز :
$chat_id",
 'parse_mode'=>"HTML",
	 ]);  
}else{
	 $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}
	}
	//---
	elseif($textmessage == "🔸ساخت ربات رایگان🔸"){
		if($createfree != "true"){
			$user["step"] = "createfree";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به بخش ساخت ربات ساز رایگان خوش اومدی
اینجا میتونی برای یک روز ربات ساز خودت رو داشته باشی😊
فقط برای تست و ...
برای خرید اشتراک از بخش حساب ویژه اقدام کن🌟
خب حالا توکن رباتت رو از @BotFather برام ارسال کن:",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);  
		}else{
			bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شما قبلا یک بار از این بخش استفاده کردی !",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
		}
	}
	elseif($step == "createfree" and $textmessage != "🔙"){
		$userbot = json_decode(file_get_contents('https://api.telegram.org/bot'.$textmessage .'/getme'));
	$resultb = objectToArrays($userbot);
	$un = $resultb["result"]["username"];
	$ok = $resultb["ok"];
if($ok == "1" && (!file_exists("Bots/BotSaz/$un/index.php"))){
	 $freebots = file_get_contents("data/freebots.txt");
                    settype($freebots,"integer");
                      $newbots = $freebots + 1;
                       file_put_contents("data/freebots.txt",$newbots);
    	$user["step"] = "none";
		$user["createfree"] = "true";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	file_get_contents("$URL/BotSazSazApi.php?token=$textmessage&id=$from_id&type=free");
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"ربات ساز شما ساخته شد✔️
و تا فردا وقت فعال خواهد بود😃
آیدی ربات ساز شما :
@$un
مدیر ربات ساز :
$chat_id
چنل ما :
@$channeltag",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"ربات ساز ساخته شد❗️
نوع حساب : رایگان
آیدی ربات ساز :
@$un
ادمین ربات ساز :
$chat_id",
 'parse_mode'=>"HTML",
	 ]);
}else{
    $user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"اوپس !
مشکلی پیش اومد😢
احتمالا توکن خرابه یا این ربات با این آیدی قبلا ثبت شده😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]);  
}
}
//-----admin-panel-----
elseif($textmessage == "مدیریت" or $textmessage == "پنل" or $textmessage == "/panel"){
	if($chat_id == $admin ){
	bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"مدیر گرامی به پنل مدیریت ربات ساز خوش آمدید😊",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
    [['text'=>"➰آمار کلی➰"]],
	[['text'=>"🔸ویژه کردن🔸"],['text'=>"🔹لغو حساب ویژه🔹"]],
	    [['text'=>"🎗دریافت شماره کاربر🎗"]],
	[['text'=>"➰ارسال همگانی➰"],['text'=>"➰فروارد همگانی➰"]],
	   [['text'=>"🌟شارژ ربات ساز برای ساخت ربات ساز🌟"]],
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}else{
		bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"شما دسترسی به بخش مدیریت را ندارید!",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
	 ]); 
}
}
//---
elseif($chat_id == $admin and $textmessage == "➰آمار کلی➰"){	
$alluser = file_get_contents("data/members.txt");
	$alaki = explode("\n",$alluser);
    $allusers = count($alaki)-1;
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"➰تعداد کل اعضای ربات : $allusers
🔸تعداد ربات های ویژه : $vipbots
🔹تعداد ربات های رایگان : $freebots",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//---
elseif($chat_id == $admin and $textmessage == "🔸ویژه کردن🔸"){	
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
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin and $textmessage != "🔙" and $step == "set-vip-user"){
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
شناسه فرد :
$textmessage",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما با موفقیت توسط مدیران ربات ویژه شد🌹
ازین پس میتوانید ربات ساز شخصی خود را داشته باشید😃
با تشکر از خرید شما😊",
 'parse_mode'=>"HTML",
]); 
	 	 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب ویژه شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
$textmessage",
 'parse_mode'=>"HTML",
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
elseif($chat_id == $admin and $textmessage == "🔹لغو حساب ویژه🔹"){	
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
	[['text'=>"🔙"]],
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
شناسه فرد :
$textmessage",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$textmessage,
 'text'=>"حساب شما توسط مدیران ربات ساز رایگان شد😄",
 'parse_mode'=>"HTML",
]); 
 bot('sendMessage',[
 'chat_id'=>$channel_logs,
 'text'=>"حساب رایگان شد❗️
آیدی عددی :
$textmessage
ادمین ربات ساز :
$textmessage",
 'parse_mode'=>"HTML",
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
elseif($chat_id == $admin and $textmessage == "➰ارسال همگانی➰"){	
$user["step"] = "send2all";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام خود را برای ارسال همگانی ارسال نمایید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($chat_id == $admin && $step == "send2all" && $textmessage != "🔙"){ 
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
    $all_member = fopen( "data/members.txt", 'r');
	while( !feof( $all_member)) {
 	$user = fgets( $all_member);
  bot('sendMessage',[
 'chat_id'=>$user,
 'text'=>$textmessage,
 'parse_mode'=>"HTML",
  ]);
}
  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام همگانی با موفقیت به همه اعضا ارسال شد✔️",
 'parse_mode'=>"HTML",
  ]);
}
//----
elseif($chat_id == $admin and $textmessage == "➰فروارد همگانی➰"){
	$user["step"] = "f2all";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"پیام خود را برای فروارد همگانی فروارد نمایید➰",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); 
}
elseif($textmessage != "🔙" && $from_id == $admin && $step == "f2all"){
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
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
]); 
}
//---
elseif($chat_id == $admin and $textmessage == "🎗دریافت شماره کاربر🎗"){	
$user["step"] = "getnumber";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"💥برای دریافت شما کاربر آیدی عددی فرد را ارسال کنید :",
 'parse_mode'=>"HTML",
  'reply_to_message_id'=>$message_id,
    'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]); }
elseif($chat_id == $admin and $textmessage != "🔙" && $step == "getnumber"){
	if(file_exists("data/$textmessage.json")){
		$user1 = json_decode(file_get_contents("data/$textmessage.json"),true);
$number1 = $user1["number"];
bot('sendContact',[
 'chat_id'=>$admin,
 'phone_number'=>$number1,
 'first_name'=>"شماره فرد",
  'reply_to_message_id'=>$message_id,
]); 
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"شماره فرد ارسال شد😄
شناسه فرد :
$textmessage",
 'parse_mode'=>"HTML",
]);
}
}		
elseif($chat_id == $admin and $textmessage == "🌟شارژ ربات ساز برای ساخت ربات ساز🌟"){
$user["step"] = "charge";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"برای شارژ ربات ساز آیدی ربات ساز رو بدون @ ارسال کنید😄",
 'parse_mode'=>"HTML",
     'reply_markup'=>json_encode([
           'keyboard'=>[
	[['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
]);
}
elseif($chat_id == $admin and $textmessage != "🔙" && $step == "charge"){
if(file_exists("Bots/BotSaz/$textmessage/index.php")){
$user["step"] = "none";
$outjson = json_encode($user,true);
file_put_contents("data/$from_id.json",$outjson);
bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات ساز مورد نظر برای ساخت 1 عدد ربات ساز شارژ شد!",
 'parse_mode'=>"HTML",
]);
$settings = json_decode(file_get_contents("Bots/BotSaz/$textmessage/data/settings.json"),true);
$sellbotsaz = $settings["sellbotsaz"];
$new = $sellbotsaz + 1;
$settings["sellbotsaz"] = $new;
$outjson1 = json_encode($settings,true);
file_put_contents("Bots/BotSaz/$textmessage/data/settings.json",$outjson1);
}else{
  bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"ربات ساز مورد نظر یافت نشد!",
 'parse_mode'=>"HTML",
]);  
    
}
}

/*
کانال نیک سورس مرجع تخصصی سورس ربات های تلگرام
کانال ما
T.me/Nic_source
*/

}
unlink('error_log');
?>
