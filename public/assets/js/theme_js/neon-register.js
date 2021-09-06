/**
 *	Neon Register Script
 *
 *	Developed by Arlind Nushi - www.laborator.co
 */

var neonRegister = neonRegister || {};

;(function($, window, undefined)
{
	"use strict";
	
	$(document).ready(function()
	{
		neonRegister.$container = $("#form_register");
		neonRegister.$steps = neonRegister.$container.find(".form-steps");
		neonRegister.$steps_list = neonRegister.$steps.find(".step");
		neonRegister.step = 'step-1'; // current step


		neonRegister.$container.validate({
			rules: {
                CompanyName: {
                    required: true
                },
				FirstName: {
					required: true
				},
                LastName: {
					required: true
				},
                Phone: {
					required: true
				},
				Email: {
					required: true,
					email: true
				},
				Password: {
					required: true
				}
				
			},
			
			messages: {
				
				email: {
					email: 'Invalid E-mail.'
				}	
			},
			
			highlight: function(element){
				$(element).closest('.input-group').addClass('validate-has-error');
			},
			
			
			unhighlight: function(element)
			{
				$(element).closest('.input-group').removeClass('validate-has-error');
			},
			
			submitHandler: function(ev)
			{
				$(".login-page").addClass('logging-in');
				
				// We consider its 30% completed form inputs are filled
				neonRegister.setPercentage(30, function()
				{
					// Lets move to 98%, meanwhile ajax data are sending and processing
					neonRegister.setPercentage(98, function()
					{
                        //var formData = $("#form_register").serializeArray();

                        // Send data to the server
						$.ajax({
							url: baseurl + '/doRegistration',
							method: 'POST',
							dataType: 'json',
							data: {
                                CompanyName:  $("#CompanyName").val(),
                                FirstName:    $("#FirstName").val(),
                                LastName:     $("#LastName").val(),
                                Email:        $("#Email").val(),
                                Phone:        $("#Phone").val(),
                                Password:     $("#Password").val()
                            },
							error: function(error)
							{
                                console.log(error);
								//alert("An error occoured!");
							},
							success: function(response)
							{
                                console.log(response);

                                $(".form-login-error").hide();
                                $(".form-register-success").hide();

                                if(response.status == 'success'){

                                    neonRegister.setPercentage(100);
                                    // We will give some time for the animation to finish, then execute the following procedures
                                    setTimeout(function()
                                    {
                                        // Hide the description title
                                        $(".login-page .login-header .description").slideUp();

                                              // Remove loging-in state
                                            $(".login-page").removeClass('logging-in');

                                            // Now we show the success message
                                            $(".form-register-success").slideDown('normal');

                                            // You can use the data returned from response variable

                                    }, 1000);

                                }else{
                                        console.log(response);
                                        $(".form-login-error p").html("");
                                        // If login is invalid, we store the
                                        $(".login-page").removeClass('logging-in');
                                        $(".form-login-error p").html(response.message);


                                        neonLogin.resetProgressBar(true);

                                }

							}
 						});
					});
				});
			}
		});

		/* portal login */

		neonRegister.$container = $("#form_portal_register");
		neonRegister.$steps = neonRegister.$container.find(".form-steps");
		neonRegister.$steps_list = neonRegister.$steps.find(".step");
		neonRegister.step = 'step-1'; // current step


		neonRegister.$container.validate({
			rules: {
				AccountName: {
					required: true
				},
				FirstName: {
					required: true
				},
				LastName: {
					required: true
				},
				Address1: {
					required: true
				},
				Phone: {
					required: true
				},
				Country: {
					required: true
				},
				Email: {
					required: true,
					email: true
				},
				Password: {
					required: true
				}

			},

			messages: {

				email: {
					email: 'Invalid E-mail.'
				}
			},

			highlight: function(element){
				$(element).closest('.input-group').addClass('validate-has-error');
			},


			unhighlight: function(element)
			{
				$(element).closest('.input-group').removeClass('validate-has-error');
			},

			submitHandler: function(ev)
			{
				$(".login-page").addClass('logging-in');

				// We consider its 30% completed form inputs are filled
				neonRegister.setPercentage(30, function()
				{
					// Lets move to 98%, meanwhile ajax data are sending and processing
					neonRegister.setPercentage(98, function()
					{
						//var formData = $("#form_register").serializeArray();

						// Send data to the server
						$.ajax({
							url: baseurl + '/portal/doRegistration',
							method: 'POST',
							dataType: 'json',
							data: {
								AccountName:  $("#AccountName").val(),
								FirstName:    $("#FirstName").val(),
								LastName:     $("#LastName").val(),
								Address1:     $("#Address1").val(),
								Address2:     $("#Address2").val(),
								City:         $("#City").val(),
								PostCode:     $("#PostCode").val(),
								Country:      $(".portalcountry").val(),
								Phone:        $("#Phone").val(),
								Email:        $("#Email").val(),
								Password:     $("#Password").val()
							},
							error: function(error)
							{
								console.log(error);
								//alert("An error occoured!");
							},
							success: function(response)
							{
								console.log(response);

								$(".form-login-error").hide();
								$(".form-register-success").hide();

								if(response.status == 'success'){

									neonRegister.setPercentage(100);
									// We will give some time for the animation to finish, then execute the following procedures

									setTimeout(function()
									{
										// Hide the description title
										$(".login-page .login-header .description").slideUp();

										// Remove loging-in state
										$(".login-page").removeClass('logging-in');

										// You can use the data returned from response variable
										$('#form_portal_register')[0].reset();
										// Now we show the success message
										$(".form-register-success").slideDown('normal');

									}, 1000);

									setTimeout(function() {
										window.location = response.redirect;
									},2000);

								}else{
									console.log(response);
									$(".form-login-error p").html("");
									// If login is invalid, we store the
									$(".login-page").removeClass('logging-in');
									$(".form-login-error p").html(response.message);


									neonLogin.resetProgressBar(true);

								}

							}
						});
					});
				});
			}
		});

		/* portal over login */
	
		// Steps Handler
		/*neonRegister.$steps.find('[data-step]').on('click', function(ev)
		{
			ev.preventDefault();
			
			var $current_step = neonRegister.$steps_list.filter('.current'),
				next_step = $(this).data('step'),
				validator = neonRegister.$container.data('validator'),
				errors = 0;
			
			neonRegister.$container.valid();
			errors = validator.numberOfInvalids();
			
			if(errors)
			{
				validator.focusInvalid();
			}
			else
			{
				var $next_step = neonRegister.$steps_list.filter('#' + next_step),
					$other_steps = neonRegister.$steps_list.not( $next_step ),
					
					current_step_height = $current_step.data('height'),
					next_step_height = $next_step.data('height');
				
				TweenMax.set(neonRegister.$steps, {css: {height: current_step_height}});
				TweenMax.to(neonRegister.$steps, 0.6, {css: {height: next_step_height}});
				
				TweenMax.to($current_step, .3, {css: {autoAlpha: 0}, onComplete: function()
				{
					$current_step.attr('style', '').removeClass('current');
					
					var $form_elements = $next_step.find('.form-group');
					
					TweenMax.set($form_elements, {css: {autoAlpha: 0}});
					$next_step.addClass('current');
					
					$form_elements.each(function(i, el)
					{
						var $form_element = $(el);
						
						TweenMax.to($form_element, .2, {css: {autoAlpha: 1}, delay: i * .09});
					});
					
					setTimeout(function()
					{
						$form_elements.add($next_step).add($next_step).attr('style', '');
						$form_elements.first().find('input').focus();
						
					}, 1000 * (.5 + ($form_elements.length - 1) * .09));
				}});
			}
		});*/
		
		/*neonRegister.$steps_list.each(function(i, el)
		{
			var $this = $(el),
				is_current = $this.hasClass('current'),
				margin = 20;
			
			if(is_current)
			{
				$this.data('height', $this.outerHeight() + margin);
			}
			else
			{
				$this.addClass('current').data('height', $this.outerHeight() + margin).removeClass('current');
			}
		});*/
		
		
		// Login Form Setup
		neonRegister.$body = $(".login-page");
		neonRegister.$login_progressbar_indicator = $(".login-progressbar-indicator h3");
		neonRegister.$login_progressbar = neonRegister.$body.find(".login-progressbar div");
		
		neonRegister.$login_progressbar_indicator.html('0%');
		
		if(neonRegister.$body.hasClass('login-form-fall'))
		{
			var focus_set = false;
			
			setTimeout(function(){ 
				neonRegister.$body.addClass('login-form-fall-init')
				
				setTimeout(function()
				{
					if( !focus_set)
					{
						neonRegister.$container.find('input:first').focus();
						focus_set = true;
					}
					
				}, 550);
				
			}, 0);
		}
		else
		{
			neonRegister.$container.find('input:first').focus();
		}

		
		
		// Functions
		$.extend(neonRegister, {
			setPercentage: function(pct, callback)
			{
				pct = parseInt(pct / 100 * 100, 10) + '%';
				
				// Normal Login
				neonRegister.$login_progressbar_indicator.html(pct);
				neonRegister.$login_progressbar.width(pct);
				
				var o = {
					pct: parseInt(neonRegister.$login_progressbar.width() / neonRegister.$login_progressbar.parent().width() * 100, 10)
				};
				
				TweenMax.to(o, .7, {
					pct: parseInt(pct, 10),
					roundProps: ["pct"],
					ease: Sine.easeOut,
					onUpdate: function()
					{
						neonRegister.$login_progressbar_indicator.html(o.pct + '%');
					},
					onComplete: callback
				});
			},
        });
	});
	
})(jQuery, window);