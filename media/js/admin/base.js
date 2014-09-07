var Admin = (function() {
    var defaults = {};

    function Admin() {
        this.params = {};
    };
    
    Admin.prototype.init = function(options)
    {
        this.params = $.extend(defaults, options);

        $('.admin-delete').die('click');
        $('.admin-delete').live('click', function() {
            if(!confirm($(this).data('question'))) {
                return false;
            }
        });

    };
    
    return new Admin();
})();
$(document).ready(function() {
    Metronic.init();
    Layout.init();
    TableAjax.init();
    Admin.init();
});