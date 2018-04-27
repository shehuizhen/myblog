<?php
namespace Home\Model;

use Think\Model;

class UsertableModel extends Model
{
    //自动验证规则
    protected $_validate = array(
        array('passcode', 'require', '验证码必须！'),
        array('username', 'require', '用户名必须！'),
        array('password', 'require', '密码必须！'),
        array('nickname', 'require', '昵称必须！'),
        array('repassword', 'password', '确认密码不正确', 0, 'confirm'),
    );
    //自动完成规则
    protected $_auto = array(
        array('password', 'md5', 3, 'function'), // 对password字段在新增和编辑的时候使md5函数处理
    );
    //用户验证操作
    public function getUserInfo($map = [])
    {
        return $this->where($map)->find();
    }
}
