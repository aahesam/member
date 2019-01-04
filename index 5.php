<?php
ob_start();
define('API_KEY','740521695:AAFPz9eWrypdIU5WsE3F_rDCQXCw3plmNaA');
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
$inline = $update->inline_query->query;
$chatsid = $update->callback_query->from->id;
$data = $update->callback_query->data;
$inline_message_id = $update->callback_query->inline_message_id;
$re_id = $update->message->reply_to_message->from->id;
$rt = $update->message->reply_to_message;
$replyid = $update->message->reply_to_message->message_id;
$edit = $update->edited_message->text;
$message_edit_id = $update->edited_message->message_id;
$chat_edit_id = $update->edited_message->chat->id;
$edit_for_id = $update->edited_message->from->id;
$database = json_decode(file_get_contents("../data.json"),true);
$bot_ping = $database["bot"];
$web_url = "https://aaahesam.000webhostapp.com/za";
//------
function settings($reloadid,$id){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$expire = $datab['expire'];
$lang = $datab['lang'];
$lock_all = $datab['lock']['all'];
$lock_link = $datab['lock']['link'];
$lock_text = $datab['lock']['text'];
$lock_username = $datab['lock']['username'];
$lock_english = $datab['lock']['english'];
$lock_photo = $datab['lock']['photo'];
$lock_document = $datab['lock']['document'];
$lock_voice = $datab['lock']['voice'];
$lock_sticker = $datab['lock']['sticker'];
$lock_location = $datab['lock']['location'];
$lock_music = $datab['lock']['music'];
$lock_forward = $datab['lock']['forward'];
$lock_tg = $datab['lock']['tg'];
$lock_bot = $datab['lock']['bot'];
$lock_tabchi = $datab['lock']['tabchi'];
$lock_mention = $datab['lock']['mention'];
$lock_via = $datab['lock']['via'];
$lock_inline = $datab['lock']['inline'];
$lock_contact = $datab['lock']['contact'];
$lock_flood = $datab['lock']['flood'];
$time_flood = $datab['flood'];
$strict_mode = $datab['strict_mode'];
$warn = $datab['warn'];
@$inlinebutton = json_encode([
    'inline_keyboard'=>[
[["text" => "🔶قفل لینک🔷", "callback_data" => "none"],["text" => "$lock_link", "callback_data" => "lock_link_$id"]],
[["text" => "🔶قفل یوزرنیم🔷", "callback_data" => "none"],["text" => "$lock_username", "callback_data" => "lock_username_$id"]],
[["text" => "🔶قفل فروارد🔷", "callback_data" => "none"],["text" => "$lock_forward", "callback_data" => "lock_forward_$id"]],
[["text" => "🔶قفل عکس🔷", "callback_data" => "none"],["text" => "$lock_photo", "callback_data" => "lock_photo_$id"]],
[["text" => "🔶قفل آهنگ🔷", "callback_data" => "none"],["text" => "$lock_music", "callback_data" => "lock_music_$id"]],
[["text" => "🔶قفل ویس🔷", "callback_data" => "none"],["text" => "$lock_voice", "callback_data" => "lock_voice_$id"]],
[["text" => "🔶قفل استیکر🔷", "callback_data" => "none"],["text" => "$lock_sticker", "callback_data" => "lock_sticker_$id"]],
[["text" => "🔶قفل موقعیت مکانی🔷", "callback_data" => "none"],["text" => "$lock_location", "callback_data" => "lock_locatio‌n_$id"]],
[["text" => "🔶قفل مخاطب🔷", "callback_data" => "none"],["text" => "$lock_contact", "callback_data" => "lock_co‌ntact_$id"]],
[["text" => "🔶قفل خدمات تلگرام🔷", "callback_data" => "none"],["text" => "$lock_tg", "callback_data" => "lock_tg_$id"]],
[["text" => "🔶قفل دکمه شیشه ای🔷", "callback_data" => "none"],["text" => "$lock_inline", "callback_data" => "lock_inline_$id"]],
[["text" => "🔶قفل فراخوانی🔷", "callback_data" => "none"],["text" => "$lock_via", "callback_data" => "lock_via_$id"]],
[["text" => "🔶قفل ورود ربات🔷", "callback_data" => "none"],["text" => "$lock_bot", "callback_data" => "lock_bot_$id"]],
[["text" => "🔶قفل تبچی🔷", "callback_data" => "none"],["text" => "$lock_tabchi", "callback_data" => "lock_tabchi_$id"]],
[["text" => "🔶قفل رسانه🔷", "callback_data" => "none"],["text" => "$lock_document", "callback_data" => "lock_docume‌nt_$id"]],
[["text" => "🔶قفل انگلیسی🔷", "callback_data" => "none"],["text" => "$lock_english", "callback_data" => "lock_e‌nglish_$id"]],
[["text" => "🔶قفل منشن🔷", "callback_data" => "none"],["text" => "$lock_mention", "callback_data" => "lock_me‌ntio‌n_$id"]],
[["text" => "🔶قفل متن🔷", "callback_data" => "none"],["text" => "$lock_text", "callback_data" => "lock_text_$id"]],
[["text" => "🔶قفل اسپم🔷", "callback_data" => "none"],["text" => "$lock_flood", "callback_data" => "lock_flood_$id"]],
[["text" => "🔶قفل همه🔷", "callback_data" => "none"],["text" => "$lock_all", "callback_data" => "lock_all_$id"]],
[["text" => "⬇️تعیین حداکثر تعداد اخطار⬇️", "callback_data" => "none"]],
[["text" => "➕", "callback_data" => "plus_warn_$id"],["text" => "➰ $warn ➰", "callback_data" => "none"],["text" => "➖", "callback_data" => "min_warn_$id"]],
[["text" => "⬇️تعیین زمان ارسال پیام مکرر⬇️", "callback_data" => "none"]],
[["text" => "➕", "callback_data" => "plus_flood_$id"],["text" => "➰ $time_flood ➰", "callback_data" => "none"],["text" => "➖", "callback_data" => "min_flood_$id"]],
[["text" => "🔶حالت سختگیرانه🔷", "callback_data" => "none"],["text" => "$strict_mode", "callback_data" => "strict_mode_$id"]],
[["text" => "🚩زبان گروه🚩", "callback_data" => "none"],["text" => "$lang", "callback_data" => "bot_lang_$id"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]]
   ]
   ]);
$text_1 = str_replace("on","🔐",$inlinebutton);
$text_2 = str_replace("off","🔓",$text_1);
$text_3 = str_replace("enable","✅",$text_2);
$text_4 = str_replace("disable","❌",$text_3);
$text_5 = str_replace("fa","🇮🇷",$text_4);
$text_6 = str_replace("en","🇮🇸",$text_5);
bot("editmessagetext", [
"text"=>"به تنظیمات ربات ضدلینک خوش آمدید🔰",
"inline_message_id"=>$reloadid,
"parse_mode"=>"MarkDown",
'reply_markup'=>$text_6,
]);
}
//------
if($bot_ping == "on"){
if($textmessage == "/start"){
	bot("sendMessage",[
	"chat_id"=>$chat_id,
	"text"=>"slm
Ch : @Nic_Source",
	"parse_mode"=>"MarkDown",
	]);
}
if(strpos($inline,'panel_') !== false) {
$inlin = str_replace("panel_","",$inline);
bot("answerInlineQuery",[
"inline_query_id"=>$update->inline_query->id,
"results"=>json_encode([[
"type"=>"article",
"id"=>base64_encode(rand(5,555)),
"title"=>"managment",
"input_message_content"=>["parse_mode"=>"MarkDown","message_text"=>"پنل مدیریت ربات ضداسپم | نسخه 1.1"],
"reply_markup"=>["inline_keyboard"=>[
[["text"=>"⚙️تنظیمات ربات⚙️","callback_data"=>"lock_panel_$inlin"],["text"=>"راهنمای دستورات🎈","callback_data"=>"help_$inlin"]],
[["text"=>"➡️میزان شارژ گروه⏱","callback_data"=>"charge_$inlin"]],
[["text"=>"🚫خروج🚫","callback_data"=>"exit_$inlin"]],
[['text'=>"🔸کانال ما🔹", 'url'=>"https://t.me/Nic_Source"]],
]]
]])
]);
}
if(strpos($inline,'tabchi') !== false) {
$load = trim(str_replace("tabchi ","",$inline));
$load = explode("|",$load."|||||");
$UserId = trim($load[1]);
$GpId = trim($load[2]);
bot("answerInlineQuery",[
"inline_query_id"=>$update->inline_query->id,
"results"=>json_encode([[
"type"=>"article",
"id"=>base64_encode(rand(5,555)),
"title"=>"managment",
"input_message_content"=>["parse_mode"=>"HTML","message_text"=>"کاربر عزیز با شناسه $UserId جهت تایید هویت خود روی دکمه من ربات نیستم کلیک کنید , در غیر این صورت شما از گروه اخراج خواهید شد❕"],
"reply_markup"=>["inline_keyboard"=>[
[["text"=>"من ربات نیستم","callback_data"=>"not|$UserId|$GpId"],["text"=>"معاف کردن کاربر","callback_data"=>"moaf|$UserId|$GpId"]],
]]
]])
]);
}
if(strpos($data,'moaf') !== false) {
$load = trim(str_replace("moaf ","",$data));
$load = explode("|",$load."|||||");
$UserId = trim($load[1]);
$GpId = trim($load[2]);
$admin_list = file_get_contents("../admins/$GpId.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../tabchi/$GpId.json"),true);
$datab["$UserId"] = "+";
$outjson = json_encode($datab,true);
file_put_contents("../tabchi/$GpId.json",$outjson);
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"انجام شد !
کاربر $UserId مجاز به چت میباشد✅",
 'show_alert' => true
]);   
bot("editmessagetext", [
"text"=>"هویت $UserId تایید شد.",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'not') !== false) {
$load = trim(str_replace("not ","",$data));
$load = explode("|",$load."|||||");
$UserId = trim($load[1]);
$GpId = trim($load[2]);
if ($chatsid == $UserId){
$datab = json_decode(file_get_contents("../tabchi/$GpId.json"),true);
$datab["$UserId"] = "+";
$outjson = json_encode($datab,true);
file_put_contents("../tabchi/$GpId.json",$outjson);
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"کاربر $UserId هویت شما تایید شد🔥
شما هم اکنون قادر به چت در گروه هستید✨",
 'show_alert' => true
]);   
bot("editmessagetext", [
"text"=>"هویت $UserId تایید شد.",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما قادر به تعیین هویت $UserId نیستید!"
]);   
}
}
if(strpos($data,'lock_panel_') !== false) {
  $id = str_replace("lock_panel_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
settings($inline_message_id,$id);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'exit_') !== false) {
  $id = str_replace("exit_","",$data);
$admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("editmessagetext", [
"text"=>"پنل مدیریت بسته شد !",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'help_') !== false) {
$id = str_replace("help_","",$data);
$admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
bot("editmessagetext", [
"text"=>"❄️AntiSpam | Help :

▪️<code>lockhelp</code>▪️  => راهنمای قفل ها
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>managehelp</code>▪️ => راهنمای مدیریتی
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>funhelp</code>▪️ => راهنمای عمومی
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>cleanhelp</code>▪️ => راهنمای پاکسازی
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>sudohelp</code>▪️ => راهنمای سودو
~~~~~~~~~~~~~
@Nic_Source",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text" => "راهنمای قفل ها", "callback_data" => "lockhelp_$id"],["text" => "راهنمای مدیریت", "callback_data" => "managehelp_$id"]],
[["text" => "راهنمای فان", "callback_data" => "funhelp_$id"],["text" => "راهنمای پاکسازی", "callback_data" => "cleanhelp_$id"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]],
]
])
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'cleanhelp_') !== false) {
$id = str_replace("cleanhelp_","",$data);
$admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
bot("editmessagetext", [
"text"=>"🎗راهنمای بخش پاکسازی :

▪️<code>/del</code> 1-500▪️
▫️حذف پیام های گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>پاکسازی</code> [رپلی]▪️
▫️حذف کل پیام های یک کاربر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>پاکسازی پیام ها</code> [رپلی]▪️
▫️تلگرام و ربات های ضدلینک دارای محدودیت در حذف پیام هستند , گاهی ممکن است با روش قبل یعنی پاکسازی پیام با تعداد معین نتوانید از یک پیام خاص بالاتر را حذف کنید , با این دستور روی پیامی که از آن به بالا هیچ پیامی حذف نمیشود ریپلی کنید تا پاکسازی بطور کامل انجام شود▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>پاکسازی لیست سکوت</code>▪️
▫️پاکسازی لیست سکوت▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>پاکسازی لیست فیلتر</code>▪️
▫️پاکسازی لیست فیلتر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>پاکسازی لیست اخطار</code>▪️
▫️حذف لیست اخطار های گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>حذف ربات ها</code>▪️
▫️حذف ربات های گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>حذف دلت اکانت ها</code>▪️
▫️حذف دیلیت اکانت های گروه▫️
~~~~~~~~~~~~~
@Nic_Source",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text" => "راهنمای قفل ها", "callback_data" => "lockhelp_$id"],["text" => "راهنمای مدیریت", "callback_data" => "managehelp_$id"]],
[["text" => "راهنمای فان", "callback_data" => "funhelp_$id"],["text" => "راهنمای پاکسازی<", "callback_data" => "cleanhelp_$id"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]],
]
])
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'funhelp_') !== false) {
$id = str_replace("funhelp_","",$data);
$admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
bot("editmessagetext", [
"text"=>"🎗راهنمای بخش فان :

▪️<code>id</code>▪️
▫️دریافت اطلاعات کاربر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>translate</code> [Lang] & [REPLY]▪️
▫️ترجمه یک متن با ریپلی بروی آن و تعیین زبان مقصد▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>time</code>▪️
▫️دریافت ساعت در گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>tofont</code> [TEXT]▪️
▫️فونت دار کردن متن شما▫️
~~~~~~~~~~~~~
@Nic_Source",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text" => "راهنمای قفل ها", "callback_data" => "lockhelp_$id"],["text" => "راهنمای مدیریت", "callback_data" => "managehelp_$id"]],
[["text" => "راهنمای فان<", "callback_data" => "funhelp_$id"],["text" => "راهنمای پاکسازی", "callback_data" => "cleanhelp_$id"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]],
]
])
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'managehelp_') !== false) {
$id = str_replace("managehelp_","",$data);
$admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
bot("editmessagetext", [
"text"=>"🎗راهنمای بخش مدیریتی :

▪️<code>ping</code>▪️
▫️اطلاع از آنلاینی ربات▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>panel</code>▪️
▫️ورود به پنل مدیریتی شیشه ای ربات▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>settings</code>▪️
▫️دریافت تنظیمات گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>config</code>▪️
▫️ارتقا همه ادمین های گروه به عنوان مدیر ربات▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>pin</code> [REPLY]▪️
▫️سنجاق کردن متن در گروه بوسیله ریپلی▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>unpin</code>▪️
▫️حذف پیام سنجاق شده در گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>/setgroupname</code> [TEXT]▪️
▫️تغییر عنوان گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>/setgroupdes</code> [TEXT]▪️
▫️تغییر توضیحات گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>/setlang</code> [fa] | [en]▪️
▫️تغییر زبان ربات در گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>/admins</code>▪️
▫️دریافت لیست ادمین ها▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>new link</code>▪️
▫️باطل کردن لینک قبلی و دریافت لینک جدید گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>ban</code> [REPLY] | [USERNAME]▪️
▫️اخراج فرد از گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>setwelcome</code> [TEXT]▪️
▫️تنظیم متن خوشامد به اعضای جدید و فعالسازی آن▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>welcome disable</code>▪️
▫️غیرفعال سازی متن خوشامد▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>mute</code> [REPLY] | [USERNAME]▪️
▫️بیصدا کردن فرد در گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>mute for</code> [TIME-H] & [REPLY]▪️
▫️بیصدا کردن فرد در گروه به مدت زمان مشخص (ساعت) با ریپلی بروی پیام فرد▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>unmute</code> [REPLY] | [USERNAME]▪️
▫️باصدا کردن فرد در گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>mute list</code>▪️
▫️دریافت لیست سکوت▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>filter</code> [TEXT]▪️
▫️فیلتر کردن کلمه در گروه▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>unfilter</code> [TEXT]▪️
▫️حذف کلمه از لیست فیلتر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>filter list</code>▪️
▫️دریافت لیست فیلتر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>warn</code> [USERNAME] | [REPLY]▪️
▫️اخطار دادن به فرد▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>unwarn</code> [USERNAME] | [REPLY]▪️
▫️حذف اخطار های فرد▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>setwarn</code> [1-50]▪️
▫️تنظیم حداکثر دریافت اخطار▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>/setflood</code> ️ [1-50]▪
▫️تنظیم زمان ارسال پیام مکرر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>setlink</code> ️ [LINK]▪
▫️تنظیم لینک گروه برای همه کاربران▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>delete link</code>▪️ 
▫️حذف لینک تنظیم شده گروه برای همه کاربران▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>link</code>▪️ 
▫️دریافت لینک گروه برای همه کاربران▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>auto manage</code>▪️ 
▫️فعالسازی حالت قفل خودکار (قفل های ضروری فعال میشوند)▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>add</code> [on] | [off]▪️ 
▫️قابلیت افزودن ممبر برای تمامی اعضای گروه فعال باشد یا خیر▫️
🔸🔹🔸🔹🔸🔹🔸🔹
▪️<code>history</code> [on] | [off]▪️ 
▫️کاربرانی که تازه به گروه میپیوندند بتوانند پیام های قبلی گروه را مشاهده کنند یا خیر▫️
~~~~~~~~~~~~~
@Nic_Source",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text" => "راهنمای قفل ها", "callback_data" => "lockhelp_$id"],["text" => "راهنمای مدیریت<", "callback_data" => "managehelp_$id"]],
[["text" => "راهنمای فان", "callback_data" => "funhelp_$id"],["text" => "راهنمای پاکسازی", "callback_data" => "cleanhelp_$id"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]],
]
])
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lockhelp_') !== false) {
$id = str_replace("lockhelp_","",$data);
$admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
bot("editmessagetext", [
"text"=>"🎗راهنمای بخش قفل ها :
برای قفل ابتدای دستور عبارت lock و برای آزاد کردن قفل عبارت unlock را استفاده نمایید❕
نمونه :
<code>lock link</code>
بخش قفل ها شامل :
<b>[All , link , text , english , username , photo , document , mention . via , inline , voice , music , bot , forward , tg , contact , location , sticker , flood , tabchi]</b>
⚜️توجه کنید با قفل document رسانه به کلی قفل میشود(شامل گیف , آهنگ , ویس , فایل و...)⚜️
~~~~~~~~~~~~~
@Nic_Source",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text" => "راهنمای قفل ها<", "callback_data" => "lockhelp_$id"],["text" => "راهنمای مدیریت", "callback_data" => "managehelp_$id"]],
[["text" => "راهنمای فان", "callback_data" => "funhelp_$id"],["text" => "راهنمای پاکسازی", "callback_data" => "cleanhelp_$id"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]],
]
])
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
//---Charge-Bot---
if(strpos($data,'charge_') !== false) {
 $id = str_replace("charge_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$expire_time = $datab['expire_time'];
date_default_timezone_set('Asia/Tehran');
$time2 = date('Y-m-d');
$diff = strtotime($expire_time) - strtotime($time2);
if($diff < 60){
        $endtime = $diff;
    }
    elseif($diff < 3600){
        $endtime = round($diff / 60,0,1);
    }
    elseif($diff >= 3660 && $diff < 86400){
        $endtime = round($diff / 3600,0,1);
    }
    elseif($diff > 86400){
        $endtime = round($diff / 86400,0,1);
    }
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"🎗میزان باقی مانده از شارژ گروه شما $endtime روز میباشد🎗",
 'show_alert' => true
]);
bot("editmessagetext", [
"text"=>"میزان شارژ باقی مانده از گروه شما $endtime روز میباشد🎗
جهت خرید شارژ برای گروه خود یکی از پنل های زیر را انتخاب کنید , پس از پرداخت ربات خودکار در گروه شما شارژ میشود🌹",
"inline_message_id"=>$inline_message_id,
'parse_mode'=>"html",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[['text'=>"یک ماه | 5000 تومان", 'url'=>"T.me/Mrsupportbot"],['text'=>"دو ماه | 8000 تومان", 'url'=>"T.me/Mrsupportbot"]],
[['text'=>"سه ماه | 12000 تومان", 'url'=>"T.me/Mrsupportbot"],['text'=>"چهار ماه | 15500 تومان", 'url'=>"T.me/Mrsupportbot"]],
[['text'=>"پنج ماه | 18500 تومان", 'url'=>"T.me/Mrsupportbot"]],
[["text" => "برگشت | Back", "callback_data" => "back_$id"]],


]
])
]);
}else{
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!",
]);
}
}
//---Back-Bot---
if(strpos($data,'back_') !== false) {
  $id = str_replace("back_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال برگشت به منوی اصلی ..."
]);
bot("editmessagetext", [
"text"=>"پنل مدیریت ربات ضداسپم | نسخه1.1",
"inline_message_id"=>$inline_message_id,
"parse_mode"=>"MarkDown",
"reply_markup"=>json_encode([
"inline_keyboard"=>[
[["text"=>"⚙️تنظیمات ربات⚙️","callback_data"=>"lock_panel_$id"],["text"=>"راهنمای دستورات🎈","callback_data"=>"help_$id"]],
[["text"=>"➡️میزان شارژ گروه⏱","callback_data"=>"charge_$id"]],
[["text"=>"🚫خروج🚫","callback_data"=>"exit_$id"]],
[['text'=>"🔸کانال ما🔹", 'url'=>"https://t.me/Nic_Source"]],
]
])
]);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'bot_lang_') !== false) {
$id = str_replace("bot_lang_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lang = $datab['lang'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lang == "fa"){
$datab['lang'] = "en";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lang == "en"){
$datab['lang'] = "fa";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_me‌ntio‌n_') !== false) {
$id = str_replace("lock_me‌ntio‌n_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_mention = $datab['lock']['mention'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_mention == "on"){
$datab['lock']['mention'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_mention == "off"){
$datab['lock']['mention'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_bot_') !== false) {
$id = str_replace("lock_bot_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_bot = $datab['lock']['bot'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_bot == "on"){
$datab['lock']['bot'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_bot == "off"){
$datab['lock']['bot'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'strict_mode_') !== false) {
$id = str_replace("strict_mode_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$strict_mode = $datab['strict_mode'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($strict_mode == "enable"){
$datab['strict_mode'] = "disable";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($strict_mode == "disable"){
$datab['strict_mode'] = "enable";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_flood_') !== false) {
$id = str_replace("lock_flood_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_flood = $datab['lock']['flood'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_flood == "on"){
$datab['lock']['flood'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_flood == "off"){
$datab['lock']['flood'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'min_warn_') !== false) {
$id = str_replace("min_warn_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$time_flood = $datab['warn'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
settype($time_flood,"integer");
$newbots_click_count = $time_flood - 1;
$datab['warn'] = $newbots_click_count;
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'plus_warn_') !== false) {
$id = str_replace("plus_warn_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$time_flood = $datab['warn'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
settype($time_flood,"integer");
$newbots_click_count = $time_flood + 1;
$datab['warn'] = $newbots_click_count;
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'min_flood_') !== false) {
$id = str_replace("min_flood_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$time_flood = $datab['flood'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
settype($time_flood,"integer");
$newbots_click_count = $time_flood - 1;
$datab['flood'] = $newbots_click_count;
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'plus_flood_') !== false) {
$id = str_replace("plus_flood_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$time_flood = $datab['flood'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
settype($time_flood,"integer");
$newbots_click_count = $time_flood + 1;
$datab['flood'] = $newbots_click_count;
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_tabchi_') !== false) {
$id = str_replace("lock_tabchi_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_tabchi = $datab['lock']['tabchi'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_tabchi == "on"){
$datab['lock']['tabchi'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_tabchi == "off"){
$datab['lock']['tabchi'] = "on";
$datab['lock']['tg'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_co‌ntact_') !== false) {
$id = str_replace("lock_co‌ntact_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_contact = $datab['lock']['contact'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_contact == "on"){
$datab['lock']['contact'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_contact == "off"){
$datab['lock']['contact'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_inline_') !== false) {
$id = str_replace("lock_inline_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_inline = $datab['lock']['inline'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_inline == "on"){
$datab['lock']['inline'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_inline == "off"){
$datab['lock']['inline'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_via_') !== false) {
$id = str_replace("lock_via_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_via = $datab['lock']['via'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_via == "on"){
$datab['lock']['via'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_via == "off"){
$datab['lock']['via'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_tg_') !== false) {
$id = str_replace("lock_tg_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_tg = $datab['lock']['tg'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_tg == "on"){
$datab['lock']['tg'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_tg == "off"){
$datab['lock']['tabchi'] = "off";	
$datab['lock']['tg'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_forward_') !== false) {
$id = str_replace("lock_forward_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_forward = $datab['lock']['forward'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_forward == "on"){
$datab['lock']['forward'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_forward == "off"){
$datab['lock']['forward'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_docume‌nt_') !== false) {
$id = str_replace("lock_docume‌nt_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_document = $datab['lock']['document'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_document == "on"){
$datab['lock']['document'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_document == "off"){
$datab['lock']['document'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_music_') !== false) {
$id = str_replace("lock_music_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_music = $datab['lock']['music'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_music == "on"){
$datab['lock']['music'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_music == "off"){
$datab['lock']['music'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_locatio‌n_') !== false) {
$id = str_replace("lock_locatio‌n_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_location = $datab['lock']['location'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_location == "on"){
$datab['lock']['location'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_location == "off"){
$datab['lock']['location'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_sticker_') !== false) {
$id = str_replace("lock_sticker_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_sticker = $datab['lock']['sticker'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_sticker == "on"){
$datab['lock']['sticker'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_sticker == "off"){
$datab['lock']['sticker'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_voice_') !== false) {
$id = str_replace("lock_voice_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_voice = $datab['lock']['voice'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_voice == "on"){
$datab['lock']['voice'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_voice == "off"){
$datab['lock']['voice'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_all_') !== false) {
$id = str_replace("lock_all_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_all = $datab['lock']['all'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_all == "on"){
$datab['lock']['all'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_all == "off"){
$datab['lock']['all'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_text_') !== false) {
$id = str_replace("lock_text_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_text = $datab['lock']['text'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_text == "on"){
$datab['lock']['text'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_text == "off"){
$datab['lock']['text'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_photo_') !== false) {
$id = str_replace("lock_photo_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_photo = $datab['lock']['photo'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_photo == "on"){
$datab['lock']['photo'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_photo == "off"){
$datab['lock']['photo'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_e‌nglish_') !== false) {
$id = str_replace("lock_e‌nglish_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_english = $datab['lock']['english'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_english == "on"){
$datab['lock']['english'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_english == "off"){
$datab['lock']['english'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_username_') !== false) {
$id = str_replace("lock_username_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_username = $datab['lock']['username'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_username == "on"){
$datab['lock']['username'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_username == "off"){
$datab['lock']['username'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}
if(strpos($data,'lock_link_') !== false) {
$id = str_replace("lock_link_","",$data);
 $admin_list = file_get_contents("../admins/$id.txt");
$exp=explode("\n",$admin_list);
if (in_array($chatsid,$exp)){
$datab = json_decode(file_get_contents("../data/$id.json"),true);
$lock_link = $datab['lock']['link'];
bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"در حال پردازش ..."
]);
if($lock_link == "on"){
$datab['lock']['link'] = "off";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
if($lock_link == "off"){
$datab['lock']['link'] = "on";
$outjson = json_encode($datab,true);
file_put_contents("../data/$id.json",$outjson);
settings($inline_message_id,$id);
}
}else{
 bot("answerCallbackQuery",[
"callback_query_id"=>$update->callback_query->id,
"text"=>"شما ادمین نیستی!"
]);   
}
}









}
