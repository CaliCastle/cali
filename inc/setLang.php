<?php 
$lang  =  $_REQUEST [ 'lang' ];  
if ( $lang  ==  'en' ){  
  putenv('LANG=en_US' );   
  setlocale(LC_ALL, 'en_US' );  
}else {  
  putenv('LANG=zh');   
  setlocale(LC_ALL, 'zh_CN' );
}