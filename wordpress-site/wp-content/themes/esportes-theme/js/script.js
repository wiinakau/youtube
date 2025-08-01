jQuery(document).ready(function($) {
    // Smooth scrolling para links de navegação
    $('.nav-menu a[href^="#"]').on('click', function(e) {
        e.preventDefault();
        
        var target = this.hash;
        var $target = $(target);
        
        if ($target.length) {
            $('html, body').animate({
                'scrollTop': $target.offset().top - 80
            }, 800, 'linear');
        }
    });
    
    // Efeito de fade in nos elementos ao scroll
    $(window).scroll(function() {
        $('.content-section').each(function() {
            var elementTop = $(this).offset().top;
            var elementBottom = elementTop + $(this).outerHeight();
            var viewportTop = $(window).scrollTop();
            var viewportBottom = viewportTop + $(window).height();
            
            if (elementBottom > viewportTop && elementTop < viewportBottom) {
                $(this).addClass('fade-in');
            }
        });
    });
    
    // Menu móvel responsivo
    var $navMenu = $('.nav-menu');
    var $navbar = $('.navbar');
    
    // Criar botão hamburger para mobile
    $navbar.prepend('<button class="mobile-toggle" aria-label="Menu"><span></span><span></span><span></span></button>');
    
    $('.mobile-toggle').on('click', function() {
        $navMenu.toggleClass('mobile-open');
        $(this).toggleClass('active');
    });
    
    // Fechar menu ao clicar em um link (mobile)
    $('.nav-menu a').on('click', function() {
        if (window.innerWidth <= 768) {
            $navMenu.removeClass('mobile-open');
            $('.mobile-toggle').removeClass('active');
        }
    });
    
    // Ajustar menu ao redimensionar janela
    $(window).resize(function() {
        if (window.innerWidth > 768) {
            $navMenu.removeClass('mobile-open');
            $('.mobile-toggle').removeClass('active');
        }
    });
});