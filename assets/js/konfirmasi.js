function hapusMenu(url) {

    Swal.fire({
        title: 'Are you sure?',
        text: "Yakin hapus menu?.",
        icon: 'warning',
        showCancleButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.herf = url;
        }
    })

}

function hapusRole(url) {

    Swal.fire({
        title: 'Are you sure?',
        text: "Yakin hapus menu?.",
        icon: 'warning',
        showCancleButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.herf = url;
        }
    })
}
function hapusSubmenu(url) {

    Swal.fire({
        title: 'Are you sure?',
        text: "Yakin hapus menu?.",
        icon: 'warning',
        showCancleButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus!'
    }).then((result) => {
        if (result.value) {
            document.location.herf = url;
        }
    })
}