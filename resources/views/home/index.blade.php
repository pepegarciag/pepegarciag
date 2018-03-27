@component('layouts.app')
<main class="container mx-auto py-8 sm:px-10 md:px-10 flex content-start flex-wrap">
    <section class="post">
        @foreach($posts as $key => $post)
            <div class="post--card">

                <div class="post--card__info">
                    <div class="post--card__info__date">
                        <span>{{ $post->date->formatLocalized('%d %B %Y') }}</span>
                    </div>
                    @if(!empty($post->tags))
                        <div class="post--card__info__tags">
                            @foreach($post->tags as $tag)
                                <span class="post--card__info__tag">#{{ $tag }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>

                <div class="post--card__title">
                    <a href="{{ $post->url }}" class="no-underline text-black">
                        {{ $post->title }}
                    </a>
                </div>

                <div class="post--card__content">
                    {!! $post->summary !!}
                </div>

                <a href="{{ $post->url }}" class="post--card__read-more">Leer más</a>

            </div>

        @endforeach
    </section>

</main>
@endcomponent
