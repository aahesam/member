<?php
ini_set("log_errors" , "on");
ob_start();
set_time_limit();

$sooroshh = json_encode(['inline_keyboard'=>[
[['text'=>"آمار کاربران📈",'callback_data'=>"amar"]],
[['text'=>"ارسال▶️",'callback_data'=>"send"],
['text'=>"فوروارد⏭",'callback_data'=>"4ward"]],
[['text'=>"تنظیم کانال➕",'callback_data'=>"kanal"],
['text'=>"تنظیم قوانین📜",'callback_data'=>"qavanin"]],
[['text'=>"امتیاز همگانی💰",'callback_data'=>"reward"],
['text'=>"پاکسازی بن لیست🗑",'callback_data'=>"dl-list"]],
[['text'=>"+ امتیاز",'callback_data'=>"ehda"], ['text'=>"- امتیاز",'callback_data'=>"kasr"]],
[['text'=>"حذف زیرمجموعه ها👥",'callback_data'=>"dl-zir"]],
[['text'=>"بن کردن⚫️",'callback_data'=>"ban"],
['text'=>"⚪️آنبن کردن",'callback_data'=>"unban"]],
[['text'=>"روشن کردن✅️",'callback_data'=>"on"],
['text'=>"خاموش کردن❌",'callback_data'=>"off"]],
[['text'=>"🔙",'callback_data'=>"back"]],
],]);
//
$button_admin = json_encode(['inline_keyboard'=>[
[['text'=>"دریافت نوبت از منشی 🔖",'callback_data'=>"nobat"]],
[['text'=>"ویزیت پزشک 📝",'callback_data'=>"settings"]],
[['text'=>"🎉فرعی🛢",'callback_data'=>"details"], ['text'=>"راهنما🛒",'callback_data'=>"Guide"]],
[['text'=>"➰ کانال ما",'url'=>"https://t.me/Dronliine"], ['text'=>" پشتیبانی ربات📱",'url'=>"https://t.me/DrOnline_SupBot"]],
[['text'=>"پنل مدیریت ربات",'callback_data'=>"panel"]],
],]);
//
$button_menu = json_encode(['inline_keyboard'=>[
[['text'=>"دریافت نوبت از منشی 🔖",'callback_data'=>"nobat"]],
[['text'=>"ویزیت پزشک 📝",'callback_data'=>"settings"]],
[['text'=>"🎉فرعی🛢",'callback_data'=>"details"], ['text'=>"راهنما🛒",'callback_data'=>"Guide"]],
[['text'=>"➰ کانال ما",'url'=>"https://t.me/Dronliine"], ['text'=>"پشتیبانی ربات 📱",'url'=>"https://t.me/DrOnline_SupBot"]],
],]);
//
$button_det = json_encode(['inline_keyboard'=>[
[['text'=>"امتیاز روزانه⚙️💎",'callback_data'=>"emrozane"]],
[['text'=>"🔙",'callback_data'=>"back"]]
],]);
//
$button_createvip = json_encode(['inline_keyboard'=>[
[['text'=>"💣اکانت تونلی",'callback_data'=>"Tunnelaccount"],
['text'=>"کلیکر♻️",'callback_data'=>"clicker"]],
[['text'=>"ضدلینک پیشرفته🔥",'callback_data'=>"antispam"],
['text'=>"ساعت در بیو💎🔩",'callback_data'=>"timebio"]],
[['text'=>"💣تبچی پیشرفته⚒",'callback_data'=>"tabchi"],
['text'=>"📨کلیکر ورژن2👁‍🗨",'callback_data'=>"clicker2"]],
[['text'=>"☀️کلینر ویژه🎒",'callback_data'=>"cliner"],
['text'=>"⚙️تگ گیر پیشرفته📁",'callback_data'=>"taggir"]],
[['text'=>"🔙",'callback_data'=>"back"]],
],]);
//
$button_subdivision = json_encode(['inline_keyboard'=>[
['text'=>"دریافت بنر🎮",'callback_data'=>"banner"]],
[['text'=>"حساب کاربری🌱",'callback_data'=>"profile"],
[['text'=>"دریافت نوبت 🔖",'callback_data'=>"vipsub"]],
[['text'=>"🔙",'callback_data'=>"back"]],
],]);
$button_settings = json_encode(['inline_keyboard'=>[
[['text'=>"سرویس قلب",'callback_data'=>"estcode"],
['text'=>"سرویس داخلی",'callback_data'=>"estcode"]],
[['text'=>"سرویس زنان",'callback_data'=>"estcode"],
['text'=>"سرویس پوست،مو و زیبایی",'callback_data'=>"estcode"]],
[['text'=>"سرویس ارتوپد",'callback_data'=>"estcode"],
['text'=>"سرویس چشم",'callback_data'=>"estcode"]],
[['text'=>"سرویس مغزواعصاب",'callback_data'=>"estcode"], ['text'=>"سرویس روانپزشک",'callback_data'=>"estcode"]],
[['text'=>"سرویس عفونی",'callback_data'=>"estcode"], ['text'=>"سرویس کودکان",'callback_data'=>"estcode"]],
[['text'=>"سرویس جراح عمومی",'callback_data'=>"estcode"], ['text'=>"سرویس رادیولوژی",'callback_data'=>"estcode"]],
[['text'=>"سرویس دندانپزشکی",'callback_data'=>"estcode"], ['text'=>"سرویس طب سنتی",'callback_data'=>"estcode"]],
[['text'=>"برگشت 🔙",'callback_data'=>"back"]],
],]);
//
$button_back = json_encode(['inline_keyboard'=>[
[['text'=>"Back⤴️",'callback_data'=>"back2"]],
],]);
//
$button_backk = json_encode(['inline_keyboard'=>[
[['text'=>"برگشت 🔙",'callback_data'=>"back"]],
],]);
//
$button_empty = json_encode(['remove_keyboard'=>[
],'Remove_keyboard'=>true]);
?>