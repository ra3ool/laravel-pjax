@extends('master')

@section('title', 'foo')

@section('content')
    <div>
        foo page
    </div>
@endsection

@section('script')
    <script pjax>
        console.log('foo');
    </script>
@endsection