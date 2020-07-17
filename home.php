<?php
/*
Template Name: home
*/
get_header();
?>
                    <div class="page__row page__row--bg-white">
                        <div class="page__cell">
                            <div class="banner">
                                <div class="banner__row row">
                                    <div class="col-12 col-lg-8">
                                        <h1 class="banner__desc">More attention on details than any other company.</h1>
										<p class="banner__desc">FILL IN FORM AND RECEIVE A MODEL VISUALIZATION FOR FREE</p>
										                                            <a href="/kalkuljator/" class="nav__btn btn btn--primary btn--min-width btn--sm">
                                                <span class="btn__text">FILL IN FORM</span>
                                            </a>
                                    </div>
                                    <div class="col-12 col-lg-4">
                                        <div onclick="document.getElementById('frame__video').src='https://www.youtube.com/embed/2Fj13BbQ6hA'" class="banner__video video">
										<a id="modalframebtn2" class="video">
                                            <div class="video__bg">
                                                <img src="<?php echo get_template_directory_uri(); ?>/img/video.png" alt="Video" class="video__picture">
                                            </div>
											<div class="video__text">Interactive models</div>
                                            <a id="modalframebtn2" class="video__link">
                                                <span class="video__play"></span>
                                            </a>
											</a>
										</div>
										
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                    <div class="page__row page__row--bg-white d-block d-lg-none">
                        <div class="page__cell">
                            <div class="section section--mobile">
                                <div class="section__row row">
                                    <div class="col-12 col-lg-3">
                                        <span class="section__arrow animated fadeInDown infinite">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="6" height="3" viewBox="0 0 6 3"><defs><path id="dahla" d="M1402 58l3.004 3 2.996-2.992"/></defs><g><g transform="translate(-1402 -58)"><use fill-opacity="0" stroke="#868a8e" stroke-miterlimit="50" xlink:href="#dahla"/></g></g></svg>
                                        </span>
                                        <h2 class="section__title" id="projects">projects</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell page__cell--fluid">
                            <div class="slider counter owl-carousel owl-theme">
							<?php if( have_rows('main_slider') ): ?>
							<?php while( have_rows('main_slider') ): the_row(); 
								// переменные
								$image = get_sub_field('main_slider_image');
								$title = get_sub_field('main_slider_title');
								$content = get_sub_field('main_slider_content');
								$elements = get_sub_field('main_slider_elements');
								$size = get_sub_field('main_slider_size');
								$link = get_sub_field('main_slider_link');
								$category = get_sub_field('main_slider_category');
							?>
                                <div class="slider__item">
                                    <div class="page__cell">
                                        <div class="slider__bg" style="background-image: url(<?php echo $image; ?>);"></div>
                                        <div class="slider__content">
                                            <div class="slider__block">
                                                <a href="/portfolio/" class="slider__tags tags animated"><?php echo $category; ?></a>
                                                <h2 class="slider__title animated"><?php echo $title; ?></h2>
                                                <div class="slider__desc">
                                                    <p class="slider__text animated"><?php echo $content; ?></p>
                                                    <span class="slider__spans">
													<?php if( get_sub_field('main_slider_elements') ): ?>
                                                        <span class="slider__span">
                                                            <span class="slider__span-text animated"><?php echo $elements; ?></span>
                                                            <span class="slider__span-text animated">Number of details</span>
                                                        </span>
													<?php endif; ?>	
                                                        <span class="slider__span">
                                                            <span class="slider__span-text animated"><?php echo $size; ?></span>
                                                            <span class="slider__span-text animated">Scale</span>
                                                        </span>
                                                    </span>
                                                </div>
                                                <div class="slider__btns">
                                                    <div class="d-none d-lg-block">
                                                        <a href="<?php echo $link; ?>" class="slider__btn btn btn--default btn--min-width btn--md animated">
                                                            <span class="btn__text">More about project</span>
                                                        </a>
                                                    </div>
                                                    <div class="d-block d-lg-none">
                                                        <a href="<?php echo $link; ?>" class="slider__more more animated">
                                                            <span class="more__text">More about project</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12" class="more__icon"><defs><path id="b70sa" d="M284.69 1968.29v-2.5h8.5v8.3h-2.5v-5.8z"/></defs><g><g transform="rotate(45 2518.258 641.06)"><use xlink:href="#b70sa"/></g></g></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
	<?php endwhile; ?>
<?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="section">
                                <div class="section__row row">
                                    <div class="col-12 col-lg-3">
                                        <h2 class="section__title">Services</h2>
                                    </div>
                                    <div class="col-12 col-lg-9">
                                        <div class="section__block">
                                            <p class="section__desc">When designing and manufacturing an architectural model<br class="section__br"> the GOSMAKET mock-up workshop pays special attention to the accuracy<br class="section__br"> of reproduction of the overall conceptual nature of the project.</p>
                                            <a class="section__btn btn btn--default btn--min-width btn--md">
                                                <div id="modalbtn2" class="btn__text">Get consultation</div>
                                            </a>
                                            <a href="/uslugi-maketnoj-masterskoj/" class="section__btn btn btn--secondary btn--min-width btn--md">
                                                <span class="btn__text">GO TO SERVICES</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="section__directions directions">
                                    <div class="directions__row row">
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <div class="directions__item">
                                                <a href="/uslugi-maketnoj-masterskoj/" class="directions__link"></a>
                                                <div class="directions__content">
                                                    <div class="directions__header">
                                                        <span class="directions__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/directions-1.jpg);"></span>
                                                        <span class="directions__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 42 42"><defs><path id="p6gea" d="M217.648 1731.898l-7.193-3.99 7.198-3.993 7.193 3.99zm-.693 9.184l-7.252-4.013v-7.976l7.252 4.013zm-7.946-18.133a.703.703 0 0 0-.703.703v3.054l-7.242-4.012v-7.976l7.604 4.214a.703.703 0 0 0 .682 0l7.604-4.214v7.971l-7.242 4.012v-3.049a.703.703 0 0 0-.703-.703zm-.702 14.12l-7.252 4.013v-7.976l7.252-4.013zm-7.955-5.181l-7.198-3.988 7.198-3.988 7.197 3.988zm-.704 9.194l-7.242-4.013v-7.976l7.242 4.013zm9.36-31.545l7.199 3.983-7.198 3.983-7.198-3.983zm17.63 17.748l-8.278-4.586v-9.174a.703.703 0 0 0-.362-.615l-8.648-4.792a.703.703 0 0 0-.682 0l-8.648 4.792a.703.703 0 0 0-.363.615v9.164l-8.295 4.596a.703.703 0 0 0-.362.615v9.583c0 .256.139.491.362.615l8.649 4.792a.703.703 0 0 0 .681 0l8.308-4.603 8.308 4.603a.703.703 0 0 0 .681 0l2.017-1.117a.703.703 0 1 0-.682-1.23l-.972.539v-7.976l7.242-4.013v7.976l-1.415.784a.703.703 0 1 0 .682 1.23l1.777-.985a.703.703 0 0 0 .362-.615v-9.583a.703.703 0 0 0-.362-.615z"/><path id="p6gec" d="M188 1747v-42h42v42z"/><clipPath id="p6geb"><use xlink:href="#p6gea"/></clipPath></defs><g><g transform="translate(-188 -1705)"><g><use xlink:href="#p6gea"/></g><g clip-path="url(#p6geb)"><g><use xlink:href="#p6gec"/></g></g></g></g></svg>
                                                        </span>
                                                        <h3 class="directions__title">Model <br class="directions__br"> Making</h3>
                                                    </div>
                                                    <div class="directions__body">
                                                        <ul class="directions__list list">
                                                            <li class="list__item">
                                                                <span class="list__span">Architectural Layouts</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Industrial</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Dioramas, relief</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Model Layout</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="directions__footer">
                                                        <a href="/uslugi-maketnoj-masterskoj/" class="directions__more more">
                                                            <span class="more__text">More</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12" class="more__icon"><defs><path id="b70sa" d="M284.69 1968.29v-2.5h8.5v8.3h-2.5v-5.8z"/></defs><g><g transform="rotate(45 2518.258 641.06)"><use xlink:href="#b70sa"/></g></g></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <div class="directions__item">
                                                <a href="/service/izgotovlenie-interaktivnogo-maketa/" class="directions__link"></a>
                                                <div class="directions__content">
                                                    <div class="directions__header">
                                                        <span class="directions__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/directions-2.jpg);"></span>
                                                        <span class="directions__icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="42" height="42" viewBox="0 0 42 42"><defs><path id="cfi6a" d="M597.244 1726.765a1 1 0 0 0-.438.828v.623l-.07-.001h-1.128v-3.928l1.417-1.432c.386-.389.386-1.02 0-1.41a.98.98 0 0 0-1.396 0l-1.707 1.724c-.185.187-.29.44-.29.705v4.34h-2.255v-4.34c0-.265-.104-.518-.29-.705l-1.706-1.723a.981.981 0 0 0-1.396 0 1.003 1.003 0 0 0 0 1.41l1.417 1.43v3.929h-1.127l-.07.001v-.623a1 1 0 0 0-.44-.828 8.627 8.627 0 0 1-3.791-7.161c0-4.749 3.827-8.612 8.531-8.612 4.704 0 8.531 3.863 8.531 8.612a8.627 8.627 0 0 1-3.792 7.16zM580 1720c0-.552-.432-1-.966-1h-2.068c-.534 0-.966.448-.966 1s.432 1 .966 1h2.068c.534 0 .966-.448.966-1zm29.034-1h-2.068c-.533 0-.966.448-.966 1s.433 1 .966 1h2.068c.534 0 .966-.448.966-1s-.432-1-.966-1zm-28.59 7.131l-1.925 1.046c-.496.27-.666.867-.38 1.335.192.313.541.488.9.488.175 0 .354-.042.517-.131l1.925-1.046c.496-.27.666-.867.38-1.334-.287-.468-.921-.628-1.417-.358zM605.039 1714c.175 0 .354-.042.517-.131l1.925-1.046c.496-.27.666-.867.38-1.334-.287-.468-.921-.628-1.417-.358l-1.925 1.046c-.496.27-.666.867-.38 1.334.192.314.541.489.9.489zm2.442 13.177l-1.925-1.046c-.496-.27-1.13-.11-1.417.358-.286.467-.116 1.064.38 1.334l1.925 1.046c.163.089.341.131.517.131.359 0 .708-.175.9-.489.286-.467.116-1.064-.38-1.334zm-26-15l-1.925-1.046c-.496-.27-1.13-.11-1.417.358-.286.467-.116 1.064.38 1.334l1.925 1.046c.163.089.341.131.517.131.359 0 .708-.175.9-.489.286-.467.116-1.064-.38-1.334zm15.256 24.563h-8.464c-.622 0-1.128-.51-1.128-1.138 0-.627.506-1.137 1.128-1.137h8.464c.622 0 1.128.51 1.128 1.137 0 .628-.506 1.138-1.128 1.138zm-4.237 4.268a3.25 3.25 0 0 1-3.088-2.276h6.176a3.25 3.25 0 0 1-3.088 2.276zm4.237-10.811c.622 0 1.128.508 1.128 1.133 0 .624-.506 1.133-1.128 1.133h-8.464a1.132 1.132 0 0 1 0-2.266zM592.5 1709c-5.79 0-10.5 4.755-10.5 10.599 0 3.363 1.571 6.501 4.228 8.5v.885a3.135 3.135 0 0 0-1.057 2.35c0 .825.318 1.575.835 2.135a3.133 3.133 0 0 0-.835 2.133c0 1.404.92 2.595 2.184 2.99.407 2.497 2.558 4.408 5.145 4.408 2.587 0 4.738-1.911 5.145-4.407a3.132 3.132 0 0 0 2.184-2.99c0-.825-.318-1.575-.835-2.135.517-.56.835-1.31.835-2.133 0-.936-.41-1.777-1.057-2.351v-.885a10.619 10.619 0 0 0 4.228-8.5c0-5.844-4.71-10.599-10.5-10.599z"/><path id="cfi6c" d="M572 1747v-42h42v42z"/><clipPath id="cfi6b"><use xlink:href="#cfi6a"/></clipPath></defs><g><g transform="translate(-572 -1705)"><g><use xlink:href="#cfi6a"/></g><g clip-path="url(#cfi6b)"><g><use xlink:href="#cfi6c"/></g></g></g></g></svg>
                                                        </span>
                                                        <h3 class="directions__title">Interactive <br class="directions__br"> models</h3>
                                                    </div>
                                                    <div class="directions__body">
                                                        <ul class="directions__list list">
                                                            <li class="list__item">
                                                                <span class="list__span">Tablet control</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Monoblock information desk</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Layout with animation on LCD panels</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Augmented Reality Layout</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="directions__footer">
                                                        <a href="/service/izgotovlenie-interaktivnogo-maketa/" class="directions__more more">
                                                            <span class="more__text">More</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12" class="more__icon"><defs><path id="b70sa" d="M284.69 1968.29v-2.5h8.5v8.3h-2.5v-5.8z"/></defs><g><g transform="rotate(45 2518.258 641.06)"><use xlink:href="#b70sa"/></g></g></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 col-lg-6 col-xl-4">
                                            <div class="directions__item">
                                                <a href="/service/arhitekturnaja-3d-vizualizacija/" class="directions__link"></a>
                                                <div class="directions__content">
                                                    <div class="directions__header">
                                                        <span class="directions__bg" style="background-image: url(<?php echo get_template_directory_uri(); ?>/img/directions-3.jpg);"></span>
                                                        <span class="directions__icon directions__icon--pd">
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="30" height="34" viewBox="0 0 30 34"><defs><path id="3yo0a" d="M964 1711.69l4 2.285v7.982l-4 2.286zm12-8.06v4.666l-6.953 3.974-4.038-2.308zm1.005 6.398l5.942 3.388-5.942 3.388-5.943-3.388zm.995-6.398l10.99 6.332-4.037 2.308-6.953-3.974zm12 20.613l-4-2.286v-7.982l4-2.286zm-12 1.09v-6.787l6-3.428v6.785zm0 6.97v-4.667l6.953-3.973 4.038 2.307zm-2-6.97l-6-3.43v-6.785l6 3.428zm0 6.96l-10.926-6.36 3.973-2.27 6.953 3.973zm-14-22.338v16.022a1 1 0 0 0 .509.86l13.992 8.062c.524.302 1.004-.001.998 0l14-8.066c.007-.007.495-.277.5-.856l.001-.01v-16.001-.01a1 1 0 0 0-.486-.848l-.015-.008-14-8.067a1.003 1.003 0 0 0-.998 0l-14 8.067a1.004 1.004 0 0 0-.5.855z"/></defs><g><g transform="translate(-962 -1701)"><use xlink:href="#3yo0a"/></g></g></svg>
                                                        </span>
                                                        <h3 class="directions__title">Visualization and modeling</h3>
                                                    </div>
                                                    <div class="directions__body">
                                                        <ul class="directions__list list">
                                                            <li class="list__item">
                                                                <span class="list__span">Video flyby</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Photorealistic Visualization</span>
                                                            </li>
                                                            <li class="list__item">
                                                                <span class="list__span">Modeling objects of any complexity</span>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="directions__footer">
                                                        <a href="/service/arhitekturnaja-3d-vizualizacija/" class="directions__more more">
                                                            <span class="more__text">More</span>
                                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="8" height="12" viewBox="0 0 8 12" class="more__icon"><defs><path id="b70sa" d="M284.69 1968.29v-2.5h8.5v8.3h-2.5v-5.8z"/></defs><g><g transform="rotate(45 2518.258 641.06)"><use xlink:href="#b70sa"/></g></g></svg>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="section__advantages advantages">
                                    <div class="advantages__row row justify-content-around">
                                        <div class="col-auto">
                                            <div class="advantages__block">
                                                <span class="advantages__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="52" viewBox="0 0 52 52"><defs><path id="dpcba" d="M202 2102c0-14.36 11.64-26 26-26s26 11.64 26 26-11.64 26-26 26-26-11.64-26-26z"/><path id="dpcbb" d="M238.941 2095.879h-5.294v-3.834c0-.577-.474-1.045-1.059-1.045h-15.53c-.584 0-1.058.468-1.058 1.045v12.29c0 .578.474 1.046 1.059 1.046h1.482v2.695c0 .39.22.747.57.927a1.068 1.068 0 0 0 1.096-.07l2.146-1.484v1.765c0 .578.474 1.046 1.059 1.046h7.242l5.139 3.551a1.068 1.068 0 0 0 1.096.07c.35-.18.57-.537.57-.926v-2.695h1.482c.585 0 1.059-.469 1.059-1.046v-12.29c0-.577-.474-1.045-1.059-1.045z"/><path id="dpcbc" d="M220.463 2106v-1.736c0-.578-.46-1.047-1.026-1.047H218V2093h13V2103.217h-6.318c-.21 0-.416.066-.588.19zm7.499-11h-6.924c-.573 0-1.038.448-1.038 1s.465 1 1.038 1h6.924c.573 0 1.038-.448 1.038-1s-.465-1-1.038-1zm0 5h-6.924c-.573 0-1.038.448-1.038 1s.465 1 1.038 1h6.924c.573 0 1.038-.448 1.038-1s-.465-1-1.038-1z"/></defs><g><g transform="translate(-202 -2076)"><g opacity=".2"><use fill="#5d67e1" xlink:href="#dpcba"/></g><g><use fill="#5d67e1" xlink:href="#dpcbb"/></g><g><use fill="#fff" xlink:href="#dpcbc"/></g></g></g></svg>
                                                </span>
                                                <div class="advantages__title">Own project <br class="advantages__br">management system</div>
                                            </div>
                                        </div>
                                        <div class="col-auto">
                                            <div class="advantages__block">
                                                <span class="advantages__icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="52" height="52" viewBox="0 0 52 52"><defs><path id="zkgia" d="M968 2102c0-14.36 11.64-26 26-26s26 11.64 26 26-11.64 26-26 26-26-11.64-26-26z"/><path id="zkgib" d="M986 2100c0-5.468 4.455-9.9 9.95-9.9 5.495 0 9.95 4.432 9.95 9.9s-4.455 9.9-9.95 9.9c-5.495 0-9.95-4.432-9.95-9.9z"/><path id="zkgic" d="M1005.964 2099.826c0 4.536-3.105 8.36-7.302 9.458a4.08 4.08 0 0 0-1.237-1.393l-.002-.002h-.001c-.381-.269-.75-.554-1.109-.853 3.92-.067 7.089-3.274 7.089-7.21 0-3.978-3.236-7.214-7.214-7.214a7.207 7.207 0 0 0-5.835 2.98c-.028-.33-.048-.66-.056-.991v-.004a4.076 4.076 0 0 0-.623-2.054 9.736 9.736 0 0 1 6.514-2.493c5.39 0 9.776 4.385 9.776 9.776zm-9.55 11.939c-.646 1.213-1.981 1.895-3.487 1.895-1.427 0-3.007-.613-4.297-1.967a25.47 25.47 0 0 1-6.367-11.875c-.817-3.598 1.392-6.539 3.93-6.539.105 0 .211.005.318.015.682.038 1.158.659 1.224 1.374.13 1.396.243 2.152.451 3.674.096.7-.211 1.398-.865 1.598l-.89.26a21.532 21.532 0 0 0 4.188 7.81l.71-.598c.228-.188.507-.278.788-.278.369 0 .727.17 1.02.441a44.652 44.652 0 0 0 2.811 2.41c.562.448.813 1.19.467 1.78zm-2.223-12.732c.142-.213.213-.423.213-.625 0-.216-.052-.375-.16-.483-.109-.108-.26-.161-.462-.161-.199 0-.35.056-.462.17a.6.6 0 0 0-.13.227.757.757 0 0 1-.791.506.743.743 0 0 1-.615-1.007c.124-.318.308-.572.546-.755.396-.303.895-.457 1.481-.457.646 0 1.164.18 1.54.536.379.358.571.81.571 1.341 0 .296-.054.583-.16.851-.104.264-.27.542-.494.827-.148.19-.405.452-.787.803-.363.334-.596.557-.69.665a2.672 2.672 0 0 0-.037.042h1.453a.717.717 0 0 1 0 1.433h-3.218a.462.462 0 0 1-.45-.575c.073-.296.193-.584.357-.857.233-.387.674-.88 1.348-1.507.644-.601.871-.862.947-.974zm5.978-2.121v3.425h.074a.688.688 0 0 1 0 1.375h-.074v.494a.74.74 0 0 1-1.48 0v-.494h-2.045a.465.465 0 0 1-.464-.464v-.591c0-.13.038-.254.111-.36l2.491-3.647a.464.464 0 0 1 .384-.202h.538c.256 0 .465.208.465.464zm-1.48 2.06l-.917 1.375h.918z"/></defs><g><g transform="translate(-968 -2076)"><g opacity=".2"><use fill="#5d67e1" xlink:href="#zkgia"/></g><g><use fill="#fff" xlink:href="#zkgib"/></g><g><use fill="#5d67e1" xlink:href="#zkgic"/></g></g></g></svg>
                                                </span>
                                                <div class="advantages__title">Warranty support after <br class="advantages__br"> delivery and installation.</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="section">
                                <h2 class="section__title">Our clients</h2>
                            </div>
                        </div>
                    </div>
                    <div class="page__row page__row--customers">
                        <div class="page__cell page__cell--fluid">
                            <div class="customers">
                                <div class="customers__wrap" id="customers__wrap">
                                    <div class="customers__row customers__row--primary">
                                        <ul class="customers__list">
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_01.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_02.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_03.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_04.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_05.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_06.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_07.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_08.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_01.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_02.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_03.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_04.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_05.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_06.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_07.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_08.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="customers__row customers__row--secondary">
                                        <ul class="customers__list">
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_08.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_07.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_06.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_05.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_04.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_03.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_02.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_01.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_08.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_07.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_06.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_05.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_04.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_03.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_02.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                            <li class="customers__item">
                                                <a href="#" class="customers__link">
                                                    <img src="/wp-content/uploads/2020/06/our_clients_01.jpg" alt="customers" class="customers__picture">
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="customers__view d-block d-sm-none">
                                    <button class="customers__btn view" data-target="#customers__wrap">Показать всех клиентов</button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="carousel counter owl-carousel owl-theme">
<?php if( have_rows('main_reviews') ): ?>

	<?php while( have_rows('main_reviews') ): the_row(); 
		// переменные
		$image = get_sub_field('main_reviews_image');
		$photo = get_sub_field('main_reviews_photo');
		$fio = get_sub_field('main_reviews_fio');
		$post = get_sub_field('main_reviews_post');
		$content = get_sub_field('main_reviews_content');
		$logo = get_sub_field('main_reviews_logo');
		$link = get_sub_field('main_reviews_video_link');
		$video_image = get_sub_field('main_reviews_video_image');
		$video_logo = get_sub_field('main_reviews_video_logo');
		?>
		                                <div class="carousel__item">
                                    <div class="block">
                                        <div class="block__shadow block__shadow--certificate">
                                            <div class="block__shadow-in">
                                                <a href="<?php echo $image; ?>" data-fancybox="certificate" class="block__certificate certificate">
                                                    <img src="<?php echo $image; ?>" alt="certificate" class="certificate__picture">
                                                    <span class="certificate__zoom zoom"></span>
                                                </a>
                                            </div>
                                        </div>
										                                        <div class="block__shadow">
                                            <div class="block__shadow-in">
                                                <div class="block__review review">
                                                    <div class="review__block review__block--pd review__block--text">
                                                        <div class="review__header">
                                                            <span class="review__text">
                                                                <span class="review__name"><?php echo $fio; ?></span>
                                                                <span class="review__span"><?php echo $post; ?></span>
                                                            </span>
                                                        </div>
                                                        <div class="review__body">
                                                            <div class="review__links d-block d-lg-none">
                                                                <a href="<?php echo $logo; ?>" class="review__link">
                                                                    <img src="<?php echo $logo; ?>" alt="customers" class="review__link-picture">
                                                                </a>
                                                                <a href="<?php echo $image; ?>" class="review__link review__link--view">
                                                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40" height="40" viewBox="0 0 40 40"><defs><path id="ejj2a" d="M157 3465c0-11.046 8.954-20 20-20s20 8.954 20 20-8.954 20-20 20-20-8.954-20-20z"/><path id="ejj2d" d="M157 3485v-40h40v40z"/><path id="ejj2b" d="M185 3459.9v12.575c0 1.034-.84 1.875-1.875 1.875h-11.25a1.877 1.877 0 0 1-1.875-1.875v-15c0-1.033.84-1.875 1.875-1.875h8.826zm-12.188 6.94h7.5v-1.865h-7.5zm9.375 1.885h-9.375v1.865h9.375zm1.866-7.5l-4.678-4.688v4.688z"/><path id="ejj2f" d="M165 3477v-24h24v24z"/><clipPath id="ejj2c"><use xlink:href="#ejj2a"/></clipPath><clipPath id="ejj2e"><use xlink:href="#ejj2b"/></clipPath></defs><g><g transform="translate(-157 -3445)"><g><use fill="#5d67e1" xlink:href="#ejj2a"/></g><g clip-path="url(#ejj2c)"><g><use fill="#5d67e1" xlink:href="#ejj2d"/></g></g><g clip-path="url(#ejj2c)"><g><use fill="#757575" xlink:href="#ejj2b"/></g><g clip-path="url(#ejj2e)"><g><use fill="#fff" xlink:href="#ejj2f"/></g></g></g></g></g></svg>
                                                                    Посмотреть<br class="review__br"> отзыв
                                                                </a>
                                                            </div>
                                                            <div class="review__body-bg scrollbar">
                                                                <p class="review__desc"><?php echo $content; ?></p>
                                                            </div>
                                                        </div>
                                                        <div class="review__footer d-block d-lg-none">
                                                            <div class="review__view">
                                                                <button class="review__btn view" data-target=".review__body">Читать отзыв полностью</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="review__block review__block--video">
                                                        <div onclick="document.getElementById('frame__video').src='<?php echo $link; ?>'" class="review__video">
                                                        <a id="" class="review__video-link">
                                                            <img src="<?php echo $video_image;  ?>" alt="video" class="review__video-picture"> 
                                                              <?php /*<img src="<?php echo $video_logo; ?>" alt="tn" class="review__video-brand"> */ ?>
                                                                <span class="review__video-play"></span> 
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
									</div>
                                </div>
	<?php endwhile; ?>
<?php endif; ?>

                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="cta">
                                <span class="cta__icon">
                                    <img src="<?php echo get_template_directory_uri(); ?>/img/cta.png" alt="cta" class="cta__picture">
                                </span>
                                <div class="cta__text">
                                    <h2 class="cta__title">Do you have the idea of a perfect model?</h2>
                                    <p class="cta__desc">Just share your idea with us<br class="cta__br">and we will help you make it real!</p>
                                    <a href="/kalkuljator/" class="cta__btn btn btn--default btn--width btn--md">
                                        <span class="btn__text">Tell about</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

<?php
get_footer();
