<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
        <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                            <h4>Tambah Data</h4>
                        </div>
                        <div class="card-body">
                            <form action="{{ url("/school/{$school->id}") }}" method="put">
                                @csrf
                                    <div class="form-group">
                                      <label for="">Nama Sekolah</label>
                                      <input type="text" class="form-control" placeholder="masukan nama sekolah" name="name" value="{{ $school->name_school }}">
                                      {{-- <small id="helpId" class="text-muted error">Help text</small> --}}
                                    </div>
                                     <div class="form-group">
                                      <label for="">NPSN</label>
                                      <input type="text" class="form-control" placeholder="masukan NPSN" name="npsn" value="{{ $school->npsn }}">
                                      {{-- <small id="helpId" class="text-muted error">Help text</small> --}}
                                    </div>
                                     <div class="form-group">
                                      <label for="">Alamat</label>
                                      <textarea name="address" class="form-control" cols="3">{{ $school->address }}</textarea>
                                      {{-- <small id="helpId" class="text-muted error">Help text</small> --}}
                                    </div>
                                     <div class="form-group">
                                      <label for="">Level</label>
                                      <input type="text" class="form-control" placeholder="masukan level" name="level" value="{{ $school->school_level }}">
                                      {{-- <small id="helpId" class="text-muted error">Help text</small> --}}
                                    </div>
                                     <div class="form-group">
                                      <label for="">Status</label>
                                      <input type="text" class="form-control" placeholder="masukan status" name="status" value=" {{ $school->status_school }}">
                                      {{-- <small id="helpId" class="text-muted error">Help text</small> --}}
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</body>
</html>
