<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.17  |
    |              on 2025-11-22 08:59:56              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 goto FSdeS; FSdeS: if (!defined('ABSPATH')) { exit; } goto Vu1F2; Vu1F2: class SBB_Collector_Bootstrap { public const CSF_META_PREFIX = 'Metabox_CSF_Options'; public const CSF_POST_META_PREFIX = 'Metabox_CSF_Post_Options'; public static function init() { goto rpSUE; yw5S2: require_once __DIR__ . '/Core/RuleManager.php'; goto NNfik; MFB9g: require_once __DIR__ . '/Admin/Menu.php'; goto JTDMN; SI36K: require_once __DIR__ . '/Core/StagingStore.php'; goto yLJPM; QpTzt: require_once __DIR__ . '/Core/ConfigStore.php'; goto SI36K; NNfik: require_once __DIR__ . '/Core/ImageLocalizer.php'; goto s8FD8; JTDMN: add_action('init', function () { goto MMicP; B3AhA: SBB_Collector_Admin_Menu::init(); goto JPAu3; JPAu3: SBB_Collector_Jobs::init(); goto rMuE3; MMicP: SBB_Collector_StagingStore::init(); goto B3AhA; rMuE3: }); goto L9mLW; rpSUE: require_once __DIR__ . '/Core/Logger.php'; goto QpTzt; yLJPM: require_once __DIR__ . '/Core/Crawler.php'; goto XX70a; s8FD8: require_once __DIR__ . '/Jobs/Processors.php'; goto MFB9g; XX70a: require_once __DIR__ . '/Core/Parser.php'; goto yw5S2; L9mLW: } } goto rYDf9; rYDf9: SBB_Collector_Bootstrap::init();
