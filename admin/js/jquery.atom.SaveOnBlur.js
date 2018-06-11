$(document).ready(function() {

	// Auto Save Field:
	$('.blur-save').on('focus', function(){
	  $(this).addClass('input-focus');
	});

	$('.blur-save').on('blur', function(){

	  var id = $(this).attr("data-id"); // Unique identifier for the record we wish to UPDATE
	  var label = $(this).attr("data-label"); // Label used for the notification.
	  var db = $(this).attr("data-db"); // Database table-field string.
	  var value = $(this).val(); // New value for the field.

	  $(this).removeClass('input-focus');

	  	$.get( "ajax/blur-save.php?id="+id+"&value="+value+"&db="+db+"&action=save", function( html ) {

		    var status = html; // Save the HTML response (should be a numeric value)

		    if(status == 1) { // If the save was a success...

				$('#alert').html(label + ' has been updated'); // Display success message and label.
				$('#alert').addClass('alert-success'); // Set the class to Bootstrap success.

		   	} // END if status

		}); // END .get

	}); // END .auto-save

});

/*
<footer>
    <p>
        &copy;
        <span id="copyright">
            <script>document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))</script>
        </span>
        | MicroCMS 1 is created by <a href="https://about.me/YashasviJaiswal" target="_blank">Yashasvi Jaiswal</a>.
    </p>
</footer>
*/
