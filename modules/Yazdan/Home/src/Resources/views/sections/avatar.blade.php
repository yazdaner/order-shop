<section class="bg-profile d-table w-100 bg-primary" style="background: url('{{asset('assets/images/account/bg.png')}}') center center;background-color: #5d72b957 !important;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card public-profile border-0 rounded shadow" style="z-index: 1;">
                    <div class="card-body">
                        <div class="row align-items-center">
                            <div class="col-lg-2 col-md-3 text-md-start text-center">
                                <img src="{{auth()->user()->getImage(300)}}" class="avatar avatar-large rounded-circle shadow d-block mx-auto" alt="">
                            </div>

                            <div class="col-lg-10 col-md-9">
                                <div class="row align-items-end">
                                    <div class="col-md-7 text-md-start text-center mt-4 mt-sm-0">
                                        <h3 class="title mb-0">{{auth()->user()->name ?? auth()->user()->username}}</h3>
                                        <small class="text-muted h6 me-2">کاربر</small>
                                        <ul class="list-inline mb-0 mt-3">
                                            <li class="list-inline-item me-2"><a href="javascript:void(0)" class="text-muted" title="آیدی"><i data-feather="instagram" class="fea icon-sm me-2"></i>{{auth()->user()->username}}</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <form action="{{route('users.updatePhoto')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="mt-3 text-md-start text-center d-sm-flex">
                                    <div class="mt-md-4 mt-3 mt-sm-0">
                                        <label class="btn btn-primary mt-2" for="file">
                                            تغییر تصویر
                                        </label>
                                        <input name="image" type="file" accept="image/*" class="d-none" id="file" onchange="this.form.submit()">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!--ed container-->
</section>
