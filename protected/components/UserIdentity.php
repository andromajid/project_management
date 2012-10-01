<?php

/**
 * UserIdentity represents the data needed to identity a user.
 * It contains the authentication method that checks if the provided
 * data can identity the user.
 */
class UserIdentity extends CUserIdentity {

    private $_id;
    public $user_name;

    /**
     * Authenticates a user.
     * @return boolean whether authentication succeeds.
     */
    public function authenticate() {
        $user = user::model()->find('user_name=:username', array(':username' => $this->username));
        //echo md5($this->password). " == ".$user->user_password;
        if ($user === null)
            $this->errorCode = self::ERROR_USERNAME_INVALID;
//        elseif (md5($this->password) !== $user->user_password){
//            $this->errorCode = self::ERROR_PASSWORD_INVALID;
//        }
        else {
            $this->_id = $user->user_id;
            $this->user_name = $user->user_name;
            $this->errorCode = self::ERROR_NONE;
            //update ke table
            $user->user_lastlogin = date("Y-m-d H:i:s");
            $user->save();
        }
        return $this->errorCode == self::ERROR_NONE;
    }

    /**
     * @return integer the ID of the user record
     */
    public function getId() {
        return $this->_id;
    }

}