<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class MainSlider extends Model {

    protected $table = 'main_slider';

    public function product_details() {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public static function getMainSliderItems() {

        $ms = DB::table('main_slider')
                ->join('products', 'main_slider.product_id', '=', 'products.id')
                // ->where('main_slider.status', 1)
                ->where('products.status', 1)
                ->get();

        return $ms;
    }

}
