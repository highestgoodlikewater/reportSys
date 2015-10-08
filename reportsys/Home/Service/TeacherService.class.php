<?php
/**
 * Created by PhpStorm.
 * User: gm4k
 * Date: 2015/10/8
 * Time: 20:29
 */
namespace Home\Service;

use Think\Model;

class TeacherService extends Model {
    public function getDataByXB($XBM) {
        $teacher = D('Teacher');
        $res=$teacher->where("XBM=".$XBM)->limit(0,2)->select();

        return $res;
    }
}