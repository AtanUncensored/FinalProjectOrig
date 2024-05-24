@extends('layout')

@section('content')

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Inventory Management</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }
        .container {
            max-width: 800px;
            margin: 50px auto;
            padding: 20px;
            background: linear-gradient(100deg, #b0bac4 4%, #44586c 100%);
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 9px;
        }
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        .header h1 {
            margin: 0;
            font-size: 2.5em;
            color: #333;
        }
        .content {
            font-size: 1.1em;
            line-height: 1.6;
            color: rgb(53, 51, 51);
        }
        .content p {
            margin: 20px 0;
        }
        .social-icons {
            text-align: center;
            margin-top: 30px;
        }
        .social-icons a {
            margin: 0 10px;
            text-decoration: none;
        }
        .social-icons img {
            width: 40px;
            height: 40px;
            transition: transform 0.3s;
        }
        .social-icons img:hover {
            transform: scale(1.1);
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>About Us</h1>
        </div>
        <div class="content">
            <p>Welcome to our Inventory Management System! Our mission is to provide efficient and reliable solutions for managing your inventory, helping businesses of all sizes to optimize their stock levels, reduce costs, and increase productivity.</p>
            <p>Our platform is designed with user-friendliness in mind, offering powerful features that allow you to track your inventory in real-time, generate insightful reports, and streamline your operations. We believe in continuous improvement and strive to update our system with the latest technologies and best practices.</p>
            <p>At the heart of our company is a commitment to excellent customer service. Our dedicated team is here to support you every step of the way, ensuring that you get the most out of our system.</p>
            <p>Thank you for choosing us as your inventory management partner. We look forward to helping you achieve your business goals.</p>
        </div>
        <div class="social-icons">
            <a href="https://www.facebook.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/5/51/Facebook_f_logo_%282019%29.svg" alt="Facebook">
            </a>
            <a href="https://www.instagram.com" target="_blank">
                <img src="https://upload.wikimedia.org/wikipedia/commons/a/a5/Instagram_icon.png" alt="Instagram">
            </a>
        </div>
    </div>
</body>
@endsection