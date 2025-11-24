<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.17  |
    |              on 2025-11-22 08:59:56              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 if (!defined('ABSPATH')) { exit; } class SBB_Collector_Crawler { public static function fetch(string $ShF28, SBB_Collector_Logger $l_bxf) : string { goto gjCWr; TsUVo: $xyQ4t = wp_remote_retrieve_response_code($ZL77u); goto EosiE; ZifH6: $e6uGn = ['timeout' => 45, 'redirection' => 5, 'user-agent' => 'SBB-Collector/1.0; ' . home_url('/')]; goto i6QK1; UQWEu: $ZL77u = wp_remote_get($ShF28, $e6uGn); goto u5934; EosiE: $oY8y7 = (string) wp_remote_retrieve_body($ZL77u); goto Ig33g; i6QK1: $e6uGn = apply_filters('sbb_collector_http_args', $e6uGn, $ShF28); goto UQWEu; u5934: if (is_wp_error($ZL77u)) { $l_bxf->error('Fetch failed', ['err' => $ZL77u->get_error_message()]); return ''; } goto TsUVo; xAgsp: $l_bxf->info('Fetch ok', ['status' => $xyQ4t, 'bytes' => strlen($oY8y7)]); goto ms8dB; gjCWr: $l_bxf->info('Fetch start', ['url' => $ShF28]); goto ZifH6; Ig33g: if ($xyQ4t < 200 || $xyQ4t >= 400) { $l_bxf->error('Fetch returned non-success status', ['status' => $xyQ4t, 'bytes' => strlen($oY8y7)]); return ''; } goto xAgsp; ms8dB: return $oY8y7; goto F9rRL; F9rRL: } }
