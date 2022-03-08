<!DOCTYPE html>
<html>
  <head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" 
  rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x"
   crossorigin="anonymous">
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

  <link href="../../css/menu_lateal.css" rel="stylesheet">
  </head>
  <script>
    $( function() {
      $( document ).tooltip();
    } );
  </script>
  <body>
      
    <div>  
      <div class="nav-side-menu" style="border: 1px solid #ADADAD; box-shadow: 1px 1px 8px #888888">

          <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

              <div class="menu-list">
        
                  <ul id="menu-content" class="menu-content collapse out">
                      <li>
                        <a href="../pages/user/cad_clii.php" target="mainFrame" title="Inicio" >
                        <i class="fa fa-dashboard fa-lg"></i> Inicio
                        </a>
                      </li>
                      <a href="../pages/user/cad_clii.php" target="mainFrame">CAD</a>
                      
                      <li  data-toggle="collapse" data-target="#Consulta" class="collapsed active">
                        <a href="#"title="Consulta"><i class="fa fa-gift fa-lg"></i> Consulta <span class="caret"></span></a>
                      </li>
                      
                      <ul class="sub-menu collapse" id="Consulta">
                                                  
                          <li><a href="consultaClasseProposta.php" target="mainFrame" title="Relat&oacute;rio de itens com Nr Proposta" >Relat&oacute;rio de itens com Nr Proposta</a></li>

                          
                          <li><a href="consultaClasseItensInativos.php" target="mainFrame" title="Itens Inativos">Relat&oacute;rio de Itens Inativos</a></li>
                        
                          <li><a href="filtroRelacaoCargaOm.php" target="mainFrame" title="Rela&ccedil;&atilde;o Carga OM">Rela&ccedil;&atilde;o Carga OM</a></li>
                          
                          
                          
                          <!--

                          <li><a href="consultaClasseGeralControle.php" target="mainFrame" title="Rela&ccedil;&atilde;o Geral Controle">Relatorio Geral Controle</a> 

                          -->

                          

                          <li><a href="../pages/user/cad_clii.php" target="mainFrame" title="Rela&ccedil;&atilde;o Geral Controle">Relatorio Geral Controle  <!-- <img width="40px" height="25px"src="../img/novo.gif"/> --></a> 

                          

                          <li><a href="consultaProjeto.php" target="mainFrame" title="Relatorio por Projetos">Relat&oacute;rio por Projetos</a></li>

                          <li><a href="consultaManutencao.php" target="mainFrame" title="Relatorio de Manuten&ccedi;&atilde;o">Relat&oacute;rio  Manuten&ccedil;&atilde;o</a></li>

                                                                                  <li><a href="consultaRastreabilidade.php" target="mainFrame" title="Rastreabilidade">Rastreabilidade  <!-- <img width="40px" height="25px"src="../img/novo.gif"/> --></a></li>
                                                    
                          <li><a href="consultaGrupoClasse.php" target="mainFrame" title="Relatorio Grupo de Material">Relat&oacute;rio por Grupo de Material</a></li> 

                          <!-- <li><a href="consultaGrafico.php" target="mainFrame" title="GrÃ¡ficos">Grafico</a></li> -->
                          

                            
                            
                            <li><a href="graficoAnaliseMigracao.php" target="mainFrame" title="Gr&aacute;fico Carga">An&aacute;lise da Migra&ccedil;&atilde;o Fichas</a></li>
                            <li><a href="graficoAnaliseMigracaoEmb.php" target="mainFrame" title="Gr&aacute;fico Carga">An&aacute;lise da Migra&ccedil;&atilde;o Embalagens</a></li>
                          
                                                </ul>
                     
                      
                      <li data-toggle="collapse" data-target="#catalogo" class="collapsed">
                        <a href="#"title="Cat&aacute;logo"><i class="fa fa-globe fa-lg"></i> Cat&aacute;logo <span class="caret"></span></a>
                      </li>  
                      <ul class="sub-menu collapse" id="catalogo">
                        <li><a href="catalogoDeSuprimentoConsulta.php" target="mainFrame" title="Cat&aacute;logo de Suprimento">Cat&aacute;logo de Suprimento</a></li>
                        <li><a href="catalogoOmConsulta.php" target="mainFrame" title="Cat&aacute;logo de OM">Cat&aacute;logo de OM</a></li>                        
                        

                        
                        <li><a href="neeNsnManutenidoPeriodo.php" target="mainFrame">Relat&oacute;rio de manuten&ccedil;&atilde;o de NEE/NSN</a></li>
                                                <li><a href="gerarCatalogoConsulta.php" target="mainFrame">Gerar Cat&aacute;logos Diversos</a></li>

                        <li><a href="gerarCatalogoConsultaSigelog.php" target="mainFrame" title="Cat&aacute;logo de OM">Gerar Cat&aacute;logo de Migra&ccedil;&atilde;o</a></li>
                                                
                        <!-- <li><a href="catalogosMateriaisGeradosLista.php" target="mainFrame" title="Cat&aacute;logos Gerados">Cat&aacute;logos Gerados</a></li> -->
                        
                        <li><a href="catalogoSituacaoAtualizacao.php" target="mainFrame" title="Situa&ccedil;&atilde;o de Atualiza&ccedil;&atilde;o">Situa&ccedil;&atilde;o de Atualiza&ccedil;&atilde;o</a></li>
                        
                      </ul>
                      

                                              <li data-toggle="collapse" data-target="#estoque" class="collapsed">
                        <a href="#" title="Estoque"><i class="fa fa-car fa-lg"></i> Estoque <span class="caret"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="estoque">
                        <li><a href="cargaDeEstoque.php" target="mainFrame">Carregar</a></li>                         
                        <li><a href="cargaSituacaoPeriodo.php" target="mainFrame" title="Situa&ccedil;&atilde;o da Carga">Situa&ccedil;&atilde;o da Carga</a></li>
                        <!-- <li><a href="cargaNoturnaPeriodo.php" target="mainFrame" title="Situa&ccedil;&atilde;o da Carga Noturna">Situa&ccedil;&atilde;o da Carga Noturna</a></li> -->
                        <li><a href="consultaCargaNoturna.php" target="mainFrame" title="Situa&ccedil;&atilde;o da Carga Noturna">Situa&ccedil;&atilde;o da Carga Noturna</a></li>

                                                <li><a href="estoqueRelatorioFiltro.php" target="mainFrame" title="Relat&oacute;rio de Estoque">Relat&oacute;rio de Estoque</a></li>
                        <li><a href="criticaCarga.php" target="mainFrame" title="Critica de Carregamento">Critica de Carregamento</a></li>
                        <li><a href="../graficos/graficoControleCarga.php" target="mainFrame" title="Gr&aacute;fico Carga">Gr&aacute;fico Carga</a></li>
                                              </ul>                     
                      
                      
                      <li data-toggle="collapse" data-target="#versao" class="collapsed">
                        <a href="#" title="Versao"><i class="fa fa-car fa-lg"></i> Atualiza&ccedil;&otilde;es do Sistema <span class="caret"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="versao">
                        <li><a href="controleVersaoFiltro.php" target="mainFrame" title="Controle de Vers&atilde;o">Relat&oacute;rio da Vers&atilde;o Atual</a></li>                        
                      </ul>
                      


                                            <li data-toggle="collapse" data-target="#contabilidade" class="collapsed">
                        <a href="#"title="Contabilidade Patrimonial"><i class="fa fa-car fa-lg"></i> Contabilidade Patrimonial <span class="caret"></span></a>
                      </li>
                      <ul class="sub-menu collapse" id="contabilidade">

                                              <li><a href="movimentacaoContabil.php" target="mainFrame" title="">Relat&oacute;rio Movimenta&ccedil;&atilde;o (Almox e Uso)</a></li>
                                              <li><a href="inventarioContabil.php" target="mainFrame" title="">Invent&aacute;rio Geral</a></li>
                        <li><a href="consultaMovimentacaoMaterial.php" target="mainFrame" title="">Relat&oacute;rio de Custos por Atividade</a></li>
                        <li><a href="consultaRsda.php" target="mainFrame" title="">RSDA</a></li>
                        <li><a href="consultaRadi.php" target="mainFrame" title="">RADI</a></li>
                        <li><a href="graficoMigracaoCentroCustos.php" target="mainFrame" title="">Acomp Altz Novos C.Custos</a></li>
                      </ul>

                      
                      
                       <li>
                        <a href="usuarioListaFiltro.php" title="Usuario" target="mainFrame"><i class="fa fa-user fa-lg"></i>Cadastro de Usu&aacute;rio</a>
                       </li>

                       <li>
                        <a href=" login.php" target="_parent" title="Sair" ><i class="fa fa-users fa-lg"></i>Sair</a>
                      </li>
                  </ul>
           </div>           
      </div>
</body>
</html>