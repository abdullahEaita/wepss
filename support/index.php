<?php

require 'functions.php';

// Parse the URL to get an associative array with the URL components
$parsedUrl = parse_url($_SERVER['REQUEST_URI']);  

// Extract the path from the parsed URL
$url = isset($parsedUrl['path']) ? $parsedUrl['path'] : '';  // Default to empty string if no path

// Debugging: Output the current URL path
echo "Current URL path: " . $url . "<br>";

// Check the URL path and include corresponding controllers
if ($url === '/dashboard/support/') {
    require __DIR__ . '/controller/index.php';  // Absolute path for the main controller
} 
else if ($url === '/dashboard/support/calendar') {  
    require __DIR__ . '/controller/calendar.php';
}
else if ($url === '/dashboard/support/won') {  
    require __DIR__ . '/controller/won.php';  // Absolute path for the "won" controller
}
else if ($url === '/dashboard/support/wot') {  
    require __DIR__ . '/controller/wot.php';  // Absolute path for the "wot" controller
}
else {
    echo "No matching route found.";  // Handle unmatched routes
}
