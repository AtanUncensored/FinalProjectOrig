@extends('layout')

@section('content')

<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 13  0vh;
    }
    .form-container {
        width: 350px;
        background-color: rgba(167, 164, 164, 0.651);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);

    }
    .form-container h1 {
        text-align: center;
        color: black;
        margin-bottom: 20px;
    }
    .form-group {
        margin-bottom: 20px;
    }
    .form-label {
        font-weight: bold;
    }
    .form-control {
        width: 100%;
        padding: 10px;
        border-radius: 5px;
        box-sizing: border-box;
        border: 1px solid #ccc;
    }
    #description {
        height: 90px;
        resize: vertical;
    }
    .btn-primary {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 5px;
        background-color: #007bff;
        color: white;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }
    .btn-primary:hover {
        background-color: #0056b3;
    }
</style>

<div class="container">
    <div class="form-container">
        <center><h2>Create Supplier</h2></center>
        <form action="{{ url('/create') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="address" class="form-label">Address</label>
                <textarea name="address" id="address" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="phone" class="form-label">phone</label>
                <input type="text" name="phone" id="phone" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Add Supplier</button>
        </form>
    </div>
</div>

@endsection
