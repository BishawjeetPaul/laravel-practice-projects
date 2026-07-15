@extends('layout.layout')
@section('title', 'Home|Page')

@section('content')
    <div class="mt-5">
        <div class="text-center">
            <img src="{{ asset('images/photo1.jpg') }}" alt="" class="img-thumbnail" width="250px" height="150px">
        </div>
        <div class="mt-5 text-white mx-5 text-justify">
            <h1 class="fw-bold st-font mb-3">Hello,</h1>

            <div class="px-4" style="line-height: 1.8;">
                <p class="mb-3" style="text-indent: 80px;">
                    I am <b class="text-warning">Bishwajeet Paul</b>, a passionate web developer with a strong focus on
                    creating dynamic and
                    user-friendly web applications. With a solid foundation in front-end and back-end technologies, I strive
                    to deliver
                    seamless digital experiences that meet the needs of users and businesses alike.
                    My journey in web development has been driven by a curiosity for technology and a desire to solve
                    complex problems.
                    I enjoy collaborating with cross-functional teams to bring innovative ideas to life, and I am always
                    eager to learn and
                    adapt to the ever-evolving landscape of web development.
                </p>

                <p class="mb-3" style="text-indent: 80px;">
                    In addition to my <b class="text-warning">technical skills</b>, I am a strong advocate for clean code,
                    best practices, and continuous improvement.
                    I believe that effective communication and a user-centric approach are key to building successful web
                    applications that
                    leave a lasting impact. I am excited to contribute my expertise and creativity to projects that
                    challenge me and allow me to
                    grow as a developer.
                </p>

                <p class="mb-0" style="text-indent: 80px;">
                    Thank you for visiting my portfolio. I look forward to <b class="text-warning">connecting with you and
                        exploring</b>
                    opportunities to collaborate on exciting web development projects and <b class="text-warning">build
                        meaningful relationships.</b>
                </p>
            </div>
        </div>
        <div class="text-center">
            <a href="{{ route('contact') }}" class="btn btn-outline-warning mx-4 my-4">Contact Me</a>
            <a href="{{ route('contact') }}" class="btn btn-outline-info">Hire Me</a>
            <br>
        </div>
    </div>
@endsection
