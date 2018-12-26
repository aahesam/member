  <?php
ob_start();
error_reporting(0);
define('API_KEY', '795641758:AAEQL3FZovKgc0kzLnoFAfyrZt8g6ACfgNs');
//-----------------------------------------------------------------------------------------
//فانکشن MrPHPBot :
function MrPHPBot($method, $datas = [])
{
    $url = "https://api.telegram.org/bot" . API_KEY . "/" . $method;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $datas);
    $res = curl_exec($ch);
    if (curl_error($ch)) {
        var_dump(curl_error($ch));
    } else {
        return json_decode($res);
    }
}

//-----------------------------------------------------------------------------------------
//متغیر ها :
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$from_id = $message->from->id;
mkdir("data/$from_id");
$chat_id = $message->chat->id;
mkdir("data/$chat_id");
mkdir("data/$chat_id/$from_id");
$message_id = $message->message_id;
$first_name = $message->from->first_name;
$last_name = $message->from->last_name;
$username = $message->from->username;
$textmassage = $message->text;
$chatid = $update->callback_query->message->chat->id;
$fm = $update->callback_query->from->id;
$step = file_get_contents("data/$from_id/file.txt");
$owners = file_get_contents("data/$chat_id/owner.txt");
$owners2 = file_get_contents("data/$chatid/owner.txt");
$locklink = file_get_contents("data/$chat_id/locklink.txt");
$welcome = file_get_contents("data/$chat_id/welcome.txt");
$textwelcome = file_get_contents("data/$chat_id/textwelcome.txt");
$Dev = 698038310;
$txtt = file_get_contents('data/users.txt');
$txttt = file_get_contents('data/member.txt');
$forward_from_chat = $update->message->forward_from_chat;
$from_chat_id = $forward_from_chat->id;
$data = $update->callback_query->data;
$firstcall = $update->callback_query->message->chat->first_name;
$usercall = $update->callback_query->message->chat->username;
$messageid = $update->callback_query->message->message_id;
$tc = $update->message->chat->type;
$gpname = $update->callback_query->message->chat->title;
$textpost = file_get_contents("data/$chatid/textpost.txt");
$linkpost = file_get_contents("data/$chatid/linkpost.txt");
$namepost = file_get_contents("data/$chatid/namepost.txt");
$channel = file_get_contents("data/$chatid/channel.txt");
$newchatmemberid = $update->message->new_chat_member->id;
$newchatmemberu = $update->message->new_chat_member->username;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$rtid = $update->message->reply_to_message->from->id;
$rttext = $update->message->reply_to_message->text;
$tedadmsg = $update->message->message_id;
$fwd = $update->message->forward_from;
$edit = $update->edited_message->text;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->message->from->id;
$locklink = file_get_contents("data/$chat_id/locklink.txt");
$lockphoto = file_get_contents("data/$chat_id/lockphoto.txt");
$lockedit = file_get_contents("data/$chat_id/lockedit.txt");
$lockgame = file_get_contents("data/$chat_id/lockgame.txt");
$locklocation = file_get_contents("data/$chat_id/locklocation.txt");
$lockcontact = file_get_contents("data/$chat_id/lockcontact.txt");
$lockusername = file_get_contents("data/$chat_id/lockusername.txt");
$lockaudio = file_get_contents("data/$chat_id/lockaudio.txt");
$namegroup = $update->message->chat->title;
$lockvoice = file_get_contents("data/$chat_id/lockvoice.txt");
$locksticker = file_get_contents("data/$chat_id/locksticker.txt");
$lockjoin = file_get_contents("data/$chat_id/lockjoin.txt");
$lockdecument = file_get_contents("data/$chat_id/lockdecument.txt");
$lockvideo = file_get_contents("data/$chat_id/lockvideo.txt");
$lockgif = file_get_contents("data/$chat_id/lockgif.txt");
$lockforward = file_get_contents("data/$chat_id/lockforward.txt");
$lockoperator = file_get_contents("data/$chat_id/lockoperator.txt");
$lockfosh = file_get_contents("data/$chat_id/lockfosh.txt");
$locklink2 = file_get_contents("data/$chatid/locklink.txt");
$lockphoto2 = file_get_contents("data/$chatid/lockphoto.txt");
$today = date("Y-m-d", time()+$time_zone);
$expire = file_get_contents("data/$chat_id/expire.txt");
$lockedit2 = file_get_contents("data/$chatid/lockedit.txt");
$lockgame2 = file_get_contents("data/$chatid/lockgame.txt");
$locklocation2 = file_get_contents("data/$chatid/locklocation.txt");
$lockcontact2 = file_get_contents("data/$chatid/lockcontact.txt");
$lockusername2 = file_get_contents("data/$chatid/lockusername.txt");
$lockaudio2 = file_get_contents("data/$chatid/lockaudio.txt");
$muteall2 = file_get_contents("data/$chatid/muteall2.txt");
$lockvoice2 = file_get_contents("data/$chatid/lockvoice.txt");
$locksticker2 = file_get_contents("data/$chatid/locksticker.txt");
$lockjoin2 = file_get_contents("data/$chatid/lockjoin.txt");
$lockdecument2 = file_get_contents("data/$chatid/lockdecument.txt");
$lockvideo2 = file_get_contents("data/$chatid/lockvideo.txt");
$lockgif2 = file_get_contents("data/$chatid/lockgif.txt");
$lockforward2 = file_get_contents("data/$chatid/lockforward.txt");
$lockoperator2 = file_get_contents("data/$chatid/lockoperator.txt");
$lockbots2 = file_get_contents("data/$chatid/lockbots.txt");
$lockfosh2 = file_get_contents("data/$chatid/lockfosh.txt");
$mute_all  = file_get_contents("data/$chat_id/mute_all.txt");
$lockbots = file_get_contents("data/$chat_id/lockbots.txt");
$floods = file_get_contents("data/$chat_id/lockflood.txt");
$floods2 = file_get_contents("data/$chatid/lockflood.txt");
$flood = file_get_contents("data/$chat_id/numflood.txt");
$flood2 = file_get_contents("data/$chatid/numflood.txt");
$lockusername= file_get_contents("data/$chat_id/lockusername.txt");
$text = $update->inline_qurey->qurey;
$token = "795641758:AAEQL3FZovKgc0kzLnoFAfyrZt8g6ACfgNs";
$stat = file_get_contents("https://api.telegram.org/bot" . $token . "/getChatMember?chat_id=$chat_id&user_id=" .$from_id);
$statjson = json_decode($stat, true);
$status = $statjson['result']['status'];
$lockedit3 = file_get_contents("data/$chat_edit_id/lockedit.txt");
$get = file_get_contents("https://api.telegram.org/bot" . $token . "/getChatMember?chat_id=$chat_edit_id&user_id=" . $edit_for_id);
$info = json_decode($get, true);
$you = $info['result']['status'];
//-----------------------------------------------------------------------------------------
//فانکشن ها :
function SendMessage($chat_id, $text)
{
    MrPHPBot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => $text,
        'parse_mode' => 'MarkDown']);
}
function save($filename, $data)
{
    $file = fopen($filename, 'w');
    fwrite($file, $data);
    fclose($file);
}
function sendAction($chat_id, $action)
{
    MrPHPBot('sendChataction', [
        'chat_id' => $chat_id,
        'action' => $action]);
}
function Forward($berekoja, $azchejaei, $kodompayam)
{
    MrPHPBot('ForwardMessage', [
        'chat_id' => $berekoja,
        'from_chat_id' => $azchejaei,
        'message_id' => $kodompayam
    ]);
}
function  getUserProfilePhotos($token,$from_id) {
  $url = 'https://api.telegram.org/bot'.$token.'/getUserProfilePhotos?user_id='.$from_id;
  $result = file_get_contents($url);
  $result = json_decode ($result);
  $result = $result->result;
  return $result;
}
//-----------------------------------------------------------------------------------------
if ($textmassage == "" && $tc == "private") {
    sendAction($chat_id, 'typing');
    MrPHPBot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "",
        'parse_mode' => 'MarkDown',
    ]);
} //groupmanager

  if($update->message->new_chat_member | $update->message->new_chat_photo | $update->message->new_chat_title | $update->message->left_chat_member | $update->message->pinned_message | $update->message->forward_from | $update->message->forward_from_chat |  $update->message->decument | $update->message->audio | $update->message->photo | $update->message->sticker | $update->message->video | $update->message->voice | $update->message->video_note | $update->message->chat){
if($textmassage == "$textmassage"){
if ($mute_all== "| فعال | ✅"){
if ($status != "creator" && $status != "administrator"){
 MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message->message_id
    ]);
 }
}
}
}
if($textmassage=="سکوت"){
if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
   save("data/$chat_id/mute_all.txt","| فعال | ✅");
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"☆》بیصدا کردن #همه فعال شد🔇\n➖➖➖➖➖➖➖\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   ]
   ])
 ]);
  }
}
if($textmassage=="لغو سکوت"){
if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
  save("data/$chat_id/mute_all.txt","| غیر فعال | ❌");
  MrPHPBot('sendmessage',[
  'chat_id'=>$chat_id,
  'text'=>"☆》بیصدا کردن #همه غیر فعال شد🔊\n➖➖➖➖➖➖➖\nتوسط ☆> [ @$username ]",
  'reply_to_message_id'=>$message_id,
      'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   ]
   ])
 ]);
  }
}

elseif ($textmassage == "انلاینی") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "آنلاینم و حواسم به گروه است😉🌹",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
elseif (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $textmassage)) {
    preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($locklink == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل لینک") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/locklink.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال لینک در گروه ممنوع شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل لینک") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/locklink.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال لینک در گروه مجاز شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($update->message->photo) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockphoto == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل عکس") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockphoto.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال عکس در گروه ممنوع شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}elseif ($textmassage == "بازکردن قفل عکس") {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockphoto.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال عکس در گروه مجاز شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "/add" && $from_id == $Dev) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/owner.txt", "$from_id");
        save("data/$chat_id/lockvideo.txt", "✖️");
        save("data/$chat_id/lockbots.txt", "✔️");
        save("data/$chat_id/locklink.txt", "✔️");
        save("data/$chat_id/lockphoto.txt", "✖️");
        save("data/$chat_id/lockedit.txt", "✖️");
        save("data/$chat_id/lockoperator.txt", "✔️");
        save("data/$chat_id/lockforward.txt", "✔️");
        save("data/$chat_id/lockaudio.txt", "✖️");
        save("data/$chat_id/locksticker.txt", "✖️");
        save("data/$chat_id/lockvoice.txt", "✖️");
        save("data/$chat_id/lockcontact.txt", "✖️");
        save("data/$chat_id/locklocation.txt", "✖️");
        save("data/$chat_id/lockfosh.txt", "✔️");
        save("data/$chat_id/lockjoin.txt", "✖️");
        save("data/$chat_id/lockgame.txt", "✔️");
        save("data/$chat_id/lockdecument.txt", "✖️");
        save("data/$chat_id/lockusername.txt", "✔️");
        save("data/$chat_id/lockflood.txt", "✖️");
        save("data/$chat_id/muteall2.txt", "✖️");
        save("data/$chat_id/numflood.txt", "0");
        save("data/$chat_id/welcome.txt", "Welcome NewMember To Group");
        SendMessage($chat_id, "اضاف شد");
    }
}  elseif ($update->message->gif) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockgif == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}  elseif ($textmassage == "قفل گیف") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockgif.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال تصاویر متحرک در گروه ممنوع شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل گیف") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockgif.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال تصاویرمتحرک در گروه مجاز شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
if ($update->message->video) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockvideo == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل فیلم") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockvideo.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال فیلم در گروه ممنوع شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل فیلم") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockvideo.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "ارسال فیلم در گروه مجاز شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}
   }

if (preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $edit)) {
    preg_match("/^(.*)([Hh]ttp|[Hh]ttps|t.me)(.*)|([Hh]ttp|[Hh]ttps|t.me)(.*)|(.*)([Hh]ttp|[Hh]ttps|t.me)|(.*)[Tt]elegram.me(.*)|[Tt]elegram.me(.*)|(.*)[Tt]elegram.me|(.*)[Tt].me(.*)|[Tt].me(.*)|(.*)[Tt].me/", $textmassage, $match);
    if ($lockedit3 == "✔️") {
        if ($you != "creator" | $you != "administrator") {
            MrPHPBot('deletemessage', [
                'chat_id' => $chat_edit_id,
                'message_id' => $message_edit_id
            ]);
        }
    }
} elseif ($textmassage == "قفل ویرایش") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockedit.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ویرایش پیام فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل ویرایش") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockedit.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ویرایش پیام غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }
if ($update->message->game) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockgame == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل بازی") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockgame.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل انجام بازی در گروه فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل بازی") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockgame.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل انجام بازی در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}

elseif($textmassage == '/time'){
$photooo = file_get_contents('http://pwerteam.ir/t.php');
save('logo.png',$photooo);
MrPHPBot('sendsticker',[
 'chat_id'=>$chat_id,
 'sticker'=>new CURLFile('logo.png')
 ]);

 }
 
elseif($textmassage == 'سلام'){
$photooo = file_get_contents('https://ganok.ir/rebon/9.png');
save('9.png',$photooo);
MrPHPBot('sendsticker',[
 'chat_id'=>$chat_id,
 'reply_to_message_id'=>$message_id,
 'sticker'=>new CURLFile('9.png')
 ]);

 }


elseif ( strpos($textmassage , "/logo") !== false  ) {
$te = explode(" ",$textmassage);
if ($te['1'] != "") {
if ($tc == 'group' | $tc == 'supergroup'){

 MrPHPBot('sendphoto',[
    'chat_id'=>$chat_id,
    'photo'=>"http://api.monsterbot.ir/pic/?text=". $te['1'] ."&y=15&font=Steamy&fsize=90&bg=logo8",
	'caption'=>"",
	  'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 	
   ]
   ])
   ]);
   }  
}
}


   $rt = $update->message->reply_to_message;
 $rtid = $update->message->reply_to_message->from->id;
if($textmassage == "/silent" && $rt){
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
  if ($tc == 'group' | $tc == 'supergroup'){
   MrPHPBot('restrictChatMember',[
   'user_id'=>$rtid,
   'chat_id'=>$chat_id,
   'can_post_messages'=>false,
   'can_add_web_page_previews'=>false,
   'can_send_other_messages'=>false,
   'can_send_media_messages'=>false,
         ]);
  MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"کاربر به لیست سکوت گروه اضافه شد",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
    ]
    ])
]);
file_put_contents("data/$chat_id/silent.txt",$rtid);
}
} }

if($textmassage == "/unsilent" && $rt){
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
 MrPHPBot('restrictChatMember',[
   'user_id'=>$rtid,
   'chat_id'=>$chat_id,
   'can_post_messages'=>true,
   'can_add_web_page_previews'=>true,
   'can_send_other_messages'=>true,
   'can_send_media_messages'=>true,
         ]);
  MrPHPBot('sendMessage',[
'chat_id'=>$chat_id,
'text'=>"کاربر از لیست سکوت گروه پاک شد",
'reply_to_message_id'=>$re_msgid,
 'parse_mode'=>'html',
   'reply_markup'=>json_encode([
      'inline_keyboard'=>[
    ]
    ])
]);
unlink("data/$chat_id/silent.txt");
}
}  }
if(strpos($textmassage,"/setexpire") !== false and $from_id == $Dev and $tc != 'private'){
 $date2 = str_replace("/setexpire ","",$textmassage);
 if(is_numeric($date2)){
  if($date2 > 0){
   $date3 = $date2*86400;
   $time_zone = '12600';
   $expire = date("Y-m-d", time()+$date3+$time_zone);
   save("data/$chat_id/expire.txt",$expire);
   SendMessage($chat_id,"تاریخ انقضا گروه به $date2 روز دیگر تنظیم شد!",$message_id);
  }else{
   SendMessage($chat_id,"تعداد روز وارد شده باید از 0 روز بیشتر باشد!",$message_id);
  }
 }else{
  SendMessage($chat_id,"لطفا تعداد روز هارا با عدد وارد نماييد",$message_id);
 }
}
if($today == $expire){
 unlink('data/$chat_id/expire.txt');
 SendMessage($chat_id,"تاریخ انقضا این گروه به پایان رسیده است!");
 MrPHPBot('kickChatMember',[
 'chat_id'=>$chat_id,
 'user_id'=>448527737,
  ]);
}
$today = date("Y-m-d", time()+$time_zone);
$expire = file_get_contents("data/$chat_id/expire.txt");
if ($update->message->location) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($locklocation == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
}


elseif($textmassage=="قوانین"){
if ($tc == 'group' | $tc == 'supergroup'){  
$matn=file_get_contents("data/$chat_id/rules.txt");

 MrPHPBot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"$matn",
		 'parse_mode'=>'html',
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[

   ]
   ])
   ]);
   }   
}


elseif ( strpos($textmassage , '/setrules') !== false) {
	  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
  $te = explode(" ",$textmassage);
if ($te['1'] != "") {
    $code = str_replace("/setrules","","$textmassage");
file_put_contents("data/$chat_id/rules.txt",$code);

 MrPHPBot('sendMessage',[
    'chat_id'=>$chat_id,
    'text'=>"قوانین جدید ثبت شد",
		   'reply_markup'=>json_encode([
    'inline_keyboard'=>[
 
   ]
   ])
   ]);
   }   
}
}

elseif($textmassage=="/id" or $textmassage=="ایدی" or $textmassage=="id"){
if ($tc == 'group' | $tc == 'supergroup'){
$getuserprofile = getUserProfilePhotos($token,$from_id);
$cuphoto = $getuserprofile->total_count;
$getuserphoto = $getuserprofile->photos[0][0]->file_id;
  
  MrPHPBot('sendphoto',[
  'chat_id'=>$chat_id,
'photo'=>$getuserphoto,
  'caption'=>"💭ایدی گروه : [$chat_id]
  
🚦نام شما : [$first_name]

🔹ایدی : [$from_id]

🔸یوزرنیم : [@$username]",

     'reply_markup'=>json_encode([
    'inline_keyboard'=>[
   
   ]
   ])
   ]);
   }    
   }
   
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$textmassage)){
preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$textmassage,$match);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$update->message->caption)){
preg_match("/^(.*)@|@(.*)|(.*)@(.*)/",$textmassage,$match,$update->message->caption);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
if(preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$update->message->caption)){
preg_match("/^(.*)#|#(.*)|(.*)#(.*)/",$textmassage,$match,$update->message->caption);
if ($tc == 'group' | $tc == 'supergroup'){
if ($lockusername == "✔️"){
if ($status != "creator" && $status != "administrator"){
  save("data/$from_id/file.txt","none");
  
	MrPHPBot('deletemessage',[
    'chat_id'=>$chat_id,
    'message_id'=>$message_id
    ]);
	}
}
}
}
elseif($textmassage=="قفل ایدی" ){
     if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✔️");
  
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم فعال شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}}
elseif($textmassage=="بازکردن قفل ایدی" ){
     if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
if ($tc == 'group' | $tc == 'supergroup'){
  save("data/$chat_id/lockusername.txt","✖️");
  
	MrPHPBot('sendmessage',[
	'chat_id'=>$chat_id,
	'text'=>"قفل ارسال یوزرنیم باز شد.",
  'parse_mode'=>'MarkDown',
	]);
	}
}}

elseif ($textmassage == "قفل مکان") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/locklocation.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل اشتراک گزاری مکان فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }elseif ($textmassage == "بازکردن قفل مکان") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/locklocation.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل اشتراک گذاری مکان غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }
if ($update->message->contact) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockcontact == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل مخاطب") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockcontact.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل اشتراک گزاری شماره فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل مخاطب") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockcontact.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل اشتراک گذاری شماره غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }
if (preg_match("/^(.*)@|@(.*)|(.*)@(.*)/", $textmassage)) {
    preg_match("/^(.*)@|@(.*)|(.*)@(.*)/", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockusername == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل تگ") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockusername.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال تگ در گروه فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل تگ") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockusername.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال تگ در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
if ($update->message->audio) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockaudio == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل موزیک") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockaudio.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال موسیقی فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل موزیک") {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockaudio.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال موزیک  غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
if ($update->message->voice) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockvoice == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل ویس") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockvoice.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال ویس در گروه فعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}elseif ($textmassage == "بازکردن قفل ویس") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockvoice.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال ویس در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }
if ($update->message->sticker) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($locksticker == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل استیکر") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/locksticker.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال استیکر فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل استیکر") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/locksticker.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال استیکر در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
if ($update->message->decument) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockdecument == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل فایل") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockdecument.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال فایل فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل فایل") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockdecument.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال فایل در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
if ($update->message->forward_from) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockforward == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message->message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل فروارد") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockforward.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل فوروارد پیام فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل فروارد") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockforward.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل فروارد در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}}
//Lock Operator
if (preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/", $textmassage)) {
    preg_match("/^(.*)ایرانسل|ایرانسل(.*)|(.*)ایرانسل(.*)|(.*)همراه اول(.*)|همراه اول(.*)|(.*)همراه اول/", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockoperator == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل اپراتور") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockoperator.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال تبلیغات اوپراتور ها فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }elseif ($textmassage == "بازکردن قفل اپراتور") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockoperator.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال تبلیغات اوپراتورها  غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} //Lock Fosh
elseif (preg_match("'^(کس)(.*)'", $textmassage)) {
    preg_match("'^(کس)(.*)'", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockfosh == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif (preg_match("'^(کس ننت)(.*)'", $textmassage)) {
    preg_match("'^(کس ننت)(.*)'", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockfosh == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif (preg_match("'^(بی ناموس)(.*)'", $textmassage)) {
    preg_match("'^(بی ناموس)(.*)'", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockfosh == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif (preg_match("'^(دیوث)(.*)'", $textmassage)) {
    preg_match("'^(دیوث)(.*)'", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockfosh == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif (preg_match("'^(کیر)(.*)'", $textmassage)) {
    preg_match("'^(کیر)(.*)'", $textmassage, $match);
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($lockfosh == "✔️") {
            if ($status != "creator" && $status != "administrator") {
                save("data/$from_id/file.txt", "none");
                sendAction($chat_id, 'typing');
                MrPHPBot('deletemessage', [
                    'chat_id' => $chat_id,
                    'message_id' => $message_id
                ]);
            }
        }
    }
} elseif ($textmassage == "قفل فحش" && $from_id == $owners) {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockfosh.txt", "✔️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال فحش فعال شد.",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "بازکردن قفل فحش" && $from_id == $owners) {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockfosh.txt", "✖️");
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "قفل ارسال فحش در گروه غیرفعال شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($update->message->new_chat_title) {
    if ($tc == 'group' | $tc == 'supergroup') {
        $newname = $update->message->new_chat_title;
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "نام گروه تغییر یافت به : $newname",
            'parse_mode' => 'MarkDown',
        ]);
    }
} elseif ($update->message->new_chat_member) {
    if ($tc == "group" | $tc == "supergroup") {
        if ($welcome == "✔️") {
            sendAction($chat_id, 'typing');
            MrPHPBot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => "$textwelcome",
                'parse_mode' => 'MarkDown',
            ]);
        }
    }
} elseif ($textmassage == "آمار گروه ها") {
   if ($from_id == $Dev) {
    $membersidd = explode("\n", $txtt);
    $mmemcount = count($membersidd) - 1;
    sendAction($chat_id, 'typing');
    MrPHPBot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "تعداد گروه ها :\n$mmemcount",
        'hide_keyboard' => true,
    ]);
}} elseif ($textmassage == "آمار کاربران") {
    if ($from_id == $Dev) {
    $membersidd = explode("\n", $txttt);
    $mmemcount = count($membersidd) - 1;
    sendAction($chat_id, 'typing');
    MrPHPBot('sendmessage', [
        'chat_id' => $chat_id,
        'text' => "تعداد کاربران : $mmemcount",
        'hide_keyboard' => true,
    ]);
}} elseif ($textmassage == "/help") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "⚙️ لیست راهنما :\n 🔑 لیست دستورات قفل\n 🔐 سکوت\n 🔒 لغو سکوت\n ❌توجه دو دستور بالا برای قفل کلی گروه میباشد\n 🖇 قفل لینک\n 🖇 بازکردن قفل لینک\n 📸 قفل عکس\n 📷 بازکردن قفل عکس\n 🎆 قفل گیف\n 🎇 بازکردن قفل گیف\n 📽 قفل فیلم\n 🎞 بازکردن قفل فیلم\n 🛠 قفل ویرایش\n 🛠 بازکردن قفل ویرایش\n 🏓 قفل بازی\n ⚽️ بازکردن قفل بازی\n 🌍 قفل مکان\n 🌎 بازکردن قفل مکان\n 💳 قفل مخاطب\n 💳 بازکردن قفل مخاطب\n 📱 قفل تگ\n 📲 بازکردن قفل تگ\n 🔇 قفل موزیک\n 🔊 بازکردن قفل موزیک\n 🎙 قفل ویس\n 🎙 بازکردن قفل ویس\n 🖼 قفل استیکر\n 🌅 بازکردن قفل استیکر\n 💾 قفل فایل\n 💽 بازکردن قفل فایل\n 📡 قفل فروارد\n 📟 بازکردن قفل فروارد\n 🔗 قفل اپراتور\n 📌 بازکردن قفل اپراتور\n 🤐 قفل فحش\n 😶 بازکردن قفل فحش\n 🌐 قفل ایدی\n 🌐 بازکردن قفل ایدی \n👾 قفل ربات\n 🤖 بازکردن قفل ربات\n
➖⚠️قفل های فلود➖\n 🔴 فلود ( فلود 4) به این صورت بنویسید از 1 تا 20 🔸مثلا چنانچه کاربر اسپم بده مثلا بعد از ارسال چهار پیام پشت سر هم در گروه 🔻 از گروه حذف خواهد شد\n 🔵 /flood chek (چک کردن اسامی کسانی که فلود کرده باشند چک میشود و اخراج میشوند)\n ⚫️ /lock flood (فلود فعال میشود)\n 🔘 /unlock flood (فلود غیرفعال میشود)\n همچنین با ارسال دستور (flood/)در گروه میتوانید از پنل شیشه ای استفاده کنید)\n🔷پیام خوش آمد گویی🔶\n ثبت پیام خوش امد گویی به صورت زیر میباشد☺️👇\n
/setwelcome متن خوش امد گویی
\n دستورات خاموش روشن کردن متن خوش امد گویی به کاربر👇😉\n 🔴 خوش فعال (خوش امد گویی فعال میشود\n 🔵 خوش خاموش (خوش امد گویی غیرفعال میشود\n\n ❌ اخراج (برای اخراج کاربر رویه  پیام ان ریپلی کنید و کلمه  اخراج  را بنویسید و ارسال کنید)\n\n ⚠️ برای سنجاق کردن پیام در گروه از دو دستور زیر استفاده کنید بصورت ریپلی رویه متن\n 🔷 /pin (سنجاق  شود) \n 🔸 /unpin (لغو سنجاق)\nبرای مشاهده اطلاعات گروه دستور زیر را تایپ کنید\n 🔴 /info\n ⚠️ برای دریافت لینک گروه کلمه (لینک) در گروه ارسال شود\n دستورات سکوت کاربر در گروه\n /silent (کاربر سکوت میشود)\n /unsilent (کاربر از حالت سکوت ازاد میشود)\n🚫برای ثبت قوانین از دستور زیر استفاده کنید\n/setrules متن قوانین \n برای مشاهده قوانین کلمه قوانین در گروه ارسال شود\n مشاهده زمان و تاریخ با دستور \n /time\n 🔴ساخت لوگو  اسم با دستور \n /logo mohamad\n",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($rt && $textmassage == "/pin") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('pinChatMessage', [
            'chat_id' => $chat_id,
            'message_id' => $replyid
        ]);
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "پیام مورد نظر سنجاق شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($rt && $textmassage == "اخراج") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($rtid != "418354515") {
            sendAction($chat_id, 'typing');
            MrPHPBot('KickChatMember', [
                'chat_id' => $chat_id,
                'user_id' => $rtid
            ]);
            MrPHPBot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => "کاربر مورد نظر اخراج شد",
                'parse_mode' => 'MarkDown',
            ]);
        } else {
            MrPHPBot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => "داداچ انتظار داری خودمو اخراج کنم😏:)",
                'parse_mode' => 'MarkDown',
            ]);
        }
    }
}} elseif ($textmassage == "/info") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "شناسه کاربری گروه : *$chat_id*\nنام گروه : *$namegroup*\nتعداد پیام ها : *$tedadmsg*\nنوع گروه : *$tc*",
            'parse_mode' => 'MarkDown',
        ]);
    }
} }


$users = file_get_contents('data/member.txt');
$members = explode("\n", $users);
if (!in_array($from_id, $members)) {
    $adduser = file_get_contents('data/member.txt');
    $adduser .= $from_id . "\n";
    file_put_contents('data/member.txt', $adduser);
}$users = file_get_contents('data/users.txt');
$members = explode("\n", $users);
if (!in_array($chat_id, $members)) {
    $adduser = file_get_contents('data/users.txt');
    $adduser .= $chat_id . "\n";
    file_put_contents('data/users.txt', $adduser);
} elseif ($textmassage == 'ارسال به همه' && $from_id == $Dev) {
    save("data/$from_id/file.txt", "sendtoall");
    MrPHPBot('sendmessage', [
        'chat_id' => $Dev,
        'text' => "لطفا متن خود را بفرستید :",
        'parse_mode' => 'MarkDown',
    ]);
} elseif ($step == 'sendtoall') {
    $mem = fopen("data/member.txt", 'r');
    while (!feof($mem)) {
        $memuser = fgets($mem);
        save("data/$from_id/file.txt", "to");
        MrPHPBot('sendmessage', [
            'chat_id' => $memuser,
            'text' => $textmassage,
            'parse_mode' => 'MarkDown'
        ]);
    }
} elseif ($textmassage == 'فروارد همگانی' && $from_id == $Dev) {
    save("data/$from_id/file.txt", "fortoall");
    MrPHPBot('sendmessage', [
        'chat_id' => $Dev,
        'text' => "لطفا متن خود را بفرستید :",
        'parse_mode' => 'MarkDown',
    ]);
} elseif ($step == 'fortoall') {
    $mem = fopen("data/member.txt", 'r');
    while (!feof($mem)) {
        $memuser = fgets($mem);
        save("data/$from_id/file.txt", "none");
        Forward($memuser, $chat_id, $message_id);
    }
} elseif (strpos($textmassage, "/setwelcome") !== false) {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        $we = str_replace("/setwelcome", "", $textmassage);
        save("data/$chat_id/textwelcome.txt", "$we");
        SendMessage($chat_id, "متن خوش آمد گویی با موفقیت ذخیره شد");
    }
}} elseif (strpos($textmassage, "فلود") !== false) {
     if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        $we = str_replace("فلود", "", $textmassage);
        if ($we <= 20 && $we >= 1) {
            save("data/$chat_id/numflood.txt", "$we");
            SendMessage($chat_id, "با موفقیت تنظیم فلود انجام شد");
        } else {
            MrPHPBot('sendmessage', [
                'chat_id' => $chat_id,
                'text' => "اخطار عدد باید بین 1تا 20 باشد",
            ]);
        }
    }
}} elseif ($textmassage == "خوش فعال") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/welcome.txt", "✔️");
        SendMessage($chat_id, "پیام خوش آمدگویی به کاربر فعال شد");
    }
}} elseif ($textmassage == "/flood chek") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    rmdir("data/spam");
    mkdir("data/spam");
    SendMessage($chat_id, "چک کردن فلود فعال شد");
}} elseif ($textmassage == "/lock flood") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockflood.txt", "✔️");
        SendMessage($chat_id, "قفل فلود با موفقیت فعال شد");
    }
}} elseif ($textmassage == "/unlock flood") {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockflood.txt", "✖️");
        SendMessage($chat_id, "قفل فلود غیرفعال شد");
    }
}} elseif ($textmassage == "خوش خاموش") {
 if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/welcome.txt", "✖️");
        SendMessage($chat_id, "پیام خوش آمد گویی به کاربر غیرفعال شد");
    }
}} elseif ($textmassage == "قفل ربات") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockbots.txt", "✔️");
        SendMessage($chat_id, "قفل ورود ربات به گروه فعال شد");
    }
} }elseif ($textmassage == "بازکردن قفل ربات") {
    if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        save("data/$chat_id/lockbots.txt", "✖️");
        SendMessage($chat_id, "قفل ورود ربات به گروه غیرفعال شد");
    }
}} elseif (preg_match('/^(.*)([Bb][Oo][Tt])/s', $newchatmemberu) && $lockbots == "✔️" && $newchatmemberid != "418354515") {
    MrPHPBot('sendMessage', [
        'chat_id' => $chat_id,
        'text' => 'ربات با موفقیت اخراج شد',
        'parse_mode' => 'HTML'
    ]);
    MrPHPBot('kickChatMember', [
        'chat_id' => $chat_id,
        'user_id' => $update->message->new_chat_member->id
    ]);
}  elseif (strpos($textmassage, '/rmsg') !== false) {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        if ($from_id == $owners) {
            $num = str_replace("/rmsg", "", $textmassage);
            if ($num <= 100 && $num >= 1) {
                for ($i = $message_id; $i >= $message_id - $num; $i--) {
                    MrPHPBot('deletemessage', [
                        'chat_id' => $chat_id,
                        'message_id' => $i,
                    ]);
                }
                MrPHPBot('sendmessage', [
                    'chat_id' => $chat_id,
                    'text' => "تعداد $num پیام پاک شد",
                ]);
            } else {
                MrPHPBot('sendmessage', [
                    'chat_id' => $chat_id,
                    'text' => "اخطار\nعدد باید بین 1 و 100 باشد.",
                ]);
            }
        }
    }
}} elseif ($rt && $textmassage == "/unpin") {
  if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('unpinChatMessage', [
            'chat_id' => $chat_id,
            'message_id' => $replyid
        ]);
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "سنجاق از پیام مورد نظر حذف شد",
            'parse_mode' => 'MarkDown',
        ]);
    }
}} elseif ($textmassage == "لینک") {
    if ($tc == 'group' | $tc == 'supergroup') {
        $getlink = file_get_contents("https://api.telegram.org/bot$token/exportChatInviteLink?chat_id=$chat_id");
        $jsonlink = json_decode($getlink, true);
        $getlinkde = $jsonlink['result'];
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "لینک گروه :\n$getlinkde",
            'parse_mode' => 'html',
        ]);
    }
} elseif ($textmassage == "/flood") {
   if ( $status == 'creator' or $status == 'administrator' or $from_id == $Dev or $from_id == $owners) {
    if ($tc == 'group' | $tc == 'supergroup') {
        sendAction($chat_id, 'typing');
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "تنطیمات فلود بارگزاری شد.\nتوجه فلود فقط باید عددی بین 1 و 20 باشد.",
            'parse_mode' => 'MarkDown',
            'reply_markup' => json_encode([
                'resize_keyboard' => true,
                'inline_keyboard' => [
                    [
                        ['text' => "قفل فلود", 'callback_data' => 'text'], ['text' => "$floods", 'callback_data' => 'lockflood']
                    ],
                    [
                        ['text' => "➖", 'callback_data' => 'f-'], ['text' => "$flood", 'callback_data' => "numflood"], ['text' => "➕", 'callback_data' => 'f+']
                    ],
                ]
            ])
        ]);
    }
}} elseif ($data == "f-" && $fm == $owners2) {
    $floodnew = $flood2 - 1;
    $floodnew1 = $flood2 - 1;
    save("data/$chatid/numflood.txt", "$floodnew");
    MrPHPBot('editmessagetext', [
        'chat_id' => $chatid,
        'message_id' => $messageid,
        'text' => "انتخاب کنید :",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "قفل فلود", 'callback_data' => 'text'], ['text' => "$floods2", 'callback_data' => 'lockflood']
                ],
                [
                    ['text' => "➖", 'callback_data' => 'f-'], ['text' => "$floodnew1", 'callback_data' => "numflood"], ['text' => "➕", 'callback_data' => 'f+']
                ],
            ]
        ])
    ]);
} elseif ($data == "f+" && $fm == $owners2) {
    $floodne = $flood2 + 1;
    $floodne2 = $flood2 + 1;
    save("data/$chatid/numflood.txt", "$floodne");
    MrPHPBot('editmessagetext', [
        'chat_id' => $chatid,
        'message_id' => $messageid,
        'text' => "انتخاب کنید :",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "قفل فلود", 'callback_data' => 'text'], ['text' => "$floods2", 'callback_data' => 'lockflood']
                ],
                [
                    ['text' => "➖", 'callback_data' => 'f-'], ['text' => "$floodne2", 'callback_data' => "numflood"], ['text' => "➕", 'callback_data' => 'f+']
                ],
            ]
        ])
    ]);
} elseif ($data == "lockflood" && $floods2 == "✖️" && $fm == $owners2) {
    save("data/$chatid/lockflood.txt", "✔️");
    MrPHPBot('editmessagetext', [
        'chat_id' => $chatid,
        'message_id' => $messageid,
        'text' => "فعال شد.",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "قفل فلود", 'callback_data' => 'text'], ['text' => "✔️", 'callback_data' => 'lockflood']
                ],
                [
                    ['text' => "➖", 'callback_data' => 'f-'], ['text' => "$flood2", 'callback_data' => "numflood"], ['text' => "➕", 'callback_data' => 'f+']
                ],
            ]
        ])
    ]);
} elseif ($data == "lockflood" && $floods2 == "✔️" && $fm == $owners2) {
    save("data/$chatid/lockflood.txt", "✖️");
    MrPHPBot('editmessagetext', [
        'chat_id' => $chatid,
        'message_id' => $messageid,
        'text' => "فعال شد.",
        'reply_markup' => json_encode([
            'inline_keyboard' => [
                [
                    ['text' => "قفل فلود", 'callback_data' => 'text'], ['text' => "✖️", 'callback_data' => 'lockflood']
                ],
                [
                    ['text' => "➖", 'callback_data' => 'f-'], ['text' => "$flood2", 'callback_data' => "numflood"], ['text' => "➕", 'callback_data' => 'f+']
                ],
            ]
        ])
    ]);
} elseif ($data == 'text') {
    MrPHPBot('answerCallbackQuery', [
        'callback_query_id' => $update->callback_query->id,
        'text' => "ربات حرفه ای مدیریت گروه.",
    ]);
}
$timing = date("Y-m-d-h-i-sa");
$timing = str_replace("am", "", $timing);
$metti_khan = file_get_contents("data/spam/$timing-$from_id.txt");
$timing_spam = $metti_khan + 1;
file_put_contents("data/spam/$timing-$from_id.txt", "$timing_spam");
$metti_khan2 = file_get_contents("data/spam/$timing-$from_id.txt");
if ($metti_khan2 >= $flood) {
    if ($floods == "✔️") {
        MrPHPBot('KickChatMember', [
            'chat_id' => $chat_id,
            'user_id' => $from_id
        ]);
        MrPHPBot('sendmessage', [
            'chat_id' => $chat_id,
            'text' => "این فرد $first_name به دلیل تکرار پیام مکرر در گروه اخراج شد.",
            'parse_mode' => 'MarkDown',
        ]);

    }
}
unlink("error_log");
?>
