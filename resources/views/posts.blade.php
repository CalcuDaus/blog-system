<x-layout :title="$title">

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <a href="posts/{{ $post['slug'] }}" class="hover:underline">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post['title'] }}</h2>
            </a>
            <div class="text-base font-medium text-gray-500">
                By <a class="text-blue-500" href="authors/{{ $post->author->username }}">{{ $post->author->name }}</a> In
                <a class="text-blue-500" href="categories/{{ $post->category->slug }}">{{ $post->category->name }}</a> | 1
                January 2028
                <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
                <a href="posts/{{ $post['slug'] }}" class="text-blue-500 font-medium hover:underline">Read More
                    &raquo;</a>
            </div>
        </article>
    @endforeach
</x-layout>
