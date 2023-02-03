<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model {
    use HasFactory;

    /**
     *
     * @param  int $number
     * @return string
     */
    public static function format($number) {
        return "Rp. " . number_format($number, 2, ',', '.');
    }
}
