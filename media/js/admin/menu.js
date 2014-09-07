var Menu = (function() {
    var defaults = {};

    function Menu() {
        this.params = {};
    };
    
    Menu.prototype.init = function(options)
    {
        this.params = $.extend(defaults, options);
        
       
    };
    return new Menu();
})();
$(document).ready(function() {
    Menu.init();
});