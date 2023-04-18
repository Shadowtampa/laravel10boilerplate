<?php
namespace App\Http\Services;

use App\Http\Interfaces\TodoInterface;

use App\Http\Repositories\TodoRepository;
use Illuminate\Http\Request;
class TodoService implements TodoInterface
{
  protected $todoRepository;

  public function __construct(
    TodoRepository $todoRepository
  ) {
    $this->todoRepository = $todoRepository;
  }

  public function save(Request $request)

  {
    $attributes = $request->all();
    $this->todoRepository->save($attributes);
  }
}