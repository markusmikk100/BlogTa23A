@extends('partials.layout')
@section('title', $post->title)
@section('content')
    @include('partials.post-card', ['full' => true])

    <div class="my-6">
        <h3 class="text-xl font-bold mb-4">Comments ({{ $post->comments_count }})</h3>

        @auth
            <form method="POST" action="{{ route('comment.store', $post) }}" class="mb-6">
                @csrf
                <textarea
                    name="body"
                    class="textarea textarea-bordered w-full mb-2"
                    placeholder="Write your comment..."
                    rows="3"
                    required
                >{{ old('body') }}</textarea>
                @error('body')
                    <p class="text-error text-sm mb-2">{{ $message }}</p>
                @enderror
                <button type="submit" class="btn btn-primary btn-sm">Post Comment</button>
            </form>
        @else
            <p class="mb-6">Please <a href="{{ route('login') }}" class="link">login</a> to comment.</p>
        @endauth

        <div class="space-y-3">
            @forelse ($post->comments as $comment)
                <div class="card bg-base-200">
                    <div class="card-body p-4">
                        <p class="font-semibold text-sm">{{ $comment->user?->name ?? 'Unknown' }}</p>
                        <p class="text-xs opacity-60">{{ $comment->created_at->diffForHumans() }}</p>
                        <p class="mt-2">{{ $comment->body }}</p>
                    </div>
                </div>
            @empty
                <p class="text-center opacity-60 py-4">No comments yet.</p>
            @endforelse
        </div>
    </div>
@endsection
