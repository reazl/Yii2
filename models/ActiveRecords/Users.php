<?php

namespace app\models\ActiveRecords;

use Yii;


/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property int $position_id
 * @property string $login
 * @property string $password
 * @property string $accessToken
 * @property string $authKey
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    public $username;
    public $password;
    public $rememberMe = true;

    private $_user = false;
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'position_id', 'login', 'password', 'accessToken', 'authKey'], 'required'],
            [['position_id'], 'integer'],
            [['username'], 'string', 'max' => 255],
            [['login', 'password'], 'string', 'max' => 20],
            [['accessToken', 'authKey'], 'string', 'max' => 50],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Name',
            'position_id' => 'Position ID',
            'login' => 'Login',
            'password' => 'Password',
            'accessToken' => 'Access Token',
            'authKey' => 'Auth Key',
        ];
    }

    public function login()
    {
        // $this->validate() = false...Не проходят валидацию данные...
        if (true) {
            return Yii::$app->user->login($this->getUser(), $this->rememberMe ? 3600*24*30 : 0);
        }

        return false;
    }

    /**
     * @return string
     */
    /*public static function getName()
    {

            $_username = Users::findOne(100);
        echo $_username->name;
    }*/

    public function getUser()
    {
        if ($this->_user === false) {
            $this->_user = Users::findOne(['username'=>$this->username, 'password'=>$this->password]);

        }

        return $this->_user;

    }

    public function validatePassword($attribute, $params)
    {
        if (!$this->hasErrors()) {
            $user = $this->getUser();

            if (!$user) {
                $this->addError($attribute, 'Incorrect username or password.');
            }

        }
    }

    public static function findIdentity($id)
    {
        return static::findOne($id);
    }

    public function getId(){
        return $this->id;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
        foreach (Users::find()->all() as $user) {
            if ($user['accessToken'] === $token) {
                return new static($user);
            }
        }

        return null;
    }

    public function getAuthKey()
    {
        // TODO: Implement getAuthKey() method.
    }

    public function validateAuthKey($authKey)
    {
        // TODO: Implement validateAuthKey() method.
    }
}
