@extends('layouts.layout')
 
@section('content')
{{-- <div class="wrapper ticket-details">
    <h1>Created by {{ $ticket->Requester }}</h1>
    <p class="status">Status - {{ $ticket->Status }}</p>
    <a href="/tickets"><- Back to Ticket list</a>
</div> --}}

@extends('layouts.layout')
 
@section('content')

    {{-- =============== Navigation =============== --}}

    <div class="container">
        <div class="sidebar">  
            <div class="brand">
                <div class="logo">
                    <div class="logo-image">
                        <img src="/images/ITXlogo 1.svg" alt="itx" width="50" height="50">
                    </div>
                    <span class="brand-title">ITX <br>Helpdesk</span>
                </div>
                {{-- <i class='bx bx-menu-alt-right toggle'></i> --}}
            </div>
            <ul>
                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-dashboard'></i></span>
                        <span class="title">Dashboard</span>
                    </a>
                    <span class="tooltip">Dashboard</span>
                </li>

                <li>
                    <a href="#">
                        <span class="icon"><i class='bx bxs-notepad'></i></span>
                        <span class="title">Tickets</span>
                    </a>
                    <span class="tooltip">Tickets</span>
                </li>
            </ul>
            {{-- <div class="profile content">
                <div class="profile">
                    <div class="profile-details">
                        <img src="" alt="">
                        <div class="name_job">
                            <div class="name"></div>
                            <div class="job"></div>
                        </div>
                    </div>
                    <i class='bx bx-log-out'></i>
                </div>

            </div> --}}
        </div>

        {{-- =============== Main =============== --}}

        <div class="main">
            <div class="top-bar">
                    <i class='bx bx-menu-alt-right toggle'></i>
                    <div class="search">
                        <label for="search">
                            <input type="text" placeholder="Search here">
                            <i class='bx bx-search' ></i>
                        </label>
                    </div>   
                    <div class="user">
                        <span>
                            <img src="/images/ITXlogo 1.svg" alt="itx" width="50" height="50">
                        </span>
                        <span>Damola Alayande</span>
                    </div>

            </div>
           
            {{-- ============ Cards =========== --}}

        </div>


    </div>

 @endsection

 <div class="ticket">
    </div>
</div>

@endsection
