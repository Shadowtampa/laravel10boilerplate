<?php
namespace App\Http\Repositories;

use App\Models\Todo;

class TodoRepository extends BaseRepository
{
    protected $todo;

    public function __construct(Todo $todo)
    {
        parent::__construct($todo);
    }
}
