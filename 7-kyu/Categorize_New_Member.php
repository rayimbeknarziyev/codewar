<?php
  
function open_or_senior(array $data): array {
  $result = [];
  
  foreach($data as $member){
    
    $age = $member[0];
    $nogironligi = $member[1];
      
    if($age >= 55 && $nogironligi > 7){
      $result[] = "Senior";
    }else{
      $result[] = "Open";
    }
  }
  return $result;
}
