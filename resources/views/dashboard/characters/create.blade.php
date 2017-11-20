@extends('layouts.dashboard')

@section('content')
    @include('dashboard.characters.partials.form',array('type'=>'Create','target'=>route('admin.characters.store')))
@endsection
