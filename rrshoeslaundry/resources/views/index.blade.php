<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <title>CheckOut</title>
    <link
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
  </head>
  <body>
    <div class="container">
      @if(request('success'))
      <div class="alert alert-success" role="alert">
        Checkout berhasil! Terima kasih atas pesanan Anda.
      </div>
      @endif
      <div class="d-flex align-items-center justify-content-between mb-4">
        <h1 class="mb-0">Daftar Pesanan Anda</h1>
      </div>
      <hr />
      @if(Session::has('success'))
      <div class="alert alert-success" role="alert">
        {{ Session::get('success') }}
      </div>
      @endif
      <table class="table table-hover">
        <thead class="table-primary">
          <tr>
            <th>#</th>
            <th>Nama</th>
            <th>Bahan Sepatu</th>
            <th>Alamat</th>
            <th>Layanan</th>
            <th>Tanggal PickUp</th>
            <th>Waktu PickUp</th>
            <th>No.Hp</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody>
          @foreach($laundries as $l)
          <tr>
            <td class="align-middle">{{$l->id}}</td>
            <td class="align-middle">{{$l->nama}}</td>
            <td class="align-middle">{{$l->jenis_sepatu}}</td>
            <td class="align-middle">{{$l->alamat}}</td>
            <td class="align-middle">{{$l->layanan}}</td>
            <td class="align-middle">{{$l->tanggal_pickup}}</td>
            <td class="align-middle">{{$l->waktu_pickup}}</td>
            <td class="align-middle">{{$l->no_hp}}</td>
            <td class="align-middle">
              <div class="btn-group" role="group" aria-label="Basic example">
                <form action="{{ route('destroy', $l->id ) }}" method="POST" class="m-0"
                  onsubmit="return confirm('Delete?')">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger">Delete</button>
                </form>
              </div>
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
      <a href="/create1" class="btn btn-primary">Buat Pesanan Baru</a>
      <a href="/pricing" class="btn btn-primary" onclick="showAlert()">Checkout Pesanan</a>
    </div>
    <script
      src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
      integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
      integrity="sha384-GC1E8X5lKo7MOh5V4460vA5vIGlPzynJ0yn7j1HE4Wt1B6Vbh7cGZSUyD9xkixfo"
      crossorigin="anonymous"
    ></script>
    <script
      src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
      integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8sh+EmmCaoQt6jkkFqy3lLVpJ7B5qBkahB8BT9"
      crossorigin="anonymous"
    ></script>

    <script>
      function showAlert() {
        alert('Terima kasih, pesanan Anda telah dibuat!');
      }
    </script>
  </body>
</html>
