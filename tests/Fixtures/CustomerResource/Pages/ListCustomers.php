<?php

namespace ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource\Pages;

use ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource;
use Filament\Resources\Pages\ListRecords;

class ListCustomers extends ListRecords
{
    protected static string $resource = CustomerResource::class;
}
