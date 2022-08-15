<?php

namespace App\Http\Controllers\Admin\Tag;

use App\Http\Controllers\Controller;
use App\Models\Tag;

class ShowController extends Controller
{
	public function __invoke( Tag $tag )
	{
        $pageTitle = 'Тэг ' . $tag->name;

        return view('admin.Tag.show', compact('tag', 'pageTitle'));
	}
}
