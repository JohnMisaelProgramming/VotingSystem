<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Log-in</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

</head>
  <body>
    <div class="row">
        <div class="col bg-left vh-100">
            <div class="container">
                <div class="row pt-4">
                    <h1>Sign In</h1>
                    <p>Please log in to vote for a candidate in a position in <b>EduVote</b>.</p>
                </div>

                <form class="form">
                    <label for="email">Email: </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon1">
                            <i class="bi bi-envelope"></i>
                          </span>                          
                        <input type="email" class="form-control custom-form" placeholder="Email" aria-label="Email" aria-describedby="basic-addon1" id="email">
                    </div>
    
                    <label for="password" class="pt-4">Password: </label>
                    <div class="input-group mb-3">
                        <span class="input-group-text" id="basic-addon2">
                            <i class="bi bi-lock"></i>
                          </span>
                        <input type="password" class="form-control custom-form" placeholder="Password" aria-label="Password" aria-describedby="basic-addon2" id="password">
                    </div>

                    <div class="d-flex justify-content-center pt-5">
                        <input type="submit" value="Submit" class="btn btn-success btn-submit">
                      </div>
                </form>

            </div>
        </div>
        <div class="col">
            <div class="container">
                <div class="row justify-content-end pt-3">
                    <img src="{{ asset('Images/Logo.png') }}" class="logo">
                </div>
                <div class="row justify-content-center">
                    <img src="{{ asset('Images/Vote3.jpg') }}" class="vote-pic">
                </div>
                <div class="row text-center right-text pt-4">
                    <p><b>Your Vote Matters.</b></p>
                    <p><b>Choose EduVote.</b></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
  </body>
</html>