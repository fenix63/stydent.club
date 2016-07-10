/* Created by jankoatwarpspeed.com */


(function($) {
    $.fn.formToWizard = function(options) {
        options = $.extend({  
            submitButton: 'SaveAccount',  
        }, options); 
        
        var element = this;

        var steps = $(element).find("fieldset");
        var count = steps.size();
        var submmitButtonName = "#" + options.submitButton;
        $(submmitButtonName).hide();

        // 2
        $(element).before("<ul id='steps'></ul>");


        steps.each(function(i) {
            $(this).wrap("<div id='step" + i + "'></div>");
            $(this).append("<p id='step" + i + "commands' class='but_navigation'></p>");

            
            // 2
            var name = $(this).find("legend").html();
            //$("#steps").append("<li id='stepDesc" + i + "'>Step " + (i + 1) + "<span>" + name + "</span></li>");

            if (i == 0) {
                createNextButton(i);
                selectStep(i);
            }
            else if (i == count - 1) {
                $("#step" + i).hide();
                createPrevButton(i);
            }
            else {
                $("#step" + i).hide();
                createPrevButton(i);
                createNextButton(i);
            }
        });

        function createPrevButton(i) {
            var stepName = "step" + i;

            $("#" + stepName + "commands").append(
            	"<a href='#' id='" + stepName + "Prev' class='prev'><span><img src=img/prev.png />Назад<span></a>"
            	);

            // $("#" + stepName + "commands").append(
            //     "<button id='" + stepName + "Prev' class='prev knopka'><span><img src=img/prev.png />Назад<span></button>"
            //     );




			
            $("#" + stepName + "Prev").bind("click", function(e) {
                $("#" + stepName).hide();
                $("#step" + (i - 1)).show();
                $(submmitButtonName).hide();
                selectStep(i - 1);
            });
        }

        function createNextButton(i) {
            var stepName = "step" + i;

            $("#" + stepName + "commands").append(
            	"<a href='#' id='" + stepName + "Next' class='next'><span>Вперед</span><img src=img/next.png /></a>"
            	);

            // $("#" + stepName + "commands").append(
            //     "<button id='" + stepName + "Next' class='next knopka'><span>Вперед</span><img src=img/next.png /></a></button>"
            //     );


            $("#" + stepName + "Next").bind("click", function(e) {
                $("#" + stepName).hide();
                $("#step" + (i + 1)).show();
                if (i + 2 == count)
                    $(submmitButtonName).show();
                selectStep(i + 1);
            });
        }

        function selectStep(i) {
            $("#steps li").removeClass("current");
            $("#stepDesc" + i).addClass("current");
        }

    }
})(jQuery); 

/*
$(function() {
    $(".field").change( function(){
        	$(this).find(".show_name").val($(this).find(".docs").val());
	});
});
*/

//AJAX-загрузка файлов на сервер
$(function() {

	// Переменная куда будут располагаться данные файлов
	var files;

    $(".field input[type=file]").change( function(){
        	$(this).parent(".field").find(".show_name").val($(this).val());


        // Вешаем функцию на событие
		// Получим данные файлов и добавим их в переменную
		files = this.files;
		event.stopPropagation(); // Остановка происходящего
    	event.preventDefault();  // Полная остановка происходящего

    	// Создадим данные формы и добавим в них данные файлов из files
 
	    var data = new FormData();
	    $.each( files, function( key, value ){
	        data.append( key, value );
	    });

	    //-----------------------------
	    // Отправляем запрос
 
	    $.ajax({
	        url: '/js/submit.php?uploadfiles',
	        type: 'POST',
	        data: data,
	        cache: false,
	        dataType: 'html',
	        processData: false, // Не обрабатываем файлы (Don't process the files)
	        contentType: false, // Так jQuery скажет серверу что это строковой запрос
	        success: function( respond, textStatus, jqXHR ){
	 
	            // Если все ОК
	 
	            if( typeof respond.error === 'undefined' ){
	                // Файлы успешно загружены, делаем что нибудь здесь
	 
	                // выведем пути к загруженным файлам в блок '.ajax-respond'
	 
	                var files_path = respond.files;
	                var html = '';
	                $.each( files_path, function( key, val ){ html += val +'<br>'; } )
	                //$('.ajax-respond').html( html );
	            }
	            else{
	                console.log('ОШИБКИ ОТВЕТА сервера: ' + respond.error );
	            }
	        },
	        error: function( jqXHR, textStatus, errorThrown ){
	            console.log('ОШИБКИ AJAX запроса: ' + textStatus );
	        }
	    });



	    //-----------------------------
	});
});