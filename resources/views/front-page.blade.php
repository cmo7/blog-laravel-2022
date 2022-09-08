<x-layout>
    <header>
        <h1>{{ config('app.name') }}</h1>
        <p>Etiam quis viverra lorem, in semper lorem. Sed nisl arcu euismod sit amet nisi euismod sed cursus
            arcu elementum ipsum arcu vivamus quis venenatis orci lorem ipsum et magna feugiat veroeros
            aliquam. Lorem ipsum dolor sit amet nullam dolore.</p>
    </header>
    <section class="tiles">
        @foreach ($posts as $post)
            <article class="style{{$post->style}}">
                <span class="image">
                    <img src="images/pic01.jpg" alt="" />
                </span>
                <a href="/post/{{ $post->slug }}">
                    <h2>{{ $post->title }}</h2>
                    <div class="content">
                        <p>{{ $post->excerpt }}</p>
                    </div>
                </a>
            </article>
        @endforeach
    </section>
</x-layout>
