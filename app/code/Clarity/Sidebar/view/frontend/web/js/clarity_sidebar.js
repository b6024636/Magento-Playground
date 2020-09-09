define([
    "jquery",
    'Magento_Ui/js/modal/alert',
    "jquery/ui",
], function ($, alert) {
    'use strict';
    console.log('test');

    $('.custom-sidebar').click(function(){
       $(this).toggleClass('show');
       console.log('hello');
    });

});