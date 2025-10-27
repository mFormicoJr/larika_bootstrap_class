<!-- Classe .containter serve para conter, centralizar e aplicar largura máxima
            ao conteúdo dela. Ela pode ser comparada ao container-fluid, mas tem uma diferença entre elas. 
            O container-fluid ocupa 100% da viewport, independente 
            se o site está sendo mostrado em um celular ou em uma tela de computador. Já o .container,
            define uma largura máxima que se ajusta de forma responsiva de acordo com o tamanho da tela.
         -->
        <!-- p-3 é classe que define um padding no conteúdo, nesse caso o 3 se refere a medida rem do CSS,
            3 aplica o padding de 1rem no conteúdo, o equivalente a 16px de espaçamento.
        -->
        <main class="container p-3">

            <div class="row">
                <div class="col"> <!-- col = column -->

                    <!-- classe .card basicamente criar uma "caixa" com estilos de bordas, cantos arredondados e cor do fundo -->
                    <div class="card text-white bg-warning">

                        <!-- a classe .card-img-top trabalha em conjunto garantindo que a imagem se encaixe perfeitamente 
                            nos cantos arredondados da parte de cima do card, o topo, e aplica largura 100% para ela sempre ocupar
                            o tamanho total do card, sendo responsiva ao próprio card.
                        -->
                        <img class="card-img-top" src="./img/hamburger-cartoon-w358.png">
                        
                        <!-- card-body aplica um padding dentro do card para os textos não ficarem nas bordas
                            e por isso não aplicamos ele acima da imagem, pois queremos que a imagem ocupe todo
                            o espaço do card.
                        -->
                        <div class="card-body">

                            <!-- .card-text aplica um estilo de parágrafo padrão e zera o margin-bottom para não 
                                duplicar o espaçamento inferior, que já foi aplicado com o .card-body
                            -->
                            <p class="card-text">
                                Prove o hamburguer da casa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/hotdog-cartoon-w358.png">
                        
                        <div class="card-body">
                            <p class="card-text">
                                Prove o hot dog da casa.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/snacks-cartoon-w358.png">
                        
                        <div class="card-body">
                            <p class="card-text">
                                Prove os nossos petiscos.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col">
                    <div class="card text-white bg-warning">
                        <img class="card-img-top" src="./img/potato-cartoon-w358.png">
                        
                        <div class="card-body">
                            <p class="card-text">
                                Prove as nossas batatas recheadas.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
        </main>