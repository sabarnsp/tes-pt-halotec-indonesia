@extends('layout.main')

@section('container')

                <section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                            <div class="form-group row">
                                                <label class="col-lg-4">Nama Ibu</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->nama_ibu }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Usia Ibu</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->usia_ibu }} Tahun
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Usia Kehamilan</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->usia_kehamilan }} Bulan
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Gender Bayi</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->gender_bayi }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Panjang Bayi</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->panjang_bayi }} CM
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Berat Bayi</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->panjang_bayi }} KG
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Tanggal persalinan</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->tanggal_persalinan }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Jam persalinan</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->jam_persalinan }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Proses Partus</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->proses_partus}}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Kondisi Bayi</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->kondisi_bayi}}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Alamat Rumah</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->alamat }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Nama Ayah</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->nama_ayah }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">No Telp Darurat</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->no_telefon_darurat }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4">Anak Keberapa</label>
                                                <div class="col-lg-8">
                                                    <strong>
                                                        {{ $pasien->anak_ke_berapa }}
                                                    </strong>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                   <a class="btn btn-danger" href="/pasien">Cancel</a>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

@endsection