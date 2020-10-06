<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $primaryKey = 'product_id';

    protected $fillable = [
        'product_name', 'product_type', 'product_quantity', 'product_datetime', 'product_datetime_1', 'product_datetime_2', 'product_datetime_3', 'product_status', 'product_status_1',
    ];
}
