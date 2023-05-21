<?php

namespace App\Http\Controllers\Dashboard;

use App\Contracts\CommentServiceContract;
use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;

class DashboardIndexController extends Controller
{
    private $commentService;

    public function __construct(CommentServiceContract $commentService)
    {
        $this->commentService = $commentService;
    }

    public function __invoke(): View
    {
        $sortData = initSort(
            request()->input('sort'),
            'postId'
        );

        $comments = $this->commentService->getComments();

        $comments = $this->commentService->sortBy(
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
