@extends('site/template')

@section('content')

        <section class="container-full" id="o-husky">
            <div class="container o-husky">
                <div class="o-husky__header">
                    <h2>ORIGEM E HISTÓRIA DA RAÇA</h2>
                    <p>O Husky Siberiano é uma raça que tem origem na Sibéria, Rússia, na pré-história. A tribo nômade conhecida como Chukchi, foi responsável pela criação dos primeiros cachorros dessa raça, que na época já eram usados para o trabalho puxando trenós e para a caça.
                    </p>
                </div>
                <div class="o-husky__content">
                    <article>
                      <div class="destaque-article">
                        <img src="{{asset('/assets/images/padreadores.jpg') }}" alt="{{ config('app.name', 'Canil Canavans') }}">
                      </div>
                      <div class="conteudo-article">
                        <h2>Destaque</h2>
                        <p>
                        Resistentes, rústicos e cheios de energia, os Huskies desembarcaram no Canadá em 1909 para disputar corridas de trenó. Logo se espalharam pelo Alasca, onde essas corridas eram comuns e se assemelhavam às corridas de cavalos. Os percursos chegavam até 600 km e os Huskies Siberianos sempre se destacavam por sua velocidade e resistência.
                    </p> 
                    <p>A raça foi reconhecida em 1930 oficialmente pela American Kennel Club (AKC) e com isso, começou a se tornar cão de estimação de diversas famílias pelo mundo. Até hoje as maiores concentrações de Husky Siberiano se encontram no Ártico, onde seguem desenvolvendo suas funções de trabalho.
                    </p>
                    <h2>Temperamento e Saúde</h2>
                        <p>Divertido, aventureiro, alerta, independente, inteligente, teimoso, travesso e obstinado. Tudo isso descreve o Husky Siberiano. Essa raça adora correr sempre que pode. Geralmente se dá bem com outros cães da casa. Na verdade, ele é um cão muito social que precisa da companhia de outros cães ou de seres humanos. Ele pode caçar gatos ou gado. Alguns uivam, cavam e roem.
                        </p>
                        <p>Principais Preocupações: nenhuma Preocupações Menores: Atrofia Progressiva da Retina, distiquíase, catarata, opacidades corneanas Vistos Ocasionalmente: displasia de quadril glaucoma Exames sugeridos: olhos (quadril) Expectativa de Vida: 11-13 anos</p>
                      </div>
                    </article>
                    <article>
                      <div class="conteudo-article">
                        <h2>Características físicas</h2>
                        <p>Ignorem o olhar sério e com aspecto de bravo do Husky Siberiano. Por trás da fisionomia deles, os cãezinhos são amigáveis, brincalhões e totalmente família. Com o porte robusto, os pets possuem o rosto arredondado e as orelhas eretas, curtas e pontudas. Os olhos podem ser azuis, castanhos ou um de cada cor (heterocromia).
                        </p>
                        <p>A paleta de cores dos pelos é a mais variada: vai do preto ao branco puro. Por ser uma raça específica para a vida na neve, as patas possuem pelos entre os dedos para proteger a sola. A cauda se mantém em pé quando o cão está atento e abaixa quando ele está em descanso ou em trabalho.</p>
                        <h2>Personalidade</h2>

                        <p>Extremamente brincalhões, os Huskys adoram ter alguém por perto para brincar com eles. Amigáveis, eles não medem carinho para pessoas ou outros cachorros. Por isso, um dos principais pontos da personalidade deles é o apego à família.</p>
                        <p>Atléticos, eles adoram gastar toda a energia que possuem. Isso faz com que os tutores tenham cuidado para que o pet não “fuja” buscando espaço para correr e se divertir. Outro ponto forte da personalidade desses pets é a sua independência, demandando pouca atenção do tutor no quesito cuidados.</p>
                        <p>Personalidade que tem exceções à regra e que é importante sempre trabalhar socialização e adestramento de forma correta.</p>
                      </div>
                      <div class="destaque-article">
                        <img src="{{asset('/assets/images/matrizes.png') }}" alt="{{ config('app.name', 'Canil Canavans') }}">
                      </div>
                    </article>

                </div>
            </div>
        </section>

 
        <section id="husky">
            <div class="container-full filhote">
                <div class="container filhote__content flex">
                    <h2>QUERO TER UM HUSKY</h2>                
                    <x-button.button-action link="{{route('contato')}}" title="{{ config('app.name', 'Canil Canavans') }} - Meu Filhote de Husky Siberiano" conteudo="MEU FILHOTE" />
                </div>
            </div>
        </section>

        <section id="estrelas" class="container-full">
            <div class="estrela estrelas__header">
                <h2>NOSSAS ESTRELAS</h2>
                <p>Qualidade sempre foi nosso foco, e podemos dizer que temos os filhotes mais lindos que você pode encontrar 
                    com procedencia genética sendo filhotes de campeões.
                </p>
            </div>
            <div class="estrelas__content">
                <div class="card card__padreadores">
                    <a href="{{route('nossas-estrelas')}}" title="{{ config('app.name', 'Canil Canavans') }} | Padreadores">
                        <div class="card__content">
                            <h2>PADREADORES</h2>
                            <span>SAIBA +</span>
                        </div> 
                    </a>
                </div>
                <div class="card card__matrizes">
                    <a href="{{route('nossas-estrelas')}}" title="{{ config('app.name', 'Canil Canavans') }} | Matrizes">
                        <div class="card__content">
                            <h2>MATRIZES</h2>
                            <span>SAIBA +</span>
                        </div> 
                    </a>
                </div>
                <div class="card card__filhotes">
                   <a href="{{route('filhotes')}}" title="{{ config('app.name', 'Canil Canavans') }} | Filhotes">
                        <div class="card__content">
                            <h2>FILHOTES</h2>
                            <span class="lato-thin">SAIBA +</span>
                        </div> 
                    </a>
                </div>
            </div>
        </section>

        <section id="contato" class="container-full contato flex">
            <div class="contato__formulario">
                <form action="">
                    <div class="contato__formulario--title-form">
                        <h3>Dados Pessoais</h3>
                    </div>
                    <div class="form-group">
                      <x-form.input-text id="name" name="name" placeholder="Nome:" />
                      <select name="moradia" id="moradia" class="form-divisor">
                            <option value="">Apartamento</option>
                            <option value="" selected>Casa</option>
                            <option value="">Chacara</option>
                        </select>
                      
                      </div>
                       
                        <x-form.input-email id="email" name="email" placeholder="E-mail:" />
                 
                        <div class="form-group">
                          <x-form.input-text id="telefone" name="telefone" placeholder="Telefone:" />
                          <x-form.input-text id="idade" name="idade" placeholder="Idade:" />
                        </div>
                        
                        

                    <div class="contato__formulario--title-form">
                        <h3>Dados Profissionais</h3>   
                    </div> 

                    <input type="text" id="empresa " name="empresa" value="" required placeholder="Empresa:">
                    <input type="profissao" id="profissao" name="profissao" value="" required placeholder="Profissão:">
                    <select name="salario" id="">
                            <option value="">0 - 1.000</option>
                            <option value="" selected>1.000 - 3.000</option>
                            <option value="">3.000 - 5.000</option>
                            <option value="">acima de 5.000</option>
                    </select>

                    <div class="contato__formulario--title-form">
                        <h3>Sobre o Filhote</h3>   
                    </div> 
                    <div class="form-group">
                    <select name="sexo" id="" class="form-divisor">
                        <option value="" selected>Macho</option>
                        <option value="">Femea</option>
                        <option value="">Casal</option>
                    </select>
                    <select name="ate-quantos-dias" id="" class="form-divisor">
                        <option value="" selected>Até 90 dias</option>
                        <option value="">Até 180 dias</option>
                        <option value="">Até 12 Meses</option>
                        <option value="">Acima de 12 Meses</option>
                    </select>

                    
                    </div>
                    <button class="button button_small button_small--primary m5" type="submit"> Enviar</button>



                </form>
            </div>
            <div class="contato__parceiros">
                <div class="parceiros__title">
                    <h3>Parceiros</h3>
                </div>
                <div class="parceiros__content parceiros__content--galery ">
                    <a href="#" title="{{ config('app.name', 'Canil Canavans') }} | Parceiro CBKC" target="_blank"><img src="./assets/images/cbkc.png" alt="{{ config('app.name', 'Canil Canavans') }} | Parceiros"></a>
                    <a href="#" title="{{ config('app.name', 'Canil Canavans') }} | Parceiro CBKC" target="_blank"><img src="./assets/images/cbkc.png" alt="{{ config('app.name', 'Canil Canavans') }} | Parceiros"></a>
                    <a href="#" title="{{ config('app.name', 'Canil Canavans') }} | Parceiro CBKC" target="_blank"><img src="./assets/images/cbkc.png" alt="{{ config('app.name', 'Canil Canavans') }} | Parceiros"></a>
                </div>
                <div class="parceiros__title">
                    <h3>Vantagens</h3>
                </div>
                <div class="parceiros__content">
                    <ul>
                        <li>Vacina(1º dose de V8 importada)</li>
                        <li>Vermifugação</li>
                        <li>Contrato de compre e venda</li>
                        <li>Parcelamentos com e sem juros ( Consultar opções )</li>
                    </ul>
                </div>
                <div class="parceiros__title">
                    <h3>Fale Conosco</h3>
                </div>
                <div class="parceiros__content">
                    <ul>
                        <li><a href="#">contato@canavans.com.br</a></li>
                        <li><a href="#">sac@canavans.com.br</a></li>
                        <li><a href="https://w.app/mxowfz">+55 (62) 9850.6177</a></li>
                    </ul>
                </div>
            </div>
@endsection