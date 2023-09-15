import './bootstrap';
import Alpine from 'alpinejs'
import Swal from 'sweetalert2';

window.Swal = Swal;
window.Toast = Swal.mixin({
    toast: true,
    position: 'top-end',
    showConfirmButton: false,
    timer: 3000,
    timerProgressBar: true
});

window.Alpine = Alpine

Alpine.start()
