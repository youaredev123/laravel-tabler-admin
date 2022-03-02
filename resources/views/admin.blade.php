@extends('layouts.admin')
@section('header')
    
@endsection
@section('page-title')
    @parent
@endsection
@section('page-content')
Testing <br/>

<x-button href="https://www.google.com" type="primary" block=false>Test</x-button>
<br/>
<x-card>Hello World</x-card>
<x-card title='This is title'><p>Hello World</p></x-card>
@endsection