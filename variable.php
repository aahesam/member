<?php
ini_set("log_errors" , "off");
ob_start();
set_time_limit(0);
$GetINFObot = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getMe"));
$UserNameBot = $GetINFObot->result->username;
$update = json_decode(file_get_contents('php://input'));
$message = $update->message;
$chat_id = $message->chat->id;
$from_id = $message->from->id;
$message_id = $message->message_id;
$text = $message->text;
$first = $update->message->from->first_name;
$username = $update->message->from->username;
$forward_id = $update->message->forward_from->id;
$forward_chat = $update->message->forward_from_chat;
$forward_chat_username = $update->message->forward_from_chat->username;
$forward_chat_msg_id = $update->message->forward_from_message_id;
$chatid = $update->callback_query->message->chat->id;
$data = $update->callback_query->data;
$messageid = $update->callback_query->message->message_id;
$reply = $update->message->reply_to_message->forward_from->id;
$video_id = $update->message->video->file_id;
$file_id = $update->message->document->file_id;
$photo_id = $update->message->photo->file_id;;
$caption = $update->message->caption;
//
@$command = file_get_contents("user/$chat_id/command.txt");
@$gold = file_get_contents("user/$chatid/gold.txt");
@$user_members = file_get_contents("user/$chat_id/zir.txt");
@$accept = file_get_contents("user/$chat_id/accept.txt");
@$sabtbutton = file_get_contents("user/$chat_id/sabtbutton.txt");
//
@$ban = file_get_contents("data/ban.txt");
@$member = file_get_contents("data/member.txt");
@$on_off = file_get_contents("data/bot.txt");
@$ehda = file_get_contents("data/ehda_id.txt");
@$kasr = file_get_contents("data/kasr_id.txt");
@$kanal = file_get_contents("data/channel.txt");
@$qavanin = file_get_contents("data/ghavanin.txt");
@$gozaresh = file_get_contents("data/report.txt");
@$deleteid = file_get_contents("data/message.txt");
@$cdemt = file_get_contents("user/$chatid/newcode.txt");
@$cdemtg = file_get_contents("user/$chatid/newcodegold.txt");
//
@$admintunnel = file_get_contents("user/$chatid/adminTunnel.txt");
@$adminclicker = file_get_contents("user/$chatid/adminclicker.txt");
@$tokenclicker = file_get_contents("user/$chatid/tokenclicker.txt");
@$idclicker = file_get_contents("user/$chatid/idclicker.txt");
@$adminantispam = file_get_contents("user/$chatid/adminantispam.txt");
@$tokenantispam = file_get_contents("user/$chatid/tokenantispam.txt");
@$idantispam = file_get_contents("user/$chatid/idantispam.txt");
@$chantispam = file_get_contents("user/$chatid/chantispam.txt");
@$supantispam = file_get_contents("user/$chatid/supantispam.txt");
@$admintabchi = file_get_contents("user/$chatid/admintabchi.txt");
@$admincliner = file_get_contents("user/$chatid/admincliner.txt");
@$supcliner = file_get_contents("user/$chatid/supcliner.txt");
@$admintaggir = file_get_contents("user/$chatid/admintaggir.txt");
//
$domainhost = "https://clicreate.iranmizban.xyz/CLIcreator";
//
@$hesab_go = file_get_contents("user/$chatid/hesab_golden.txt");
@$create = file_get_contents("user/$chatid/create.txt");
@$createTunnelaccount = file_get_contents("user/$chatid/createTunnelaccount.txt");
@$createclicker = file_get_contents("user/$chatid/createclicker.txt");
@$createclicker2 = file_get_contents("user/$chatid/createclicker2.txt");
@$createantispam = file_get_contents("user/$chatid/createantispam.txt");
@$createtimebio = file_get_contents("user/$chatid/createtimebio.txt");
@$createcliner = file_get_contents("user/$chatid/createcliner.txt");
@$createtaggir = file_get_contents("user/$chatid/createtaggir.txt");
@$createtabchi = file_get_contents("user/$chatid/createtabchi.txt");
@$cdfree = file_get_contents("user/$chatid/codeme.txt");
@$s_g = file_get_contents("admin/set_tosend.txt");
$nobat = file_get_contents("user/$chat_id/codeme.txt");
@$waittt = file_get_contents("user/$chatid/waitt.txt");
@$coin_wait = file_get_contents("user/$waittt/coin.txt");
@$s_vip = file_get_contents("admin/somvip_num.txt");
@$okgold = file_get_contents("user/$chatid/yesgold.txt");
//
$admin = "698038310";
//
@mkdir("user/$chat_id");
//
$time = jdate("h:i:s");
$date = jdate("Y F d");
//
$tch = json_decode(file_get_contents("https://api.telegram.org/bot".API_KEY."/getChatMember?chat_id=@Dandeeh5&user_id=".$from_id))->result->status;
?>