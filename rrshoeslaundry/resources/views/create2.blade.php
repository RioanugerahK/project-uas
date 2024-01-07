<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Add Shoes For Spesial Cleaning</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-0">Add Shoes For Spesial Cleaning</h1>
        <hr />
        <form action="" method="POST">
            @csrf
            <div class="row mb-3">
                <div class="col">
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col">
                    <input type="text" name="jenis_sepatu" class="form-control" placeholder="Shoes Material">
                </div>
                <div class="col">
                    <input type="text" name="alamat" class="form-control" placeholder="Address">
                </div>
            </div>
            <div class="row mb-3">
                <div class="col">
                    <select id="Layanan Tambahan" name="layanan" class="form-select" placeholder="Layanan Tambahan">
                        <option selected>Layanan Tambahan</option>
                        <option value="Fast Cleaning">Unyellowing - 35K</option>
                        <option value="Special Cleaning">Reglue - 40K</option>
                        <option value="Deep Cleaning">Repaint - 50K</option>
                    </select>
                </div>
            <label for="tanggal_pickup" class="col-form-label col">Pick-up Date</label>
            <div class="col">
                <input type="date" id="tanggal_pickup" name="tanggal_pickup" class="form-control">
            </div>
            <label for="waktu_pickup" class="col-form-label col">Pick-up Time</label>
            <div class="col">
                <input type="time" id="waktu_pickup" name="waktu_pickup" class="form-control">
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
