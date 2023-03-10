<?php

namespace App\Models\Backend;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['start_date', 'expire_date'];

    public function status()
    {
        return $this->status ? trans('dashboard.Active') : trans('dashboard.InActive');
    }

    public function discount($total)
    {
        if (!$this->checkDate() || !$this->checkUsedTimes()){
            return 0;
        }
        return  $this->doProcess($total) ;
    }

    protected function checkDate()
    {
        return $this->expire_date != '' ? (Carbon::now()->between($this->start_date, $this->expire_date, true)) ? true : false : true;
    }

    protected function checkUsedTimes()
    {
        return $this->use_times != '' ? ( $this->use_times > $this->used_times ) ? true : false : true;
    }



    protected function doProcess($total)
    {
        switch ($this->type) {
            case 'fixed':
                return $this->value;
            case 'percentage':
                return ($this->value / 100) * $total;
            default:
                return 0;
        }
    }
}
