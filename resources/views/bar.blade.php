@extends('master')

@section('title', 'bar')

@section('content')
    <div>
        bar page
    </div>
@endsection

@section('script')
    <script pjax>
        console.log('bar');
    </script>
@endsection