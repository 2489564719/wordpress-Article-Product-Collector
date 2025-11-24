<?php
/**
 * Plugin Name: SBB Collector
 * Description: 这是wordpress 采集插件 用来快速采集 发布可见内容 支持普通文章 woocommerce产品采集  polylang多语言文章 以及 acf csf(codestar framework)拓展字段导入。
 * Version: 1.0.0
 * Author: Wxc
 * Licensed under the MIT License.
 * 任何使用本项目的行为必须保留以上版权信息，不得删除或修改。
 */

if (!defined('ABSPATH')) {
    exit;
}


require_once __DIR__ . '/collector/Bootstrap.php';
