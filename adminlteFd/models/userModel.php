<?php 
namespace app\models; 
class UserModel extends \yii\db\ActiveRecord 
{
/**
*{@inheritdoc}
*/
public static function tableName()
{
 return 'user';
}
/**
*{@inheritdoc}
*/
public function rules()
{
	return [ 
		[['username', 'password', 'auth_key', 'accessToken', 'role'], 'string', 'max' => 50], 
	]; 
}	
/**
*{@inheritdoc}
*/
public function attributeLabels()
{ 
return [ 
	'id_user'=> 'Id User', 
	'username' => 'Username', 
	'password' => 'Password', 
	'auth_key' => 'Auth Key', 
	'accessToken' => 'Access Token', 
	'role' => 'Role', 
	];
}
}	