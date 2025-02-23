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
        // tinymce.init({
        // 	selector: '#textarea'
        // });
        tinymce.init({
			selector: '#textarea', // Targetkan ID textarea
				plugins: [
					'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
					'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
					'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
				],
				toolbar: 'undo redo | blocks | bold italic backcolor | ' +
				'alignleft aligncenter alignright alignjustify | ' +
				'bullist numlist outdent indent | removeformat | help',
				toolbar_mode: 'floating', // Toolbar mengambang
				height: 300 // Tinggi editor
        });
		tinymce.init({
			selector: '#textareaEdit', // Targetkan ID textarea
				plugins: [
					'advlist', 'autolink', 'lists', 'link', 'image', 'charmap', 'preview',
					'anchor', 'searchreplace', 'visualblocks', 'fullscreen',
					'insertdatetime', 'media', 'table', 'code', 'help', 'wordcount'
				],
				toolbar: 'undo redo | blocks | bold italic backcolor | ' +
				'alignleft aligncenter alignright alignjustify | ' +
				'bullist numlist outdent indent | removeformat | help',
				toolbar_mode: 'floating', // Toolbar mengambang
				height: 300 // Tinggi editor
        });
    </script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        // Pilih semua tombol dengan class "delete-button"
        const deleteButtons = document.querySelectorAll('.delete-button');

        deleteButtons.forEach(button => {
            button.addEventListener('click', function (e) {
                e.preventDefault(); // Mencegah tautan langsung dijalankan
                const href = this.getAttribute('data-href'); // Ambil URL dari atribut data-href

                Swal.fire({
                    title: 'Yakin ingin menghapus?',
                    text: "Data yang dihapus tidak dapat dikembalikan!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, hapus!',
                    cancelButtonText: 'Batal'
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Redirect ke URL jika dikonfirmasi
                        window.location.href = href;
                    }
                });
            });
        });
    });
</script>
