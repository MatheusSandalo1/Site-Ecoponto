@extends('layouts.site')

@section('titulo', 'Tipo')

@section('conteudo')
<div class="fundoBackground ">

    <p>Ecoponto Marília</p>

</div>

<div class="container">
    <div class=" d-grid gap-2 d-md-flex justify-content-md-end">
        <div class="tamaIcone">
            <a class="btn btn-outline-success " href="{{route("login.login")}}"> Login </a>

        </div>
    </div>
    <div class=" justify-content-center">
        <div class=" row ">

            <div class="col-md-8">
                <img id="img" src="/assets/img/huge .jpg" width="600px">

                <h4 class=" textoBranco2">
                    Transformando lixo em oportunidade, juntos protegemos o meio ambiente</h4>

            </div>
        </div>
    </div>
</div>
<div class="fundoBackground2 container">
    <div class=" row ">
        <div class="col-md-6">
            <img id="imgBorda" src="/assets/img/11-scaled.jpg" width="500px">
        </div>
        <div class="col-md-6">
            <div class="textoBanner">
                <h1 class="display-5"> O que são Ecopontos?</h1>
                <p class="leda text-end">Ecopontos são locais específicos onde as pessoas podem descartar de forma adequada os seus resíduos recicláveis e materiais orgânicos, permitindo que esses materiais possam ser reutilizados e reciclados. Eles são frequentemente usados ​em comunidades para promover práticas de sustentabilidade e ajudar a reduzir o impacto ambiental dos resíduos.</p>
            </div>
        </div>
    </div>
</div>

<section class="fundoBackground ">
    <div class="container ">
        <div class="container">

            <h2 class="fonteTitulo py-5">
                Locais de coleta</h2>
            <div class="row servico">
                <div class="col-md ">
                    <div class="fundoServico">
                        <h3>Ecoponto Zona sul</h3>
                        <h5>localização:<h5>
                                <p>Rua Joaquim Dias, bairro Nova Marília</p>
                                <h5>horário: </h5>
                                <p>Segunda a sexta, das 8:00 as 17:00
                                </p>
                                <h5> Materias que são coletado:</h5>
                                <p> Materiais variados que não podem ser descartados no lixo doméstico, como resíduos da construção civil, podas de árvores e sobras de jardinagem, madeiras, além de materiais de construção e resíduos recicláveis e reutilizáveis, que serão doados a famílias de catadores, promovendo a inclusão social. </p>
                    </div>
                </div>
                <div class="col-md ">
                    <div class="fundoServico ">
                        <h3>Ecoponto estaçao Centro da Cidade</h3>
                        <h5>localização:<h5>
                                <p>Antiga Estação do Trem - R. Paraná, 12 - Centro, Marília - SP, 17509-080</p>
                                <h5>horário: </h5>
                                <p>segunda a sexta, das 8:00 as 18:00</p>
                                <h5> Materias que são coletado:</h5>
                                <p> Pequenas proporções de entulho, restos de poda, móveis e estofados velhos, além de óleo de cozinha, papelão, plásticos e vidros. </p>

                    </div>
                </div>
                <div class="col-md ">
                    <div class="fundoServico ">
                        <h3>EcoPonto Zona leste</h3>

                        <h5>localização:<h5>
                                <h5>horário: </h5>
                                <h5> Materias que são coletado:</h5>
                    </div>
                </div>
                <div class="col-md ">
                    <div class="fundoServico ">
                        <h3>EcoPonto Zona Sul</h3>
                        <h5>localização:<h5>
                                <h5>horário: </h5>
                                <h5> Materias que são coletado:</h5>

                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
</section>
<h1>Como descartar corretamente os lixos </h1>

<div class="card-group fundoBackground">
    <div class="card fundoBackground2">
        <img src="/assets/img/lixo.jpg " class="card-img-top " alt="LIXO">
        <div class="card-body">
            <h5 class="card-title">Lixo Eletronico</h5>
            <p class="card-text"> A melhor forma de descartar o lixo eletrônico é participar de programas de reciclagem ou levar o material a empresas especializadas em descarte de resíduos eletrônicos.
                Antes de descartar ou doar o dispositivo, é importante remover todas as informações pessoais e garantir que baterias e aparelhos com líquidos sejam descartados de forma adequada para evitar danos ao meio ambiente e à saúde humana.</p>
        </div>
    </div>

    <div class="card fundoBackground2  ">
        <img src="/assets/img/oleo8.jpg" class="card-img-top  " alt="oleo">
        <div class="card-body c">
            <h5 class="card-title">Óleo Usado</h5>
            <p class="card-text">O descarte correto do óleo usado envolve armazená-lo em recipientes seguros, procurar programas de coleta ou empresas de reciclagem, ou doá-lo para reciclagem. Não jogue o óleo na pia ou no vaso sanitário, pois isso pode contaminar fontes de água.
                O descarte inadequado do óleo pode causar graves danos ambientais e à saúde humana.</p>

        </div>
    </div>
    <div class="card  fundoBackground2">
        <img src="/assets/img/plastico.jpg" class="card-img-top" alt="plastico">
        <div class="card-body">
            <h5 class="card-title">Plástico</h5>
            <p class="card-text">O que deve ser feito com o plástico antes de jogar no lixo?
                Para não agredir o meio ambiente, a melhor opção é separar os produtos plásticos do restante do lixo em sua casa.
                Para colaborar com a coleta seletiva, basta encaminhá-los até um dos Pontos de Entrega Voluntária (PEVs) e depositá-los na lixeira ou recipiente de cor azul.</p>

        </div>
    </div>

</div>

@endsection
