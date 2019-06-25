@extends('layouts.app')

@section('content')

<div class="hero image" style="background-image: url({{ get_field('front-page-image', 'options') }});">
    <div class="inner-hero padding-large text-align-center">
        
        <div class="front-page-logo" href="{{ home_url('/') }}">
            <img src="{{ get_field('front-page-logo', 'options') }}">
        </div>
        <h1 class="title text-shadow">{{ get_field('front-page-title', 'options') }}</h1>
        <h2 class="sub-title text-shadow">{{ get_field('front-page-subtitle', 'options') }}</h2>
        <br>
        <a class="main-button" href="{{ get_field('call-to-action-link', 'options') }}">{{ get_field('call-to-action-text', 'options') }}</a>
    </div>
</div>
<div class="hero">
    <div class="inner-hero padding-small max-1400">
        <h2 class="text-align-center">Our Services</h2>
        @php
            $the_query = new WP_Query(['tag' => 'services', 'posts_per_page'=> 6 ]);
        @endphp

        @if( $the_query->have_posts() )
        <div class="card-container margin-top">
            @while($the_query->have_posts())
                @php $the_query->the_post() @endphp

                <a href="{{ get_permalink() }}" class="card image-card">
                    <div class="card-background" style="background-image: url({{ get_the_post_thumbnail_url() }})">
                        {!! get_the_title() !!}
                    </div>
                </a>
            @endwhile
        </div>
        @endif
    </div>
</div>
<div class="hero grey padding-small">
    <h2 class="text-align-center">We've painted for</h2>
    <br>
    <div class="card-container">
        @while(have_rows('past-clients', 'options'))
            @php the_row() @endphp
            <a href="{{ get_sub_field('link') }}" class="client-logo">
                <img src="{{ get_sub_field('logo') }}">
            </a>
        @endwhile
    </div>
</div>
<div class="hero">
    <div class="inner-hero padding-small">
        <h2 class="text-align-center">Our Partners</h2>
        <br>
        <div class="card-container">
            @while(have_rows('partner-firms', 'options'))
                @php the_row() @endphp
                <a href="{{ get_sub_field('link') }}" class="client-logo">
                    <img src="{{ get_sub_field('logo') }}">
                </a>
            @endwhile
        </div>
    </div>
</div>
@endsection
