<?php
/*
Template Name: калькулятор
*/
get_header();
?> 
    <div class="page__row">
        <div class="page__cell">
            <div class="page__block">
							<div class="calc__wrapper">
							<ul id="steps" class="calc__steps">
						<li class="calc__step">
							<span id="steps1" class="calc__step__count active">1</span>
						</li>
						<li class="calc__step">
						    <span id="steps2" class="calc__step__count">2</span>
						</li>
						<li class="calc__step">
							<span id="steps3" class="calc__step__count">3</span>
						</li>
						<li class="calc__step">
							<span id="steps4" class="calc__step__count">4</span>
						</li>
							<li class="calc__step">
							<span id="steps5" class="calc__step__count">5</span>
						</li>
							</ul>
<div id="step1" class="calc__form visible">							
                    <div class="calc__title">
					<strong>Choose the model type.</strong>
					<p>production time and final price depends from type of model. </p>	
					</div>
					<div class="calc__border"></div>
								<div class="step" id="calculator">

<ul class="calc__ul">
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Architectural'" id="calc__item1" class="calc__image">
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/Architekturnie_maket2i.jpg"></div>
<span class="super-item-li">Creating Architectural</span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Industrial'" id="calc__item2" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/Promishlennie_maketi_2.jpg" ></div>
<span class="super-item-li">Industrial</span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Landscape'" id="calc__item3" class="calc__image">
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/Landshaftnie_maketi.jpg" ></div>
<span class="super-item-li">Landscape</span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Planning'" id="calc__item4" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/planerovochnie_maketi_2.jpg" ></div>
<span class="super-item-li">Master Plan Models </span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Training'" id="calc__item5" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/Uchebnie_maketi_s-1.jpg" ></div>
<span class="super-item-li">Learning Purposes </span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Gift'" id="calc__item6" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/podarochnie_maketi_s-1.jpg" ></div>
<span class="super-item-li">Gift</span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Interior'" id="calc__item7" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/maket_interera_s-1.jpg" ></div>
<span class="super-item-li">Sample</span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Model'" id="calc__item8" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/Maketi_modeley_s-1.jpg" ></div>
<span class="super-item-li">Interior</span></li>
<li class="calc__lable">
<div onclick="document.getElementById('result__calc').value='Non-standard'" id="calc__item9" class="calc__image" >
<img title="Calculator" alt="Calculator" src="<?php echo get_template_directory_uri(); ?>/pic/Nestandartnie_maketi_s-1.jpg" ></div>
<span class="super-item-li">Non-standard  - model</span></li>
<input id="result__calc" type="hidden" name="option_1" value="">
</ul>
								<div class="navigation__calc">
								        <div class="banner__btn btn btn--default btn--min-width btn--md">
                                            <span id="steps2btn" class="btn__text">Next</span>
                                        </div>
										</div>
</div>
</div>
<div id="step2" class="calc__form">							
                    <div class="calc__title">
					<p><strong>Advanced features, complete set</strong></p>
					<p>The model with the maximum complete set will allow the company to attract attention of partners and investors. Aesthetic lighting of buildings, streets, etc.</p>	
					</div>
					<div class="calc__border"></div>
								<div class="step" id="calculator">
<div class="calc__box">								
<div onclick="document.getElementById('result__calc2').value='Лайт'" id="box__item1" class="calc__box__item active">Light</div>
<div onclick="document.getElementById('result__calc2').value='Бизнес'" id="box__item2" class="calc__box__item">Business</div>
<div onclick="document.getElementById('result__calc2').value='Супер-Люкс'" id="box__item3" class="calc__box__item">Super-luxe</div>
</div>
<div id="box__step1" class="calc__box__step visibility">
<div class="row">
<div class="col-12 col-lg-7 col-xl-5">
<img src="<?php echo get_template_directory_uri(); ?>/pic/lite-option.jpg">
</div>
<div class="col-12 col-lg-5 col-xl-7">
<strong>Models for sales offices or company internal functions, gift models.</strong>
<ul>
<li class="calc__list__item"><strong>Transparent dome</strong> — plexiglass dome will protect your model and will help it last longer.  (+   )</li>
<li class="calc__list__item"><strong>Base</strong> — you can choose the colour or wood (+   )</li>
<li class="calc__list__item"><strong>Illumination</strong> — adds zest to your project, illuminated windows (+   ), illuminated street lights (+   )</li>
</ul>
</div>
</div>
</div>
<div id="box__step2" class="calc__box__step">
<div class="row">
<div class="col-12 col-lg-7 col-xl-5">
<img src="<?php echo get_template_directory_uri(); ?>/pic/business-option.jpg">
</div>
<div class="col-12 col-lg-5 col-xl-7">
<strong>Models for exhibitions or company internal functions, extended features line</strong>
<ul>
<li class="calc__list__item"><strong>Transparent dome</strong> — plexiglass dome will protect your model and will help it last longer.  (+   )</li>
<li class="calc__list__item"><strong>Base</strong> — you can choose the colour or wood (+   )</li>
<li class="calc__list__item"><strong>Illumination</strong> — adds zest to your project, illuminated windows (+   ), illuminated street lights (+   )</li>
<li class="calc__list__item"><strong>Dynamics</strong> — дmoving elements or intelligent illumination</li>
<li class="calc__list__item"><strong>Stand</strong> — model basis – furniture article, made of hard-wooded species</li>
<li class="calc__list__item"><strong>Skirt</strong> — model basis - a plastic wrapper with printing material. Possibility of corporate logo application</li>
</ul>
</div>
</div>
</div>
<div id="box__step3" class="calc__box__step">
<div class="row">
<div class="col-12 col-lg-7 col-xl-5">
<img src="<?php echo get_template_directory_uri(); ?>/pic/lux-option.jpg">
</div>
<div class="col-12 col-lg-5 col-xl-7">

<ul>
<li class="calc__list__item"><strong>Transparent dome</strong> — plexiglass dome will protect your model and will help it last longer.  (+   )</li>
<li class="calc__list__item"><strong>Base</strong> — you can choose the colour or wood (+   )</li>
<li class="calc__list__item"><strong>Illumination</strong> — adds zest to your project, illuminated windows (+   ), illuminated street lights (+   )</li>
<li class="calc__list__item"><strong>Dynamics</strong> — дmoving elements or intelligent illumination</li>
<li class="calc__list__item"><strong>Stand</strong> — model basis – furniture article, made of hard-wooded species</li>
<li class="calc__list__item"><strong>Skirt</strong> — model basis - a plastic wrapper with printing material. Possibility of corporate logo application</li>
<li class="calc__list__item"><strong>Built-in LCD panel</strong> —  illustrative material will make your model dynamic</li>
<li class="calc__list__item"><strong>Intelligent illumination control</strong> — for example, you can separately illuminate every flat you sold</li>
<li class="calc__list__item"><strong>Illumination control touchpad</strong> — will make your model interactive</li>
</ul>
</div>
</div>
</div>
								<div class="navigation__calc">
										<div class="section__btn btn btn--secondary btn--min-width btn--md">
                                            <span id="steps1btn" class="btn__text">Back</span>
                                        </div>
								        <div class="banner__btn btn btn--default btn--min-width btn--md">
                                            <span id="steps3btn" class="btn__text">Next</span>
                                        </div>
										</div>
</div>
<input id="result__calc2" type="hidden" name="option_2" value="">
</div>
<div id="step3" class="calc__form">							
                    <div class="calc__title">
					<p><strong>What size do you need?</strong></p>
					<p>The model size depends on its purpose. Like industrial models can be of considerable dimensions, while gift models are normally small-sized.</p>	
					</div>
					<div class="calc__border"></div>
								<div class="step" id="calculator">
<div class="calc__box__step visibility">
<div class="row">
<div class="col-12 col-lg-7 col-xl-5">
<div class="calc__box__size">								
<div onclick="document.getElementById('result__calc3').value='Маленький макет ( размер до 0,5*0,5 метр)'" class="size__item calc__box__item">Small (up to 0,5*0,5 m)</div>
<div onclick="document.getElementById('result__calc3').value='Небольшой макет ( размер до 1*1 метр)'" class="size__item calc__box__item">Moderate-sized (up to 1*1 m)</div>
<div onclick="document.getElementById('result__calc3').value='Средний макет ( размер от 1,5*2 до 2*2 метра)'" class="size__item calc__box__item">Middle-sized (from 1,5*2 m to 2*2m )</div>
<div onclick="document.getElementById('result__calc3').value='Большой макет (размер от 2*3 метра и более)'" class="size__item calc__box__item">Big (from 2*3 m)</div>
</div>
</div>
<div class="col-12 col-lg-5 col-xl-7">
<img src="<?php echo get_template_directory_uri(); ?>/pic/168946-e1513588181828.jpg">
</div>
</div>
</div>
<input id="result__calc3" type="hidden" name="option_3" value="">
								<div class="navigation__calc">
										<div class="section__btn btn btn--secondary btn--min-width btn--md">
                                            <span id="steps2btn" class="btn__text">Back</span>
                                        </div>
								        <div class="banner__btn btn btn--default btn--min-width btn--md">
                                            <span id="steps4btn" class="btn__text">Next</span>
                                        </div>
										</div>
</div>
</div>
<div id="step4" class="calc__form">							
                    <div class="calc__title">
					<strong>What about Creation time</strong>
					<p>If you decided to create a model of your construction or industrial object, you should take into consideration production time and time for intermediate project coordination. It’s always better to have some time in reserve. The result is always much better when there is no hurry.</p>	
					</div>
					<div class="calc__border"></div>
								<div class="step" id="calculator">
<div class="calc__box__step visibility">
<div class="row">
<div class="col-12 col-lg-8 col-xl-6">
<div class="calc__box__size">								
<div onclick="document.getElementById('result__calc4').value='Уже вчера: от 3-х дней'" class="size__item calc__box__item">From 3 days</div>
<div onclick="document.getElementById('result__calc4').value='1 неделя'" class="size__item calc__box__item">1 week</div>
<div onclick="document.getElementById('result__calc4').value='1 месяц'" class="size__item calc__box__item">1 month</div>
<div onclick="document.getElementById('result__calc4').value='От 1 месяца'" class="size__item calc__box__item">From 1 month</div>
</div>
</div>
<div class="col-12 col-lg-4 col-xl-6">
<img src="<?php echo get_template_directory_uri(); ?>/pic/srok.jpg">
</div>
</div>
</div>
								<div class="navigation__calc">
										<div class="section__btn btn btn--secondary btn--min-width btn--md">
                                            <span id="steps3btn" class="btn__text">Back</span>
                                        </div>
								        <div class="banner__btn btn btn--default btn--min-width btn--md">
                                            <span id="steps5btn" class="btn__text">Next</span>
                                        </div>
										</div>
</div>
<input id="result__calc4" type="hidden" name="option_4" value="">
</div>
<div id="step5" class="calc__form">							
                    <div class="calc__title">
					<strong>Your contacts</strong>
					<p>Leave your data and we will contact you for calculation of the model and further coordination.</p>	
					</div>
					<div class="calc__border"></div>
								<div class="step" id="calculator">
<div class="calc__send__form">
                  <form action="" id="wl_ajax_form_plugin" class="form__calc">  
                                        <div class="form__calc__body">
                                            <div class="form__line__calc">
											<span class='icon__human'></span>
                                                <input type="text" name="name" id="wl_user_name2" placeholder="Your name" class="form__inputmodal">
                                            </div>
                                            <div class="form__line__calc">
											<span class='icon__phone'></span>
                                                <input type="tel" name="tel" id="wl_user_contact2" placeholder="Your phone number" class="form__inputmodal">
                                            </div>
                                            <div class="form__line__calc">
											<span class='icon__mail'></span>
                                                <input type="email" name="email" id="wl_user_email2" placeholder="Your email" class="form__inputmodal">
                                            </div>

                                        </div>
											<div class="form__line__calc form__padding">
											<span class='icon__text'></span>
                                                <input name="textarea" id="wl_user_textarea" placeholder="Additional information" class="form__inputmodal">
                                            </div>
										
</form>
</div>
								<div class="navigation__calc navigation__fix">
										<div class="section__btn btn btn--secondary btn--min-width btn--md">
                                            <span id="steps4btn" class="btn__text">Back</span>
                                        </div>
								        <div class="banner__btn btn btn--default btn--min-width btn--md">
										<span class="icon__calc"></span>
                                            <span id="wl_send_calc_btn" class="btn__text">Calculate the cost</span>
                                        </div>
										</div>
										<div style="padding:0 0 20px 0;" class="infomsg" id="wl_calc_infomsg"></div>
</div>
</div>

                                </div>
                            </div>

                        </div>
                    </div>
<?php get_footer(); ?>
