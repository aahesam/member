<?php
ini_set("log_errors" , "off");
ob_start();
set_time_limit(0);

if($chatid == $admin or $chat_id == $admin){
if($data == "panel"){
bot('editMessagetext', [
'chat_id' => $chatid,
'text'=>"ادمین عزیز به پنل مدیریت خوش آمدید🎷",
'message_id' => $messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);    
}
//=================================================================
elseif($data == "back2"){
save("user/$chatid/command.txt","noun");
if($chatid == $admin or $chat_id == $admin){
bot('editMessagetext', [
'chat_id'=>$chatid,
'text'=>"لطفا یک گذینه انتخاب کنید:",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}else{
bot('editMessagetext', [
'chat_id'=>$chatid,
'text'=>"شما مدیر نیستید",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$button_menu]);
}}
//=================================================================
elseif($data == "vip"){
save("user/$chatid/command.txt","set vip_ad");
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"آیدی عددی فرد مورد نظرتون رو ارسال کنید🌱",
'reply_markup'=>$button_back]);
}
elseif($command == "set vip_ad"){
save("user/$text/hesab_golden.txt","ویژه");
save("user/$text/yesgold.txt","ok");
save("user/$chatid/command.txt","none");
bot('sendmessage', [
'chat_id' => "$text",
'text' => "شما با موفقیت در رباتساز 🎟 ویژه شدید❗️",
'parse_mode' => "html"]);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"ویژه شد!!!!",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "unvip"){
save("user/$chatid/command.txt","laghv hesab");
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"آیدی عددی فرد مورد نظرتون رو ارسال کنید🌱",
'reply_markup'=>$button_back]);
}
elseif($command == 'laghv hesab'){
save("user/$text/hesab_golden.txt","رایگان");
save("user/$text/yesgold.txt","false");
save("user/$text/create.txt","false");
save("user/$chatid/command.txt","none");
bot('sendmessage', [
'chat_id' => "$text",
'text' => "کاربر $first عزیز حساب شما رایگان شد و از حالت ویژه خارج شد❗️

اگر فکر میکنید مشکلی پیش آمده در بخش پشتیبانی اعلام کنید👌",
'parse_mode' => "html"]);
bot('sendmessage', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"⭕️ حساب غیر ویژه شد.",
'reply_markup'=>$button_back]);
}
//=================================================================
elseif($data == "setmove"){
save("user/$chatid/command.txt","set sending");
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"مقدار امتیازی که برای ارسال لازمه داشته باشیم چقدر باشه به صورت لاتین وارد کن💰",
'reply_markup'=>$button_back]);
}
elseif($command1 == 'set sending'){
save("admin/set_tosend.txt","$text");
save("user/$chatid/command.txt","none");
SendMessage($chat_id,"مقداری رو که وارد کردی ثبت شد","html","true");
}
//=================================================================
elseif($data == "Accountscharge"){
save("user/$chatid/command.txt","Accountscharge");
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"آیدی عددی فرد مورد نظرتون رو ارسال کنید🌱",
'reply_markup'=>$button_back]);
}
elseif($command == 'Accountscharge'){
save("user/$chatid/command.txt","charge gold2");
save("user/$chatid/waitt.txt",$text);
bot('sendmessage', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text' => "چندتا اضافه بشه؟؟",
'parse_mode' => "html"]);
}
elseif($command == 'charge gold2'){
save("user/$waittt/gold.txt",($gold+$text));
bot('sendmessage', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text' => "اضافه شد!",
'parse_mode' => "html"]);
}
//=================================================================
elseif($data == "ScorePoints"){
save("user/$chatid/command.txt","ScorePoints");
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"آیدی عددی فرد مورد نظرتون رو ارسال کنید🌱",
'reply_markup'=>$button_back]);
}
elseif($command == 'ScorePoints'){
save("user/$chatid/command.txt","rim gold2");
save("user/$chatid/waitt.txt",$text);
bot('sendmessage', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text' => "چندتا کم بشه؟؟",
'parse_mode' => "html"]);
}
elseif($command == 'rim gold2'){
save("user/$waittt/gold.txt",($gold-$text));
bot('sendmessage', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text' => "کم شد!",
'parse_mode' => "html"]);
}
//=================================================================
elseif($data == "createcode"){
$codeme = rand(100300,899599);
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"کد ساخته شد و هم اکنون به کانال ارسال شد💯

کد شما : $codeme",
'reply_markup'=>$button_back]);
save("user/$chatid/codeme.txt","$codeme");
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "کد جدید ثبت شد🔶",
'reply_to_message_id'=>$message_id,
'parse_mode' => "html",
'reply_markup'=>$button_manage]);
bot('sendmessage', [
'chat_id' => -1001365391705,
'text' => "کد جدیدی برای ویژه کردن اکانت شما توسط مدیران ساخته شد⚡️
🎯🎯🎯🎯🎯🎯🎯🎯🎯🎯🎯
code : <code>$codeme</code>
🎖🎖🎖🎖🎖🎖🎖🎖🎖🎖🎖

نکته مهم❗️: فقط یک نفر میتواند از کد استفاده کند🎮",
'parse_mode' => "html",
'reply_markup'=>json_encode(['inline_keyboard'=>[
[['text'=>"🔺ورود به رباتساز🔺",'url'=>"https://telegram.me/clicreatorobot"]],
],])
]);
}
//=================================================================
elseif($data == "amar"){
$Member = file_get_contents('data/member.txt');
$member_id = explode("\n",$Member);
$mmemcount = count($member_id)-1;
bot('editMessagetext', [
'chat_id'=>$chatid,
'text' => "آمار کاربران ربات شما به این صورت است👇😁

$mmemcount",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "4ward") {
save("user/$chatid/command.txt","4ward");
bot('editMessagetext', [
'chat_id'=>$chatid,
'message_id'=>$messageid,
'text'=>"📮 پیام مورد نظر را فوروارد کنید",
'reply_markup'=>$button_back]);
}
elseif($command == "4ward"){
save("user/$chat_id/command.txt","noun");
$forp = fopen("data/member.txt",'r');
while (!feof($forp)) {
$fakar = fgets($forp);
bot('ForwardMessage',[
'chat_id'=>$fakar,
'from_chat_id'=>$admin,
'message_id'=>$message_id]);
}
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"پیام شما به تمامی کاربران ربات فوروارد شد",
'parse_mode'=>"html",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "send"){
save("user/$chatid/command.txt","ersal");
bot('editMessagetext', [
'chat_id' => $chatid,
'message_id'=>$messageid,
'text'=>"📭 پیامتون رو وارد کنید",
'reply_markup'=>$button_back]);
}
elseif($command == 'ersal'){
save("user/$chat_id/command.txt","none");        
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"📭 پیام شما در صف ارسال قرار گرفت.",
'message_id'=>$message_id,
'reply_markup'=>$sooroshh]);
$all_member = fopen("data/member.txt",'r');
while( !feof( $all_member)) {
$user = fgets( $all_member);
if($file_id != null){
SendDocument($user,$file_id,'',$caption);
}
if($photo_id != null){
SendPhoto($user,$photo_id,'',$caption);
}
if($text != null){
SendMessage($user,$text,"html","true");
}}}
//=================================================================
elseif($data == "kanal"){
save("user/$chatid/command.txt","kanal"); 
bot('editMessagetext', [
'chat_id'=>$chatid,
'text'=>"آیدی کانال مورد نظرتان را همراه با @ ارسال نمایید!",
'message_id'=>$messageid,
'parse_mode'=>"HTML"]);
}
elseif($command == "kanal"){
save("user/$chat_id/command.txt","noun");
save("data/channel.txt","$text");
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"کانال ذخیره شد!",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "qavanin"){
save("user/$chatid/command.txt","qavanin"); 
bot('editMessagetext', [
'chat_id'=>$chatid,
'text'=>"متن قوانین ثبت تبلیغ را وارد کنید",
'message_id'=>$messageid,
'parse_mode'=>"HTML"]);
}
elseif($command == "qavanin"){
save("user/$chat_id/command.txt","noun");
save("data/ghavanin.txt","$text");
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"قوانین ثبت شدند!",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "ehda"){
save("user/$chatid/command.txt","ehda");
bot('editmessagetext', [
'chat_id' => $chatid,
'text' => "خوب ایدی عددی کاربر را بفرست️",
'message_id' => $messageid,
'parse_mode' => "html",
'reply_markup'=>$button_back]);
}
elseif($command == 'ehda') {
save("data/ehda_id.txt",$text);
save("user/$chat_id/command.txt","ehda2");
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "چند امتیاز میخوای بفرستی براش؟",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML"]);
} 
elseif($command == 'ehda2') {
$ehdaa = file_get_contents("data/ehda_id.txt");
$gold = file_get_contents("user/$ehdaa/gold.txt");
$newgold = $gold + $text;
save("user/$ehdaa/gold.txt", $newgold);
save("user/$chat_id/command.txt","noun");
save("data/ehda_id.txt","");
bot('sendMessage', [
'chat_id' => $ehdaa,
'text' => "مقدار $text امتیاز از طرف مدیریت به شما اهدا شد!"]);
bot('sendMessage', [
'chat_id' => $chat_id,
'text' => "با موفقیت فرستاده شد",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "kasr"){
save("user/$chatid/command.txt","kasr");
bot('editMessagetext', [
'chat_id'=>$chatid,
'text' => "خوب ایدی عددی کاربر را بفرست️",
'message_id'=>$messageid,
'parse_mode' => "html",
'reply_markup'=>$button_back]);
}
elseif($command == 'kasr'){
save("data/kasr_id.txt",$text);    
save("user/$chat_id/command.txt","kasr2");
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "چند امتیاز میخوای ازش کم کنی؟",
'reply_to_message_id'=>$message_id,
'parse_mode' => "html"]);
}
elseif($command == 'kasr2'){
if(preg_match('/^([0-9])/',$text)){
$kasrr = file_get_contents("data/kasr_id.txt");
$gold = file_get_contents("user/$kasrr/gold.txt");
$newgold = $gold - $text;   
save("user/$kasrr/gold.txt",$newgold);;
save("user/$chat_id/command.txt","noun");
save("data/kasr_id.txt","");
bot('sendMessage', [
'chat_id' => $kasrr,
'text' => "مقدار $text امتیاز از طرف مدیریت از شما کسر گردید!"]);
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "کم شد",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}}
//=================================================================
elseif($data == "reward"){
save("user/$chatid/command.txt","reward");
bot('editMessagetext', [
'chat_id'=>$chatid,
'text'=>"💰 مقدار سکه مورد نظر رو وارد کنید:",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$button_backk]);
}
elseif($command == 'reward'){
if(preg_match('/^([0-9])/',$text)){
save("user/$chat_id/command.txt","none");
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "💰 مقدار سکه به زودی به همه اضافه میشود.",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$button_backk]);
$all_member = fopen("data/member.txt", 'r');
while( !feof( $all_member)) {
$user = fgets( $all_member);
$user = str_replace(" ",'',$user);
$user = str_replace("\n",'',$user);
$cn = file_get_contents('user/'.$user."/gold.txt");
save('user/'.$user."/gold.txt",($cn+$text) );
bot('sendmessage', [
'chat_id' =>$user,
'text' => "از طرف مدیریت به شما $text امتیاز اضافه گردید
#همگانی",
'message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$button_backk]);
}
bot('sendmessage', [
'chat_id' => $chat_id,
'text' => "💰 تعداد $text سکه به همه اعضا اضافه شد.",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$button_backk]);
}else{
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"💰 لطفا به عدد وارد کنید در غیر اینصورت مشکل بزرگی پیش خواهد آمد.",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$button_backk]);  
}}
//==============================================================================
elseif($data == "cdc"){
save("user/$chatid/command.txt","create code1");
bot('editMessagetext', [
'chat_id' => $chatid,
'text'=>"مقدار امتیاز برای کد امتیازی را وارد کنید",
'message_id'=>$messageid,
'parse_mode' => "html",
'reply_markup'=>$button_backk]);
}
elseif($command == "create code1"){
save("user/$chat_id/command.txt","create code2");    
save("code/newcode.txt","$text");
bot('sendmessage',[
'chat_id'=>$chat_id,
'text'=>"حالا کد رو وارد کنید
میتوانید از حروف و اعداد وایموجی استفاده کنید:",
'parse_mode' => "html",
'reply_markup'=>$button_backk]);
}
elseif($command == "create code2"){
save("user/$chat_id/command.txt","noun");    
save("code/newcodegold.txt","$text");
sendmessage($chat_id,"کد با موفقیت به کانال ارسال شد!","html","true",$button_backk);
bot('sendmessage',[
'chat_id'=>$t_kanal,
'text'=>"
🔶کد امتیازی جدید ساخته شد✔️


🏷کد⬅️: 
`$text`

🎈تعداد امتیاز: 
`$cdemt`

===========================
توجه : تنها یک نفر میتواند از  کد استفاده کند!
",
'parse_mode' => "markdown",
'reply_markup'=> json_encode([
'inline_keyboard'=>[
[['text'=>"🔻ورود به تبادل یاب🔺",'url'=>"https://telegram.me/$UserNameBot"]],
],])]);
}
//==============================================================================
elseif($data == "dl-zir"){
$users = explode ("\n",$member);  
foreach($users as $test2){
if(file_exists("user/$test2/zir.txt")){
save("user/$test2/zir.txt","0");
}}
bot('editMessagetext', [
'chat_id'=>$chatid,
'text' => "زیر مجموعه ها همگی خالی شد",
'message_id'=>$messageid,
'parse_mode' => "html",
'reply_markup'=>$button_back]);
}
//=================================================================
elseif($data == "ban"){
save("user/$chatid/command.txt","ban");
bot('editMessagetext', [
'chat_id'=>$chatid,
'text'=>"ایدیشو بفرس",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$button_back]);
}
elseif($command == 'ban'){
save("user/$chat_id/command.txt","none");
$myfile2 = fopen("data/ban.txt", "a") or die("Unable to open file!");
fwrite($myfile2, "$text\n");
fclose($myfile2);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"بلاک شد🚫",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
bot('sendmessage', [
'chat_id' => $text,
'text'=>"شما از ربات بلاک شده اید🚫📛
🚷اگر اشتباه بلاک شده اید به ما خبر دهید👇
@sooroshh",
'parse_mode'=>"HTML"]);
}
//=================================================================
elseif($data == "unban"){
save("user/$chatid/command.txt","unban");
bot('editMessagetext', [
'chat_id' => $chatid,
'text'=>"ایدیشو بفرس",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$button_back]);
}
elseif($command == 'unban'){
save("user/$chat_id/command.txt","none");
$newlist = str_replace($text,"",$ban);
save("data/ban.txt",$newlist);
bot('sendmessage', [
'chat_id' => $chat_id,
'text'=>"آنبلاک شد🚫",
'reply_to_message_id'=>$message_id,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
bot('sendmessage', [
'chat_id' => $text,
'text'=>"شما با موفقیت از بلاک خارج شدید",
'parse_mode'=>"HTML"]);
}
//=================================================================
elseif($data == "dl-list"){
unlink("data/ban.txt");
bot('editMessagetext', [
'chat_id' => $chatid,
'text'=>"لیست بلاکی ها پاک شد!",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);    
}
//=================================================================
elseif($data == "off"){
save("data/bot.txt","false");
bot('editMessagetext', [
'chat_id' => $chatid,
'text'=>"ربات خاموش شد ...❌",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}
//=================================================================
elseif($data == "on"){
save("data/bot.txt","true");
bot('editMessagetext', [
'chat_id' => $chatid,
'text'=>"ربات روشن شد ...✅",
'message_id'=>$messageid,
'parse_mode'=>"HTML",
'reply_markup'=>$sooroshh]);
}}
//=================================================================
?>