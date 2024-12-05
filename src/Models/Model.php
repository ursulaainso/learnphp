<?php

namespace App\Models;

use App\DB;

abstract class Model
{
   public static $table;
   public $id;

   // loob andmebaasi ja kutsub välja DB(all) ja tagastab selle (extending post / user)
   public static function all()
   {
      $db = new DB();
      return $db->all(static::$table, static::class);
   }


   public static function find($id)
   {
      $db = new DB();
      return $db->find(static::$table, static::class, $id);
   }


   public function save()
   {
      $db = new DB();
      $fields = get_object_vars($this);
      unset($fields['id']);
      if ($this->id) {
         $db->update(static::$table, $fields, $this->id);
      } else {
         $db->insert(static::$table, $fields);
      }
   }

   public function delete(){
      $db = new DB();
      $db->delete(static::$table, $this->id);
   }
}
