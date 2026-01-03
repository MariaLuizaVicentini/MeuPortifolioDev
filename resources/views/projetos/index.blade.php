@extends('layout')

@section('meus-projetos')
<section id="projetos" class="py-5">  
    <div class="container">  
        <h2 class="text-center mb-5">Esses são meus pojetos</h2>  
        <div class="row g-4">  

            <div class="col-md-6 col-lg-4">  
                <div class="card h-100">  
                    <img src="{{ asset('img\projetos.jpg') }}" class="card-img-top" alt="Projeto 1">  
                    <div class="card-body">  
                        <h5 class="card-title">CONTROLE DE SÉRIES</h5>  
                        <p class="card-text">Desenvolvido em laravel com Bootstrap e PHP. </p>  
                        <a href="https://github.com/MariaLuizaVicentini/controle-series" class="btn btn-primary">Ver Detalhes</a>  
                    </div>  
                </div>  
            </div>  

            <div class="col-md-6 col-lg-4">  
                <div class="card h-100">  
                    <img src="{{ asset('img\projetos.jpg') }}" class="card-img-top" alt="Projeto 1">  
                    <div class="card-body">  
                        <h5 class="card-title">COTAÇÃO - BANCO CENTRAL</h5>  
                        <p class="card-text">Aplicação em PHP que consome dados da API do Banco Central para obter a cotação atual do dólar e converter valores digitados em tempo real.</p>  
                        <a href="https://github.com/MariaLuizaVicentini/CotacaoBancoCentral" class="btn btn-primary">Ver Detalhes</a>  
                    </div>  
                </div>  
            </div> 

            <div class="col-md-6 col-lg-4">  
                <div class="card h-100">  
                    <img src="{{ asset('img\projetos.jpg') }}" class="card-img-top" alt="Projeto 2">  
                    <div class="card-body">  
                        <h5 class="card-title">SITE - BARBEARIA</h5>  
                        <p class="card-text">O projeto foi desenvolvido para se adaptar a diferentes tamanhos de tela, garantindo uma experiência agradável tanto em computadores quanto em dispositivos móveis.</p>  
                        <a href="https://github.com/MariaLuizaVicentini/barbeariaAlura" class="btn btn-primary">Ver Detalhes</a>  
                    </div>  
                </div>  
            </div>  

            <div class="col-md-6 col-lg-4">  
                <div class="card h-100">  
                    <img src="{{ asset('img\projetos.jpg') }}" class="card-img-top" alt="Projeto 3">  
                    <div class="card-body">  
                        <h5 class="card-title">AUTOMAÇÃO WEB - PYTHON</h5>  
                        <p class="card-text">Este projeto demonstra a implementação de um script básico em Python para automação web utilizando a biblioteca Selenium. </p>  
                        <a href="https://github.com/MariaLuizaVicentini/AutomacaoWeb-Python" class="btn btn-primary">Ver Detalhes</a>  
                    </div>  
                </div>  
            </div>
        </div>  
    </div>  
</section>  
@endsection