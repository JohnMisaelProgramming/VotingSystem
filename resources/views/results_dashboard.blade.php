@extends('layouts.admin')

@section('title')
@section('sidebar')
@endsection
@section('top')
@endsection
@section('content')
<style>

        .profile-card {
            background-color: #6EB1D6;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 70%; 
            position: relative;
            box-shadow: lg;
        }
        .profile-card h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #0078d7;
        }
        .profile-card p {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
        }
        .profile-card .btn {
            margin: 5px;
        }
        .vl { 
            border-left: 1px solid #ffffff;
            height: 100px;
            position: relative;
           
        }
        .rcard {
            background-color: #ffffff;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            margin-top: 30px;
            flex-direction: column;
            justify-content: space-between; 
            height: 100%; 
        }
        .rcard h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #0078d7;
        }
        .rcard h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .rcard select {
            margin-top: auto; 
        }
        .custom-eye-icon{
            color: white;
            position: absolute;
            top: 10px; 
            right: 10px;
            font-size: 1.5rem;
        }
</style>
<div class="container rcard shadow-lg">
    {{-- Election Header --}}
    <div class="row mb-0 mt-0 justify-content-between">
        <div class="col-md-4 ">
            <h5 class=" fw-bold">
                <i class="bi bi-box-seam me-2"></i> Election SY 2025-2026
            </h5>
            <small class="text-muted">High School Level</small>
        </div>
        <a href="#" class="col-md-4 text-end text-decoration-none fw-semibold text-primary">Official Record</a>
        <hr style="height:3px; width: 100%; color:gray;background-color:gray; margin-top: 10px; margin: auto;">
    </div>
    

    {{-- President --}}
    <div class="row mb-4 mt-4">
        <div class="col-md-6 mb-4">
            <h4 class="text-primary text-center mb-3">President</h4>
            <div class="profile-card shadow-lg">
                <div class="card-body d-flex align-items-center">
                    <img src="{{ asset('images/profile.jpg') }}" class="me-3" width="100" height="100" alt="John Doe">
                    
                        <div class="vl mx-2"></div>
                        <div class="flex-grow-1 text-start">
                        <h5 class="mb-0 fw-bold">John Doe</h5>
                        <p class="mb-0">Grade 12</p>
                        <small class="text-muted">Information and Communication Technology</small><br>
                        <strong>Votes: 50</strong>
                    </div>
                    <i class="bi bi-eye fs-4 custom-eye-icon ms-3"></i>
                </div>
            </div>
        </div>
        {{-- Vice President --}}
        <div class="col-md-6 mb-4">
            <h4 class="text-primary text-center mb-3">Vice President</h4>
            <div class="profile-card shadow-lg">
                <div class="card-body d-flex align-items-center text-start">
                    <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle me-3" width="80" height="80" alt="Jonathan Regan">
                        <div class="vl mx-2"></div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-bold">Jonathan Regan</h5>
                        <p class="mb-0">Grade 12</p>
                        <small class="text-muted">Science, Technology, Engineering and Mathematics</small><br>
                        <strong>Votes: 64</strong>
                    </div>
                    <i class="bi bi-eye fs-4 custom-eye-icon ms-3"></i>
                </div>
            </div>
        </div>
    </div>

    {{-- Secretary --}}
    <div class="row mb-4">
        <div class="col-md-6 mb-4">
            <h4 class="text-primary text-center mb-3"><u>Secretary</u></h4>
            <div class="profile-card shadow-lg">
                <div class="card-body d-flex align-items-center text-start">
                    <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle me-3" width="80" height="80" alt="Julia Castro">
                        <div class="vl mx-2"></div>
                    <div class="flex-grow-1">
                        <h5 class="mb-0 fw-bold">Julia Castro</h5>
                        <p class="mb-0">Grade 11</p>
                        <small class="text-muted">Humanities and Social Science</small><br>
                        <strong>Votes: 47</strong>
                    </div>
                    <i class="bi bi-eye fs-4 custom-eye-icon ms-3"></i>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection