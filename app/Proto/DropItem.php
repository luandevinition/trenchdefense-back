<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: zombie/DropItem.proto

namespace App\Proto {

  class DropItem extends \DrSlump\Protobuf\Message {

    /**  @var int */
    public $zombieID = null;
    
    /**  @var \App\Proto\Item */
    public $item = null;
    
    /**  @var float */
    public $dropRate = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'App.Proto.DropItem');

      // REQUIRED UINT32 zombieID = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "zombieID";
      $f->type      = \DrSlump\Protobuf::TYPE_UINT32;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REQUIRED MESSAGE item = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "item";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\App\Proto\Item';
      $descriptor->addField($f);

      // REQUIRED FLOAT dropRate = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "dropRate";
      $f->type      = \DrSlump\Protobuf::TYPE_FLOAT;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <zombieID> has a value
     *
     * @return boolean
     */
    public function hasZombieID(){
      return $this->_has(1);
    }
    
    /**
     * Clear <zombieID> value
     *
     * @return \App\Proto\DropItem
     */
    public function clearZombieID(){
      return $this->_clear(1);
    }
    
    /**
     * Get <zombieID> value
     *
     * @return int
     */
    public function getZombieID(){
      return $this->_get(1);
    }
    
    /**
     * Set <zombieID> value
     *
     * @param int $value
     * @return \App\Proto\DropItem
     */
    public function setZombieID( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <item> has a value
     *
     * @return boolean
     */
    public function hasItem(){
      return $this->_has(2);
    }
    
    /**
     * Clear <item> value
     *
     * @return \App\Proto\DropItem
     */
    public function clearItem(){
      return $this->_clear(2);
    }
    
    /**
     * Get <item> value
     *
     * @return \App\Proto\Item
     */
    public function getItem(){
      return $this->_get(2);
    }
    
    /**
     * Set <item> value
     *
     * @param \App\Proto\Item $value
     * @return \App\Proto\DropItem
     */
    public function setItem(\App\Proto\Item $value){
      return $this->_set(2, $value);
    }
    
    /**
     * Check if <dropRate> has a value
     *
     * @return boolean
     */
    public function hasDropRate(){
      return $this->_has(3);
    }
    
    /**
     * Clear <dropRate> value
     *
     * @return \App\Proto\DropItem
     */
    public function clearDropRate(){
      return $this->_clear(3);
    }
    
    /**
     * Get <dropRate> value
     *
     * @return float
     */
    public function getDropRate(){
      return $this->_get(3);
    }
    
    /**
     * Set <dropRate> value
     *
     * @param float $value
     * @return \App\Proto\DropItem
     */
    public function setDropRate( $value){
      return $this->_set(3, $value);
    }
  }
}
