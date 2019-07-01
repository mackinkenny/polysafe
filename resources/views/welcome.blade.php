@extends('layouts.app')
@push('styles')
@endpush
@section('content')
    <video class="w-100 d-md-block d-none" style="position: absolute; opacity: 0.5" preload="metadata" autoplay muted loop>
        <source src="{{URL::asset("/images/Polysafe.mp4")}}" type="video/mp4">
        Your browser does not support the video tag.
    </video>
    <div class="d-md-none d-block" style="padding-top:20%;">
        <a href="{{URL::asset("/images/Polysafe.mp4")}}">
        <video class="w-100" preload="metadata" autoplay muted loop>
            <source src="{{URL::asset("/images/Polysafe.mp4")}}" type="video/mp4">
            Your browser does not support the video tag.
        </video>
        </a>
    </div>
<div class="" id="main" style="padding-top:5%; padding-bottom:4%;">
    <div class="container-fluid main-ht" style="padding-left: 7%; height: 100vh;">
        <div class="row">

        <div class="col-md-4 col-12" style="padding-top: 7%;">
            <h1 class="font-weight-bold text-media text-fut-bold" style="font-size: 46px; line-height: 120%;">
                Прозрачные
                решетки на окна
                для безопасности
                всей семьи
            </h1>
            <p class="text-fut-light" style="font-size: 16px; line-height: 120%; margin-top: 4%; margin-bottom:5%; color:black;">
                Прозрачные решетки на окнах представляют собой
                прочные облегченные конструкции, которые обеспечивают
                высокий уровень безопасности. Эти изделия не менее
                надежды, чем стальные варианты ограждений. При этом они
                не нарушают внешний вид здания и его архитектуру.
            </p>
            <div>
                <button data-toggle="modal" data-target="#priceModal" class="py-2 px-4 text-fut-light" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">Рассчитать стоимость</button>
            </div>
        </div>
            <div class="col-1"></div>
            <div class="col-md-6 col-12 text-right d-md-block d-none" style="padding-top:15%;">
                <a href="{{URL::asset("/images/Polysafe.mp4")}}" style="text-decoration: none;">
                <i class="far fa-play-circle fa-10x text-secondary ica"></i>
                <br>
                <p class="pr-4 pt-2 text-secondary text-fut-bold">Смотреть видео</p>
                </a>
                {{--<img class="w-100 text-fut-light main-bg" src="{{ asset('images/window.png') }}" alt="">--}}
            </div>
        </div>

    </div>
</div>
<div class="container-fluid pt-5">
    <div class="row " style="background-image: url('{{asset('images/advantages.png')}}');background-size: cover; background-position: left;">
        <div class="col-md-8 col-12" style="padding-left: 7%;">
            <div>
                <h2 class="pl-3 font-weight-bold text-media text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid">
                    Прозрачные решетки на окна лучше
                    кованных по нескольким причинам
                </h2>
            </div>
        </div>
        <div class="col-md-8 col-12" style="padding-left: 7%;">
            <div class="mt-5 mb-5 bord" style="border-right: 1px solid #C4C4C4; padding-right: 7%;">
                <div class="row pt-md-5 pt-0">
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a1.png')}}" alt="">
                        <div class="pt-2 text-fut-light"><span style="line-height: 120%;">Конструкции могут выдерживать высокие весовые нагрузки (до 500кг)</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a2.png')}}" alt="">
                        <div class="pt-2 text-fut-light"><span style="line-height: 120%;">Аккуратный и привлекательный внешний вид</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a3.png')}}" alt="">
                        <div class="pt-2 text-fut-light"><span style="line-height: 120%;">Надежный уровень фиксации за счет большого количества креплений</span></div>
                    </div>
                </div>
                <div class="row pt-md-4 pt-0 ">
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a4.png')}}" alt="">
                        <div class="pt-2 text-fut-light"><span style="line-height: 120%;">Стойкость к влиянию негативных атмосферных факторов</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a5.png')}}" alt="">
                        <div class="pt-2 text-fut-light"><span style="line-height: 120%;">Простая система ухода, не требующая даполнительной обработки конструкций</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a6.png')}}" alt="">
                        <div class="pt-2 text-fut-light"><span style="line-height: 120%;">Для установки решеток на окна не требуется разрешение инстанций</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 p-md-5 p-0">
            <div>
                <div class="text-center">
                    <div class="p-4" style="background-image: url('{{ asset('images/formbg.png') }}'); background-size: cover;">
                    <p class="font-weight-bold pt-4 p-2 text-fut-bold" style="font-size: 25px; line-height: 120%;">
                        Заполните заявку, чтобы
                        получить скидку 10%
                    </p>
                        <div class="send-success-message-3 px-4 d-none" >
                            <i class="fas fa-check-circle" style="color:#00D9C0;"></i><span class="pl-2 text-fut-bold text-dark">Заявка успешно отправлена!</span>
                        </div>
                        <div class="send-error-message-3 px-4 d-none">
                            <i class="fas fa-exclamation-circle text-fut-bold text-dark" style="color:#d90002;"></i><span class="pl-2">Заявка не была отправлена!</span>
                        </div>
                    <form class="p-2" method="POST" enctype="multipart/form-data">
                        <input class="w-100 p-2 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="text" id="name-3" name="name" placeholder="Введите имя*">
                        <input class="w-100 p-2 mt-3 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="text" id="phone-3" name="phone" placeholder="Введите номер телефон*">
                        <input class="w-100 p-2 mt-3 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="text" id="email-3" name="email" placeholder="Введите E-mail*">
                        <button class="py-2 px-4 mt-3 text-fut-light" id="ajax-message-3" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">Отправить заявку</button>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid cont pt-md-0 pt-5" id="type" style="height: 800px; padding-bottom:10%; background-image: url('{{asset('images/types.png')}}'); background-size: cover; background-position: right;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <h2 class="font-weight-bold pl-3 text-media text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                    Виды пластиковых решеток на окна:
                    Распространенные варианты дизайна
                </h2>
            </div>
        </div>
        <div class="row pt-5 justify-content-end">
            <div class="col-md-9 col-12 position-absolute pl-media" style="z-index: 1; padding-left: 7%">
                <div class="container-fluid">
                <ul class="row nav nav-tabs" style="border:none!important;" id="myTab" role="tablist">
                    <li class="nav-item col-md-3 col-6 picks">
                        <a class="nav-link p-md-3 text-center text-fut-light tabs-media active" style="font-size:20px; border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var1" role="tab" aria-controls="" aria-selected="true">горизонтальные</a>
                    </li>
                    <li class="nav-item col-md-3 col-6 picks">
                        <a class="nav-link p-md-3 text-center text-fut-light tabs-media" style="font-size:20px; border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var2" role="tab" aria-controls="" aria-selected="true">вертикальные</a>
                    </li>
                    <li class="nav-item col-md-3 col-6 picks">
                        <a class="nav-link p-md-3 text-center text-fut-light tabs-media" style="font-size:20px; border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var3" role="tab" aria-controls="" aria-selected="true">со створками</a>
                    </li>
                    <li class="nav-item col-md-3 col-6 picks">
                        <a class="nav-link p-md-3 text-center text-fut-light tabs-media" style="font-size:20px; border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var4" role="tab" aria-controls="" aria-selected="true">цветные</a>
                    </li>
                </ul>
                </div>
            </div>
                <div class="tab-content col-12" id="myTabContent">
                    <div class="tab-pane fade active show" id="var1" role="tabpanel" aria-labelledby="">
                        <div class="row">
                            <div class="col-md-4 col-12 flex-column text-center">
                        <img class="tab-img varss" src="{{ asset('images/var1.png') }}" alt="">
                            </div>
                            <div class="col-md-4 col-12 pl-0 p-md-0 p-4" style="margin-top: 8%">
                                <h3 class="font-weight-bold py-3 text-fut-bold" style="font-size: 25px; line-height: 120%;">Горизонтальные решетки</h3>
                        <span class="text-fut-light" style="font-size: 16px; line-height: 120%;">
                            Чаще всего владельцы квартир прибегают к монтажу
                            решеток на окна на первый этаж с горизонтальными
                            ламеляли. Популярность подобных конструкций
                            обусловлена простой системой установки.
                        </span>
                                <p class="pt-3">
                                <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        самый популярный вариант
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        простая система установки
                                    </span>
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="tab-pane fade" id="var2" role="tabpanel" aria-labelledby="">
                        <div class="row">
                            <div class="col-md-4 col-12 text-center">
                                <img class="tab-img varss" src="{{ asset('images/vert.png') }}" alt="">
                            </div>
                            <div class="col-md-4 col-12 pl-0 p-md-0 p-4"  style="margin-top: 8%">
                                <h3 class="font-weight-bold py-3 text-fut-bold" style="font-size: 25px; line-height: 120%;">Вертикальные решетки</h3>
                                <span class="pb-3 text-fut-light" style="font-size: 16px; line-height: 120%;">
                            Конструкции с вертикально расположенными ламелями используются в тех случаях, когда крайне важно сохранить архитектурный стиль здания. Кроме этого они применяются в качестве альтернативного решения, если установка креплений для горизонтальных элементов осложнена какими-либо условиями.
                        </span>
                                <p class="pt-3">
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        Уникальный вид
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                       Альтернативное решение
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        Сохранение стиля здания
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="var3" role="tabpanel" aria-labelledby="">
                        <div class="row">
                            <div class="col-md-4 col-12 text-center">
                                <img class="tab-img varss" src="{{ asset('images/razdvishka.png') }}" alt="">
                            </div>
                            <div class="col-md-4 col-12 pl-0 p-md-0 p-4" style="margin-top: 8%">
                                <h3 class="font-weight-bold py-3 text-fut-bold" style="font-size: 25px; line-height: 120%;">Решетки со створками</h3>
                                <span class="pb-3 text-fut-light" style="font-size: 16px; line-height: 120%;">
                            Помимо стандартных конструкций возможно заказать конструкции с открывающимися створками, которые имеют ушки, предназначенные для установки замков навесного типа.
                        </span>
                                <p class="pt-3">
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        Увеличивают степень пожарной безопасности
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                       Также надежны, как и глухие варианты
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        Защитное ограждение невозможно открыть со стороны улицы
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="var4" role="tabpanel" aria-labelledby="">
                        <div class="row">
                            <div class="col-md-4 col-12 text-center">
                                <img class="tab-img varss" src="{{ asset('images/uzor.png') }}" alt="">
                            </div>
                            <div class="col-md-4 col-12 pl-0 p-md-0 p-4"  style="margin-top: 8%">
                                <h3 class="font-weight-bold py-3 text-fut-bold" style="font-size: 25px; line-height: 120%;">Цветные решетки</h3>
                                <span class="pb-3 text-fut-light" style="font-size: 16px; line-height: 120%;">
                            Витраж – один из вариантов декоративного оформления поликарбоната с помощью рисунков. При условии правильного выбора техники и самого узора можно создать неповторимое и уникальное оформление.
                        </span>
                                <p class="pt-3">
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                       Краска обладает атмосфероустойчивым свойством
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                       Экологично и безопасно
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2 text-fut-light" style="font-size: 16px; line-height: 21px;">
                                        Выбор цветовой гаммы практически неограничен
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

    <div class="container-fluid" style="background-image: url('{{asset('images/descriptionbg.png')}}'); background-size: cover; background-position:center; padding-bottom:13%;">
        <div class="row justify-content-center pb-5">
            <div class="col-md-6 col-12">
                <h2 class="font-weight-bold pl-3 text-media text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                    Технические характеристики решеток
                    на окна из поликарбоната
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-12 pr-md-0 pr-3 text-right cent" style="font-size: 16px; line-height: 21px;">
                <label class="d-md-none d-block">
                    <div id="b6" class="butt"></div>
                </label>
                <p class="cent text-fut-light" style="padding-top:6vh; font-size: 16px; line-height: 21px;">
                    Стандартная высота решетки составляет 200 см.
                </p>
                <div>
                    <label class="d-md-none d-block">
                        <div id="b6" class="butt"></div>
                    </label>
                <p class="cent text-fut-light" style="padding-top:8vh; font-size: 16px; line-height: 21px;">
                    Чтобы закрепить такую конструкцию потребуется
                    по 12 анкеров с каждой стороны. Для сравнения,
                    металлические решетки фиксируются с помощью
                    2-3 креплений, поэтому их так легко отколоть,
                    причем, вместе с куском стены.
                </p>
                </div>
            </div>
            <div class="col-3">
                <label class="d-md-block d-none">
                    <div id="b1" class="butt"></div>
                </label>
                <label class="d-md-block d-none">
                    <div id="b2" class="butt"></div>
                </label >
                <label class="d-md-block d-none">
                    <div id="b3" class="butt"></div>
                </label>
                <label class="d-md-block d-none">
                    <div id="b4" class="butt"></div>
                </label>
                <label class="d-md-block d-none">
                    <div id="b5" class="butt"></div>
                </label>
                <img class="w-100 d-md-block d-none" src="{{ asset('images/description.png') }}" alt="">
            </div>
            <div class="col-md-4 col-12 pl-md-0 pl-3">
                <label class="d-md-none d-block">
                    <div id="b6" class="butt"></div>
                </label>
                <p class="cent text-fut-light" style="padding-top:10vh; font-size: 16px; line-height: 21px;">
                    В качестве основы прозрачных решеток
                    на окна выступают пластиковые ламели.
                </p>
                <label class="d-md-none d-block">
                    <div id="b6" class="butt"></div>
                </label>
                <p class="cent text-fut-light" style="padding-top:6vh; font-size: 16px; line-height: 21px;">
                    Для защиты металлических элементов от коррозии
                    используется покрытие в виде порошковой краски.
                    Производители предлагают широкий выбор расцветок.
                </p>
                <label class="d-md-none d-block">
                    <div id="b6" class="butt"></div>
                </label>
                <p class="cent text-fut-light" style="padding-top:5vh; font-size: 16px; line-height: 21px;">
                    Крепления распологаются с шагом в 14см.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid bgtd" id="advantages" style="padding:8%; background-image: url('{{ asset('images/plus.png') }}'); background-size: 100% 100%;">
        <div class="row">
            <div class="col-md-3 col-12 pl-md-4">
                <img class="pb-3" src="{{ asset('images/plus1.png') }}" alt="">
                <p class="text-fut-light" style="font-size: 14px; line-height: 120%; color:white;">
                    Современный внешний вид -
                    просто и эстетично!
                </p>
                <img class="pb-3 pt-5" src="{{ asset('images/pencil.png') }}" alt="">
                <p class="text-fut-light"  style="font-size: 14px; line-height: 120%; color:white;">
                    Не ржавеют и не требуют перекраски!
                </p>
            </div>
            <div class="col-md-3 col-12">
                <img class="pt-5 pb-3" src="{{ asset('images/plus2.png') }}" alt="">
                <p class="text-fut-light"  style="font-size: 14px; line-height: 120%; color:white;">
                    Не поддерживают горение,
                    выдерживают жару и холод!
                </p>
                <img class="pt-5 pb-3" src="{{ asset('images/scale.png') }}" alt="">
                <p class="text-fut-light"  style="font-size: 14px; line-height: 120%; color:white;">
                    Малый вес! Множественное крепление!
                </p>
            </div>
            <div class="col-md-6 col-12">
                <div class="row container-fluid">
                    <h2 class="font-weight-bold pl-3 text-media mt-md-0 mt-4 text-fut-bold" style="color:white; font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                        Преимущества использования
                        прозрачных решеток на окнах
                    </h2>
                    <div class="row">
                        <div class="col-md-5 col-12 pt-4 pr-md-4 pr-0">
                            <span class=""  style="font-size: 16px; line-height: 120%; color:white; font-family: 'Futura PT Light';">
                                Решетки выполнены из
                                прозрачного поликарбоната.
                                Решетки обеспечивают защиту от
                                вторжения снаружи, а также
                                препятствуют выпадению детей из
                                окон. При этом эстетически очень
                                приятны. Можно устанавливать на
                                окно или балкон на любой этаж.
                            </span>
                        </div>
                        <div class="col-md-7 col-12 pt-4 pr-md-4 pr-0">
                            <span class=""  style="font-size: 16px; line-height: 120%; color:white; font-family: 'Futura PT Light'">
                                Он в два раза легче и в 250 раз прочнее стекла. И при этом удивительно гибок. Материал спокойно выдерживает удары молотком, битой, топором. Да что говорить, достаточно и одного факта: именно поликарбонат используется в качестве лицевого щитка в космическом скафандре. Одним словом: материал достойный.
                            </span>
                        </div>
                    </div>
                    <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-3 mt-4 text-fut-light" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                        Рассчитать стоимость
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5" style="background-image: url({{asset('images/black.png')}}); background-size: 100% 100%;">
        <div class="row justify-content-center pt-4">
            <div class="col-md-6 col-12 text-center">
                <h2 class="font-weight-bold text-fut-bold" style="color:white; font-size:36px; line-height: 120%;">Все еще есть вопросы?</h2>
                <span class="text-fut-bold"  style="font-size:22px; line-height: 120%; color:white;">
                    Оставьте заявку, мы перезвоним и ответим
                    на все Ваши вопросы
                </span>
                <div class="send-success-message-2 p-4 d-none" >
                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i><span class="pl-2 text-fut-bold text-white">Отзыв успешно отправлен!</span>
                </div>
                <div class="send-error-message-2 p-4 d-none">
                    <i class="fas fa-exclamation-circle text-fut-bold text-white" style="color:#d90002;"></i><span class="pl-2 text-fut-bold text-white">Отзыв не был отправлен!</span>
                </div>
            </div>
        </div>
        <form class="pb-4"  method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row mt-5">
                    <div class="col-md-3 col-12">
                        <input class="w-100 p-3 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="text" id="name-2" name="name" placeholder="Введите имя*">
                    </div>
                    <div class="col-md-3 col-12 pt-md-0 pt-3">
                        <input class="w-100 p-3 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="tel" id="phone-2" name="phone" placeholder="Введите номер телефон*">
                    </div>
                    <div class="col-md-3 col-12 pt-md-0 pt-3">
                        <input class="w-100 p-3 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="email" id="email-2" name="email" placeholder="Введите E-mail*">
                    </div>
                    <div class="col-md-3 col-12 pt-md-0 pt-3 cent">
                        <button class="py-3 text-fut-light" id="ajax-message-2" style="padding-left:20%; padding-right:20%; color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                            Отправить
                        </button>
                        {{--<a class="col-md-3 col-12 pt-md-0 pt-3 cent" id="ajax-message-2" href="#"--}}
                           {{--style="padding-left:20%; padding-right:20%; color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">--}}
                            {{--Отправить--}}
                        {{--</a>--}}
                    </div>
            </div>
        </form>
    </div>
<div class="w-100"  style="background-image: url({{asset('images/safe.png')}}); background-size: 100% 100%; padding-bottom:10%;">
    <div class="container pt-5">
        <div class="row">
        <div class="col-md-5 col-12">
            <img class="tab-img w-100" src="{{ asset('images/still.png') }}" alt="">
        </div>
            <div class="col-md-7 col-12 pl-md-5 pl-3 pt-md-0 pt-5">
                <h2 class="font-weight-bold pl-3 text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                    Обезопасьте своих близких от взлома вашего дома
                </h2>
                <p class="pt-4 text-fut-light" style="font-size: 16px; line-height: 120%;">
                    В Кыргызстане в среднем каждые 4 минуты совершается взлом. В прошлом
                    году количество таких преступлений возросло более чем на 8%.
                </p>
                <p class="text-fut-light" style="font-size: 16px; line-height: 120%;">
                    Преступников, которых милиции удается поймать, весьма мало. Причину
                    низкого уровня раскрытия такого рода преступлений, с одной стороны, и в
                    то же время роста их числа, с другой стороны.
                </p>
                <p class="text-fut-light" style="font-size: 16px; line-height: 120%;">
                    В многосемейных домах преступники свыше 50% случаев проникают
                    в квартиру через окно.
                </p>

                <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-3 mt-5 text-fut-light" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                    Рассчитать стоимость
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 col-12" style="padding-left:8%; padding-top:15%;">
        <h2 class="font-weight-bold pl-3 text-media text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
            Решетки на окнах помогают
            спасти ваших детей от падения
        </h2>

        <p class="pt-5 text-fut-light" style="font-size: 16px; line-height: 120%;">
            С каждым годом проблема падения детей из окон усугубляется, число таких
            случаев растет. Проблема имеет международный масштаб. По данным
            США, ежегодно из окон выпадают более 5 тысяч детей. В России в теплые
            месяцы фиксируется до трехсот падений детей с высоты ежедневно.
            В Казахстане за прошлый год из окон выпало более восьмидесяти детей.
        </p>
            <p class="font-weight-bold text-fut-light" style="font-size: 16px; line-height: 120%;">
                Защитите своих малышей от выпадения из окна.
            </p>
            <button data-toggle="modal" data-target="#priceModal" class="py-2 px-3 mt-5 text-fut-light" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                Рассчитать стоимость
            </button>
        </div>
            <div class="col-md-6 col-12 mt-md-0 mt-5">
                <div class="row justify-content-center">
        <div class="col-md-3 col-4 pr-0 text-right" style="padding-top:10%; z-index:10;">
            <img class="w-100"  src="{{ asset('images/safe1.png') }}" alt="">
        </div>
            <div class="col-md-3 col-4" style="z-index:10;">
                <img class="w-100" style="z-index:10; box-shadow: 0px 45px 40px -30px #09E2FD;" src="{{ asset('images/safe2.png') }}" alt="">
            </div>
                    <div class="col-md-2 col-3 pad-t pl-0" style="padding-top:13%;z-index:10;">
                        <img class="w-100" style="z-index:10;" src="{{ asset('images/safe3.png') }}" alt="">
                    </div>
                </div>
                <div class="par">
                <img class="position-absolute d-md-block d-none" style="bottom:0px; z-index:0;" src="{{asset('images/ell.png')}}" alt="">
                </div>
        </div>
        </div>
    </div>
</div>
<div class="container-fluid" id="feedback" style="padding-bottom: 3%">
    <div class="row">
        <div class="col-md-4 col-12" style="padding-left:8%;">
            <h2 class="font-weight-bold pl-3 text-media text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                Нам доверяют
                безопасность своих
                домочадцев
            </h2>
            <button data-toggle="modal" data-target="#feedbackModal" class="py-2 px-3 mt-5 text-fut-light rounded-pill shadow-polysafe text-white border-0 bg-polysafe">
                Оставить отзыв
            </button>
        </div>
        <div class="col-md-8 col-12 mt-md-0 mt-4 pr-0">
            <div class="row container pr-md-0 pr-0">
                <div id="carouselExampleIndicators2" class="carousel slide d-md-block d-none" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators2" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators2" data-slide-to="1"></li>
                        {{--<li data-target="#carouselExampleIndicators2" data-slide-to="2"></li>--}}
                    </ol>
                    <div class="carousel-inner" style="height:120%!important;">
                        <div class="carousel-item active">
                            <div class="row container justify-content-center">
                                <div class="col-md-5 m-2 col-12 p-5 text-fut-light shadow" style="font-size: 16px;">
                                    Надежно и красиво
                                    <br>
                                    "Нам посоветовали поликарбонатные решетки, оказалось не зря.
                                    Выглядят они на порядок лучше, при этом по прочности железу
                                    не уступают. По крайней мере, мы пытались сломать - не смогли.
                                    Теперь спокойно покидаем дом, да и окна открываем в жару,
                                    не опасаясь, что кот выскочит на улицу или ребенок вывалится из окна."
                                    <div class="pt-4 text-fut-bold">
                                        Мира Раимкулова
                                    </div>
                                </div>

                                <div class="col-md-5 m-2 col-12 p-5 text-fut-light shadow" style="font-size: 16px;">
                                    "Меня всегда раздражали старые металлические решетки. Как только у нас начали
                                    устанавливать прозрачные решетки, решила на свой страх и риск поменять защиту
                                    на окнах. После их установки в комнатах стало светлее. С безопасностью тоже
                                    все в полном порядке – надежность решеток проверяли мои недоверчивые и сильные друзья."
                                    <div class="pt-4 text-fut-bold">
                                        Светлана Гилунова
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row container justify-content-center">
                                <div class="col-md-5 m-2 col-12 p-5 text-fut-light shadow" style="font-size: 16px;">
                                    "Современные, не ржавеют, можно даже из нержавейки раму. Пропускают свет, защищают окна.
                                    Заказали, изготовили за неделю. На деле не проверишь, но материал удачный - очень прозрачный, толстый.
                                    Смонтировали быстро, натянули ламели. Мыть сказали раз в год весной - тряпкой с мыльным раствором.
                                    Жена довольна, теперь окна можно открывать - не страшно оставлять ребенка с бабушкой. Душа спокойна."
                                    <div class="pt-4 text-fut-bold">
                                        Айдана Кулатова
                                    </div>
                                </div>
                                {{--<div class="col-md-5 m-2 col-12 p-5 text-fut-light shadow" style="font-size: 16px;">--}}
                                    {{--Давно выяснено, что при оценке дизайна и композиции--}}
                                    {{--читаемый текст мешает сосредоточиться. Lorem Ipsum--}}
                                    {{--используют потому, что тот обеспечивает более или--}}
                                    {{--менее стандартное заполнение шаблона, а также реальное--}}
                                    {{--распределение букв и пробелов в абзацах, которое не--}}
                                    {{--получается при простой дубликации "Здесь ваш текст..--}}
                                    {{--Здесь ваш текст.. Здесь ваш текст.."--}}
                                    {{--<div class="pt-4 text-fut-bold">--}}
                                        {{--Айдана Кулатова--}}
                                    {{--</div>--}}
                                {{--</div>--}}

                            {{--</div>--}}
                        </div>
                    </div>
                    <a style="left:-5%;" class="carousel-control-prev" href="#carouselExampleIndicators2" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left" style="font-size:30px; color:black;"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a style="right:-1%;" class="carousel-control-next" href="#carouselExampleIndicators2" role="button" data-slide="next">
                        <i class="fas fa-chevron-right" style="font-size:30px; color:black;"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
                </div>
                <div id="carouselExampleIndicators3" class="carousel slide d-md-none d-block pr-0" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators3" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators3" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner" style="height:45vh!important;">
                        <div class="carousel-item active">
                            <div class="row container justify-content-center pr-0 mr-0">
                                <div class="col-md-12 m-2 col-12 p-4 text-fut-light shadow" style="font-size: 16px;">
                                    Надежно и красиво
                                    <br>
                                    "Нам посоветовали поликарбонатные решетки, оказалось не зря.
                                    Выглядят они на порядок лучше, при этом по прочности железу
                                    не уступают. По крайней мере, мы пытались сломать - не смогли.
                                    Теперь спокойно покидаем дом, да и окна открываем в жару,
                                    не опасаясь, что кот выскочит на улицу или ребенок вывалится из окна."
                                    <div class="pt-4 text-fut-bold">
                                        Мира Косорукова
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row container justify-content-center pr-0 mr-0">
                                <div class="col-md-12 m-2 col-12 p-4 text-fut-light shadow" style="font-size: 16px;">
                                    "Меня всегда раздражали старые металлические решетки. Как только у нас начали
                                    устанавливать прозрачные решетки, решила на свой страх и риск поменять защиту
                                    на окнах. После их установки в комнатах стало светлее. С безопасностью тоже
                                    все в полном порядке – надежность решеток проверяли мои недоверчивые и сильные друзья."
                                    <div class="pt-4 text-fut-bold">
                                        Светлана Гилунова
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="row container justify-content-center pr-0 mr-0">
                                <div class="col-md-12 m-2 col-12 p-4 text-fut-light shadow" style="font-size: 16px;">
                                    "Современные, не ржавеют, можно даже из нержавейки раму. Пропускают свет, защищают окна.
                                    Заказали, изготовили за неделю. На деле не проверишь, но материал удачный - очень прозрачный, толстый.
                                    Смонтировали быстро, натянули ламели. Мыть сказали раз в год весной - тряпкой с мыльным раствором.
                                    Жена довольна, теперь окна можно открывать - не страшно оставлять ребенка с бабушкой. Душа спокойна."
                                    <div class="pt-4 text-fut-bold">
                                        Айдана Кулатова
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                    <a style="left:-3%" class="carousel-control-prev" href="#carouselExampleIndicators3" role="button" data-slide="prev">
                        <i class="fas fa-chevron-left" style="font-size:30px; color:black;"></i>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a  class="carousel-control-next" href="#carouselExampleIndicators3" role="button" data-slide="next">
                        <i class="fas fa-chevron-right" style="font-size:30px; color:black;"></i>
                        <span class="sr-only">Next</span>
                    </a>
                </div>
    </div>
</div>
</div>
</div>
<div class="container-fluid d-none">
    <div class="row justify-content-center">
        <div class="col-md-4 col-12 pb-5" style="padding-right: 5%;">
            <h2 class="font-weight-bold pl-3 text-fut-bold" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                Убедитесь в
                прочности решеток
            </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            {{--<img class="w-100" src="{{asset('images/vids.png')}}" alt="">--}}
            <video class="w-100" controls>
                <source src="{{URL::asset("/images/Polysafe.mp4")}}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</div>
<div id="galler" class="container mb-5 mt-md-0 mt-4" style="padding-top: 5%;">
    <h2 class="font-weight-bold pl-3 col-3 text-fut-bold mb-5" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
        Галерея
        наших окон
    </h2>
    <div class="container-fluid row justify-content-center">
        <div id="carouselgallery" class="carousel slide d-md-block d-none" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselgallery" data-slide-to="0" class="active"></li>
                <li data-target="#carouselgallery" data-slide-to="1"></li>
                <li data-target="#carouselgallery" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner"  style="width:80vw!important; height: 120vh!important;">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery" href="{{ asset('images/gallery1.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                            <img class="gallery" src="{{ asset('images/gallery1.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery2.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery2.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery" href="{{ asset('images/gallery3.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery3.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery4.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery4.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery5.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery5.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery6.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery6.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery" href="{{ asset('images/gallery1.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery1.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery2.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery2.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery" href="{{ asset('images/gallery3.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery3.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery4.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery4.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery5.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery5.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery6.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery6.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery" href="{{ asset('images/gallery1.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery1.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery2.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery2.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery" href="{{ asset('images/gallery3.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery3.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                    <div class="row justify-content-center">
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery4.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery4.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery5.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery5.png') }}" alt="">
                            </div>
                        </a>
                        <a class="p-3 h-100" data-fancybox="gallery" href="{{ asset('images/gallery6.png') }}">
                            <div style="background: linear-gradient(to right,#42559B,#00D9C0);">
                                <img class="gallery" src="{{ asset('images/gallery6.png') }}" alt="">
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <a style="left:-8%!important;" class="carousel-control-prev" href="#carouselgallery" role="button" data-slide="prev">
                <i class="fas fa-chevron-left" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a style="right:-8%!important;" class="carousel-control-next" href="#carouselgallery" role="button" data-slide="next">
                <i class="fas fa-chevron-right" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
</div>
    <div class="container-fluid row justify-content-center pr-0" style="margin-right: 0px!important;">
        <div id="carouselgallery-mob" class="carousel slide d-md-none d-block" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselgallery-mob" data-slide-to="0" class="active"></li>
                <li data-target="#carouselgallery-mob" data-slide-to="1"></li>
                <li data-target="#carouselgallery-mob" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" style="width:80vw!important; height: 45vh!important;">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery1" href="{{ asset('images/gallery1.png') }}">
                        <img class="gallery" src="{{ asset('images/gallery1.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery1" href="{{ asset('images/gallery2.png') }}">
                        <img class="gallery" src="{{ asset('images/gallery2.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery1" href="{{ asset('images/gallery3.png') }}">
                        <img class="gallery" src="{{ asset('images/gallery3.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery1" href="{{ asset('images/gallery4.png') }}">
                        <img class="gallery" src="{{ asset('images/gallery4.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery1" href="{{ asset('images/gallery5.png') }}">
                        <img class="gallery" src="{{ asset('images/gallery5.png') }}" alt="">
                        </a>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <a class="p-3 h-100 mt-auto" data-fancybox="gallery1" href="{{ asset('images/gallery6.png') }}">
                        <img class="gallery" src="{{ asset('images/gallery6.png') }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
            <a  class="carousel-control-prev" href="#carouselgallery-mob" role="button" data-slide="prev">
                <i class="fas fa-chevron-left" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselgallery-mob" role="button" data-slide="next">
                <i class="fas fa-chevron-right" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>


<div class="container-fluid">
    <div class="row bgt ml-0" style="background-image: url({{asset('images/down-pic.png')}}); background-size: 100% 100%; padding-top: 2%; padding-bottom: 8%!important;">
        <div class="col-md-6 col-12 px-0">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img class="w-100" src="{{asset('images/down-pic-4.png')}}" alt="">
                </div>
                <div class="col-md-6 col-12 cent">
                    <h2 class="font-weight-bold text-fut-bold" style="font-size: 36px; line-height: 120%;">
                        Установите прозрачные решетки на первые 2 окна со скидкой 10%
                    </h2>
                    <p class="pt-3 text-fut-light" style="font-size: 16px; line-height: 120%;">
                        Надёжная защита от Polysafe выгодно! Закажите решетки на первые 2 окна со скидкой 10%.
                    </p>
                    <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-3 text-fut-light" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                        Рассчитать стоимость
                    </button>
                </div>
            </div>
            </div>
        </div>

        <div class="col-8 px-0">

        </div>
    </div>
    <div class="row" id="contact">
        <div class="col-md-4 col-12 px-0">
            <img class="w-100 h-100" src="{{asset('images/down-pic2.png')}}" alt="">
        </div>
        <div class="col-md-8 col-12 px-0">
            <div class="container">
            <div class="row p-5">
            <div class="col-md-6 col-12">
                <h2 class="text-fut-bold" style="font-size: 36px; line-height: 120%; font-weight:800;">
                    Контакты
                </h2>
                <p class="text-fut-light" style="font-size: 16px; line-height: 120%;">
                    Свяжитесь с нами любым удобным для Вас
                    способом, и мы ответим на все Ваши вопросы
                    как можно быстрее
                </p>
                <p class="mb-0 text-fut-light">Телефон:</p>
                <p class="mb-0"><a class="font-weight-bold text-fut-bold" href="tel: +996554803838" style="color:black;">+996554803838</a></p>
                <p class="mb-0"><a class="font-weight-bold text-fut-bold" href="tel: +996557088444" style="color:black;">+996557088444</a></p>
                <p class="mb-0"><a class="font-weight-bold text-fut-bold" href="tel: +996703803838" style="color:black;">+996703803838</a></p>
                <p class="mb-0 text-fut-light">E-mail:</p>
                <p><a href="mailto:askar@sa.kg" class="font-weight-bold text-fut-bold" style="color:black;">askar@sa.kg</a></p>
                <p class="mb-0 text-fut-light">Адрес:</p>
                <p><a href="https://2gis.kg/bishkek/firm/70000001019370919?queryState=center%2F74.615386%2C42.870138%2Fzoom%2F18" style="color:black;" class="font-weight-bold text-fut-bold">г. Бишкек, ул. Шопокова 89, ТЦ "Мега Комфорт"</a></p>
            </div>
                <div class="col-md-6 col-12 px-md-5 px-0 pt-md-0 pt-5">
                    <div class="text-center">
                    <h2 class="font-weight-bold text-fut-bold" style="font-size: 25px; line-height: 120%;">
                        Заполните заявку, чтобы
                        получить скидку 10%
                    </h2>

                        <div class="send-success-message-1 px-4 d-none" >
                            <i class="fas fa-check-circle" style="color:#00D9C0;"></i><span class="pl-2 text-fut-bold text-dark">Заявка успешно отправлена!</span>
                        </div>
                        <div class="send-error-message-1 px-4 d-none">
                            <i class="fas fa-exclamation-circle text-fut-bold text-dark" style="color:#d90002;"></i><span class="pl-2">Заявка не была отправлена!</span>
                        </div>
                    <form action="{{ route('message') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                        <input class="col-md-8 col-12 mt-0 p-2 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="text" id="name-1" name="name" placeholder="Введите имя*">
                        </div>
                        <div class="form-group">
                        <input class="col-md-8 col-12 mt-0 p-2 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="tel" id="phone-1" name="phone" placeholder="Ведите телефон*">
                        </div>
                        <div class="form-group">
                        <input class="col-md-8 col-12 mt-0 p-2 border-0" style="font-family: 'Futura PT light'; box-shadow: inset 0.1px 0.1px 8px -3px rgba(0,0,0,1);" type="email" id="email-1" name="email" placeholder="Введите E-mail*">
                        </div>
                        <div class="form-group mt-5">
                            <a class="py-2 px-3 mt-3 text-fut-light" id="ajax-message-1" href="#"
                               style="color: white;background:#00D9C0; border:0px;   box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                                Отправить заявку
                            </a>
                        </div>
                    </form>
                    </div>

                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<div class="container-fluid text-center py-4" style="background-color: #232323">
    <span style="font-size:16px;line-height:21px; color:#868686;">Copyright 2019</span>
</div>

<div class="modal fade" id="priceModal" tabindex="15" role="form"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content" style="background: linear-gradient(158.72deg, #00D9C0 8.63%, #42559B 96.78%);">
            {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title text-secondary" id="exampleModalLabel"></h5>--}}
                {{----}}
            {{--</div>--}}
            <div>
                <div class="modal-body p-5 text-center">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <h2 class="mb-3" style="font-size: 25px; line-height: 120%; color: white;">
                        Рассчитайте стоимость бесплатно
                    </h2>
                    <div class="send-success-mail p-4 d-none" >
                        <i class="fas fa-check-circle" style="color:#00D9C0;"></i><span class="pl-2 text-fut-bold text-white">Заявка успешно отправлена!</span>
                    </div>
                    <div class="send-error-mail p-4 d-none">
                        <i class="fas fa-exclamation-circle" style="color:#d90002;"></i><span class="pl-2 text-fut-bold text-white">Заявка не была отправлена!</span>
                    </div>
                    <form action="{{ route('mail') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="width" type="text" id="width-mail" placeholder="Ширина окна (см)">
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="height" type="text" id="height-mail" placeholder="Высота окна (см)">
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="name" type="text" id="name-mail" placeholder="Введите имя*" required>
                        </div>
                        <div class="form-group">
                            <input class="w-100 mb-2 p-2" name="phone" type="tel" id="phone-mail" placeholder="Введите телефон*" required>
                        </div>
                        <div class="from-group">
                            <input class="w-100 mb-2 p-2" name="email" type="email" id="email-mail" placeholder="Введите E-mail*" required>
                        </div>
                        <div class="form-group mt-3">
                            <a class="py-2 px-3 mt-3" id="ajax-mail" href="#"
                               style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                                Рассчитать стоимость
                            </a>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>

    <div class="modal fade" id="feedbackModal" tabindex="15" role="form"
         aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content feedback-content" style="background: linear-gradient(158.72deg, #00D9C0 8.63%, #42559B 96.78%);">
                {{--<div class="modal-header">--}}
                {{--<h5 class="modal-title text-secondary" id="exampleModalLabel"></h5>--}}
                {{----}}
                {{--</div>--}}
                <div>
                    <div class="modal-body p-5 text-center">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="mb-3" style="font-size: 25px; line-height: 120%; color: white;">
                            Оставьте нам свой отзыв
                        </h2>
                        <div class="send-success-feedback p-4 d-none" >
                            <i class="fas fa-check-circle" style="color:#00D9C0;"></i><span class="pl-2 text-fut-bold text-white">Отзыв успешно отправлен!</span>
                        </div>
                        <div class="send-error-feedback p-4 d-none">
                            <i class="fas fa-exclamation-circle text-fut-bold text-white" style="color:#d90002;"></i><span class="pl-2">Отзыв не был отправлен!</span>
                        </div>
                        <form action="{{ route('feedback') }}" method="POST" enctype="multipart/form-data" id="form-feedback">
                            @csrf
                            <div class="form-group">
                                <input class="w-100 mb-2 p-2" name="name" type="text" id="name-feedback" placeholder="Ваше имя*" required>
                            </div>
                            <div class="form-group">
                                <input class="w-100 mb-2 p-2" name="phone" type="tel" id="phone-feedback" placeholder="Ваш номер телефон*" required>
                            </div>
                            <div class="form-group">
                                <input class="w-100 mb-2 p-2" name="email" type="email" id="email-feedback" placeholder="Введите E-mail*" required>
                            </div>
                            <div class="form-group">
                                <textarea class="w-100 mb-2 p-2" name="message" type="message" id="message-feedback" placeholder="Сообщение*" required></textarea>
                            </div>
                            <div class="form-group">
                                <a class="py-2 px-3 mt-3" id="ajax-feedback" href="#"
                                             style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                                Отправить
                            </a>
                    </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <a class="call-a d-md-block d-none" href="tel: +996554803838">
        <i class="call-ic fa fa-phone fa-2x"></i>
    </a>
    <a class="wa-a d-md-block d-none" href="https://api.whatsapp.com/send?phone=996554803838">
        <i class="wa-ic fab fa-whatsapp fa-2x"></i>
    </a>


    @push('scripts')
    <script>
        $('#ajax-feedback').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#name-feedback');
            let phone = $('#phone-feedback');
            let email = $('#email-feedback');
            let message = $('#message-feedback');

            $.ajax({
                url: '{{ route('feedback') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "message": message.val()
                },
                success: data => {
                    $(".send-success-feedback").removeClass('d-none');
                },
                error: () => {
                    $(".send-error-feedback").removeClass('d-none');
                }
            })
        })
    </script>
    <script>
        $('#ajax-mail').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let width = $('#width-mail');
            let height = $('#height-mail');
            let name = $('#name-mail');
            let phone = $('#phone-mail');
            let email = $('#email-mail');

            $.ajax({
                url: '{{ route('mail') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val(),
                    "width": width.val(),
                    "height": height.val()
                },
                success: data => {
                    $(".send-success-mail").removeClass('d-none');
                },
                error: () => {
                    $(".send-error-mail").removeClass('d-none');
                }
            })
        })
    </script>
    <script>
        $('#ajax-message-1').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#name-1');
            let phone = $('#phone-1');
            let email = $('#email-1');

            $.ajax({
                url: '{{ route('message') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val()
                },
                success: data => {
                    $(".send-success-message-1").removeClass('d-none');
                },
                error: () => {
                    $(".send-error-message-1").removeClass('d-none');
                }
            });


        })
    </script>
    <script>
        $('#ajax-message-2').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#name-2');
            let phone = $('#phone-2');
            let email = $('#email-2');

            $.ajax({
                url: '{{ route('message') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val()
                },
                success: data => {
                    $(".send-success-message-2").removeClass('d-none');
                },
                error: () => {
                    $(".send-error-message-2").removeClass('d-none');
                }
            });

        })
    </script>
    <script>
        $('#ajax-message-3').click(e => {
            e.preventDefault();
            let btn = $(e.currentTarget);
            let name = $('#name-3');
            let phone = $('#phone-3');
            let email = $('#email-3');

            $.ajax({
                url: '{{ route('message') }}',
                method: 'POST',
                data: {
                    "_token": "{{ csrf_token() }}",
                    "name": name.val(),
                    "phone": phone.val(),
                    "email": email.val()
                },
                success: data => {
                    $(".send-success-message-3").removeClass('d-none');
                },
                error: () => {
                    $(".send-error-message-3").removeClass('d-none');
                }
            });

        })
    </script>
@endpush
@endsection

