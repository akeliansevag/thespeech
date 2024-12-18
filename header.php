<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Source+Serif+4:ital,opsz,wght@0,8..60,200..900;1,8..60,200..900&display=swap" rel="stylesheet">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php get_template_part('components/SideMenu'); ?>
	<header class="fixed top-0 z-20 w-full">
		<div class="bg-white h-[92px] flex items-center">
			<div class="container">
				<div class="w-full flex justify-between items-center">
					<div class="w-1/3">
						<a href="<?= home_url() ?>">
							<svg width="177" height="40" viewBox="0 0 177 40" fill="none" xmlns="http://www.w3.org/2000/svg">
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
					<div class="w-1/3">
						<form action="" method="get">
							<div class="relative">
								<input name="search" type="text" class="bg-[#f2f2f2] bg-opacity-60 w-full pl-6 pr-10 py-2" placeholder="Search">
								<div class="absolute top-1/2 -translate-y-1/2 right-5">
									<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M7.49577 13.9998C8.97492 13.9995 10.4114 13.5044 11.5766 12.5932L15.2399 16.2565L16.4183 15.0782L12.7549 11.4148C13.6666 10.2496 14.1621 8.8127 14.1624 7.33317C14.1624 3.65734 11.1716 0.666504 7.49577 0.666504C3.81994 0.666504 0.829102 3.65734 0.829102 7.33317C0.829102 11.009 3.81994 13.9998 7.49577 13.9998ZM7.49577 2.33317C10.2533 2.33317 12.4958 4.57567 12.4958 7.33317C12.4958 10.0907 10.2533 12.3332 7.49577 12.3332C4.73827 12.3332 2.49577 10.0907 2.49577 7.33317C2.49577 4.57567 4.73827 2.33317 7.49577 2.33317Z" fill="#BBBFBF" />
									</svg>
								</div>


							</div>

						</form>
					</div>
					<div class="w-1/3 flex justify-end">
						<div class="flex items-center gap-5">
							<div>
								<a class="font-bold" href="">EN</a> <span> / </span> <a href="">AR</a>
							</div>

							<span class="separator"></span>
							<div class="flex items-center gap-2">
								<a href="">
									<svg width="10" height="18" viewBox="0 0 10 18" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M9.34201 3.19026C9.34201 3.19026 7.85837 3.07335 7.27389 3.28915C6.30783 3.64599 6.28483 4.48053 6.28483 5.27633V6.90158H9.23859L8.80698 10.0105H6.28483V17.6849H2.9487V10.0105H0.174953V6.90158H2.94887V4.26484C2.94887 1.47291 5.09793 0.461369 6.3792 0.339988C7.66047 0.218607 9.34201 0.58275 9.34201 0.58275V3.19026Z" fill="black" />
									</svg>
								</a>
								<a href="">
									<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M4.12009 16.5628H0.665646V5.72411H4.12009V16.5628Z" fill="black" />
										<path d="M2.39287 4.30458C2.00847 4.30458 1.6327 4.1906 1.31308 3.97704C0.993469 3.76348 0.744359 3.45994 0.597256 3.1048C0.450153 2.74966 0.411664 2.35887 0.486657 1.98186C0.561649 1.60485 0.746755 1.25854 1.01857 0.986731C1.29038 0.71492 1.63669 0.529813 2.0137 0.454821C2.39071 0.379828 2.7815 0.418317 3.13663 0.565421C3.49177 0.712523 3.79531 0.961635 4.00887 1.28125C4.22243 1.60087 4.33642 1.97663 4.33642 2.36103C4.33642 2.87649 4.13165 3.37084 3.76717 3.73533C3.40268 4.09982 2.90833 4.30458 2.39287 4.30458Z" fill="black" />
										<path d="M16.5785 16.5628H13.1879V10.6364C13.1879 10.3353 13.2354 8.3387 11.5399 8.3387C11.2386 8.33121 10.9399 8.39651 10.6692 8.52907C10.3985 8.66163 10.1638 8.85752 9.98496 9.10014C9.67354 9.51564 9.50723 10.0219 9.5116 10.5412V16.5626H6.1251V5.72411H9.34716V7.24529C10.1183 6.06214 11.0902 5.62905 12.0462 5.45473C13.7432 5.14534 16.5782 6.17839 16.5782 9.26313L16.5785 16.5628Z" fill="black" />
									</svg>
								</a>
								<a href="">
									<svg width="19" height="16" viewBox="0 0 19 16" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M18.9676 1.621L16.1258 15.1875C16.0914 15.3516 16.0164 15.5044 15.9075 15.6319C15.7987 15.7594 15.6595 15.8575 15.5028 15.9172C15.3462 15.9769 15.177 15.9963 15.0109 15.9735C14.8448 15.9508 14.6871 15.8867 14.5522 15.7871L10.4187 12.7333L7.91449 15.0958C7.88171 15.1267 7.8431 15.1508 7.80091 15.1666C7.75872 15.1824 7.7138 15.1897 7.66877 15.188C7.62373 15.1863 7.57949 15.1756 7.53862 15.1566C7.49776 15.1376 7.46108 15.1107 7.43074 15.0774L7.37693 15.0183L7.81205 10.8073L15.6548 3.64163C15.6936 3.60625 15.7177 3.55762 15.7224 3.50533C15.7271 3.45304 15.712 3.4009 15.6802 3.35918C15.6483 3.31746 15.602 3.2892 15.5503 3.27996C15.4986 3.27073 15.4453 3.28121 15.401 3.30931L5.37105 9.65744L1.05137 8.20669C0.936509 8.1681 0.836403 8.09492 0.764784 7.99719C0.693166 7.89945 0.653543 7.78195 0.651352 7.6608C0.649161 7.53966 0.68451 7.4208 0.752547 7.32054C0.820585 7.22028 0.917979 7.14353 1.03137 7.10081L17.9326 0.734C18.063 0.684938 18.2042 0.671802 18.3413 0.695963C18.4785 0.720123 18.6067 0.780695 18.7125 0.871345C18.8182 0.961995 18.8977 1.07939 18.9426 1.21127C18.9875 1.34314 18.9961 1.48465 18.9676 1.621Z" fill="black" />
									</svg>

								</a>
								<a href="">
									<svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
										<path d="M13.1042 7.8813e-10H3.89587C3.38426 -1.02898e-05 2.87765 0.100753 2.40498 0.296534C1.9323 0.492316 1.50282 0.779282 1.14105 1.14105C0.779286 1.50281 0.492318 1.93229 0.296536 2.40496C0.100753 2.87764 -1.02899e-05 3.38424 7.88138e-10 3.89586V13.1041C7.88138e-10 14.1374 0.410458 15.1283 1.14108 15.8589C1.50284 16.2207 1.93232 16.5077 2.40499 16.7034C2.87766 16.8992 3.38426 17 3.89587 17H13.1042C14.1374 17 15.1284 16.5895 15.859 15.8589C16.5896 15.1283 17 14.1374 17 13.1041V3.89586C17 3.38425 16.8993 2.87765 16.7035 2.40498C16.5077 1.93232 16.2207 1.50284 15.859 1.14108C15.4972 0.77931 15.0677 0.492342 14.5951 0.296556C14.1224 0.10077 13.6158 6.84641e-10 13.1042 7.8813e-10ZM8.50004 13.8591C7.44011 13.8591 6.40399 13.5448 5.52269 12.9559C4.6414 12.367 3.95451 11.5301 3.5489 10.5508C3.14328 9.57158 3.03715 8.49406 3.24393 7.4545C3.45071 6.41495 3.96112 5.46005 4.7106 4.71058C5.46008 3.9611 6.41497 3.4507 7.45453 3.24392C8.49409 3.03714 9.57163 3.14327 10.5509 3.54888C11.5301 3.95449 12.3671 4.64138 12.956 5.52267C13.5448 6.40396 13.8591 7.44008 13.8591 8.5C13.8591 9.20376 13.7205 9.90063 13.4512 10.5508C13.1819 11.201 12.7871 11.7918 12.2895 12.2894C11.7918 12.7871 11.2011 13.1818 10.5509 13.4511C9.90068 13.7204 9.2038 13.8591 8.50004 13.8591ZM14.0825 4.2357C13.8303 4.23572 13.5838 4.16095 13.3742 4.02087C13.1645 3.88078 13.001 3.68166 12.9045 3.44869C12.808 3.21572 12.7828 2.95936 12.8319 2.71203C12.8811 2.4647 13.0026 2.23752 13.1809 2.0592C13.3592 1.88088 13.5864 1.75945 13.8337 1.71024C14.081 1.66104 14.3374 1.68629 14.5703 1.78278C14.8033 1.87928 15.0024 2.0427 15.1425 2.25237C15.2827 2.46204 15.3574 2.70855 15.3574 2.96072C15.3574 3.29885 15.2231 3.62314 14.984 3.86224C14.7449 4.10134 14.4207 4.23568 14.0825 4.2357Z" fill="black" />
										<path d="M8.5 5C7.80777 5 7.13108 5.20527 6.55551 5.58986C5.97993 5.97444 5.53133 6.52107 5.26642 7.16061C5.00152 7.80015 4.9322 8.50388 5.06725 9.18281C5.2023 9.86175 5.53564 10.4854 6.02513 10.9749C6.51461 11.4644 7.13825 11.7977 7.81718 11.9327C8.49612 12.0678 9.19985 11.9985 9.83939 11.7336C10.4789 11.4687 11.0256 11.0201 11.4101 10.4445C11.7947 9.86892 12 9.19223 12 8.5C12 7.57174 11.6313 6.6815 10.9749 6.02513C10.3185 5.36875 9.42826 5 8.5 5Z" fill="black" />
									</svg>
								</a>
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