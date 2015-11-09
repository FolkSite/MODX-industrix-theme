<?php
if (!$object->xpdo) return false;
/** @var modX $modx */
$modx =& $object->xpdo;

if (!function_exists('getResourceMap')) {
    function getResourceMap() {
        global $modx;

        $assetsPath = rtrim($modx->getOption('industrix-theme.assets_path',null,$modx->getOption('assets_path').'components/industrix-theme/'), '/') . '/';
        $rmf = $assetsPath . 'resourcemap.php';

        if (is_readable($rmf)) {
            $map = include $rmf;
        } else {
            $map = array();
        }

        return $map;
    }
}


function createClientConfigSettings() {
        global $modx;

        $clientConfigCorePath = $modx->getOption('clientconfig.core_path', null, $modx->getOption('core_path', null, MODX_CORE_PATH) . 'components/clientconfig/');
        /** @var ClientConfig $clientConfig */
        $clientConfig = $modx->getService(
            'clientconfig',
            'ClientConfig',
            $clientConfigCorePath . 'model/clientconfig/',
            array(
                'core_path' => $clientConfigCorePath
            )
        );

        $groups = array();

        $group = $modx->getObject('cgGroup', array('label' => 'Global'));
        if (!$group) {
            $group = $modx->newObject('cgGroup');
            $group->set('label', 'Global');
            $group->set('description', '');
            $group->set('sortorder', '0');
            $group->save();
        }
        $groups['global'] = $group->id;

        $group = $modx->getObject('cgGroup', array('label' => 'Colors'));
        if (!$group) {
            $group = $modx->newObject('cgGroup');
            $group->set('label', 'Colors');
            $group->set('description', '');
            $group->set('sortorder', '1');
            $group->save();
        }
        $groups['colors'] = $group->id;

        $group = $modx->getObject('cgGroup', array('label' => 'Company Info'));
        if (!$group) {
            $group = $modx->newObject('cgGroup');
            $group->set('label', 'Company Info');
            $group->set('description', '');
            $group->set('sortorder', '2');
            $group->save();
        }
        $groups['companyinfo'] = $group->id;

        $settings = array(
            array(
                'key' => 'industrix_accentfont_link',
                'label' => 'Accent Font Link',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '3',
                'value' => "https://fonts.googleapis.com/css?family=Oswald",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_accent_primary',
                'label' => 'Accent Primary',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '5',
                'value' => "ff990a",
                'default' => '',
                'group' => $groups['colors'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_accent_secondary',
                'label' => 'Accent Secondary',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '5',
                'value' => "e9741b",
                'default' => '',
                'group' => $groups['colors'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_dark_pattern',
                'label' => 'Dark Pattern',
                'xtype' => 'modx-panel-tv-image',
                'description' => 'used on elements that need a background',
                'is_required' => '0',
                'sortorder' => '96',
                'value' => "assets/components/industrix-theme/images/footer_lodyas.png",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_dark_primary',
                'label' => 'Dark Primary',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '0',
                'value' => "222629",
                'default' => '',
                'group' => $groups['colors'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_dark_secondary',
                'label' => 'Dark Secondary',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '1',
                'value' => "2f3336",
                'default' => '',
                'group' => $groups['colors'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_default_img',
                'label' => 'Default Image',
                'xtype' => 'modx-panel-tv-image',
                'description' => 'used in Sliders, Carousels and Listings',
                'is_required' => '0',
                'sortorder' => '99',
                'value' => "assets/components/industrix-theme/images/default-industrial.jpg",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_font_link',
                'label' => 'Font Link',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '1',
                'value' => "https://fonts.googleapis.com/css?family=Open+Sans:400,700",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_js_link',
                'label' => 'JS Link',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '9',
                'value' => "//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_neutral_primary',
                'label' => 'Neutral Primary',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '3',
                'value' => "919191",
                'default' => '',
                'group' => $groups['colors'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_neutral_secondary',
                'label' => 'Neutral Secondary',
                'xtype' => 'colorpickerfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '4',
                'value' => "f5f1ed",
                'default' => '',
                'group' => $groups['colors'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_phone',
                'label' => 'Phone Number',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '0',
                'value' => "123-456-7890",
                'default' => '',
                'group' => $groups['companyinfo'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_primary_font',
                'label' => 'Primary Font Family',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '1',
                'value' => "font-family: 'Open Sans', sans-serif; font-weight:400;",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),
            array(
                'key' => 'industrix_secondary_font',
                'label' => 'Secondary Font Family',
                'xtype' => 'textfield',
                'description' => '',
                'is_required' => '0',
                'sortorder' => '3',
                'value' => "font-family: 'Oswald', sans-serif;",
                'default' => '',
                'group' => $groups['global'],
                'options' => ''
            ),

        );

        foreach ($settings as $setting) {
            $settingObject = $modx->getObject('cgSetting', array('key' => $setting['key']));
            if (!$settingObject) {
                $settingObject = $modx->newObject('cgSetting');
                $settingObject->set('key', $setting['key']);
                $settingObject->set('label', $setting['label']);
                $settingObject->set('xtype', $setting['xtype']);
                $settingObject->set('description', $setting['description']);
                $settingObject->set('is_required', $setting['is_required']);
                $settingObject->set('sortorder', $setting['sortorder']);
                $settingObject->set('value', $setting['value']);
                $settingObject->set('default', $setting['default']);
                $settingObject->set('group', $setting['group']);
                $settingObject->set('options', $setting['options']);
                $settingObject->save();
            }
        }
}

switch ($options[xPDOTransport::PACKAGE_ACTION]) {
    case xPDOTransport::ACTION_INSTALL:

        $themeSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.theme'));
        if ($themeSetting) {
            $themeSetting->set('value','industrix');
            $themeSetting->save();
        }

        $themeCopyrightSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_copyright'));
        if ($themeCopyrightSetting) {
            $themeCopyrightSetting->set('value','&copy;2015 MODX');
            $themeCopyrightSetting->save();
        }

        $themeSloganSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_slogan'));
        if ($themeSloganSetting) {
            $themeSloganSetting->set('value','Industrial Machinery Business Template');
            $themeSloganSetting->save();
        }

        $themeFBSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.social_facebook'));
        if ($themeFBSetting) {
            $themeFBSetting->set('value','https://www.facebook.com/modxcms');
            $themeFBSetting->save();
        }

        $themeTWITSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.social_twitter'));
        if ($themeTWITSetting) {
            $themeTWITSetting->set('value','https://twitter.com/modx');
            $themeTWITSetting->save();
        }

        $themeImgSetting = $modx->getObject('modSystemSetting', array('key' => 'mxt.default_theme_img'));
        if ($themeImgSetting) {
            $themeImgSetting->set('value','assets/components/industrix-theme/images/modx-revo-2_3-icon.png');
            $themeImgSetting->save();
        }

        createClientConfigSettings();

        break;
    case xPDOTransport::ACTION_UPGRADE:

        $resourceMap = getResourceMap();
        $rssResource = '';

        if (!empty($resourceMap)) {
            $rssResource = '';
        }

        createClientConfigSettings();

        break;
    case xPDOTransport::ACTION_UNINSTALL:
        break;
}

return true;
