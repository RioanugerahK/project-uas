<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>make your order</title>
    <!-- Add Bootstrap CSS link here -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h1 class="mb-3">make your order</h1>
        <hr />

        <form action="" method="POST">
            @csrf

            <div class="form-row mb-3">
                <div class="col-md-4">
                    <label for="nama">Nama</label>
                    <input type="text" name="nama" class="form-control" placeholder="Nama">
                </div>
                <div class="col-md-4">
                    <label for="jenis_sepatu">Shoes Material</label>
                    <input type="text" name="jenis_sepatu" class="form-control" placeholder="Shoes Material">
                </div>
                <div class="col-md-4">
                    <label for="alamat">Address</label>
                    <input type="text" name="alamat" class="form-control" placeholder="Address">
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col-md-4">
                    <label for="layanan">Layanan</label>
                    <select id="layanan" name="layanan" class="form-control">
                        <option selected>Layanan</option>
                        <option value="Fast Cleaning">Fast Cleaning</option>
                        <option value="Fast Cleaning">Deep Cleaning</option>
                        <option value="Fast Cleaning">Special Cleaning</option>
                    </select>
                </div>

                <div class="col-md-4">
                    <label for="layanan_tambahan">Layanan Tambahan</label>
                    <select id="layanan_tambahan" name="layanan_tambahan" class="form-control">
                        <option selected>Layanan Tambahan</option>
                        <option value="Unyellowing">Unyellowing - 35K</option>
                        <option value="Reglue">Reglue - 40K</option>
                        <option value="Repaint">Repaint - 50K</option>
                    </select>
                </div>

                <div class="col-md-2">
                    <label for="tanggal_pickup">Pick-up Date</label>
                    <input type="date" id="tanggal_pickup" name="tanggal_pickup" class="form-control">
                </div>

                <div class="col-md-2">
                    <label for="waktu_pickup">Pick-up Time</label>
                    <input type="time" id="waktu_pickup" name="waktu_pickup" class="form-control">
                </div>
            </div>

            <div class="form-row mb-3">
                <div class="col-md-4">
                    <label for="no_hp">No. Hp</label>
                    <input class="form-control" name="no_hp" placeholder="No. Hp">
                </div>
            </div>

            <div class="form-row">
                <div class="col-md-4">
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
