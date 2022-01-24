@extends('layouts.app')
@section('title', 'Contact')
@section('content', )
<section id="contact" class="contact mb-5">
    <div class="container">
        <div class="row pt-4 mb-4">
            <div class="col text-center">
                <h2>Contact</h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <div class="card border-primary mb-3 text-center">
                    <!-- <div class="card-header">Header</div> -->
                    <div class="card-body text-primary">
                        <h5 class="card-title">Contact Our GRUOP</h5>
                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                    </div>
                </div>
                <ul class="list-gruop">
                    <li class="list-group-item">Location</li>
                    <li class="list-group-item">My Office</li>
                    <li class="list-group-item">Jl bandung</li>
                    <li class="list-group-item">West Java</li>
                </ul>
            </div>
            <div class="col-lg-6">
                <form action="">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" class="form-control" id="name">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="text" class="form-control" id="email">
                    </div>
                    <div class="form-group">
                        <label for="alamat">Address</label>
                        <input type="text" class="form-control" id="alamat">
                    </div>
                    <div class="form-group">
                        <label for="nope">Phone Number</label>
                        <input type="text" class="form-control" id="nope">
                    </div>
                    <div class="form-group">
                        <label for="message">Message</label>
                        <textarea name="message" class="form-control" id="message"></textarea>
                    </div>
                    <div class="form-group">
                        <button type="button" class="btn btn-primary">Send!</button>
                    </div>
                </form>
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