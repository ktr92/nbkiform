<?php

use App\Classes\Wrapper;

if (empty($arResult['ITEMS'])) return;
?>
<div class="contactsblock__items">
    <?php foreach ($arResult['ITEMS'] as $arItem): ?>
		<div class="contactsblock__item fadeInUpSmall wow" data-wow-delay=".15s">
			<div class="contactitem">
				<div class="contactitem__header">
					<div class="contactitem__title"><?= $arItem['NAME'] ?></div>
					<div class="contactitem__info">
						<div class="contactitem__text"><?= $arItem['PROPERTIES']['TIME']['VALUE'] ?></div>
						<div class="contactitem__small"><?= $arItem['PROPERTIES']['DAYS']['VALUE'] ?></div>
					</div>
				</div><!-- /.contactitem__header -->
				<div class="contactitem__main">
					<div class="contactitem__address">
						<img src="#" data-src="/local/templates/main/public/img/locationsm.svg" alt="address"
						     title="address" width='18'
						     height='18'><span><?= $arItem['PROPERTIES']['ADDRESS']['VALUE'] ?></span>
					</div><!-- /.contactitem__address -->
					<div class="contactitem__phones">
                        <?php if (!empty($arItem['PROPERTIES']['PHONE']['VALUE'])): ?>
                            <?php foreach ($arItem['PROPERTIES']['PHONE']['VALUE'] as $key => $phone): ?>
								<a href="tel:+<?= preg_replace('/\D/', '', $phone) ?>"
								   class="linkred <?= ($key > 0 ? 'onlyDesktop' : '') ?>"><?= $phone ?></a>
                            <?php endforeach; ?>
                        <?php endif; ?>
                        <?php if (!empty($arItem['PROPERTIES']['WA']['VALUE'])): ?>
							<div class="contactline__messenger">
								<a href="<?= $arItem['PROPERTIES']['WA']['VALUE'] ?>"
								   aria-label='contactline__messenger'>
									<img src="#" data-src="/local/templates/main/public/img/WhatsApp.svg" alt="wa"
									     title="wa" class="offHover"
									     width='42' height='42'>
									<img src="#" data-src="/local/templates/main/public/img/WhatsApp2.svg" alt="wa"
									     title="wa" class="onHover"
									     width='42' height='42'>
								</a>
							</div>
                        <?php endif; ?>
					</div><!-- /.contactitem__phones -->
				</div><!-- /.contactitem__main -->
				<div class="contactitem__map">
					<div class="contactmap">
						<? if (!empty($arItem['PROPERTIES']['MAP']['VALUE'])):?>
						<?=htmlspecialcharsback($arItem['PROPERTIES']['MAP']['VALUE']['TEXT'])?>
						<? endif; ?>
					</div><!-- /.contactmap -->
				</div><!-- /.contactitem__map -->
			</div><!-- /.contactitem -->
		</div><!-- /.contactsblock__item -->
    <?php endforeach; ?>
</div><!-- /.contactsblock__items -->
