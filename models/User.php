<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user".
 *
 * @property integer $id
 * @property string $username
 * @property string $password
 */
class User extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
//    public $username;
//    public $password;

    public $user = false;

    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['username', 'password'], 'required'],
            [['username', 'password'], 'string', 'max' => 50],
            ['password', 'validatePassword'],
        ];
    }
    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            if(!$this->getUser())
            {
                $this->addError($attribute, 'Wrong password');
            }
        }
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
    public function login()
    {
        if ($this->validate()) {
            return Yii::$app->user->login($this->getUser());
        }
    }
    public function getUser()
    {
        if ($this->user === false) {
            $this->user = User::findOne([
                'username'=>$this->username,
                'password'=>$this->password,
            ]);
        }
        return $this->user;
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public function getId()
    {
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
    }

    public function getAuthKey()
    {
    }

    public function validateAuthKey($authKey)
    {
    }
}
