<script src="https://cdn.ckeditor.com/ckeditor5/11.1.1/classic/ckeditor.js"></script>
<script>
			ClassicEditor
				.create( document.querySelector( '#messageform' ) )
				.then( editor => {
					console.log( editor );
				} )
				.catch( error => {
					console.error( error );
				} );
		</script>
</body>
</html>