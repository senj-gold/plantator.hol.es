var Category = (function() {
    var defaults = {};

    function Category() {
        this.params = {};
    };
    
    Category.prototype.create = function()
    {
        var ref = $('#tree').jstree(true),
                sel = ref.get_selected();
        if(!sel.length) { return false; }
        if (sel[0] !== '1' && sel[0] !== '23' && sel[0] !== '24' ) {
            alert('В этой категории запрещенно добавлять категории');
             return false;
        }
        sel = sel[0];
        sel = ref.create_node(sel, {"type":"file"});
        if(sel) {
            ref.edit(sel);
        }
    };
    Category.prototype.rename = function()
    {
        var ref = $('#tree').jstree(true),
            sel = ref.get_selected();
        if(!sel.length) { return false; }
        if (!Number(sel[0])) {
            alert('Это не категория');
            return false;
        }
        sel = sel[0];
        ref.edit(sel);
        
    };
    Category.prototype.delete = function()
    {
            var ref = $('#tree').jstree(true),
                    sel = ref.get_selected();
            if(!sel.length) { return false; }
            if(!Number(sel[0])) {
                alert('Это не категория');
                return false; 
            }
            if (sel[0] === '1' || sel[0] === '23' || sel[0] === '24' ) {
                alert('Этот раздел нельзя удалить. (обратитесь пожалуйста к разработчикам)))');
                 return false;
            }
            if (confirm('Вы действительно хотите удалить категорию и все блюда этой категории?')){
                ref.delete_node(sel);
            }
    };				

    Category.prototype.init = function(options)
    {
        this.params = $.extend(defaults, options);
        
        $("#tree").jstree({
            "core" : {
                "themes" : {
                    "responsive": true
                }, 
                // so that create works
                "check_callback" : true,
                'data' : {
                    'url' : function (node) {
                      return '/admin/category/getList';
                    },
                    'data' : function (node) {
                      return { 'parent' : node.id };
                    }
                }
            },
            "types" : {
                "default" : {
                    "icon" : "fa fa-folder icon-state-warning icon-lg"
                },
                "file" : {
                    "icon" : "fa fa-file icon-state-warning icon-lg"
                }
            },
            "state" : { "key" : "demo3" }/*,
            "plugins" : [ "dnd", "state", "types" ]*/


    })
        .on('rename_node.jstree', function(o, data){
            $.ajax({
                async : false,
                type: 'POST',
                url: "/admin/category/create",
                data : {
                    id : data.node.id.replace("category-",""),
                    type	: data.old === 'New node' ? 'new' : 'rename',
                    parent	: data.node.parent,
                    value	: data.text
                },
                dataType: 'json'
            }).done(
                function(r) {
                    data.instance.refresh();
                    if(r.error ===true) {
                        alert(r.error);
                    }	
                }
            ).fail(
            function(msg){
                data.instance.refresh();
                switch(msg.status){
                    case 403	:
                        alert('Accès refusé.'); break;
                    default	:
                        return true;
                }
            });
        })
        .on(
            'delete_node.jstree',
                function(o, data){
                    $.ajax({
                        async : false,
                        type: 'POST',
                        url: "/admin/category/delete",
                        data : {
                            id : data.node.id.replace("category-","")
                        },
                        dataType: 'json'
                    }).done(
                        function(r) {
                            data.instance.refresh();
                            if(r.error ===true) {
                            	alert(r.error);
                            }	
                        }
                    ).fail(
                    function(msg){
                    	data.instance.refresh();
                        switch(msg.status){
                            case 403	:
                                alert('Accès refusé.'); break;
                            default	:
                            	return true;
                        }
                    });
                });
                $('.menu-url').live('click', function(){
                    document.location.href = $(this).attr('href');
                });
    };
    return new Category();
})();
$(document).ready(function() {
    Category.init();
});