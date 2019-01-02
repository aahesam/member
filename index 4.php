﻿<?php 

ob_start();

/*
به نام خدا 
کاری از تیم برنامه نویسی اجتماعی
@social_programming
حتما در کانال بالا جهت اطلاع رسانی ها عضو شوید.
نوشته شده توسط
@amir_social
*/

$API_KEY = '754351894:AAG5utzXMQV3FtQCBiZbUASuUk1B7tLDP50'; //توکن را ست کنید
##------------------------------##
define('API_KEY',$API_KEY);
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
 function sendmessage($chat_id, $text, $model){
	bot('sendMessage',[
	'chat_id'=>$chat_id,
	'text'=>$text,
	'parse_mode'=>$mode
	]);
	}
	function sendaction($chat_id, $action){
	bot('sendchataction',[
	'chat_id'=>$chat_id,
	'action'=>$action
	]);
	}
	function Forward($KojaShe,$AzKoja,$KodomMSG){
    bot('ForwardMessage',[
        'chat_id'=>$KojaShe,
        'from_chat_id'=>$AzKoja,
        'message_id'=>$KodomMSG
    ]);
	}	
    function LeaveChat($chatid){
	bot('LeaveChat',[
	'chat_id'=>$chat_id
	]);
	}
//====================social======================//
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$message_id = $update->message->id;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$text = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fromid = $update->callback_query->from->id;
$username = $update->message->from->username;
$bcpv = file_get_contents("bcpv.txt");
$bcgap = file_get_contents("bcgap.txt");
$name = $update->message->from->first_name;
$gpname = $update->message->chat->title;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
@$locklink = file_get_contents("data/$chat_id/locklink.txt");
@$locktag = file_get_contents("data/$chat_id/locktag.txt");
@$lockphoto = file_get_contents("data/$chat_id/lockphoto.txt");
@$lockforward = file_get_contents("data/$chat_id/lockforward.txt");
@$lockvideo = file_get_contents("data/$chat_id/lockvideo.txt");
@$locklocation = file_get_contents("data/$chat_id/locklocation.txt");
@$locksticker = file_get_contents("data/$chat_id/locksticker.txt");
@$lockdocument = file_get_contents("data/$chat_id/lockdocument.txt");
@$lockcontact = file_get_contents("data/$chat_id/lockcontact.txt");
@$lockgame = file_get_contents("data/$chat_id/lockgame.txt");
@$lockmusic = file_get_contents("data/$chat_id/lockmusic.txt");
@$lockgif = file_get_contents("data/$chat_id/lockgif.txt");
@$lockvoice = file_get_contents("data/$chat_id/lockvoice.txt");
@$lockbot = file_get_contents("data/$chat_id/lockbot.txt");
@$locktext = file_get_contents("data/$chat_id/locktext.txt");
@$lockall = file_get_contents("data/$chat_id/lockall.txt");
@$wel = file_get_contents("data/$chat_id/wel.txt");
@$add = file_get_contents("data/$chat_id/add.txt");
@$locklinkf = file_get_contents("data/$chatid/locklink.txt");
@$locktagf = file_get_contents("data/$chatid/locktag.txt");
@$lockphotof = file_get_contents("data/$chatid/lockphoto.txt");
@$lockforwardf = file_get_contents("data/$chatid/lockforward.txt");
@$lockvideof = file_get_contents("data/$chatid/lockvideo.txt");
@$locklocationf = file_get_contents("data/$chatid/locklocation.txt");
@$lockstickerf = file_get_contents("data/$chatid/locksticker.txt");
@$lockdocumentf = file_get_contents("data/$chatid/lockdocument.txt");
@$lockcontactf = file_get_contents("data/$chatid/lockcontact.txt");
@$lockgamef = file_get_contents("data/$chatid/lockgame.txt");
@$lockmusicf = file_get_contents("data/$chatid/lockmusic.txt");
@$lockgiff = file_get_contents("data/$chatid/lockgif.txt");
@$lockvoicef = file_get_contents("data/$chatid/lockvoice.txt");
@$lockbotf = file_get_contents("data/$chatid/lockbot.txt");
@$locktextf = file_get_contents("data/$chatid/locktext.txt");
$floods2 = file_get_contents("data/$chatid/lockflood.txt");
$flood2 = file_get_contents("data/$chatid/numflood.txt");
@$lockfarsif = file_get_contents("data/$chatid/lockfarsi.txt");
@$lockenglishf = file_get_contents("data/$chatid/lockenglish.txt");
@$lockeditf = file_get_contents("data/$chatid/lockedit.txt");
@$locktelegf = file_get_contents("data/$chatid/lockteleg.txt");
@$setlink = file_get_contents("data/$chat_id/setlink.txt");
@$settag = file_get_contents("data/$chat_id/settag.txt");
@$setedite = file_get_contents("data/$chat_id/setedite.txt");
@$setphoto = file_get_contents("data/$chat_id/setphoto.txt");
@$setforward = file_get_contents("data/$chat_id/setforward.txt");
@$setvideo = file_get_contents("data/$chat_id/setvideo.txt");
@$setlocation = file_get_contents("data/$chat_id/setlocation.txt");
@$setsticker = file_get_contents("data/$chat_id/setsticker.txt");
@$setdocument = file_get_contents("data/$chat_id/setdocument.txt");
@$setcontact = file_get_contents("data/$chat_id/setcontact.txt");
@$setgame = file_get_contents("data/$chat_id/setgame.txt");
@$setmusic = file_get_contents("data/$chat_id/setmusic.txt");
@$setgif = file_get_contents("data/$chat_id/setgif.txt");
@$setvoice = file_get_contents("data/$chat_id/setvoice.txt");
@$settext = file_get_contents("data/$chat_id/settext.txt");
@$sakht = file_get_contents("data/$chat_id/setsakht.txt");
@$lockenglish = file_get_contents("data/$chat_id/lockenglish.txt");
@$setenglish = file_get_contents("data/$chat_id/setenglish.txt");
@$lockfarsi = file_get_contents("data/$chat_id/lockfarsi.txt");
@$setfarsi = file_get_contents("data/$chat_id/setfarsi.txt");
@$lockedit = file_get_contents("data/$chat_id/lockedit.txt");
@$lockteleg = file_get_contents("data/$chat_id/lockteleg.txt");
$rmsg = $message->message_id;
$techat = $update->message->message_id;
$data = $update->callback_query->data;
$photo = $update->message->photo;
$forward = $update->message->forward_from;
$video = $update->message->video;
$location = $update->message->location;
$sticker = $update->message->sticker;
$document = $update->message->document;
$contact = $update->message->contact;
$game = $update->message->game;
$music = $update->message->audio;
$gif = $update->message->gif;
$voice = $update->message->voice;
$edit = $update->edited_message;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$joinusername = $update->message->new_chat_member->from->username;
$joinmember = $update->message->new_chat_member;
$leftmember = $update->message->left_chat_member;
$newchatmemberu = $update->message->new_chat_member->username;
$messageid = $update->callback_query->message->message_id;
$forchaneel = json_decode(file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=@IDCHANNEL&user_id=".$from_id)); // ایدی کانالتون رو ست کنید
$tch = $forchaneel->result->status;
$type = $update->message->chat->type;
$ADMIN = 618055361;//ایدی  عددی سودو رو ست کنید
$get = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chat_id&user_id=".$from_id);
$info = json_decode($get, true);
$rank = $info['result']['status'];
$get_ = file_get_contents("https://api.telegram.org/bot$API_KEY/getChatMember?chat_id=$chatid&user_id=".$fromid);
$info_ = json_decode($get_, true);
$rank_ = $info_['result']['status'];
$reply = $update->message->reply_to_message->message_id;
$time = file_get_contents("https://provps.ir/td?td=time");
$date = file_get_contents("https://provps.ir/td?td=date");
$zekr = file_get_contents("https://amirr.xyzhost.cf/zekr.php");
$hadis = file_get_contents("https://amirr.xyzhost.cf/hadis.php");
$danestani  = file_get_contents("https://amirr.xyzhost.cf/danestani.php");
@$addtimechat = file_get_contents("data/$chat_id/addtimechat.txt");
@$addtimechat2 = file_get_contents("data/$chat_id/addtimechat2.txt");
@$addtimechat12 = file_get_contents("data/$chat_id/addtimechat12.txt");
@$eds = file_get_contents("data/$chat_id/time/$from_id 8.txt");
@$kekee = file_get_contents("data/$chat_id/time/$from_id.txt");
@$nfile =  file_get_contents("data/$from_id/namefile.txt");
@$step = file_get_contents("data/$from_id/step.txt");
@$step2 = file_get_contents("data/$chat_id/step2.txt");
@$muteuser = file_get_contents("data/$chat_id/muteuser/$from_id.txt");
@$muteuser2 = file_get_contents("data/$chat_id/muteuser/$rtid.txt");
@$spam = file_get_contents("data/$chat_id/spam.txt");
@$spamg = file_get_contents("data/$chat_id/spamg.txt");
@$setspam = file_get_contents("data/$chat_id/setspam.txt");
@$warnuser = file_get_contents("data/$chat_id/warn/$from_id.txt");
@$warnuser2 = file_get_contents("data/$chat_id/warn/$rtid.txt");
@$warntime = file_get_contents("data/$chat_id/warntime.txt");
$floods= file_get_contents("data/$chat_id/lockflood.txt");
$flood= file_get_contents("data/$chat_id/numflood.txt");
$token = '754351894:AAG5utzXMQV3FtQCBiZbUASuUk1B7tLDP50';//توکن رو ست کنید
//charge
$time_zone = '12600';
$today = date("Y-m-d", time()+$time_zone);
$expire = file_get_contents("data/$chat_id/expire.txt");
//endcharge
@$plug = file_get_contents("plug.php");
include "plug.php";
//====================social=================//
if($type == 'private')
if($tch != 'member' && $tch != 'creator' && $tch != 'administrator'){
  SendMessage($chat_id,"سلام🌹
🔸جهت حمایت و استفاده از ربات ما و همچنین اطلاع از بروز رسانی ها در کانال زیر عضو شوید و سپس گزینه 
/start
را بزنید.↖️
ایدی کانال ما:
🆔 : @Getro");
  }
elseif(($text == '/start' || $text == "/شروع")&& $type == "private"){
$user = file_get_contents('Member.txt');
    $members = explode("\n",$user);
    if (!in_array($chat_id,$members)){
      $add_user = file_get_contents('Member.txt');
      $add_user .= $chat_id."\n";
     file_put_contents('Member.txt',$add_user);
    }	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"hello. wlcome to anti_link @SOCIAL_PROGRAMMING",
    'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
			  [['text'=>"🌹معرفیه ما🌹",'callback_data'=>"more"]]
			  ],'resize_keyboard'=>true
		])
  ]);
}  	
if($data == 'more'){ 
	bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"hello. wlcome to anti spam @SOCIAL_PROGRAMMING",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"دکتر آنلاین",'url'=>"http://telegram.me/Doctor_onlinee"]],
			  [['text'=>"ضد لینک دیگر ما",'url'=>"http://telegram.me/ZedRobot"]],
			  [['text'=>"دنده ۵",'url'=>"http://telegram.me/Dandeeh5"]],
			  [['text'=>"📞جهت ارتباط با ما📞",'url'=>"http://telegram.me/poshtibani_zedrobot"]],
			  [['text'=>"🌹کانال ما🌹",'url'=>"http://telegram.me/Getro"]],
              ],'resize_keyboard'=>true
        ])
            ]);
}
///###########sudo#######################//
  if($text == "مدیریت" && $from_id == $ADMIN){
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"ادمین عزیز به پنل مدیریتی ربات خودش امدید",
                'parse_mode'=>'html',
      'reply_markup'=>json_encode([
            'keyboard'=>[
              [['text'=>"check pv"]],
              [['text'=>"check gap"]],              
              [['text'=>"bc pv"]],
              [['text'=>"bc gap"]]              
              ],'resize_keyboard'=>true
        ])
            ]);
        }
if($text == "check pv" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $user = file_get_contents("Member.txt");
    $member_id = explode("\n",$user);
    $member_count = count($member_id) -1;
	sendmessage($chat_id , " تعداد اعضا ربات pv : $member_count" , "html");
}
if($text == "check gap" && $chat_id == $ADMIN){
	sendaction($chat_id,'typing');
    $userr = file_get_contents("gaps.txt");
    $memberr_id = explode("\n",$userr);
    $memberr_count = count($memberr_id) -1;
	sendmessage($chat_id , " تعداد اعضا ربات gap : $memberr_count" , "html");
}
if($text == "bc pv" && $chat_id == $ADMIN){
    file_put_contents("bcpv.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"پیام مورد نظر را در قالب متن بنویسید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'مدیریت']],
      ],'resize_keyboard'=>true])
  ]);
}
if($bcpv == "bc" && $chat_id == $ADMIN){
    file_put_contents("bcpv.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" کاری از    @bogifa .پیام شما ارسال شد",
  ]);
	$all_member = fopen( "Member.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
if($text == "bc gap" && $chat_id == $ADMIN){
    file_put_contents("bcgap.txt","bc");
	sendaction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>"پیام مورد نظر را در قالب متن بنویسید",
    'parse_mode'=>'html',
    'reply_markup'=>json_encode([
      'keyboard'=>[
	  [['text'=>'مدیریت']],
      ],'resize_keyboard'=>true])
  ]);
}
if($bcgap == "bc" && $chat_id == $ADMIN){
    file_put_contents("bcgap.txt","none");
	SendAction($chat_id,'typing');
	bot('sendmessage',[
    'chat_id'=>$chat_id,
    'text'=>" کاری از    @bogifa .پیام شما ارسال شد",
  ]);
	$all_member = fopen( "gaps.txt", "r");
		while( !feof( $all_member)) {
 			$user = fgets( $all_member);
			SendMessage($user,$text,"html");
		}
}
//==================//
//=====social========//
if($text == '/add'&& $type == "group" || $text == "/اضافه" && $type == "group"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"لطفا گروه را به سوپر گروه تبدیل کنید",
  ]);
}  
//============##################//
if(($text == '/add'|| $text == "/اضافه")&& $type == "supergroup"){ 
if($from_id == $ADMIN ){  
if($add != "✔️"){
  $userr = file_get_contents('gaps.txt');
  $memberrs = explode("\n",$userr);
  if (!in_array($chat_id,$memberrs)){
  $add_userr = file_get_contents('gaps.txt');
  $add_userr .= $chat_id."\n";
  file_put_contents('gaps.txt',$add_userr);
}    
  mkdir("data/$chat_id");
  mkdir("data/$ADMIN"); 
  file_put_contents("data/$chat_id/warntime.txt","5");
  file_put_contents("data/$chat_id/locklink.txt","✖️");    
  file_put_contents("data/$chat_id/locktag.txt","✖️"); 
  file_put_contents("data/$chat_id/lockphoto.txt","✖️");
  file_put_contents("data/$chat_id/lockforward.txt","✖️");
  file_put_contents("data/$chat_id/lockvideo.txt","✖️");
  file_put_contents("data/$chat_id/locklocation.txt","✖️");
  file_put_contents("data/$chat_id/locksticker.txt","✖️");
  file_put_contents("data/$chat_id/lockdocument.txt","✖️");
  file_put_contents("data/$chat_id/lockcontact.txt","✖️");
  file_put_contents("data/$chat_id/lockgame.txt","✖️");
  file_put_contents("data/$chat_id/lockmusic.txt","✖️");
  file_put_contents("data/$chat_id/lockgif.txt","✖️");
  file_put_contents("data/$chat_id/lockvoice.txt","✖️");
  file_put_contents("data/$chat_id/lockbot.txt","✖️");
  file_put_contents("data/$chat_id/locktext.txt","✖️"); 
  file_put_contents("data/$chat_id/lockall.txt","✖️");
  file_put_contents("data/$chat_id/wel.txt","✖️");
  file_put_contents("data/$chat_id/spam.txt","✖️"); 
  file_put_contents("data/$chat_id/lockedit.txt","✖️"); 
  file_put_contents("data/$chat_id/lockenglish.txt","✖️");
  file_put_contents("data/$chat_id/lockteleg.txt","✖️");
  file_put_contents("data/$chat_id/setenglish.txt","del");
  file_put_contents("data/$chat_id/lockfarsi.txt","✖️");
  file_put_contents("data/$chat_id/lockflood.txt","✖️");
  file_put_contents("data/$chat_id/numflood.txt","10");
  file_put_contents("data/$chat_id/setfarsi.txt","del");
  file_put_contents("data/$chat_id/spamg.txt","200");
  file_put_contents("data/$chat_id/setspam.txt","del");  
  file_put_contents("data/$chat_id/setlink.txt","del");
  file_put_contents("data/$chat_id/settag.txt","del");
  file_put_contents("data/$chat_id/setforward.txt","del");  
  file_put_contents("data/$chat_id/setvideo.txt","del");
  file_put_contents("data/$chat_id/setphoto.txt","del");
  file_put_contents("data/$chat_id/setlocation.txt","del");
  file_put_contents("data/$chat_id/setsticker.txt","del");
  file_put_contents("data/$chat_id/setdocument.txt","del");
  file_put_contents("data/$chat_id/setcontact.txt","del");
  file_put_contents("data/$chat_id/setgame.txt","del"); 
  file_put_contents("data/$chat_id/setmusic.txt","del");
  file_put_contents("data/$chat_id/setgif.txt","del");
  file_put_contents("data/$chat_id/setvoice.txt","del");
  file_put_contents("data/$chat_id/settext.txt","del");
  file_put_contents("data/$chat_id/setsakht.txt","off");   
  file_put_contents("data/$chat_id/add.txt","✔️");		
  sendaction($chat_id,'typing');
  $sss = json_decode(file_get_contents("http://api.telegram.org/bot$API_KEY/sendmessage?chat_id=$chat_id&text=0&parse_mode=html"));
$shetmsg = $sss->result->message_id;
$hh = $shetmsg;
 bot('editmessagetext',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'create by:'
 ]);
 sleep('2');
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>'create by: @Getro'
 ]);
 sleep('3');
 bot('editMessageText',[
 'chat_id'=>$chat_id,
 'message_id'=>$hh,
 'text'=>"♻️ Group has been added.
please send /help for getting help bot.
➖➖➖➖➖➖➖➖
🆔: @Getro
🆔: @bogifa"
 ]); 
   
  bot('sendMessage',[
      'chat_id'=>$ADMIN,
      'text'=>"گروه$gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
به لیست گروه های ربات پیوست.",
      'parse_mode'=>'html',
    ]);
}else{
sendmessage($chat_id,"
》 gяøυρ łš αlяeαđч αđđeđ ‼️
〰〰〰〰〰〰〰〰
🗯The robot is already in the group, the robot was is no longer need to do not
➖➖➖➖➖➖➖➖
🆔:  @Getro
🆔: @bogifa
");
}
}else{
SendMessage($chat_id,"شما مدیر نمیباشید
جهت خرید ربات به ایدی  زیر مراجعه 
@poshtibani_zedrobot");
}
}
if($text == '/rem' || $text == "/برداشتن" ){
if($from_id == $ADMIN && $type == "supergroup"  ){
  file_put_contents("data/$chat_id/add.txt","NO"); 	
  rmdir("data/$chat_id");  
  sendaction($chat_id,'typing');
  bot('sendMessage',[
      'chat_id'=>$chat_id,
      'text'=>"
*#》Gяσυρ нαѕ вєєη яємσνє∂✅*
➖➖➖➖➖➖➖➖
🆔: @Getro
🆔: @bogifa
",
      'parse_mode'=>'MarkDown',
    ]);
  bot('sendMessage',[
      'chat_id'=>$ADMIN,
      'text'=>"گروه$gpname 
                
با ایدی $chat_id                
در زمان و تاریخ 
$time
$date
از لیست گروه های ربات خارج شد.",
      'parse_mode'=>'html',
    ]);
}  
}
///charge
if(strpos($text,"/charge") !== false and $from_id == $ADMIN and $type != 'private'){
 $date2 = str_replace("/charge ","",$text);
 if(is_numeric($date2)){
  if($date2 > 0){
   $date3 = $date2*86400;
   $time_zone = '12600';
   $expire = date("Y-m-d", time()+$date3+$time_zone);
   file_put_contents("data/$chat_id/expire.txt",$expire);
   SendMessage($chat_id,"تاریخ انقضا گروه به $date2 روز دیگر تنظیم شد!");
  }else{
   SendMessage($chat_id,"تعداد روز وارد شده باید از 0 روز بیشتر باشد!");
  }
 }else{
  SendMessage($chat_id,"لطفا تعداد روز هارا با عدد وارد نماييد");
 }
}

if($today == $expire){
 unlink('data/$chat_id/expire.txt');
$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
$jsonlink = json_decode($getlink, true);
$getlinkde = $jsonlink['result'];
 SendMessage($ADMIN,"تاریخ انقضا این گروه به پایان رسیده است! \n $getlinkde ");
 sendmessage($chat_id,"تاریخ انقضا این گروه به پایان رسیده است!. جهت شارژ مجدد به سودو مراجعه کنید @amir_social");	
 bot('LeaveChat',[
 'chat_id'=>$chat_id
  ]);
}
//##########################################################
if($text == '/help' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔱Welcome to Help🔱

⚜️English Help List⚜️ :

🔲#》 /sudohelp
Special command for sudo robot

+=+=+=+=+=+=+=+

🔳#》 /lockhelp
social command to lock the robot

+=+=+=+=+=+=+=+

🔲#》 /modhelp
Special command for group manage

+=+=+=+=+=+=+=+

🔳#》 /funhelp
social command to fun
+=+=+=+=+=+=+=+
🎗Channel🎗:
🆔: @Getro
🍃Manager🍃:
🆔: @bogifa",
    'parse_mode'=>'html',
    ]);
}  
}
//==============================================//
if($text == '/راهنما' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔱خوش آمدید به راهنما🔱

⚜️لیست راهنما انگلیسی⚜️: 

🔲#》 /راهنمای سودو
دستور ویژه برای سودو ربات

+=+=+=+=+=+=+=+

🔳#》 /راهنمای قفلی
دستور ویژه برای قفل ربات

+=+=+=+=+=+=+=+

🔲#》 /راهنمای مدیریتی
دستور ویژه برای مدیریت گروه

+=+=+=+=+=+=+=+

🔳#》 /راهنمای فان
دستور ویژه برای سرگرمی

+=+=+=+=+=+=+=+
🎗Channel🎗:
🆔: @Getro
🍃Manager🍃:
🆔: @bogifa",
    'parse_mode'=>'html',
    ]);
}  
}

//###########################################
if($text == '/lockhelp' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
⚜️English command language⚜️:

#Lock command 
/lock       🔒
`[link , tag , bot , strict , spam , english , farsi , edit , flood]`

/Unlock    🔓
`[link , tag , bot , strict , spam , english , farsi , edit , flood]`
 
+=+=+=+=+=+=+=+

#Mute commands
/Mute    🔇
`[gif , photo , document , sticker , video , text , forward , location , musick , voice , contact ,tgservice , game , all ]`

/unmute    🔊
`[gif , photo , document , sticker , video , text , forward , location , musick , voice , contact ,tgservice , game , all ]`
+=+=+=+=+=+=+=+
helper for settings : /option

🎗Channel🎗: 🆔: @Getro
🍃Manager🍃: 🆔: @bogifa",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
//=========================//
if($text == '/راهنمای قفلی' && $add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔱زبان دستورات فارسی🔱:

#دستورات قفلی 

#/قفل    🔒
`[لینک , تگ , بات , سخت , اسپم ,انگلیسی , فارسی , ادیت , فلود]`

#/بازکردن    🔓
`[لینک , تگ , بات , سخت ,اسپم , انگلیسی , فارسی , ادیت , فلود]`
 
 +=+=+=+=+=+=+=+
 
 #دستورات بیصدا

🔇#/بیصدا    🔇
`[گیف , تصویر , سند , استیکر , ویدیو , متن, فوروارد , مکان , اهنگ, صدا , مخاطب ,سرویس تلگرام , همه ,بازی]`


🔊#/باصدا    🔊
`[گیف , تصویر , سند , استیکر , ویدیو , متن, فوروارد , مکان , اهنگ, صدا , مخاطب ,سرویس تلگرام , همه ,بازی]`

+=+=+=+=+=+=+=+
برای نمایش تنظیمات به صورت شیشه ای:
/گزینه

🎗Channel🎗: 🆔: @Getro
🍃Manager🍃: 🆔: @bogifa",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
//##################################################

if($text == '/sudohelp' || $text == "/راهنمای سودو" ){
if($add == "✔️" && $type == "supergroup"){     
if($from_id == $ADMIN){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔱راهنما سودو⚜️

/مدیریت
⚫️دستوری برای دیدن امار ربات در pvربات

🔘دستوری برای فعال کردن ربات در گروه
🔲#》/add ....  /اضافه
⚫️دستوری برای غیر فعال کردن ربات در گروه
🔳#》 /rem .... /برداشتن
🔳#》 /charge number .... /شارژ گروه
🔘دستوری برای افزودن پلاگین 
🔲#》 /save plug
⚫️دستوری برای حذف پلاگین
🔳#》 /del plug
🔲#》 دستوری برای مرتب کردن لیست پلاگین ها
🔲#》 /set plug
⚫️دستوری برای نمایش لیست پلاگین ها
🔳#》 /plug list
🔘دستوری برای خارج شدن ربات از گروه
🔲#》 /leave
⚫️ دریافت انلاین بودن ربات
🔲#》 /ping
🔲#》 /ping2
+=+=+=+=+=+=+=+

⚫️دستوری برای اضافه کردن حساسیت مقدار پیام
🔳#》 /addtimechat
🔘دستوری برای حذف کردن حساسیت مقدار پیام.
🔲#》 /remtimechat

🎗Channel🎗:
🆔: @Getro
🍃Manager🍃:
🆔: @bogifa
",
    'parse_mode'=>'html',
    ]);
}  
}
}

if($text == '/funhelp' || $text == "/راهنمای فان" ){
if($add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
💝دستوری برای دریافت ذکر💝
/zekr
☝🏽️English☝🏽️

/ذکر
👆🏿فارسی👆🏿
+=+=+=+=+=+=+=+
💥دستوری برای دریافت دانستی 💥
/danestani
☝🏽️English☝🏽️

/دانستنی
👆🏿فارسی👆🏿
+=+=+=+=+=+=+=+
⚜️دستوری برای دریافت حدیث از بزرگان⚜️
/hadis
☝🏽️English☝🏽️

/حدیث
👆🏿فارسی👆🏿
+=+=+=+=+=+=+=+
🔱دستوری برای دریافت زمان و تاریخ به صورت انلاین🔱
/time
☝🏽️English☝🏽️

/زمان
👆🏿فارسی👆🏿
+=+=+=+=+=+=+=+
〽️دستوری برای دریافت از گوگل〽️
/google
☝🏽️English☝🏽️
+=+=+=+=+=+=+=+
💠دستوری برای دریافت از بینگ💠
/bing
☝🏽️English☝🏽️

*🎗Channel🎗:*
🆔: @Getro
*🍃Manager🍃:*
🆔: @bogifa",
    'parse_mode'=>'MarkDown',
    ]);
}  
}
}

if($text == '/modhelp' || $text == "/راهنمای مدیریتی" ){
if($add == "✔️" && $type == "supergroup"){     
if($rank == "creator" or $rank == "administrator"){	
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
این قسمت بسیار مهم است لطفا توجه کنید!🚫

اگر این دستور قفل باشد strict حالت سخت گیری فعال خواهد شد و هر فرد بافرستادن پست های قفل شده فرد ارسال کننده از گروه ریمو خواهد شد.‼️
+=+=+=+=+=+=+=+
قسمت های قفلی ربات دارای دو قسمت قفلی میباشد یعنی هر قفل میتواند دو نوع کار انجام دهد✅
مثال
💝اگر شما لینک را به صورت انگلیسی قفل کرده باشید  /lock link

میتوانید با دستور kick یا del  مشخص کنید که فرد ارسال کننده لینک را چکار کند برای انجام دادن این کار باید این کارو انجام دهید🔰🔰

🔶/link del
یا
🔷/link kick
و برای دستورات فارسی 💠
لینک حذف
یا 
لینک ریمو 
این کار برای همه دستورات قفلی انجام میشود‼️
+=+=+=+=+=+=+=+
چند قالبیت دیگر...❕

برای سنجاق کردن از دستور ❣️
🔶/pin 
و برای برداشتن از 
🔷/unpin
استفاده نمایید💥
+=+=+=+=+=+=+=+
برای کیک کردن فرد باید از دستور 🌐
🔶/kick 
استفاده نمایید🌀
+=+=+=+=+=+=+=+
برای خوشامد گویی از دستور ➿
🔷/welcome on 
و برای غیر فعال سازی از ⚡️
🔶/welcome off
استفاده نمایید❇️
+=+=+=+=+=+=+=+
برای تغییر نام گروه از دستور 🌟
🔷/setname 
استفاده نمایید🈂
+=+=+=+=+=+=+=+
برای دریافت لینک گروه دستور 💟
🔶/link
و جهت حذف پیام های گروه
🔶/rmsg[1/200]
را ارسال نمایید♑️
+=+=+=+=+=+=+=+
قسمت حساسیت مسیج🈳
فرصت دادن کلی🈹
🔷/forsat
 تنظیم تعداد مسیج قابل فرستادن در گپ☣️
🔶/setchat عدد مورد نظر
 برای غیر فعال کردن فرستادن مسیج تو گپ📳
🔷/offtimechat 
 و برای فعال سازی دستور💮
 🔶/ontimechat
 +=+=+=+=+=+=+=+
 🔷برای تنظیم کردن فلود
/setflood {عدد مورد نظر}
+=+=+=+=+=+=+=+
🔶برای تنظیم کردن اسپم
/setspam {عدد مورد نظر}
+=+=+=+=+=+=+=+
💠برای سکوت کردن کسی 
/mute 
و برای در اوردن 
/unmute
+=+=+=+=+=+=+=+
🔷برای به دست اوردن قوانین
/Rules
+=+=+=+=+=+=+=+
🔷تنظیمات زبان
برای فارسی سازی دستور
/setlang fa
و برای انگلیسی سازی
/setlang en
را دستور دهید.
+=+=+=+=+=+=+=+
✅دادن اخطار
/warn + reply
💗کم کردن یک اخطار
/unwarn + reply
🔱پاک کردن کل اخطار های فرد
/del warn + reply
💞دیدن اخطار های فرد
/info warn + reply
💠تنظیم حسایت اخطار
/setwarn عدد مورد نظر
 
🎗Channel🎗:
🆔: @Getro
🍃Manager🍃:
🆔: @bogifa
",
    'parse_mode'=>'html',
    ]);
}  
}
}
//================================

//###############################################
if($text == '/settings' && $add == "✔️" && $type == "supergroup"){   
if($rank == "creator" or $rank == "administrator"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔱⚙️Group Settings:(SocialBot)⬇️ 
〰〰〰〰〰〰〰〰〰
|_》🔐Group Lock List[
|_》⛓Strict = { $sakht }
|_》⛓Link = { $locklink($setlink) }
|_》⛓Tags = { $locktag($settag) }
|_》⛓Bot = { $lockbot }
|_》⛓Spam = { $spam($setspam) }
|_》⛓English = { $lockenglish($setenglish) }
|_》⛓Farsi = { $lockfarsi($setfarsi) }
|_》⛓Edit = { $lockedit }
|_》⛓Flood = { $floods }
|_》⛓End Lock List ]
|_》➖➖➖➖➖➖➖➖➖
|_》🔇Group Mute List[
|_》⛓Photo = { $lockphoto($setphoto) }
|_》⛓Forward = { $lockforward($setforward) }
|_》⛓Video = { $lockvideo($setvideo) }
|_》⛓Location = { $locklocation($setlocation) }
|_》⛓Sticker = { $locksticker($setsticker) }
|_》⛓Document = { $lockdocument($setdocument) }
|_》⛓Contact = { $lockcontact($setcontact) }
|_》⛓Game = { $lockgame($setgame) }
|_》⛓Music = { $lockmusic($setmusic) }
|_》⛓Gif = { $lockgif($setgif) }
|_》⛓Voice = { $lockvoice($setvoice) }
|_》⛓Text = { $locktext($settext) }
|_》⛓tgservice = { $lockteleg }
|_》⛓All = { $lockall }
|_》⛓End Mute List]
|_》➖➖➖➖➖➖➖➖
|_》[🌹Welcome = { $wel }
|_》Languge = { $lange } ]
|_》➖➖➖➖➖➖➖➖
|_》🔰Other Settings[
|_》▪️Chat Allergy =  { $addtimechat }
|_》▪️Number Chat = { $addtimechat2 } 
|_》▪️stats Allergy ={ $addtimechat12 }
|_》▪️Warn Allergy = { $warntime }
|_》▪️Spam Allergy = { $spamg }
|_》▪️Flood Allergy = { $flood }
|_》📟Expire = { $expire } ]
➖➖➖➖➖➖➖➖➖➖
🎗Channel🎗: 
🆔: @Getro
🍃Manager🍃: 
🆔: @bogifa
	",
   'parse_mode'=>'html',
    ]);
  }
}
//=============================//
if($text == '/تنظیمات' && $add == "✔️" && $type == "supergroup"){   
if($rank == "creator" or $rank == "administrator"){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔱⚙️تنظیمات گروه:(سوشال بات)⬇️ 
ـ〰〰〰〰〰〰〰〰〰〰〰
|_》🔐لیست قفل های گروه[
|_》⛓سختگیرانه = { $sakht }
|_》⛓لینک = { $locklink($setlink) }
|_》⛓تگ = { $locktag($settag) }
|_》⛓ربات = { $lockbot }
|_》⛓اسپم = { $spam ($setspam)}
|_》⛓انگلیسی = { $lockenglish($setenglish) }
|_》⛓فارسی = { $lockfarsi($setfarsi) }
|_》⛓ادیت = { $lockedit }
|_》⛓فلود = { $floods }
|_》❌پایان قفل های گروه ]
|_》ـ➖➖➖➖➖➖➖➖
|_》🔇لیست بیصدا های گروه[
|_》⛓عکس = { $lockphoto($setphoto) }
|_》⛓فوروارد = { $lockforward($setforward) }
|_》⛓ویدئو = { $lockvideo($setvideo) }
|_》⛓مکان = { $locklocation($setlocation) }
|_》⛓استیکر = { $locksticker($setsticker) }
|_》⛓داکیومنت = { $lockdocument($setdocument) }
|_》⛓مخاطب = { $lockcontact($setcontact) }
|_》⛓بازی = { $lockgame($setgame) }
|_》⛓موزیک = { $lockmusic($setmusic) }
|_》⛓گیف = { $lockgif($setgif) }
|_》⛓صدا = { $lockvoice($setvoice) }
|_》⛓متن = { $locktext($settext) }
|_》⛓سرویس تلگرام = { $lockteleg }
|_》⛓همه = { $lockall }
|_》⛓پایان بیصدا های گروه ]
|_》ـ➖➖➖➖➖➖➖➖
|_》[🌹خوش امد گویی = { $wel }
|_》🌹زبان = { $lange }]
|_》ـ➖➖➖➖➖➖➖➖
|_》🔰دیگر تنظیمات[
|_》▪️حساسیت چت =  { $addtimechat }
|_》▪️حساسیت مقدار = { $addtimechat2 } 
|_》▪️وضعیت حساسیت = { $addtimechat12 }
|_》▪️حساسیت اخطار = { $warntime }
|_》▪️حساسیت اسپم = { $spamg } 
|_》▪️حساسیت فلود = { $flood }
|_》📟انقضا گروه = { $expire } ]
ـ➖➖➖➖➖➖➖➖➖➖
🎗کانال ما🎗: 
🆔: @Getro
🍃مدیر🍃: 
🆔: @bogifa
	",
   'parse_mode'=>'html',
    ]);
  }
}
//#########################################################

if(($text == "/id" || $text == "/ایدی" )&& $add == "✔️"  && $type == "supergroup" ){
sendaction($chat_id,'typing');
bot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"
🔗ایدی گپ = $chat_id
🖋نام گپ = $gpname 
〰〰〰〰〰〰〰〰〰
⚜️نام شما = $name 
🔰ایدی شما =  $from_id
⚙ تعداد پیام های شما  = $techat
❌اخطار های شما = $warnuser/ $warntime
🆔یوزر نیم شما = 
https://t.me/$username

",
    'parse_mode'=>'html'
    ]); 
}

////////////////////link////////////////
if(($text == '/lock link' || $text == "/قفل لینک" ) && $add == "✔️" && $type == "supergroup")
{
	if($rank == "creator" or $rank == "administrator" )
	{
		if($locklink == "✖️")
		{    
			file_put_contents("data/$chat_id/locklink.txt","✔️");    
			SendMessage($chat_id,"$poster");
		}
		else
		{
			SendMessage($chat_id,"$posterr");
		}
	}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock link' || $text == "/بازکردن لینک"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklink == "✔️" ){    
file_put_contents("data/$chat_id/locklink.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setlink
if($rank == "creator" or $rank == "administrator" ){   
if(($text == "/link del" || $text == "/لینک حذف" ) && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlink.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/link kick"  || $text == "/لینک ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlink.txt","kick");    
SendMessage($chat_id,"$poster");
}
}

//=========endlink===============//
//lock spam
if(($text == '/lock spam' || $text == "/قفل اسپم" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($spam == "✖️"){    
file_put_contents("data/$chat_id/spam.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock spam' || $text == "/بازکردن اسپم"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($spam == "✔️" ){    
file_put_contents("data/$chat_id/spam.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setspam
if($rank == "creator" or $rank == "administrator" ){   
if(($text == "/spam del" || $text == "/اسپم حذف" ) && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setspam.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/spam kick"  || $text == "/اسپم ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setspam.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
// set allergy spam
if ( strpos($text ,'/setspam') !== false )
{
$setspamt= str_replace("/setspam","",$text);
	if($rank == "creator" or $rank == "administrator" )
	{
		if($setspamt <= 1000 && $setspamt >= 200)
		{
			file_put_contents("data/$chat_id/spamg.txt","$setspamt"); 
			sendmessage($chat_id,"تعداد به  $setspamt تغیر یافت");
		}else{
			sendMessage($chat_id,"عدد باید بزرگتر از 200 و کوچکتر از 1000 باشد");
		}
    }
}
//end spam
/////===========start tag=============//////
if(($text == '/lock tag' || $text == "/قفل تگ" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktag == "✖️"){    
file_put_contents("data/$chat_id/locktag.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock tag' || $text == "بازکردن تگ"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktag == "✔️" ){    
file_put_contents("data/$chat_id/locktag.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//settag
if(($text == "/tag del" || $text == "/تگ حذف" ) && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/settag.txt","del");    
SendMessage($chat_id,"$poster");
}
}

if(($text == "/tag kick" || $text == "/تگ ریمو" ) && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/settag.txt","kick");    
SendMessage($chat_id," $poster");
}
}
//-----------------------end tag---------------//
if(($text == '/lock english' || $text == "/قفل انگلیسی" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockenglish == "✖️"){    
file_put_contents("data/$chat_id/lockenglish.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock english' || $text == "/بازکردن انگلیسی"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockenglish == "✔️" ){    
file_put_contents("data/$chat_id/lockenglish.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setenglish
if(($text == "/english del" || $text == "/انگلیسی حذف" ) && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/setenglish.txt","del");    
SendMessage($chat_id,"$poster");
}
}

if(($text == "/english kick" || $text == "/انگلیسی ریمو" ) && $add == "✔️"  && $type == "supergroup" ){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/setenglish.txt","kick");    
SendMessage($chat_id," $poster");
}
}
/////
if(($text == '/lock farsi' || $text == "/قفل فارسی" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockfarsi == "✖️"){    
file_put_contents("data/$chat_id/lockfarsi.txt","✔️");    
SendMessage($chat_id," $poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock farsi' || $text == "/بازکردن فارسی"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockfarsi == "✔️" ){    
file_put_contents("data/$chat_id/lockfarsi.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setlink
if($rank == "creator" or $rank == "administrator" ){   
if(($text == "/farsi del" || $text == "/فارسی حذف" ) && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setfarsi.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/farsi kick"  || $text == "/فارسی ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setfarsi.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
/////
/////===========start bot=============//////
if(($text == '/lock bot' || $text == "/قفل بات" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockbot == "✖️"){    
file_put_contents("data/$chat_id/lockbot.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id," $posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock bot' || $text == "/بازکردن بات"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockbot == "✔️" ){    
file_put_contents("data/$chat_id/lockbot.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//--------------------end bot---------------//
if(($text == '/lock edit' || $text == "/قفل ادیت" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockedit == "✖️"){    
file_put_contents("data/$chat_id/lockedit.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unlock edit' || $text == "/بازکردن ادیت"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockedit == "✔️" ){    
file_put_contents("data/$chat_id/lockedit.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
if(($text == '/mute tgservice' || $text == "/بیصدا سرویس تلگرام" )  && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockteleg == "✖️"){    
file_put_contents("data/$chat_id/lockteleg.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute tgservice' || $text == "/باصدا سرویس تلگرام"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockteleg == "✔️" ){    
file_put_contents("data/$chat_id/lockteleg.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
////////////////////photo////////////////
if(($text == '/mute photo' || $text == "بیصدا تصویر"  ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockphoto == "✖️"){    
file_put_contents("data/$chat_id/lockphoto.txt","✔️");    
SendMessage($chat_id," $poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute photo' || $text == "باصدا تصویر"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockphoto == "✔️" ){    
file_put_contents("data/$chat_id/lockphoto.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setphoto
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/photo del" || $text == "/تصویر حذف" ) && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setphoto.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/photo kick" || $text == "/تصویر ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setphoto.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endphoto===============//
////////////////////forward////////////////
if(($text == '/mute forward' || $text == "/بیصدا فوروارد"  ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockforward == "✖️"){    
file_put_contents("data/$chat_id/lockforward.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute forward' || $text == "/باصدا فوروارد"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockforward == "✔️" ){    
file_put_contents("data/$chat_id/lockforward.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setforward
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/forward del" || $text == "/فوروارد حذف"  )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setforward.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/forward kick" || $text == "/فوروارد ریمو"  )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setforward.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endforward===============//

////////////////////video////////////////
if(($text == '/mute video' || $text == "/بیصدا ویدیو"  ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvideo == "✖️"){    
file_put_contents("data/$chat_id/lockvideo.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute video' || $text == "/باصدا ویدیو" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvideo == "✔️" ){    
file_put_contents("data/$chat_id/lockvideo.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setvideo
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/video del" || $text == "/ویدیو حذف" ) && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvideo.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/video kick" || $text == "/ویدیو ریمو" ) && $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvideo.txt","kick");    
SendMessage($chat_id,"$posterr");
}
}
//=========endvideo===============//

////////////////////location////////////////
if(($text == '/mute location' || $text == "/بیصدا مکان" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklocation == "✖️"){    
file_put_contents("data/$chat_id/locklocation.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute location' || $text == "/باصدا مکان" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locklocation == "✔️" ){    
file_put_contents("data/$chat_id/locklocation.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setlocation
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/location del" || $text == "/مکان حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlocation.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/location kick" || $text == "/مکان ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setlocation.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endlocation===============//

////////////////////sticker////////////////
if(($text == '/mute sticker' || $text == "/بیصدا استیکر"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locksticker == "✖️"){    
file_put_contents("data/$chat_id/locksticker.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute sticker' || $text == "/باصدا استیکر" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locksticker == "✔️" ){    
file_put_contents("data/$chat_id/locksticker.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setsticker
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/sticker del" || $text == "/استیکر حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsticker.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/sticker kick" || $text == "/استیکر ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsticker.txt","kick");    
SendMessage($chat_id,"$posterr");
}
}
//=========endsticker===============//

////////////////////document////////////////
if(($text == '/mute document' || $text == "/بیصدا سند" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockdocument == "✖️"){    
file_put_contents("data/$chat_id/lockdocument.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute document' || $text == "/باصدا سند" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockdocument == "✔️" ){    
file_put_contents("data/$chat_id/lockdocument.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setdocument
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/document del" || $text == "/استیکر حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setdocument.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/document kick" || $text == "/استیکر ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setdocument.txt","kick");    
SendMessage($chat_id," $poster");
}
}
//=========enddocument===============//

////////////////////contact////////////////
if(($text == '/mute contact' || $text == "/بیصدا مخاطب" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockcontact == "✖️"){    
file_put_contents("data/$chat_id/lockcontact.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute contact' || $text == "/باصدا مخاطب" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockcontact == "✔️" ){    
file_put_contents("data/$chat_id/lockcontact.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setcontact
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/contact del" || $text == "/مخاطب حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setcontact.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/contact kick" || $text == "/مخاطب ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setcontact.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endcontact===============//

////////////////////game////////////////
if(($text == '/mute game' || $text == "/بیصدا بازی"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgame == "✖️"){    
file_put_contents("data/$chat_id/lockgame.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute game' || $text == "/باصدا بازی" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgame == "✔️" ){    
file_put_contents("data/$chat_id/lockgame.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setgame
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/game del" || $text == "/بازی حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgame.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/game kick" || $text == "/بازی ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgame.txt","kick");    
SendMessage($chat_id," $poster");
}
}
//=========endgame===============//

////////////////////music////////////////
if(($text == '/mute music' || $text == "/بیصدا اهنگ"  )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockmusic == "✖️"){    
file_put_contents("data/$chat_id/lockmusic.txt","✔️");    
SendMessage($chat_id," $poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute music' || $text == "/باصدا اهنگ" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockmusic == "✔️" ){    
file_put_contents("data/$chat_id/lockmusic.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setmusic
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/music del" || $text == "/موزیک حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setmusic.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/music kick" || $text == "/موزیک ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setmusic.txt","kick");    
SendMessage($chat_id," $poster");
}
}
//=========endmusic===============//

////////////////////gif////////////////
if(($text == '/mute gif' || $text == "/بیصدا گیف" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgif == "✖️"){    
file_put_contents("data/$chat_id/lockgif.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute gif' || $text == "/باصدا گیف" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockgif == "✔️" ){    
file_put_contents("data/$chat_id/lockgif.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setgif
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/gif del" || $text == "/گیف حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgif.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/gif kick" || $text == "/گیف ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setgif.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endgif===============//

////////////////////voice////////////////
if(($text == '/mute voice' || $text == "/بیصدا صدا" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvoice == "✖️"){    
file_put_contents("data/$chat_id/lockvoice.txt","✔️");    
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute voice' || $text == "/باصدا صدا" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockvoice == "✔️" ){    
file_put_contents("data/$chat_id/lockvoice.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//setvoice
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/voice del" || $text == "/صدا حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvoice.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/voice kick" || $text == "/صدا ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setvoice.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endvoice===============//

////////////////////text////////////////
if(($text == '/mute text' || $text == "/بیصدا متن" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktext == "✖️"){    
file_put_contents("data/$chat_id/locktext.txt","✔️");    
SendMessage($chat_id," $poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute text' || $text == "/باصدا متن" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($locktext == "✔️" ){    
file_put_contents("data/$chat_id/locktext.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//settext
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/text del" || $text == "/متن حذف" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/settext.txt","del");    
SendMessage($chat_id,"$poster");
}
if(($text == "/text kick"  || $text == "/متن ریمو" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/settext.txt","kick");    
SendMessage($chat_id,"$poster");
}
}
//=========endtext===============//

////////////////////all////////////////
if(($text == '/mute all' || $text == "/بیصدا همه" ) && $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockall == "✖️"){    
file_put_contents("data/$chat_id/lockall.txt","✔️");    
SendMessage($chat_id," $poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^
if(($text == '/unmute all' || $text == "/باصدا همه" )&& $add == "✔️" && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator" ){  
if($lockall == "✔️" ){    
file_put_contents("data/$chat_id/lockall.txt","✖️");  
SendMessage($chat_id,"$poster");
}else{
    SendMessage($chat_id,"$posterr");
}
}
}
//=========endall===============//

//sakht//
if($rank == "creator" or $rank == "administrator" ){  
if(($text == "/unlock strict" || $text == "/بازکردن سخت" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsakht.txt","off");    
SendMessage($chat_id,"$poster");
}
if(($text == "/lock strict" || $text == "/قفل سخت" )&& $add == "✔️"  && $type == "supergroup" ){
file_put_contents("data/$chat_id/setsakht.txt","on");    
SendMessage($chat_id,"$posterr");
}
}
//##################################################################################################################################//
if(preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text) ){    
preg_match('/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/',$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" ){     
if($setlink == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlink == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}

if(preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$update->message->caption)){
preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locklink == "✔️" ){     
if($setlink == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlink == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}
//#####################################################
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming
}
}
}
}
//
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$update->message->caption)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming
}
}
}
}

//================//
if(preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$update->message->caption)){
preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$text,$match,$update->message->caption);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming
}
}
}
}

if(preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$text)){
preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($locktag == "✔️" ){     
if($settag == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settag == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming
}
}
}
}
//#################################################################

if($photo){
if($rank != "creator" && $rank != "administrator"){
if($lockphoto == "✔️" ){      
if($setphoto == "del"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setphoto == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
}
}
}
}
if($update->message->forward_from || $update->message->forward_from_chat){
if($rank != "creator" && $rank != "administrator"){
if($lockforward == "✔️" ){     
if($setforward == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setforward == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
  
}
}
}
}
if($video){
if($rank != "creator" && $rank != "administrator"){
if($lockvideo == "✔️" ){     
if($setvideo == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvideo == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);

}
}
}
}
if($location){
if($rank != "creator" && $rank != "administrator"){
if($locklocation == "✔️" ){    
if($setlocation == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setlocation == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming location");
}
}
}
}
if($sticker){
if($rank != "creator" && $rank != "administrator"){
if($locksticker == "✔️" ){   
if($setsticker == "del"  ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setsticker == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming sticker");
}
}
}
}
if($document){
if($rank != "creator" && $rank != "administrator"){
if($lockdocument == "✔️" ){      
if($setdocument == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setdocument == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming document");
}
}
}
}
if($contact){
if($rank != "creator" && $rank != "administrator"){
if($lockcontact == "✔️" ){    
if($setcontact == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setcontact == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming contact");
}
}
}
}
if($game){
if($rank != "creator" && $rank != "administrator"){
if($lockgame == "✔️" ){    
if($setgame == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgame == "kick" || $sakht == "on" ){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming game");
}
}
}
}
if($music){
if($rank != "creator" && $rank != "administrator"){
if($lockmusic == "✔️" ){    
if($setmusic == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setmusic == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming music");
}
}
}
}
if($gif){
if($rank != "creator" && $rank != "administrator"){
if($lockgif == "✔️" ){    
if($setgif == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setgif == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming gif");
}
}
}
}
if($voice){
if($rank != "creator" && $rank != "administrator"){
if($lockvoice == "✔️" ){      
if($setvoice == "del" ){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setvoice == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming voice");
}
}
}
}
if($text){
if($rank != "creator" && $rank != "administrator"){
if($spam == "✔️" ){  
$karehi=strlen($text);
if($karehi > $spamg){      
if($setspam == "del" ){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setspam == "kick" || $sakht == "on" ){ 
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming voice");
}
}
}
}
}


if($update->message->new_chat_member || $update->message->new_chat_photo || $update->message->new_chat_title || $update->message->left_chat_member || $update->message->pinned_message){
if ($lockteleg == "✔️"){
if($rank != "creator" && $rank != "administrator"){
bot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}



if($text){
if($rank != "creator" && $rank != "administrator"){
if($locktext == "✔️" ){  
if($settext == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($settext == "kick" || $sakht == "on"){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming text");
}
}
}
}


if(preg_match("/^(.*)a|a(.*)|(.*)b|b(.*)|(.*)c|c(.*)|(.*)d|d(.*)e|e(.*)|(.*)f|f(.*)|(.*)g|g(.*)|(.*)h|h(.*)|(.*)i|i(.*)|(.*)j|j(.*)|(.*)k|k(.*)|(.*)l|l(.*)|(.*)m|m(.*)|(.*)n|n(.*)|(.*)o|o(.*)|(.*)p|p(.*)|(.*)q|q(.*)|(.*)r|r(.*)|(.*)s|s(.*)|(.*)t|t(.*)|(.*)w|w(.*)|(.*)v|v(.*)|(.*)w|w(.*)|(.*)x|x(.*)|(.*)y|y(.*)|(.*)z|z(.*)(.*)A|A(.*)|(.*)B|B(.*)|(.*)C|C(.*)|(.*)D|D(.*)E|E(.*)|(.*)F|F(.*)|(.*)G|G(.*)|(.*)H|H(.*)|(.*)I|I(.*)|(.*)J|J(.*)|(.*)K|K(.*)|(.*)I|I(.*)|(.*)M|M(.*)|(.*)N|N(.*)|(.*)O|O(.*)|(.*)P|P(.*)|(.*)Q|Q(.*)|(.*)R|R(.*)|(.*)S|S(.*)|(.*)T|T(.*)|(.*)W|W(.*)|(.*)V|V(.*)|(.*)w|w(.*)|(.*)X|X(.*)|(.*)Y|Y(.*)|(.*)Z|Z(.*)/",$text)){
preg_match("/^(.*)a|a(.*)|(.*)b|b(.*)|(.*)c|c(.*)|(.*)d|d(.*)e|e(.*)|(.*)f|f(.*)|(.*)g|g(.*)|(.*)h|h(.*)|(.*)i|i(.*)|(.*)j|j(.*)|(.*)k|k(.*)|(.*)l|l(.*)|(.*)m|m(.*)|(.*)n|n(.*)|(.*)o|o(.*)|(.*)p|p(.*)|(.*)q|q(.*)|(.*)r|r(.*)|(.*)s|s(.*)|(.*)t|t(.*)|(.*)w|w(.*)|(.*)v|v(.*)|(.*)w|w(.*)|(.*)x|x(.*)|(.*)y|y(.*)|(.*)z|z(.*)(.*)A|A(.*)|(.*)B|B(.*)|(.*)C|C(.*)|(.*)D|D(.*)E|E(.*)|(.*)F|F(.*)|(.*)G|G(.*)|(.*)H|H(.*)|(.*)I|I(.*)|(.*)J|J(.*)|(.*)K|K(.*)|(.*)I|I(.*)|(.*)M|M(.*)|(.*)N|N(.*)|(.*)O|O(.*)|(.*)P|P(.*)|(.*)Q|Q(.*)|(.*)R|R(.*)|(.*)S|S(.*)|(.*)T|T(.*)|(.*)W|W(.*)|(.*)V|V(.*)|(.*)w|w(.*)|(.*)X|X(.*)|(.*)Y|Y(.*)|(.*)Z|Z(.*)/",$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($lockenglish == "✔️" ){  
if($setenglish == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setenglish == "kick" || $sakht == "on"){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming text");
}
}
}
}


if(preg_match("/^(.*)س|س(.*)|(.*)ح|ح(.*)|(.*)ا|ا(.*)|(.*)س|(.*)س|س(.*)|(.*)ب|ب(.*)|(.*)ت|ت(.*)|(.*)ج|ج(.*)|(.*)چ|چ(.*)|(.*)خ|خ(.*)|(.*)د|د(.*)|(.*)ر|ر(.*)|(.*)ش|ش(.*)|(.*)ع|ع(.*)|(.*)ف|ف(.*)|(.*)ک|ک(.*)|(.*)ل|ل(.*)|(.*)م|م(.*)|(.*)ن|ن(.*)|(.*)و|و(.*)|(.*)ه|ه(.*)|(.*)ی|ی(.*)|(.*)ز|ز(.*)/",$text)){
preg_match("/^(.*)س|س(.*)|(.*)ح|ح(.*)|(.*)ا|ا(.*)|(.*)س|(.*)س|س(.*)|(.*)ب|ب(.*)|(.*)ت|ت(.*)|(.*)ج|ج(.*)|(.*)چ|چ(.*)|(.*)خ|خ(.*)|(.*)د|د(.*)|(.*)ر|ر(.*)|(.*)ش|ش(.*)|(.*)ع|ع(.*)|(.*)ف|ف(.*)|(.*)ک|ک(.*)|(.*)ل|ل(.*)|(.*)م|م(.*)|(.*)ن|ن(.*)|(.*)و|و(.*)|(.*)ه|ه(.*)|(.*)ی|ی(.*)|(.*)ز|ز(.*)/",$text,$match);
if($rank != "creator" && $rank != "administrator"){
if($lockfarsi == "✔️" ){  
if($setfarsi == "del"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
if($setfarsi == "kick" || $sakht == "on"){  
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
bot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>$update->message->from->id
  ]);
//////@social_programming text");
}
}
}
}
if(preg_match("/^(.*)|(.*)/",$edit)){
preg_match("/^(.*)|(.*)/",$text,$match);
if ($lockedit == "✔️"){
if($rank != "creator" && $rank != "administrator"){
	bot('deletemessage',[
    'chat_id'=>$chat_edit_id,
    'message_id'=>$message_edit_id
    ]);
	}
}
}

if (($text ) && $update->message->is_bot) {
 bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->from->id
  ]);
}
//////##########################################################

if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($rank != "creator" && $rank != "administrator"){   
if($lockall == "✔️"){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}
///########*******************#################
if($text == "/addtimechat" && $from_id == $ADMIN){
mkdir("data/$chat_id/time"); 
file_put_contents("data/$chat_id/addtimechat.txt","add");  
SendMessage($chat_id,"انجام شد");
}
if($text == "/remtimechat" && $from_id == $ADMIN){
rmdir("data/$chat_id/time");     
file_put_contents("data/$chat_id/addtimechat.txt","rem");  
SendMessage($chat_id,"انجام شد");
}

if($text == "/forsat"){
if($rank == "creator" or $rank == "administrator" ){       
rmdir("data/$chat_id/time"); 
sendmessage($chat_id,"فرصت کلی صورت گرفت");
mkdir("data/$chat_id/time"); 
}
}
if($text == "/offtimechat" && $addtimechat == "add"){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/addtimechat12.txt","off");  
SendMessage($chat_id,"انجام شد");
}
}
if($text == "/ontimechat" && $addtimechat == "add"){
if($rank == "creator" or $rank == "administrator" ){      
file_put_contents("data/$chat_id/addtimechat12.txt","on");  
SendMessage($chat_id,"انجام شد");
}
}
if ( strpos($text ,'/setchat') !== false ){
$setnumchat= str_replace("/setchat","",$text);
if($rank == "creator" or $rank == "administrator" ){
file_put_contents("data/$chat_id/addtimechat2.txt","$setnumchat"); 
sendmessage($chat_id,"تعداد به  $setnumchat تغیر یافت");
}
}

if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){
if($addtimechat == "add" && $addtimechat12 == "on"){
if($rank != "creator" && $rank != "administrator"){     
if($eds != "ad"){ 
file_put_contents("data/$chat_id/time/$from_id.txt","0"); 
file_put_contents("data/$chat_id/time/$from_id 8.txt","ad"); 
//sendmessage($chat_id,"ساخته شد");  
} 
}
}
}

if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice){    
if($addtimechat == "add" && $addtimechat12 == "on"){
if($rank != "creator" && $rank != "administrator"){ 
$keke = file_get_contents("data/$chat_id/time/$from_id.txt");  
$delfor = $keke + 1;    
file_put_contents("data/$chat_id/time/$from_id.txt","$delfor");
if($kekee >= $addtimechat2){    
bot('deleteMessage',[
'chat_id'=>$chat_id,
'message_id'=>$message->message_id
  ]);
}
}
}
}
//########################################################
if($lockbot == "✔️" ){ 
if (preg_match('/^(.*)([Bb][Oo][Tt])/s',$newchatmemberu) && $lockbot == "✔️"  && $newchatmemberu != "social_test_bot") {
bot('kickChatMember',[
 'chat_id'=>$chat_id,
  'user_id'=>$update->message->new_chat_member->id
  ]);
}
}


if($joinmember){
if($wel == "✔️"){    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"$name  welcome",
        ]);
  }   
}

if($text == "/welcome on" || $text == "/ان خوش امد" && $add == "✔️"){
if($add == "✔️"){   
if($rank == "creator" or $rank == "administrator"){
file_put_contents("data/$chat_id/wel.txt","✔️");    
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"welcome on",
        ]);
  }   
}
}
if($text == "/welcome off" || $text == "/اف خوش امد" && $add == "✔️"){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){     
file_put_contents("data/$chat_id/wel.txt","✖️");   
sendaction($chat_id, typing);
        bot('sendmessage', [
                'chat_id' =>$chat_id,
                'text' =>"wlcome off",
        ]);
  }    
}
}

if($rt && $text=="/kick" || $rt &&  $text == "/کیک" ){
if($add == "✔️"){    
if($rank == "creator" or $rank == "administrator"){   
sendAction($chat_id, 'typing');
	bot('kickChatMember',[
    'chat_id'=>$chat_id,
    'user_id'=>$rtid
      ]);
bot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"kick the user.",
  'parse_mode'=>'MarkDown',
	]);
	}
}
}


if($text == '/time' || $text == "/زمان" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>"
ساعت:$time
تاریخ:$date",
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/zekr' || $text == "/ذکر" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$zekr,
        'parse_mode'=>"MarkDown",        
            ]);
}

if($text == '/hadis' || $text == "/حدیث" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$hadis,
        'parse_mode'=>"MarkDown",
            ]);
}

if($text == '/danestani' || $text == "/دانستنی" && $add == "✔️"){ 
	bot('sendMessage',[
       'chat_id'=>$chat_id,
        'text'=>$danestani,
        'parse_mode'=>"MarkDown",
            ]);
}



if($reply && $text =="/pin" || $text == "/پین" && $add == "✔️"){
if($add == "✔️"){     
if($rank == "creator" or $rank == "administrator"){
 bot('pinChatMessage',[
    'chat_id'=>$chat_id,
    'message_id'=> $update->message->reply_to_message->message_id
      ]);
   }
}
}

if( $text =="/unpin" || $text == "/ان پین" && $add == "✔️"){
if($add == "✔️"){ 
if($rank == "creator" or $rank == "administrator"){
 bot('unpinChatMessage',[
    'chat_id'=>$chat_id,
      ]);
   }
}
}

if($text == "/social" || $text == "/سوشال" && $from_id == 381292768){
sendaction($chat_id, typing);
sendmessage($chat_id,"
+  version:4.6 +   
به نام خدا 
کاری از تیم برنامه نویسی اجتماعی
@Getro
نوشته شده توسط
@bogifa
با تشکر از 
دوستان عزیز
بابت متن های جدید
بیس انتی فلود
و بخاطر بیس شارژ گروه
-------------
بعد از این نسخه
چند تیکه کد
(پلاگ)
جهت فیلتر کلمات و ادد اجباری در گروه به سورس اضافه خواهد شد و دیگر اپدیتی ارائه نخواهد داده شد
------------
و سورس  جدیدی با نام کلاسیک 
(زدروبوت۲)
با امکانات بی نظیری و پایگاه داده جیسون 
عرضه خواهد شد.
تشکر از همه کسانی که از سورس استفاده و با این کارشون از ما حمایت میکنند. ");

  } 
//
if($rt && $text == "/mute")
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					   mkdir("data/$chat_id/muteuser");
	                   file_put_contents("data/$chat_id/muteuser/$rtid.txt","mute");
                       sendmessage($chat_id,"کاربر مورد نظر ساکت شد");
                    }
		    }
            
	}
//###### unmute #######//
if($rt && $text == "/unmute")
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
	                   file_put_contents("data/$chat_id/muteuser/$rtid.txt","unmute");
                       sendmessage($chat_id,"کاربر مورد نظر از سکوت خارج شد");
                    }
		    }
            
	}

//########## del msg #############//
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice)
    {
		if($rank != "creator" && $rank != "administrator")
		{   
			if($muteuser == "mute")
			{    
				bot('deleteMessage',[
				'chat_id'=>$chat_id,
				'message_id'=>$message->message_id
				]);
            }
	    }
    }
//##########################################################warn#########################################//
if ( strpos($text ,'/setwarn') !== false )
{
$setwarnt= str_replace("/setwarn","",$text);
	if($rank == "creator" or $rank == "administrator" )
	{
		file_put_contents("data/$chat_id/warntime.txt","$setwarnt"); 
		sendmessage($chat_id,"تعداد به  $setwarnt تغیر یافت");
	}
}
//###################//
if(($rt && $text == "/warn") && $warnuser2 == '' )
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					mkdir("data/$chat_id/warn");
					file_put_contents("data/$chat_id/warn/$rtid.txt","0");
					$welwarn = file_get_contents("data/$chat_id/warn/$rtid.txt");
					$wranlast = $welwarn +1 ;
	                file_put_contents("data/$chat_id/warn/$rtid.txt","$wranlast");				
					}
			}
	}			

//######################

if(($rt && $text == "/warn") && $warnuser2 >= 0 )
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					   $welwarn = file_get_contents("data/$chat_id/warn/$rtid.txt");
					   $wranlast = $welwarn +1 ;
	                   file_put_contents("data/$chat_id/warn/$rtid.txt","$wranlast");
                       sendmessage($chat_id,"کاربر مورد نظر یک اخطار گرفت ");
                    }
		    }
            
	}
	
//###### warn #######//
if(($rt && $text == "/unwarn") && $warnuser2 > 0 )
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
					   $welwarn = file_get_contents("data/$chat_id/warn/$rtid.txt");
					   $wranlast = $welwarn -1 ;
	                   file_put_contents("data/$chat_id/warn/$rtid.txt","$wranlast");
                       sendmessage($chat_id,"یکی از اخطار های کاربر مورد نظر کاهش یافت");
                    }
		    }
            
	}

//#############################//
if($rt && $text == "/del warn")
    {
	  if($type == "supergroup")
		    {
			  	if($rank == "creator" or $rank == "administrator")
	                {
	                   file_put_contents("data/$chat_id/warn/$rtid.txt","0");
                       sendmessage($chat_id,"اخطار  های کاربر به صفر رسید");
                    }
		    }
            
	}
//#########id#####//
if($rt && $text == "/info")
    {
	    if($type == "supergroup")
		{
			if($rank == "creator" or $rank == "administrator")
	        {
                sendmessage($chat_id," \n
🔗ایدی گپ = $chat_id
🖋نام گپ = $gpname 
〰〰〰〰〰〰〰〰〰
⚜️نام کاربر = $name 
🔰ایدی کاربر =  $rtid
❌اخطار های کاربر = $warnuser2/ $warntime
🆔یوزر نیم کاربر = 
https://t.me/$username ");
            }
		}
            
	}
//########## del msg #############//
if($text || $photo || $video || $location || $sticker || $document || $contact || $music || $gif || $voice)
{
	if($type == "supergroup")
	{
		if($rank != "creator" && $rank != "administrator")
		{   
			if($warnuser > $warntime)
			{    
			bot('kickChatMember',[
				'chat_id'=>$chat_id,
				'user_id'=>$update->message->from->id
			]);
			file_put_contents("data/$chat_id/warn/$from_id.txt","0");
			sendmessage($chat_id,"کاربر $from_id  به دلیل داشتن حداکثر اخطار از گروه ریمو شد.");
            }
	    }
	}
}
//###############set name###############//
if ( strpos($text ,'/setname') !== false  ) 
	{
	  if($rank == "creator" or $rank == "administrator")
	  {
		$newname= str_replace("/setname","",$text);
		if ($type == 'supergroup')
		{
			sendAction($chat_id, 'typing');
			bot('setChatTitle',[
				'chat_id'=>$chat_id,
				'title'=>$newname
			]);
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=>"#انجام شد.",
				'parse_mode'=>'MarkDown',
			]);
		}
	  }
	}
//##################### search #######################//
if($text == "/google")
	{
		if($rank == "creator" or $rank == "administrator")
		{	
			sendmessage($chat_id,"متنی که میخوای تو گوگل برات سرچ کنمو بده بیاد");
			file_put_contents("data/$chat_id/step2.txt","google");
		}
	}
if($step2 == "google")
	{
		if($rank == "creator" or $rank == "administrator")
		{	    
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=>"
				کانال ما:
				🆔: @Getro
				[$text](http://lmgtfy.com/?q=$text).
				",
				'parse_mode'=>"MarkDown",
            ]);
				file_put_contents("data/$chat_id/step2.txt","noonno");			
		}
	}
//###################################################//
if($text == "/bing")
	{
		if($rank == "creator" or $rank == "administrator")
		{	
			sendmessage($chat_id,"متنی که میخوای برات سرچ کنمو بفرست");
			file_put_contents("data/$chat_id/step2.txt","bing");
		}
	}
if($step2 == "bing")
	{
		if($rank == "creator" or $rank == "administrator")
		{	    
			bot('sendmessage',[
			'chat_id'=>$chat_id,
				'text'=>"
				کانال ما:
				🆔: @Getro
				[$text](http://lmgtfy.com/?s=b&q=$text).
				",
				'parse_mode'=>"MarkDown",
            ]);
				file_put_contents("data/$chat_id/step2.txt","noonno");			
		}
	}
//########################################################//
 //#############link################//
 if($text=="/link" && $from_id == $ADMIN)
	{
		if ($type == 'supergroup')
		{
			$getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
			$jsonlink = json_decode($getlink, true);
			$getlinkde = $jsonlink['result'];
			sendAction($chat_id, 'typing');
			bot('sendmessage',[
				'chat_id'=>$chat_id,
				'text'=>"لینک گروه :\n$getlinkde",
				'parse_mode'=>'html',
			]);
		}
	}	
//###########ping#############//
if($text == '/ping' )
  {
    if ($type == 'supergroup')
    {
        bot('sendMessage',[
            'chat_id'=>$chat_id,
            'text'=>"bot is online! ",
      'parse_mode'=>'MarkDown',
            'reply_markup'=>json_encode([
            'inline_keyboard'=>[
            [['text'=>"🎗کانال ما🎗",'url'=>"http://telegram.me/Getro"]],
            ]
            ])
        ]);
    }  
  } 
 //ping2
if($text == '/ping2')
	{
		sendaction($chat_id,'typing');
		bot('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"
`ZED is online`
*__________________*
🎗کانال ما🎗: 
🆔: @Getro
🍃مدیر🍃: 
🆔: @bogifa",
			'parse_mode'=>'MarkDown',
		]);
	}
//#######leave###########//
if($text == "/leave"  && $from_id == $ADMIN)
	{
			sendmessage($chat_id,"ملت بای بای");	
			bot('LeaveChat',[
			'chat_id'=>$chat_id
			]);
		}	
//####################rmsg#####################
if ( strpos($text, '/rmsg') !== false  ) {
if ($type == 'supergroup'){
if ($rank == "creator" or $rank == "administrator"){
$num = str_replace("/rmsg","",$text);
if ($num <= 200 && $num >= 1){
for($i=$rmsg; $i>=$rmsg-$num; $i--){
bot('deletemessage',[
 'chat_id' => $chat_id,
 'message_id' =>$i,
              ]);
}
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text' =>"تعداد $num پیام پاک شد",
              ]);
}else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"عدد باید بین 1تا 200 باشد.",
              ]);
}
}
}
}

//#########################################
if(strpos($text,'/setrules') !==false && $type == "supergroup"){
if($rank == "creator" or $rank == "administrator"){	
$rules = str_replace("/setrules ","",$text);
file_put_contents("data/$chat_id/rules.txt",$rules);
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>'OK!SET RULES.
$rules',
]);
}
}
elseif(preg_match('([!/#]rules)',$text) && $type == "supergroup"){
$rules = file_get_contents("data/$chat_id/rules.txt");
bot('sendMessage',[
'chat_id'=>$chat_id,
'reply_to_message_id'=>$message_id,
'text'=>$rules,
]);
}
//end new
if($text == "/save plug" && $from_id == $ADMIN){
mkdir("data/$ADMIN");    
file_put_contents("data/$from_id/step.txt","namefile");
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"برای پوشه خود یک نام انتخاب کنید
بدون فرمت 
",
            ]);
        }
if($step == "namefile" && $text && $from_id == $ADMIN){
    file_put_contents("data/$from_id/step.txt","upload");
$text2 = $message->text;
 file_put_contents("data/$from_id/namefile.txt","$text2");

    $mem = explode("\n",$plug);
    $add_plug = file_get_contents("plug.php");
    $add_plug .= "include '$text2.php';"."\n";
    file_put_contents("plug.php","$add_plug");    

bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"نام فایل شما با موفقیت ذخیره شد:
$text2.php",
            ]);
            bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"پلاگین خود را با پسوند php ارسال  کنید",
            ]);
        }
if($step == "upload" && $document  && $from_id == $ADMIN){
    file_put_contents("data/$from_id/step.txt","none");
      $document = $message->document;
      $file = $document->file_id;
      $get = bot('getfile',['file_id'=>$file]);
      $patch = $get->result->file_path;
      $source = file_put_contents("$nfile.php",file_get_contents('https://api.telegram.org/file/bot'.$token.'/'.$patch));
      $source = file_get_contents("$nfile.php");
      $source = str_replace("fwrite","nottrue",$source);
      $source = str_replace("fclose","nottrue",$source);
      $source = str_replace("rmdir","nottrue",$source);
      $source = str_replace("file_id","nottrue",$source);
      $source = str_replace("fopen","nottrue",$source);
      file_put_contents("plugin/$nfile.php",$source);
bot('sendmessage', [
                'chat_id' => $chat_id,
                'text' =>"فایل با موفقیت ذخیره شد!",
            ]);
        }
////##################################################
if($text == "/plug list"  && $from_id == $ADMIN){
sendmessage($chat_id,"پلاگین ها به صورت زیر میباشند");
sendmessage($chat_id,"$plug");
}

if($text == "/set plug"  && $from_id == $ADMIN){
sendmessage($chat_id,"لطفا لیست زیر را مرتب کرده وبه ربات ارسال نمایید
توجه کنید عبارت
<?php
را در نظر نگیرید و انرا در متن تغیرات ارسالی قرار ندهید");
sendmessage($chat_id,"$plug"); 
file_put_contents("data/$from_id/step.txt","setplug");
}
if($step == "setplug" && $text  && $from_id == $ADMIN){
file_put_contents("plug.php","<?php \n $text \n"); 
sendmessage($chat_id,"
تغیرات اعمال شد
جهت دیدن لیست پلاگین ها بر دستور
/plug list
را ارسال کنید
");
file_put_contents("data/$from_id/step.txt","no");
}
//##########################################
if($text == "/del plug"  && $from_id == $ADMIN){
sendmessage($chat_id,"
اسم پلاگین مورد نظر را برای پاک کردن از لیست زیر همراه با پسوند .php پیدا کنید و بفرستید
توجه کنید که بعد از پاک کردن پلاگین در قسمت 
/set plug
لیست پلاگین های خود را مرتب کنید");
sendmessage($chat_id,"$plug"); 
file_put_contents("data/$from_id/step.txt","delplug");
}
if($step == "delplug" && $text && $from_id == $ADMIN){
unlink("$text"); 
sendmessage($chat_id,"
تغیرات اعمال شد
لطفا با دستور
/set plug
لیست پلاگین های خود را مرتب کنید .
");
file_put_contents("data/$from_id/step.txt","nonnn");
}
///////////##########################################
if (strpos($text , "/setflood") !== false && $type == 'supergroup') {
if ($rank == "creator" or $rank == "administrator"){
$we = str_replace("/setflood","",$text);
if ($we <= 20 && $we >= 3){
file_put_contents("data/$chat_id/numflood.txt","$we");
SendMessage($chat_id,"تنظیم شد");
}
else{
bot('sendmessage',[
 'chat_id' => $chat_id,
 'text'=>"ورودی باید عددی بیدن 3 تا 20 باشد.",
              ]);
}
}
}
if (($text == "/clear flood" || $text == "/تمیز کردن فلود" )&& $from_id == $ADMIN) {
rmdir("data/spam");
mkdir("data/spam");
SendMessage($chat_id,"کش پاک شد");
}
if (($text == "/lock flood" || $text == "/قفل فلود")&& $type == 'supergroup') {
if ($rank == "creator" or $rank == "administrator"){
file_put_contents("data/$chat_id/lockflood.txt","✔️");
SendMessage($chat_id,"#fløøđłиg ρøšтłиg ħαš вeeи lø¢κeđ🔒");
}
}
if (($text == "/unlock flood" || $text == "/بازکردن فلود")&& $type == 'supergroup') {
if ($rank == "creator" or $rank == "administrator"){
file_put_contents("data/$chat_id/lockflood.txt","✖️");
SendMessage($chat_id,"#fløøđłиg  ρøšтłиg ħαš вeeи υиlø¢κeđ🔓");
}
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
}
}
//#######################hrlper///##################
if(($text == "/option" || $text == "/گزینه") && $type == "supergroup")
{
	if($rank == "creator" or $rank == "administrator")
	{
		sendaction($chat_id,'typing');
		bot('sendMessage',[
			'chat_id'=>$chat_id,
			'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@social_programming",
			'parse_mode'=>'html',
			'reply_markup'=>json_encode([
			'inline_keyboard'=>[
//              [['text'=>"👇دریافت تنظیمات👇",'callback_data'=>"null"]], 
			  [['text'=>"⚙️تنظیمات⚙️",'callback_data'=>"settings"]],
  //            [['text'=>"👇دریافت راهنما👇",'callback_data'=>"null"]],
			  [['text'=>"🤔راهنما🤔",'callback_data'=>"help"],['text'=>"🏵درباره ما🏵",'callback_data'=>"infodev"]], 
	//		  [['text'=>"	👇دریافت تنظیمات فلود👇	",'callback_data'=>"null"]],
              [['text'=>"☣️فلود☣️",'callback_data'=>"lockflood"]],        
              [['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"✖️خروج✖️",'callback_data'=>"endd"]]       		  
			  ],'resize_keyboard'=>true
			])
		]);
	}  
}
if($data == 'back'){
if($rank_ == "creator" or $rank_ == "administrator"){
  bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@social_programming
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
//              [['text'=>"👇دریافت تنظیمات👇",'callback_data'=>"null"]], 
			  [['text'=>"⚙️تنظیمات⚙️",'callback_data'=>"settings"]],
  //            [['text'=>"👇دریافت راهنما👇",'callback_data'=>"null"]],
			  [['text'=>"🤔راهنما🤔",'callback_data'=>"help"],['text'=>"🏵درباره ما🏵",'callback_data'=>"infodev"]], 
	//		  [['text'=>"	👇دریافت تنظیمات فلود👇	",'callback_data'=>"null"]],
              [['text'=>"☣️فلود☣️",'callback_data'=>"lockflood"]],        
              [['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"✖️خروج✖️",'callback_data'=>"endd"]]          
              ]
        ])
            ]);
}else{
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"متاسفم! شما دسترسی ندارید 🔗",
        'show_alert' => false
       ]);
}
}
if($data == 'settings'){
if($rank_ == "creator" or $rank_ == "administrator"){
  bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
			  [['text'=>"⚜️تنظیمات رسانه⚜️",'callback_data'=>"helpmedd"],['text'=>"🔐تنظیمات قفل🔐",'callback_data'=>"helpother"]], 
              [['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"✖️خروج✖️",'callback_data'=>"endd"]],
              [['text'=>"🔙برگشت🔙",'callback_data'=>"back"]],			  
              ]
        ])
            ]);
}else{
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"متاسفم! شما دسترسی ندارید 🔗",
        'show_alert' => false
       ]);
}
}
if($data == "infodev")
{
	if($rank_ == "creator" or $rank_ == "administrator"){
		bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
+  version:4.6 +   
به نام خدا 
کاری از تیم برنامه نویسی اجتماعی
@Getro
نوشته شده توسط
@bogifa
با تشکر از 
دوستان عزیز
بابت متن های جدید
 بیس انتی فلود
و بخاطر بیس شارژ گروه
-------------
بعد از این نسخه
چند تیکه کد
(پلاگ)
جهت فیلتر کلمات و ادد اجباری در گروه به سورس اضافه خواهد شد و دیگر اپدیتی ارائه نخواهد داده شد
------------
و سورس  جدیدی با نام کلاسیک 
(زد روبوت ۲)
با امکانات بی نظیری و پایگاه داده جیسون 
عرضه خواهد شد.
تشکر از همه کسانی که از سورس استفاده و با این کارشون از ما حمایت میکنند.
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙برگشت🔙",'callback_data'=>"back"]],         
              ]
        ])
            ]);	
}
}

if($data == "help")
{
	if($rank_ == "creator" or $rank_ == "administrator"){
		bot('editmessagetext',[
       'chat_id'=>$chatid,
       'message_id'=>$messageid,
        'text'=>"
🔱Welcome to Help🔱

⚜️English Help List⚜️ :

🔲#》 /sudohelp
Special command for sudo robot

+=+=+=+=+=+=+=+

🔳#》 /lockhelp
social command to lock the robot

+=+=+=+=+=+=+=+

🔲#》 /modhelp
Special command for group manage

+=+=+=+=+=+=+=+

🔳#》 /funhelp
social command to fun
+=+=+=+=+=+=+=+
🎗Channel🎗:
🆔: @Getro
🍃Manager🍃:
🆔: @bogifa
",
        'parse_mode'=>"html",
        'reply_markup'=>json_encode([
            'inline_keyboard'=>[
              [['text'=>"🔙برگشت🔙",'callback_data'=>"back"]],         
              ]
        ])
            ]);	
}
}
  elseif($data=="f-"){
	  if($rank_ == "creator" or $rank_ == "administrator"){
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    file_put_contents("data/$chatid/numflood.txt","$floodnew");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
کاهش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodnew1",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  }
  elseif($data=="f+"){
	  	  if($rank_ == "creator" or $rank_ == "administrator"){
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    file_put_contents("data/$chatid/numflood.txt","$floodne");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
افزایش یافت✔️",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"$floods2",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$floodne2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  }

  elseif(($data=="lockflood" && $floods2=="✖️") && ($rank_ == "creator" or $rank_ == "administrator")){
    file_put_contents("data/$chatid/lockflood.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@social_programming",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  elseif(($data=="lockflood" && $floods2=="✔️" ) && ($rank_ == "creator" or $rank_ == "administrator")){
    file_put_contents("data/$chatid/lockflood.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"
به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@bogifa",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                   [
                   ['text'=>"🔖 قفل فلود",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockflood']
                   ],
                    [
                   ['text'=>"➖",'callback_data'=>'f-'],['text'=>"$flood2",'callback_data'=>"numflood"],['text'=>"➕",'callback_data'=>'f+']
                   ],
				   				   [
				   ['text'=>"🎗 کانال ما",'url'=>"https://telegram.me/Getro"],['text'=>"🔙برگشت🔙",'callback_data'=>"back"]
				   ],
                    ]
             ])
         ]);
  }
  elseif ($data == 'null')
{
bot('answerCallbackQuery',[
'callback_query_id'=>$update->callback_query->id,
'text'=>"اونوریارو بزن",
]);
}


/////////##################################################################################
	if($rank_ == "creator" or $rank_ == "administrator"){
if($data=="helpmedd"  ){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"
 به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@social_programming",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
  [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
	]
	])
	]);
	}
	 if($data=="helpother"  ){
         bot('editmessagetext',[
             'chat_id'=>$chatid,
  'message_id'=>$messageid,
  'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro",
	'reply_markup'=>json_encode([
	'resize_keyboard'=>true,
	'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
  
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
	]
	])
	]);
	}

  if($data=="lockphoto" && $lockphotof=="✔️"  ){
    file_put_contents("data/$chatid/lockphoto.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل عکس غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockphoto" && $lockphotof=="✖️"  ){
    file_put_contents("data/$chatid/lockphoto.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل عکس فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockvideo" && $lockvideof=="✔️"  ){
    file_put_contents("data/$chatid/lockvideo.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ویدیو غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                    
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
				   ]
             ])
         ]);
  }
  if($data=="lockvideo" && $lockvideof=="✖️"  ){
    file_put_contents("data/$chatid/lockvideo.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ویدیو فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockgame" && $lockgamef=="✔️"  ){
    file_put_contents("data/$chatid/lockgame.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل اینلاین غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockgame" && $lockgamef=="✖️"  ){
    file_put_contents("data/$chatid/lockgame.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل اینلاین فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
         ]
             ])
         ]);
  }
  if($data=="locksticker" && $lockstickerf=="✔️"  ){
    file_put_contents("data/$chatid/locksticker.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل استیکر غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
             
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="locksticker" && $lockstickerf=="✖️"  ){
    file_put_contents("data/$chatid/locksticker.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل استیکر فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockvoice" && $lockvoicef=="✔️"  ){
    file_put_contents("data/$chatid/lockvoice.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ویس غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockvoice" && $lockvoicef=="✖️"  ){
    file_put_contents("data/$chatid/lockvoice.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ویس فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                  
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockaudio" && $lockmusicf=="✔️"  ){
    file_put_contents("data/$chatid/lockmusic.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل اهنگ غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
              
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockaudio" && $lockmusicf=="✖️"  ){
    file_put_contents("data/$chatid/lockmusic.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل اهنگ فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockforward" && $lockforwardf=="✔️"  ){
    file_put_contents("data/$chatid/lockforward.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل فوروارد غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
          
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockforward" && $lockforwardf=="✖️"  ){
    file_put_contents("data/$chatid/lockforward.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل فوروارد فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
               
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockcontact" && $lockcontactf=="✔️"  ){
    file_put_contents("data/$chatid/lockcontact.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال مخاطب غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockcontact" && $lockcontactf=="✖️"  ){
    file_put_contents("data/$chatid/lockcontact.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال مخاطب فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                  
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockluction" && $locklocationf=="✔️"  ){
    file_put_contents("data/$chatid/locklocation.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال مکان غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockluction" && $locklocationf=="✖️"  ){
    file_put_contents("data/$chatid/locklocation.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال مکان فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
 
 
  if($data=="lockedit" && $lockeditf=="✔️"  ){
    file_put_contents("data/$chatid/lockedit.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ویرایش متن غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockedit" && $lockeditf=="✖️"  ){
    file_put_contents("data/$chatid/lockedit.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ویرایش متن فعال شد✅
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
                 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockusername" && $locktagf=="✔️"  ){
    file_put_contents("data/$chatid/locktag.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال هشتگ و یوزرنیم غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockusername" && $locktagf=="✖️"  ){
    file_put_contents("data/$chatid/locktag.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال یوزرنیم و تگ فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="locklink" && $locklinkf=="✔️"  ){
    file_put_contents("data/$chatid/locklink.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل لینک  غیر فعال شد❌",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                  	]
             ])
         ]);
  }
  if($data=="locklink" && $locklinkf=="✖️"  ){
    file_put_contents("data/$chatid/locklink.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل لینک فعال شد✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                  	]
             ])
         ]);
  }
  if($data=="lockbotf" && $lockbotf=="✔️"  ){
    file_put_contents("data/$chatid/lockbot.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل باتی دیگر غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
 [  
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockbotf" && $lockbotf=="✖️"  ){
    file_put_contents("data/$chatid/lockbot.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل باتی دیگر فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
    if($data=="locktelegram" && $lockfarsif=="✔️"  ){
    file_put_contents("data/$chatid/lockfarsi.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل فارسی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="locktelegram" && $lockfarsif=="✖️"  ){
    file_put_contents("data/$chatid/lockfarsi.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل فارسی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
      if($data=="lockdocument" && $lockdocumentf=="✔️"  ){
    file_put_contents("data/$chatid/lockdocument.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال فایل غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockdocument" && $lockdocumentf=="✖️"  ){
    file_put_contents("data/$chatid/lockdocument.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال فایل فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"$lockgiff",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
        if($data=="lockgif" && $lockgiff=="✔️"  ){
    file_put_contents("data/$chatid/lockgif.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال 🎇 گیف غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockgif" && $lockgiff=="✖️"  ){
    file_put_contents("data/$chatid/lockgif.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال 🎇 گیف فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
['text'=>"📂 فایل",'callback_data'=>'null'],['text'=>"$lockdocumentf",'callback_data'=>'lockdocument']
],
[
['text'=>"🎇 گیف",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockgif']
],
 
  [
 ['text'=>"📡 ارسال مکان",'callback_data'=>'null'],['text'=>"$locklocationf",'callback_data'=>'lockluction']
 ],
   [
 ['text'=>"🏞 تصویر",'callback_data'=>'null'],['text'=>"$lockphotof",'callback_data'=>'lockphoto']
 ],
  [
 ['text'=>"📱 ارسال شماره",'callback_data'=>'null'],['text'=>"$lockcontactf",'callback_data'=>'lockcontact']
 ],
  [
 ['text'=>"🔊 موسیقی",'callback_data'=>'null'],['text'=>"$lockmusicf",'callback_data'=>'lockaudio']
 ],
  [
 ['text'=>"🗣 صدا",'callback_data'=>'null'],['text'=>"$lockvoicef",'callback_data'=>'lockvoice']
 ],
  [
 ['text'=>"🎊 استیکر",'callback_data'=>'null'],['text'=>"$lockstickerf",'callback_data'=>'locksticker']
 ],
  [
 ['text'=>"💻 بازی",'callback_data'=>'null'],['text'=>"$lockgamef",'callback_data'=>'lockgame']
 ],
 [
['text'=>"🎥 فیلم",'callback_data'=>'null'],['text'=>"$lockvideof",'callback_data'=>'lockvideo']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
          if($data=="locktg" && $locktelegf=="✔️"  ){
    file_put_contents("data/$chatid/lockteleg.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل پیام ورود و خروج غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="locktg" && $locktelegf=="✖️"  ){
    file_put_contents("data/$chatid/lockteleg.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل پیام ورود خروج فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"$lockenglishf",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
            if($data=="lockenglish" && $lockenglishf=="✔️"  ){
    file_put_contents("data/$chatid/lockenglish.txt","✖️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال کلمات انگلیسی غیر فعال شد ❌
",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"✖️",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
  if($data=="lockenglish" && $lockenglishf=="✖️"  ){
    file_put_contents("data/$chatid/lockenglish.txt","✔️");
          bot('editmessagetext',[
              'chat_id'=>$chatid,
   'message_id'=>$messageid,
             'text'=>"به پنل مدیریتی خوش اومدین
لطفا یکی از گزینه های زیر رو انتخاب کنید.			
create by :
@Getro
قفل ارسال کلمات انگلیسی فعال شد ✅",
             'reply_markup'=>json_encode([
                 'inline_keyboard'=>[
 [
 ['text'=>"🌐لینک",'callback_data'=>'null'],['text'=>"$locklinkf",'callback_data'=>'locklink']
 ],
  [
 ['text'=>"☢️تگ",'callback_data'=>'null'],['text'=>"$locktagf",'callback_data'=>'lockusername']
 ],
  [
 ['text'=>"📝 ادیت",'callback_data'=>'null'],['text'=>"$lockeditf",'callback_data'=>'lockedit']
 ],
   
   
[   
['text'=>"👾 بات",'callback_data'=>'null'],['text'=>"$lockbotf",'callback_data'=>'lockbotf']
],
[
['text'=>"🇮🇷 فارسی",'callback_data'=>'null'],['text'=>"$lockfarsif",'callback_data'=>'locktelegram']
],
[
['text'=>"🇬🇧 انگلیسی",'callback_data'=>'null'],['text'=>"✔️",'callback_data'=>'lockenglish']
],
  [
 ['text'=>"↪️فوروارد",'callback_data'=>'null'],['text'=>"$lockforwardf",'callback_data'=>'lockforward']
 ],
[
['text'=>"📢سرویس تلگرام",'callback_data'=>'null'],['text'=>"$locktelegf",'callback_data'=>'locktg']
],
[
['text'=>"🔙 برگشت",'callback_data'=>'settings'],['text'=>"🎗کانال🎗",'url'=>'t.me/social_programming']
],
                    ]
             ])
         ]);
  }
}else{
 bot('answercallbackquery',[
        'callback_query_id'=>$update->callback_query->id,
        'text'=>"متاسفم! شما دسترسی ندارید 🔗",
        'show_alert' => false
       ]);
}
  
//////////////////////######################################
if(($data=="endd")&& ($rank_ == "creator" or $rank_ == "administrator"))
{
    bot('deletemessage',[
        'chat_id'=>$chatid,
        'message_id'=>$messageid,
    ]);
}	

unlink ("error_log");
?>
