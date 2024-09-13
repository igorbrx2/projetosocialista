<?php
// Template Name: Page Bancada
?>

<?php get_header(); ?>

<article id="alexandrePage">
    <div class="textoCandidato montserrat-font">
        <h1>Alexandre Guedes:</h1>
        <p>Sou Alexandre Guedes Fernandes, tenho 59 anos, sou casado e nasci em Natal. Tenho formação acadêmica em Ciências Sociais/Sociologia. Ingressei no serviço público, no Departamento Estadual de Trânsito do Rio Grande do Norte (Detran/RN), em 1984, aos 19 anos, há exatos 40 anos, de onde sou recém-aposentado. Entrei no movimento sindical em 1989, quando participei da fundação do Sinai, compondo sua direção. Hoje, integro a Coordenação Executiva do sindicato, do qual estou licenciado.<br>

        <br>Em 1999, ingressei nas fileiras do Partido Socialista dos Trabalhadores Unificado (PSTU), do qual sou militante desde então. Diante do governismo que tomou conta de boa parte do movimento sindical de nosso país, com o advento dos governos do PT, rompi com a Central única dos Trabalhadores (CUT) em 2004 e participei ativamente da construção da Conlutas (Coordenação Nacional de Lutas) em 2006. Em 2010, juntamente com vários segmentos independentes da classe trabalhadora, participei da construção da CSP-Conlutas – Central Sindical e Popular, da qual sou membro licenciado de sua Secretaria Executiva Estadual.<br>

<br>Sempre estive nas lutas em defesa do serviço público, participando ativamente das campanhas pelos planos de carreira dos servidores, concurso público e combatendo a privatização do estado nas suas 3 esferas - municipal, estadual e nacional.<br>

<br>Defendo a organização da classe trabalhadora em conselhos populares. Neles há possibilidade de se ampliar a disputa pelo poder político e econômico nos municípios, confrontando prefeitos e vereadores, que depois das eleições têm o costume de transformar a Prefeitura e a Câmara Municipal em balcão de negócios dos grandes empresários.<br>

<br>Assim como Trotsky, líder revolucionário russo, defendo que “Toda Revolução é impossível até que se torne inevitável”. Para mim, a luta pelo socialismo é atual, pois a classe trabalhadora é a única que pode salvar a vida no planeta com organização e luta revolucionária. Quem produz a riqueza é quem deve governar.<br></p>
        <span class="propostas candidato" data-candidato="alexandre">| Principais propostas |</span>
    </div>
    <img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/alexandrePagina.png" alt="Alexandre Guedes 16123">
</article>

<article id="ericaPage">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/ericaPagina.png" alt="Érica Guarani 16123">
    <div class="textoCandidato montserrat-font">
        <h1>Érica Guarani:</h1>
        <p>Eu sou Érica Guarani. Sou uma mulher indígena nascida em Natal/RN. Formei-me em Ciências Biológicas e sou técnica de enfermagem concursada. Enquanto trabalhadora da saúde municipal, tenho enfrentamentos diretos com a gestão truculenta do prefeito Álvaro Dias (Republicanos). Faço parte da direção do Sindsaúde/RN, adoro arte e me expresso através de desenhos, pinturas e textos.<br>

        <br>Desde muito jovem na escola eu já me interessava por assuntos políticos e defendia os direitos dos (as) estudantes. Porém, comecei a me interessar especificamente pelas ideias socialistas e revolucionárias quando vi as propagandas do PSTU na TV. A partir daí, comecei a refletir melhor sobre a minha realidade e a do mundo, e entendi que os problemas da sociedade não eram naturais.<br>

        <br>Em 2012, passei a ter contato de fato com o Partido, no período de pré-campanha. Nesse ano, o meu primeiro voto para presidente foi no Zé Maria, que era nosso candidato ao cargo à época. Depois, comecei a conhecer alguns (as) militantes do Partido e, em 2014, comecei a militar organicamente. Além do PSTU, construo o Movimento Mulheres em Luta (MML) e a CSP-Conlutas.<br>

        <br>A pandemia da covid-19, durante a qual trabalhei na linha de frente como técnica de enfermagem, foi um dos períodos mais difíceis da minha vida. Além do medo de me contaminar e transmitir o vírus para minha família e amigos, vi muitas pessoas nos deixarem abruptamente. O pior de tudo foi presenciar o descaso dos governos com a saúde pública, pois muitas mortes poderiam ter sido evitadas. Mas esse episódio me fez entender ainda mais a necessidade urgente de destruir a sociedade capitalista. E a minha candidatura e a dos meus companheiros será porta-voz dessa ideia.<br></p>
        <span class="propostas candidato" data-candidato="erica">| Principais propostas |</span>
    </div>
</article>

<article id="jairanPage">
<img src="<?php echo get_stylesheet_directory_uri(); ?>/assets/jairanPagina.png" alt="José Jairan 16123">
    <div class="textoCandidato montserrat-font">
        <h1>José Jairan:</h1>
        <p>Eu sou José Jairan. Sou professor de Matemática com vínculo no estado e também sou formado em Letras. Construo o Movimento Nacional Quilombo Raça e Classe, o Movimento Muda Sinte e sou um dos fundadores do coletivo LGBTI Auroras.<br>

        <br>Para mim, o socialismo não é uma utopia; é uma necessidade. A situação de opressão e exploração que vive a classe trabalhadora não é normal. Pelo contrário, isso ocorre devido ao sistema capitalista. Enquanto homem negro, LGBTI e de terreiro, sou um dos principais alvos desta sociedade.<br>

        <br>É para defender nossos direitos e dar eco a essas ideias que construo o PSTU e tenho orgulho de dizer que sou revolucionário. Basta de opressão e exploração!<br></p>
        <span class="propostas candidato" data-candidato="jairan">| Principais propostas |</span>
    </div>
</article>

<?php
get_template_part('candidaturas');
?>

<?php
  get_template_part('propostas');
  ?>

    <!-- Modal para textos dos candidatos -->
    <section class="modalNando-container" id="modal" style="position: fixed;
  top: 0;
  left: 0;
  height: 100%;
  width: 100%;
  background: rgba(0, 0, 0, 0.5);
  display: none;
  z-index: 999;
  justify-content: center;
  align-items: center;">
    <div class="modalNando" style="background: white;
  text-align: start;
  height: 70vh;
  width: 800px;
  max-width: 90vw;
  overflow-y: auto;
  padding: 50px 30px;
  border-radius: 10px;
  justify-content: center;
  align-items: center;
  box-shadow: 10px 10px 22px -3px rgba(0,0,0,0.4);
  position: relative;">
      <button data-modal="fechar" class="botaoFechar" id="fecharModal" style="background: var(--vermelho-fonte);
  color: white;
  font-weight: bold;
  border-style: none;
  position: absolute;
  z-index: 9999;
  padding: 5px 10px;
  border-radius: 10px;
  top: 10px;
  right: 10px;">fechar</button>
      <div id="modalConteudo">

      </div>
    </div>
  </section>

<?php get_footer(); ?>