<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1 class="mb-0">Add Shoes</h1>
    <hr />
    <form action="" method="POST">
        @csrf
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="name" class="form-control" placeholder="Nama">
            </div>
            <div class="col">
                <input type="text" name="jenis_sepatu" class="form-control" placeholder="Jenis Sepatu">
            </div>
        </div>
        <div class="row mb-3">
            <div class="col">
                <input type="text" name="layanan" class="form-control" placeholder="Layanan">
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
    </body>
</html>
