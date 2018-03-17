@extends('shared.masterPage')
@section('title', trans('default.generic.title'))

@section('content')
    <!-- <div id="contetLeaderIndex" style="display: none;" data-bind="visible: true"> -->
        
        <header class="masthead text-center text-white d-flex">
            <div class="container my-auto">
                <div class="row">
                    <div class="col-lg-10 mx-auto">
                        <h4 class="text-uppercase">
                            <strong>{{trans('default.welcome.career')}}</strong>
                        </h4>
                        <hr>
                    </div>
                    <div class="col-lg-8 mx-auto">
                        <p class="text-faded mb-5">{{trans('default.welcome.description')}}</p>
                        <a class="btn btn-primary btn-xl js-scroll-trigger" href="#about">{{trans('default.welcome.find-out-more')}}</a>
                    </div>
                </div>
            </div>
        </header>

        <section class="bg-primary" id="about">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading text-white">{{trans('default.welcome.knowledge')}}</h2>
                        <hr class="light my-4">
                        <ul class="text-white" style="list-style-type: none;">
                            <li>Laravel</li>
                            <li>CodeIgniter</li>
                            <li>Knockout</li>
                            <li>Mysql</li>
                            <li>Jquery</li>
                            <li>Html</li>
                            <li>Css</li>
                            <li>Javascript</li>
                            <li>Gulp</li>
                            <li>Atendimento ao cliente</li>
                            <li>Manutenção de Computadores</li>
                        </ul>
                        <a class="btn btn-light btn-xl js-scroll-trigger" href="#services">{{trans('default.welcome.my-information')}}</a>
                    </div>
                </div>
            </div>
        </section>

        <section id="services">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <h2 class="section-heading">{{trans('default.welcome.studies')}}</h2>
                        <hr class="my-4">
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-graduation-cap text-primary mb-3 sr-icons"></i>
                            <h5 class="mb-3">Bacharel em Sistemas de Informação</h5>
                            <p class="text-muted mb-0">Participei de maratonas de programação, visitas técnicas e apresentação de melhor projeto interdiciplinar.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-leanpub text-primary mb-3 sr-icons"></i>
                            <h5 class="mb-3">Técnica em Informática pra internet</h5>
                            <p class="text-muted mb-0">Desenvolvimento do site do curso e montagem do laboratório de informática.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-newspaper-o text-primary mb-3 sr-icons"></i>
                            <h5 class="mb-3">Alura</h5>
                            <p class="text-muted mb-0">Atualizações sobre novas técnicas e ferramentas de desenvolvimento.</p>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 text-center">
                        <div class="service-box mt-5 mx-auto">
                            <i class="fa fa-4x fa-heart text-primary mb-3 sr-icons"></i>
                            <h5 class="mb-3">Podcasts</h5>
                            <p class="text-muted mb-0">Por diversão e para me mandar informada na correria do dia a dia.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-dark text-white">
            <div class="container text-center">
                <h2 class="mb-4">{{trans('default.welcome.download-curriculum')}}</h2>
                <a class="btn btn-light btn-xl sr-button" href="/download-curriculum">{{trans('default.welcome.download-now')}}</a>
            </div>
        </section>

        <section id="contact">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 mx-auto text-center">
                        <h2 class="section-heading">{{trans('default.welcome.lets-get-in-touch')}}</h2>
                        <hr class="my-4">
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-2 ml-auto text-center">
                        <i class="fa fa-phone fa-3x mb-3 sr-contact"></i>
                        <p>+55 19 9 8334-6273</p>
                    </div>
                    <div class="col-lg-2 mr-auto text-center">
                        <i class="fa fa-envelope-o fa-3x mb-3 sr-contact"></i>
                        <p>
                            <a href="mailto:laiane.hermes@gmail.com">laiane.hermes@gmail.com</a>
                        </p>
                    </div>
                    <div class="col-lg-2 ml-auto text-center">
                        <i class="fa fa-skype fa-3x mb-3 sr-contact"></i>
                        <p>laianehermes</p>
                    </div>
                    <div class="col-lg-2 ml-auto text-center">
                        <i class="fa fa-linkedin fa-3x mb-3 sr-contact"></i>
                        <p>
                            <a href="http://www.linkedin.com/in/laianehermes" target="_blanck">laianehermes</a>
                        </p>
                    </div>
                    <div class="col-lg-2 ml-auto text-center">
                        <i class="fa fa-github fa-3x mb-3 sr-contact"></i>
                        <p>
                            <a href="https://github.com/laianehermes" target="_blanck">laianehermes</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
        
    <!-- </div> -->
@stop