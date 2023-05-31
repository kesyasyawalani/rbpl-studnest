@extends('templateworkspace')

<head>
    <link href="{{ asset('css/workspace.css') }}" rel="stylesheet">
</head>

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
    {{-- <script>
        function moreFunction() {
            var dots = document.getElementById("dots");
            var moreText = document.getElementById("more");
            var btnText = document.getElementById("moreBtn");

            if (dots.style.display === "none") {
                dots.style.display = "inline";
                btnText.innerHTML = "Read more";
                moreText.style.display = "none";
            } else {
                dots.style.display = "none";
                btnText.innerHTML = "Read less";
                moreText.style.display = "inline";
            }
        }
    </script> --}}
    <div class="container mt-5">
        @foreach ($workspace as $w)
        {{-- JUDUL WORKSPACE --}}
            <div class="flex-column">
            {{-- INI SALAH HARSUNYA NYAMBUNG KE ID TOLONG BENERIN MAKASEY--}}
                <label class="title"> {{ $w->workspace_name }}
                </label>
            </div>
        {{-- DESKRIPSI WORKSPACE --}}
            <div class="flex-column mt-2">
                <div class="subtitle mb-2">Deskripsi</div>
            {{-- INI SALAH HARSUNYA NYAMBUNG KE ID TOLONG BENERIN MAKASEY--}}
                <p class="desc"> {{ $w->workspace_description }} </p>
            </div>
        @endforeach
        <div class="flex-column">
            <div class="flex-row d-flex">
                {{-- TASKS --}}
                <div class="container pl-0">
                    <div class="flex-column">
                        <form method="post" action="">
                            <div class="subtitle">Tasks<a href="#"><i class="fa-solid fa-circle-plus ml-2"
                                        style="color: #7C7F89"></i></a>
                            </div>
                            @foreach ($task as $t)
                                <div class="flex-row d-flex taskLabel mt-2 mb-2 p-2">
                                    <div class="container flex-grow-1">
                                        <label class=" m-0" for="check"> {{ $t->task_name }} </label>
                                    </div>
                                    <div class="container" id="check-area">
                                        <input type="checkbox" class="checkbox-round" id="check" name="tasks[]"
                                            value="'.{{ $t->task_id }}.'">
                                    </div>
                                </div>
                            @endforeach
                        </form>
                    </div>
                </div>
                {{-- MEMBERS, STATUS, TIME --}}
                <div class="container pr-0">
                    <div class="box mt-4">
                        <div class="flex-row d-flex justify-content-start">
                            <div class="">
                                <div class="flex-column ml-4 pt-3 pb-2">
                                    <div class="mr-3">Members</div>
                                </div>
                                <div class="flex-column ml-4 pt-2 pb-2">
                                    <div>Status</div>
                                </div>
                                <div class="flex-column ml-4 pt-2 pb-3">
                                    <div>Time</div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="flex-column ml-4 pt-3 pb-2">
                                    {{-- yg nama ini di gui seharusnya foto biar gampang pake nama member aja --}}
                                    <div>nama nama nama</div>
                                </div>
                                <div class="flex-column ml-4 pt-2 pb-2">
                                    <div class="flex-row d-flex">
                                        <div>Finished</div>
                                        <div class="status-box ml-2">100%</div>
                                    </div>
                                </div>
                                <div class="flex-column ml-4 pt-2 pb-3">
                                    <div> <i class="fa-regular fa-clock mr-2" style="color: #589BFF;"></i>12h 18m</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
