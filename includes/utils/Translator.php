<?php

/******************************************************************************
 *  
 *  PROJECT: Flynax Classifieds Software
 *  VERSION: 4.9.2
 *  LICENSE: RU70XA4A4YQ2 - https://www.flynax.ru/user-agreement.html
 *  PRODUCT: Real Estate Classifieds
 *  DOMAIN: heidenbauer.ru
 *  FILE: INDEX.PHP
 *  
 *  The software is a commercial product delivered under single, non-exclusive,
 *  non-transferable license for one domain or IP address. Therefore distribution,
 *  sale or transfer of the file in whole or in part without permission of Flynax
 *  respective owners is considered to be illegal and breach of Flynax License End
 *  User Agreement.
 *  
 *  You are not allowed to remove this information from the file without permission
 *  of Flynax respective owners.
 *  
 *  Flynax Classifieds Software 2023 | All copyrights reserved.
 *  
 *  https://www.flynax.ru
 ******************************************************************************/

namespace Flynax\Utils;

use Exception;
use Google\Cloud\Translate\V2\TranslateClient;

/**
 * Translator class give ability to translate phrases by Google Translation API Basic v2
 * @since 4.9.1
 */
class Translator
{
    /**
     * Translate only phrases that have a pattern in the key
     * Empty by default and all provided phrases will be translated
     * For example, add "pages+name+" pattern to translate pages names only
     * It helps reduce count of requests to API and check the credentials of the Google Translation API Key
     * Using for "translatePhrases" method only; variables in phrase will not be escaped
     */
    public const PHRASE_KEY_PATTERN = '';

    /**
     * @param array       $strings - List of phrases
     *                             - Can be used as simple list: ['phrase 1', 'phrase 2']
     *                             - Or you can use Key => Value format: ['key1' => 'phrase 1', 'key2' => 'phrase 2']
     * @param string      $target  - Target language code (for example "fr" for french)
     * @param string|null $source  - Source language code (for example "en" for english)
     *                             - Optional, by default it will be detected automatically by Google
     * @param string|null $error
     *
     * @return array
     */
    public static function translatePhrases(array $strings, string $target, ?string $source = '', ?string &$error = ''): array
    {
        global $config;

        if (!$config['google_translation_api_key'] || empty($strings) ) {
            return $strings;
        }

        try {
            $translator = new TranslateClient(['key' => $config['google_translation_api_key']]);
            $options    = ['source' => $source, 'target' => $target];

            if (self::PHRASE_KEY_PATTERN) {
                foreach ($strings as &$string) {
                    if (false !== strpos($string['Key'], self::PHRASE_KEY_PATTERN)) {
                        $string['Value']  = self::escapeVariableInString($string['Value']);
                        $translatedPhrase = $translator->translate($string['Value'], $options);
                        $string['Value']  = trim(self::unescapeVariableInString($translatedPhrase['text']));
                    }
                }

                return $strings;
            }

            $escapedStrings = array_map(static function ($item) {
                if (is_array($item) && isset($item['Key'], $item['Value'])) {
                    $item = $item['Value'];
                }

                return self::escapeVariableInString($item);
            }, $strings);

            if (mb_strlen(implode('', $escapedStrings), '8bit') >= 20000) {
                $translatedStrings = [];
                foreach ($escapedStrings as $escapedString) {
                    $translatedStrings[] = $translator->translate($escapedString, $options);
                }
            } else {
                $translatedStrings = $translator->translateBatch($escapedStrings, $options);
            }

            $countTranslatedStrings = count($translatedStrings);
            for ($i = 0; $i < $countTranslatedStrings; $i++) {
                if (is_array($strings[$i]) && $strings[$i]['Key']) {
                    $strings[$i]['Value'] = self::unescapeVariableInString($translatedStrings[$i]['text']);
                } else {
                    $strings[$i] = self::unescapeVariableInString($translatedStrings[$i]['text']);
                }
            }

            return $strings;
        } catch (Exception $e) {
            $response = json_decode($e->getMessage());

            if (isset($response->error->message)) {
                $error = $response->error->message;
            }

            return $strings;
        }
    }

    /**
     * @param string      $string
     * @param string      $target - Target language code (for example "fr" for french)
     * @param string|null $source - Source language code (for example "en" for english)
     *                            - Optional, by default it will be detected automatically by Google
     * @param string|null $error
     *
     * @return string
     */
    public static function translatePhrase(string $string, string $target, ?string $source = '', ?string &$error = ''): string
    {
        global $config;

        if (!$config['google_translation_api_key'] || empty($string) ) {
            return $string;
        }

        $string = self::escapeVariableInString($string);

        try {
            $translator = new TranslateClient(['key' => $config['google_translation_api_key']]);
            $options    = ['target' => $target, 'source' => $source];

            if ($translation = $translator->translate($string, $options)) {
                $string = is_array($translation) && $translation['text'] ? (string) $translation['text'] : $string;
            }
        } catch (Exception $e) {
            $response = json_decode($e->getMessage());

            if (isset($response->error->message)) {
                $error = $response->error->message;
            }

            return $string;
        }

        return trim(self::unescapeVariableInString($string));
    }

    /**
     * Escape variables in text like {category} to prevent the translation of it
     *
     * @param string $string
     *
     * @return string
     */
    public static function escapeVariableInString(string $string): string
    {
        return preg_replace('/({[^}]+})/m', '<span translate="no">${1}</span>', $string);
    }

    /**
     * Remove escaping of the variables in string
     *
     * @param string $string
     *
     * @return string
     */
    public static function unescapeVariableInString(string $string): string
    {
        return preg_replace('/<span translate="no">(\{[^}]+})<\/span>/im', '${1}', $string);
    }
}
