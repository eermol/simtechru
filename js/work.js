$('document').ready(function(){

    $('.send-mail input[type="file"]').bind('change', function(){
        if (this.files[0].size > 20000000){
            $('.error').addClass('visible');
            $(this).val('');
        } else {
            $('.error').removeClass('visible');
            $('.loadfile').addClass('hide');
            $('.selectedfile').addClass('visible');
            $('.deletefile').addClass('visible');
            var size = this.files[0].size / 1000000;

            $('.selectedfile').html('<img src="work/icon-file.png" alt=""> '+this.files[0].name+' <span class="filesize">('+size.toFixed(1)+' МБ)</span>');
        }
    });
    $('.deletefile').click(function(){
            $('.send-mail input[type="file"]').val('');
            $('.loadfile').removeClass('hide');
            $('.selectedfile').removeClass('visible');
            $('.selectedfile').html();
            $(this).removeClass('visible');
    });

});
