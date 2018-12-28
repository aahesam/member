<?php
chanell=> @php_sources
ad=> mahdi yousefii
ob_start();
define('token','561664948:AAGhG17ECQVOE1TRSHlXBV3446sadww');
function Naweed($method,$datas=[]){
    $url = "https://api.telegram.org/bot".token."/".$method;
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
$json = file_get_contents('php://input');
$telegram = urldecode ($json);
$results = json_decode($telegram);
include ('jdf.php');
date_default_timezone_set("Asia/Tehran");

$jadate = jdate("Y/m/d",time());
$jatime = jdate("H:i:s",time());

$myfname = file_get_contents ('data/admin/myfname.txt');
$myid = file_get_contents ('data/admin/myid.txt');
$channellink = file_get_contents ('data/admin/channellink.txt');
$myusername = file_get_contents ('data/admin/myusername.txt');
if (!file_exists('data/admin/channellink.txt') or !file_exists('data/admin/myid.txt') or !file_exists('data/admin/myfname.txt') or $channellink == "" or !file_exists('data/admin/myusername.txt')){
$channel = file_get_contents ("data/admin/channel.txt");
$me = json_decode(file_get_contents("https://api.telegram.org/bot".token."/getme"));
$myfname = $me->result->first_name;
$myid = $me->result->id;
$myusername = $me->result->username;
file_put_contents ('data/admin/myusername.txt',$myusername);
file_put_contents ('data/admin/myid.txt',$myid);
file_put_contents ('data/admin/myfname.txt',$myfname);
$channellinkk = json_decode(file_get_contents("https://api.telegram.org/bot".token."/exportChatInviteLink?chat_id=@$channel"));
$channellink = $channellinkk->result;
file_put_contents ('data/admin/channellink.txt',$channellink);
}

$update_id = $results->update_id;
$username = $results->message->from->username;
$from_id = $results->message->from->id;
$chat_id = $results->message->chat->id;
$is_bot = $results->message->from->is_bot;
$message_id = $results->message->message_id;
$textmessage = $results->message->text;
$admin = '521904214';
$chat_type = $results->message->chat->type;
$admin2 = array (521904214,521904214);
$channel_id = "-1387623910";
$forward_from_message_id = $results->message->forward_from_message_id;
$data = $results->callback_query->data;
$channel_post = $results->channel_post;
$ch_txt = $results->channel_post->text;


$ch_msg_id = $results->channel_post->message_id;
$first_name = $results->message->from->first_name;
$last_name = $results->message->from->last_name;
$from_id2 = $results->callback_query->from->id;
$chat_id2 = $results->callback_query->message->chat->id;
$message_id2 = $results->callback_query->message->message_id;
$username2 = $results->callback_query->from->username;
$callback_query_id = $results->callback_query->id;

$from_reply_id = $results->message->reply_to_message->from->id;
$from_reply_firstname = $results->message->reply_to_message->from->first_name;
$from_reply_lastname = $results->message->reply_to_message->from->last_name;


$sticker = $results->message->sticker;
$sticker_id = $results->message->sticker->file_id;

$photo = $results->message->photo;
$phone_number = $results->message->contact->phone_number;
$audio = $results->message->audio;
$document = $results->message->document;
$video = $results->message->video;
$voice = $results->message->voice;
$video_note = $results->message->video_note;
$location = $results->message->location;
$gif_id = $results->message->document->file_id;
$gif_ty = $results->message->document->mime_type;
$caption = $results->message->caption;
$video_id = $results->message->video->file_id;
$voice_id = $results->message->voice->file_id;
$zori_id = $results->message->video->file_id;

$forward_from_id = $results->message->forward_from->id;
$first_name_fwd = $results->message->forward_from->first_name;
$last_name_fwd = $results->message->forward_from->last_name;
$from_chat_id = $results->message->forward_from_chat->id;
$is_bot_fwd = $results->message->forward_from->is_bot;
$chat_type_fwd = $results->message->forward_from_chat->type;
$fwd_date = $results->message->forward_date;

$removebot= $results->message->left_chat_participant->id;

function SendMessage($chat_id,$text){
Naweed('sendMessage',[
'chat_id'=>$chat_id,
'text'=>$text]);
}
function sendAction($chat_id, $action){
Naweed('sendChataction',[
'chat_id'=>$chat_id,
'action'=>$action]);
};
function forwardMessage ($chat_id,$from_chat_id,$message_id){
	Naweed('forwardMessage',[
'chat_id'=>$chat_id,
'from_chat_id'=>$from_chat_id,
'message_id'=>$message_id]);
}
function Delfile ($fName){
	$filehh = fopen($fName, "w")or die("Unable to open file!");
	fclose ($filehh);
	unlink ($fName);
}
function deletefolder($path) { 
     if ($handle=opendir($path)) { 
       while (false!==($file=readdir($handle))) { 
         if ($file<>"." AND $file<>"..") { 
           if (is_file($path.'/'.$file))  { 
             @unlink($path.'/'.$file); 
             } 
           if (is_dir($path.'/'.$file)) { 
             deletefolder($path.'/'.$file); 
             @rmdir($path.'/'.$file); 
            } 
          } 
        } 
      } 
 }
function deleteMessage ($chat_id,$message_id){
Naweed ('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message_id
]);
}


function Ziper($folder_to_zip_path, $destination_zip_file_path){
        $rootPath = realpath($folder_to_zip_path);
        $zip = new ZipArchive();
        $zip->open($destination_zip_file_path, ZipArchive::CREATE | ZipArchive::OVERWRITE);

        $files = new RecursiveIteratorIterator(
                new RecursiveDirectoryIterator($rootPath),
                RecursiveIteratorIterator::LEAVES_ONLY
        );
        
        foreach ($files as $name => $file)
        {
                if (!$file->isDir())
                {
                        $filePath = $file->getRealPath();
                        $relativePath = substr($filePath, strlen($rootPath) + 1);
                        $zip->addFile($filePath, $relativePath);
                }
        }
        $zip->close();
}



mkdir ('data');
mkdir ('data/admin');
mkdir ('data/users');
////////////////gets//////////////////
$commanda = file_get_contents ("data/admin/commanda.txt");
$commandu = file_get_contents ("data/users/commandu.txt");
$invited = file_get_contents ("data/users/$from_id/invited.txt");
$invitecount = file_get_contents ("data/admin/invitecount.txt");
///////////////////////////////////////
if (in_array($from_id,$admin2) or in_array($from_id2,$admin2)){
   if ($textmessage == '/start' or $textmessage == 'برگشت 🔙' ){
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"به پنل مدیریت خوش آمدید.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
	   [['text'=>'فیلم💦🙈'],['text'=>'عکس🤤'],['text'=>'زوری و خشن😈💦']],
	   [['text'=>'لز توپ📛😻'],['text'=>'ایرانی🔞💧'],['text'=>'سکس الکسیس تو زندان🔞']],
	   [['text'=>'ویس سکسی😍'],['text'=>'ویس سکسی😍'],['text'=>'کم سن کون خوشگل😻🔞']],
	   [['text'=>'لز 😍💦'],['text'=>'🤤 کارتونی 💦'],['text'=>'😬 زوری خانوادگی 😍']],
	   [['text'=>'😍 زوری کیفیت بالا 😱'],['text'=>'😍 زوری کیفیت بالا 😱'],['text'=>'🔞 خفت گیری 🔞']],
	   [['text'=>'👹 لز با ساپورت 🤤'],['text'=>'😍 لز سن پایین 💦'],['text'=>'لز فول اچ دی👍🔞']],
	   [['text'=>'آمار ربات📊'],['text'=>'پشتیبان گیری 📦']],
	   [['text'=>'فوروارد همگانی 🔇'],['text'=>'پیام همگانی 🔈']],
	   [['text'=>'تعداد دعوت در vip 📍'],['text'=>'تنظیم کانال جوین 📢']],
	   ]
	   ])
	   ]);
	   file_put_contents ("data/admin/commanda.txt",'none');
   }
   if ($textmessage == 'فیلم💦🙈'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'film');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات فیلم ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن فیلم ➕'],['text'=>'حذف فیلم ➖']],
		[['text'=>'حذف همه فیلم ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'زوری و خشن😈💦'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'zori');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات ",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن ➕'],['text'=>'حذف ➖']],
		[['text'=>'حذف همه  🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'عکس🤤'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'pic');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات عکس ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن عکس ➕'],['text'=>'حذف عکس ➖']],
		[['text'=>'حذف همه عکس ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'گیف 📽'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'gif');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات گیف ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن گیف ➕'],['text'=>'حذف گیف ➖']],
		[['text'=>'حذف همه گیف ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'فایل 📂'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'file');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات فایل ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن فایل ➕'],['text'=>'حذف فایل ➖']],
		[['text'=>'حذف همه فایل ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'ویس سکسی😍'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'voice');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات ویس ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن ویس ➕'],['text'=>'حذف ویس ➖']],
		[['text'=>'حذف همه ویس ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'آمار ربات📊'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'amar');
	   sendAction ($from_id,'typing');
	   $member = file_get_contents ("data/admin/members.txt");
	   $membersss = explode(",",$member);
	   $c = count ($membersss);
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>'Markdown',
	   'text'=>"آمار ربات تا تاریخ `$jadate` و ساعت `$jatime` برابر `$c` می باشد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'فوروارد همگانی 🔇'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'fwdall');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>'Markdown',
	   'text'=>"پیام خود را فوروارد کنید.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'پیام همگانی 🔈'  and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'pmall');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>'Markdown',
	   'text'=>"پیام خود را ارسال کنید.
	   (فقط متن باشد.)",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'تنظیم کانال جوین 📢' and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'setjoinchannel');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>'Markdown',
	   'text'=>"ایدی کانال خود را بدون @ وارد کنید.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'تعداد دعوت در vip 📍' and $commanda == 'none'){
	   file_put_contents ("data/admin/commanda.txt",'setinvitecount');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>'Markdown',
	   'text'=>"تعداد اعضای مورد نظر که شخص برای VIP شدن باید دعوت کند را وارد کنید.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == 'پشتیبان گیری 📦' and $commanda == 'none'){
	   Ziper ('data','backup.zip');
	   sendAction ($from_id,'typing');
	  	Naweed ('sendDocument',[
		'chat_id'=>$from_id,
		'document'=>new CURLFile('backup.zip'),
		'caption'=>'کل دیتای ربات 👆🏻👆🏻',
		'reply_markup'=>json_encode([
		'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']]
		]
		])
		]);
		unlink ('backup.zip');
   }
   /////////////////////*****************//////////////////////
	if ($commanda == 'film'){
		if ($textmessage == 'افزودن فیلم ➕'){
		file_put_contents ("data/admin/commanda.txt",'addfilm');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"فیلم هارا ارسال کنید و سپس دکمه برگشت به تنظیمات فیلم را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات فیلم 🎥']]
	   ]
	   ])
	   ]);
		}elseif($textmessage == 'حذف فیلم ➖'){
		file_put_contents ("data/admin/commanda.txt",'remfilm');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"فیلم هایی که می خواهید حذف شوند را ارسال کنید و سپس تنظیمات فیلم را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات فیلم 🎥']]
	   ]
	   ])
	   ]);	
		}elseif($textmessage == 'حذف همه فیلم ها 🔴'){
		file_put_contents ("data/admin/commanda.txt",'remfilmall');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"آیا مطمئن هستید تمام فیلم های ذخیره شده پاک شود؟",
	    'reply_markup'=>json_encode([
	    'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'remfilmall'],['text'=>'نه 👎🏻','callback_data'=>'nremfilmall']]
	   ]
	   ])
	   ]);	
		}
	}elseif ($commanda == 'zori'){
		if ($textmessage == 'افزودن ➕'){
		file_put_contents ("data/admin/commanda.txt",'addzori');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"محتویات مورد نظرا ارسال کنید و سپس دکمه برگشت به تنظیمات را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات']]
	   ]
	   ])
	   ]);
		}elseif($textmessage == 'حذف ➖'){
		file_put_contents ("data/admin/commanda.txt",'remzori');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>" محتویات هایی که می خواهید حذف شوند را ارسال کنید و سپس تنظیمات را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات']]
	   ]
	   ])
	   ]);	
		}elseif($textmessage == 'حذف همه  🔴'){
		file_put_contents ("data/admin/commanda.txt",'remzoriall');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"آیا مطمئن هستید تمام محتویات ذخیره شده پاک شود؟",
	    'reply_markup'=>json_encode([
	    'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'remzoriall'],['text'=>'نه 👎🏻','callback_data'=>'nremzoriall']]
	   ]
	   ])
	   ]);
		}
	}elseif ($commanda == 'pic'){
		if ($textmessage == 'افزودن عکس ➕'){
		file_put_contents ("data/admin/commanda.txt",'addpic');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"عکس  هارا ارسال کنید و سپس دکمه برگشت به تنظیمات عکس را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات عکس 🖼']]
	   ]
	   ])
	   ]);
		}elseif($textmessage == 'حذف عکس ➖'){
		file_put_contents ("data/admin/commanda.txt",'rempic');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"عکس هایی که می خواهید حذف شوند را ارسال کنید و سپس تنظیمات عکس را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات عکس 🖼']]
	   ]
	   ])
	   ]);	
		}elseif($textmessage == 'حذف همه عکس ها 🔴'){
		file_put_contents ("data/admin/commanda.txt",'rempicall');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"آیا مطمئن هستید تمام عکس های ذخیره شده پاک شود؟",
	    'reply_markup'=>json_encode([
	    'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'rempicall'],['text'=>'نه 👎🏻','callback_data'=>'nrempicall']]
	   ]
	   ])
	   ]);
		}
	}elseif ($commanda == 'gif'){
		if ($textmessage == 'افزودن گیف ➕'){
		file_put_contents ("data/admin/commanda.txt",'addgif');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"گیف ها را ارسال کنید و سپس دکمه برگشت به تنظیمات گیف را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات گیف 📽']]
	   ]
	   ])
	   ]);
		}elseif($textmessage == 'حذف گیف ➖'){
		file_put_contents ("data/admin/commanda.txt",'remgif');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"گیف هایی که می خواهید حذف شوند را ارسال کنید و سپس تنظیمات گیف را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات گیف 📽']]
	   ]
	   ])
	   ]);	
		}elseif($textmessage == 'حذف همه گیف ها 🔴'){
		file_put_contents ("data/admin/commanda.txt",'remgifall');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"آیا مطمئن هستید تمام گیف های ذخیره شده پاک شود؟",
	    'reply_markup'=>json_encode([
	    'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'remgifall'],['text'=>'نه 👎🏻','callback_data'=>'nremgifall']]
	   ]
	   ])
	   ]);	
		}
	}elseif ($commanda == 'file'){
		if ($textmessage == 'افزودن فایل ➕'){
		file_put_contents ("data/admin/commanda.txt",'addfile');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"فایل ها را ارسال کنید و سپس دکمه برگشت به تنظیمات فایل را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات فایل 📂']]
	   ]
	   ])
	   ]);
		}elseif($textmessage == 'حذف فایل ➖'){
		file_put_contents ("data/admin/commanda.txt",'remfile');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"فیلم هایی که می خواهید حذف شوند را ارسال کنید و سپس تنظیمات فیلم را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات فایل 📂']]
	   ]
	   ])
	   ]);	
		}elseif($textmessage == 'حذف همه فایل ها 🔴'){
		file_put_contents ("data/admin/commanda.txt",'remfileall');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"آیا مطمئن هستید تمام فایل های ذخیره شده پاک شود؟",
	    'reply_markup'=>json_encode([
	    'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'remfileall'],['text'=>'نه 👎🏻','callback_data'=>'nremfileall']]
	   ]
	   ])
	   ]);	
		}
	}elseif ($commanda == 'voice'){
		if ($textmessage == 'افزودن ویس ➕'){
		file_put_contents ("data/admin/commanda.txt",'addvoice');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"ویس ها را ارسال کنید و سپس دکمه برگشت به تنظیمات ویس را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات ویس 🎶']]
	   ]
	   ])
	   ]);
		}elseif($textmessage == 'حذف ویس ➖'){
		file_put_contents ("data/admin/commanda.txt",'remvoice');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"ویس هایی که می خواهید حذف شوند را ارسال کنید و سپس تنظیمات ویس را بزنید.",
	    'reply_markup'=>json_encode([
	    'resize_keyboard'=>true,
	    'one_time_keyboard'=>true,
	    'keyboard'=>[
		[['text'=>'برگشت به تنظیمات ویس 🎶']]
	   ]
	   ])
	   ]);	
		}elseif($textmessage == 'حذف همه ویس ها 🔴'){
		file_put_contents ("data/admin/commanda.txt",'remvoiceall');
		sendAction ($from_id,'typing');
	  	Naweed ('sendMessage',[
	    'chat_id'=>$from_id,
	    'parse_mode'=>'Markdown',
	    'text'=>"آیا مطمئن هستید تمام ویس های ذخیره شده پاک شود؟",
	    'reply_markup'=>json_encode([
	    'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'remvoiceall'],['text'=>'نه 👎🏻','callback_data'=>'nremvoiceall']]
	   ]
	   ])
	   ]);	
		}
	}
   if ($textmessage == "برگشت به تنظیمات فیلم 🎥"){
	   file_put_contents ("data/admin/commanda.txt",'film');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات فیلم ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن فیلم ➕'],['text'=>'حذف فیلم ➖']],
		[['text'=>'حذف همه فیلم ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == "برگشت به تنظیمات"){
	   file_put_contents ("data/admin/commanda.txt",'pic');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات عکس ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن ➕'],['text'=>'حذف ➖']],
		[['text'=>'حذف همه  🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == "برگشت به تنظیمات عکس 🖼"){
	   file_put_contents ("data/admin/commanda.txt",'pic');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات عکس ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن عکس ➕'],['text'=>'حذف عکس ➖']],
		[['text'=>'حذف همه عکس ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == "برگشت به تنظیمات گیف 📽"){
	   file_put_contents ("data/admin/commanda.txt",'gif');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات گیف ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن گیف ➕'],['text'=>'حذف گیف ➖']],
		[['text'=>'حذف همه گیف ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == "برگشت به تنظیمات فایل 📂"){
	  file_put_contents ("data/admin/commanda.txt",'file');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات فایل ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن فایل ➕'],['text'=>'حذف فایل ➖']],
		[['text'=>'حذف همه فایل ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }elseif ($textmessage == "برگشت به تنظیمات ویس 🎶"){
	  file_put_contents ("data/admin/commanda.txt",'voice');
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"بخش تنظیمات ویس ها",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
	   'one_time_keyboard'=>true,
	   'keyboard'=>[
		[['text'=>'افزودن ویس ➕'],['text'=>'حذف ویس ➖']],
		[['text'=>'حذف همه ویس ها 🔴']],
		[['text'=>'برگشت 🔙']]
	   ]
	   ])
	   ]);
   }

 //////////////////////////////////////////////////////////////////////////  
   if ($commanda == 'addfilm'){
	   if (isset($video_id)){
		   mkdir ("data/admin/media");
		   $film = file_get_contents ("data/admin/media/film.txt");
		   $films = explode (',',$film);
			if (!in_array($video_id,$films)){
		   $filmss = file_get_contents ("data/admin/media/film.txt");
		   $filmss .= $video_id.",";
			file_put_contents('data/admin/media/film.txt',$filmss);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت افزوده شد فیلم بعدی را ارسال کنید تا افزوده شود یا دکمه برگشت به تنظیمات فیلم را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فیلم 🎥",]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'remfilm'){
	    if (isset($video_id)){
		   $film = file_get_contents ("data/admin/media/film.txt");
		   $films = explode (',',$film);
			if (in_array($video_id,$films)){
		   $filmss = file_get_contents ("data/admin/media/film.txt");
		   $filmss = str_replace($video_id.",","",$filmss);
			file_put_contents('data/admin/media/film.txt',$filmss);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت حذف شد فیلم بعدی را ارسال کنید تا حذف شود یا دکمه برگشت به تنظیمات فیلم را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فیلم 🎥",]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'addzori'){
	   if (isset($zori_id)){
		   mkdir ("data/admin/media");
		   $zori = file_get_contents ("data/admin/media/zori.txt");
		   $zoris = explode (',',$zori);
			if (!in_array($zori_id,$zoris)){
		   $zoriss = file_get_contents ("data/admin/media/zori.txt");
		   $zoriss .= $zori_id.",";
			file_put_contents('data/admin/media/zori.txt',$zoriss);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت افزوده شد فیلم بعدی را ارسال کنید تا افزوده شود یا دکمه برگشت به تنظیمات فیلم را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فیلم 🎥",]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'remzori'){
	    if (isset($zori_id)){
		   $zori = file_get_contents ("data/admin/media/zori.txt");
		   $zoris = explode (',',$zori);
			if (in_array($video_id,$films)){
		   $zoriss = file_get_contents ("data/admin/media/zori.txt");
		   $zoriss = str_replace($zori_id.",","",$zoriss);
			file_put_contents('data/admin/media/zori.txt',$zoriss);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت حذف شد فیلم بعدی را ارسال کنید تا حذف شود یا دکمه برگشت به تنظیمات فیلم را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فیلم 🎥",]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'addpic'){
	   if (is_array($photo)){
		   mkdir ("data/admin/media");
		   $count = count ($photo) - 1;
		   $photo_id = $photo[$count]->file_id;
		   $pic = file_get_contents ("data/admin/media/pic.txt");
		   $pics = explode (',',$pic);
			if (!in_array($photo_id,$pics)){
		   $picss = file_get_contents ("data/admin/media/pic.txt");
		   $picss .= $photo_id.",";
			file_put_contents('data/admin/media/pic.txt',$picss);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت افزوده شد عکس بعدی را ارسال کنید تا افزوده شود یا دکمه برگشت به تنظیمات عکس را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات عکس 🖼",]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'rempic'){
	    if (is_array($photo)){
		   $count = count ($photo) - 1;
		   $photo_id = $photo[$count]->file_id;
		   $pic = file_get_contents ("data/admin/media/pic.txt");
		   $pics = explode (',',$pic);
			if (in_array($photo_id,$pics)){
		   $picss = file_get_contents ("data/admin/media/pic.txt");
		   $pics = str_replace($photo_id.",","",$picss);
			file_put_contents('data/admin/media/pic.txt',$pics);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت حذف شد عکس بعدی را ارسال کنید تا حذف شود یا دکمه برگشت به تنظیمات عکس را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات عکس 🖼",]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'addgif'){
	  if ($gif_ty == 'video/mp4'){
		    mkdir ("data/admin/media");
			$gif = file_get_contents('data/admin/media/gif.txt');
			$gifs = explode(",",$gif);
			if (!in_array($gif_id,$gifs)){
			$add_gif = file_get_contents('data/admin/media/gif.txt');
			$add_gif .= $gif_id.",";
			file_put_contents('data/admin/media/gif.txt',$add_gif);
			}
			sendAction($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"با موفقیت افزوده شد گیف بعدی را ارسال کنید تا افزوده شود یا دکمه برگشت به تنظیمات گیف را بزنید.",
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات گیف 📽"]]
			]
			])
			]);
		}
   }elseif ($commanda == 'remgif'){
	   if ($gif_ty == 'video/mp4'){
			$gif = file_get_contents('data/admin/media/gif.txt');
			$gifs = explode(",",$gif);
			if (in_array($gif_id,$gifs)){
			$add_gif = file_get_contents('data/admin/media/gif.txt');
			$add_gif = str_replace($gif_id.",","",$add_gif);
			file_put_contents('data/admin/media/gif.txt',$add_gif);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت حذف شد گیف بعدی را ارسال کنید تا حذف شود یا دکمه برگشت به تنظیمات گیف را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات گیف 📽"]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'addfile'){
	  if (isset($gif_id)){
		    mkdir ("data/admin/media");
			$file = file_get_contents('data/admin/media/file.txt');
			$files = explode(",",$file);
			if (!in_array($gif_id,$files)){
			$add_gif = file_get_contents('data/admin/media/file.txt');
			$add_gif .= $gif_id.",";
			file_put_contents('data/admin/media/file.txt',$add_gif);
			}
			sendAction($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"با موفقیت افزوده شد فایل بعدی را ارسال کنید تا افزوده شود یا دکمه برگشت به تنظیمات فایل را بزنید.",
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فایل 📂"]]
			]
			])
			]);
		}
   }elseif ($commanda == 'remfile'){
	   if (isset($gif_id)){
			$file = file_get_contents('data/admin/media/file.txt');
			$files = explode(",",$file);
			if (in_array($gif_id,$files)){
			$add_gif = file_get_contents('data/admin/media/file.txt');
			$add_gif = str_replace($gif_id.",","",$add_gif);
			file_put_contents('data/admin/media/file.txt',$add_gif);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت حذف شد فایل بعدی را ارسال کنید تا حذف شود یا دکمه برگشت به تنظیمات فایل را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فایل 📂"]]
			]
			])
			]);
	   }
   }elseif ($commanda == 'addvoice'){
	  if (isset($voice_id)){
		    mkdir ("data/admin/media");
			$voice = file_get_contents('data/admin/media/voice.txt');
			$voices = explode(",",$voice);
			if (!in_array($voice_id,$voices)){
			$add_voice = file_get_contents('data/admin/media/voice.txt');
			$add_voice .= $voice_id.",";
			file_put_contents('data/admin/media/voice.txt',$add_voice);
			}
			sendAction($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"با موفقیت افزوده شد ویس بعدی را ارسال کنید تا افزوده شود یا دکمه برگشت به تنظیمات ویس را بزنید.",
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات ویس 🎶"]]
			]
			])
			]);
		}
   }elseif ($commanda == 'remvoice'){
	   if (isset($voice_id)){
			$voice = file_get_contents('data/admin/media/voice.txt');
			$voices = explode(",",$voice);
			if (in_array($voice_id,$voices)){
			$add_voice = file_get_contents('data/admin/media/voice.txt');
			$add_voice = str_replace($voice_id.",","",$add_voice);
			file_put_contents('data/admin/media/voice.txt',$add_voice);
			}
			sendAction ($chat_id,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>'با موفقیت حذف شد ویس بعدی را ارسال کنید تا حذف شود یا دکمه برگشت به تنظیمات ویس را بزنید.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات ویس 🎶"]]
			]
			])
			]);
	   }
   }
   
   
   //////////////////////////////////////////////////////////////////////////////
   if ($data == "remfilmall"){
	   file_put_contents("data/admin/media/film.txt","");
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'تمامی فیلم ها حذف شدند',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فیلم 🎥"]]
			]
			])
			]);
   }elseif ($data == "remzoriall"){
	   file_put_contents("data/admin/media/zori.txt","");
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'تمامی فیلم ها حذف شدند',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فیلم 🎥"]]
			]
			])
			]);
   }elseif ($data == "rempicall"){
	   file_put_contents("data/admin/media/pic.txt",'');
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'همه عکس ها حذف شدند.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات عکس 🖼"]]
			]
			])
			]);
   }elseif ($data == "remgifall"){
	   file_put_contents("data/admin/media/gif.txt","");
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'همه گیف ها حذف شدند.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات گیف 📽"]]
			]
			])
			]);
   }elseif ($data == "remfileall"){
	   file_put_contents("data/admin/media/file.txt","");
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'همه فایل ها حذف شدند.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات فایل 📂"]]
			]
			])
			]);
   }elseif ($data == "remvoiceall"){
	   file_put_contents("data/admin/media/voice.txt","");
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'همه پیس ها حذف شدند.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>"برگشت به تنظیمات ویس 🎶"]]
			]
			])
			]);
   }
   if ($data == "nremfilmall"){
			sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'چیزی پاک نشد.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'برگشت 🔙']]
			]
			])
			]);
   }elseif ($data == "nremzoriall"){
			sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'چیزی پاک نشد.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'برگشت 🔙']]
			]
			])
			]);
   }elseif ($data == "nrempicall"){
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'چیزی پاک نشد.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'برگشت 🔙']]
			]
			])
			]);
   }elseif ($data == "nremgifall"){
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'چیزی پاک نشد.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'برگشت 🔙']]
			]
			])
			]);
   }elseif ($data == "nremfileall"){
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'چیزی پاک نشد.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'برگشت 🔙']]
			]
			])
			]);
   }elseif ($data == "nremvoiceall"){
	   sendAction ($chat_id2,'typing');
			Naweed('sendMessage',[
			'chat_id'=>$chat_id2,
			'text'=>'چیزی پاک نشد.',
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>true,
			'keyboard'=>[
			[['text'=>'برگشت 🔙']]
			]
			])
			]);
   }
   

   if ($commanda == "fwdall"){
	  file_put_contents ("data/admin/commanda.txt","none");
	  file_put_contents ('data/admin/msgid.txt',$message_id);
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'reply_to_message_id'=>$message_id,
	   'text'=>"این پیام فوروارد شود؟",
	   'reply_markup'=>json_encode([
	   'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'fwdall'],['text'=>'نه 👎🏻','callback_data'=>'nfwdall']]
	   ]
	   ])
	   ]);
   }
   if ($data == 'fwdall'){
		  $member = file_get_contents ('data/admin/members.txt');
		  $members = explode (",",$member);
		  $msgid = file_get_contents ('data/admin/msgid.txt');
		  	foreach ($members as $chats){
			forwardMessage ($chats,$from_id2,$msgid);	
			}
			Delfile ("data/admin/msgid.txt");
		sendAction ($from_id2,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id2,
	   'text'=>"به همه فوروارد شد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
		file_put_contents ("data/admin/commanda.txt","none");
	  }elseif ($data == 'nfwdall'){
		sendAction ($from_id2,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id2,
	   'text'=>"چیزی فوروارد نشد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
		Delfile ("data/admin/msgid.txt");
		file_put_contents ("data/admin/commanda.txt","none");
	  }
   
   
   if ($commanda == "pmall" and $textmessage != 'برگشت 🔙'){
	   file_put_contents ("data/admin/msg.txt",$textmessage);
	   file_put_contents ("data/admin/commanda.txt","none");
	   sendAction ($from_id,'typing');
	   Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'reply_to_message_id'=>$message_id,
	   'text'=>"این پیام ارسال شود؟",
	   'reply_markup'=>json_encode([
	   'inline_keyboard'=>[
		[['text'=>'آره 👍🏻','callback_data'=>'pmall'],['text'=>'نه 👎🏻','callback_data'=>'npmall']]
	   ]
	   ])
	   ]);
   }
   
   if ($data == 'pmall'){
		  $member = file_get_contents ('data/admin/members.txt');
		  $members = explode (",",$member);
		  $msg = file_get_contents ("data/admin/msg.txt");
		  	foreach ($members as $chats){
			sendMessage ($chats,$msg);	
			}
			Delfile ("data/admin/msg.txt");
		sendAction ($from_id2,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id2,
	   'text'=>"به همه ارسال شد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
		file_put_contents ("data/admin/commanda.txt","none");
	  }elseif ($data == 'npmall'){
		sendAction ($from_id2,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id2,
	   'text'=>"چیزی ارسال نشد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
		Delfile ("data/admin/msg.txt");
		file_put_contents ("data/admin/commanda.txt","none");
	  }
   
   
   
   if ($commanda == "setjoinchannel" and $textmessage != 'برگشت 🔙'){
	   file_put_contents ("data/admin/commanda.txt","none");
	   file_put_contents ("data/admin/channel.txt",$textmessage);
	   sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"کانال :
	   @$textmessage
	   به عنوان کانال جوین اجباری ثبت شد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
	   
   }elseif ($commanda == "setinvitecount"){
	   if (is_numeric ($textmessage)){
	   file_put_contents ("data/admin/commanda.txt","none");
	   file_put_contents ("data/admin/invitecount.txt",$textmessage);
	   sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>"Markdown",
	   'text'=>"تعداد اعضا برای VIP شدن روی `$textmessage` تنظیم شد.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
	   }else{
		  sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>"Markdown",
	   'text'=>"لطفا یک عدد وارد کنید.",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'برگشت 🔙']],
		]
		])
		]);
	   }
   }
   
   
   
   
/*
debug
debug
debug
debug
debug
debug
debug
debug
debug

*/
}else{
	mkdir ("data/users/$from_id");
	if (strpos($textmessage,"/start ")!== false){
		$textmessage = str_replace ("/start ","",$textmessage);
		$invitedd = file_get_contents ("data/users/$textmessage/invited.txt");
		$added = file_get_contents ("data/users/$textmessage/added.txt");
		$addeds = explode (",",$added);
		if (!in_array($from_id,$addeds)){
			$member = file_get_contents ("data/users/$textmessage/added.txt");
			$nmember = $member.$from_id.",";
			file_put_contents("data/users/$textmessage/added.txt",$nmember);
		file_put_contents ("data/users/$textmessage/invited.txt",$invitedd+1);
		sendMessage ($textmessage,"یک نفر با لینک شما وارد ربات شد.");
		
	}
		
	}
	$member = file_get_contents ('data/admin/members.txt');
	$members = explode (",",$member);
	if (!in_array($from_id,$members)){
		$member = file_get_contents ('data/admin/members.txt');
		$nmember = $member.$from_id.",";
		file_put_contents('data/admin/members.txt',$nmember);
		
	}
	$channel = file_get_contents ("data/admin/channel.txt");
	$fch = 'https://api.telegram.org/bot'.token.'/getChatMember?chat_id=@'.$channel.'&user_id='.$from_id;
	$t = json_decode(file_get_contents($fch));
	$tch = $t->result->status;
	$fch2 = 'https://api.telegram.org/bot'.token.'/getChatMember?chat_id=@'.$channel.'&user_id='.$from_id2;
	$t2 = json_decode(file_get_contents($fch2));
	$tch2 = $t2->result->status;
	if ($data == "testjoin"){
		if ($tch2 != "creator" and $tch2 != "administrator" and $tch2 != "member"){
			Naweed ('answerCallbackQuery',[
	   'callback_query_id'=>$callback_query_id,
	   'text'=>"شما عضو کانال @$channel نشده اید.",
	   'show_alert'=>true,
		]);
		}else{
		mkdir ("data/users/$from_id");
		sendAction ($from_id2,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id2,
	   'parse_mode'=>"Markdown",
		'text'=>"✨به ربات فیلم و سریال 🔞خوش امدید",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>true,
		'keyboard'=>[
		[['text'=>'🚷فیلم سکسی🔞'],['text'=>'👙 جدید 😍💦']],
		[['text'=>'👙 بخش ویژه 💦']],
		]
		])
		]);
	}}
	if ($tch != "creator" and $tch != "administrator" and $tch != "member"){
		sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'text'=>"سلام خدمت شما کاربر گرامی $first_name
اول در کانال زیر عضو شید سپس بر روی دکمه عضو شدم کلیک کنید😄🌹
ایدی کانال:
@$channel
لینک کانال:
$channellink
 عضو شوید تا بتوانید از ربات استفاده کنید.
⚠️ بعد از عضو شدن بزن رو دکمه عضو شدم",
	   'reply_markup'=>json_encode([
		'inline_keyboard'=>[
		[['text'=>'عضو شدن در کانال 📢','url'=>$channellink]],
		[['text'=>'عضو شدم ✅','callback_data'=>"testjoin"]]
		]
		])
		]);
	}else{
		if ($textmessage == "/start" || $textmessage == "↩️ برگشت"){
		sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>"Markdown",
		'text'=>"✨به ربات فیلم و سریال 🔞خوش امدید",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>false,
		'keyboard'=>[
		[['text'=>'🚷فیلم سکسی🔞'],['text'=>'👙 جدید 😍💦']],
		[['text'=>'👙 بخش ویژه 💦']],
		]
		])
		]);
		}
		elseif ($textmessage == "👙 بخش ویژه 💦" || $textmessage == "↩️ برگشت"){
		sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>"Markdown",
		'text'=>"👙 برای ورود به بخش ویژه روی دریافت بنر بزنید و بنر برای چند نفر بفرستید تا این بخش فعال شود 💦💦💦",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>false,
		'keyboard'=>[
		[['text'=>'📛دریافت بنر📛'],['text'=>'ورود به vip 🖥']],
		[['text'=>'↩️ برگشت']],
		]
		])
		]);
		}
		elseif ($textmessage == "🚷فیلم سکسی🔞"){
		sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>"Markdown",
		'text'=>"انتخاب کن عشقم 😍💦",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>false,
		'keyboard'=>[
		[['text'=>'🤤 کارتونی 💦']],
		[['text'=>'😬 زوری خانوادگی 😍'],['text'=>'😬 زوری خانوادگی 😍']],
		[['text'=>'🔞 خفت گیری 🔞'],['text'=>'😻 تجاوز سرباز 🙀']],
		[['text'=>'👹 لز با ساپورت 🤤'],['text'=>'😍 لز سن پایین 💦']],
		[['text'=>'لز فول اچ دی👍🔞'],['text'=>'لز توپ📛😻']],
		[['text'=>'↩️ برگشت'],
		]
		]])
		]);
		}
		elseif($textmessage == "داستان صکصی😋"){
			sendMessage($chat_id, "به گا رفتن کون زن عمو 
سلام به همه یه داستان دارم که واقعی هستش دوست داشتم براتون تعریف کنم چن سال پیش بود این ماجرا من چنتا عمو داشتم که همگی شر و خلافکار یکی از عموهام زندان بود و زن عموی بیچارم تنها شده بود و این زن عموم دختر خاله خودم هم بود یه عموی دیگه هم داشتم از اون عوضیا اونم خلاف میکرد که گیر افتاد و به بابام پیغام داد که یه کاری براش انجام بده پای مرگ و زندگی وسطه بابام گفت چیه جریان گفت فقط بره رم گوشی که تو خونه مادر بزرگم داشت رو نابود کنه و کسی اونه نبینه من مشکوک شدم به جریانو سریع رفتم خونه مادربزرگم و گوشی رو برداشتم رمشو عوض کردم اومدم خونه بابام رفته بود رم رو که من عوض کرده بودم رو شکسته بود رمو که اورده بودم رو تو گوشی گذاشتم دیدم بله چه خبره عمو کوچیکه که اسمش ناصره داره زن عمو محمد رو که زندان بودش رو میکنه که دختر خاله خودمه و قابمکی فیلم گرفته فکر شیطانی اومد سراغم دخترخالم هم که زن عموم باشه اسمش فاطمه هستش خدایی خوش کسو کون بود و تو فیلم هم فقط از کون داده بود زن عمو فاطی تو خونه مادربزرگم زندگی میکرد با بدبختی شب رفتم اونجا شامو خوردم به بهانه عرشیا پسر عموم که کوچولوبود رفتم تو اتاقشون و دیدم عرشیا خوابه فاطی هم با یه تیشرتو وشلوار تنگه بهش گفتم جریان اونو میدونم باید به منم بده زیر بار نمیرفت گفتم بلوتوث رو روشن تا بهت بگم اونم روشن کرد و کلیپو براش فرستادم داشت سکته میکرد خواشو تمنا که پاکش کنم منم شرطمو گفتم و قبول کرد و قرار شد همه خابیدن برم تو اتاقش به خونه زنگ زدمو گفتم خونه مادر جون میمونم اونهاهم چیزی نگفتن چون زیاد میموندم اونجا یه قرص تاخیری انداختمو با کرم پریدم تو اتاقش در باز بود دیدم لخت لخته اماده دادن گفتم چه کسو کونی بکنم من امشب تاق باز خابوندمش و اومدم بزارم تو کسش گفت نه فقط کون گفتم چرا اخه زنا از کون دوست ندارن که گفت از کس دردم میاد عموت فقط از کون میکنه و کسم رو دست نمیزنه فقط تو این چن سال سه چهار بار از جلو کرده مثل شما که میخونید شاید باورتون نشه منم باورم نشد ولی گفتم بزار از جلو هم بکنم بااصرار قبول کرد تو نمیرفت با زور و تف و فشار دادم تو فقط داشت زجر میکشید و منم بیخیال شدم و در اوردم بایه تف دیگه تو کونش کردم راحت رفت تو و ده بیست دقیقه البته با کمک اون قرص کونشو گاییدم و ابمو ریختم توش و تا صبح یکی دوبار دیگه کردم قول گرفت به کسی نگم و بعد اونم چن بار دیگه تا عموم از زندان بیاد گاییدم ولی برام جالب بود که کس نمیتونست بده ولی کون رو براحتی میداد باتشکر از بر و بچ شهوانی");
		}
		elseif ($textmessage == "👙 جدید 😍💦"){
		sendAction ($from_id,'typing');
		Naweed ('sendMessage',[
	   'chat_id'=>$from_id,
	   'parse_mode'=>"Markdown",
		'text'=>"انتخاب کن عشقم 😍💦",
	   'reply_markup'=>json_encode([
	   'resize_keyboard'=>true,
		'one_time_keyboard'=>false,
		'keyboard'=>[
		[['text'=>'زوری و خشن😈💦']],
		[['text'=>'سکس الکسیس تو زندان🔞'],['text'=>'داستان صکصی😋']],
		[['text'=>'فیلم💦🙈'],['text'=>'ایرانی🔞💧']],
		[['text'=>'ویس سکسی😍'],['text'=>'صکصی کون😁']],
		[['text'=>'کم سن کون خوشگل😻🔞'],['text'=>'لز 😍💦']],
		[['text'=>'الکسیس😍💦'],['text'=>'عکس🤤']],
		[['text'=>'↩️ برگشت'],
		]
		]])
		]);
		}
		if ($textmessage == 'فیلم💦🙈'){
		sendAction ($chat_id,'upload_video');
		$videos = file_get_contents ('data/admin/media/film.txt');
		$videoss = explode(",",$videos);
		$count2 = count($videoss) -1;
		$rand = rand (1,$count2)-1;
		$v_id = $videoss[$rand];
		Naweed ('sendVideo',[
		'chat_id'=>$chat_id,
		'video'=>$v_id
		]);
		}
		if($textmessage == '😬 زوری خانوادگی 😍'){
		sendAction ($chat_id,'upload_zori');
		$zorius = file_get_contents ('data/admin/media/zori.txt');
		$zoriuss = explode(",",$zorius);
		$count2 = count($zoriuss) -1;
		$rand = rand (1,$count2)-1;
		$v_id = $videoss[$rand];
		Naweed ('sendVideo',[
		'chat_id'=>$chat_id,
		'video'=>$v_id
		]);
		}
		elseif($textmessage == "😬 زوری خانوادگی 😍") {
    $videos = file_get_contents ('data/admin/media/zori.txt');
    if($videos != null) {
    if($use != "5") {
    $aaa = $use +1;
    file_put_contents("data/$from_id/use.txt","$aaa");
    sendAction($chat_id,"upload_video");
    $videosss = explode(",",$videos);
    $count2 = count($videosss) -1;
    $rand = rand (1,$count2)-1;
    $v_id = $videosss[$rand];
    bot('sendvideo',[
        'chat_id'=>$chat_id,
        'video'=>$v_id,
        'caption'=>$bott
	]);
    }
    }
		}
		if($textmessage == 'گیف 📽'){
		sendAction ($chat_id,'upload_video');
		$gifss = file_get_contents ('data/admin/media/gif.txt');
		$gifsss = explode(",",$gifss);
		$count2 = count($gifsss) -1;
		$rand = rand (1,$count2)-1;
		$g_id = $gifsss[$rand];
		Naweed ('sendDocument',[
		'chat_id'=>$chat_id,
		'document'=>$g_id
		]);
		}
		if($textmessage == 'عکس🤤'){
		sendAction ($chat_id,'upload_photo');
		$picss = file_get_contents ('data/admin/media/pic.txt');
		$picsss = explode(",",$picss);
		$count2 = count($picsss) -1;
		$rand = rand (1,$count2)-1;
		$p_id = $picsss[$rand];
		Naweed ('sendPhoto',[
		'chat_id'=>$chat_id,
		'photo'=>$p_id
		]);
		}
		if ($textmessage == '📛دریافت بنر📛' || $textmessage == "ورود به vip 🖥"){
			if ($invitecount > $invited){
			sendAction ($chat_id,'typing');
			Naweed ('sendMessage',[
			'chat_id'=>$from_id,
			'parse_mode'=>"Markdown",
			'text'=>"برای استفاده از ربات باید $invitecount نفر را با لینک خود به ربات دعوت کنید.
			تعداد اعضایی که با لینک شما جوین شده اند : $invited
			بنر شما 👇🏻👇🏻👇🏻👇🏻👇🏻"
			]);
			Naweed ('sendMessage',[
			'chat_id'=>$from_id,
			'text'=>"🔞اوووف بدو ببین چی آوردم⛔️

100 تا فیلم سوپر جدید ایرانی و خارجی📛🔥
😍5نفر پایه سکس چت آوردم رایگان باهات سکس چت میکنن😍
			https://t.me/$myusername?start=$from_id
			اگه صیغه میخوای بمال رو لینک😍👆🏻",
			'reply_markup'=>json_encode([
			'resize_keyboard'=>true,
			'one_time_keyboard'=>false,
			'keyboard'=>[
		    [['text'=>'🚷فیلم سکسی🔞'],['text'=>'👙 جدید 😍💦']],
		    [['text'=>'👙 بخش ویژه 💦']],
			]
			])
			]);
			}else{
				sendAction ($chat_id,'typing');
				Naweed ('sendMessage',[
				'chat_id'=>$from_id,
				'text'=>"به قسمت VIP خوش آمدید😍",
				'reply_markup'=>json_encode([
				'resize_keyboard'=>true,
				'one_time_keyboard'=>false,
				'keyboard'=>[
				[['text'=>'🚷فیلم سکسی🔞'],['text'=>'👙 جدید 😍💦']],
		        [['text'=>'👙 بخش ویژه 💦']],
				]
				])
				]);
				}
		}elseif ($textmessage == 'ویس سکسی😍' and $invitecount <= $invited){
			sendAction ($chat_id,'upload_audio');
			$voice = file_get_contents ('data/admin/media/voice.txt');
			$voices = explode(",",$voice);
			$count2 = count($voices) -1;
			$rand = rand (1,$count2)-1;
			$v_id = $voices[$rand];
			Naweed ('sendVoice',[
			'chat_id'=>$chat_id,
			'voice'=>$v_id
			]);
		}elseif ($textmessage == 'فایل 📂' and $invitecount <= $invited){
			sendAction ($chat_id,'upload_document');
			$file = file_get_contents ('data/admin/media/file.txt');
			$files = explode(",",$file);
			$count2 = count($files) -1;
			$rand = rand (1,$count2)-1;
			$f_id = $files[$rand];
			Naweed ('sendDocument',[
			'chat_id'=>$chat_id,
			'document'=>$f_id
			]);
		}
	}
}
file_put_contents ('e.txt',$json);
unlink ("error_log");
?>
