<?php


// Validate an Integer Within a Range
function validateInt(){
    $int = -122;
    $min = 1;
    $max = 200;

    if(filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range" => $min, "max_range" => $max)))) {
        echo("valid");
    } else {
        echo ("not valid");
    }
}
//validateInt();


// Validate IPv6 Address
function validate_IPv6(){
    $ip = "2001:0db8:85a3:08d3:1319:8a2e:0370:7334";

    if(filter_var($ip, FILTER_VALIDATE_IP, FILTER_FLAG_IPV6)){
        echo "$ip is valid";
    } else {
        echo "$ip is not valid";
    }
}
//validate_IPv6();


// Validate URL - Must Contain QueryString
function validateURLQueryString(){
    $url = 'https://www.w3schools.com/php/phptryit.asp?filename=tryphp_filter_adv3';
    if (filter_var($url, FILTER_VALIDATE_IP, FILTER_FLAG_QUERY_REQUIRED)){
        echo 'url with query string';
    } else {
        echo 'url without query string';
    }
}
//validateURLQueryString();


// Remove Characters With ASCII Value > 127
// ASCII - American Standard Code for Information Interchange
function validateWithASCII(){
    $str = "<h1>Hello WorldÆØÅ!</h1>"; // both remove all HTML tags and all characters with ASCII value > 127
    $newstr = filter_var($str, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
    echo $newstr;
}
validateWithASCII();





























?>