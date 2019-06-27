@extends('layouts.app')
@push('styles')
@endpush
@section('content')
<div class="bgt" style="background-image: url({{asset('images/mainbg.png')}}); background-size: 100% 100%; padding-top:15%; padding-bottom:10%;">
    <div class="container-fluid" style="padding-left: 10%;">
        <div class="row">
        <div class="col-md-4 col-12">
            <h1 class="font-weight-bold text-media" style="font-size: 46px; line-height: 120%;">
                Прозрачные
                решетки на окна
                для безопасности
                всей семьи
            </h1>
        </div>
        </div>
        <div class="row pt-5">
        <div class="col-md-4 col-12">
            <span style="font-size: 16px; line-height: 120%;">
                Прозрачные решетки на окнах представляют собой
                прочные облегченные конструкции, которые обеспечивают
                высокий уровень безопасности. Эти изделия не менее
                надежды, чем стальные варианты ограждений. При этом они
                не нарушают внешний вид здания и его архитектуру.
            </span>
        </div>
        </div>
        <div class="pt-5">
            <button data-toggle="modal" data-target="#priceModal" class="py-2 px-3" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">Рассчитать стоимость</button>
        </div>
    </div>
</div>
<div class="container-fluid pt-5">
    <div class="row bgt" style="background-image: url('{{asset('images/advantages.png')}}');background-size: 100% 100%;">
        <div class="col-md-7 col-12" style="padding-left: 10%;">
            <div>
                <h2 class="pl-3 font-weight-bold text-media" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid">
                    Прозрачные решетки на окна лучше
                    кованных по нескольким причинам
                </h2>
            </div>
            <div class="mt-5 mb-5" style="border-right: 1px solid #C4C4C4;">
                <div class="row">
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a1.png')}}" alt="">
                        <div class="pt-2"><span style="font-size: 16px; line-height: 120%;">Конструкции могут выдерживать высокие весовые нагрузки (до 500кг).</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a2.png')}}" alt="">
                        <div class="pt-2"><span style="font-size: 16px; line-height: 120%;">Аккуратный и привлекательный внешний вид</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a3.png')}}" alt="">
                        <div class="pt-2"><span style="font-size: 16px; line-height: 120%;">Надежный уровень фиксации за счет большого количества креплений</span></div>
                    </div>
                </div>
                <div class="row pt-md-4 pt-0 ">
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a4.png')}}" alt="">
                        <div class="pt-2"><span style="font-size: 16px; line-height: 120%;">Стойкость к влиянию негативных атмосферных факторов</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a5.png')}}" alt="">
                        <div class="pt-2"><span style="font-size: 16px; line-height: 120%;">Простая система ухода, не требующая даполнительной обработки конструкций</span></div>
                    </div>
                    <div class="col-md-4 col-12 pb-md-0 pb-4">
                        <img src="{{asset('images/a6.png')}}" alt="">
                        <div class="pt-2"><span style="font-size: 16px; line-height: 120%;">Для установки решеток на окна не требуется разрешение инстанций</span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-4 col-12 p-md-5 p-0">
            <div>
                <div class="text-center">
                    <div class="p-4" style="background-image: url('{{ asset('images/formbg.png') }}'); background-size: cover;">
                    <p class="font-weight-bold pt-4 p-2" style="font-size: 25px; line-height: 120%;">
                        Заполните заявку, чтобы
                        получить скидку 10%
                    </p>
                    <form class="p-4" action="">
                        <input class="w-100 p-2 mt-3" style="font-family: 'Futura PT'" type="text" id="name" name="name" placeholder="Введите имя*">
                        <input class="w-100 p-2 mt-3" style="font-family: 'Futura PT'" type="text" id="name" name="name" placeholder="Ведите телефон*">
                        <input class="w-100 p-2 mt-3" style="font-family: 'Futura PT'" type="text" id="name" name="name" placeholder="Введите E-mail*">
                        <input class="py-2 px-3 mt-3" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;" value="отправить заявку">
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    <div class="container-fluid cont bgt" style="height: 800px; padding-bottom:10%; background-image: url('{{asset('images/types.png')}}'); background-size: 100% 100%;">
        <div class="row justify-content-center">
            <div class="col-md-6 col-12">
                <h2 class="font-weight-bold pl-3 text-media" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                    Виды пластиковых решеток на окна:
                    Распространенные варианты дизайна
                </h2>
            </div>
        </div>
        <div class="row pt-5 justify-content-center">
                <ul class="nav nav-tabs" style="border:none!important;" id="myTab" role="tablist">
                    <li class="nav-item ml-md-3 picks">
                        <a class="nav-link active" style="border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var1" role="tab" aria-controls="" aria-selected="true">горизонтальные</a>
                    </li>
                    <li class="nav-item ml-md-3 picks">
                        <a class="nav-link" style="border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var2" role="tab" aria-controls="" aria-selected="true">вертикальные</a>
                    </li>
                    <li class="nav-item ml-md-3 picks">
                        <a class="nav-link" style="border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var3" role="tab" aria-controls="" aria-selected="true">со створками</a>
                    </li>
                    <li class="nav-item ml-md-3 picks">
                        <a class="nav-link" style="border:none!important; color:white; background: #29374D; border-radius:0px!important;" data-toggle="tab" href="#var4" role="tab" aria-controls="" aria-selected="true">с узорами</a>
                    </li>
                </ul>
        </div>
        <div class="row pt-4">
                <div class="tab-content col-12" id="myTabContent">
                    <div class="tab-pane fade active show" id="var1" role="tabpanel" aria-labelledby="">
                        <div class="row">
                            <div class="col-md-4 col-12 text-center">
                        <img class="tab-img varss" src="{{ asset('images/var1.png') }}" alt="">
                            </div>
                            <div class="col-md-4 col-12 pt-md-5 pt-0">
                                <h3 class="font-weight-bold py-3" style="font-size: 25px; line-height: 120%;">Горизонтальные решетки</h3>
                        <span style="font-size: 16px; line-height: 120%;">
                            Чаще всего владельцы квартир прибегают к монтажу
                            решеток на окна на первый этаж с горизонтальными
                            ламеляли. Популярность подобных конструкций
                            обусловлена простой системой установки.
                        </span>
                                <p class="pt-3">
                                <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                        простая система установки
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                        простая система установки
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
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
                            <div class="col-md-4 col-12 pt-md-5">
                                <h3 class="font-weight-bold py-3" style="font-size: 25px; line-height: 120%;">Вертикальные решетки</h3>
                                <span class="pb-3" style="font-size: 16px; line-height: 120%;">
                            Конструкции с вертикально расположенными ламелями используются в тех случаях, когда крайне важно сохранить архитектурный стиль здания. Кроме этого они применяются в качестве альтернативного решения, если установка креплений для горизонтальных элементов осложнена какими-либо условиями.
                        </span>
                                <p class="pt-3">
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                        Уникальный вид
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                       Альтернативное решение
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
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
                            <div class="col-md-4 col-12 pt-5">
                                <h3 class="font-weight-bold py-3" style="font-size: 25px; line-height: 120%;">Решетки со створками</h3>
                                <span class="pb-3" style="font-size: 16px; line-height: 120%;">
                            Помимо стандартных конструкций возможно заказать конструкции с открывающимися створками, которые имеют ушки, предназначенные для установки замков навесного типа.
                        </span>
                                <p class="pt-3">
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                        Увеличивают степень пожарной безопасности
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                       Также надежны, как и глухие варианты
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
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
                            <div class="col-md-4 col-12 pt-5">
                                <h3 class="font-weight-bold py-3" style="font-size: 25px; line-height: 120%;">Решетки с узорами</h3>
                                <span class="pb-3" style="font-size: 16px; line-height: 120%;">
                            Витраж – один из вариантов декоративного оформления поликарбоната с помощью рисунков. При условии правильного выбора техники и самого узора можно создать неповторимое и уникальное оформление.
                        </span>
                                <p class="pt-3">
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                       Краска обладает атмосфероустойчивым свойством
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                       Экологично и <безопасно></безопасно>
                                    </span>
                                </p>
                                <p>
                                    <i class="fas fa-check-circle" style="color:#00D9C0;"></i>
                                    <span class="font-weight-bold pl-2" style="font-size: 16px; line-height: 21px;">
                                        Выбор цветовой гаммы практически неограничен
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            </div>

    <div class="container-fluid bgt" style="background-image: url('{{asset('images/descriptionbg.png')}}'); background-size: 100% 100%;padding-bottom:8%;">
        <div class="row justify-content-center pb-5">
            <div class="col-md-6 col-12">
                <h2 class="font-weight-bold pl-3 text-media" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                    Технические характерисики решеток
                    на окна из поликарбоната
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-md-4 col-12 pr-0 text-right" style="font-size: 16px; line-height: 21px;">
                <p class="cent" style="padding-top:4%;">Стандартная высота решетки составляет 200 см</p>
                <p class="cent" style="padding-top:8%;">
                    Чтобы закрепить такую конструкцию потребуется
                    по 12 анкеров с каждой стороны. Для сравнения,
                    металлические решетки фиксируются с помощью
                    2-3 креплений, поэтому их так легко отколоть,
                    причем, вместе с куском стены.
                </p>
            </div>
            <div class="col-3">
                <img class="w-100 d-md-block d-none" src="{{ asset('images/description.png') }}" alt="">
            </div>
            <div class="col-md-4 col-12 pl-0">
                <p class="cent" style="padding-top:12%;">
                    В качестве основы прозрачных решеток
                    на окна выступают пластиковые ламели.
                </p>
                <p class="cent" style="padding-top:7%;">
                    Для защиты металлических элементов от коррозии
                    используется покрытие в виде порошковой краски.
                    Производители предлагают широкий выбор расцветок.
                </p>
                <p class="cent" style="padding-top:6%;">
                    Крепления распологаются с шаком в 14см.
                </p>
            </div>
        </div>
    </div>
    <div class="container-fluid bgtd" style="padding:8%; background-image: url('{{ asset('images/plus.png') }}'); background-size: 100% 100%;">
        <div class="row">
            <div class="col-md-3 col-12 pl-4">
                <img class="pb-3" src="{{ asset('images/plus1.png') }}" alt="">
                <p style="font-size: 14px; line-height: 120%; color:white;">
                    Современный внешний вид -
                    просто и эстетично!
                </p>
                <img class="pb-3 pt-5" src="{{ asset('images/pencil.png') }}" alt="">
                <p style="font-size: 14px; line-height: 120%; color:white;">
                    Не ржавеют и не требуют перекраски!
                </p>
            </div>
            <div class="col-md-3 col-12">
                <img class="pt-5 pb-3" src="{{ asset('images/plus2.png') }}" alt="">
                <p style="font-size: 14px; line-height: 120%; color:white;">
                    Не поддерживают горение,
                    выдерживают жару и холод!
                </p>
                <img class="pt-5 pb-3" src="{{ asset('images/scale.png') }}" alt="">
                <p style="font-size: 14px; line-height: 120%; color:white;">
                    Малый вес! Множественное крепление!
                </p>
            </div>
            <div class="col-md-6 col-12">
                <div class="row">
                    <h2 class="font-weight-bold pl-3 text-media mt-md-0 mt-4" style="color:white; font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                        Преимущества использования
                        прозрачных решеток на окнах
                    </h2>
                    <div class="row">
                        <div class="col-md-6 col-12 pt-4 pr-5">
                            <span style="font-size: 14px; line-height: 120%; color:white;">
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
                        <div class="col-md-6 col-12 pt-4 pr-5">
                            <span style="font-size: 14px; line-height: 120%; color:white;">
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
                    </div>
                    <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-3 mt-4" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                        Рассчитать стоимость
                    </button>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid p-5" style="background-image: url({{asset('images/black.png')}}); background-size: 100% 100%;">
        <div class="row justify-content-center pt-4">
            <div class="col-md-4 col-12 text-center">
                <h2 class="font-weight-bold" style="color:white; font-size:36px; line-height: 120%;">Все еще есть вопросы?</h2>
                <span  style="font-size:22px; line-height: 120%; color:white;">
                    Оставьте заявку, мы перезвоним и ответим
                    на все Ваши вопросы
                </span>
            </div>
        </div>
        <form class="pb-4" action="">
            <div class="row mt-5">
                    <div class="col-md-3 col-12">
                        <input class="w-100 p-2" style="font-family: 'Futura PT'" type="text" id="name" name="name" placeholder="Введите имя*">
                    </div>
                    <div class="col-md-3 col-12 pt-md-0 pt-3">
                        <input class="w-100 p-2" style="font-family: 'Futura PT'" type="tel" id="tel" name="tel" placeholder="Введите телефон*">
                    </div>
                    <div class="col-md-3 col-12 pt-md-0 pt-3">
                        <input class="w-100 p-2" style="font-family: 'Futura PT'" type="email" id="email" name="email" placeholder="Введите E-mail*">
                    </div>
                    <div class="col-md-3 col-12 pt-md-0 pt-3 text-center">
                        <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-5" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                            Отправить
                        </button>
                    </div>
            </div>
        </form>
    </div>
<div class="w-100 bgt"  style="background-image: url({{asset('images/safe.png')}}); background-size: 100% 100%; padding-bottom:10%;">
    <div class="container pt-5">
        <div class="row">
        <div class="col-md-5 col-12">
            <img class="w-100" src="{{ asset('images/still.png') }}" alt="">
        </div>
            <div class="col-md-7 col-12 pl-md-5 pl-3 pt-md-0 pt-5">
                <h2 class="font-weight-bold pl-3" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                    Преимущества использования
                    прозрачных решеток на окнах
                </h2>
                <p class="pt-5" style="font-size: 16px; line-height: 120%;">
                    В Кыргызстане в среднем каждые 4 минуты совершается взлом. В прошлом
                    году количество таких преступлений возросло более чем на 8%
                </p>
                <p style="font-size: 16px; line-height: 120%;">
                    Преступников, которых милиции удается поймать, весьма мало. Причину
                    низкого уровня раскрытия такого рода преступлений, с одной стороны, и в
                    то же время роста их числа, с другой стороны.
                </p>
                <p style="font-size: 16px; line-height: 120%;">
                    В многосемейных домах преступники свыше 50% случаев проникают
                    в квартиру через окно.
                </p>

                <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-3 mt-5" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                    Рассчитать стоимость
                </button>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row">
        <div class="col-md-6 col-12" style="padding-left:8%; padding-top:15%;">
        <h2 class="font-weight-bold pl-3 text-media" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
            Решетки на окнах помогают
            спасти ваших детей от падения
        </h2>

        <p class="pt-5" style="font-size: 16px; line-height: 120%;">
            С каждым годом проблема падения детей из окон усугубляется, число таких
            случаев растет. Проблема имеет международный масштаб. По данным
            США, ежегодно из окон выпадают более 5 тысяч детей. В России в теплые
            месяцы фиксируется до трехсот падений детей с высоты ежедневно.
            В Казахстане за прошлый год из окон выпало более восьмидесяти детей.
        </p>
            <p class="font-weight-bold" style="font-size: 16px; line-height: 120%;">
                Защитите своих малышей от выпадения из окна.
            </p>
            <button class="py-2 px-3 mt-5" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                Рассчитать стоимость
            </button>
        </div>
            <div class="col-md-6 col-12 mt-md-0 mt-5">
                <div class="row justify-content-center">
        <div class="col-3 pr-0 text-right" style="padding-top:10%;">
            <img class="w-100" src="{{ asset('images/safe1.png') }}" alt="">
        </div>
            <div class="col-3">
                <img class="w-100" src="{{ asset('images/safe2.png') }}" alt="">
            </div>
                    <div class="col-2 pl-0" style="padding-top:13%;">
                        <img class="w-100" src="{{ asset('images/safe3.png') }}" alt="">
                    </div>
                </div>
        </div>
        </div>
    </div>
</div>
<div class="container-fluid " style="padding-bottom: 10%">
    <div class="row">
        <div class="col-md-4 col-12" style="padding-left:8%;">
            <h2 class="font-weight-bold pl-3 text-media" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                Нам доверяют
                безопасность своих
                домочадцев
            </h2>
            <button class="py-2 px-3 mt-5" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                Оставить отзыв
            </button>
        </div>
        <div class="col-md-8 col-12 mt-md-0 mt-4">
            <div class="row">
                {{--<div class="owl-carousel">--}}
                    {{--<div class="item">--}}
                        {{--<h2>Swipe</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Drag</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Responsive</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>CSS3</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Fast</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Easy</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Free</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Upgradable</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Tons of options</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Infinity</h2>--}}
                    {{--</div>--}}
                    {{--<div class="item">--}}
                        {{--<h2>Auto Width</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
                <div class="col-md-4 col-12 p-5 border">
                    Давно выяснено, что при оценке дизайна и композиции
                    читаемый текст мешает сосредоточиться. Lorem Ipsum
                    используют потому, что тот обеспечивает более или
                    менее стандартное заполнение шаблона, а также реальное
                    распределение букв и пробелов в абзацах, которое не
                    получается при простой дубликации "Здесь ваш текст..
                    Здесь ваш текст.. Здесь ваш текст.."
                </div>
                <div class="col-md-4 col-12 p-5 border">
                    Давно выяснено, что при оценке дизайна и композиции
                    читаемый текст мешает сосредоточиться. Lorem Ipsum
                    используют потому, что тот обеспечивает более или
                    менее стандартное заполнение шаблона, а также реальное
                    распределение букв и пробелов в абзацах, которое не
                    получается при простой дубликации "Здесь ваш текст..
                    Здесь ваш текст.. Здесь ваш текст.."
                </div>
                <div class="col-md-4 col-12 p-5 border">
                    Давно выяснено, что при оценке дизайна и композиции
                    читаемый текст мешает сосредоточиться. Lorem Ipsum
                    используют потому, что тот обеспечивает более или
                    менее стандартное заполнение шаблона, а также реальное
                    распределение букв и пробелов в абзацах, которое не
                    получается при простой дубликации "Здесь ваш текст..
                    Здесь ваш текст.. Здесь ваш текст.."
                </div>

            </div>
            {{--<div id="carousel-example-multi" class="carousel carousel-multi slide">--}}
                {{--<!-- Indicators -->--}}
                {{--<ol class="carousel-indicators">--}}
                    {{--<li data-target="#carousel-example-multi" data-slide-to="0" class="active"></li>--}}
                    {{--<li data-target="#carousel-example-multi" data-slide-to="1"></li>--}}
                    {{--<li data-target="#carousel-example-multi" data-slide-to="2"></li>--}}
                    {{--<li data-target="#carousel-example-multi" data-slide-to="3"></li>--}}
                    {{--<li data-target="#carousel-example-multi" data-slide-to="4"></li>--}}
                    {{--<li data-target="#carousel-example-multi" data-slide-to="5"></li>--}}
                {{--</ol>--}}

                {{--<!-- Wrapper for slides -->--}}
                {{--<div class="carousel-inner" role="listbox">--}}
                    {{--<div class="item active">--}}
                        {{--<div class="media media-card">--}}
                            {{--<time class="small">10 Aug 2016</time>--}}
                            {{--<div class="media-category">Commodities Quarterly</div>--}}
                            {{--<h4 class="media-heading">--}}
                                {{--<a href="#">Research article 1</a>--}}
                            {{--</h4>--}}
                            {{--<a class="aside" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="item ">--}}
                        {{--<div class="media media-card">--}}
                            {{--<time class="small">10 Aug 2016</time>--}}
                            {{--<div class="media-category">Commodities Quarterly</div>--}}
                            {{--<h4 class="media-heading">--}}
                                {{--<a href="#">Research article number two</a>--}}
                            {{--</h4>--}}
                            {{--<a class="aside" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="item ">--}}
                        {{--<div class="media media-card">--}}
                            {{--<time class="small">10 Aug 2016</time>--}}
                            {{--<div class="media-category">Commodities Quarterly</div>--}}
                            {{--<h4 class="media-heading">--}}
                                {{--<a href="#">Number 3</a>--}}
                            {{--</h4>--}}
                            {{--<a class="aside" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="item ">--}}
                        {{--<div class="media media-card">--}}
                            {{--<time class="small">10 Aug 2016</time>--}}
                            {{--<div class="media-category">Commodities Quarterly</div>--}}
                            {{--<h4 class="media-heading">--}}
                                {{--<a href="#">This is the fourth article</a>--}}
                            {{--</h4>--}}
                            {{--<a class="aside" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="item ">--}}
                        {{--<div class="media media-card">--}}
                            {{--<time class="small">10 Aug 2016</time>--}}
                            {{--<div class="media-category">Commodities Quarterly</div>--}}
                            {{--<h4 class="media-heading">--}}
                                {{--<a href="#">...and this is the fifth</a>--}}
                            {{--</h4>--}}
                            {{--<a class="aside" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                    {{--<div class="item ">--}}
                        {{--<div class="media media-card">--}}
                            {{--<time class="small">10 Aug 2016</time>--}}
                            {{--<div class="media-category">Commodities Quarterly</div>--}}
                            {{--<h4 class="media-heading">--}}
                                {{--<a href="#">Sixth</a>--}}
                            {{--</h4>--}}
                            {{--<a class="aside" href="#">Read more</a>--}}
                        {{--</div>--}}
                    {{--</div>--}}

                {{--</div>--}}

                {{--<!-- Controls -->--}}
                {{--<a class="left carousel-control" href="#carousel-example-multi" role="button" data-slide="prev">--}}
                    {{--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Previous</span>--}}
                {{--</a>--}}
                {{--<a class="right carousel-control" href="#carousel-example-multi" role="button" data-slide="next">--}}
                    {{--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>--}}
                    {{--<span class="sr-only">Next</span>--}}
                {{--</a>--}}
            {{--</div>--}}
    </div>
</div>
</div>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4 col-12 pb-5" style="padding-right: 5%;">
            <h2 class="font-weight-bold pl-3" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
                Убедитесь в
                прочности решеток
            </h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8 col-12">
            <img class="w-100" src="{{asset('images/vids.png')}}" alt="">
        </div>
    </div>
</div>
<div class="container mb-5 mt-md-0 mt-4" style="padding-top: 5%;">
    <h2 class="font-weight-bold pl-3 col-3" style="font-size: 36px; line-height: 120%; border-left:3px #00D9C0 solid;">
        Галерея
        наших окон
    </h2>
    <div class="row justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide d-md-block d-none" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 mt-auto" src="{{ asset('images/gallery1.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery2.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery3.png') }}" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 " src="{{ asset('images/gallery4.png') }}" alt="">
                        <img class="p-3 h-100 " src="{{ asset('images/gallery5.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery6.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 mt-auto" src="{{ asset('images/gallery1.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery2.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery3.png') }}" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 " src="{{ asset('images/gallery4.png') }}" alt="">
                        <img class="p-3 h-100 " src="{{ asset('images/gallery5.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery6.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 mt-auto" src="{{ asset('images/gallery1.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery2.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery3.png') }}" alt="">
                    </div>
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 " src="{{ asset('images/gallery4.png') }}" alt="">
                        <img class="p-3 h-100 " src="{{ asset('images/gallery5.png') }}" alt="">
                        <img class="p-3 h-100" src="{{ asset('images/gallery6.png') }}" alt="">
                    </div>
                </div>
            </div>
            <a style="left:-20%!important;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="fas fa-arrow-left" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a style="right:-20%!important;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fas fa-arrow-right" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
        <div id="carouselExampleIndicators" class="carousel slide d-md-none d-block" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100 mt-auto" src="{{ asset('images/gallery1.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100" src="{{ asset('images/gallery2.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100" src="{{ asset('images/gallery3.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100" src="{{ asset('images/gallery4.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100" src="{{ asset('images/gallery5.png') }}" alt="">
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="row justify-content-center">
                        <img class="p-3 h-100" src="{{ asset('images/gallery6.png') }}" alt="">
                    </div>
                </div>
            </div>
            <a style="left:-20%!important;" class="carousel-control-prev d-md-block d-none" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <i class="fas fa-arrow-left" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Previous</span>
            </a>
            <a style="right:-20%!important;" class="carousel-control-next d-md-block d-none" href="#carouselExampleIndicators" role="button" data-slide="next">
                <i class="fas fa-arrow-right" style="font-size:30px; color:black;"></i>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row py-5 bgt" style="background-image: url({{asset('images/down-pic.png')}}); background-size: 100% 100%;">
        <div class="col-md-6 col-12 px-0">
            <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12">
                    <img src="{{asset('images/down-pic-4.png')}}" alt="">
                </div>
                <div class="col-md-6 col-12 cent">
                    <h2 class="font-weight-bold" style="font-size: 36px; line-height: 120%;">
                        Установите прозрачные решетки на первые 2 окна со скидкой 10%
                    </h2>
                    <p class="pt-3" style="font-size: 16px; line-height: 120%;">
                        Давно выянено, что при оценке дизайна и композиции читаемый текст мешает
                        сосредоточиться. Lorem Ipsum используют потому, что тот обеспечивает более или менее
                    </p>
                    <button data-toggle="modal" data-target="#priceModal"  class="py-2 px-3" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;">
                        Рассчитать стоимость
                    </button>
                </div>
            </div>
            </div>
        </div>

        <div class="col-8 px-0">

        </div>
    </div>
    <div class="row">
        <div class="col-md-4 col-12 px-0">
            <img class="w-100 h-100" src="{{asset('images/down-pic2.png')}}" alt="">
        </div>
        <div class="col-md-8 col-12 px-0">
            <div class="container">
            <div class="row p-5">
            <div class="col-md-6 col-12 px-5">
                <h2 style="font-size: 36px; line-height: 120%; font-weight:800;">
                    Контакты
                </h2>
                <p style="font-size: 16px; line-height: 120%;">
                    Свяжитесь с нами любым удобным для Вас
                    способом, и мы ответим на все Ваши вопросы
                    как можно быстрее
                </p>
                <p class="mb-0">Телефон:</p>
                <p class="font-weight-bold">+998907888181</p>
                <p class="mb-0">E-mail:</p>
                <p class="font-weight-bold">info@yourcompany.com</p>
                <p class="mb-0">Адрес:</p>
                <p class="font-weight-bold">г. Бишкек</p>
            </div>
                <div class="col-md-6 col-12 px-md-5 px-0 pt-md-0 pt-5">
                    <div class="text-center">
                    <h2 class="font-weight-bold" style="font-size: 25px; line-height: 120%;">
                        Заполните заявку, чтобы
                        получить скидку 10%
                    </h2>
                    <form action="">
                        <input class="col-md-8 col-12 mt-3" type="text">
                        <input class="col-md-8 col-12 mt-3" type="text">
                        <input class="col-md-8 col-12 mt-3" type="text">
                        <input class="py-2 px-3 mt-3" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;" value="рассчитать стоимость">
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
                    <form action="">
                        <input class="w-100 mb-2 p-2" type="text" placeholder="Ширина окна">
                        <input class="w-100 mb-2 p-2" type="text" placeholder="Высота окна">
                        <input class="w-100 mb-2 p-2" type="text" placeholder="Введите имя*">
                        <input class="w-100 mb-2 p-2" type="text" placeholder="Введите телефон*">
                        <input class="w-100 mb-2 p-2" type="text" placeholder="Введите E-mail*">
                        <input class="py-2 px-3 mt-3" type="submit" style="color: white;background:#00D9C0; border:0px; box-shadow: 0px 4px 50px rgba(19, 202, 225, 0.4); border-radius: 25px;" value="рассчитать стоимость">
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>


@endsection

