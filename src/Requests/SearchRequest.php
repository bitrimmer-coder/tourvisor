<?php

namespace Tourvisor\Requests;

/**
 * Class SearchRequest
 *
 * @see https://docs.google.com/document/d/1nhDwzb0dPBr4MW0FJTh6TpW_U_RCSgFI7eIfvb2Gm4k/edit?usp=sharing
 *
 * @package Tourvisor\Requests
 *
 * @property int $departure ? ??? ?????? ??????
 * @property int $country ? ??? ??????
 * @property string $datefrom - ???? ?? ? ??????? d.m.Y (?? ????????? ??????? ???? +1 ????)
 * @property string $dateto - ???? ?? ? ??????? d.m.Y (?? ????????? ??????? ???? +8 ????). ???????????? ????????
 *     14 ????
 * @property int $nightsfrom - ????? ?? (?? ????????? = 7)
 * @property int $nightsto - ????? ?? (?? ????????? = 10)
 * @property int $adults - ???-?? ???????? (?? ????????? = 2)
 * @property int $child - ???-?? ????? (?? ????????? = 0)
 * @property int $childage1 - ??????? 1 ???????, ??? (???????????). ???????? = 1
 * @property int $childage2 - ??????? 2 ???????, ??? (???????????). ???????? = 1
 * @property int $childage3 - ??????? 3 ???????, ??? (???????????). ???????? = 1
 * @property int $stars ? ????????? ????? (??????????) (???????????)
 * @property bool $starsbetter ? 1 ? ?????????? ????????? ????? ?????????. ?? ????????? 1 (???????????)
 * @property int $meal - ??? ??????? (???) (???????????)
 * @property bool $mealbetter ? 1 ? ?????????? ??????? ????? ??????????. ?? ????????? 1 (???????????)
 * @property int $rating ? ??????? ????? (???????????). ???????????? ?????????: 0: ?????, 2: >= 3.0, 3: >= 3.5,
 *     4: >= 4.0, 5: >= 4.5  (?.?. ????? ???????? ????? ?????, ?????. ????????)
 * @property array $hotels - ???? ??????
 * @property array $hoteltypes - ???? ?????? (?????? ?? ?????????? ??????????: active, relax, family, health, city,
 *     beach, deluxe) ??????:['relax','beach']  (???????????)
 * @property int $pricetype - ??? ????. 0 ? ???? ?? ?????, 1 ? ???? ?? ???????? (?? ????????? 0)
 * @property array $regions ? ???? ???????? (???????????)
 * @property array $subregions ? ???? ????????? ???????? (???????) (???????????). ???? ??? ????? ????? ??
 *     ??????????? ?????? (subregion), ?? ??????????????? ??? ???????? regions ????????? ?? ?????, ????? ?????
 *     ????????????? ????? ?? ????? ??????? (region), ??????? ?? ???????
 * @property array $operators - ?????? ?????????? (???????????)
 * @property int $pricefrom - ???? ?? (? ??????, ???????????)
 * @property int $priceto - ???? ?? (? ??????, ???????????)
 * @property int $currency ? ??????, ? ??????? ??????????? ?????? ??????????? ??????. 0 = ????? (??-?????????), 1
 *     ? ?.?. (USD ??? EUR, ??????? ?? ??????), 2 ? ???.?????, 3 ? ?????
 */
class SearchRequest extends AbstractRequest
{
    protected $endPoint = 'search.php';

    protected $casts = [
        'hotels'     => 'array',
        'hoteltypes' => 'array',
        'regions'    => 'array',
        'subregions' => 'array',
        'operators'  => 'array',
    ];

    protected $requiredParams = [
        'country', 'departure'
    ];
}