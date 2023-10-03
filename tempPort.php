<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Time Traveler's Hub</title>
    <!-- Link to Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-ui/4.12.3/core.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>

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

    <div class="container-fluid">



        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 mx-auto">
                        <div class="text-center">
                            <p class="lead">Fictional Briefing: Discover the thrill of time travel as you journey through different historical eras.</p>
                            <p>Disclaimer: This website is purely fictional and designed for entertainment.</p>
                        </div>
                    </div>
                </div>
                <div class="row mt-4">
                    <div class="col-md-8 offset-md-2 text-center">
                        <h2>Choose an Era to Explore</h2>
                        <div class="btn-group-vertical">
                            <a href="ancient_rome.php" class="btn btn-dark btn-lg mb-2">Ancient Rome</a>
                            <a href="victorian_era.php" class="btn btn-dark btn-lg mb-2">Victorian Era</a>
                            <a href="futuristic_space.php" class="btn btn-dark btn-lg mb-2">Futuristic Space Colonies</a>
                        </div>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-4 offset-md-4 text-center">
                        <div class="dial-circle">
                            <div class="dial-pointer"></div>
                        </div>
                    </div>
                </div>
            </div>
        </main>

        <main class="py-4">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 offset-md-2 text-center">
                        <?php
                        if ($_SERVER["REQUEST_METHOD"] === "POST") {
                            $name = $_POST["name"];
                            $age = $_POST["age"];
                            $contact = $_POST["contact"];
                            echo "<p>Hi $name,</p>";
                            echo "<p>Your data has been successfully fed into our system.</p>";
                            echo "<p>We will reach you at $contact.</p>";
                        } else {
                            echo "<p>No data submitted.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </main>



        <footer class="bg-dark text-white text-center py-3">
            <p>&copy; 2023 Time Traveler's Hub. All rights reserved.</p>
        </footer>
    </div>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>