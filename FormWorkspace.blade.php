<head>
    <link href="{{ asset('css/formworkspace.css') }}" rel="stylesheet">
</head>

@extends('templateworkspace')

@section('sidebar')
<nav class="nav nav-pills flex-column ml-4">
    <a class="choose nav-link mb-2" aria-current="page" href="#">
        <i class="fa-solid fa-folder-open mr-3"></i>
        Workspace</a>
    <a class="nav-link mb-2" href="#">
        <i class="fas fa-file mr-3"></i>
        SN Merger</a>
    <a class="nav-link mb-2" href="#">
        <i class="fas fa-calendar-alt mr-3"></i>
        Calendar</a>
    <a class="nav-link mr-2" href="#">
        <i class="fa-sharp fa-solid fa-circle-notch mr-3"></i>
        Trackgres</a>
    <a class="nav-link mb-2">
    </a>
    <a class="nav-link mb-2">
        <i class="fa-solid fa-arrow-right-from-bracket mr-3"></i>
        Log Out</a>
</nav>
@endsection

@section('isi')
    <div class="form-box">
        <div class="flex-column mt-5">
            <div class="container">
                <button class="ml-4 mb-5" id="back-button">Back</button>
            </div>
        </div>
        <div class="flex-column m-1">
            <div class="container">
                <form action="/workspace/addDataFormWorkspace" method="post">
                    {{ csrf_field() }}
                    <div class="form-group m-4">
                        <label for="ws_name" id="input-title">Workspace name:</label>
                        <input type="ws_name" class="form-control" id="ws_name" placeholder="Enter your workspace name"
                            name="ws_name" required aria-required="true" required="required">
                    </div>
                    <div class="form-group m-4">
                        <label for="ws_desc" id="input-title">Description:</label>
                        <input type="ws_desc" class="form-control" id="ws_desc" placeholder="Enter your workpsace description"
                            name="ws_desc" required aria-required="true" required="required">
                    </div>
                    <div class="felx-row d-flex justify-content-between">
                        <div class="form-group m-4">
                            <label for="ws_deadline" id="input-title">Deadline:</label>
                            <input type="ws_deadline" class="form-control" id="ws_deadline" placeholder="DD/MM/YY"
                                name="ws_deadline" required aria-required="true" required="required">
                        </div>
                        <div class="form-group m-4">
                            <label for="ws_members" id="input-title">Members:</label>
                            <input type="ws_members" class="form-control" id="ws_members" placeholder="Username"
                                name="ws_members" required aria-required="true" required="required">
                        </div>
                    </div>
                    <div class="flex-column" id="submit">
                        <input type="submit" class="submit-button" value="Create new task">
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
