 <?php

$a =1 ; 
$jumlah_bayi = count($pasien);
$lahir_sehat = count($lahir_sehat);
$lahir_cacat = count($lahir_cacat);
$lahir_meninggal = count($lahir_meninggal);
$lahir_laki_laki = count($lahir_laki_laki);
$lahir_perempuan = count($lahir_perempuan);
$lahir_normal = count($lahir_normal);
$lahir_dibantu = count($lahir_dibantu);
$lahir_caesar = count($lahir_caesar);
$lahir_waterbirth = count($lahir_waterbirth);

 ?>

 @extends('layout.main')

 @section('container')

                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi yang lahir</div>
                                        <div class="stat-digit">{{ $jumlah_bayi }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir sehat</div>
                                        <div class="stat-digit">{{ $lahir_sehat }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir cacat</div>
                                        <div class="stat-digit">{{ $lahir_cacat }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir meninggal</div>
                                        <div class="stat-digit">{{ $lahir_meninggal }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah Bayi laki-laki</div>
                                        <div class="stat-digit">{{ $lahir_laki_laki }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah Bayi perempuan</div>
                                        <div class="stat-digit">{{ $lahir_perempuan }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir normal</div>
                                        <div class="stat-digit">{{ $lahir_normal }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir dibantu</div>
                                        <div class="stat-digit">{{ $lahir_dibantu }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir caesar</div>
                                        <div class="stat-digit">{{ $lahir_caesar }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Jumlah bayi lahir waterbirth</div>
                                        <div class="stat-digit">{{ $lahir_waterbirth }} Bayi</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Rata-rata usia kehamilan</div>
                                        <div class="stat-digit">{{ round($usia_kehamilan) }} Bulan</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="card">
                                <div class="stat-widget-one">
                                    <div class="stat-content dib">
                                        <div class="stat-text">Report.....</div>
                                        <div class="stat-digit">{{ $start }} - {{ $end }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
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
                                                    <th>Kondisi Bayi</th>
                                                    <th>Alamat</th>
                                                    <th>Nama Ayah</th>
                                                    <th>No Telp darurat</th>
                                                    <th>Anak Keberapa</th>
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
                                                    <td>{{ $pasien->kondisi_bayi }}</td>
                                                    <td>{{ $pasien->alamat }}</td>
                                                    <td>{{ $pasien->nama_ayah }}</td>
                                                    <td>{{ $pasien->no_telefon_darurat }}</td>
                                                    <td>{{ $pasien->anak_ke_berapa }}</td>
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