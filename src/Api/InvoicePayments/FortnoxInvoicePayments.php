<?php
namespace Tarre\Fortnox\Api\InvoicePayments;

use Illuminate\Support\Collection;
use Tarre\Fortnox\Contracts\BaseApiRepository;
use Tarre\Fortnox\Contracts\Cancel;
use Tarre\Fortnox\Contracts\CommonDocumentActions;
use Tarre\Fortnox\Contracts\RestGet;
use Tarre\Fortnox\Contracts\RestStore;
use Tarre\Fortnox\Contracts\RestUpdate;

interface FortnoxInvoicePayments extends BaseApiRepository, Cancel, CommonDocumentActions, RestGet, RestStore, RestUpdate
{
    
    
}