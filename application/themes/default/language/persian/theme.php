<?php defined('BASEPATH') OR exit('No direct script access allowed');

if(!isset($lang) || !is_array($lang))
    $lang = [];

/**
 * - RTL -----------------------------------------------------
 * -----------------------------------------------------------
 */
$lang['isRTL'] = 1;

/**
 * پشتیبانی از زبان فارسی
 */

/**
 * - Global --------------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    'global_or'          => 'یا',
    'global_icon'        => 'آیکون',
    'global_okay'        => 'باشه',
    'global_accept'      => 'قبول',
    'global_reject'      => 'رد کردن',
    'global_cancel'      => 'لغو',
    'global_online'      => 'آنلاین',
    'global_offline'     => 'آفلاین',
    'global_loading'     => 'در حال بارگذاری...',
    'global_user_avatar' => 'آواتار %s'
]);

/**
 * - Main Template -------------------------------------------
 * -----------------------------------------------------------
 */
$lang = array_merge($lang, [
    # Logo
    'logo' => 'به %s خوش آمدید',

    # Menu
    'nav' => 'ناوبری',

    # دکمه‌های کاربر
    'account'  => 'حساب',
	'messages'  => 'پیام‌ها',
    'register' => 'ثبت‌نام',

    # بنر 1
    'banner01_text01' => 'به %s خوش آمدید',
    'banner01_text02' => 'در یک ماجراجویی حماسی در دنیایی پر از جادو و رازها شرکت کنید. برای دسترسی به تمام تجربیات هیجان‌انگیزی که ارائه می‌دهیم، لطفاً برای دریافت یک حساب کاربری ثبت‌نام کنید. هم‌اکنون به ما بپیوندید و سفر خود را امروز آغاز کنید!',

    # بنر 2
    'banner02_text01' => 'یاد بگیرید چگونه',
    'banner02_text02' => 'به ما وصل شوید',
    'banner02_text03' => 'به قلمروهای ما',
    'banner02_text04' => 'برای خواندن کلیک کنید',

    # حقوق کپی رایت
    'copyright' => '%s &copy; حقوق کپی رایت %s'
]);