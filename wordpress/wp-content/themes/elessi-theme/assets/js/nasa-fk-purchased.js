var _is_pause = false,
    _intival ,
    time = 0;
/* Document ready */
jQuery(document).ready(function($) {
    "use strict";
    
    if (
        $('#ns-sale-notification-tml').length &&
        typeof ns_fkp !== 'undefined' &&
        ns_fkp &&
        typeof ns_fkp_count !== 'undefined' &&
        ns_fkp_count
    ) {
        /**
         * Boot Sale vitual
         */
        if (!$('body').hasClass('nasa-in-mobile')) {
            var kb = 0;
            var time_interval = 16000;
            
            // nasa_boot_sale_intival($, ns_fkp[kb]);

            nasa_boot_sale_intival_countdown($, ns_fkp, kb, ns_fkp_count, time_interval);

            $('body').on('click', '.close-noti', function () {
                clearInterval(_intival);
                $('.ns-sale-notification').removeClass('nasa-active');
                kb = kb >= ns_fkp_count-1 ? 0 : kb + 1;
                time = 0;
                _is_pause = false;
                nasa_boot_sale_intival_countdown($, ns_fkp, kb, ns_fkp_count, time_interval);
            });

            $('body').on('mouseenter', '.ns-sale-notification', function() {
                if ($('.ns-sale-notification').hasClass('nasa-active')) {
                    _is_pause = true;
                }
            }).on('mouseleave', '.ns-sale-notification', function() {
                if ($('.ns-sale-notification').hasClass('nasa-active')) {
                    _is_pause = false;
                }
            });

        }
    }
});

/* End Document Ready */
function nasa_boot_sale_intival_countdown($, ns_fkp, kb, ns_fkp_count, time_interval) {
    if (!_is_pause) {
        time = 0;
    }
    
    _intival = setInterval(function() {  
        if (!_is_pause) {
            time = time + 100;  
            if (time >= time_interval/2) {
                $('.ns-sale-notification').removeClass('nasa-active');
                
                $('body').trigger('nasa_boot_sale_off');
            }

            if (time >= time_interval) {
                kb = kb >= ns_fkp_count-1 ? 0 : kb + 1;
                nasa_boot_sale_intival($, ns_fkp[kb]);
                time = 0;
            }
        }
    }, 100);
}

function nasa_boot_sale_intival($, fkb) {
    if ($('.ns-sale-notification').length <= 0) {
        $('body').append('<div class="ns-sale-notification"></div>');
    }
    
    if (typeof fkb !== 'undefined') {
        var _content = $('#ns-sale-notification-tml').html();

        _content = _content.replace(/{{p_name}}/g, fkb['p_name']);
        _content = _content.replace(/{{src_img}}/g, fkb['src_img']);
        _content = _content.replace(/{{customer}}/g, fkb['customer']);
        _content = _content.replace(/{{p_url}}/g, fkb['p_url']);
        _content = _content.replace(/{{time_purchase}}/g, fkb['time_purchase']);
        _content = _content.replace(/{{p_data_prod}}/g, fkb['p_data_prod']);

        $('.ns-sale-notification').html(_content);
        
        if (fkb['p_data_prod'] == 0) {
            $('.ns-sale-notification').find('.ns-noti-link').remove();
        }

        setTimeout(function () {
            $('.ns-sale-notification').addClass('nasa-active');
            
            $('body').trigger('nasa_boot_sale_on');
        }, 100);
    }
}
