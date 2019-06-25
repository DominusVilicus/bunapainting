{{--
  Template Name: Service
--}}

@extends('layouts.app')

@section('content')

@php the_post() @endphp

<div class="hero">
  <div class="inner-hero image padding-medium-large" style="background-image: url({{ get_the_post_thumbnail_url() }});">
    <h1 class="title text-shadow text-align-center">{!! get_the_title() !!}</h1>
    <p class="flex center">
        <a href="{{ get_field('call-to-action-link', 'options') }}" class="main-button">{{ get_field('call-to-action-text', 'options') }}</a>
    </p>
  </div>
</div>

<div class="hero">
  <div class="inner-hero page">
    <div class="inner-page">
        {{ the_content() }}
        <br>
        <p class="flex center">
            <a href="{{ get_field('call-to-action-link', 'options') }}" class="main-button">{{ get_field('call-to-action-text', 'options') }}</a>
        </p>
    </div>
  </div>
</div>

@endsection
