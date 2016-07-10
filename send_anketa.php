<?php

if (isset($_POST['zaem_name'])) {

    //$to = 'ap@thelandpage.ru';
	//$to = 'orterro@gmail.com';
	$to = 'pohydey@gmail.com';
	
    $subject = 'Новая заявка с сайта';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    //$headers .= "From: Body <callback@thelandpage.ru>\r\n";

    $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        
                        <h3>Заёмщик</h3>
                        <p>Имя заёмщика: '.$_POST['zaem_name'].'</p>
                        <p>Фамилия заёмщика: '.$_POST['zaem_surname'].'</p>
                        <p>Отчество заёмщика: '.$_POST['zaem_otchestvo'].'</p>
                        <p>Дата рождения заёмщика: '.$_POST['birth_date'].'</p>
                        <p>Мобильный заёмщика: '.$_POST['mobile'].'</p>
                        <p>email заёмщика: '.$_POST['email'].'</p>
                        <p>Стоимость обучения: '.$_POST['price'].'</p>
                        <p>Срок обучения: '.$_POST['period'].'</p>
                        <p>Название ВУЗа: '.$_POST['vuz_name'].'</p>
                       
                        <p>Серия и номер паспорта заёмщика: '.$_POST['pass_number'].'</p>
                        <p>Дата выдачи паспорта заёмщика: '.$_POST['pass_date'].'</p>
                        <p>Кем выдан паспорт заёмщику: '.$_POST['pass_who_give'].'</p>
                        <p>Код подразделения: '.$_POST['podrazdel_code'].'</p>
                        <p>Место рождения: '.$_POST['birth_place'].'</p>
                        <p>Адрес постоянной регистрации: '.$_POST['reg_address'].'</p>
                        <p>Почтовый индекс: '.$_POST['post_index'].'</p>
                        <p>Регион: '.$_POST['region'].'</p>
                        <p>Город: '.$_POST['city'].'</p>
                        <p>Улица: '.$_POST['street'].'</p>
                        <p>Дом: '.$_POST['house'].'</p>
                        <p>Квартира: '.$_POST['flat'].'</p>
                        <p>Домашний телефон: '.$_POST['home_phone'].'</p>
                        <p>Дата регистрации: '.$_POST['reg_date'].'</p>

                        <h3>Данные о трудоустройстве заёмщика</h3>
                        <p>Статус: '.$_POST['zaem_stat'].'</p>
                        <p>Название организации: '.$_POST['company_name'].'</p>
                        <p>Позиция: '.$_POST['position'].'</p>
                        <p>Трудовая деятельность на последнем месте работы: '.$_POST['month'].'</p>
                        <p>Год: '.$_POST['year'].'</p>
                        <p>Официальный доход в месяц: '.$_POST['income'].'</p>
                        
                        <h3>Место работы</h3>

                        <p>Почтовый индекс: '.$_POST['work_pos_code'].'</p>
                        <p>Провинция/штат/область/республика: '.$_POST['work_region'].'</p>
                        <p>Город: '.$_POST['work_city'].'</p>
                        <p>Улица: '.$_POST['work_street'].'</p>
                        <p>Здание/Строение/дом/курпус: '.$_POST['work_house'].'</p>
                        <p>Офис: '.$_POST['work_office'].'</p>
                        <p>Рабочий телефон: '.$_POST['work_phone'].'</p>
                        <p>ИНН работы: '.$_POST['work_inn'].'</p>
                        <p>ОГРН работы: '.$_POST['work_ogrn'].'</p>
                        

                        <h3>информация о поручителе</h3>
                        <p>Имя: '.$_POST['sponsor_name'].'</p>
                        <p>Фамилия: '.$_POST['sponsor_surname'].'</p>
                        <p>Отчество: '.$_POST['sponsor_otch'].'</p>
                        <p>Дата рождения: '.$_POST['sponsor_date_birth'].'</p>
                        <p>Контактный номер телефона: '.$_POST['sponsor_phone'].'</p>
                        <p>e-mail: '.$_POST['sponsor_email'].'</p>
                        <p>Дополнительная контактная информация: '.$_POST['sponsor_dop_info'].'</p>
                        <p>Серия и номер паспорта: '.$_POST['sponsor_passport'].'</p>
                        <p>Дата выдачи паспорта: '.$_POST['sponsor_date_passport'].'</p>
                        <p>Кем выдан: '.$_POST['sponsor_who_give'].'</p>
                        <p>Код подразделения: '.$_POST['sponsor_code_podrazd'].'</p>
                            
                        <h2>Адрес постоянной регистрации</h2>
                        

                        <p>Почтовый индекс: '.$_POST['sponsor_post_index'].'</p>
                        <p>Провинция/штат/область/республика: '.$_POST['sponsor_region'].'</p>
                        <p>Город: '.$_POST['sponsor_city'].'</p>
                        <p>Улица: '.$_POST['sponsor_street'].'</p>
                        <p>Здание/строение/дом/корпус: '.$_POST['sponsor_house'].'</p>
                        <p>Квартира: '.$_POST['sponsor_room'].'</p>
                        <p>Домашний телефон: '.$_POST['sponsor_home_phone'].'</p>
                        <p>Дата регистрации: '.$_POST['sponsor_reg_date'].'</p>
                        
                        <h2>Данные о трудоустройстве поручителя</h2>
                        <p>Название организации: '.$_POST['sponsor_company'].'</p>
                        <p>Занимаемая должность: '.$_POST['sponsor_position'].'</p>
                        <p>Период работы в указанной организации: '.$_POST['sponsor_period'].'</p>
                        <p>Год: '.$_POST['sponsor_year'].'</p>
                        <p>Официальный доход в месяц: '.$_POST['sponsor_income'].'</p>
                        
                        <h2>Место работы</h2>

                        <p>Почтовый индекс: '.$_POST['sponsor_job_index'].'</p>
                        <p>Провинция/штат/область/республика: '.$_POST['sponsor_job_region'].'</p>
                        <p>Город: '.$_POST['sponsor_job_city'].'</p>
                        <p>Улица: '.$_POST['sponsor_job_street'].'</p>
                        <p>Здание/строение/дом/корпус: '.$_POST['sponsor_job_house'].'</p>
                        <p>Офис: '.$_POST['sponsor_job_office'].'</p>
                        <p>Рабочий телефон: '.$_POST['sponsor_work_phone'].'</p>
                        <p>ИНН работы: '.$_POST['sponsor_job_inn'].'</p>
                        <p>ОГРН работы: '.$_POST['sponsor_job_ogrn'].'</p>
                        
                        <h2>Документы</h2>

                        <p>Договор с образовательным учреждением: '.$_POST['vuz_contract'].'</p>
                        <p>Изображение паспорта заемщика: '.$_POST['pass_photo'].'</p>
                        <p>Изображение второго документа заемщика: '.$_POST['second_doc'].'</p>
                        <p>Изображение паспорта поручителя: '.$_POST['sponsor_passport'].'</p>
                        <p>Изображение второго документа поручителя: '.$_POST['sponsor_sec_doc'].'</p>
                        


                    </body>
                </html>';

    $send = mail($to, $subject, $message, $headers);

    if ($send) {
        //----------------------
        echo "Ваша анкеты была отправлена. Подождите, сейчас вы будете перенаправлены на главную страницу.<br/>";


        echo "(Или перейдите по ссылке <a href=index.html>here</a>) если вы не хотите ждать.<br/>";
        ?>
        <script language="JavaScript" type="text/javascript">
        function changeurl()
        {
            eval(self.location="index.html");
        }
        window.setTimeout("changeurl();",3000);
        </script>
        <?php

        //----------------------
    }
    else {
        print "error";
    }
}
?>