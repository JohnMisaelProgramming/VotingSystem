
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
     <style>
        /* Custom styles for the sidebar */
        .sidebar {
            height: 100vh;
            background-color: #f8f9fa;
            color: #343a40;
        }
        .sidebar .nav-link {
            color: #343a40;
            margin-bottom: 5px;
        }
        .sidebar .nav-link:hover, .sidebar .nav-link.active {
            background-color: #e9ecef;
            color: #0078d7;
            border-radius: 5px;
        }
        .sidebar .nav-link i {
            margin-right: 5px;
        }
        /* Custom styles for the dashboard cards */
        .dashboard-card {
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
        .dashboard-card h5 {
            font-size: 1.2rem;
            margin-bottom: 10px;
            color: #0078d7;
        }
        .dashboard-card h2 {
            font-size: 2rem;
            font-weight: bold;
            margin-bottom: 15px;
        }
        .dashboard-card select {
            margin-top: auto;
        }
        /* Status of Elections Table */
        .election-status-table {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }
        .election-status-table h5 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #0078d7;
        }
        .election-status-table .table-responsive {
            overflow-x: auto;
        }
        .election-status-table .table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 0;
        }
        .election-status-table .table thead th {
            background-color: #f0f0f0;
            padding: 10px;
            text-align: left;
            border-bottom: 2px solid #ddd;
        }
        .election-status-table .table tbody td {
            padding: 10px;
            border-bottom: 1px solid #eee;
        }
        .election-status-table .table tbody tr:hover {
            background-color: #f5f5f5;
        }
        .election-status-table .badge {
            padding: 8px 12px;
            border-radius: 10px;
            font-size: 0.9rem;
            font-weight: bold;
            color: white;
        }
        .election-status-table .badge.bg-warning {
            background-color: #ffc107;
            color: #343a40;
        }
        .election-status-table .badge.bg-success {
            background-color: #28a745;
        }
        /* Results Analysis and Announcements */
        .results-announcements {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .results-analysis-card, .announcements-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 15px;
            margin-bottom: 20px;
        }
        .results-analysis-card {
            flex: 0 0 60.66%; 
        }
        .announcements-card {
            flex: 0 0 33.33%; 
        }
        .results-analysis-card h5, .announcements-card h5 {
            font-size: 1.2rem;
            margin-bottom: 15px;
            color: #0078d7;
        }
        .results-analysis-card select {
            margin-bottom: 15px;
        }
        #resultsChart {
            width: 100%;
            height: 200px;
        }
        .dropdown-menu:hover{
        background-color: blue;
        color: white;
        transition: background-color 0.3s ease, color 0.3s ease;
    }

    </style>
</head>
<body>

    <div class="container-fluid">
    @yield('sidebar')
        <div class="row">
            <nav class="col-md-3 d-md-block bg-light sidebar">
            <div class="d-flex align-items-center  p-2 mb-1 mt-2 rounded shadow">
                <img src="{{ asset('images/logo.png') }}" class="img-fluid me-3 mt-2 mb-2" width="100" alt="EduVote Logo">
                <div>
                    <h2 class="fw-bold text-primary mb-0">EduVote</h2>
                    <p class="text-muted fs-5 mb-0">Your Vote Matters.</p>
                </div>
            </div>
            <div class="d-flex align-items-center p-2 bg-white rounded shadow">
                <img src="{{ asset('images/profile.jpg') }}" class="rounded-circle me-3" width="80" alt="Admin Profile">
                <div>
                    <h4 class="mb-1 text-dark">Tia Shainna Arcena</h4>
                    <p class="mb-1 fw-bold text-primary">Student Voter</p>
                    <div class="d-flex align-items-center">
                        <span class="me-2" style="height: 12px; width: 12px; background-color: #00FF00; border-radius: 50%; display: inline-block;"></span>
                        <span class="text-primary">Online</span>
                    </div>
                </div>
            </div>

                <ul class="nav flex-column min-vh-100 p-2 bg-white mt-1 rounded shadow">
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center fw-bold text-primary  bg-opacity-25 px-3 py-2 rounded-0">
                            <i class="bi bi-card-list me-2 fs-5"></i> Dashboard
                        </a>
                    </li>

                    <!-- Election -->
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center text-primary px-3 py-2">
                            <i class="bi bi-box2-heart me-2 fs-5"></i> Vote
                        </a>
                    </li>

                    <!-- Results -->
                    <li class="nav-item">
                        <a href="#" class="nav-link d-flex align-items-center text-primary px-3 py-2">
                            <i class="bi bi-graph-up-arrow me-2 fs-5"></i> Results
                        </a>
                    </li>
                </ul>
            </nav>
            
            @yield('top')
            <div class="col-md-9 ms-sm-auto px-md-4 ">
            
            <div class="d-flex mt-1 ms-1 mt-2 justify-content-between flex-wrap align-items-center pt-2 ps-1 pb-2 mb-3 border-bottom border-4">
                <h3>Welcome Back, <strong>Tia!</strong></h3>

            <div class="d-flex align-items-center">
                <div class="rounded-circle bg-primary text-white d-flex justify-content-center align-items-center" 
                    style="width: 40px; height: 40px; font-weight: bold;">
                    TA
                </div> {{-- needs to be an image?--}}
                <button type="button" class="btn btn-link dropdown-toggle text-dark ms-2" data-bs-toggle="dropdown" aria-expanded="false"></button>
                <ul class="dropdown-menu dropdown-menu-end">
                    <li>
                        <a href=""> <button class="dropdown-item" type="button">LOG-OUT</button></a>
                    </li>
                </ul>
            </div>
            
        </div>
        @yield('content')
    </div>
    
               
</body>
</html>
