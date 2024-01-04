<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
  </head>
  <body>
    <div class="d-flex align-items-center justify-content-between">
        <h1 class="mb-0">Shoes</h1>
        <a href="/create" class="btn btn-primary">Add Shoes</a>
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
                <th>Jenis Sepatu</th>
                <th>Layanan</th>
                <th>No.Hp</th>
            </tr>
        </thead>
        <tbody>
                 @foreach($laundries as $l)
                    <tr>
                        <td class="align-middle">{{$l->nama}}</td>
                        <td class="align-middle">{{$l->jenis_sepatu}}</td>
                        <td class="align-middle">{{$l->layanan}}</td>
                        <td class="align-middle">{{$l->no_hp}}</td>
                        <td class="align-middle">
                            <div class="btn-group" role="group" aria-label="Basic example">
                                <a href="" type="button" class="btn btn-secondary">Detail</a>
                                <a href="" type="button" class="btn btn-warning">Edit</a>
                                <form action="" method="POST" type="button" class="btn btn-danger p-0" onsubmit="return confirm('Delete?')">
                                    @csrf
                                    @method('DELETE')
                                    <a href="{{route('destroy',$l->id)}}">Delete</a>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </body>
    </html>
