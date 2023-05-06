@extends('master')

@section('title', 'delay')

@section('content')
    <div>
        delay page
    </div>
@endsection

@section('script')
    <script pjax>
        console.log('delay');
    </script>
@endsection