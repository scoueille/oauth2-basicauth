<?php

/*
 * Copyright 2021 Sebastien Coueille.
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace Scoueille\OAuth2\Client\Provider;

use SimpleSAML\Module\authoauth2\Providers\AdjustableGenericProvider;
use League\OAuth2\Client\OptionProvider\HttpBasicAuthOptionProvider;

/**
 * An AdjustableGenericProvider with HttpBasicAuthOptionProvider optionProvider
 *
 * @author Sebastien Coueille
 */
class BasicAuthProvider extends AdjustableGenericProvider {
    
    public function __construct(array $options = [], array $collaborators = []) {
        $collaborators['optionProvider'] = new HttpBasicAuthOptionProvider();
        
        parent::__construct($options, $collaborators);
    }


}
