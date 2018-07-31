<?php
// DO NOT EDIT! Generated by Protobuf-PHP protoc plugin @package_version@
// Source: auth/LinkSocialParameter.proto

namespace App\Proto {

  class LinkSocialParameter extends \DrSlump\Protobuf\Message {

    /**  @var string */
    public $access_code = null;
    
    /**  @var \App\Proto\Type */
    public $social_type = null;
    

    /** @var \Closure[] */
    protected static $__extensions = array();

    public static function descriptor()
    {
      $descriptor = new \DrSlump\Protobuf\Descriptor(__CLASS__, 'App.Proto.LinkSocialParameter');

      // OPTIONAL STRING access_code = 1
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 1;
      $f->name      = "access_code";
      $f->type      = \DrSlump\Protobuf::TYPE_STRING;
      $f->rule      = \DrSlump\Protobuf::RULE_OPTIONAL;
      $descriptor->addField($f);

      // REQUIRED MESSAGE social_type = 2
      $f = new \DrSlump\Protobuf\Field();
      $f->number    = 2;
      $f->name      = "social_type";
      $f->type      = \DrSlump\Protobuf::TYPE_MESSAGE;
      $f->rule      = \DrSlump\Protobuf::RULE_REQUIRED;
      $f->reference = '\App\Proto\Type';
      $descriptor->addField($f);

      foreach (self::$__extensions as $cb) {
        $descriptor->addField($cb(), true);
      }

      return $descriptor;
    }

    /**
     * Check if <access_code> has a value
     *
     * @return boolean
     */
    public function hasAccessCode(){
      return $this->_has(1);
    }
    
    /**
     * Clear <access_code> value
     *
     * @return \App\Proto\LinkSocialParameter
     */
    public function clearAccessCode(){
      return $this->_clear(1);
    }
    
    /**
     * Get <access_code> value
     *
     * @return string
     */
    public function getAccessCode(){
      return $this->_get(1);
    }
    
    /**
     * Set <access_code> value
     *
     * @param string $value
     * @return \App\Proto\LinkSocialParameter
     */
    public function setAccessCode( $value){
      return $this->_set(1, $value);
    }
    
    /**
     * Check if <social_type> has a value
     *
     * @return boolean
     */
    public function hasSocialType(){
      return $this->_has(2);
    }
    
    /**
     * Clear <social_type> value
     *
     * @return \App\Proto\LinkSocialParameter
     */
    public function clearSocialType(){
      return $this->_clear(2);
    }
    
    /**
     * Get <social_type> value
     *
     * @return \App\Proto\Type
     */
    public function getSocialType(){
      return $this->_get(2);
    }
    
    /**
     * Set <social_type> value
     *
     * @param \App\Proto\Type $value
     * @return \App\Proto\LinkSocialParameter
     */
    public function setSocialType(\App\Proto\Type $value){
      return $this->_set(2, $value);
    }
  }
}
