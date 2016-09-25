<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class SmallSlider extends Model {

    protected $table = 'small_slider';

    public function product_details() {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public static function getSmallSliderItems() {
        $ss = DB::table('small_slider')
                ->join('products', 'small_slider.product_id', '=', 'products.id')
                // ->where('small_slider.status', 1)
                ->where('products.status', 1)
                ->get();

        return $ss;
    }

}
