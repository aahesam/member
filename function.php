<?php
ini_set("log_errors" , "off");
ob_start();
set_time_limit(0);

// functions
function bot($method, $datas = []){
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
}}

function save($filename,$TXTdata){
$myfile = fopen($filename, "w") or die("Unable to open file!");
fwrite($myfile, "$TXTdata");
fclose($myfile);
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
}}}}}

function getFileList($folderName, $fileType = ""){
if (substr($folderName, strlen($folderName) - 1) != "/") {
$folderName .= '/';}
$c=0;
foreach (glob($folderName . '*' . $fileType) as $filename) {
if (is_dir($filename)) {
$type = 'folder';
} else {
$type = 'file';}
$c++;}
return $c;}

function numberformat($str, $sep = ','){
$result = '';
$c = 0;
$num = strlen("$str");
for ($i = $num - 1; $i >= 0; $i--) {
if ($c == 3) {
$result = $sep . $result;
$result = $str[$i] . $result;
$c = 0;
} else {
$result = $str[$i] . $result;}
$c++;}
return $result;}

function deletemessage($chat_id, $message_id){
bot('deletemessage', ['chat_id' => $chat_id,'message_id' => $message_id,]);
}

function get_Chat($idchat){
$json=file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChat?chat_id=".$idchat);
$data=json_decode($json,true);
return $data["result"]["first_name"];
}

function getChat($chat_id){
return bot('getChat',['chat_id'=>$chat_id]);    
}

function GetChatMember($chatid,$userid){
$tch = json_decode(file_get_contents('https://api.telegram.org/bot'.API_KEY."/getChatMember?chat_id=".$chatid."&user_id=".$userid))->result->status;
return $tch;
}

function objectToArrays( $object ) {
if( !is_object( $object ) && !is_array( $object ) ){
return $object;
}
if( is_object( $object ) ){
$object = get_object_vars( $object );
}
return array_map( "objectToArrays", $object );
}

function top($number,$file){ 
$saveusers = array(); 
$usersscan = scandir("user"); 
unset($usersscan[0]); 
unset($usersscan[1]); 
foreach($usersscan as $savetojs){ 
$savedis = file_get_contents("user/$savetojs/$file.txt"); 
$saveusers[$savetojs] = $savedis; 
} 
$rating = $saveusers; 
arsort($rating,SORT_NUMERIC);  
$rate = array();  
foreach($rating as $key=>$value){  
$rate[] = $key;  
}  
return $rate[$number];  
}
function GetRank($fadmin,$file){  
$saveusers = array(); 
$usersscan = scandir("user"); 
unset($usersscan[0]); 
unset($usersscan[1]); 
foreach($usersscan as $savetojs){ 
$savedis = file_get_contents("user/$savetojs/$file.txt"); 
$saveusers[$savetojs] = $savedis; 
} 
$rating = $saveusers; 
if(isset($rating[$fadmin])){  
arsort($rating,SORT_NUMERIC);  
$rate = array();  
foreach($rating as $key=>$value){  
$rate[] = $key;  
}  
$flipped = array_flip($rate);  
return $flipped[$fadmin]+1;  
}else{  
return false;  
}}

function SendMessage($chatid,$text,$parsmde,$disable_web_page_preview,$keyboard){
bot('sendMessage',['chat_id'=>$chatid,'text'=>$text,'parse_mode'=>$parsmde,'disable_web_page_preview'=>$disable_web_page_preview,'reply_markup'=>$keyboard]);
}

function ForwardMessage($chatid,$from_chat,$message_id){
bot('ForwardMessage',['chat_id'=>$chatid,'from_chat_id'=>$from_chat,'message_id'=>$message_id]);
}

function SendPhoto($chatid,$photo,$keyboard,$caption){
bot('SendPhoto',['chat_id'=>$chatid,'photo'=>$photo,'caption'=>$caption,'reply_markup'=>$keyboard]);
}

function SendAudio($chatid,$audio,$keyboard,$caption,$sazande,$title){
bot('SendAudio',['chat_id'=>$chatid,'audio'=>$audio,'caption'=>$caption,'performer'=>$sazande,'title'=>$title,'reply_markup'=>$keyboard]);
}

function SendDocument($chatid,$document,$keyboard,$caption){
bot('SendDocument',['chat_id'=>$chatid,'document'=>$document,'caption'=>$caption,'reply_markup'=>$keyboard]);
}

function SendSticker($chatid,$sticker,$keyboard){
bot('SendSticker',['chat_id'=>$chatid,'sticker'=>$sticker,'reply_markup'=>$keyboard]);
}

function SendVideo($chatid,$video,$caption,$keyboard,$duration){
bot('SendVideo',['chat_id'=>$chatid,'video'=>$video,'caption'=>$caption,'duration'=>$duration,'reply_markup'=>$keyboard]);
}

function SendVoice($chatid,$voice,$keyboard,$caption){
bot('SendVoice',['chat_id'=>$chatid,'voice'=>$voice,'caption'=>$caption,'reply_markup'=>$keyboard]);
}
function SendContact($chatid,$first_name,$phone_number,$keyboard){
bot('SendContact',['chat_id'=>$chatid,'first_name'=>$first_name,'phone_number'=>$phone_number,'reply_markup'=>$keyboard]);
}

function SendChatAction($chatid,$action){
bot('sendChatAction',['chat_id'=>$chatid,'action'=>$action]);
}

function KickChatMember($chatid,$user_id){
bot('kickChatMember',['chat_id'=>$chatid,'user_id'=>$user_id]);
}

function LeaveChat($chatid){
bot('LeaveChat',['chat_id'=>$chatid]);
}

function GetChatMembersCount($chatid){
bot('getChatMembersCount',['chat_id'=>$chatid]);
}

function AnswerCallbackQuery($callback_query_id,$text,$show_alert){
bot('answerCallbackQuery',['callback_query_id'=>$callback_query_id,'text'=>$text,'show_alert'=>$show_alert]);
}

function EditMessageText($chat_id,$message_id,$text,$parse_mode,$disable_web_page_preview,$keyboard){
bot('editMessagetext',['chat_id'=>$chat_id,'message_id'=>$message_id,'text'=>$text,'parse_mode'=>$parse_mode,'disable_web_page_preview'=>$disable_web_page_preview,'reply_markup'=>$keyboard]);
}

function EditMessageCaption($chat_id,$message_id,$caption,$keyboard,$inline_message_id){
bot('editMessageCaption',['chat_id'=>$chat_id,'message_id'=>$message_id,'caption'=>$caption,'reply_markup'=>$keyboard,'inline_message_id'=>$inline_message_id]);
}

?>