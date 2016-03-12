<?php

//function translate($phrase, $lang)
//{ 
//$translation = null;

//switch ($lang) {

//    case 'es':

//        require(APPLICATION_PATH . 'lang/es.php');

//        $translation = $dicc[$phrase];

//        break;

//    case 'ca':

//        require(APPLICATION_PATH . 'lang/ca.php');

//        $translation = $dicc[$phrase];

//        break;

//    case 'fr':

//        require(APPLICATION_PATH . 'lang/fr.php');

//        $translation = $dicc[$phrase];

//        break;

//    case 'en':

//        $translation = $phrase;

//        break;

//}
 
//return $translation;
 
//}

?>
<?php

function e($text){
  global $base_lang;
  if(isset($base_lang) AND $base_lang!="en" AND file_exists("lang/{$base_lang}.php")) {
    include("../lang/{$base_lang}.php");
      if (isset($lang[$text]) && !empty($lang[$text])) {
          return $lang[$text];
      }
  }
    return $text;
}
?>

<?php 

$base_lang="es"; // Set the default language
 
if(isset($_COOKIE["lang"])){
 $base_lang=$_COOKIE["lang"]; // Get language from cookie
}
 
if(isset($_GET["lang"])){
  setcookie("lang",strip_tags($_GET["lang"]),strtotime('+30 days'),'/', NULL, 0);
  $base_lang=strip_tags($_GET["lang"]); // Or set cookie and new language
}

?>