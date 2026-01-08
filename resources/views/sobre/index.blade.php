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
                            Sou estudante de Gestão de TI na PUC Campinas e estudo programação de forma contínua desde o início de 2024. Atualmente trabalho como QA, testando funcionalidades e APIs, o que me permite ter uma visão crítica sobre qualidade de software, regras de negócio e comportamento das aplicações.
                            <br /><br />
                            Minha trajetória na área de tecnologia teve início com manutenção de computadores, evoluiu para suporte técnico em uma empresa de software e, hoje, me aproxima diariamente do desenvolvimento, com foco especial em back-end. Essa vivência prática me trouxe familiaridade com ambientes de produção, resolução de problemas e colaboração com times técnicos..
                             <br /><br />
                            Tenho aprendizado rápido e estou em constante evolução, convivendo com desenvolvedores e participando ativamente da troca de conhecimento. 
                        </p>  
                </div>  
            </div>  
        </div>  
    </section>
@endsection