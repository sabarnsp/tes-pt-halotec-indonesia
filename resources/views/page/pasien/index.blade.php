 <?php $a =1 ; ?>

 @extends('layout.main')

 @section('container')

                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="col-lg-3">
                                    <a href="/pasienstore" class="btn btn-primary">Create</a>
                                </div>
                                <br>
                                <div class="bootstrap-data-table-panel">
                                    <div class="table-responsive">
                                        <table id="bootstrap-data-table-export" class="table table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>No</th>
                                                    <th>Nama Ibu</th>
                                                    <th>Usia Ibu (Tahun)</th>
                                                    <th>Usia Kehamilan (Bulan)</th>
                                                    <th>Gender Bayi</th>
                                                    <th>Panjang Bayi (CM)</th>
                                                    <th>Berat Bayi (KG)</th>
                                                    <th>Tanggal Persalinan</th>
                                                    <th>Jam Persalinan</th>
                                                    <th>Proses Partus</th>
                                                    <th><center>Action Detail</center></th>
                                                    <th><center>Action Update</center></th>
                                                    <th><center>Action Delete</center></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach($pasien as $pasien)
                                                <tr>
                                                    <td>{{ $a++ }}</td>
                                                    <td>{{ $pasien->nama_ibu }}</td>
                                                    <td>{{ $pasien->usia_ibu }}</td>
                                                    <td>{{ $pasien->usia_kehamilan }}</td>
                                                    <td>{{ $pasien->gender_bayi }}</td>
                                                    <td>{{ $pasien->panjang_bayi }}</td>
                                                    <td>{{ $pasien->berat_bayi }}</td>
                                                    <td>{{ $pasien->tanggal_persalinan }}</td>
                                                    <td>{{ $pasien->jam_persalinan }}</td>
                                                    <td>{{ $pasien->proses_partus }}</td>
                                                    <td>
                                                        <a href="pasien/{{$pasien->id}}" class="btn btn-success">Detail</a>
                                                    </td>
                                                    <td>
                                                        <a href="pasienupdate/{{$pasien->id}}" class="btn btn-warning">Update</a>
                                                    </td>
                                                    <td>
                                                        <a href="pasiendelete/{{$pasien->id}}" class="btn btn-danger" onclick="return confirm('yakin ingin menghapus data ini.?')">Delete</a>
                                                    </td>
                                                </tr>
                                                @endForeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection