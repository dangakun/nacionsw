<!-- Bootstrap core JavaScript-->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Core plugin JavaScript-->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="js/sb-admin-2.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl)
        });

		$("#transportModal").on('shown.bs.modal', function(e){
			$('#modalData').hide();
			$('#loading_ajax').show();
			var tclass = $(e.relatedTarget).data('tclass');
			var number = $(e.relatedTarget).data('number');
			var urlAjax = "Home/TransportInfo/"+tclass+"/"+number;
			$.ajax({
				method: "POST",
				url: urlAjax,
				dataType: "json"
			})
			.done(function( data ) {
				var subtype = "";
				switch (tclass) {
					case 'vehicles':
						subtype = data.info.vehicle_class;
					break;
					case 'starships':
						subtype = data.info.starship_class;
					break;
				}
				$('#transportSubtype').html(subtype);
				$('#transportModalLabel').html(data.info.name);
				$('#transportModel').html(data.info.model);
				$('#transportManufacturer').html(data.info.manufacturer);
				$('#transportCount').html(data.count);
				$('#modalOriginalDataId').val(data.id);
				$('#modalOriginalDataCount').val(data.count);
				$('#loading_ajax').hide();
				$('#modalData').show();
			});
		});

		$('#acceptTransportModal').on('click',function(){
			var nm = $('#transportModalLabel').html();
			var tid = $('#modalOriginalDataId').val();
			var originalCount = $('#modalOriginalDataCount').val();
			var newCount = $('#newCount').val();
			var operation = $('input[name=incrementreduce]:checked').val();
			var value = (operation == 'increment') ? (Number(originalCount)+Number(newCount)) : (Number(originalCount)-Number(newCount)) ;
			var r = confirm('Are you sure you want to '+operation+' the count of '+nm+' from: '+originalCount+' to: '+value+' ?');
			if(r == true){
				ChangeCount(tid,newCount,operation);
			}
		});

		function ChangeCount(tid,count,operation){
			$.ajax({
				method: "POST",
				url: 'Home/TransportCount/'+tid+'/'+count+'/'+operation,
				dataType: "json"
			})
			.done(function( data ) {
				$('#transport_'+tid).html(data.count);
				$("#transportModal").modal('hide');
			});
		}

    });
</script>