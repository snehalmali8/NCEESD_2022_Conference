<style>
* {
    /* top: 0; */
    /* left: 0; */

}

.c_navbar {
    background: black !important;
    font-size: 16px;
    /*position: sticky;*/
    top: 0;
    /*z-index: 100;*/
    background-color: black;
    /* margin: auto; */
}

.c_navbar2 {
    margin: auto !important;
}

.c_navbar2 .list li a {
    color: white !important;
}

.drop {
    background: black !important;
    font-size: 16px;
}

.drop .links:hover {
    background: lightgray;
    color: black !important;
}

@media(max-width: 1178px) {
    .c_navbar {
        font-size: 14px;
    }
}

@media(max-width: 1166px) {
    .c_navbar {
        font-size: 11px;
    }
}

    </style>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark c_navbar">
        <button class="navbar-toggler text-light" type="button" data-toggle="collapse"
            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <div class="c_navbar2">
                <ul class="navbar-nav mr-auto list">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./index.php" id="navbarDropdown">
                            Home
                        </a>
                    </li>

                    <li class="nav-item dropdown li">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item links" href="./about_conference.php">About the Conference</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="./about_college.php">About College</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="./organizing_committee.php">Organizing Commitee</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="./advisory_committee.php">Advisory Board</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="./venue.php">Venue</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Speakers
                        </a>
                        <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item links" href="#">Planery Speaker</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="#">Keynote Speakers</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="#">Sponsors Speakers</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./program_schedule.php" id="navbarDropdown">
                            Program Schedule
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Call for Papers
                        </a>
                        <div class="dropdown-menu drop" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item links" href="./conference_track.php">Conference Track</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item links" href="./important_dates.php">Important dates</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./registration.php" id="navbarDropdown">
                            Registration
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./paper_submission.php" id="navbarDropdown">
                            Paper Submission
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./sponsors.php" id="navbarDropdown">
                            Sponsors
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="./contact_us.php" id="navbarDropdown">
                            Contact Us
                        </a>
                    </li>
                </ul>
            </div>

        </div>
    </nav>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    </body>

    </html>