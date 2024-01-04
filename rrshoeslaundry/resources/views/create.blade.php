<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Shoes</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-0">Add Shoes</h1>
        <hr />
        <form action="" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col">
                    <input type="text" name="jenis_sepatu" class="form-control" placeholder="Jenis Sepatu">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <select id="Layanan" name="layanan" class="form-select" placeholder="Layanan">
                        <option selected>Layanan</option>
                        <option value="Fast Cleaning">Fast Cleaning</option>
                        <option value="Special Cleaning">Special Cleaning</option>
                        <option value="Deep Cleaning">Deep Cleaning</option>
                    </select>
                </div>
                <div class="col">
                    <input class="form-control" name="no_hp" placeholder="No. Hp">
                </div>
            </div>
            <div class="row">
                <div class="d-grid">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>

    <!-- Add Bootstrap JS and Popper.js before closing </body> tag -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
