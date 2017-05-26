function delete_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menghapus produk ini ?"))
	{
		$.ajax({
			url: 'delete_produk',
			type: 'POST',
			data: {id_produk:id_produk},
			success: function(){
						alert('Delete produk berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete produk gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal dihapus");
	}
}