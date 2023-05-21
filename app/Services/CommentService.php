<?php

namespace App\Services;

use App\Contracts\CommentServiceContract;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Http;

class CommentService implements CommentServiceContract
{
    /**
     * @throws \Exception
     */
    public function getComments(): Collection
    {
        try {
            $comments = Http::get(
                config('services.jsonplaceholder.url')
            )->object();
        } catch (\Exception $e) {
            throw new \Exception('Error while fetching comments from API');
        }

        return collect($comments);
    }

    public function sortBy(Collection $comments, array $sortData): Collection
    {
        return $comments->sortBy(
            $sortData['field'],
            SORT_REGULAR,
            directionIsDesc($sortData['direction'])
        );
    }
}
