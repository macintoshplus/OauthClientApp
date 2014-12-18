<?php

namespace Jbnahan\MyAppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

class User extends BaseUser
{

    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }


    protected $jbnahanAccessToken;
    
    protected $jbnahanId;

    public function setJbnahanAccessToken($token) {
    	$this->jbnahanAccessToken = $token;

    	return $this;
    }

    public function getJbnahanAccessToken(){
    	return $this->jbnahanAccessToken;
    }

    public function setJbnahanId($id) {
    	$this->jbnahanId = $id;

    	return $this;
    }

    public function getJbnahanId(){
    	return $this->jbnahanId;
    }
}
