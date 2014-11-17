<?php
return array(
    'doctrine' => array(
        'driver' => array(
            'zfcuser_document' => array(
                'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\XmlDriver',
                'paths' => __DIR__ . '/xml'
            ),

            'odm_default' => array(
                'drivers' => array(
                    'ApigilityZfcUserDoctrineMongoODM\Document'  => 'zfcuser_document'
                )
            )
        )
    ),
);