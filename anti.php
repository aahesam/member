<?php
/*
نوشته شده توسط
مهدی یوسفی
 تشکر از گلد دو 
*/
ob_start();
define('API_KEY','754351894:AAGmxf0RbdteseqFwDPtx-TtAIKz66l_Ux4');
//--------------------------------------------------------------------------
//فانکشن bot :
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
//---------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$textmassage = $message->text;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
mkdir("data/username.txt/$username");
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step= file_get_contents("data/$from_id/file.txt");
$owners= file_get_contents("data/$chat_id/owner.txt");
$owners2= file_get_contents("data/$chatid/owner.txt");
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$welcome= file_get_contents("data/$chat_id/welcome.txt");
$textwelcome= file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = 618055361;
$txtt = file_get_contents('data/users.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$gpnam = $update->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$locklink= file_get_contents("data/$chat_id/locklink.txt");
$lockphoto= file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit= file_get_contents("data/$chat_id/lockedit.txt");
$lockgame= file_get_contents("data/$chat_id/lockgame.txt");
$locklocation= file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact= file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio= file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice= file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker= file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin= file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument= file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo= file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif= file_get_contents("data/$chat_id/lockgif.txt");
$lockforward= file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator= file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh= file_get_contents("data/$chat_id/lockfosh.txt");
$locklink2= file_get_contents("data/$chatid/locklink.txt");
$lockphoto2= file_get_contents("data/$chatid/lockphoto.txt");
$lockedit2= file_get_contents("data/$chatid/lockedit.txt");
$lockgame2= file_get_contents("data/$chatid/lockgame.txt");
$locklocation2= file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2= file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2= file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2= file_get_contents("data/$chatid/lockaudio.txt");
$muteall2 = file_get_contents("data/$chatid/muteall2.txt");
$lockvoice2= file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2= file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2= file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2= file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2= file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2= file_get_contents("data/$chatid/lockgif.txt");
$lockforward2= file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2= file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2= file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2= file_get_contents("data/$chatid/lockfosh.txt");
$lockbots= file_get_contents("data/$chat_id/lockbots.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$floods2= file_get_contents("data/$chatid/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$flood2= file_get_contents("data/$chatid/numflood.txt");
$reply = $update->message->reply_to_message;
$text1 = $message->text;
$text = $update->inline_qurey->qurey;
$token = '754351894:AAGmxf0RbdteseqFwDPtx-TtAIKz66l_Ux4';
$stat = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chat_edit_id&user_id=".$edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
$data1 = $update->callback_query->data;
//-----------------------------------------------------------------------------------------
//فانکشن ها :
function SendMessage($chat_id, $text){
bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text,
'parse_mode'=>'MarkDown']);
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
function save($filename, $data)
{
$file = fopen($filename, 'w');
fwrite($file, $data);
fclose($file);
}
function SendPhoto($chat_id, $photo, $caption = null){
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>$caption
	]);
	}
		function SendAudio($chat_id, $audio, $caption= null){
	bot('SendAudio',[
	'chat_id'=>$chat_id,
	'audio'=>$audio,
	'caption'=>$caption
	]);
	}
	function SendDocument($chat_id, $document, $caption = null){
	bot('SendDocument',[
	'chat_id'=>$chat_id,
	'document'=>$document,
	'caption'=>$caption
	]);
	}
	function sendvoice($chat_id, $voice, $caption){
	bot('sendvoice',[
	'chat_id'=>$chat_id,
	'voice'=>$voice,
	'caption'=>$caption
	]);
	}
	function SendSticker($chat_id, $sticker){
	bot('SendSticker',[
	'chat_id'=>$chat_id,
	'sticker'=>$sticker
	]);
	}
function Forward($berekoja,$azchejaei,$kodompayam)
{
bot('ForwardMessage',[
'chat_id'=>$berekoja,
'from_chat_id'=>$azchejaei,
'message_id'=>$kodompayam
]);
}
function EditMessageText($chat_id,$message_id,$text,$parse_mode,$disable_web_page_preview,$keyboard){
  bot('editMessagetext',[
    'chat_id'=>$chat_id,
 'message_id'=>$message_id,
    'text'=>$text,
    'parse_mode'=>$parse_mode,
 'disable_web_page_preview'=>$disable_web_page_preview,
    'reply_markup'=>$keyboard
 ]);
 }
 function sendAction($chat_id, $action){
bot('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
}
//-----------------------------------------------------------------------------------------
if (!file_exists("data/$from_id/stats.txt")) {
        mkdir("data/$from_id");
        file_put_contents("data/$from_id/stats.txt","none");
        $myfile2 = fopen("Member.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
    }
 if($textmassage == '/start' && $tc == "private"){
bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به منوی ربات ضد لینک خوش امدید لطفا یکی از گزینه های منو را انتخاب کنید:",
 'parse_mode'=>"MarkDown",
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"امکانات بینظیر ربات",'callback_data'=>"a"]],
              [['text'=>"خرید برای گروه",'callback_data'=>"b"]],
			  [['text'=>'افزودن به گپ','url'=>'https://telegram.me/Zrubot?startgroup=new']],
              ]
        ])
 ]);
}
elseif($data1 == "a"){
bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"قفل دستورات و امکانات با قابلیت و دستورات فان همین حالا ربات را خریداری کنید @Poshtibani_Zedrobot",
'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"امکانات بینظیر ربات",'callback_data'=>"a"]],
              [['text'=>"خرید برای گروه",'callback_data'=>"b"]],
			  [['text'=>'افزودن به گپ','url'=>'https://telegram.me/Zrubot?startgroup=new']],
              ]
        ])
 ]);
}
elseif($data1 == "b"){
bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"برای خرید به ایدی @Poshtibani_Zedrobot پیام دهید",
 'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"امکانات بینظیر ربات",'callback_data'=>"a"]],
              [['text'=>"خرید برای گروه",'callback_data'=>"b"]],
			  [['text'=>'افزودن به گپ','url'=>'https://telegram.me/Zrubot?startgroup=new']],
              ]
        ])
 ]);
}

elseif($textmassage=="ایدی" && $tc == "supergroup"){
  
  bot('sendphoto',[
'chat_id'=>$chat_id,
'photo'=>"https://telegram.me/$user",
'caption'=>"`اسم` :  $first_name 🎗

`یوزرنیم` :  t.me/$username 👤

`ایدی عددی` :  *$from_id*  💎

`اسم گپ` :  *$gpnam*  👥",
 'parse_mode'=>"MarkDown",
	]);
	}
		elseif($textmassage=="سازنده"){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"

این ربات توسط ساخته شده است برای خرید ربات به پشتیبان ربات مراجعه کنید😊",
  'parse_mode'=>'MarkDown',
	]);
	}
if(preg_match('/^\/([Ss]ticker)/',$text1) and $reply){
    if($reply->photo){
	  $photo = $reply->photo;
      $file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('Admin/Photo-S.png',file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch));
      SendSticker($chat_id , new CURLFile('Admin/Photo.png') , "@bogifa");
    }
  }
  if(preg_match('/^\/([Pp]hoto)/',$text1) and $reply){
    if($reply->sticker){
      $file = $reply->sticker->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      file_put_contents('Admin/Sticker.png',file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch));
      SendPhoto($chat_id , new CURLFile('Admin/Sticker.png'),"This your Sticker pic♥️");
    }
  }
//---------------------------------------------------------------------------------------------------------------------------------------------
elseif($data=="settings" && $fm == $owners2){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"Group Settings:⚙️",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
 ],
  [
 ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
 ],
  [
 ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
 ],
  [
 ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
 ],
  [
 ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
 ],
  [
 ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
 ],
  [
 ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
 ],
 [
['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
],
[
['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockvideo']
],
[
['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
],
[
['text'=>"Back",'callback_data'=>'back']
],
	]
	])
	]);
	}
  elseif($data=="back" && $fm == $owners2){
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
   'text'=>"`به پنل تنظیمات ربات خوش آمدید`✅",
    'parse_mode'=>'MarkDown',
    'reply_markup'=>json_encode([
    'resize_keyboard'=>true,
    'inline_keyboard'=>[
   [
   ['text'=>"تنظیمات⚙",'callback_data'=>'settings']
   ],
    [
   ['text'=>"اطلاعات گروه👥",'callback_data'=>'groupe'],['text'=>"Help🗣",'callback_data'=>'help']
   ],
   [
['text'=>"سازنده🔥",'url'=>"https://telegram.me/bogifa"]
  ],
    ]
    ])
    ]);
    }
	  elseif($textmassage=="پنل" && $from_id == "$owners"){
  if ($tc == 'group' | $tc == 'supergroup'){
    
  	bot('sendmessage',[
  	'chat_id'=>$chat_id,
  	'text'=>"`❇به پنل تنظیمات ربات خوش آمدید`✅",
    'parse_mode'=>'MarkDown',
  	'reply_markup'=>json_encode([
  	'resize_keyboard'=>true,
  	'inline_keyboard'=>[
   [
   ['text'=>"تنظیمات⚙️",'callback_data'=>'settings']
   ],
    [
   ['text'=>"اطلاعات گروه👥",'callback_data'=>'groupe'],['text'=>"Help🗣",'callback_data'=>'help']
   ],
   [
['text'=>"سازنده🔥",'url'=>"https://telegram.me/bogifa"]
  ],
  	]
  	])
  	]);
  	}}
	    elseif($data=="groupe" && $fm == $owners2){
            bot('editmessagetext',[
                'chat_id'=>$chatid,
     'message_id'=>$messageid,
               'text'=>"اطلاعات گروه🔥
نام گروه : $gpname

ایدی گروه : $chatid

تعداد پیام های گروه تاکنون : $messageid

مدیر روه : $owners2",
               'reply_markup'=>json_encode([
                   'inline_keyboard'=>[
                     [
                     ['text'=>"Back",'callback_data'=>'back']
                     ],
                      ]
               ])
           ]);
    }
	  elseif($data=="lockphoto" && $lockphoto2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockphoto.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"برگشت",'callback_data'=>'back']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvideo" && $lockvideo2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvideo.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockgame" && $lockgame2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockgame.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✔️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locksticker" && $locksticker2=="✖️" && $fm == $owners2){
    save("data/$chatid/locksticker.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockvoice" && $lockvoice2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockvoice.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockaudio" && $lockaudio2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockaudio.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockforward" && $lockforward2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockforward.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"برگشت",'callback_data'=>'back']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"برگشت",'callback_data'=>'back']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockcontact" && $lockcontact2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockcontact.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklucton" && $locklocation2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockluction" && $locklocation2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklocation.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockfosh" && $lockfosh2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockfosh.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockoperator" && $lockoperator2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockoperator.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockedit" && $lockedit2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
    elseif($data=="lockedit" && $lockedit2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="muteall2" && $muteall2=="✔️" && $fm == $owners2){
    save("data/$chatid/muteall2.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
    elseif($data=="muteall2" && $muteall2=="✖️" && $fm == $owners2){
    save("data/$chatid/muteall2.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
				  [
				  ['text'=>"سکوت همگانی",'callback_data'=>'text'],['text'=>"$muteall2",'callback_data'=>'muteall2']
				  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
    elseif($rt && $textmassage=="/unban" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

	bot('unbanChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`ƱsεЯ ԋﾑs ცεεd ʊŋცﾑŋŋε∂`📿",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif( $textmassage == "/leave" && $from_id == $Dev){
	sendmessage($chat_id,"`¤k ɨ ℓεƒｲ ｲɦε ｇЯσʊρ`😼");
	bot('leaveChat',[
	'chat_id'=>$chat_id,
	]);
}
  elseif($data=="lockedit" && $lockedit2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockedit.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockusername" && $lockusername2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockusername.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✔️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                  	]
             ])
         ]);
  }
  elseif($data=="locklink" && $locklink2=="✖️" && $fm == $owners2){
    save("data/$chatid/locklink.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"$lockbots2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                  	]
             ])
         ]);
  }
  elseif($data=="lockbots2" && $lockbots2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"غیر فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockbots2" && $lockbots2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockbots.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"لينک",'callback_data'=>'text'],['text'=>"$locklink2",'callback_data'=>'locklink']
                   ],
                    [
                   ['text'=>"تصویر",'callback_data'=>'text'],['text'=>"$lockphoto2",'callback_data'=>'lockphoto']
                   ],
                    [
                   ['text'=>"یوزرنیم",'callback_data'=>'text'],['text'=>"$lockusername2",'callback_data'=>'lockusername']
                   ],
                    [
                   ['text'=>"ویرایش پیام",'callback_data'=>'text'],['text'=>"$lockedit2",'callback_data'=>'lockedit']
                   ],
                    [
                   ['text'=>"تبلیغات اوپراتورها",'callback_data'=>'text'],['text'=>"$lockoperator2",'callback_data'=>'lockoperator']
                   ],
                    [
                   ['text'=>"فحش",'callback_data'=>'text'],['text'=>"$lockfosh2",'callback_data'=>'lockfosh']
                   ],
                    [
                   ['text'=>"اشتراک گزاری مکان",'callback_data'=>'text'],['text'=>"$locklocation2",'callback_data'=>'lockluction']
                   ],
                    [
                   ['text'=>"اشتراک گزاری شماره",'callback_data'=>'text'],['text'=>"$lockcontact2",'callback_data'=>'lockcontact']
                   ],
                    [
                   ['text'=>"فوروارد",'callback_data'=>'text'],['text'=>"$lockforward2",'callback_data'=>'lockforward']
                   ],
                    [
                   ['text'=>"موسیقی",'callback_data'=>'text'],['text'=>"$lockaudio2",'callback_data'=>'lockaudio']
                   ],
                    [
                   ['text'=>"صدا",'callback_data'=>'text'],['text'=>"$lockvoice2",'callback_data'=>'lockvoive']
                   ],
                    [
                   ['text'=>"استیکر",'callback_data'=>'text'],['text'=>"$locksticker2",'callback_data'=>'locksticker']
                   ],
                    [
                   ['text'=>"بازی در گروه",'callback_data'=>'text'],['text'=>"$lockgame2",'callback_data'=>'lockgame']
                   ],
                   [
                  ['text'=>"فیلم",'callback_data'=>'text'],['text'=>"$lockvideo2",'callback_data'=>'lockvideo']
                  ],
                  [
                  ['text'=>"قفل ورود ربات ها",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockbots2']
                  ],
                  [
                  ['text'=>"Back",'callback_data'=>'back']
                  ],
                    ]
             ])
         ]);
  }
  elseif (strpos($textmassage, "ادمین") !== false && $from_id == $Dev) {
$owner = str_replace("ادمین ","",$textmassage);
save("data/$from_id/file.txt","none");
bot('sendMessage',[
        	'chat_id'=>$chat_id,
        	'text'=>"This User  _".$owner."_ changed To Admin✅",
		'parse_mode'=>'MarkDown'
    		]);
save("data/$chat_id/owner.txt","$owner");
}
elseif($textmassage=="انلاین" && $tc == "supergroup"){
     bot('sendphoto',[
 'chat_id'=>$chat_id,
 'photo'=>"http://uupload.ir/files/hyht_ephoto360.com-597a20b030992.jpg",
 'caption'=>"ربات انلاین می باشد 🌐",
 ]);
}
elseif(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklink == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل لیک" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل لینک گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="بازکردن قفل لینک" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklink.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل لینک گروه غیر فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->photo){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockphoto == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل عکس" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل عکس گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="باز کردن قفل عکس" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockphoto.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل عکس گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif ($textmassage == "اتوماتیک" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✔️");
save("data/$chat_id/locklink.txt","✔️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✔️");
save("data/$chat_id/lockoperator.txt","✔️");
save("data/$chat_id/lockforward.txt","✔️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✔️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✔️");
save("data/$chat_id/lockflood.txt","✔️");
save("data/$chat_id/muteall2.txt","✖️");
save("data/$chat_id/numflood.txt","3");
save("data/$chat_id/welcome.txt","خوش امدید به گروه 🀀󲀀");
SendMessage($chat_id,"`ﾑʊｲ¤ოﾑｲɨc cɦﾑŋcgε∂`⚖️");
}
}
elseif ($textmassage == "نصب" && $from_id == $Dev or $you == "creator" && $you == "administrator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/owner.txt","$from_id");
save("data/$chat_id/lockvideo.txt","✖️");
save("data/$chat_id/lockbots.txt","✖️");
save("data/$chat_id/locklink.txt","✖️");
save("data/$chat_id/lockphoto.txt","✖️");
save("data/$chat_id/lockedit.txt","✖️");
save("data/$chat_id/lockoperator.txt","✖️");
save("data/$chat_id/lockforward.txt","✖️");
save("data/$chat_id/lockaudio.txt","✖️");
save("data/$chat_id/locksticker.txt","✖️");
save("data/$chat_id/lockvoice.txt","✖️");
save("data/$chat_id/lockcontact.txt","✖️");
save("data/$chat_id/locklocation.txt","✖️");
save("data/$chat_id/lockfosh.txt","✖️");
save("data/$chat_id/lockjoin.txt","✖️");
save("data/$chat_id/lockgame.txt","✖️");
save("data/$chat_id/lockdecument.txt","✖️");
save("data/$chat_id/lockusername.txt","✖️");
save("data/$chat_id/lockflood.txt","✖️");
save("data/$chat_id/muteall2.txt","✖️");
save("data/$chat_id/numflood.txt","0");
save("data/$chat_id/welcome.txt","");
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`ربات در سوپر گروه نصب شد`💎",
  'parse_mode'=>'MarkDown',
	]);
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"*سوپر گروه به لیست گروه های ربات اضافه شد` 🌈",
  'parse_mode'=>'MarkDown',
	]);
	}
}

elseif($rt && $textmassage=="ادمین کن" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>true,
    'can_post_messages'=>true,
	'can_edit_messages'=>true,
	'can_delete_messages'=>true,
	'can_invite_users'=>true,
	'can_restrict_members'=>true,
	'can_pin_messages'=>true,
	'can_promote_members'=>true,
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`ادمین جدید با موفقیت ثبت شد`📿",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="حذف ادمین" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('promoteChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid,
    'can_change_info'=>false,
    'can_post_messages'=>false,
	'can_edit_messages'=>false,
	'can_delete_messages'=>false,
	'can_invite_users'=>false,
	'can_restrict_members'=>false,
	'can_pin_messages'=>false,
	'can_promote_members'=>false,
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`کاربر با موفقیت از لیست ادمین ها حذف شد`📿",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($update->message->gif){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgif == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل گیف" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل گیف در گروه فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="باازکردن قفل گیف" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgif.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل گیف در گروه غیرفعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->video){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل ویدیو" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل ویدیو در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل ویدیو" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvideo.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل ویدیو غیر فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}

elseif($update->message->text){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvideo == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

elseif($textmassage=="ففل همه" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✔️");
  
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"`سکوت همانی فعال شد`💥",
  'parse_mode'=>'MarkDown',
  ]);
  }
}elseif($textmassage=="بازکردن قفل همه" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/muteall2.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`سکوت همانی غیرفعال شد`💥",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$edit)){
  preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$textmassage,$match);
if ($lockedit3== "✔️"){
if ($you != "creator" && $you != "administrator"){
	bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
	}
}
}
elseif($textmassage=="قفل ویرایش" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل ویرایش پیام در روه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل ویرایش" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockedit.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل ویرایش پیام در گروه غعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->game){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockgame== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل بازی" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل بازی در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل بازی" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockgame.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل بازی درگروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->location){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locklocation== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل مکان" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل موقعیت مکان در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل مکان" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locklocation.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل موقعیت مکانی غیر فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->contact){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockcontact== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل مخاطب" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل مخاطب در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل مخاطب" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockcontact.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل مخاطب در گروه غیر فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل تگ" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل تگ در گروه فعاال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="بازکردن قفل تگ" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل تگ در گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->audio){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockaudio== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل صدا" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل صدا در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل صدا" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockaudio.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل صدا در گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->voice){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockvoice == "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل وویس" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل وویس در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل وویس" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockvoice.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل وویس در گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->sticker){
if ($tc == 'group' | $tc == 'supergroup'){
if ($locksticker== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل استیکر" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل استیکر در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل استیکر" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/locksticker.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل استیکر در گروه غیر فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->decument){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockdecument== "✔️"){
if ($status != "creator" && $status != "administrator"){

	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل فایل" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل فایل در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل فایل" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockdecument.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل فایل در گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
if($update->message->forward_from){
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockforward== "✔️"){
if ($status != "creator" && $status != "administrator"){

 bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
elseif($textmassage=="قفل فوروارد" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل فوروارد در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}elseif($textmassage=="بازکردن قفل فوروارد" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockforward.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل فوروارد در گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Operator
if(preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage)){
preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockoperator == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}

elseif($textmassage=="قفل اپراتور" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل اپراتور در گروه فعال شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="بازکردن قفل اپراتور" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockoperator.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل اپراتور غیر فعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
//Lock Fosh
elseif(preg_match("'^(کس)(.*)'",$textmassage)){
preg_match("'^(کس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کس ننت)(.*)'",$textmassage)){
preg_match("'^(کس ننت)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(بی ناموس)(.*)'",$textmassage)){
preg_match("'^(بی ناموس)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(دیوث)(.*)'",$textmassage)){
preg_match("'^(دیوث)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif(preg_match("'^(کیر)(.*)'",$textmassage)){
preg_match("'^(کیر)(.*)'",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockfosh == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل فحش" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✔️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`فحش دادن در گروه ممنوع شد`📛",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="بازکردن قفل فحش" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockfosh.txt","✖️");
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`قفل فحش در گروه غیرفعال شد`✅",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_title){
if ($tc == 'group' | $tc == 'supergroup'){
$newname = $update->message->new_chat_title;

bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`اسم گروه با موفقیت تغییر کرد`  $newname ☑️",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($update->message->new_chat_member){
if ($tc == "group" | $tc == "supergroup"){
if ($welcome == "✔️"){

bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"$textwelcome",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}
 elseif($textmassage=="/help" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"#قفل (ممنون) رسانہ⚡️

قفل

`[ لینک , تگ , استیکر , مخاطب , فایل , فوروارد , عکس , صدا , وویس , ویرایش , بازی , مکان , فحش , ورود ,گیف,  اپراتور , ویدیو , ربات ]`


#باز (رفع ممنوعیت) رسانہ⚡️

بازکردن قفل

`[ لینک , تگ , استیکر , مخاطب , رود  , فوروارد , عکس , صدا , وویس , ویرایش , بازی , مکان , فحش , ورود , گیف, اپراتور , ویدیو , ربات]`

تنظیمات (شیشہ اے)⚙️
پنل

اخراج - آزاد کاربر (ریپلے)⚔️
اخراج-ازاد

تنظیماتہ فلود (شیشہ اے)⛓
/flood manage

قفل - باز کردنہ فلود💣
قفل فلود - بازکردن قفل فلود

تنظیمہ فلود🔪
تنظیم (NUMBER)

پاکسازے گروه (۱-۱۰۰)🛠
/rem (NUMBER)

فعال - غیرفعال خوشآمدگویے🎉
فعال خوشامد - غیرفعال خوشامد

تنظیمہ پیام خوشآمدگویے🎊
تنظیم پیام خوشامد (TEXT)

تنظیمہ نام گروه📎
تنظیم نام (TEXT)

تنظیمہ توضیحات گروه🔗
تنظیم توضیحات (TEXT)

حذفہ عکس گروه🎈
حذف عکس

گذاشتنہ عڪس گروه🖼
/setphoto (ریپلے)

سنجاقہ پیام📌
پین (reply)

برداشتن سنجاق📍
انپین (reply)

دریافتہ لینڪ گروه📎
/link

دریافت اطلاعاتہ خود👤
/id

دریافتہ اطلاعات گروه👥
اطلاعات

اطلاع از آنلاینے ربات🔊
انلاین

حالتہ خودڪار⛓
اتوماتیک

دریافتہ #تاریخ در گروه(استیڪر)📆
زمان

تبدیلہ #عکس بہ #استیکر (ریپلے)🎈
/sticker

تبدیلہ #استیکر بہ #عڪس (ریپلے)🎈
/photo

ســـازنـــده ربـــــات
@bogifa",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
elseif($rt && $textmassage=="پین" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`پیام با موفقیت سنجاق شد`📌",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
  elseif($rt && $textmassage=="اخراج" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){

	bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`کاربر از گروه حذف شد`💣",
  'parse_mode'=>'MarkDown',
	]);
	}
}
elseif($textmassage=="اطلاعات" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  
	bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"`PG info`⚙️

`ایدی گپ` : $chat_id 🔗

`نام گپ` : $namegroup 🖇

`تعداد پیام ها تاکنون` : $tedadmsg ✏️

`نوع گروه` : $tc 🔥",
  'parse_mode'=>'MarkDown',
	]);
	}
 }
$users = file_get_contents('data/username.txt');
$members = explode("\n", $users);
if (!in_array($username, $members)) {
    $adduser = file_get_contents('data/username.txt');
    $adduser .=$username . "\n";
    file_put_contents('data/username.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
}elseif($textmassage=="/stats"){
                        $membersidd= explode("\n",$txtt);
                        $mmemcount = count($membersidd) -1;
                        
				bot('sendmessage',[
		'chat_id'=>$chat_id,
		'text'=>"تعداد کاربران : $mmemcount",
                'hide_keyboard'=>true,
		]);
		}elseif ($textmassage == '/send' && $from_id == $Dev) {
save("data/$from_id/file.txt","sendtoall");
         bot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'sendtoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","to");
     bot('sendmessage',[
          'chat_id'=>$memuser,        'text'=>$textmassage,
    'parse_mode'=>'MarkDown'
        ]);
    }
} elseif ($textmassage == '/forward' && $from_id == $Dev) {
save("data/$from_id/file.txt","fortoall");
         bot('sendmessage',[
        	'chat_id'=>$Dev,
        	'text'=>"لطفا متن خود را بفرستید :",
		'parse_mode'=>'MarkDown',
    		]);
}elseif ($step == 'fortoall') {
$mem = fopen( "data/users.txt", 'r');
    while( !feof( $mem)) {
    $memuser = fgets( $mem);
save("data/$from_id/file.txt","none");
Forward($memuser, $chat_id,$message_id);
    }
}
elseif ($textmassage == "امار" && $from_id == $Dev) {
    $membersidd = explode("\n", $txtt);
    $mmemcount = count($membersidd) - 1;
    
    bot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "تعداد گروه ها :\n$mmemcount",
        'hide_keyboard' => true,
    ]);
}
elseif (strpos($textmassage , "تنظیم خوشامد") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("تنظیم خوشامد","",$textmassage);
save("data/$chat_id/textwelcome.txt","$we");
SendMessage($chat_id,"`پیام خوش امدگویی تنظیم شد`🎗");
}
}
elseif (strpos($textmassage , "تنظیم فلود") !== false && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
$we = str_replace("تنظیم فلود","",$textmassage);
if ($we <= 20 && $we >= 1){
save("data/$chat_id/numflood.txt","$we");
SendMessage($chat_id,"`تعداد فلود انتخاب شد`⚔️");
}
else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"`Change Your Number To 1 -20`🔐",
              ]);
}
}
}
elseif ($textmassage == "خوشامد فعال" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✔️");
SendMessage($chat_id,"`WεŁc¤ოε εŋﾑცŁε`🎊
ƑσЯ sεｲ ʍﾑssﾑｇε
/setwelcome (TEXT)");
}
}
elseif ($textmassage == "فعالی" && $from_id == $Dev) {
rmdir("data/spam");
mkdir("data/spam");
SendMessage($chat_id,"`از قبل فعال بودم`❤️");
}
elseif ($textmassage == "قفل فلود" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✔️");
SendMessage($chat_id,"`قفل فلود در گروه فعال شد`📛");
}
}
elseif ($textmassage == "بازکردن قفل فلود" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockflood.txt","✖️");
SendMessage($chat_id,"`قفل فلود غیر فعال شد`✅");
}
}
elseif ($textmassage == "خوشامد غیرفعال" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/welcome.txt","✖️");
SendMessage($chat_id,"`خوشامد گویی ربات غیرفعال شد`❌");
}
}
elseif ($textmassage == "قفل ربات" && $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✔️");
SendMessage($chat_id,"`قفل ورود ربات در گروه فعال شد`📛");
}
}
elseif ($textmassage == "بازکردن قفل ربات" && $status == "creator") {
if ($tc == 'group' | $tc == 'supergroup'){
save("data/$chat_id/lockbots.txt","✖️");
SendMessage($chat_id,"`قفل ربات غیرفعال شد`✅");
}
}
elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbots == "✔️" && $newchatmemberu != "SPDLBot") {
 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>'ورود ربات در گروه ممنوع است🔒',
  'parse_mode'=>'HTML'
 ]);
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
elseif ( strpos($textmassage , 'تنظیم نام') !== false && $from_id == $owners) {
  $newname= str_replace("تنظیم نام","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){

 bot('setChatTitle',[
    'chat_id'=>$chat_id,
    'title'=>$newname
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"اسم گروه با موفقیت تغییر کرد $gpname ☑️",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif ( strpos($textmassage , 'تنظیم توضیحات') !== false && $from_id == $owners) {
  $newdec= str_replace("تنظیم توضیحات","",$textmassage);
if ($tc == 'group' | $tc == 'supergroup'){

 bot('setChatDescription',[
    'chat_id'=>$chat_id,
    'description'=>$newdec
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`توضیحات سوپر گروه با موفقیت تنظیم شد`❇️",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($rt && $textmassage=="انپین" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){

 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$replyid
      ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`پیام پین شده شما انپین شد`✂️",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="حذف عکس" && $from_id == $owners){
  save("data/$from_id/file.txt","setphoto");
if ($tc == 'group' | $tc == 'supergroup'){

bot('deleteChatPhoto',[
   'chat_id'=>$chat_id,
     ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`عکس سوپرگپ حذف شد`❌",
  'parse_mode'=>'MarkDown',
 ]);
 }
}
elseif($textmassage=="/link" && $from_id == $owners){
if ($tc == 'group' | $tc == 'supergroup'){
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];

bot('sendmessage',[
   'chat_id'=>$chat_id,
   'text'=>"لینک گروه :\n$getlinkde",
    'parse_mode'=>'html',
     ]);
 }
}
if(preg_match('/^\/([Ss]etphoto)/',$text1) and $reply){
    if($reply->photo){
	  $photo = $reply->photo;
      $file = $photo[count($photo)-1]->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      save("data/$from_id/file.txt","none");
    file_put_contents("Admin/photogp.png",file_get_contents("https://api.telegram.org/file/bot$token/$patch"));
bot('setchatPhoto',[
   'chat_id'=>$chat_id,
   'photo'=>new CURLFile("Admin/photogp.png")
     ]);
bot('sendmessage',[
 'chat_id'=>$chat_id,
 'text'=>"`عکس سوپرگپ با موفقیت تغیر کرد`🎈",
  'parse_mode'=>'MarkDown',
 ]);
 unlink("Admin/photogp.png");
 }
}
elseif($textmassage=="/flood manage" && $from_id == "$owners"){
if ($tc == 'group' | $tc == 'supergroup'){
  
  bot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"تنطیمات فلود بارگزاری شد.\nتوجه فلود فقط باید عددی بین 1 و 20 باشد.",
  'parse_mode'=>'MarkDown',
  'reply_markup'=>json_encode([
  'resize_keyboard'=>true,
  'inline_keyboard'=>[
 [
 ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods",'callback_data'=>'lockflood']
 ],
  [
 ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
 ],
  ]
  ])
  ]);
  }}
  elseif($data=="f-"  && $fm == $owners2){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt","$floodnew");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"انتخاب کنید :",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="f+"  && $fm == $owners2){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt","$floodne");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"انتخاب کنید :",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✖️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif($data=="lockflood" && $floods2=="✔️" && $fm == $owners2){
    save("data/$chatid/lockflood.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"فعال شد.",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"قفل فلود",'callback_data'=>'text'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'text')
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"you Are Not Admin",
]);
}
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am","",$timing);
$metti_khan = file_get_contents("data/spam/$timing-$from_id.txt");
$timing_spam = $metti_khan+1;
file_put_contents("data/spam/$timing-$from_id.txt","$timing_spam");
$metti_khan2 = file_get_contents("data/spam/$timing-$from_id.txt");
if($metti_khan2 >= $flood){
if($floods == "✔️"){
bot('KickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$from_id
    ]);
    bot('sendmessage',[
    	'chat_id'=>$chat_id,
    	'text'=>"`$first_name Removed for Flooding `⚔️",
      'parse_mode'=>'MarkDown',
    	]);

}
}
unlink("error_log");
?>
