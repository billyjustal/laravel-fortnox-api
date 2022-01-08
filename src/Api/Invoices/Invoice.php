<?php
/**
 * Created by PhpStorm.
 * User: Tarre
 * Date: 2019-02-23
 * Time: 10:29
 */

namespace Tarre\Fortnox\Api\Invoices;


use Illuminate\Support\Collection;
use Tarre\Fortnox\BaseApi;
use Tarre\Fortnox\Traits\Cancel;
use Tarre\Fortnox\Traits\CommonDocumentActions;
use Tarre\Fortnox\Traits\Get;
use Tarre\Fortnox\Traits\Store;
use Tarre\Fortnox\Traits\Update;

class Invoice extends BaseApi implements FortnoxInvoice
{
    use Get, Update, Store, CommonDocumentActions, Cancel;

    /**
     * @param $documentNumber
     * @return Collection
     * @throws \Tarre\Fortnox\Exceptions\FortnoxRequestException
     */
    public function bookKeep($documentNumber): Collection
    {
        return $this->makeRequest('put', null, $documentNumber, 'bookkeep')->toCollection();
    }

    /**
     * @param $documentNumber
     * @return Collection
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Tarre\Fortnox\Exceptions\FortnoxRequestException
     */
    public function eInvoice($documentNumber): bool
    {
        return $this->makeRequest('get', null, $documentNumber, 'einvoice')->toCollection();
    }

    /**
     * @param $documentNumber
     * @return Collection
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Tarre\Fortnox\Exceptions\FortnoxRequestException
     */
    public function sent($documentNumber): Collection
    {
        return $this->makeRequest('put', null, $documentNumber, 'externalprint')->toCollection();
    }

    /**
     * @param $documentNumber
     * @return Collection
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Tarre\Fortnox\Exceptions\FortnoxRequestException
     */
    public function reminder($documentNumber)
    {
        return $this->makeRequest('get', null, $documentNumber, 'printreminder');
    }

    /**
     * @param $documentNumber
     * @return Collection
     * @throws \Psr\SimpleCache\InvalidArgumentException
     * @throws \Tarre\Fortnox\Exceptions\FortnoxRequestException
     */
    public function credit($documentNumber)
    {
        return $this->makeRequest('put', null, $documentNumber, 'credit')->toCollection();
    }
}
