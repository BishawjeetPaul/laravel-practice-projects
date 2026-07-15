@extends('layout.layout')
@section('title', 'Skills|Page')
@section('content')
    <div class="container mt-3">

        <h1 class="text-warning border-bottom pb-2 mb-5">
            MY SKILLS
        </h1>

        <div class="row">

            <!-- Left Side -->
            <div class="col-lg-6">

                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-html5 text-danger me-2"></i>
                            HTML5
                        </span>

                        <span class="text-warning counter" data-target="95">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-danger skill-progress" data-width="95"></div>
                    </div>

                </div>


                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-css3-alt text-primary me-2"></i>
                            CSS3
                        </span>

                        <span class="text-warning counter" data-target="90">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-primary skill-progress" data-width="90"></div>
                    </div>

                </div>


                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-js text-warning me-2"></i>
                            JavaScript
                        </span>

                        <span class="text-warning counter" data-target="85">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-warning skill-progress" data-width="85"></div>
                    </div>

                </div>


                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-bootstrap text-info me-2"></i>
                            Bootstrap
                        </span>

                        <span class="text-warning counter" data-target="95">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-info skill-progress" data-width="95"></div>
                    </div>

                </div>

            </div>

            <!-- Right Side -->

            <div class="col-lg-6">

                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-laravel text-danger me-2"></i>
                            Laravel
                        </span>

                        <span class="text-warning counter" data-target="90">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-danger skill-progress" data-width="90"></div>
                    </div>

                </div>


                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-python text-success me-2"></i>
                            Django / Python
                        </span>

                        <span class="text-warning counter" data-target="92">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-success skill-progress" data-width="92"></div>
                    </div>

                </div>


                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fas fa-database text-info me-2"></i>
                            MySQL
                        </span>

                        <span class="text-warning counter" data-target="90">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-info skill-progress" data-width="90"></div>
                    </div>

                </div>


                <div class="skill-item mb-4">

                    <div class="d-flex justify-content-between">
                        <span class="text-white">
                            <i class="fab fa-git-alt text-warning me-2"></i>
                            Git & GitHub
                        </span>

                        <span class="text-warning counter" data-target="85">0%</span>
                    </div>

                    <div class="progress mt-2">
                        <div class="progress-bar bg-warning skill-progress" data-width="85"></div>
                    </div>

                </div>

            </div>

        </div>

        <!-- Technology Cards -->

        <div class="row mt-5">

            <div class="col-md-3 col-6 mb-4">
                <div class="tech-card">
                    <i class="fab fa-html5"></i>
                    <h5>HTML5</h5>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="tech-card">
                    <i class="fab fa-css3-alt"></i>
                    <h5>CSS3</h5>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="tech-card">
                    <i class="fab fa-laravel"></i>
                    <h5>Laravel</h5>
                </div>
            </div>

            <div class="col-md-3 col-6 mb-4">
                <div class="tech-card">
                    <i class="fab fa-python"></i>
                    <h5>Django</h5>
                </div>
            </div>

        </div>

    </div>
@endsection