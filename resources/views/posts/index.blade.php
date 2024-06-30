<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    @foreach ($posts as $post)
        <article class="py-8 max-w-screen-md border-b border-gray-300">
            <h2>
                <a href="{{ route('posts.show', $post['slug']) }}"
                    class="mb-1 text-3xl tracking-tight font-bold text-gray-900 hover:underline">{{ $post['title'] }}</a>
            </h2>
            <div class="text-base text-gray-500">
                <a href="#">{{ $post['author'] }}</a>
            </div>
            <p class="my-4 font-light">{{ Str::limit($post['body'], 100) }}</p>
            <a href="{{ route('posts.show', $post['slug']) }}" class="font-medium text-blue-500 hover:underline">Read More
                &raquo;</a>
        </article>
    @endforeach
</x-layout>
