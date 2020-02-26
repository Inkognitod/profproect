$(document).ready(function () {

new WOW().init();

/*  Carousel  */
$('#multiCarousel').carousel({
  interval: 10000
})
$('#multiCarousel.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
$('#multiCarousel2').carousel({
  interval: 10000
})
$('#multiCarousel2.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
$('#multiCarousel3').carousel({
  interval: 10000
})
$('#multiCarousel3.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});
$('#multiCarousel4').carousel({
  interval: 10000
})
$('#multiCarousel4.carousel .carousel-item').each(function(){
    var next = $(this).next();
    if (!next.length) {
    next = $(this).siblings(':first');
    }
    next.children(':first-child').clone().appendTo($(this));
    
    for (var i=0;i<2;i++) {
        next=next.next();
        if (!next.length) {
        	next = $(this).siblings(':first');
      	}
        
        next.children(':first-child').clone().appendTo($(this));
      }
});

/* Маска телефона */
$('input[name="phone"]').inputmask('+7(999) 999-99-99');


/* Форма обратной связи */
$('button[type="submit"]').click(function(){
  
  /*Валидация полей формы*/
  $('#feedback').validate({
  //Правила валидации
  rules: {
        name: {
            required: true,
        },
        email: {
            required: true,
      email: true
        },
     phone: {
            required: true,
        },

    },
  //Сообщения об ошибках
    messages: {
    name: {
            required: "Обязательно укажите имя",
        },
    email: {
            required: "Обязательно укажите Email",
        },
    phone: {
      required: "Укажите номер телефона",
    },
    },
  
  /*Отправка формы в случае успеха валидации*/
    submitHandler: function(){
         sendAjaxForm('feedback', 'ajax-form.php'); //Вызываем функцию отправки формы
     return false; 
    }
  });
});

  function sendAjaxForm(feedback, url) {
          $.ajax({
            url:     url, //url страницы (ajax-form.php)
            type:     "POST", //метод отправки
            dataType: "html", //формат данных
            data: $("#"+feedback).serialize(),  // Сеарилизуем объекты формы
            success: function(response) { //Данные отправлены успешно
              
              //Ваш код если успешно отправлено
              alert('Успешно отправлено!');
            },
            error: function(response) { // Данные не отправлены
              
              //Ваш код если ошибка
              alert('Ошибка отправления');
            }
          });

}

});