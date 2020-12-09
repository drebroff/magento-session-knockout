define(['ko', 'uiComponent'], function(ko, Component) {
    'use strict';

    return Component.extend({
        defaults: {
            exampleMessage: 'Hello?',
            exampleMessage2: 'Hello?',
            spamFlavor: 'msg',

            template: 'Funami_Session/test'
        },

        initialize: function() {
            this._super();
            console.log(this.exampleMessage2);
            this.message = ko.observable(this.exampleMessage);
            this.wantsSpam = ko.observable(true);
            this.spamFlavor = ko.observable("almond");

            // console.log(this.message);

        }
    });
});
