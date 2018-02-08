@extends('layouts.base')

@section('title', 'Add Word')

@section('body')
    @include('layouts.header', ['header' => 'New Word'])

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{route('words.store')}}" method="post">
        {{csrf_field()}}
        <p class="centered">
            <label for="english">English</label>
            <input name="english" id="english" type="text" placeholder="English" value="{{old('english')}}">
        </p>
        <p class="centered">
            <label for="spanish">Spanish</label>
            <input name="spanish" id="spanish" type="text" placeholder="Spanish" value="{{old('spanish')}}">
        </p>
        <p class="centered">
            <label for="japanese">Japanese</label>
            <input name="japanese" id="japanese" type="text" placeholder="Japanese" value="{{old('japanese')}}">
        </p>
        <p class="centered">
            <input type="submit" value="Add">
        </p>
    </form>
@stop