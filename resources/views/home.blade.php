<x-app>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="home-content mt-5">
                            <div style="margin-bottom: 110px;">
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="d-flex justify-content-center">
                                            <img src="{{ asset('images/icons/iiClass.png') }}" class="img-fluid my-auto"
                                            style="width: 200px; height: 200px;"  alt="...">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="d-flex align-items-center">
                                            <div class="card-body">
                                                <h3 class="card-title">What is
                                                    <b>{{ config('app.name', 'A-Library') }}</b>?
                                                </h3>
                                                <p class="card-text">
                                                    {{ config('app.name', 'A-Library') }} Welcome to the Library! Discover a vast world of knowledge through our extensive book collection. Find new inspiration and develop your interests. We're here to support you on your learning journey.
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app>
