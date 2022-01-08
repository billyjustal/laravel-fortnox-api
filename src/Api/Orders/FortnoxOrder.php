<?php
/**
 * Created by PhpStorm.
 * User: Tarre
 * Date: 2019-02-20
 * Time: 19:54
 */

namespace Tarre\Fortnox\Api\Orders;

use Tarre\Fortnox\Contracts\BaseApiRepository;
use Tarre\Fortnox\Contracts\Cancel;
use Tarre\Fortnox\Contracts\CommonDocumentActions;
use Tarre\Fortnox\Contracts\RestGet;
use Tarre\Fortnox\Contracts\RestStore;
use Tarre\Fortnox\Contracts\RestUpdate;
use Tarre\Fortnox\Contracts\CreateInvoice;

interface FortnoxOrder extends BaseApiRepository, RestGet, RestStore, RestUpdate, Cancel, CreateInvoice, CommonDocumentActions
{
}
