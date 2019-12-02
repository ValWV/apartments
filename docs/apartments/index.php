<?

require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������� ������������");
if ($_REQUEST["sort"]){
	$SORT_FIELD = trim(htmlspecialchars($_REQUEST["sort"]));
	$SORT_ORDER = trim(htmlspecialchars($_REQUEST["order"]));
}else {
	$SORT_FIELD = "property_price";
	$SORT_ORDER = "desc";
}
if ($_REQUEST["agent"]){
	global $gp_filter;
	$gp_filter = Array("PROPERTY_realtor" => trim(htmlspecialchars($_REQUEST["agent"])));
}
?></div>
</div>



<div style="margin: 5em; auto">

<!-- Filter -->
<?$APPLICATION->IncludeComponent("bitrix:main.include", "template1", Array(
	"AREA_FILE_SHOW" => "sect",	// Показывать включаемую область
		"AREA_FILE_SUFFIX" => "filter",	// Суффикс имени файла включаемой области
		"AREA_FILE_RECURSIVE" => "Y",	// Рекурсивное подключение включаемых областей разделов
		"EDIT_TEMPLATE" => "",	// Шаблон области по умолчанию
	),
	false
);?>
<!-- End Filter -->

</div>

<?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"gp_section_list_tabs_a_v1", 
	array(
		"IBLOCK_TYPE" => "gp_realestate_estate",
		"IBLOCK_ID" => "1",
		"SECTION_ID" => $_REQUEST["SECTION_ID"],
		"SECTION_CODE" => $_REQUEST["SECTION_CODE"],
		"SECTION_USER_FIELDS" => array(
			0 => "UF_IMAGE",
			1 => "UF_ADDRESS",
			2 => "UF_METRO",
			3 => "UF_SUB_LOCALITY",
			4 => "",
		),
		"ELEMENT_SORT_FIELD" => "id",
		"ELEMENT_SORT_ORDER" => $SORT_ORDER,
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "gp_filter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"PAGE_ELEMENT_COUNT" => "50",
		"LINE_ELEMENT_COUNT" => "1",
		"PROPERTY_CODE" => array(
			0 => "type",
			1 => "category",
			2 => "deal_status",
			3 => "building_name",
			4 => "developer",
			5 => "building_state",
			6 => "built_year",
			7 => "ready_quarter",
			8 => "rooms",
			9 => "mortgage",
			10 => "region",
			11 => "district",
			12 => "locality_name",
			13 => "sub_locality_name",
			14 => "address",
			15 => "latitude",
			16 => "longitude",
			17 => "metro",
			18 => "time_on_transport",
			19 => "time_on_foot",
			20 => "price",
			21 => "currency",
			22 => "area",
			23 => "living_space",
			24 => "kitchen_space",
			25 => "floor",
			26 => "floors_total",
			27 => "building_type",
			28 => "studio",
			29 => "ceiling_height",
			30 => "renovation",
			31 => "sale_detail",
			32 => "vid",
			33 => "price_currency",
			34 => "all_area",
			35 => "",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => SITE_DIR."apartments/#SECTION_CODE#/",
		"DETAIL_URL" => SITE_DIR."apartments/#SECTION_CODE#/#ELEMENT_CODE#/",
		"BASKET_URL" => "",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"AJAX_MODE" => "Y",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"CACHE_TYPE" => "N",
		"CACHE_TIME" => "36000000",
		"CACHE_GROUPS" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"META_KEYWORDS" => "",
		"SET_META_DESCRIPTION" => "Y",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "Y",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "Y",
		"SET_STATUS_404" => "Y",
		"CACHE_FILTER" => "N",
		"PRICE_CODE" => array(
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"USE_PRODUCT_QUANTITY" => "N",
		"PAGER_TEMPLATE" => "gp_nav",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"PAGER_TITLE" => "�������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"HIDE_NOT_AVAILABLE" => "N",
		"CONVERT_CURRENCY" => "N",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"COMPONENT_TEMPLATE" => "gp_section_list_tabs_a_v1",
		"SET_BROWSER_TITLE" => "Y",
		"BACKGROUND_IMAGE" => "-",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPOSITE_FRAME_MODE" => "A",
		"COMPOSITE_FRAME_TYPE" => "AUTO",
		"COMPATIBLE_MODE" => "Y",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false
);?> 
 
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>