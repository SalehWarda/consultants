<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Order extends Model
{
    use HasFactory;
    protected $guarded = [];


    const NEW_ORDER = 0;
    const PAYMENT_COMPLETED = 1;
    const UNDER_PROCESS = 2;
    const FINISHED = 3;
    const REJECTED = 4;
    const CANCELED = 5;
    const REFUNDED_REQUEST = 6;
    const RETURNED = 7;
    const REFUNDED = 8;

    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function packages(): BelongsToMany
    {
        return $this->belongsToMany(Package::class,'order_package');
    }

    public function transactions(): HasMany
    {
        return $this->hasMany(OrderTransaction::class);
    }



    public function status($transaction_number = null)
    {
        $transaction = $transaction_number != '' ? $transaction_number : $this->order_status;

        switch ($transaction) {
            case 0: $result = 'New order'; break;
            case 1: $result = 'Paid'; break;
            case 2: $result = 'Under process'; break;
            case 3: $result = 'Finished'; break;
            case 4: $result = 'Rejected'; break;
            case 5: $result = 'Canceled'; break;
            case 6: $result = 'Refund requested'; break;
            case 7: $result = 'Refunded'; break;
            case 8: $result = 'Returned order'; break;
        }
        return $result;
    }

    public function statusWithLabel()
    {
        switch ($this->order_status) {
            case 0: $result = '<label class="badge bg-success">New order</label>'; break;
            case 1: $result = '<label class="badge bg-warning">Paid</label>'; break;
            case 2: $result = '<label class="badge bg-warning">Under process</label>'; break;
            case 3: $result = '<label class="badge bg-primary">Finished</label>'; break;
            case 4: $result = '<label class="badge bg-danger">Rejected</label>'; break;
            case 5: $result = '<label class="badge bg-dark text-white">Canceled</label>'; break;
            case 6: $result = '<label class="badge bg-dark text-white">Refund requested</label>'; break;
            case 7: $result = '<label class="badge bg-slate">Returned order</label>'; break;
            case 8: $result = '<label class="badge bg-dark text-white">Refunded order</label>'; break;
        }
        return $result;
    }
}
