<?php

class Api_RelActionAuth extends PhalApi_Api {

    public function getRules() {
        return array(
            'setActionRel' => array(
                'actionId' => array(
                    'name' => 'actionId',
                    'type' => 'string',
                    'min' => 1,
                    'max' => 100,
                    'require' => true,
                    'desc' => '作业id'),
                'authId' => array(
                    'name' => 'authId',
                    'type' => 'string',
                    'min' => 1,
                    'max' => 100,
                    'require' => true,
                    'desc' => '权限id'),
                'type' => array(
                    'name' => 'relType',
                    'type' => 'string',
                    'min' => 1,
                    'max' => 100,
                    'require' => true,
                    'desc' => '关系类型'),
                'checkCode' => array(
                    'name' => 'checkCode',
                    'type' => 'string',
                    'min' => 1,
                    'max' => 100,
                    'require' => true,
                    'desc' => '用户id'),
                'token' => array(
                    'name' => 'token',
                    'type' => 'string',
                    'min' => 1,
                    'max' => 100,
                    'require' => true,
                    'desc' => 'token'),
                'details' => array(
                    'name' => 'details',
                    'type' => 'array',
                    'format' => 'json',
                    'require' => true,
                    'desc' => '扩展属性,[扩展属性|多维数组]'),
            )
        );
    }

    /**
     * 设置作业,权限关系
     * @desc 通过该接口可以设置作业,权限关系
     * @return array ret为200=>设置成功(production)
     * @return array ret不为200=>查看msg的内容(production)
     */
    public function setActionRel() {
        $setRel = new Domain_RelActionAuth();
        return $setRel->set_Rel_Action($this);
    }

}
