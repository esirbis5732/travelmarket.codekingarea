<?php

namespace teztour;

/**
 * Class for a basic rest service utilits.
 */
class BaseServiceRest extends BaseService
{
	protected function doRequest($url, array $params = array())
	{
		$result = null;
		$arUrl = $this->explodeUrl($url);
		$requestContext = http_build_query($params);
		$result = file_get_contents($arUrl['url'].'?'.$requestContext, false);
		return $result;
	}

	protected function explodeUrl($url)
	{
		$tmpUrl = $url;
		if (strpos($tmpUrl, 'http') !== 0) {
			$tmpUrl = 'http://' . $tmpUrl;
		}
		$result = parse_url($tmpUrl);
		$result['url'] = $tmpUrl;
		return $result;
	}
}