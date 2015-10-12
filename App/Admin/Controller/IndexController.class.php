<?php

use Think\Controller;
/**
 * 后台首页控制器
 * @author ouyang
 */
class IndexController extends Controller{

    /**
     * 后台首页
     * @author ouyang
     */
    public function index(){
        $this->meta_title = '管理首页';
        $pagename = '报表系统首页';
        $this->assign('pageName', $pagename);
        $this->display();
    }

}
