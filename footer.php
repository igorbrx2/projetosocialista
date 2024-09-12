<!-- FOOTER -->
<footer id="rodape">
  <span>Desenvolvido pela Poti Comunicação.</span>
</footer>
<!-- script para jquery -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/jquery.js"></script>
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
  /***
   * 
   *  Esse script é responsavel por fazer o fetch do JSON
   *  e popular o local com os nomes 
   * 
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
<!-- script.js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/script.js"></script>
<!-- script para intro -->
<script>document.addEventListener("DOMContentLoaded", function () {
    let currentSlide = 0;
    const slides = document.querySelectorAll('#introSlide .slide');
    const totalSlides = slides.length;

    function showSlide(index) {
      slides.forEach(slide => {
        slide.classList.remove('active');
        slide.style.display = 'none';
      });

      slides[index].classList.add('active');
      slides[index].style.display = 'flex';
    }

    function nextSlide() {
      currentSlide = (currentSlide + 1) % totalSlides;
      showSlide(currentSlide);
    }

    showSlide(currentSlide);

    setInterval(nextSlide, 3000);
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

<?php wp_footer(); ?>

</body>

</html>