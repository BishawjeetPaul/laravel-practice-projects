@extends('layout.layout')
@section('title', 'Portfolio|Page')
@section('content')
    <div class="container mt-3">

        <h1 class="text-warning border-bottom pb-2 mb-5">
            MY RESUME
        </h1>

        <div class="row">

            <!-- Education -->

            <div class="col-lg-6">

                <div class="resume-card reveal">

                    <div class="resume-icon">
                        <i class="fas fa-graduation-cap"></i>
                    </div>

                    <h3 class="text-warning">Education</h3>

                    <div class="timeline">

                        <div class="timeline-item">
                            <span>2020 - 2023</span>
                            <h5>Bachelor of Computer Applications</h5>
                            <p>XYZ University</p>
                        </div>

                        <div class="timeline-item">
                            <span>2023 - Present</span>
                            <h5>Full Stack Web Development</h5>
                            <p>Laravel • Django • JavaScript</p>
                        </div>

                    </div>

                </div>

            </div>

            <!-- Experience -->

            <div class="col-lg-6">

                <div class="resume-card reveal">

                    <div class="resume-icon">
                        <i class="fas fa-briefcase"></i>
                    </div>

                    <h3 class="text-warning">Experience</h3>

                    <div class="timeline">

                        <div class="timeline-item">

                            <span>2023 - Present</span>

                            <h5>Python / Laravel Developer</h5>

                            <p>

                                ✔ REST API Development<br>
                                ✔ Django & Laravel Projects<br>
                                ✔ MySQL Database Design<br>
                                ✔ Responsive UI Development

                            </p>

                        </div>

                    </div>

                </div>

            </div>

        </div>

        <!-- Statistics -->

        <div class="row mt-5 text-center">

            <div class="col-md-3">

                <div class="stat-card">

                    <h1 class="counter" data-target="25">0</h1>

                    <p>Projects</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-card">

                    <h1 class="counter" data-target="15">0</h1>

                    <p>Happy Clients</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-card">

                    <h1 class="counter" data-target="10">0</h1>

                    <p>Technologies</p>

                </div>

            </div>

            <div class="col-md-3">

                <div class="stat-card">

                    <h1 class="counter" data-target="3">0</h1>

                    <p>Years Learning</p>

                </div>

            </div>

        </div>

        <div class="text-center mt-5">

            <a href="#" class="btn btn-warning btn-lg px-5 resume-btn">

                <i class="fas fa-download me-2"></i>

                Download Resume

            </a>

        </div>

    </div>
@endsection
