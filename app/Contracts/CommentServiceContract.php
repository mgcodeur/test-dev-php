<?php

namespace App\Contracts;

use Illuminate\Support\Collection;

interface CommentServiceContract
{
    public function getComments();

    public function sortBy(Collection $comments, array $sortData);
}
