<?php
namespace VendorModule1_Content\Plugin;

use Magento\Catalog\Pricing\Render\FinalPriceBox;

class PriceLabelPlugin
{
    public function afterRenderAmountMinimal(FinalPriceBox $subject, $result)
    {
        // $id = $this->getPriceId() ? $this->getPriceId() : 'product-minimal-price-' . $this->getSaleableItem()->getId();

        // $amount = $this->minimalPriceCalculator->getAmount($this->getSaleableItem());
        // if ($amount === null) {
        //     return '';
        // }

        // return $this->renderAmount(
        //     $amount,
        //     [
        //         'display_label'     => __('Chỉ từ: '),
        //         'price_id'          => $id,
        //         'include_container' => false,
        //         'skip_adjustments' => false
        //     ]
        // );
    }

    public function afterHasSpecialPrice(FinalPriceBox $subject, $result)
    {

        return $result;
    }
}
