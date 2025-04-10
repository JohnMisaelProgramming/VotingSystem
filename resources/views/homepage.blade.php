<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Homepage</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/homepage.css') }}">
  </head>
  <body>
      <div class="navbar">
          <div class="col">
            <img src="{{ asset('Images/Logo.png') }}">
          </div>
          <div class="col">
            <a href="#Home" class="btn" role="button" >Home</a>
            <a href="#About" class="btn" role="button">About</a>
            <a href="#Voting" class="btn" role="button">Vote</a>
            <a href="#Contact" class="btn" role="button">Contact Us</a>
          </div>
          <div class="col d-flex justify-content-end">
            <a href="{{ route('login') }}" type="button" class="btn btn-info btn-login" >Login</a>
          </div>
      </div>

        {{-- Setion 1: Home --}}
        <section id="Home">
          <div class="container py-5">
            <div class="row">
              <div class="col">
                <h1>Welcome to <span style="color:#4f92b3">EduVote</span></h1>
                <hr style="border: 1.5px solid #063b6c; width: 80%;">
                <p class="main-text">Secure <span style="color:#4f92b3">Voting</span> Made Simple for <span style="color:#4f92b3">Students</span></p>
                <p class="sub-text">Make a change by voting by <span style="color:#4f92b3">Registering</span> now</p>
                <div class="row justify-content-center pt-4">
                  <a href="#Voting" type="button" class="btn btn-info text-white how-button"><b>How to Vote?</b></a>
                </div>      
              </div>
              <div class="col">
                <img src="{{ asset('Images/Vote1.jpg') }}">
              </div>
            </div>
          </div>
        </section>
        
        {{-- Section 2: About --}}
        <section id="About">
          <div class="container py-5">
            <div class="row">
              <p class="head-text pb-3">Voting made <span style="color:#4f92b3">simple</span> for student while still being fully <span style="color:#4f92b3">secure</span> and <span style="color:#4f92b3">reliable</span><p>
            </div>
            <div class="row">
              <div class="col">
                <img src="{{ asset('Images/Vote2.jpg') }}">
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
        </section> 
        
        {{-- Section 3: Voting Process --}}
        <section id="Voting">
          <div class="container py-5">
            <div class="row pb-5">
              <h2>How to <span style="color:#063b6c">Vote?</span></h2>
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
        </section>

        {{-- Section 4: Contact Us --}}
        <section id="Contact" class="pad-bottom-contact">
          <div class="container py-3">
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
                <h5>Description:</h5>
                <input type="text" class="form-control" placeholder="enter question/message here">
              <br>
              <div class="d-flex justify-content-center">
                <input type="submit" value="Submit" class="btn btn-primary btn-submit">
              </div>
            </form>
          </div>
        </section>
        
        {{-- Contact Us --}}
        <footer class="contact-section text-white ">
          <div class="w-100 position-relative">
            <div class="contact-card text-center mx-auto shadow">
              <div class="icon-circle">
                <img src="https://cdn-icons-png.flaticon.com/512/1250/1250689.png" alt="Icon">
              </div>
              <div class="row pt-4">
                <div class="col-md-4 contact-info mb-4 mb-md-0">
                  <h5>John Misael Abe Bacaron</h5>
                  <p>johnmisaelbacaron@gmail.com</p>
                  <p>0935-564-8569</p>
                </div>
                <div class="col-md-4 contact-info mb-4 mb-md-0">
                  <h5>Tia Shainna Arcena</h5>
                  <p>tiashainnarcena@gmail.com</p>
                  <p>0912-345-6789</p>
                </div>
                <div class="col-md-4 contact-info">
                  <h5>Kane John Restauro</h5>
                  <p>kanejohnrestauro@gmail.com</p>
                  <p>0998-765-4321</p>
                </div>
              </div>
            </div>
          </div>
        </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
