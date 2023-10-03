    <!doctype html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap demo</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.3/core.min.css">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">


        <meta name="description" content="Experience the ultimate time-travel adventure through different historical eras at Time Traveler's Hub. Explore immersive tours, interactive stories, and fictional artifacts.">
        <meta name="keywords" content="time travel, historical adventures, interactive stories, era exploration, fictional artifacts">
        <meta name="author" content="Sahil Jaiswal">



    </head>





    <body>

        <?php
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            $name = $_POST["name"];
            $age = $_POST["age"];
            $contact = $_POST["contact"];

            echo "<h3>Submitted Data:</h3>";
            echo "<p><strong>Name:</strong> $name</p>";
            echo "<p><strong>Age:</strong> $age</p>";
            echo "<p><strong>Contact Details:</strong> $contact</p>";
        }
        ?>

        <nav class="navbar navbar-expand-lg bg-primary" data-bs-theme="dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="./tempPort.php">Temporal Portal</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                Dropdown
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Action</a></li>
                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                        </li>
                    </ul>


                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>








            </div>
        </nav>

        <p class="text-center mt-3 h1">Welcome to the Temporal Portal</p>


        <div class="container w-5 mt-5 p-5 rounded-5 bg-primary-subtle  border border-info ">
            <form action="tempPort.php" method="POST">
                <div class="mb-3">
                    <label for="name" class="form-label">Enter Name:</label>
                    <input type="text" required name="name" id="name" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="age" class="form-label">Enter Age:</label>
                    <input type="number" required name="age" id="age" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Enter Contact Details:</label>
                    <input type="tel" required name="contact" id="contact" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Enter Email Id:</label>
                    <input type="email" required name="email" id="email" class="form-control">
                    <small class="text-danger" id="email-error"></small>
                </div>



                <div class="mb-3">
                    <label for="state" class="form-label">Select State:</label>
                    <select required name="state" id="state" class="form-select">
                        <option value="" disabled selected>Select State</option>
                        <option value="Andhra Pradesh">Andhra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <!-- Add more states as needed -->
                    </select>
                </div>

                <div class="mb-3">
                    <label for="city" class="form-label">Select City:</label>
                    <select required name="city" id="city" class="form-select">
                        <option value="" disabled selected>Select City</option>
                    </select>
                </div>



                <div class="mb-3">
                    <label for="pincode" class="form-label">Pincode:</label>
                    <input type="text" required name="pincode" id="pincode" class="form-control" pattern="\d{6}" maxlength="6">
                    <small class="text-danger" id="pincode-error"></small>
                </div>


                <button type="submit" class="btn btn-primary">Submit Data</button>
            </form>
        </div>

        <script>
            const emailInput = document.getElementById('email');
            const emailError = document.getElementById('email-error');

            emailInput.addEventListener('input', function() {
                const email = emailInput.value.trim();

                // Regular expression for basic email format validation
                const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/;

                if (!emailPattern.test(email)) {
                    emailError.textContent = 'Invalid email address. Please enter a valid email.';
                    emailInput.classList.add('is-invalid');
                } else {
                    emailError.textContent = '';
                    emailInput.classList.remove('is-invalid');
                }
            });
        </script>


        <script>
            const pincodeInput = document.getElementById('pincode');
            const pincodeError = document.getElementById('pincode-error');

            pincodeInput.addEventListener('input', function() {
                const pincode = pincodeInput.value.trim();

                if (!/^\d{6}$/.test(pincode)) {
                    pincodeError.textContent = 'Invalid Pincode. It must be a 6-digit number.';
                    pincodeInput.classList.add('is-invalid');
                } else {
                    pincodeError.textContent = '';
                    pincodeInput.classList.remove('is-invalid');
                }
            });
        </script>

        <script>
            const stateDropdown = document.getElementById('state');
            const cityDropdown = document.getElementById('city');

            // Define a map of states and their corresponding cities
            const citiesByState = {
                'Andhra Pradesh': ['Hyderabad', 'Visakhapatnam', 'Vijayawada'],
                'Arunachal Pradesh': ['Itanagar', 'Naharlagun'],
                'Assam': ['Guwahati', 'Jorhat', 'Silchar'],
                // Add more cities for other states as needed
            };

            stateDropdown.addEventListener('change', function() {
                const selectedState = stateDropdown.value;
                const cities = citiesByState[selectedState] || [];

                // Clear previous city options
                cityDropdown.innerHTML = '<option value="" disabled selected>Select City</option>';

                // Add new city options
                cities.forEach(function(city) {
                    const option = document.createElement('option');
                    option.value = city;
                    option.textContent = city;
                    cityDropdown.appendChild(option);
                });
            });
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    </body>


    </html>