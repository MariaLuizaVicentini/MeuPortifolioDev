@extends('layout')

@section('sobre-mim')
    <section id="sobre" class="py-5">  
        <div class="container">  
            <div class="row align-items-center">  
                <div class="col-lg-6">  
                    <img src=" {{ asset('img/perfil.jpeg') }} " class="img-fluid rounded w-75" alt="Sobre Mim">  
                </div>  
                <div class="col-lg-6">  
                    <h2>Sobre Mim</h2>  
                        <p>
                            Tenho 22 anos e estudo programação desde o início de 2024. Atualmente curso Gestão de TI na PUC Campinas e atuo como QA, testando funcionalidades e APIs. Minha trajetória começou em manutenção de computadores, passou pelo suporte técnico em uma empresa de software e hoje me aproxima diariamente do desenvolvimento.
                            <br /><br />
                            Aprendo de forma autônoma e consistente, convivo com desenvolvedores que compartilham conhecimento e busco constantemente evoluir. Meu objetivo é conquistar minha primeira oportunidade como desenvolvedora.
                        </p>  
                </div>  
            </div>  
        </div>  
    </section>
@endsection