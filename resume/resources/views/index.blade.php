<!--
 Author: W3layouts
 Author URL: http://w3layouts.com
 License: Creative Commons Attribution 3.0 Unported
 License URL: http://creativecommons.org/licenses/by/3.0/
-->



<!DOCTYPE html>
<html lang="en">

<!-- Head -->

<head>

    <title>LARAVEL DİNAMİK CV PROJESİ</title>

    <!-- Meta-Tags -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="keywords"
        content="Multi Tabs Resume Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- //Meta-Tags -->

    <!-- Custom-Style-Sheet -->
    <link rel="stylesheet" href="{{ asset('app') }}/css/style.css" type="text/css" media="all">
    <!-- //Custom-Style-Sheet -->

    <!-- Fonts -->
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" type="text/css"
        media="all">
    <link rel="stylesheet" href="//fonts.googleapis.com/css?family=Montserrat:400,700" type="text/css" media="all">
    <!-- //Fonts -->

    <!-- Default-JavaScript -->
    <script type="text/javascript" src="{{ asset('app') }}/js/jquery.min.js"></script>

</head>
<!-- //Head -->



<!-- Body -->

<body>

    <h1>LARAVEL CV PROJESİ</h1>

    <div class="containerw3layouts-agileits">

        <div id="verticalTab" class="resp-vtabs w3-agile" style="display: block; width: 100%; margin: 0px;">

            <ul class="resp-tabs-list agileits-w3layouts">
                <li class="resp-tab-item"><span>HAKKIMDA</span></li>
                <li class="resp-tab-item"><span>DENEYİMLER</span></li>
                <li class="resp-tab-item agileinfo"><span>EĞİTİM</span></li>
                <li class="resp-tab-item"><span>YETENEKLER</span></li>
                <li class="resp-tab-item"><span>İLETİŞİM</span></li>
            </ul>

            <div class="resp-tabs-container">

                <div class="resp-tab-content">
                    <div class="agileabout">
                        <div class="agileabout-image w3-agileits">
                            <img src="{{ asset('app') }}/images/man.jpg" alt="W3layouts">
                        </div>
                        <div class="agileabout-info">
                            <ul>


                                <li>
                                    <div class="li1">AD</div>
                                    <div class="li2">:</div>
                                    <div class="li3">{{ $about->name }}</div>
                                    <div class="clearfix"></div>
                                </li>

                                <li>
                                    <div class="li1">TELEFON</div>
                                    <div class="li2">:</div>
                                    <div class="li3">{{ $about->phone_number }}</div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="li1">EMAIL</div>
                                    <div class="li2 agileinfo">:</div>
                                    <div class="li3"><a class="mail"
                                            href="mailto:mail@example.com">{{ $about->email }}</a></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="li1">Website</div>
                                    <div class="li2">:</div>
                                    <div class="li3"><a href="#">{{ $about->website }}</a></div>
                                    <div class="clearfix"></div>
                                </li>
                                <li>
                                    <div class="li1 agileinfo">Adres</div>
                                    <div class="li2">:</div>
                                    <div class="li3 w3-agileits">{{ $about->address }}</div>
                                    <div class="clearfix wthree"></div>
                                </li>

                            </ul>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="work">
                        @foreach ($experience as $exp)
                            <div class="work-info agileits-w3layouts">
                                <h4>{{ $exp->job_start }} {{ $exp->job_finish ?? '-' }}</h4>
                                <h5>{{ $exp->company_name }}</h5>
                                <p>{{ $exp->job_description }} </p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="work w3-agileits">
                        @foreach ($education as $edu)
                            <div class="work-info">
                                <h4>{{ $edu->start_edu }} {{ $edu->end_edu ?? '-' }}</h4>
                                <h5>{{ $edu->school_name }}</h5>
                                <p>{{ $edu->school_description }}</p>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="our-skills">
                        @foreach ($skills as $s)
                            <div class="single-skill">
                                <p class="lead">{{ $s->name }}</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-1">{{ $s->skills_percent ?? '1' }}%</div>
                                </div>
                            </div>
                        @endforeach


                    </div>
                </div>

                <div class="resp-tab-content">
                    <div class="agileabout-info aitsabout">
                        <ul>


                            <li>
                                <div class="li1">AD</div>
                                <div class="li2">:</div>
                                <div class="li3">{{ $about->name }}</div>
                                <div class="clearfix"></div>
                            </li>

                            <li>
                                <div class="li1">TELEFON</div>
                                <div class="li2">:</div>
                                <div class="li3">{{ $about->phone_number }}</div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="li1">EMAIL</div>
                                <div class="li2 agileinfo">:</div>
                                <div class="li3"><a class="mail"
                                        href="mailto:mail@example.com">{{ $about->email }}</a></div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="li1">Website</div>
                                <div class="li2">:</div>
                                <div class="li3"><a href="#">{{ $about->website }}</a></div>
                                <div class="clearfix"></div>
                            </li>
                            <li>
                                <div class="li1 agileinfo">Adres</div>
                                <div class="li2">:</div>
                                <div class="li3 w3-agileits">{{ $about->address }}</div>
                                <div class="clearfix wthree"></div>
                            </li>

                        </ul>
                    </div>
                    <div class="clear"></div>
                    <div class="social-icons w3layouts agileits">
                        <h4>SOSYAL MEDYA HESAPLARIM</h4>
                        <ul>
                            @foreach ($social as $s)
                                <li class="fb w3ls w3layouts agileits"><a href="{{ $s->social_url }}">
                                        <span class="text w3layouts agileits">{{ $s->social_name }}</span></a></li>
                            @endforeach


                        </ul>
                    </div>
                </div>
                <div class="clear"></div>

            </div>
            <div class="clear w3-agile"></div>

        </div>

    </div>

    <div class="w3lsfooteragileits">
        <p> &copy; 2023 LARAVEL CV PROJESİ. All Rights Reserved | Design by <a href="http://ykakkaya.com"
                target="=_blank">ykakkaya</a></p>
    </div>



    <!-- Necessary-JavaScript-Files-&-Links -->

    <!-- Tabs-JavaScript -->
    <script src="{{ asset('app') }}/js/easyResponsiveTabs.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#horizontalTab').easyResponsiveTabs({
                type: 'default',
                width: 'auto',
                fit: true,
                closed: 'accordion',
                activate: function(event) {
                    var $tab = $(this);
                    var $info = $('#tabInfo');
                    var $name = $('span', $info);
                    $name.text($tab.text());
                    $info.show();
                }
            });
            $('#verticalTab').easyResponsiveTabs({
                type: 'vertical',
                width: 'auto',
                fit: true
            });
        });
    </script>
    <!-- //Tabs-JavaScript -->


    <!-- //Necessary-JavaScript-Files-&-Links -->



</body>
<!-- //Body -->

</html>
