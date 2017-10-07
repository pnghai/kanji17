@extends('layouts.dashboard')

@section('content')
    @include('dashboard.characters.partials.form',array('type'=>'Edit', 'target'=>route('admin.characters.update',$character->id),'method'=>'PUT'))
@endsection
