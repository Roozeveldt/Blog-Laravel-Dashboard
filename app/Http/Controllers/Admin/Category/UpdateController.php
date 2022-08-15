<?php

namespace App\Http\Controllers\Admin\Category;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Category\UpdateRequest;
use App\Models\Category;

class UpdateController extends Controller
{
	public function __invoke( UpdateRequest $request, Category $category )
	{
        $data = $request->validated();
        $category->update($data);
        $pageTitle = 'Категория ' . $category->name;

        return view('admin.Category.show', compact('category', 'pageTitle'));
	}
}
