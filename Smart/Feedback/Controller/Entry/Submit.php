<?php
/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
namespace Smart\Feedback\Controller\Entry;

class Submit extends \Magento\Framework\App\Action\Action
{
     protected $_feedbackModel;
    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Smart\Feedback\Model\Feedback $fModel
    ) {
        $this->_feedbackModel = $fModel;
        parent::__construct($context);
    }

    /**
     * Execute request
     *
     * @throws AlreadyExistsException
     * @throws NoSuchEntityException
     * @throws \Exception
     * @return void
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();//print_r($data);exit;
        $this->_feedbackModel->addData($data)->save();
    }
}
