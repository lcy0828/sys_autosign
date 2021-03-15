<?PHP
$web_url = 'http://192.168.1.1';
$ch = curl_init($web_url);  
curl_setopt($ch, CURLOPT_HEADER, 0);  
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);   
$contents = curl_exec($ch);
curl_close($ch);
if($contents === false){
    echo('打不开!');
}else{
    echo('能打开!');
}
?>