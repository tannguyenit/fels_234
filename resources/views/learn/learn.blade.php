@extends('templates.public.template')

@section('content')
<div id="gardening-area" class="clearfix gardening-area js-gardening-area">

@include('learn.question')

</div>

{{ Html::script('js/learn.js') }}

@stop
