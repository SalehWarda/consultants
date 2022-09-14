<?php

namespace Database\Seeders;

use App\Models\Backend\Order;
use App\Models\Backend\Package;
use App\Models\User;
use Faker\Factory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $faker = Factory::create();


        $user = User::find(1);
        $packages = Package::query()->inRandomOrder()->take(3)->get();
        $subTotalValue = $packages->sum('price');
        $discountValue = $subTotalValue / 2;
        $taxValue = ($subTotalValue - $discountValue) * 0.15;
        $totalValue = $subTotalValue - $discountValue  + $taxValue;

        // Create Order
        $order = $user->orders()->create([
            'ref_id' => Str::random(15),
            'subtotal' => $subTotalValue,
            'discount_code' => 'fiftyfifty',
            'discount' => $discountValue,
            'tax' => $taxValue,
            'total' => $totalValue,
            'currency' => 'USD',
            'order_status' => Order::PAYMENT_COMPLETED,
        ]);

        // Create Order services
        $order->packages()->attach($packages->pluck('id')->toArray());

        // Create Order Transactions
        $order->transactions()->createMany([
            [
                'transaction' => Order::NEW_ORDER,
                'transaction_number' => null,
                'payment_result' => null,
            ],
            [
                'transaction' => Order::PAYMENT_COMPLETED,
                'transaction_number' => '9NW10162ME419262L',
                'payment_result' => 'success',
            ],
        ]);




        User::where('id', '>', 1)->each(function ($user) use ($faker) {
            foreach(range(3, 6) as $index) {
                $packages = Package::query()->inRandomOrder()->take(3)->get();
                $subTotalValue = $packages->sum('price');
                $discountValue = $subTotalValue / 2;
                $taxValue = ($subTotalValue - $discountValue) * 0.15;
                $totalValue = $subTotalValue - $discountValue  + $taxValue;
                $order_status = rand(0, 8);
                // Create Order
                $order = $user->orders()->create([
                    'ref_id' => Str::random(15),
                    'subtotal' => $subTotalValue,
                    'discount_code' => 'fiftyfifty',
                    'discount' => $discountValue,
                    'tax' => $taxValue,
                    'total' => $totalValue,
                    'currency' => 'USD',
                    'order_status' => $order_status,
                    'created_at' => $faker->dateTimeBetween('-7 months', 'now'),
                    'updated_at' => $faker->dateTimeBetween('-7 months', 'now'),
                ]);

                // Create Order Products
                $order->packages()->attach($packages->pluck('id')->toArray());

                // Create Order Transactions
                $order->transactions()->createMany([
                    [
                        'transaction' => Order::NEW_ORDER,
                        'transaction_number' => null,
                        'payment_result' => null,
                    ],
                    [
                        'transaction' => $order_status,
                        'transaction_number' => '9NW10162ME419262L',
                        'payment_result' => 'success',
                    ],
                ]);

            }

        });

    }
}
