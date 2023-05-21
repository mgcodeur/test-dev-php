<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Http;

class DashboardIndexController extends Controller
{
    public function __invoke(): View
    {
        $sortData = request()->input('sort') ?? ['field' => 'postId', 'direction' => null];

        try {
            $comments = Http::get('https://jsonplaceholder.typicode.com/comments')->object();
        } catch (\Exception $e) {
            throw new \Exception('Error while fetching comments from API');
        }

        $comments = collect($comments)->sortBy(
            $sortData['field'],
            SORT_REGULAR,
            directionIsDesc($sortData['direction'])
        );

        return view('pages.dashboard.index', compact('comments'))->with([
            'CommentSortDatas' => $sortData,
        ]);
    }
}
