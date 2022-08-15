<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Models\Category;

class EditController extends Controller
{
	public function __invoke( Category $category )
	{
        $pageTitle = 'Редактирование категории ' . $category->name;

		return view('admin.Category.edit', compact('category', 'pageTitle'));
	}
}
