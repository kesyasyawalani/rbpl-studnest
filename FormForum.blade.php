@extends('templateworkspace')
<link href="{{ asset('css/formforum.css') }}" rel="stylesheet">
@section('sidebar')
<nav class="sidenav nav nav-pills flex-column ml-4">
    <a class="nav-link mb-2" aria-current="page" href="#">
            <i class="fa-solid fa-list-check mr-3"></i>
            My Task</a>
    <a class="nav-link mb-2" href="#">
            <i class="fa-solid fa-file-lines mr-3"></i>
            Workspace</a>
    <a class="choose nav-link mb-2" href="#">
            <i class="fa-solid fa-users mr-3"></i>
            Forum</a>
    <a class="nav-link mb-2">
            <i class="fa-regular fa-square-check mr-3"></i>
            History</a>
    <a class="nav-link mb-2">
            </a>
    <a class="nav-link mb-2">
            <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
            Log Out</a>
</nav>
@endsection
@section('isi')
<div class="form-box">
    <div class="flex-column ml-1 mr-1 mt-5">
        <div class="container">
            <form action="/workspace/updateMyTask" method="post">
                {{ csrf_field() }}
                <div class="form-group m-4">
                    <label for="taskname" id="input-title">Forum name:</label>
                    <input type="taskname" class="form-control" id="taskname" placeholder="Enter your forum name"
                        name="taskname" required aria-required="true" required="required">
                </div>
                <div class="flex-column mt-5" id="submit">
                    <input type="submit" class="submit-button" value="Create new forum">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
