@extends('layouts.admin')

@section('title')
@endsection
@section('sidebar')
@endsection
@section('top')
@endsection
@section('content')
<style>
/* Custom styles for the election cards */
.profile-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            height: 90%; 
            position: relative;
            box-shadow: lg;
        }
        .profile-card h5 {
            
            color: #1B5886;
        }
        .profile-card h2 {
            margin-bottom: 1px;
            color: #1B5886;
            
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
            border-left: 2px solid #AEAEAE;
            height: 120px;
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
        .form-select {
    background-color: #1B5886; 
    color: #ffffff;
    width: 190px;
}
        
</style>
    {{-- Cards Row --}}
    <div class="row mb-4 mt-4">
        <div class="col-md-4">
        <div class="profile-card shadow-lg d-flex justify-content-center align-items-center">
        <div class="d-flex align-items-center ">
            <img src="{{ asset('images/candidates.png') }}" class="me-3" width="80" height="80" alt="Candidates Icon">
            <div class="vl mx-3"></div>
            <div class="text-content">
          <h5 class="mb-1">Number of Candidates</h5>
          <h2 class="mb-3">24</h2>
          <select class="form-select" >
            <option >Election 2024-2025</option>
          </select>
        </div>
        </div>
        </div>    
        </div>
        <div class="col-md-4">
        <div class="profile-card shadow-lg d-flex justify-content-center align-items-center">
        <div class="d-flex align-items-center ">
        <img src="{{ asset('images/voters.png') }}" class="me-3" width="80" height="80" alt="Voters Icon">
        <div class="vl mx-3"></div>
            <div class="text-content">
                <h5>Number of Voters</h5>
                <h2>100</h2>
            </div>
        </div>
        </div>    
        </div>
        
        <div class="col-md-4">
        <div class="profile-card shadow-lg d-flex justify-content-center align-items-center">
        <div class="d-flex align-items-center ">
        <img src="{{ asset('images/vote.png') }}" class="me-3" width="80" height="80" alt="Voters Icon">
        <div class="vl mx-3"></div>
            <div class="text-content">
                <h5>Numbers Voted</h5>
                <h2>76</h2>
                <select class="form-select mt-2 ">
                    <option>Election 2024-2025</option>
                </select>
            </div>
            </div>
        </div>    
        </div>
    </div>

    {{-- Status of Elections & Announcements --}}
    <div class="row mb-4">
        <div class="col-md-8">
            <div class="election-status-table p-3">
                <h5>Status of Elections</h5>
                <hr>
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
    <div class="row justify-content-between border-bottom border-2" >
    <div class="col-md-6 text-start ">
        <h5>Results Analysis</h5>
    </div>
            <div class="col-md-3">
                <select class="form-select mb-3" style="background-color: #6EB1D6"id="positionSelect">
                    <option>President</option>
                </select>
            </div>
            <div class="col-md-3">
                <select class="form-select mb-3" style="background-color: #6EB1D6" id="electionSelect">
                    <option>Election 2024-2025</option>
                </select>
            </div>
        </div>
        
        <canvas id="resultsChart" width="400" height="200"></canvas>
    </div>

</div>
@endsection
