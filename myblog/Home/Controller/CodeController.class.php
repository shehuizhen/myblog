<?php
namespace Home\Controller;

use Think\Controller;

class CodeController extends Controller
{
    public function showCode()
    {
        $Verify           = new \Think\Verify();
        $Verify->fontSize = 30;
        $Verify->length   = 4;
        $Verify->useNoise = false;
        $Verify->entry();
    }
}
