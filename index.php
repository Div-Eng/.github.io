<?php
// Set the user-agent string to emulate Samsung Galaxy S20
$userAgent = 'Mozilla/5.0 (Linux; Android 10; SM-G981B) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/80.0.3987.162 Mobile Safari/537.36';

// Set the URL for the Screenshot Machine API
$url = 'https://api.screenshotmachine.com?key=fce868&url=https://diversified-eng.maps.arcgis.com/apps/dashboards/6dccdde1b88d41ddbbcc4840b3dfc824&dimension=1024x768&cacheLimit=0&delay=2000';

// Create a stream context to set the user-agent header
$context = stream_context_create([
    'http' => [
        'header' => "User-Agent: $userAgent\r\n"
    ]
]);

// Make the request to the Screenshot Machine API
$response = file_get_contents($url, false, $context);

// Output the result (you may want to process the result further)
echo $response;
?>
