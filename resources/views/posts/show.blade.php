@push('head')
<link href="https://fonts.googleapis.com/css?family=Source+Code+Pro" rel="stylesheet">
@endpush

@component('layouts.app', ['title' => $post->title])
    <article class="container post--full sm:px-10 md:px-10">
        <header class="post--full__header">
            <aside class="post--full__header__meta">
                <div class="post--full__header__meta__date">
                    <span>{{ $post->date->formatLocalized('%d %B %Y') }}</span>
                </div>

                <div class="post--full_header__meta__tags">
                    @foreach($post->tags as $tag)
                        <span class="post--full__header__meta__tag">#{{ $tag }}</span>
                    @endforeach
                </div>
            </aside>

            <h1 class="post--full_header__title">
                {{ $post->title }}
            </h1>
        </header>

        <section class="post--full__body">
            {!! $post->contents !!}
        </section>

        @include('partials.footer')
    </article>
@endcomponent
