@extends('layouts.layout')
 
@section('content')
<div class="container"  style="width: 50%; border:1px solid #ccc; padding: 20px 10px; border-radius: 5px; margin: 20px auto;">
    <div class="row">
        <div class="col-md-12">
            <div class="card-header">
                <h5 style="float: left;"><strong>All Tickets</strong></h5>
                <a href="/tickets/create"><button class="btn btn-sm btn-primary" style="float: right">Add New Ticket</button></a>
            </div>
        </div>
    </div>
    <div style="overflow-x: auto;">
        <table>
            <tr>
                <th>Name</th>
                <th>Subject</th>
                <th>Category</th>
                <th>Priority</th>
            </tr>
            @foreach ($tickets as $ticket)
                <tr>
                    <td>{{ $ticket->Name }}</td>
                    <td>{{ $ticket->Subject }}</td>
                    <td><span class="status category">{{ $ticket->Category }}</span></td>
                    <td>{{ $ticket->Priority }}</td>

                </tr>
            @endforeach
        </table>
    </div>

    
</div>

@endsection
