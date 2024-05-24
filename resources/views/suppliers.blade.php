@extends('layout')

@section('content')

    <script>
            function confirmDelete(supplierId) {
        if (confirm('Are you sure you want to delete this supplier?')) {
            window.location.href = '/suppliers/delete/' + supplierId;
        }
    }
    </script>

    <div class="Sup-Container">
        @if (session('message'))
           <div class="success">{{session('message')}}</div>
        @endif

        <div class="sup-container3">
            <div>
                <h3>List of Suppliers</h3>
            </div>

            <div>
                <a href="/create" target="_blank" class="add-product"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus-square-fill" viewBox="0 0 16 16">
                    <path d="M2 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm6.5 4.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3a.5.5 0 0 1 1 0"/>
                  </svg>add</a>   
            </div>  
        </div>

        <table class="supplier-table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($suppliers as $sup)
                    <tr>
                        <td>{{ $sup->name}}</td>
                        <td>{{ $sup->address}}</td>
                        <td>{{ $sup->phone}}</td>
                        <td>
                            <div class="action-buttons">
                                <a href="{{ route('suppliers.show', ['supplier' => $sup->id]) }}" class="show-button"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-eye" viewBox="0 0 16 16">
                                    <path d="M16 8s-3-5.5-8-5.5S0 8 0 8s3 5.5 8 5.5S16 8 16 8M1.173 8a13 13 0 0 1 1.66-2.043C4.12 4.668 5.88 3.5 8 3.5s3.879 1.168 5.168 2.457A13 13 0 0 1 14.828 8q-.086.13-.195.288c-.335.48-.83 1.12-1.465 1.755C11.879 11.332 10.119 12.5 8 12.5s-3.879-1.168-5.168-2.457A13 13 0 0 1 1.172 8z"/>
                                    <path d="M8 5.5a2.5 2.5 0 1 0 0 5 2.5 2.5 0 0 0 0-5M4.5 8a3.5 3.5 0 1 1 7 0 3.5 3.5 0 0 1-7 0"/>
                                  </svg></a>
                                <button class="delete-button" onclick="confirmDelete({{ $sup->id }})"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"/>
                                  </svg></button>
                            </div>
                        </td> 
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <style>
        .Sup-Container {
            background-color: rgb(230, 227, 227);
            padding: 5px;
            margin-top: 10px;
            border-radius: 5px;
        }
        .success {
            color: green;
            background-color: white;
            padding: 10px;
            text-align: center;
            border-radius: 5px;
            border: 1px solid green;
        }
        .add-product {
            display: flex;
            gap: 5px;
            align-items: center;
            padding: 5px;
            border-radius: 3px;
            background-color: rgb(52, 145, 244);
            color: rgb(245, 240, 240);
        }
        .sup-container3 {
            justify-content: space-between;
            display: flex;
            align-items: center;
        }
        .sup-create {
            display: flex;
            justify-content: space-between;
        }
        .supplier-table {
            width: 100%;
            border-collapse: collapse;
            border: 1px solid #ddd;
        }

        .supplier-table th, .supplier-table td {
            padding: 8px;
            text-align: left;
            border: 1px solid #ddd;
            background-color: white;
            font-size: 13px;
        }

        .supplier-table th {
            background-color: #f1f0f0;
            text-align: center;
        }
        .action-buttons {
            display: flex;
            border-radius: 9px;
            gap:5px;
            justify-content: space-around;
        }
        .show-button, a {
            text-decoration: none;
        }
        .show-button, .delete-button {
            padding: 6px 12px;
            border: none;
            cursor: pointer;
        }

        .show-button {
            background-color: #4caf50;
            color: white;
            border-radius: 9px;
        }

        .delete-button {
            background-color: #f44336;
            color: white;
            border-radius: 9px;
        }
    </style>
@endsection
