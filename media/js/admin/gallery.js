var Gallery = function(){
    var _this = this;
 
    _this.loadImg = function(){
 
        var ul = $('#upload ul');

            $('#drop a').click(function(){
                // Симулируйте щелчок по кнопке ввода файла
                // для показа диалогового окна браузера файлов
                $(this).parent().find('input').click();
            });

            // Инициализируйте плагин jQuery File Upload
            $('#upload').fileupload({
                // Этот элемент примет выгрузку файла drag/drop
                dropZone: $('#drop'),

                // Эта функция вызывается, когда файл добавляется в очередь;
                // либо через кнопку «browse», либо перетащить/отпустить:
                add: function (e, data) {
                    var tpl = $('<li class="working"><input type="text" value="0" data-width="48" data-height="48"'+
                        ' data-fgColor="#0788a5" data-readOnly="1" data-bgColor="#3e4043" /><p></p><span></span></li>');

                    // Прикрепите имя и размер файла
                    tpl.find('p').text(data.files[0].name)
                                 .append('<i>' + formatFileSize(data.files[0].size) + '</i>');

//                                 console.log(data.files[0]);
                    // Добавьте HTML к элементу UL
                    data.context =ul.prepend(tpl);

                    // Инициализируйте плагин knob (круговую шкалу загрузки)
                    tpl.find('input').knob();

                    //Слушайте щелчки по иконке отмены
                    tpl.find('span').click(function(){

                    if(tpl.hasClass('working')){
                        jqXHR.abort();
                        tpl.fadeOut(function(){
                            tpl.remove();
                        });
                    }else{
                        alert('Удалить?');
                    }
             });

                // Автоматически выгружайте файл, как только он добавляется в очередь
                var jqXHR = data.submit();
        },

        progress: function(e, data){

            // Подсчитывайте процент выполнения выгрузки
            var progress = parseInt(data.loaded / data.total * 100, 10);

            // Обновите скрытый input и запустите изменение
            // для того, чтобы плагин jQuery knob знал, что нужно обновить круговую шкалу
            data.context.find('input').val(progress).change();

            if(progress == 100){
//                data.context.removeClass('working');
                data.context.remove();
            }
        },

        fail:function(e, data){
            // Что-то пошло не так!
            data.context.addClass('error');
        },
        
         done: function(e, data){
             var result = jQuery.parseJSON(data.jqXHR.responseText);
            var block = $('#append-img div.img-input-text:first');
            block.find('a.del-photo').attr('href', '/admin/gallery/deletephoto/'+result.id);
            block.find('img').attr('src', '/imagefly/w400-h400-c/media/img/gallery/'+result.name);
            block.find('input[type=text]').attr('id', 'input-text-'+result.id).val('');
            block.find('input[type=submit]').attr('data-id', result.id);
             $('#append-img').append($(block));
             
             block.find('.del-photo').on('click', _this.delPhoto);
            block.find('.save-text').on('click', _this.saveText);
            console.log(result.name);
            console.log('===== отображаем картинку =====');
        }

    });

    // Предотвратите действие по умолчанию, когда файл отпускается в окне
    $(document).on('drop dragover', function (e) {
        e.preventDefault();
    });
        };
        _this.saveText = function(){
            var id  =$(this).attr('data-id');
            var text  = $('#input-text-'+id).val();
             $.post('/admin/gallery/uploadtext/'+id,{'text':text}, function(data){
                var result = jQuery.parseJSON(data);
                if(result.save){
                    alert(result.save);
                }else if(result.error){
                    alert(result.error);
                }
            });
        }
        _this.delPhoto = function(){
            var obj = $(this);
            if(confirm($(this).attr('data-text'))){
                $.post($(this).attr('href'),{}, function(data){
                    var result = jQuery.parseJSON(data);
                    if(result.del){
                        $(obj).parent('.img-input-text').remove();
                        alert('Удалено');
                    }else if(result.error){
                        alert(result.error);
                    }
                });
                        return false;
            }
        }
    _this.init = function(){
        _this.loadImg();
        $('.photo-text-change').on('change', function(){
            if(confirm('Сохранить изменения?')){}else{
//                document.location.href='';
            }
        });
        $('.delete').on('click', function(){
            if(confirm($(this).attr('data-text'))){}
        });
        $('.del-photo').on('click', _this.delPhoto);
        $('.save-text').on('click', _this.saveText);
    }
}

$(document).ready(function() {
    plantator.gallery = new Gallery();
    plantator.gallery.init();
})
    // Helper function that formats the file sizes
    
    function formatFileSize(bytes) {
        if (typeof bytes !== 'number') {
            return '';
        }

        if (bytes >= 1000000000) {
            return (bytes / 1000000000).toFixed(2) + ' GB';
        }

        if (bytes >= 1000000) {
            return (bytes / 1000000).toFixed(2) + ' MB';
        }

        return (bytes / 1000).toFixed(2) + ' KB';
    }
