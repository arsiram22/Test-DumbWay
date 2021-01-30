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
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">data sekolah </h4>
                            <a href="{{route('school.create') }}" class="btn btn-primary">tambah</a>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                @foreach($school as $s)
                                <div class="col-xs-12 col-sm-6 col-md-4">
                                    <div class="image-flip" ">
                                        <div class="mainflip">
                                            <div class="frontside">
                                                <div class="card" >
                                                    <div class="card-body text-center">
                                                        <p><img class=" img-fluid" src="{{ $s->logo_school }}"  alt="card image"></p>
                                                        <h4 class="card-title">{{ $s->name_school }}</h4>
                                                        <p class="card-text">{{ $s->status_school }}</p>
                                                        <a href="{{ route('school.show',$s->id) }}" class="btn btn-primary">Detail</a>
                                                        <a href="{{ route('school.edit',$s->id) }}" class="btn btn-warning">Edit</a>
                                                        <a href="{{ route('school.destroy',$s->id) }}" class="btn btn-danger">Hapus</a>


                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

</body>
</html>
