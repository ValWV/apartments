<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������ ��������");
?><div class="spacer">
                    <div class="container">


<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.element", 
	"gp_element", 
	array(
		"IBLOCK_TYPE" => "gp_realestate_catalog",
		"IBLOCK_ID" => "1",
		"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
		"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"PROPERTY_CODE" => array(
			0 => "type",
			1 => "rooms",
			2 => "district",
			3 => "address",
			4 => "metro",
			5 => "price",
			6 => "area",
			7 => "floor",
			8 => "city",
			9 => "building",
			10 => "ymap",
			11 => "lavatory",
			12 => "have",
			13 => "all_area",
			14 => "live_area",
			15 => "kitchen_area",
			16 => "realtor",
			17 => "years",
			18 => "photo",
			19 => "schem",
			20 => "",
		),
		"OFFERS_LIMIT" => "0",
		"SECTION_URL" => SITE_DIR."apartments/#CODE#/",
		"DETAIL_URL" => SITE_DIR."apartments/#SECTION_CODE#/#ELEMENT_CODE#/",
		"BASKET_URL" => "",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "3600",
		"CACHE_GROUPS" => "Y",
		"META_KEYWORDS" => "-",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"USE_ELEMENT_COUNTER" => "Y",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"USE_PRODUCT_QUANTITY" => "N",
		"LINK_IBLOCK_TYPE" => "gp_realestate",
		"LINK_IBLOCK_ID" => "20",
		"LINK_PROPERTY_SID" => "district",
		"LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_CODE=#ELEMENT_CODE#",
		"HIDE_NOT_AVAILABLE" => "N",
		"ADD_ELEMENT_CHAIN" => "N",
		"CONVERT_CURRENCY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"COMPONENT_TEMPLATE" => "gp_element",
		"SHOW_DEACTIVATED" => "N",
		"BACKGROUND_IMAGE" => "-",
		"CHECK_SECTION_ID_VARIABLE" => "N",
		"SEF_MODE" => "N",
		"SET_CANONICAL_URL" => "N",
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"DISPLAY_COMPARE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_INFO_BLOCK_ORDER" => "sku,props",
		"PRODUCT_PAY_BLOCK_ORDER" => "rating,price,priceRanges,quantityLimit,quantity,buttons",
		"MAIN_BLOCK_PROPERTY_CODE" => "",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "",
		"DISPLAY_NAME" => "Y",
		"IMAGE_RESOLUTION" => "16by9",
		"SHOW_SLIDER" => "N",
		"DETAIL_PICTURE_MODE" => array(
			0 => "POPUP",
			1 => "MAGNIFIER",
		),
		"ADD_DETAIL_TO_SLIDER" => "N",
		"DISPLAY_PREVIEW_TEXT_MODE" => "E",
		"MESS_BTN_BUY" => "������",
		"MESS_BTN_ADD_TO_BASKET" => "� �������",
		"MESS_BTN_SUBSCRIBE" => "�����������",
		"MESS_NOT_AVAILABLE" => "��� � �������",
		"USE_VOTE_RATING" => "N",
		"USE_COMMENTS" => "N",
		"BRAND_USE" => "N",
		"MESS_PRICE_RANGES_TITLE" => "����",
		"MESS_DESCRIPTION_TAB" => "��������",
		"MESS_PROPERTIES_TAB" => "��������������",
		"MESS_COMMENTS_TAB" => "�����������",
		"USE_RATIO_IN_RANGES" => "N",
		"USE_ENHANCED_ECOMMERCE" => "N"
	),
	false
);?>




</div>
</div><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>