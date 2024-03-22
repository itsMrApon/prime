<?php
  namespace App\Models;

  class Listing {
    public static function all() {
      return [
      [
        'id' => 1,
        'title' => 'Listing One',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum repellendus odit cum ex. Inventore, corrupti fugiat! Velit amet perferendis in, saepe distinctio aut tempora expedita quod ea repellat nisi porro?'
      ],
      [
        'id' => 2,
        'title' => 'Listing Two',
        'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Illum repellendus odit cum ex. Inventore, corrupti fugiat! Velit amet perferendis in, saepe distinctio aut tempora expedita quod ea repellat nisi porro?'
      ]
      ];
    }
//single listing
    public static function find($id){
      $listings = self::all();

      foreach($listings as $listing){
        if ($listing['id']== $id){
          return $listing;
        }
      }
    }
  }