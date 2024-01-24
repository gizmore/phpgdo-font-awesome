<?php
namespace GDO\FontAwesome;

use GDO\Core\GDT;
use GDO\UI\GDT_IconUTF8;
use GDO\Util\Strings;

/**
 * FontAwesome icon provider.
 *
 * @version 7.0.1
 * @since 6.1.0
 * @author gizmore
 */
final class FA_Icon
{

	public static array $MAP = [
		'account' => 'address-card',
		'add' => 'plus',
		'address' => 'address-book',
		'alert' => 'bell',
		'all' => 'list',
		'amt' => 'calculator',
		'arrow_down' => 'sort-down',
		'arrow_left' => 'arrow-left',
		'arrow_right' => 'arrow-right',
		'arrow_up' => 'sort-up',
		'audio' => 'itunes-note',
		'back' => 'arrow-left',
		'bank' => 'piggy-bank',
		'bars' => 'bars',
		'bee' => 'cow',
		'bell' => 'bell',
		'birthday' => 'birthday-cake',
		'block' => 'ban',
		'book' => 'book',
		'bulb' => 'lightbulb',
		'business' => 'store',
		'calendar' => 'calendar-alt',
		'captcha' => 'lock',
		'caret' => 'caret-right',
		'cc' => 'address-card',
		'check' => 'check',
		'close' => 'window-close',
		'code' => 'code',
		'color' => 'palette',
		'copyright' => 'copyright',
		'construction' => 'person-digging',
		'country' => 'flag',
		'create' => 'plus-circle',
		'credits' => 'credit-card',
		'cut' => 'cut',
		'delete' => 'minus-circle',
		'diamond' => 'diamond',
		'done' => 'check',
		'done_all' => 'check-double',
		'download' => 'download',
		'edit' => 'edit',
		'email' => 'envelope',
		'error' => 'exclamation-triangle',
		'eye' => 'eye',
		'face' => 'user',
		'female' => 'female',
		'file' => 'paperclip',
		'flag' => 'flag',
		'flash' => 'bolt',
		'folder' => 'folder',
		'font' => 'font',
		'format' => 'underline',
		'gender' => 'venus-mars',
		'group' => 'users',
		'guitar' => 'guitar',
		'heart' => 'heart',
		'help' => 'question-circle',
		'house' => 'house',
		'icecream' => 'ice-cream',
		'image' => 'image',
		'info' => 'info',
		'language' => 'language',
		'legal' => 'section',
		'level' => 'trophy',
		'license' => 'paragraph',
		'like' => 'thumbs-up',
		'link' => 'chain',
		'list' => 'th-list',
		'location' => 'location-dot',
		'lock' => 'lock',
		'male' => 'male',
		'medal' => 'medal',
		'menu' => 'bars',
		'message' => 'comment-dots',
		'minus' => 'minus',
		'money' => 'money-bill',
		'numeric' => 'hashtag',
		'password' => 'key',
		'pause' => 'pause-circle',
		'percent' => 'percent',
		'phone' => 'phone',
		'plus' => 'plus',
		'position' => 'map-marker',
		'print' => 'print',
		'qrcode' => 'qrcode',
		'question' => 'question',
		'quote' => 'quote-left',
		'remove' => 'minus',
		'reply' => 'reply',
		'required' => 'asterisk',
		'schedule' => 'clipboard-list',
		'search' => 'search',
		'settings' => 'cog',
		'spiderweb' => 'dharmachakra',
		'star' => 'star',
		'stop' => 'stop',
		'sun' => 'sun',
		'table' => 'table',
		'tag' => 'tags',
		'table' => 'table',
		'thumbs_up' => 'thumbs-up',
		'thumbs_down' => 'thumbs-down',
		'thumbs_none' => 'hand-point-right',
		'time' => 'stopwatch',
		'title' => 'hashtag',
		'trophy' => 'trophy',
		'unicorn' => 'unicorn',
		'upload' => 'upload',
		'url' => 'link',
		'user' => 'user',
		'users' => 'users',
		'view' => 'eye',
		'vote' => 'vote-yea',
		'wait' => 'alarm-clock',
		'whatsapp' => 'whatsapp fa-brands',
		'work' => 'person-digging',
		'write' => 'pencil',
	];

	public static function iconS(string $icon, string $iconText = null, string $style = null): string
	{
		static $fas;
		if ($fas === null)
		{
			$fas = Module_FontAwesome::instance()->cfgFontAwesomeStyle();
		}
		if (!isset(self::$MAP[$icon]))
		{
			return GDT_IconUTF8::iconS($icon, $iconText, $style);
		}
		$myico = self::$MAP[$icon];
		$myfas = Strings::substrFrom($myico, ' ', $fas);
		$myico = Strings::substrTo($myico, ' ', $myico);
		$title = $iconText ? " title=\"{$iconText}\"" : GDT::EMPTY_STRING;
		return sprintf('<span class="gdo-icon gdo-fa-icon"%s><i class="%s fa-%s"%s></i></span>',
			$style, $myfas, $myico, $title);
	}

}
