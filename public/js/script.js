$(document).ready(function () {
    $('body').on('click','#deletenews',function () {
        var attrib = $(this).attr('name');
        // alert(attrib);
        var accepting = confirm("Вы действительно хотите удалить эту запись?");
        if (accepting == true){
            $("tr#"+attrib).remove();
        $.post("apanel",{'deletenews': attrib}).done(function (result) {
        });
        }
    })
})