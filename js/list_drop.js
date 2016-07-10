//var element=$(".quest_cell .answer p");//Выделяем наш абзац, который надо отобразить



//Функция сворачивания/ разворачивания ответа на частозадаваемые вопросы
$(document).ready(function(){

	$(".quest_cell").click(

		function (  ) {

			//Тут надо сделать блок с ответом видимым
			//Проверяем состаяние блока, по которому сделан клик.
			//Сохраняем его состояние
			//Если блок свернут - раскрываем его.
			//Если блок раскрыт - свертываем его.
			//var element=$(this);


			//$(this).fadeOut();

			if($(this).children(".answer").css("display")=="none"  )
			{

				$(this).children(".answer").css("display","block");
				$(this).css({"height":"auto", "overflow":"hidden", "background":"#fcfcfc"});
				$(this).children(".plus").attr("src","img/minus.png");
			}
			else{
				
				$(this).children(".answer").css("display","none");
				$(this).css({"height":"40px", "background":"#f5f5f5"});
				$(this).children(".plus").attr("src","img/plus.png");
			}
		}
	);

	$(".sver").click(
		function(){
			$(".why_we_need").fadeOut("slow");
			$(".calculator").css("margin-top","-3px");
			$(".sver_link").css("display","none");
			$(".razvernyt").css("display","inherit");
			$(".razvernyt").css("margin-top","10px");


			//При сворачивании надо уменьшить высоту body ровно на
			//высоту сворачиваемого блока.

			//А при разворачивании - наоборот высота должна увеличиваться

			$(".main").height( $("main").height() - $("why_we_need").height());

			//При свертывании надо промотать до калькулятора
			
			//Получаем позицию элемента относительно документа
			var scrollTop=$('#calculator').offset().top;
			var h=$(".why_we_need").css("height");

			h=h.substr(0,h.length-2);

			$('body,html').scrollTop(scrollTop-h);
			// var id  = $('#calculator');
			// top = $(id).offset().top;
			//$('body,html').animate({scrollTop: top}, 1100);
		}

	);

	$(".sver_link").children("p").click(
		function(){
			$(".why_we_need").fadeOut("slow");
			$(".calculator").css("margin-top","-3px");
			// $(".svernyt").css("display","none");
			$(".sver_link").css("display","none");
			$(".razvernyt").css("display","inherit");
			$(".razvernyt").css("margin-top","10px");

			var scrollTop=$('#calculator').offset().top;
			var h=$(".why_we_need").css("height");

			h=h.substr(0,h.length-2);

			$('body,html').scrollTop(scrollTop-h);

		}

	);

	$(".razvernyt").click(
		function(){
			$(".why_we_need").fadeIn("slow");
			$(".sver_link").css("display","inherit");
			$(".razvernyt").css("display","none");
			
		}

	);



}

);



