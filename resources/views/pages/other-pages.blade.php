@extends('layouts.app')

@section('title', '')

@section('content')
    <div class="policy">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 offset-xl-2">
                    {!! $page->text !!}
                </div>
            </div>
        </div>
    </div>
@endsection
