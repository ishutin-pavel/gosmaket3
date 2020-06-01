<?php
/*
Template Name: contacts
*/
get_header(); // Подключаем хедер?> 
                    <div class="page__row page__row--cover" style="background-image: url(<?php echo get_template_directory_uri(); ?>/pic/contacs-bg.jpg);">
                        <div class="page__cell">
                            <div class="cover">
                                <h1 class="cover__headline headline headline--h3">Contact us</h1>
                            </div>
                        </div>
                    </div>
                    <div class="page__row">
                        <div class="page__cell">
                            <div class="page__block">
                                <div class="conta">
                                    <ul class="conta__row row">
                                        <li class="conta__item col-12 col-lg-4">
                                            <div class="conta__header">
                                                <i class="conta__icon conta__icon--address next__icon"></i>
                                                <span class="conta__title bodybold">Adress:</span>
                                            </div>
                                            <div class="conta__body">
												<p class="conta__text body">United Arab Emirates</p>
												<p class="conta__text body">Sharjah, Crescent House, 9th floor</p>
												<p class="conta__text body">Rostov-on-Don per. Machine Building, 11</p>
                                            </div>
                                        </li>
                                        <li class="conta__item col-12 col-lg-3">
                                            <div class="conta__header">
                                                <i class="conta__icon conta__icon--tel next__icon"></i>
                                                <span class="conta__title bodybold">Phone:</span>
                                            </div>
                                            <div class="conta__body">
                                                <p class="conta__text body">
                                                    <a href="tel:+971505597193" class="conta__link body">+971 50 55 971 93</a>
                                                </p>
												<p class="conta__text body">&nbsp;</p>
                                                <p class="conta__text body">
                                                    <a href="tel:+78632219114" class="conta__link body">+7 863 221 91 14</a>,  <a href="tel:+79034019114" class="conta__link body">8 903 401 91 14</a>
                                                </p>
                                            </div>
                                        </li>
                                        <li class="conta__item col-12 col-lg-5">
                                            <div class="conta__header">
                                                <i class="conta__icon conta__icon--tel next__icon"></i>
                                                <span class="conta__title bodybold">E-mail:</span>
                                            </div>
                                            <div class="conta__body">
												<p class="conta__text body">	<a href="mailto:sales@gosmaket.ae" class="conta__link body">sales@gosmaket.ae</a></p>
												<p class="conta__text body">&nbsp;</p>
												<p class="conta__text body"> <a href="mailto:sale@gosmaket.ru" class="conta__link body">sale@gosmaket.ru</a></p>
											 </div>
                                        </li>
                                    </ul>
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1803.1653905008038!2d55.37835143524976!3d25.326679010627736!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa0eba1365d25814c!2sCrescent+Tower!5e0!3m2!1sru!2sru!4v1564575468810!5m2!1sru!2sru" width="100%" height="374" frameborder="0" style="border:0" allowfullscreen></iframe>
                                    <a class="btn btn--default btn--min-width btn--md">
                                        <span id="modalbtn2" class="btn__text">ASK A QUESTION</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>



<?php get_footer(); // Подключаем футер ?>