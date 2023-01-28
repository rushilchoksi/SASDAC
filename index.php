<?php
session_start();
require_once('siteConfig.php');

if (isset($_SESSION['USER_AUTH_VALID'])) {
	if ($_SESSION['USER_AUTH_VALID'] != true) {
		header('Location: login');
	}
}
else {
	header('Location: login');
}
?>
<!DOCTYPE html>
<html data-wf-domain="dataplustemplate.webflow.io" data-wf-page="63619a386216ae01ef9340bc" data-wf-site="63619a386216ae681d93409b" data-wf-status="1">
	<head>
		<meta charset="utf-8" />
		<title>Dataplus X - Webflow Ecommerce website template</title>
		<meta content="Dataplus X is our ultimate dark mode technology Webflow Template created for modern tech and software startups looking for a cutting-edge dark style for their website." name="description" />
		<meta content="Dataplus X - Webflow Ecommerce website template" property="og:title" />
		<meta content="Dataplus X is our ultimate dark mode technology Webflow Template created for modern tech and software startups looking for a cutting-edge dark style for their website." property="og:description" />
		<meta content="https://assets.website-files.com/63619a386216ae681d93409b/637294421dc61596c59f345e_featured-image-dataplus-template.png" property="og:image" />
		<meta content="Dataplus X - Webflow Ecommerce website template" property="twitter:title" />
		<meta content="Dataplus X is our ultimate dark mode technology Webflow Template created for modern tech and software startups looking for a cutting-edge dark style for their website." property="twitter:description" />
		<meta content="https://assets.website-files.com/63619a386216ae681d93409b/637294421dc61596c59f345e_featured-image-dataplus-template.png" property="twitter:image" />
		<meta property="og:type" content="website" />
		<meta content="summary_large_image" name="twitter:card" />
		<meta content="width=device-width, initial-scale=1" name="viewport" />
		<meta content="Webflow" name="generator" />
		<link href="https://assets.website-files.com/63619a386216ae681d93409b/css/dataplustemplate.webflow.1f84cec9c.css" rel="stylesheet" type="text/css" />
		<script type="text/javascript">
			! function(o, c) {
				var n = c.documentElement,
					t = " w-mod-";
				n.className += t + "js", ("ontouchstart" in o || o.DocumentTouch && c instanceof DocumentTouch) && (n.className += t + "touch")
			}(window, document);
		</script>
		<link href="https://assets.website-files.com/63619a386216ae681d93409b/63619e5eab988574728cc8fe_favicon-dataplus-template.svg" rel="shortcut icon" type="image/x-icon" />
		<link href="https://assets.website-files.com/63619a386216ae681d93409b/63619e62013aff4640691bd5_webclip-dataplus-template.svg" rel="apple-touch-icon" />
	</head>
	<body>
		<div style="opacity:0" class="page-wrapper">
			<div data-w-id="296f8093-73a5-a05e-210a-be41bc6222cc" data-animation="default" data-collapse="medium" data-duration="400" data-easing="ease" data-easing2="ease" role="banner" class="header-wrapper w-nav">
				<div class="container-default w-container">
					<div class="dropdown-header-wrapper---bg-copy"></div>
					<div class="header-content-wrapper">
						<a href="index.html" aria-current="page" class="header-logo-link w-nav-brand w--current">
							<img src="https://assets.website-files.com/63619a386216ae681d93409b/6361ced8050220282fb340e9_logo-dataplus-template.svg" alt="Logo - Dataplus X Webflow Template" class="header-logo" />
						</a>
						<div class="header-middle">
							<nav role="navigation" class="header-nav-menu-wrapper w-nav-menu">
								<ul role="list" class="header-nav-menu-list">
									<li class="header-nav-list-item middle">
										<a href="index.html" aria-current="page" class="header-nav-link w-nav-link w--current">Home</a>
									</li>
									<li class="header-nav-list-item middle">
										<a href="about.html" class="header-nav-link w-nav-link">About</a>
									</li>
									<li class="header-nav-list-item middle">
										<a href="blog-pages/blog-v1.html" class="header-nav-link w-nav-link">Blog</a>
									</li>
									<li class="header-nav-list-item middle">
										<div data-hover="false" data-delay="0" data-w-id="a72f1425-7229-975a-d64a-43568428ba2c" class="dropdown-wrapper static w-dropdown">
											<div class="header-nav-link dropdown-nav-link w-dropdown-toggle">
												<div>Pages</div>
												<div class="line-rounded-icon dropdown-arrow"></div>
											</div>
											<nav class="dropdown-column-wrapper full-width w-dropdown-list">
												<div class="dropdown-full-width-container">
													<div class="container-default dropdown-full-width">
														<div class="menu-wrapper---main dropdown-menu">
															<div class="menu-wrapper">
																<div class="mg-bottom-64px hidden-on-tablet">
																	<div class="text-100 medium color-neutral-400">Pages</div>
																</div>
																<div class="nav-content">
																	<ul role="list" class="nav-menu-list-wrapper">
																		<li class="nav-menu-list-item">
																			<a href="index.html" aria-current="page" class="nav-link w--current">Home (Sales)</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="home-pages/home-v1.html" class="nav-link">Home V1</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="home-pages/home-v2.html" class="nav-link">Home V2</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="home-pages/home-v3.html" class="nav-link">Home V3</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="about.html" class="nav-link">About us</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="integrations.html" class="nav-link">Integrations</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="integration/facebook.html" class="nav-link">Integration single</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="pricing.html" class="nav-link">Pricing</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="product/starter.html" class="nav-link">Pricing single</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="careers.html" class="nav-link">Careers</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="career/head-of-inbound-marketing.html" class="nav-link">Jobs post</a>
																		</li>
																	</ul>
																	<ul role="list" class="nav-menu-list-wrapper">
																		<li class="nav-menu-list-item">
																			<a href="blog-pages/blog-v1.html" class="nav-link">Blog V1</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="blog-pages/blog-v2.html" class="nav-link">Blog V2</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="blog-pages/blog-v3.html" class="nav-link">Blog V3</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="blog/new-feature-crm-integration-with-salesforce-com.html" class="nav-link">Blog post</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="feature-pages/features-v1.html" class="nav-link">Features V1</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="feature-pages/features-v2.html" class="nav-link">Features V2</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="feature-pages/features-v3.html" class="nav-link">Features V3</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="help-center.html" class="nav-link">Help center</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="help-center-category/getting-started.html" class="nav-link">Help center category</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="help-center-post/how-to-create-a-free-dataplus-account.html" class="nav-link">Help center single</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="menu-wrapper">
																<div class="mg-bottom-64px hidden-on-tablet">
																	<div class="text-100 medium color-neutral-400">Template pages</div>
																</div>
																<div class="nav-content">
																	<ul role="list" class="nav-menu-list-wrapper">
																		<li class="nav-menu-list-item">
																			<a href="template-pages/start-here.html" class="nav-link">Start here</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="template-pages/style-guide.html" class="nav-link">Style guide</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="404.html" class="nav-link">404 Not found</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="401.html" class="nav-link">Password protected</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="template-pages/licenses.html" class="nav-link">Licenses</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="template-pages/changelog.html" class="nav-link">Changelog</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="https://brixtemplates.com/more-webflow-templates" target="_blank" class="nav-link featured">Browse all templates</a>
																		</li>
																	</ul>
																</div>
															</div>
															<div class="menu-wrapper">
																<div class="mg-bottom-64px hidden-on-tablet">
																	<div class="text-100 medium color-neutral-400">Utility pages</div>
																</div>
																<div class="nav-content">
																	<ul role="list" class="nav-menu-list-wrapper">
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/sign-in.html" class="nav-link">Sign in</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/sign-up.html" class="nav-link">Sign up</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/forgot-password.html" class="nav-link">Forgot password</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/reset-password.html" class="nav-link">Reset password</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/terms-conditions.html" class="nav-link">Terms &amp; conditions</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/confirm-email.html" class="nav-link">Confirm your email</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/demo.html" class="nav-link">Demo</a>
																		</li>
																		<li class="nav-menu-list-item">
																			<a href="utility-pages/landing-page.html" class="nav-link">Landing page</a>
																		</li>
																	</ul>
																</div>
															</div>
														</div>
													</div>
												</div>
											</nav>
										</div>
									</li>
									<li class="header-nav-list-item middle">
										<a href="pricing.html" class="header-nav-link w-nav-link">Pricing</a>
									</li>
									<li class="header-nav-list-item link---show-in-mbl">
										<a href="index.html#" class="header-nav-link w-inline-block">
											<div class="custom-icon-font link-icon-left"></div>
											<div class="link-text">Login</div>
										</a>
									</li>
									<li class="header-nav-list-item btn---show-in-mbl">
										<a href="index.html#" class="btn-primary width-100 w-button">Get started</a>
									</li>
								</ul>
							</nav>
							<div data-node-type="commerce-cart-wrapper" data-wf-page-link-href-prefix="" class="w-commerce-commercecartwrapper cart-button-wrapper">
								<a href="index.html#" data-node-type="commerce-cart-open-link" class="w-commerce-commercecartopenlink header-nav-link cart-nav-link w-inline-block">
									<div>Cart(</div>
									<div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItemsCount%22%7D%7D%5D" class="w-commerce-commercecartopenlinkcount cart-quantity">0</div>
									<div>)</div>
								</a>
								<div data-node-type="commerce-cart-container-wrapper" style="display:none" class="w-commerce-commercecartcontainerwrapper w-commerce-commercecartcontainerwrapper--cartType-modal cart-wrapper">
									<div data-node-type="commerce-cart-container" class="w-commerce-commercecartcontainer cart-container">
										<div class="w-commerce-commercecartheader cart-header">
											<h4 class="w-commerce-commercecartheading heading-h5-size">Your Cart</h4>
											<a href="index.html#" data-node-type="commerce-cart-close-link" class="w-commerce-commercecartcloselink cart-close-button w-inline-block">
												<div class="line-square-icon"></div>
											</a>
										</div>
										<div class="w-commerce-commercecartformwrapper cart-form-wrapper">
											<form data-node-type="commerce-cart-form" style="display:none" class="w-commerce-commercecartform">
												<script type="text/x-wf-template" id="wf-template-35de9e2c-dfdd-11bf-3683-47dedbed2ec4">%3Cdiv%20class%3D%22w-commerce-commercecartitem%20cart-item-wrapper%22%3E%3Cdiv%20class%3D%22cart-item-content---main%22%3E%3Ca%20data-wf-bindings%3D%22%255B%257B%2522dataWHref%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522detailPage%2522%252C%2522params%2522%253A%255B%252263619a386216ae9926934101%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_slug_%2522%252C%2522collectionSlugMap%2522%253A%257B%2522636bd0fa4aff1c73a06ca714%2522%253A%2522integration%2522%252C%2522636bd5b9c38dd15be9c998c3%2522%253A%2522integration-category%2522%252C%2522COMMERCE_CART_COLLECTION_ID%2522%253A%2522cart%2522%252C%252263619a386216ae9926934101%2522%253A%2522product%2522%252C%252263619a386216ae85d09340ec%2522%253A%2522category%2522%252C%252263619a386216ae106d934140%2522%253A%2522blog-post-categories%2522%252C%2522636c4bf1bfd4d87e3b655408%2522%253A%2522career-category%2522%252C%2522636d3916a1159560bd68a7a8%2522%253A%2522help-center-post%2522%252C%2522636d3edb3bfcc7dbd9ba979f%2522%253A%2522help-center-category%2522%252C%2522636c4ba5e3acea080b88636a%2522%253A%2522career%2522%252C%252263619a386216ae33a29340d1%2522%253A%2522sku%2522%252C%2522COMMERCE_ORDER_USER_ITEMS_COLLECTION_ID%2522%253A%2522userItems%2522%252C%252263619a386216aecc81934116%2522%253A%2522blog%2522%257D%257D%257D%255D%22%20href%3D%22%23%22%20class%3D%22image-wrapper%20cart-item-image-wrapper%20w-inline-block%22%3E%3Cimg%20loading%3D%22eager%22%20data-wf-bindings%3D%22%255B%257B%2522src%2522%253A%257B%2522type%2522%253A%2522ImageRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_main_image_4dr%2522%257D%257D%252C%257B%2522alt%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%255D%22%20src%3D%22%22%20alt%3D%22%22%20class%3D%22w-commerce-commercecartitemimage%20image%20w-dyn-bind-empty%22%2F%3E%3C%2Fa%3E%3Cdiv%20class%3D%22w-commerce-commercecartiteminfo%20cart-item-content%22%3E%3Ca%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_name_%2522%257D%257D%252C%257B%2522dataWHref%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522detailPage%2522%252C%2522params%2522%253A%255B%252263619a386216ae9926934101%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_slug_%2522%252C%2522collectionSlugMap%2522%253A%257B%2522636bd0fa4aff1c73a06ca714%2522%253A%2522integration%2522%252C%2522636bd5b9c38dd15be9c998c3%2522%253A%2522integration-category%2522%252C%2522COMMERCE_CART_COLLECTION_ID%2522%253A%2522cart%2522%252C%252263619a386216ae9926934101%2522%253A%2522product%2522%252C%252263619a386216ae85d09340ec%2522%253A%2522category%2522%252C%252263619a386216ae106d934140%2522%253A%2522blog-post-categories%2522%252C%2522636c4bf1bfd4d87e3b655408%2522%253A%2522career-category%2522%252C%2522636d3916a1159560bd68a7a8%2522%253A%2522help-center-post%2522%252C%2522636d3edb3bfcc7dbd9ba979f%2522%253A%2522help-center-category%2522%252C%2522636c4ba5e3acea080b88636a%2522%253A%2522career%2522%252C%252263619a386216ae33a29340d1%2522%253A%2522sku%2522%252C%2522COMMERCE_ORDER_USER_ITEMS_COLLECTION_ID%2522%253A%2522userItems%2522%252C%252263619a386216aecc81934116%2522%253A%2522blog%2522%257D%257D%257D%255D%22%20href%3D%22%23%22%20class%3D%22cart-item-title%20w-dyn-bind-empty%22%3E%3C%2Fa%3E%3Cdiv%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePrice%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522price%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.price%2522%257D%257D%255D%22%20class%3D%22cart-item-price%22%3E%24%C2%A00.00%C2%A0USD%3C%2Fdiv%3E%3Cscript%20type%3D%22text%2Fx-wf-template%22%20id%3D%22wf-template-35de9e2c-dfdd-11bf-3683-47dedbed2eca%22%3E%253Cli%2520class%253D%2522cart-option-item%2522%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522PlainText%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D.name%252522%25257D%25257D%25255D%2522%2520class%253D%2522w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253Cspan%253E%253A%2520%253C%252Fspan%253E%253Cspan%2520data-wf-bindings%253D%2522%25255B%25257B%252522innerHTML%252522%25253A%25257B%252522type%252522%25253A%252522CommercePropValues%252522%25252C%252522filter%252522%25253A%25257B%252522type%252522%25253A%252522identity%252522%25252C%252522params%252522%25253A%25255B%25255D%25257D%25252C%252522dataPath%252522%25253A%252522database.commerceOrder.userItems%25255B%25255D.product.f_sku_properties_3dr%25255B%25255D%252522%25257D%25257D%25255D%2522%2520class%253D%2522cart-item-regular%2520w-dyn-bind-empty%2522%253E%253C%252Fspan%253E%253C%252Fli%253E%3C%2Fscript%3E%3Cul%20data-wf-bindings%3D%22%255B%257B%2522optionSets%2522%253A%257B%2522type%2522%253A%2522CommercePropTable%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%5B%5D%2522%257D%257D%252C%257B%2522optionValues%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.f_sku_values_3dr%2522%257D%257D%255D%22%20class%3D%22w-commerce-commercecartoptionlist%22%20data-wf-collection%3D%22database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%22%20data-wf-template-id%3D%22wf-template-35de9e2c-dfdd-11bf-3683-47dedbed2eca%22%3E%3Cli%20class%3D%22cart-option-item%22%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22cart-item-regular%20w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E%3C%2Ful%3E%3Ca%20href%3D%22%23%22%20data-wf-bindings%3D%22%255B%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20class%3D%22text-link%20default%20w-inline-block%22%20data-wf-cart-action%3D%22remove-item%22%20data-commerce-sku-id%3D%22%22%3E%3Cdiv%20class%3D%22cart-remove-link%22%3ERemove%3C%2Fdiv%3E%3C%2Fa%3E%3C%2Fdiv%3E%3C%2Fdiv%3E%3Cinput%20type%3D%22number%22%20data-wf-bindings%3D%22%255B%257B%2522value%2522%253A%257B%2522type%2522%253A%2522Number%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522numberPrecision%2522%252C%2522params%2522%253A%255B%25220%2522%252C%2522numberPrecision%2522%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.count%2522%257D%257D%252C%257B%2522data-commerce-sku-id%2522%253A%257B%2522type%2522%253A%2522ItemRef%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.sku.id%2522%257D%257D%255D%22%20data-wf-conditions%3D%22%257B%2522condition%2522%253A%257B%2522fields%2522%253A%257B%2522product%253Aec-product-type%2522%253A%257B%2522ne%2522%253A%2522e348fd487d0102946c9179d2a94bb613%2522%252C%2522type%2522%253A%2522Option%2522%257D%257D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D%2522%257D%22%20class%3D%22w-commerce-commercecartquantity%20input%20cart-quantity-input%22%20required%3D%22%22%20pattern%3D%22%5E%5B0-9%5D%2B%24%22%20inputMode%3D%22numeric%22%20name%3D%22quantity%22%20autoComplete%3D%22off%22%20data-wf-cart-action%3D%22update-item-quantity%22%20data-commerce-sku-id%3D%22%22%20value%3D%221%22%2F%3E%3C%2Fdiv%3E</script>
												<div class="w-commerce-commercecartlist cart-list" data-wf-collection="database.commerceOrder.userItems" data-wf-template-id="wf-template-35de9e2c-dfdd-11bf-3683-47dedbed2ec4">
													<div class="w-commerce-commercecartitem cart-item-wrapper">
														<div class="cart-item-content---main">
															<a data-wf-bindings="%5B%7B%22dataWHref%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22detailPage%22%2C%22params%22%3A%5B%2263619a386216ae9926934101%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_slug_%22%2C%22collectionSlugMap%22%3A%7B%22636bd0fa4aff1c73a06ca714%22%3A%22integration%22%2C%22636bd5b9c38dd15be9c998c3%22%3A%22integration-category%22%2C%22COMMERCE_CART_COLLECTION_ID%22%3A%22cart%22%2C%2263619a386216ae9926934101%22%3A%22product%22%2C%2263619a386216ae85d09340ec%22%3A%22category%22%2C%2263619a386216ae106d934140%22%3A%22blog-post-categories%22%2C%22636c4bf1bfd4d87e3b655408%22%3A%22career-category%22%2C%22636d3916a1159560bd68a7a8%22%3A%22help-center-post%22%2C%22636d3edb3bfcc7dbd9ba979f%22%3A%22help-center-category%22%2C%22636c4ba5e3acea080b88636a%22%3A%22career%22%2C%2263619a386216ae33a29340d1%22%3A%22sku%22%2C%22COMMERCE_ORDER_USER_ITEMS_COLLECTION_ID%22%3A%22userItems%22%2C%2263619a386216aecc81934116%22%3A%22blog%22%7D%7D%7D%5D" href="index.html#" class="image-wrapper cart-item-image-wrapper w-inline-block">
																<img loading="eager" data-wf-bindings="%5B%7B%22src%22%3A%7B%22type%22%3A%22ImageRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_main_image_4dr%22%7D%7D%2C%7B%22alt%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%5D" src="index.html" alt="" class="w-commerce-commercecartitemimage image w-dyn-bind-empty" />
															</a>
															<div class="w-commerce-commercecartiteminfo cart-item-content">
																<a data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_name_%22%7D%7D%2C%7B%22dataWHref%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22detailPage%22%2C%22params%22%3A%5B%2263619a386216ae9926934101%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_slug_%22%2C%22collectionSlugMap%22%3A%7B%22636bd0fa4aff1c73a06ca714%22%3A%22integration%22%2C%22636bd5b9c38dd15be9c998c3%22%3A%22integration-category%22%2C%22COMMERCE_CART_COLLECTION_ID%22%3A%22cart%22%2C%2263619a386216ae9926934101%22%3A%22product%22%2C%2263619a386216ae85d09340ec%22%3A%22category%22%2C%2263619a386216ae106d934140%22%3A%22blog-post-categories%22%2C%22636c4bf1bfd4d87e3b655408%22%3A%22career-category%22%2C%22636d3916a1159560bd68a7a8%22%3A%22help-center-post%22%2C%22636d3edb3bfcc7dbd9ba979f%22%3A%22help-center-category%22%2C%22636c4ba5e3acea080b88636a%22%3A%22career%22%2C%2263619a386216ae33a29340d1%22%3A%22sku%22%2C%22COMMERCE_ORDER_USER_ITEMS_COLLECTION_ID%22%3A%22userItems%22%2C%2263619a386216aecc81934116%22%3A%22blog%22%7D%7D%7D%5D" href="index.html#" class="cart-item-title w-dyn-bind-empty"></a>
																<div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.price%22%7D%7D%5D" class="cart-item-price">$ 0.00 USD</div>
																<script type="text/x-wf-template" id="wf-template-35de9e2c-dfdd-11bf-3683-47dedbed2eca">%3Cli%20class%3D%22cart-option-item%22%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522PlainText%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D.name%2522%257D%257D%255D%22%20class%3D%22w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3Cspan%3E%3A%20%3C%2Fspan%3E%3Cspan%20data-wf-bindings%3D%22%255B%257B%2522innerHTML%2522%253A%257B%2522type%2522%253A%2522CommercePropValues%2522%252C%2522filter%2522%253A%257B%2522type%2522%253A%2522identity%2522%252C%2522params%2522%253A%255B%255D%257D%252C%2522dataPath%2522%253A%2522database.commerceOrder.userItems%255B%255D.product.f_sku_properties_3dr%255B%255D%2522%257D%257D%255D%22%20class%3D%22cart-item-regular%20w-dyn-bind-empty%22%3E%3C%2Fspan%3E%3C%2Fli%3E</script>
																<ul data-wf-bindings="%5B%7B%22optionSets%22%3A%7B%22type%22%3A%22CommercePropTable%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr[]%22%7D%7D%2C%7B%22optionValues%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.f_sku_values_3dr%22%7D%7D%5D" class="w-commerce-commercecartoptionlist" data-wf-collection="database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr" data-wf-template-id="wf-template-35de9e2c-dfdd-11bf-3683-47dedbed2eca">
																	<li class="cart-option-item">
																		<span data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22PlainText%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D.name%22%7D%7D%5D" class="w-dyn-bind-empty"></span>
																		<span>: </span>
																		<span data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePropValues%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.product.f_sku_properties_3dr%5B%5D%22%7D%7D%5D" class="cart-item-regular w-dyn-bind-empty"></span>
																	</li>
																</ul>
																<a href="index.html#" data-wf-bindings="%5B%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" class="text-link default w-inline-block" data-wf-cart-action="remove-item" data-commerce-sku-id="">
																	<div class="cart-remove-link">Remove</div>
																</a>
															</div>
														</div>
														<input type="number" data-wf-bindings="%5B%7B%22value%22%3A%7B%22type%22%3A%22Number%22%2C%22filter%22%3A%7B%22type%22%3A%22numberPrecision%22%2C%22params%22%3A%5B%220%22%2C%22numberPrecision%22%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.count%22%7D%7D%2C%7B%22data-commerce-sku-id%22%3A%7B%22type%22%3A%22ItemRef%22%2C%22filter%22%3A%7B%22type%22%3A%22identity%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D.sku.id%22%7D%7D%5D" data-wf-conditions="%7B%22condition%22%3A%7B%22fields%22%3A%7B%22product%3Aec-product-type%22%3A%7B%22ne%22%3A%22e348fd487d0102946c9179d2a94bb613%22%2C%22type%22%3A%22Option%22%7D%7D%7D%2C%22dataPath%22%3A%22database.commerceOrder.userItems%5B%5D%22%7D" class="w-commerce-commercecartquantity input cart-quantity-input" required="" pattern="^[0-9]+$" inputMode="numeric" name="quantity" autoComplete="off" data-wf-cart-action="update-item-quantity" data-commerce-sku-id="" value="1" />
													</div>
												</div>
												<div class="w-commerce-commercecartfooter cart-footer">
													<div class="w-commerce-commercecartlineitem cart-line-item">
														<div class="cart-subtotal">Subtotal:</div>
														<div data-wf-bindings="%5B%7B%22innerHTML%22%3A%7B%22type%22%3A%22CommercePrice%22%2C%22filter%22%3A%7B%22type%22%3A%22price%22%2C%22params%22%3A%5B%5D%7D%2C%22dataPath%22%3A%22database.commerceOrder.subtotal%22%7D%7D%5D" class="w-commerce-commercecartordervalue cart-subtotal-number"></div>
													</div>
													<div>
														<div data-node-type="commerce-cart-quick-checkout-actions" style="display:none" class="mg-bottom-16px">
															<a role="button" tabindex="0" aria-haspopup="dialog" aria-label="Apple Pay" data-node-type="commerce-cart-apple-pay-button" style="background-image:-webkit-named-image(apple-pay-logo-white);background-size:100% 50%;background-position:50% 50%;background-repeat:no-repeat" class="w-commerce-commercecartapplepaybutton pay-btn cart">
																<div></div>
															</a>
															<a role="button" tabindex="0" aria-haspopup="dialog" data-node-type="commerce-cart-quick-checkout-button" style="display:none" class="w-commerce-commercecartquickcheckoutbutton pay-btn cart">
																<svg class="w-commerce-commercequickcheckoutgoogleicon" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="16" height="16" viewBox="0 0 16 16">
																	<defs>
																		<polygon id="google-mark-a" points="0 .329 3.494 .329 3.494 7.649 0 7.649"></polygon>
																		<polygon id="google-mark-c" points=".894 0 13.169 0 13.169 6.443 .894 6.443"></polygon>
																	</defs>
																	<g fill="none" fill-rule="evenodd">
																		<path fill="#4285F4" d="M10.5967,12.0469 L10.5967,14.0649 L13.1167,14.0649 C14.6047,12.6759 15.4577,10.6209 15.4577,8.1779 C15.4577,7.6339 15.4137,7.0889 15.3257,6.5559 L7.8887,6.5559 L7.8887,9.6329 L12.1507,9.6329 C11.9767,10.6119 11.4147,11.4899 10.5967,12.0469"></path>
																		<path fill="#34A853" d="M7.8887,16 C10.0137,16 11.8107,15.289 13.1147,14.067 C13.1147,14.066 13.1157,14.065 13.1167,14.064 L10.5967,12.047 C10.5877,12.053 10.5807,12.061 10.5727,12.067 C9.8607,12.556 8.9507,12.833 7.8887,12.833 C5.8577,12.833 4.1387,11.457 3.4937,9.605 L0.8747,9.605 L0.8747,11.648 C2.2197,14.319 4.9287,16 7.8887,16"></path>
																		<g transform="translate(0 4)">
																			<mask id="google-mark-b" fill="#fff">
																				<use xlink:href="#google-mark-a"></use>
																			</mask>
																			<path fill="#FBBC04" d="M3.4639,5.5337 C3.1369,4.5477 3.1359,3.4727 3.4609,2.4757 L3.4639,2.4777 C3.4679,2.4657 3.4749,2.4547 3.4789,2.4427 L3.4939,0.3287 L0.8939,0.3287 C0.8799,0.3577 0.8599,0.3827 0.8459,0.4117 C-0.2821,2.6667 -0.2821,5.3337 0.8459,7.5887 L0.8459,7.5997 C0.8549,7.6167 0.8659,7.6317 0.8749,7.6487 L3.4939,5.6057 C3.4849,5.5807 3.4729,5.5587 3.4639,5.5337" mask="url(#google-mark-b)"></path>
																		</g>
																		<mask id="google-mark-d" fill="#fff">
																			<use xlink:href="#google-mark-c"></use>
																		</mask>
																		<path fill="#EA4335" d="M0.894,4.3291 L3.478,6.4431 C4.113,4.5611 5.843,3.1671 7.889,3.1671 C9.018,3.1451 10.102,3.5781 10.912,4.3671 L13.169,2.0781 C11.733,0.7231 9.85,-0.0219 7.889,0.0001 C4.941,0.0001 2.245,1.6791 0.894,4.3291" mask="url(#google-mark-d)"></path>
																	</g>
																</svg>
																<svg class="w-commerce-commercequickcheckoutmicrosofticon" xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16">
																	<g fill="none" fill-rule="evenodd">
																		<polygon fill="#F05022" points="7 7 1 7 1 1 7 1"></polygon>
																		<polygon fill="#7DB902" points="15 7 9 7 9 1 15 1"></polygon>
																		<polygon fill="#00A4EE" points="7 15 1 15 1 9 7 9"></polygon>
																		<polygon fill="#FFB700" points="15 15 9 15 9 9 15 9"></polygon>
																	</g>
																</svg>
																<div>Pay with browser.</div>
															</a>
														</div>
														<a href="checkout.html" value="Continue to Checkout" data-node-type="cart-checkout-button" class="w-commerce-commercecartcheckoutbutton btn-primary" data-loading-text="Hang Tight...">Continue to Checkout</a>
													</div>
												</div>
											</form>
											<div class="w-commerce-commercecartemptystate empty-state cart-empty">
												<div class="mg-bottom-40px">No items found.</div>
												<a href="pricing.html" class="btn-primary w-button">Go to pricing</a>
											</div>
											<div style="display:none" data-node-type="commerce-cart-error" class="w-commerce-commercecarterrorstate error-message cart-error">
												<div class="w-cart-error-msg" data-w-cart-quantity-error="Product is not available in this quantity." data-w-cart-general-error="Something went wrong when adding this item to the cart." data-w-cart-checkout-error="Checkout is disabled on this site." data-w-cart-cart_order_min-error="The order minimum was not met. Add more items to your cart to continue." data-w-cart-subscription_error-error="Before you purchase, please use your email invite to verify your address so we can send order updates.">Product is not available in this quantity.</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="header-right-side">
							<a href="utility-pages/sign-in.html" class="header-nav-link header-link-hidde-on-mbl w-inline-block">
								<div class="custom-icon-font link-icon-left"></div>
								<div class="link-text">Login</div>
							</a>
							<a href="utility-pages/sign-up.html" class="btn-primary small header-btn-hidde-on-mb w-button">Get started</a>
							<div class="hamburger-menu-btn w-nav-button">
								<div class="hamburger-menu-wrapper">
									<div class="hamburger-menu-bar top"></div>
									<div class="hamburger-menu-bar bottom"></div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="header-wrapper---bg"></div>
				<div class="header-nav-menu---bg"></div>
			</div>
			<div class="section hero-page wf-section">
				<div class="container-default w-container">
					<div class="inner-container _634px center">
						<div class="text-center">
							<div class="inner-container _500px---tablet center">
								<div class="inner-container _450px---mbl center">
									<div class="inner-container _380px---mbp center">
										<h1 data-w-id="ae759b9d-c001-fa5f-f339-1b3806eee70c" style="-webkit-transform:translate3d(0, 84%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 84%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 84%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 84%, 0) scale3d(0.5, 0.5, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="display-1 mg-bottom-14px">
											<span class="text-no-wrap">Welcome<br></span> <?php echo $_SESSION['USER_NAME']; ?>
										</h1>
									</div>
								</div>
							</div>
							<p data-w-id="7b40bbeb-4e1b-9a9f-5dab-ea34571de1e9" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="mg-bottom-40px">Presenting Dataplus X, the ultimate Dark Mode SaaS <span class="text-no-wrap">Webflow Template.</span>
							</p>
						</div>
						<div data-w-id="c95c5576-e1eb-966f-5e39-00d4c61f8483" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="buttons-row center">
							<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
							<a href="index.html#pages" class="btn-secondary w-button">Explore pages</a>
						</div>
					</div>
					<div data-w-id="f9a674db-d6c3-c790-c146-afebe6a7418f" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="home-pages-cointainer">
						<div class="home-pages-top-wrapper">
							<a href="contact.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529005acfc4997664ce65_image-1-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529005acfc4997664ce65_image-1-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529005acfc4997664ce65_image-1-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
							<a href="home-pages/home-v1.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/637528ff9cbcb60196ab2286_image-2-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637528ff9cbcb60196ab2286_image-2-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637528ff9cbcb60196ab2286_image-2-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
							<a href="home-pages/home-v2.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9022137fc89_image-3-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9022137fc89_image-3-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9022137fc89_image-3-hero-screenshots-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9022137fc89_image-3-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
							<a href="integrations.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/63752901ad85c6af3ee94867_image-4-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/63752901ad85c6af3ee94867_image-4-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/63752901ad85c6af3ee94867_image-4-hero-screenshots-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/63752901ad85c6af3ee94867_image-4-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
						</div>
						<div class="home-pages-bottom-wrapper">
							<a href="help-center.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9d48637fc88_image-5-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9d48637fc88_image-5-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9d48637fc88_image-5-hero-screenshots-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/637529007d30f9d48637fc88_image-5-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
							<a href="blog-pages/blog-v1.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/63752900fcb9dc76fdf98724_image-6-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/63752900fcb9dc76fdf98724_image-6-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/63752900fcb9dc76fdf98724_image-6-hero-screenshots-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/63752900fcb9dc76fdf98724_image-6-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
							<a href="about.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529005df01577952b4f00_image-7-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529005df01577952b4f00_image-7-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529005df01577952b4f00_image-7-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
							<a href="feature-pages/features-v1.html" class="image-home-link-wrapper w-inline-block">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/63752900ab106c77e8dbc11a_image-8-hero-screenshots-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/63752900ab106c77e8dbc11a_image-8-hero-screenshots-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/63752900ab106c77e8dbc11a_image-8-hero-screenshots-dataplus-template.png 844w" sizes="(max-width: 479px) 180px, (max-width: 767px) 256px, (max-width: 991px) 318px, (max-width: 1439px) 422px, (max-width: 1919px) 544px, 718px" alt="Hero Strip - Dataplus X Webflow Template" class="image-home-link" />
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="section pd-200px pd-top-0px wf-section">
				<div class="container-default w-container">
					<div class="inner-container _700px---tablet center">
						<div class="inner-container _500px---mbl center">
							<div class="inner-container _680px center">
								<div data-w-id="f241a4ae-c676-2e72-86d5-fdb7691a58fc" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="text-center">
									<h2 class="display-2 mg-bottom-8px">What is included in <span class="text-no-wrap">Dataplus X</span>
									</h2>
									<div class="inner-container _450px---mbl center">
										<p class="mg-bottom-40px">Dataplus X Webflow Template includes over 35 pages in total, with more than 60 sections, and 3 different home pages, 3 blog pages, <span class="text-no-wrap">and 3 features.</span>
										</p>
									</div>
								</div>
							</div>
							<div data-w-id="6b08ae02-d6d5-021d-5bba-711e57249298" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-3-columns _1-col-tablet">
								<div id="w-node-_186fbe43-5fbe-0034-e8b4-787e8adcfd3f-ef9340bc" class="card whats-included">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/63753db89708142d36657016_image-1-included-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/63753db89708142d36657016_image-1-included-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/63753db89708142d36657016_image-1-included-dataplus-template.png 776w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 30vw, 388.6640625px" alt="35+ Pages - Dataplus X Webflow Template" class="card-sales-home-image" />
									<div class="card-sales-home-content">
										<div class="display-3">35+ Pages</div>
									</div>
								</div>
								<div id="w-node-_50cacb8e-de58-161a-1f8f-5bbd2d28523d-ef9340bc" class="card whats-included">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529fcc6a1c0673e1ddb5d_image-2-included-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529fcc6a1c0673e1ddb5d_image-2-included-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529fcc6a1c0673e1ddb5d_image-2-included-dataplus-template.png 776w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 30vw, 388.6640625px" alt="60+ Sections - Dataplus X Webflow Template" class="card-sales-home-image" />
									<div class="card-sales-home-content">
										<div class="display-3">60+ Sections</div>
									</div>
								</div>
								<div id="w-node-f0fbf3a8-e14e-69fb-5226-d9d894e0718c-ef9340bc" class="card whats-included">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529fc789b5e5b6b65e6be_image-3-included-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529fc789b5e5b6b65e6be_image-3-included-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529fc789b5e5b6b65e6be_image-3-included-dataplus-template.png 776w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 30vw, 388.671875px" alt="25+ Styles &amp; Symbols - Dataplus X Webflow Template" class="card-sales-home-image" />
									<div class="card-sales-home-content">
										<div class="display-3">25+ Styles &amp; Symbols</div>
									</div>
								</div>
							</div>
							<div data-w-id="33eeb53c-5b57-9c87-bf7e-a15607c68cf6" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="card figma-file">
								<div class="figma-file-text-wrapper">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/63619a386216ae66b493422e_figma-request-file-brix-templates.svg" alt="" class="mg-bottom-24px" />
									<div class="display-3 mg-bottom-8px">Figma file included</div>
									<p class="mg-bottom-32px">Send us an email to <a href="mailto:dataplusx@brixtemplates.com" class="text-link default">dataplusx@brixtemplates.com</a> with your purchase receipt, and we will send you the editable Figma file for the <span class="text-no-wrap">Dataplus X template.</span>
									</p>
									<a href="mailto:dataplusx@brixtemplates.com" class="btn-secondary w-button">Request Figma file</a>
								</div>
								<div class="figma-file-image-wrapper">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/637529fca7d6797df1ab7a27_image-4-included-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637529fca7d6797df1ab7a27_image-4-included-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637529fca7d6797df1ab7a27_image-4-included-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/637529fca7d6797df1ab7a27_image-4-included-dataplus-template.png 1288w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 51vw, 647.65625px" alt="Figma File Included - Dataplus X Webflow Template" class="image cover" />
								</div>
							</div>
							<div class="mg-top-48px">
								<div data-w-id="9dfbba44-81b4-a263-1a81-2534798e2579" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="buttons-row center">
									<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div id="pages" class="section pd-200px pd-top-0px wf-section">
				<div class="container-default w-container">
					<div class="inner-container _500px---mbl center">
						<div class="inner-container _680px center">
							<div data-w-id="4edece35-1d92-12f3-448c-ad7232b24e11" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="text-center">
								<h2 class="display-2 mg-bottom-8px">Main pages</h2>
								<p class="mg-bottom-48px">Take a look at the main pages included in the <span class="text-no-wrap">Dataplus X Template.</span>
								</p>
							</div>
						</div>
						<div data-w-id="4a73fcf4-1410-3f79-100c-c46d15ebf973" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-3-columns">
							<a id="w-node-b802a070-9102-8775-5428-930ff319ab2f-ef9340bc" href="home-pages/home-v1.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329dfd9983aa9f232c36_image-11-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329dfd9983aa9f232c36_image-11-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329dfd9983aa9f232c36_image-11-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Home V1 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Home V1</h3>
								</div>
							</a>
							<a id="w-node-_08e13be6-0f43-b8bd-e467-b73a01bf493c-ef9340bc" href="home-pages/home-v2.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329dcea54a560ec53987_image-18-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329dcea54a560ec53987_image-18-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329dcea54a560ec53987_image-18-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Home V2 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Home V2</h3>
								</div>
							</a>
							<a id="w-node-_32441a3f-ccf7-7100-ebbe-cad213bcf1ae-ef9340bc" href="home-pages/home-v3.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329d97a7e87c31990a0e_image-25-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329d97a7e87c31990a0e_image-25-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329d97a7e87c31990a0e_image-25-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Home V3 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Home V3</h3>
								</div>
							</a>
							<a id="w-node-_3638bc2d-0ef6-718e-a8ed-e6217855f00b-ef9340bc" href="about.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329bc8fc50bad2abd01d_image-14-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329bc8fc50bad2abd01d_image-14-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329bc8fc50bad2abd01d_image-14-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="About - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">About</h3>
								</div>
							</a>
							<a id="w-node-_16fac5c6-c01e-4fc9-5fd3-b2d360cb93ce-ef9340bc" href="blog-pages/blog-v1.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329ae76d726e7915ea9f_image-21-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329ae76d726e7915ea9f_image-21-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329ae76d726e7915ea9f_image-21-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Blog V1 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Blog V1</h3>
								</div>
							</a>
							<a id="w-node-f6d93b6f-9d12-8901-5205-644a6600d4e4-ef9340bc" href="blog-pages/blog-v2.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329b6e3ec33e2632679c_image-28-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329b6e3ec33e2632679c_image-28-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329b6e3ec33e2632679c_image-28-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Blog V2 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Blog V2</h3>
								</div>
							</a>
							<a id="w-node-_8ae59722-af25-417c-8d74-b667bba60e6b-ef9340bc" href="blog-pages/blog-v3.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c523a41ff70dec888_image-12-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c523a41ff70dec888_image-12-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c523a41ff70dec888_image-12-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Blog V3 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Blog V3</h3>
								</div>
							</a>
							<a id="w-node-bfb69d95-d55e-4fcb-74e7-839ad4b6fd67-ef9340bc" href="blog/new-feature-crm-integration-with-salesforce-com.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329afd9983de64232c1c_image-19-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329afd9983de64232c1c_image-19-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329afd9983de64232c1c_image-19-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Blog Post - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Blog Post</h3>
								</div>
							</a>
							<a id="w-node-_3db8beeb-08ab-e89c-f8ff-0e0edceaa514-ef9340bc" href="feature-pages/features-v1.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329dc8fc50ab14abd026_image-26-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329dc8fc50ab14abd026_image-26-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329dc8fc50ab14abd026_image-26-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Features V1 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Features V1</h3>
								</div>
							</a>
							<a id="w-node-_05190187-9691-beed-2258-89e6c94826e2-ef9340bc" href="feature-pages/features-v2.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329cfc1fcb498d5c8417_image-15-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329cfc1fcb498d5c8417_image-15-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329cfc1fcb498d5c8417_image-15-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Features V2 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Features V2</h3>
								</div>
							</a>
							<a id="w-node-e825cb10-2198-648c-360e-2e926a697f68-ef9340bc" href="feature-pages/features-v3.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329dc8fc5017b6abd032_image-22-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329dc8fc5017b6abd032_image-22-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329dc8fc5017b6abd032_image-22-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Features V3 - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Features V3</h3>
								</div>
							</a>
							<a id="w-node-b42cf003-d62e-dfd4-fc7a-2258bdeba2d8-ef9340bc" href="pricing.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329d47d21b396d718994_image-29-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329d47d21b396d718994_image-29-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329d47d21b396d718994_image-29-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Pricing - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Pricing</h3>
								</div>
							</a>
							<a id="w-node-_2541a8c5-7015-f1a2-6324-27e4e6b1df23-ef9340bc" href="product/starter.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c2296dba2b06d4d04_image-13-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c2296dba2b06d4d04_image-13-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c2296dba2b06d4d04_image-13-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Landing Page - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Pricing Single</h3>
								</div>
							</a>
							<a id="w-node-_80009f2d-67d2-904b-e63f-979b5a16e0f5-ef9340bc" href="contact.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c52d86feefe0a1e39_image-20-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c52d86feefe0a1e39_image-20-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c52d86feefe0a1e39_image-20-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Contact - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Contact</h3>
								</div>
							</a>
							<a id="w-node-_34540799-c9b8-abfd-94e4-23072e34c105-ef9340bc" href="integrations.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329cff893a54d177b91b_image-27-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329cff893a54d177b91b_image-27-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329cff893a54d177b91b_image-27-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Integrations - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Integrations</h3>
								</div>
							</a>
							<a id="w-node-c7722f2e-9834-00d9-be58-ae5ae88e5050-ef9340bc" href="integration/facebook.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329d97a7e8c4ac990a0f_image-17-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329d97a7e8c4ac990a0f_image-17-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329d97a7e8c4ac990a0f_image-17-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Integration Single - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Integration Single</h3>
								</div>
							</a>
							<a id="w-node-_250f71df-f3e2-43c8-3d4b-bbfe05c4872a-ef9340bc" href="careers.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329d9fbfb775e102c13b_image-24-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329d9fbfb775e102c13b_image-24-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329d9fbfb775e102c13b_image-24-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Careers - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Careers</h3>
								</div>
							</a>
							<a id="w-node-_6e3aecf0-775a-f707-65de-d63782b8c7fe-ef9340bc" href="career/head-of-inbound-marketing.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329cc737ad6a5f1ecbfa_image-31-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329cc737ad6a5f1ecbfa_image-31-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329cc737ad6a5f1ecbfa_image-31-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Job Post - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Job Post</h3>
								</div>
							</a>
							<a id="w-node-e8ab437c-fb63-ce99-0d02-b270af9f2e3b-ef9340bc" href="help-center.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329babd931e623125418_image-16-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329babd931e623125418_image-16-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329babd931e623125418_image-16-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Help Center - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Help Center</h3>
								</div>
							</a>
							<a id="w-node-_9c2d9e61-8b64-c728-488c-dc392e4fd1a5-ef9340bc" href="help-center-category/getting-started.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c346f276d9be6dbdb_image-23-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c346f276d9be6dbdb_image-23-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c346f276d9be6dbdb_image-23-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Help Center Category - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Help Center Category</h3>
								</div>
							</a>
							<a id="w-node-ff9e9b4b-314e-8898-67ad-6a26756c6596-ef9340bc" href="help-center-post/how-to-create-a-free-dataplus-account.html" class="card sales-home-page center---tablet w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329d6e3ec32aa03267a0_image-30-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329d6e3ec32aa03267a0_image-30-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329d6e3ec32aa03267a0_image-30-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 22vw, (max-width: 1439px) 30vw, 386.671875px" alt="Help Center Single - Dataplus X Webflow Template" class="card-sales-home-image width-100" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Help Center Single</h3>
								</div>
							</a>
						</div>
						<div class="mg-top-56px">
							<div data-w-id="e3fa9efc-00b4-1828-639b-975ce579eb15" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="flex-vertical center">
								<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section pd-200px pd-top-0px wf-section">
				<div class="container-default w-container">
					<div class="inner-container _500px---mbl center">
						<div class="inner-container _680px center">
							<div data-w-id="4bf4fff5-bb35-40c9-34ae-79ad4ed49ea4" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="text-center">
								<h2 class="display-2 mg-bottom-8px">Utility pages</h2>
								<p class="mg-bottom-48px">Take a look at the utility pages included in the <span class="text-no-wrap">Dataplus X Template.</span>
								</p>
							</div>
						</div>
						<div data-w-id="4bf4fff5-bb35-40c9-34ae-79ad4ed49eac" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-3-columns---utility-pages-grid">
							<a id="w-node-_4bf4fff5-bb35-40c9-34ae-79ad4ed49ead-ef9340bc" href="utility-pages/sign-in.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329b97a7e8cf409909fe_image-1-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329b97a7e8cf409909fe_image-1-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329b97a7e8cf409909fe_image-1-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Sign In - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Sign in</h3>
								</div>
							</a>
							<a id="w-node-_063416c4-1bd7-307f-91bc-dfb21a0ba4f3-ef9340bc" href="utility-pages/sign-up.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329ba425a0f9fe32b36c_image-4-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329ba425a0f9fe32b36c_image-4-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329ba425a0f9fe32b36c_image-4-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Sign Up - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Sign up</h3>
								</div>
							</a>
							<a id="w-node-_14bf2e4c-745e-ad10-ae7b-80e3ae92038b-ef9340bc" href="utility-pages/forgot-password.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c47d21bfa11718980_image-7-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c47d21bfa11718980_image-7-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c47d21bfa11718980_image-7-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Forgot Password - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Forgot Password</h3>
								</div>
							</a>
							<a id="w-node-_644490d2-22f2-2019-fb03-72c2f5f56971-ef9340bc" href="utility-pages/reset-password.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329cc737ad63e71ecbf9_image-2-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329cc737ad63e71ecbf9_image-2-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329cc737ad63e71ecbf9_image-2-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Reset Password - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Reset password</h3>
								</div>
							</a>
							<a id="w-node-fb4ff40d-bec4-dc3b-c87f-a5b4c6fb354a-ef9340bc" href="utility-pages/terms-conditions.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329d0dbac22cce9eb681_image-5-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329d0dbac22cce9eb681_image-5-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329d0dbac22cce9eb681_image-5-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Terms &amp; Conditions - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Terms &amp; Conditions</h3>
								</div>
							</a>
							<a id="w-node-a2cef0f0-fd1c-fdaa-b411-98b493cb8df6-ef9340bc" href="utility-pages/confirm-email.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c97a7e87dbc990a03_image-8-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c97a7e87dbc990a03_image-8-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c97a7e87dbc990a03_image-8-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="Confirm Email - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Confirm Email</h3>
								</div>
							</a>
							<a id="w-node-_2f8d6653-77ef-6d2a-b548-09a718bce9fa-ef9340bc" href="utility-pages/demo.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329cff893adb0277b91a_image-3-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329cff893adb0277b91a_image-3-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329cff893adb0277b91a_image-3-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Request A Demo - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Request a Demo</h3>
								</div>
							</a>
							<a id="w-node-_165967b2-f618-07aa-a7fd-8f1b947cf1f7-ef9340bc" href="utility-pages/landing-page.html" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329ba425a0374c32b36b_image-6-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329ba425a0374c32b36b_image-6-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329ba425a0374c32b36b_image-6-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Landing Page - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Landing Page</h3>
								</div>
							</a>
							<a id="w-node-df0c748f-77cc-8593-a509-94f6a50626df-ef9340bc" href="https://dataplustemplate.webflow.io/about/404" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329c47d21b240c718966_image-9-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329c47d21b240c718966_image-9-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329c47d21b240c718966_image-9-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.671875px" alt="404 Not Found - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">404 Not Found</h3>
								</div>
							</a>
							<a id="w-node-_1867e8f2-e0e4-d152-c64b-63d249443b0a-ef9340bc" href="https://dataplustemplate.webflow.io/about/401" class="card sales-home-page w-inline-block">
								<div class="position-relative">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375329cd0fd910ff36429d7_image-10-pages-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375329cd0fd910ff36429d7_image-10-pages-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375329cd0fd910ff36429d7_image-10-pages-dataplus-template.png 776w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 46vw, (max-width: 1439px) 30vw, 386.6640625px" alt="Password Protected - Dataplus X Webflow Template" class="card-sales-home-image" />
								</div>
								<div class="card-sales-home-content">
									<h3 class="display-3 mg-bottom-0">Password protected</h3>
								</div>
							</a>
						</div>
						<div class="mg-top-56px">
							<div data-w-id="4bf4fff5-bb35-40c9-34ae-79ad4ed49ede" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="flex-vertical center">
								<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section pd-120px pd-top-0px wf-section">
				<div class="container-default w-container">
					<div class="inner-container _700px---tablet center">
						<div class="inner-container _500px---mbl center">
							<div class="mg-bottom-40px mg-bottom-80px---tablet">
								<div class="inner-container _884px center">
									<div data-w-id="95c37ef2-c1a0-3892-3ef7-e15db0faa303" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="text-center">
										<h2 class="display-2 mg-bottom-0">The Dataplus X Webflow Template also comes with more surprises...</h2>
									</div>
								</div>
							</div>
							<div data-w-id="4b8f5e44-ada2-17cd-ff60-96aef5d9a2aa" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-2-columns suprises-pages-right">
								<div id="w-node-_39f1c957-e64f-03e8-7fd1-e917c40b1c60-ef9340bc" class="text-center tablet">
									<div class="inner-container _600px---tablet center">
										<h3 class="display-3 mg-bottom-12px">3 Headers and Footers</h3>
										<p class="mg-bottom-40px">With a total of 3 different headers and footers, you can easily customize the Dataplus X Webflow Template to fit your company needs <span class="text-no-wrap">and requirements.</span>
										</p>
										<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
									</div>
								</div>
								<div id="w-node-aee1fdbe-1387-4397-e993-d21c363dd8ba-ef9340bc" class="home-surprises-card">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375434bc8fc502f5aad236d_image-5-surprises-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375434bc8fc502f5aad236d_image-5-surprises-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375434bc8fc502f5aad236d_image-5-surprises-dataplus-template.png 1290w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 50vw, 644.5546875px" alt="3 Headers And Footers - Dataplus X Webflow Template" />
								</div>
							</div>
							<div data-w-id="a03e51d8-a0ed-40fd-367a-fbe9c62136da" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-2-columns suprises-pages-left">
								<div id="w-node-a03e51d8-a0ed-40fd-367a-fbe9c62136e2-ef9340bc" class="home-surprises-card">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375434bbe8f69cc0be73adb_image-4-surprises-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375434bbe8f69cc0be73adb_image-4-surprises-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375434bbe8f69cc0be73adb_image-4-surprises-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/6375434bbe8f69cc0be73adb_image-4-surprises-dataplus-template.png 1290w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 50vw, 644.546875px" alt="Social Media Assets - Dataplus X Webflow Template" />
								</div>
								<div id="w-node-a03e51d8-a0ed-40fd-367a-fbe9c62136db-ef9340bc" class="text-center tablet">
									<div class="inner-container _600px---tablet center">
										<h3 class="display-3 mg-bottom-12px">Social Media Assets</h3>
										<p class="mg-bottom-40px">Our Dataplus X Webflow Template Figma file includes a collection of social media covers that match with the Webflow Template design (for Facebook, Twitter and LinkedIn), so you can easily edit, customize, and use them for your own social <span class="text-no-wrap">media profiles.</span>
										</p>
										<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
									</div>
								</div>
							</div>
							<div data-w-id="dc0973a7-e425-9f2a-6ca0-2cc0078e37a4" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-2-columns suprises-pages-right">
								<div id="w-node-dc0973a7-e425-9f2a-6ca0-2cc0078e37a5-ef9340bc" class="text-center tablet">
									<div class="inner-container _600px---tablet center">
										<h3 class="display-3 mg-bottom-12px">Custom Icon Set</h3>
										<p class="mg-bottom-40px">The Dataplus X Webflow Template includes 3 sets of custom icons (rounded, square and filled), so you can easily use more icon fonts in <span class="text-no-wrap">your template.</span>
											<br />
											<br />No matter if you are looking to add another social media icon in the footer, or change the cart icon in the header, we got <span class="text-no-wrap">you covered.</span>
										</p>
										<div class="buttons-row center---tablet">
											<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
											<a href="https://brixtemplates.com/icon-fonts" target="_blank" class="btn-secondary w-button">View icon font</a>
										</div>
									</div>
								</div>
								<div id="w-node-dc0973a7-e425-9f2a-6ca0-2cc0078e37ac-ef9340bc" class="home-surprises-card">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375434ba425a0cb7a33e63a_image-3-surprises-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375434ba425a0cb7a33e63a_image-3-surprises-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375434ba425a0cb7a33e63a_image-3-surprises-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/6375434ba425a0cb7a33e63a_image-3-surprises-dataplus-template-p-1080.png 1080w, https://assets.website-files.com/63619a386216ae681d93409b/6375434ba425a0cb7a33e63a_image-3-surprises-dataplus-template.png 1290w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 50vw, 644.5546875px" alt="Custom Icon Set - Dataplus X Webflow Template" />
								</div>
							</div>
							<div data-w-id="6a94e09d-dc86-bbd2-d2f3-c35b05bbe256" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-2-columns suprises-pages-left">
								<div id="w-node-_6a94e09d-dc86-bbd2-d2f3-c35b05bbe257-ef9340bc" class="home-surprises-card">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375434bafcb0b8acd785aa4_image-2-surprises-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375434bafcb0b8acd785aa4_image-2-surprises-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375434bafcb0b8acd785aa4_image-2-surprises-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/6375434bafcb0b8acd785aa4_image-2-surprises-dataplus-template.png 1290w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 50vw, 644.546875px" alt="Social Media Assets - Dataplus X Webflow Template" />
								</div>
								<div id="w-node-_6a94e09d-dc86-bbd2-d2f3-c35b05bbe259-ef9340bc" class="text-center tablet">
									<div class="inner-container _600px---tablet center">
										<h3 class="display-3 mg-bottom-12px">Social Media Assets</h3>
										<p class="mg-bottom-40px">Our Dataplus X Webflow Template Figma file includes a collection of social media covers that match with the Webflow Template design (for Facebook, Twitter and LinkedIn), so you can easily edit, customize, and use them for your own social <span class="text-no-wrap">media profiles.</span>
										</p>
										<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
									</div>
								</div>
							</div>
							<div data-w-id="7d4afe16-534c-7da9-a1f1-701c68b3f2c5" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="w-layout-grid grid-2-columns suprises-pages-right last">
								<div id="w-node-_7d4afe16-534c-7da9-a1f1-701c68b3f2c6-ef9340bc" class="text-center tablet">
									<div class="inner-container _600px---tablet center">
										<h3 class="display-3 mg-bottom-12px">Email Signature</h3>
										<p class="mg-bottom-40px">Our Dataplus X Webflow Template Figma file includes 2 custom email signature templates that match with the Webflow template, and you can use them to impress your customers with an amazing <span class="text-no-wrap">email signature.</span>
										</p>
										<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary w-button">Buy template</a>
									</div>
								</div>
								<div id="w-node-_7d4afe16-534c-7da9-a1f1-701c68b3f2d3-ef9340bc" class="home-surprises-card">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6375434be70aa8d4f2ad794f_image-1-surprises-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6375434be70aa8d4f2ad794f_image-1-surprises-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6375434be70aa8d4f2ad794f_image-1-surprises-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/6375434be70aa8d4f2ad794f_image-1-surprises-dataplus-template.png 1290w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 50vw, 644.5546875px" alt="Email Signature - Dataplus X Webflow Template" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="section pd-200px pd-top-0px wf-section">
				<div class="container-default w-container">
					<div class="inner-container _700px---tablet center">
						<div class="inner-container _500px---mbl center">
							<div class="w-layout-grid grid-2-columns _1-col-tablet gap-row-80px">
								<div data-w-id="781fd030-4278-db6d-0b33-f865d791c7e8" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="card buy-now">
									<div class="card-home-pages-wrapper">
										<img src="https://assets.website-files.com/63619a386216ae681d93409b/637544a846ebdb3131750d93_icon-1-cta-home-dataplus-template.svg" alt="Buy Now On Webflow - Dataplus X Webflow Template" class="cta-square-logo" />
										<h2 class="display-3 mg-bottom-12px">Buy now on Webflow</h2>
										<div class="inner-container _500px---tablet">
											<p class="color-neutral-100 opacity-90 mg-bottom-28px">Get the Dataplus X Webflow Template today, and take your website design to <span class="text-no-wrap">the next level.</span>
											</p>
										</div>
										<a href="https://webflow.com/templates/html/dataplus-x-software-website-template" target="_blank" class="btn-primary white width-100 w-button">Buy Template</a>
									</div>
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/637544a9ea3bfc705e3eb205_image-1-cta-home-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637544a9ea3bfc705e3eb205_image-1-cta-home-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637544a9ea3bfc705e3eb205_image-1-cta-home-dataplus-template.png 1174w" sizes="(max-width: 479px) 92vw, (max-width: 767px) 90vw, (max-width: 991px) 700px, (max-width: 1439px) 47vw, 597px" alt="Buy Now On Webflow - Dataplus X Webflow Template" class="cta-image-card" />
								</div>
								<div data-w-id="0ea7b455-31b2-75ac-3c81-e240aea03e46" style="-webkit-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 30px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:0" class="card buy-now bg-neutral-700">
									<div class="card-home-pages-wrapper">
										<img src="https://assets.website-files.com/63619a386216ae681d93409b/637544a9ff893a3ccd78f203_icon-2-cta-home-dataplus-template.svg" alt="Browse All Templates - Dataplus X Webflow Template" class="cta-square-logo white" />
										<h2 class="display-3 mg-bottom-12px">Browse all templates</h2>
										<div class="inner-container _500px---tablet">
											<p class="color-neutral-400 mg-bottom-28px">Looking for more templates? Browse our collection of 100+ Webflow Templates on BRIXTemplates.com</p>
										</div>
										<a href="https://brixtemplates.com/more-webflow-templates" target="_blank" class="btn-primary width-100 w-button">Explore more templates</a>
									</div>
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/637544a947d21b7bc872ee47_image-2-cta-home-dataplus-template.png" srcset="https://assets.website-files.com/63619a386216ae681d93409b/637544a947d21b7bc872ee47_image-2-cta-home-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/637544a947d21b7bc872ee47_image-2-cta-home-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/637544a947d21b7bc872ee47_image-2-cta-home-dataplus-template.png 1174w" sizes="(max-width: 479px) 91vw, (max-width: 767px) 90vw, (max-width: 991px) 698px, (max-width: 1439px) 47vw, 595px" alt="Browse All Templates - Dataplus X Webflow Template" class="cta-image-card" />
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="section pd-0px wf-section">
				<div class="container-default w-container">
					<div data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a5436" class="card cta-v2">
						<div class="card-cta-v2---main-content">
							<div class="inner-container cta-v2-content">
								<div class="inner-container _350px---mbp">
									<h2 data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a543a" class="mg-bottom-24px">Start using the CRM platform of <span class="text-no-wrap">the future.</span>
									</h2>
								</div>
								<div data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a543e" class="buttons-row">
									<a href="utility-pages/sign-up.html" class="btn-primary white w-button">Get started</a>
								</div>
							</div>
							<div data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a5441" class="inner-container cta-v2-image">
								<div data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a5442" class="image-wrapper style-01">
									<img src="https://assets.website-files.com/63619a386216ae681d93409b/6362b8c632be3d1c56cdc377_image-1-hero-v1-dataplus-template.png" loading="eager" sizes="(max-width: 991px) 100vw, (max-width: 1439px) 74vw, 954.15625px" srcset="https://assets.website-files.com/63619a386216ae681d93409b/6362b8c632be3d1c56cdc377_image-1-hero-v1-dataplus-template-p-500.png 500w, https://assets.website-files.com/63619a386216ae681d93409b/6362b8c632be3d1c56cdc377_image-1-hero-v1-dataplus-template-p-800.png 800w, https://assets.website-files.com/63619a386216ae681d93409b/6362b8c632be3d1c56cdc377_image-1-hero-v1-dataplus-template-p-1080.png 1080w, https://assets.website-files.com/63619a386216ae681d93409b/6362b8c632be3d1c56cdc377_image-1-hero-v1-dataplus-template-p-1600.png 1600w, https://assets.website-files.com/63619a386216ae681d93409b/6362b8c632be3d1c56cdc377_image-1-hero-v1-dataplus-template.png 1902w" alt="A CRM Platform For Power Users - Dataplus X Webflow Template" class="image cover border-radius-16px" />
								</div>
							</div>
						</div>
						<div class="position-absolute bg-grid bg-grid-accent cta">
							<div class="w-layout-grid bg-grid-lights---cta-v2">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/6362a54182b1e776879a164f_shape-light-grid-dataplus-template.svg" loading="eager" data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a5446" id="w-node-_8f79f1b2-abea-00ee-ccc1-335e936a5446-936a5434" alt="" class="image grid-comet" />
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/6362a54182b1e776879a164f_shape-light-grid-dataplus-template.svg" loading="eager" data-w-id="8f79f1b2-abea-00ee-ccc1-335e936a5447" id="w-node-_8f79f1b2-abea-00ee-ccc1-335e936a5447-936a5434" alt="" class="image grid-comet" />
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/6362a54182b1e776879a164f_shape-light-grid-dataplus-template.svg" loading="eager" data-w-id="21f0fce8-d7d2-d4e1-8582-ece2acd818d0" id="w-node-_21f0fce8-d7d2-d4e1-8582-ece2acd818d0-936a5434" alt="" class="image grid-comet" />
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/6362a54182b1e776879a164f_shape-light-grid-dataplus-template.svg" loading="eager" data-w-id="1e3fbc9a-52cb-e16b-3785-a11488ef8000" id="w-node-_1e3fbc9a-52cb-e16b-3785-a11488ef8000-936a5434" alt="" class="image grid-comet" />
							</div>
						</div>
					</div>
				</div>
			</section>
			<footer class="footer-wrapper">
				<div class="container-default w-container">
					<div class="footer-top">
						<div data-w-id="5937b0ce-eabe-ecc9-5101-b22d4ef4b9a9" class="w-layout-grid grid-footer---default">
							<div class="menu-wrapper---main">
								<div class="menu-wrapper">
									<div class="mg-bottom-64px">
										<div class="text-100 medium color-neutral-400">Pages</div>
									</div>
									<div class="nav-content">
										<ul role="list" class="nav-menu-list-wrapper">
											<li class="nav-menu-list-item">
												<a href="index.html" aria-current="page" class="nav-link w--current">Home (Sales)</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="home-pages/home-v1.html" class="nav-link">Home V1</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="home-pages/home-v2.html" class="nav-link">Home V2</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="home-pages/home-v3.html" class="nav-link">Home V3</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="about.html" class="nav-link">About us</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="integrations.html" class="nav-link">Integrations</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="integration/facebook.html" class="nav-link">Integration single</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="pricing.html" class="nav-link">Pricing</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="product/starter.html" class="nav-link">Pricing single</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="careers.html" class="nav-link">Careers</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="career/head-of-inbound-marketing.html" class="nav-link">Jobs post</a>
											</li>
										</ul>
										<ul role="list" class="nav-menu-list-wrapper">
											<li class="nav-menu-list-item">
												<a href="blog-pages/blog-v1.html" class="nav-link">Blog V1</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="blog-pages/blog-v2.html" class="nav-link">Blog V2</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="blog-pages/blog-v3.html" class="nav-link">Blog V3</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="blog/new-feature-crm-integration-with-salesforce-com.html" class="nav-link">Blog post</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="feature-pages/features-v1.html" class="nav-link">Features V1</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="feature-pages/features-v2.html" class="nav-link">Features V2</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="feature-pages/features-v3.html" class="nav-link">Features V3</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="help-center.html" class="nav-link">Help center</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="help-center-category/getting-started.html" class="nav-link">Help center category</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="help-center-post/how-to-create-a-free-dataplus-account.html" class="nav-link">Help center single</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="menu-wrapper">
									<div class="mg-bottom-64px">
										<div class="text-100 medium color-neutral-400">Template pages</div>
									</div>
									<div class="nav-content">
										<ul role="list" class="nav-menu-list-wrapper">
											<li class="nav-menu-list-item">
												<a href="template-pages/start-here.html" class="nav-link">Start here</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="template-pages/style-guide.html" class="nav-link">Style guide</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="404.html" class="nav-link">404 Not found</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="401.html" class="nav-link">Password protected</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="template-pages/licenses.html" class="nav-link">Licenses</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="template-pages/changelog.html" class="nav-link">Changelog</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="https://brixtemplates.com/more-webflow-templates" target="_blank" class="nav-link featured">Browse all templates</a>
											</li>
										</ul>
									</div>
								</div>
								<div class="menu-wrapper">
									<div class="mg-bottom-64px">
										<div class="text-100 medium color-neutral-400">Utility pages</div>
									</div>
									<div class="nav-content">
										<ul role="list" class="nav-menu-list-wrapper">
											<li class="nav-menu-list-item">
												<a href="utility-pages/sign-in.html" class="nav-link">Sign in</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/sign-up.html" class="nav-link">Sign up</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/forgot-password.html" class="nav-link">Forgot password</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/reset-password.html" class="nav-link">Reset password</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/terms-conditions.html" class="nav-link">Terms &amp; conditions</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/confirm-email.html" class="nav-link">Confirm your email</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/demo.html" class="nav-link">Demo</a>
											</li>
											<li class="nav-menu-list-item">
												<a href="utility-pages/landing-page.html" class="nav-link">Landing page</a>
											</li>
										</ul>
									</div>
								</div>
							</div>
							<div id="w-node-_5937b0ce-eabe-ecc9-5101-b22d4ef4ba27-4ef4b9a6" class="inner-container _377px _100---tablet">
								<div class="inner-container _400px---tablet">
									<div class="mg-bottom-64px mg-bottom-20px---tablet">
										<div class="text-100 medium color-neutral-400">Subscribe to our newsletter</div>
									</div>
									<p class="paragraph-small mg-bottom-16px keep">Join our newsletter and receive weekly updates and resources from the <span class="text-no-wrap">Dataplus team.</span>
									</p>
								</div>
								<div class="footer-newsletter-form-block w-form">
									<form id="wf-form-Footer-Newsletter" name="wf-form-Footer-Newsletter" data-name="Footer Newsletter" method="get">
										<div class="w-layout-grid grid-subscribe-form-button-down">
											<input type="text" class="input dark w-node-_5937b0ce-eabe-ecc9-5101-b22d4ef4ba33-4ef4b9a6 w-input" maxlength="256" name="Footer-Email-2" data-name="Footer Email 2" placeholder="Enter your email" id="Footer-Email-2" required="" />
											<input type="submit" value="Subscribe" data-wait="Please wait..." id="w-node-_5937b0ce-eabe-ecc9-5101-b22d4ef4ba34-4ef4b9a6" class="btn-primary w-button" />
											<div id="w-node-_5937b0ce-eabe-ecc9-5101-b22d4ef4ba35-4ef4b9a6" class="mg-top-20px---mbp">
												<div id="w-node-_5937b0ce-eabe-ecc9-5101-b22d4ef4ba36-4ef4b9a6" class="w-layout-grid social-icon-link---grid right left---mbp">
													<a href="https://facebook.com/" target="_blank" class="social-icon-link w-inline-block">
														<div class="social-icon-font"></div>
													</a>
													<a href="https://twitter.com/" target="_blank" class="social-icon-link w-inline-block">
														<div class="social-icon-font"></div>
													</a>
													<a href="https://www.instagram.com/" target="_blank" class="social-icon-link w-inline-block">
														<div class="social-icon-font"></div>
													</a>
													<a href="https://www.linkedin.com/" target="_blank" class="social-icon-link w-inline-block">
														<div class="social-icon-font"></div>
													</a>
													<a href="http://youtube.com/" target="_blank" class="social-icon-link w-inline-block">
														<div class="social-icon-font"></div>
													</a>
												</div>
											</div>
										</div>
									</form>
									<div class="success-message w-form-done">
										<div class="flex-horizontal">
											<div class="line-rounded-icon success-message-check"></div>
											<div>Thanks for joining our newsletter.</div>
										</div>
									</div>
									<div class="error-message w-form-fail">
										<div>Oops! Something went wrong.</div>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div data-w-id="5937b0ce-eabe-ecc9-5101-b22d4ef4ba4f" class="footer-bottom text-right text-center---tablet">
						<div class="w-layout-grid footer-bottom---grid">
							<a id="w-node-_5937b0ce-eabe-ecc9-5101-b22d4ef4ba51-4ef4b9a6" href="index.html" aria-current="page" class="footer-logo-wrapper mg-bottom-0 w-inline-block w--current">
								<img src="https://assets.website-files.com/63619a386216ae681d93409b/6361ced8050220282fb340e9_logo-dataplus-template.svg" alt="Logo - Dataplus X Webflow Template" class="footer-logo" />
							</a>
							<p class="mg-bottom-0">Copyright © Dataplus X | Designed by <a href="https://brixtemplates.com/" target="_blank">BRIX Templates</a> Powered by <a href="https://webflow.com/" target="_blank">Webflow</a>
							</p>
						</div>
					</div>
				</div>
			</footer>
		</div>
		<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=63619a386216ae681d93409b" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
		<script src="https://assets.website-files.com/63619a386216ae681d93409b/js/webflow.37b64e496.js" type="text/javascript"></script>
	</body>
</html>