<?php

namespace Smart\Feedback\Model\ResourceModel;

class Feedback extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    
    protected $_feedbackTable;
    
    public function __construct(
        \Magento\Framework\Model\ResourceModel\Db\Context $context,
        \Magento\Framework\Stdlib\DateTime\DateTime $date,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        $connectionName = null
    ) {
        $this->_date = $date;
        $this->_storeManager = $storeManager;

        parent::__construct($context, $connectionName);
    }

    /**
     * Define main table. Define other tables name
     *
     * @return void
     */
    protected function _construct()
    {
        $this->_init('feedback', 'fid');
        $this->_feedbackTable = $this->getTable('feedback');
    }
}

