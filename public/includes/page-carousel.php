<!-- CAROUSEL SLIDER (ONDE VAMOS MOSTRAR O CARDÁPIO) -->
        <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">

            <!-- carousel-inner é a classe obrigatória para o funcionamento do Carousel, 
                ele é o container principal para os slides, a função dele é agrupar todos os itens desse carousel
            -->    
            <div class="carousel-inner"> 
                <div class="carousel-item active">
                    <img src="./img/hamburger-h500.png" alt="" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="./img/hotdog-h500.png" alt="" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="./img/potato-h500.png" alt="" class="d-block">
                </div>
                <div class="carousel-item">
                    <img src="./img/snacks-h500.png" alt="" class="d-block">
                </div>
            </div>

            <button class="carousel-control-prev" type="button" 
                data-bs-target="#carouselControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="false"></span>
                
                <!-- Opcionalmente podemos adicionar para leitores de tela um 
                    <span> com a classe visually-hidden para ocultar o texto
                    mas ainda assim acessível para pessoas com deficiência
                -->
                <span class="visually-hidden">Anterior</span>
            </button>
            <button class="carousel-control-next" type="button" 
                data-bs-target="#carouselControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="false"></span>
                <span class="visually-hidden">Próximo</span>
            </button>
            
        </div>