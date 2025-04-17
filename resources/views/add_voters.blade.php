@extends('layouts.admin')

@section('title', 'Add Voter')

@section('content')
<style>
    .add-voter-card {
        background-color: #ffffff;
        border-radius: 15px;
        box-shadow: 0 4px 12px rgba(0, 0, 0, 0.05);
        padding: 30px;
        margin-top: 20px;
        max-width: 700px;
    }

    .add-voter-card h4 {
        color: #0078d7;
        font-weight: 600;
    }

    .add-voter-card p {
        font-size: 0.95rem;
        color: #6c757d;
    }

    .add-voter-card label {
        font-weight: 500;
    }
</style>

<div class="container">
    <div class="add-voter-card mx-auto shadow-lg">
        <h4 class="mb-2"><i class="bi bi-person-plus-fill me-2"></i> Add Voter</h4>
        <p class="mb-4">Register high school students who are eligible to vote in the current school election. Make sure the student details are accurate and verified.</p>

        <div class="row">
            <div class="col-md-6 mb-3">
                <label>Full Name</label>
                <div class="form-control bg-light">Juan Dela Cruz</div>
            </div>
            <div class="col-md-6 mb-3">
                <label>Student Email</label>
                <div class="form-control bg-light">juan@student.edu</div>
            </div>
            <div class="col-md-6 mb-3">
                <label>Student ID</label>
                <div class="form-control bg-light">2023-00145</div>
            </div>
            <div class="col-md-6 mb-3">
                <label>Temporary Password</label>
                <div class="form-control bg-light">default123</div>
            </div>
        </div>

        <div class="text-end">
            <button class="btn" style="background-color: #5293BB; color: #ffffff"><i class="bi bi-check-lg me-1"></i> Confirm & Register</button>
            <button class="btn btn-outline-secondary"><i class="bi bi-arrow-clockwise me-1"></i> Reset</button>
        </div>
    </div>
</div>
@endsection
