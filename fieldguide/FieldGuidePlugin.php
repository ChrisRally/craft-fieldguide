<?php

namespace Craft;

class FieldGuidePlugin extends BasePlugin
{
	public function getName()
	{
		return Craft::t('Field Guide');
	}

	public function getVersion()
	{
		return '1.0';
	}

	public function getDeveloper()
	{
		return 'James Muspratt';
	}

	public function getDeveloperUrl()
	{
		return 'http://jamesmuspratt.com';
	}
}