<?php

namespace MMCourse\Todo\Controller\Index;

use Magento\Framework\App\ResponseInterface;
use Magento\Framework\Controller\ResultFactory;

class index extends \Magento\Framework\App\Action\Action {

    /**
     * @inheritDoc
     */
    public function execute() {
        return $this->resultFactory->create(ResultFactory::TYPE_PAGE);
    }
}
