@extends ('layouts.admin')

@section('content')
	<h2>Create New Contact Message</h2>
	<div class="row">
		<div class="col-sm-12">
			{{Form::model($contactmessage, array('class'=>'form-horizontal','id'=>'form_contactmessage'))}}
	        <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sender Name </label>
					<div class="col-sm-9">
						{{Form::text('sender_name',null,array(
							'id'=> 'sender_name'
					))}}
					</div>
					<br><label id="error_sender_name" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('sender_name')}}</label>
	        </div>
	        <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Sender Email </label>
					<div class="col-sm-9">
						{{Form::text('sender_email',null,array(
							'id'=> 'sender_email'
					))}}
					</div>
					<br><label id="error_sender_email" class="col-sm-3 control-label no-padding-right" for="form-field-1" style="color:red;">{{$errors->first('sender_email')}}</label>
	        </div>
	        <div class="form-group">
				<label class="col-sm-3 control-label no-padding-right" for="form-field-1"> Content </label>
					<div class="col-sm-9">
						{{Form::textarea('content',null,array(
							'id'=> 'content'
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
<script type="text/javascript">
jQuery( document ).ready( function( $ ) {
 
    $( '#form_contactmessage' ).on( 'submit', function() {
        //.....
        //show some spinner etc to indicate operation in progress
        //.....
        
        $.post(
            $( this ).prop( 'action' ),
            {
                "sender_name": document.getElementById('sender_name').value,
                "sender_email": document.getElementById('sender_email').value,
                "content": document.getElementById('content').value
            },
            function( data ) {
                if(data['status']=='success'){
                	var url = "{{url('admin/contactmessage/index')}}";
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