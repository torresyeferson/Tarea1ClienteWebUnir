/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function () {

    var SliderModule = (function () {
        var pb = {};
        pb.el = $('#slider');
        pb.items = {
            panel: pb.el.find('li')
        }
        // variables que se necesitan
        var SliderInterval,
                currentSlider = 0,
                nextSlider = 1,
                lengthSlider = pb.items.panel.length;
        //inicialización
        pb.init = function (settings) {
            this.settings = settings || {duration: 8000}
            var salida = '';
            //se activa el Slider
            SliderInit();
            for (var i = 0; i < lengthSlider; i++) {
                if (i == 0) {
                    salida += '<li class="active"></li>';
                } else {
                    salida += '<li></li>'
                }
            }
            //controles autogenerados del Slider
            $('#slider-controls').html(salida).on('click', 'li', function (e) {
                var $this = $(this);
                if (currentSlider !== $this.index()) {
                    changePanel($this.index());
                }
                ;
            });

        }
        var SliderInit = function () {
            SliderInterval = setInterval(pb.startSlider, pb.settings.duration);
        }

        pb.startSlider = function () {
            var panels = pb.items.panel;
            controls = $('#slider-controls li');
            if (nextSlider >= lengthSlider) {
                nextSlider = 0;
                currentSlider = lengthSlider - 1;
            }
            //Efectos
            controls.removeClass('active').eq(nextSlider).addClass('active');
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(nextSlider).fadeIn('slow');
            // se actualiza los datos
            currentSlider = nextSlider;
            nextSlider += 1;
        }

        // funcion para los controles del slider
        var changePanel = function (id) {
            clearInterval(SliderInterval);
            var panels = pb.items.panel;
            controls = $('#slider-controls li');
            //comprobamos el id
            if (id >= lengthSlider) {
                id = 0;
            } else if (id < 0) {
                id = lengthSlider - 1;
            }

            //Efectos
            controls.removeClass('active').eq(id).addClass('active');
            panels.eq(currentSlider).fadeOut('slow');
            panels.eq(id).fadeIn('slow');
            //actualizar datos
            currentSlider = id;
            nextSlider = id + 1;
            //Reactivar Slider
            SliderInit();
        }
        return pb;

    }());
    SliderModule.init({duration: 3000});
});
// ignore this first line (its fidle mock) and it will return what ever you pass as json:... parameter... consider to change it to your ajax call
$.ajax({
    url: 'assets/js/archivo.json',
    type: "post",
    dataType: "json",
    success: function (data, textStatus, jqXHR) {
        // since we are using jQuery, you don't need to parse response
        drawTable(data);
    }
});

function drawTable(data) {
    for (var i = 0; i < data.length; i++) {
        drawRow(data[i]);
    }

}

function drawRow(rowData) {
    var row = $("<tr />");
    $("#personDataTable").append(row); //this will append tr element to table... keep its reference for a while since we will add cels into it
    row.append($("<td>" + rowData.id + "</td>"));
    row.append($("<td>" + rowData.firstName + "</td>"));
    row.append($("<td>" + rowData.lastName + "</td>"));
}
$(document).ready(function () {
    //use json and create dynamic table   
    //http://jsperf.com/table-rows-20120430/3
    var colData = ["Equipo", "Modelo","Valor","Sucursal"];
    var rowData = [["Laptop", "Toshiba I5","$850,50","Loja"],["Laptop", "Dell I5","$1000,50","Loja"],["Teclado", "Multifunción","$20,50","Loja"],["Mouse", "Genius 200","$8,50","Manta"],
    ["Audifonos", "Extratech 500","$15,50","Manta"],["PC", "Core i7 Tarjeta de Video","$998,50","Manta"],["Laptop", "HP I5 Touch","$850,50","Loja"],["Laptop", "ASUS ROGUE","$1850,50","Loja"]];
    var data = {"Cols": colData, "Rows": rowData};

    var table = $('<table/>').attr("id", "userquerytable").addClass("display").attr("cellspacing", "0").attr("width", "100%");




    var tr = $('<tr/>');
    table.append('<thead>').children('thead').append(tr);

    for (var i = 0; i < data.Cols.length; i++) {
        tr.append('<td>' + data.Cols[i] + '</td>');
    }

    for (var r = 0; r < data.Rows.length; r++) {
        var tr = $('<tr/>');
        table.append(tr);
        //loop through cols for each row...
        for (var c = 0; c < data.Cols.length; c++) {
            tr.append('<td>' + data.Rows[r][c] + '</td>');
        }
    }
    $('#tabla-container').append(table);
    $('#userquerytable').DataTable({
        responsive: true,
        paging: false,
        info: false,
        language: {
            search: "_INPUT_",
            searchPlaceholder: "Buscar"
        }
    });
});