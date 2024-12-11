/**
 * Document ready
 * 
 * Checkout Product Page
 */
jQuery(document).ready(function ($) {
    "use strict";
    
    var _apply_coupon = false;

    var _checkout_m = $('.checkout-modern-wrap');

    var _mobileView = $('.nasa-check-reponsive.nasa-switch-check').length && $('.nasa-check-reponsive.nasa-switch-check').width() === 1 ? true : false;

    if ($(_checkout_m).length && _mobileView) {
        var nasa_bc_modern = $(_checkout_m).find('.nasa-bc-modern');
        $(_checkout_m).find('.checkout-modern-left-wrap').css("padding-top", nasa_bc_modern.outerHeight() +'px' );
    }
    
    if ($('#payment .form-row').length) {
        $('#payment .form-row').removeClass('form-row');
    }

    if ($('#main-content .form-row input, #main-content .form-row select, #main-content .form-row textarea').length) {
        $('#main-content .form-row input, #main-content .form-row select, #main-content .form-row textarea').each(function() {
            var _this = $(this);
            
            var _wrap = $(_this).parents('.form-row');
            
            /**
             * Do not work with #order_review
             */
            if ($(_wrap).parents('#order_review, #payment').length < 1) {
                
                var _form_acc = $(_this).parents('form.woocommerce-EditAccountForm').length ? true : false;
                var _this_val = $(_this).val();

                /**
                 * Add * required to placeholder
                 */
                if ($(_wrap).length && $(_wrap).hasClass('validate-required') && $(_wrap).find('label[for]').length) {
                    var _palace_holder = $(_this).attr('placeholder');

                    if (_palace_holder) {
                        var _rq = $(_wrap).find('label[for] .required').length ? $(_wrap).find('label[for] .required').text() : '*';
                        $(_this).attr('placeholder', _palace_holder + ' ' + _rq);
                    }
                }

                /**
                 * Check actived
                 */
                if (_this_val !== '' || _form_acc) {
                    if ($(_wrap).length && $(_wrap).find('label[for]').length) {
                        var _for = $(_wrap).find('label[for]').attr('for');
                        if ($(_wrap).find('input[type="hidden"]#' + _for + ', input[type="radio"]#' + _for + ', input[type="checkbox"]#' + _for).length <= 0) {
                            if (!$(_wrap).hasClass('nasa-actived')) {
                                $(_wrap).addClass('nasa-actived');
                            }
                        } else {
                            if (!$(_wrap).hasClass('nasa-dffr')) {
                                $(_wrap).addClass('nasa-dffr');
                            }
                        }
                    }
                }
            }
        });
    }
    
    /**
     * Compatible Conditional extra fees for WooCommerce PRO Plugin
     */
    $('body').on('nasa_pi_cefw_optional_fees', function() {
        if ($('.checkout-modern-wrap').length) {
            var _form = $('form.woocommerce-checkout');
            var _pi_fees = $('.order-review-modern .pi-condition-fees .pi-cefw-optional-fees-list').clone();

            if ($(_form).find('.pi-cefw-optional-fees-list').length) {
                $(_form).find('.pi-cefw-optional-fees-list').replaceWith(_pi_fees);
            } else {
                $(_form).append(_pi_fees);
            }
        }
    }).trigger('nasa_pi_cefw_optional_fees');
    
    $('body').on('change', '.pi-cefw-optional-fees', function() {
        $('body').trigger('nasa_pi_cefw_optional_fees');
    });

    /**
     * Keyup Input, textarea
     */
    $('body').on('keyup', '#main-content .form-row input, #main-content .form-row textarea', function () {
        var _this = $(this);
        var _wrap = $(_this).parents('.form-row');

        if ($(_wrap).length && !$(_wrap).hasClass('nasa-dffr') && $(_wrap).find('label[for]').length) {
            if ($(_this).val() !== '') {
                if (!$(_wrap).hasClass('nasa-actived')) {
                    $(_wrap).addClass('nasa-actived');
                }
                if ($(_wrap).find('.nasa-error').length) {
                    $(_wrap).find('.nasa-error').remove();
                }
            } else {
                var _form_acc = $(_this).parents('form.woocommerce-EditAccountForm').length ? true : false;
                if (!_form_acc) {
                    $(_wrap).removeClass('nasa-actived');
                }
            }
        }
        
        $('.nasa-error').remove();
        $('form.checkout').removeClass('ns-validated-first');
    });

    /**
     * Change Select
     */
    $('body').on('change', '#main-content .form-row select', function () {
        var _this = $(this);
        var _wrap = $(_this).parents('.form-row');

        if ($(_wrap).length && !$(_wrap).hasClass('nasa-dffr') && $(_wrap).find('label[for]').length) {
            if ($(_this).val() !== '') {
                if (!$(_wrap).hasClass('nasa-actived')) {
                    $(_wrap).addClass('nasa-actived');
                }

                if ($(_wrap).find('.nasa-error').length) {
                    $(_wrap).find('.nasa-error').remove();
                }
            } else {
                var _form_acc = $(_this).parents('form.woocommerce-EditAccountForm').length ? true : false;
                if (!_form_acc) {
                    $(_wrap).removeClass('nasa-actived');
                }
            }
        }
        
        $('.nasa-error').remove();
        $('form.checkout').removeClass('ns-validated-first');
    });
    
    /**
     * Move validate notices
     */
    $('body').on('nasa_move_valiate_notices', function() {
        nasa_move_valiate_notices($);
    }).trigger('nasa_move_valiate_notices');

    $('body').on('checkout_error', function () {
        $('body').trigger('nasa_move_valiate_notices');
    });

    /**
     * Applied Coupon - Checkout
     */
    $('body').on('applied_coupon_in_checkout', function () {
        $('body').trigger('nasa_move_valiate_notices');
        
        if ($('.coupon-clone-wrap').length) {
            $('.woocommerce-error, .woocommerce-message').hide();
            _apply_coupon = true;
        }
    });
    
    /**
     * Removed Coupon - Checkout
     */
    $('body').on('removed_coupon_in_checkout', function () {
        if ($('.coupon-clone-wrap').length) {
            $('.woocommerce-error, .woocommerce-message').hide();
            _apply_coupon = true;
        }
    });

    /**
     * Show Coupon - hide error
     */
    $('body').on('click', '.showcoupon', function () {
        if ($('.woocommerce-error').length) {
            $('.woocommerce-error').hide();
        }
    });
    
    /**
     * Next - Prev => Shipping Step
     */
    $('body').on('click', '.nasa-shipping-step', function () {
        var _form = $('form.checkout');

        if ($(_form).length <= 0) {
            return false;
        }

        if (!$(_form).hasClass('ns-validating')) {
            if (!$('.nasa-bc-modern .nasa-shipping-step').hasClass('active')) {
                var _valid = nasa_validate_form_checkout($);

                if (_valid) {
                    $('body').trigger('nasa_update_custommer_info');

                    $('.woocommerce-additional-fields').fadeIn(200);
                    $('#nasa-billing-info').fadeIn(200);
                    $('#nasa-shipping-methods').fadeIn(200);
                    $('#nasa-step_payment').fadeIn(200);

                    $('#ns-checkout-contact').hide();
                    $('.woo-billing').hide();
                    $('#nasa-step_billing').hide();
                    $('#nasa-payment-wrap').hide();
                    $('#nasa-billing-detail-wrap').hide();

                    if ($('.woocommerce-form-login-toggle').length) {
                        $('.woocommerce-form-login-toggle').hide();
                        $('.woocommerce-form-login').hide();
                    }

                    $('.nasa-bc-modern .nasa-billing-step').removeClass('active');
                    $('.nasa-bc-modern .nasa-shipping-step').addClass('active');
                    $('.nasa-bc-modern .nasa-payment-step').removeClass('active');
                }  else {
                    if ($(this).parents('.nasa-checkout-step').find('.nasa-back-step').length) {
                        $(this).parents('.nasa-checkout-step').find('.nasa-back-step').trigger('click');
                    }
                }
            }
        }
    });
    
    /**
     * Next - Prev => Payment Step
     */
    $('body').on('click', '.nasa-payment-step', function() {
        var _form = $('form.checkout');

        if ($(_form).length <= 0) {
            return false;
        }

        if (!$(_form).hasClass('ns-validating')) {
            if (!$('.nasa-bc-modern .nasa-payment-step').hasClass('active')) {
                var _valid = nasa_validate_form_checkout($);

                if (_valid) {
                    $('body').trigger('nasa_update_custommer_info');

                    $('#nasa-payment-wrap').fadeIn(200);
                    $('#nasa-billing-info').fadeIn(200);
                    $('#nasa-billing-detail-wrap').fadeIn(200);

                    $('#ns-checkout-contact').hide();
                    $('.woocommerce-additional-fields').hide();
                    $('.woo-billing').hide();
                    $('#nasa-shipping-methods').hide();
                    $('#nasa-step_payment').hide();
                    $('#nasa-step_billing').hide();

                    if ($('.woocommerce-form-login-toggle').length) {
                        $('.woocommerce-form-login-toggle').hide();
                        $('.woocommerce-form-login').hide();
                    }

                    $('#nasa-billing-info .customer-info').removeClass('hidden-tag');

                    $('.nasa-bc-modern .nasa-billing-step').removeClass('active');
                    $('.nasa-bc-modern .nasa-shipping-step').removeClass('active');
                    $('.nasa-bc-modern .nasa-payment-step').addClass('active');

                    if ($('#nasa-payment-wrap .ns-bottom_place_order').length <= 0) {
                        var _place_order = $('#nasa-payment-wrap .place-order');
                        var _btn = $(_place_order).find('#place_order');

                        $(_place_order).append('<div class="ns-bottom_place_order"></div>');
                        $(_place_order).find('.ns-bottom_place_order').append(_btn);
                    }

                } else {
                    if ($(this).parents('.nasa-checkout-step').find('.nasa-back-step').length) {
                        $(this).parents('.nasa-checkout-step').find('.nasa-back-step').trigger('click');
                    }
                }
            }
        }
    });
    
    /**
     * Next - Prev => Billing Step
     */
    $('body').on('click', '.nasa-billing-step', function() {
        var _form = $('form.checkout');

        if ($(_form).length <= 0) {
            return false;
        }

        if (!$(_form).hasClass('ns-validating')) {
            if (!$('.nasa-bc-modern .nasa-billing-step').hasClass('active')) {

                $('body').trigger('nasa_update_custommer_info');

                $('#ns-checkout-contact').fadeIn(200);
                $('.woo-billing').fadeIn(200);
                $('#nasa-step_billing').fadeIn(200);

                if ($('.woocommerce-form-login-toggle').length) {
                    $('.woocommerce-form-login-toggle').fadeIn(200);
                }

                $('.woocommerce-additional-fields').hide();
                $('#nasa-billing-info').hide();
                $('#nasa-shipping-methods').hide();
                $('#nasa-step_payment').hide();
                $('#nasa-payment-wrap').hide();
                $('#nasa-billing-detail-wrap').hide();

                $('.nasa-bc-modern .nasa-billing-step').addClass('active');
                $('.nasa-bc-modern .nasa-shipping-step').removeClass('active');
                $('.nasa-bc-modern .nasa-payment-step').removeClass('active');
            }
        }
    });
    
    $('body').on('click', '.showcoupon-clone', function() {
        $('.coupon-clone-wrap').toggleClass('hidden-tag');
        $('.coupon-clone-wrap').find(':input:eq(0)').trigger('focus');
        var _ns_add_cp = $('.ns-add-coupon');
        if($(_ns_add_cp).hasClass('cp-open')) {
            $(_ns_add_cp).text($(_ns_add_cp).attr('data-add')).removeClass('cp-open');
        } else {
            $(_ns_add_cp).text($(_ns_add_cp).attr('data-close')).addClass('cp-open');
        }
    });
    
    $('body').on('click', '#apply_coupon_clone', function() {
        if ($('input[name="coupon_code_clone"]').length && $('form.checkout_coupon input[name="coupon_code"]').length) {
            $('.woocommerce-error, .woocommerce-message').hide();
            
            var _coupon = $('input[name="coupon_code_clone"]').val();
            
            $('form.checkout_coupon input[name="coupon_code"]').val(_coupon).trigger('change');
            $('form.checkout_coupon').trigger('submit');
            $('.woocommerce-checkout-review-order').addClass('processing');
        }
    });
    
    $('body').on('change', 'select.shipping_method, input[name^="shipping_method"], #ship-to-different-address input, .update_totals_on_change select, .update_totals_on_change input[type="radio"], .update_totals_on_change input[type="checkbox"]', function() {
        if ($('.checkout-modern-wrap').length && !$('.woocommerce-checkout-review-order').hasClass('processing')) {
            $('.woocommerce-checkout-review-order').addClass('processing');
        }
    });
    
    $('body').on('nasa_update_custommer_info', function() {
        if ($('#payment .form-row').length) {
            $('#payment .form-row').removeClass('form-row');
        }
        
        $('.woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message').remove();
        
        nasa_validate_form_checkout_post($);
        
        $('body').trigger('update_checkout');
        
        if ($('#nasa-billing-info').length) {
            var _email = $('input[name="billing_email"]').val();
            $('#nasa-billing-info .customer-info-email .customer-info-right').html(_email);
        }
    });
    
    $('body').on('updated_checkout', function() {
        if ($('.checkout-modern-wrap').length) {
            $('.processing').removeClass('processing');

            nasa_update_shipping_methods($);

            if ($('.checkout-modern-wrap .woocommerce-additional-fields').length && $('#nasa-shipping-methods').length) {
                var _note = $('.checkout-modern-wrap .woocommerce-additional-fields').clone();

                $('.checkout-modern-wrap .woocommerce-additional-fields').remove();
                $('#nasa-shipping-methods').after(_note);
            }
            
            if (_apply_coupon) {
                nasa_clone_notices_coupon($);

                /**
                 * Render Coupon
                 */
                if ($('.woocommerce-error').length && $('.coupon-clone-wrap').length) {
                    $('.coupon-clone-wrap').find(':input:eq(0)').trigger('focus');
                }
            }

            _apply_coupon = false;
        }
    });
    
    $('body').on('click', '.your-order-mobile', function() {
        if ($('.checkout-modern-right-wrap').length && !$('.checkout-modern-right-wrap').hasClass('nasa-active')) {
            $('.checkout-modern-right-wrap').addClass('nasa-active');
        }
    });
    
    $('body').on('click', '.close-your-order-mobile', function() {
        if ($('.checkout-modern-right-wrap').length) {
            $('.checkout-modern-right-wrap').removeClass('nasa-active');
        }
    });
    
    nasa_render_shipping_in_cart($);
    
    if ($('.woocommerce-notices-wrapper').length) {
        $('.woocommerce-notices-wrapper').each(function() {
            var _this = $(this);
            
            if ($(_this).find('.cart-empty').length) {
                var _cart_empty = $(_this).find('.cart-empty');
                $(_this).after(_cart_empty);
            }

            if ($(_this).find('*').length && $(_this).find('.nasa-close-notice').length <= 0) {
                $(_this).append('<a class="nasa-close-notice" href="javascript:void(0);"></a>');
            }
        });
    }
    
    $('body').on('updated_wc_div', function() {
        nasa_render_shipping_in_cart($);
        
        if ($('.woocommerce-notices-wrapper').length) {
            $('.woocommerce-notices-wrapper').each(function() {
                var _this = $(this);
                
                if ($(_this).find('.cart-empty').length) {
                    var _cart_empty = $(_this).find('.cart-empty');
                    $(_this).after(_cart_empty);
                }

                if ($(_this).find('*').length && $(_this).find('.nasa-close-notice').length <= 0) {
                    $(_this).append('<a class="nasa-close-notice" href="javascript:void(0);"></a>');
                }
            });
        }
    });
    
    /**
     * Auto Update - Cart
     */
    $('body').on('change', '.nasa-shopping-cart-form.qty-auto-update .quantity .qty', function() {
        var _form = $(this).parents('.nasa-shopping-cart-form');
        var _btn = $(_form).find('[name=update_cart]');
        
        if ($(_btn).length) {
            $(_btn).prop('disabled', false).trigger('click');
        }
    });
    
    /**
     * Update Quantity Checkout Page
     */
    $('body').on('change', '.co-wrap-item .qty', function(e) {
        if (
            typeof nasa_ajax_params !== 'undefined' &&
            typeof nasa_ajax_params.wc_ajax_url !== 'undefined'
        ) {
            var _urlAjax = nasa_ajax_params.wc_ajax_url.toString().replace('%%endpoint%%', 'nasa_quantity_mini_cart');
            var _input = $(this);
            var _wrap = $(_input).parents('.shop_table');
            var _hash = $(_input).attr('name').replace(/cart\[([\w]+)\]\[qty\]/g, "$1");
            var _max = parseFloat($(_input).attr('max'));
            if (!_max) {
                _max = false;
            }

            var _quantity = parseFloat($(_input).val());

            var _old_val = parseFloat($(_input).attr('data-old'));
            if (!_old_val) {
                _old_val = _quantity;
            }

            if (_max > 0 && _quantity > _max) {
                $(_input).val(_max);
                _quantity = _max;
            }

            if (_old_val !== _quantity) {
                var _confirm = true;
                
                if (_quantity <= 0) {
                    var _confirm_text = $('input[name="nasa_change_value_0"]').length ? $('input[name="nasa_change_value_0"]').val() : 'Are you sure you want to remove it?';
                    _confirm = confirm(_confirm_text);
                }
                
                if (_confirm) {
                    $.ajax({
                        url: _urlAjax,
                        type: 'post',
                        dataType: 'json',
                        cache: false,
                        data: {
                            hash: _hash,
                            quantity: _quantity,
                            'no-mess': 1
                        },
                        beforeSend: function () {
                            if (!$(_wrap).hasClass('processing')) {
                                $(_wrap).addClass('processing');
                            }
                        },
                        success: function (data) {
                            if (data && data.fragments) {

                                $.each(data.fragments, function(key, value) {
                                    if ($(key).length) {
                                        $(key).replaceWith(value);
                                    }
                                });

                                // $('body').trigger('added_to_cart', [data.fragments, data.cart_hash]);
                                $('body').trigger('wc_fragments_refreshed');

                                /**
                                 * notification free shipping
                                 */
                                $('body').trigger('nasa_init_shipping_free_notification');

                                if (data.url_redirect) {
                                    window.location.href = data.url_redirect;
                                } else {
                                    $('body').trigger('update_checkout');
                                }
                            }
                        },
                        error: function () {
                            $(document.body).trigger('wc_fragments_ajax_error');
                            $(_wrap).removeClass('processing');
                        }
                    });
                } else {
                    $(_input).val(_old_val);
                }
            }
        }

        e.preventDefault();
    });
    
    /**
     * Contact Information
     */
    $('body').on('nasa_update_checkout_contact_info', function() {
        nasa_update_checkout_contact_info($);
    }).trigger('nasa_update_checkout_contact_info');
    
    /**
     * Show Optional Field
     */
    $('body').on('click', '.form-row .add-field', function() {
        var _this = $(this);
        var _target = $(_this).attr('data-target');
        var _wrap = $(_this).parents('.form-row');
        
        if ($('#' + _target).length) {
            $('#' + _target).slideDown(250);
        }
        
        $(_wrap).slideUp(200);
    });
    
    if ($('.form-row .add-field').length) {
        $('.form-row .add-field').each(function() {
            var _this = $(this);
            var _target = $(_this).attr('data-target');
            
            if ($('#' + _target).length) {
                if ($('#' + _target).find('input').length && '' !== $('#' + _target).find('input').val()) {
                    $(_this).trigger('click');
                }
            }
        });
    }
    
    /**
     * Billing Detail
     * 
     * @param {type} $
     * @returns {undefined}
     */
    $('body').on('change', 'input[name="ns-billing-select"]', function() {
        if ($(this).val() === 'different') {
            $('.ns-different-shipping .woocommerce-billing-fields').slideDown(300);
        } else {
            $('.ns-different-shipping .woocommerce-billing-fields').slideUp(300);
        }
        
        $('body').trigger('country_to_state_changed');
    });
    
    /*
     * Off Canvas my account
     */
    $('body').on('nasa_account_init',function(){
        if($('.nasa-mobile-menu_toggle').length && $('#content').find('.account-nav-wrap').length){
            $('.nasa-mobile-menu_toggle').addClass('toggle-sidebar-my-account').removeClass('nasa-mobile-menu_toggle');
        }
    }).trigger('nasa_account_init');

    $('body').on('ns_header_responsive_loaded',function(){
        $('body').trigger('nasa_account_init');
    });

    $('body').on('click', '.toggle-sidebar-my-account', function() {
        if ($('.account-nav-wrap .nasa-close-menu-mobile').length <= 0) {
            var _close ='<a href="javascript:void(0);" title="Close" class="nasa-close-menu-mobile" rel="nofollow"></a>';
            $('.account-nav-wrap').append( _close);
        }

        $('.account-nav-wrap').addClass('nasa-active');

        var log_out = $('.account-nav-wrap.vertical-tabs .woocommerce-MyAccount-navigation-link--customer-logout');

        if ($('.ns-ul-customer-logout').length <= 0){
            $('.account-nav-wrap.vertical-tabs').append('<ul class="ns-ul-customer-logout woocommerce-MyAccount-navigation"></ul>');
            $('.account-nav-wrap.vertical-tabs .ns-ul-customer-logout').append(log_out);
        }
    });

    $('body').on('click','.checkout-modern-wrap .woocommerce-form-login-toggle .showlogin',function() {
        var form = $('.checkout-modern-wrap .woocommerce-form-login');
 
        if($(form).length && $(form).find('.woocommerce-form-login-close').length <= 0) {
            $(form).prepend('<a class="woocommerce-form-login-close nasa-stclose" href="javascript:void(0);" title="Close" rel="nofollow"></a>');
           }
    
           if($(form).hasClass('nasa-active')) {
                $(form).removeClass('nasa-active');
                $('.black-window').fadeOut(200).removeClass('desk-window');
           } else {
                $(form).addClass('nasa-active');
                $('.black-window').fadeIn(200).removeClass('nasa-transparent').addClass('desk-window');
           }
     });


     $('body').on('fix-top_wp_admin',function() {
        var _checkout_m = $('.checkout-modern-wrap');
        if ($('body').hasClass('nasa-in-mobile') && $(_checkout_m).length) {
            var nasa_bc_modern = $(_checkout_m).find('.nasa-bc-modern');
            var fix_top = $('#wpadminbar').length ? $('#wpadminbar').height() : 0;

            if (fix_top > 0) {
                $(nasa_bc_modern).css({top: fix_top});
            }
               
        }
     }).trigger('fix-top_wp_admin');

    $('body').on('click','.checkout-modern-wrap .woocommerce-form-login .woocommerce-form-login-close',function() {
        $('.checkout-modern-wrap .woocommerce-form-login-toggle .showlogin').trigger('click');
    });

    $('body').on('click','.nasa-back_to_cart',function(e){
        if ($('body').hasClass('nasa-in-mobile')) {
            e.preventDefault();
            if (!$('body').hasClass('woocommerce-cart') && $('form.woocommerce-cart-form').length <= 0) {
                $('.black-window').fadeIn(200).addClass('desk-window');
    
                if (!$('body').hasClass('m-ovhd')) {
                    $('body').addClass('m-ovhd');
                }
    
                if ($('#cart-sidebar').length && !$('#cart-sidebar').hasClass('nasa-active')) {
                    $('#cart-sidebar').addClass('nasa-active');
    
                    if ($('#cart-sidebar').find('input[name="nasa-mini-cart-empty-content"]').length) {
                        $('#cart-sidebar').append('<div class="nasa-loader"></div>');
    
                        $('body').trigger('wc_fragment_refresh');
                    }
    
                    /**
                     * notification free shipping
                     */
                    else {
                        init_shipping_free_notification($);
                    }
                }
    
                $('body').trigger('nasa_opened_cart_sidebar');
    
                if ($('.nasa-close-notice').length) {
                    $('.nasa-close-notice').trigger('click');
                }
    
                $('body').trigger('mini_cart_mobile_layout_change');
            }
        }
    });

    /* End Document Ready */
});

/**
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_render_shipping_in_cart($) {
    if ($('#payment .form-row').length) {
        $('#payment .form-row').removeClass('form-row');
    }
    
    if ($('#shipping_method.hide-check-shipping li').length) {
        $('#shipping_method.hide-check-shipping li').each(function() {
            var _method = $(this);
            
            if (!$(_method).hasClass('active') && $(_method).find('select.shipping_method, input[name^="shipping_method"][type="radio"]:checked, input[name^="shipping_method"][type="hidden"]').length) {
                $(_method).addClass('active');
            }
        });
    }
}

/**
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_update_shipping_methods($) {
    if ($('.shipping-wrap-modern').length && $('.order-shipping-modern').length) {
        
        var _shipping = '';
        var _available = false;
        var _avai_html = '';
        
        $('.shipping-wrap-modern').each(function() {
            var _this = $(this);
            
            if ($(_this).find('#shipping_method').length) {
                var _p_name = $(_this).find('.shipping-package-name').html();

                _shipping += '<tr class="order-shipping-modern woocommerce-shipping-totals shipping">';

                /**
                 * Shipping Pagckage Name
                 */
                _shipping += '<th>' + _p_name + '</th>';

                _shipping += '<td>';
                
                /**
                 * Shipping Methods
                 */
                _shipping += '<ul id="shipping_method_clone" class="woocommerce-shipping-methods-clone">';

                $(_this).find('#shipping_method li').each(function() {
                    var _method = $(this);
                    if ($(_method).find('select.shipping_method, input[name^="shipping_method"][type="radio"]:checked, input[name^="shipping_method"][type="hidden"]').length) {
                        var _used = _method.clone();
                        $(_used).find('select.shipping_method, input[name^="shipping_method"][type="radio"]:checked, input[name^="shipping_method"][type="hidden"], button, .button, script, #lpc_layer_error_message').remove();
                        _avai_html = $(_used).html();
                        _shipping += '<li>' + _avai_html + '</li>';

                        _available = true;
                    }
                });

                _shipping += '</ul>';

                _shipping += '</td></tr>';
            } else {
                $('#nasa-billing-info .customer-info-method').remove();
            }
        });
        
        if (_available) {
            $('.order-shipping-modern').replaceWith(_shipping);
            $('#nasa-billing-info .customer-info-method .customer-info-right').html(_avai_html);
        }
    }
    
    $('.woocommerce-checkout-review-order-table').addClass('nasa-loaded');
}

/**
 * Move validate notices
 * 
 * @param {type} $
 * @returns {String}
 */
function nasa_move_valiate_notices($) {
    if ($('.woocommerce-error li').length) {
        $('.woocommerce-error li').each(function () {
            var _li = $(this);
            var _this = $(_li).attr('data-id');
            if (typeof _this !== 'undefined' && $('#' + _this).length) {
                var _wrap = $('#' + _this).parents('.form-row');
                if ($(_wrap).length) {
                    var _appent = $(_li).html();
                    if ($(_wrap).find('.nasa-error').length) {
                        $(_wrap).find('.nasa-error').html(_appent);
                    } else {
                        if ($('#' + _this).parents('.woocommerce-input-wrapper').length) {
                            $('#' + _this).parents('.woocommerce-input-wrapper').append('<span class="nasa-error">' + _appent + '</span>');
                        } else {
                            $('#' + _this).after('<span class="nasa-error">' + _appent + '</span>');
                        }
                    }

                    if (!$(_wrap).hasClass('woocommerce-invalid')) {
                        $(_wrap).removeClass('woocommerce-validated');
                        $(_wrap).addClass('woocommerce-invalid');
                    }

                    $(_li).remove();
                }
            }
        });

        if ($('.woocommerce-error li').length) {
            $('.woocommerce-error').show();
        } else {
            $('.woocommerce-error').hide();
        }
    }
}

/**
 * 
 * @param {type} $
 * @returns {Boolean}
 */
function nasa_validate_form_checkout($) {
    var _form = $('form.checkout');

    if ($(_form).length <= 0) {
        return false;
    }
    
    var _diffirent = $(_form).find('[name="ship_to_different_address"]').is(':checked') ? true : false;
    
    var _wrap = !_diffirent ? $(_form).find('.woocommerce-billing-fields') : $(_form).find('#customer_details');

    $(_wrap).find('.form-row').each(function () {
        nasa_validate_field($, this);
    });
    
    var _validate_ns = true;
    if ($('#ns-checkout-contact').length) {
        $('#ns-checkout-contact').find('.form-row').each(function () {
            nasa_validate_field($, this);
        });
        
        _validate_ns = $('#ns-checkout-contact').find('.nasa-invalid, .nasa-error').length ? false : true;
    }
    
    var _validate_woo = $(_wrap).find('.nasa-invalid, .nasa-error').length ? false : true;
    
    return _validate_ns && _validate_woo ? true : false;
}

/**
 * Validate - Client
 * 
 * @param {type} $
 * @param {type} _form_row
 * @returns {Boolean}
 */
function nasa_validate_field($, _form_row) {
    var $this = $(_form_row).find('.input-text, select, input:checkbox'),
        validated = true,
        validate_required = $(_form_row).is('.validate-required'),
        validate_email = $(_form_row).is('.validate-email'),
        validate_phone = $(_form_row).is('.validate-phone'),
        pattern = '',
        _note = '';

    /**
     * For Create account with Password
     */
    var _wrap_acc = $(_form_row).parents('.woocommerce-account-fields');
    if (
        $(_wrap_acc).length &&
        $(_wrap_acc).find('#createaccount').length &&
        !$(_wrap_acc).find('#createaccount').is(':checked')
    ) {
        validate_required = false;
    }
    
    // if ($(_form_row).css('display') === 'none') {
    if ($(_form_row).is(":hidden")) {
        validate_required = false;
    }

    $(_form_row).removeClass('nasa-invalid');
        
    if (validate_required) {
        
        if ('checkbox' === $this.attr('type') && !$this.is(':checked')) {
            $(_form_row).removeClass('woocommerce-validated').addClass('woocommerce-invalid woocommerce-invalid-required-field');
            validated = false;
            
            if ($(_form_row).find('.nasa-error').length <= 0) {
                _note = $('.nasa-require-notice').html();
                
                if ($($this).parents('.woocommerce-input-wrapper').length) {
                    $($this).parents('.woocommerce-input-wrapper').append('<span class="nasa-error">' + _note + '</span>');
                } else {
                    $($this).after('<span class="nasa-error">' + _note + '</span>');
                }
            }
        } else if ($this.val() === '') {
            $(_form_row).removeClass('woocommerce-validated').addClass('woocommerce-invalid woocommerce-invalid-required-field');
            validated = false;
            
            if ($(_form_row).find('.nasa-error').length <= 0) {
                _note = $('.nasa-require-notice').html();
                
                if ($($this).parents('.woocommerce-input-wrapper').length) {
                    $($this).parents('.woocommerce-input-wrapper').append('<span class="nasa-error">' + _note + '</span>');
                } else {
                    $($this).after('<span class="nasa-error">' + _note + '</span>');
                }
            }
        }
    }

    if (validate_email) {
        if ($this.val()) {
            /* https://stackoverflow.com/questions/2855865/jquery-validate-e-mail-address-regex */
            pattern = new RegExp(/^([a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+(\.[a-z\d!#$%&'*+\-\/=?^_`{|}~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]+)*|"((([ \t]*\r\n)?[ \t]+)?([\x01-\x08\x0b\x0c\x0e-\x1f\x7f\x21\x23-\x5b\x5d-\x7e\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|\\[\x01-\x09\x0b\x0c\x0d-\x7f\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))*(([ \t]*\r\n)?[ \t]+)?")@(([a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[a-z\d\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.)+([a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]|[a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF][a-z\d\-._~\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]*[0-9a-z\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])\.?$/i); // eslint-disable-line max-len

            if (!pattern.test($this.val())) {
                $(_form_row).removeClass('woocommerce-validated').addClass('woocommerce-invalid woocommerce-invalid-email woocommerce-invalid-phone'); // eslint-disable-line max-len
                validated = false;
                
                if ($(_form_row).find('.nasa-error').length <= 0) {
                    _note = $('.nasa-email-notice').html();
                    $($this).after('<span class="nasa-error">' + _note + '</span>');
                }
            }
        }
    }

    if (validate_phone) {
        pattern = new RegExp(/[\s\#0-9_\-\+\/\(\)\.]/g);

        if (0 < $this.val().replace(pattern, '').length) {
            $(_form_row).removeClass('woocommerce-validated').addClass('woocommerce-invalid woocommerce-invalid-phone');
            validated = false;
            
            if ($(_form_row).find('.nasa-error').length <= 0) {
                _note = $('.nasa-phone-notice').html();
                $($this).after('<span class="nasa-error">' + _note + '</span>');
            }
        }
    }

    if (validated) {
        $(_form_row).removeClass('woocommerce-invalid woocommerce-invalid-required-field woocommerce-invalid-email woocommerce-invalid-phone').addClass('woocommerce-validated'); // eslint-disable-line max-len
    } else {
        $(_form_row).addClass('nasa-invalid');
    }
    
    return validated;
}

/**
 * Validate - Server
 * 
 * @param {type} $
 * @returns {Boolean}
 */
function nasa_validate_form_checkout_post($) {
    var _form = $('form.checkout');

    if ($(_form).length <= 0) {
        return false;
    }
    
    if (!$(_form).hasClass('ns-validating')) {
        if (
            !$(_form).hasClass('ns-validated-first') &&
            typeof nasa_ajax_params !== 'undefined' &&
            typeof nasa_ajax_params.wc_ajax_url !== 'undefined'
        ) {
            var _urlAjax = nasa_ajax_params.wc_ajax_url.toString().replace('%%endpoint%%', 'nasa_validate_checkout_modern');
            $.ajax({
                url: _urlAjax,
                type: 'post',
                dataType: 'json',
                cache: false,
                data: _form.serialize(),
                beforeSend: function () {
                    if (!$(_form).hasClass('ns-validating')) {
                        $(_form).addClass('ns-validating');
                    }
                    
                    $('.woocommerce-billing-fields .nasa-error, .woocommerce-shipping-fields .nasa-error, .ns-shipping-first .woocommerce-shipping-fields .nasa-error').remove();
                },
                success: function (result) {
                    $(_form).removeClass('ns-validating');
                    
                    if ('failure' === result.result) {
                        if (result.messages) {
                            $('.woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message').remove();
                            $(_form).prepend('<div class="woocommerce-NoticeGroup woocommerce-NoticeGroup-checkout">' + result.messages + '</div>');
                            $(document.body).trigger('checkout_error', [result.messages]);
                            
                            if ($('.ns-shipping-first .woocommerce-shipping-fields .nasa-error').length) {
                                $('.nasa-bc-modern .nasa-billing-step').trigger('click');
                            } else if ($('.woocommerce-billing-fields .nasa-error, .woocommerce-shipping-fields .nasa-error').length) {
                                $('.nasa-bc-modern .nasa-billing-step').trigger('click');
                            }
                        }
                    } else {
                        $(_form).addClass('ns-validated-first');
                        $('.woocommerce-NoticeGroup-checkout, .woocommerce-error, .woocommerce-message').remove();
                    }
                },
                error: function () {
                    $(_form).removeClass('ns-validating');
                }
            });
        }
    }
}

/**
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_clone_notices_coupon($) {
    if ($('.coupon-clone-wrap').length && $('.woocommerce-error, .woocommerce-message').length) {
        $('.woocommerce-error, .woocommerce-message').each(function() {
            var _this = $(this);
            $('.coupon-clone-wrap').after(_this);
        });
        
        $('.woocommerce-error, .woocommerce-message').show();
    }
}

/**
 * Contact Information
 * 
 * @param {type} $
 * @returns {undefined}
 */
function nasa_update_checkout_contact_info($) {
    if ($('.checkout-modern-wrap').length) {
    
        if ($('#ns-checkout-contact').length) {

            if ($('#billing_email_field').length && $('.nasa-email-field').length) {
                $('.nasa-email-field').replaceWith($('#billing_email_field'));
            }

            if ($('#customer_details .woocommerce-account-fields').length && $('#ns-checkout-contact .form-row-wrap').length) {
                $('#ns-checkout-contact .form-row-wrap').append($('#customer_details .woocommerce-account-fields'));
            }
        }

        var _label, _clk;
        
        if ($('#billing_company_field').length && !$('#billing_company_field').hasClass('validate-required')) {
            _label = $('#billing_company_field').find('label').clone();
            _clk = '<p class="form-row form-row-wide no-underline form-row-add-field"><a class="add-field nasa-flex" data-target="billing_company_field" href="javascript:void(0);"><i class="pe-7s-plus"></i>&nbsp;' + $(_label).text() + '</a></p>';

            $('#billing_company_field').before(_clk);
        }

        if ($('#shipping_company_field').length && !$('#shipping_company_field').hasClass('validate-required')) {
            _label = $('#shipping_company_field').find('label').clone();
            _clk = '<p class="form-row form-row-wide no-underline form-row-add-field"><a class="add-field nasa-flex" data-target="shipping_company_field" href="javascript:void(0);"><i class="pe-7s-plus"></i>&nbsp;' + $(_label).text() + '</a></p>';

            $('#shipping_company_field').before(_clk);
        }
        
        if ($('.ns-shipping-first .woocommerce-billing-fields').length && $('#nasa-billing-detail-wrap .woocommerce-billing-fields').length) {
            $('#nasa-billing-detail-wrap .woocommerce-billing-fields').replaceWith($('.ns-shipping-first .woocommerce-billing-fields'));
            
            $('body').trigger('country_to_state_changed');
        }
    }
}