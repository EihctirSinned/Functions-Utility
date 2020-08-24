<?php
 
  class ArrayList {
 
    var $array;
 
    public function ArrayList() 
    {
      $this->array = array();
    }
 
    public function addItem($item)
    {
      $this->array[] = $item ;
    }
 
    public function toString()
    {
      $cadena = "";
      foreach ($this->array as $item) {
        $cadena .= $item;
      }
      return $cadena;
    }
 
    public function delete($item)
    {
      unset($this->array[$item]);
    }
 
    public function item($item)
    {
      return $this->array[$item];
    }
 
    public function size()
    {
      $size = 0;
      foreach ($this->array as $item) {
        $size++;
      }
      return $size;
    }
   
   public function isEmpty()
   { 
    if (count($this->array) == 0) return true; 
     else return false;     
   }

   public function sort()
   { 
    sort($this->array); 
   }

   public function getAll() 
   { 
    return $this->array; 
   }

   public function isInteger($toCheck)
   { 
    return preg_match('/^[0-9]*$/', $toCheck); 
   }

   public function addToPos($index, $obj)
   {         
    if ($this->isInteger($index))  
     $this->array[$index] = $obj;
    else  
     die("ERROR in ArrayList.addToPos <br> Integer value required"); 
   }

   public function get($index)
   { 
    if ($this->isInteger($index)) 
     return $this->array[$index]; 
    else  
     die("ERROR in ArrayList.get <br> Integer value required"); 
   }

   public function addAll($arr)
   { 
    $this->array = array_merge($this->array, $arr);
   }

   public function destroy()
   {
    $this->array = array();
   }
  }
