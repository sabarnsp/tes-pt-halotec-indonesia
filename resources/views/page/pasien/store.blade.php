@extends('layout.main')

@section('container')

				<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="/pasien" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama_ibu">Nama Ibu</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="nama_ibu" name="nama_ibu" placeholder=" Nama Ibu.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="usia_ibu">Usia Ibu (Tahun)</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="usia_ibu" name="usia_ibu" placeholder=" Usia Ibu.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="usia_kehamilan">Usia Kehamilan (Bulan)</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="usia_kehamilan" name="usia_kehamilan" placeholder=" Usia Kehamilan.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="gender_bayi">Gender Bayi</label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="gender_bayi" name="gender_bayi" style="width: 100%;" data-placeholder="Pilih satu.." required>
                                                        <option value="">== Pilih Satu ==</option>
                                                        <option value="laki-laki">Laki-laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="panjang_bayi">Panjang Bayi (CM)</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="panjang_bayi" name="panjang_bayi" placeholder="Panjang Bayi.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="berat_bayi">Berat Bayi (KG)</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="berat_bayi" name="berat_bayi" placeholder=" Berat Bayi.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="tanggal_persalinan">Tanggal persalinan</label>
                                                <div class="col-lg-8">
                                                    <input type="date" class="form-control" id="tanggal_persalinan" name="tanggal_persalinan" placeholder=" Tanggal Persalinan.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="jam_persalinan">Jam persalinan</label>
                                                <div class="col-lg-8">
                                                    <input type="time" class="form-control" id="jam_persalinan" name="jam_persalinan" placeholder=" Jam Persalinan.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="proses_partus">Proses Partus</label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="proses_partus" name="proses_partus" style="width: 100%;" data-placeholder="Pilih satu.." required>
                                                        <option value="">== Pilih Satu ==</option>
                                                        <option value="normal">Normal</option>
                                                        <option value="dibantu alat">Dibantu alat</option>
                                                        <option value="caesar">Caesar</option>
                                                        <option value="waterbirth">Waterbirth</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="kondisi_bayi">Kondisi Bayi</label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="kondisi_bayi" name="kondisi_bayi" style="width: 100%;" data-placeholder="Pilih satu.." required>
                                                        <option value="">== Pilih Satu ==</option>
                                                        <option value="sehat">Sehat</option>
                                                        <option value="cacat">Cacat</option>
                                                        <option value="meninggal">Meninggal</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="alamat">Alamat Rumah</label>
                                                <div class="col-lg-8">
                                                    <textarea class="form-control" id="alamat" name="alamat" rows="15" placeholder="Isikan Alamat..." required></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="nama_ayah">Nama Ayah</label>
                                                <div class="col-lg-8">
                                                    <input type="text" class="form-control" id="nama_ayah" name="nama_ayah" placeholder=" Nama Ayah.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="no_telefon_darurat">No Telp Darurat</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="no_telefon_darurat" name="no_telefon_darurat" placeholder=" No Telp Darurat.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="anak_ke_berapa">Anak Keberapa</label>
                                                <div class="col-lg-8">
                                                    <input type="number" class="form-control" id="anak_ke_berapa" name="anak_ke_berapa" placeholder=" Anak Keberapa.." required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <div class="col-lg-8 ml-auto">
                                                    <button type="submit" class="btn btn-primary">Submit</button> or
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