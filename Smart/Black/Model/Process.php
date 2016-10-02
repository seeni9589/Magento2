<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
namespace Smart\Black\Model;

class Process extends \Magento\Framework\Model\AbstractModel
{
    protected $_logger;

    public function __construct(\Smart\Black\Logger\Logger $logger) {
        $this->_logger = $logger;
    }

    public function getMyData($val){
        $b = 'Welcome '.$val;
        return $b;
    }
    public function getMyData1($val){
        $b = 'Welcome back '.$val;
        $this->_logger->info('I did something');
        $this->_logger->critical('oops',array($val,$val.'hi'));
       /* $this->_logger->addDebug($val.'debug'); // log location: var/log/debug.log
        $this->_logger->addInfo($val.'info'); // log location: var/log/system.log
        $this->_logger->addNotice($val.'notice'); // log location: var/log/system.log
        $this->_logger->addError($val.'error'); // log location: var/log/system.log
        $this->_logger->critical($val.'critical'); // log location: var/log/system.log*/
        return $b;
    }
}