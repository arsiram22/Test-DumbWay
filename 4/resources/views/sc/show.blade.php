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
                        </div>
                        <div class="card-body">
                            <p><img class=" img-fluid" src="" alt="card image"></p>

                            <div class=" row">
                           <p class="col-sm-3">NPSN</p>
                           <div class="col-sm-9">
                               {{ $school->npsn }}
                            </div>
                        </div>
                        <div class="row">
                           <p class="col-sm-3">Alamat</p>
                           <div class="col-sm-9">
                               {{ $school->address }}
                            </div>
                        </div>
                        <div class="row">
                           <p class="col-sm-3">Level</p>
                           <div class="col-sm-9">
                               {{ $school->school_level }}
                            </div>
                        </div>
                        <div class="row">
                           <p class="col-sm-3">Status</p>
                           <div class="col-sm-9">
                               {{ $school->status_school }}
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>


</body>
</html>
