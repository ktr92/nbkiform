<?if( !defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true ) die();

$this->setFrameMode(true);

use \Bitrix\Main\Localization\Loc;

Loc::loadLanguageFile($_SERVER['DOCUMENT_ROOT'].SITE_TEMPLATE_PATH.'/components/bitrix/news/catalog/section.php');

if(is_numeric($arResult["PROPERTIES"]["PRICE"]["VALUE"]))$arResult["PROPERTIES"]["PRICE"]["VALUE"]=number_format($arResult["PROPERTIES"]["PRICE"]["VALUE"], 0, ',', ' ').Loc::getMessage("CURRENCY");

if(is_numeric($arResult["PROPERTIES"]["PRICEOLD"]["VALUE"]))$arResult["PROPERTIES"]["PRICEOLD"]["VALUE"]=number_format($arResult["PROPERTIES"]["PRICEOLD"]["VALUE"], 0, ',', ' ').Loc::getMessage("CURRENCY");



?>

<div class="productItem">

    <div class="productItem__wrapper">

        <div class="productItem__left">

            <div class="productItem__images">

                <div class="productItem__img">

                    <img src="<?=$arResult["DETAIL_PICTURE"]['SRC']?>" alt="<?=trim($arResult['PROPERTIES']['TITLE']['VALUE']) ?>">

                </div>

                <!-- /.productItem__img -->

            </div>

            <!-- /.productItem__images -->

        </div>

        <!-- /.productItem__left -->

        <div class="productItem__right">

            <div class="productItem__main">

                <div class="productItem__title">

                <? if (!empty($arResult['PROPERTIES']['TITLE']['VALUE'])): ?>
                <h1><?=$arResult['PROPERTIES']['TITLE']['VALUE']?></h1>
                <? else: ?>
                <h1>    <?=$arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']?$arResult['IPROPERTY_VALUES']['ELEMENT_PAGE_TITLE']:$arResult['NAME']?></h1>
				<? endif; ?>
                </div>

                <? if (1==2):?>
                <a
                        href="/ajax/form.php?code=order_afs&ITEM=<?$_REQUEST['ID']?>&id=<?=$arResult['ID']?>"
                        data-toggle="modal"
                        data-target="#myModal"
                        data-remote="false"
                        class="btn waves-effect waves-light btn-primary space-top">Отправить запрос</a>
                <? endif; ?>
                <? if (1==1):?>
                <a href="/ajax/form.php?form=25&code=order_buy&ITEM=<?=urlencode($arResult['NAME'])?>&id=<?=$arResult['ID']?>" data-toggle="modal" data-target="#myModal" data-remote="false" class="btn waves-effect waves-light btn-primary space-top">Купить</a>
                <? endif; ?>
                <? if (!empty($arResult['ALSO_BUY'])):?>

                <div class="productItem__subtitle">

                    Используемые материалы:

                </div>

                <!-- /.productItem__title -->

                <div class="productItem__content">

                    <div class="productItem__list">

                        <div class=" row">

                            <? foreach ($arResult['ALSO_BUY'] as $arItem):?>

                            <div class="col-md-6 col-sm-6 col-xs-12 isotope-item">

                                <div class="service-alt">

                                    <a href="<?=$arItem['DETAIL_PAGE_URL']?>" class="img-hover">

                                        <img  src="<?=$arItem['PICTURE']?>" alt="<?=$arItem['NAME']?>">

                                    </a>

                                    <div class="service-content">

                                        <div class="h4"><a href="<?=$arItem['DETAIL_PAGE_URL']?>"><?=$arItem['NAME']?></a></div>

                                        <? /* <a href="<?=$arItem['DETAIL_PAGE_URL']?>">Подробнее</a> */ ?>

                                    </div>

                                </div>

                            </div>

                            <? endforeach; ?>



                        </div>

                    </div>

                    <!-- /.productItem__list -->

                </div>

                <!-- /.productItem__content -->

                <? endif; ?>

            </div>

            <!-- /.productItem__main -->

        </div>

        <!-- /.productItem__right -->

    </div>

    <!-- /.productItem__wrapper -->

</div>









    <div class="row">

        <div class="col-md-12">







            <?

            $tabs = [];

            if (!empty($arResult['PROPERTIES']['TEXT_1']['VALUE']['TEXT'])) {

                $tabs[] = [

                    'NAME' => 'Преимущества',

                    'TEXT' => htmlspecialcharsback($arResult['PROPERTIES']['TEXT_1']['VALUE']['TEXT'])

                ];

            }

            if (!empty($arResult['PROPERTIES']['TEXT_2']['VALUE']['TEXT'])) {

                $tabs[] = [

                    'NAME' => 'Назначение',

                    'TEXT' => htmlspecialcharsback($arResult['PROPERTIES']['TEXT_2']['VALUE']['TEXT'])

                ];

            }

            if (!empty($arResult['PROPERTIES']['TEXT_3']['VALUE']['TEXT'])) {

                $tabs[] = [

                    'NAME' => 'Состав пленки',

                    'TEXT' => htmlspecialcharsback($arResult['PROPERTIES']['TEXT_3']['VALUE']['TEXT'])

                ];

            }

            if (!empty($arResult['PROPERTIES']['TEXT_4']['VALUE']['TEXT'])) {

                $tabs[] = [

                    'NAME' => 'Толщина и форматы',

                    'TEXT' => htmlspecialcharsback($arResult['PROPERTIES']['TEXT_4']['VALUE']['TEXT'])

                ];

            }

            if (!empty($arResult['PROPERTIES']['TEXT_5']['VALUE']['TEXT'])) {

                $tabs[] = [

                    'NAME' => 'Опции',

                    'TEXT' => htmlspecialcharsback($arResult['PROPERTIES']['TEXT_5']['VALUE']['TEXT'])

                ];

            }

            if (!empty($arResult['DETAIL_TEXT'])) {

                $tabs[] = [

                    'NAME' => 'Описание',

                    'TEXT' => $arResult['DETAIL_TEXT']

                ];

            }

            if (!empty($tabs)):?>

            <ul class="nav nav-tabs ">

                <? $i = 0; ?>

                <? foreach ($tabs as $SID => $arSection): ?>

                    <li class="<?= $i++ == 0 ? 'active' : '' ?>">

                        <a href="#tab<?= $i ?>" data-toggle="tab"><?= $arSection["NAME"] ?></a>

                    </li>

                <? endforeach; ?>

            </ul>

            <div class="tab-content">

                <? $i = 0; ?>

                <?	foreach ($tabs as $si => $arSection): ?>

                <div class="tab-pane<?if($i++ == 0):?> active in<?endif;?> transition fade" id="tab<?=$i?>">

                    <?=$arSection['TEXT']?>
                    <? if ($si == 0):?>
                        <div class="detailslider">
                            <div class="detailslider__wrapper">
                                <div class="detailslider__slider">
                                    <div class="detailslider__slide"><a href="/bitrix/templates/af.startlight/img/IMG_8787.jpg" data-lightbox="detailslider" class="detailslider__gallery"><img src="/bitrix/templates/af.startlight/img/IMG_8787.jpg" alt=""></a></div>

                                    <div class="detailslider__slide"><a href="/bitrix/templates/af.startlight/img/IMG_8831.jpg" data-lightbox="detailslider" class="detailslider__gallery"><img src="/bitrix/templates/af.startlight/img/IMG_8831.jpg" alt=""></a></div>

                                    <div class="detailslider__slide"><a href="/bitrix/templates/af.startlight/img/IMG_8915555.jpg" data-lightbox="detailslider" class="detailslider__gallery"><img src="/bitrix/templates/af.startlight/img/IMG_8915555.jpg" alt=""></a></div>

                                    <div class="detailslider__slide"><a href="/bitrix/templates/af.startlight/img/IMG_8943.jpg" data-lightbox="detailslider" class="detailslider__gallery"><img src="/bitrix/templates/af.startlight/img/IMG_8943.jpg" alt=""></a></div>

                                    <div class="detailslider__slide"><a href="/bitrix/templates/af.startlight/img/IMG_8994.jpg" data-lightbox="detailslider" class="detailslider__gallery"><img src="/bitrix/templates/af.startlight/img/IMG_8994.jpg" alt=""></a></div>

                                    <div class="detailslider__slide"><a href="/bitrix/templates/af.startlight/img/IMG_9222.jpg" data-lightbox="detailslider" class="detailslider__gallery"><img src="/bitrix/templates/af.startlight/img/IMG_9222.jpg" alt=""></a></div>

                                </div><!-- /.detailslider__slider -->
                                <div class="detailslider__arrows">
                                    <div class="detailslider__arrow detailslider__arrow_left"><img src="/bitrix/templates/af.startlight/img/angle-left-svgrepo-com.svg" alt=""></div><!-- /.detailslider__arrow -->
                                    <div class="detailslider__arrow detailslider__arrow_right"><img src="/bitrix/templates/af.startlight/img/angle-left-svgrepo-com.svg" alt=""></div><!-- /.detailslider__arrow -->
                                </div><!-- /.detailslider__arrows -->
                            </div><!-- /.detailslider__wrapper -->
                        </div><!-- /.detailslider -->
                        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"  />
                        <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" />
                        <script src="//cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>

                        <script>$('.detailslider__slider').slick({
                                dots: false,
                                infinite: true,
                                slidesToShow: 3,
                                slidesToScroll: 1,
                                nextArrow: '.detailslider__arrow_right',
                                prevArrow: '.detailslider__arrow_left',
                                responsive: [

                                    {
                                        breakpoint: 600,
                                        settings: {
                                            slidesToShow: 2,
                                            slidesToScroll: 2
                                        }
                                    },
                                    {
                                        breakpoint: 480,
                                        settings: {
                                            slidesToShow: 1,
                                            slidesToScroll: 1
                                        }
                                    }
                                ]
                            });</script>
                    <? endif; ?>
                </div>

                <? endforeach; ?>

            </div>

            <? endif; ?>

        </div>

    </div>
