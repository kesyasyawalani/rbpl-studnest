@extends('templateworkspace')
<link href="{{ asset('css/formtask.css') }}" rel="stylesheet">
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
        <a class="nav-link mr-2">
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
            <a href="/workspace" class="ml-4 mb-5" id="back-button" role="button">Back</a>
        </div>
    </div>
    <div class="flex-column m-1">
        <div class="container">
            <form action="/workspace/updateMyTask" method="post">
                {{ csrf_field() }}
                <div class="form-group m-4">
                    <label for="taskname" id="input-title">Task name:</label>
                    <input type="taskname" class="form-control" id="taskname" placeholder="Enter your workspace name"
                        name="taskname" required aria-required="true" required="required">
                </div>
                <div class="form-group m-4">
                    <label for="taskdesc" id="input-title">Description:</label>
                    <input type="taskdesc" class="form-control" id="taskdesc" placeholder="Enter your workpsace description"
                        name="taskdesc" {{--required aria-required="true" required="required"--}}>
                </div>
                <div class="felx-row d-flex justify-content-between">
                    <div class="form-group m-4">
                        <label for="taskdeadline" id="input-title">Deadline:</label>
                        <input type="taskdeadline" class="form-control" id="taskdeadline" placeholder="DD/MM/YY"
                            name="taskdeadline" {{--required aria-required="true" required="required"--}}>
                    </div>
                    <div class="form-group m-4">
                        <label for="taskmembers" id="input-title">Members:</label>
                        <input type="taskmembers" class="form-control" id="taskmembers" placeholder="@Username"
                            name="taskmembers" {{--required aria-required="true" required="required"--}}>
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
