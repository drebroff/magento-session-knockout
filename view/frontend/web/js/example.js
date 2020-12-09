define([
        "jquery"
    ], function(Component){
        "use strict";
    return Component.extend({
        defaults: {
            template: 'Funami_Session/hello'
        },
        megaAlert: function () {
            alert(config.message);

        }
    });
    }
)
