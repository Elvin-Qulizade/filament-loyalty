# Generic points, tiers and rewards for any Filament resource

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elvin-qulizade/filament-loyalty.svg?style=flat-square)](https://packagist.org/packages/elvin-qulizade/filament-loyalty)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/elvin-qulizade/filament-loyalty/tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/elvin-qulizade/filament-loyalty/actions?query=workflow%3Atests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/elvin-qulizade/filament-loyalty/fix-code-style.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/elvin-qulizade/filament-loyalty/actions?query=workflow%3Afix-code-style+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elvin-qulizade/filament-loyalty.svg?style=flat-square)](https://packagist.org/packages/elvin-qulizade/filament-loyalty)

Attach points earning, tiers, and redeemable rewards to any Eloquent model — not just
customers. Earning rules are config, not code: list a model class, a condition, and how
many points to award, and the package listens for you. No observers to register, no
Facade calls to sprinkle through your app.

## Installation

```bash
composer require elvin-qulizade/filament-loyalty
```

```bash
php artisan vendor:publish --tag="filament-loyalty-migrations"
php artisan migrate
```

```bash
php artisan vendor:publish --tag="filament-loyalty-config"
```

## Usage

1. Add the trait and contract to any Eloquent model you want to earn/spend points:

```php
use ElvinQulizade\Loyalty\Concerns\HasLoyaltyPoints;
use ElvinQulizade\Loyalty\Contracts\LoyaltyMember;

class Customer extends Model implements LoyaltyMember
{
    use HasLoyaltyPoints;
}
```

2. Configure an earning rule — no listener, no observer:

```php
// config/filament-loyalty.php
'rules' => [
    \App\Models\Order::class => [
        'member' => fn (Order $order) => $order->customer,
        'when'   => fn (Order $order) => $order->status === 'paid',
        'points' => fn (Order $order) => (int) floor($order->total),
    ],
],

'tiers' => [
    'bronze' => 0,
    'silver' => 500,
    'gold'   => 2000,
],
```

3. Show the ledger on the member's own resource:

```php
use ElvinQulizade\Loyalty\Filament\RelationManagers\LoyaltyRelationManager;

public static function getRelations(): array
{
    return [
        LoyaltyRelationManager::class,
    ];
}
```

That's it — every order that matches your `when` condition earns points automatically, the
Customer's "Loyalty" tab shows the full ledger with the current balance/lifetime
points/tier, and staff can manually adjust points (with a required reason) or redeem a
reward on the member's behalf from that same tab.

Tiers are based on **lifetime earned points**, not current balance — redeeming a reward
never demotes a member's tier.

4. Manage the reward catalog by adding the resource to your panel:

```php
use ElvinQulizade\Loyalty\Filament\Resources\LoyaltyRewardResource;

public function panel(Panel $panel): Panel
{
    return $panel
        ->resources([
            LoyaltyRewardResource::class,
        ]);
}
```

5. Call the engine directly wherever code, not a panel action, should earn/spend points:

```php
$customer->earnLoyaltyPoints(50, reason: 'Referral bonus');
$customer->redeemLoyaltyPoints(20, reason: 'Manual redemption');
$customer->adjustLoyaltyPoints(-10, 'Correcting a duplicate award'); // reason required
```

Drop `ElvinQulizade\Loyalty\Filament\LoyaltyTierColumn::make()` into any table (e.g. the
member's own list view) to show the tier badge outside the Loyalty tab too.

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](.github/SECURITY.md) on how to report security vulnerabilities.

## Credits

- [Elvin-Qulizade](https://github.com/Elvin-Qulizade)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
