<?php

namespace App\Http\Filters;

use Illuminate\Http\Request;

abstract class FiltersAbstract implements FiltersInterface
{

    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;

        $this->boot();
    }

    protected function boot()
    {

    }

}