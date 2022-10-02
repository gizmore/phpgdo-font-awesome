<?php
namespace GDO\FontAwesome;

use GDO\UI\GDT_IconUTF8;
use GDO\Core\GDT;

/**
 * FontAwesome icon provider.
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 6.1.0
 */
final class FA_Icon
{
    public static array $MAP = [
        'account' => 'address-card',
        'add' => 'plus',
    	'address' => 'address-book',
        'alert' => 'bell',
        'all' => 'list',
        'arrow_down' => 'sort-down',
        'arrow_left' => 'arrow-left',
        'arrow_right' => 'arrow-right',
        'arrow_up' => 'sort-up',
        'audio' => 'itunes-note',
        'back' => 'arrow-left',
        'bank' => 'piggy-bank',
        'bars' => 'bars',
    	'bee' => 'cow',
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
    	'color' => 'palette',
    	'copyright' => 'copyright',
    	'construction' => 'person-digging',
        'country' => 'flag',
        'create' => 'plus-circle',
        'credits' => 'credit-card',
        'cut' => 'cut',
        'delete' => 'minus-circle',
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
        'folder' => 'folder',
        'font' => 'font',
        'gender' => 'venus-mars',
        'group' => 'users',
        'guitar' => 'guitar',
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
        'phone' => 'phone-office',
        'plus' => 'plus',
    	'position' => 'map-marker',
    	'print' => 'print',
    	'qrcode' => 'qrcode',
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
        'wait' => 'alarm-clock',
    	'work' => 'person-digging',
    	'write' => 'pencil',
    ];
    
	public static function iconS(string $icon, string $iconText=null, string $style=null) : string
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
		$title = $iconText ? " title=\"{$iconText}\"" : GDT::EMPTY_STRING;
		return sprintf('<span class="gdo-icon gdo-fa-icon"%s><i class="%s fa-%s"%s></i></span>',
		    $style, $fas, self::$MAP[$icon], $title);
	}
	
}
