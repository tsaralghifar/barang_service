@extends('layouts.admin_layout')
@section('content')
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
                    <th>{{$unit->name}}</th>
                    <td>{{$unit->laptop}}</td>
                    <td>{{$unit->keterangan}}</td>
                    <td>{{$unit->kelengkapan}}</td>
                    <td>{{$unit->status_barang}}</td>
                    <td>{{$unit->biaya}}</td>
                    <td>{{$unit->status_bayar}}</td>
                    <td>
                        
                                <button type="button" data-toggle="modal" data-target="#printModal" class="btn btn-primary btn-sm">
                                    <i class="fa fa-edit"></i>
                                </button>
                                
                            
                                <form action="" method="" class="d-inline">
                                
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash"></i>
                                    </button>
                                </form>

                                {{-- Modal --}}
                                <div class="modal fade" id="printModal" tabindex="-1" role="dialog" aria-labelledby="printLabel" aria-hidden="true">
                                  <div class="modal-dialog">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="printLabel">Print Data</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <form action="">
                                        <div class="modal-body">
                                          <div class="form-group row">
                                            <label class="col-sm-3">Keterangan</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="keterangan" name="keterangan">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3">Status Barang</label>
                                            <div class="col-sm-9">
                                              <select name="status_barang" class="form-control" required>
                                                <option value="">-Pilih-</option>
                                                <option value="1" >On Going</option>
                                                <option value="2" >Selesai</option>
                                              </select>
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3">Biaya</label>
                                            <div class="col-sm-9">
                                              <input type="text" class="form-control" id="biaya" name="biaya">
                                            </div>
                                          </div>
                                          <div class="form-group row">
                                            <label class="col-sm-3">Status Bayar</label>
                                            <div class="col-sm-9">
                                              <select name="status_bayar" class="form-control" required>
                                                <option value="">-Pilih-</option>
                                                <option value="1" >Belum Dibayar</option>
                                                <option value="2" >Lunas</option>
                                              </select>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="modal-footer">
                                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                          <button type="submit" class="btn btn-primary">Save</button>
                                        </div>
                                      </form>
                                    </div>
                                  </div>
                                </div>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
        </div>
    </main>
@endsection
