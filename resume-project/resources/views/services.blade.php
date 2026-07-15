@extends('layout.layout')
@section('title', 'Portfolio|Page')
@section('content')
    <div class="container mt-2">
        <h1 class="text-warning mb-3 border-bottom">MY SERVICES</h1>

        <div class="row text-white mb-5">
            <p class="mx-auto">
                I provide modern, responsive, and scalable web development solutions that help
                individuals, startups, and businesses establish a strong online presence.
                My goal is to deliver high-quality applications with clean code, excellent
                performance, and an outstanding user experience.
            </p>

            <p class="mx-auto mb-5">
                Below are some of the services I offer to help bring your ideas to life.
            </p>

            <!-- Web Development -->
            <div class="col-md-6 mb-4 service-card slide-up">
                <div class="card bg-dark border-warning h-100 service-box responsive-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-laptop-code me-2"></i>
                            Web Development
                        </h4>
                        <p class="text-white">
                            Custom websites and web applications built with modern technologies
                            such as Laravel, Django, Bootstrap, JavaScript, HTML, and CSS.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Responsive Design -->
            <div class="col-md-6 mb-4 service-card slide-left">
                <div class="card bg-dark border-warning h-100 service-box responsive-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-mobile-alt me-2 mobile-icon"></i>
                            Responsive Design
                        </h4>
                        <p class="text-white">
                            Mobile-friendly and fully responsive websites that provide an
                            excellent user experience across desktops, tablets, and smartphones.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Backend -->
            <div class="col-md-6 mb-4 service-card slide-right">
                <div class="card bg-dark border-warning h-100 service-box backend-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-database me-2 backend-icon"></i>
                            Backend Development
                        </h4>
                        <p class="text-white">
                            Secure backend development including database design, REST APIs,
                            authentication, authorization, and business logic implementation.
                        </p>
                    </div>
                </div>
            </div>

            <!-- E-Commerce -->
            <div class="col-md-6 mb-4 service-card zoom-card">
                <div class="card bg-dark border-warning h-100 service-box ecommerce-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-shopping-cart me-2 cart-icon"></i>
                            E-Commerce Solutions
                        </h4>
                        <p class="text-white">
                            Development of complete e-commerce websites with product management,
                            shopping cart, order management, payment integration, and user authentication.
                        </p>
                    </div>
                </div>
            </div>

            <!-- API -->
            <div class="col-md-6 mb-4 service-card rotate-card">
                <div class="card bg-dark border-warning h-100 service-box api-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-code me-2 code-icon"></i>
                            API Development
                        </h4>
                        <p class="text-white">
                            RESTful API development and third-party API integration using
                            Laravel and Django REST Framework.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Maintenance -->
            <div class="col-md-6 mb-4 service-card bounce-card">
                <div class="card bg-dark border-warning h-100 service-box maintenance-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-tools me-2 tools-icon"></i>
                            Website Maintenance
                        </h4>
                        <p class="text-white">
                            Ongoing website maintenance, bug fixing, performance optimization,
                            security updates, and feature enhancements.
                        </p>
                    </div>
                </div>
            </div>

            <!-- cloud hosting -->
            <div class="col-md-6 mb-4 service-card cloud-card">
                <div class="card bg-dark border-warning h-100 service-box cloud-hosting-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-cloud me-2 cloud-icon"></i>
                            Cloud Hosting
                        </h4>
                        <p class="text-white">
                            Deployment and hosting of web applications on cloud platforms
                            such as AWS, Heroku, and DigitalOcean for scalability and reliability.
                        </p>
                    </div>
                </div>
            </div>

            <!-- Database Management -->
            <div class="col-md-6 mb-4 service-card database-card">
                <div class="card bg-dark border-warning h-100 service-box database-management-card">
                    <div class="card-body">
                        <h4 class="text-warning">
                            <i class="fas fa-database me-2 database-icon"></i>
                            Database Management
                        </h4>
                        <p class="text-white">
                            Database design, optimization, and management using MySQL, PostgreSQL,
                            and MongoDB for efficient data storage and retrieval.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center text-white mb-5">
        <h4 class="text-warning mb-3">Why Choose Me?</h4>

        <p>
            ✔ Clean & Maintainable Code &nbsp; | &nbsp;
            ✔ Responsive Design &nbsp; | &nbsp;
            ✔ Secure Applications &nbsp; | &nbsp;
            ✔ Fast Performance &nbsp; | &nbsp;
            ✔ Client Satisfaction
        </p>

        <a href="{{ route('contact') }}" class="btn btn-warning mt-3">
            Hire Me
        </a>
    </div>
@endsection
