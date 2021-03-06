<?php
namespace Home\Controller;

use Think\Controller;

class FileController extends \Think\Controller
{
    //头像上传
    public function avatal($inputName)
    {
        $upload           = new \Think\Upload(); // 实例化上传类
        $upload->maxSize  = 3145728; // 设置附件上传大小
        $upload->exts     = array('jpg', 'gif', 'png', 'jpeg'); // 设置附件上传类型
        $upload->rootPath = './Public/avatal/'; // 设置附件上传根目录
        $info             = $upload->uploadOne($_FILES[$inputName]);
        if (!$info) {
            // 上传错误提示错误信息
            $this->error($upload->getError());
        } else {
            // 上传成功 获取上传文件信息
            return $info['savepath'] . $info['savename'];
        }
    }
}
