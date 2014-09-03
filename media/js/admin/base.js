var plantator = {};
var Main = function() {
    var _this = this;
     _this.closeBlock = function(){
         $(this).parent('.error').remove();
     }
     _this.confirm = function(){
           if (!confirm($(this).attr('data-confirm'))) {
                return false;
            }else{
                $(this).parents('form').submit();
            }
     }
     _this.editBotton = function(){
         $(this).parents('.hover-show-hover').find('.show-hover').css('visibility', 'hidden');
         $(this).parents('.hover-show-hover').find('.show-click').css('visibility', 'visible');
         $(this).parents('.hover-show-hover').find('.edit-hidden-click').hide();
         $(this).parents('.hover-show-hover').find('.edit-show-click').val($(this).parents('.hover-show-hover').find('.edit-hidden-click').text()).show();
     }
     _this.saveBotton = function(){
         var form = $(this).parents('form');
            form.append('<input id="FormNameTable" type="text" name="table" style="display:none" value="Category" >');
             $.ajax({
            type: 'POST',
            url: '/admin/ajax/edit',
            data: form.serialize(), 
            success: function(response) {
                response = JSON.parse(response);
                if(response.error){
                       console.log(response);                 
                }else if(response.save == 'ok'){
                   $('#FormNameTable').remove();
                   $(form).find('.show-hover').css('visibility', 'visible');
                   $(form).find('.show-click').css('visibility', 'hidden');
                   $(form).find('.edit-hidden-click').text(form.find('.edit-show-click').val()).show();
                   $(form).find('.edit-show-click').hide();
                }
            },
        });
         
     }
     _this.addBotton = function(){
         $(this).parents('.hover-show-hover').find('.show-hover').css('visibility', 'hidden');
         $(this).parents('.hover-show-hover').find('.show-click').css('visibility', 'visible');
         $(this).parents('.hover-show-hover').find('.edit-hidden-click').hide();
         $(this).parents('.hover-show-hover').find('.edit-show-click').val('').attr('placeholder', 'Добавить подкатегорию').show();        
         $(this).parents('.hover-show-hover').find('.save-botton').hide();
         $(this).parents('.hover-show-hover').find('.save-botton-add').show();
         
     }
     _this.addSaveBotton = function(){
         var form = $(this).parents('form');
         form.append('<input id="FormNameTable" type="text" name="table" style="display:none" value="Category" >');
             $.ajax({
            type: 'POST',
            url: '/admin/ajax/add',
            data: form.serialize(), 
            success: function(response) {
                response = JSON.parse(response);
                if(response.error){
                       console.log(response);                 
                }else if(response.save == 'ok'){
                   document.location.href ='';
                }
            },
        });
     }
    _this.init = function() {
        $(document).on('click', '.error a', _this.closeBlock);
        $(document).on('click', '.data-confirm', _this.confirm);
        $(document).on('click', '.edit-botton', _this.editBotton);
        $(document).on('click', '.save-botton', _this.saveBotton);
        $(document).on('click', '.add-botton', _this.addBotton);
        $(document).on('click', '.save-botton-add', _this.addSaveBotton);
        $(document).on('keydown', 'input[type=text]', function(event){if(13==event.keyCode){return false;}});
        $(document).on('keydown', 'textarea', function(event){if(13==event.keyCode){return false;}});
    }
}

$(document).ready(function() {
    plantator.main = new Main();
    plantator.main.init();
})