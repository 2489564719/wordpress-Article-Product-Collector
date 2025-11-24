<?php
/*   __________________________________________________
    |  Obfuscated by YAK Pro - Php Obfuscator  2.0.17  |
    |              on 2025-11-22 08:59:56              |
    |    GitHub: https://github.com/pk-fr/yakpro-po    |
    |__________________________________________________|
*/
 if (!defined('ABSPATH')) { exit; } class SBB_Collector_RuleManager { public static function normalize(array $GLzg9) : array { goto kl98h; bOqu9: return $US2sW; goto sV9dK; ytrvO: if (!is_array($GLzg9)) { return []; } goto PgZbz; OHRPh: foreach ($GLzg9 as $p36LP) { if (is_string($p36LP)) { if ($p36LP === 'title') { $US2sW[] = ['builtin' => 'title', 'name' => '标题']; } elseif ($p36LP === 'desc') { $US2sW[] = ['builtin' => 'desc', 'name' => '描述']; } } elseif (is_array($p36LP) && (!empty($p36LP['selector']) || !empty($p36LP['builtin']) || array_key_exists('value', $p36LP))) { goto Js6Hc; A5WVT: $pKqHQ = array_key_exists('value', $p36LP) && empty($p36LP['selector']) && empty($p36LP['builtin']) ? 'text' : 'html'; goto iTy0A; ohiT2: $US2sW[] = $p36LP; goto g8dD9; Js6Hc: $p36LP['name'] = sanitize_text_field($p36LP['name'] ?? '未命名规则'); goto A5WVT; iTy0A: $p36LP['type'] = sanitize_text_field($p36LP['type'] ?? $pKqHQ); goto ohiT2; g8dD9: } } goto bOqu9; PgZbz: $US2sW = []; goto OHRPh; kl98h: if (empty($GLzg9)) { return []; } goto ehnq7; ehnq7: if (array_keys($GLzg9) !== range(0, count($GLzg9) - 1)) { foreach ($GLzg9 as $dnLBA) { if (is_array($dnLBA)) { $GLzg9 = $dnLBA; break; } } } goto ytrvO; sV9dK: } }
