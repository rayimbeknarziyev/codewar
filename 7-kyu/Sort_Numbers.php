<?php

function solution($nums) {
    if (!$nums || empty($nums)) {
          return [];
      }
  
      sort($nums);
  
      return $nums;
  }