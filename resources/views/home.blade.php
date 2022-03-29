@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row lh-sm fs-5">
       <h1 class="px-2">Привет!</h1>
       <h4>Данный сайт был разработан для международной цифровой олимпиады «Волга-IT`22»</h4>
       <p class="mb-1">Сайт разработан на фреймворке Laravel 8</p>
       <p class="mb-0"><strong>Инструкция по загрузке:</strong></p>
       <p class="mb-1">1. В верхнем меню переходите на вкладку "Загрузить словарь". Вписываете любое имя файла, а так-же выбираете сам файл.</p>
       <p class="mb-1">2. После загрузки файла вас автоматичеки переадресует на страницу с загруженными словарами (вкладка - Выбрать словарь). На этой странице вам необходимо выбрать один из загруженных ранее словарей.</p>
       <p class="mb-1">3. Выбрав словарь, вы увидите текст на английском языке, а так-же скрытый ниже текст на русском словаре. Ниже будет две кнопки для управления - "Показать слово" и "Следующее слово". </p>
       <p class="mt-2 mb-0"><strong>Инструкция по использованию:</strong></p>
       <p class="mb-1">В шапке сверху вы можете переключить направление перевода, кликнув на соотствеющую кнопку.</p>
       <p class="mb-1">Если вы захотите вернуться на первое слово, нажмите на кнопку "Начать заново".</p>
       <p class="mb-1">В любой момент вы можете загрузить новый словарь или выбрать другой из уже загруженных, используя навигацию сверху.</p>
       <p class="mt-2 mb-0"><strong>Важные аспекты:</strong></p>
       <p class="mb-1">1. Файлы необходимо загружать формата «CSV UTF-8 (разделитель - запятая)»</p>
       <p class="mb-1">2. На сайте нет авторизации (исходя из ТЗ). Ваши словари сохраняются в сессии.</p>
    </div>
</div>
@endsection
