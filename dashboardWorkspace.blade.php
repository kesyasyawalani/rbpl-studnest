@extends('templateworkspace')
@section('sidebar')
<nav class="sidenav nav nav-pills flex-column ml-4">
    <a class="nav-link mb-2" aria-current="page" href="#">
            <i class="fa-solid fa-list-check mr-3"></i>
            My Task</a>
    <a class="choose nav-link mb-2" href="#">
            <i class="fa-solid fa-file-lines mr-3"></i>
            Workspace</a>
    <a class="nav-link mb-2" href="#">
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

@foreach ($listworkspace as $l)
{{-- INI HARUSNYA NYAMBUNG ID TOLONG BENERIN MAKASIH--}}
<button class="col-md-11 mt-4 ml-4" href="" style="background-color: white; border-radius:30px; border-style:solid; border-color:#8FC6FD; border-width:1px; display:flex; justify-content:flex-start">
    <label class="m-2"> {{$l->workspace_name}} </label>
</button>
@endforeach

<div class="d-flex justify-content-center mt-5 pt-5">
    <a href="/workspace/form" type="button" class="btn btn-lg mt-5 py-3 px-5 shadow" style="background-color: #8FC6FD; border-radius: 30px; color: white;">
        Create New Workspace
    </a>
</div>
@endsection
