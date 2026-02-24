<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true)
	die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="detail__cover__cell-img">
	<div class="detail__cover__cell-img-floating">
		<div class="detail__images" style="display:none;">
			<div id="detail-images-offer-id-<?= $defaultOffer['ID'] ?>"
				class="detail__images__offer active defaultOffer zoomer-root">
				<div>
					<? if (!empty($defaultOffer['PROPERTIES']['NEWPRODUCT']['VALUE'])): ?>
						<div class="stickers">
							<div class="sticker sticker_new">new</div>
						</div>
					<? endif; ?>
					<picture class="detail__images__i" data-offer-id="<?= $defaultOffer['ID'] ?>">
						<source data-srcset="<?= $defaultOffer['DETAIL_PICTURE_SMALLEST']['SRC'] ?>" media="(max-width: 567px)">
						<source data-srcset="<?= $defaultOffer['DETAIL_PICTURE_SMALL']['SRC'] ?>" media="(min-width: 567px)">
						<img class="lazy" data-src="<?= $defaultOffer['DETAIL_PICTURE_SMALL']['SRC'] ?>"
							data-img-zoom-url="<?= $defaultOffer['DETAIL_PICTURE']['SRC'] ?>" data-zoomable="yes" data-real="Y"
							data-index="0" />
					</picture>
				</div>
				<?php foreach ($defaultOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE'] as $keyImage => $arImage) { ?>
					<? if (!is_array($arImage))
						continue; ?>
					<?php if ($keyImage != 0) { ?>
						<div>
							<div>
								<picture class="detail__images__i" >
									<source class="tns-lazy-img" data-srcset="<?= $arImage['SMALLEST']['SRC'] ?>" media="(max-width: 567px)">
									<source class="tns-lazy-img" data-srcset="<?= $arImage['SMALL']['SRC'] ?>" media="(min-width: 567px)">
									<img class="tns-lazy-img" data-src="<?= $arImage['SRC'] ?>" data-img-zoom-url="<?= $arImage['SRC'] ?>"
										data-zoomable="yes" data-real="Y" data-index="<?= $keyImage ?>" />
								</picture>
							</div>
						</div>
					<?php } ?>
				<?php } ?>
				<?php if ($defaultOffer['PROPERTIES']['VIDEO']['VALUE'] != '') { ?>
					<div>
						<div class="detail__images__i__video">
							<div data-zoomable-video="yes" data-video-id="<?= trim($defaultOffer['PROPERTIES']['VIDEO']['VALUE']) ?>"
								data-index="<?= is_array($defaultOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) ? count($defaultOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) : 0 ?>">
							</div>
						</div>
					</div>
				<?php } ?>
				<?php if (!empty($defaultOffer['PROPERTIES']['VIDEO_NEW']['VALUE'])): ?>
					<? foreach ($defaultOffer['PROPERTIES']['VIDEO_NEW']['VALUE'] as $key => $video): ?>
						<div>
							<div class="detail__images__i__video">
								<div data-zoomable-video="yes" data-video-id="<?= trim($video) ?>"
									data-index="<?= is_array($defaultOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) ? (count($defaultOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) + ($key + 1)) : 0 ?>">
								</div>
							</div>
						</div>
					<? endforeach; ?>
				<?php endif; ?>
			</div>
			<?php foreach ($arResult['OFFERS'] as $keyOffer => $arOffer) { ?>
				<?php if ($defaultOffer['ID'] != $arOffer['ID']) { ?>
					<? /* если одно фото */ ?>
					<div id="detail-images-offer-id-<?= $arOffer['ID'] ?>" class="detail__images__offer zoomer-root">
						<div>
							<? if (!empty($arOffer['PROPERTIES']['NEWPRODUCT']['VALUE'])): ?>
								<div class="stickers">
									<div class="sticker sticker_new">new</div>
								</div>
							<? endif; ?>
							<picture class="detail__images__i">
								<source class="tns-lazy-img" data-srcset="<?= $arOffer['DETAIL_PICTURE_SMALLEST']['SRC'] ?>"
									media="(max-width: 567px)">
								<source class="tns-lazy-img" data-srcset="<?= $arOffer['DETAIL_PICTURE_SMALL']['SRC'] ?>"
									media="(min-width: 567px)">
								<img
									src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII="
									class="tns-lazy-img" data-src="<?= $arOffer['DETAIL_PICTURE_SMALL']['SRC'] ?>"
									data-img-zoom-url="<?= $arOffer['DETAIL_PICTURE']['SRC'] ?>" data-zoomable="yes" data-real="Y"
									data-index="0" />
							</picture>
						</div>
						<?php foreach ($arOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE'] as $keyImage => $arImage) { ?>
							<? if (!is_array($arImage))
								continue; ?>
							<?php if ($keyImage != 0) { ?>
								<div>
									<picture class="detail__images__i">
										<source class="tns-lazy-img" data-srcset="<?= $arImage['SMALLEST']['SRC'] ?>" media="(max-width: 567px)">
										<source class="tns-lazy-img" data-srcset="<?= $arImage['SMALL']['SRC'] ?>" media="(min-width: 567px)">
										<img class="tns-lazy-img" data-src="<?= $arImage['SRC'] ?>" data-img-zoom-url="<?= $arImage['SRC'] ?>"
											data-zoomable="yes" data-real="Y" data-index="<?= $keyImage ?>" />
									</picture>
								</div>
							<?php } ?>
						<?php } ?>
						<?php if ($arOffer['PROPERTIES']['VIDEO']['VALUE'] != '') { ?>
							<div>
								<div class="detail__images__i__video">
									<div data-zoomable-video="yes" data-video-id="<?= trim($arOffer['PROPERTIES']['VIDEO']['VALUE']) ?>"
										data-index="<?= is_array($arOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) ? count($arOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) : 0 ?>">
									</div>
								</div>
							</div>
						<?php } ?>
						<?php if (!empty($arOffer['PROPERTIES']['VIDEO_NEW']['VALUE'])): ?>
							<? foreach ($arOffer['PROPERTIES']['VIDEO_NEW']['VALUE'] as $key => $video): ?>
								<div>
									<div class="detail__images__i__video">
										<div data-zoomable-video="yes" data-video-id="<?= trim($video) ?>"
											data-index="<?= is_array($arOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) ? (count($arOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE']) + ($key + 1)) : 0 ?>">
										</div>
									</div>
								</div>
							<? endforeach; ?>
						<?php endif; ?>
					</div>
				<?php } ?>
			<?php } ?>
		</div>
		<div class="detail__images__controls">
			<div class="detail__images__controls__controls">
				<div data-controls="prev"></div>
				<div data-controls="next"></div>
			</div>
			<div class="detail__images__controls__nav">
				<div id="detail-images-nav-offer-id-<?= $defaultOffer['ID'] ?>" data-offer-id="<?= $defaultOffer['ID'] ?>"
					class="detail__images__nav__offer active defaultOffer">
					<div>
						<img class="lazy"
							src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII="
							data-src="<?= $defaultOffer['PREVIEW_PICTURE']['SRC'] ?>" />
					</div>
					<?php foreach ($defaultOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE'] as $keyImage => $arImage) { ?>
						<? if (!is_array($arImage))
							continue; ?>
						<?php if ($keyImage != 0) { ?>
							<div><img class="lazy"
									src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII="
									data-src="<?= $arImage['PREVIEW']['SRC'] ?>" /></div>
						<?php } ?>
					<?php } ?>
					<?php if ($defaultOffer['PROPERTIES']['VIDEO']['VALUE'] != '') { ?>
						<div class="video">
							<div></div>
						</div>
					<?php } ?>
					<? foreach ($defaultOffer['PROPERTIES']['VIDEO_NEW']['VALUE'] as $key => $video): ?>
						<div class="video offervideo">
							<div></div>
						</div>
					<? endforeach; ?>
				</div>
				<?php foreach ($arResult['OFFERS'] as $keyOffer => $arOffer) { ?>
					<?php if ($defaultOffer['ID'] != $arOffer['ID']) { ?>
						<div id="detail-images-nav-offer-id-<?= $arOffer['ID'] ?>" data-offer-id="<?= $arOffer['ID'] ?>"
							class="detail__images__nav__offer">
							<div>
								<img class="lazy"
									src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII="
									data-src="<?= $arOffer['PREVIEW_PICTURE']['SRC'] ?>" />
							</div>
							<?php foreach ($arOffer['DISPLAY_PROPERTIES']['MORE_PHOTO']['FILE_VALUE'] as $keyImage => $arImage) { ?>
								<? if (!is_array($arImage))
									continue; ?>
								<?php if ($keyImage != 0) { ?>
									<div><img class="lazy"
											src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAAEAAAABCAQAAAC1HAwCAAAAC0lEQVR42mP8/x8AAwMCAO+ip1sAAAAASUVORK5CYII="
											data-src="<?= $arImage['PREVIEW']['SRC'] ?>" /></div>
								<?php } ?>
							<?php } ?>
							<?php if ($arOffer['PROPERTIES']['VIDEO']['VALUE'] != '') { ?>
								<div class="video">
									<div></div>
								</div>
							<?php } ?>
							<? foreach ($arOffer['PROPERTIES']['VIDEO_NEW']['VALUE'] as $key => $video): ?>
								<div class="video offervideo">
									<div></div>
								</div>
							<? endforeach; ?>
						</div>
					<?php } ?>
				<?php } ?>
			</div>
		</div>
		<div class="detail__images__autoplay"></div>
	</div>
</div>