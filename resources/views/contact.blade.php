{{--
  Template Name: Contact
--}}

@extends('layouts.app')

@section('content')

@php the_post() @endphp

<div class="hero image" style="background-image: url({{ get_the_post_thumbnail_url() }});">
  <div class="inner-hero padding-medium-large" >
    <div class="title text-shadow text-align-center">{!! get_the_title() !!}</div>
    <div class="flex column text-align-center">
        {{ the_content() }}
    </div>
  </div>
</div>

@endsection
