<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use HireMe\Repositories\CategoryRepo;

class CandidatesController extends Controller
{

  protected $categoryRepo;

  public function __construct(CategoryRepo $categoryRepo)
  {
    $this->categoryRepo = $categoryRepo;
  }
  /**
   * Show the profile for the given user.
   *
   * @param  int  $id
   * @return Response
   */
  public function category($slug, $id)
  {
    $category = Category::find($id);

    dd($category);
  }
}
