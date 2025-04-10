 <header class="container-full flex flex-justify-content-between">
        <div class="container flex flex-justify-content-between">
            <div class="logotipo">
                <a href="#" title="Canil Canavans">
                    <img src="{{asset('assets/images/logotipo-white.png')}}" alt="Canil Canavans">
                </a>
            </div>
            <nav class="navigator">
            <button data-menu="button" aria-expanded="false" aria-controls="menu">Menu</button>
            <ul data-menu="list" id="menu">
                    <li><a href="{{route('home')}}" title="Home">Home</a></li>
                    <li><a href="{{route('ocanil')}}" title="O-Canil">O Canil</a></li>
                    <li><a href="{{route('ohusky')}}" title="O-Husky">O Husky</a></li>
                    <li><a href="{{route('nossas_estrelas')}}" title="Nossas Estrelas">Nossas Estrelas</a></li>
                    <li><a href="{{route('filhotes')}}" title="Filhotes">Filhotes</a></li>
                    <li><a href="{{route('contato')}}" title="Contato">Contato</a></li>
                </ul>
</nav>
        </div>
        <div class="container">
            <div class="headline flex">
                <h2>HUSKY SIBERIANO</h2>
                <h4>QUALIDADE</h4>
                <p>Criação Especializada em HUSKY SIBERIANO feita com amor e responsabilidade. Filhotes lindos, vacinados, vermifugados e microchipados.</p>
                <x-button.button-action link="{{route('ocanil')}}" title="Canil Canavans - Saiba Mais" conteudo="Saiba Mais" />
            </div>
        </div>

    </header>
