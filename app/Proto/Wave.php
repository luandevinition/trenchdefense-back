<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: wave/Wave.proto

namespace App\Proto {

  class Wave extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $name = null;
    
    /**  @var \App\Proto\WaveZombie[]  */
    public $waveZombies = array();
    
    /**  @var string */
    public $resourceID = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'App.Proto.Wave');

      // REQUIRED STRING name = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "name";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      // REPEATED MESSAGE waveZombies = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "waveZombies";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REPEATED;
      $f->reference = '\App\Proto\WaveZombie';
      $descriptor->addField($f);

      // REQUIRED STRING resourceID = 3
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 3;
      $f->name      = "resourceID";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <name> has a value
     *
     * @return boolean
     */
    public function hasName(){
      return $this->_has(1);
    }
    
    /**
     * Clear <name> value
     *
     * @return \App\Proto\Wave
     */
    public function clearName(){
      return $this->_clear(1);
    }
    
    /**
     * Get <name> value
     *
     * @return string
     */
    public function getName(){
      return $this->_get(1);
    }
    
    /**
     * Set <name> value
     *
     * @param string $value
     * @return \App\Proto\Wave
     */
    public function setName( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <waveZombies> has a value
     *
     * @return boolean
     */
    public function hasWaveZombies(){
      return $this->_has(2);
    }
    
    /**
     * Clear <waveZombies> value
     *
     * @return \App\Proto\Wave
     */
    public function clearWaveZombies(){
      return $this->_clear(2);
    }
    
    /**
     * Get <waveZombies> value
     *
     * @param int $idx
     * @return \App\Proto\WaveZombie
     */
    public function getWaveZombies($idx = NULL){
      return $this->_get(2, $idx);
    }
    
    /**
     * Set <waveZombies> value
     *
     * @param \App\Proto\WaveZombie $value
     * @return \App\Proto\Wave
     */
    public function setWaveZombies(\App\Proto\WaveZombie $value, $idx = NULL){
      return $this->_set(2, $value, $idx);
    }
    
    /**
     * Get all elements of <waveZombies>
     *
     * @return \App\Proto\WaveZombie[]
     */
    public function getWaveZombiesList(){
     return $this->_get(2);
    }
    
    /**
     * Add a new element to <waveZombies>
     *
     * @param \App\Proto\WaveZombie $value
     * @return \App\Proto\Wave
     */
    public function addWaveZombies(\App\Proto\WaveZombie $value){
     return $this->_add(2, $value);
    }
    
    /**
     * Check if <resourceID> has a value
     *
     * @return boolean
     */
    public function hasResourceID(){
      return $this->_has(3);
    }
    
    /**
     * Clear <resourceID> value
     *
     * @return \App\Proto\Wave
     */
    public function clearResourceID(){
      return $this->_clear(3);
    }
    
    /**
     * Get <resourceID> value
     *
     * @return string
     */
    public function getResourceID(){
      return $this->_get(3);
    }
    
    /**
     * Set <resourceID> value
     *
     * @param string $value
     * @return \App\Proto\Wave
     */
    public function setResourceID( $value){
      return $this->_set(3, $value);
    }
  }
}

