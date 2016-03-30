/*==========
	Search box
==========*/
var searchBox = (function () {
	var $searchBtn = $('.search-btn');
	var $searchBox = $('.search-box');
	var isSearchOpen = false;
	var $mobileSiteNav = $('.mobile-site-nav');

	!function _init() {
		$searchBtn.on('click', _toggleSearchBox);
	}();

	function _toggleSearchBox() {
		$searchBox.toggleClass('search-box--active');
		$mobileSiteNav.removeClass('mobile-site-nav--active');
	}
})();

/*========
	Site nav
========*/
var siteNav = (function () {
	var $mobileSiteNavBtn = $('.mobile-site-nav-btn');
	var $mobileSiteNav = $('.mobile-site-nav');
	var $mobileSubList = $mobileSiteNav.find('.mobile-site-nav__sub-list');
	var $siteNav = $('.site-nav');
	var $siteNavLists = $siteNav.find('.site-nav__list');
	var $siteNavTabs = $siteNav.find('.site-nav__tab');
	var $searchBox = $('.search-box');

	!function _init() {
		$mobileSiteNavBtn.on('click', _toggleMobileSiteNav);
		$mobileSiteNav.on('click', '.mobile-site-nav__title', _showMobileSubList);
		$siteNav.on('click', '.site-nav__tab', _showList);
	}();

	function _toggleMobileSiteNav() {
		$mobileSiteNav.toggleClass('mobile-site-nav--active');
		$searchBox.removeClass('search-box--active');
	}

	function _showMobileSubList() {
		$mobileSubList.removeClass('mobile-site-nav__sub-list--active');
		$(this).next().addClass('mobile-site-nav__sub-list--active');
	}

	function _showList() {
		$siteNavTabs.removeClass('site-nav__tab--active');
		$siteNavLists.removeClass('site-nav__list--active');
		$(this).addClass('site-nav__tab--active')
			.find('.site-nav__list').addClass('site-nav__list--active');
	}
})();