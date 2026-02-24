<?
global $APPLICATION;
?>
<div class="pageheader ">
	<div class="container">
		<div class="pageheader__row">
			<div class="pageheader__left">
				<div class="pageheader__content">
					<div class="pagetitle">
						<h1><? use App\Classes\Wrapper;

                            $APPLICATION->ShowTitle(false);?></h1>
					</div>
                    <?// Навигационная цепочка - http://dev.1c-bitrix.ru/user_help/settings/settings/components_2/navigation/breadcrumb.php
                    $APPLICATION->IncludeComponent(
                        "bitrix:breadcrumb",
                        ".default",
                        array(
                            // region Дополнительные настройки
                            "START_FROM"  =>  "0",  // Номер пункта, начиная с которого будет построена навигационная цепочка
                            "PATH"        =>  "",   // Путь, для которого будет построена навигационная цепочка (по умолчанию, текущий путь)
                            "SITE_ID"     =>  "-",  // Cайт (устанавливается в случае многосайтовой версии, когда DOCUMENT_ROOT у сайтов разный) : array ( '-' => '', 's1' => '[s1] Интернет-магазин (Сайт по умолчанию)', )
                            // endregion
                        )
                    );?>

				</div><!-- /.pageheader flex content-center -->
			</div><!-- /.pageheader__left -->
			<div class="pageheader__right">
				<div class="contactsblock__common ">
					<div class="contactsblock__cell">
						<div class="contactsblock__label">
                            <?php Wrapper::showIncludeArea('/include/pages/contacts/text.1.php') ?></div>
						<div class="contactsblock__value">
                            <?php Wrapper::showIncludeArea('/include/pages/contacts/text.2.php') ?>
							<div class="contactline__messenger">
                                <?php Wrapper::showIncludeArea('/include/pages/contacts/text.3.php') ?>
							</div>
						</div><!-- /.contactsblock__valie -->
					</div><!-- /.contactsblock__cell -->
					<div class="contactsblock__cell">
						<div class="contactsblock__label"><?php Wrapper::showIncludeArea('/include/pages/contacts/text.4.php') ?></div>
						<div class="contactsblock__value">
                            <?php Wrapper::showIncludeArea('/include/pages/contacts/text.5.php') ?>
						</div><!-- /.contactsblock__valie -->
					</div><!-- /.contactsblock__cell -->
				</div><!-- /.contactsblock__common onlyMobile -->
			</div>
		</div><!-- /.pageheader__row -->
	</div>
</div>
<div class="page">
