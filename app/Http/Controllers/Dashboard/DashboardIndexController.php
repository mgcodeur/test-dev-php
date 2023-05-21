<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\CommentServiceContract;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class DashboardIndexController extends Controller
{

    public function __invoke(CommentServiceContract $commentService): View
    {
        $sortData = initSort(
            request()->input('sort'),
            'postId'
        );

        $comments = $commentService->getComments();

        $comments = $commentService->sortBy(
            $comments,
            $sortData
        );

        return view(
            'pages.dashboard.index',
            compact('comments')
        )->with([
            'CommentSortDatas' => $sortData,
        ]);
    }
}
