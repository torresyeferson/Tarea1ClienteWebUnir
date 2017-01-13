/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$(function(){
    
  var SliderModule = (function(){
      var pb = {};
      pb.el = $('#slider');
      pb.items = {
          panel: pb.el.find('li')
      }
      // variables que se necesitan
      var SliderInterval,
      currentSlider=0,
      nextSlider=1,
      lengthSlider = pb.items.panel.length;
      //inicialización
      pb.init = function(settings){
          this.settings = settings || {duration: 8000}
          var salida='';
          //se activa el Slider
          SliderInit();
            for (var i = 0; i < lengthSlider; i++) {
                if (i == 0) {
                    salida += '<li class="active"></li>';
                }else{
                    salida += '<li></li>'
                }
            }
          //controles autogenerados del Slider
          $('#slider-controls').html(salida).on('click','li',function(e){
             var $this=$(this);
             if(currentSlider !== $this.index()){
                 changePanel($this.index());
             };
          });
          
      }
      var SliderInit = function (){
          SliderInterval =setInterval(pb.startSlider,pb.settings.duration);
      }
      
      pb.startSlider=function (){
          var panels = pb.items.panel;
          controls = $('#slider-controls li');
          if(nextSlider >= lengthSlider){
              nextSlider=0;
              currentSlider=lengthSlider-1;
          }
          //Efectos
          controls.removeClass('active').eq(nextSlider).addClass('active');
          panels.eq(currentSlider).fadeOut('slow');
           panels.eq(nextSlider).fadeIn('slow');         
          // se actualiza los datos
          currentSlider= nextSlider;
          nextSlider += 1;
      }
      
      // funcion para los controles del slider
      var changePanel=function (id){
          clearInterval(SliderInterval);
          var panels = pb.items.panel;
          controls = $('#slider-controls li');
          //comprobamos el id
          if(id>=lengthSlider){
              id=0;
          }else if(id<0){
              id=lengthSlider-1;
          }
          
           //Efectos
           controls.removeClass('active').eq(id).addClass('active');
          panels.eq(currentSlider).fadeOut('slow');
           panels.eq(id).fadeIn('slow');   
          //actualizar datos
          currentSlider=id;
          nextSlider=id+1;
          //Reactivar Slider
          SliderInit();
      }
      return pb;
      
  }());
  SliderModule.init({duration:3000});
});
