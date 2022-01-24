@extends('layouts.app')
@section('title', 'ABOUT')
@section('content', )
<section id="about">
    <div class="container">
        <div class="row mb-5">
            <div class="col text-center">
                <h2>About</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-9">
                <img src="{{asset('img/music_studio_3-wallpaper-1280x720.jpg')}}" height="500" width="700" alt="">
            </div>
            <div class="col-md-3 card">
                <img src="{{asset('picture/profile.jpg')}}" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Profile</h5>
                    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><i class="fab fa-facebook text-black mr-3"></i>facebook</li>
                    <li class="list-group-item"><i class="fab fa-instagram text-black mr-3"></i>instagram</li>
                    <li class="list-group-item"><i class="fab fa-google-plus text-black mr-3"></i>Email</li>
                </ul>

            </div>
        </div>
    </div>
</section>
<section id="portofolio" class="portofolio bg-light pb-5">
    <div class="container">
        <div class="row mb-4 pt-4">
            <div class="col text-center">
                <h2>Portofolio</h2>
            </div>
        </div>

        <div class="row mb-5 justify-content-center">
            <div class="col-md">
                <div class="card">
                    <a href="#">
                        <img src="{{asset('img/music_in_a_slate-wallpaper-1280x720.jpg')}}" class="card-img-top" alt="...">
                        <div class="modal" tabindex="-1">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">Modal title</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Modal body text goes here.</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        <button type="button" class="btn btn-primary">Save changes</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="{{asset('img/music_in_a_slate-wallpaper-1280x720.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="{{asset('img/music_in_a_slate-wallpaper-1280x720.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mb-5">
            <div class="col-md">
                <div class="card">
                    <img src="{{asset('img/music_in_a_slate-wallpaper-1280x720.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="{{asset('img/music_in_a_slate-wallpaper-1280x720.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
            <div class="col-md">
                <div class="card">
                    <img src="{{asset('img/music_in_a_slate-wallpaper-1280x720.jpg')}}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@stop
@section('js')

<script>
    $(document).ready(function() {

        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');
        });

    });
</script>
@endsection