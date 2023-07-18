<?php

namespace App\Utils;

trait Paginatable
{
    public int $perPage = 10;
    public array $paginationOptions;
    // public function __construct()
    // {
    //     $this->paginationOptions = config('utils.pagination.options');
    // }
}
