<?php

use SilverStripe\Assets\Image;
use SilverStripe\CMS\Model\SiteTree;
use SilverStripe\AssetAdmin\Forms\UploadField;

class Page extends SiteTree
{
    private static $db = [];

    private static $has_one = [
        'FeaturedImage' => Image::class
    ];

    private static $owns = [
        'FeaturedImage'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        $fields->addFieldToTab(
            'Root.Main',
            UploadField::create(
                'FeaturedImage'
            ),
            'Metadata'
        );
        
        return $fields;
    }
}
