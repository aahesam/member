<?php
/*
توکن و ایدی عددی و آیدی چنل رو تنظیم کنید
نیازی به ساخت پوشه دیتا  نیس
نویسنده :
@GoldDev
فروش و کپی سورس به اسم خودتون حرام

*/
ob_start();
define('API_KEY','TOKEN'); // token bot
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
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$message_id = $message->message_id;
$from_id = $message->from->id;
$textmessage = $message->text;
$admin = "AMDIN"; // id adadi admin
$TOKEN = "TOKEN"; // token bot
$CHANNEL = "CHANNEL"; // channel ba @
$users = json_decode(file_get_contents("users.json"),true);
$stepuser = $users["$from_id"]["step"];
$members = file_get_contents("members.txt");
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$TOKEN/getChatMember?chat_id=$CHANNEL&user_id=".$chat_id));
$tch = $forchaneel->result->status;
function get_file_size($url) {      
    $file = $url;
 
    $ch = curl_init($file);
    curl_setopt($ch, CURLOPT_NOBODY, true);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HEADER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
 
    $data = curl_exec($ch);
    curl_close($ch);
 
    if (preg_match('/Content-Length: (\d+)/', $data, $matches)) {
    	
        // Contains file size in bytes
        $fileSize = (int)$matches[1];
 
        return $fileSize;
    }
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
function ForwardMessage($chatid,$from_chat,$message_id){
	bot('ForwardMessage',[
	'chat_id'=>$chatid,
	'from_chat_id'=>$from_chat,
	'message_id'=>$message_id
	]);
	}
//-------
	if (strpos($members , "$from_id") != true  ) {
	    $myfile2 = fopen("members.txt", "a") or die("Unable to open file!");
        fwrite($myfile2, "$from_id\n");
        fclose($myfile2);
	}
	if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
		 bot('sendMessage',[
                    'chat_id'=>$chat_id,
                    'text'=>"برای استفاده از این ربات هیجان انگیز ابتدا در کانال ما عضو بشید و بعد دکمه تایید عضویت رو لمس کنید 👇

🔸 $CHANNEL   🔸 $CHANNEL
🔸 $CHANNEL   🔸 $CHANNEL

👇 بعد از « عضــویت » ربات را استارت کنید👇",
                   'parse_mode'=>"HTML",
]); 
}else{
    


if($textmessage == "/start" or $textmessage == "🔙"){

     $users["$from_id"]["step"] = "none";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به ربات جستجوگر ترانه هوشمند خوش آمدید😃👋
با جستجو به وسیله این ربات شما میتوانید هر آهنگی رو دانلود کنید😄
$CHANNEL",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
           'keyboard'=>[
	   [['text'=>"🎧جستجو ترانه🎧"],['text'=>"🎬جستجو موزیک ویدئو🎬"]],
	   [['text'=>"▪️آخرین ترانه ها▪️"],['text'=>"▫️آخرین آلبوم ها▫️"]],
 [['text'=>"➰بهترین های ماه➰"],['text'=>"➰بهترین های هفته➰️"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]); 
}
elseif($textmessage == "➰بهترین های ماه➰"){	
	 $users["$from_id"]["step"] = "bestmonth";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	 $url2 = "https://topapi.ir/nex1music/index2.php?apikey=1";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 9; $i++){
         $artistfa=$jsurl["topmonth"]["$i"]["artistfa"];
         $trackfa=$jsurl["topmonth"]["$i"]["trackfa"];
         $title = "$artistfa - $trackfa";
        $d4[] = [ 	['text'=>"$title"]];
        $postid=$jsurl["topmonth"]["$i"]["postid"];
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["postid"] = $postid;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لیست بهترین ترانه های ماه جاری :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	}
		elseif($textmessage && $stepuser == "bestmonth"){	
	     for ($i=0; $i <= 9; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $postid = $users["$from_id"]["music"]["$i"]["postid"];
 $url2 = "https://topapi.ir/nex1music/dlmusic.php?apikey=1&id=$postid";
   $jsurl=json_decode(file_get_contents($url2),true);
		    $photo=$jsurl["result"]["singleinfo"]["postimage"];
     $likecount=$jsurl["result"]["singleinfo"]["likecount"];
     $music128=$jsurl["result"]["singleinfo"]["music128"];
     $music320=$jsurl["result"]["singleinfo"]["music320"];
     $artistfa=$jsurl["result"]["singleinfo"]["artistfa"];
     $trackfa=$jsurl["result"]["singleinfo"]["trackfa"];
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $test
🔹کاری از  : $artistfa
🔶نام اهنگ :  $trackfa
🔵لایک ها : $likecount",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);
	    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$music128,
        'caption'=>"دانلود مستقیم آهنگ $test با کیفیت 128",
        	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
        ]);
	}}}
elseif($textmessage == "➰بهترین های هفته➰️"){	
	 $users["$from_id"]["step"] = "bestweek";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	 $url2 = "https://topapi.ir/nex1music/index2.php?apikey=1";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 9; $i++){
         $artistfa=$jsurl["topweek"]["$i"]["artistfa"];
         $trackfa=$jsurl["topweek"]["$i"]["trackfa"];
         $title = "$artistfa - $trackfa";
        $d4[] = [ 	['text'=>"$title"]];
        $postid=$jsurl["topweek"]["$i"]["postid"];
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["postid"] = $postid;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لیست بهترین ترانه های هفته جاری :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	}
		elseif($textmessage && $stepuser == "bestweek"){	
	     for ($i=0; $i <= 9; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $postid = $users["$from_id"]["music"]["$i"]["postid"];
 $url2 = "https://topapi.ir/nex1music/dlmusic.php?apikey=1&id=$postid";
   $jsurl=json_decode(file_get_contents($url2),true);
		    $photo=$jsurl["result"]["singleinfo"]["postimage"];
     $likecount=$jsurl["result"]["singleinfo"]["likecount"];
     $music128=$jsurl["result"]["singleinfo"]["music128"];
     $music320=$jsurl["result"]["singleinfo"]["music320"];
     $artistfa=$jsurl["result"]["singleinfo"]["artistfa"];
     $trackfa=$jsurl["result"]["singleinfo"]["trackfa"];
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $test
🔹کاری از  : $artistfa
🔶نام اهنگ :  $trackfa
🔵لایک ها : $likecount",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);
	    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$music128,
        'caption'=>"دانلود مستقیم آهنگ $test با کیفیت 128",
        	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
        ]);
	}}}
//-------------
elseif($textmessage == "▫️آخرین آلبوم ها▫️"){	
	 $users["$from_id"]["step"] = "lastalbums";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	 $url2 = "https://topapi.ir/nex1music/index2.php?apikey=1";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 9; $i++){
         $artistfa=$jsurl["albums"]["$i"]["artistfa"];
         $trackfa=$jsurl["albums"]["$i"]["trackfa"];
         $title = "$artistfa - $trackfa";
        $d4[] = [ 	['text'=>"$title"]];
        $postid=$jsurl["albums"]["$i"]["postid"];
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["postid"] = $postid;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لیست بروز ترین آلبوم های موجود در ربات :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	}
		elseif($textmessage && $stepuser == "lastalbums"){	
	     for ($i=0; $i <= 9; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $postid = $users["$from_id"]["music"]["$i"]["postid"];
 $url2 = "https://topapi.ir/nex1music/dlmusic.php?apikey=1&id=$postid";
   $jsurl=json_decode(file_get_contents($url2),true);
		    $photo=$jsurl["result"]["singleinfo"]["postimage"];
     $likecount=$jsurl["result"]["singleinfo"]["likecount"];
     $albumzip128=$jsurl["result"]["singleinfo"]["albumzip128"];
     $albumzip320=$jsurl["result"]["singleinfo"]["albumzip320"];
     $artistfa=$jsurl["result"]["singleinfo"]["artistfa"];
     $trackfa=$jsurl["result"]["singleinfo"]["trackfa"];
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $test
🔹کاری از  : $artistfa
🔶نام اهنگ :  $trackfa
🔵لایک ها : $likecount",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$albumzip128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$albumzip320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);
	}}}
	elseif($textmessage == "▪️آخرین ترانه ها▪️"){	
	 $users["$from_id"]["step"] = "lastmusics";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	 $url2 = "https://topapi.ir/nex1music/index2.php?apikey=1";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 9; $i++){
         $artistfa=$jsurl["mp3s"]["$i"]["artistfa"];
         $trackfa=$jsurl["mp3s"]["$i"]["trackfa"];
         $title = "$artistfa - $trackfa";
        $d4[] = [ 	['text'=>"$title"]];
        $postid=$jsurl["mp3s"]["$i"]["postid"];
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["postid"] = $postid;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لیست بروز ترین ترانه های موجود در ربات :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	}
		elseif($textmessage && $stepuser == "lastmusics"){	
	     for ($i=0; $i <= 9; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $postid = $users["$from_id"]["music"]["$i"]["postid"];
 $url2 = "https://topapi.ir/nex1music/dlmusic.php?apikey=1&id=$postid";
   $jsurl=json_decode(file_get_contents($url2),true);
		    $photo=$jsurl["result"]["singleinfo"]["postimage"];
     $likecount=$jsurl["result"]["singleinfo"]["likecount"];
     $music128=$jsurl["result"]["singleinfo"]["music128"];
     $music320=$jsurl["result"]["singleinfo"]["music320"];
     $artistfa=$jsurl["result"]["singleinfo"]["artistfa"];
     $trackfa=$jsurl["result"]["singleinfo"]["trackfa"];
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $test
🔹کاری از  : $artistfa
🔶نام اهنگ :  $trackfa
🔵لایک ها : $likecount",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);
	    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$music128,
        'caption'=>"دانلود مستقیم آهنگ $test با کیفیت 128",
        	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
        ]);
	}}}
//------music-video---------
	elseif($textmessage == "🎬جستجو موزیک ویدئو🎬"){	
	 $users["$from_id"]["step"] = "searchmusicvideo";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"نام خواننده یا موزیک ویدئو را ارسال کنید:",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]); 
	}
if($textmessage && $stepuser == "searchmusicvideo"){	
	 if (mb_strlen($textmessage,'UTF-8')==strlen($textmessage)){
	          $users["$from_id"]["step"] = "endsearchmusicvideo";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	    $text = str_replace(" ","+",$textmessage);
	    $url2 = "http://topapi.ir/radiojavan/?q=$text&apikey=1";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 49; $i++){
         $title=$jsurl["videos"]["$i"]["title"];
        $d4[] = [ 	['text'=>"$title"]];
        $link=$jsurl["videos"]["$i"]["link"];
        $photo=$jsurl["videos"]["$i"]["photo"];
        $artist=$jsurl["videos"]["$i"]["artist"];
        $song=$jsurl["videos"]["$i"]["song"];
        $likes=$jsurl["videos"]["$i"]["likes"];
        $dislikes=$jsurl["videos"]["$i"]["dislikes"];
        $views=$jsurl["videos"]["$i"]["views"];
        $photo_player=$jsurl["videos"]["$i"]["photo_player"];
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["photo_player"] = $photo_player;
         $users["$from_id"]["music"]["$i"]["link"] = $link;
         $users["$from_id"]["music"]["$i"]["photo"] = $photo;
         $users["$from_id"]["music"]["$i"]["artist"] = $artist;
         $users["$from_id"]["music"]["$i"]["song"] = $song;
         $users["$from_id"]["music"]["$i"]["likes"] = $likes;
         $users["$from_id"]["music"]["$i"]["dislikes"] = $dislikes;
         $users["$from_id"]["music"]["$i"]["views"] = $views;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	  
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"نتیجه جستجو شما برای $textmessage :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	 }else{
	       bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"لطفا نام آهنگ یا خواننده را به زبان لاتین ارسال نمایید❗️",
  'reply_to_message_id'=>$message_id,
]); 
	     
	 }
	 }
	elseif($textmessage && $stepuser == "endsearchmusicvideo"){	
	     for ($i=0; $i <= 49; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $link = $users["$from_id"]["music"]["$i"]["link"];
		    $photo = $users["$from_id"]["music"]["$i"]["photo"];
		    $artist = $users["$from_id"]["music"]["$i"]["artist"];
		    $song = $users["$from_id"]["music"]["$i"]["song"];
		    $likes = $users["$from_id"]["music"]["$i"]["likes"];
		    $dislikes = $users["$from_id"]["music"]["$i"]["dislikes"];
		    $views = $users["$from_id"]["music"]["$i"]["views"];
		    $photo_player = $users["$from_id"]["music"]["$i"]["photo_player"];
		    $filesize = get_file_size("$link");
		    $siz = $filesize/1024/1024;
		    $size = round($siz,2);
		    if($photo != null){
		    	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $artist - $song 
🔹artist = $artist
🔶song = $song
◼views = $views
🔵likes = $likes
🔴dislikes = $dislikes",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود🔸", 'url'=>"$link"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);}else{
	   	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo_player,
	'caption'=>"🔸 $artist - $song 
🔹artist = $artist
🔶song = $song
◼views = $views
🔵likes = $likes
🔴dislikes = $dislikes",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود🔸", 'url'=>"$link"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]); 
	}
	if($size < 20){
	    bot('sendvideo',[
        'chat_id'=>$chat_id,
        'video'=>$link,
        'caption'=>"$artist - $song",
        	 'reply_to_message_id'=>$message_id,
        	 	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود🔸", 'url'=>"$link"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
    ]);}else{
         bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"به دلیل بالا بودن حجم ویدئو شما تنها قادر به دانلود آن به وسیله لینک آن هستید 😊
حجم مجاز برای ربات 21 مگابایت است و حجم این ویدئو $size مگابایت 📛",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
  'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود🔸", 'url'=>"$link"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	 ]); 
        
    }
	    	    
	    	}}}
//------music--------
	elseif($textmessage == "🎧جستجو ترانه🎧"){	
	 $users["$from_id"]["step"] = "searchmusic";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	 bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"نام آهنگ یا خواننده را ارسال کنید :",
 'parse_mode'=>"HTML",
 'reply_to_message_id'=>$message_id,
	 ]); 
	}
if($textmessage && $stepuser == "searchmusic"){	
	 if (mb_strlen($textmessage,'UTF-8')==strlen($textmessage)){
	          $users["$from_id"]["step"] = "endsearcenusic";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	    $text = str_replace(" ","+",$textmessage);
	    $url2 = "http://topapi.ir/radiojavan/?q=$text&apikey=1";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 49; $i++){
         $title=$jsurl["music"]["$i"]["title"];
        $d4[] = [ 	['text'=>"$title"]];
        $link=$jsurl["music"]["$i"]["link"];
        $photo=$jsurl["music"]["$i"]["photo"];
        $artist=$jsurl["music"]["$i"]["artist"];
        $song=$jsurl["music"]["$i"]["song"];
        $likes=$jsurl["music"]["$i"]["likes"];
        $dislikes=$jsurl["music"]["$i"]["dislikes"];
        $downloads=$jsurl["music"]["$i"]["downloads"];
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["link"] = $link;
         $users["$from_id"]["music"]["$i"]["photo"] = $photo;
         $users["$from_id"]["music"]["$i"]["artist"] = $artist;
         $users["$from_id"]["music"]["$i"]["song"] = $song;
         $users["$from_id"]["music"]["$i"]["likes"] = $likes;
         $users["$from_id"]["music"]["$i"]["dislikes"] = $dislikes;
         $users["$from_id"]["music"]["$i"]["downloads"] = $downloads;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	  
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"نتیجه جستجو شما برای $textmessage را در دکمه های زیر مشهاده میکنید , جهت دانلود بر روی نام آهنگ کلیک نمایید :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	 }else{
	       $users["$from_id"]["step"] = "endsearchmusic";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	    $text = str_replace(" ","+",$textmessage);
	    $url2 = "https://topapi.ir/nex1music/search.php?apikey=1&q=$text";
   $jsurl=json_decode(file_get_contents($url2),true);
    for ($i=0; $i <= 49; $i++){
         $title1=$jsurl["result"]["music"]["subject"]["music"]["out"]["$i"]["artistfa"];
         $title2=$jsurl["result"]["music"]["subject"]["music"]["out"]["$i"]["trackfa"];
        $d4[] = [ 	['text'=>"$title1 - $title2"]];
        $postid=$jsurl["result"]["music"]["subject"]["music"]["out"]["$i"]["postid"];
        $title = "$title1 - $title2";
         $users["$from_id"]["music"]["$i"]["title"] = $title;
         $users["$from_id"]["music"]["$i"]["postid"] = $postid;
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
	  
        }
	    $d4[] = [ 	['text'=>"🔙"]];
	    bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"نتیجه جستجو شما برای $textmessage را در دکمه های زیر مشهاده میکنید , جهت دانلود بر روی نام آهنگ کلیک نمایید :",
     'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'keyboard'=>$d4
	])
]); 
	 }
	 }
elseif($textmessage && $stepuser == "endsearchmusic"){	
	     for ($i=0; $i <= 49; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $postid = $users["$from_id"]["music"]["$i"]["postid"];
		     $url2 = "https://topapi.ir/nex1music/dlmusic.php?apikey=1&id=$postid";
   $jsurl=json_decode(file_get_contents($url2),true);
     $photo=$jsurl["result"]["singleinfo"]["postimage"];
     $likecount=$jsurl["result"]["singleinfo"]["likecount"];
     $music128=$jsurl["result"]["singleinfo"]["music128"];
     $music320=$jsurl["result"]["singleinfo"]["music320"];
     $artistfa=$jsurl["result"]["singleinfo"]["artistfa"];
     $trackfa=$jsurl["result"]["singleinfo"]["trackfa"];
	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $test
🔹کاری از  : $artistfa
🔶نام اهنگ :  $trackfa
🔵لایک ها : $likecount",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);
	    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$music128,
        'caption'=>"دانلود مستقیم آهنگ $test با کیفیت 128",
        	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود با کیفیت 128🔹", 'url'=>"$music128"]],
 [['text'=>"🔸دانلود با کیفیت 320🔸", 'url'=>"$music320"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
        ]);
	    	}}}
    elseif($textmessage && $stepuser == "endsearcenusic"){	
	     for ($i=0; $i <= 49; $i++){
	    $test = $users["$from_id"]["music"]["$i"]["title"];
	    	if($textmessage == $test){
		    $link = $users["$from_id"]["music"]["$i"]["link"];
		    $photo = $users["$from_id"]["music"]["$i"]["photo"];
		    $artist = $users["$from_id"]["music"]["$i"]["artist"];
		    $song = $users["$from_id"]["music"]["$i"]["song"];
		    $likes = $users["$from_id"]["music"]["$i"]["likes"];
		    $dislikes = $users["$from_id"]["music"]["$i"]["dislikes"];
		    $downloads = $users["$from_id"]["music"]["$i"]["downloads"];
		    	bot('SendPhoto',[
	'chat_id'=>$chat_id,
	'photo'=>$photo,
	'caption'=>"🔸 $artist - $song 
🔹artist = $artist
🔶song = $song
◼️downloads = $downloads
🔵likes = $likes
🔴dislikes = $dislikes",
	 'reply_to_message_id'=>$message_id,
	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود🔸", 'url'=>"$link"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
	]);
	    bot('sendaudio',[
        'chat_id'=>$chat_id,
        'audio'=>$link,
        'caption'=>"$artist - $song",
        	 'reply_to_message_id'=>$message_id,
        	 	   'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔹دانلود🔸", 'url'=>"$link"]],
               [['text'=>"▫️کانال ما▪️", 'url'=>"https://t.me/$CHANNEL"]],
              ]
        ])
    ]);}}}
    elseif($textmessage=="/panel" && $chat_id == $admin){           
    bot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"ادمین عزیز به پنل مدیریت ربات خوش آمدید💎",
  'reply_markup'=>json_encode([
                      'keyboard'=>[
  [['text'=>"️💠فروارد همگانی💠"],['text'=>"💠ارسال همگانی💠"]],
  [['text'=>"👤آمار ربات👤"]],
  [['text'=>"🔙"]],
	],
		"resize_keyboard"=>true,
	 ])
	 ]);
}  
elseif($textmessage=="👤آمار ربات👤" && $chat_id == $admin ){ 
   $txtt = file_get_contents('members.txt');
    $member_id = explode("\n",$txtt);
    $amar = count($member_id) -1;
     bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"تعداد کل اعضای ربات $amar",
 'parse_mode'=>"MarkDown",
  ]);
}  
//-----------------------------------------
elseif($textmessage=="💠ارسال همگانی💠" && $chat_id == $admin ){           
      $users["$from_id"]["step"] = "send2all";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای ارسال به همه اعضا لطفا پیام خود را ارسال کنید💣",
 'parse_mode'=>"MarkDown",
  ]);
}  
elseif($chat_id == $admin && $stepuser == "send2all" ){  
     $users["$from_id"]["step"] = "none";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
    $all_member = fopen( "members.txt", 'r');
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
 'text'=>"با موفقیت به همه اعضای ربات ارسال شد",
 'parse_mode'=>"MarkDown",
  ]);}
elseif($textmessage=="️💠فروارد همگانی💠" && $chat_id == $admin ){           
     $users["$from_id"]["step"] = "f2all";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
      bot('sendMessage',[
 'chat_id'=>$chat_id,
 'text'=>"برای فروارد به همه اعضا لطفا پیام خود را فروارد کنید💣",
 'parse_mode'=>"MarkDown",
  ]);
}  

elseif($chat_id == $admin && $stepuser == "f2all" ){  
 $users["$from_id"]["step"] = "none";
$outjson = json_encode($users,true);
file_put_contents("users.json",$outjson);
    $all_member = fopen( "members.txt", 'r');
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
ForwardMessage($user,$admin,$message_id);
		}
		 bot('sendMessage',[
 'chat_id'=>$admin,
 'text'=>"با موفقیت به همه اعضای ربات ارسال شد",
 'parse_mode'=>"MarkDown",
  ]);}
		}
	/*
توکن و ایدی عددی و آیدی چنل رو تنظیم کنید
نیازی به ساخت پوشه دیتا  نیس
نویسنده :
@GoldDev
فروش و کپی سورس به اسم خودتون حرام

*/
	unlink("error_log");
	?>