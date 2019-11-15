function getRefBillStatuss() {
    $.ajax({
        type: 'GET',
        url: urlToRestApi,
        dataType: "json",
        success:
            function (refbillStatuss) {
                var refBillStatusTable = $('#refBillStatusData');
                refBillStatusTable.empty();
                var count = 1;
                $.each(refbillStatuss.data, function (key, value)
                {
                    var editDeleteButtons = '</td><td>' +
                        '<a href="javascript:void(0);" class="glyphicon glyphicon-edit" onclick="editRefBillStatus(' + value.id + ')"></a>' +
                        '<a href="javascript:void(0);" class="glyphicon glyphicon-trash" onclick="return confirm(\'Are you sure to delete data?\') ? refBillStatusAction(\'delete\', ' + value.id + ') : false;"></a>' +
                        '</td></tr>';
                    refBillStatusTable.append('<tr><td>' + count + '</td><td>' + value.name + '</td><td>' + value.description + editDeleteButtons);
                    count++;
                });

            }
    });
}

/* Function takes a jquery form
 and converts it to a JSON dictionary */
function convertFormToJSON(form) {
    var array = $(form).serializeArray();
    var json = {};

    $.each(array, function () {
        json[this.name] = this.value || '';
    });

    return json;
}

/*
 $('#refBillStatusAddForm').submit(function (e) {
 e.preventDefault();
 var data = convertFormToJSON($(this));
 alert(data);
 console.log(data);
 });
 */

function refBillStatusAction(type, id) {
    id = (typeof id == "undefined") ? '' : id;
    var statusArr = {add: "added", edit: "updated", delete: "deleted"};
    var requestType = '';
    var refBillStatusData = '';
    var ajaxUrl = urlToRestApi;
    if (type == 'add') {
        requestType = 'POST';
        refBillStatusData = convertFormToJSON($("#addForm").find('.form'));
    } else if (type == 'edit') {
        requestType = 'PUT';
        refBillStatusData = convertFormToJSON($("#editForm").find('.form'));
    } else {
        requestType = 'DELETE';
        ajaxUrl = ajaxUrl + "/" + id;
    }
    $.ajax({
        type: requestType,
        url: ajaxUrl,
        dataType: "json",
        contentType: "application/json; charset=utf-8",
        data: JSON.stringify(refBillStatusData),
        success: function (msg) {
            if (msg) {
                alert('RefBillStatus data has been ' + statusArr[type] + ' successfully.');
                getRefBillStatuss();
                $('.form')[0].reset();
                $('.formData').slideUp();
            } else {
                alert('Some problem occurred, please try again.');
            }
        }
    });
}

/*** à déboguer ... ***/
function editRefBillStatus(id) {
    $.ajax({
        type: 'GET',
        dataType: 'JSON',
        url: urlToRestApi+ "/" + id,
        success: function (data) {
            $('#idEdit').val(data.data.id);
            $('#bill_status_descriptionEdit').val(data.data.name);

        }
    });
}
