function changePropertyUser(userId,type,text){

    $.ajax({
        type: 'POST',
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            userId: userId,
            propertyName: type,
            propertyText: text,
        },
        url: '../api/changepropertyuser',
        dataType: 'json',
        async: false,

        success: function(result){
            openSwal('Вдалось!','Ви успішно змінили свої дані.');
        },

        error: function(){
            openSwal('Вдалось!','Ви успішно змінили свої дані.');
        }
    });
}
