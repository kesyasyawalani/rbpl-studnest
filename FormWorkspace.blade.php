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
                <form action="/action_page.php" method="post">
                    <div class="form-group m-4">
                        <label for="ws-name" id="input-title">Workspace name:</label>
                        <input type="ws-name" class="form-control" id="ws-name" placeholder="Enter your workspace name"
                            name="workspacename" required aria-required="true" required="">
                    </div>
                    <div class="form-group m-4">
                        <label for="ws-desc" id="input-title">Description:</label>
                        <input type="ws-desc" class="form-control" id="ws-desc" placeholder="Enter your workpsace description"
                            name="ws-desc" required aria-required="true" required="">
                    </div>
                    <div class="felx-row d-flex justify-content-between">
                        <div class="form-group m-4">
                            <label for="ws-deadline" id="input-title">Deadline:</label>
                            <input type="ws-deadline" class="form-control" id="ws-deadline" placeholder="DD/MM/YY"
                                name="ws-deadline" required aria-required="true" required="">
                        </div>
                        <div class="form-group m-4">
                            <label for="ws-members" id="input-title">Members:</label>
                            <input type="ws-members" class="form-control" id="ws-members" placeholder="Username"
                                name="ws-members" required aria-required="true" required="">
                        </div>
                    </div>
                    <div class="flex-column" id="submit">
                        <button type="submit" class="submit-button">Create new task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
