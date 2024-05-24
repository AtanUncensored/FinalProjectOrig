@extends('layout')

@section('content')
    @if(isset($supplier))
    <div class="supplier-details">
        <div class="qr">
            <div >
                <h1 class="supplier-name">{{ $supplier->name }}</h1>
                <p class="supplier-description">{{ $supplier->address }}</p>
            </div>
            <div class="qr">
                {{QrCode::generate($supplier->name);}}
            </div>
        </div>

        <div class="supplier-info">
            <p><strong>Price:</strong> ${{ $supplier->phone }}</p>
        </div>
    </div>
    @endif

    <style>
    .supplier-details {
        max-width: 600px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f9f9f9;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .supplier-name {
        font-size: 24px;
        color: #333;
        margin-bottom: 10px;
    }

    .supplier-description {
        font-size: 16px;
        color: #666;
        margin-bottom: 20px;
    }

    .supplier-info {
        border-top: 1px solid #ccc;
        padding-top: 20px;
    }

    .supplier-info p {
        font-size: 16px;
        color: #333;
        margin-bottom: 10px;
    }

    .supplier-info strong {
        font-weight: bold;
        margin-right: 5px;
    }
    .qr {
        display: flex;
        justify-content: space-between;
    }

</style>

@endsection
