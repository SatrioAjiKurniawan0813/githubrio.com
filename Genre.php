<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film Genre</title>
    <!-- Bootstrap CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        body {
            background: url('path/to/as/belajar bootstrap/as/oppenbom.jpg') no-repeat center center fixed;
            background-size: cover;
            color: #fff;
        }

        .genre-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
            margin: 20px;
        }

        .genre-card {
            width: 30%;
            margin-bottom: 20px;
            background-color: rgba(0, 0, 0, 0.7);
            border: 1px solid #fff;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.3s ease-in-out;
        }

        .genre-card:hover {
            transform: scale(1.05);
        }

        .genre-card img {
            width: 100%;
            height: auto;
        }
    </style>
</head>
<body>

    <header class="text-center">
        <h1>Film Genre</h1>
    </header>

    <div class="container genre-container">
        <div class="card genre-card">
            <img src="path/to/action-genre.jpg" alt="Action Genre">
            <div class="card-body">
                <h2 class="card-title">Action</h2>
            </div>
        </div>

        <div class="card genre-card">
            <img src="path/to/drama-genre.jpg" alt="Drama Genre">
            <div class="card-body">
                <h2 class="card-title">Drama</h2>
            </div>
        </div>

        <div class="card genre-card">
            <img src="path/to/comedy-genre.jpg" alt="Comedy Genre">
            <div class="card-body">
                <h2 class="card-title">Comedy</h2>
            </div>
        </div>

        <!-- Add more genre cards as needed -->

    </div>

    <!-- Bootstrap JS and Popper.js from CDN (Add these at the end of your body) -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-ZfMJSktjYO9F7tDO7U4T2BEv7Zd6cTsca5+F8FfYbz35lN6HGiETJ9Qq24hyZH/6g" crossorigin="anonymous"></script>

</body>
</html>