 <div class="container my-5">
            <div class="row justify-content-center">
                <div class="col-10">
                    <div class="card">
                        <div class="card-header">
                        </div>
                        <div class="card-body">
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
