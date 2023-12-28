debounce = function(func, wait, immediate){
    var timeout;
    return function(){
        var context = this, args = arguments;
        var later = function(){
            timeout = null;
            if(!immediate) func.apply(context, args);
        };
        var callNow = immediate && !timeout;
        clearTimeout(timeout);
        timeout = setTimeout(later, wait);
        if(callNow) func.apply(context, args);
    };
};
jQuery(document).ready(function($) {
    var windowWidth = window.innerWidth;  
        
    //Animação de Texto e Imagem
        (function(){
            var $target = $('.E-subir'),
                animationClass = 'E-subir-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 0));
        }());

        (function(){
            var $target = $('.E-descer'),
                animationClass = 'E-descer-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 0));
        }());

        (function(){
            var $target = $('.E-direita'),
                animationClass = 'E-direita-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 0));
        }());

        (function(){
            var $target = $('.E-esquerda'),
                animationClass = 'E-esquerda-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 0));
        }());

        (function(){
            var $target = $('.E-fadein'),
                animationClass = 'E-fadein-start',
                offset = $(window).height() * 3/4;
            function animeScroll(){
                var documentTop = $(document).scrollTop();
                
                $target.each(function(){
                    var itemTop = $(this).offset().top;
                    if(documentTop > itemTop - offset){
                        $(this).addClass(animationClass);
                    }
                });
            }

            animeScroll();

            $(document).scroll(debounce(function(){
                animeScroll();
            }, 0));
        }());
    //-----------------------
});