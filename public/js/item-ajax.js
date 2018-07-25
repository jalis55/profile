$(document).ready(function() {
    $("#add").click(function() {

        $.ajax({
            type: 'post',
            url: '/addSkill',
            data: {
                '_token': $('input[name=_token]').val(),
                'skill_name': $('input[name=skill_name]').val(),
                'skill_rate':$('input[name=skill_rate]').val()
            },
            success: function(data) {
                if ((data.errors)){
                  $('.error').removeClass('hidden');
                    $('.error').text(data.errors.name);
                }
                else {
                    $('.error').addClass('hidden');
                    $('#table').append("<tr class='item" + data.id + "'><td>" + data.id + "</td><td>" + data.name + "</td><td><button class='edit-modal btn btn-info' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-edit'></span> Edit</button> <button class='delete-modal btn btn-danger' data-id='" + data.id + "' data-name='" + data.name + "'><span class='glyphicon glyphicon-trash'></span> Delete</button></td></tr>");
                }
            },

        });
        $('#name').val('');
    });
});