@extends('layouts.admin')

@section('title', 'Election')
@section('sidebar')
@endsection
@section('top')
@endsection
@section('content')

<style>
.election-card {
    background-color: #5293BB; 
    border-radius: 10px;
    padding: 20px;
    display: flex;
    flex-direction: column;
    align-items: stretch;
    margin-bottom: 20px;
    text-align: left;
    display: flex;
    flex-direction: column;
    justify-content: space-between; 
    height: 100%; 
}

.election-header {
    display: flex;
    align-items: center;
    margin-bottom: 15px;
}

.ballot-icon {
    width: 100px; 
    height: 100px;
    margin-right: 15px;
}

.election-info h5 {
    color: #ffffff;
    margin-bottom: 5px;
    font-size: x-large;
}

.election-info p {
    color: #ffffff; 
    margin-bottom: 2px;
}

.election-actions {
    display: flex;
    justify-content: space-around;
    align-items: center;
    padding-top: 15px;
}

.action-item {
    display: flex;
    flex-direction: column;
    align-items: center;
    color: #ffffff;
    cursor: pointer;
    font-family: Lucida Console, monospace;
}

.action-icon {
    width: 40px; 
    height: 40px;
    margin-bottom: 5px;
    height: 100%;
    width: 50%;
}

.separator {
    border-left: 2px solid #ffffff; 
    height: 100px;
}

hr {
    border-top: 5px solid #ffffff; 
    margin-top: 15px;
    margin-bottom: 15px;
}
</style>
<div class="row mb-4 mt-4 ">
    <div class="col-md-6">
        <div class="election-card shadow-lg">
            <div class="election-header">
                <img src="{{ asset('images/ballot-icon.png') }}" alt="Ballot Box Icon" class="ballot-icon">
                <div class="election-info">
                    <h5>Election SY 2024-2025</h5>
                    <p><strong>High School Level</strong> </p>
                    <p>July 31 - September 31, 2024</p>
                </div>
            </div>
            <hr>
            <div class="election-actions">
                <div class="action-item">
                    <img src="{{ asset('images/eye-fill.png') }}" alt="Show Candidates Icon" class="action-icon">
                    <span>Show Candidates</span>
                </div>
                <div class="separator"></div>
                <div class="action-item">
                    <img src="{{ asset('images/edit.png') }}" alt="Edit Election Icon" class="action-icon">
                    <span>Edit Election</span>
                </div>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class="election-card shadow-lg">
            <div class="election-header">
                <img src="{{ asset('images/ballot-icon.png') }}" alt="Ballot Box Icon" class="ballot-icon">
                <div class="election-info">
                    <h5>Election SY 2025-2026</h5>
                    <p><strong>High School Level</strong></p>
                    <p>July 31 - September 31, 2024</p>
                </div>
            </div>
            <hr>
            <div class="election-actions">
                <div class="action-item">
                    <img src="{{ asset('images/eye-fill.png') }}" alt="Show Candidates Icon" class="action-icon">
                    <span>Show Candidates</span>
                </div>
                <div class="separator"></div>
                <div class="action-item">
                    <img src="{{ asset('images/edit.png') }}" alt="Edit Election Icon" class="action-icon">
                    <span>Edit Election</span>
                </div>
            </div>
        </div>
    </div>

                
</div>              

@endsection