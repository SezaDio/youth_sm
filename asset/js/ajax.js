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
			url: 'delete_wow',
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

function delete_coming_ajax(id_coming)
{
	if (confirm("Anda yakin ingin menghapus Coming Soon ini ?"))
	{;
		$.ajax({
			type: 'POST',
			data: {id_coming:id_coming},
			success: function(){
						alert('Delete Coming Soon berhasil');
						location.reload();
					},
			error: function(){
						alert('Delete Coming Soon gagal');
					}
		});
	}
	else
	{
		alert(id_coming + "Gagal dihapus");
	}
}

function tolak_coming_ajax(id_coming)
{
	if (confirm("Anda yakin ingin menolak Coming Soon ini ?"))
	{
		$.ajax({
			url: 'tolak_coming',
			type: 'POST',
			data: {id_coming:id_coming},
			success: function(){
						alert('Tolak Coming SOon berhasil');
						location.reload();
					},
			error: function(){
						alert('Tolak Coming Soon gagal');
					}
		});
	}
	else
	{
		alert(id_coming + "Gagal ditolak");
	}
}

function setuju_coming_ajax(id_coming)
{
	if (confirm("Anda yakin ingin menyetujui Coming Soon ini ?"))
	{
		$.ajax({
			url: 'setuju_coming',
			type: 'POST',
			data: {id_coming:id_coming},
			success: function(){
						alert('Setuju Coming Soon berhasil');
						location.reload();
					},
			error: function(){
						alert('Setuju Coming Soon gagal');
					}
		});
	}
	else
	{
		alert(id_coming + "Gagal disetujui");
	}
}