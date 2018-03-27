@php
    $showHomeLink = $showHomeLink ?? request()->path() !== '/';

    $title = $title ?? array_random([
        '¯\_(ツ)_/¯', 'Ouch!.', 'Vaya...', 'Hmmm...', 'Oh no!',  'Uh oh.', 'Whoops!',
    ]);
@endphp

@component('layouts.app', [
    'title' => $title,
    'header' => false,
])
    <section class="error flex items-center justify-center content-center h-screen flex-col">
        <h1 class="error__title my-4">
            {{ $title }}
        </h1>
        <p class="error__message my-4">
            {{ $message }}
        </p>
        @if($showHomeLink)
            <a href="{{ url('/') }}" class="button">
                Inicio
            </a>
        @endunless
    </section>
@endcomponent
