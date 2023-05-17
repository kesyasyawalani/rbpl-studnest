<head>
    <link href="{{ asset('css/form.css') }}" rel="stylesheet">
</head>

@extends('templateworkspace')

@section('isi')
    <div class="form-box">
        <div class="flex-column mt-5">
            <div class="container">
                <button class="ml-4" id="back-button">Back</button>
            </div>
        </div>
        <div class="flex-column">
            <div class="container">
                <label class="d-flex justify-content-center" id="text-title">judul ini harusnya nyambung kalender</label>
            </div>
        </div>
        <div class="flex-column m-1">
            <div class="container">
                <form action="/action_page.php" method="post">
                    <div class="form-group m-4">
                        <label for="taskname" id="input-title">Task name:</label>
                        <input type="taskname" class="form-control" id="taskname" placeholder="Enter your task name"
                            name="taskname" required aria-required="true" required="">
                    </div>
                    <div class="form-group m-4">
                        <label for="desc" id="input-title">Description:</label>
                        <input type="desc" class="form-control" id="desc" placeholder="Enter your task description"
                            name="desc" required aria-required="true" required="">
                    </div>
                    <div class="flex-column" id="submit">
                        <button type="submit" class="submit-button">Create new task</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
