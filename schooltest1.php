<?php

$articleText = file_get_contents('text2.txt');

//echo $articleText;

//$articleLink = "<a href='/text2.txt'> Полный текст</a>";



 //$articlePreview
 //$articleText = strip_tags($articleText);
 //$articlePreview = strip_tags($articleText);

//$articlePreview = trim($articleText, "!,.-");
$arpt = str_replace(array("\r\n", "\t", "\b" , "\r", "\n"), ' ',  strip_tags($articleText));
$articlePreview = mb_strimwidth($arpt, 0, 200, 'UTF-8');

//$articlePreview = substr($articleText, 0, strrpos($articleText, '…' ) ) ;
 
 echo $articlePreview;
 // обрезаем текст до 200 символов
//$articleText = rtrim($articleText "!,.-") ;  // убираем в конце текста все знаки припянания 
//$articleText = substr($articleText, 0, strrpos($articleText, '  ' ) ) ;
//echo $articleText. " … " ;

//$array = explode(' ', $articleText);
//if($array[count($array)-1]=='')
//$i=1;
//else
//$i=0;
//$articleTextLink=$array[count($array)-3-$i]." ". $array[count($arrya)-2-$i]. " " . $array[count($array)-1-$i];
//$articlePreview=mb_substr($articlePreview,0,(mb_strlen($articlePreview)-mb_strlen($articleTextLink))-1);
//$articlePreview=$articlePreview." <a href='$articleLink'>{$articleTextLink}...</a>";
//return $articlePreview;
 
//не стал доделывать до конца,т.к нет времени 

//}


 //?>