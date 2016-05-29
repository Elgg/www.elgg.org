<?php

namespace Elgg;

class Releases {
	/**
	 * @var string If there are no releases with this branch, it will not appear on the home page,
	 *             or the releases pages.
	 */
	static $dev_branch = '3.0';

	static $stable_branch = '2.1';

	static $lts_branch = '1.12';

	static $security_branches = [
		'2.0',
		'1.11',
		'1.10',
	];
	static $releases = [
		'2.1.1' => 'March 20, 2016',
		'2.1.0' => 'March 13, 2016',
		'2.0.3' => 'March 6, 2016',
		'2.0.2' => 'February 3, 2016',
		'2.0.1' => 'January 3, 2016',
		'2.0.0' => 'December 14, 2015',
		'2.0.0-rc.2' => 'November 29, 2015',
		'2.0.0-rc.1' => 'November 8, 2015',
		'2.0.0-beta.3' => 'October 5, 2015',
		'2.0.0-beta.2' => 'September 24, 2015',
		'2.0.0-beta.1' => 'September 6, 2015',
		'2.0.0-alpha.3' => 'August 24, 2015',
		'2.0.0-alpha.2' => 'August 6, 2015',
		'2.0.0-alpha.1' => 'July 10, 2015',
		'1.12.10' => 'May 29, 2016',
		'1.12.9' => 'March 6, 2016',
		'1.12.8' => 'January 31, 2016',
		'1.12.7' => 'January 3, 2016',
		'1.12.6' => 'December 14, 2015',
		'1.12.5' => 'November 29, 2015',
		'1.12.4' => 'September 20, 2015',
		'1.12.3' => 'September 6, 2015',
		'1.12.2' => 'August 23, 2015',
		'1.12.1' => 'August 5, 2015',
		'1.12.0' => 'July 7, 2015',
		'1.11.5' => 'December 13, 2015',
		'1.11.4' => 'July 7, 2015',
		'1.11.3' => 'June 14, 2015',
		'1.11.2' => 'May 25, 2015',
		'1.11.1' => 'April 26, 2015',
		'1.11.0' => 'April 13, 2015',
		'1.10.6' => 'December 13, 2015',
		'1.10.5' => 'April 5, 2015',
		'1.10.4' => 'March 22, 2015',
		'1.10.3' => 'March 8, 2015',
		'1.10.2' => 'February 21, 2015',
		'1.10.1' => 'January 25, 2015',
		'1.10.0' => 'January 12, 2015',
		'1.9.7' => 'December 14, 2014',
		'1.9.6' => 'November 30, 2014',
		'1.9.5' => 'November 17, 2014',
		'1.9.4' => 'October 19, 2014',
		'1.9.3' => 'October 6, 2014',
		'1.9.2' => 'September 21, 2014',
		'1.9.1' => 'September 12, 2014',
		'1.9.0' => 'September 7, 2014',
		'1.8.20' => 'September 4, 2014',
		'1.8.19' => 'March 12, 2014',
		'1.8.18' => 'January 11, 2014',
		'1.8.17' => 'January 1, 2014',
		'1.8.16' => 'June 25, 2013',
		'1.8.15' => 'April 23, 2013',
		'1.8.14' => 'March 12, 2013',
		'1.8.13' => 'January 29, 2013',
		'1.8.12' => 'January 4, 2013',
		'1.8.11' => 'December 5, 2012',
		'1.8.10' => 'December 4, 2012',
		'1.8.9' => 'November 11, 2012',
		'1.8.8' => 'July 11, 2012',
		'1.8.7' => 'July 10, 2012',
		'1.8.6' => 'June 18, 2012',
		'1.8.5' => 'May 17, 2012',
		'1.8.4' => 'April 24, 2012',
		'1.8.3' => 'January 12, 2012',
		'1.8.1' => 'November 16, 2011',
		'1.8.0.1' => 'September 5, 2011',
		'1.7.23' => 'March 18, 2015',
		'1.7.22' => 'March 12, 2014',
		'1.7.21' => 'January 3, 2014',
		'1.7.20' => 'January 1, 2014',
		'1.7.19' => 'March 14, 2013',
		'1.7.18' => 'March 12, 2013',
		'1.7.17' => 'January 29, 2013',
		'1.7.16' => 'November 11, 2012',
		'1.7.15' => 'January 20, 2012',
		'1.7.14' => 'October 20, 2011',
		'1.7.13' => 'October 8, 2011',
		'1.7.12' => 'September 29, 2011',
		'1.7.11' => 'August 15, 2011',
		'1.7.10' => 'June 15, 2011',
		'1.7.9' => 'June 1, 2011',
		'1.7.8' => 'April 4, 2011',
		'1.7.7' => 'February 1, 2011',
		'1.7.6' => 'December 23, 2010',
		'1.7.5' => 'November 26, 2010',
		'1.7.4' => 'October 14, 2010',
		'1.7.3' => 'September 2, 2010',
		'1.7.2' => 'August 25, 2010',
		'1.7.1' => 'April 21, 2010',
		'1.7.0' => 'March 2010',
		'1.6.4' => 'November 26, 2010',
		'1.6.3' => 'September 2, 2010',
		'1.6.2' => 'April 2010',
		'1.6.1' => 'September 2009',
		'1.6' => 'August 2009',
		'1.5.1' => 'April 2010',
		'1.5' => 'March 2009',
		'1.2' => 'December 2008',
		'1.1' => 'October 2008',
		'1.0' => 'August 2008',
	];

	static $untagged_releases = [
		'1.6.4',
		'1.6.3',
		'1.6.2',
		'1.6.1',
		'1.6',
		'1.5.1',
		'1.5',
		'1.2',
		'1.1',
		'1.0',
	];

	/**
	 * @param string $branch
	 * @param bool   $allow_previews
	 * @return string[] version => date
	 */
	static function getReleases($branch, $allow_previews = true) {
		$ret = [];
		foreach (self::$releases as $version => $date) {
			if (0 === strpos($version, "{$branch}.")) {
				if (false !== strpos($version, '-') && !$allow_previews) {
					continue;
				}
				$ret[$version] = $date;
			}
		}
		return $ret;
	}

	/**
	 * @return string[]
	 */
	static function getSupportedBranches() {
		$supported = self::$security_branches;
		$supported[] = self::$stable_branch;
		$supported[] = self::$lts_branch;
		return array_unique($supported);
	}

	/**
	 * @return string[] version => date
	 */
	static function getUnsupportedReleases() {
		$supported = self::getSupportedBranches();
		$ret = [];
		foreach (self::$releases as $version => $date) {
			$pieces = explode('.', $version);
			$branch = "{$pieces[0]}.{$pieces[1]}";
			if (!in_array($branch, $supported) || false !== strpos($version, '-')) {
				$ret[$version] = $date;
			}
		}
		return $ret;
	}
}
