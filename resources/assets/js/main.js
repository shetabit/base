Vue.config.devtools = true;


Vue.component('portlet',{
  template: '#portlet',
  props: ['id','reload-icon']
});

Vue.component('panel',{
  template: '#panel',
  props: ['id','type']
});

Vue.component('modal-full',{
  template: '#modal-full',
  props: ['id']
});

Vue.component('modal',{
  template: '#modal',
  props: ['id']
});

Vue.component('loading',{
  template: '#loading',
});

Vue.component('productImg',{
  template: '#product-img',
  props: ['src']
});

Vue.component('productStatus',{
  template: '#product-status',
  props: ['status']
});

AppMethods.closeModal = function(){
  $('.modal').modal('hide');
};

AppMethods.showMessage = function(data){
  if(typeof data.message != 'undefined'){
    swal(data.message);
    if(data.status == 1){
      $('.modal').modal('hide');
    }
  }
}

AppMethods.successNotification = function(data) {
  if(typeof data.message != 'undefined'){
    show_notification('success', data.message);
    $('.modal').modal('hide');
  }
}


AppMethods.openModal = function(id, hide_others) {
    if (hide_others != true) {
      $('.modal').modal('hide');
    }
    $('#' + id).modal('show');
}

AppMethods.showItem = function(e)
{
    var event = $(e.target);
    var event_name = event.attr('name');
    var index = $('select#' + event_name).val();

    if (index != '') {
        var item = App.pages[event_name].items[index];
        Vue.set(item, 'index', index);
        Vue.set(App.pages[event_name], 'edit', item);
        refresh_selectpicker();
    }
}

AppMethods.deleteItem = function(origin, text, index) {
    index = index == undefined ? origin.edit.index : index;
    var item = origin.items[index];
    var path = origin.path ? origin.path : origin.deletePath;

    swal({
        title: "حذف شود؟",
        type: "warning",
        text: text,
        showCancelButton: true,
        confirmButtonClass: 'btn-warning',
        confirmButtonText: "بله حذف کن",
        cancelButtonText: "خیر",
        disableButtonsOnConfirm: true,
        },
        function () {
            $.post(path + '/' + item.id, {_method:"DELETE", _token: App.token}, function(response) {
                if(response.message) {
                    AppMethods.closeModal();
                    show_notification('success', response.message);
                    Vue.delete(origin.items, index);
                    Vue.set(origin, 'edit', {});
                    refresh_selectpicker();
                }
            }).fail(function(xhr, status, error){
                swal(xhr.responseJSON.message);
            });
        }
    );
}

AppMethods.newItem = function(response, origin) {
    origin.items.push(response.data);
    show_notification('success', response.message);
    refresh_selectpicker();
    $('.modal').modal('hide');
}


const VueInstance = new Vue({
  el: '#app',
  data: App,
  methods: AppMethods
});


$(document).ready(function(){

  $('body').on('submit','.js-submit-form',function() {
    var formData = new FormData($(this)[0]);
    var this_obj = $(this);
    var empty_inputs = $(this).find('[data-required]').filter(function() {
      return $(this).val() == null || $(this).val() == '';
    });

    if(empty_inputs.length == 0){
      if($(this).hasClass('auto-submit')){
        return true;
      }
      else{
        $(this).find('.text-danger').remove();
        $.ajax({
          'url': $(this).attr('action'),
          'data': formData,
          'type': $(this).attr('method'),
          'processData': false,
          'cache': false,
          'contentType': false,
          'success': function(data) {
                if(typeof $(this_obj).attr('data-on-success') != 'undefined'){
                    var callBackFunction = $(this_obj).attr('data-on-success');
                    VueInstance[callBackFunction](data);
                }
                else if(data.message){
                    $(this_obj).prepend('<div class="success alert alert-success form-group alert-dismissable">' + data.message + '</div>');
                }

            if(typeof $(this_obj).attr('data-clear-onsuccess') != 'undefined'){
              $(this_obj).find('input:not([name="_token"]):not([name="_method"]):not([type="checkbox"]), textarea').val('');
            }
          },
          'beforeSend': function(){
            $(this_obj).find('.errors,.success').remove();
            $(this_obj).find('input,button,select,textarea').prop('disabled',true);
          },
          'complete': function(){
            $(this_obj).find('input,button,select,textarea').prop('disabled',false);
          },
          'error': function(data){
            errors = data.responseJSON.errors;
            if(errors){
              $(this_obj).prepend('<div class="errors alert alert-danger form-group alert-dismissable"><ul></ul></div>');
              $.each(errors,function(k){
                for(var i = 0; i < errors[k].length;i++){
                  $(this_obj).find('.errors ul').append('<li>'+errors[k][i]+'</li>');
                }
              });
            }
            else {
              if(data.responseJSON.error){
                show_notification('error', data.responseJSON.error);
              }
              else show_notification('error', 'An error has been occured. Please check inputs');
            }
          }
        });
      }
    }
    else{
      $(empty_inputs).each(function(){
        if($(this).next('p.text-danger').length == 0){
          $(this).after('<p class="small text-danger">لطفا این ورودی را تکمیل کنید</p>');
        }
      });
    }
    return false;
  });


});


function numberFormat(obj, event){
  if(typeof event != 'undefined'){
    if(event.which >= 37 && event.which <= 40) return;
  }
  $(obj).val(function(index, value) {
    return value
    .replace(/\D/g, "")
    .replace(/\B(?=(\d{3})+(?!\d))/g, ",")
    ;
  });
}

$('body').on('keyup','input.number-format',function(event){
  numberFormat($(this),event);
});

numberFormat($('input.number-format'));



function show_notification(type, message){
  return $.Notification.notify(type, 'bottom left', '', message);
}


function refresh_selectpicker() {
    setTimeout(function(){
        $('.selectpicker').selectpicker('refresh');
    }, 100);
}

function reset_selectpicker(id) {
  $('#' + id).val('');
  refresh_selectpicker();
}

var clearForm = function(form) {
  $(form).find('input:not([name="_token"]), textarea').val('');
}

function resetTagsinput() {
  $(function() {
    $("input[data-role=tagsinput], select[multiple][data-role=tagsinput]").tagsinput();
  });
}

function number_format(num) {
  if(num != null){
    return (parseInt(num) < 0 ? '-' : '') + num.toString().replace(/\D/g, "").replace(/\B(?=(\d{3})+(?!\d))/g, ",");
  }
}

var clone = function(obj) {
  return JSON.parse( JSON.stringify( obj ) );
}

var random_number = function() {
  return (Math.floor(Math.random() * 1000000) + 1).toString()
}