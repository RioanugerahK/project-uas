<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1 class="mb-0">Edit Shoes</h1>
    <hr />
    <form action="" method="POST">
        @csrf
        @method('PUT')
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama" value="" >
            </div>
            <div class="col mb-3">
                <label class="form-label">Jenis Sepatu</label>
                <input type="text" name="jenis_sepatu" class="form-control" placeholder="Jenis Sepatu" value="" >
            </div>
        </div>
        <div class="row">
            <div class="col mb-3">
                <label class="form-label">Layanan</label>
                <input type="text" name="layanan" class="form-control" placeholder="Layanan" value="" >
            </div>
            <div class="col mb-3">
                <label class="form-label">No. Hp</label>
                <input class="form-control" name="no_hp" placeholder="No. Hp" value="" >
            </div>
        </div>
        <div class="row">
            <div class="d-grid">
                <button class="btn btn-warning">Update</button>
            </div>
        </div>
    </form>
</body>
</html>
