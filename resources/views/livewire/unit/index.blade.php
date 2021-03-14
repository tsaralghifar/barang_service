
@section('contents')
    <main>
        <div class="container-fluid">
            <h1 class="mt-4">List</h1>
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item"><a href="">Dashboard</a></li>
                <li class="breadcrumb-item active">List</li>
            </ol>
            <table class="table table-bordered">
                <thead class="table-dark">
                  <tr>
                    <th scope="col">Nama</th>
                    <th scope="col">Laptop</th>
                    <th scope="col">Keterangan</th>
                    <th scope="col">Kelengkapan</th>
                    <th scope="col">Status Barang</th>
                    <th scope="col">Biaya</th>
                    <th scope="col">Status Bayar</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                   @foreach ($units as $unit)
                  <tr>
                    <th scope="row">{{$unit->name}}</th>
                    <td>{{$unit->laptop}}</td>
                    <td>{{$unit->keterangan}}</td>
                    <td>{{$unit->kelengkapan}}</td>
                    <td>{{$unit->status_barang}}</td>
                    <td>{{$unit->biaya}}</td>
                    <td>{{$unit->status_bayar}}</td>
                    <td>
                        
                                <a href="" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </a>
                            
                                <form action="" method="" class="d-inline">
                                
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </main>
@endsection
