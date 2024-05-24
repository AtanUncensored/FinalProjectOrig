@extends('layout')

@section('content')
<div class="Landing-main">
    <div class="hero">
        <div class="hero-content">
            <h1>Welcome to SmartStock Inventory</h1>
            <p>Optimize your inventory management with real-time tracking, automated reordering, and advanced analytics.</p>
            <a href="/products" class="btn-get-started">Get Started</a>
        </div>
    </div>
    <div class="features">
        <div class="feature-item">
            <h2>Real-Time Tracking</h2>
            <p>Monitor your inventory in real time to avoid stockouts and overstocking.</p>
        </div>
        <div class="feature-item">
            <h2>Automated Reordering</h2>
            <p>Automatically reorder stock when levels fall below predefined thresholds.</p>
        </div>
        <div class="feature-item">
            <h2>Advanced Analytics</h2>
            <p>Gain insights with detailed reports and data analytics.</p>
        </div>
    </div>
</div>

<style>
   .Landing-main {
    display: flex;
    flex-direction: column;
    align-items: center;
    padding: 20px;
    background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
}

.hero {
    text-align: center;
    max-width: 800px;
    padding: 2rem;
    background: linear-gradient(95deg, #979ca1 0%, #29333d 100%);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    margin-bottom: 2rem;
}

.hero-content h1 {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    color: #c3ccd5;
}

.hero-content p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    color: #dde4ea;
}

.btn-get-started {
    display: inline-block;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    color: white;
    background: #007bff;
    border: none;
    border-radius: 5px;
    text-decoration: none;
    transition: background-color 0.3s ease;
}

.btn-get-started:hover {
    background: #0056b3;
}

.features {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    max-width: 1200px;
    width: 100%;
}

.feature-item {
    text-align: center;
    flex-basis: 30%;
    padding: 1rem;
    margin: 1rem;
    background: linear-gradient(135deg, #76818b 0%, #29333d 100%);
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
}

.feature-item h2 {
    font-size: 1.5rem;
    margin-bottom: 0.5rem;
    color: #d2dae1;
}

.feature-item p {
    font-size: 1rem;
    color: #d1d7db;
}

</style>
@endsection

