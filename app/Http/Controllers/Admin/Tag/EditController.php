<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class EditController extends Controller
{
	public function __invoke( Tag $tag )
	{
        $pageTitle = 'Редактирование тэга ' . $tag->name;

		return view('admin.Tag.edit', compact('tag', 'pageTitle'));
	}
}
