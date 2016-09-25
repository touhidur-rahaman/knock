<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;

class FeaturedProduct extends Model {

    protected $table = 'featured_products';

    public function product_details() {
        return $this->belongsTo('App\Product', 'product_id');
    }

    public static function getAllFeaturedProducts() {
        $fp = DB::table('featured_products')
                ->join('products', 'featured_products.product_id', '=', 'products.id')
                // ->where('featured_products.status', 1)
                ->where('products.status', 1)
                ->get();

        return $fp;
    }

}
