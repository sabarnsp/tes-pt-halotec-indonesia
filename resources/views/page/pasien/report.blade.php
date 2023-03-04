@extends('layout.main')

@section('container')

				<section id="main-content">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-validation">
                                        <form class="form-valide" action="/pasienreport" method="post" enctype="multipart/form-data">
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