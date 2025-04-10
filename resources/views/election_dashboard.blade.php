@extends('layouts.admin')

@section('title')
@section('sidebar')
@endsection
@section('top')
@endsection
@section('content')
<style>

        .election-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between; 
            height: 100%; 
        }
        .election-card h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #0078d7;
        }
        .election-card p {
            font-size: 0.9rem;
            color: #555;
            margin-bottom: 15px;
        }
        .election-card .btn {
            margin: 5px;
        }
</style>
<div class="row mb-4 mt-4 ">
                    <div class="col-md-6">
                        <div class="election-card  shadow">
                            <h5>Election SY 2024-2025</h5>
                            <p>High School Level</p>
                            <p>July 31 - September 31, 2024</p>
                            <div>
                                <button class="btn btn-primary">Show Candidates</button>
                                <button class="btn btn-secondary">Edit Election</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="election-card shadow">
                            <h5>Election SY 2025-2026</h5>
                            <p>High School Level</p>
                            <p>July 31 - September 31, 2025</p>
                            <div>
                                <button class="btn btn-primary">Show Candidates</button>
                                <button class="btn btn-secondary">Edit Election</button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="text-center mt-4">
                    <button class="btn btn-success w-50">Add Election</button>
                </div>

                
                </div>
            </main>
        </div>
    </div>

@endsection