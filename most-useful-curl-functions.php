/**
*
* curlRequest()
* a funciton that make a request with basic auth information 
*
*@param : $usermame
*@param : $password 
*@param : $url 
*
*@return : Object 
*
*/

function curlRequest($username, $password, $url) { 
$username = $username;
$password = $password;;
$url = $url;

$ch = curl_init();
$headr = array();
$headr[] = 'Content-length: 0';
$headr[] = 'Content-type: application/json';
$headr[] = 'Authorization: Basic '. base64_encode($username.':'.$password);
curl_setopt($ch, CURLOPT_HTTPHEADER,$headr);
curl_setopt($ch, CURLOPT_URL,$URL);
curl_setopt($ch, CURLOPT_TIMEOUT, 30); //timeout after 30 seconds
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_ANY);
$projects= curl_exec ($ch);
$status_code = curl_getinfo($ch, CURLINFO_HTTP_CODE);   //get status code
curl_close ($ch);

return $projects; 

}

