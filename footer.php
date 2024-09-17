<!-- FOOTER -->
<footer id="rodape">
  <span>Desenvolvido pela Poti Comunicação.</span>
</footer>
<!-- script para jquery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.js"></script>
<!-- script.js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
<!-- script para form -->
<script>
  function validateForm() {
    var fullname = document.getElementById('fullname').value;
    var phone = document.getElementById('phone').value;
    var occupation = document.getElementById('occupation').value;
    var phonePattern = /^\d{10}$/;

    if (fullname.trim() === "") {
      alert("Nome completo não pode ser vazio.");
      return false;
    }

    if (phone.trim() === "") {
      alert("Número de telefone não pode ser vazio.");
      return false;
    }

    if (!phonePattern.test(phone)) {
      alert("Por favor, insira um número de telefone válido (10 dígitos).");
      return false;
    }
    return true;
  }
  /*
   *  Esse script é responsavel por fazer o fetch do JSON
   *  e popular o local com os nomes
   */
  document.addEventListener('DOMContentLoaded', function () {
    fetch('<?php echo get_stylesheet_directory_uri(); ?>/subscribes.json')
      .then(response => response.json())
      .then(data => {
        const list = document.getElementById('subscriber-list');
        data.forEach(subscriber => {
          const listItem = document.createElement('li');
          listItem.textContent = subscriber.fullname;
          list.appendChild(listItem);
        });
      })
      .catch(error => {
        console.error('Error fetching the subscriber list:', error);
      });
  });

</script>
<!-- script para intro -->
<script>document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll('#introSlide .slide');
    const totalSlides = slides.length;
    const dots = document.querySelectorAll('#slideControls .dot');
    let slideInterval;

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.classList.remove('active');
            slide.style.display = 'none';
            dots[i].classList.remove('active');
        });

        slides[index].classList.add('active');
        slides[index].style.display = 'flex';
        dots[index].classList.add('active');
    }

    function nextSlide() {
        currentSlide = (currentSlide + 1) % totalSlides;
        showSlide(currentSlide);
    }

    function startSlideInterval() {
        slideInterval = setInterval(nextSlide, 3000);
    }

    function stopSlideInterval() {
        clearInterval(slideInterval);
    }

    showSlide(currentSlide);
    startSlideInterval();

    dots.forEach((dot, index) => {
        dot.addEventListener('click', () => {
            stopSlideInterval(); // Para o intervalo ao clicar em uma dot
            currentSlide = index;
            showSlide(currentSlide);
            startSlideInterval(); // Reinicia o intervalo após um clique
        });
    });
});
</script>
<!-- script para menu mobile -->
<script>class MobileNavbar {
    constructor(mobileMenu, navList, navLinks) {
      this.mobileMenu = document.querySelector(mobileMenu);
      this.navList = document.querySelector(navList);
      this.navLinks = document.querySelectorAll(navLinks);
      this.activeclass = "active";

      this.handleClick = this.handleClick.bind(this);
    }

    animateLinks() {
      this.navLinks.forEach((link) => {
        link.style.animation
          ? (link.style.animation = "")
          : (link.style.animation = 'navLinkFade 0.5s ease forwards 0.3s');
      });
    }

    handleClick() {
      this.navList.classList.toggle(this.activeclass);
      this.mobileMenu.classList.toggle(this.activeclass);
      this.animateLinks();
    }

    addClickEvent() {
      this.mobileMenu.addEventListener("click", this.handleClick);
    }

    init() {
      if (this.mobileMenu) {
        this.addClickEvent();
      }
      return this;
    }
  }

  const mobileNavbar = new MobileNavbar(
    ".mobile-menu",
    "#nav-list",
    "#nav-list li"
  );
  mobileNavbar.init();</script>
<!-- script para copiar pix -->
 <script>document.getElementById('copyLink').addEventListener('click', function(event) {
    event.preventDefault(); 
    
    const textToCopy = '56.256.408/0001-83';
  
    // Verifica se a API Clipboard está disponível
    if (navigator.clipboard && navigator.clipboard.writeText) {
        navigator.clipboard.writeText(textToCopy).then(function() {
            console.log('Texto copiado com sucesso!');
            document.getElementById('successMessage').style.display = 'block';
            document.getElementById('overlay').style.display = 'block';
        }).catch(function(error) {
            console.error('Erro ao copiar o texto: ', error);
        });
    } else {
        console.error('A API Clipboard não é suportada neste navegador.');
        alert('Seu navegador não suporta a funcionalidade de copiar para a área de transferência.');
    }
  });
  
  document.addEventListener('click', function(event) {
    if (event.target.id !== 'copyLink' && event.target.id !== 'successMessage') {
        document.getElementById('successMessage').style.display = 'none';
        document.getElementById('overlay').style.display = 'none';
    }
  });</script>

<?php wp_footer(); ?>

</body>

</html>