<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Smart\Black\Model;

class Process2 extends \Magento\Framework\Model\AbstractModel
{
    public function getMyData1($val){
        $b = 'From Process2 '.$val;
        return $b;
    }
    
}