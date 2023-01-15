<x-layouts.app title="Blog" meta-description="Doulos Dev's Blog Page">
    <h1 class="text-2xl font-bold text-center mb-5">Blog Page</h1>

    @foreach ($posts as $post)
        <ul>
            <li class="mb-3 pl-8">
                <h4 class="text-xl font bold">{{ $post->title }}</h4>
                <p>{{ $post->content }}</p>
            </li>
        </ul>

    @endforeach
</x-layouts.app>
