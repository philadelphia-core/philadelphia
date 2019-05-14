<?php

  require 'bootstrap.php';
  
  use PhiladelPhia\Database\Model;

  class Users extends Model
  {
    function find() {
      var_dump(static::$instance);
    }
  }

