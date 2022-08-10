<?php
namespace GDO\FontAwesome\Test;

use GDO\Tests\TestCase;
use GDO\UI\GDT_IconUTF8;
use GDO\FontAwesome\FA_Icon;
use function PHPUnit\Framework\assertTrue;

/**
 * Check if every gdo icon is defined for font awesome icons.
 * 
 * @author gizmore
 * @version 7.0.1
 */
final class IconTest extends TestCase
{
    public function testAllIcons()
    {
        foreach (GDT_IconUTF8::$MAP as $key => $icon)
        {
        	try
        	{
	            assertTrue(isset(FA_Icon::$MAP[$key]), "checking if Icon '{$key}' that looks like {$icon} is defined in FA.");
        	}
        	catch (\Throwable $ex)
        	{
        		echo "FA_Icon $key is missing."; 
        	}
        }
    }

}
