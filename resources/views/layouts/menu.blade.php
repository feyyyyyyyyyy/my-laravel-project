<!DOCTYPE html>
<html>
<head>
    <title>Home - My Laravel Project</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">My Laravel Project</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm d-flex justify-content-center align-items-center" style="height: 200px; font-size:50px; color:aliceblue;">Products</a>
    <a href="{{ route('categories.index') }}" class="btn btn-info btn-sm d-flex justify-content-center align-items-center" style="height: 200px; font-size:50px; color:aliceblue;">Categories</a>
    <a href="{{ route('branches.index') }}" class="btn btn-success btn-sm d-flex justify-content-center align-items-center" style="height: 200px; font-size:50px; color:aliceblue;">Branches</a>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>