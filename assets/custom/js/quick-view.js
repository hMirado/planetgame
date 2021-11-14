$(document).ready(function () {
    $(document).on("click",".show-qv",function(e){
        e.preventDefault();

        // remove value
        $("#qv-name").text('');
        $("#qv-description").text('');
        $("#qv-price").text('');
        $("#qv-img").empty();
        $("#id-product").val();
        $("#name-product").val();

        var id = $(this).data("id");
        var name = $(this).data("name");
        var description = $(this).data("description");
        var price = $(this).data("price");
        var image = $(this).data("image");
        var stock = $(this).data("stock");

        var imgHtml = "<img src='" + image + "' alt='IMG-PRODUCT'>";

        $("#qv-name").text(name.toUpperCase());
        $("#qv-description").text(description);
        $("#qv-price").text(formatMillier(price) + ' MGA');
        $("#qv-img").append(imgHtml);

        $("#id-product").val(id);
        $("#name-product").val(name);
    });

    function formatMillier(nombre) {
        nombre += '';
        var sep = ' ';
        var reg = /(\d+)(\d{3})/;
        while (reg.test(nombre)) {
            nombre = nombre.replace(reg, '$1' + sep + '$2');
        }
        return nombre;
    }
});