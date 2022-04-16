<?php
$url = $_GET["url"];
echo file($url);

// you only need the following headers if the proxy and WebGL are hosted on different domains
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Allow-Headers: Accept, X-Access-Token, X-Application-Name, X-Request-Sent-Time");
header("Access-Control-Allow-Methods: GET, POST, OPTIONS");
header("Access-Control-Allow-Origin: *");
// you can replace the "*" above with "http://your-webgl-domain" to prevent unauthorized use of your proxy
// in which case you should also append "Origin: http://your-webgl-domain" header to the request
 

