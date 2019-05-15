<?php

  class UsersService
  {
<<<<<<< HEAD
    function find() {
      $users = new Users;
=======
    function __construct()
    {
      $this->users = new Users;
    }

    function find($where = null, $sort = null, $limit = 10, $skip = 0, $page = 0) 
    {
      $users = $this->users;
      return $users::find([1, 2]);
      // if (!empty($where))
      // {
      //   $users->where($where);
      // }

      // return $users
      //               ->limit($limit)
      //               ->skip($skip)
      //               ->orderBy($sort)
      //               ->get();
>>>>>>> c49d67d8af25c234c6735440fcb56cd51d0c524b
    }
  }