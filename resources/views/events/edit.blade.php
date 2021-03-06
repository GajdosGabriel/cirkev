@extends('layouts.app')


@section('title', $title)


@section('video-fool')
    <div class="container">
            <h2 class="">{{ trans('web.events_save_update') }} <a href="{{url()->previous()}}"><button class="float-right btn btn-danger btn-sm"> <i class="fa fa-arrow-left" aria-hidden="true"></i> {{ trans('web.btn_back') }}</button></a></h2>
            <form method="post" action="{{ route('event.update', $event->id ) }}" class="form" enctype="multipart/form-data" >
                {{ csrf_field() }} {{ method_field('PATCH') }}
                <div class="row">
                @include('events._form', [ 'buttonText' =>  trans('web.events_save_update')])
                </div>
            </form>
    </div>
@endsection


@section('script')
    {{--CK editor--}}
    <script src="{{ asset('\vendor\unisharp\laravel-ckeditor\ckeditor.js') }}"></script>

    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
@endsection