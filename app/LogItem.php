<?php

class Item extends Model
{
    use SoftDeletes;

    protected $fillable = ['item_name', 'stock', 'category', 'price'];

    protected $hidden = ['created_at', 'updated_at', 'deleted_at'];

    protected $dates = ['deleted_at'];
}
