function delete_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menghapus produk ini ?"))
	{;
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

function tolak_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menolak produk ini ?"))
	{
		$.ajax({
			url: 'tolak_produk',
			type: 'POST',
			data: {id_produk:id_produk},
			success: function(){
						alert('Tolak produk berhasil');
						location.reload();
					},
			error: function(){
						alert('Tolak produk gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal ditolak");
	}
}

function setuju_produk_ajax(id_produk)
{
	if (confirm("Anda yakin ingin menyetujui produk ini ?"))
	{
		$.ajax({
			url: 'setuju_produk',
			type: 'POST',
			data: {id_produk:id_produk},
			success: function(){
						alert('Setuju produk berhasil');
						location.reload();
					},
			error: function(){
						alert('Setuju produk gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal disetujui");
	}
}

function delete_wow_ajax(id_wow)
{
	if (confirm("Anda yakin ingin menghapus posting Wow ini ?"))
	{
		$.ajax({
			url: 'KelolaWow/delete_wow',
			type: 'POST',
			data: {id_wow:id_wow},
			success: function(){
						alert('Delete posting Wow berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete posting Wow gagal');
					}
		});
	}
	else
	{
		alert(id_produk + "Gagal dihapus");
	}
}