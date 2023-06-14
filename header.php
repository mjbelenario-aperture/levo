<?php
/**
 * The template for displaying theme header
 * 
 * Parts: Top bar, Logo, Navigation
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="profile" href="http://gmpg.org/xfn/11" />
	
	<?php wp_head(); ?>
	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=G-8QQ40JDD2Y"></script>
	<script>
	window.dataLayer = window.dataLayer || [];
	function gtag(){dataLayer.push(arguments);}
	gtag('js', new Date());

	gtag('config', 'G-8QQ40JDD2Y');
	</script>
</head>

<body <?php body_class(); ?> :class="{ 'pt-[75px]': fixed }" x-data="{ fixed: false, slideDown: false, menuToggled: false, search: { open: false, transition: false }, sidePopup: {  open: false, transition: false, type: null } }>">

<div class="body-wrapper">

   <!-- BACKDROP BLUR -->
   <div x-show="menuToggled" class="h-full w-full bg-black/20 z-10 fixed left-0 top-[70px]" :class="{ 'visible' : menuToggled }"></div>
   <!-- END BACKDROP BLUR -->
   <div class="side-popup-wrapper invisible relative top-0 -z-10 w-full overflow-auto bg-black/[.18] opacity-0 transition-[visibility] duration-300 ease-in-out md:fixed md:h-full" :class="{ 'opacity-100 visible z-40': sidePopup.open, 'opacity-0 invisible -z-10': !sidePopup.open }">
      <div class="side-popup-back h-full w-full" @click="sidePopup.transition = false; setTimeout(() => { sidePopup.open = false; sidePopup.type = null; }, 200);"></div>
    </div>


	<header id="main-head" class="main-head overflow-hidden border-b border-nobel lg:overflow-visible" :class="{ 'bg-white fixed -top-[75px] w-full z-20': fixed, 'sticky-header !top-0 transition-[top] duration-300' : slideDown }" @scroll.window=" fixed = (window.pageYOffset > 75) ? true : false; setTimeout(() => slideDown = fixed ? true : false, 300); ">
      <div class="container flex w-full items-center justify-between px-4 pt-3 pb-4 lg:py-3.5">
        <div class="logo order-2 w-3/5 text-center lg:order-1 lg:w-1/5 xl:w-1/4 lg:text-left">
          <a href="/">
            <svg viewBox="0 0 171 43" fill="none" xmlns="http://www.w3.org/2000/svg" class="inline-block max-w-[170px] animate-fill infinite duration-3000 ease-in-out"> 
              <path fill-rule="evenodd" clip-rule="evenodd" d="M21.4799 25.3471V25.3678H18.6584L22.8121 0H16.1662L11.2426 31.9731H21.4799V31.9786H30.1746V31.978H35.9281L35.9252 31.9934H38.3156L39.43 25.3678H33.6149L33.6183 25.3467H26.9695L26.9695 25.3471H21.4799ZM9.41879 42.9143H16.3095L17.4019 36.309H10.5112L9.41879 42.9143ZM7.15243 32.2972H0.261719L1.35415 25.6919H8.24486L7.15243 32.2972ZM2.37147 17.5874H9.26218L10.3546 10.982H3.4639L2.37147 17.5874ZM30.8187 42.5903H24.1323L25.1753 36.2517H31.8368L30.8187 42.5903ZM34.3075 21.073L34.9319 17.2023H40.7673L41.9019 10.5767H36.026L37.7685 0H31.1024L29.3801 10.5767H24.8212L23.7676 17.2225H28.3063L27.6727 21.073H34.3075ZM166.433 30.2695C168.17 27.9041 169.332 24.9735 169.918 21.4778C170.525 17.8145 170.321 14.7113 169.306 12.1679C168.301 9.62459 166.689 7.69354 164.47 6.37478C162.262 5.05602 159.661 4.39663 156.667 4.39663C153.821 4.39663 151.146 5.00892 148.645 6.23348C146.144 7.45805 144.024 9.2635 142.287 11.6498C140.549 14.0362 139.398 16.9772 138.833 20.473C138.226 24.1153 138.43 27.1977 139.445 29.7201C140.46 32.2425 142.077 34.1578 144.296 35.4661C146.515 36.7744 149.132 37.4285 152.146 37.4285C154.972 37.4285 157.625 36.8267 160.106 35.6231C162.586 34.4195 164.695 32.6349 166.433 30.2695ZM161.189 15.8259C161.44 17.0819 161.419 18.6309 161.126 20.473C160.791 22.4616 160.231 24.1519 159.446 25.544C158.672 26.936 157.693 27.9983 156.51 28.731C155.338 29.4636 153.988 29.83 152.46 29.83C151.12 29.83 150.032 29.5212 149.194 28.9037C148.368 28.2862 147.813 27.3599 147.53 26.1248C147.258 24.8898 147.29 23.3408 147.625 21.4778C147.939 19.4892 148.488 17.7884 149.273 16.3754C150.058 14.9624 151.047 13.8792 152.24 13.1256C153.433 12.372 154.804 11.9952 156.353 11.9952C157.714 11.9952 158.797 12.3197 159.603 12.9686C160.409 13.6071 160.938 14.5595 161.189 15.8259ZM55.6171 4.83622L50.2793 36.989H72.0075L73.2007 29.9555H60.2014L64.3461 4.83622H55.6171ZM80.8738 4.83622L75.536 36.989H98.6458L99.8389 29.9555H85.4581L86.3373 24.4293H99.5877L100.781 17.3959H87.5305L88.4096 11.8696H102.853L104.046 4.83622H80.8738ZM117.167 4.83622L119.993 27.5064H120.244L130.606 4.83622H140.465L124.515 36.989H112.583L107.308 4.83622H117.167Z"/> 
            </svg>
          </a>
        </div>
        <nav class="main-menu relative order-1 w-1/5 lg:w-4/5 xl:w-3/4 justify-center text-center lg:static lg:order-2  [&_.sub-menu-active]:left-0 [&_.sub-menu-active]:block [&>.item-hovered>li:not(.mobile-menu-header)>a:not(.active)]:text-dove-gray [&>.item-hovered>li>a:not(.active)>svg]:fill-nobel">
          <input type="checkbox" name="menu-toggle" class="menu-toggle peer/menu absolute top-0 block h-7 w-8 opacity-0 lg:hidden" value="true" x-model="menuToggled" />
          <div class="burger-icon block lg:hidden">
            <svg width="22" height="20" :class="{ 'hidden' : menuToggled }" viewBox="0 0 22 20" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M1.13587 0C0.508546 0 0 0.42533 0 0.95C0 1.47467 0.508546 1.9 1.13587 1.9H20.8641C21.4915 1.9 22 1.47467 22 0.95C22 0.425329 21.4915 0 20.8641 0H1.13587ZM1.13587 9C0.508546 9 0 9.42533 0 9.95C0 10.4747 0.508546 10.9 1.13587 10.9H20.8641C21.4915 10.9 22 10.4747 22 9.95C22 9.42533 21.4915 9 20.8641 9H1.13587ZM1.13587 18C0.508546 18 0 18.4253 0 18.95C0 19.4747 0.508546 19.9 1.13587 19.9H20.8641C21.4915 19.9 22 19.4747 22 18.95C22 18.4253 21.4915 18 20.8641 18H1.13587Z" fill="#b5b5b5" /></svg>
            <svg width="23" height="22" class="hidden" :class="{ 'block' : menuToggled, 'hidden': !menuToggled }" viewBox="0 0 23 22" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M0.292893 19.8787C-0.0976311 20.2692 -0.0976311 20.9024 0.292893 21.2929C0.683417 21.6834 1.31658 21.6834 1.70711 21.2929L11.4998 11.5001L21.2926 21.2929C21.6831 21.6834 22.3163 21.6834 22.7068 21.2929C23.0973 20.9024 23.0973 20.2692 22.7068 19.8787L12.9141 10.0859L21.2929 1.70711C21.6834 1.31658 21.6834 0.683417 21.2929 0.292892C20.9024 -0.0976319 20.2692 -0.0976316 19.8787 0.292892L11.4998 8.67172L3.12102 0.292892C2.7305 -0.0976316 2.09733 -0.0976319 1.70681 0.292892C1.31628 0.683417 1.31628 1.31658 1.70681 1.70711L10.0856 10.0859L0.292893 19.8787Z" fill="#b5b5b5" /></svg>
          </div>
          <ul class="menu-wrapper fixed -left-96 top-[70px] z-10 h-screen w-full max-w-[350px] lg:gap-x-4 xl:gap-x-8 2xl:gap-x-12 bg-white px-8 font-menu font-medium peer-checked/menu:left-0 lg:static lg:flex lg:h-auto lg:w-full lg:max-w-full lg:px-8" x-data="{ isHovered: null, isClicked: false }" :class="isHovered !== null ? 'item-hovered' : ''">
            <li class="border-b border-silver py-4 lg:border-0 lg:py-0 lg:pb-0">
              <a class="font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black transition ease-in-out hover:text-dove-gray" href="#" @mouseover="isHovered = 1" @mouseleave="isHovered = null" :class="isHovered === 1 ? 'active' : ''"> Home </a>
            </li>
            <li class="border-b border-silver py-4 lg:border-0 lg:py-0 lg:pb-0">
              <a class="font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black transition ease-in-out hover:text-dove-gray" href="#" @mouseover="menuToggled = true, !isClicked ? isHovered = 0 : isHovered = null" :class="isHovered === 0 ? 'active' : '';">
                <span>articles</span>
              </a>
              <div class="sub-menu lg:overflow-[none] absolute -left-96 top-px z-20 w-full overflow-auto bg-white pt-4 pb-36 shadow-[0px_1px_2px_rgba(0,0,0,0.1)] lg:left-0 lg:top-[70px] lg:hidden lg:px-4 lg:py-16 2xl:px-0" @mouseleave="isHovered = null, menuToggled = false" @click.prevent="isClicked = false" :class="isHovered === 0 ? 'sub-menu-active' : ''">
                <div class="container px-8 lg:flex lg:px-0 h-[85vh] overflow-y-scroll">
                  <div class="sub-menu-links flex w-full flex-col gap-x-4 gap-y-4 lg:flex-row">
                    <div class="sub-menu-link-group block lg:hidden">
                      <a class="sub-menu-back flex items-center border-b border-silver pb-2" href="#" @click="isHovered = null">
                        <svg width="8" height="14" viewBox="0 0 8 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="-ml-4">
                          <path d="M-3.05972e-07 7.00018L0.655106 7.70091L6.57418 14L8 12.5985L2.73625 7L8 1.40146L6.57418 -2.87367e-07L0.655106 6.29909L-3.05972e-07 7.00018Z" fill="#3D3939" />
                        </svg>
                        <span class="ml-2 w-full font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black hover:text-dove-gray">Articles</span>
                      </a>
                    </div>

                    <div class="mega-menu-column flex w-full items-end justify-center duration-500 ease-in-out hover:opacity-90 xl:w-1/4">
                      <div class="mega-menu-image relative h-[243px] w-full rounded-3xl bg-home-slide-1 bg-cover bg-top bg-no-repeat ease-in-out">
                        <div class="mega-menu-link-wrapper rounded-bl-3xl absolute bottom-0 left-0 bg-cornflower-blue py-2 pl-4 pr-12 after:absolute after:top-3 after:right-3 after:content-arrow-top-right-white">
                          <a href="#" class="cursor-pointer capitalize text-white">
                            <span class="block text-lev-title-m">Startup</span>
                            <span class="text-lev-lg font-light">Articles</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mega-menu-column flex w-full items-end justify-center duration-500 ease-in-out hover:opacity-90 xl:w-1/4">
                      <div class="mega-menu-image relative h-[243px] w-full rounded-3xl bg-home-slide-2 bg-cover bg-top bg-no-repeat ease-in-out">
                        <div class="mega-menu-link-wrapper rounded-bl-3xl absolute bottom-0 left-0 bg-lilac py-2 pl-4 pr-12 after:absolute after:top-3 after:right-3 after:content-arrow-top-right-white">
                          <a href="#" class="cursor-pointer capitalize text-white">
                            <span class="block text-lev-title-m">Sport</span>
                            <span class="text-lev-lg font-light">Articles</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mega-menu-column flex w-full items-end justify-center duration-500 ease-in-out hover:opacity-90 xl:w-1/4">
                      <div class="mega-menu-image relative h-[243px] w-full rounded-3xl bg-home-slide-3 bg-cover bg-top bg-no-repeat ease-in-out">
                        <div class="mega-menu-link-wrapper rounded-bl-3xl absolute bottom-0 left-0 bg-sandy-tan py-2 pl-4 pr-12 after:absolute after:top-3 after:right-3 after:content-arrow-top-right-black">
                          <a href="#" class="cursor-pointer capitalize text-charleston-green">
                            <span class="block text-lev-title-m">Fashion</span>
                            <span class="text-lev-lg font-light">Articles</span>
                          </a>
                        </div>
                      </div>
                    </div>
                    <div class="mega-menu-column flex w-full items-end justify-center duration-500 ease-in-out hover:opacity-90 xl:w-1/4">
                      <div class="mega-menu-image relative h-[243px] w-full rounded-3xl bg-home-slide-4 bg-cover bg-top bg-no-repeat ease-in-out">
                        <div class="mega-menu-link-wrapper rounded-bl-3xl absolute bottom-0 left-0 bg-charleston-green py-2 pl-4 pr-12 after:absolute after:top-3 after:right-3 after:content-arrow-top-right-white">
                          <a href="#" class="cursor-pointer capitalize text-white">
                            <span class="block text-lev-title-m">Tech</span>
                            <span class="text-lev-lg font-light">Articles</span>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
             
            </li>
            <li class="border-b border-silver py-4 lg:border-0 lg:py-0 lg:pb-0">
              <a class="font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black transition ease-in-out hover:text-dove-gray" href="#" @mouseover="isHovered = 1" @mouseleave="isHovered = null" :class="isHovered === 1 ? 'active' : ''"> About </a>
            </li>
            <li class="border-b border-silver py-4 lg:border-0 lg:py-0 lg:pb-0">
              <a class="font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black transition ease-in-out hover:text-dove-gray" href="#" @mouseover="isHovered = 2" @mouseleave="isHovered = null" :class="isHovered === 2 ? 'active' : ''"> Job Board </a>
            </li>
            <li class="border-b border-silver py-4 lg:border-0 lg:py-0 lg:pb-0">
              <a class="font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black transition ease-in-out hover:text-dove-gray" href="#" @mouseover="isHovered = 3" @mouseleave="isHovered = null" :class="isHovered === 3 ? 'active' : ''"> Business Tips </a>
            </li>
            <li class="border-b border-silver py-4 lg:border-0 lg:py-0 lg:pb-0">
              <a class="font-menu text-lev-s font-medium capitalize active:text-cornflower-blue focus:text-cornflower-blue text-raisin-black transition ease-in-out hover:text-dove-gray" href="#" @mouseover="isHovered = 4" @mouseleave="isHovered = null" :class="isHovered === 4 ? 'active' : ''"> Subscription </a>
            </li>
          </ul>
        </nav>
        <div class="search-container px-6 border-novel focus:-pb-[1px] order-3 h-[-webkit-fill-available] w-1/5 pl-4 focus:transition focus:duration-500 focus-within:border focus-within:border-field-gray lg:absolute lg:right-0 lg:ml-16 lg:flex lg:items-center lg:bg-concrete">
          <div class="mobile-search-icon align-centr flex justify-end lg:hidden">
            <svg width="24" height="23" viewBox="0 0 24 23" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M17.4463 15.5958C18.7822 13.9155 19.5157 11.7888 19.5157 9.63581C19.5157 4.33217 15.1934 0 9.87559 0C4.55784 0 0.261719 4.33227 0.261719 9.63581C0.261719 14.9394 4.58394 19.2716 9.87559 19.2716C11.9974 19.2716 14.1193 18.5365 15.8221 17.1975L21.6113 23L23.2617 21.3458L17.4463 15.5958ZM9.87569 16.9874C5.86772 16.9874 2.59324 13.7054 2.59324 9.68832C2.59324 5.67121 5.86772 2.38926 9.87569 2.38926C13.8837 2.38926 17.1581 5.67121 17.1581 9.68832C17.1581 13.7054 13.8837 16.9874 9.87569 16.9874Z" fill="black" /></svg>
          </div>
          <form class="hidden w-full lg:block">
            <svg class="inline h-5 w-1/12" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.5 1c3.59 0 6.5 2.91 6.5 6.5 0 1.53-.54 2.93-1.44 4.03l4.3 4.27c.2.2.2.51 0 .71-.2.2-.51.2-.71 0l-4.27-4.27c-1.1.9-2.5 1.44-4.03 1.44-3.59 0-6.5-2.91-6.5-6.5s2.91-6.5 6.5-6.5zm0 11.5c2.49 0 4.5-2.01 4.5-4.5s-2.01-4.5-4.5-4.5-4.5 2.01-4.5 4.5 2.01 4.5 4.5 4.5z" clip-rule="evenodd" /></svg>
            <input class="font-inter inline w-10/12 border-none bg-transparent text-lev-s text-spanish-gray shadow-none focus:border-none focus:font-medium focus:text-dim-gray focus:outline-none focus:ring-0" type="text" placeholder="Search something" />
          </form>
        </div>
      </div>
    </header>
	
	<div id="main-content" class="main-content">
	