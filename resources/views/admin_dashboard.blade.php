@extends('layouts.admin')

@section('title')
@endsection
@section('sidebar')
@endsection
@section('top')
@endsection
@section('content')
    {{-- Cards Row --}}
    <div class="row mb-4 mt-4">
        <div class="col-md-4">
            <div class="dashboard-card text-center p-3">
                <h5>Number of Candidates</h5>
                <h2>24</h2>
                <select class="form-select mt-2">
                    <option>Election 2024-2025</option>
                </select>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card text-center p-3">
                <h5>Number of Voters</h5>
                <h2>100</h2>
            </div>
        </div>
        <div class="col-md-4">
            <div class="dashboard-card text-center p-3">
                <h5>Numbers Voted</h5>
                <h2>76</h2>
                <select class="form-select mt-2">
                    <option>Election 2024-2025</option>
                </select>
            </div>
        </div>
    </div>

    {{-- Status of Elections & Announcements --}}
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="election-status-table p-3">
                <h5>Status of Elections</h5>
                <div class="table-responsive mt-2">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Election SY 2025-2026</td>
                                <td>July 31 - September 31, 2025</td>
                                <td><span class="badge bg-warning text-dark"><i class="bi bi-arrow-repeat me-1"></i>Ongoing</span></td>
                            </tr>
                            <tr>
                                <td>Election SY 2024-2025</td>
                                <td>July 31 - September 31, 2024</td>
                                <td><span class="badge bg-success"><i class="bi bi-check-circle me-1"></i>Completed</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="announcements-card p-3">
                <h5>Announcements</h5>
                <hr>
                <p class="text-muted">No new announcements at the moment.</p>
            </div>
        </div>
    </div>

    {{-- Results Analysis --}}
    <div class="results-analysis-card p-3">
        <h5>Results Analysis</h5>
        <div class="row">
            <div class="col-md-3">
                <select class="form-select mb-3" id="positionSelect">
                    <option>President</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select mb-3" id="electionSelect">
                    <option>Election 2024-2025</option>
                </select>
            </div>
        </div>
        <canvas id="resultsChart" width="400" height="200"></canvas>
    </div>

</div>
@endsection
