<?php

namespace PayPal\Api;

use PayPal\Common\PayPalModel;

/**
 * Class Transactions
 *
 * 
 *
 * @package PayPal\Home
 *
 * @property \PayPal\Api\Amount amount
 */
class Transactions extends PayPalModel
{
    /**
     * Amount being collected.
     * 
     *
     * @param \PayPal\Api\Amount $amount
     * 
     * @return $this
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;
        return $this;
    }

    /**
     * Amount being collected.
     *
     * @return \PayPal\Api\Amount
     */
    public function getAmount()
    {
        return $this->amount;
    }

}
