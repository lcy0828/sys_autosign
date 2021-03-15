<?PHP
function getRealIp() {
	static $realip = null;
	if($realip !== null) {
		return $realip;
	}
 
	if(getenv('REMOTE_ADDR')) {
		$realip = getenv('REMOTE_ADDR');
	} else if(getenv('HTTP_CLIENT_IP')) {
		$realip = getenv('HTTP_CLIENT_IP');
	} else if (getenv('HTTP_X_FROWARD_FOR')) {
		$realip = getenv('HTTP_X_FROWARD_FOR');
	}
 
	return $realip;	
}
$ip=getRealIp();
echo $ip;
?>