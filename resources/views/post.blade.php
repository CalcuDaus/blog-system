<x-layout :title="$title">

    <article class="py-8 max-w-screen-md ">
        <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900"> {{ $post['title'] }}</h2>
        <div class="text-gray-500">
            <a href="#">{{ $post['author'] }}</a> | 1 January 2028
            <p class="my-4 font-light">{{ $post['body'] }}</p>
            <a href="/posts" class="text-blue-500 font-medium hover:underline">&laquo; Back To All
                Posts
            </a>
        </div>
    </article>
</x-layout>
