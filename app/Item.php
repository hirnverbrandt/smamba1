<?php
/**
 * Created by PhpStorm.
 * User: lucabrandt
 * Date: 2019-01-19
 * Time: 15:11
 */
namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = ['item_name', 'stock', 'category'];

    protected $hidden =['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['deleted_at'];
}
