<?php
// Variables sent via POST from AT API
$sessionId   = $_POST["sessionId"];
$serviceCode = $_POST["serviceCode"];
$phoneNumber = $_POST["phoneNumber"];
$text        = $_POST["text"];


// -------------DO NOT GO BEYOND THIS POINT-------------------


if ($text == "") {
    $response  = "CON Hello, Welcome to the SEARCHA Platform \n";
    $response .= "1. View Products \n";
    $response .= "2. Register \n";
    $response .= "3. About SEARCHA \n";
    $response .= "4. Help";


} else if ($text == "1") {
    $response = "CON Here are our current product listings \n" ;
    $response .= "1. Phones \n";

} else if ($text == "2") {
    $response = "CON To register on SERACH please input you details below: \n" ;

    
} else if ($text == "3") {
    $response = "CON SEARCHA helps you run your business in the wake of COVID-19. \n" ;
    $response .= "1. Visit website \n";
    $response .= "2. Chat on WhatsApp \n";
    $response .= "9. Back \n";

} else if ($text == "4") {
    $response = "END SEARCH helpdesk operates from 8am - 4pm Monday to Friday. Visit searcha.co.za for more: \n";


} else if($text == "1*1") { 
    $response = "END Thank you. We will contact you shortly.";

} else if($text == "2*1") { 
    $response = "END Tithe Account Details are\n 62 188 195 335";
    
} else if($text == "2*2") { 
    $response = "END Building Fund Account Details are\n 62 159 839 706";
    
} else if($text == "2*3") { 
    $response = "END Offerings Account Details are\n 62 752 032 799";


} else if($text == "3*1") { 
    $response = "END Your Youtube link is " .$Youtube;
    
} else if($text == "3*2") { 
    $response = "END Your Facebook Link is " .$Facebook;
    
} else if($text == "3*3") { 
    $response = "END Your Church Online Link is " .$ChurchOnline;

}

// Echo the response 
header('Content-type: text/plain');
echo $response;