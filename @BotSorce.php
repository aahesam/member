<?php

ob_start();

$API_KEY = '792452128:AAFsQRpkmpqZC-MEdyim6Hf-8j-nO5Nqk9c';
//========//
define('API_KEY',$API_KEY);
function SearchTikBot($method,$datas=[]){
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
 function sendmessage($chat_id, $text, $model){
	SearchTikBot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	SearchTikBot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG)
{
    SearchTikBot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
}
function sendphoto($chat_id, $photo, $action){
	SearchTikBot('sendphoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'action'=>$action
	]);
	}
	function objectToArrays($object)
    {
        if (!is_object($object) && !is_array($object)) {
            return $object;
        }
        if (is_object($object)) {
            $object = get_object_vars($object);
        }
        return array_map("objectToArrays", $object);
    }
	//====================##======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
mkdir '"data/$from_id"';
$message_id = $message->message_id;
$from_id = $message->from->id;
$text = $message->text;
$ali = 'file_get_contents'("data//ali.txt");
$ADMIN = 618055361; //آیدی عددی ادمین
//==========================================//
if($text == "/start"){

if (!file_exists("data/$from_id/ali.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/ali.txt","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
    
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام! جستجو موزیکم.\n\nمن میتونم آهنگ های دلخواهتو برات دانلود کنم و بفرستم.\nبرای اینکه بقیه دکمه هارو ببینی روی بیشتر کلیک کن تا راهنما رو بخونی.\n\n[��پشتیبانی](http://telegram.me/)\n\n[��کانال ربات](http://telegram.me/)",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
	[['text'=>"بيشتر➕"],['text'=>"جستجوی موزیک��"]],
	]
	])
	]);
	}
elseif($text == "بيشتر➕"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"به این منو خوش امدید\n\n[��پشتیبانی](http://telegram.me/)\n\n[��کانال ربات](http://telegram.me/)",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
[['text'=>"��"],['text'=>"جستجوی موزیک��"]],
	[['text'=>"اشتراک��"],['text'=>"راهنما❓"]],
	[['text'=>"موزیک های بیشتر��"],['text'=>"تبلیغات��"]],
	[['text'=>"مشکل یا پیشنهاد"],['text'=>"زبان ربات"]]
	]
	])
	]);
	}
elseif($text == "parsi"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"شما زبان فارسی را انتخاب کردید",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
[['text'=>"��"],['text'=>"جستجوی موزیک��"]],
	[['text'=>"اشتراک��"],['text'=>"راهنما❓"]],
	[['text'=>"موزیک های بیشتر��"],['text'=>"تبلیغات��"]],
	[['text'=>"مشکل یا پیشنهاد"],['text'=>"زبان ربات"]]
	]
	])
	]);
	}
elseif($text == "فارسی"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"زبان شما فارسی است",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
[['text'=>"��"],['text'=>"جستجوی موزیک��"]],
	[['text'=>"اشتراک��"],['text'=>"راهنما❓"]],
	[['text'=>"موزیک های بیشتر��"],['text'=>"تبلیغات��"]],
	[['text'=>"مشکل یا پیشنهاد"],['text'=>"زبان ربات"]]
	]
	])
	]);
	}
elseif($text == "��"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Hello Search Tranm. I can not send you any song that you want! Click to see more options for the further\n\n[��Support](http://tegegram.me/)\n\n[��Robot channel](http://telegram.me/)",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
	[['text'=>"More➕"],['text'=>"Search Lyrics��"]],
	]
	])
	]);
	}
elseif($text == "زبان ربات"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"خب برای تغییر زبان ربات یکی را انتخاب کنید.\n\nزبان فعلی ربات: فارسی",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
	[['text'=>"انگلیسی"],['text'=>"فارسی"]],
	]
	])
	]);
	}
elseif($text == "Language robot"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"لطفا زبان خود را وارد کنید. زبان پیشفرض ربات: انگلیسی",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
	[['text'=>"English"],['text'=>"parsi"]],
	]
	])
	]);
	}
elseif($text == "انگلیسی"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"زبان ربات به انگلیسی تغییر یافت.",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
[['text'=>"��"],['text'=>"serch the song��"]],
	[['text'=>"Subscription��"],['text'=>"help❓"]],
	[['text'=>"More songs��"],['text'=>"Advertising��"]],
	[['text'=>"Problem or suggestion"],['text'=>"Language robot"]]
	]
	])
	]);
	}
elseif($text == "English"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"English is your language",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
[['text'=>"��"],['text'=>"serch the song��"]],
	[['text'=>"Subscription��"],['text'=>"help❓"]],
	[['text'=>"More songs��"],['text'=>"Advertising��"]],
	[['text'=>"Problem or suggestion"],['text'=>"Language robot"]]
	]
	])
	]);
	}
elseif($text == "More➕"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"Welcome to the menu",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
[['text'=>"��"],['text'=>"serch the song��"]],
	[['text'=>"Subscription��"],['text'=>"help❓"]],
	[['text'=>"More songs��"],['text'=>"Advertising��"]],
	[['text'=>"Problem or suggestion"],['text'=>"Language robot"]]
	]
	])
	]);
	}
elseif($text == "��"){
        sendAction($chat_id, 'typing');
	SearchTikBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"سلام! جستجو موزیکم.\n\nمن میتونم آهنگ های دلخواهتو برات دانلود کنم و بفرستم.\nبرای اینکه بقیه دکمه هارو ببینی روی بیشتر کلیک کن تا راهنما رو بخونی.\n\n[��پشتیبانی](http://tegegram.me/)\n\n[��کانال ربات](http://telegram.me/)",
        'parse_mode'=>'MarkDown',
	'reply_markup'=>json_encode([
	'keyboard'=>[
	[['text'=>"بيشتر➕"],['text'=>"جستجوی موزیک��"]],
	]
	])
	]);
	}
//====================??????======================//
elseif($text == "مشکل یا پیشنهاد"){
                        sendAction($chat_id, 'typing');
			file_put_contents("data/$from_id/ali.txt","nazar");
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"خب اگه مشکل یا نظری داری من  دارم گوش میدم!\n\nخب مشکل یا پیشنهادتو بنویس.",
                 'reply_markup'=>json_encode([
	'keyboard'=>[
	[
	['text'=>"��"]
	],
	]
	])
	]);
	}elseif($ali == "nazar"){            
                    file_put_contents("data/$from_id/ali.txt","none");
                          Forward($ADMIN,$chat_id,$message_id);
			SearchTikBot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"خب نظر شما ثبت شد. به زودی بررسی میشه",
      'parse_mode'=>'MarkDown',
	]);
	}
elseif($text == "Problem or suggestion"){
                        sendAction($chat_id, 'typing');
			file_put_contents("data/$from_id/ali.txt","nazar");
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Well, if you have a problem or a comment, I'm listening. Well, it's a problem or a suggestion.",
                 'reply_markup'=>json_encode([
	'keyboard'=>[
	[
	['text'=>"��"]
	],
	]
	])
	]);
	}elseif($ali == "nazar"){            
                    file_put_contents("data/$from_id/ali.txt","none");
                          Forward($ADMIN,$chat_id,$message_id);
			SearchTikBot('sendmessage',[       
			'chat_id'=>$chat_id,
			'text'=>"Well your comment has been registered. Checked out soon",
      'parse_mode'=>'MarkDown',
	]);
	}
elseif($text == "راهنما❓"){
			file_put_contents("data/$from_id/ali.txt","music");
			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"⁉راهنمای جستجو\n\nاگر بخواهید نام و فامیل خواننده را ارسال کنید باید بین نام و فامیل از _استفاده کنید و حتما هم به انگلیسی ارسال کنید. مثلا: reza_sadeghi\n\nاگر نتیجه نگرفتید به نکات زیر توجه کنید:\n\n حتما به انگلیسی تایپ کنید.\nبه درست نوشتن اسم توجه کنید\nاگر نتیجه نگرفتید تنها فامیل خواننده را ارسال کنید مثالا: sadeghi\nیا تنها اسم خواننده را تایپ کنید��",
	]);
	}
elseif($text == "help❓"){
			file_put_contents("data/$from_id/ali.txt","music");
			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"It is sufficient to enter the families singer of songs are displayed��",
	]);
	}
elseif($text == "اشتراک��"){
 file_put_contents("data/$from_id/ali.txt","music");			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"ربات موزیک یاب فارسی. با میلیون ها موزیک!\n\n@YOURBOT_ID",
	]);
SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"اگه دوست داری میتونی  پیام بالا رو برای دوستات ارسال کنی�� ",
	]);
	}
elseif($text == "Subscription��"){
 file_put_contents("data/$from_id/ali.txt","music");			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"Robots With millions of songs and searchable song \n\n@YOURBOT_ID",
	]);
SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"If you like you can do the above message to friend �� ",
	]);
	}
elseif($text == "موزیک های بیشتر��"){
 file_put_contents("data/$from_id/ali.txt","music");			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"من جدید ترین موزیک هامو توی کانال زیر میزارم��\n\nhttp://telegram.me/",
	]);
	}
elseif($text == "More songs��"){
 file_put_contents("data/$from_id/ali.txt","music");			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"I was in my most recent song below I'll channels ��\n\nhttp://telegram.me/",
	]);
	}
elseif($text == "تبلیغات��"){
 file_put_contents("data/$from_id/ali.txt","music");			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"برای سفارش سفارش سفارش سفارش تبلیغات به یکی از id های زیر مراجعه کن��\n\n@YOURBOT_ID\n\n@",
	]);
	}
elseif($text == "Advertising��"){
 file_put_contents("data/$from_id/ali.txt","music");			                        sendAction($chat_id, 'typing');
				SearchTikBot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"To order one of the following IDs now ��\n\n@YOURBOT_ID\n\n@",
	]);
	}
//====================??????======================//
elseif($text == "/panel" && $chat_id == $ADMIN){
sendaction($chat_id, typing);
        SearchTikBot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"انتخاب کن مدیر",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [
              ['text'=>"تعداد"],['text'=>"پيام همگاني"],['text'=>"��"]
              ]
              ],'resize_keyboard'=>true
        ])
            ]);
        }
elseif($text == "تعداد" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " امار رباتت : $member_count" , "html");
}
elseif($text == "پيام همگاني" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","send");
	sendaction($chat_id,'typing');
	SearchTikBot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"متن پیام",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'/reza']],
      ],'resize_keyboard'=>true])
  ]);
}
elseif($ali == "send" && $chat_id == $ADMIN){
    file_put_contents("data/$from_id/ali.txt","no");
	SendAction($chat_id,'typing');
	SearchTikBot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"اوکی شد",
  ]);
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
//<Botsorce>//
 elseif($text == "جستجوی موزیک��"){
   file_put_contents("data/$from_id/ali.txt","music");
                           sendAction($chat_id, 'typing');
    SearchTikBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"برای جستجو��\n#تنها #فامیل خواننده رو به #انگلیسی وارد کن تا نمایش دادن بشن��",
                 'reply_markup'=>json_encode([
 'keyboard'=>[
 [
 ['text'=>"جستجو ترانه��"],['text'=>"��"]
 ],
 ]
 ])
 ]);
 }
elseif($ali == "music"){
$A = $message->text;
$ali1 = json_decode(file_get_contents("http://api.mostafa-am.ir/radio-javan/$A"));
$tik2 = objectToArrays($ali1);
$ok = $tik2['ok'];
$a1 = $tik2['Musics']['0']['Title'];
$a2 = $tik2['Musics']['0']['Photo'];
$a3 = $tik2['Musics']['0']['Url'];
$b1 = $tik2['Musics']['1']['Title'];
$b2 = $tik2['Musics']['1']['Photo'];
$b3 = $tik2['Musics']['1']['Url'];
$c1 = $tik2['Musics']['2']['Title'];
$c2 = $tik2['Musics']['2']['Photo'];
$c3 = $tik2['Musics']['2']['Url'];
$d1 = $tik2['Musics']['3']['Title'];
$d2 = $tik2['Musics']['3']['Photo'];
$d3 = $tik2['Musics']['3']['Url'];
$e1 = $tik2['Musics']['4']['Title'];
$e2 = $tik2['Musics']['4']['Photo'];
$e3 = $tik2['Musics']['4']['Url'];
file_put_contents("data/$from_id/ali.txt","no");
 sendaction($chat_id,'typing');
   SearchTikBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'صبرکن ببینم چیزی پیدا میکنم...'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬜⬜⬜⬜⬜⬜⬜⬜1'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬜⬜⬜⬜⬜⬜⬜1'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬜⬜⬜⬜⬜⬜2'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬜⬜⬜⬜⬜3'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬜⬜⬜⬜4'
 ]);
sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬛⬜⬜⬜5'
 ]);
sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬜⬜6'
 ]);
sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬛⬛8'
 ]);
 sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$a2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$a3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$b2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$b3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$c2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$c3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$d2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$d3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$e2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$e3",
  ]);
SearchTikBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'این چنتا رو پیدا کردم��'
 ]);
 }
 elseif($text == "Search Lyrics��"){
   file_put_contents("data/$from_id/ali.txt","music");
                           sendAction($chat_id, 'typing');
    SearchTikBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"Fqt_Famyl enough to search for the English reader send me to get locked his songs Kny��\n\nFor example: sadeghi",
                 'reply_markup'=>json_encode([
 'keyboard'=>[
 [
 ['text'=>"Search Lyrics��"],['text'=>"��"]
 ],
 ]
 ])
 ]);
 }
elseif($ali == "music"){
$A = $message->text;
$ali1 = json_decode(file_get_contents("http://api.mostafa-am.ir/radio-javan/$A"));
$tik2 = objectToArrays($ali1);
$ok = $tik2['ok'];
$a1 = $tik2['Musics']['0']['Title'];
$a2 = $tik2['Musics']['0']['Photo'];
$a3 = $tik2['Musics']['0']['Url'];
$b1 = $tik2['Musics']['1']['Title'];
$b2 = $tik2['Musics']['1']['Photo'];
$b3 = $tik2['Musics']['1']['Url'];
$c1 = $tik2['Musics']['2']['Title'];
$c2 = $tik2['Musics']['2']['Photo'];
$c3 = $tik2['Musics']['2']['Url'];
$d1 = $tik2['Musics']['3']['Title'];
$d2 = $tik2['Musics']['3']['Photo'];
$d3 = $tik2['Musics']['3']['Url'];
$e1 = $tik2['Musics']['4']['Title'];
$e2 = $tik2['Musics']['4']['Photo'];
$e3 = $tik2['Musics']['4']['Url'];
file_put_contents("data/$from_id/ali.txt","no");
 sendaction($chat_id,'typing');
   SearchTikBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'Wait to see what I found...'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id,
 'text'=>'⬜⬜⬜⬜⬜⬜⬜⬜1'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬜⬜⬜⬜⬜⬜⬜1'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬜⬜⬜⬜⬜⬜2'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬜⬜⬜⬜⬜3'
 ]);
 sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬜⬜⬜⬜4'
 ]);
sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬛⬜⬜⬜5'
 ]);
sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬜⬜6'
 ]);
sleep(1);
 SearchTikBot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$message_id + 1,
 'text'=>'⬛⬛⬛⬛⬛⬛⬛⬛8'
 ]);
 sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$a2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$a3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$b2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$b3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$c2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$c3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$d2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$d3",
  ]);
sleep(1);
 SearchTikBot('sendphoto',[
        'chat_id'=>$chat_id,
         'message_id'=>$message_id + 1,
    'photo'=>$e2,
     'caption'=>"@YOURBOT_ID",
  ]);
 SearchTikBot('senddocument',[
        'chat_id'=>$chat_id,
    'document'=>"$e3",
  ]);
SearchTikBot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'I found this Chnta��'
 ]);
 }

?>
