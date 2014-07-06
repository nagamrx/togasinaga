@extends('layouts.master')

@section('content')
@include('layouts.guest_nav')

<div class="row">
	<div class="col-md-12">
	<p>Domain ini berada dibawah pengelolaan Dewan Pimpinan Wilayah Parsadaan Pomparan Toga Sinaga dohot Boruna (DPW PPTSB) Propinsi Riau, didedikasikan untuk mendukung program kerja PPTSB di seluruh Dunia dan untuk kepentingan seluruh Pomparan Toga Sinaga</p>		
	</div>
</div>
<div class="row">
	<div class="col-md-6">
		Ketua DPW PPTSB Propinsi Riau : Singal Sinaga
	</div>
	<div class="col-md-6">
		Web Administrator : Manumpak Sinaga, SE
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
		<p>Ada masukan? silahkan kirimkan pesan kepada kami</p>
	</div>

	<div class="col-sm-12">
	{{Form::open(array('url' => 'guest/sendcontactmessage','method'=>'post','id'=>'form_contact_message'))}}
		<div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Nama </label>
				<div class="col-sm-6">
					{{Form::text('sender_name',null,array(
							'id'=> 'sender_name'
					))}}
				</div>
				<br><label id="error_sender_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('sender_name')}}</label>
        </div>
        <div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Email </label>
				<div class="col-sm-6">
					{{Form::text('sender_email',null,array(
							'id'=> 'sender_email'
					))}}
				</div>		
				<br><label id="error_sender_email" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('sender_email')}}</label>
        </div>
        <div class="form-group">
			<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Content </label>
				<div class="col-sm-6">
					{{Form::textarea('content',null,array(
							'id'=> 'content'
					))}}
					{{Form::hidden('status',0,array(
		        		'id'=>'status'
		        	))}}
				</div>
				<br><label id="error_content" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('content')}}</label>
        </div>
        
		<div class="form-group">
                            <div class="col-md-offset-3 col-md-9">
                                {{Form::submit('Simpan', array('class'=>'btn btn-info'))}}

                                <a href="/admin/user/">
                                    <button class="btn">
                                        <i class="icon-undo bigger-110"></i>
                                        Kembali
                                    </button>
                                </a>
                            </div>
                            
        </div>
         {{Form::close()}}
    </div>
</div>

@stop

@section('page_script')
<script>
        /*tinymce.init({
        	selector:'textarea',
        	plugins: [
			    "advlist autolink lists link image charmap print preview anchor",
			    "searchreplace visualblocks code fullscreen",
			    "insertdatetime media table contextmenu paste jbimages"
			  ],
				
			  // ===========================================
			  // PUT PLUGIN'S BUTTON on the toolbar
			  // ===========================================
				
			  toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link jbimages",
				
			  // ===========================================
			  // SET RELATIVE_URLS to FALSE (This is required for images to display properly)
			  // ===========================================
				
			  relative_urls: false,
        });*/
</script>
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
 
    $( '#form_contact_message' ).on( 'submit', function() {
        //.....
        //show some spinner etc to indicate operation in progress
        //.....
        
        $.post(
            $( this ).prop( 'action' ),
            {
                "sender_name": document.getElementById('sender_name').value,
                "sender_email": document.getElementById('sender_email').value,
                "content": document.getElementById('content').value,
                "status": document.getElementById('status').value
            },
            function( data ) {
                if(data['status']=='success'){
                	var url = "{{url('guest/aboutus')}}";
                	window.location.replace(url);
                }
                else{
                	var strName,strValue;
                	for(strName in data['msg']){
                		strValue = data['msg'][strName][0];
                		console.log(strValue);
                		document.getElementById("error_".concat(strName)).innerHTML = strValue;
                	}
                }
            },
            'json'
        );
        //.....
        //do anything else you might want to do
        //.....
 
        //prevent the form from actually submitting in browser
 		
        
        return false;
    } );
 
} );
</script>
@stop
