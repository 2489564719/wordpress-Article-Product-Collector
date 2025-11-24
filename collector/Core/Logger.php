<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.17  |
    |              on 2025-11-22 08:59:56              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 if (!defined('ABSPATH')) { exit; } class SBB_Collector_Logger { private array $entries = []; public function info(string $VOUYR, array $eVHA8 = []) : void { $this->log('INFO', $VOUYR, $eVHA8); } public function warn(string $VOUYR, array $eVHA8 = []) : void { $this->log('WARN', $VOUYR, $eVHA8); } public function error(string $VOUYR, array $eVHA8 = []) : void { $this->log('ERROR', $VOUYR, $eVHA8); } private function log(string $EJWbs, string $VOUYR, array $eVHA8) : void { $this->entries[] = ['time' => current_time('mysql'), 'level' => $EJWbs, 'msg' => $VOUYR, 'ctx' => $eVHA8]; } public function text() : string { goto uC1Hm; ad9ku: return implode("\n", $omM_7); goto S1TdY; uC1Hm: $omM_7 = []; goto CTkqJ; CTkqJ: foreach ($this->entries as $ByO3x) { $eVHA8 = empty($ByO3x['ctx']) ? '' : ' ' . wp_json_encode($ByO3x['ctx'], JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES); $omM_7[] = sprintf('[%s] %s %s%s', $ByO3x['time'], $ByO3x['level'], $ByO3x['msg'], $eVHA8); } goto ad9ku; S1TdY: } }
