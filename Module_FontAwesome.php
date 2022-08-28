<?php
namespace GDO\FontAwesome;

use GDO\Core\GDO_Module;
use GDO\UI\GDT_Icon;
use GDO\Core\GDT_EnumNoI18n;
use GDO\Core\GDT_Checkbox;

/**
 * Registers FA_Icon as Icon-Provider when installed and active.
 * Choose between fas and far style globally. 
 * 
 * @author gizmore
 * @version 7.0.1
 * @since 6.3.0
 */
final class Module_FontAwesome extends GDO_Module
{
	public int $priority = 12;
	public string $license = 'Font Awesome Free License';
	
	public function onLoadLanguage() : void { $this->loadLanguage('lang/fa'); }
	
	public function getLicenseFilenames() : array
	{
		return [
			'bower_components/@fortawesome/fontawesome-free/LICENSE.txt'
		];
	}
	
	##############
	### Config ###
	##############
	public function getConfig() : array
	{
	    return [
	    	GDT_EnumNoI18n::make('fa_style')->enumValues('fa', 'fab', 'far', 'fas')->notNull()->initial('fas'),
	    	GDT_Checkbox::make('fa_shim4')->initial('1'),
	    ];
	}
	public function cfgFontAwesomeStyle() { return $this->getConfigVar('fa_style'); }
	public function cfgFontAwesomeShim4() { return $this->getConfigVar('fa_shim4'); }
	
	############
	### Init ###
	############
	public function onInit()
	{
		GDT_Icon::$iconProvider = [FA_Icon::class, 'iconS']; 
	}
	
	public function onIncludeScripts() : void
	{
		$min = $this->cfgMinAppend();
		$this->addBowerCSS("@fortawesome/fontawesome-free/css/all$min.css");
		if ($this->cfgFontAwesomeShim4())
		{
			$this->addBowerCSS("@fortawesome/fontawesome-free/css/v4-shims$min.css");
		}
	}

}
