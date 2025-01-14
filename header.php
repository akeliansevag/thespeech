<!doctype html>
<html dir="<?php echo is_rtl() ? 'rtl' : 'ltr'; ?>" <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Readex+Pro:wght@160..700&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('components/SideMenu'); ?>
	<header class="fixed top-0 z-20 w-full">
		<div class="bg-white h-[92px] flex items-center">
			<div class="container">
				<div class="w-full flex justify-between items-center">
					<div class="max-lg:w-1/2 w-1/3">
						<a href="<?= home_url() ?>">
							<svg class="max-md:w-[130px]" width="177" height="40" viewBox="0 0 177 40" fill="none" xmlns="http://www.w3.org/2000/svg">
								<g clip-path="url(#clip0_86_1044)">
									<path d="M3.68652 28.3558V27.8901H30.8106V28.3558H3.68652Z" fill="#011011" />
									<path d="M4.75097 22.7377V12.2006C2.99478 12.2006 1.88561 12.8291 1.34951 14.2341H1.25708L1.53437 11.4611H10.1859L10.4632 14.2341H10.3708C9.83467 12.8291 8.7255 12.2006 6.96931 12.2006V22.7377C6.96931 23.3477 7.09871 23.6805 7.43147 23.9393V24.0317H4.28881V23.9393C4.62156 23.6805 4.75097 23.3477 4.75097 22.7377ZM12.0318 12.7552C12.0318 12.1451 11.9024 11.8124 11.5696 11.5536V11.4611H14.7123V11.5536C14.3795 11.8124 14.2501 12.1451 14.2501 12.7552V17.007H18.3171V12.7552C18.3171 12.1451 18.1877 11.8124 17.8549 11.5536V11.4611H20.9976V11.5536C20.6648 11.8124 20.5354 12.1451 20.5354 12.7552V22.7377C20.5354 23.3477 20.6648 23.6805 20.9976 23.9393V24.0317H17.8549V23.9393C18.1877 23.6805 18.3171 23.3477 18.3171 22.7377V17.7464H14.2501V22.7377C14.2501 23.3477 14.3795 23.6805 14.7123 23.9393V24.0317H11.5696V23.9393C11.9024 23.6805 12.0318 23.3477 12.0318 22.7377V12.7552ZM22.7552 12.7552C22.7552 12.1451 22.6258 11.8124 22.2931 11.5536V11.4611H29.706L29.9833 14.2341H29.8909C29.3733 12.8476 28.1162 12.2006 25.9164 12.2006H24.9736V17.007H26.5449C27.728 17.007 28.3565 16.7667 28.5784 16.2675H28.6708V18.4859H28.5784C28.3565 17.9868 27.728 17.7464 26.5449 17.7464H24.9736V23.2923H26.1012C28.1532 23.2923 29.4657 22.5528 30.0758 21.0739H30.1682L29.9833 24.0317H22.2931V23.9393C22.6258 23.6805 22.7552 23.3477 22.7552 22.7377V12.7552Z" fill="#011011" />
									<path d="M36.3063 10.9532C36.3063 5.83341 40.3034 2.59988 46.5908 2.59988C49.7345 2.59988 52.7435 3.40826 55.0788 4.84539L53.1926 11.1328H52.968C51.8004 6.77652 49.4201 4.44119 45.9171 4.44119C42.8632 4.44119 40.9321 6.2376 40.9321 8.84239C40.9321 15.9382 55.5279 15.4891 55.5279 25.4592C55.5279 30.7586 51.3962 34.037 44.7944 34.037C41.5159 34.037 38.6417 33.2286 36.3063 31.7915L38.1926 25.5041H38.4171C39.5848 29.8603 42.0548 32.1957 45.6477 32.1957C48.8363 32.1957 50.8572 30.3544 50.8572 27.6148C50.8572 20.2496 36.3063 20.6987 36.3063 10.9532ZM59.3246 6.19269C59.3246 4.71066 59.0102 3.90227 58.2018 3.27353V3.04898H69.4743C76.7946 3.04898 80.7018 5.7885 80.7018 10.8633C80.7018 17.1059 74.8635 21.058 65.6569 21.058H64.7138V30.4442C64.7138 31.9262 65.0281 32.7346 65.8365 33.3633V33.5879H58.2018V33.3633C59.0102 32.7346 59.3246 31.9262 59.3246 30.4442V6.19269ZM64.7138 19.2615H65.612C71.7198 19.2615 75.0431 16.7915 75.0431 12.2107C75.0431 7.76455 71.8994 4.84539 67.094 4.84539H64.7138V19.2615ZM84.4988 6.19269C84.4988 4.71066 84.1844 3.90227 83.3761 3.27353V3.04898H101.385L102.059 9.7855H101.834C100.577 6.41724 97.5228 4.84539 92.1784 4.84539H89.888V16.522H93.7054C96.5796 16.522 98.1066 15.9382 98.6455 14.7256H98.8701V20.1148H98.6455C98.1066 18.9023 96.5796 18.3184 93.7054 18.3184H89.888V31.7915H92.6275C97.6126 31.7915 100.801 29.9951 102.283 26.4023H102.508L102.059 33.5879H83.3761V33.3633C84.1844 32.7346 84.4988 31.9262 84.4988 30.4442V6.19269ZM106.559 6.19269C106.559 4.71066 106.245 3.90227 105.436 3.27353V3.04898H123.445L124.119 9.7855H123.894C122.637 6.41724 119.583 4.84539 114.239 4.84539H111.948V16.522H115.766C118.64 16.522 120.167 15.9382 120.706 14.7256H120.93V20.1148H120.706C120.167 18.9023 118.64 18.3184 115.766 18.3184H111.948V31.7915H114.688C119.673 31.7915 122.862 29.9951 124.344 26.4023H124.568L124.119 33.5879H105.436V33.3633C106.245 32.7346 106.559 31.9262 106.559 30.4442V6.19269ZM149.389 4.39628L148.85 11.1328H148.626C147.772 6.91125 144.763 4.44119 140.587 4.44119C135.602 4.44119 131.739 7.94419 131.739 15.9831C131.739 24.6508 136.185 31.0729 142.653 31.0729C145.976 31.0729 148.895 29.4562 150.153 26.8514L150.781 27.2556C149.209 31.3424 144.898 34.037 139.958 34.037C132.144 34.037 126.171 27.2556 126.171 18.4532C126.171 9.24658 132.683 2.59988 141.35 2.59988C144.045 2.59988 147.099 3.22862 149.389 4.39628ZM154.583 6.19269C154.583 4.71066 154.269 3.90227 153.46 3.27353V3.04898H161.095V3.27353C160.287 3.90227 159.972 4.71066 159.972 6.19269V16.522H169.853V6.19269C169.853 4.71066 169.538 3.90227 168.73 3.27353V3.04898H176.365V3.27353C175.556 3.90227 175.242 4.71066 175.242 6.19269V30.4442C175.242 31.9262 175.556 32.7346 176.365 33.3633V33.5879H168.73V33.3633C169.538 32.7346 169.853 31.9262 169.853 30.4442V18.3184H159.972V30.4442C159.972 31.9262 160.287 32.7346 161.095 33.3633V33.5879H153.46V33.3633C154.269 32.7346 154.583 31.9262 154.583 30.4442V6.19269Z" fill="#011011" />
								</g>
								<defs>
									<clipPath id="clip0_86_1044">
										<rect width="177" height="39.227" fill="white" transform="translate(0 0.386719)" />
									</clipPath>
								</defs>
							</svg>
						</a>
					</div>
					<div class="w-1/3 max-lg:hidden">
						<form action="<?= home_url() ?>" method="get">
							<div class="relative">
								<input name="s" type="text" class="bg-[#f2f2f2] bg-opacity-60 w-full ltr:pl-6 rtl:pl-10 ltr:pr-10 rtl:pr-6 py-2" placeholder="<?= _e('Search', 'thespeech') ?>">
								<div class="absolute top-1/2 -translate-y-1/2 ltr:right-5 rtl:left-5">
									<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.49577 13.9998C8.97492 13.9995 10.4114 13.5044 11.5766 12.5932L15.2399 16.2565L16.4183 15.0782L12.7549 11.4148C13.6666 10.2496 14.1621 8.8127 14.1624 7.33317C14.1624 3.65734 11.1716 0.666504 7.49577 0.666504C3.81994 0.666504 0.829102 3.65734 0.829102 7.33317C0.829102 11.009 3.81994 13.9998 7.49577 13.9998ZM7.49577 2.33317C10.2533 2.33317 12.4958 4.57567 12.4958 7.33317C12.4958 10.0907 10.2533 12.3332 7.49577 12.3332C4.73827 12.3332 2.49577 10.0907 2.49577 7.33317C2.49577 4.57567 4.73827 2.33317 7.49577 2.33317Z" fill="#BBBFBF" />
									</svg>
								</div>


							</div>

						</form>
					</div>
					<div class="max-lg:w-1/2 w-1/3 flex justify-end">
						<div class="flex items-center max-lg:gap-3 gap-5">
							<div>
								<!-- <a class="font-bold" href="">EN</a> <span> / </span> <a href="">AR</a> -->
								<?= do_shortcode('[wpml_language_selector_widget]'); ?>
							</div>

							<span class="separator max-lg:hidden"></span>
							<div class="max-lg:hidden">
								<?php get_template_part('components/SocialMedia'); ?>
							</div>
							<div class="lg:hidden" id="search-btn">
								<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M7.49577 13.9998C8.97492 13.9995 10.4114 13.5044 11.5766 12.5932L15.2399 16.2565L16.4183 15.0782L12.7549 11.4148C13.6666 10.2496 14.1621 8.8127 14.1624 7.33317C14.1624 3.65734 11.1716 0.666504 7.49577 0.666504C3.81994 0.666504 0.829102 3.65734 0.829102 7.33317C0.829102 11.009 3.81994 13.9998 7.49577 13.9998ZM7.49577 2.33317C10.2533 2.33317 12.4958 4.57567 12.4958 7.33317C12.4958 10.0907 10.2533 12.3332 7.49577 12.3332C4.73827 12.3332 2.49577 10.0907 2.49577 7.33317C2.49577 4.57567 4.73827 2.33317 7.49577 2.33317Z" fill="#000000" />
								</svg>
							</div>


							<span class="separator"> </span>

							<div class="hamburger cursor-pointer" id="hamburger">
								<span></span>
								<span></span>
								<span></span>
							</div>
						</div>
					</div>
				</div>


			</div>
		</div>

		<div class="bg-[#BBBFBF] max-lg:hidden bg-opacity-40 h-[50px] w-full flex items-center backdrop-blur-[50px]">
			<div class="w-full max-w-[1400px] mx-auto">
				<?php
				wp_nav_menu(['menu' => 'main-menu', 'menu_class' => 'uppercase menu text-sm font-[600]']);
				?>
			</div>
		</div>
	</header>