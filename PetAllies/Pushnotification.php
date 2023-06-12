<?php 
// Server file
class PushNotifications {

	// (Android)API access key from Google API's Console.
	private static $API_ACCESS_KEY = 'AIzaSyDG3fYAj1uW7VB-wejaMJyJXiO5JagAsYI';
	// (iOS) Private key's passphrase.
	private static $passphrase = 'joashp';
	// (Windows Phone 8) The name of our push channel.
        private static $channelName = "joashp";
	
	// Change the above three vriables as per your app.

	public function __construct() {
		exit('Init function is not allowed');
	}
	
        // Sends Push notification for Android users
	public function android($data, $reg_id) {
	        $url = 'https://android.googleapis.com/gcm/send';
	        $message = array(
	            'title' => $data['mtitle'],
	            'message' => $data['mdesc'],
	            'subtitle' => '',
	            'tickerText' => '',
	            'msgcnt' => 1,
	            'vibrate' => 1
	        );
	        
	        $headers = array(
	        	'Authorization: key=' .self::$API_ACCESS_KEY,
	        	'Content-Type: application/json'
	        );
	
	        $fields = array(
	            'registration_ids' => array($reg_id),
	            'data' => $message,
	        );
	
	    	return $this->useCurl($url, $headers, json_encode($fields));
    	}
    }
?>
