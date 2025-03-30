@extends('site/template')

@section('content')

<section class="container-full" id="oCanil">
            <div class="container">
                <x-title.title-section 
                title="O CANIL CANAVANS" 
                conteudo="Descubra o porquê de termos a melhor estrutura para criação da raça Husky Siberiano da América Latina aqui temos somente filhotes de raça pura com altíssimo padrão de linhagem e além disso, colocamos em primeiro lugar o bem estar e saúde dos pais e mães de nossos filhotes." />
              
                <div class="o-canil__content">
                    <article class="sobre flex flex-justify-content-between">
                        <div class="sobre__destaque">
                            <a href="{{route('ocanil')}}" title="{{ config('app.name', 'Canil Canavans') }} | O Canil">
                                <img src="{{asset('/assets/images/o-canil.jpg') }}" alt="{{ config('app.name', 'Canil Canavans') }} | O Canil" class="filter__grayscale">
                            </a>
                            </div>
                        <div class="sobre__conteudo">
                            <h2>O CANIL</h2>
                            <h4>CANAVANS SIBERIANS</h4>
                            <p>Somos conhecido pelo trabalho personalizado com a nossa “família canina”, aqui temos somente filhotes de raça pura com altíssimo padrão de linhagem e além disso, colocamos 
                                em primeiro lugar o bem estar e saúde dos pais e mães de nossos filhotes. </p>
                        </div>
                    </article>

                    
                    <article class="sobre flex flex-justify-content-between">
                        <div class="sobre__conteudo">
                            <h2>NOSSA ESTRUTURA</h2>
                            <h4>AMOR E CARINHO</h4>
                            <p>Nossa estrutura foi pensada para que todos os Huskys possa ter seu espaço recebendo
                                 todos os cuidados necessarios, temos também um amplo 
                                 espaço para que eles possam gastar energias e aproveitar a natureza.</p>
                        </div>
                        <div class="sobre__destaque">
                            <a href="{{route('ocanil')}}" title="{{ config('app.name', 'Canil Canavans') }} | Nossa Estrutura">
                                <img src="{{asset('/assets/images/o-canil-estrutura.jpg') }}" alt="{{ config('app.name', 'Canil Canavans') }} | Nossa Estrutura" class="filter__grayscale">
                            </a>
                            </div>
                    </article>
                </div>
            </div>
        </section>

        <section id="husky">
            <div class="container-full husky">
                <div class="husky__destaque"></div>
                <div class="husky__content flex">
                    <article>
                        <h2>Porque ter um Husky ?</h2>
                        <h4>SOCIÁVEIS E DÓCEIS</h4>
                        <p>Muito sociáveis, os Huskys Siberianos são ótimos companheiros, adoram carinho e atenção, são amigáveis e brincalhões.
                             Capazes de se darem bem com estranhos, crianças e até com outros animais do seu tamanho, os cães da raça vivem 
                             fazendo novos amigos. Apesar da cara de lobo, esses cachorros são dóceis, alegres e expansivos!</p>
    
                             <x-button.button-action link="{{route('ohusky')}}" title="{{ config('app.name', 'Canil Canavans') }} - Porque ter um Husky Siberiano" conteudo="Saiba Mais" />
                
                    </article>

                    <article> 
                        <h2>Husky - ORIGEM</h2> 
                        <h4>SOCIÁVEIS E DÓCEIS</h4>
                        <p>Como o seu nome sugere, o Husky Siberiano é originário da Sibéria, e foi desenvolvido pela 
                            tribo nômade Chukchi, há cerca de 2 mil anos. Na época, os cachorros da raça eram muito 
                            utilizados para caçar e para puxar trenós em condições de frio extremo, por serem extremamente 
                            resistentes às baixas temperaturas. E foi exatamente a sua capacidade de puxar trenós por 
                            longas distâncias durante invernos rigorosos que garantiu por muito tempo a sobrevivência da 
                            tribo.</p>
                            <x-button.button-action link="{{route('ohusky')}}" title="{{ config('app.name', 'Canil Canavans') }} - a Origem do Husky Siberiano" conteudo="Saiba Mais" />
    

                    </article>
                  
                </div>
            </div>
            <div class="container-full filhote">
                <div class="container filhote__content flex">
                    <h2>QUERO TER UM HUSKY</h2>                
                    <x-button.button-action link="{{route('contato')}}" title="{{ config('app.name', 'Canil Canavans') }} - Meu Filhote de Husky Siberiano" conteudo="MEU FILHOTE" />
                </div>
            </div>
        </section>

        <section id="estrelas" class="container-full">
            <div class="container">
                <x-title.title-section 
                    title="NOSSAS ESTRELAS" 
                    conteudo="Qualidade sempre foi nosso foco, e podemos dizer que temos os filhotes mais lindos que você pode encontrar com procedencia genética sendo filhotes de campeões." />
              
            </div>
            <div class="estrelas__content">
                <div class="card card__padreadores">
                    <a href="{{route('nossas_estrelas')}}" title="{{ config('app.name', 'Canil Canavans') }} | Padreadores">
                        <div class="card__content">
                            <h2>PADREADORES</h2>
                            <span>SAIBA +</span>
                        </div> 
                    </a>
                </div>
                <div class="card card__matrizes">
                    <a href="{{route('nossas_estrelas')}}" title="{{ config('app.name', 'Canil Canavans') }} | Matrizes">
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
</section>

@endsection
