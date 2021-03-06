<?php

namespace app\models;

class User extends \yii\base\BaseObject implements \yii\web\IdentityInterface
{
    public $id_user;
    public $username;
    public $password;
    public $auth_key;
    public $accessToken;
    public $role;

    private static $users = [
        '100' => [
            'id' => '100',
            'username' => 'admin',
            'password' => 'admin',
            'authKey' => 'test100key',
            'accessToken' => '100-token',
        ],
        '101' => [
            'id' => '101',
            'username' => 'demo',
            'password' => 'demo',
            'authKey' => 'test101key',
            'accessToken' => '101-token',
        ],
    ];


    /**
     * {@inheritdoc}
     */
    public static function findIdentity($id_user)
    {
    $dbUser = UserModel::find()
            ->where([ 
                "id_user" => $id_user 
            ])
            ->one(); 
    return new static($dbUser); 
    }

    /**
     * {@inheritdoc}
     */
    public static function findIdentityByAccessToken($accessToken, $type = null)
    { 
        $user = UserModel::find()->where(['accessToken'=>$accessToken])->one(); if(count($user)){ 
                return new static($user); 
    } 
    return null;
    }     
    /**
     * Finds user by username
     *
     * @param string $username
     * @return static|null
     */
    public static function findByUsername($username) 
    { 
        $user = UserModel::find()->where(['username'=>$username])->one(); 
            return new static($user); 
        return null; 
    }    
    /**
     * {@inheritdoc}
     */
    public function getId()
    { 
        return $this->id_user; 
    }
    /**
     * {@inheritdoc}
     */
    public function getAuthKey() 
    {
    return $this->auth_key; 
    }
    /**
     * {@inheritdoc}
     */
    public function validateAuthKey($auth_key)
    {
    return $this->auth_key === $auth_key;
    }
    /**
     * Validates password
     *
     * @param string $password password to validate
     * @return bool if password provided is valid for current user
     */
    public function validatePassword($password)
    {
        return $this->password === $password;
    }
}
