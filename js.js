///////функция запроса списка 
function valList(v){
    $.ajax({
        type:'POST',
        url:'check.php',
        data:{
            ofer:v
        },
        success:function(Response){
            
            if(Response!='no'){
                $('#list').html('');
                let list = JSON.parse(Response);
                $('#ofer').attr('disabled', 'true');
                $('#can_add').css('display', 'block');
                ofer_numb= v;

                //////
                for(i=0; i<list.length; i++){
                    let el = $('<div>',{
                        'class':'list_item'
                    });
                    let date = new Date(list[i].date*1000);
                    date = date.getDate()+'.'+date.getMonth()+'.'+date.getFullYear();
                    el.text('дата: '+date+' Показания:'+list[i].val)
                    $('#list').append(el);
                }
                
            }else{
                alert('нет такого счета');
            }         
        }
       })
}

///проверка Input
$('#ofer').on('input',()=>{
   let val = $('#ofer').val();
   
    if (val.match(/[^0-9]/g)) {
        $('#ofer').val(val.replace(/[^0-9]/g, ''));
        }else{
            console.log('no');
        }
});
$('#new_val').on('input',()=>{
   let val = $('#new_val').val();
   
    if (val.match(/[^0-9]/g)) {
        $('#new_val').val(val.replace(/[^0-9]/g, ''));
        }else{
            console.log('no');
        }
});
let ofer_numb;
///////проверка номера договора
$('#ofer_btn').on('click', (e)=>{
    e.preventDefault();
    let val = $('#ofer').val();
    
    if(!val==''){
       
        valList(val);


    }else{
        alert('сначала введите номер');
    }
})
////////////////внесение показаний
$('#add_new_val').on('click', (e)=>{
    e.preventDefault();
    let val = $('#new_val').val();
    
    if(!val==''){
       $.ajax({
        type:'POST',
        url:'add.php',
        data:{
            ofer:ofer_numb,
            val:val
        },
        success:function(Response){
            console.log(Response);
            if(Response=='ok'){
                // alert('Добавленно');
                valList(ofer_numb);
            }else{
                alert('текущие показания не могут быть меньше предыдущих');
            }
        }
       })
    }else{
        alert('сначала введите показатель');
    }
})
//////////////////получение истории показаний