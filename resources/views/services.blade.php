{{--
  Template Name: Services
--}}

@extends('layouts.app')

@section('content')

@php the_post() @endphp

<div class="hero image" style="background-image: url({{ get_the_post_thumbnail_url() }});">
  <div class="inner-hero padding-medium-large" >
    <h1 class="title text-shadow text-align-center">{!! get_the_title() !!}</h1>
  </div>
</div>

<div class="hero">
    <div class="inner-hero padding-small max-1400">
        <h2 class="text-align-center">Our Services</h2>
        @php
            $the_query = new WP_Query(['tag' => 'services', 'posts_per_page'=> 20 ]);
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

@endsection
