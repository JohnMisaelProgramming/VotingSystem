<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="navbar">
          {{-- <img src="{{ asset('images/announcement.png') }}"> --}}
          <a href="#" class="btn" role="button" data-bs-toggle="button">Home</a>
          <a href="#" class="btn" role="button" data-bs-toggle="button">About</a>
          <a href="#" class="btn" role="button" data-bs-toggle="button">How to Vote</a>
          <a href="#" class="btn" role="button" data-bs-toggle="button">Contact Us</a>
          <button type="button" class="btn btn-info">Login</button>
        </div>
        
        {{-- Setion 1: Home --}}
        <div class="Home">
          <div class="row">
            <div class="col">
              <p>Secure Voting Made Simple for Students</p>
              <p>Make a change by voting by Registering now</p>
              <div class="row">
                <div class="col">
                  <button>Register</button>
                </div>
                <div class="col">
                  <button>How to Vote?</button>
                </div>  
              </div>      
            </div>
            <div class="col">
              {{-- Image Here same with figma --}}
              <p>Image Here</p>
            </div>
          </div>
        </div>
        
        {{-- Section 2: About --}}
        <div class="About">
          <div class="row">
            <p>Voting made simple for student while still being fully secure and reliable<p>
          </div>
          <div class="row">
            <div class="col">
              {{-- Image Here --}}
            </div>
            <div class="col">
              <div class="row">
                <h4>Secure Ballot Casting</h4>
                <p>The system ensures that each voter can securely submit their ballot. One-time voting per user help maintain fairness.</p>
              </div>
              <div class="row">
                <h4>Automatatic Vote Counting</h4>
                <p>Once votes are cast, the system automatically tallies them in real time and generates results without manual intervention, reducing the risk of errors or tampering</p>
              </div>
              <div class="row">
                <h4>Generate Election Reports</h4>
                <p>The system complies election data into reports, providing insights into voting trends, participation rates, and overall election integrity for analysis and future improvements</p>
              </div>
            </div>
          </div>
        </div> 
        
        {{-- Section 3: Voting Process --}}
        <div class="Voting">
          <div class="row">
            <h2>How to Vote?</h2>
          </div>
          <div class="row">
            <div class="col">
              <div class="row">
                <h4>Step 1: Log In to Your Account</h4>
                <p>Enter your <b>username/email</b> and <b>password</b></p>
                <p>Click <b>Log In</b> to access the voting dashboard </p>
              </div>
              <div class="row">
                <h4>Step 2: Select the Election</h4>
                <p>Once logged in, navigate to the Elections or Ongoing Election section.</p>
                <p>Click on the election you are eligible to vote in (e.g., "Student Council Elections 2025").</p>
              </div>
              <div class="row">
                <h4>Step 3: Cast your Vote</h4>
                <p>Select your preffered candidate for each position by clicking on their name or checkbox</p>
              </div>
            </div>
            <div class="col">
              <div class="row">
                <h4>Step 4: Review your Selection</h4>
                <p>Before submitting, the system will display a summary of your votes.</p>
                <p>Verify your choices and make any necessary changes.</p>
              </div>
              <div class="row">
                <h4>Step 5: Submit your Vote</h4>
                <p>Click the submit vote button to finalize your selection.</p>
                <p> A confirmation mesage will appear to confirm that your vote has been recorded.</p>
              </div>
              <div class="row">
                <h4>Step 6: Check Election Results</h4>
                <p>Once voting is closed, the system may allow you to view real-time results or wait for official announcements</p>
              </div>
            </div>
          </div>
        </div>

        {{-- Section 4: Contact Us --}}
        <div class="Contact">
          <div class="row">
            <h2>Contact Us</h2>
            <p>Feel free to ask us questions for clarifications!</p>
          </div>
          <form>
            <div class="row">
              <div class="col">
                <h5>Full Name: </h5>
                <input type="text" class="form-control" placeholder="Full Name">
              </div>
              <div class="col">
                <h5>Email Address: </h5>
                <input type="text" class="form-control" placeholder="Email Address">
              </div>
            </div>

            <br>

            <div class="row">
              <h5>Description:</h5>
              <input type="text" class="form-control" placeholder="enter question/message here">
            </div>
          </form>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
