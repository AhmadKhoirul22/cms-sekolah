<script src="<?= base_url('assets/mazer/dist/') ?>assets/vendors/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist/') ?>assets/js/bootstrap.bundle.min.js"></script>

    <script src="<?= base_url('assets/mazer/dist/') ?>assets/vendors/simple-datatables/simple-datatables.js"></script>
    <script>
        // Simple Datatable
        let table1 = document.querySelector('#table1');
        let dataTable = new simpleDatatables.DataTable(table1);
    </script>

    <script src="<?= base_url('assets/mazer/dist/') ?>assets/js/main.js"></script>
	<script>
		$('#autohide').delay('slow').slideDown('slow').delay('5000').slideUp('600');
	</script>
	<!--kode editor -->
	<script src="<?= base_url('assets/mazer/dist/') ?>assets/vendors/tinymce/tinymce.min.js"></script>
    <script src="<?= base_url('assets/mazer/dist/') ?>assets/vendors/tinymce/plugins/code/plugin.min.js"></script>
    <script>
        tinymce.init({ selector: '#textarea' });
        tinymce.init({ selector: '#dark', toolbar: 'undo redo styleselect bold italic alignleft aligncenter alignright bullist numlist outdent indent code', plugins: 'code' });
    </script>
