<?php

namespace ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource\Pages;

use ElvinQulizade\Loyalty\Tests\Fixtures\CustomerResource;
use Filament\Resources\Pages\EditRecord;

class EditCustomer extends EditRecord
{
    protected static string $resource = CustomerResource::class;
}
