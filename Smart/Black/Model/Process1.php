<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Smart\Black\Model;

class Process1 extends \Smart\Black\Model\Process
{
    public function getMyData($val){
        $b = 'Go to Hell '.$val;
        return $b;
    }
    
}