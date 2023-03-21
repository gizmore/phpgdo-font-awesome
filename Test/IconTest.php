<?php
namespace GDO\FontAwesome\Test;

use GDO\FontAwesome\FA_Icon;
use GDO\Tests\TestCase;
use GDO\UI\GDT_IconUTF8;
use Throwable;
use function PHPUnit\Framework\assertTrue;

/**
 * Check if every gdo icon is defined for font awesome icons.
 *
 * @version 7.0.1
 * @author gizmore
 */
final class IconTest extends TestCase
{

	public function testAllUTF8Icons()
	{
		foreach (FA_Icon::$MAP as $key => $icon)
		{
			try
			{
				assertTrue(isset(GDT_IconUTF8::$MAP[$key]), "checking if Icon '{$key}' that looks like {$icon} is defined in FA.");
			}
			catch (Throwable $ex)
			{
				echo "UTF8_Icon $key is missing.";
			}
		}
	}

	public function testAllFAIcons()
	{
		foreach (GDT_IconUTF8::$MAP as $key => $icon)
		{
			try
			{
				assertTrue(isset(FA_Icon::$MAP[$key]), "checking if Icon '{$key}' that looks like {$icon} is defined in FA.");
			}
			catch (Throwable $ex)
			{
				echo "FA_Icon $key is missing.";
			}
		}
	}

}
