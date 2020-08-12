<?php namespace GregoryBrown\GbImageResizer\Models;

use Model;

class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];

    // A unique code
    public $settingsCode = 'umst_content_settings';

    // Reference to field configuration
    public $settingsFields = 'fields.yaml';

}