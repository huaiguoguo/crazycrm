<?php
namespace frontend\models;

use common\models\Func;
use Yii;
use yii\base\Model;
use common\models\Customer;
use common\models\User;

/**
 * Signup form
 */
class ResumeForm extends Customer
{
//    public $username;
//    public $email;
//    public $nickname;

    public $edu_expectation;

    public function rules()
    {
        return [
            [['username', 'nickname', 'mobile', 'qq', 'email', 'status', 'func_id', 'gender', 'location_province', 'location_ctiy', 'annual_salary', 'expectation_city', 'expectation_industry', 'expectation_func', 'expectation_annual_salary', 'work_life', 'self_evaluation', 'expectation_job'], 'required', 'message'=>'{attribute}不能为空'],
            [['mobile', 'qq', 'status', 'func_id', 'gender', 'location_province', 'location_ctiy', 'expectation_province', 'expectation_city', 'expectation_industry', 'expectation_func', 'marry', 'work_life', 'birthday', 'type', 'resume_id'], 'integer'],
            [['annual_salary', 'expectation_annual_salary'], 'number'],
            [['skill_evaluation', 'self_evaluation'], 'string'],
            [['nickname', 'username'], 'string', 'max' => 20],
            [['email'], 'string', 'max' => 40],
            [['skill', 'photos', 'website', 'remarks'], 'string', 'max' => 255],
            [['func_id'], 'exist', 'skipOnError' => true, 'targetClass' => Func::className(), 'targetAttribute' => ['func_id' => 'id']],
        ];
    }

    /**
     * Signs user up.
     *
     * @return User|null the saved model or null if saving fails
     */
    public function signup()
    {
        if (!$this->validate()) {
            return null;
        }
        
        $user = new Customer();
        $user->username = $this->username;
        $user->email = $this->email;
//        $user->setPassword($this->password);
//        $user->generateAuthKey();
        
        return $user->save() ? $user : null;
    }



    public function attributeLabels()
    {
        $parent =  parent::attributeLabels(); // TODO: Change the autogenerated stub

        $parent['edu_expectation'] = Yii::t('app', '教育经历');

        return $parent;
    }
}
