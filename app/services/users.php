<?php

  class UsersService
  {
    function __construct()
    {
      $this->users = new Users;
    }

    function find(
                  array $where = null, 
                  string $sort = 'id', 
                  int $limit = 10, 
                  int $skip = 0, 
                  int $page = 0) 
    {
      $users = $this->users;

      if (empty($where))
      {
        $where = [];
      }
      
      return $users::where($where)
                    ->limit($limit)
                    ->skip($skip)
                    ->orderBy($sort)
                    ->get();
    }

    function findById(string $id)
    {
      $users = $this->users;

      return $users::where('id', $id)
                    ->first();
    }
  }