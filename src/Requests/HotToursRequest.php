<?php

namespace Tourvisor\Requests;

/**
 * Class HotToursRequest
 * @see https://docs.google.com/document/d/1XDP3oaQkENfQBK_KP3ZDMaUo8h8u-AycUzA8WTmZdw0/edit?usp=sharing
 *
 * @package Tourvisor\Requests
 * @property int $items - количество горящих туров, которые необходимо получить (цифра от 1 до 100)
 * @property int $city – код города вылета для выдачи горящих туров (например, 1 = Москва)
 * @property int $city2 – код второго (дополнительного) города вылета. Туры в этот город выдаются с меньшим
 *     приоритетом
 * @property int $city3 – код третьего (дополнительного) города вылета. Туры в этот город выдаются с меньшим
 *     приоритетом.
 * @property bool $uniq2 – только уникальные направления для города вылета 2 (city2).
 * @property bool $uniq3 – только уникальные направления для города вылета 3 (city3)
 * @property int $maxdays – максимальное количество дней от сегодняшнего числа, на которые выдаются горящие туры.
 *     Например, если передать 7, то будут туры только на ближайшую неделю. Если 0 или не указано – период не
 *     ограничен. Удобно, чтобы ограничить туры, например, на ближайший месяц.
 * @property array $countries – массив кодов стран. Если требуется ограничить горящие туры только одной страной
 *     (или несколькими странами). Важно - горящие туры могут быть не по всем странам!
 * @property array $regions – массив кодов курортов. Если требуется ограничить горящие туры только определенным
 *     курортом (или несколькими курортами). Будьте внимательны – коды курортов должны соответствовать странам, которые
 *     Вы передаете в параметре countries. Важно - горящие туры могут быть не по всем курортам!
 * @property array $operators – массив кодов туроператоров. Если требуется ограничить горящие туры только по
 *     определенным туроператорам. Важно - горящие туры могут быть не по всем туроператорам!
 * @property string|\DateTime $datefrom - с какой даты показывать горящие туры (d.m.Y)
 * @property string|\DateTime $dateto – по какую дату показывать горящие туры (d.m.Y)
 * @property int $stars – ограничить минимальную звездность отелей в горящих турах. Например, если задать
 *     stars=4, то система выдаст только отели 4* и 5*
 * @property int|float $rating – ограничить минимальный рейтинг отелей в горящих турах. Рейтинг соответствует
 *     рейтингу в поисковой системе, от 1 до 5. Задается либо целым числом (например rating=4 – рейтинг отеля не меньше
 *     4), либо дробным через точку (например, rating=3.5 – отели с рейтингом не менее 3.5)
 * @property int $meal – ограничить минимальное питание в горящих турах. Передается код типа питания (можно взять
 *     из справочников). Например, если задать meal=7, то система выдаст только горящие туры с питанием «All Inclusive»
 *     и лучше
 * @property bool $picturetype – тип картинки (фотографии) отеля = 0 или 1. По-умолчанию (0) – картинка
 *     стандартного размера (ширина 130 пикселей). 1 = большие картинки (ширина 250 пикселей)
 * @property int $tourtype – тип тура (цифра от 0 до 3). По-умолчанию (0) = любые туры, 1 = пляжные туры, 2 =
 *     горнолыжные, 3 = экскурсионные
 * @property int $visa – фильтр по визовым направлениям. По-умолчанию (0) = любые страны, 1 = только безвизовые
 * @property int $sort – как сортировать горящие туры. По-умолчанию (0) = по рейтингу “полезности”, 1 = по цене
 * @property int $currency - валюта, в которой производить выдачу результатов поиска. 0 = рубли (по-умолчанию), 1
 *     – у.е. (USD или EUR, зависит от страны)
 */
class HotToursRequest extends AbstractRequest
{
    protected $endPoint = 'hottours.php';

    protected $requiredParams = ['items', 'city'];

    protected $casts = [
        'items'     => 'integer',
        'city'      => 'integer',
        'city2'     => 'integer',
        'city3'     => 'integer',
        'maxdays'   => 'integer',
        'countries' => 'array',
        'regions'   => 'array',
        'operators' => 'array',
        'datefrom'  => 'date',
        'dateto'    => 'date',
    ];

}