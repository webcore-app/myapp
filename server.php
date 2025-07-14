<?php
//ini_set('display_errors', 1);
//ini_set('display_startup_errors', 1);
//error_reporting(E_ALL);
// Database connection
$servername = "localhost";
$username = "kisetmpf_db";
$password = "kisetmpf_db";
$dbname = "kisetmpf_db"; // Change to your database name
//$timezone = "Asia/Tokyo";
session_start();
$session_id=session_id();
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Function to get country from IP (using a simple IP geolocation service like ip-api)
function getCountryFromIP($ip) {
    $json = file_get_contents("http://ip-api.com/json/$ip");
    $data = json_decode($json, true);
    return $data['country'] ?? 'Unknown';
}
$_POST = json_decode(file_get_contents("php://input"), true);
// Collecting data from the client
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Capture incoming data
    $ip_address = $_SERVER['REMOTE_ADDR'];
    $country = isset($_POST['country']) ? $_POST['country'] : ''; // Geolocation lookup
    $time = isset($_POST['time']) ? $_POST['time'] : '';;
    $url = isset($_POST['url']) ? $_POST['url'] : '';
    $fullscreen_status = $_POST['fullscreen_status'] ? 1 : 0;
    
    $urlquery = parse_url($url, PHP_URL_QUERY);
    $get = [];
    parse_str($urlquery, $get);
    $gclid = $get['gclid'];
    $campaignid = $get['campaignid'];
    $bannerid = $get['bannerid'];
    $creative = $get['creative'];
    $network = $get['network'];

    // Log the data into the 'log' table
    //$stmt = $conn->prepare("INSERT INTO log (ip_address, country, url, fullscreen_status) VALUES (?, ?, ?, ?)");
    //$stmt->bind_param('sssi', $ip_address, $country, $url, $fullscreen_status);
    $stmt = $conn->prepare("INSERT INTO log (session, ip_address, country, url, fullscreen_status) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param('ssssi', $session_id, $ip_address, $country, $url, $fullscreen_status);
    $stmt->execute();
    $stmt->close();

    // Retrieve action from the 'settings' table
    $result = $conn->query("SELECT * FROM settings WHERE timezone='$country' AND campaignid LIKE '%$campaignid%' ORDER BY id DESC LIMIT 1");
    //echo "SELECT * FROM settings WHERE timezone='$country' AND campaignid='$campaignid' ORDER BY id DESC LIMIT 1";
    //echo "$gclid && $bannerid && $creative && $network";
    //print_r($get);
    //print_r($result);

    // Respond with the action data
    $response = [];
    if($gclid && $network){
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $response = [
                'action_name' => $row['action_name'],
                'action_value' => $row['action_value']
            ];
            $action_triggered = $row['id'];
            $result = $conn->query("UPDATE log SET action_triggered = $action_triggered, timer = timer+1, fullscreen_status = $fullscreen_status WHERE session='$session_id'");
        }
    }

    echo json_encode($response);
}
else{
    $fullscreen_status = $_GET['fullscreenStatus'] ? 1:0;
    $result = $conn->query("UPDATE log SET timer=timer+5, fullscreen_status = $fullscreen_status WHERE session='$session_id'");
}
$conn->close();
?>
