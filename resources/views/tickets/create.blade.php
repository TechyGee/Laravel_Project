@extends('layouts.layout')
 
@section('content')
    <div class="wrapper create-ticket">
        <h1>Create New Ticket</h1>
        <form action="/tickets" method="POST">
            @csrf 
            <label for="Name">Name</label>
            <input type="text" id="Name" name="Name">
            <label for="Email">Email</label>
            <input type="email" id="Email" name="Email">
            <label for="Phone_Number">Phone Number</label>
            <input type="tel" id="Phone_Number" name="Phone_Number">
            <label for="Subject">Subject</label>
            <input type="text" id="Subject" name="Subject">
            <label for="Category">Category</label>
            <select name="Category" id="Category">
                <option value="request">REQUEST</option>
                <option value="complaint">COMPLAINT</option>
            </select>
            <label for="Sub_Category">Sub Category</label>
            <select name="Sub_Category" id="Sub_Category">
                <option value="select">select</option>
                <option value="slow internet">Slow internet</option>
                <option value="Internet Downtime">Internet Downtime</option>
            </select>
            <label for="Priority">Priority</label>
            <select name="Priority" id="Priority">
                <option value="select">select</option>
                <option value="low">Low</option>
                <option value="Medium">Medium</option>
                <option value="High">High</option>
            </select>
            <label for="Resolution">Resolution</label>
            <input type="text" id="Resolution" name="Resolution">
            <label for="Recommendation">Recommendation</label>
            <input type="text" id="Recommendation" name="Recommendation">
            <input type="submit" value="Submit ticket">
        </form>
    </div>
@endsection