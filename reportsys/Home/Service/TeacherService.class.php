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
        $res=$teacher->where("XBM=".$XBM)->select();

        return $res;
    }
    public function getAllXYBM() {
        $teacher = D('Teacher');
        $res=$teacher->distinct(true)->field('XYBM')->select();
        return $res;
    }
    public function getDataByXbXybm($XBM, $XYBM) {
        $teacher = D('Teacher');
        $map['XBM']=$XBM;
        $map['XYBM']=$XYBM;
        $res=$teacher->where($map)->select();
        return $res;
    }
    public function getDataByXybm($XYBM) {
        $teacher=D('Teacher');
        $map['XYBM']=$XYBM;
        $res=$teacher->where($map)->select();
        return $res;
    }
}