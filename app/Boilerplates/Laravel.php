<?php

namespace App\Boilerplates;

class Laravel extends BaseBoilerplate
{
    public function type(): string
    {
        return 'laravel';
    }

    public function location(): string
    {
        return resource_path('boilerplates/laravel/');
    }

}