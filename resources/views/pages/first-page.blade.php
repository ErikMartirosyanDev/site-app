@extends('layouts.app')


@section('content')
    <!-- start container -->

    <div class="container">
        <div class="row">
            <x-create-message widget-id="1"/>
        </div>

        <br><br>

        <div class="row">
            <div class="offset-sm-2"></div>
            <div class="col-sm-8">
                <x-messages-list widget-id="1" :messages="$messages"/>
            </div>
        </div>
    </div>

    <!-- end container -->
@endsection
