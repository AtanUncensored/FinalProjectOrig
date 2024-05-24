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
        <center><h2>Create Product</h2></center>
        <form action="{{ url('/prodCreate') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="supplier_id" class="form-label">Select Supplier</label>
                <select name="supplier_id" id="supplier_id" class="form-control" required>
                    <option value="">Select Supplier</option>
                    @foreach ($suppliers as $supplierId => $supplier)
                        <option value="{{ $supplierId + 1 }}">{{ $supplier->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="category_id" class="form-label">Select Category</label>
                <select name="category_id" id="category_id" class="form-control" required>
                    <option value="">Select Supplier</option>
                    @foreach ($categories as $categoryId => $category)
                        <option value="{{ $categoryId + 1 }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" id="description" class="form-control" rows="4" required></textarea>
            </div>
            <div class="form-group">
                <label for="price" class="form-label">Price</label>
                <input type="text" name="price" id="price" class="form-control" required>
            </div>
            <button class="btn btn-primary" type="submit">Add Product</button>
        </form>
    </div>
</div>

@endsection
