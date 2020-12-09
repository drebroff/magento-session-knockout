<?php
/**
 * Copyright ©  All rights reserved.
 * See COPYING.txt for license details.
 */
declare(strict_types=1);

namespace Funami\Session\Block\Session;

use \Magento\Framework\Registry;

class Set extends \Magento\Framework\View\Element\Template
{

    /**
     * Constructor
     *
     * @param \Magento\Framework\View\Element\Template\Context  $context
     * @param array $data
     */
    protected $_catalogSession;
    protected $_customerSessionFactory;
    protected $_checkoutSession;
    protected $registry;
    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\Session $catalogSession,
        \Magento\Customer\Model\SessionFactory $customerSessionFactory,
        \Magento\Checkout\Model\Session $checkoutSession,
        Registry $_registry,
        array $data = []
    ) {
        $this->registry = $_registry;
        $this->_catalogSession = $catalogSession;
        $this->_checkoutSession = $checkoutSession;
        $this->_customerSessionFactory = $customerSessionFactory;
        parent::__construct($context, $data);
    }
    public function _prepareLayout()
    {
        return parent::_prepareLayout();
    }

    public function getCatalogSession()
    {
        return $this->_catalogSession;
    }
    public function setCustomData($data)
    {
        $this->registry->register('merch', $data);
    }
    public function getCustomerSession()
    {
        $cust = $this->_customerSessionFactory->create();
        return $cust->getCustomer()->getId();
    }

    public function getCheckoutSession()
    {
        return $this->_checkoutSession;
    }
    public function getCustomData()
    {
        return $this->registry->registry('merch');
    }
}

