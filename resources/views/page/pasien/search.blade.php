@extends('layout.main')

@section('container')

				<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="/pasiensearch" method="post" enctype="multipart/form-data">
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="param1">Field</label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="param1" name="param1" style="width: 100%;" data-placeholder="Pilih satu.." required>
                                                        <option value="">== Pilih Satu ==</option>
                                                        <option value="kondisi_bayi">Kondisi Bayi</option>
                                                        <option value="gender_bayi">Gender bayi</option>
                                                        <option value="usia_ibu">Usia Ibu</option>
                                                        <option value="proses_partus">Proses Partus</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="param2">Value</label>
                                                <div class="col-lg-8">
                                                    <select class="js-select2 form-control" id="param2" name="param2" style="width: 100%;" data-placeholder="Pilih satu.." required>
                                                        <option value="">== Pilih Satu ==</option>
                                                        <option></option>

                                                        <option value="">== Kondisi Bayi ==</option>
                                                        <option value="sehat">Sehat</option>
                                                        <option value="cacat">Cacat</option>
                                                        <option value="meninggal">Meninggal</option>
                                                        <option></option>

                                                        <option value="">== Gender bayi ==</option>
                                                        <option value="laki-laki">Laki-laki</option>
                                                        <option value="perempuan">Perempuan</option>
                                                        <option></option>

                                                        <option value="">== Usia Ibu ==</option>
                                                        @foreach($pasien as $pasien)
                                                        <option value="{{ $pasien->usia_ibu }}">{{ $pasien->usia_ibu }} Tahun</option>
                                                        @endforeach
                                                        <option></option>

                                                        <option value="">== Proses Partus ==</option>
                                                        <option value="normal">Normal</option>
                                                        <option value="dibantu_alat">Dibantu alat</option>
                                                        <option value="caesar">Caesar</option>
                                                        <option value="waterbirth">Waterbirth</option>
                                                        <option></option>

                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="start"> Start</label>
                                                <div class="col-lg-8">
                                                    <input type="date" class="form-control" id="start" name="start" required>
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-lg-4 col-form-label" for="end">End</label>
                                                <div class="col-lg-8">
                                                    <input type="date" class="form-control" id="end" name="end" required>
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