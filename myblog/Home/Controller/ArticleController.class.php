<?php
namespace Home\Controller;

use Think\Controller;

class ArticleController extends Controller
{
    public function index()
    {
        $Modle = D('Article');
        if ($typeId = I('type', 0, 'intval')) {
            $map['typeid'] = $typeId;
        }
        if($list = I('list')){
            $map['title'] = array('like',"%$list%");
        }
        $map['deleted_at'] = 0;
        $data              = show_data_page($Modle, $map, 5);
        if(empty($data['list'])){
            $this->error('内容未找到');
        }
        $this->assign('list', $data['list']); // 赋值数据集
        $this->assign('page', $data['page']); // 赋值分页输出
        $this->display();
    }
}
