<?php
namespace Magento\Quote\Api\Data;

/**
 * Extension class for @see \Magento\Quote\Api\Data\TotalSegmentInterface
 */
class TotalSegmentExtension extends \Magento\Framework\Api\AbstractSimpleObject implements \Magento\Quote\Api\Data\TotalSegmentExtensionInterface
{
    /**
     * @return \Magento\Tax\Api\Data\GrandTotalDetailsInterface[]|null
     */
    public function getTaxGrandtotalDetails()
    {
        return $this->_get('tax_grandtotal_details');
    }

    /**
     * @param \Magento\Tax\Api\Data\GrandTotalDetailsInterface[] $taxGrandtotalDetails
     * @return $this
     */
    public function setTaxGrandtotalDetails($taxGrandtotalDetails)
    {
        $this->setData('tax_grandtotal_details', $taxGrandtotalDetails);
        return $this;
    }
}
