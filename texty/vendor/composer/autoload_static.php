<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInit3e58cb5797535e5f7271ddfe3cc932fe
{
    public static $prefixLengthsPsr4 = array (
        'T' => 
        array (
            'Texty\\' => 6,
        ),
        'A' => 
        array (
            'Appsero\\' => 8,
        ),
    );

    public static $prefixDirsPsr4 = array (
        'Texty\\' => 
        array (
            0 => __DIR__ . '/../..' . '/includes',
        ),
        'Appsero\\' => 
        array (
            0 => __DIR__ . '/..' . '/appsero/client/src',
        ),
    );

    public static $classMap = array (
        'Appsero\\Client' => __DIR__ . '/..' . '/appsero/client/src/Client.php',
        'Appsero\\Insights' => __DIR__ . '/..' . '/appsero/client/src/Insights.php',
        'Appsero\\License' => __DIR__ . '/..' . '/appsero/client/src/License.php',
        'Appsero\\Updater' => __DIR__ . '/..' . '/appsero/client/src/Updater.php',
        'Composer\\InstalledVersions' => __DIR__ . '/..' . '/composer/InstalledVersions.php',
        'Texty\\Admin' => __DIR__ . '/../..' . '/includes/Admin.php',
        'Texty\\Admin\\Menu' => __DIR__ . '/../..' . '/includes/Admin/Menu.php',
        'Texty\\Admin\\Profile' => __DIR__ . '/../..' . '/includes/Admin/Profile.php',
        'Texty\\Api' => __DIR__ . '/../..' . '/includes/Api.php',
        'Texty\\Api\\Base' => __DIR__ . '/../..' . '/includes/Api/Base.php',
        'Texty\\Api\\Notifications' => __DIR__ . '/../..' . '/includes/Api/Notifications.php',
        'Texty\\Api\\Send' => __DIR__ . '/../..' . '/includes/Api/Send.php',
        'Texty\\Api\\Settings' => __DIR__ . '/../..' . '/includes/Api/Settings.php',
        'Texty\\Api\\Status' => __DIR__ . '/../..' . '/includes/Api/Status.php',
        'Texty\\Api\\Tools' => __DIR__ . '/../..' . '/includes/Api/Tools.php',
        'Texty\\Dispatcher' => __DIR__ . '/../..' . '/includes/Dispatcher.php',
        'Texty\\Gateways' => __DIR__ . '/../..' . '/includes/Gateways.php',
        'Texty\\Gateways\\Clickatell' => __DIR__ . '/../..' . '/includes/Gateways/Clickatell.php',
        'Texty\\Gateways\\Fake' => __DIR__ . '/../..' . '/includes/Gateways/Fake.php',
        'Texty\\Gateways\\GatewayInterface' => __DIR__ . '/../..' . '/includes/Gateways/GatewayInterface.php',
        'Texty\\Gateways\\Plivo' => __DIR__ . '/../..' . '/includes/Gateways/Plivo.php',
        'Texty\\Gateways\\Twilio' => __DIR__ . '/../..' . '/includes/Gateways/Twilio.php',
        'Texty\\Gateways\\Vonage' => __DIR__ . '/../..' . '/includes/Gateways/Vonage.php',
        'Texty\\Install' => __DIR__ . '/../..' . '/includes/Install.php',
        'Texty\\Integrations\\Dokan' => __DIR__ . '/../..' . '/includes/Integrations/Dokan.php',
        'Texty\\Integrations\\WooCommerce' => __DIR__ . '/../..' . '/includes/Integrations/WooCommerce.php',
        'Texty\\Notifications' => __DIR__ . '/../..' . '/includes/Notifications.php',
        'Texty\\Notifications\\Dokan\\Base' => __DIR__ . '/../..' . '/includes/Notifications/Dokan/Base.php',
        'Texty\\Notifications\\Dokan\\CompleteVendor' => __DIR__ . '/../..' . '/includes/Notifications/Dokan/CompleteVendor.php',
        'Texty\\Notifications\\Dokan\\ProcessingVendor' => __DIR__ . '/../..' . '/includes/Notifications/Dokan/ProcessingVendor.php',
        'Texty\\Notifications\\Notification' => __DIR__ . '/../..' . '/includes/Notifications/Notification.php',
        'Texty\\Notifications\\WC\\Base' => __DIR__ . '/../..' . '/includes/Notifications/WC/Base.php',
        'Texty\\Notifications\\WC\\CompleteAdmin' => __DIR__ . '/../..' . '/includes/Notifications/WC/CompleteAdmin.php',
        'Texty\\Notifications\\WC\\CompleteCustomer' => __DIR__ . '/../..' . '/includes/Notifications/WC/CompleteCustomer.php',
        'Texty\\Notifications\\WC\\HoldCustomer' => __DIR__ . '/../..' . '/includes/Notifications/WC/HoldCustomer.php',
        'Texty\\Notifications\\WC\\ProcessingAdmin' => __DIR__ . '/../..' . '/includes/Notifications/WC/ProcessingAdmin.php',
        'Texty\\Notifications\\WC\\ProcessingCustomer' => __DIR__ . '/../..' . '/includes/Notifications/WC/ProcessingCustomer.php',
        'Texty\\Notifications\\WP\\Comment' => __DIR__ . '/../..' . '/includes/Notifications/WP/Comment.php',
        'Texty\\Notifications\\WP\\Registration' => __DIR__ . '/../..' . '/includes/Notifications/WP/Registration.php',
        'Texty\\Settings' => __DIR__ . '/../..' . '/includes/Settings.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->prefixLengthsPsr4 = ComposerStaticInit3e58cb5797535e5f7271ddfe3cc932fe::$prefixLengthsPsr4;
            $loader->prefixDirsPsr4 = ComposerStaticInit3e58cb5797535e5f7271ddfe3cc932fe::$prefixDirsPsr4;
            $loader->classMap = ComposerStaticInit3e58cb5797535e5f7271ddfe3cc932fe::$classMap;

        }, null, ClassLoader::class);
    }
}
