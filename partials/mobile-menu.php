<nav class="mobile-menu">
    <div class="close">
        <strong>Main Menu</strong><i class="ion-close" onclick="mobileMenu.toggle()"></i>
    </div>
    <ul>
        <li><a>Home</a></li>
        <li><a>About</a></li>
        <li><a>Testimonials</a></li>
        <li><a>Contact</a></li>
    </ul>
</nav>


<script>
    const mobileMenu = {
        open : () => {
            $('body').addClass('open-manu')
        },
        close : () => {
            $('body').removeClass('open-menu')
        },
        toggle : () => {
            $('body').toggleClass('open-menu')
        }
    }
</script>