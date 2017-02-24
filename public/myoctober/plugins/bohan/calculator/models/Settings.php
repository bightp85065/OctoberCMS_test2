<?php namespace BoHan\Calculator\Models;
use Model;
class Settings extends Model
{
    public $implement = ['System.Behaviors.SettingsModel'];
    // A unique code
    public $settingsCode = 'calculate_settings';
    // Reference to fields configuration
    public $settingsFields = 'fields.yaml';
}