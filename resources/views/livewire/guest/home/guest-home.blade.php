<div>

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Home</h1>
                </div>

            </div>
        </div>
    </section>

    <section class="content">

        <div class="card card-solid">
            <div class="card-body">
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <h3 class="d-inline-block d-sm-none">Real-time Flood Monitroing Review</h3>
                        <div class="col-12">


                            <div class="container">
                                <div class="embed-responsive embed-responsive-16by9">
                                    <video id="my-video" class="embed-responsive-item video-js" controls preload="auto"
                                        data-setup="{}">
                                        <source src="http://192.168.1.238:8080" type="application/ogg">
                                    </video>
                                </div>
                            </div>
                            {{-- 
                            <video id="my-video" class="video-js" controls preload="auto" width="640" height="264"
                                controls data-setup="{}">
                                <source src="{{ Storage::disk('bin')->url('stream.m3u8') }}"
                                    type="application/x-mpegURL" />
                            </video> --}}

                        </div>
                    </div>
                    <div class="col-12 col-sm-6">

                        <h3 class="my-3">Real-time Flood Monitroing</h3>
                        <p>Kristong Hari Barangay Hall(Quezon City) 16th Street</p>
                        <hr>

                        <h3 class="my-3">FLOOD LEVEL COLOR CODE</h3>
                        <div class="row mt-2">
                            <div class="col-auto">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label style="width:100px;" class="btn btn-default text-center">
                                        <input type="radio" autocomplete="off">
                                        Red
                                        <br>
                                        <i class="fas fa-circle fa-4x text-red"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <label for="color_option_a4" class="ml-2">Advised to take appropriate action</label>
                            </div>
                        </div>


                        <div class="row mt-2">
                            <div class="col-auto">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label style="width:100px;" class="btn btn-default text-center">
                                        <input type="radio" autocomplete="off">
                                        Orange
                                        <br>
                                        <i class="fas fa-circle fa-4x text-orange"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <label for="color_option_a4" class="ml-2">Advised to be alert
                                    for possible flood, flash flood and landslides</label>
                            </div>
                        </div>

                        <div class="row mt-2">
                            <div class="col-auto">
                                <div class="btn-group btn-group-toggle" data-toggle="buttons">
                                    <label style="width:100px;" class="btn btn-default text-center active">
                                        <input type="radio" autocomplete="off" checked>
                                        Yellow
                                        <br>
                                        <i class="fas fa-circle fa-4x text-yellow"></i>
                                    </label>
                                </div>
                            </div>
                            <div class="col-auto align-self-center">
                                <label for="color_option_a4" class="ml-2">Advised to take Precautionary
                                    Measures</label>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="row mt-4">
                    <nav class="w-100">
                        <div class="nav nav-tabs" id="product-tab" role="tablist">
                            <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab"
                                href="#product-desc" role="tab" aria-controls="product-desc"
                                aria-selected="true">Emergency Hotlines</a>
                            <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab"
                                href="#product-comments" role="tab" aria-controls="product-comments"
                                aria-selected="false">Do's</a>
                            <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab"
                                href="#product-rating" role="tab" aria-controls="product-rating"
                                aria-selected="false">Don&rsquo;ts</a>
                        </div>
                    </nav>
                    <div class="tab-content p-3" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab">
                            <div class="row">
                                <div class="col">
                                    <ul class="list-unstyled">
                                        <ul class="list-unstyled">
                                            <li class="mt-2">Emergency Hotline:&nbsp;&nbsp;&nbsp;&nbsp;122</li>
                                            <li class="mt-2">Email
                                                Address:&nbsp;&nbsp;&nbsp;&nbsp;QCDRRMO@quezoncity.gov.phm</li>
                                            <li class="mt-2">Barangay Hall Contact
                                                Number(s):&nbsp;&nbsp;&nbsp;&nbsp;+63 920 525 6193                                                </li>
                                        </ul>
                                    </ul>
                                </div>
                                {{-- <div class="col-md-6">
                                    <ul class="list-unstyled">
                                        <li>Item 5</li>
                                        <li>Item 6</li>
                                        <li>Item 7</li>
                                        <li>Item 8</li>
                                    </ul>
                                </div> --}}
                            </div>
                        </div>

                        <div class="tab-pane fade" id="product-comments" role="tabpanel"
                            class="tab-pane fade show active" id="product-desc" role="tabpanel"
                            aria-labelledby="product-desc-tab">
                            <div class="row">
                                <div class="col">
                                    <ol>
                                        <li class="mt-3">Switch off electrical and gas appliances, and turn off
                                            services off at the mains.</li>
                                        <li class="mt-3">Carry your emergency kit and let your friends and family
                                            know where you are going.</li>
                                        <li class="mt-3">Avoid contact with flood water. It may be contaminated with
                                            sewage, oil, chemicals, or other substances. If you have to walk in standing
                                            water, use a pole or stick to ensure that you do not step into deep water,
                                            open manholes, or ditches.</li>
                                        <li class="mt-3">Stay away from power lines. Electrical current can travel
                                            through water. Report power lines that are down to the power company.</li>
                                        <li class="mt-3">Look before you step after a flood. The ground and floors
                                            are covered with debris, which may include broken bottles, sharp objects,
                                            nails, etc. Floors and stairs covered with mud and debris can be slippery.
                                            Listen to the radio or television for updates and information.</li>
                                        <li class="mt-3">If the ceiling is wet, shut off electricity. Place a bucket
                                            underneath the spot and poke a small hole into the ceiling to relieve the
                                            pressure.</li>
                                        <li class="mt-3">Use buckets, clean towels, and mops to remove as much of the
                                            water from the affected rooms as possible.</li>
                                        <li class="mt-3">Place sheets of aluminum foil between furniture and wet
                                            carpet.</li>
                                    </ol>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="product-rating" role="tabpanel"
                            aria-labelledby="product-rating-tab">
                            <div class="row">
                                <div class="col">
                                    <ol>
                                        <ol>
                                            <li class="mt-3">Don&rsquo;t walk through flowing water – currents can be
                                                deceptive, and shallow, fast-moving water can knock you off your feet.
                                            </li>
                                            <li class="mt-3">Don&rsquo;t swim through fast-flowing water – you may
                                                get swept away or struck by an object in the water.</li>
                                            <li class="mt-3">Don&rsquo;t drive through a flooded area – you may not
                                                be able to see abrupt drop-offs, and only half a meter of floodwater can
                                                carry a car away. Driving through floodwater can also cause additional
                                                damage to nearby property.</li>
                                            <li class="mt-3">Don&rsquo;t eat any food that has come into contact with
                                                floodwater.</li>
                                            <li class="mt-3">Don&rsquo;t reconnect your power supply until a
                                                qualified engineer has checked it. Be alert for gas leaks – do not smoke
                                                or use candles, lanterns, or open flames.</li>
                                            <li class="mt-3">Don&rsquo;t scrub or brush mud and other deposits from
                                                materials; this may cause further damage.</li>
                                            <li class="mt-3">Never turn on ceiling fixtures if the ceiling is wet.
                                                Stay away from ceilings that are sagging.</li>
                                            <li class="mt-3">Never use TVs, VCRs, CRT terminals, or other electrical
                                                equipment while standing on wet floors, especially concrete. Don&rsquo;t
                                                attempt to remove standing water using your vacuum cleaner.</li>
                                            <li class="mt-3">Don&rsquo;t remove standing water in a basement too
                                                fast. If the pressure is relieved too quickly, it may put undue stress
                                                on the walls.</li>
                                        </ol>

                                    </ol>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>


    </section>

</div>
