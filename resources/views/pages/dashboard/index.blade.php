@extends('layouts.dashboard')

@push('styles')
    <style>
        .hoverable:hover {
            cursor: pointer;
        }

        .sort-component svg {
            width: 1rem;
            height: 1rem;
        }
    </style>
@endpush

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('dashboard.index') }}" id="sortable-form">
            @csrf
            <input type="hidden" name="sort[field]" value="postId">
            <input type="hidden" name="sort[direction]" value="asc">

            <table class="table table-borderless table-striped">
                <thead>
                    <tr>
                        <th class="hoverable" onclick="sortBy('postId', 'asc')">
                            PostId
                            @if($CommentSortDatas['field'] === 'postId')
                                <x-sort-icon :direction="$CommentSortDatas['direction']"/>
                            @endif
                        </th>
                        <th class="hoverable"  onclick="sortBy('id', 'asc')">
                            ID
                            @if($CommentSortDatas['field'] === 'id')
                                <x-sort-icon :direction="$CommentSortDatas['direction']"/>
                            @endif
                        </th>
                        <th>name</th>
                        <th>email</th>
                        <th>body</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($comments as $comment)
                        <tr>
                            <td>
                                {{ $comment->postId }}
                            </td>
                            <td>
                                {{ $comment->id }}
                            </td>
                            <td>
                                {{ $comment->name }}
                            </td>
                            <td>
                                {{ $comment->email }}
                            </td>
                            <td>
                                {{ limitStringLength($comment->body, 60) }}
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </form>
    </div>
</div>
@endsection

@push('scripts')
    <script>
        const commentsForm = document.querySelector('#sortable-form');
        const urlParams = new URLSearchParams(window.location.search);

        const currentSort = {
            field: urlParams.get('sort[field]') || 'postId',
            direction: urlParams.get('sort[direction]') || 'asc',
        }

        function sortBy(field, direction) {
            let inputField = document.querySelector('input[name="sort[field]"]');
            let inputDirection = document.querySelector('input[name="sort[direction]"]');
            inputDirection.value = currentSort.field === field ? currentSort.direction === 'asc' ? 'desc' : 'asc' : direction;
            inputField.value = field;
            commentsForm.submit();
        }
    </script>
@endpush
