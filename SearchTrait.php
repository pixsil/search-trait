<?php

namespace App\Traits;

trait SearchTrait
{
    // static $searchable = [];

    // public $extra_data_paginate;

    /* Scopes */
    public function scopeSearch($query, $search='')
    {
        // // don't search with less than 3 characters
        // if (strlen($search) <= 3) {
        //     return $query->whereRaw('1 = 2');
        // }

        // $this->extra_data_paginate = collect(['table_total' => $query->count()]);

        $query->whereRaw('1 = 2');

        foreach ($this->searchable ?? [] as $searchable_field) {
            $query->orWhere($searchable_field, 'LIKE', '%'. $search .'%');
        }

        return $query;
    }

    // static public function paginateMergeSearch($paginater)
    // {
    //     $total_count = collect([
    //         'searched' => request()->has('search'),
    //         'table_total' => self::count()
    //     ]);
    //
    //     $paginater = $total_count->merge($paginater);
    //
    //     return $paginater;
    // }
}
