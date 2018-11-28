<?php
require_once 'function.php';
global $db;
date_default_timezone_set("Asia/Tehran");
$input=file_get_contents("php://input");
file_put_contents('result.txt', $input.PHP_EOL.PHP_EOL,FILE_APPEND);
$update=json_decode($input,true);
$api_url="https://api.telegram.org/bot".API_TOKEN."/";
///////////////////////////// Admin info /////////////////////////////
$channel_id="@Monster_Source";
$bot_username="xxxxxxbot";
$admin_user_id=000000000;
$invite_gif="http://yourdomain.ir/folder/ad_gif.mp4";
$limit_musics=10;
/////////////////////////////////////////////////////////////////////
if(array_key_exists('message', $update)){
    $user_id=$update['message']['from']['id'];
    $chat_id=$update['message']['chat']['id'];
    $message_id=$update['message']['message_id'];
    $username=(array_key_exists('username',$update['message']['from']))?$update['message']['from']['username']:null;
    $last_name=(array_key_exists('last_name',$update['message']['from']))?$update['message']['from']['last_name']:null;
    $first_name=$update['message']['from']['first_name'];
    $text=$update['message']['text'];
    $audio=(array_key_exists('audio',$update['message']))?$update['message']['audio']['file_id']:null;
    $caption=$update['message']['caption'];
}elseif (array_key_exists('callback_query', $update)){
    $callback_id=$update['callback_query']['id'];
    $user_id=$update['callback_query']['from']['id'];
    $chat_id=$update['callback_query']['message']['chat']['id'];
    $message_id=$update['callback_query']['message']['message_id'];
    $username=$update['callback_query']['from']['username'];
    $first_name=$update['callback_query']['from']['first_name'];
    $text=$update['callback_query']['data'];
}

///////////////////////////////////////////////////////////////
if(strpos($text, '/start')!==false){
    if($text=='/start'){
        $query="select * from users WHERE user_id=".$user_id;
        $res=mysqli_query($db, $query);
        $num=mysqli_num_rows($res);
        if($num==0){
            $query="insert into users(user_id,first_name,last_name,username,step) VALUES(".$user_id.",'".$first_name."','".$last_name."','".$username."','home')";
            $res=mysqli_query($db, $query);
        }
        $msg=urlencode("🎵به دنیای ترانه خوش آمدید. این یک سرویس خودکار جستجوی و دانلود موسیقی در تلگرام است.
شروع کن:
🔎 اسم خواننده و آهنگ مورد نظرتو بنویس تا لیست آهنگ های موجود برات ارسال بشه:
✅   مثال: بنان - الهه ناز");
        $markup=array('keyboard'=>array(array('📋 تاریخچه دانلود ها','📊 آمار فعالیت'),array('💑 اشتراک با دوستان','❓راهنمای استفاده')),'resize_keyboard'=>true);
        $markup=json_encode($markup);
        message($chat_id, $msg,$markup);
        setStep($user_id, 'home');
    }else{
        $id=substr($text,7);
        if($id!=$user_id){
            $query="select is_invited from users WHERE user_id=".$user_id;
            $res=mysqli_query($db, $query);
            $is_invited=mysqli_fetch_assoc($res);
            $is_invited=$is_invited['is_invited'];
            if($is_invited==0){
                $query="update users set invite=invite+1 WHERE user_id=".$id;
                $res=mysqli_query($db, $query);
                $res2=file_get_contents($api_url."sendMessage?chat_id=".$id."&text=یک کاربر جدید با لینک شما عضو شد");
            }
            file_put_contents('res.txt',$res2 );
            $query="select * from users WHERE user_id=".$user_id;
            $res=mysqli_query($db, $query);
            $num=mysqli_num_rows($res);
            if($num==0){
                $query="insert into users(user_id,first_name,last_name,username,step,is_invited) VALUES(".$user_id.",'".$first_name."','".$last_name."','".$username."','home',1)";
                $res=mysqli_query($db, $query);
            }
            $msg=urlencode("🎵به دنیای ترانه خوش آمدید. این یک سرویس خودکار جستجوی و دانلود موسیقی در تلگرام است.
شروع کن:
🔎 اسم خواننده و آهنگ مورد نظرتو بنویس تا لیست آهنگ های موجود برات ارسال بشه:
✅   مثال: بنان - الهه ناز");
            $markup=array('keyboard'=>array(array('📋 تاریخچه دانلود ها','📊 آمار فعالیت'),array('💑 اشتراک با دوستان','❓راهنمای استفاده')),'resize_keyboard'=>true);
            $markup=json_encode($markup);
            message($chat_id, $msg,$markup);
            setStep($user_id, 'home');
        }
        $res=file_get_contents($api_url."sendMessage?chat_id=".$chat_id."&text=".$id);
    }
}else {
    $step = getStep($user_id);
    switch ($step) {
        case 'home': {
            if($audio!=null){
                forwardMessage($admin_user_id, $message_id,$chat_id );
                message($chat_id, urlencode("✅ با تشکر از شما فایل ارسالی شما دریافت شد ✅"));
                addSent($user_id);
            }
            switch ($text) {
                case '💑 اشتراک با دوستان': {
                    $caption=urlencode("🎵ربات جستجو و دانلود موزیک با بیش از 2 میلیون ترانه جدید و قدیمی. شروع کنید: 

https://t.me/music_7Learn_bot?start=".$user_id);
                    video($chat_id,$invite_gif,$caption );
                }
                    break;

                case '❓راهنمای استفاده': {
                    $msg=urlencode("💡 راهنمای جستجو:

۱. اگر فارسی جستجو کردید و نتیجه نگرفتید، انگلیسی یا پینگیلیش جستجو کنید یا بلعکس
۲. از جستجوی یک کلمه ای پرهیز کنید، سعی کنید نام خواننده و ترانه را با هم جستجو کنید
۳. توجه کنید در جستجوی خود غلط املائی نداشته باشید
۴. متن بعضی از ترانه ها در بانک ما موجود می باشد یعنی ممکن است جستجوی \"بخش کوتاهی\" از متن ترانه به جای نام آن نتیجه بخش باشد

❓ راهنمای دانلود:
بعد از جستجو، برای دانلود آهنگ روی لینک دانلود (download_xxx) زیر هر ترانه در لیست جستجو کلیک یا تپ بزنید:
لینک دانلود به شکل زیر می باشد(بین علامت های 👉):
—------------------------------—
1. Banan Elahe Naz
📥/download_19175 
—------------------------------—
⚠️ اگر در بالا لینکی نمی بینید یا قادر به تپ زدن (یا کلیک کردن) روی آن نیستید باید تلگرام خود را بروز نمایید.
توجه داشته باشید که برای استفاده بهینه از ربات های تلگرام همیشه آخرین نسخه اصل تلگرام را نصب کنید.");
                    message($chat_id, $msg);
                }
                    break;

                case '📊 آمار فعالیت': {
                    $sent=getSent($user_id);
                    $download=getDownload($user_id);
                    $msg=urlencode("💝  تعداد اشتراک:  0
📥  تعداد ترانه های دریافتی:  $download
☁️  تعداد ترانه های ارسالی:  $sent

🎧 @".$bot_username);
                    message($chat_id, $msg);
                }
                    break;

                case '/admin': {
                    if($user_id==$admin_user_id){
                        $markup=array('keyboard'=>array(array('آمار کاربران','تعداد موزیک')),'resize_keyboard'=>true);
                        $markup=json_encode($markup);
                        message($user_id, urlencode('حالت ادمین فعال شد!'),$markup);
                        setStep($user_id, 'admin');
                    }else{
                        message($chat_id, 'دستور یافت نشد!');
                    }
                }
                    break;

                case strpos($text, '/download_')!==false: {
                    $state=isMember($user_id, $channel_id);
                    if($state=='administrator' or $state=='creator' or $state=='member'){
                        action($chat_id, 'upload_audio');
                        $data=explode('_',$text );
                        $id=$data[1];
                        $data=getMusic($id);
                        send_file($chat_id, $data['file_id'],urlencode("🎧 @".$bot_username));
                        if(!isDownloaded($user_id, $id)){
                            addDownloades($id, $data['file_id'], $data['title'], $data['performer'], $data['duration'],$data['file_size'],$user_id);
                            addDownload($user_id);
                        }
                    }else{
                        $msg=urlencode("⚠️ برای ادامه استفاده از بات لطفا در کانال ما عضو شوید:

🆔 $channel_id
🆔 $channel_id
🆔 $channel_id
🆔 $channel_id

بعد از عضویت (جوین) شدن به کانال می توانید مجددا آهنگ خود را دانلود نمایید:
/download_4952079


با تشکر");
                    }
                }
                    break;
                
                case '📋 تاریخچه دانلود ها': {
                    $query="select * from downloads WHERE user_id=".$user_id;
                    $res=mysqli_query($db, $query);
                    $num=mysqli_num_rows($res);
                    if($num>0){
                        $result="👇 لیست دانلود ها 👇".PHP_EOL.PHP_EOL;
                        $cnt=($num>=$limit_musics)?$limit_musics:$num;
                        for ($i=1;$i<=$cnt;$i++){
                            $fetch=mysqli_fetch_assoc($res);
                            $id=$fetch['id'];
                            $performer=$fetch['performer'];
                            $title=$fetch['title'];
                            $file_size=round($fetch['file_size']/1024/1024,1,PHP_ROUND_HALF_DOWN);
                            $duration=gmdate('i:s',$fetch['duration']);
                            $file_id=$fetch['file_id'];
                            $result.=$i.". ".$performer." - ".$title.PHP_EOL."📥/download_".$id." 🕒 ".$duration.PHP_EOL."💾 ".$file_size." MB".PHP_EOL."------------------------".PHP_EOL;
                        }
                        if($num>$limit_musics){
                            $result.="🔍 $num آهنگ پیدا شد 🔍";
                            message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','Dnext_'.$limit_musics)));
                        }else{
                            $result.="🔍 $num آهنگ پیدا شد 🔍";
                            message($chat_id, urlencode($result));
                        }

                    }
                }
                    break;

                case strpos($text, 'Dnext_')!==false: {
                    $data=explode('_',$text );
                    $last_id=$data[1];
                    $query="select * from downloads WHERE user_id=".$user_id;
                    $res=mysqli_query($db, $query);
                    $num=mysqli_num_rows($res);
                    $records=array();
                    while ($fetch=mysqli_fetch_assoc($res)){
                        $records[]=$fetch;
                    }
                    if($last_id+$limit_musics<$num){
                        $endponit=$last_id+$limit_musics;
                    }else{
                        $endponit=$num;
                    }
                    $result="👇 ادامه ی لیست دانلود 👇".PHP_EOL.PHP_EOL;
                    $cnt=($num>=$limit_musics)?$limit_musics:$num;
                    for ($i=$last_id;$i<$endponit;$i++){
                        $id=$records[$i]['id'];
                        $performer=$records[$i]['performer'];
                        $title=$records[$i]['title'];
                        $file_size=round($records[$i]['file_size']/1024/1024,1,PHP_ROUND_HALF_DOWN);
                        $duration=gmdate('i:s',$records[$i]['duration']);
                        $file_id=$records[$i]['file_id'];
                        $result.=$i.". ".$performer." - ".$title.PHP_EOL."📥/download_".$id." 🕒 ".$duration.PHP_EOL."💾 ".$file_size." MB".PHP_EOL."------------------------".PHP_EOL;
                    }
                    if($num>$last_id+$limit_musics){
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','Dnext_'.$endponit,'صفحه ی قبل','Dprev_'.$endponit)));
                    }else{
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی قبل','Dprev_'.$endponit)));
                    }

                }break;

                case strpos($text, 'Dprev_')!==false: {
                    $data=explode('_',$text );
                    $last_id=$data[1];
                    $query="select * from downloads WHERE user_id=".$user_id;
                    $res=mysqli_query($db, $query);
                    $num=mysqli_num_rows($res);
                    $records=array();
                    while ($fetch=mysqli_fetch_assoc($res)){
                        $records[]=$fetch;
                    }
                    if($last_id%$limit_musics==0){
                        $endponit=$last_id-$limit_musics;
                    }else{
                        $last_id=$last_id-($last_id%$limit_musics);
                        $endponit=$last_id;
                    }
                    $result="👇 ادامه ی لیست دانلود 👇".PHP_EOL.PHP_EOL;
                    $cnt=($num>=$limit_musics)?$limit_musics:$num;
                    for ($i=$endponit-$limit_musics;$i<=$endponit;$i++){
                        $id=$records[$i]['id'];
                        $performer=$records[$i]['performer'];
                        $title=$records[$i]['title'];
                        $file_size=round($records[$i]['file_size']/1024/1024,1,PHP_ROUND_HALF_DOWN);
                        $duration=gmdate('i:s',$records[$i]['duration']);
                        $file_id=$records[$i]['file_id'];
                        $result.=$i.". ".$performer." - ".$title.PHP_EOL."📥/download_".$id." 🕒 ".$duration.PHP_EOL."💾 ".$file_size." MB".PHP_EOL."------------------------".PHP_EOL;
                    }
                    if($num>$last_id and $endponit-$limit_musics>0){
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','next_'.$endponit,'صفحه ی قبل','prev_'.$endponit)));
                    }else{
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','next_'.$endponit)));
                    }

                }break;


                case strpos($text, 'next_')!==false: {
                    $data=explode('_',$text );
                    $last_id=$data[1];
                    $search=getSearch($user_id);
                    $query="select * from music WHERE title='".$search."' or title LIKE '% ".$search." %' or title LIKE '% ".$search."%' or title LIKE '%".$search." %' or performer LIKE '%".$search." %' or performer LIKE '% ".$search."%' or performer LIKE '% ".$search." %' or performer='".$search."'";
                    $res=mysqli_query($db, $query);
                    $num=mysqli_num_rows($res);
                    $records=array();
                    while ($fetch=mysqli_fetch_assoc($res)){
                        $records[]=$fetch;
                    }
                    if($last_id+$limit_musics<$num){
                        $endponit=$last_id+$limit_musics;
                    }else{
                        $endponit=$num;
                    }
                    $result="👇 نتایج بعدی به شرح زیر است.👇".PHP_EOL.PHP_EOL;
                    $cnt=($num>=$limit_musics)?$limit_musics:$num;
                    for ($i=$last_id;$i<$endponit;$i++){
                        $id=$records[$i]['id'];
                        $performer=$records[$i]['performer'];
                        $title=$records[$i]['title'];
                        $file_size=round($records[$i]['file_size']/1024/1024,1,PHP_ROUND_HALF_DOWN);
                        $duration=gmdate('i:s',$records[$i]['duration']);
                        $file_id=$records[$i]['file_id'];
                        $result.=$i.". ".$performer." - ".$title.PHP_EOL."📥/download_".$id." 🕒 ".$duration.PHP_EOL."💾 ".$file_size." MB".PHP_EOL."------------------------".PHP_EOL;
                    }
                    if($num>$last_id+$limit_musics){
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','next_'.$endponit,'صفحه ی قبل','prev_'.$endponit)));
                    }else{
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی قبل','prev_'.$endponit)));
                    }

                }break;

                case strpos($text, 'prev_')!==false: {
                    $data=explode('_',$text );
                    $last_id=$data[1];
                    $search=getSearch($user_id);
                    $query="select * from music WHERE title='".$search."' or title LIKE '% ".$search." %' or title LIKE '% ".$search."%' or title LIKE '%".$search." %' or performer LIKE '%".$search." %' or performer LIKE '% ".$search."%' or performer LIKE '% ".$search." %' or performer='".$search."'";
                    $res=mysqli_query($db, $query);
                    $num=mysqli_num_rows($res);
                    $records=array();
                    while ($fetch=mysqli_fetch_assoc($res)){
                        $records[]=$fetch;
                    }
                    if($last_id%$limit_musics==0){
                        $endponit=$last_id-$limit_musics;
                    }else{
                        $last_id=$last_id-($last_id%$limit_musics);
                        $endponit=$last_id;
                    }
                    $result="👇 نتایج بعدی به شرح زیر است.👇".PHP_EOL.PHP_EOL;
                    $cnt=($num>=$limit_musics)?$limit_musics:$num;
                    for ($i=$endponit-$limit_musics;$i<=$endponit;$i++){
                        $id=$records[$i]['id'];
                        $performer=$records[$i]['performer'];
                        $title=$records[$i]['title'];
                        $file_size=round($records[$i]['file_size']/1024/1024,1,PHP_ROUND_HALF_DOWN);
                        $duration=gmdate('i:s',$records[$i]['duration']);
                        $file_id=$records[$i]['file_id'];
                        $result.=$i.". ".$performer." - ".$title.PHP_EOL."📥/download_".$id." 🕒 ".$duration.PHP_EOL."💾 ".$file_size." MB".PHP_EOL."------------------------".PHP_EOL;
                    }
                    if($num>$last_id and $endponit-$limit_musics>0){
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','next_'.$endponit,'صفحه ی قبل','prev_'.$endponit)));
                    }else{
                        $result.="🔍 $num آهنگ پیدا شد 🔍";
                        message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','next_'.$endponit)));
                    }

                }break;

                default: {
                    if(array_key_exists('text',$update['message'])){
                        $query="select * from music WHERE title='".$text."' or title LIKE '% ".$text." %' or title LIKE '% ".$text."%' or title LIKE '%".$text." %' or performer LIKE '%".$text." %' or performer LIKE '% ".$text."%' or performer LIKE '% ".$text." %' or performer='".$text."'";
                        $res=mysqli_query($db, $query);
                        $num=mysqli_num_rows($res);
                        if($num>0){
                            setSearch($user_id,$text);
                            $result="👇 نتایج مهمتر پایین لیست هستند.👇".PHP_EOL.PHP_EOL;
                            $cnt=($num>=$limit_musics)?$limit_musics:$num;
                            for ($i=1;$i<=$cnt;$i++){
                                $fetch=mysqli_fetch_assoc($res);
                                $id=$fetch['id'];
                                $performer=$fetch['performer'];
                                $title=$fetch['title'];
                                $file_size=round($fetch['file_size']/1024/1024,1,PHP_ROUND_HALF_DOWN);
                                $duration=gmdate('i:s',$fetch['duration']);
                                $file_id=$fetch['file_id'];
                                $result.=$i.". ".$performer." - ".$title.PHP_EOL."📥/download_".$id." 🕒 ".$duration.PHP_EOL."💾 ".$file_size." MB".PHP_EOL."------------------------".PHP_EOL;
                            }
                            if($num>$limit_musics){
                                $result.="🔍 $num آهنگ پیدا شد 🔍";
                                message($chat_id, urlencode($result).inline_btn(array('صفحه ی بعد','next_'.$limit_musics)));
                            }else{
                                $result.="🔍 $num آهنگ پیدا شد 🔍";
                                message($chat_id, urlencode($result));
                            }

                        }else{
                            $msg="متاسفانه هیچ آهنگی با این نام یافت نشد 🔍

برای جستجوی بهتر،نام آهنگ و خواننده را به انواع شکل برای ربات بفرستید(فارسی،انگلیسی،فینگلیش و ...) 📝";
                            message($chat_id, urlencode($msg));
                        }
                    }
                }
                    break;
            }
        }
            break;

        case 'admin':{
            if($user_id==$admin_user_id){
                if($audio!=null){
                    $file_id=$update['message']['audio']['file_id'];
                    $duration=$update['message']['audio']['duration'];
                    $title=$update['message']['audio']['title'];
                    $performer=$update['message']['audio']['performer'];
                    $file_size=$update['message']['audio']['file_size'];
                    $mime_type=$update['message']['audio']['mime_type'];
                    $add=addMusic($file_id, $title, $performer, $duration, $file_size, $mime_type);
                    if($add==true){
                        message($admin_user_id, '✅فایل موزیک با موفقیت اضافه شد✅');
                    }
                }
                switch ($text){
                    case 'آمار کاربران': {
                        action($chat_id, 'typing');
                        $count=getMemberCount();
                        $msg=urlencode("تعداد کاربران ربات شما: ".$count);
                        message($chat_id, $msg);
                    }break;

                    case 'تعداد موزیک': {
                        action($chat_id, 'typing');
                        $count=getMusicCount();
                        $msg=urlencode("تعداد فایل های موزیک شما: ".$count);
                        message($chat_id, $msg);
                    }break;
                }
            }
        }
    }
}