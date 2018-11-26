<?php
/**
 * Copyright 2016 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

# [START translate_quickstart]
# Includes the autoloader for libraries installed with composer
require __DIR__ . '/vendor/autoload.php';

# Imports the Google Cloud client library
use Google\Cloud\Translate\TranslateClient;

# Your Google Cloud Platform project ID
$projectId = '';

# Instantiates a client
$translate = new TranslateClient([
    'key' => $projectId
]);

# The array text to translate
$text = [

       'TRANSLATE_KEY' => 'VALUE?',
];

# The target language
$target = 'de';

foreach ($text as $key => $value) {

    $translation = $translate->translate($value, ['target' => $target]);

    echo "'" . $key . "'" . "=>" . "'" . $translation['text'] . "',\n";

}

// result  'TRANSLATE_KEY' => TRANSLATED_VALUE


return true;

