<?php
include('db.inc.php');

function addLike(){
    $prev_likes = getLikes();
    $new_likes = $prev_likes+1;
    
    $con = mysqli_connect(DB_HOST,DB_ADMIN,DB_PWD, DB_NAME);
    if ($con){
        $sql = 'UPDATE `' . DB_TB_PRE . 'likes` SET `likes_num` = ' . $new_likes;
        mysqli_query($con, $sql);
        mysqli_close($con);
    }
}

function getLikes(){
    $con = mysqli_connect(DB_HOST,DB_ADMIN,DB_PWD, DB_NAME);
    if ($con) {
        $sql = 'SELECT * FROM `' . DB_TB_PRE . 'likes`';
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result);
        mysqli_close($con);
        return $row["likes_num"];
    }
}

function subscribe($email){
    if(!validate_email($email)){
        return -3;
    }
    $con = mysqli_connect(DB_HOST,DB_ADMIN,DB_PWD, DB_NAME);
    if ($con) {
        $result = mysqli_query($con,"SELECT * FROM `" . DB_TB_PRE . "email_subs` WHERE `user_email`='". $email . "'");
        $row = mysqli_fetch_array($result);
        if (!$row){
            mysqli_query($con, "INSERT INTO `" . DB_TB_PRE . "email_subs` (`user_email`) VALUES ('" . $email . "')", $con);
            return 1;
        } else { mysqli_close($con);
                return -2; }
    } else {
        return -1;
    }
}

function validate_email($email){
    if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/",$email)) {
        return false; 
    }
    return true;
}

function clean_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  return $data;
}

function is_mobile_request(){  
 $_SERVER['ALL_HTTP'] = isset($_SERVER['ALL_HTTP']) ? $_SERVER['ALL_HTTP'] : '';  
 $mobile_browser = '0';  
 if(preg_match('/(up.browser|up.link|mmp|symbian|smartphone|midp|wap|phone|iphone|ipad|ipod|android|xoom)/i', strtolower($_SERVER['HTTP_USER_AGENT'])))  
  $mobile_browser++;  
 if((isset($_SERVER['HTTP_ACCEPT'])) and (strpos(strtolower($_SERVER['HTTP_ACCEPT']),'application/vnd.wap.xhtml+xml') !== false))  
  $mobile_browser++;  
 if(isset($_SERVER['HTTP_X_WAP_PROFILE']))  
  $mobile_browser++;  
 if(isset($_SERVER['HTTP_PROFILE']))  
  $mobile_browser++;  
 $mobile_ua = strtolower(substr($_SERVER['HTTP_USER_AGENT'],0,4));  
 $mobile_agents = array(  
    'w3c ','acs-','alav','alca','amoi','audi','avan','benq','bird','blac',  
    'blaz','brew','cell','cldc','cmd-','dang','doco','eric','hipt','inno',  
    'ipaq','java','jigs','kddi','keji','leno','lg-c','lg-d','lg-g','lge-',  
    'maui','maxo','midp','mits','mmef','mobi','mot-','moto','mwbp','nec-',  
    'newt','noki','oper','palm','pana','pant','phil','play','port','prox',  
    'qwap','sage','sams','sany','sch-','sec-','send','seri','sgh-','shar',  
    'sie-','siem','smal','smar','sony','sph-','symb','t-mo','teli','tim-',  
    'tosh','tsm-','upg1','upsi','vk-v','voda','wap-','wapa','wapi','wapp',  
    'wapr','webc','winw','winw','xda','xda-'
    );  
 if(in_array($mobile_ua, $mobile_agents))  
  $mobile_browser++;  
 if(strpos(strtolower($_SERVER['ALL_HTTP']), 'operamini') !== false)  
  $mobile_browser++;  
 // Pre-final check to reset everything if the user is on Windows  
 if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows') !== false)  
  $mobile_browser=0;  
 // But WP7 is also Windows, with a slightly different characteristic  
 if(strpos(strtolower($_SERVER['HTTP_USER_AGENT']), 'windows phone') !== false)  
  $mobile_browser++;  
 if($mobile_browser>0)  
  return true;  
 else
  return false;
}