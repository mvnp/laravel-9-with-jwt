<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Cars extends Model
{
    use HasFactory;

    use SoftDeletes;

    protected $table = "cars";

    public $timestamps = true;

    protected $fillable = [
        "name",
        "miles_per_gallon",
        "cylinders",
        "displacement",
        "horsepower",
        "weight_in_lbs",
        "acceleration",
        "year",
        "origin",
    ];
}
