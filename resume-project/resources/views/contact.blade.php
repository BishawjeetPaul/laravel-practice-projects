@extends('layout.layout')
@section('title', 'Contact|Page')
@section('content')
    <div class="container mt-2">
        <h1 class="text-warning mb-3 border-bottom">CONTACT US</h1>
        <div class="row text-white mb-5">
            <p class="mx-auto">Do you have any questions? Please do not hesitate to contact me or would you like to get in
                touch?
                Feel free to reach out to me using the contact form below.! I will come back as soon as possible.
            </p>
            <p class="mx-auto mb-5">Thank you for visiting my portfolio website, and I look forward to hearing from you!</p>
            <div class="col-sm-8">
                <!-- Contact form goes here -->
                <form action="#" method="POST">
                    @csrf
                    <div class="mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" class="form-control" id="name" name="name"
                            placeholder="Drop your name" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            placeholder="Drop your email id" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message</label>
                        <textarea class="form-control" id="message" name="message" placeholder="Drop your message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-warning">Submit</button>
                </form>
            </div>
            <div class="col-sm-4">
                <h4 class="text-warning mb-3 border-bottom">Contact Information</h4>
                <p><i class="fas fa-envelope"></i> Email: <a href="mailto:example@email.com">bishawjeet.8809@email.com</a>
                </p>
                <p><i class="fas fa-phone"></i> Phone: <a href="tel:+1234567890">+91 700 431 5164</a></p>
                <p><i class="fas fa-map-marker-alt"></i> Address: House No.3 , Dhanbad, Jharkhand</p>
            </div>
        </div>
    </div>
    <div class="text-center text-white mb-5">
        <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-facebook fa-2x"></i></a>
        <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-twitter fa-2x"></i></a>
        <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-linkedin fa-2x"></i></a>
        <a href="#" target="_blank" class="text-white mx-2"><i class="fab fa-github fa-2x"></i></a>
    </div>
@endsection
