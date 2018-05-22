<?php

  $val = $_POST['search_term'];
  header( 'Location: https://clinwiki-prod.herokuapp.com/search/'.$val ) ;
  exit;
?>

