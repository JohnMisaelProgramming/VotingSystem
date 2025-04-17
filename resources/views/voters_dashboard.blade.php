@extends('layouts.voters')

@section('title', 'Vote')
@section('sidebar')
@endsection
@section('top')
@endsection
@section('content')
<div class="row">
                    <div class="col-md-8">
                        <div class="card p-3 bg-white">
                            <h5>Announcements</h5>
                            <p> No new announcements at the moment.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3 text-center">
                            <h5>Numbers Voted</h5>
                            <h2>76</h2>
                            <select class="form-select">
                                <option>Election 2024-2025</option>
                            </select>
                        </div>
                    </div>
                </div>

                <!-- Status of Elections -->
                <div class="card mt-4 p-3">
                    <h5>Status of Elections</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Duration</th>
                                <th>Status</th>
                                <th>Voting Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Election SY 2025-2026</td>
                                <td>July 31 - September 31, 2025</td>
                                <td><span class="badge bg-warning">Ongoing</span></td>
                                <td><span class="badge bg-danger">Not Voted</span></td>
                            </tr>
                            <tr>
                                <td>Election SY 2024-2025</td>
                                <td>July 31 - September 31, 2024</td>
                                <td><span class="badge bg-success">Completed</span></td>
                                <td><span class="badge bg-success">Voted</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Results Analysis and Policy -->
                <div class="row mt-4">
                    <div class="col-md-8">
                        <div class="card p-3">
                            <h5>Results Analysis</h5>
                            <select class="form-select mb-3">
                                <option>President</option>
                            </select>
                            <div>
                                <canvas id="resultsChart"></canvas>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card p-3">
                            <h5>Policy</h5>
                            <ul>
                                <li>Each registered voter can only vote once per election.</li>
                                <li>Votes should be private, and no one can see individual choices.</li>
                                <li>Voting is only allowed within the set timeframe.</li>
                                <li>Once a vote is cast, it cannot be edited or revoked.</li>
                                <li>Results will be published only after voting ends.</li>
                                <li>If a voter faces an issue, they can report it to election officials.</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>
@endsection





