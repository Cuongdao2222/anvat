@extends('frontend.layouts.apps')
@section('content') 

<div class="prepend">
	

</div>
@push('js')

<script type="text/javascript">

	$( document ).ready(function() {
	    favourite();
	});


	
	function favourite() {

		datas =  localStorage.getItem('like')??[];

      	$.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $.ajax({
            type: 'POST',
            url: "{{ route('get favourite product') }}",
            data: {
               	data:datas
                   
            },
           
            success: function(result){


                $('.prepend').prepend(result);
            }
        });
        
    }

    
</script>
@endpush

@endsection
