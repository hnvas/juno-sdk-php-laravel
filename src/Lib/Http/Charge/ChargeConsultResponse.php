<?php

namespace Jetimob\Juno\Lib\Http\Charge;

use Jetimob\Juno\Lib\Http\Response;
use Jetimob\Juno\Lib\Model\BilletDetails;
use Jetimob\Juno\Lib\Model\Link;
use Jetimob\Juno\Lib\Model\Payment;

class ChargeConsultResponse extends Response
{
    public string $id;
    public int $code;
    public string $reference;
    public string $dueDate;
    public string $link;
    public string $checkoutUrl;
    public string $installmentLink;
    public string $payNumber;
    public int $amount;
    public BilletDetails $billetDetails;
    /** @var Payment[] $payments */
    public array $payments;

    public function initComplexObjects()
    {
        if (!empty($this->data->billetDetails)) {
            $this->billetDetails = BilletDetails::deserialize($this->data->billetDetails);
        }

        if (!empty($this->data->payments)) {
            $this->payments = BilletDetails::deserializeArray($this->data->payments);
        }
    }
}
