<?php
    $api_dev_key 			= 'dPszbjkuQfdQrxHXnPkYPLoPZP-jokIl'; // your api_developer_key
    $api_paste_code 		= 'OK!!!!!!!!!!!!!999'; // your paste text
    $api_paste_private 		= '0'; // 0=public 1=unlisted 2=private
    $api_paste_name			= 'hhhdzdz'; // name or title of your paste
    $api_paste_expire_date 		= '10M';
    $api_paste_format 		= 'python';
    $api_user_key 			= ''; // if an invalid or expired api_user_key is used, an error will spawn. If no api_user_key is used, a guest paste will be created
    $api_paste_name			= urlencode($api_paste_name);
    $api_paste_code			= urlencode($api_paste_code);
    
    $url 				= 'https://pastebin.com/api/api_post.php';
    $ch 				= curl_init($url);
    
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'api_option=paste&api_user_key='.$api_user_key.'&api_paste_private='.$api_paste_private.'&api_paste_name='.$api_paste_name.'&api_paste_expire_date='.$api_paste_expire_date.'&api_paste_format='.$api_paste_format.'&api_dev_key='.$api_dev_key.'&api_paste_code='.$api_paste_code.'');
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1);
    curl_setopt($ch, CURLOPT_NOBODY, 0);
    
    $response  			= curl_exec($ch);
    echo $response;
    ////////////////////////////////
    $myArr = [
        "Ahmed",
        "Mahmoud", 
        "Mustafa", 
        "Hazem"
    ];

    $myJSON = json_encode($myArr);
    
    echo $myJSON;

    $hh = json_decode($myJSON);

    echo $hh[1];

    ///////////////////////////////////////////////////////////////
    $myfile = fopen("newfile.txt", "w") ;//open file , or creat one
$txt = $myJSON;//text
fwrite($myfile, $txt);//write text in file
fclose($myfile);//close file
rename('newfile.txt','test.js');
$myfile = fopen("test.js", "w") ;
$txt = 'console.log("hello");';
fwrite($myfile, $txt);
fclose($myfile);
unlink('test.js');



/////////////learn////////////////////////
//rename(FirstName,NewName); 
//copy(); copy file
//unlink(); delete file

?>
