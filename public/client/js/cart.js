$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});
$(document).ready(function(){
	$('.qty').blur(function(){
        let rowid = $(this).data('id');
		$.ajax({
			url : 'cart/'+rowid,
			type : 'put',
			dataType : 'json',
			data : {
				qty : $(this).val(),
			},
			success : function(data){
                // alert('ok')
                swal('Cập nhật thành công', "", "success");
				location.reload();
				
			}
		});
    });

    
    $('.delete').click(function(e){
        e.preventDefault();
        let rowid = $(this).data('id');
        $.ajax({
            url : 'cart/'+rowid,
            type : 'delete',
            dataType : 'json',
            success : function(data){
                swal('Xóa thành công', "", "success");
                location.reload();
            }
        });
    });
});