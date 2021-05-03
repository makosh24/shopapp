function init() {
    $.post(
        "core.php",
        {
            "action" : "init"
        },
        showGoods
    );
}

function showGoods(data) {
    data = JSON.parse(data);
    console.log(data);
    var out='<select>';
    out +='<option data-id="0">Новый товар</option>';
    for (var id in data) {
        out +=`<option data-id="${id}">${data[id].name}</option>`;
    }
    out +='</select>';
    $('.goods-out').html(out);
    $('.goods-out select').on('change', selectGoods);
}

function selectGoods() {
    var id = $('.goods-out select option:selected').attr('data-id');
    console.log(id);
        $.post(
        "core.php",
        {
            "action" : "selectOneGoods",
            "gid" : id
        },
        function(data){
            data = JSON.parse(data);
            $('#gname').val(data.name);
            $('#gcost').val(data.cost);
            $('#gdescr').val(data.description);
            $('#gimg').val(data.img);
            $('#gid').val(data.id);
        }
    );
}

$(document).ready(function () {
   init();
});