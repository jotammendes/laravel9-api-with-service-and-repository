<?php

namespace App\Repositories;

use App\Models\Todo;

class TodoRepository
{
    protected $entity;

    public function __construct(Todo $todo)
    {
        $this->entity = $todo;
    }
}
