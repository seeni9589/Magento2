/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */
/*jshint browser:true jquery:true*/
/*global alert*/
define([
    "jquery",
    'ko',
    'uiComponent',
    'Magento_Ui/js/modal/alert',
    "jquery/ui",
    "mage/translate",
    "mage/mage",
    "mage/validation"
], function ($, ko, Component, alert, mage) {
    "use strict";
    
    return Component.extend({
        defaults: {
            msgSaved: false,
            template: 'Smart_Feedback/feedback',
        },
        /** Initialize observable properties */
        initObservable: function () {
            this._super()
                    .observe('msgSaved')
                    ;
                    this.uname = ko.observable('');
                    this.email = ko.observable('');
                    this.phone = ko.observable('');
                    this.msg = ko.observable('');
            return this;
        },
        /**
         * Validate feedback form
         */
        validateForm: function () {
            var form = '#feedback-form';
            return $(form).validation() && $(form).validation('isValid');
        },
        submitFeedback: function () {
            /* $.ajax(this.getFeedbackUrl).done(
             function() {
             this.msgSaved(true)
             }.bind(this)
             );*/
            if (!this.validateForm()) {
             return;
             }
            var data = {'name':this.uname(),'email':this.email(),'phone':this.phone(),'message':this.msg(),'status':0};
           // if(this.validateForm()){
                 
           // }
           console.log(data);
            $.ajax({
                url: this.getFeedbackUrl,
                data: data,
                type: 'post',
                dataType: 'json',
                context: this,
                beforeSend: this._ajaxBeforeSend,
                success: function (response) {
                    this.msgSaved(true);
                    alert({
                        content: $.mage.__('Thanks for Submitting.')
                    });
                },
                complete: this._ajaxComplete
            });
        }
    });
}
);
