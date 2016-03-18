@extends('layouts.login')

@section('title', 'Login Page')

@section('sidebar')
    @parent

    <p>This is appended to the master sidebar.</p>
@stop

@section('content')
    <form action="login" method="post">
            <input type="text" name="username"/><br/>
            <input type="password" name="password"/><br/>
            <input type="submit" value="Login">
    </form>
@stop