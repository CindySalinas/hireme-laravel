<?php

use HireMe\Entities\Category;

class CategoryRepo
{
  /**
   * Show the profile for the given user.
   *
   * @param  int  $id
   * @return Response
   */
  public function find($id)
  {
    return Category::find($id);
  }
}
