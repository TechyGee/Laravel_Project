@extends('layouts.layout')
 
@section('content')

    {{-- =============== Navigation sidebar =============== --}}
        <section id="sidebar">  
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
                    <a href="/tickets/create">
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
        </section>

        {{-- =============== Content =============== --}}

        <section id="content">
            <nav class="top-nav">
                <i class='bx bx-menu-alt-right toggle'></i>
                <form class="search">
                    <div class="form-input">
                        <input type="text" placeholder="Search here">
                        <button type="submit" class="search-btn"><i class='bx bx-search' ></i></button>
                    </div>
                </form>   
                <a class="user">
                    <img src="/images/ITXlogo 1.svg" alt="itx" width="50" height="50">
                    <span>Damola Alayande</span>
                </a>
            </nav>
           
            {{-- ============ Main =========== --}}
            <main>
                <div class="link-title">
                    <div >Dashboard</div>
                    <a href="#">
                        <i class='bx bx-plus'></i>
                        <span>New Tickets</span>
                    </a>
                </div> 
                <div class="cards">
                    <div class="card">
                        <div>
                            <div class="number">52</div>
                            <div class="card-name">Closed Tickets</div>
                        </div>
                        <div class="card-icon">
                            <i class='bx bx-notepad' ></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="number">52</div>
                            <div class="card-name">Closed Tickets</div>
                        </div>
                        <div class="card-icon">
                            <i class='bx bx-notepad' ></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="number">52</div>
                            <div class="card-name">Closed Tickets</div>
                        </div>
                        <div class="card-icon">
                            <i class='bx bx-notepad' ></i>
                        </div>
                    </div>

                    <div class="card">
                        <div>
                            <div class="number">52</div>
                            <div class="card-name">Closed Tickets</div>
                        </div>
                        <div class="card-icon">
                            <i class='bx bx-notepad' ></i>
                        </div>
                    </div>

                </div> 
                <div class="ticket-table">
                    <table>
                            <tr class="empty">
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                            <tr>
                                <th>User</th>
                                <th>Complaint</th>
                                <th>Resolution</th>
                            </tr>
                            <tr>
                                <td class="us"><img src="/images/ITXlogo 1.svg" alt="itx" width="40" height="40">
                                <span>John Doe</span></td>
                                <td><span>Internet Downtime</span></td>
                                <td><span>Completed</span></td>
                            </tr>
                            <tr>
                                <td class="us"><img src="/images/ITXlogo 1.svg" alt="itx" width="40" height="40">
                                <span>John Doe</span></td>
                                <td><span>Internet Downtime</span></td>
                                <td class="first"><span>Completed</span></td>
                            </tr>
                            <tr>
                                <td class="us"><img src="/images/ITXlogo 1.svg" alt="itx" width="40" height="40">
                                <span>John Doe</span></td>
                                <td><span>Internet Downtime</span></td>
                                <td class="first"><span>Completed</span></td>
                            </tr>
                            <tr>
                                <td class="us"><img src="/images/ITXlogo 1.svg" alt="itx" width="40" height="40">
                                <span>John Doe</span></td>
                                <td><span>Internet Downtime</span></td>
                                <td class="first"><span>Completed</span></td>
                            </tr>
                            <tr>
                                <td class="us"><img src="/images/ITXlogo 1.svg" alt="itx" width="40" height="40">
                                <span>John Doe</span></td>
                                <td><span>Internet Downtime</span></td>
                                <td class="first"><span>Completed</span></td>
                            </tr>
    
                    </table>
                </div>
            
            </main>

        </section>
        {{-- ----end of section-----}}
 @endsection
